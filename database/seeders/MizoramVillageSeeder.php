<?php

namespace Valpuia\MizoramKhua\Database\Seeders;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\AizawlDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\ChamphaiDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\HnahthialDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\KhawzawlDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\KolasibDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\LawngtlaiDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\LungleiDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\MamitDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\SaitualDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\SerchhipDistrictSeeder;
use Valpuia\MizoramKhua\Database\Seeders\Villages\SiahaDistrictSeeder;

class MizoramVillageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AizawlDistrictSeeder::class,
            ChamphaiDistrictSeeder::class,
            HnahthialDistrictSeeder::class,
            KhawzawlDistrictSeeder::class,
            KolasibDistrictSeeder::class,
            LawngtlaiDistrictSeeder::class,
            LungleiDistrictSeeder::class,
            MamitDistrictSeeder::class,
            SaitualDistrictSeeder::class,
            SerchhipDistrictSeeder::class,
            SiahaDistrictSeeder::class,
        ]);
    }
}
