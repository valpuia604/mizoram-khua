<?php

namespace Valpuia\MizoramKhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Models\MizoramVillage;

class ChamphaiDistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  sources: https://lgdirectory.gov.in/

        $districtVillages = [
            ['id' => '72', 'mizoram_district_id' => '2', 'name' => 'Bethel'],
            ['id' => '73', 'mizoram_district_id' => '2', 'name' => 'Buang'],
            ['id' => '74', 'mizoram_district_id' => '2', 'name' => 'Bulfekzawl'],
            ['id' => '75', 'mizoram_district_id' => '2', 'name' => 'Bungzung'],
            ['id' => '76', 'mizoram_district_id' => '2', 'name' => 'Champhai Jail Veng'],
            ['id' => '77', 'mizoram_district_id' => '2', 'name' => 'Champhai Vengthar'],
            ['id' => '78', 'mizoram_district_id' => '2', 'name' => 'Chawngtui E'],
            ['id' => '79', 'mizoram_district_id' => '2', 'name' => 'Chhungte'],
            ['id' => '80', 'mizoram_district_id' => '2', 'name' => 'Dilkawn'],
            ['id' => '81', 'mizoram_district_id' => '2', 'name' => 'Dinthar'],
            ['id' => '82', 'mizoram_district_id' => '2', 'name' => 'Dungtlang'],
            ['id' => '83', 'mizoram_district_id' => '2', 'name' => 'Electric Veng'],
            ['id' => '84', 'mizoram_district_id' => '2', 'name' => 'Farkawn'],
            ['id' => '85', 'mizoram_district_id' => '2', 'name' => 'Hmunhmeltha'],
            ['id' => '86', 'mizoram_district_id' => '2', 'name' => 'Hnahlan'],
            ['id' => '87', 'mizoram_district_id' => '2', 'name' => 'Hruaikawn'],
            ['id' => '88', 'mizoram_district_id' => '2', 'name' => 'Kahrawt'],
            ['id' => '89', 'mizoram_district_id' => '2', 'name' => 'Kanan'],
            ['id' => '90', 'mizoram_district_id' => '2', 'name' => 'Kelkang'],
            ['id' => '91', 'mizoram_district_id' => '2', 'name' => 'Khankawn'],
            ['id' => '92', 'mizoram_district_id' => '2', 'name' => 'Khawbung South'],
            ['id' => '93', 'mizoram_district_id' => '2', 'name' => 'Khuangleng'],
            ['id' => '94', 'mizoram_district_id' => '2', 'name' => 'Khuangphah'],
            ['id' => '95', 'mizoram_district_id' => '2', 'name' => 'Khuangthing'],
            ['id' => '96', 'mizoram_district_id' => '2', 'name' => 'Leisenzo'],
            ['id' => '97', 'mizoram_district_id' => '2', 'name' => 'Leithum'],
            ['id' => '98', 'mizoram_district_id' => '2', 'name' => 'Lianpui'],
            ['id' => '99', 'mizoram_district_id' => '2', 'name' => 'Lungphunlian'],
            ['id' => '100', 'mizoram_district_id' => '2', 'name' => 'Melbuk'],
            ['id' => '101', 'mizoram_district_id' => '2', 'name' => 'Mualkawi'],
            ['id' => '102', 'mizoram_district_id' => '2', 'name' => 'Murlen'],
            ['id' => '103', 'mizoram_district_id' => '2', 'name' => 'N. Diltlang'],
            ['id' => '104', 'mizoram_district_id' => '2', 'name' => 'New Champhai'],
            ['id' => '105', 'mizoram_district_id' => '2', 'name' => 'New Hruaikawn'],
            ['id' => '106', 'mizoram_district_id' => '2', 'name' => 'Ngur'],
            ['id' => '107', 'mizoram_district_id' => '2', 'name' => 'N.Khawbung'],
            ['id' => '108', 'mizoram_district_id' => '2', 'name' => 'Ruantlang'],
            ['id' => '109', 'mizoram_district_id' => '2', 'name' => 'Ruantlang Mual Veng'],
            ['id' => '110', 'mizoram_district_id' => '2', 'name' => 'Samthang (Old)'],
            ['id' => '111', 'mizoram_district_id' => '2', 'name' => 'Sazep'],
            ['id' => '112', 'mizoram_district_id' => '2', 'name' => 'Selam'],
            ['id' => '113', 'mizoram_district_id' => '2', 'name' => 'Sesih'],
            ['id' => '114', 'mizoram_district_id' => '2', 'name' => 'Thekpui'],
            ['id' => '115', 'mizoram_district_id' => '2', 'name' => 'Thekte'],
            ['id' => '116', 'mizoram_district_id' => '2', 'name' => 'Tlangsam'],
            ['id' => '117', 'mizoram_district_id' => '2', 'name' => 'Tualcheng'],
            ['id' => '118', 'mizoram_district_id' => '2', 'name' => 'Tuipui'],
            ['id' => '119', 'mizoram_district_id' => '2', 'name' => 'Vaikhawtlang'],
            ['id' => '120', 'mizoram_district_id' => '2', 'name' => 'Vangchhia'],
            ['id' => '121', 'mizoram_district_id' => '2', 'name' => 'Vanzau'],
            ['id' => '122', 'mizoram_district_id' => '2', 'name' => 'Vapar'],
            ['id' => '123', 'mizoram_district_id' => '2', 'name' => 'Vaphai'],
            ['id' => '124', 'mizoram_district_id' => '2', 'name' => 'Venglai'],
            ['id' => '125', 'mizoram_district_id' => '2', 'name' => 'Vengsang'],
            ['id' => '126', 'mizoram_district_id' => '2', 'name' => 'Vengthlang'],
            ['id' => '127', 'mizoram_district_id' => '2', 'name' => 'Vengthlang North'],
            ['id' => '128', 'mizoram_district_id' => '2', 'name' => 'Zawlsei'],
            ['id' => '129', 'mizoram_district_id' => '2', 'name' => 'Zawngtetui'],
            ['id' => '130', 'mizoram_district_id' => '2', 'name' => 'Zion Veng'],
            ['id' => '131', 'mizoram_district_id' => '2', 'name' => 'Zokhawthar'],
            ['id' => '132', 'mizoram_district_id' => '2', 'name' => 'Zote'],
            ['id' => '133', 'mizoram_district_id' => '2', 'name' => 'Zotlang East'],
        ];

        MizoramVillage::upsert($districtVillages, ['id']);
    }
}
