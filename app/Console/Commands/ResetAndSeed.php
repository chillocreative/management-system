<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetAndSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:reset-seed {--force : Force the operation without confirmation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset the database and reseed it with fresh data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (!$this->option('force')) {
            if (!$this->confirm('This will delete all data and recreate the database. Are you sure?')) {
                $this->info('Operation cancelled.');
                return;
            }
        }

        $this->info('Resetting database...');
        
        // Reset the database
        $this->call('migrate:fresh');
        
        $this->info('Seeding database...');
        
        // Seed the database
        $this->call('db:seed');
        
        $this->info('Database reset and seeded successfully!');
        $this->info('Default password for all users: password');
        $this->info('Admin user: john@example.com');
    }
}
