<?php

namespace App\Console\Commands;

use App\Console\Commands\Concerns\ConfirmsAthenaEnvironment;
use App\Services\Booking\Athena\AthenaApiException;
use App\Services\Booking\Athena\AthenaClient;
use Carbon\CarbonImmutable;
use Illuminate\Console\Command;

/**
 * Opens test appointment slots in the PREVIEW sandbox.
 *
 * The sandbox practice has no availability of its own, so there is nothing for
 * the booking flow to book. This fills that gap.
 *
 * It refuses to run against production, and that refusal is not overridable.
 * Real availability is opened by the practice in athenaOne; this app reads that
 * schedule and books against it. Writing fabricated slots into the live
 * practice would put appointments in front of real patients that Tiffany never
 * agreed to, which is not a mistake worth leaving one flag away.
 */
class AthenaSeedSlots extends Command
{
    use ConfirmsAthenaEnvironment;

    protected $signature = 'athena:seed-slots
                            {--days=5 : How many weekdays to open, starting from --start}
                            {--start= : First date to open (Y-m-d). Defaults to tomorrow.}
                            {--from=09:00 : First slot start, 24-hour}
                            {--to=15:00 : Last slot must start at or before this, 24-hour}
                            {--interval=20 : Minutes between slot starts}
                            {--reason= : Only seed this reason ID. Defaults to every reason configured for this environment.}
                            {--appointment-type= : Seed by appointmenttypeid instead of reasonid. Use when no reason is valid for the provider.}
                            {--list-types : List the practice appointment types and exit}
                            {--include-weekends : Also open Saturday and Sunday}
                            {--dry-run : Show what would be created without calling athena}';

    protected $description = 'Open test appointment slots in the athena PREVIEW sandbox (never production)';

    public function handle(AthenaClient $client): int
    {
        $this->showEnvironmentBanner($client);

        if ($client->isProduction()) {
            $this->error('Refusing to seed slots into PRODUCTION.');
            $this->newLine();
            $this->line('Real availability is opened by the practice in athenaOne. This command exists');
            $this->line('only to give the sandbox something to book against, and there is deliberately');
            $this->line('no flag to override this.');
            $this->newLine();

            return self::FAILURE;
        }

        if (! $client->isConfigured()) {
            $this->reportMissingConfig($client);

            return self::FAILURE;
        }

        $departmentId = $client->departmentId();
        $providerId   = config('booking.providers.tiffany-redmond.athena_provider_id.' . $client->environmentName());

        if (! $departmentId || ! $providerId) {
            $this->error('Set the department and provider IDs for this environment first (php artisan athena:discover).');

            return self::FAILURE;
        }

        if ($this->option('list-types')) {
            return $this->listAppointmentTypes($client);
        }

        $appointmentTypeId = $this->option('appointment-type') ? (int) $this->option('appointment-type') : null;
        $reasonIds = [];

        if (! $appointmentTypeId) {
            $reasonIds = $this->reasonIds($client);

            if ($reasonIds === []) {
                $this->error('No appointment reason IDs configured for this environment.');
                $this->line('Run php artisan athena:discover and fill the ATHENA_'
                    . strtoupper($client->environmentName()) . '_REASON_* keys.');

                return self::FAILURE;
            }

            // Check the IDs against what athena will actually accept for this
            // department and provider, BEFORE firing a write per date. Athena
            // rejects a bad reason identically on every call, so without this
            // the failure arrives N times and says nothing about what is valid.
            $reasonIds = $this->validateReasons($client, (int) $departmentId, (int) $providerId, $reasonIds);

            if ($reasonIds === []) {
                return self::FAILURE;
            }
        }

        $dates = $this->dates();
        $times = $this->times();

        if ($times === []) {
            $this->error('That --from/--to/--interval combination produces no slot times.');

            return self::FAILURE;
        }

        $this->line('  Department : ' . $departmentId);
        $this->line('  Provider   : ' . $providerId);
        $this->line($appointmentTypeId
            ? '  Type       : ' . $appointmentTypeId . ' (appointmenttypeid)'
            : '  Reasons    : ' . implode(', ', $reasonIds));
        $this->line('  Dates      : ' . $dates->first()->format('D j M') . ' → ' . $dates->last()->format('D j M')
            . ' (' . $dates->count() . ' days)');
        $this->line('  Times      : ' . implode(', ', array_slice($times, 0, 4))
            . (count($times) > 4 ? ' … ' . end($times) : '') . '  (' . count($times) . ' per day)');
        $this->newLine();

        $total = $dates->count() * count($times) * max(1, count($reasonIds));
        $this->line("  Would open up to {$total} slots.");
        $this->newLine();

        if ($this->option('dry-run')) {
            $this->comment('Dry run — nothing was created.');

            return self::SUCCESS;
        }

        if ($this->input->isInteractive() && ! $this->confirm('Create these slots in the sandbox?', true)) {
            $this->line('Aborted.');

            return self::FAILURE;
        }

        return $this->seed($client, (int) $departmentId, (int) $providerId, $reasonIds, $appointmentTypeId, $dates, $times);
    }

    protected function seed(
        AthenaClient $client,
        int $departmentId,
        int $providerId,
        array $reasonIds,
        ?int $appointmentTypeId,
        $dates,
        array $times,
    ): int {
        $created = 0;
        $failed  = 0;

        // One call per (date, reason). Batching the times into a single call is
        // what athena's endpoint expects, and keeps this to a few dozen
        // requests rather than a few hundred.
        $keys = $appointmentTypeId ? [$appointmentTypeId] : $reasonIds;

        foreach ($keys as $key) {
            foreach ($dates as $date) {
                try {
                    $ids = $client->createOpenSlots(
                        $departmentId,
                        $providerId,
                        $date,
                        $times,
                        $appointmentTypeId ? null : (int) $key,
                        $appointmentTypeId,
                    );
                    $count = count($ids);
                    $created += $count;

                    $this->line(sprintf(
                        '  <fg=green>✓</> %s %-6s %s  %d slots',
                        $appointmentTypeId ? 'type  ' : 'reason',
                        $key,
                        $date->format('D j M'),
                        $count,
                    ));
                } catch (AthenaApiException $e) {
                    $failed++;

                    $this->line(sprintf(
                        '  <fg=red>✗</> %s %-6s %s  %s',
                        $appointmentTypeId ? 'type  ' : 'reason',
                        $key,
                        $date->format('D j M'),
                        $e->getMessage(),
                    ));

                    if ($e->body) {
                        $this->line('      ' . json_encode($e->body, JSON_UNESCAPED_SLASHES));
                    }

                    // The same bad input fails identically on every date, so
                    // stop rather than printing it once per day.
                    break;
                }
            }
        }

        $this->newLine();

        if ($created === 0) {
            $this->error('No slots were created.');
            $this->newLine();
            $this->line('If athena said the reason does not match the provider and department, the');
            $this->line('provider has no appointment types wired to those reasons in the sandbox.');
            $this->line('Seed by appointment type instead:');
            $this->newLine();
            $this->line('  php artisan athena:seed-slots --list-types');
            $this->line('  php artisan athena:seed-slots --appointment-type=<id>');
            $this->newLine();

            return self::FAILURE;
        }

        $this->info("Created {$created} slots" . ($failed ? " ({$failed} calls failed)" : '') . '.');
        $this->newLine();
        $this->comment('Now run: php artisan athena:check --slots');
        $this->newLine();

        return self::SUCCESS;
    }

    /**
     * Keep only the reason IDs athena will accept for this department and
     * provider, and explain clearly if none survive.
     *
     * @return array<int, int>
     */
    protected function validateReasons(AthenaClient $client, int $departmentId, int $providerId, array $wanted): array
    {
        $valid = [];

        foreach (['new', 'established'] as $type) {
            foreach ($client->appointmentReasons($departmentId, $providerId, $type) as $reason) {
                if ($id = $reason['reasonid'] ?? null) {
                    $valid[(int) $id] = $reason['reason'] ?? ($reason['description'] ?? '');
                }
            }
        }

        $usable = array_values(array_filter($wanted, fn ($id) => isset($valid[(int) $id])));

        if ($usable !== []) {
            $rejected = array_diff($wanted, $usable);

            if ($rejected !== []) {
                $this->warn('  Skipping reason IDs athena will not accept here: ' . implode(', ', $rejected));
                $this->newLine();
            }

            return $usable;
        }

        $this->error('None of the configured reason IDs are valid for department '
            . $departmentId . ' / provider ' . $providerId . '.');
        $this->newLine();
        $this->line('  Configured : ' . implode(', ', $wanted));
        $this->newLine();

        if ($valid === []) {
            $this->line('  athena lists NO web-schedulable reasons for this provider and department.');
            $this->line('  Seed by appointment type instead:');
            $this->newLine();
            $this->line('    php artisan athena:seed-slots --list-types');
            $this->line('    php artisan athena:seed-slots --appointment-type=<id>');
        } else {
            $this->line('  Valid here:');

            foreach ($valid as $id => $label) {
                $this->line(sprintf('    %-6s %s', $id, $label));
            }

            $this->newLine();
            $this->line('  Put these in the ATHENA_' . strtoupper($client->environmentName()) . '_REASON_* keys.');
        }

        $this->newLine();

        return [];
    }

    protected function listAppointmentTypes(AthenaClient $client): int
    {
        $types = $client->appointmentTypes();

        if ($types === []) {
            $this->error('No appointment types returned for this practice.');

            return self::FAILURE;
        }

        $this->info('Appointment types');
        $this->table(
            ['appointmenttypeid', 'name', 'duration', 'patient-facing'],
            collect($types)->map(fn ($t) => [
                $t['appointmenttypeid'] ?? '',
                $t['name'] ?? '',
                $t['duration'] ?? '',
                ($t['patient'] ?? null) ? 'yes' : '',
            ])->all(),
        );

        $this->newLine();
        $this->comment('Seed with: php artisan athena:seed-slots --appointment-type=<id>');
        $this->newLine();

        return self::SUCCESS;
    }

    /** Distinct reason IDs configured for the active environment. */
    protected function reasonIds(AthenaClient $client): array
    {
        if ($only = $this->option('reason')) {
            return [(int) $only];
        }

        $environment = $client->environmentName();
        $ids = [];

        foreach (config('booking.visit_reasons', []) as $reason) {
            foreach (($reason['athena_reason_ids'][$environment] ?? []) as $id) {
                if ($id) {
                    $ids[] = (int) $id;
                }
            }
        }

        return array_values(array_unique($ids));
    }

    /**
     * Weekdays to seed. Starts tomorrow by default because athena hides slots
     * less than ~24 hours out, so seeding today would create slots the booking
     * flow cannot see.
     */
    protected function dates()
    {
        $tz    = config('booking.timezone');
        $start = $this->option('start')
            ? CarbonImmutable::createFromFormat('Y-m-d', $this->option('start'), $tz)->startOfDay()
            : CarbonImmutable::now($tz)->addDay()->startOfDay();

        $wanted   = max(1, (int) $this->option('days'));
        $weekends = (bool) $this->option('include-weekends');

        $dates  = collect();
        $cursor = $start;

        while ($dates->count() < $wanted) {
            if ($weekends || $cursor->isWeekday()) {
                $dates->push($cursor);
            }

            $cursor = $cursor->addDay();
        }

        return $dates;
    }

    /** @return array<int, string> 24-hour hh:mm starts */
    protected function times(): array
    {
        $tz       = config('booking.timezone');
        $interval = max(5, (int) $this->option('interval'));

        $from = CarbonImmutable::createFromFormat('H:i', $this->option('from'), $tz);
        $to   = CarbonImmutable::createFromFormat('H:i', $this->option('to'), $tz);

        $times  = [];
        $cursor = $from;

        while ($cursor->lessThanOrEqualTo($to)) {
            $times[] = $cursor->format('H:i');
            $cursor  = $cursor->addMinutes($interval);
        }

        return $times;
    }
}
