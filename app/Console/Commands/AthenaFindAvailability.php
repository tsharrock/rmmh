<?php

namespace App\Console\Commands;

use App\Console\Commands\Concerns\ConfirmsAthenaEnvironment;
use App\Services\Booking\Athena\AthenaApiException;
use App\Services\Booking\Athena\AthenaClient;
use Carbon\CarbonImmutable;
use Illuminate\Console\Command;

/**
 * Finds a department and provider in this practice that already has open slots.
 *
 * Written for the shared preview sandbox. Its providers are not ours and are
 * mostly not set up for web scheduling, so rather than trying to force slots
 * onto one that will not take them, this scans for a combination that already
 * works and prints the .env lines for it.
 *
 * Read-only: creates nothing.
 */
class AthenaFindAvailability extends Command
{
    use ConfirmsAthenaEnvironment;

    protected $signature = 'athena:find-availability
                            {--days=60 : How far ahead to look}
                            {--departments=33 : Cap how many departments to scan}
                            {--force : Skip the production confirmation prompt}';

    protected $description = 'Scan the practice for departments and providers that already have open slots (read-only)';

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
            $departments = $client->departments();
        } catch (AthenaApiException $e) {
            $this->error('Could not read departments: ' . $e->getMessage());

            return self::FAILURE;
        }

        $departments = array_slice($departments, 0, max(1, (int) $this->option('departments')));

        $today = CarbonImmutable::now(config('booking.timezone'))->startOfDay();
        $end   = $today->addDays(max(1, (int) $this->option('days')));

        $this->line('  Scanning ' . count($departments) . ' departments for open slots through '
            . $end->format('j M Y') . '…');
        $this->newLine();

        $hits = [];

        foreach ($departments as $department) {
            $departmentId = (int) ($department['departmentid'] ?? 0);

            if (! $departmentId) {
                continue;
            }

            try {
                $slots = $client->openSlotsAnyReason($departmentId, $today, $end);
            } catch (AthenaApiException $e) {
                // A department we cannot read is not worth stopping the scan
                // for -- keep going and report what we did find.
                $this->line(sprintf('  <fg=yellow>·</> dept %-6s %s', $departmentId, 'unreadable'));

                continue;
            }

            if ($slots === []) {
                continue;
            }

            // Group by provider: the config needs one provider, not a department.
            $byProvider = [];

            foreach ($slots as $slot) {
                $providerId = (string) ($slot['providerid'] ?? '?');
                $byProvider[$providerId][] = $slot;
            }

            foreach ($byProvider as $providerId => $providerSlots) {
                $first = $providerSlots[0];

                $hits[] = [
                    'department' => $departmentId,
                    'provider'   => $providerId,
                    'count'      => count($providerSlots),
                    'first'      => trim(($first['date'] ?? '?') . ' ' . ($first['starttime'] ?? '?')),
                    'duration'   => $first['duration'] ?? '?',
                    'reasons'    => $this->reasonsOn($first),
                ];
            }

            $this->line(sprintf(
                '  <fg=green>✓</> dept %-6s %d slots across %d provider(s)',
                $departmentId,
                count($slots),
                count($byProvider),
            ));
        }

        $this->newLine();

        if ($hits === []) {
            return $this->reportNothingFound();
        }

        usort($hits, fn ($a, $b) => $b['count'] <=> $a['count']);

        $this->info('Departments and providers with existing availability');
        $this->table(
            ['department', 'provider', 'open slots', 'first slot', 'mins', 'reason ids on that slot'],
            collect($hits)->take(20)->map(fn ($h) => [
                $h['department'],
                $h['provider'],
                $h['count'],
                $h['first'],
                $h['duration'],
                $h['reasons'],
            ])->all(),
        );

        $this->printSuggestion($client, $hits[0]);

        return self::SUCCESS;
    }

    /** Reason IDs athena reports as bookable for a given slot, if it says. */
    protected function reasonsOn(array $slot): string
    {
        foreach (['reasonid', 'reasonids', 'patientappointmentreasonid'] as $key) {
            if (isset($slot[$key])) {
                return is_array($slot[$key]) ? implode(', ', $slot[$key]) : (string) $slot[$key];
            }
        }

        return '—';
    }

    protected function printSuggestion(AthenaClient $client, array $best): void
    {
        $prefix = 'ATHENA_' . strtoupper($client->environmentName()) . '_';

        $this->newLine();
        $this->info('Best match — put these in .env');
        $this->line(str_repeat('-', 60));
        $this->line($prefix . 'DEPARTMENT_ID=' . $best['department']);
        $this->line($prefix . 'PROVIDER_ID_TIFFANY=' . $best['provider']);
        $this->line(str_repeat('-', 60));
        $this->newLine();

        $this->line('Then, to find which reason IDs work for that pair:');
        $this->line('  php artisan athena:discover --department=' . $best['department']
            . ' --provider=' . $best['provider']);
        $this->newLine();
        $this->line('Fill the ' . $prefix . 'REASON_* keys, then:');
        $this->line('  php artisan athena:check --slots');
        $this->newLine();
    }

    protected function reportNothingFound(): int
    {
        $this->error('No open slots anywhere in this practice.');
        $this->newLine();
        $this->line('The sandbox has no availability at all, so there is nothing to book against.');
        $this->line('Options, in order of effort:');
        $this->newLine();
        $this->line('  1. Open slots by appointment type instead of reason:');
        $this->line('       php artisan athena:seed-slots --list-types');
        $this->line('       php artisan athena:seed-slots --appointment-type=<id>');
        $this->newLine();
        $this->line('  2. Ask athenahealth developer support to enable web scheduling');
        $this->line('     for a provider in your sandbox practice.');
        $this->newLine();
        $this->line('  3. Accept that preview cannot exercise the read path, and verify');
        $this->line('     it against production carefully before cutover.');
        $this->newLine();

        return self::FAILURE;
    }
}
