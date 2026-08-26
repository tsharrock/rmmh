<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate public/sitemap.xml from config/sitemap.php';

    public function handle(): void
    {
        $base = rtrim((string) config('app.url'), '/');

        $routes = config('sitemap.urls', []);

        $sitemap = Sitemap::create();

        foreach ($routes as [$path, $priority, $changefreq]) {
            $sitemap->add(
                Url::create($base.$path)
                    ->setPriority($priority)
                    ->setChangeFrequency($changefreq)
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap written to public/sitemap.xml ('.count($routes).' URLs)');
    }
}
