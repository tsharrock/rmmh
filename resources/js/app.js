import './bootstrap';

// Only the Bootstrap JS components actually used on the site.
// Side-effect imports auto-wire their data-bs-toggle handlers.
import 'bootstrap/js/dist/collapse'; // navbar toggler
import 'bootstrap/js/dist/dropdown'; // Services menu

// Conversion tracking, delegated globally since these links appear on
// nearly every page (schedule CTA) or vary in count (tel: links).
document.addEventListener('click', function (e) {
    if (typeof gtag !== 'function') return;

    const link = e.target.closest('a');
    if (!link || !link.href) return;

    if (link.href.includes('nextpatient.co')) {
        gtag('event', 'schedule_click', { link_url: link.href });
    } else if (link.href.startsWith('tel:')) {
        gtag('event', 'phone_click', { link_url: link.href });
    }
});

// Site-wide move announcement banner. Bump the storage key (e.g. _v2) to
// re-show the banner to everyone for a future announcement.
(function () {
    const BANNER_DISMISSED_KEY = 'rmmh_banner_dismissed_v1';
    const banner = document.getElementById('move-banner');
    if (!banner) return;

    try {
        if (localStorage.getItem(BANNER_DISMISSED_KEY)) {
            banner.remove();
            return;
        }
    } catch (e) {
        // localStorage unavailable (private mode, blocked, etc.) — leave banner visible.
    }

    const closeButton = document.getElementById('move-banner-close');
    if (!closeButton) return;

    closeButton.addEventListener('click', function () {
        banner.remove();
        try {
            localStorage.setItem(BANNER_DISMISSED_KEY, '1');
        } catch (e) {
            // Ignore storage errors — banner is still dismissed for this page view.
        }
    });
})();
