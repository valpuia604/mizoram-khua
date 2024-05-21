<?php

namespace Valpuia\MizoramKhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Models\MizoramVillage;

class KolasibDistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  sources: https://lgdirectory.gov.in/

        $districtVillages = [
            ['id' => '204', 'mizoram_district_id' => '5', 'name' => 'Bairabi North'],
            ['id' => '205', 'mizoram_district_id' => '5', 'name' => 'Barabi South'],
            ['id' => '206', 'mizoram_district_id' => '5', 'name' => 'Bilkhawthlir North'],
            ['id' => '207', 'mizoram_district_id' => '5', 'name' => 'Bilkhawthlir South'],
            ['id' => '208', 'mizoram_district_id' => '5', 'name' => 'Bualpui North'],
            ['id' => '209', 'mizoram_district_id' => '5', 'name' => 'Buhchangphai'],
            ['id' => '210', 'mizoram_district_id' => '5', 'name' => 'Bukpui'],
            ['id' => '211', 'mizoram_district_id' => '5', 'name' => 'Bukvannei'],
            ['id' => '212', 'mizoram_district_id' => '5', 'name' => 'Hortoki'],
            ['id' => '213', 'mizoram_district_id' => '5', 'name' => 'Kawnpui I'],
            ['id' => '214', 'mizoram_district_id' => '5', 'name' => 'Kawnpui II'],
            ['id' => '215', 'mizoram_district_id' => '5', 'name' => 'Kawnpui III'],
            ['id' => '216', 'mizoram_district_id' => '5', 'name' => 'Kawnpui Venglai'],
            ['id' => '217', 'mizoram_district_id' => '5', 'name' => 'Khamrang'],
            ['id' => '218', 'mizoram_district_id' => '5', 'name' => 'Kolasib College Veng'],
            ['id' => '219', 'mizoram_district_id' => '5', 'name' => 'Kolasib Diakkawn'],
            ['id' => '220', 'mizoram_district_id' => '5', 'name' => 'Kolasib Electric Veng'],
            ['id' => '221', 'mizoram_district_id' => '5', 'name' => 'Kolasib Gosen'],
            ['id' => '222', 'mizoram_district_id' => '5', 'name' => 'Kolasib Hmar Veng'],
            ['id' => '223', 'mizoram_district_id' => '5', 'name' => 'Kolasib Khuangpuilam'],
            ['id' => '224', 'mizoram_district_id' => '5', 'name' => 'Kolasib New Diakkawn'],
            ['id' => '225', 'mizoram_district_id' => '5', 'name' => 'Kolasib Project Veng'],
            ['id' => '226', 'mizoram_district_id' => '5', 'name' => 'Kolasib Rengtekawn'],
            ['id' => '227', 'mizoram_district_id' => '5', 'name' => 'Kolasib Saidan'],
            ['id' => '228', 'mizoram_district_id' => '5', 'name' => 'Kolasib Tuitha Veng'],
            ['id' => '229', 'mizoram_district_id' => '5', 'name' => 'Kolasib Tumpui'],
            ['id' => '230', 'mizoram_district_id' => '5', 'name' => 'Kolasib Venglai'],
            ['id' => '231', 'mizoram_district_id' => '5', 'name' => 'Kolasib Venglai East'],
            ['id' => '232', 'mizoram_district_id' => '5', 'name' => 'Kolasib Vengthar'],
            ['id' => '233', 'mizoram_district_id' => '5', 'name' => 'Lungdai'],
            ['id' => '234', 'mizoram_district_id' => '5', 'name' => 'Lungmuat'],
            ['id' => '235', 'mizoram_district_id' => '5', 'name' => 'Meidum'],
            ['id' => '236', 'mizoram_district_id' => '5', 'name' => 'Mualkhang'],
            ['id' => '237', 'mizoram_district_id' => '5', 'name' => 'N.Chawnpui'],
            ['id' => '238', 'mizoram_district_id' => '5', 'name' => 'N.Chhimluang'],
            ['id' => '239', 'mizoram_district_id' => '5', 'name' => 'New Builum'],
            ['id' => '240', 'mizoram_district_id' => '5', 'name' => 'N.Hlimen'],
            ['id' => '241', 'mizoram_district_id' => '5', 'name' => 'Nisapui'],
            ['id' => '242', 'mizoram_district_id' => '5', 'name' => 'North Chaltlang - I'],
            ['id' => '243', 'mizoram_district_id' => '5', 'name' => 'North Chaltlang - II'],
            ['id' => '244', 'mizoram_district_id' => '5', 'name' => 'N.Thinglian'],
            ['id' => '245', 'mizoram_district_id' => '5', 'name' => 'Pangbalkawn'],
            ['id' => '246', 'mizoram_district_id' => '5', 'name' => 'Phainuam'],
            ['id' => '247', 'mizoram_district_id' => '5', 'name' => 'Phaisen'],
            ['id' => '248', 'mizoram_district_id' => '5', 'name' => 'Saihapui K'],
            ['id' => '249', 'mizoram_district_id' => '5', 'name' => 'Saihapui V'],
            ['id' => '250', 'mizoram_district_id' => '5', 'name' => 'Saiphai'],
            ['id' => '251', 'mizoram_district_id' => '5', 'name' => 'Saipum'],
            ['id' => '252', 'mizoram_district_id' => '5', 'name' => 'S.Chhimluang'],
            ['id' => '253', 'mizoram_district_id' => '5', 'name' => 'Serkhan'],
            ['id' => '254', 'mizoram_district_id' => '5', 'name' => 'Thingdawl'],
            ['id' => '255', 'mizoram_district_id' => '5', 'name' => 'Thingthelh'],
            ['id' => '256', 'mizoram_district_id' => '5', 'name' => 'Vairengte I'],
            ['id' => '257', 'mizoram_district_id' => '5', 'name' => 'Vairengte II'],
            ['id' => '258', 'mizoram_district_id' => '5', 'name' => 'Vairengte III (Ioc Veng)'],
            ['id' => '259', 'mizoram_district_id' => '5', 'name' => 'Vairengte IV (State Veng)'],
            ['id' => '260', 'mizoram_district_id' => '5', 'name' => 'Zanlawn'],
        ];

        MizoramVillage::upsert($districtVillages, ['id']);
    }
}
