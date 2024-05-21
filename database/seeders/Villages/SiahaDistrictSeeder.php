<?php

namespace Valpuia\MizoramKhua\Database\Seeders\Villages;

use Illuminate\Database\Seeder;
use Valpuia\MizoramKhua\Models\MizoramVillage;

class SiahaDistrictSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  sources: https://lgdirectory.gov.in/

        $districtVillages = [
            ['id' => '775', 'mizoram_district_id' => '11', 'name' => 'Ahmypi'],
            ['id' => '776', 'mizoram_district_id' => '11', 'name' => 'Amobyu Beivah'],
            ['id' => '777', 'mizoram_district_id' => '11', 'name' => 'Amobyu Ch'],
            ['id' => '778', 'mizoram_district_id' => '11', 'name' => 'Amobyu Vaithie'],
            ['id' => '779', 'mizoram_district_id' => '11', 'name' => 'Amohtlah'],
            ['id' => '780', 'mizoram_district_id' => '11', 'name' => 'Bymari'],
            ['id' => '781', 'mizoram_district_id' => '11', 'name' => 'Chakhei I'],
            ['id' => '782', 'mizoram_district_id' => '11', 'name' => 'Chakhei II'],
            ['id' => '783', 'mizoram_district_id' => '11', 'name' => 'Chakheitla'],
            ['id' => '784', 'mizoram_district_id' => '11', 'name' => 'Chapi I'],
            ['id' => '785', 'mizoram_district_id' => '11', 'name' => 'Chapi II'],
            ['id' => '786', 'mizoram_district_id' => '11', 'name' => 'Chapi III'],
            ['id' => '787', 'mizoram_district_id' => '11', 'name' => 'Chhaolo I'],
            ['id' => '788', 'mizoram_district_id' => '11', 'name' => 'Chhaolo II'],
            ['id' => '789', 'mizoram_district_id' => '11', 'name' => 'Chhaolo III'],
            ['id' => '790', 'mizoram_district_id' => '11', 'name' => 'Chheihlu'],
            ['id' => '791', 'mizoram_district_id' => '11', 'name' => 'College Vaih I'],
            ['id' => '792', 'mizoram_district_id' => '11', 'name' => 'College Vaih II'],
            ['id' => '793', 'mizoram_district_id' => '11', 'name' => 'College Vaih III'],
            ['id' => '794', 'mizoram_district_id' => '11', 'name' => 'Council Vaih'],
            ['id' => '795', 'mizoram_district_id' => '11', 'name' => 'Ecm Vaih'],
            ['id' => '796', 'mizoram_district_id' => '11', 'name' => 'Iana'],
            ['id' => '797', 'mizoram_district_id' => '11', 'name' => 'Iana II'],
            ['id' => '798', 'mizoram_district_id' => '11', 'name' => 'Kaisie'],
            ['id' => '799', 'mizoram_district_id' => '11', 'name' => 'Kaochao East I'],
            ['id' => '800', 'mizoram_district_id' => '11', 'name' => 'Kaochao East II'],
            ['id' => '801', 'mizoram_district_id' => '11', 'name' => 'Khaikhy'],
            ['id' => '802', 'mizoram_district_id' => '11', 'name' => 'Khopai'],
            ['id' => '803', 'mizoram_district_id' => '11', 'name' => 'Laki-I'],
            ['id' => '804', 'mizoram_district_id' => '11', 'name' => 'Laki-Ii'],
            ['id' => '805', 'mizoram_district_id' => '11', 'name' => 'Laty'],
            ['id' => '806', 'mizoram_district_id' => '11', 'name' => 'Lobo I'],
            ['id' => '807', 'mizoram_district_id' => '11', 'name' => 'Lobo II'],
            ['id' => '808', 'mizoram_district_id' => '11', 'name' => 'Lodaw'],
            ['id' => '809', 'mizoram_district_id' => '11', 'name' => 'Longmasu'],
            ['id' => '810', 'mizoram_district_id' => '11', 'name' => 'Lopu I'],
            ['id' => '811', 'mizoram_district_id' => '11', 'name' => 'Lopu II'],
            ['id' => '812', 'mizoram_district_id' => '11', 'name' => 'Lopu III'],
            ['id' => '813', 'mizoram_district_id' => '11', 'name' => 'Lorrain Ville'],
            ['id' => '814', 'mizoram_district_id' => '11', 'name' => 'Maisa'],
            ['id' => '815', 'mizoram_district_id' => '11', 'name' => 'Mawhrei'],
            ['id' => '816', 'mizoram_district_id' => '11', 'name' => 'Meisatla-I'],
            ['id' => '817', 'mizoram_district_id' => '11', 'name' => 'Meisatla-Ii'],
            ['id' => '818', 'mizoram_district_id' => '11', 'name' => 'Meisavaih East'],
            ['id' => '819', 'mizoram_district_id' => '11', 'name' => 'Meisavaih West'],
            ['id' => '820', 'mizoram_district_id' => '11', 'name' => 'Miepu-I'],
            ['id' => '821', 'mizoram_district_id' => '11', 'name' => 'Miepu-Ii'],
            ['id' => '822', 'mizoram_district_id' => '11', 'name' => 'New Colony-I'],
            ['id' => '823', 'mizoram_district_id' => '11', 'name' => 'New Colony - II'],
            ['id' => '824', 'mizoram_district_id' => '11', 'name' => 'New Colony-Iii'],
            ['id' => '825', 'mizoram_district_id' => '11', 'name' => 'New Colony-Iv'],
            ['id' => '826', 'mizoram_district_id' => '11', 'name' => 'New Colony V'],
            ['id' => '827', 'mizoram_district_id' => '11', 'name' => 'New Laty'],
            ['id' => '828', 'mizoram_district_id' => '11', 'name' => 'New Saikao'],
            ['id' => '829', 'mizoram_district_id' => '11', 'name' => 'New Siaha East I'],
            ['id' => '830', 'mizoram_district_id' => '11', 'name' => 'New Siaha East II'],
            ['id' => '831', 'mizoram_district_id' => '11', 'name' => 'New Siaha West'],
            ['id' => '832', 'mizoram_district_id' => '11', 'name' => 'New Siaha West II'],
            ['id' => '833', 'mizoram_district_id' => '11', 'name' => 'Noaotlah I'],
            ['id' => '834', 'mizoram_district_id' => '11', 'name' => 'Noaotlah II'],
            ['id' => '835', 'mizoram_district_id' => '11', 'name' => 'Noaotlah III'],
            ['id' => '836', 'mizoram_district_id' => '11', 'name' => 'Old Tisopi'],
            ['id' => '837', 'mizoram_district_id' => '11', 'name' => 'Pala'],
            ['id' => '838', 'mizoram_district_id' => '11', 'name' => 'Phura-N'],
            ['id' => '839', 'mizoram_district_id' => '11', 'name' => 'Phura-S'],
            ['id' => '840', 'mizoram_district_id' => '11', 'name' => 'Riasikah'],
            ['id' => '841', 'mizoram_district_id' => '11', 'name' => 'Saikao'],
            ['id' => '842', 'mizoram_district_id' => '11', 'name' => 'Saikao Beivaih'],
            ['id' => '843', 'mizoram_district_id' => '11', 'name' => 'Siahatlah I'],
            ['id' => '844', 'mizoram_district_id' => '11', 'name' => 'Siahatlah II'],
            ['id' => '845', 'mizoram_district_id' => '11', 'name' => 'Siahatlah III'],
            ['id' => '846', 'mizoram_district_id' => '11', 'name' => 'Siaha Vaihpi Bazar'],
            ['id' => '847', 'mizoram_district_id' => '11', 'name' => 'Siaha Vaihpi I'],
            ['id' => '848', 'mizoram_district_id' => '11', 'name' => 'Siaha Vaihpi II'],
            ['id' => '849', 'mizoram_district_id' => '11', 'name' => 'Siaha Vaihpi III'],
            ['id' => '850', 'mizoram_district_id' => '11', 'name' => 'Siasi'],
            ['id' => '851', 'mizoram_district_id' => '11', 'name' => 'Siata-I'],
            ['id' => '852', 'mizoram_district_id' => '11', 'name' => 'Siata-Ii'],
            ['id' => '853', 'mizoram_district_id' => '11', 'name' => 'Siatlai'],
            ['id' => '854', 'mizoram_district_id' => '11', 'name' => 'Supha'],
            ['id' => '855', 'mizoram_district_id' => '11', 'name' => 'Theiri'],
            ['id' => '856', 'mizoram_district_id' => '11', 'name' => 'Theiva'],
            ['id' => '857', 'mizoram_district_id' => '11', 'name' => 'Thiahra'],
            ['id' => '858', 'mizoram_district_id' => '11', 'name' => 'Thosai'],
            ['id' => '859', 'mizoram_district_id' => '11', 'name' => 'Tipa B'],
            ['id' => '860', 'mizoram_district_id' => '11', 'name' => 'Tipa D I'],
            ['id' => '861', 'mizoram_district_id' => '11', 'name' => 'Tipa D II'],
            ['id' => '862', 'mizoram_district_id' => '11', 'name' => 'Tipa V-I'],
            ['id' => '863', 'mizoram_district_id' => '11', 'name' => 'Tipa V-Ii'],
            ['id' => '864', 'mizoram_district_id' => '11', 'name' => 'Tipa V-Iii'],
            ['id' => '865', 'mizoram_district_id' => '11', 'name' => 'Tipi Ferry'],
            ['id' => '866', 'mizoram_district_id' => '11', 'name' => 'Tisi I'],
            ['id' => '867', 'mizoram_district_id' => '11', 'name' => 'Tisi II'],
            ['id' => '868', 'mizoram_district_id' => '11', 'name' => 'Tisopi'],
            ['id' => '869', 'mizoram_district_id' => '11', 'name' => 'Tokalo'],
            ['id' => '870', 'mizoram_district_id' => '11', 'name' => 'Vahia'],
            ['id' => '871', 'mizoram_district_id' => '11', 'name' => 'Zyhno'],
            ['id' => '872', 'mizoram_district_id' => '11', 'name' => 'Zyhno B'],
            ['id' => '873', 'mizoram_district_id' => '11', 'name' => 'Zyhno Lotai'],
        ];

        MizoramVillage::upsert($districtVillages, ['id']);
    }
}
