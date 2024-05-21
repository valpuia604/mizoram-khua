<?php

namespace Valpuia\MizoramKhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Models\MizoramVillage;

class HnahthialDistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  sources: https://lgdirectory.gov.in/

        $districtVillages = [
            ['id' => '134', 'mizoram_district_id' => '3', 'name' => 'Aithur'],
            ['id' => '135', 'mizoram_district_id' => '3', 'name' => 'Bualpui H'],
            ['id' => '136', 'mizoram_district_id' => '3', 'name' => 'Bualpui’V’'],
            ['id' => '137', 'mizoram_district_id' => '3', 'name' => 'Chawngtui South'],
            ['id' => '138', 'mizoram_district_id' => '3', 'name' => 'Cherhlun'],
            ['id' => '139', 'mizoram_district_id' => '3', 'name' => 'Chhipphir'],
            ['id' => '140', 'mizoram_district_id' => '3', 'name' => 'Darzo'],
            ['id' => '141', 'mizoram_district_id' => '3', 'name' => 'Denlung'],
            ['id' => '142', 'mizoram_district_id' => '3', 'name' => 'Hnahthial North I'],
            ['id' => '143', 'mizoram_district_id' => '3', 'name' => 'Hnahthial North II'],
            ['id' => '144', 'mizoram_district_id' => '3', 'name' => 'Hnahthial South I'],
            ['id' => '145', 'mizoram_district_id' => '3', 'name' => 'Hnahthial South II'],
            ['id' => '146', 'mizoram_district_id' => '3', 'name' => 'Hnahthial South III'],
            ['id' => '147', 'mizoram_district_id' => '3', 'name' => 'Khawhri'],
            ['id' => '148', 'mizoram_district_id' => '3', 'name' => 'Leite'],
            ['id' => '149', 'mizoram_district_id' => '3', 'name' => 'Lungmawi'],
            ['id' => '150', 'mizoram_district_id' => '3', 'name' => 'Lungpuitlang'],
            ['id' => '151', 'mizoram_district_id' => '3', 'name' => 'Muallianpui'],
            ['id' => '152', 'mizoram_district_id' => '3', 'name' => 'New Kawnpui (Hnahthial)'],
            ['id' => '153', 'mizoram_district_id' => '3', 'name' => 'New Ngharchhip'],
            ['id' => '154', 'mizoram_district_id' => '3', 'name' => 'Ngharchhip'],
            ['id' => '155', 'mizoram_district_id' => '3', 'name' => 'Pangzawl North'],
            ['id' => '156', 'mizoram_district_id' => '3', 'name' => 'Pangzawl South'],
            ['id' => '157', 'mizoram_district_id' => '3', 'name' => 'Phaileng South'],
            ['id' => '158', 'mizoram_district_id' => '3', 'name' => 'Rawpui'],
            ['id' => '159', 'mizoram_district_id' => '3', 'name' => 'Rotlang East'],
            ['id' => '160', 'mizoram_district_id' => '3', 'name' => 'South Lungleng'],
            ['id' => '161', 'mizoram_district_id' => '3', 'name' => 'South Vanlaiphai'],
            ['id' => '162', 'mizoram_district_id' => '3', 'name' => 'Tarpho'],
            ['id' => '163', 'mizoram_district_id' => '3', 'name' => 'Thiltlang'],
            ['id' => '164', 'mizoram_district_id' => '3', 'name' => 'Thingsai'],
            ['id' => '165', 'mizoram_district_id' => '3', 'name' => 'Tuipui D'],
        ];

        MizoramVillage::upsert($districtVillages, ['id']);
    }
}
