<?php

namespace App\Console\Commands;

use App\Console\Commands\Concerns\ConfirmsAthenaEnvironment;
use App\Services\Booking\Athena\AthenaApiException;
use App\Services\Booking\Athena\AthenaClient;
use Illuminate\Console\Command;

/**
 * Lists the athenaNet IDs the booking config needs.
 *
 * The booking flow cannot work until config/booking.php knows the department,
 * provider and appointment reason IDs, and none of those are guessable. This
 * command reads them straight from the practice so they can be pasted into
 * .env.
 */
class AthenaDiscover extends Command
{
    use ConfirmsAthenaEnvironment;

    protected $signature = 'athena:discover
                            {--department= : Only show reasons for this department ID}
                            {--provider= : Only show reasons for this provider ID}
                            {--force : Skip the production confirmation prompt}';

    protected $description = 'List athenaNet department, provider and appointment reason IDs for the booking config';

    public function handle(AthenaClient $client): int
    {
        $this->showEnvironmentBanner($client);

        if (! $client->isConfigured()) {
            $this->reportMissingConfig($client);

            return self::FAILURE;
        }

        if (! $this->confirmProduction($client)) {
            $this->line('Aborted.');

            return self::FAILURE;
        }

        try {
            $departments = $this->showDepartments($client);
            $providers   = $this->showProviders($client);
            $discovered  = $this->showReasons($client, $departments, $providers);
            $this->showEnvBlock($client, $discovered);
        } catch (AthenaApiException $e) {
            $this->error('Athena call failed: ' . $e->getMessage());

            if ($e->status) {
                $this->line('HTTP ' . $e->status);
            }

            if ($e->body) {
                $this->line(json_encode($e->body, JSON_PRETTY_PRINT));
            }

            return self::FAILURE;
        }

        $this->newLine();
        $this->comment('Then run: php artisan athena:check --slots');
        $this->newLine();

        return self::SUCCESS;
    }

    protected function showDepartments(AthenaClient $client): array
    {
        $departments = $client->departments();

        $this->line('');
        $this->info('Departments  → ATHENA_' . strtoupper($client->environmentName()) . '_DEPARTMENT_ID');
        $this->table(
            ['departmentid', 'name', 'city', 'state'],
            collect($departments)->map(fn ($d) => [
                $d['departmentid'] ?? '',
                $d['name'] ?? '',
                $d['city'] ?? '',
                $d['state'] ?? '',
            ])->all(),
        );

        return $departments;
    }

    protected function showProviders(AthenaClient $client): array
    {
        $providers = $client->providers();

        $this->line('');
        $this->info('Providers  → ATHENA_' . strtoupper($client->environmentName()) . '_PROVIDER_ID_TIFFANY');
        $this->table(
            ['providerid', 'name', 'type', 'specialty'],
            collect($providers)->map(fn ($p) => [
                $p['providerid'] ?? '',
                trim(($p['firstname'] ?? '') . ' ' . ($p['lastname'] ?? '')) ?: ($p['displayname'] ?? ''),
                $p['providertype'] ?? '',
                $p['specialty'] ?? '',
            ])->all(),
        );

        return $providers;
    }

    /** @return array{department:?int, provider:?int, reasons:array<string, array<int, array>>} */
    protected function showReasons(AthenaClient $client, array $departments, array $providers): array
    {
        // Reasons are scoped to a department + provider, so we need one of each
        // before we can list them.
        $departmentId = $this->option('department')
            ?: $client->departmentId()
            ?: ($departments[0]['departmentid'] ?? null);

        $providerId = $this->option('provider')
            ?: config('booking.providers.tiffany-redmond.athena_provider_id.' . $client->environmentName())
            ?: ($providers[0]['providerid'] ?? null);

        if (! $departmentId || ! $providerId) {
            $this->warn('Skipping appointment reasons: pass --department and --provider once you have picked them from the tables above.');

            return ['department' => null, 'provider' => null, 'reasons' => []];
        }

        $found = [];

        foreach (['new' => 'New patient', 'established' => 'Existing patient'] as $type => $label) {
            $reasons = $client->appointmentReasons((int) $departmentId, (int) $providerId, $type);

            $this->line('');
            $envKey = 'ATHENA_' . strtoupper($client->environmentName()) . '_REASON_<VISIT>_'
                . ($type === 'new' ? 'NEW' : 'ESTABLISHED');

            $this->info("Appointment reasons — {$label}  →  {$envKey}");
            $this->line("  (department {$departmentId}, provider {$providerId})");

            if ($reasons === []) {
                $this->warn('  None configured. Web-schedulable reasons are set up in athenaOne, usually as part of athenaCommunicator.');

                continue;
            }

            $found[$type] = $reasons;

            $this->table(
                ['reasonid', 'reason', 'duration'],
                collect($reasons)->map(fn ($r) => [
                    $r['reasonid'] ?? '',
                    $r['reason'] ?? ($r['description'] ?? ''),
                    $r['duration'] ?? '',
                ])->all(),
            );
        }

        return [
            'department' => (int) $departmentId,
            'provider'   => (int) $providerId,
            'reasons'    => $found,
        ];
    }

    /**
     * Print a block that can be pasted straight into .env.
     *
     * The department and provider are filled in; the six reason lines are not,
     * because only a human can decide which athena reason corresponds to
     * "Telehealth Visit" on the website. Each line lists the valid IDs so the
     * choice is a copy rather than a lookup.
     */
    protected function showEnvBlock(AthenaClient $client, array $discovered): void
    {
        $prefix = 'ATHENA_' . strtoupper($client->environmentName()) . '_';

        $this->newLine();
        $this->info('Paste into .env');
        $this->line(str_repeat('-', 60));

        $this->line($prefix . 'DEPARTMENT_ID=' . ($discovered['department'] ?? ''));
        $this->line($prefix . 'PROVIDER_ID_TIFFANY=' . ($discovered['provider'] ?? ''));
        $this->newLine();

        foreach (['new' => 'NEW', 'established' => 'ESTABLISHED'] as $type => $suffix) {
            $reasons = $discovered['reasons'][$type] ?? [];

            if ($reasons === []) {
                $this->line('# No ' . $type . ' reasons available — leave these blank.');
            } else {
                $options = collect($reasons)
                    ->map(fn ($r) => ($r['reasonid'] ?? '?') . '=' . ($r['reason'] ?? $r['description'] ?? '?'))
                    ->implode('  |  ');

                $this->line('# Pick one per line — available: ' . $options);
            }

            foreach (['INPERSON', 'TELEHEALTH', 'KETAMINE'] as $visit) {
                $this->line($prefix . 'REASON_' . $visit . '_' . $suffix . '=');
            }

            $this->newLine();
        }

        $this->line(str_repeat('-', 60));

        if (! $client->isProduction()) {
            $this->newLine();
            $this->warn('These are SANDBOX reasons. They will not match RMMH\'s real visit types, and');
            $this->warn('none of these IDs exist in production — reuse the same ID across visit types');
            $this->warn('if you have to. The point here is exercising the flow, not the mapping.');
        }
    }
}
