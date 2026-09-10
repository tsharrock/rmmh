<?php

namespace App\Console\Commands;

use App\Console\Commands\Concerns\ConfirmsAthenaEnvironment;
use App\Services\Booking\Athena\AthenaApiException;
use App\Services\Booking\Athena\AthenaClient;
use Carbon\CarbonImmutable;
use Illuminate\Console\Command;

/**
 * Read-only connectivity check for the athena integration.
 *
 * Run this first, against preview, before anything else. It walks the same
 * chain the booking flow depends on and stops at the first broken link, so a
 * failure tells you which credential or ID is wrong rather than just "no times
 * available" on the website.
 *
 * Nothing here writes: no patients created, no appointments booked.
 */
class AthenaCheck extends Command
{
    use ConfirmsAthenaEnvironment;

    protected $signature = 'athena:check
                            {--slots : Also try a real open-slot lookup using the configured provider and reason IDs}
                            {--force : Skip the production confirmation prompt}';

    protected $description = 'Check the athena connection, credentials and configured IDs (read-only)';

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

        $steps = [
            'Authenticate (OAuth2 client_credentials)' => fn () => $this->checkAuth($client),
            'Read departments'                         => fn () => $this->checkDepartments($client),
            'Read providers'                           => fn () => $this->checkProviders($client),
            'Read appointment reasons'                 => fn () => $this->checkReasons($client),
        ];

        if ($this->option('slots')) {
            $steps['Read open appointment slots'] = fn () => $this->checkSlots($client);
        }

        foreach ($steps as $label => $step) {
            try {
                $detail = $step();
                $this->line(sprintf('  <fg=green>✓</> %-42s %s', $label, $detail));
            } catch (AthenaApiException $e) {
                $this->line(sprintf('  <fg=red>✗</> %-42s %s', $label, 'FAILED'));
                $this->newLine();
                $this->error($e->getMessage());

                if ($e->status) {
                    $this->line('HTTP ' . $e->status);
                }

                if ($e->body) {
                    $this->line(json_encode($e->body, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
                }

                $this->newLine();
                $this->line($this->hintFor($label, $e));

                return self::FAILURE;
            }
        }

        $this->newLine();
        $this->info('All checks passed against ' . strtoupper($client->environmentName()) . '.');

        if (! $this->option('slots')) {
            $this->line('Run with --slots to also test a real availability lookup.');
        }

        $this->newLine();

        return self::SUCCESS;
    }

    protected function checkAuth(AthenaClient $client): string
    {
        // Any authenticated call proves the token round-trip works; departments
        // is the cheapest and is read-only.
        $client->forgetToken();
        $client->departments();

        return 'token issued';
    }

    protected function checkDepartments(AthenaClient $client): string
    {
        $departments = $client->departments();
        $configured  = $client->departmentId();

        if ($departments === []) {
            throw new AthenaApiException('No departments returned for this practice.');
        }

        $ids = array_map(fn ($d) => (int) ($d['departmentid'] ?? 0), $departments);

        if ($configured && ! in_array($configured, $ids, true)) {
            $this->warn("    Configured department {$configured} is not in this practice: " . implode(', ', $ids));
        }

        return count($departments) . ' found'
            . ($configured ? ", using {$configured}" : ' (none configured yet)');
    }

    protected function checkProviders(AthenaClient $client): string
    {
        $providers = $client->providers();

        if ($providers === []) {
            throw new AthenaApiException('No providers returned for this practice.');
        }

        $configured = config('booking.providers.tiffany-redmond.athena_provider_id.' . $client->environmentName());
        $ids = array_map(fn ($p) => (int) ($p['providerid'] ?? 0), $providers);

        if ($configured && ! in_array((int) $configured, $ids, true)) {
            $this->warn("    Configured provider {$configured} is not in this practice.");
        }

        return count($providers) . ' found'
            . ($configured ? ", using {$configured}" : ' (none configured yet)');
    }

    protected function checkReasons(AthenaClient $client): string
    {
        $departmentId = $client->departmentId();
        $providerId   = config('booking.providers.tiffany-redmond.athena_provider_id.' . $client->environmentName());

        if (! $departmentId || ! $providerId) {
            return 'skipped — set department and provider IDs first';
        }

        $counts = [];
        $valid  = [];

        foreach (['new' => 'new', 'established' => 'established'] as $type => $label) {
            $reasons = $client->appointmentReasons((int) $departmentId, (int) $providerId, $type);
            $counts[$type] = count($reasons);

            foreach ($reasons as $reason) {
                $id = $reason['reasonid'] ?? null;

                if ($id) {
                    $valid[(int) $id] = $reason['reason'] ?? ($reason['description'] ?? '');
                }
            }

            // Print the actual IDs, not just a count. A count cannot tell you
            // that the IDs in .env are the wrong ones, which is exactly the
            // failure that sends you looking at the wrong thing.
            foreach ($reasons as $reason) {
                $this->line(sprintf(
                    '      %-6s %-10s %s',
                    $reason['reasonid'] ?? '?',
                    $label,
                    $reason['reason'] ?? ($reason['description'] ?? ''),
                ));
            }
        }

        if (array_sum($counts) === 0) {
            $this->warn('    No web-schedulable reasons configured. These are set up in athenaOne, usually via athenaCommunicator.');

            return 'none found';
        }

        $this->compareConfiguredReasons($client, array_keys($valid));

        return "new: {$counts['new']}, established: {$counts['established']}";
    }

    /**
     * Flag any reason ID in .env that athena will not accept for this
     * department and provider.
     */
    protected function compareConfiguredReasons(AthenaClient $client, array $validIds): void
    {
        $environment = $client->environmentName();
        $bad = [];

        foreach (config('booking.visit_reasons', []) as $key => $reason) {
            foreach (($reason['athena_reason_ids'][$environment] ?? []) as $type => $id) {
                if ($id && ! in_array((int) $id, $validIds, true)) {
                    $bad[] = strtoupper($key) . '_' . strtoupper($type) . ' = ' . $id;
                }
            }
        }

        if ($bad === []) {
            return;
        }

        $this->newLine();
        $this->warn('    Configured reason IDs that athena will NOT accept here:');

        foreach ($bad as $entry) {
            $this->warn('      ' . $entry);
        }

        $this->warn('    Valid IDs for this department and provider: ' . implode(', ', $validIds));
        $this->newLine();
    }

    protected function checkSlots(AthenaClient $client): string
    {
        $departmentId = $client->departmentId();
        $providerId   = config('booking.providers.tiffany-redmond.athena_provider_id.' . $client->environmentName());
        $reasonId     = config('booking.visit_reasons.telehealth.athena_reason_ids.' . $client->environmentName() . '.established');

        if (! $departmentId || ! $providerId || ! $reasonId) {
            return 'skipped — set department, provider and telehealth reason IDs first';
        }

        $today = CarbonImmutable::now(config('booking.timezone'))->startOfDay();

        $slots = $client->openSlots(
            (int) $departmentId,
            (int) $providerId,
            [(int) $reasonId],
            $today,
            $today->addDays(30),
        );

        if ($slots === []) {
            $this->warn('    Zero open slots in the next 30 days. That may be correct, or the practice may not have opened any.');

            return '0 slots';
        }

        $first = $slots[0];
        $this->line('    First: ' . ($first['date'] ?? '?') . ' ' . ($first['starttime'] ?? '?')
            . ' (' . ($first['duration'] ?? '?') . ' min, appointmentid ' . ($first['appointmentid'] ?? '?') . ')');

        // The slot parser assumes mm/dd/yyyy + HH:MM. Say so plainly here,
        // because a format change would otherwise show up as an empty calendar.
        $this->line('    Confirm that date reads as mm/dd/yyyy and the time as HH:MM — the slot parser assumes both.');

        return count($slots) . ' slots in 30 days';
    }

    protected function hintFor(string $step, AthenaApiException $e): string
    {
        if (str_starts_with($step, 'Authenticate')) {
            return $e->status === 401 || $e->status === 400
                ? 'Check the client ID and secret for this environment, and that the key is enabled for this practice.'
                : 'The token URL may be wrong for this environment — confirm it in the developer portal and set ATHENA_'
                    . strtoupper(config('booking.athena.environment')) . '_TOKEN_URL.';
        }

        if ($e->status === 403) {
            return 'Authentication worked but this key lacks access to that resource. Check the API scopes granted to it.';
        }

        return 'Check the practice ID for this environment — a preview key cannot read a production practice.';
    }
}
