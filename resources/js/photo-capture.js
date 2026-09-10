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

function resizeToDataUrl(img) {
    let { width, height } = img;

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
    ctx.drawImage(img, 0, 0, width, height);

    return canvas.toDataURL('image/jpeg', QUALITY);
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

function wire(root) {
    const input = root.querySelector('.photo-capture__input');
    const pick = root.querySelector('.photo-capture__pick');
    const preview = root.querySelector('.photo-capture__preview');
    const empty = root.querySelector('.photo-capture__empty');

    if (!input || !pick) return;

    pick.addEventListener('click', () => input.click());

    input.addEventListener('change', async () => {
        const file = input.files && input.files[0];
        if (!file) return;

        setStatus(root, 'Preparing…', 'busy');

        try {
            const img = await readAsImage(file);
            const dataUrl = resizeToDataUrl(img);

            if (preview) {
                preview.src = dataUrl;
                preview.hidden = false;
            }
            if (empty) empty.hidden = true;

            setStatus(root, 'Uploading…', 'busy');
            await upload(root, dataUrl);

            setStatus(root, 'Saved', 'done');
            pick.textContent = 'Replace photo';
            root.dispatchEvent(new CustomEvent('photo:saved', { bubbles: true }));
        } catch (error) {
            setStatus(root, error.message, 'error');
            root.dispatchEvent(new CustomEvent('photo:failed', { bubbles: true }));
        } finally {
            // Clear so picking the same file again still fires a change event.
            input.value = '';
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-photo-capture]').forEach(wire);
});
