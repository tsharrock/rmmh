<?php

namespace App\Console\Commands\Concerns;

use App\Services\Booking\Athena\AthenaClient;

/**
 * Makes the target environment impossible to miss.
 *
 * Preview and production differ by one .env line, and the commands that read
 * from athena look identical either way. Printing the banner every time -- and
 * pausing before production -- is the cheap way to stop someone poking the live
 * practice while they think they are in the sandbox.
 */
trait ConfirmsAthenaEnvironment
{
    protected function showEnvironmentBanner(AthenaClient $client): void
    {
        $this->newLine();

        if ($client->isProduction()) {
            $this->getOutput()->writeln('<fg=white;bg=red> PRODUCTION </> <fg=red>live practice — real patients, real schedules</>');
        } else {
            $this->getOutput()->writeln('<fg=black;bg=green> PREVIEW </> <fg=green>sandbox — safe to experiment</>');
        }

        $this->line('  Practice : ' . $client->practiceId());
        $this->line('  API      : ' . $client->apiUrl());
        $this->newLine();
    }

    /**
     * Ask before touching production. Returns false if the operator declines.
     * Non-interactive runs (CI, scheduled tasks) must pass --force explicitly.
     */
    protected function confirmProduction(AthenaClient $client): bool
    {
        if (! $client->isProduction() || $this->option('force')) {
            return true;
        }

        if (! $this->input->isInteractive()) {
            $this->error('Refusing to run against PRODUCTION without --force in a non-interactive shell.');

            return false;
        }

        return $this->confirm('This will talk to the LIVE athena practice. Continue?', false);
    }

    protected function reportMissingConfig(AthenaClient $client): void
    {
        $this->error('Athena is not configured for the ' . strtoupper($client->environmentName()) . ' environment.');
        $this->newLine();
        $this->line('Set these in .env:');

        foreach ($client->missingConfig() as $key) {
            $this->line('  ' . $key . '=');
        }

        $this->newLine();
        $this->line('ATHENA_ENV is currently: ' . $client->environmentName());
    }
}
