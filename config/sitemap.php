<?php

/*
|--------------------------------------------------------------------------
| Sitemap URLs
|--------------------------------------------------------------------------
|
| Single source of truth for the site's public URLs. Consumed by both the
| dynamic /sitemap.xml route (App\Http\Controllers\SitemapController) and
| the sitemap:generate console command. Each entry is [path, priority,
| changefreq]. Absolute URLs are built from config('app.url') at runtime,
| so the sitemap always matches the environment it is served from.
|
*/

return [
    'urls' => [
        ['/', 1.0, 'weekly'],
        ['/about', 0.8, 'monthly'],
        ['/family-medicine', 0.9, 'monthly'],
        ['/psychiatric-care', 0.9, 'monthly'],
        ['/weight-loss', 0.9, 'monthly'],
        ['/iv-fluids', 0.8, 'monthly'],
        ['/ketamine', 0.8, 'monthly'],
        ['/contact', 0.7, 'monthly'],
        ['/insurance', 0.7, 'monthly'],
        ['/telehealth', 0.8, 'monthly'],
        ['/logan-cache-valley', 0.7, 'monthly'],
        // Utah telehealth city pages
        ['/telehealth/utah/beaver', 0.6, 'monthly'],
        ['/telehealth/utah/blanding', 0.6, 'monthly'],
        ['/telehealth/utah/cedar-city', 0.6, 'monthly'],
        ['/telehealth/utah/dutch-john', 0.6, 'monthly'],
        ['/telehealth/utah/heber-city', 0.6, 'monthly'],
        ['/telehealth/utah/helper', 0.6, 'monthly'],
        ['/telehealth/utah/layton', 0.6, 'monthly'],
        ['/telehealth/utah/moab', 0.6, 'monthly'],
        ['/telehealth/utah/ogden', 0.6, 'monthly'],
        ['/telehealth/utah/orem', 0.6, 'monthly'],
        ['/telehealth/utah/park-city', 0.6, 'monthly'],
        ['/telehealth/utah/price', 0.6, 'monthly'],
        ['/telehealth/utah/provo', 0.6, 'monthly'],
        ['/telehealth/utah/salt-lake-city', 0.6, 'monthly'],
        ['/telehealth/utah/sandy', 0.6, 'monthly'],
        ['/telehealth/utah/spanish-fork', 0.6, 'monthly'],
        ['/telehealth/utah/st-george', 0.6, 'monthly'],
        ['/telehealth/utah/vernal', 0.6, 'monthly'],
        ['/telehealth/utah/wendover', 0.6, 'monthly'],
        // Arizona telehealth city pages
        ['/telehealth/arizona/apache-junction', 0.6, 'monthly'],
        ['/telehealth/arizona/buckeye', 0.6, 'monthly'],
        ['/telehealth/arizona/casa-grande', 0.6, 'monthly'],
        ['/telehealth/arizona/flagstaff', 0.6, 'monthly'],
        ['/telehealth/arizona/goodyear', 0.6, 'monthly'],
        ['/telehealth/arizona/kingman', 0.6, 'monthly'],
        ['/telehealth/arizona/lake-havasu-city', 0.6, 'monthly'],
        ['/telehealth/arizona/maricopa', 0.6, 'monthly'],
        ['/telehealth/arizona/mesa', 0.6, 'monthly'],
        ['/telehealth/arizona/page', 0.6, 'monthly'],
        ['/telehealth/arizona/phoenix', 0.6, 'monthly'],
        ['/telehealth/arizona/prescott', 0.6, 'monthly'],
        ['/telehealth/arizona/queen-creek', 0.6, 'monthly'],
        ['/telehealth/arizona/san-tan-valley', 0.6, 'monthly'],
        ['/telehealth/arizona/scottsdale', 0.6, 'monthly'],
        ['/telehealth/arizona/sierra-vista', 0.6, 'monthly'],
        ['/telehealth/arizona/surprise', 0.6, 'monthly'],
        ['/telehealth/arizona/tempe', 0.6, 'monthly'],
        ['/telehealth/arizona/tuba-city', 0.6, 'monthly'],
        ['/telehealth/arizona/tucson', 0.6, 'monthly'],
        ['/telehealth/arizona/yuma', 0.6, 'monthly'],
    ],
];
