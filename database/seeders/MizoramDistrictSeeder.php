<?php

namespace Valpuia\MizoramKhua\Database\Seeders;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Models\MizoramDistrict;

class MizoramDistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $districts = [
            ['id' => '1', 'name' => 'Aizawl'],
            ['id' => '2', 'name' => 'Champhai'],
            ['id' => '3', 'name' => 'Hnahthial'],
            ['id' => '4', 'name' => 'Khawzawl'],
            ['id' => '5', 'name' => 'Kolasib'],
            ['id' => '6', 'name' => 'Lawngtlai'],
            ['id' => '7', 'name' => 'Lunglei'],
            ['id' => '8', 'name' => 'Mamit'],
            ['id' => '9', 'name' => 'Saitual'],
            ['id' => '10', 'name' => 'Serchhip'],
            ['id' => '11', 'name' => 'Siaha'],
        ];

        MizoramDistrict::upsert($districts, ['id']);
    }
}
