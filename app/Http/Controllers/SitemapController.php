<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    /**
     * Serve /sitemap.xml built from config('sitemap.urls').
     *
     * Absolute URLs are derived from config('app.url') at request time, so
     * the sitemap always reflects the environment it is served from and can
     * never drift to a stale/local domain the way a committed static file can.
     */
    public function __invoke(Request $request): \Symfony\Component\HttpFoundation\Response
    {
        $base = rtrim((string) config('app.url'), '/');

        $sitemap = Sitemap::create();

        foreach (config('sitemap.urls', []) as [$path, $priority, $changefreq]) {
            $sitemap->add(
                Url::create($base.$path)
                    ->setPriority($priority)
                    ->setChangeFrequency($changefreq)
            );
        }

        return $sitemap->toResponse($request);
    }
}
