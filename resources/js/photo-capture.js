/**
 * Photo capture for the booking intake steps.
 *
 * The point of this file is that the image never becomes a file upload. It is
 * read in the browser, drawn onto a canvas at a sane size, re-encoded as JPEG
 * and posted as base64 JSON. PHP therefore never writes a temp file, and an
 * insurance card or driver's licence never exists on the practice's server.
 *
 * Resizing also does the patient a favour: a modern phone camera produces a
 * 4–8MB image, which is slow to upload on rural connections and gets scaled
 * down by athena anyway.
 */

const MAX_EDGE = 1600;
const QUALITY = 0.82;

function readAsImage(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();

        reader.onerror = () => reject(new Error('Could not read that file.'));
        reader.onload = () => {
            const img = new Image();
            img.onerror = () => reject(new Error('That file is not an image we can read.'));
            img.onload = () => resolve(img);
            img.src = reader.result;
        };

        reader.readAsDataURL(file);
    });
}

// Works for both an <img> and a live <video> frame -- pass the source's
// intrinsic pixel size so the camera path and the file path share one encoder.
function resizeToDataUrl(source, srcWidth, srcHeight) {
    let width = srcWidth ?? source.naturalWidth ?? source.width;
    let height = srcHeight ?? source.naturalHeight ?? source.height;

    if (width > MAX_EDGE || height > MAX_EDGE) {
        const scale = MAX_EDGE / Math.max(width, height);
        width = Math.round(width * scale);
        height = Math.round(height * scale);
    }

    const canvas = document.createElement('canvas');
    canvas.width = width;
    canvas.height = height;

    const ctx = canvas.getContext('2d');
    // White ground: a JPEG has no alpha, and a transparent PNG would otherwise
    // composite to black and lose the card entirely.
    ctx.fillStyle = '#ffffff';
    ctx.fillRect(0, 0, width, height);
    ctx.drawImage(source, 0, 0, width, height);

    return canvas.toDataURL('image/jpeg', QUALITY);
}

function cameraSupported() {
    return !!(navigator.mediaDevices && navigator.mediaDevices.getUserMedia);
}

function csrfToken() {
    const meta = document.querySelector('meta[name="csrf-token"]');

    return meta ? meta.getAttribute('content') : '';
}

function setStatus(root, message, state) {
    const status = root.querySelector('.photo-capture__status');
    if (!status) return;

    status.textContent = message;
    root.classList.toggle('is-error', state === 'error');
    root.classList.toggle('is-busy', state === 'busy');
    root.classList.toggle('is-done', state === 'done');
}

async function upload(root, dataUrl) {
    const endpoint = root.dataset.endpoint;
    let extra = {};

    try {
        extra = JSON.parse(root.dataset.extra || '{}');
    } catch (e) {
        extra = {};
    }

    const response = await fetch(endpoint, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            Accept: 'application/json',
            'X-CSRF-TOKEN': csrfToken(),
            'X-Requested-With': 'XMLHttpRequest',
        },
        body: JSON.stringify({ ...extra, image: dataUrl }),
    });

    if (!response.ok) {
        let message = 'That did not save. Please try again.';

        try {
            const body = await response.json();
            if (body && body.message) message = body.message;
        } catch (e) {
            // Non-JSON error body; the default message is more useful anyway.
        }

        throw new Error(message);
    }

    return response.json();
}

// Resize the captured image, show it in the tile, and post it. Shared by the
// file-upload path and the live-camera path so both behave identically.
async function processAndUpload(root, source, srcWidth, srcHeight) {
    const preview = root.querySelector('.photo-capture__preview');
    const empty = root.querySelector('.photo-capture__empty');
    const pick = root.querySelector('.photo-capture__pick');

    const dataUrl = resizeToDataUrl(source, srcWidth, srcHeight);

    if (preview) {
        preview.src = dataUrl;
        preview.hidden = false;
    }
    if (empty) empty.hidden = true;

    setStatus(root, 'Uploading…', 'busy');
    await upload(root, dataUrl);

    setStatus(root, 'Saved', 'done');
    if (pick) pick.textContent = 'Replace photo';
    root.dispatchEvent(new CustomEvent('photo:saved', { bubbles: true }));
}

function wire(root) {
    const input = root.querySelector('.photo-capture__input');
    const pick = root.querySelector('.photo-capture__pick');
    const empty = root.querySelector('.photo-capture__empty');

    const cameraBtn = root.querySelector('.photo-capture__camera');
    const shootBtn = root.querySelector('.photo-capture__shoot');
    const cancelBtn = root.querySelector('.photo-capture__cancel');
    const video = root.querySelector('.photo-capture__video');

    if (!input || !pick) return;

    // ---- file / gallery upload -------------------------------------------
    pick.addEventListener('click', () => input.click());

    input.addEventListener('change', async () => {
        const file = input.files && input.files[0];
        if (!file) return;

        setStatus(root, 'Preparing…', 'busy');

        try {
            const img = await readAsImage(file);
            await processAndUpload(root, img);
        } catch (error) {
            setStatus(root, error.message, 'error');
            root.dispatchEvent(new CustomEvent('photo:failed', { bubbles: true }));
        } finally {
            // Clear so picking the same file again still fires a change event.
            input.value = '';
        }
    });

    // ---- live camera ------------------------------------------------------
    // Only offered when the browser exposes a camera and the page markup has
    // the camera controls; otherwise the file upload above is the only path.
    if (!cameraBtn || !shootBtn || !cancelBtn || !video || !cameraSupported()) {
        return;
    }

    let stream = null;

    const showCameraUI = (live) => {
        const preview = root.querySelector('.photo-capture__preview');
        const hasPhoto = preview && !preview.hidden;

        video.hidden = !live;
        // Placeholder shows only when the camera is off AND no photo is set.
        if (empty) empty.hidden = live || hasPhoto;
        cameraBtn.hidden = live;
        pick.hidden = live;
        shootBtn.hidden = !live;
        cancelBtn.hidden = !live;
    };

    const stopCamera = () => {
        if (stream) {
            stream.getTracks().forEach((t) => t.stop());
            stream = null;
        }
        video.srcObject = null;
        showCameraUI(false);
    };

    cameraBtn.hidden = false;

    cameraBtn.addEventListener('click', async () => {
        setStatus(root, 'Opening camera…', 'busy');
        try {
            stream = await navigator.mediaDevices.getUserMedia({
                video: { facingMode: 'environment', width: { ideal: 1920 }, height: { ideal: 1080 } },
                audio: false,
            });
        } catch (error) {
            setStatus(root, 'Could not open the camera. You can upload a photo instead.', 'error');
            return;
        }

        video.srcObject = stream;
        try {
            await video.play();
        } catch (e) {
            // Autoplay can reject on some browsers; the stream is still live.
        }

        showCameraUI(true);
        setStatus(root, 'Line up the card, then take the picture.', 'busy');
    });

    shootBtn.addEventListener('click', async () => {
        if (!video.videoWidth) return;

        const w = video.videoWidth;
        const h = video.videoHeight;

        // Grab the frame before tearing the stream down.
        setStatus(root, 'Uploading…', 'busy');
        try {
            await processAndUpload(root, video, w, h);
        } catch (error) {
            setStatus(root, error.message, 'error');
            root.dispatchEvent(new CustomEvent('photo:failed', { bubbles: true }));
        } finally {
            stopCamera();
        }
    });

    cancelBtn.addEventListener('click', () => {
        stopCamera();
        setStatus(root, '', null);
    });

    // Don't leave the camera light on if the user navigates away.
    window.addEventListener('pagehide', stopCamera);
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-photo-capture]').forEach(wire);
});
