<?php

namespace Valpuia\MizoramKhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Models\MizoramVillage;

class KhawzawlDistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  sources: https://lgdirectory.gov.in/

        $districtVillages = [
            ['id' => '166', 'mizoram_district_id' => '4', 'name' => 'Aiduzawl'],
            ['id' => '167', 'mizoram_district_id' => '4', 'name' => 'Arro'],
            ['id' => '168', 'mizoram_district_id' => '4', 'name' => 'Biate'],
            ['id' => '169', 'mizoram_district_id' => '4', 'name' => 'Chalrang'],
            ['id' => '170', 'mizoram_district_id' => '4', 'name' => 'Chawngtlai'],
            ['id' => '171', 'mizoram_district_id' => '4', 'name' => 'Chhawrtui'],
            ['id' => '172', 'mizoram_district_id' => '4', 'name' => 'Dulte'],
            ['id' => '173', 'mizoram_district_id' => '4', 'name' => 'Hmuncheng'],
            ['id' => '174', 'mizoram_district_id' => '4', 'name' => 'Kawlkulh North'],
            ['id' => '175', 'mizoram_district_id' => '4', 'name' => 'Kawlkulh South'],
            ['id' => '176', 'mizoram_district_id' => '4', 'name' => 'Khawhai'],
            ['id' => '177', 'mizoram_district_id' => '4', 'name' => 'Khawzawl Arro Veng'],
            ['id' => '178', 'mizoram_district_id' => '4', 'name' => 'Khawzawl Darngawn'],
            ['id' => '179', 'mizoram_district_id' => '4', 'name' => 'Khawzawl Dinthar'],
            ['id' => '180', 'mizoram_district_id' => '4', 'name' => 'Khawzawl Electric'],
            ['id' => '181', 'mizoram_district_id' => '4', 'name' => 'Khawzawl Hermon'],
            ['id' => '182', 'mizoram_district_id' => '4', 'name' => 'Khawzawl Kawnzar'],
            ['id' => '183', 'mizoram_district_id' => '4', 'name' => 'Khawzawl Vengthar'],
            ['id' => '184', 'mizoram_district_id' => '4', 'name' => 'Khawzawl Zaingen'],
            ['id' => '185', 'mizoram_district_id' => '4', 'name' => 'Khawzawl Zuchhip'],
            ['id' => '186', 'mizoram_district_id' => '4', 'name' => 'Khualen'],
            ['id' => '187', 'mizoram_district_id' => '4', 'name' => 'Lungtan'],
            ['id' => '188', 'mizoram_district_id' => '4', 'name' => 'Lungvar'],
            ['id' => '189', 'mizoram_district_id' => '4', 'name' => 'Neihdawn'],
            ['id' => '190', 'mizoram_district_id' => '4', 'name' => 'New Chalrang'],
            ['id' => '191', 'mizoram_district_id' => '4', 'name' => 'Ngaizawl'],
            ['id' => '192', 'mizoram_district_id' => '4', 'name' => 'Pamchung'],
            ['id' => '193', 'mizoram_district_id' => '4', 'name' => 'Puilo'],
            ['id' => '194', 'mizoram_district_id' => '4', 'name' => 'Rabung'],
            ['id' => '195', 'mizoram_district_id' => '4', 'name' => 'Riangtlei'],
            ['id' => '196', 'mizoram_district_id' => '4', 'name' => 'Sialhawk'],
            ['id' => '197', 'mizoram_district_id' => '4', 'name' => 'Tlangmawi'],
            ['id' => '198', 'mizoram_district_id' => '4', 'name' => 'Tlangpui'],
            ['id' => '199', 'mizoram_district_id' => '4', 'name' => 'Tualpui'],
            ['id' => '200', 'mizoram_district_id' => '4', 'name' => 'Tualte'],
            ['id' => '201', 'mizoram_district_id' => '4', 'name' => 'Vanchengpui'],
            ['id' => '202', 'mizoram_district_id' => '4', 'name' => 'Vangtlang'],
            ['id' => '203', 'mizoram_district_id' => '4', 'name' => 'Vankal'],
        ];

        MizoramVillage::upsert($districtVillages, ['id']);
    }
}
