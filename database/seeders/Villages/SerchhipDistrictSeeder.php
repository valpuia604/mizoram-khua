<?php

namespace Valpuia\MizoramKhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Models\MizoramVillage;

class SerchhipDistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  sources: https://lgdirectory.gov.in/

        $districtVillages = [
            ['id' => '720', 'mizoram_district_id' => '10', 'name' => 'Baktawng Vengpui'],
            ['id' => '721', 'mizoram_district_id' => '10', 'name' => 'Bawktlang'],
            ['id' => '722', 'mizoram_district_id' => '10', 'name' => 'Buangpui'],
            ['id' => '723', 'mizoram_district_id' => '10', 'name' => 'Buhkangkawn'],
            ['id' => '724', 'mizoram_district_id' => '10', 'name' => 'Bungtlang'],
            ['id' => '725', 'mizoram_district_id' => '10', 'name' => 'Chekawn'],
            ['id' => '726', 'mizoram_district_id' => '10', 'name' => 'Chhiahtlang North'],
            ['id' => '727', 'mizoram_district_id' => '10', 'name' => 'Chhiahtlang South'],
            ['id' => '728', 'mizoram_district_id' => '10', 'name' => 'Chhingchhip'],
            ['id' => '729', 'mizoram_district_id' => '10', 'name' => 'Chhuanthar Tlangnuam'],
            ['id' => '730', 'mizoram_district_id' => '10', 'name' => 'Darnam'],
            ['id' => '731', 'mizoram_district_id' => '10', 'name' => 'E.Lungdar'],
            ['id' => '732', 'mizoram_district_id' => '10', 'name' => 'Hmawngkawn'],
            ['id' => '733', 'mizoram_district_id' => '10', 'name' => 'Hmuntha'],
            ['id' => '734', 'mizoram_district_id' => '10', 'name' => 'Hmunzawl'],
            ['id' => '735', 'mizoram_district_id' => '10', 'name' => 'Hriangtlang'],
            ['id' => '736', 'mizoram_district_id' => '10', 'name' => 'Hualtu'],
            ['id' => '737', 'mizoram_district_id' => '10', 'name' => 'Kanghmun South'],
            ['id' => '738', 'mizoram_district_id' => '10', 'name' => 'Keitum'],
            ['id' => '739', 'mizoram_district_id' => '10', 'name' => 'Khawbel'],
            ['id' => '740', 'mizoram_district_id' => '10', 'name' => 'Khawlailung'],
            ['id' => '741', 'mizoram_district_id' => '10', 'name' => 'Khumtung'],
            ['id' => '742', 'mizoram_district_id' => '10', 'name' => 'Leng'],
            ['id' => '743', 'mizoram_district_id' => '10', 'name' => 'Lungchhuan'],
            ['id' => '744', 'mizoram_district_id' => '10', 'name' => 'Lungkawlh'],
            ['id' => '745', 'mizoram_district_id' => '10', 'name' => 'Lungpho'],
            ['id' => '746', 'mizoram_district_id' => '10', 'name' => 'Mualcheng'],
            ['id' => '747', 'mizoram_district_id' => '10', 'name' => 'Mualpui Chhingchhip'],
            ['id' => '748', 'mizoram_district_id' => '10', 'name' => 'Neihloh'],
            ['id' => '749', 'mizoram_district_id' => '10', 'name' => 'New Serchhip North'],
            ['id' => '750', 'mizoram_district_id' => '10', 'name' => 'New Serchhip South'],
            ['id' => '751', 'mizoram_district_id' => '10', 'name' => 'Ngentiang'],
            ['id' => '752', 'mizoram_district_id' => '10', 'name' => 'North Vanlaiphai'],
            ['id' => '753', 'mizoram_district_id' => '10', 'name' => 'Piler'],
            ['id' => '754', 'mizoram_district_id' => '10', 'name' => 'Rullam'],
            ['id' => '755', 'mizoram_district_id' => '10', 'name' => 'Sailulak'],
            ['id' => '756', 'mizoram_district_id' => '10', 'name' => 'Serchhip Chanmari Veng'],
            ['id' => '757', 'mizoram_district_id' => '10', 'name' => 'Serchhip I'],
            ['id' => '758', 'mizoram_district_id' => '10', 'name' => 'Serchhip II'],
            ['id' => '759', 'mizoram_district_id' => '10', 'name' => 'Serchhip III'],
            ['id' => '760', 'mizoram_district_id' => '10', 'name' => 'Serchhip IV'],
            ['id' => '761', 'mizoram_district_id' => '10', 'name' => 'Serchhip V'],
            ['id' => '762', 'mizoram_district_id' => '10', 'name' => 'Serchhip VI'],
            ['id' => '763', 'mizoram_district_id' => '10', 'name' => 'Serchhip VII'],
            ['id' => '764', 'mizoram_district_id' => '10', 'name' => 'Serchhip VIII'],
            ['id' => '765', 'mizoram_district_id' => '10', 'name' => 'Sialhau'],
            ['id' => '766', 'mizoram_district_id' => '10', 'name' => 'Sialsir'],
            ['id' => '767', 'mizoram_district_id' => '10', 'name' => 'Thentlang'],
            ['id' => '768', 'mizoram_district_id' => '10', 'name' => 'Thenzawl East'],
            ['id' => '769', 'mizoram_district_id' => '10', 'name' => 'Thenzawl Kanan'],
            ['id' => '770', 'mizoram_district_id' => '10', 'name' => 'Thenzawl Vengthar'],
            ['id' => '771', 'mizoram_district_id' => '10', 'name' => 'Thenzawl West'],
            ['id' => '772', 'mizoram_district_id' => '10', 'name' => 'Thinglian'],
            ['id' => '773', 'mizoram_district_id' => '10', 'name' => 'Vanchengte'],
            ['id' => '774', 'mizoram_district_id' => '10', 'name' => 'Zote S'],
        ];

        MizoramVillage::upsert($districtVillages, ['id']);
    }
}
