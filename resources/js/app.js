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
