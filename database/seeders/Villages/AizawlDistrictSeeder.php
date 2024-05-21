<?php

namespace Valpuia\MizoramKhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Models\MizoramVillage;

class AizawlDistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  sources: https://lgdirectory.gov.in/

        $districtVillages = [
            ['id' => '1', 'mizoram_district_id' => '1', 'name' => 'Aibawk'],
            ['id' => '2', 'mizoram_district_id' => '1', 'name' => 'Chamring'],
            ['id' => '3', 'mizoram_district_id' => '1', 'name' => 'Chawilung'],
            ['id' => '4', 'mizoram_district_id' => '1', 'name' => 'Chhanchhuahna Khawpui'],
            ['id' => '5', 'mizoram_district_id' => '1', 'name' => 'Darlawn Chhim Veng'],
            ['id' => '6', 'mizoram_district_id' => '1', 'name' => 'Darlawng'],
            ['id' => '7', 'mizoram_district_id' => '1', 'name' => 'Darlawn Venghlun'],
            ['id' => '8', 'mizoram_district_id' => '1', 'name' => 'Darlawn Vengpui'],
            ['id' => '9', 'mizoram_district_id' => '1', 'name' => 'East Damdiai'],
            ['id' => '10', 'mizoram_district_id' => '1', 'name' => 'E.Phaileng'],
            ['id' => '11', 'mizoram_district_id' => '1', 'name' => 'Falkawn'],
            ['id' => '12', 'mizoram_district_id' => '1', 'name' => 'Hmuifang'],
            ['id' => '13', 'mizoram_district_id' => '1', 'name' => 'Hmunnghak'],
            ['id' => '14', 'mizoram_district_id' => '1', 'name' => 'Hualngohmun'],
            ['id' => '15', 'mizoram_district_id' => '1', 'name' => 'Kelsih'],
            ['id' => '16', 'mizoram_district_id' => '1', 'name' => 'Kepran'],
            ['id' => '17', 'mizoram_district_id' => '1', 'name' => 'Khawpuar'],
            ['id' => '18', 'mizoram_district_id' => '1', 'name' => 'Khawruhlian'],
            ['id' => '19', 'mizoram_district_id' => '1', 'name' => 'Lamchhip'],
            ['id' => '20', 'mizoram_district_id' => '1', 'name' => 'Lengpui'],
            ['id' => '21', 'mizoram_district_id' => '1', 'name' => 'Lungleng I'],
            ['id' => '22', 'mizoram_district_id' => '1', 'name' => 'Lungsei'],
            ['id' => '23', 'mizoram_district_id' => '1', 'name' => 'Lungsum'],
            ['id' => '24', 'mizoram_district_id' => '1', 'name' => 'Maubuang'],
            ['id' => '25', 'mizoram_district_id' => '1', 'name' => 'Mauchar'],
            ['id' => '26', 'mizoram_district_id' => '1', 'name' => 'Melriat'],
            ['id' => '27', 'mizoram_district_id' => '1', 'name' => 'Muallungthu'],
            ['id' => '28', 'mizoram_district_id' => '1', 'name' => 'Muthi'],
            ['id' => '29', 'mizoram_district_id' => '1', 'name' => 'Nausel'],
            ['id' => '30', 'mizoram_district_id' => '1', 'name' => 'New Vervek'],
            ['id' => '31', 'mizoram_district_id' => '1', 'name' => 'N.Khawdungsei'],
            ['id' => '32', 'mizoram_district_id' => '1', 'name' => 'N.Lungleng'],
            ['id' => '33', 'mizoram_district_id' => '1', 'name' => 'N.Serzawl'],
            ['id' => '34', 'mizoram_district_id' => '1', 'name' => 'N.Tinghmun'],
            ['id' => '35', 'mizoram_district_id' => '1', 'name' => 'Palsang'],
            ['id' => '36', 'mizoram_district_id' => '1', 'name' => 'Pehlawn'],
            ['id' => '37', 'mizoram_district_id' => '1', 'name' => 'Phulmawi'],
            ['id' => '38', 'mizoram_district_id' => '1', 'name' => 'Phulpui'],
            ['id' => '39', 'mizoram_district_id' => '1', 'name' => 'Ratu'],
            ['id' => '40', 'mizoram_district_id' => '1', 'name' => 'Sailam'],
            ['id' => '41', 'mizoram_district_id' => '1', 'name' => 'Sailutar'],
            ['id' => '42', 'mizoram_district_id' => '1', 'name' => 'Sairang'],
            ['id' => '43', 'mizoram_district_id' => '1', 'name' => 'Sairang Dinthar'],
            ['id' => '44', 'mizoram_district_id' => '1', 'name' => 'Sairang Sihhmui'],
            ['id' => '45', 'mizoram_district_id' => '1', 'name' => 'Sakawrdai'],
            ['id' => '46', 'mizoram_district_id' => '1', 'name' => 'Samlukhai'],
            ['id' => '47', 'mizoram_district_id' => '1', 'name' => 'Samtlang'],
            ['id' => '48', 'mizoram_district_id' => '1', 'name' => 'Sateek'],
            ['id' => '49', 'mizoram_district_id' => '1', 'name' => 'Sawleng'],
            ['id' => '50', 'mizoram_district_id' => '1', 'name' => 'Seling'],
            ['id' => '51', 'mizoram_district_id' => '1', 'name' => 'Sesawng I'],
            ['id' => '52', 'mizoram_district_id' => '1', 'name' => 'Sesawng II'],
            ['id' => '53', 'mizoram_district_id' => '1', 'name' => 'Sesawng III'],
            ['id' => '54', 'mizoram_district_id' => '1', 'name' => 'Sialsuk'],
            ['id' => '55', 'mizoram_district_id' => '1', 'name' => 'Sihphir'],
            ['id' => '56', 'mizoram_district_id' => '1', 'name' => 'Sihphir Venghlun'],
            ['id' => '57', 'mizoram_district_id' => '1', 'name' => 'Sumsuih'],
            ['id' => '58', 'mizoram_district_id' => '1', 'name' => 'Sunhluchhip'],
            ['id' => '59', 'mizoram_district_id' => '1', 'name' => 'Tachhip'],
            ['id' => '60', 'mizoram_district_id' => '1', 'name' => 'Thiak'],
            ['id' => '61', 'mizoram_district_id' => '1', 'name' => 'Thingsat'],
            ['id' => '62', 'mizoram_district_id' => '1', 'name' => 'Thingsulthliah - I'],
            ['id' => '63', 'mizoram_district_id' => '1', 'name' => 'Thingsulthliah - II'],
            ['id' => '64', 'mizoram_district_id' => '1', 'name' => 'Thingsul Tlangnuam'],
            ['id' => '65', 'mizoram_district_id' => '1', 'name' => 'Tlungvel'],
            ['id' => '66', 'mizoram_district_id' => '1', 'name' => 'Tuirial'],
            ['id' => '67', 'mizoram_district_id' => '1', 'name' => 'Tuirial Airfield'],
            ['id' => '68', 'mizoram_district_id' => '1', 'name' => 'Upper Sakawrdai'],
            ['id' => '69', 'mizoram_district_id' => '1', 'name' => 'Vaitin'],
            ['id' => '70', 'mizoram_district_id' => '1', 'name' => 'Zohmun'],
            ['id' => '71', 'mizoram_district_id' => '1', 'name' => 'Zokhawthiang'],
        ];

        MizoramVillage::upsert($districtVillages, ['id']);
    }
}
