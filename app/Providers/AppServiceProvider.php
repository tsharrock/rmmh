<?php

namespace App\Providers;

use App\Services\Booking\Athena\AthenaClient;
use App\Services\Booking\AthenaAvailabilityRepository;
use App\Services\Booking\AthenaPatientRecords;
use App\Services\Booking\AvailabilityRepository;
use App\Services\Booking\PatientRecords;
use App\Services\Booking\StaticPatientRecords;
use App\Services\Booking\StaticAvailabilityRepository;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            AthenaClient::class,
            fn () => new AthenaClient(config('booking.athena', [])),
        );

        // Booking engine source of truth.
        //
        // Driven by BOOKING_DRIVER in .env: 'static' serves placeholder data,
        // 'athena' talks to athenahealth. The controller and views are written
        // against the interface only, so this is the whole switch.
        $this->app->bind(AvailabilityRepository::class, function ($app) {
            return config('booking.driver') === 'athena'
                ? $app->make(AthenaAvailabilityRepository::class)
                : $app->make(StaticAvailabilityRepository::class);
        });

        // Patient records follow the same switch. In static mode uploads are
        // counted and discarded, so clicking through the intake flow locally
        // cannot put a driver's licence anywhere.
        $this->app->bind(PatientRecords::class, function ($app) {
            return config('booking.driver') === 'athena'
                ? $app->make(AthenaPatientRecords::class)
                : $app->make(StaticPatientRecords::class);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->guardAthenaEnvironment();
    }

    /**
     * Leave a trail whenever the app is pointed at the live athena practice.
     *
     * Promoting from preview to production is a single .env line, and nothing
     * about the site looks different afterwards. One log line per boot means
     * "which environment was it actually running against?" is answerable later,
     * and a production driver on a local machine is loud enough to notice.
     */
    protected function guardAthenaEnvironment(): void
    {
        if (config('booking.driver') !== 'athena') {
            return;
        }

        $environment = config('booking.athena.environment');

        if ($environment !== 'production') {
            return;
        }

        if (app()->environment('local')) {
            Log::warning('Booking is pointed at the LIVE athena practice from a local environment. '
                . 'Set ATHENA_ENV=preview unless this is deliberate.');

            return;
        }

        Log::info('Booking driver active against athena production practice ' . config('booking.athena.environments.production.practice_id'));
    }
}
