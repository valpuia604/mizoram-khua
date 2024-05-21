<?php

namespace Valpuia\MizoramKhua\Commands;

use Illuminate\Console\Command;
use Valpuia\MizoramKhua\Database\Seeders\MizoramDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\MizoramVillageSeeder;

class SeederCommand extends Command
{
    public $signature = 'mizoram-khua:seed';

    public $description = 'Published and seed mizoram countries & villages seeder file';

    public function handle(): int
    {
        $this->info('Seeding districts');

        $this->call('db:seed', [
            '--class' => MizoramDistrictSeeder::class,
        ]);

        $this->info('Seeding villages');

        $this->call('db:seed', [
            '--class' => MizoramVillageSeeder::class,
        ]);

        $this->info('Mizoram districts and villages seeds successfully');

        return self::SUCCESS;
    }
}
