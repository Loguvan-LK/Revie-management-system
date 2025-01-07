<?php

namespace App\Commands;

use Illuminate\Console\Command;
use Artisan;

class MigrateAndSeed extends Command
{
    protected $signature = 'db:migrate-and-seed';
    protected $description = 'Run migrations and seeders in one command';

    public function handle()
    {
        $this->info('Running migrations...');
        Artisan::call('migrate', ['--force' => true]);

        $this->info('Running seeders...');
        Artisan::call('db:seed');

        $this->info('Migrations and seeders have been successfully executed!');
    }
}
