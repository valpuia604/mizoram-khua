<?php

namespace Valpuia\MizoramKhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Models\MizoramVillage;

class SaitualDistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  sources: https://lgdirectory.gov.in/

        $districtVillages = [
            ['id' => '676', 'mizoram_district_id' => '9', 'name' => 'Buhban'],
            ['id' => '677', 'mizoram_district_id' => '9', 'name' => 'Changzawl'],
            ['id' => '678', 'mizoram_district_id' => '9', 'name' => 'Chiahpui'],
            ['id' => '679', 'mizoram_district_id' => '9', 'name' => 'Daido'],
            ['id' => '680', 'mizoram_district_id' => '9', 'name' => 'Dilkhan'],
            ['id' => '681', 'mizoram_district_id' => '9', 'name' => 'Hliappui'],
            ['id' => '682', 'mizoram_district_id' => '9', 'name' => 'Hrianghmun'],
            ['id' => '683', 'mizoram_district_id' => '9', 'name' => 'Kawlbem'],
            ['id' => '684', 'mizoram_district_id' => '9', 'name' => 'Keifang Leitan'],
            ['id' => '685', 'mizoram_district_id' => '9', 'name' => 'Keifang Venghlun'],
            ['id' => '686', 'mizoram_district_id' => '9', 'name' => 'Keifang Venglai'],
            ['id' => '687', 'mizoram_district_id' => '9', 'name' => 'Khanpui'],
            ['id' => '688', 'mizoram_district_id' => '9', 'name' => 'Khawkawn'],
            ['id' => '689', 'mizoram_district_id' => '9', 'name' => 'Khawlian'],
            ['id' => '690', 'mizoram_district_id' => '9', 'name' => 'Lailak'],
            ['id' => '691', 'mizoram_district_id' => '9', 'name' => 'Lamherh'],
            ['id' => '692', 'mizoram_district_id' => '9', 'name' => 'Lamzawl'],
            ['id' => '693', 'mizoram_district_id' => '9', 'name' => 'Lenchim'],
            ['id' => '694', 'mizoram_district_id' => '9', 'name' => 'Luangpawn'],
            ['id' => '695', 'mizoram_district_id' => '9', 'name' => 'Maite'],
            ['id' => '696', 'mizoram_district_id' => '9', 'name' => 'Mimbung'],
            ['id' => '697', 'mizoram_district_id' => '9', 'name' => 'Mualpheng'],
            ['id' => '698', 'mizoram_district_id' => '9', 'name' => 'N.E.Khawdungsei'],
            ['id' => '699', 'mizoram_district_id' => '9', 'name' => 'N.E.Tlangnuam'],
            ['id' => '700', 'mizoram_district_id' => '9', 'name' => 'Ngopa'],
            ['id' => '701', 'mizoram_district_id' => '9', 'name' => 'N.Khawlek'],
            ['id' => '702', 'mizoram_district_id' => '9', 'name' => 'N.Lungpher'],
            ['id' => '703', 'mizoram_district_id' => '9', 'name' => 'Pawlrang'],
            ['id' => '704', 'mizoram_district_id' => '9', 'name' => 'Phuaibuang'],
            ['id' => '705', 'mizoram_district_id' => '9', 'name' => 'Phullen'],
            ['id' => '706', 'mizoram_district_id' => '9', 'name' => 'Ruallung'],
            ['id' => '707', 'mizoram_district_id' => '9', 'name' => 'Rulchawm'],
            ['id' => '708', 'mizoram_district_id' => '9', 'name' => 'Saichal'],
            ['id' => '709', 'mizoram_district_id' => '9', 'name' => 'Saitual I'],
            ['id' => '710', 'mizoram_district_id' => '9', 'name' => 'Saitual II'],
            ['id' => '711', 'mizoram_district_id' => '9', 'name' => 'Saitual III'],
            ['id' => '712', 'mizoram_district_id' => '9', 'name' => 'Sihfa'],
            ['id' => '713', 'mizoram_district_id' => '9', 'name' => 'Suangpuilawn'],
            ['id' => '714', 'mizoram_district_id' => '9', 'name' => 'Tawizo'],
            ['id' => '715', 'mizoram_district_id' => '9', 'name' => 'Teikhang'],
            ['id' => '716', 'mizoram_district_id' => '9', 'name' => 'Thanglailung'],
            ['id' => '717', 'mizoram_district_id' => '9', 'name' => 'Tualbung'],
            ['id' => '718', 'mizoram_district_id' => '9', 'name' => 'Vanbawng'],
            ['id' => '719', 'mizoram_district_id' => '9', 'name' => 'Zawngin'],
        ];

        MizoramVillage::upsert($districtVillages, ['id']);
    }
}
