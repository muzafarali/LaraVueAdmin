<?php

use Illuminate\Database\Seeder;

class TblStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_states')->delete();
        
        \DB::table('tbl_states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 101,
                'name' => 'Andaman and Nicobar Islands',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 101,
                'name' => 'Andhra Pradesh',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 101,
                'name' => 'Arunachal Pradesh',
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 101,
                'name' => 'Assam',
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 101,
                'name' => 'Bihar',
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 101,
                'name' => 'Chandigarh',
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 101,
                'name' => 'Chhattisgarh',
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 101,
                'name' => 'Dadra and Nagar Haveli',
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 101,
                'name' => 'Daman and Diu',
            ),
            9 => 
            array (
                'id' => 10,
                'country_id' => 101,
                'name' => 'Delhi',
            ),
            10 => 
            array (
                'id' => 11,
                'country_id' => 101,
                'name' => 'Goa',
            ),
            11 => 
            array (
                'id' => 12,
                'country_id' => 101,
                'name' => 'Gujarat',
            ),
            12 => 
            array (
                'id' => 13,
                'country_id' => 101,
                'name' => 'Haryana',
            ),
            13 => 
            array (
                'id' => 14,
                'country_id' => 101,
                'name' => 'Himachal Pradesh',
            ),
            14 => 
            array (
                'id' => 15,
                'country_id' => 101,
                'name' => 'Jammu and Kashmir',
            ),
            15 => 
            array (
                'id' => 16,
                'country_id' => 101,
                'name' => 'Jharkhand',
            ),
            16 => 
            array (
                'id' => 17,
                'country_id' => 101,
                'name' => 'Karnataka',
            ),
            17 => 
            array (
                'id' => 18,
                'country_id' => 101,
                'name' => 'Kenmore',
            ),
            18 => 
            array (
                'id' => 19,
                'country_id' => 101,
                'name' => 'Kerala',
            ),
            19 => 
            array (
                'id' => 20,
                'country_id' => 101,
                'name' => 'Lakshadweep',
            ),
            20 => 
            array (
                'id' => 21,
                'country_id' => 101,
                'name' => 'Madhya Pradesh',
            ),
            21 => 
            array (
                'id' => 22,
                'country_id' => 101,
                'name' => 'Maharashtra',
            ),
            22 => 
            array (
                'id' => 23,
                'country_id' => 101,
                'name' => 'Manipur',
            ),
            23 => 
            array (
                'id' => 24,
                'country_id' => 101,
                'name' => 'Meghalaya',
            ),
            24 => 
            array (
                'id' => 25,
                'country_id' => 101,
                'name' => 'Mizoram',
            ),
            25 => 
            array (
                'id' => 26,
                'country_id' => 101,
                'name' => 'Nagaland',
            ),
            26 => 
            array (
                'id' => 27,
                'country_id' => 101,
                'name' => 'Narora',
            ),
            27 => 
            array (
                'id' => 28,
                'country_id' => 101,
                'name' => 'Natwar',
            ),
            28 => 
            array (
                'id' => 29,
                'country_id' => 101,
                'name' => 'Odisha',
            ),
            29 => 
            array (
                'id' => 30,
                'country_id' => 101,
                'name' => 'Paschim Medinipur',
            ),
            30 => 
            array (
                'id' => 31,
                'country_id' => 101,
                'name' => 'Pondicherry',
            ),
            31 => 
            array (
                'id' => 32,
                'country_id' => 101,
                'name' => 'Punjab',
            ),
            32 => 
            array (
                'id' => 33,
                'country_id' => 101,
                'name' => 'Rajastha',
            ),
            33 => 
            array (
                'id' => 34,
                'country_id' => 101,
                'name' => 'Sikkim',
            ),
            34 => 
            array (
                'id' => 35,
                'country_id' => 101,
                'name' => 'Tamil Nadu',
            ),
            35 => 
            array (
                'id' => 36,
                'country_id' => 101,
                'name' => 'Telangana',
            ),
            36 => 
            array (
                'id' => 37,
                'country_id' => 101,
                'name' => 'Tripura',
            ),
            37 => 
            array (
                'id' => 38,
                'country_id' => 101,
                'name' => 'Uttar Pradesh',
            ),
            38 => 
            array (
                'id' => 39,
                'country_id' => 101,
                'name' => 'Uttarakhand',
            ),
            39 => 
            array (
                'id' => 40,
                'country_id' => 101,
                'name' => 'Vaishali',
            ),
            40 => 
            array (
                'id' => 41,
                'country_id' => 101,
                'name' => 'West Bengal',
            ),
            41 => 
            array (
                'id' => 42,
                'country_id' => 1,
                'name' => 'Badakhsha',
            ),
            42 => 
            array (
                'id' => 43,
                'country_id' => 1,
                'name' => 'Badgis',
            ),
            43 => 
            array (
                'id' => 44,
                'country_id' => 1,
                'name' => 'Bagla',
            ),
            44 => 
            array (
                'id' => 45,
                'country_id' => 1,
                'name' => 'Balkh',
            ),
            45 => 
            array (
                'id' => 46,
                'country_id' => 1,
                'name' => 'Bamiya',
            ),
            46 => 
            array (
                'id' => 47,
                'country_id' => 1,
                'name' => 'Farah',
            ),
            47 => 
            array (
                'id' => 48,
                'country_id' => 1,
                'name' => 'Faryab',
            ),
            48 => 
            array (
                'id' => 49,
                'country_id' => 1,
                'name' => 'Gawr',
            ),
            49 => 
            array (
                'id' => 50,
                'country_id' => 1,
                'name' => 'Gazni',
            ),
            50 => 
            array (
                'id' => 51,
                'country_id' => 1,
                'name' => 'Herat',
            ),
            51 => 
            array (
                'id' => 52,
                'country_id' => 1,
                'name' => 'Hilmand',
            ),
            52 => 
            array (
                'id' => 53,
                'country_id' => 1,
                'name' => 'Jawzja',
            ),
            53 => 
            array (
                'id' => 54,
                'country_id' => 1,
                'name' => 'Kabul',
            ),
            54 => 
            array (
                'id' => 55,
                'country_id' => 1,
                'name' => 'Kapisa',
            ),
            55 => 
            array (
                'id' => 56,
                'country_id' => 1,
                'name' => 'Khawst',
            ),
            56 => 
            array (
                'id' => 57,
                'country_id' => 1,
                'name' => 'Kunar',
            ),
            57 => 
            array (
                'id' => 58,
                'country_id' => 1,
                'name' => 'Lagma',
            ),
            58 => 
            array (
                'id' => 59,
                'country_id' => 1,
                'name' => 'Lawghar',
            ),
            59 => 
            array (
                'id' => 60,
                'country_id' => 1,
                'name' => 'Nangarhar',
            ),
            60 => 
            array (
                'id' => 61,
                'country_id' => 1,
                'name' => 'Nimruz',
            ),
            61 => 
            array (
                'id' => 62,
                'country_id' => 1,
                'name' => 'Nurista',
            ),
            62 => 
            array (
                'id' => 63,
                'country_id' => 1,
                'name' => 'Paktika',
            ),
            63 => 
            array (
                'id' => 64,
                'country_id' => 1,
                'name' => 'Paktiya',
            ),
            64 => 
            array (
                'id' => 65,
                'country_id' => 1,
                'name' => 'Parwa',
            ),
            65 => 
            array (
                'id' => 66,
                'country_id' => 1,
                'name' => 'Qandahar',
            ),
            66 => 
            array (
                'id' => 67,
                'country_id' => 1,
                'name' => 'Qunduz',
            ),
            67 => 
            array (
                'id' => 68,
                'country_id' => 1,
                'name' => 'Samanga',
            ),
            68 => 
            array (
                'id' => 69,
                'country_id' => 1,
                'name' => 'Sar-e Pul',
            ),
            69 => 
            array (
                'id' => 70,
                'country_id' => 1,
                'name' => 'Takhar',
            ),
            70 => 
            array (
                'id' => 71,
                'country_id' => 1,
                'name' => 'Uruzga',
            ),
            71 => 
            array (
                'id' => 72,
                'country_id' => 1,
                'name' => 'Wardag',
            ),
            72 => 
            array (
                'id' => 73,
                'country_id' => 1,
                'name' => 'Zabul',
            ),
            73 => 
            array (
                'id' => 74,
                'country_id' => 2,
                'name' => 'Berat',
            ),
            74 => 
            array (
                'id' => 75,
                'country_id' => 2,
                'name' => 'Bulqize',
            ),
            75 => 
            array (
                'id' => 76,
                'country_id' => 2,
                'name' => 'Delvine',
            ),
            76 => 
            array (
                'id' => 77,
                'country_id' => 2,
                'name' => 'Devoll',
            ),
            77 => 
            array (
                'id' => 78,
                'country_id' => 2,
                'name' => 'Dibre',
            ),
            78 => 
            array (
                'id' => 79,
                'country_id' => 2,
                'name' => 'Durres',
            ),
            79 => 
            array (
                'id' => 80,
                'country_id' => 2,
                'name' => 'Elbasa',
            ),
            80 => 
            array (
                'id' => 81,
                'country_id' => 2,
                'name' => 'Fier',
            ),
            81 => 
            array (
                'id' => 82,
                'country_id' => 2,
                'name' => 'Gjirokaster',
            ),
            82 => 
            array (
                'id' => 83,
                'country_id' => 2,
                'name' => 'Gramsh',
            ),
            83 => 
            array (
                'id' => 84,
                'country_id' => 2,
                'name' => 'Has',
            ),
            84 => 
            array (
                'id' => 85,
                'country_id' => 2,
                'name' => 'Kavaje',
            ),
            85 => 
            array (
                'id' => 86,
                'country_id' => 2,
                'name' => 'Kolonje',
            ),
            86 => 
            array (
                'id' => 87,
                'country_id' => 2,
                'name' => 'Korce',
            ),
            87 => 
            array (
                'id' => 88,
                'country_id' => 2,
                'name' => 'Kruje',
            ),
            88 => 
            array (
                'id' => 89,
                'country_id' => 2,
                'name' => 'Kucove',
            ),
            89 => 
            array (
                'id' => 90,
                'country_id' => 2,
                'name' => 'Kukes',
            ),
            90 => 
            array (
                'id' => 91,
                'country_id' => 2,
                'name' => 'Kurbi',
            ),
            91 => 
            array (
                'id' => 92,
                'country_id' => 2,
                'name' => 'Lezhe',
            ),
            92 => 
            array (
                'id' => 93,
                'country_id' => 2,
                'name' => 'Librazhd',
            ),
            93 => 
            array (
                'id' => 94,
                'country_id' => 2,
                'name' => 'Lushnje',
            ),
            94 => 
            array (
                'id' => 95,
                'country_id' => 2,
                'name' => 'Mallakaster',
            ),
            95 => 
            array (
                'id' => 96,
                'country_id' => 2,
                'name' => 'Malsi e Madhe',
            ),
            96 => 
            array (
                'id' => 97,
                'country_id' => 2,
                'name' => 'Mat',
            ),
            97 => 
            array (
                'id' => 98,
                'country_id' => 2,
                'name' => 'Mirdite',
            ),
            98 => 
            array (
                'id' => 99,
                'country_id' => 2,
                'name' => 'Peqi',
            ),
            99 => 
            array (
                'id' => 100,
                'country_id' => 2,
                'name' => 'Permet',
            ),
            100 => 
            array (
                'id' => 101,
                'country_id' => 2,
                'name' => 'Pogradec',
            ),
            101 => 
            array (
                'id' => 102,
                'country_id' => 2,
                'name' => 'Puke',
            ),
            102 => 
            array (
                'id' => 103,
                'country_id' => 2,
                'name' => 'Sarande',
            ),
            103 => 
            array (
                'id' => 104,
                'country_id' => 2,
                'name' => 'Shkoder',
            ),
            104 => 
            array (
                'id' => 105,
                'country_id' => 2,
                'name' => 'Skrapar',
            ),
            105 => 
            array (
                'id' => 106,
                'country_id' => 2,
                'name' => 'Tepelene',
            ),
            106 => 
            array (
                'id' => 107,
                'country_id' => 2,
                'name' => 'Tirane',
            ),
            107 => 
            array (
                'id' => 108,
                'country_id' => 2,
                'name' => 'Tropoje',
            ),
            108 => 
            array (
                'id' => 109,
                'country_id' => 2,
                'name' => 'Vlore',
            ),
            109 => 
            array (
                'id' => 110,
                'country_id' => 3,
                'name' => '\'Ayn Daflah',
            ),
            110 => 
            array (
                'id' => 111,
                'country_id' => 3,
                'name' => '\'Ayn Tamushanat',
            ),
            111 => 
            array (
                'id' => 112,
                'country_id' => 3,
                'name' => 'Adrar',
            ),
            112 => 
            array (
                'id' => 113,
                'country_id' => 3,
                'name' => 'Algiers',
            ),
            113 => 
            array (
                'id' => 114,
                'country_id' => 3,
                'name' => 'Annabah',
            ),
            114 => 
            array (
                'id' => 115,
                'country_id' => 3,
                'name' => 'Bashshar',
            ),
            115 => 
            array (
                'id' => 116,
                'country_id' => 3,
                'name' => 'Batnah',
            ),
            116 => 
            array (
                'id' => 117,
                'country_id' => 3,
                'name' => 'Bijayah',
            ),
            117 => 
            array (
                'id' => 118,
                'country_id' => 3,
                'name' => 'Biskrah',
            ),
            118 => 
            array (
                'id' => 119,
                'country_id' => 3,
                'name' => 'Blidah',
            ),
            119 => 
            array (
                'id' => 120,
                'country_id' => 3,
                'name' => 'Buirah',
            ),
            120 => 
            array (
                'id' => 121,
                'country_id' => 3,
                'name' => 'Bumardas',
            ),
            121 => 
            array (
                'id' => 122,
                'country_id' => 3,
                'name' => 'Burj Bu Arririj',
            ),
            122 => 
            array (
                'id' => 123,
                'country_id' => 3,
                'name' => 'Ghaliza',
            ),
            123 => 
            array (
                'id' => 124,
                'country_id' => 3,
                'name' => 'Ghardayah',
            ),
            124 => 
            array (
                'id' => 125,
                'country_id' => 3,
                'name' => 'Ilizi',
            ),
            125 => 
            array (
                'id' => 126,
                'country_id' => 3,
                'name' => 'Jijili',
            ),
            126 => 
            array (
                'id' => 127,
                'country_id' => 3,
                'name' => 'Jilfah',
            ),
            127 => 
            array (
                'id' => 128,
                'country_id' => 3,
                'name' => 'Khanshalah',
            ),
            128 => 
            array (
                'id' => 129,
                'country_id' => 3,
                'name' => 'Masilah',
            ),
            129 => 
            array (
                'id' => 130,
                'country_id' => 3,
                'name' => 'Midyah',
            ),
            130 => 
            array (
                'id' => 131,
                'country_id' => 3,
                'name' => 'Milah',
            ),
            131 => 
            array (
                'id' => 132,
                'country_id' => 3,
                'name' => 'Muaskar',
            ),
            132 => 
            array (
                'id' => 133,
                'country_id' => 3,
                'name' => 'Mustaghanam',
            ),
            133 => 
            array (
                'id' => 134,
                'country_id' => 3,
                'name' => 'Naama',
            ),
            134 => 
            array (
                'id' => 135,
                'country_id' => 3,
                'name' => 'Ora',
            ),
            135 => 
            array (
                'id' => 136,
                'country_id' => 3,
                'name' => 'Ouargla',
            ),
            136 => 
            array (
                'id' => 137,
                'country_id' => 3,
                'name' => 'Qalmah',
            ),
            137 => 
            array (
                'id' => 138,
                'country_id' => 3,
                'name' => 'Qustantinah',
            ),
            138 => 
            array (
                'id' => 139,
                'country_id' => 3,
                'name' => 'Sakikdah',
            ),
            139 => 
            array (
                'id' => 140,
                'country_id' => 3,
                'name' => 'Satif',
            ),
            140 => 
            array (
                'id' => 141,
                'country_id' => 3,
                'name' => 'Sayda\'',
            ),
            141 => 
            array (
                'id' => 142,
                'country_id' => 3,
                'name' => 'Sidi ban-al-\'Abbas',
            ),
            142 => 
            array (
                'id' => 143,
                'country_id' => 3,
                'name' => 'Suq Ahras',
            ),
            143 => 
            array (
                'id' => 144,
                'country_id' => 3,
                'name' => 'Tamanghasat',
            ),
            144 => 
            array (
                'id' => 145,
                'country_id' => 3,
                'name' => 'Tibazah',
            ),
            145 => 
            array (
                'id' => 146,
                'country_id' => 3,
                'name' => 'Tibissah',
            ),
            146 => 
            array (
                'id' => 147,
                'country_id' => 3,
                'name' => 'Tilimsa',
            ),
            147 => 
            array (
                'id' => 148,
                'country_id' => 3,
                'name' => 'Tinduf',
            ),
            148 => 
            array (
                'id' => 149,
                'country_id' => 3,
                'name' => 'Tisamsilt',
            ),
            149 => 
            array (
                'id' => 150,
                'country_id' => 3,
                'name' => 'Tiyarat',
            ),
            150 => 
            array (
                'id' => 151,
                'country_id' => 3,
                'name' => 'Tizi Wazu',
            ),
            151 => 
            array (
                'id' => 152,
                'country_id' => 3,
                'name' => 'Umm-al-Bawaghi',
            ),
            152 => 
            array (
                'id' => 153,
                'country_id' => 3,
                'name' => 'Wahra',
            ),
            153 => 
            array (
                'id' => 154,
                'country_id' => 3,
                'name' => 'Warqla',
            ),
            154 => 
            array (
                'id' => 155,
                'country_id' => 3,
                'name' => 'Wilaya d Alger',
            ),
            155 => 
            array (
                'id' => 156,
                'country_id' => 3,
                'name' => 'Wilaya de Bejaia',
            ),
            156 => 
            array (
                'id' => 157,
                'country_id' => 3,
                'name' => 'Wilaya de Constantine',
            ),
            157 => 
            array (
                'id' => 158,
                'country_id' => 3,
                'name' => 'al-Aghwat',
            ),
            158 => 
            array (
                'id' => 159,
                'country_id' => 3,
                'name' => 'al-Bayadh',
            ),
            159 => 
            array (
                'id' => 160,
                'country_id' => 3,
                'name' => 'al-Jaza\'ir',
            ),
            160 => 
            array (
                'id' => 161,
                'country_id' => 3,
                'name' => 'al-Wad',
            ),
            161 => 
            array (
                'id' => 162,
                'country_id' => 3,
                'name' => 'ash-Shalif',
            ),
            162 => 
            array (
                'id' => 163,
                'country_id' => 3,
                'name' => 'at-Tarif',
            ),
            163 => 
            array (
                'id' => 164,
                'country_id' => 4,
                'name' => 'Easter',
            ),
            164 => 
            array (
                'id' => 165,
                'country_id' => 4,
                'name' => 'Manu\'a',
            ),
            165 => 
            array (
                'id' => 166,
                'country_id' => 4,
                'name' => 'Swains Island',
            ),
            166 => 
            array (
                'id' => 167,
                'country_id' => 4,
                'name' => 'Wester',
            ),
            167 => 
            array (
                'id' => 168,
                'country_id' => 5,
                'name' => 'Andorra la Vella',
            ),
            168 => 
            array (
                'id' => 169,
                'country_id' => 5,
                'name' => 'Canillo',
            ),
            169 => 
            array (
                'id' => 170,
                'country_id' => 5,
                'name' => 'Encamp',
            ),
            170 => 
            array (
                'id' => 171,
                'country_id' => 5,
                'name' => 'La Massana',
            ),
            171 => 
            array (
                'id' => 172,
                'country_id' => 5,
                'name' => 'Les Escaldes',
            ),
            172 => 
            array (
                'id' => 173,
                'country_id' => 5,
                'name' => 'Ordino',
            ),
            173 => 
            array (
                'id' => 174,
                'country_id' => 5,
                'name' => 'Sant Julia de Loria',
            ),
            174 => 
            array (
                'id' => 175,
                'country_id' => 6,
                'name' => 'Bengo',
            ),
            175 => 
            array (
                'id' => 176,
                'country_id' => 6,
                'name' => 'Benguela',
            ),
            176 => 
            array (
                'id' => 177,
                'country_id' => 6,
                'name' => 'Bie',
            ),
            177 => 
            array (
                'id' => 178,
                'country_id' => 6,
                'name' => 'Cabinda',
            ),
            178 => 
            array (
                'id' => 179,
                'country_id' => 6,
                'name' => 'Cunene',
            ),
            179 => 
            array (
                'id' => 180,
                'country_id' => 6,
                'name' => 'Huambo',
            ),
            180 => 
            array (
                'id' => 181,
                'country_id' => 6,
                'name' => 'Huila',
            ),
            181 => 
            array (
                'id' => 182,
                'country_id' => 6,
                'name' => 'Kuando-Kubango',
            ),
            182 => 
            array (
                'id' => 183,
                'country_id' => 6,
                'name' => 'Kwanza Norte',
            ),
            183 => 
            array (
                'id' => 184,
                'country_id' => 6,
                'name' => 'Kwanza Sul',
            ),
            184 => 
            array (
                'id' => 185,
                'country_id' => 6,
                'name' => 'Luanda',
            ),
            185 => 
            array (
                'id' => 186,
                'country_id' => 6,
                'name' => 'Lunda Norte',
            ),
            186 => 
            array (
                'id' => 187,
                'country_id' => 6,
                'name' => 'Lunda Sul',
            ),
            187 => 
            array (
                'id' => 188,
                'country_id' => 6,
                'name' => 'Malanje',
            ),
            188 => 
            array (
                'id' => 189,
                'country_id' => 6,
                'name' => 'Moxico',
            ),
            189 => 
            array (
                'id' => 190,
                'country_id' => 6,
                'name' => 'Namibe',
            ),
            190 => 
            array (
                'id' => 191,
                'country_id' => 6,
                'name' => 'Uige',
            ),
            191 => 
            array (
                'id' => 192,
                'country_id' => 6,
                'name' => 'Zaire',
            ),
            192 => 
            array (
                'id' => 193,
                'country_id' => 7,
                'name' => 'Other Provinces',
            ),
            193 => 
            array (
                'id' => 194,
                'country_id' => 8,
                'name' => 'Sector claimed by Argentina/Ch',
            ),
            194 => 
            array (
                'id' => 195,
                'country_id' => 8,
                'name' => 'Sector claimed by Argentina/UK',
            ),
            195 => 
            array (
                'id' => 196,
                'country_id' => 8,
                'name' => 'Sector claimed by Australia',
            ),
            196 => 
            array (
                'id' => 197,
                'country_id' => 8,
                'name' => 'Sector claimed by France',
            ),
            197 => 
            array (
                'id' => 198,
                'country_id' => 8,
                'name' => 'Sector claimed by New Zealand',
            ),
            198 => 
            array (
                'id' => 199,
                'country_id' => 8,
                'name' => 'Sector claimed by Norway',
            ),
            199 => 
            array (
                'id' => 200,
                'country_id' => 8,
                'name' => 'Unclaimed Sector',
            ),
            200 => 
            array (
                'id' => 201,
                'country_id' => 9,
                'name' => 'Barbuda',
            ),
            201 => 
            array (
                'id' => 202,
                'country_id' => 9,
                'name' => 'Saint George',
            ),
            202 => 
            array (
                'id' => 203,
                'country_id' => 9,
                'name' => 'Saint Joh',
            ),
            203 => 
            array (
                'id' => 204,
                'country_id' => 9,
                'name' => 'Saint Mary',
            ),
            204 => 
            array (
                'id' => 205,
                'country_id' => 9,
                'name' => 'Saint Paul',
            ),
            205 => 
            array (
                'id' => 206,
                'country_id' => 9,
                'name' => 'Saint Peter',
            ),
            206 => 
            array (
                'id' => 207,
                'country_id' => 9,
                'name' => 'Saint Philip',
            ),
            207 => 
            array (
                'id' => 208,
                'country_id' => 10,
                'name' => 'Buenos Aires',
            ),
            208 => 
            array (
                'id' => 209,
                'country_id' => 10,
                'name' => 'Catamarca',
            ),
            209 => 
            array (
                'id' => 210,
                'country_id' => 10,
                'name' => 'Chaco',
            ),
            210 => 
            array (
                'id' => 211,
                'country_id' => 10,
                'name' => 'Chubut',
            ),
            211 => 
            array (
                'id' => 212,
                'country_id' => 10,
                'name' => 'Cordoba',
            ),
            212 => 
            array (
                'id' => 213,
                'country_id' => 10,
                'name' => 'Corrientes',
            ),
            213 => 
            array (
                'id' => 214,
                'country_id' => 10,
                'name' => 'Distrito Federal',
            ),
            214 => 
            array (
                'id' => 215,
                'country_id' => 10,
                'name' => 'Entre Rios',
            ),
            215 => 
            array (
                'id' => 216,
                'country_id' => 10,
                'name' => 'Formosa',
            ),
            216 => 
            array (
                'id' => 217,
                'country_id' => 10,
                'name' => 'Jujuy',
            ),
            217 => 
            array (
                'id' => 218,
                'country_id' => 10,
                'name' => 'La Pampa',
            ),
            218 => 
            array (
                'id' => 219,
                'country_id' => 10,
                'name' => 'La Rioja',
            ),
            219 => 
            array (
                'id' => 220,
                'country_id' => 10,
                'name' => 'Mendoza',
            ),
            220 => 
            array (
                'id' => 221,
                'country_id' => 10,
                'name' => 'Misiones',
            ),
            221 => 
            array (
                'id' => 222,
                'country_id' => 10,
                'name' => 'Neuque',
            ),
            222 => 
            array (
                'id' => 223,
                'country_id' => 10,
                'name' => 'Rio Negro',
            ),
            223 => 
            array (
                'id' => 224,
                'country_id' => 10,
                'name' => 'Salta',
            ),
            224 => 
            array (
                'id' => 225,
                'country_id' => 10,
                'name' => 'San Jua',
            ),
            225 => 
            array (
                'id' => 226,
                'country_id' => 10,
                'name' => 'San Luis',
            ),
            226 => 
            array (
                'id' => 227,
                'country_id' => 10,
                'name' => 'Santa Cruz',
            ),
            227 => 
            array (
                'id' => 228,
                'country_id' => 10,
                'name' => 'Santa Fe',
            ),
            228 => 
            array (
                'id' => 229,
                'country_id' => 10,
                'name' => 'Santiago del Estero',
            ),
            229 => 
            array (
                'id' => 230,
                'country_id' => 10,
                'name' => 'Tierra del Fuego',
            ),
            230 => 
            array (
                'id' => 231,
                'country_id' => 10,
                'name' => 'Tucuma',
            ),
            231 => 
            array (
                'id' => 232,
                'country_id' => 11,
                'name' => 'Aragatsot',
            ),
            232 => 
            array (
                'id' => 233,
                'country_id' => 11,
                'name' => 'Ararat',
            ),
            233 => 
            array (
                'id' => 234,
                'country_id' => 11,
                'name' => 'Armavir',
            ),
            234 => 
            array (
                'id' => 235,
                'country_id' => 11,
                'name' => 'Gegharkunik',
            ),
            235 => 
            array (
                'id' => 236,
                'country_id' => 11,
                'name' => 'Kotaik',
            ),
            236 => 
            array (
                'id' => 237,
                'country_id' => 11,
                'name' => 'Lori',
            ),
            237 => 
            array (
                'id' => 238,
                'country_id' => 11,
                'name' => 'Shirak',
            ),
            238 => 
            array (
                'id' => 239,
                'country_id' => 11,
                'name' => 'Stepanakert',
            ),
            239 => 
            array (
                'id' => 240,
                'country_id' => 11,
                'name' => 'Syunik',
            ),
            240 => 
            array (
                'id' => 241,
                'country_id' => 11,
                'name' => 'Tavush',
            ),
            241 => 
            array (
                'id' => 242,
                'country_id' => 11,
                'name' => 'Vayots Dzor',
            ),
            242 => 
            array (
                'id' => 243,
                'country_id' => 11,
                'name' => 'Yereva',
            ),
            243 => 
            array (
                'id' => 244,
                'country_id' => 12,
                'name' => 'Aruba',
            ),
            244 => 
            array (
                'id' => 245,
                'country_id' => 13,
                'name' => 'Auckland',
            ),
            245 => 
            array (
                'id' => 246,
                'country_id' => 13,
                'name' => 'Australian Capital Territory',
            ),
            246 => 
            array (
                'id' => 247,
                'country_id' => 13,
                'name' => 'Balgowlah',
            ),
            247 => 
            array (
                'id' => 248,
                'country_id' => 13,
                'name' => 'Balmai',
            ),
            248 => 
            array (
                'id' => 249,
                'country_id' => 13,
                'name' => 'Bankstow',
            ),
            249 => 
            array (
                'id' => 250,
                'country_id' => 13,
                'name' => 'Baulkham Hills',
            ),
            250 => 
            array (
                'id' => 251,
                'country_id' => 13,
                'name' => 'Bonnet Bay',
            ),
            251 => 
            array (
                'id' => 252,
                'country_id' => 13,
                'name' => 'Camberwell',
            ),
            252 => 
            array (
                'id' => 253,
                'country_id' => 13,
                'name' => 'Carole Park',
            ),
            253 => 
            array (
                'id' => 254,
                'country_id' => 13,
                'name' => 'Castle Hill',
            ),
            254 => 
            array (
                'id' => 255,
                'country_id' => 13,
                'name' => 'Caulfield',
            ),
            255 => 
            array (
                'id' => 256,
                'country_id' => 13,
                'name' => 'Chatswood',
            ),
            256 => 
            array (
                'id' => 257,
                'country_id' => 13,
                'name' => 'Cheltenham',
            ),
            257 => 
            array (
                'id' => 258,
                'country_id' => 13,
                'name' => 'Cherrybrook',
            ),
            258 => 
            array (
                'id' => 259,
                'country_id' => 13,
                'name' => 'Clayto',
            ),
            259 => 
            array (
                'id' => 260,
                'country_id' => 13,
                'name' => 'Collingwood',
            ),
            260 => 
            array (
                'id' => 261,
                'country_id' => 13,
                'name' => 'Frenchs Forest',
            ),
            261 => 
            array (
                'id' => 262,
                'country_id' => 13,
                'name' => 'Hawthor',
            ),
            262 => 
            array (
                'id' => 263,
                'country_id' => 13,
                'name' => 'Jannnali',
            ),
            263 => 
            array (
                'id' => 264,
                'country_id' => 13,
                'name' => 'Knoxfield',
            ),
            264 => 
            array (
                'id' => 265,
                'country_id' => 13,
                'name' => 'Melbourne',
            ),
            265 => 
            array (
                'id' => 266,
                'country_id' => 13,
                'name' => 'New South Wales',
            ),
            266 => 
            array (
                'id' => 267,
                'country_id' => 13,
                'name' => 'Northern Territory',
            ),
            267 => 
            array (
                'id' => 268,
                'country_id' => 13,
                'name' => 'Perth',
            ),
            268 => 
            array (
                'id' => 269,
                'country_id' => 13,
                'name' => 'Queensland',
            ),
            269 => 
            array (
                'id' => 270,
                'country_id' => 13,
                'name' => 'South Australia',
            ),
            270 => 
            array (
                'id' => 271,
                'country_id' => 13,
                'name' => 'Tasmania',
            ),
            271 => 
            array (
                'id' => 272,
                'country_id' => 13,
                'name' => 'Templestowe',
            ),
            272 => 
            array (
                'id' => 273,
                'country_id' => 13,
                'name' => 'Victoria',
            ),
            273 => 
            array (
                'id' => 274,
                'country_id' => 13,
                'name' => 'Werribee south',
            ),
            274 => 
            array (
                'id' => 275,
                'country_id' => 13,
                'name' => 'Western Australia',
            ),
            275 => 
            array (
                'id' => 276,
                'country_id' => 13,
                'name' => 'Wheeler',
            ),
            276 => 
            array (
                'id' => 277,
                'country_id' => 14,
                'name' => 'Bundesland Salzburg',
            ),
            277 => 
            array (
                'id' => 278,
                'country_id' => 14,
                'name' => 'Bundesland Steiermark',
            ),
            278 => 
            array (
                'id' => 279,
                'country_id' => 14,
                'name' => 'Bundesland Tirol',
            ),
            279 => 
            array (
                'id' => 280,
                'country_id' => 14,
                'name' => 'Burgenland',
            ),
            280 => 
            array (
                'id' => 281,
                'country_id' => 14,
                'name' => 'Carinthia',
            ),
            281 => 
            array (
                'id' => 282,
                'country_id' => 14,
                'name' => 'Karnte',
            ),
            282 => 
            array (
                'id' => 283,
                'country_id' => 14,
                'name' => 'Lieze',
            ),
            283 => 
            array (
                'id' => 284,
                'country_id' => 14,
                'name' => 'Lower Austria',
            ),
            284 => 
            array (
                'id' => 285,
                'country_id' => 14,
                'name' => 'Niederosterreich',
            ),
            285 => 
            array (
                'id' => 286,
                'country_id' => 14,
                'name' => 'Oberosterreich',
            ),
            286 => 
            array (
                'id' => 287,
                'country_id' => 14,
                'name' => 'Salzburg',
            ),
            287 => 
            array (
                'id' => 288,
                'country_id' => 14,
                'name' => 'Schleswig-Holstei',
            ),
            288 => 
            array (
                'id' => 289,
                'country_id' => 14,
                'name' => 'Steiermark',
            ),
            289 => 
            array (
                'id' => 290,
                'country_id' => 14,
                'name' => 'Styria',
            ),
            290 => 
            array (
                'id' => 291,
                'country_id' => 14,
                'name' => 'Tirol',
            ),
            291 => 
            array (
                'id' => 292,
                'country_id' => 14,
                'name' => 'Upper Austria',
            ),
            292 => 
            array (
                'id' => 293,
                'country_id' => 14,
                'name' => 'Vorarlberg',
            ),
            293 => 
            array (
                'id' => 294,
                'country_id' => 14,
                'name' => 'Wie',
            ),
            294 => 
            array (
                'id' => 295,
                'country_id' => 15,
                'name' => 'Absero',
            ),
            295 => 
            array (
                'id' => 296,
                'country_id' => 15,
                'name' => 'Baki Sahari',
            ),
            296 => 
            array (
                'id' => 297,
                'country_id' => 15,
                'name' => 'Ganca',
            ),
            297 => 
            array (
                'id' => 298,
                'country_id' => 15,
                'name' => 'Ganja',
            ),
            298 => 
            array (
                'id' => 299,
                'country_id' => 15,
                'name' => 'Kalbacar',
            ),
            299 => 
            array (
                'id' => 300,
                'country_id' => 15,
                'name' => 'Lankara',
            ),
            300 => 
            array (
                'id' => 301,
                'country_id' => 15,
                'name' => 'Mil-Qarabax',
            ),
            301 => 
            array (
                'id' => 302,
                'country_id' => 15,
                'name' => 'Mugan-Salya',
            ),
            302 => 
            array (
                'id' => 303,
                'country_id' => 15,
                'name' => 'Nagorni-Qarabax',
            ),
            303 => 
            array (
                'id' => 304,
                'country_id' => 15,
                'name' => 'Naxciva',
            ),
            304 => 
            array (
                'id' => 305,
                'country_id' => 15,
                'name' => 'Priaraks',
            ),
            305 => 
            array (
                'id' => 306,
                'country_id' => 15,
                'name' => 'Qazax',
            ),
            306 => 
            array (
                'id' => 307,
                'country_id' => 15,
                'name' => 'Saki',
            ),
            307 => 
            array (
                'id' => 308,
                'country_id' => 15,
                'name' => 'Sirva',
            ),
            308 => 
            array (
                'id' => 309,
                'country_id' => 15,
                'name' => 'Xacmaz',
            ),
            309 => 
            array (
                'id' => 310,
                'country_id' => 16,
                'name' => 'Abaco',
            ),
            310 => 
            array (
                'id' => 311,
                'country_id' => 16,
                'name' => 'Acklins Island',
            ),
            311 => 
            array (
                'id' => 312,
                'country_id' => 16,
                'name' => 'Andros',
            ),
            312 => 
            array (
                'id' => 313,
                'country_id' => 16,
                'name' => 'Berry Islands',
            ),
            313 => 
            array (
                'id' => 314,
                'country_id' => 16,
                'name' => 'Biminis',
            ),
            314 => 
            array (
                'id' => 315,
                'country_id' => 16,
                'name' => 'Cat Island',
            ),
            315 => 
            array (
                'id' => 316,
                'country_id' => 16,
                'name' => 'Crooked Island',
            ),
            316 => 
            array (
                'id' => 317,
                'country_id' => 16,
                'name' => 'Eleuthera',
            ),
            317 => 
            array (
                'id' => 318,
                'country_id' => 16,
                'name' => 'Exuma and Cays',
            ),
            318 => 
            array (
                'id' => 319,
                'country_id' => 16,
                'name' => 'Grand Bahama',
            ),
            319 => 
            array (
                'id' => 320,
                'country_id' => 16,
                'name' => 'Inagua Islands',
            ),
            320 => 
            array (
                'id' => 321,
                'country_id' => 16,
                'name' => 'Long Island',
            ),
            321 => 
            array (
                'id' => 322,
                'country_id' => 16,
                'name' => 'Mayaguana',
            ),
            322 => 
            array (
                'id' => 323,
                'country_id' => 16,
                'name' => 'New Providence',
            ),
            323 => 
            array (
                'id' => 324,
                'country_id' => 16,
                'name' => 'Ragged Island',
            ),
            324 => 
            array (
                'id' => 325,
                'country_id' => 16,
                'name' => 'Rum Cay',
            ),
            325 => 
            array (
                'id' => 326,
                'country_id' => 16,
                'name' => 'San Salvador',
            ),
            326 => 
            array (
                'id' => 327,
                'country_id' => 17,
                'name' => '\'Isa',
            ),
            327 => 
            array (
                'id' => 328,
                'country_id' => 17,
                'name' => 'Badiyah',
            ),
            328 => 
            array (
                'id' => 329,
                'country_id' => 17,
                'name' => 'Hidd',
            ),
            329 => 
            array (
                'id' => 330,
                'country_id' => 17,
                'name' => 'Jidd Hafs',
            ),
            330 => 
            array (
                'id' => 331,
                'country_id' => 17,
                'name' => 'Mahama',
            ),
            331 => 
            array (
                'id' => 332,
                'country_id' => 17,
                'name' => 'Manama',
            ),
            332 => 
            array (
                'id' => 333,
                'country_id' => 17,
                'name' => 'Sitrah',
            ),
            333 => 
            array (
                'id' => 334,
                'country_id' => 17,
                'name' => 'al-Manamah',
            ),
            334 => 
            array (
                'id' => 335,
                'country_id' => 17,
                'name' => 'al-Muharraq',
            ),
            335 => 
            array (
                'id' => 336,
                'country_id' => 17,
                'name' => 'ar-Rifa\'a',
            ),
            336 => 
            array (
                'id' => 337,
                'country_id' => 18,
                'name' => 'Bagar Hat',
            ),
            337 => 
            array (
                'id' => 338,
                'country_id' => 18,
                'name' => 'Bandarba',
            ),
            338 => 
            array (
                'id' => 339,
                'country_id' => 18,
                'name' => 'Barguna',
            ),
            339 => 
            array (
                'id' => 340,
                'country_id' => 18,
                'name' => 'Barisal',
            ),
            340 => 
            array (
                'id' => 341,
                'country_id' => 18,
                'name' => 'Bhola',
            ),
            341 => 
            array (
                'id' => 342,
                'country_id' => 18,
                'name' => 'Bogora',
            ),
            342 => 
            array (
                'id' => 343,
                'country_id' => 18,
                'name' => 'Brahman Bariya',
            ),
            343 => 
            array (
                'id' => 344,
                'country_id' => 18,
                'name' => 'Chandpur',
            ),
            344 => 
            array (
                'id' => 345,
                'country_id' => 18,
                'name' => 'Chattagam',
            ),
            345 => 
            array (
                'id' => 346,
                'country_id' => 18,
                'name' => 'Chittagong Divisio',
            ),
            346 => 
            array (
                'id' => 347,
                'country_id' => 18,
                'name' => 'Chuadanga',
            ),
            347 => 
            array (
                'id' => 348,
                'country_id' => 18,
                'name' => 'Dhaka',
            ),
            348 => 
            array (
                'id' => 349,
                'country_id' => 18,
                'name' => 'Dinajpur',
            ),
            349 => 
            array (
                'id' => 350,
                'country_id' => 18,
                'name' => 'Faridpur',
            ),
            350 => 
            array (
                'id' => 351,
                'country_id' => 18,
                'name' => 'Feni',
            ),
            351 => 
            array (
                'id' => 352,
                'country_id' => 18,
                'name' => 'Gaybanda',
            ),
            352 => 
            array (
                'id' => 353,
                'country_id' => 18,
                'name' => 'Gazipur',
            ),
            353 => 
            array (
                'id' => 354,
                'country_id' => 18,
                'name' => 'Gopalganj',
            ),
            354 => 
            array (
                'id' => 355,
                'country_id' => 18,
                'name' => 'Habiganj',
            ),
            355 => 
            array (
                'id' => 356,
                'country_id' => 18,
                'name' => 'Jaipur Hat',
            ),
            356 => 
            array (
                'id' => 357,
                'country_id' => 18,
                'name' => 'Jamalpur',
            ),
            357 => 
            array (
                'id' => 358,
                'country_id' => 18,
                'name' => 'Jessor',
            ),
            358 => 
            array (
                'id' => 359,
                'country_id' => 18,
                'name' => 'Jhalakati',
            ),
            359 => 
            array (
                'id' => 360,
                'country_id' => 18,
                'name' => 'Jhanaydah',
            ),
            360 => 
            array (
                'id' => 361,
                'country_id' => 18,
                'name' => 'Khagrachhari',
            ),
            361 => 
            array (
                'id' => 362,
                'country_id' => 18,
                'name' => 'Khulna',
            ),
            362 => 
            array (
                'id' => 363,
                'country_id' => 18,
                'name' => 'Kishorganj',
            ),
            363 => 
            array (
                'id' => 364,
                'country_id' => 18,
                'name' => 'Koks Bazar',
            ),
            364 => 
            array (
                'id' => 365,
                'country_id' => 18,
                'name' => 'Komilla',
            ),
            365 => 
            array (
                'id' => 366,
                'country_id' => 18,
                'name' => 'Kurigram',
            ),
            366 => 
            array (
                'id' => 367,
                'country_id' => 18,
                'name' => 'Kushtiya',
            ),
            367 => 
            array (
                'id' => 368,
                'country_id' => 18,
                'name' => 'Lakshmipur',
            ),
            368 => 
            array (
                'id' => 369,
                'country_id' => 18,
                'name' => 'Lalmanir Hat',
            ),
            369 => 
            array (
                'id' => 370,
                'country_id' => 18,
                'name' => 'Madaripur',
            ),
            370 => 
            array (
                'id' => 371,
                'country_id' => 18,
                'name' => 'Magura',
            ),
            371 => 
            array (
                'id' => 372,
                'country_id' => 18,
                'name' => 'Maimansingh',
            ),
            372 => 
            array (
                'id' => 373,
                'country_id' => 18,
                'name' => 'Manikganj',
            ),
            373 => 
            array (
                'id' => 374,
                'country_id' => 18,
                'name' => 'Maulvi Bazar',
            ),
            374 => 
            array (
                'id' => 375,
                'country_id' => 18,
                'name' => 'Meherpur',
            ),
            375 => 
            array (
                'id' => 376,
                'country_id' => 18,
                'name' => 'Munshiganj',
            ),
            376 => 
            array (
                'id' => 377,
                'country_id' => 18,
                'name' => 'Naral',
            ),
            377 => 
            array (
                'id' => 378,
                'country_id' => 18,
                'name' => 'Narayanganj',
            ),
            378 => 
            array (
                'id' => 379,
                'country_id' => 18,
                'name' => 'Narsingdi',
            ),
            379 => 
            array (
                'id' => 380,
                'country_id' => 18,
                'name' => 'Nator',
            ),
            380 => 
            array (
                'id' => 381,
                'country_id' => 18,
                'name' => 'Naugao',
            ),
            381 => 
            array (
                'id' => 382,
                'country_id' => 18,
                'name' => 'Nawabganj',
            ),
            382 => 
            array (
                'id' => 383,
                'country_id' => 18,
                'name' => 'Netrakona',
            ),
            383 => 
            array (
                'id' => 384,
                'country_id' => 18,
                'name' => 'Nilphamari',
            ),
            384 => 
            array (
                'id' => 385,
                'country_id' => 18,
                'name' => 'Noakhali',
            ),
            385 => 
            array (
                'id' => 386,
                'country_id' => 18,
                'name' => 'Pabna',
            ),
            386 => 
            array (
                'id' => 387,
                'country_id' => 18,
                'name' => 'Panchagarh',
            ),
            387 => 
            array (
                'id' => 388,
                'country_id' => 18,
                'name' => 'Patuakhali',
            ),
            388 => 
            array (
                'id' => 389,
                'country_id' => 18,
                'name' => 'Pirojpur',
            ),
            389 => 
            array (
                'id' => 390,
                'country_id' => 18,
                'name' => 'Rajbari',
            ),
            390 => 
            array (
                'id' => 391,
                'country_id' => 18,
                'name' => 'Rajshahi',
            ),
            391 => 
            array (
                'id' => 392,
                'country_id' => 18,
                'name' => 'Rangamati',
            ),
            392 => 
            array (
                'id' => 393,
                'country_id' => 18,
                'name' => 'Rangpur',
            ),
            393 => 
            array (
                'id' => 394,
                'country_id' => 18,
                'name' => 'Satkhira',
            ),
            394 => 
            array (
                'id' => 395,
                'country_id' => 18,
                'name' => 'Shariatpur',
            ),
            395 => 
            array (
                'id' => 396,
                'country_id' => 18,
                'name' => 'Sherpur',
            ),
            396 => 
            array (
                'id' => 397,
                'country_id' => 18,
                'name' => 'Silhat',
            ),
            397 => 
            array (
                'id' => 398,
                'country_id' => 18,
                'name' => 'Sirajganj',
            ),
            398 => 
            array (
                'id' => 399,
                'country_id' => 18,
                'name' => 'Sunamganj',
            ),
            399 => 
            array (
                'id' => 400,
                'country_id' => 18,
                'name' => 'Tangayal',
            ),
            400 => 
            array (
                'id' => 401,
                'country_id' => 18,
                'name' => 'Thakurgao',
            ),
            401 => 
            array (
                'id' => 402,
                'country_id' => 19,
                'name' => 'Christ Church',
            ),
            402 => 
            array (
                'id' => 403,
                'country_id' => 19,
                'name' => 'Saint Andrew',
            ),
            403 => 
            array (
                'id' => 404,
                'country_id' => 19,
                'name' => 'Saint George',
            ),
            404 => 
            array (
                'id' => 405,
                'country_id' => 19,
                'name' => 'Saint James',
            ),
            405 => 
            array (
                'id' => 406,
                'country_id' => 19,
                'name' => 'Saint Joh',
            ),
            406 => 
            array (
                'id' => 407,
                'country_id' => 19,
                'name' => 'Saint Joseph',
            ),
            407 => 
            array (
                'id' => 408,
                'country_id' => 19,
                'name' => 'Saint Lucy',
            ),
            408 => 
            array (
                'id' => 409,
                'country_id' => 19,
                'name' => 'Saint Michael',
            ),
            409 => 
            array (
                'id' => 410,
                'country_id' => 19,
                'name' => 'Saint Peter',
            ),
            410 => 
            array (
                'id' => 411,
                'country_id' => 19,
                'name' => 'Saint Philip',
            ),
            411 => 
            array (
                'id' => 412,
                'country_id' => 19,
                'name' => 'Saint Thomas',
            ),
            412 => 
            array (
                'id' => 413,
                'country_id' => 20,
                'name' => 'Brest',
            ),
            413 => 
            array (
                'id' => 414,
                'country_id' => 20,
                'name' => 'Homjel\'',
            ),
            414 => 
            array (
                'id' => 415,
                'country_id' => 20,
                'name' => 'Hrodna',
            ),
            415 => 
            array (
                'id' => 416,
                'country_id' => 20,
                'name' => 'Mahiljow',
            ),
            416 => 
            array (
                'id' => 417,
                'country_id' => 20,
                'name' => 'Mahilyowskaya Voblasts',
            ),
            417 => 
            array (
                'id' => 418,
                'country_id' => 20,
                'name' => 'Minsk',
            ),
            418 => 
            array (
                'id' => 419,
                'country_id' => 20,
                'name' => 'Minskaja Voblasts\'',
            ),
            419 => 
            array (
                'id' => 420,
                'country_id' => 20,
                'name' => 'Petrik',
            ),
            420 => 
            array (
                'id' => 421,
                'country_id' => 20,
                'name' => 'Vicebsk',
            ),
            421 => 
            array (
                'id' => 422,
                'country_id' => 21,
                'name' => 'Antwerpe',
            ),
            422 => 
            array (
                'id' => 423,
                'country_id' => 21,
                'name' => 'Berchem',
            ),
            423 => 
            array (
                'id' => 424,
                'country_id' => 21,
                'name' => 'Brabant',
            ),
            424 => 
            array (
                'id' => 425,
                'country_id' => 21,
                'name' => 'Brabant Wallo',
            ),
            425 => 
            array (
                'id' => 426,
                'country_id' => 21,
                'name' => 'Brussel',
            ),
            426 => 
            array (
                'id' => 427,
                'country_id' => 21,
                'name' => 'East Flanders',
            ),
            427 => 
            array (
                'id' => 428,
                'country_id' => 21,
                'name' => 'Hainaut',
            ),
            428 => 
            array (
                'id' => 429,
                'country_id' => 21,
                'name' => 'Liege',
            ),
            429 => 
            array (
                'id' => 430,
                'country_id' => 21,
                'name' => 'Limburg',
            ),
            430 => 
            array (
                'id' => 431,
                'country_id' => 21,
                'name' => 'Luxembourg',
            ),
            431 => 
            array (
                'id' => 432,
                'country_id' => 21,
                'name' => 'Namur',
            ),
            432 => 
            array (
                'id' => 433,
                'country_id' => 21,
                'name' => 'Ontario',
            ),
            433 => 
            array (
                'id' => 434,
                'country_id' => 21,
                'name' => 'Oost-Vlaandere',
            ),
            434 => 
            array (
                'id' => 435,
                'country_id' => 21,
                'name' => 'Provincie Brabant',
            ),
            435 => 
            array (
                'id' => 436,
                'country_id' => 21,
                'name' => 'Vlaams-Brabant',
            ),
            436 => 
            array (
                'id' => 437,
                'country_id' => 21,
                'name' => 'Wallonne',
            ),
            437 => 
            array (
                'id' => 438,
                'country_id' => 21,
                'name' => 'West-Vlaandere',
            ),
            438 => 
            array (
                'id' => 439,
                'country_id' => 22,
                'name' => 'Belize',
            ),
            439 => 
            array (
                'id' => 440,
                'country_id' => 22,
                'name' => 'Cayo',
            ),
            440 => 
            array (
                'id' => 441,
                'country_id' => 22,
                'name' => 'Corozal',
            ),
            441 => 
            array (
                'id' => 442,
                'country_id' => 22,
                'name' => 'Orange Walk',
            ),
            442 => 
            array (
                'id' => 443,
                'country_id' => 22,
                'name' => 'Stann Creek',
            ),
            443 => 
            array (
                'id' => 444,
                'country_id' => 22,
                'name' => 'Toledo',
            ),
            444 => 
            array (
                'id' => 445,
                'country_id' => 23,
                'name' => 'Alibori',
            ),
            445 => 
            array (
                'id' => 446,
                'country_id' => 23,
                'name' => 'Atacora',
            ),
            446 => 
            array (
                'id' => 447,
                'country_id' => 23,
                'name' => 'Atlantique',
            ),
            447 => 
            array (
                'id' => 448,
                'country_id' => 23,
                'name' => 'Borgou',
            ),
            448 => 
            array (
                'id' => 449,
                'country_id' => 23,
                'name' => 'Collines',
            ),
            449 => 
            array (
                'id' => 450,
                'country_id' => 23,
                'name' => 'Couffo',
            ),
            450 => 
            array (
                'id' => 451,
                'country_id' => 23,
                'name' => 'Donga',
            ),
            451 => 
            array (
                'id' => 452,
                'country_id' => 23,
                'name' => 'Littoral',
            ),
            452 => 
            array (
                'id' => 453,
                'country_id' => 23,
                'name' => 'Mono',
            ),
            453 => 
            array (
                'id' => 454,
                'country_id' => 23,
                'name' => 'Oueme',
            ),
            454 => 
            array (
                'id' => 455,
                'country_id' => 23,
                'name' => 'Plateau',
            ),
            455 => 
            array (
                'id' => 456,
                'country_id' => 23,
                'name' => 'Zou',
            ),
            456 => 
            array (
                'id' => 457,
                'country_id' => 24,
                'name' => 'Hamilto',
            ),
            457 => 
            array (
                'id' => 458,
                'country_id' => 24,
                'name' => 'Saint George',
            ),
            458 => 
            array (
                'id' => 459,
                'country_id' => 25,
                'name' => 'Bumthang',
            ),
            459 => 
            array (
                'id' => 460,
                'country_id' => 25,
                'name' => 'Chhukha',
            ),
            460 => 
            array (
                'id' => 461,
                'country_id' => 25,
                'name' => 'Chirang',
            ),
            461 => 
            array (
                'id' => 462,
                'country_id' => 25,
                'name' => 'Daga',
            ),
            462 => 
            array (
                'id' => 463,
                'country_id' => 25,
                'name' => 'Geylegphug',
            ),
            463 => 
            array (
                'id' => 464,
                'country_id' => 25,
                'name' => 'Ha',
            ),
            464 => 
            array (
                'id' => 465,
                'country_id' => 25,
                'name' => 'Lhuntshi',
            ),
            465 => 
            array (
                'id' => 466,
                'country_id' => 25,
                'name' => 'Mongar',
            ),
            466 => 
            array (
                'id' => 467,
                'country_id' => 25,
                'name' => 'Pemagatsel',
            ),
            467 => 
            array (
                'id' => 468,
                'country_id' => 25,
                'name' => 'Punakha',
            ),
            468 => 
            array (
                'id' => 469,
                'country_id' => 25,
                'name' => 'Rinpung',
            ),
            469 => 
            array (
                'id' => 470,
                'country_id' => 25,
                'name' => 'Samchi',
            ),
            470 => 
            array (
                'id' => 471,
                'country_id' => 25,
                'name' => 'Samdrup Jongkhar',
            ),
            471 => 
            array (
                'id' => 472,
                'country_id' => 25,
                'name' => 'Shemgang',
            ),
            472 => 
            array (
                'id' => 473,
                'country_id' => 25,
                'name' => 'Tashigang',
            ),
            473 => 
            array (
                'id' => 474,
                'country_id' => 25,
                'name' => 'Timphu',
            ),
            474 => 
            array (
                'id' => 475,
                'country_id' => 25,
                'name' => 'Tongsa',
            ),
            475 => 
            array (
                'id' => 476,
                'country_id' => 25,
                'name' => 'Wangdiphodrang',
            ),
            476 => 
            array (
                'id' => 477,
                'country_id' => 26,
                'name' => 'Beni',
            ),
            477 => 
            array (
                'id' => 478,
                'country_id' => 26,
                'name' => 'Chuquisaca',
            ),
            478 => 
            array (
                'id' => 479,
                'country_id' => 26,
                'name' => 'Cochabamba',
            ),
            479 => 
            array (
                'id' => 480,
                'country_id' => 26,
                'name' => 'La Paz',
            ),
            480 => 
            array (
                'id' => 481,
                'country_id' => 26,
                'name' => 'Oruro',
            ),
            481 => 
            array (
                'id' => 482,
                'country_id' => 26,
                'name' => 'Pando',
            ),
            482 => 
            array (
                'id' => 483,
                'country_id' => 26,
                'name' => 'Potosi',
            ),
            483 => 
            array (
                'id' => 484,
                'country_id' => 26,
                'name' => 'Santa Cruz',
            ),
            484 => 
            array (
                'id' => 485,
                'country_id' => 26,
                'name' => 'Tarija',
            ),
            485 => 
            array (
                'id' => 486,
                'country_id' => 27,
                'name' => 'Federacija Bosna i Hercegovina',
            ),
            486 => 
            array (
                'id' => 487,
                'country_id' => 27,
                'name' => 'Republika Srpska',
            ),
            487 => 
            array (
                'id' => 488,
                'country_id' => 28,
                'name' => 'Central Bobonong',
            ),
            488 => 
            array (
                'id' => 489,
                'country_id' => 28,
                'name' => 'Central Boteti',
            ),
            489 => 
            array (
                'id' => 490,
                'country_id' => 28,
                'name' => 'Central Mahalapye',
            ),
            490 => 
            array (
                'id' => 491,
                'country_id' => 28,
                'name' => 'Central Serowe-Palapye',
            ),
            491 => 
            array (
                'id' => 492,
                'country_id' => 28,
                'name' => 'Central Tutume',
            ),
            492 => 
            array (
                'id' => 493,
                'country_id' => 28,
                'name' => 'Chobe',
            ),
            493 => 
            array (
                'id' => 494,
                'country_id' => 28,
                'name' => 'Francistow',
            ),
            494 => 
            array (
                'id' => 495,
                'country_id' => 28,
                'name' => 'Gaborone',
            ),
            495 => 
            array (
                'id' => 496,
                'country_id' => 28,
                'name' => 'Ghanzi',
            ),
            496 => 
            array (
                'id' => 497,
                'country_id' => 28,
                'name' => 'Jwaneng',
            ),
            497 => 
            array (
                'id' => 498,
                'country_id' => 28,
                'name' => 'Kgalagadi North',
            ),
            498 => 
            array (
                'id' => 499,
                'country_id' => 28,
                'name' => 'Kgalagadi South',
            ),
            499 => 
            array (
                'id' => 500,
                'country_id' => 28,
                'name' => 'Kgatleng',
            ),
        ));
        \DB::table('tbl_states')->insert(array (
            0 => 
            array (
                'id' => 501,
                'country_id' => 28,
                'name' => 'Kweneng',
            ),
            1 => 
            array (
                'id' => 502,
                'country_id' => 28,
                'name' => 'Lobatse',
            ),
            2 => 
            array (
                'id' => 503,
                'country_id' => 28,
                'name' => 'Ngamiland',
            ),
            3 => 
            array (
                'id' => 504,
                'country_id' => 28,
                'name' => 'Ngwaketse',
            ),
            4 => 
            array (
                'id' => 505,
                'country_id' => 28,
                'name' => 'North East',
            ),
            5 => 
            array (
                'id' => 506,
                'country_id' => 28,
                'name' => 'Okavango',
            ),
            6 => 
            array (
                'id' => 507,
                'country_id' => 28,
                'name' => 'Orapa',
            ),
            7 => 
            array (
                'id' => 508,
                'country_id' => 28,
                'name' => 'Selibe Phikwe',
            ),
            8 => 
            array (
                'id' => 509,
                'country_id' => 28,
                'name' => 'South East',
            ),
            9 => 
            array (
                'id' => 510,
                'country_id' => 28,
                'name' => 'Sowa',
            ),
            10 => 
            array (
                'id' => 511,
                'country_id' => 29,
                'name' => 'Bouvet Island',
            ),
            11 => 
            array (
                'id' => 512,
                'country_id' => 30,
                'name' => 'Acre',
            ),
            12 => 
            array (
                'id' => 513,
                'country_id' => 30,
                'name' => 'Alagoas',
            ),
            13 => 
            array (
                'id' => 514,
                'country_id' => 30,
                'name' => 'Amapa',
            ),
            14 => 
            array (
                'id' => 515,
                'country_id' => 30,
                'name' => 'Amazonas',
            ),
            15 => 
            array (
                'id' => 516,
                'country_id' => 30,
                'name' => 'Bahia',
            ),
            16 => 
            array (
                'id' => 517,
                'country_id' => 30,
                'name' => 'Ceara',
            ),
            17 => 
            array (
                'id' => 518,
                'country_id' => 30,
                'name' => 'Distrito Federal',
            ),
            18 => 
            array (
                'id' => 519,
                'country_id' => 30,
                'name' => 'Espirito Santo',
            ),
            19 => 
            array (
                'id' => 520,
                'country_id' => 30,
                'name' => 'Estado de Sao Paulo',
            ),
            20 => 
            array (
                'id' => 521,
                'country_id' => 30,
                'name' => 'Goias',
            ),
            21 => 
            array (
                'id' => 522,
                'country_id' => 30,
                'name' => 'Maranhao',
            ),
            22 => 
            array (
                'id' => 523,
                'country_id' => 30,
                'name' => 'Mato Grosso',
            ),
            23 => 
            array (
                'id' => 524,
                'country_id' => 30,
                'name' => 'Mato Grosso do Sul',
            ),
            24 => 
            array (
                'id' => 525,
                'country_id' => 30,
                'name' => 'Minas Gerais',
            ),
            25 => 
            array (
                'id' => 526,
                'country_id' => 30,
                'name' => 'Para',
            ),
            26 => 
            array (
                'id' => 527,
                'country_id' => 30,
                'name' => 'Paraiba',
            ),
            27 => 
            array (
                'id' => 528,
                'country_id' => 30,
                'name' => 'Parana',
            ),
            28 => 
            array (
                'id' => 529,
                'country_id' => 30,
                'name' => 'Pernambuco',
            ),
            29 => 
            array (
                'id' => 530,
                'country_id' => 30,
                'name' => 'Piaui',
            ),
            30 => 
            array (
                'id' => 531,
                'country_id' => 30,
                'name' => 'Rio Grande do Norte',
            ),
            31 => 
            array (
                'id' => 532,
                'country_id' => 30,
                'name' => 'Rio Grande do Sul',
            ),
            32 => 
            array (
                'id' => 533,
                'country_id' => 30,
                'name' => 'Rio de Janeiro',
            ),
            33 => 
            array (
                'id' => 534,
                'country_id' => 30,
                'name' => 'Rondonia',
            ),
            34 => 
            array (
                'id' => 535,
                'country_id' => 30,
                'name' => 'Roraima',
            ),
            35 => 
            array (
                'id' => 536,
                'country_id' => 30,
                'name' => 'Santa Catarina',
            ),
            36 => 
            array (
                'id' => 537,
                'country_id' => 30,
                'name' => 'Sao Paulo',
            ),
            37 => 
            array (
                'id' => 538,
                'country_id' => 30,
                'name' => 'Sergipe',
            ),
            38 => 
            array (
                'id' => 539,
                'country_id' => 30,
                'name' => 'Tocantins',
            ),
            39 => 
            array (
                'id' => 540,
                'country_id' => 31,
                'name' => 'British Indian Ocean Territory',
            ),
            40 => 
            array (
                'id' => 541,
                'country_id' => 32,
                'name' => 'Belait',
            ),
            41 => 
            array (
                'id' => 542,
                'country_id' => 32,
                'name' => 'Brunei-Muara',
            ),
            42 => 
            array (
                'id' => 543,
                'country_id' => 32,
                'name' => 'Temburong',
            ),
            43 => 
            array (
                'id' => 544,
                'country_id' => 32,
                'name' => 'Tutong',
            ),
            44 => 
            array (
                'id' => 545,
                'country_id' => 33,
                'name' => 'Blagoevgrad',
            ),
            45 => 
            array (
                'id' => 546,
                'country_id' => 33,
                'name' => 'Burgas',
            ),
            46 => 
            array (
                'id' => 547,
                'country_id' => 33,
                'name' => 'Dobrich',
            ),
            47 => 
            array (
                'id' => 548,
                'country_id' => 33,
                'name' => 'Gabrovo',
            ),
            48 => 
            array (
                'id' => 549,
                'country_id' => 33,
                'name' => 'Haskovo',
            ),
            49 => 
            array (
                'id' => 550,
                'country_id' => 33,
                'name' => 'Jambol',
            ),
            50 => 
            array (
                'id' => 551,
                'country_id' => 33,
                'name' => 'Kardzhali',
            ),
            51 => 
            array (
                'id' => 552,
                'country_id' => 33,
                'name' => 'Kjustendil',
            ),
            52 => 
            array (
                'id' => 553,
                'country_id' => 33,
                'name' => 'Lovech',
            ),
            53 => 
            array (
                'id' => 554,
                'country_id' => 33,
                'name' => 'Montana',
            ),
            54 => 
            array (
                'id' => 555,
                'country_id' => 33,
                'name' => 'Oblast Sofiya-Grad',
            ),
            55 => 
            array (
                'id' => 556,
                'country_id' => 33,
                'name' => 'Pazardzhik',
            ),
            56 => 
            array (
                'id' => 557,
                'country_id' => 33,
                'name' => 'Pernik',
            ),
            57 => 
            array (
                'id' => 558,
                'country_id' => 33,
                'name' => 'Pleve',
            ),
            58 => 
            array (
                'id' => 559,
                'country_id' => 33,
                'name' => 'Plovdiv',
            ),
            59 => 
            array (
                'id' => 560,
                'country_id' => 33,
                'name' => 'Razgrad',
            ),
            60 => 
            array (
                'id' => 561,
                'country_id' => 33,
                'name' => 'Ruse',
            ),
            61 => 
            array (
                'id' => 562,
                'country_id' => 33,
                'name' => 'Shume',
            ),
            62 => 
            array (
                'id' => 563,
                'country_id' => 33,
                'name' => 'Silistra',
            ),
            63 => 
            array (
                'id' => 564,
                'country_id' => 33,
                'name' => 'Slive',
            ),
            64 => 
            array (
                'id' => 565,
                'country_id' => 33,
                'name' => 'Smolja',
            ),
            65 => 
            array (
                'id' => 566,
                'country_id' => 33,
                'name' => 'Sofija grad',
            ),
            66 => 
            array (
                'id' => 567,
                'country_id' => 33,
                'name' => 'Sofijska oblast',
            ),
            67 => 
            array (
                'id' => 568,
                'country_id' => 33,
                'name' => 'Stara Zagora',
            ),
            68 => 
            array (
                'id' => 569,
                'country_id' => 33,
                'name' => 'Targovishte',
            ),
            69 => 
            array (
                'id' => 570,
                'country_id' => 33,
                'name' => 'Varna',
            ),
            70 => 
            array (
                'id' => 571,
                'country_id' => 33,
                'name' => 'Veliko Tarnovo',
            ),
            71 => 
            array (
                'id' => 572,
                'country_id' => 33,
                'name' => 'Vidi',
            ),
            72 => 
            array (
                'id' => 573,
                'country_id' => 33,
                'name' => 'Vraca',
            ),
            73 => 
            array (
                'id' => 574,
                'country_id' => 33,
                'name' => 'Yablaniza',
            ),
            74 => 
            array (
                'id' => 575,
                'country_id' => 34,
                'name' => 'Bale',
            ),
            75 => 
            array (
                'id' => 576,
                'country_id' => 34,
                'name' => 'Bam',
            ),
            76 => 
            array (
                'id' => 577,
                'country_id' => 34,
                'name' => 'Bazega',
            ),
            77 => 
            array (
                'id' => 578,
                'country_id' => 34,
                'name' => 'Bougouriba',
            ),
            78 => 
            array (
                'id' => 579,
                'country_id' => 34,
                'name' => 'Boulgou',
            ),
            79 => 
            array (
                'id' => 580,
                'country_id' => 34,
                'name' => 'Boulkiemde',
            ),
            80 => 
            array (
                'id' => 581,
                'country_id' => 34,
                'name' => 'Comoe',
            ),
            81 => 
            array (
                'id' => 582,
                'country_id' => 34,
                'name' => 'Ganzourgou',
            ),
            82 => 
            array (
                'id' => 583,
                'country_id' => 34,
                'name' => 'Gnagna',
            ),
            83 => 
            array (
                'id' => 584,
                'country_id' => 34,
                'name' => 'Gourma',
            ),
            84 => 
            array (
                'id' => 585,
                'country_id' => 34,
                'name' => 'Houet',
            ),
            85 => 
            array (
                'id' => 586,
                'country_id' => 34,
                'name' => 'Ioba',
            ),
            86 => 
            array (
                'id' => 587,
                'country_id' => 34,
                'name' => 'Kadiogo',
            ),
            87 => 
            array (
                'id' => 588,
                'country_id' => 34,
                'name' => 'Kenedougou',
            ),
            88 => 
            array (
                'id' => 589,
                'country_id' => 34,
                'name' => 'Komandjari',
            ),
            89 => 
            array (
                'id' => 590,
                'country_id' => 34,
                'name' => 'Kompienga',
            ),
            90 => 
            array (
                'id' => 591,
                'country_id' => 34,
                'name' => 'Kossi',
            ),
            91 => 
            array (
                'id' => 592,
                'country_id' => 34,
                'name' => 'Kouritenga',
            ),
            92 => 
            array (
                'id' => 593,
                'country_id' => 34,
                'name' => 'Kourweogo',
            ),
            93 => 
            array (
                'id' => 594,
                'country_id' => 34,
                'name' => 'Leraba',
            ),
            94 => 
            array (
                'id' => 595,
                'country_id' => 34,
                'name' => 'Mouhou',
            ),
            95 => 
            array (
                'id' => 596,
                'country_id' => 34,
                'name' => 'Nahouri',
            ),
            96 => 
            array (
                'id' => 597,
                'country_id' => 34,
                'name' => 'Namentenga',
            ),
            97 => 
            array (
                'id' => 598,
                'country_id' => 34,
                'name' => 'Noumbiel',
            ),
            98 => 
            array (
                'id' => 599,
                'country_id' => 34,
                'name' => 'Oubritenga',
            ),
            99 => 
            array (
                'id' => 600,
                'country_id' => 34,
                'name' => 'Oudala',
            ),
            100 => 
            array (
                'id' => 601,
                'country_id' => 34,
                'name' => 'Passore',
            ),
            101 => 
            array (
                'id' => 602,
                'country_id' => 34,
                'name' => 'Poni',
            ),
            102 => 
            array (
                'id' => 603,
                'country_id' => 34,
                'name' => 'Sanguie',
            ),
            103 => 
            array (
                'id' => 604,
                'country_id' => 34,
                'name' => 'Sanmatenga',
            ),
            104 => 
            array (
                'id' => 605,
                'country_id' => 34,
                'name' => 'Seno',
            ),
            105 => 
            array (
                'id' => 606,
                'country_id' => 34,
                'name' => 'Sissili',
            ),
            106 => 
            array (
                'id' => 607,
                'country_id' => 34,
                'name' => 'Soum',
            ),
            107 => 
            array (
                'id' => 608,
                'country_id' => 34,
                'name' => 'Sourou',
            ),
            108 => 
            array (
                'id' => 609,
                'country_id' => 34,
                'name' => 'Tapoa',
            ),
            109 => 
            array (
                'id' => 610,
                'country_id' => 34,
                'name' => 'Tuy',
            ),
            110 => 
            array (
                'id' => 611,
                'country_id' => 34,
                'name' => 'Yatenga',
            ),
            111 => 
            array (
                'id' => 612,
                'country_id' => 34,
                'name' => 'Zondoma',
            ),
            112 => 
            array (
                'id' => 613,
                'country_id' => 34,
                'name' => 'Zoundweogo',
            ),
            113 => 
            array (
                'id' => 614,
                'country_id' => 35,
                'name' => 'Bubanza',
            ),
            114 => 
            array (
                'id' => 615,
                'country_id' => 35,
                'name' => 'Bujumbura',
            ),
            115 => 
            array (
                'id' => 616,
                'country_id' => 35,
                'name' => 'Bururi',
            ),
            116 => 
            array (
                'id' => 617,
                'country_id' => 35,
                'name' => 'Cankuzo',
            ),
            117 => 
            array (
                'id' => 618,
                'country_id' => 35,
                'name' => 'Cibitoke',
            ),
            118 => 
            array (
                'id' => 619,
                'country_id' => 35,
                'name' => 'Gitega',
            ),
            119 => 
            array (
                'id' => 620,
                'country_id' => 35,
                'name' => 'Karuzi',
            ),
            120 => 
            array (
                'id' => 621,
                'country_id' => 35,
                'name' => 'Kayanza',
            ),
            121 => 
            array (
                'id' => 622,
                'country_id' => 35,
                'name' => 'Kirundo',
            ),
            122 => 
            array (
                'id' => 623,
                'country_id' => 35,
                'name' => 'Makamba',
            ),
            123 => 
            array (
                'id' => 624,
                'country_id' => 35,
                'name' => 'Muramvya',
            ),
            124 => 
            array (
                'id' => 625,
                'country_id' => 35,
                'name' => 'Muyinga',
            ),
            125 => 
            array (
                'id' => 626,
                'country_id' => 35,
                'name' => 'Ngozi',
            ),
            126 => 
            array (
                'id' => 627,
                'country_id' => 35,
                'name' => 'Rutana',
            ),
            127 => 
            array (
                'id' => 628,
                'country_id' => 35,
                'name' => 'Ruyigi',
            ),
            128 => 
            array (
                'id' => 629,
                'country_id' => 36,
                'name' => 'Banteay Mean Chey',
            ),
            129 => 
            array (
                'id' => 630,
                'country_id' => 36,
                'name' => 'Bat Dambang',
            ),
            130 => 
            array (
                'id' => 631,
                'country_id' => 36,
                'name' => 'Kampong Cham',
            ),
            131 => 
            array (
                'id' => 632,
                'country_id' => 36,
                'name' => 'Kampong Chhnang',
            ),
            132 => 
            array (
                'id' => 633,
                'country_id' => 36,
                'name' => 'Kampong Spoeu',
            ),
            133 => 
            array (
                'id' => 634,
                'country_id' => 36,
                'name' => 'Kampong Thum',
            ),
            134 => 
            array (
                'id' => 635,
                'country_id' => 36,
                'name' => 'Kampot',
            ),
            135 => 
            array (
                'id' => 636,
                'country_id' => 36,
                'name' => 'Kandal',
            ),
            136 => 
            array (
                'id' => 637,
                'country_id' => 36,
                'name' => 'Kaoh Kong',
            ),
            137 => 
            array (
                'id' => 638,
                'country_id' => 36,
                'name' => 'Kracheh',
            ),
            138 => 
            array (
                'id' => 639,
                'country_id' => 36,
                'name' => 'Krong Kaeb',
            ),
            139 => 
            array (
                'id' => 640,
                'country_id' => 36,
                'name' => 'Krong Paili',
            ),
            140 => 
            array (
                'id' => 641,
                'country_id' => 36,
                'name' => 'Krong Preah Sihanouk',
            ),
            141 => 
            array (
                'id' => 642,
                'country_id' => 36,
                'name' => 'Mondol Kiri',
            ),
            142 => 
            array (
                'id' => 643,
                'country_id' => 36,
                'name' => 'Otdar Mean Chey',
            ),
            143 => 
            array (
                'id' => 644,
                'country_id' => 36,
                'name' => 'Phnum Penh',
            ),
            144 => 
            array (
                'id' => 645,
                'country_id' => 36,
                'name' => 'Pousat',
            ),
            145 => 
            array (
                'id' => 646,
                'country_id' => 36,
                'name' => 'Preah Vihear',
            ),
            146 => 
            array (
                'id' => 647,
                'country_id' => 36,
                'name' => 'Prey Veaeng',
            ),
            147 => 
            array (
                'id' => 648,
                'country_id' => 36,
                'name' => 'Rotanak Kiri',
            ),
            148 => 
            array (
                'id' => 649,
                'country_id' => 36,
                'name' => 'Siem Reab',
            ),
            149 => 
            array (
                'id' => 650,
                'country_id' => 36,
                'name' => 'Stueng Traeng',
            ),
            150 => 
            array (
                'id' => 651,
                'country_id' => 36,
                'name' => 'Svay Rieng',
            ),
            151 => 
            array (
                'id' => 652,
                'country_id' => 36,
                'name' => 'Takaev',
            ),
            152 => 
            array (
                'id' => 653,
                'country_id' => 37,
                'name' => 'Adamaoua',
            ),
            153 => 
            array (
                'id' => 654,
                'country_id' => 37,
                'name' => 'Centre',
            ),
            154 => 
            array (
                'id' => 655,
                'country_id' => 37,
                'name' => 'Est',
            ),
            155 => 
            array (
                'id' => 656,
                'country_id' => 37,
                'name' => 'Littoral',
            ),
            156 => 
            array (
                'id' => 657,
                'country_id' => 37,
                'name' => 'Nord',
            ),
            157 => 
            array (
                'id' => 658,
                'country_id' => 37,
                'name' => 'Nord Extreme',
            ),
            158 => 
            array (
                'id' => 659,
                'country_id' => 37,
                'name' => 'Nordouest',
            ),
            159 => 
            array (
                'id' => 660,
                'country_id' => 37,
                'name' => 'Ouest',
            ),
            160 => 
            array (
                'id' => 661,
                'country_id' => 37,
                'name' => 'Sud',
            ),
            161 => 
            array (
                'id' => 662,
                'country_id' => 37,
                'name' => 'Sudouest',
            ),
            162 => 
            array (
                'id' => 663,
                'country_id' => 38,
                'name' => 'Alberta',
            ),
            163 => 
            array (
                'id' => 664,
                'country_id' => 38,
                'name' => 'British Columbia',
            ),
            164 => 
            array (
                'id' => 665,
                'country_id' => 38,
                'name' => 'Manitoba',
            ),
            165 => 
            array (
                'id' => 666,
                'country_id' => 38,
                'name' => 'New Brunswick',
            ),
            166 => 
            array (
                'id' => 667,
                'country_id' => 38,
                'name' => 'Newfoundland and Labrador',
            ),
            167 => 
            array (
                'id' => 668,
                'country_id' => 38,
                'name' => 'Northwest Territories',
            ),
            168 => 
            array (
                'id' => 669,
                'country_id' => 38,
                'name' => 'Nova Scotia',
            ),
            169 => 
            array (
                'id' => 670,
                'country_id' => 38,
                'name' => 'Nunavut',
            ),
            170 => 
            array (
                'id' => 671,
                'country_id' => 38,
                'name' => 'Ontario',
            ),
            171 => 
            array (
                'id' => 672,
                'country_id' => 38,
                'name' => 'Prince Edward Island',
            ),
            172 => 
            array (
                'id' => 673,
                'country_id' => 38,
                'name' => 'Quebec',
            ),
            173 => 
            array (
                'id' => 674,
                'country_id' => 38,
                'name' => 'Saskatchewa',
            ),
            174 => 
            array (
                'id' => 675,
                'country_id' => 38,
                'name' => 'Yuko',
            ),
            175 => 
            array (
                'id' => 676,
                'country_id' => 39,
                'name' => 'Boavista',
            ),
            176 => 
            array (
                'id' => 677,
                'country_id' => 39,
                'name' => 'Brava',
            ),
            177 => 
            array (
                'id' => 678,
                'country_id' => 39,
                'name' => 'Fogo',
            ),
            178 => 
            array (
                'id' => 679,
                'country_id' => 39,
                'name' => 'Maio',
            ),
            179 => 
            array (
                'id' => 680,
                'country_id' => 39,
                'name' => 'Sal',
            ),
            180 => 
            array (
                'id' => 681,
                'country_id' => 39,
                'name' => 'Santo Antao',
            ),
            181 => 
            array (
                'id' => 682,
                'country_id' => 39,
                'name' => 'Sao Nicolau',
            ),
            182 => 
            array (
                'id' => 683,
                'country_id' => 39,
                'name' => 'Sao Tiago',
            ),
            183 => 
            array (
                'id' => 684,
                'country_id' => 39,
                'name' => 'Sao Vicente',
            ),
            184 => 
            array (
                'id' => 685,
                'country_id' => 40,
                'name' => 'Grand Cayma',
            ),
            185 => 
            array (
                'id' => 686,
                'country_id' => 41,
                'name' => 'Bamingui-Bangora',
            ),
            186 => 
            array (
                'id' => 687,
                'country_id' => 41,
                'name' => 'Bangui',
            ),
            187 => 
            array (
                'id' => 688,
                'country_id' => 41,
                'name' => 'Basse-Kotto',
            ),
            188 => 
            array (
                'id' => 689,
                'country_id' => 41,
                'name' => 'Haut-Mbomou',
            ),
            189 => 
            array (
                'id' => 690,
                'country_id' => 41,
                'name' => 'Haute-Kotto',
            ),
            190 => 
            array (
                'id' => 691,
                'country_id' => 41,
                'name' => 'Kemo',
            ),
            191 => 
            array (
                'id' => 692,
                'country_id' => 41,
                'name' => 'Lobaye',
            ),
            192 => 
            array (
                'id' => 693,
                'country_id' => 41,
                'name' => 'Mambere-Kadei',
            ),
            193 => 
            array (
                'id' => 694,
                'country_id' => 41,
                'name' => 'Mbomou',
            ),
            194 => 
            array (
                'id' => 695,
                'country_id' => 41,
                'name' => 'Nana-Gribizi',
            ),
            195 => 
            array (
                'id' => 696,
                'country_id' => 41,
                'name' => 'Nana-Mambere',
            ),
            196 => 
            array (
                'id' => 697,
                'country_id' => 41,
                'name' => 'Ombella Mpoko',
            ),
            197 => 
            array (
                'id' => 698,
                'country_id' => 41,
                'name' => 'Ouaka',
            ),
            198 => 
            array (
                'id' => 699,
                'country_id' => 41,
                'name' => 'Ouham',
            ),
            199 => 
            array (
                'id' => 700,
                'country_id' => 41,
                'name' => 'Ouham-Pende',
            ),
            200 => 
            array (
                'id' => 701,
                'country_id' => 41,
                'name' => 'Sangha-Mbaere',
            ),
            201 => 
            array (
                'id' => 702,
                'country_id' => 41,
                'name' => 'Vakaga',
            ),
            202 => 
            array (
                'id' => 703,
                'country_id' => 42,
                'name' => 'Batha',
            ),
            203 => 
            array (
                'id' => 704,
                'country_id' => 42,
                'name' => 'Biltine',
            ),
            204 => 
            array (
                'id' => 705,
                'country_id' => 42,
                'name' => 'Bourkou-Ennedi-Tibesti',
            ),
            205 => 
            array (
                'id' => 706,
                'country_id' => 42,
                'name' => 'Chari-Baguirmi',
            ),
            206 => 
            array (
                'id' => 707,
                'country_id' => 42,
                'name' => 'Guera',
            ),
            207 => 
            array (
                'id' => 708,
                'country_id' => 42,
                'name' => 'Kanem',
            ),
            208 => 
            array (
                'id' => 709,
                'country_id' => 42,
                'name' => 'Lac',
            ),
            209 => 
            array (
                'id' => 710,
                'country_id' => 42,
                'name' => 'Logone Occidental',
            ),
            210 => 
            array (
                'id' => 711,
                'country_id' => 42,
                'name' => 'Logone Oriental',
            ),
            211 => 
            array (
                'id' => 712,
                'country_id' => 42,
                'name' => 'Mayo-Kebbi',
            ),
            212 => 
            array (
                'id' => 713,
                'country_id' => 42,
                'name' => 'Moyen-Chari',
            ),
            213 => 
            array (
                'id' => 714,
                'country_id' => 42,
                'name' => 'Ouaddai',
            ),
            214 => 
            array (
                'id' => 715,
                'country_id' => 42,
                'name' => 'Salamat',
            ),
            215 => 
            array (
                'id' => 716,
                'country_id' => 42,
                'name' => 'Tandjile',
            ),
            216 => 
            array (
                'id' => 717,
                'country_id' => 43,
                'name' => 'Aise',
            ),
            217 => 
            array (
                'id' => 718,
                'country_id' => 43,
                'name' => 'Antofagasta',
            ),
            218 => 
            array (
                'id' => 719,
                'country_id' => 43,
                'name' => 'Araucania',
            ),
            219 => 
            array (
                'id' => 720,
                'country_id' => 43,
                'name' => 'Atacama',
            ),
            220 => 
            array (
                'id' => 721,
                'country_id' => 43,
                'name' => 'Bio Bio',
            ),
            221 => 
            array (
                'id' => 722,
                'country_id' => 43,
                'name' => 'Coquimbo',
            ),
            222 => 
            array (
                'id' => 723,
                'country_id' => 43,
                'name' => 'Libertador General Bernardo O\'',
            ),
            223 => 
            array (
                'id' => 724,
                'country_id' => 43,
                'name' => 'Los Lagos',
            ),
            224 => 
            array (
                'id' => 725,
                'country_id' => 43,
                'name' => 'Magellanes',
            ),
            225 => 
            array (
                'id' => 726,
                'country_id' => 43,
                'name' => 'Maule',
            ),
            226 => 
            array (
                'id' => 727,
                'country_id' => 43,
                'name' => 'Metropolitana',
            ),
            227 => 
            array (
                'id' => 728,
                'country_id' => 43,
                'name' => 'Metropolitana de Santiago',
            ),
            228 => 
            array (
                'id' => 729,
                'country_id' => 43,
                'name' => 'Tarapaca',
            ),
            229 => 
            array (
                'id' => 730,
                'country_id' => 43,
                'name' => 'Valparaiso',
            ),
            230 => 
            array (
                'id' => 731,
                'country_id' => 44,
                'name' => 'Anhui',
            ),
            231 => 
            array (
                'id' => 732,
                'country_id' => 44,
                'name' => 'Anhui Province',
            ),
            232 => 
            array (
                'id' => 733,
                'country_id' => 44,
                'name' => 'Anhui Sheng',
            ),
            233 => 
            array (
                'id' => 734,
                'country_id' => 44,
                'name' => 'Aome',
            ),
            234 => 
            array (
                'id' => 735,
                'country_id' => 44,
                'name' => 'Beijing',
            ),
            235 => 
            array (
                'id' => 736,
                'country_id' => 44,
                'name' => 'Beijing Shi',
            ),
            236 => 
            array (
                'id' => 737,
                'country_id' => 44,
                'name' => 'Chongqing',
            ),
            237 => 
            array (
                'id' => 738,
                'country_id' => 44,
                'name' => 'Fujia',
            ),
            238 => 
            array (
                'id' => 739,
                'country_id' => 44,
                'name' => 'Fujian Sheng',
            ),
            239 => 
            array (
                'id' => 740,
                'country_id' => 44,
                'name' => 'Gansu',
            ),
            240 => 
            array (
                'id' => 741,
                'country_id' => 44,
                'name' => 'Guangdong',
            ),
            241 => 
            array (
                'id' => 742,
                'country_id' => 44,
                'name' => 'Guangdong Sheng',
            ),
            242 => 
            array (
                'id' => 743,
                'country_id' => 44,
                'name' => 'Guangxi',
            ),
            243 => 
            array (
                'id' => 744,
                'country_id' => 44,
                'name' => 'Guizhou',
            ),
            244 => 
            array (
                'id' => 745,
                'country_id' => 44,
                'name' => 'Haina',
            ),
            245 => 
            array (
                'id' => 746,
                'country_id' => 44,
                'name' => 'Hebei',
            ),
            246 => 
            array (
                'id' => 747,
                'country_id' => 44,
                'name' => 'Heilongjiang',
            ),
            247 => 
            array (
                'id' => 748,
                'country_id' => 44,
                'name' => 'Hena',
            ),
            248 => 
            array (
                'id' => 749,
                'country_id' => 44,
                'name' => 'Hubei',
            ),
            249 => 
            array (
                'id' => 750,
                'country_id' => 44,
                'name' => 'Huna',
            ),
            250 => 
            array (
                'id' => 751,
                'country_id' => 44,
                'name' => 'Jiangsu',
            ),
            251 => 
            array (
                'id' => 752,
                'country_id' => 44,
                'name' => 'Jiangsu Sheng',
            ),
            252 => 
            array (
                'id' => 753,
                'country_id' => 44,
                'name' => 'Jiangxi',
            ),
            253 => 
            array (
                'id' => 754,
                'country_id' => 44,
                'name' => 'Jili',
            ),
            254 => 
            array (
                'id' => 755,
                'country_id' => 44,
                'name' => 'Liaoning',
            ),
            255 => 
            array (
                'id' => 756,
                'country_id' => 44,
                'name' => 'Liaoning Sheng',
            ),
            256 => 
            array (
                'id' => 757,
                'country_id' => 44,
                'name' => 'Nei Monggol',
            ),
            257 => 
            array (
                'id' => 758,
                'country_id' => 44,
                'name' => 'Ningxia Hui',
            ),
            258 => 
            array (
                'id' => 759,
                'country_id' => 44,
                'name' => 'Qinghai',
            ),
            259 => 
            array (
                'id' => 760,
                'country_id' => 44,
                'name' => 'Shaanxi',
            ),
            260 => 
            array (
                'id' => 761,
                'country_id' => 44,
                'name' => 'Shandong',
            ),
            261 => 
            array (
                'id' => 762,
                'country_id' => 44,
                'name' => 'Shandong Sheng',
            ),
            262 => 
            array (
                'id' => 763,
                'country_id' => 44,
                'name' => 'Shanghai',
            ),
            263 => 
            array (
                'id' => 764,
                'country_id' => 44,
                'name' => 'Shanxi',
            ),
            264 => 
            array (
                'id' => 765,
                'country_id' => 44,
                'name' => 'Sichua',
            ),
            265 => 
            array (
                'id' => 766,
                'country_id' => 44,
                'name' => 'Tianji',
            ),
            266 => 
            array (
                'id' => 767,
                'country_id' => 44,
                'name' => 'Xianggang',
            ),
            267 => 
            array (
                'id' => 768,
                'country_id' => 44,
                'name' => 'Xinjiang',
            ),
            268 => 
            array (
                'id' => 769,
                'country_id' => 44,
                'name' => 'Xizang',
            ),
            269 => 
            array (
                'id' => 770,
                'country_id' => 44,
                'name' => 'Yunna',
            ),
            270 => 
            array (
                'id' => 771,
                'country_id' => 44,
                'name' => 'Zhejiang',
            ),
            271 => 
            array (
                'id' => 772,
                'country_id' => 44,
                'name' => 'Zhejiang Sheng',
            ),
            272 => 
            array (
                'id' => 773,
                'country_id' => 45,
                'name' => 'Christmas Island',
            ),
            273 => 
            array (
                'id' => 774,
                'country_id' => 46,
            'name' => 'Cocos (Keeling); Islands',
            ),
            274 => 
            array (
                'id' => 775,
                'country_id' => 47,
                'name' => 'Amazonas',
            ),
            275 => 
            array (
                'id' => 776,
                'country_id' => 47,
                'name' => 'Antioquia',
            ),
            276 => 
            array (
                'id' => 777,
                'country_id' => 47,
                'name' => 'Arauca',
            ),
            277 => 
            array (
                'id' => 778,
                'country_id' => 47,
                'name' => 'Atlantico',
            ),
            278 => 
            array (
                'id' => 779,
                'country_id' => 47,
                'name' => 'Bogota',
            ),
            279 => 
            array (
                'id' => 780,
                'country_id' => 47,
                'name' => 'Bolivar',
            ),
            280 => 
            array (
                'id' => 781,
                'country_id' => 47,
                'name' => 'Boyaca',
            ),
            281 => 
            array (
                'id' => 782,
                'country_id' => 47,
                'name' => 'Caldas',
            ),
            282 => 
            array (
                'id' => 783,
                'country_id' => 47,
                'name' => 'Caqueta',
            ),
            283 => 
            array (
                'id' => 784,
                'country_id' => 47,
                'name' => 'Casanare',
            ),
            284 => 
            array (
                'id' => 785,
                'country_id' => 47,
                'name' => 'Cauca',
            ),
            285 => 
            array (
                'id' => 786,
                'country_id' => 47,
                'name' => 'Cesar',
            ),
            286 => 
            array (
                'id' => 787,
                'country_id' => 47,
                'name' => 'Choco',
            ),
            287 => 
            array (
                'id' => 788,
                'country_id' => 47,
                'name' => 'Cordoba',
            ),
            288 => 
            array (
                'id' => 789,
                'country_id' => 47,
                'name' => 'Cundinamarca',
            ),
            289 => 
            array (
                'id' => 790,
                'country_id' => 47,
                'name' => 'Guainia',
            ),
            290 => 
            array (
                'id' => 791,
                'country_id' => 47,
                'name' => 'Guaviare',
            ),
            291 => 
            array (
                'id' => 792,
                'country_id' => 47,
                'name' => 'Huila',
            ),
            292 => 
            array (
                'id' => 793,
                'country_id' => 47,
                'name' => 'La Guajira',
            ),
            293 => 
            array (
                'id' => 794,
                'country_id' => 47,
                'name' => 'Magdalena',
            ),
            294 => 
            array (
                'id' => 795,
                'country_id' => 47,
                'name' => 'Meta',
            ),
            295 => 
            array (
                'id' => 796,
                'country_id' => 47,
                'name' => 'Narino',
            ),
            296 => 
            array (
                'id' => 797,
                'country_id' => 47,
                'name' => 'Norte de Santander',
            ),
            297 => 
            array (
                'id' => 798,
                'country_id' => 47,
                'name' => 'Putumayo',
            ),
            298 => 
            array (
                'id' => 799,
                'country_id' => 47,
                'name' => 'Quindio',
            ),
            299 => 
            array (
                'id' => 800,
                'country_id' => 47,
                'name' => 'Risaralda',
            ),
            300 => 
            array (
                'id' => 801,
                'country_id' => 47,
                'name' => 'San Andres y Providencia',
            ),
            301 => 
            array (
                'id' => 802,
                'country_id' => 47,
                'name' => 'Santander',
            ),
            302 => 
            array (
                'id' => 803,
                'country_id' => 47,
                'name' => 'Sucre',
            ),
            303 => 
            array (
                'id' => 804,
                'country_id' => 47,
                'name' => 'Tolima',
            ),
            304 => 
            array (
                'id' => 805,
                'country_id' => 47,
                'name' => 'Valle del Cauca',
            ),
            305 => 
            array (
                'id' => 806,
                'country_id' => 47,
                'name' => 'Vaupes',
            ),
            306 => 
            array (
                'id' => 807,
                'country_id' => 47,
                'name' => 'Vichada',
            ),
            307 => 
            array (
                'id' => 808,
                'country_id' => 48,
                'name' => 'Mwali',
            ),
            308 => 
            array (
                'id' => 809,
                'country_id' => 48,
                'name' => 'Njazidja',
            ),
            309 => 
            array (
                'id' => 810,
                'country_id' => 48,
                'name' => 'Nzwani',
            ),
            310 => 
            array (
                'id' => 811,
                'country_id' => 49,
                'name' => 'Bouenza',
            ),
            311 => 
            array (
                'id' => 812,
                'country_id' => 49,
                'name' => 'Brazzaville',
            ),
            312 => 
            array (
                'id' => 813,
                'country_id' => 49,
                'name' => 'Cuvette',
            ),
            313 => 
            array (
                'id' => 814,
                'country_id' => 49,
                'name' => 'Kouilou',
            ),
            314 => 
            array (
                'id' => 815,
                'country_id' => 49,
                'name' => 'Lekoumou',
            ),
            315 => 
            array (
                'id' => 816,
                'country_id' => 49,
                'name' => 'Likouala',
            ),
            316 => 
            array (
                'id' => 817,
                'country_id' => 49,
                'name' => 'Niari',
            ),
            317 => 
            array (
                'id' => 818,
                'country_id' => 49,
                'name' => 'Plateaux',
            ),
            318 => 
            array (
                'id' => 819,
                'country_id' => 49,
                'name' => 'Pool',
            ),
            319 => 
            array (
                'id' => 820,
                'country_id' => 49,
                'name' => 'Sangha',
            ),
            320 => 
            array (
                'id' => 821,
                'country_id' => 50,
                'name' => 'Bandundu',
            ),
            321 => 
            array (
                'id' => 822,
                'country_id' => 50,
                'name' => 'Bas-Congo',
            ),
            322 => 
            array (
                'id' => 823,
                'country_id' => 50,
                'name' => 'Equateur',
            ),
            323 => 
            array (
                'id' => 824,
                'country_id' => 50,
                'name' => 'Haut-Congo',
            ),
            324 => 
            array (
                'id' => 825,
                'country_id' => 50,
                'name' => 'Kasai-Occidental',
            ),
            325 => 
            array (
                'id' => 826,
                'country_id' => 50,
                'name' => 'Kasai-Oriental',
            ),
            326 => 
            array (
                'id' => 827,
                'country_id' => 50,
                'name' => 'Katanga',
            ),
            327 => 
            array (
                'id' => 828,
                'country_id' => 50,
                'name' => 'Kinshasa',
            ),
            328 => 
            array (
                'id' => 829,
                'country_id' => 50,
                'name' => 'Maniema',
            ),
            329 => 
            array (
                'id' => 830,
                'country_id' => 50,
                'name' => 'Nord-Kivu',
            ),
            330 => 
            array (
                'id' => 831,
                'country_id' => 50,
                'name' => 'Sud-Kivu',
            ),
            331 => 
            array (
                'id' => 832,
                'country_id' => 51,
                'name' => 'Aitutaki',
            ),
            332 => 
            array (
                'id' => 833,
                'country_id' => 51,
                'name' => 'Atiu',
            ),
            333 => 
            array (
                'id' => 834,
                'country_id' => 51,
                'name' => 'Mangaia',
            ),
            334 => 
            array (
                'id' => 835,
                'country_id' => 51,
                'name' => 'Manihiki',
            ),
            335 => 
            array (
                'id' => 836,
                'country_id' => 51,
                'name' => 'Mauke',
            ),
            336 => 
            array (
                'id' => 837,
                'country_id' => 51,
                'name' => 'Mitiaro',
            ),
            337 => 
            array (
                'id' => 838,
                'country_id' => 51,
                'name' => 'Nassau',
            ),
            338 => 
            array (
                'id' => 839,
                'country_id' => 51,
                'name' => 'Pukapuka',
            ),
            339 => 
            array (
                'id' => 840,
                'country_id' => 51,
                'name' => 'Rakahanga',
            ),
            340 => 
            array (
                'id' => 841,
                'country_id' => 51,
                'name' => 'Rarotonga',
            ),
            341 => 
            array (
                'id' => 842,
                'country_id' => 51,
                'name' => 'Tongareva',
            ),
            342 => 
            array (
                'id' => 843,
                'country_id' => 52,
                'name' => 'Alajuela',
            ),
            343 => 
            array (
                'id' => 844,
                'country_id' => 52,
                'name' => 'Cartago',
            ),
            344 => 
            array (
                'id' => 845,
                'country_id' => 52,
                'name' => 'Guanacaste',
            ),
            345 => 
            array (
                'id' => 846,
                'country_id' => 52,
                'name' => 'Heredia',
            ),
            346 => 
            array (
                'id' => 847,
                'country_id' => 52,
                'name' => 'Limo',
            ),
            347 => 
            array (
                'id' => 848,
                'country_id' => 52,
                'name' => 'Puntarenas',
            ),
            348 => 
            array (
                'id' => 849,
                'country_id' => 52,
                'name' => 'San Jose',
            ),
            349 => 
            array (
                'id' => 850,
                'country_id' => 53,
                'name' => 'Abidja',
            ),
            350 => 
            array (
                'id' => 851,
                'country_id' => 53,
                'name' => 'Agneby',
            ),
            351 => 
            array (
                'id' => 852,
                'country_id' => 53,
                'name' => 'Bafing',
            ),
            352 => 
            array (
                'id' => 853,
                'country_id' => 53,
                'name' => 'Denguele',
            ),
            353 => 
            array (
                'id' => 854,
                'country_id' => 53,
                'name' => 'Dix-huit Montagnes',
            ),
            354 => 
            array (
                'id' => 855,
                'country_id' => 53,
                'name' => 'Fromager',
            ),
            355 => 
            array (
                'id' => 856,
                'country_id' => 53,
                'name' => 'Haut-Sassandra',
            ),
            356 => 
            array (
                'id' => 857,
                'country_id' => 53,
                'name' => 'Lacs',
            ),
            357 => 
            array (
                'id' => 858,
                'country_id' => 53,
                'name' => 'Lagunes',
            ),
            358 => 
            array (
                'id' => 859,
                'country_id' => 53,
                'name' => 'Marahoue',
            ),
            359 => 
            array (
                'id' => 860,
                'country_id' => 53,
                'name' => 'Moyen-Cavally',
            ),
            360 => 
            array (
                'id' => 861,
                'country_id' => 53,
                'name' => 'Moyen-Comoe',
            ),
            361 => 
            array (
                'id' => 862,
                'country_id' => 53,
                'name' => '\'zi-Comoe',
            ),
            362 => 
            array (
                'id' => 863,
                'country_id' => 53,
                'name' => 'Sassandra',
            ),
            363 => 
            array (
                'id' => 864,
                'country_id' => 53,
                'name' => 'Savanes',
            ),
            364 => 
            array (
                'id' => 865,
                'country_id' => 53,
                'name' => 'Sud-Bandama',
            ),
            365 => 
            array (
                'id' => 866,
                'country_id' => 53,
                'name' => 'Sud-Comoe',
            ),
            366 => 
            array (
                'id' => 867,
                'country_id' => 53,
                'name' => 'Vallee du Bandama',
            ),
            367 => 
            array (
                'id' => 868,
                'country_id' => 53,
                'name' => 'Worodougou',
            ),
            368 => 
            array (
                'id' => 869,
                'country_id' => 53,
                'name' => 'Zanza',
            ),
            369 => 
            array (
                'id' => 870,
                'country_id' => 54,
                'name' => 'Bjelovar-Bilogora',
            ),
            370 => 
            array (
                'id' => 871,
                'country_id' => 54,
                'name' => 'Dubrovnik-Neretva',
            ),
            371 => 
            array (
                'id' => 872,
                'country_id' => 54,
                'name' => 'Grad Zagreb',
            ),
            372 => 
            array (
                'id' => 873,
                'country_id' => 54,
                'name' => 'Istra',
            ),
            373 => 
            array (
                'id' => 874,
                'country_id' => 54,
                'name' => 'Karlovac',
            ),
            374 => 
            array (
                'id' => 875,
                'country_id' => 54,
                'name' => 'Koprivnica-Krizhevci',
            ),
            375 => 
            array (
                'id' => 876,
                'country_id' => 54,
                'name' => 'Krapina-Zagorje',
            ),
            376 => 
            array (
                'id' => 877,
                'country_id' => 54,
                'name' => 'Lika-Senj',
            ),
            377 => 
            array (
                'id' => 878,
                'country_id' => 54,
                'name' => 'Medhimurje',
            ),
            378 => 
            array (
                'id' => 879,
                'country_id' => 54,
                'name' => 'Medimurska Zupanija',
            ),
            379 => 
            array (
                'id' => 880,
                'country_id' => 54,
                'name' => 'Osijek-Baranja',
            ),
            380 => 
            array (
                'id' => 881,
                'country_id' => 54,
                'name' => 'Osjecko-Baranjska Zupanija',
            ),
            381 => 
            array (
                'id' => 882,
                'country_id' => 54,
                'name' => 'Pozhega-Slavonija',
            ),
            382 => 
            array (
                'id' => 883,
                'country_id' => 54,
                'name' => 'Primorje-Gorski Kotar',
            ),
            383 => 
            array (
                'id' => 884,
                'country_id' => 54,
                'name' => 'Shibenik-Kni',
            ),
            384 => 
            array (
                'id' => 885,
                'country_id' => 54,
                'name' => 'Sisak-Moslavina',
            ),
            385 => 
            array (
                'id' => 886,
                'country_id' => 54,
                'name' => 'Slavonski Brod-Posavina',
            ),
            386 => 
            array (
                'id' => 887,
                'country_id' => 54,
                'name' => 'Split-Dalmacija',
            ),
            387 => 
            array (
                'id' => 888,
                'country_id' => 54,
                'name' => 'Varazhdi',
            ),
            388 => 
            array (
                'id' => 889,
                'country_id' => 54,
                'name' => 'Virovitica-Podravina',
            ),
            389 => 
            array (
                'id' => 890,
                'country_id' => 54,
                'name' => 'Vukovar-Srijem',
            ),
            390 => 
            array (
                'id' => 891,
                'country_id' => 54,
                'name' => 'Zadar',
            ),
            391 => 
            array (
                'id' => 892,
                'country_id' => 54,
                'name' => 'Zagreb',
            ),
            392 => 
            array (
                'id' => 893,
                'country_id' => 55,
                'name' => 'Camaguey',
            ),
            393 => 
            array (
                'id' => 894,
                'country_id' => 55,
                'name' => 'Ciego de Avila',
            ),
            394 => 
            array (
                'id' => 895,
                'country_id' => 55,
                'name' => 'Cienfuegos',
            ),
            395 => 
            array (
                'id' => 896,
                'country_id' => 55,
                'name' => 'Ciudad de la Habana',
            ),
            396 => 
            array (
                'id' => 897,
                'country_id' => 55,
                'name' => 'Granma',
            ),
            397 => 
            array (
                'id' => 898,
                'country_id' => 55,
                'name' => 'Guantanamo',
            ),
            398 => 
            array (
                'id' => 899,
                'country_id' => 55,
                'name' => 'Habana',
            ),
            399 => 
            array (
                'id' => 900,
                'country_id' => 55,
                'name' => 'Holgui',
            ),
            400 => 
            array (
                'id' => 901,
                'country_id' => 55,
                'name' => 'Isla de la Juventud',
            ),
            401 => 
            array (
                'id' => 902,
                'country_id' => 55,
                'name' => 'La Habana',
            ),
            402 => 
            array (
                'id' => 903,
                'country_id' => 55,
                'name' => 'Las Tunas',
            ),
            403 => 
            array (
                'id' => 904,
                'country_id' => 55,
                'name' => 'Matanzas',
            ),
            404 => 
            array (
                'id' => 905,
                'country_id' => 55,
                'name' => 'Pinar del Rio',
            ),
            405 => 
            array (
                'id' => 906,
                'country_id' => 55,
                'name' => 'Sancti Spiritus',
            ),
            406 => 
            array (
                'id' => 907,
                'country_id' => 55,
                'name' => 'Santiago de Cuba',
            ),
            407 => 
            array (
                'id' => 908,
                'country_id' => 55,
                'name' => 'Villa Clara',
            ),
            408 => 
            array (
                'id' => 909,
                'country_id' => 56,
                'name' => 'Government controlled area',
            ),
            409 => 
            array (
                'id' => 910,
                'country_id' => 56,
                'name' => 'Limassol',
            ),
            410 => 
            array (
                'id' => 911,
                'country_id' => 56,
                'name' => 'Nicosia District',
            ),
            411 => 
            array (
                'id' => 912,
                'country_id' => 56,
                'name' => 'Paphos',
            ),
            412 => 
            array (
                'id' => 913,
                'country_id' => 56,
                'name' => 'Turkish controlled area',
            ),
            413 => 
            array (
                'id' => 914,
                'country_id' => 57,
                'name' => 'Central Bohemia',
            ),
            414 => 
            array (
                'id' => 915,
                'country_id' => 57,
                'name' => 'Frycovice',
            ),
            415 => 
            array (
                'id' => 916,
                'country_id' => 57,
                'name' => 'Jihocesky Kraj',
            ),
            416 => 
            array (
                'id' => 917,
                'country_id' => 57,
                'name' => 'Jihochesky',
            ),
            417 => 
            array (
                'id' => 918,
                'country_id' => 57,
                'name' => 'Jihomoravsky',
            ),
            418 => 
            array (
                'id' => 919,
                'country_id' => 57,
                'name' => 'Karlovarsky',
            ),
            419 => 
            array (
                'id' => 920,
                'country_id' => 57,
                'name' => 'Klecany',
            ),
            420 => 
            array (
                'id' => 921,
                'country_id' => 57,
                'name' => 'Kralovehradecky',
            ),
            421 => 
            array (
                'id' => 922,
                'country_id' => 57,
                'name' => 'Liberecky',
            ),
            422 => 
            array (
                'id' => 923,
                'country_id' => 57,
                'name' => 'Lipov',
            ),
            423 => 
            array (
                'id' => 924,
                'country_id' => 57,
                'name' => 'Moravskoslezsky',
            ),
            424 => 
            array (
                'id' => 925,
                'country_id' => 57,
                'name' => 'Olomoucky',
            ),
            425 => 
            array (
                'id' => 926,
                'country_id' => 57,
                'name' => 'Olomoucky Kraj',
            ),
            426 => 
            array (
                'id' => 927,
                'country_id' => 57,
                'name' => 'Pardubicky',
            ),
            427 => 
            array (
                'id' => 928,
                'country_id' => 57,
                'name' => 'Plzensky',
            ),
            428 => 
            array (
                'id' => 929,
                'country_id' => 57,
                'name' => 'Praha',
            ),
            429 => 
            array (
                'id' => 930,
                'country_id' => 57,
                'name' => 'Rajhrad',
            ),
            430 => 
            array (
                'id' => 931,
                'country_id' => 57,
                'name' => 'Smirice',
            ),
            431 => 
            array (
                'id' => 932,
                'country_id' => 57,
                'name' => 'South Moravia',
            ),
            432 => 
            array (
                'id' => 933,
                'country_id' => 57,
                'name' => 'Straz nad Nisou',
            ),
            433 => 
            array (
                'id' => 934,
                'country_id' => 57,
                'name' => 'Stredochesky',
            ),
            434 => 
            array (
                'id' => 935,
                'country_id' => 57,
                'name' => 'Unicov',
            ),
            435 => 
            array (
                'id' => 936,
                'country_id' => 57,
                'name' => 'Ustecky',
            ),
            436 => 
            array (
                'id' => 937,
                'country_id' => 57,
                'name' => 'Valletta',
            ),
            437 => 
            array (
                'id' => 938,
                'country_id' => 57,
                'name' => 'Velesi',
            ),
            438 => 
            array (
                'id' => 939,
                'country_id' => 57,
                'name' => 'Vysochina',
            ),
            439 => 
            array (
                'id' => 940,
                'country_id' => 57,
                'name' => 'Zlinsky',
            ),
            440 => 
            array (
                'id' => 941,
                'country_id' => 58,
                'name' => 'Arhus',
            ),
            441 => 
            array (
                'id' => 942,
                'country_id' => 58,
                'name' => 'Bornholm',
            ),
            442 => 
            array (
                'id' => 943,
                'country_id' => 58,
                'name' => 'Frederiksborg',
            ),
            443 => 
            array (
                'id' => 944,
                'country_id' => 58,
                'name' => 'Fy',
            ),
            444 => 
            array (
                'id' => 945,
                'country_id' => 58,
                'name' => 'Hovedstade',
            ),
            445 => 
            array (
                'id' => 946,
                'country_id' => 58,
                'name' => 'Kobenhav',
            ),
            446 => 
            array (
                'id' => 947,
                'country_id' => 58,
                'name' => 'Kobenhavns Amt',
            ),
            447 => 
            array (
                'id' => 948,
                'country_id' => 58,
                'name' => 'Kobenhavns Kommune',
            ),
            448 => 
            array (
                'id' => 949,
                'country_id' => 58,
                'name' => 'Nordjylland',
            ),
            449 => 
            array (
                'id' => 950,
                'country_id' => 58,
                'name' => 'Ribe',
            ),
            450 => 
            array (
                'id' => 951,
                'country_id' => 58,
                'name' => 'Ringkobing',
            ),
            451 => 
            array (
                'id' => 952,
                'country_id' => 58,
                'name' => 'Roervig',
            ),
            452 => 
            array (
                'id' => 953,
                'country_id' => 58,
                'name' => 'Roskilde',
            ),
            453 => 
            array (
                'id' => 954,
                'country_id' => 58,
                'name' => 'Roslev',
            ),
            454 => 
            array (
                'id' => 955,
                'country_id' => 58,
                'name' => 'Sjaelland',
            ),
            455 => 
            array (
                'id' => 956,
                'country_id' => 58,
                'name' => 'Soeborg',
            ),
            456 => 
            array (
                'id' => 957,
                'country_id' => 58,
                'name' => 'Sonderjylland',
            ),
            457 => 
            array (
                'id' => 958,
                'country_id' => 58,
                'name' => 'Storstrom',
            ),
            458 => 
            array (
                'id' => 959,
                'country_id' => 58,
                'name' => 'Syddanmark',
            ),
            459 => 
            array (
                'id' => 960,
                'country_id' => 58,
                'name' => 'Toelloese',
            ),
            460 => 
            array (
                'id' => 961,
                'country_id' => 58,
                'name' => 'Vejle',
            ),
            461 => 
            array (
                'id' => 962,
                'country_id' => 58,
                'name' => 'Vestsjalland',
            ),
            462 => 
            array (
                'id' => 963,
                'country_id' => 58,
                'name' => 'Viborg',
            ),
            463 => 
            array (
                'id' => 964,
                'country_id' => 59,
                'name' => '\'Ali Sabih',
            ),
            464 => 
            array (
                'id' => 965,
                'country_id' => 59,
                'name' => 'Dikhil',
            ),
            465 => 
            array (
                'id' => 966,
                'country_id' => 59,
                'name' => 'Jibuti',
            ),
            466 => 
            array (
                'id' => 967,
                'country_id' => 59,
                'name' => 'Tajurah',
            ),
            467 => 
            array (
                'id' => 968,
                'country_id' => 59,
                'name' => 'Ubuk',
            ),
            468 => 
            array (
                'id' => 969,
                'country_id' => 60,
                'name' => 'Saint Andrew',
            ),
            469 => 
            array (
                'id' => 970,
                'country_id' => 60,
                'name' => 'Saint David',
            ),
            470 => 
            array (
                'id' => 971,
                'country_id' => 60,
                'name' => 'Saint George',
            ),
            471 => 
            array (
                'id' => 972,
                'country_id' => 60,
                'name' => 'Saint Joh',
            ),
            472 => 
            array (
                'id' => 973,
                'country_id' => 60,
                'name' => 'Saint Joseph',
            ),
            473 => 
            array (
                'id' => 974,
                'country_id' => 60,
                'name' => 'Saint Luke',
            ),
            474 => 
            array (
                'id' => 975,
                'country_id' => 60,
                'name' => 'Saint Mark',
            ),
            475 => 
            array (
                'id' => 976,
                'country_id' => 60,
                'name' => 'Saint Patrick',
            ),
            476 => 
            array (
                'id' => 977,
                'country_id' => 60,
                'name' => 'Saint Paul',
            ),
            477 => 
            array (
                'id' => 978,
                'country_id' => 60,
                'name' => 'Saint Peter',
            ),
            478 => 
            array (
                'id' => 979,
                'country_id' => 61,
                'name' => 'Azua',
            ),
            479 => 
            array (
                'id' => 980,
                'country_id' => 61,
                'name' => 'Bahoruco',
            ),
            480 => 
            array (
                'id' => 981,
                'country_id' => 61,
                'name' => 'Barahona',
            ),
            481 => 
            array (
                'id' => 982,
                'country_id' => 61,
                'name' => 'Dajabo',
            ),
            482 => 
            array (
                'id' => 983,
                'country_id' => 61,
                'name' => 'Distrito Nacional',
            ),
            483 => 
            array (
                'id' => 984,
                'country_id' => 61,
                'name' => 'Duarte',
            ),
            484 => 
            array (
                'id' => 985,
                'country_id' => 61,
                'name' => 'El Seybo',
            ),
            485 => 
            array (
                'id' => 986,
                'country_id' => 61,
                'name' => 'Elias Pina',
            ),
            486 => 
            array (
                'id' => 987,
                'country_id' => 61,
                'name' => 'Espaillat',
            ),
            487 => 
            array (
                'id' => 988,
                'country_id' => 61,
                'name' => 'Hato Mayor',
            ),
            488 => 
            array (
                'id' => 989,
                'country_id' => 61,
                'name' => 'Independencia',
            ),
            489 => 
            array (
                'id' => 990,
                'country_id' => 61,
                'name' => 'La Altagracia',
            ),
            490 => 
            array (
                'id' => 991,
                'country_id' => 61,
                'name' => 'La Romana',
            ),
            491 => 
            array (
                'id' => 992,
                'country_id' => 61,
                'name' => 'La Vega',
            ),
            492 => 
            array (
                'id' => 993,
                'country_id' => 61,
                'name' => 'Maria Trinidad Sanchez',
            ),
            493 => 
            array (
                'id' => 994,
                'country_id' => 61,
                'name' => 'Monsenor Nouel',
            ),
            494 => 
            array (
                'id' => 995,
                'country_id' => 61,
                'name' => 'Monte Cristi',
            ),
            495 => 
            array (
                'id' => 996,
                'country_id' => 61,
                'name' => 'Monte Plata',
            ),
            496 => 
            array (
                'id' => 997,
                'country_id' => 61,
                'name' => 'Pedernales',
            ),
            497 => 
            array (
                'id' => 998,
                'country_id' => 61,
                'name' => 'Peravia',
            ),
            498 => 
            array (
                'id' => 999,
                'country_id' => 61,
                'name' => 'Puerto Plata',
            ),
            499 => 
            array (
                'id' => 1000,
                'country_id' => 61,
                'name' => 'Salcedo',
            ),
        ));
        \DB::table('tbl_states')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'country_id' => 61,
                'name' => 'Samana',
            ),
            1 => 
            array (
                'id' => 1002,
                'country_id' => 61,
                'name' => 'San Cristobal',
            ),
            2 => 
            array (
                'id' => 1003,
                'country_id' => 61,
                'name' => 'San Jua',
            ),
            3 => 
            array (
                'id' => 1004,
                'country_id' => 61,
                'name' => 'San Pedro de Macoris',
            ),
            4 => 
            array (
                'id' => 1005,
                'country_id' => 61,
                'name' => 'Sanchez Ramirez',
            ),
            5 => 
            array (
                'id' => 1006,
                'country_id' => 61,
                'name' => 'Santiago',
            ),
            6 => 
            array (
                'id' => 1007,
                'country_id' => 61,
                'name' => 'Santiago Rodriguez',
            ),
            7 => 
            array (
                'id' => 1008,
                'country_id' => 61,
                'name' => 'Valverde',
            ),
            8 => 
            array (
                'id' => 1009,
                'country_id' => 62,
                'name' => 'Aileu',
            ),
            9 => 
            array (
                'id' => 1010,
                'country_id' => 62,
                'name' => 'Ainaro',
            ),
            10 => 
            array (
                'id' => 1011,
                'country_id' => 62,
                'name' => 'Ambeno',
            ),
            11 => 
            array (
                'id' => 1012,
                'country_id' => 62,
                'name' => 'Baucau',
            ),
            12 => 
            array (
                'id' => 1013,
                'country_id' => 62,
                'name' => 'Bobonaro',
            ),
            13 => 
            array (
                'id' => 1014,
                'country_id' => 62,
                'name' => 'Cova Lima',
            ),
            14 => 
            array (
                'id' => 1015,
                'country_id' => 62,
                'name' => 'Dili',
            ),
            15 => 
            array (
                'id' => 1016,
                'country_id' => 62,
                'name' => 'Ermera',
            ),
            16 => 
            array (
                'id' => 1017,
                'country_id' => 62,
                'name' => 'Lautem',
            ),
            17 => 
            array (
                'id' => 1018,
                'country_id' => 62,
                'name' => 'Liquica',
            ),
            18 => 
            array (
                'id' => 1019,
                'country_id' => 62,
                'name' => 'Manatuto',
            ),
            19 => 
            array (
                'id' => 1020,
                'country_id' => 62,
                'name' => 'Manufahi',
            ),
            20 => 
            array (
                'id' => 1021,
                'country_id' => 62,
                'name' => 'Viqueque',
            ),
            21 => 
            array (
                'id' => 1022,
                'country_id' => 63,
                'name' => 'Azuay',
            ),
            22 => 
            array (
                'id' => 1023,
                'country_id' => 63,
                'name' => 'Bolivar',
            ),
            23 => 
            array (
                'id' => 1024,
                'country_id' => 63,
                'name' => 'Canar',
            ),
            24 => 
            array (
                'id' => 1025,
                'country_id' => 63,
                'name' => 'Carchi',
            ),
            25 => 
            array (
                'id' => 1026,
                'country_id' => 63,
                'name' => 'Chimborazo',
            ),
            26 => 
            array (
                'id' => 1027,
                'country_id' => 63,
                'name' => 'Cotopaxi',
            ),
            27 => 
            array (
                'id' => 1028,
                'country_id' => 63,
                'name' => 'El Oro',
            ),
            28 => 
            array (
                'id' => 1029,
                'country_id' => 63,
                'name' => 'Esmeraldas',
            ),
            29 => 
            array (
                'id' => 1030,
                'country_id' => 63,
                'name' => 'Galapagos',
            ),
            30 => 
            array (
                'id' => 1031,
                'country_id' => 63,
                'name' => 'Guayas',
            ),
            31 => 
            array (
                'id' => 1032,
                'country_id' => 63,
                'name' => 'Imbabura',
            ),
            32 => 
            array (
                'id' => 1033,
                'country_id' => 63,
                'name' => 'Loja',
            ),
            33 => 
            array (
                'id' => 1034,
                'country_id' => 63,
                'name' => 'Los Rios',
            ),
            34 => 
            array (
                'id' => 1035,
                'country_id' => 63,
                'name' => 'Manabi',
            ),
            35 => 
            array (
                'id' => 1036,
                'country_id' => 63,
                'name' => 'Morona Santiago',
            ),
            36 => 
            array (
                'id' => 1037,
                'country_id' => 63,
                'name' => 'Napo',
            ),
            37 => 
            array (
                'id' => 1038,
                'country_id' => 63,
                'name' => 'Orellana',
            ),
            38 => 
            array (
                'id' => 1039,
                'country_id' => 63,
                'name' => 'Pastaza',
            ),
            39 => 
            array (
                'id' => 1040,
                'country_id' => 63,
                'name' => 'Pichincha',
            ),
            40 => 
            array (
                'id' => 1041,
                'country_id' => 63,
                'name' => 'Sucumbios',
            ),
            41 => 
            array (
                'id' => 1042,
                'country_id' => 63,
                'name' => 'Tungurahua',
            ),
            42 => 
            array (
                'id' => 1043,
                'country_id' => 63,
                'name' => 'Zamora Chinchipe',
            ),
            43 => 
            array (
                'id' => 1044,
                'country_id' => 64,
                'name' => 'Aswa',
            ),
            44 => 
            array (
                'id' => 1045,
                'country_id' => 64,
                'name' => 'Asyut',
            ),
            45 => 
            array (
                'id' => 1046,
                'country_id' => 64,
                'name' => 'Bani Suwayf',
            ),
            46 => 
            array (
                'id' => 1047,
                'country_id' => 64,
                'name' => 'Bur Sa\'id',
            ),
            47 => 
            array (
                'id' => 1048,
                'country_id' => 64,
                'name' => 'Cairo',
            ),
            48 => 
            array (
                'id' => 1049,
                'country_id' => 64,
                'name' => 'Dumyat',
            ),
            49 => 
            array (
                'id' => 1050,
                'country_id' => 64,
                'name' => 'Kafr-ash-Shaykh',
            ),
            50 => 
            array (
                'id' => 1051,
                'country_id' => 64,
                'name' => 'Matruh',
            ),
            51 => 
            array (
                'id' => 1052,
                'country_id' => 64,
                'name' => 'Muhafazat ad Daqahliyah',
            ),
            52 => 
            array (
                'id' => 1053,
                'country_id' => 64,
                'name' => 'Muhafazat al Fayyum',
            ),
            53 => 
            array (
                'id' => 1054,
                'country_id' => 64,
                'name' => 'Muhafazat al Gharbiyah',
            ),
            54 => 
            array (
                'id' => 1055,
                'country_id' => 64,
                'name' => 'Muhafazat al Iskandariyah',
            ),
            55 => 
            array (
                'id' => 1056,
                'country_id' => 64,
                'name' => 'Muhafazat al Qahirah',
            ),
            56 => 
            array (
                'id' => 1057,
                'country_id' => 64,
                'name' => 'Qina',
            ),
            57 => 
            array (
                'id' => 1058,
                'country_id' => 64,
                'name' => 'Sawhaj',
            ),
            58 => 
            array (
                'id' => 1059,
                'country_id' => 64,
                'name' => 'Sina al-Janubiyah',
            ),
            59 => 
            array (
                'id' => 1060,
                'country_id' => 64,
                'name' => 'Sina ash-Shamaliyah',
            ),
            60 => 
            array (
                'id' => 1061,
                'country_id' => 64,
                'name' => 'ad-Daqahliyah',
            ),
            61 => 
            array (
                'id' => 1062,
                'country_id' => 64,
                'name' => 'al-Bahr-al-Ahmar',
            ),
            62 => 
            array (
                'id' => 1063,
                'country_id' => 64,
                'name' => 'al-Buhayrah',
            ),
            63 => 
            array (
                'id' => 1064,
                'country_id' => 64,
                'name' => 'al-Fayyum',
            ),
            64 => 
            array (
                'id' => 1065,
                'country_id' => 64,
                'name' => 'al-Gharbiyah',
            ),
            65 => 
            array (
                'id' => 1066,
                'country_id' => 64,
                'name' => 'al-Iskandariyah',
            ),
            66 => 
            array (
                'id' => 1067,
                'country_id' => 64,
                'name' => 'al-Ismailiyah',
            ),
            67 => 
            array (
                'id' => 1068,
                'country_id' => 64,
                'name' => 'al-Jizah',
            ),
            68 => 
            array (
                'id' => 1069,
                'country_id' => 64,
                'name' => 'al-Minufiyah',
            ),
            69 => 
            array (
                'id' => 1070,
                'country_id' => 64,
                'name' => 'al-Minya',
            ),
            70 => 
            array (
                'id' => 1071,
                'country_id' => 64,
                'name' => 'al-Qahira',
            ),
            71 => 
            array (
                'id' => 1072,
                'country_id' => 64,
                'name' => 'al-Qalyubiyah',
            ),
            72 => 
            array (
                'id' => 1073,
                'country_id' => 64,
                'name' => 'al-Uqsur',
            ),
            73 => 
            array (
                'id' => 1074,
                'country_id' => 64,
                'name' => 'al-Wadi al-Jadid',
            ),
            74 => 
            array (
                'id' => 1075,
                'country_id' => 64,
                'name' => 'as-Suways',
            ),
            75 => 
            array (
                'id' => 1076,
                'country_id' => 64,
                'name' => 'ash-Sharqiyah',
            ),
            76 => 
            array (
                'id' => 1077,
                'country_id' => 65,
                'name' => 'Ahuachapa',
            ),
            77 => 
            array (
                'id' => 1078,
                'country_id' => 65,
                'name' => 'Cabanas',
            ),
            78 => 
            array (
                'id' => 1079,
                'country_id' => 65,
                'name' => 'Chalatenango',
            ),
            79 => 
            array (
                'id' => 1080,
                'country_id' => 65,
                'name' => 'Cuscatla',
            ),
            80 => 
            array (
                'id' => 1081,
                'country_id' => 65,
                'name' => 'La Libertad',
            ),
            81 => 
            array (
                'id' => 1082,
                'country_id' => 65,
                'name' => 'La Paz',
            ),
            82 => 
            array (
                'id' => 1083,
                'country_id' => 65,
                'name' => 'La Unio',
            ),
            83 => 
            array (
                'id' => 1084,
                'country_id' => 65,
                'name' => 'Moraza',
            ),
            84 => 
            array (
                'id' => 1085,
                'country_id' => 65,
                'name' => 'San Miguel',
            ),
            85 => 
            array (
                'id' => 1086,
                'country_id' => 65,
                'name' => 'San Salvador',
            ),
            86 => 
            array (
                'id' => 1087,
                'country_id' => 65,
                'name' => 'San Vicente',
            ),
            87 => 
            array (
                'id' => 1088,
                'country_id' => 65,
                'name' => 'Santa Ana',
            ),
            88 => 
            array (
                'id' => 1089,
                'country_id' => 65,
                'name' => 'Sonsonate',
            ),
            89 => 
            array (
                'id' => 1090,
                'country_id' => 65,
                'name' => 'Usuluta',
            ),
            90 => 
            array (
                'id' => 1091,
                'country_id' => 66,
                'name' => 'Annobo',
            ),
            91 => 
            array (
                'id' => 1092,
                'country_id' => 66,
                'name' => 'Bioko Norte',
            ),
            92 => 
            array (
                'id' => 1093,
                'country_id' => 66,
                'name' => 'Bioko Sur',
            ),
            93 => 
            array (
                'id' => 1094,
                'country_id' => 66,
                'name' => 'Centro Sur',
            ),
            94 => 
            array (
                'id' => 1095,
                'country_id' => 66,
                'name' => 'Kie-Ntem',
            ),
            95 => 
            array (
                'id' => 1096,
                'country_id' => 66,
                'name' => 'Litoral',
            ),
            96 => 
            array (
                'id' => 1097,
                'country_id' => 66,
                'name' => 'Wele-Nzas',
            ),
            97 => 
            array (
                'id' => 1098,
                'country_id' => 67,
                'name' => 'Anseba',
            ),
            98 => 
            array (
                'id' => 1099,
                'country_id' => 67,
                'name' => 'Debub',
            ),
            99 => 
            array (
                'id' => 1100,
                'country_id' => 67,
                'name' => 'Debub-Keih-Bahri',
            ),
            100 => 
            array (
                'id' => 1101,
                'country_id' => 67,
                'name' => 'Gash-Barka',
            ),
            101 => 
            array (
                'id' => 1102,
                'country_id' => 67,
                'name' => 'Maekel',
            ),
            102 => 
            array (
                'id' => 1103,
                'country_id' => 67,
                'name' => 'Semien-Keih-Bahri',
            ),
            103 => 
            array (
                'id' => 1104,
                'country_id' => 68,
                'name' => 'Harju',
            ),
            104 => 
            array (
                'id' => 1105,
                'country_id' => 68,
                'name' => 'Hiiu',
            ),
            105 => 
            array (
                'id' => 1106,
                'country_id' => 68,
                'name' => 'Ida-Viru',
            ),
            106 => 
            array (
                'id' => 1107,
                'country_id' => 68,
                'name' => 'Jarva',
            ),
            107 => 
            array (
                'id' => 1108,
                'country_id' => 68,
                'name' => 'Jogeva',
            ),
            108 => 
            array (
                'id' => 1109,
                'country_id' => 68,
                'name' => 'Laane',
            ),
            109 => 
            array (
                'id' => 1110,
                'country_id' => 68,
                'name' => 'Laane-Viru',
            ),
            110 => 
            array (
                'id' => 1111,
                'country_id' => 68,
                'name' => 'Parnu',
            ),
            111 => 
            array (
                'id' => 1112,
                'country_id' => 68,
                'name' => 'Polva',
            ),
            112 => 
            array (
                'id' => 1113,
                'country_id' => 68,
                'name' => 'Rapla',
            ),
            113 => 
            array (
                'id' => 1114,
                'country_id' => 68,
                'name' => 'Saare',
            ),
            114 => 
            array (
                'id' => 1115,
                'country_id' => 68,
                'name' => 'Tartu',
            ),
            115 => 
            array (
                'id' => 1116,
                'country_id' => 68,
                'name' => 'Valga',
            ),
            116 => 
            array (
                'id' => 1117,
                'country_id' => 68,
                'name' => 'Viljandi',
            ),
            117 => 
            array (
                'id' => 1118,
                'country_id' => 68,
                'name' => 'Voru',
            ),
            118 => 
            array (
                'id' => 1119,
                'country_id' => 69,
                'name' => 'Addis Abeba',
            ),
            119 => 
            array (
                'id' => 1120,
                'country_id' => 69,
                'name' => 'Afar',
            ),
            120 => 
            array (
                'id' => 1121,
                'country_id' => 69,
                'name' => 'Amhara',
            ),
            121 => 
            array (
                'id' => 1122,
                'country_id' => 69,
                'name' => 'Benishangul',
            ),
            122 => 
            array (
                'id' => 1123,
                'country_id' => 69,
                'name' => 'Diredawa',
            ),
            123 => 
            array (
                'id' => 1124,
                'country_id' => 69,
                'name' => 'Gambella',
            ),
            124 => 
            array (
                'id' => 1125,
                'country_id' => 69,
                'name' => 'Harar',
            ),
            125 => 
            array (
                'id' => 1126,
                'country_id' => 69,
                'name' => 'Jigjiga',
            ),
            126 => 
            array (
                'id' => 1127,
                'country_id' => 69,
                'name' => 'Mekele',
            ),
            127 => 
            array (
                'id' => 1128,
                'country_id' => 69,
                'name' => 'Oromia',
            ),
            128 => 
            array (
                'id' => 1129,
                'country_id' => 69,
                'name' => 'Somali',
            ),
            129 => 
            array (
                'id' => 1130,
                'country_id' => 69,
                'name' => 'Souther',
            ),
            130 => 
            array (
                'id' => 1131,
                'country_id' => 69,
                'name' => 'Tigray',
            ),
            131 => 
            array (
                'id' => 1132,
                'country_id' => 70,
                'name' => 'Christmas Island',
            ),
            132 => 
            array (
                'id' => 1133,
                'country_id' => 70,
                'name' => 'Cocos Islands',
            ),
            133 => 
            array (
                'id' => 1134,
                'country_id' => 70,
                'name' => 'Coral Sea Islands',
            ),
            134 => 
            array (
                'id' => 1135,
                'country_id' => 71,
                'name' => 'Falkland Islands',
            ),
            135 => 
            array (
                'id' => 1136,
                'country_id' => 71,
                'name' => 'South Georgia',
            ),
            136 => 
            array (
                'id' => 1137,
                'country_id' => 72,
                'name' => 'Klaksvik',
            ),
            137 => 
            array (
                'id' => 1138,
                'country_id' => 72,
                'name' => 'Nor ara Eysturoy',
            ),
            138 => 
            array (
                'id' => 1139,
                'country_id' => 72,
                'name' => 'Nor oy',
            ),
            139 => 
            array (
                'id' => 1140,
                'country_id' => 72,
                'name' => 'Sandoy',
            ),
            140 => 
            array (
                'id' => 1141,
                'country_id' => 72,
                'name' => 'Streymoy',
            ),
            141 => 
            array (
                'id' => 1142,
                'country_id' => 72,
                'name' => 'Su uroy',
            ),
            142 => 
            array (
                'id' => 1143,
                'country_id' => 72,
                'name' => 'Sy ra Eysturoy',
            ),
            143 => 
            array (
                'id' => 1144,
                'country_id' => 72,
                'name' => 'Torshav',
            ),
            144 => 
            array (
                'id' => 1145,
                'country_id' => 72,
                'name' => 'Vaga',
            ),
            145 => 
            array (
                'id' => 1146,
                'country_id' => 73,
                'name' => 'Central',
            ),
            146 => 
            array (
                'id' => 1147,
                'country_id' => 73,
                'name' => 'Easter',
            ),
            147 => 
            array (
                'id' => 1148,
                'country_id' => 73,
                'name' => 'Norther',
            ),
            148 => 
            array (
                'id' => 1149,
                'country_id' => 73,
                'name' => 'South Pacific',
            ),
            149 => 
            array (
                'id' => 1150,
                'country_id' => 73,
                'name' => 'Wester',
            ),
            150 => 
            array (
                'id' => 1151,
                'country_id' => 74,
                'name' => 'Ahvenanmaa',
            ),
            151 => 
            array (
                'id' => 1152,
                'country_id' => 74,
                'name' => 'Etela-Karjala',
            ),
            152 => 
            array (
                'id' => 1153,
                'country_id' => 74,
                'name' => 'Etela-Pohjanmaa',
            ),
            153 => 
            array (
                'id' => 1154,
                'country_id' => 74,
                'name' => 'Etela-Savo',
            ),
            154 => 
            array (
                'id' => 1155,
                'country_id' => 74,
                'name' => 'Etela-Suomen Laani',
            ),
            155 => 
            array (
                'id' => 1156,
                'country_id' => 74,
                'name' => 'Ita-Suomen Laani',
            ),
            156 => 
            array (
                'id' => 1157,
                'country_id' => 74,
                'name' => 'Ita-Uusimaa',
            ),
            157 => 
            array (
                'id' => 1158,
                'country_id' => 74,
                'name' => 'Kainuu',
            ),
            158 => 
            array (
                'id' => 1159,
                'country_id' => 74,
                'name' => 'Kanta-Hame',
            ),
            159 => 
            array (
                'id' => 1160,
                'country_id' => 74,
                'name' => 'Keski-Pohjanmaa',
            ),
            160 => 
            array (
                'id' => 1161,
                'country_id' => 74,
                'name' => 'Keski-Suomi',
            ),
            161 => 
            array (
                'id' => 1162,
                'country_id' => 74,
                'name' => 'Kymenlaakso',
            ),
            162 => 
            array (
                'id' => 1163,
                'country_id' => 74,
                'name' => 'Lansi-Suomen Laani',
            ),
            163 => 
            array (
                'id' => 1164,
                'country_id' => 74,
                'name' => 'Lappi',
            ),
            164 => 
            array (
                'id' => 1165,
                'country_id' => 74,
                'name' => 'Northern Savonia',
            ),
            165 => 
            array (
                'id' => 1166,
                'country_id' => 74,
                'name' => 'Ostrobothnia',
            ),
            166 => 
            array (
                'id' => 1167,
                'country_id' => 74,
                'name' => 'Oulun Laani',
            ),
            167 => 
            array (
                'id' => 1168,
                'country_id' => 74,
                'name' => 'Paijat-Hame',
            ),
            168 => 
            array (
                'id' => 1169,
                'country_id' => 74,
                'name' => 'Pirkanmaa',
            ),
            169 => 
            array (
                'id' => 1170,
                'country_id' => 74,
                'name' => 'Pohjanmaa',
            ),
            170 => 
            array (
                'id' => 1171,
                'country_id' => 74,
                'name' => 'Pohjois-Karjala',
            ),
            171 => 
            array (
                'id' => 1172,
                'country_id' => 74,
                'name' => 'Pohjois-Pohjanmaa',
            ),
            172 => 
            array (
                'id' => 1173,
                'country_id' => 74,
                'name' => 'Pohjois-Savo',
            ),
            173 => 
            array (
                'id' => 1174,
                'country_id' => 74,
                'name' => 'Saarijarvi',
            ),
            174 => 
            array (
                'id' => 1175,
                'country_id' => 74,
                'name' => 'Satakunta',
            ),
            175 => 
            array (
                'id' => 1176,
                'country_id' => 74,
                'name' => 'Southern Savonia',
            ),
            176 => 
            array (
                'id' => 1177,
                'country_id' => 74,
                'name' => 'Tavastia Proper',
            ),
            177 => 
            array (
                'id' => 1178,
                'country_id' => 74,
                'name' => 'Uleaborgs La',
            ),
            178 => 
            array (
                'id' => 1179,
                'country_id' => 74,
                'name' => 'Uusimaa',
            ),
            179 => 
            array (
                'id' => 1180,
                'country_id' => 74,
                'name' => 'Varsinais-Suomi',
            ),
            180 => 
            array (
                'id' => 1181,
                'country_id' => 75,
                'name' => 'Ai',
            ),
            181 => 
            array (
                'id' => 1182,
                'country_id' => 75,
                'name' => 'Aisne',
            ),
            182 => 
            array (
                'id' => 1183,
                'country_id' => 75,
                'name' => 'Albi Le Sequestre',
            ),
            183 => 
            array (
                'id' => 1184,
                'country_id' => 75,
                'name' => 'Allier',
            ),
            184 => 
            array (
                'id' => 1185,
                'country_id' => 75,
                'name' => 'Alpes-Cote dAzur',
            ),
            185 => 
            array (
                'id' => 1186,
                'country_id' => 75,
                'name' => 'Alpes-Maritimes',
            ),
            186 => 
            array (
                'id' => 1187,
                'country_id' => 75,
                'name' => 'Alpes-de-Haute-Provence',
            ),
            187 => 
            array (
                'id' => 1188,
                'country_id' => 75,
                'name' => 'Alsace',
            ),
            188 => 
            array (
                'id' => 1189,
                'country_id' => 75,
                'name' => 'Aquitaine',
            ),
            189 => 
            array (
                'id' => 1190,
                'country_id' => 75,
                'name' => 'Ardeche',
            ),
            190 => 
            array (
                'id' => 1191,
                'country_id' => 75,
                'name' => 'Ardennes',
            ),
            191 => 
            array (
                'id' => 1192,
                'country_id' => 75,
                'name' => 'Ariege',
            ),
            192 => 
            array (
                'id' => 1193,
                'country_id' => 75,
                'name' => 'Aube',
            ),
            193 => 
            array (
                'id' => 1194,
                'country_id' => 75,
                'name' => 'Aude',
            ),
            194 => 
            array (
                'id' => 1195,
                'country_id' => 75,
                'name' => 'Auvergne',
            ),
            195 => 
            array (
                'id' => 1196,
                'country_id' => 75,
                'name' => 'Aveyro',
            ),
            196 => 
            array (
                'id' => 1197,
                'country_id' => 75,
                'name' => 'Bas-Rhi',
            ),
            197 => 
            array (
                'id' => 1198,
                'country_id' => 75,
                'name' => 'Basse-Normandie',
            ),
            198 => 
            array (
                'id' => 1199,
                'country_id' => 75,
                'name' => 'Bouches-du-Rhone',
            ),
            199 => 
            array (
                'id' => 1200,
                'country_id' => 75,
                'name' => 'Bourgogne',
            ),
            200 => 
            array (
                'id' => 1201,
                'country_id' => 75,
                'name' => 'Bretagne',
            ),
            201 => 
            array (
                'id' => 1202,
                'country_id' => 75,
                'name' => 'Brittany',
            ),
            202 => 
            array (
                'id' => 1203,
                'country_id' => 75,
                'name' => 'Burgundy',
            ),
            203 => 
            array (
                'id' => 1204,
                'country_id' => 75,
                'name' => 'Calvados',
            ),
            204 => 
            array (
                'id' => 1205,
                'country_id' => 75,
                'name' => 'Cantal',
            ),
            205 => 
            array (
                'id' => 1206,
                'country_id' => 75,
                'name' => 'Cedex',
            ),
            206 => 
            array (
                'id' => 1207,
                'country_id' => 75,
                'name' => 'Centre',
            ),
            207 => 
            array (
                'id' => 1208,
                'country_id' => 75,
                'name' => 'Charente',
            ),
            208 => 
            array (
                'id' => 1209,
                'country_id' => 75,
                'name' => 'Charente-Maritime',
            ),
            209 => 
            array (
                'id' => 1210,
                'country_id' => 75,
                'name' => 'Cher',
            ),
            210 => 
            array (
                'id' => 1211,
                'country_id' => 75,
                'name' => 'Correze',
            ),
            211 => 
            array (
                'id' => 1212,
                'country_id' => 75,
                'name' => 'Corse-du-Sud',
            ),
            212 => 
            array (
                'id' => 1213,
                'country_id' => 75,
                'name' => 'Cote-d\'Or',
            ),
            213 => 
            array (
                'id' => 1214,
                'country_id' => 75,
                'name' => 'Cotes-d\'Armor',
            ),
            214 => 
            array (
                'id' => 1215,
                'country_id' => 75,
                'name' => 'Creuse',
            ),
            215 => 
            array (
                'id' => 1216,
                'country_id' => 75,
                'name' => 'Crolles',
            ),
            216 => 
            array (
                'id' => 1217,
                'country_id' => 75,
                'name' => 'Deux-Sevres',
            ),
            217 => 
            array (
                'id' => 1218,
                'country_id' => 75,
                'name' => 'Dordogne',
            ),
            218 => 
            array (
                'id' => 1219,
                'country_id' => 75,
                'name' => 'Doubs',
            ),
            219 => 
            array (
                'id' => 1220,
                'country_id' => 75,
                'name' => 'Drome',
            ),
            220 => 
            array (
                'id' => 1221,
                'country_id' => 75,
                'name' => 'Essonne',
            ),
            221 => 
            array (
                'id' => 1222,
                'country_id' => 75,
                'name' => 'Eure',
            ),
            222 => 
            array (
                'id' => 1223,
                'country_id' => 75,
                'name' => 'Eure-et-Loir',
            ),
            223 => 
            array (
                'id' => 1224,
                'country_id' => 75,
                'name' => 'Feucherolles',
            ),
            224 => 
            array (
                'id' => 1225,
                'country_id' => 75,
                'name' => 'Finistere',
            ),
            225 => 
            array (
                'id' => 1226,
                'country_id' => 75,
                'name' => 'Franche-Comte',
            ),
            226 => 
            array (
                'id' => 1227,
                'country_id' => 75,
                'name' => 'Gard',
            ),
            227 => 
            array (
                'id' => 1228,
                'country_id' => 75,
                'name' => 'Gers',
            ),
            228 => 
            array (
                'id' => 1229,
                'country_id' => 75,
                'name' => 'Gironde',
            ),
            229 => 
            array (
                'id' => 1230,
                'country_id' => 75,
                'name' => 'Haut-Rhi',
            ),
            230 => 
            array (
                'id' => 1231,
                'country_id' => 75,
                'name' => 'Haute-Corse',
            ),
            231 => 
            array (
                'id' => 1232,
                'country_id' => 75,
                'name' => 'Haute-Garonne',
            ),
            232 => 
            array (
                'id' => 1233,
                'country_id' => 75,
                'name' => 'Haute-Loire',
            ),
            233 => 
            array (
                'id' => 1234,
                'country_id' => 75,
                'name' => 'Haute-Marne',
            ),
            234 => 
            array (
                'id' => 1235,
                'country_id' => 75,
                'name' => 'Haute-Saone',
            ),
            235 => 
            array (
                'id' => 1236,
                'country_id' => 75,
                'name' => 'Haute-Savoie',
            ),
            236 => 
            array (
                'id' => 1237,
                'country_id' => 75,
                'name' => 'Haute-Vienne',
            ),
            237 => 
            array (
                'id' => 1238,
                'country_id' => 75,
                'name' => 'Hautes-Alpes',
            ),
            238 => 
            array (
                'id' => 1239,
                'country_id' => 75,
                'name' => 'Hautes-Pyrenees',
            ),
            239 => 
            array (
                'id' => 1240,
                'country_id' => 75,
                'name' => 'Hauts-de-Seine',
            ),
            240 => 
            array (
                'id' => 1241,
                'country_id' => 75,
                'name' => 'Herault',
            ),
            241 => 
            array (
                'id' => 1242,
                'country_id' => 75,
                'name' => 'Ile-de-France',
            ),
            242 => 
            array (
                'id' => 1243,
                'country_id' => 75,
                'name' => 'Ille-et-Vilaine',
            ),
            243 => 
            array (
                'id' => 1244,
                'country_id' => 75,
                'name' => 'Indre',
            ),
            244 => 
            array (
                'id' => 1245,
                'country_id' => 75,
                'name' => 'Indre-et-Loire',
            ),
            245 => 
            array (
                'id' => 1246,
                'country_id' => 75,
                'name' => 'Isere',
            ),
            246 => 
            array (
                'id' => 1247,
                'country_id' => 75,
                'name' => 'Jura',
            ),
            247 => 
            array (
                'id' => 1248,
                'country_id' => 75,
                'name' => 'Klagenfurt',
            ),
            248 => 
            array (
                'id' => 1249,
                'country_id' => 75,
                'name' => 'Landes',
            ),
            249 => 
            array (
                'id' => 1250,
                'country_id' => 75,
                'name' => 'Languedoc-Roussillo',
            ),
            250 => 
            array (
                'id' => 1251,
                'country_id' => 75,
                'name' => 'Larcay',
            ),
            251 => 
            array (
                'id' => 1252,
                'country_id' => 75,
                'name' => 'Le Castellet',
            ),
            252 => 
            array (
                'id' => 1253,
                'country_id' => 75,
                'name' => 'Le Creusot',
            ),
            253 => 
            array (
                'id' => 1254,
                'country_id' => 75,
                'name' => 'Limousi',
            ),
            254 => 
            array (
                'id' => 1255,
                'country_id' => 75,
                'name' => 'Loir-et-Cher',
            ),
            255 => 
            array (
                'id' => 1256,
                'country_id' => 75,
                'name' => 'Loire',
            ),
            256 => 
            array (
                'id' => 1257,
                'country_id' => 75,
                'name' => 'Loire-Atlantique',
            ),
            257 => 
            array (
                'id' => 1258,
                'country_id' => 75,
                'name' => 'Loiret',
            ),
            258 => 
            array (
                'id' => 1259,
                'country_id' => 75,
                'name' => 'Lorraine',
            ),
            259 => 
            array (
                'id' => 1260,
                'country_id' => 75,
                'name' => 'Lot',
            ),
            260 => 
            array (
                'id' => 1261,
                'country_id' => 75,
                'name' => 'Lot-et-Garonne',
            ),
            261 => 
            array (
                'id' => 1262,
                'country_id' => 75,
                'name' => 'Lower Normandy',
            ),
            262 => 
            array (
                'id' => 1263,
                'country_id' => 75,
                'name' => 'Lozere',
            ),
            263 => 
            array (
                'id' => 1264,
                'country_id' => 75,
                'name' => 'Maine-et-Loire',
            ),
            264 => 
            array (
                'id' => 1265,
                'country_id' => 75,
                'name' => 'Manche',
            ),
            265 => 
            array (
                'id' => 1266,
                'country_id' => 75,
                'name' => 'Marne',
            ),
            266 => 
            array (
                'id' => 1267,
                'country_id' => 75,
                'name' => 'Mayenne',
            ),
            267 => 
            array (
                'id' => 1268,
                'country_id' => 75,
                'name' => 'Meurthe-et-Moselle',
            ),
            268 => 
            array (
                'id' => 1269,
                'country_id' => 75,
                'name' => 'Meuse',
            ),
            269 => 
            array (
                'id' => 1270,
                'country_id' => 75,
                'name' => 'Midi-Pyrenees',
            ),
            270 => 
            array (
                'id' => 1271,
                'country_id' => 75,
                'name' => 'Morbiha',
            ),
            271 => 
            array (
                'id' => 1272,
                'country_id' => 75,
                'name' => 'Moselle',
            ),
            272 => 
            array (
                'id' => 1273,
                'country_id' => 75,
                'name' => 'Nievre',
            ),
            273 => 
            array (
                'id' => 1274,
                'country_id' => 75,
                'name' => 'Nord',
            ),
            274 => 
            array (
                'id' => 1275,
                'country_id' => 75,
                'name' => 'Nord-Pas-de-Calais',
            ),
            275 => 
            array (
                'id' => 1276,
                'country_id' => 75,
                'name' => 'Oise',
            ),
            276 => 
            array (
                'id' => 1277,
                'country_id' => 75,
                'name' => 'Orne',
            ),
            277 => 
            array (
                'id' => 1278,
                'country_id' => 75,
                'name' => 'Paris',
            ),
            278 => 
            array (
                'id' => 1279,
                'country_id' => 75,
                'name' => 'Pas-de-Calais',
            ),
            279 => 
            array (
                'id' => 1280,
                'country_id' => 75,
                'name' => 'Pays de la Loire',
            ),
            280 => 
            array (
                'id' => 1281,
                'country_id' => 75,
                'name' => 'Pays-de-la-Loire',
            ),
            281 => 
            array (
                'id' => 1282,
                'country_id' => 75,
                'name' => 'Picardy',
            ),
            282 => 
            array (
                'id' => 1283,
                'country_id' => 75,
                'name' => 'Puy-de-Dome',
            ),
            283 => 
            array (
                'id' => 1284,
                'country_id' => 75,
                'name' => 'Pyrenees-Atlantiques',
            ),
            284 => 
            array (
                'id' => 1285,
                'country_id' => 75,
                'name' => 'Pyrenees-Orientales',
            ),
            285 => 
            array (
                'id' => 1286,
                'country_id' => 75,
                'name' => 'Quelmes',
            ),
            286 => 
            array (
                'id' => 1287,
                'country_id' => 75,
                'name' => 'Rhone',
            ),
            287 => 
            array (
                'id' => 1288,
                'country_id' => 75,
                'name' => 'Rhone-Alpes',
            ),
            288 => 
            array (
                'id' => 1289,
                'country_id' => 75,
                'name' => 'Saint Oue',
            ),
            289 => 
            array (
                'id' => 1290,
                'country_id' => 75,
                'name' => 'Saint Viatre',
            ),
            290 => 
            array (
                'id' => 1291,
                'country_id' => 75,
                'name' => 'Saone-et-Loire',
            ),
            291 => 
            array (
                'id' => 1292,
                'country_id' => 75,
                'name' => 'Sarthe',
            ),
            292 => 
            array (
                'id' => 1293,
                'country_id' => 75,
                'name' => 'Savoie',
            ),
            293 => 
            array (
                'id' => 1294,
                'country_id' => 75,
                'name' => 'Seine-Maritime',
            ),
            294 => 
            array (
                'id' => 1295,
                'country_id' => 75,
                'name' => 'Seine-Saint-Denis',
            ),
            295 => 
            array (
                'id' => 1296,
                'country_id' => 75,
                'name' => 'Seine-et-Marne',
            ),
            296 => 
            array (
                'id' => 1297,
                'country_id' => 75,
                'name' => 'Somme',
            ),
            297 => 
            array (
                'id' => 1298,
                'country_id' => 75,
                'name' => 'Sophia Antipolis',
            ),
            298 => 
            array (
                'id' => 1299,
                'country_id' => 75,
                'name' => 'Souvans',
            ),
            299 => 
            array (
                'id' => 1300,
                'country_id' => 75,
                'name' => 'Tar',
            ),
            300 => 
            array (
                'id' => 1301,
                'country_id' => 75,
                'name' => 'Tarn-et-Garonne',
            ),
            301 => 
            array (
                'id' => 1302,
                'country_id' => 75,
                'name' => 'Territoire de Belfort',
            ),
            302 => 
            array (
                'id' => 1303,
                'country_id' => 75,
                'name' => 'Treignac',
            ),
            303 => 
            array (
                'id' => 1304,
                'country_id' => 75,
                'name' => 'Upper Normandy',
            ),
            304 => 
            array (
                'id' => 1305,
                'country_id' => 75,
                'name' => 'Val-d\'Oise',
            ),
            305 => 
            array (
                'id' => 1306,
                'country_id' => 75,
                'name' => 'Val-de-Marne',
            ),
            306 => 
            array (
                'id' => 1307,
                'country_id' => 75,
                'name' => 'Var',
            ),
            307 => 
            array (
                'id' => 1308,
                'country_id' => 75,
                'name' => 'Vaucluse',
            ),
            308 => 
            array (
                'id' => 1309,
                'country_id' => 75,
                'name' => 'Vellise',
            ),
            309 => 
            array (
                'id' => 1310,
                'country_id' => 75,
                'name' => 'Vendee',
            ),
            310 => 
            array (
                'id' => 1311,
                'country_id' => 75,
                'name' => 'Vienne',
            ),
            311 => 
            array (
                'id' => 1312,
                'country_id' => 75,
                'name' => 'Vosges',
            ),
            312 => 
            array (
                'id' => 1313,
                'country_id' => 75,
                'name' => 'Yonne',
            ),
            313 => 
            array (
                'id' => 1314,
                'country_id' => 75,
                'name' => 'Yvelines',
            ),
            314 => 
            array (
                'id' => 1315,
                'country_id' => 76,
                'name' => 'Cayenne',
            ),
            315 => 
            array (
                'id' => 1316,
                'country_id' => 76,
                'name' => 'Saint-Laurent-du-Maroni',
            ),
            316 => 
            array (
                'id' => 1317,
                'country_id' => 77,
                'name' => 'Iles du Vent',
            ),
            317 => 
            array (
                'id' => 1318,
                'country_id' => 77,
                'name' => 'Iles sous le Vent',
            ),
            318 => 
            array (
                'id' => 1319,
                'country_id' => 77,
                'name' => 'Marquesas',
            ),
            319 => 
            array (
                'id' => 1320,
                'country_id' => 77,
                'name' => 'Tuamotu',
            ),
            320 => 
            array (
                'id' => 1321,
                'country_id' => 77,
                'name' => 'Tubuai',
            ),
            321 => 
            array (
                'id' => 1322,
                'country_id' => 78,
                'name' => 'Amsterdam',
            ),
            322 => 
            array (
                'id' => 1323,
                'country_id' => 78,
                'name' => 'Crozet Islands',
            ),
            323 => 
            array (
                'id' => 1324,
                'country_id' => 78,
                'name' => 'Kerguele',
            ),
            324 => 
            array (
                'id' => 1325,
                'country_id' => 79,
                'name' => 'Estuaire',
            ),
            325 => 
            array (
                'id' => 1326,
                'country_id' => 79,
                'name' => 'Haut-Ogooue',
            ),
            326 => 
            array (
                'id' => 1327,
                'country_id' => 79,
                'name' => 'Moyen-Ogooue',
            ),
            327 => 
            array (
                'id' => 1328,
                'country_id' => 79,
                'name' => 'Ngounie',
            ),
            328 => 
            array (
                'id' => 1329,
                'country_id' => 79,
                'name' => 'Nyanga',
            ),
            329 => 
            array (
                'id' => 1330,
                'country_id' => 79,
                'name' => 'Ogooue-Ivindo',
            ),
            330 => 
            array (
                'id' => 1331,
                'country_id' => 79,
                'name' => 'Ogooue-Lolo',
            ),
            331 => 
            array (
                'id' => 1332,
                'country_id' => 79,
                'name' => 'Ogooue-Maritime',
            ),
            332 => 
            array (
                'id' => 1333,
                'country_id' => 79,
                'name' => 'Woleu-Ntem',
            ),
            333 => 
            array (
                'id' => 1334,
                'country_id' => 80,
                'name' => 'Banjul',
            ),
            334 => 
            array (
                'id' => 1335,
                'country_id' => 80,
                'name' => 'Basse',
            ),
            335 => 
            array (
                'id' => 1336,
                'country_id' => 80,
                'name' => 'Brikama',
            ),
            336 => 
            array (
                'id' => 1337,
                'country_id' => 80,
                'name' => 'Janjanbureh',
            ),
            337 => 
            array (
                'id' => 1338,
                'country_id' => 80,
                'name' => 'Kanifing',
            ),
            338 => 
            array (
                'id' => 1339,
                'country_id' => 80,
                'name' => 'Kerewa',
            ),
            339 => 
            array (
                'id' => 1340,
                'country_id' => 80,
                'name' => 'Kuntaur',
            ),
            340 => 
            array (
                'id' => 1341,
                'country_id' => 80,
                'name' => 'Mansakonko',
            ),
            341 => 
            array (
                'id' => 1342,
                'country_id' => 81,
                'name' => 'Abhasia',
            ),
            342 => 
            array (
                'id' => 1343,
                'country_id' => 81,
                'name' => 'Ajaria',
            ),
            343 => 
            array (
                'id' => 1344,
                'country_id' => 81,
                'name' => 'Guria',
            ),
            344 => 
            array (
                'id' => 1345,
                'country_id' => 81,
                'name' => 'Imereti',
            ),
            345 => 
            array (
                'id' => 1346,
                'country_id' => 81,
                'name' => 'Kaheti',
            ),
            346 => 
            array (
                'id' => 1347,
                'country_id' => 81,
                'name' => 'Kvemo Kartli',
            ),
            347 => 
            array (
                'id' => 1348,
                'country_id' => 81,
                'name' => 'Mcheta-Mtianeti',
            ),
            348 => 
            array (
                'id' => 1349,
                'country_id' => 81,
                'name' => 'Racha',
            ),
            349 => 
            array (
                'id' => 1350,
                'country_id' => 81,
                'name' => 'Samagrelo-Zemo Svaneti',
            ),
            350 => 
            array (
                'id' => 1351,
                'country_id' => 81,
                'name' => 'Samche-Zhavaheti',
            ),
            351 => 
            array (
                'id' => 1352,
                'country_id' => 81,
                'name' => 'Shida Kartli',
            ),
            352 => 
            array (
                'id' => 1353,
                'country_id' => 81,
                'name' => 'Tbilisi',
            ),
            353 => 
            array (
                'id' => 1354,
                'country_id' => 82,
                'name' => 'Auvergne',
            ),
            354 => 
            array (
                'id' => 1355,
                'country_id' => 82,
                'name' => 'Baden-Wurttemberg',
            ),
            355 => 
            array (
                'id' => 1356,
                'country_id' => 82,
                'name' => 'Bavaria',
            ),
            356 => 
            array (
                'id' => 1357,
                'country_id' => 82,
                'name' => 'Bayer',
            ),
            357 => 
            array (
                'id' => 1358,
                'country_id' => 82,
                'name' => 'Beilstein Wurtt',
            ),
            358 => 
            array (
                'id' => 1359,
                'country_id' => 82,
                'name' => 'Berli',
            ),
            359 => 
            array (
                'id' => 1360,
                'country_id' => 82,
                'name' => 'Brandenburg',
            ),
            360 => 
            array (
                'id' => 1361,
                'country_id' => 82,
                'name' => 'Breme',
            ),
            361 => 
            array (
                'id' => 1362,
                'country_id' => 82,
                'name' => 'Dreisbach',
            ),
            362 => 
            array (
                'id' => 1363,
                'country_id' => 82,
                'name' => 'Freistaat Bayer',
            ),
            363 => 
            array (
                'id' => 1364,
                'country_id' => 82,
                'name' => 'Hamburg',
            ),
            364 => 
            array (
                'id' => 1365,
                'country_id' => 82,
                'name' => 'Hannover',
            ),
            365 => 
            array (
                'id' => 1366,
                'country_id' => 82,
                'name' => 'Heroldstatt',
            ),
            366 => 
            array (
                'id' => 1367,
                'country_id' => 82,
                'name' => 'Hesse',
            ),
            367 => 
            array (
                'id' => 1368,
                'country_id' => 82,
                'name' => 'Kortenberg',
            ),
            368 => 
            array (
                'id' => 1369,
                'country_id' => 82,
                'name' => 'Laasdorf',
            ),
            369 => 
            array (
                'id' => 1370,
                'country_id' => 82,
                'name' => 'Land Baden-Wurttemberg',
            ),
            370 => 
            array (
                'id' => 1371,
                'country_id' => 82,
                'name' => 'Land Bayer',
            ),
            371 => 
            array (
                'id' => 1372,
                'country_id' => 82,
                'name' => 'Land Brandenburg',
            ),
            372 => 
            array (
                'id' => 1373,
                'country_id' => 82,
                'name' => 'Land Hesse',
            ),
            373 => 
            array (
                'id' => 1374,
                'country_id' => 82,
                'name' => 'Land Mecklenburg-Vorpommer',
            ),
            374 => 
            array (
                'id' => 1375,
                'country_id' => 82,
                'name' => 'Land Nordrhein-Westfale',
            ),
            375 => 
            array (
                'id' => 1376,
                'country_id' => 82,
                'name' => 'Land Rheinland-Pfalz',
            ),
            376 => 
            array (
                'id' => 1377,
                'country_id' => 82,
                'name' => 'Land Sachse',
            ),
            377 => 
            array (
                'id' => 1378,
                'country_id' => 82,
                'name' => 'Land Sachsen-Anhalt',
            ),
            378 => 
            array (
                'id' => 1379,
                'country_id' => 82,
                'name' => 'Land Thuringe',
            ),
            379 => 
            array (
                'id' => 1380,
                'country_id' => 82,
                'name' => 'Lower Saxony',
            ),
            380 => 
            array (
                'id' => 1381,
                'country_id' => 82,
                'name' => 'Mecklenburg-Vorpommer',
            ),
            381 => 
            array (
                'id' => 1382,
                'country_id' => 82,
                'name' => 'Mulfinge',
            ),
            382 => 
            array (
                'id' => 1383,
                'country_id' => 82,
                'name' => 'Munich',
            ),
            383 => 
            array (
                'id' => 1384,
                'country_id' => 82,
                'name' => 'Neubeuer',
            ),
            384 => 
            array (
                'id' => 1385,
                'country_id' => 82,
                'name' => 'Niedersachse',
            ),
            385 => 
            array (
                'id' => 1386,
                'country_id' => 82,
                'name' => 'Noord-Holland',
            ),
            386 => 
            array (
                'id' => 1387,
                'country_id' => 82,
                'name' => 'Nordrhein-Westfale',
            ),
            387 => 
            array (
                'id' => 1388,
                'country_id' => 82,
                'name' => 'North Rhine-Westphalia',
            ),
            388 => 
            array (
                'id' => 1389,
                'country_id' => 82,
                'name' => 'Osterode',
            ),
            389 => 
            array (
                'id' => 1390,
                'country_id' => 82,
                'name' => 'Rheinland-Pfalz',
            ),
            390 => 
            array (
                'id' => 1391,
                'country_id' => 82,
                'name' => 'Rhineland-Palatinate',
            ),
            391 => 
            array (
                'id' => 1392,
                'country_id' => 82,
                'name' => 'Saarland',
            ),
            392 => 
            array (
                'id' => 1393,
                'country_id' => 82,
                'name' => 'Sachse',
            ),
            393 => 
            array (
                'id' => 1394,
                'country_id' => 82,
                'name' => 'Sachsen-Anhalt',
            ),
            394 => 
            array (
                'id' => 1395,
                'country_id' => 82,
                'name' => 'Saxony',
            ),
            395 => 
            array (
                'id' => 1396,
                'country_id' => 82,
                'name' => 'Schleswig-Holstei',
            ),
            396 => 
            array (
                'id' => 1397,
                'country_id' => 82,
                'name' => 'Thuringia',
            ),
            397 => 
            array (
                'id' => 1398,
                'country_id' => 82,
                'name' => 'Webling',
            ),
            398 => 
            array (
                'id' => 1399,
                'country_id' => 82,
                'name' => 'Weinstrabe',
            ),
            399 => 
            array (
                'id' => 1400,
                'country_id' => 82,
                'name' => 'schlobbor',
            ),
            400 => 
            array (
                'id' => 1401,
                'country_id' => 83,
                'name' => 'Ashanti',
            ),
            401 => 
            array (
                'id' => 1402,
                'country_id' => 83,
                'name' => 'Brong-Ahafo',
            ),
            402 => 
            array (
                'id' => 1403,
                'country_id' => 83,
                'name' => 'Central',
            ),
            403 => 
            array (
                'id' => 1404,
                'country_id' => 83,
                'name' => 'Easter',
            ),
            404 => 
            array (
                'id' => 1405,
                'country_id' => 83,
                'name' => 'Greater Accra',
            ),
            405 => 
            array (
                'id' => 1406,
                'country_id' => 83,
                'name' => 'Norther',
            ),
            406 => 
            array (
                'id' => 1407,
                'country_id' => 83,
                'name' => 'Upper East',
            ),
            407 => 
            array (
                'id' => 1408,
                'country_id' => 83,
                'name' => 'Upper West',
            ),
            408 => 
            array (
                'id' => 1409,
                'country_id' => 83,
                'name' => 'Volta',
            ),
            409 => 
            array (
                'id' => 1410,
                'country_id' => 83,
                'name' => 'Wester',
            ),
            410 => 
            array (
                'id' => 1411,
                'country_id' => 84,
                'name' => 'Gibraltar',
            ),
            411 => 
            array (
                'id' => 1412,
                'country_id' => 85,
                'name' => 'Acharnes',
            ),
            412 => 
            array (
                'id' => 1413,
                'country_id' => 85,
                'name' => 'Ahaia',
            ),
            413 => 
            array (
                'id' => 1414,
                'country_id' => 85,
                'name' => 'Aitolia kai Akarnania',
            ),
            414 => 
            array (
                'id' => 1415,
                'country_id' => 85,
                'name' => 'Argolis',
            ),
            415 => 
            array (
                'id' => 1416,
                'country_id' => 85,
                'name' => 'Arkadia',
            ),
            416 => 
            array (
                'id' => 1417,
                'country_id' => 85,
                'name' => 'Arta',
            ),
            417 => 
            array (
                'id' => 1418,
                'country_id' => 85,
                'name' => 'Attica',
            ),
            418 => 
            array (
                'id' => 1419,
                'country_id' => 85,
                'name' => 'Attiki',
            ),
            419 => 
            array (
                'id' => 1420,
                'country_id' => 85,
                'name' => 'Ayion Oros',
            ),
            420 => 
            array (
                'id' => 1421,
                'country_id' => 85,
                'name' => 'Crete',
            ),
            421 => 
            array (
                'id' => 1422,
                'country_id' => 85,
                'name' => 'Dodekanisos',
            ),
            422 => 
            array (
                'id' => 1423,
                'country_id' => 85,
                'name' => 'Drama',
            ),
            423 => 
            array (
                'id' => 1424,
                'country_id' => 85,
                'name' => 'Evia',
            ),
            424 => 
            array (
                'id' => 1425,
                'country_id' => 85,
                'name' => 'Evritania',
            ),
            425 => 
            array (
                'id' => 1426,
                'country_id' => 85,
                'name' => 'Evros',
            ),
            426 => 
            array (
                'id' => 1427,
                'country_id' => 85,
                'name' => 'Evvoia',
            ),
            427 => 
            array (
                'id' => 1428,
                'country_id' => 85,
                'name' => 'Florina',
            ),
            428 => 
            array (
                'id' => 1429,
                'country_id' => 85,
                'name' => 'Fokis',
            ),
            429 => 
            array (
                'id' => 1430,
                'country_id' => 85,
                'name' => 'Fthiotis',
            ),
            430 => 
            array (
                'id' => 1431,
                'country_id' => 85,
                'name' => 'Grevena',
            ),
            431 => 
            array (
                'id' => 1432,
                'country_id' => 85,
                'name' => 'Halandri',
            ),
            432 => 
            array (
                'id' => 1433,
                'country_id' => 85,
                'name' => 'Halkidiki',
            ),
            433 => 
            array (
                'id' => 1434,
                'country_id' => 85,
                'name' => 'Hania',
            ),
            434 => 
            array (
                'id' => 1435,
                'country_id' => 85,
                'name' => 'Heraklio',
            ),
            435 => 
            array (
                'id' => 1436,
                'country_id' => 85,
                'name' => 'Hios',
            ),
            436 => 
            array (
                'id' => 1437,
                'country_id' => 85,
                'name' => 'Ilia',
            ),
            437 => 
            array (
                'id' => 1438,
                'country_id' => 85,
                'name' => 'Imathia',
            ),
            438 => 
            array (
                'id' => 1439,
                'country_id' => 85,
                'name' => 'Ioannina',
            ),
            439 => 
            array (
                'id' => 1440,
                'country_id' => 85,
                'name' => 'Iraklio',
            ),
            440 => 
            array (
                'id' => 1441,
                'country_id' => 85,
                'name' => 'Karditsa',
            ),
            441 => 
            array (
                'id' => 1442,
                'country_id' => 85,
                'name' => 'Kastoria',
            ),
            442 => 
            array (
                'id' => 1443,
                'country_id' => 85,
                'name' => 'Kavala',
            ),
            443 => 
            array (
                'id' => 1444,
                'country_id' => 85,
                'name' => 'Kefallinia',
            ),
            444 => 
            array (
                'id' => 1445,
                'country_id' => 85,
                'name' => 'Kerkira',
            ),
            445 => 
            array (
                'id' => 1446,
                'country_id' => 85,
                'name' => 'Kiklades',
            ),
            446 => 
            array (
                'id' => 1447,
                'country_id' => 85,
                'name' => 'Kilkis',
            ),
            447 => 
            array (
                'id' => 1448,
                'country_id' => 85,
                'name' => 'Korinthia',
            ),
            448 => 
            array (
                'id' => 1449,
                'country_id' => 85,
                'name' => 'Kozani',
            ),
            449 => 
            array (
                'id' => 1450,
                'country_id' => 85,
                'name' => 'Lakonia',
            ),
            450 => 
            array (
                'id' => 1451,
                'country_id' => 85,
                'name' => 'Larisa',
            ),
            451 => 
            array (
                'id' => 1452,
                'country_id' => 85,
                'name' => 'Lasithi',
            ),
            452 => 
            array (
                'id' => 1453,
                'country_id' => 85,
                'name' => 'Lesvos',
            ),
            453 => 
            array (
                'id' => 1454,
                'country_id' => 85,
                'name' => 'Levkas',
            ),
            454 => 
            array (
                'id' => 1455,
                'country_id' => 85,
                'name' => 'Magnisia',
            ),
            455 => 
            array (
                'id' => 1456,
                'country_id' => 85,
                'name' => 'Messinia',
            ),
            456 => 
            array (
                'id' => 1457,
                'country_id' => 85,
                'name' => 'Nomos Attikis',
            ),
            457 => 
            array (
                'id' => 1458,
                'country_id' => 85,
                'name' => 'Nomos Zakynthou',
            ),
            458 => 
            array (
                'id' => 1459,
                'country_id' => 85,
                'name' => 'Pella',
            ),
            459 => 
            array (
                'id' => 1460,
                'country_id' => 85,
                'name' => 'Pieria',
            ),
            460 => 
            array (
                'id' => 1461,
                'country_id' => 85,
                'name' => 'Piraios',
            ),
            461 => 
            array (
                'id' => 1462,
                'country_id' => 85,
                'name' => 'Preveza',
            ),
            462 => 
            array (
                'id' => 1463,
                'country_id' => 85,
                'name' => 'Rethimni',
            ),
            463 => 
            array (
                'id' => 1464,
                'country_id' => 85,
                'name' => 'Rodopi',
            ),
            464 => 
            array (
                'id' => 1465,
                'country_id' => 85,
                'name' => 'Samos',
            ),
            465 => 
            array (
                'id' => 1466,
                'country_id' => 85,
                'name' => 'Serrai',
            ),
            466 => 
            array (
                'id' => 1467,
                'country_id' => 85,
                'name' => 'Thesprotia',
            ),
            467 => 
            array (
                'id' => 1468,
                'country_id' => 85,
                'name' => 'Thessaloniki',
            ),
            468 => 
            array (
                'id' => 1469,
                'country_id' => 85,
                'name' => 'Trikala',
            ),
            469 => 
            array (
                'id' => 1470,
                'country_id' => 85,
                'name' => 'Voiotia',
            ),
            470 => 
            array (
                'id' => 1471,
                'country_id' => 85,
                'name' => 'West Greece',
            ),
            471 => 
            array (
                'id' => 1472,
                'country_id' => 85,
                'name' => 'Xanthi',
            ),
            472 => 
            array (
                'id' => 1473,
                'country_id' => 85,
                'name' => 'Zakinthos',
            ),
            473 => 
            array (
                'id' => 1474,
                'country_id' => 86,
                'name' => 'Aasiaat',
            ),
            474 => 
            array (
                'id' => 1475,
                'country_id' => 86,
                'name' => 'Ammassalik',
            ),
            475 => 
            array (
                'id' => 1476,
                'country_id' => 86,
                'name' => 'Illoqqortoormiut',
            ),
            476 => 
            array (
                'id' => 1477,
                'country_id' => 86,
                'name' => 'Ilulissat',
            ),
            477 => 
            array (
                'id' => 1478,
                'country_id' => 86,
                'name' => 'Ivittuut',
            ),
            478 => 
            array (
                'id' => 1479,
                'country_id' => 86,
                'name' => 'Kangaatsiaq',
            ),
            479 => 
            array (
                'id' => 1480,
                'country_id' => 86,
                'name' => 'Maniitsoq',
            ),
            480 => 
            array (
                'id' => 1481,
                'country_id' => 86,
                'name' => 'Nanortalik',
            ),
            481 => 
            array (
                'id' => 1482,
                'country_id' => 86,
                'name' => 'Narsaq',
            ),
            482 => 
            array (
                'id' => 1483,
                'country_id' => 86,
                'name' => 'Nuuk',
            ),
            483 => 
            array (
                'id' => 1484,
                'country_id' => 86,
                'name' => 'Paamiut',
            ),
            484 => 
            array (
                'id' => 1485,
                'country_id' => 86,
                'name' => 'Qaanaaq',
            ),
            485 => 
            array (
                'id' => 1486,
                'country_id' => 86,
                'name' => 'Qaqortoq',
            ),
            486 => 
            array (
                'id' => 1487,
                'country_id' => 86,
                'name' => 'Qasigiannguit',
            ),
            487 => 
            array (
                'id' => 1488,
                'country_id' => 86,
                'name' => 'Qeqertarsuaq',
            ),
            488 => 
            array (
                'id' => 1489,
                'country_id' => 86,
                'name' => 'Sisimiut',
            ),
            489 => 
            array (
                'id' => 1490,
                'country_id' => 86,
                'name' => 'Udenfor kommunal inddeling',
            ),
            490 => 
            array (
                'id' => 1491,
                'country_id' => 86,
                'name' => 'Upernavik',
            ),
            491 => 
            array (
                'id' => 1492,
                'country_id' => 86,
                'name' => 'Uummannaq',
            ),
            492 => 
            array (
                'id' => 1493,
                'country_id' => 87,
                'name' => 'Carriacou-Petite Martinique',
            ),
            493 => 
            array (
                'id' => 1494,
                'country_id' => 87,
                'name' => 'Saint Andrew',
            ),
            494 => 
            array (
                'id' => 1495,
                'country_id' => 87,
                'name' => 'Saint Davids',
            ),
            495 => 
            array (
                'id' => 1496,
                'country_id' => 87,
                'name' => 'Saint George\'s',
            ),
            496 => 
            array (
                'id' => 1497,
                'country_id' => 87,
                'name' => 'Saint Joh',
            ),
            497 => 
            array (
                'id' => 1498,
                'country_id' => 87,
                'name' => 'Saint Mark',
            ),
            498 => 
            array (
                'id' => 1499,
                'country_id' => 87,
                'name' => 'Saint Patrick',
            ),
            499 => 
            array (
                'id' => 1500,
                'country_id' => 88,
                'name' => 'Basse-Terre',
            ),
        ));
        \DB::table('tbl_states')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'country_id' => 88,
                'name' => 'Grande-Terre',
            ),
            1 => 
            array (
                'id' => 1502,
                'country_id' => 88,
                'name' => 'Iles des Saintes',
            ),
            2 => 
            array (
                'id' => 1503,
                'country_id' => 88,
                'name' => 'La Desirade',
            ),
            3 => 
            array (
                'id' => 1504,
                'country_id' => 88,
                'name' => 'Marie-Galante',
            ),
            4 => 
            array (
                'id' => 1505,
                'country_id' => 88,
                'name' => 'Saint Barthelemy',
            ),
            5 => 
            array (
                'id' => 1506,
                'country_id' => 88,
                'name' => 'Saint Marti',
            ),
            6 => 
            array (
                'id' => 1507,
                'country_id' => 89,
                'name' => 'Agana Heights',
            ),
            7 => 
            array (
                'id' => 1508,
                'country_id' => 89,
                'name' => 'Agat',
            ),
            8 => 
            array (
                'id' => 1509,
                'country_id' => 89,
                'name' => 'Barrigada',
            ),
            9 => 
            array (
                'id' => 1510,
                'country_id' => 89,
                'name' => 'Chalan-Pago-Ordot',
            ),
            10 => 
            array (
                'id' => 1511,
                'country_id' => 89,
                'name' => 'Dededo',
            ),
            11 => 
            array (
                'id' => 1512,
                'country_id' => 89,
                'name' => 'Hagatna',
            ),
            12 => 
            array (
                'id' => 1513,
                'country_id' => 89,
                'name' => 'Inaraja',
            ),
            13 => 
            array (
                'id' => 1514,
                'country_id' => 89,
                'name' => 'Mangilao',
            ),
            14 => 
            array (
                'id' => 1515,
                'country_id' => 89,
                'name' => 'Merizo',
            ),
            15 => 
            array (
                'id' => 1516,
                'country_id' => 89,
                'name' => 'Mongmong-Toto-Maite',
            ),
            16 => 
            array (
                'id' => 1517,
                'country_id' => 89,
                'name' => 'Santa Rita',
            ),
            17 => 
            array (
                'id' => 1518,
                'country_id' => 89,
                'name' => 'Sinajana',
            ),
            18 => 
            array (
                'id' => 1519,
                'country_id' => 89,
                'name' => 'Talofofo',
            ),
            19 => 
            array (
                'id' => 1520,
                'country_id' => 89,
                'name' => 'Tamuning',
            ),
            20 => 
            array (
                'id' => 1521,
                'country_id' => 89,
                'name' => 'Yigo',
            ),
            21 => 
            array (
                'id' => 1522,
                'country_id' => 89,
                'name' => 'Yona',
            ),
            22 => 
            array (
                'id' => 1523,
                'country_id' => 90,
                'name' => 'Alta Verapaz',
            ),
            23 => 
            array (
                'id' => 1524,
                'country_id' => 90,
                'name' => 'Baja Verapaz',
            ),
            24 => 
            array (
                'id' => 1525,
                'country_id' => 90,
                'name' => 'Chimaltenango',
            ),
            25 => 
            array (
                'id' => 1526,
                'country_id' => 90,
                'name' => 'Chiquimula',
            ),
            26 => 
            array (
                'id' => 1527,
                'country_id' => 90,
                'name' => 'El Progreso',
            ),
            27 => 
            array (
                'id' => 1528,
                'country_id' => 90,
                'name' => 'Escuintla',
            ),
            28 => 
            array (
                'id' => 1529,
                'country_id' => 90,
                'name' => 'Guatemala',
            ),
            29 => 
            array (
                'id' => 1530,
                'country_id' => 90,
                'name' => 'Huehuetenango',
            ),
            30 => 
            array (
                'id' => 1531,
                'country_id' => 90,
                'name' => 'Izabal',
            ),
            31 => 
            array (
                'id' => 1532,
                'country_id' => 90,
                'name' => 'Jalapa',
            ),
            32 => 
            array (
                'id' => 1533,
                'country_id' => 90,
                'name' => 'Jutiapa',
            ),
            33 => 
            array (
                'id' => 1534,
                'country_id' => 90,
                'name' => 'Pete',
            ),
            34 => 
            array (
                'id' => 1535,
                'country_id' => 90,
                'name' => 'Quezaltenango',
            ),
            35 => 
            array (
                'id' => 1536,
                'country_id' => 90,
                'name' => 'Quiche',
            ),
            36 => 
            array (
                'id' => 1537,
                'country_id' => 90,
                'name' => 'Retalhuleu',
            ),
            37 => 
            array (
                'id' => 1538,
                'country_id' => 90,
                'name' => 'Sacatepequez',
            ),
            38 => 
            array (
                'id' => 1539,
                'country_id' => 90,
                'name' => 'San Marcos',
            ),
            39 => 
            array (
                'id' => 1540,
                'country_id' => 90,
                'name' => 'Santa Rosa',
            ),
            40 => 
            array (
                'id' => 1541,
                'country_id' => 90,
                'name' => 'Solola',
            ),
            41 => 
            array (
                'id' => 1542,
                'country_id' => 90,
                'name' => 'Suchitepequez',
            ),
            42 => 
            array (
                'id' => 1543,
                'country_id' => 90,
                'name' => 'Totonicapa',
            ),
            43 => 
            array (
                'id' => 1544,
                'country_id' => 90,
                'name' => 'Zacapa',
            ),
            44 => 
            array (
                'id' => 1545,
                'country_id' => 91,
                'name' => 'Alderney',
            ),
            45 => 
            array (
                'id' => 1546,
                'country_id' => 91,
                'name' => 'Castel',
            ),
            46 => 
            array (
                'id' => 1547,
                'country_id' => 91,
                'name' => 'Forest',
            ),
            47 => 
            array (
                'id' => 1548,
                'country_id' => 91,
                'name' => 'Saint Andrew',
            ),
            48 => 
            array (
                'id' => 1549,
                'country_id' => 91,
                'name' => 'Saint Marti',
            ),
            49 => 
            array (
                'id' => 1550,
                'country_id' => 91,
                'name' => 'Saint Peter Port',
            ),
            50 => 
            array (
                'id' => 1551,
                'country_id' => 91,
                'name' => 'Saint Pierre du Bois',
            ),
            51 => 
            array (
                'id' => 1552,
                'country_id' => 91,
                'name' => 'Saint Sampso',
            ),
            52 => 
            array (
                'id' => 1553,
                'country_id' => 91,
                'name' => 'Saint Saviour',
            ),
            53 => 
            array (
                'id' => 1554,
                'country_id' => 91,
                'name' => 'Sark',
            ),
            54 => 
            array (
                'id' => 1555,
                'country_id' => 91,
                'name' => 'Torteval',
            ),
            55 => 
            array (
                'id' => 1556,
                'country_id' => 91,
                'name' => 'Vale',
            ),
            56 => 
            array (
                'id' => 1557,
                'country_id' => 92,
                'name' => 'Beyla',
            ),
            57 => 
            array (
                'id' => 1558,
                'country_id' => 92,
                'name' => 'Boffa',
            ),
            58 => 
            array (
                'id' => 1559,
                'country_id' => 92,
                'name' => 'Boke',
            ),
            59 => 
            array (
                'id' => 1560,
                'country_id' => 92,
                'name' => 'Conakry',
            ),
            60 => 
            array (
                'id' => 1561,
                'country_id' => 92,
                'name' => 'Coyah',
            ),
            61 => 
            array (
                'id' => 1562,
                'country_id' => 92,
                'name' => 'Dabola',
            ),
            62 => 
            array (
                'id' => 1563,
                'country_id' => 92,
                'name' => 'Dalaba',
            ),
            63 => 
            array (
                'id' => 1564,
                'country_id' => 92,
                'name' => 'Dinguiraye',
            ),
            64 => 
            array (
                'id' => 1565,
                'country_id' => 92,
                'name' => 'Faranah',
            ),
            65 => 
            array (
                'id' => 1566,
                'country_id' => 92,
                'name' => 'Forecariah',
            ),
            66 => 
            array (
                'id' => 1567,
                'country_id' => 92,
                'name' => 'Fria',
            ),
            67 => 
            array (
                'id' => 1568,
                'country_id' => 92,
                'name' => 'Gaoual',
            ),
            68 => 
            array (
                'id' => 1569,
                'country_id' => 92,
                'name' => 'Gueckedou',
            ),
            69 => 
            array (
                'id' => 1570,
                'country_id' => 92,
                'name' => 'Kanka',
            ),
            70 => 
            array (
                'id' => 1571,
                'country_id' => 92,
                'name' => 'Kerouane',
            ),
            71 => 
            array (
                'id' => 1572,
                'country_id' => 92,
                'name' => 'Kindia',
            ),
            72 => 
            array (
                'id' => 1573,
                'country_id' => 92,
                'name' => 'Kissidougou',
            ),
            73 => 
            array (
                'id' => 1574,
                'country_id' => 92,
                'name' => 'Koubia',
            ),
            74 => 
            array (
                'id' => 1575,
                'country_id' => 92,
                'name' => 'Koundara',
            ),
            75 => 
            array (
                'id' => 1576,
                'country_id' => 92,
                'name' => 'Kouroussa',
            ),
            76 => 
            array (
                'id' => 1577,
                'country_id' => 92,
                'name' => 'Labe',
            ),
            77 => 
            array (
                'id' => 1578,
                'country_id' => 92,
                'name' => 'Lola',
            ),
            78 => 
            array (
                'id' => 1579,
                'country_id' => 92,
                'name' => 'Macenta',
            ),
            79 => 
            array (
                'id' => 1580,
                'country_id' => 92,
                'name' => 'Mali',
            ),
            80 => 
            array (
                'id' => 1581,
                'country_id' => 92,
                'name' => 'Mamou',
            ),
            81 => 
            array (
                'id' => 1582,
                'country_id' => 92,
                'name' => 'Mandiana',
            ),
            82 => 
            array (
                'id' => 1583,
                'country_id' => 92,
                'name' => 'Nzerekore',
            ),
            83 => 
            array (
                'id' => 1584,
                'country_id' => 92,
                'name' => 'Pita',
            ),
            84 => 
            array (
                'id' => 1585,
                'country_id' => 92,
                'name' => 'Siguiri',
            ),
            85 => 
            array (
                'id' => 1586,
                'country_id' => 92,
                'name' => 'Telimele',
            ),
            86 => 
            array (
                'id' => 1587,
                'country_id' => 92,
                'name' => 'Tougue',
            ),
            87 => 
            array (
                'id' => 1588,
                'country_id' => 92,
                'name' => 'Yomou',
            ),
            88 => 
            array (
                'id' => 1589,
                'country_id' => 93,
                'name' => 'Bafata',
            ),
            89 => 
            array (
                'id' => 1590,
                'country_id' => 93,
                'name' => 'Bissau',
            ),
            90 => 
            array (
                'id' => 1591,
                'country_id' => 93,
                'name' => 'Bolama',
            ),
            91 => 
            array (
                'id' => 1592,
                'country_id' => 93,
                'name' => 'Cacheu',
            ),
            92 => 
            array (
                'id' => 1593,
                'country_id' => 93,
                'name' => 'Gabu',
            ),
            93 => 
            array (
                'id' => 1594,
                'country_id' => 93,
                'name' => 'Oio',
            ),
            94 => 
            array (
                'id' => 1595,
                'country_id' => 93,
                'name' => 'Quinara',
            ),
            95 => 
            array (
                'id' => 1596,
                'country_id' => 93,
                'name' => 'Tombali',
            ),
            96 => 
            array (
                'id' => 1597,
                'country_id' => 94,
                'name' => 'Barima-Waini',
            ),
            97 => 
            array (
                'id' => 1598,
                'country_id' => 94,
                'name' => 'Cuyuni-Mazaruni',
            ),
            98 => 
            array (
                'id' => 1599,
                'country_id' => 94,
                'name' => 'Demerara-Mahaica',
            ),
            99 => 
            array (
                'id' => 1600,
                'country_id' => 94,
                'name' => 'East Berbice-Corentyne',
            ),
            100 => 
            array (
                'id' => 1601,
                'country_id' => 94,
                'name' => 'Essequibo Islands-West Demerar',
            ),
            101 => 
            array (
                'id' => 1602,
                'country_id' => 94,
                'name' => 'Mahaica-Berbice',
            ),
            102 => 
            array (
                'id' => 1603,
                'country_id' => 94,
                'name' => 'Pomeroon-Supenaam',
            ),
            103 => 
            array (
                'id' => 1604,
                'country_id' => 94,
                'name' => 'Potaro-Siparuni',
            ),
            104 => 
            array (
                'id' => 1605,
                'country_id' => 94,
                'name' => 'Upper Demerara-Berbice',
            ),
            105 => 
            array (
                'id' => 1606,
                'country_id' => 94,
                'name' => 'Upper Takutu-Upper Essequibo',
            ),
            106 => 
            array (
                'id' => 1607,
                'country_id' => 95,
                'name' => 'Artibonite',
            ),
            107 => 
            array (
                'id' => 1608,
                'country_id' => 95,
                'name' => 'Centre',
            ),
            108 => 
            array (
                'id' => 1609,
                'country_id' => 95,
                'name' => 'Grand\'Anse',
            ),
            109 => 
            array (
                'id' => 1610,
                'country_id' => 95,
                'name' => 'Nord',
            ),
            110 => 
            array (
                'id' => 1611,
                'country_id' => 95,
                'name' => 'Nord-Est',
            ),
            111 => 
            array (
                'id' => 1612,
                'country_id' => 95,
                'name' => 'Nord-Ouest',
            ),
            112 => 
            array (
                'id' => 1613,
                'country_id' => 95,
                'name' => 'Ouest',
            ),
            113 => 
            array (
                'id' => 1614,
                'country_id' => 95,
                'name' => 'Sud',
            ),
            114 => 
            array (
                'id' => 1615,
                'country_id' => 95,
                'name' => 'Sud-Est',
            ),
            115 => 
            array (
                'id' => 1616,
                'country_id' => 96,
                'name' => 'Heard and McDonald Islands',
            ),
            116 => 
            array (
                'id' => 1617,
                'country_id' => 97,
                'name' => 'Atlantida',
            ),
            117 => 
            array (
                'id' => 1618,
                'country_id' => 97,
                'name' => 'Choluteca',
            ),
            118 => 
            array (
                'id' => 1619,
                'country_id' => 97,
                'name' => 'Colo',
            ),
            119 => 
            array (
                'id' => 1620,
                'country_id' => 97,
                'name' => 'Comayagua',
            ),
            120 => 
            array (
                'id' => 1621,
                'country_id' => 97,
                'name' => 'Copa',
            ),
            121 => 
            array (
                'id' => 1622,
                'country_id' => 97,
                'name' => 'Cortes',
            ),
            122 => 
            array (
                'id' => 1623,
                'country_id' => 97,
                'name' => 'Distrito Central',
            ),
            123 => 
            array (
                'id' => 1624,
                'country_id' => 97,
                'name' => 'El Paraiso',
            ),
            124 => 
            array (
                'id' => 1625,
                'country_id' => 97,
                'name' => 'Francisco Moraza',
            ),
            125 => 
            array (
                'id' => 1626,
                'country_id' => 97,
                'name' => 'Gracias a Dios',
            ),
            126 => 
            array (
                'id' => 1627,
                'country_id' => 97,
                'name' => 'Intibuca',
            ),
            127 => 
            array (
                'id' => 1628,
                'country_id' => 97,
                'name' => 'Islas de la Bahia',
            ),
            128 => 
            array (
                'id' => 1629,
                'country_id' => 97,
                'name' => 'La Paz',
            ),
            129 => 
            array (
                'id' => 1630,
                'country_id' => 97,
                'name' => 'Lempira',
            ),
            130 => 
            array (
                'id' => 1631,
                'country_id' => 97,
                'name' => 'Ocotepeque',
            ),
            131 => 
            array (
                'id' => 1632,
                'country_id' => 97,
                'name' => 'Olancho',
            ),
            132 => 
            array (
                'id' => 1633,
                'country_id' => 97,
                'name' => 'Santa Barbara',
            ),
            133 => 
            array (
                'id' => 1634,
                'country_id' => 97,
                'name' => 'Valle',
            ),
            134 => 
            array (
                'id' => 1635,
                'country_id' => 97,
                'name' => 'Yoro',
            ),
            135 => 
            array (
                'id' => 1636,
                'country_id' => 98,
                'name' => 'Hong Kong',
            ),
            136 => 
            array (
                'id' => 1637,
                'country_id' => 99,
                'name' => 'Bacs-Kisku',
            ),
            137 => 
            array (
                'id' => 1638,
                'country_id' => 99,
                'name' => 'Baranya',
            ),
            138 => 
            array (
                'id' => 1639,
                'country_id' => 99,
                'name' => 'Bekes',
            ),
            139 => 
            array (
                'id' => 1640,
                'country_id' => 99,
                'name' => 'Borsod-Abauj-Zemple',
            ),
            140 => 
            array (
                'id' => 1641,
                'country_id' => 99,
                'name' => 'Budapest',
            ),
            141 => 
            array (
                'id' => 1642,
                'country_id' => 99,
                'name' => 'Csongrad',
            ),
            142 => 
            array (
                'id' => 1643,
                'country_id' => 99,
                'name' => 'Fejer',
            ),
            143 => 
            array (
                'id' => 1644,
                'country_id' => 99,
                'name' => 'Gyor-Moson-Sopro',
            ),
            144 => 
            array (
                'id' => 1645,
                'country_id' => 99,
                'name' => 'Hajdu-Bihar',
            ),
            145 => 
            array (
                'id' => 1646,
                'country_id' => 99,
                'name' => 'Heves',
            ),
            146 => 
            array (
                'id' => 1647,
                'country_id' => 99,
                'name' => 'Jasz-Nagykun-Szolnok',
            ),
            147 => 
            array (
                'id' => 1648,
                'country_id' => 99,
                'name' => 'Komarom-Esztergom',
            ),
            148 => 
            array (
                'id' => 1649,
                'country_id' => 99,
                'name' => 'Nograd',
            ),
            149 => 
            array (
                'id' => 1650,
                'country_id' => 99,
                'name' => 'Pest',
            ),
            150 => 
            array (
                'id' => 1651,
                'country_id' => 99,
                'name' => 'Somogy',
            ),
            151 => 
            array (
                'id' => 1652,
                'country_id' => 99,
                'name' => 'Szabolcs-Szatmar-Bereg',
            ),
            152 => 
            array (
                'id' => 1653,
                'country_id' => 99,
                'name' => 'Tolna',
            ),
            153 => 
            array (
                'id' => 1654,
                'country_id' => 99,
                'name' => 'Vas',
            ),
            154 => 
            array (
                'id' => 1655,
                'country_id' => 99,
                'name' => 'Veszprem',
            ),
            155 => 
            array (
                'id' => 1656,
                'country_id' => 99,
                'name' => 'Zala',
            ),
            156 => 
            array (
                'id' => 1657,
                'country_id' => 100,
                'name' => 'Austurland',
            ),
            157 => 
            array (
                'id' => 1658,
                'country_id' => 100,
                'name' => 'Gullbringusysla',
            ),
            158 => 
            array (
                'id' => 1659,
                'country_id' => 100,
                'name' => 'Hofu borgarsva i',
            ),
            159 => 
            array (
                'id' => 1660,
                'country_id' => 100,
                'name' => 'Nor urland eystra',
            ),
            160 => 
            array (
                'id' => 1661,
                'country_id' => 100,
                'name' => 'Nor urland vestra',
            ),
            161 => 
            array (
                'id' => 1662,
                'country_id' => 100,
                'name' => 'Su urland',
            ),
            162 => 
            array (
                'id' => 1663,
                'country_id' => 100,
                'name' => 'Su urnes',
            ),
            163 => 
            array (
                'id' => 1664,
                'country_id' => 100,
                'name' => 'Vestfir ir',
            ),
            164 => 
            array (
                'id' => 1665,
                'country_id' => 100,
                'name' => 'Vesturland',
            ),
            165 => 
            array (
                'id' => 1666,
                'country_id' => 102,
                'name' => 'Aceh',
            ),
            166 => 
            array (
                'id' => 1667,
                'country_id' => 102,
                'name' => 'Bali',
            ),
            167 => 
            array (
                'id' => 1668,
                'country_id' => 102,
                'name' => 'Bangka-Belitung',
            ),
            168 => 
            array (
                'id' => 1669,
                'country_id' => 102,
                'name' => 'Bante',
            ),
            169 => 
            array (
                'id' => 1670,
                'country_id' => 102,
                'name' => 'Bengkulu',
            ),
            170 => 
            array (
                'id' => 1671,
                'country_id' => 102,
                'name' => 'Gandaria',
            ),
            171 => 
            array (
                'id' => 1672,
                'country_id' => 102,
                'name' => 'Gorontalo',
            ),
            172 => 
            array (
                'id' => 1673,
                'country_id' => 102,
                'name' => 'Jakarta',
            ),
            173 => 
            array (
                'id' => 1674,
                'country_id' => 102,
                'name' => 'Jambi',
            ),
            174 => 
            array (
                'id' => 1675,
                'country_id' => 102,
                'name' => 'Jawa Barat',
            ),
            175 => 
            array (
                'id' => 1676,
                'country_id' => 102,
                'name' => 'Jawa Tengah',
            ),
            176 => 
            array (
                'id' => 1677,
                'country_id' => 102,
                'name' => 'Jawa Timur',
            ),
            177 => 
            array (
                'id' => 1678,
                'country_id' => 102,
                'name' => 'Kalimantan Barat',
            ),
            178 => 
            array (
                'id' => 1679,
                'country_id' => 102,
                'name' => 'Kalimantan Selata',
            ),
            179 => 
            array (
                'id' => 1680,
                'country_id' => 102,
                'name' => 'Kalimantan Tengah',
            ),
            180 => 
            array (
                'id' => 1681,
                'country_id' => 102,
                'name' => 'Kalimantan Timur',
            ),
            181 => 
            array (
                'id' => 1682,
                'country_id' => 102,
                'name' => 'Kendal',
            ),
            182 => 
            array (
                'id' => 1683,
                'country_id' => 102,
                'name' => 'Lampung',
            ),
            183 => 
            array (
                'id' => 1684,
                'country_id' => 102,
                'name' => 'Maluku',
            ),
            184 => 
            array (
                'id' => 1685,
                'country_id' => 102,
                'name' => 'Maluku Utara',
            ),
            185 => 
            array (
                'id' => 1686,
                'country_id' => 102,
                'name' => 'Nusa Tenggara Barat',
            ),
            186 => 
            array (
                'id' => 1687,
                'country_id' => 102,
                'name' => 'Nusa Tenggara Timur',
            ),
            187 => 
            array (
                'id' => 1688,
                'country_id' => 102,
                'name' => 'Papua',
            ),
            188 => 
            array (
                'id' => 1689,
                'country_id' => 102,
                'name' => 'Riau',
            ),
            189 => 
            array (
                'id' => 1690,
                'country_id' => 102,
                'name' => 'Riau Kepulaua',
            ),
            190 => 
            array (
                'id' => 1691,
                'country_id' => 102,
                'name' => 'Solo',
            ),
            191 => 
            array (
                'id' => 1692,
                'country_id' => 102,
                'name' => 'Sulawesi Selata',
            ),
            192 => 
            array (
                'id' => 1693,
                'country_id' => 102,
                'name' => 'Sulawesi Tengah',
            ),
            193 => 
            array (
                'id' => 1694,
                'country_id' => 102,
                'name' => 'Sulawesi Tenggara',
            ),
            194 => 
            array (
                'id' => 1695,
                'country_id' => 102,
                'name' => 'Sulawesi Utara',
            ),
            195 => 
            array (
                'id' => 1696,
                'country_id' => 102,
                'name' => 'Sumatera Barat',
            ),
            196 => 
            array (
                'id' => 1697,
                'country_id' => 102,
                'name' => 'Sumatera Selata',
            ),
            197 => 
            array (
                'id' => 1698,
                'country_id' => 102,
                'name' => 'Sumatera Utara',
            ),
            198 => 
            array (
                'id' => 1699,
                'country_id' => 102,
                'name' => 'Yogyakarta',
            ),
            199 => 
            array (
                'id' => 1700,
                'country_id' => 103,
                'name' => 'Ardabil',
            ),
            200 => 
            array (
                'id' => 1701,
                'country_id' => 103,
                'name' => 'Azarbayjan-e Bakhtari',
            ),
            201 => 
            array (
                'id' => 1702,
                'country_id' => 103,
                'name' => 'Azarbayjan-e Khavari',
            ),
            202 => 
            array (
                'id' => 1703,
                'country_id' => 103,
                'name' => 'Bushehr',
            ),
            203 => 
            array (
                'id' => 1704,
                'country_id' => 103,
                'name' => 'Chahar Mahal-e Bakhtiari',
            ),
            204 => 
            array (
                'id' => 1705,
                'country_id' => 103,
                'name' => 'Esfaha',
            ),
            205 => 
            array (
                'id' => 1706,
                'country_id' => 103,
                'name' => 'Fars',
            ),
            206 => 
            array (
                'id' => 1707,
                'country_id' => 103,
                'name' => 'Gila',
            ),
            207 => 
            array (
                'id' => 1708,
                'country_id' => 103,
                'name' => 'Golesta',
            ),
            208 => 
            array (
                'id' => 1709,
                'country_id' => 103,
                'name' => 'Hamada',
            ),
            209 => 
            array (
                'id' => 1710,
                'country_id' => 103,
                'name' => 'Hormozga',
            ),
            210 => 
            array (
                'id' => 1711,
                'country_id' => 103,
                'name' => 'Ilam',
            ),
            211 => 
            array (
                'id' => 1712,
                'country_id' => 103,
                'name' => 'Kerma',
            ),
            212 => 
            array (
                'id' => 1713,
                'country_id' => 103,
                'name' => 'Kermanshah',
            ),
            213 => 
            array (
                'id' => 1714,
                'country_id' => 103,
                'name' => 'Khorasa',
            ),
            214 => 
            array (
                'id' => 1715,
                'country_id' => 103,
                'name' => 'Khuzesta',
            ),
            215 => 
            array (
                'id' => 1716,
                'country_id' => 103,
                'name' => 'Kohgiluyeh-e Boyerahmad',
            ),
            216 => 
            array (
                'id' => 1717,
                'country_id' => 103,
                'name' => 'Kordesta',
            ),
            217 => 
            array (
                'id' => 1718,
                'country_id' => 103,
                'name' => 'Loresta',
            ),
            218 => 
            array (
                'id' => 1719,
                'country_id' => 103,
                'name' => 'Markazi',
            ),
            219 => 
            array (
                'id' => 1720,
                'country_id' => 103,
                'name' => 'Mazandara',
            ),
            220 => 
            array (
                'id' => 1721,
                'country_id' => 103,
                'name' => 'Ostan-e Esfaha',
            ),
            221 => 
            array (
                'id' => 1722,
                'country_id' => 103,
                'name' => 'Qazvi',
            ),
            222 => 
            array (
                'id' => 1723,
                'country_id' => 103,
                'name' => 'Qom',
            ),
            223 => 
            array (
                'id' => 1724,
                'country_id' => 103,
                'name' => 'Semna',
            ),
            224 => 
            array (
                'id' => 1725,
                'country_id' => 103,
                'name' => 'Sistan-e Baluchesta',
            ),
            225 => 
            array (
                'id' => 1726,
                'country_id' => 103,
                'name' => 'Tehra',
            ),
            226 => 
            array (
                'id' => 1727,
                'country_id' => 103,
                'name' => 'Yazd',
            ),
            227 => 
            array (
                'id' => 1728,
                'country_id' => 103,
                'name' => 'Zanja',
            ),
            228 => 
            array (
                'id' => 1729,
                'country_id' => 104,
                'name' => 'Babil',
            ),
            229 => 
            array (
                'id' => 1730,
                'country_id' => 104,
                'name' => 'Baghdad',
            ),
            230 => 
            array (
                'id' => 1731,
                'country_id' => 104,
                'name' => 'Dahuk',
            ),
            231 => 
            array (
                'id' => 1732,
                'country_id' => 104,
                'name' => 'Dhi Qar',
            ),
            232 => 
            array (
                'id' => 1733,
                'country_id' => 104,
                'name' => 'Diyala',
            ),
            233 => 
            array (
                'id' => 1734,
                'country_id' => 104,
                'name' => 'Erbil',
            ),
            234 => 
            array (
                'id' => 1735,
                'country_id' => 104,
                'name' => 'Irbil',
            ),
            235 => 
            array (
                'id' => 1736,
                'country_id' => 104,
                'name' => 'Karbala',
            ),
            236 => 
            array (
                'id' => 1737,
                'country_id' => 104,
                'name' => 'Kurdista',
            ),
            237 => 
            array (
                'id' => 1738,
                'country_id' => 104,
                'name' => 'Maysa',
            ),
            238 => 
            array (
                'id' => 1739,
                'country_id' => 104,
                'name' => 'Ninawa',
            ),
            239 => 
            array (
                'id' => 1740,
                'country_id' => 104,
                'name' => 'Salah-ad-Di',
            ),
            240 => 
            array (
                'id' => 1741,
                'country_id' => 104,
                'name' => 'Wasit',
            ),
            241 => 
            array (
                'id' => 1742,
                'country_id' => 104,
                'name' => 'al-Anbar',
            ),
            242 => 
            array (
                'id' => 1743,
                'country_id' => 104,
                'name' => 'al-Basrah',
            ),
            243 => 
            array (
                'id' => 1744,
                'country_id' => 104,
                'name' => 'al-Muthanna',
            ),
            244 => 
            array (
                'id' => 1745,
                'country_id' => 104,
                'name' => 'al-Qadisiyah',
            ),
            245 => 
            array (
                'id' => 1746,
                'country_id' => 104,
                'name' => 'an-Najaf',
            ),
            246 => 
            array (
                'id' => 1747,
                'country_id' => 104,
                'name' => 'as-Sulaymaniyah',
            ),
            247 => 
            array (
                'id' => 1748,
                'country_id' => 104,
                'name' => 'at-Ta\'mim',
            ),
            248 => 
            array (
                'id' => 1749,
                'country_id' => 105,
                'name' => 'Armagh',
            ),
            249 => 
            array (
                'id' => 1750,
                'country_id' => 105,
                'name' => 'Carlow',
            ),
            250 => 
            array (
                'id' => 1751,
                'country_id' => 105,
                'name' => 'Cava',
            ),
            251 => 
            array (
                'id' => 1752,
                'country_id' => 105,
                'name' => 'Clare',
            ),
            252 => 
            array (
                'id' => 1753,
                'country_id' => 105,
                'name' => 'Cork',
            ),
            253 => 
            array (
                'id' => 1754,
                'country_id' => 105,
                'name' => 'Donegal',
            ),
            254 => 
            array (
                'id' => 1755,
                'country_id' => 105,
                'name' => 'Dubli',
            ),
            255 => 
            array (
                'id' => 1756,
                'country_id' => 105,
                'name' => 'Galway',
            ),
            256 => 
            array (
                'id' => 1757,
                'country_id' => 105,
                'name' => 'Kerry',
            ),
            257 => 
            array (
                'id' => 1758,
                'country_id' => 105,
                'name' => 'Kildare',
            ),
            258 => 
            array (
                'id' => 1759,
                'country_id' => 105,
                'name' => 'Kilkenny',
            ),
            259 => 
            array (
                'id' => 1760,
                'country_id' => 105,
                'name' => 'Laois',
            ),
            260 => 
            array (
                'id' => 1761,
                'country_id' => 105,
                'name' => 'Leinster',
            ),
            261 => 
            array (
                'id' => 1762,
                'country_id' => 105,
                'name' => 'Leitrim',
            ),
            262 => 
            array (
                'id' => 1763,
                'country_id' => 105,
                'name' => 'Limerick',
            ),
            263 => 
            array (
                'id' => 1764,
                'country_id' => 105,
                'name' => 'Loch Garma',
            ),
            264 => 
            array (
                'id' => 1765,
                'country_id' => 105,
                'name' => 'Longford',
            ),
            265 => 
            array (
                'id' => 1766,
                'country_id' => 105,
                'name' => 'Louth',
            ),
            266 => 
            array (
                'id' => 1767,
                'country_id' => 105,
                'name' => 'Mayo',
            ),
            267 => 
            array (
                'id' => 1768,
                'country_id' => 105,
                'name' => 'Meath',
            ),
            268 => 
            array (
                'id' => 1769,
                'country_id' => 105,
                'name' => 'Monagha',
            ),
            269 => 
            array (
                'id' => 1770,
                'country_id' => 105,
                'name' => 'Offaly',
            ),
            270 => 
            array (
                'id' => 1771,
                'country_id' => 105,
                'name' => 'Roscommo',
            ),
            271 => 
            array (
                'id' => 1772,
                'country_id' => 105,
                'name' => 'Sligo',
            ),
            272 => 
            array (
                'id' => 1773,
                'country_id' => 105,
                'name' => 'Tipperary North Riding',
            ),
            273 => 
            array (
                'id' => 1774,
                'country_id' => 105,
                'name' => 'Tipperary South Riding',
            ),
            274 => 
            array (
                'id' => 1775,
                'country_id' => 105,
                'name' => 'Ulster',
            ),
            275 => 
            array (
                'id' => 1776,
                'country_id' => 105,
                'name' => 'Waterford',
            ),
            276 => 
            array (
                'id' => 1777,
                'country_id' => 105,
                'name' => 'Westmeath',
            ),
            277 => 
            array (
                'id' => 1778,
                'country_id' => 105,
                'name' => 'Wexford',
            ),
            278 => 
            array (
                'id' => 1779,
                'country_id' => 105,
                'name' => 'Wicklow',
            ),
            279 => 
            array (
                'id' => 1780,
                'country_id' => 106,
                'name' => 'Beit Hanania',
            ),
            280 => 
            array (
                'id' => 1781,
                'country_id' => 106,
                'name' => 'Ben Gurion Airport',
            ),
            281 => 
            array (
                'id' => 1782,
                'country_id' => 106,
                'name' => 'Bethlehem',
            ),
            282 => 
            array (
                'id' => 1783,
                'country_id' => 106,
                'name' => 'Caesarea',
            ),
            283 => 
            array (
                'id' => 1784,
                'country_id' => 106,
                'name' => 'Centre',
            ),
            284 => 
            array (
                'id' => 1785,
                'country_id' => 106,
                'name' => 'Gaza',
            ),
            285 => 
            array (
                'id' => 1786,
                'country_id' => 106,
                'name' => 'Hadaro',
            ),
            286 => 
            array (
                'id' => 1787,
                'country_id' => 106,
                'name' => 'Haifa District',
            ),
            287 => 
            array (
                'id' => 1788,
                'country_id' => 106,
                'name' => 'Hamerkaz',
            ),
            288 => 
            array (
                'id' => 1789,
                'country_id' => 106,
                'name' => 'Hazafo',
            ),
            289 => 
            array (
                'id' => 1790,
                'country_id' => 106,
                'name' => 'Hebro',
            ),
            290 => 
            array (
                'id' => 1791,
                'country_id' => 106,
                'name' => 'Jaffa',
            ),
            291 => 
            array (
                'id' => 1792,
                'country_id' => 106,
                'name' => 'Jerusalem',
            ),
            292 => 
            array (
                'id' => 1793,
                'country_id' => 106,
                'name' => 'Khefa',
            ),
            293 => 
            array (
                'id' => 1794,
                'country_id' => 106,
                'name' => 'Kiryat Yam',
            ),
            294 => 
            array (
                'id' => 1795,
                'country_id' => 106,
                'name' => 'Lower Galilee',
            ),
            295 => 
            array (
                'id' => 1796,
                'country_id' => 106,
                'name' => 'Qalqilya',
            ),
            296 => 
            array (
                'id' => 1797,
                'country_id' => 106,
                'name' => 'Talme Elazar',
            ),
            297 => 
            array (
                'id' => 1798,
                'country_id' => 106,
                'name' => 'Tel Aviv',
            ),
            298 => 
            array (
                'id' => 1799,
                'country_id' => 106,
                'name' => 'Tsafo',
            ),
            299 => 
            array (
                'id' => 1800,
                'country_id' => 106,
                'name' => 'Umm El Fahem',
            ),
            300 => 
            array (
                'id' => 1801,
                'country_id' => 106,
                'name' => 'Yerushalayim',
            ),
            301 => 
            array (
                'id' => 1802,
                'country_id' => 107,
                'name' => 'Abruzzi',
            ),
            302 => 
            array (
                'id' => 1803,
                'country_id' => 107,
                'name' => 'Abruzzo',
            ),
            303 => 
            array (
                'id' => 1804,
                'country_id' => 107,
                'name' => 'Agrigento',
            ),
            304 => 
            array (
                'id' => 1805,
                'country_id' => 107,
                'name' => 'Alessandria',
            ),
            305 => 
            array (
                'id' => 1806,
                'country_id' => 107,
                'name' => 'Ancona',
            ),
            306 => 
            array (
                'id' => 1807,
                'country_id' => 107,
                'name' => 'Arezzo',
            ),
            307 => 
            array (
                'id' => 1808,
                'country_id' => 107,
                'name' => 'Ascoli Piceno',
            ),
            308 => 
            array (
                'id' => 1809,
                'country_id' => 107,
                'name' => 'Asti',
            ),
            309 => 
            array (
                'id' => 1810,
                'country_id' => 107,
                'name' => 'Avellino',
            ),
            310 => 
            array (
                'id' => 1811,
                'country_id' => 107,
                'name' => 'Bari',
            ),
            311 => 
            array (
                'id' => 1812,
                'country_id' => 107,
                'name' => 'Basilicata',
            ),
            312 => 
            array (
                'id' => 1813,
                'country_id' => 107,
                'name' => 'Belluno',
            ),
            313 => 
            array (
                'id' => 1814,
                'country_id' => 107,
                'name' => 'Benevento',
            ),
            314 => 
            array (
                'id' => 1815,
                'country_id' => 107,
                'name' => 'Bergamo',
            ),
            315 => 
            array (
                'id' => 1816,
                'country_id' => 107,
                'name' => 'Biella',
            ),
            316 => 
            array (
                'id' => 1817,
                'country_id' => 107,
                'name' => 'Bologna',
            ),
            317 => 
            array (
                'id' => 1818,
                'country_id' => 107,
                'name' => 'Bolzano',
            ),
            318 => 
            array (
                'id' => 1819,
                'country_id' => 107,
                'name' => 'Brescia',
            ),
            319 => 
            array (
                'id' => 1820,
                'country_id' => 107,
                'name' => 'Brindisi',
            ),
            320 => 
            array (
                'id' => 1821,
                'country_id' => 107,
                'name' => 'Calabria',
            ),
            321 => 
            array (
                'id' => 1822,
                'country_id' => 107,
                'name' => 'Campania',
            ),
            322 => 
            array (
                'id' => 1823,
                'country_id' => 107,
                'name' => 'Cartoceto',
            ),
            323 => 
            array (
                'id' => 1824,
                'country_id' => 107,
                'name' => 'Caserta',
            ),
            324 => 
            array (
                'id' => 1825,
                'country_id' => 107,
                'name' => 'Catania',
            ),
            325 => 
            array (
                'id' => 1826,
                'country_id' => 107,
                'name' => 'Chieti',
            ),
            326 => 
            array (
                'id' => 1827,
                'country_id' => 107,
                'name' => 'Como',
            ),
            327 => 
            array (
                'id' => 1828,
                'country_id' => 107,
                'name' => 'Cosenza',
            ),
            328 => 
            array (
                'id' => 1829,
                'country_id' => 107,
                'name' => 'Cremona',
            ),
            329 => 
            array (
                'id' => 1830,
                'country_id' => 107,
                'name' => 'Cuneo',
            ),
            330 => 
            array (
                'id' => 1831,
                'country_id' => 107,
                'name' => 'Emilia-Romagna',
            ),
            331 => 
            array (
                'id' => 1832,
                'country_id' => 107,
                'name' => 'Ferrara',
            ),
            332 => 
            array (
                'id' => 1833,
                'country_id' => 107,
                'name' => 'Firenze',
            ),
            333 => 
            array (
                'id' => 1834,
                'country_id' => 107,
                'name' => 'Florence',
            ),
            334 => 
            array (
                'id' => 1835,
                'country_id' => 107,
                'name' => 'Forli-Cesena ',
            ),
            335 => 
            array (
                'id' => 1836,
                'country_id' => 107,
                'name' => 'Friuli-Venezia Giulia',
            ),
            336 => 
            array (
                'id' => 1837,
                'country_id' => 107,
                'name' => 'Frosinone',
            ),
            337 => 
            array (
                'id' => 1838,
                'country_id' => 107,
                'name' => 'Genoa',
            ),
            338 => 
            array (
                'id' => 1839,
                'country_id' => 107,
                'name' => 'Gorizia',
            ),
            339 => 
            array (
                'id' => 1840,
                'country_id' => 107,
                'name' => 'L\'Aquila',
            ),
            340 => 
            array (
                'id' => 1841,
                'country_id' => 107,
                'name' => 'Lazio',
            ),
            341 => 
            array (
                'id' => 1842,
                'country_id' => 107,
                'name' => 'Lecce',
            ),
            342 => 
            array (
                'id' => 1843,
                'country_id' => 107,
                'name' => 'Lecco',
            ),
            343 => 
            array (
                'id' => 1844,
                'country_id' => 107,
                'name' => 'Lecco Province',
            ),
            344 => 
            array (
                'id' => 1845,
                'country_id' => 107,
                'name' => 'Liguria',
            ),
            345 => 
            array (
                'id' => 1846,
                'country_id' => 107,
                'name' => 'Lodi',
            ),
            346 => 
            array (
                'id' => 1847,
                'country_id' => 107,
                'name' => 'Lombardia',
            ),
            347 => 
            array (
                'id' => 1848,
                'country_id' => 107,
                'name' => 'Lombardy',
            ),
            348 => 
            array (
                'id' => 1849,
                'country_id' => 107,
                'name' => 'Macerata',
            ),
            349 => 
            array (
                'id' => 1850,
                'country_id' => 107,
                'name' => 'Mantova',
            ),
            350 => 
            array (
                'id' => 1851,
                'country_id' => 107,
                'name' => 'Marche',
            ),
            351 => 
            array (
                'id' => 1852,
                'country_id' => 107,
                'name' => 'Messina',
            ),
            352 => 
            array (
                'id' => 1853,
                'country_id' => 107,
                'name' => 'Mila',
            ),
            353 => 
            array (
                'id' => 1854,
                'country_id' => 107,
                'name' => 'Modena',
            ),
            354 => 
            array (
                'id' => 1855,
                'country_id' => 107,
                'name' => 'Molise',
            ),
            355 => 
            array (
                'id' => 1856,
                'country_id' => 107,
                'name' => 'Molteno',
            ),
            356 => 
            array (
                'id' => 1857,
                'country_id' => 107,
                'name' => 'Montenegro',
            ),
            357 => 
            array (
                'id' => 1858,
                'country_id' => 107,
                'name' => 'Monza and Brianza',
            ),
            358 => 
            array (
                'id' => 1859,
                'country_id' => 107,
                'name' => 'Naples',
            ),
            359 => 
            array (
                'id' => 1860,
                'country_id' => 107,
                'name' => 'Novara',
            ),
            360 => 
            array (
                'id' => 1861,
                'country_id' => 107,
                'name' => 'Padova',
            ),
            361 => 
            array (
                'id' => 1862,
                'country_id' => 107,
                'name' => 'Parma',
            ),
            362 => 
            array (
                'id' => 1863,
                'country_id' => 107,
                'name' => 'Pavia',
            ),
            363 => 
            array (
                'id' => 1864,
                'country_id' => 107,
                'name' => 'Perugia',
            ),
            364 => 
            array (
                'id' => 1865,
                'country_id' => 107,
                'name' => 'Pesaro-Urbino',
            ),
            365 => 
            array (
                'id' => 1866,
                'country_id' => 107,
                'name' => 'Piacenza',
            ),
            366 => 
            array (
                'id' => 1867,
                'country_id' => 107,
                'name' => 'Piedmont',
            ),
            367 => 
            array (
                'id' => 1868,
                'country_id' => 107,
                'name' => 'Piemonte',
            ),
            368 => 
            array (
                'id' => 1869,
                'country_id' => 107,
                'name' => 'Pisa',
            ),
            369 => 
            array (
                'id' => 1870,
                'country_id' => 107,
                'name' => 'Pordenone',
            ),
            370 => 
            array (
                'id' => 1871,
                'country_id' => 107,
                'name' => 'Potenza',
            ),
            371 => 
            array (
                'id' => 1872,
                'country_id' => 107,
                'name' => 'Puglia',
            ),
            372 => 
            array (
                'id' => 1873,
                'country_id' => 107,
                'name' => 'Reggio Emilia',
            ),
            373 => 
            array (
                'id' => 1874,
                'country_id' => 107,
                'name' => 'Rimini',
            ),
            374 => 
            array (
                'id' => 1875,
                'country_id' => 107,
                'name' => 'Roma',
            ),
            375 => 
            array (
                'id' => 1876,
                'country_id' => 107,
                'name' => 'Salerno',
            ),
            376 => 
            array (
                'id' => 1877,
                'country_id' => 107,
                'name' => 'Sardegna',
            ),
            377 => 
            array (
                'id' => 1878,
                'country_id' => 107,
                'name' => 'Sassari',
            ),
            378 => 
            array (
                'id' => 1879,
                'country_id' => 107,
                'name' => 'Savona',
            ),
            379 => 
            array (
                'id' => 1880,
                'country_id' => 107,
                'name' => 'Sicilia',
            ),
            380 => 
            array (
                'id' => 1881,
                'country_id' => 107,
                'name' => 'Siena',
            ),
            381 => 
            array (
                'id' => 1882,
                'country_id' => 107,
                'name' => 'Sondrio',
            ),
            382 => 
            array (
                'id' => 1883,
                'country_id' => 107,
                'name' => 'South Tyrol',
            ),
            383 => 
            array (
                'id' => 1884,
                'country_id' => 107,
                'name' => 'Taranto',
            ),
            384 => 
            array (
                'id' => 1885,
                'country_id' => 107,
                'name' => 'Teramo',
            ),
            385 => 
            array (
                'id' => 1886,
                'country_id' => 107,
                'name' => 'Torino',
            ),
            386 => 
            array (
                'id' => 1887,
                'country_id' => 107,
                'name' => 'Toscana',
            ),
            387 => 
            array (
                'id' => 1888,
                'country_id' => 107,
                'name' => 'Trapani',
            ),
            388 => 
            array (
                'id' => 1889,
                'country_id' => 107,
                'name' => 'Trentino-Alto Adige',
            ),
            389 => 
            array (
                'id' => 1890,
                'country_id' => 107,
                'name' => 'Trento',
            ),
            390 => 
            array (
                'id' => 1891,
                'country_id' => 107,
                'name' => 'Treviso',
            ),
            391 => 
            array (
                'id' => 1892,
                'country_id' => 107,
                'name' => 'Udine',
            ),
            392 => 
            array (
                'id' => 1893,
                'country_id' => 107,
                'name' => 'Umbria',
            ),
            393 => 
            array (
                'id' => 1894,
                'country_id' => 107,
                'name' => 'Valle d\'Aosta',
            ),
            394 => 
            array (
                'id' => 1895,
                'country_id' => 107,
                'name' => 'Varese',
            ),
            395 => 
            array (
                'id' => 1896,
                'country_id' => 107,
                'name' => 'Veneto',
            ),
            396 => 
            array (
                'id' => 1897,
                'country_id' => 107,
                'name' => 'Venezia',
            ),
            397 => 
            array (
                'id' => 1898,
                'country_id' => 107,
                'name' => 'Verbano-Cusio-Ossola',
            ),
            398 => 
            array (
                'id' => 1899,
                'country_id' => 107,
                'name' => 'Vercelli',
            ),
            399 => 
            array (
                'id' => 1900,
                'country_id' => 107,
                'name' => 'Verona',
            ),
            400 => 
            array (
                'id' => 1901,
                'country_id' => 107,
                'name' => 'Vicenza',
            ),
            401 => 
            array (
                'id' => 1902,
                'country_id' => 107,
                'name' => 'Viterbo',
            ),
            402 => 
            array (
                'id' => 1903,
                'country_id' => 108,
                'name' => 'Buxoro Viloyati',
            ),
            403 => 
            array (
                'id' => 1904,
                'country_id' => 108,
                'name' => 'Clarendo',
            ),
            404 => 
            array (
                'id' => 1905,
                'country_id' => 108,
                'name' => 'Hanover',
            ),
            405 => 
            array (
                'id' => 1906,
                'country_id' => 108,
                'name' => 'Kingsto',
            ),
            406 => 
            array (
                'id' => 1907,
                'country_id' => 108,
                'name' => 'Manchester',
            ),
            407 => 
            array (
                'id' => 1908,
                'country_id' => 108,
                'name' => 'Portland',
            ),
            408 => 
            array (
                'id' => 1909,
                'country_id' => 108,
                'name' => 'Saint Andrews',
            ),
            409 => 
            array (
                'id' => 1910,
                'country_id' => 108,
                'name' => 'Saint An',
            ),
            410 => 
            array (
                'id' => 1911,
                'country_id' => 108,
                'name' => 'Saint Catherine',
            ),
            411 => 
            array (
                'id' => 1912,
                'country_id' => 108,
                'name' => 'Saint Elizabeth',
            ),
            412 => 
            array (
                'id' => 1913,
                'country_id' => 108,
                'name' => 'Saint James',
            ),
            413 => 
            array (
                'id' => 1914,
                'country_id' => 108,
                'name' => 'Saint Mary',
            ),
            414 => 
            array (
                'id' => 1915,
                'country_id' => 108,
                'name' => 'Saint Thomas',
            ),
            415 => 
            array (
                'id' => 1916,
                'country_id' => 108,
                'name' => 'Trelawney',
            ),
            416 => 
            array (
                'id' => 1917,
                'country_id' => 108,
                'name' => 'Westmoreland',
            ),
            417 => 
            array (
                'id' => 1918,
                'country_id' => 109,
                'name' => 'Aichi',
            ),
            418 => 
            array (
                'id' => 1919,
                'country_id' => 109,
                'name' => 'Akita',
            ),
            419 => 
            array (
                'id' => 1920,
                'country_id' => 109,
                'name' => 'Aomori',
            ),
            420 => 
            array (
                'id' => 1921,
                'country_id' => 109,
                'name' => 'Chiba',
            ),
            421 => 
            array (
                'id' => 1922,
                'country_id' => 109,
                'name' => 'Ehime',
            ),
            422 => 
            array (
                'id' => 1923,
                'country_id' => 109,
                'name' => 'Fukui',
            ),
            423 => 
            array (
                'id' => 1924,
                'country_id' => 109,
                'name' => 'Fukuoka',
            ),
            424 => 
            array (
                'id' => 1925,
                'country_id' => 109,
                'name' => 'Fukushima',
            ),
            425 => 
            array (
                'id' => 1926,
                'country_id' => 109,
                'name' => 'Gifu',
            ),
            426 => 
            array (
                'id' => 1927,
                'country_id' => 109,
                'name' => 'Gumma',
            ),
            427 => 
            array (
                'id' => 1928,
                'country_id' => 109,
                'name' => 'Hiroshima',
            ),
            428 => 
            array (
                'id' => 1929,
                'country_id' => 109,
                'name' => 'Hokkaido',
            ),
            429 => 
            array (
                'id' => 1930,
                'country_id' => 109,
                'name' => 'Hyogo',
            ),
            430 => 
            array (
                'id' => 1931,
                'country_id' => 109,
                'name' => 'Ibaraki',
            ),
            431 => 
            array (
                'id' => 1932,
                'country_id' => 109,
                'name' => 'Ishikawa',
            ),
            432 => 
            array (
                'id' => 1933,
                'country_id' => 109,
                'name' => 'Iwate',
            ),
            433 => 
            array (
                'id' => 1934,
                'country_id' => 109,
                'name' => 'Kagawa',
            ),
            434 => 
            array (
                'id' => 1935,
                'country_id' => 109,
                'name' => 'Kagoshima',
            ),
            435 => 
            array (
                'id' => 1936,
                'country_id' => 109,
                'name' => 'Kanagawa',
            ),
            436 => 
            array (
                'id' => 1937,
                'country_id' => 109,
                'name' => 'Kanto',
            ),
            437 => 
            array (
                'id' => 1938,
                'country_id' => 109,
                'name' => 'Kochi',
            ),
            438 => 
            array (
                'id' => 1939,
                'country_id' => 109,
                'name' => 'Kumamoto',
            ),
            439 => 
            array (
                'id' => 1940,
                'country_id' => 109,
                'name' => 'Kyoto',
            ),
            440 => 
            array (
                'id' => 1941,
                'country_id' => 109,
                'name' => 'Mie',
            ),
            441 => 
            array (
                'id' => 1942,
                'country_id' => 109,
                'name' => 'Miyagi',
            ),
            442 => 
            array (
                'id' => 1943,
                'country_id' => 109,
                'name' => 'Miyazaki',
            ),
            443 => 
            array (
                'id' => 1944,
                'country_id' => 109,
                'name' => 'Nagano',
            ),
            444 => 
            array (
                'id' => 1945,
                'country_id' => 109,
                'name' => 'Nagasaki',
            ),
            445 => 
            array (
                'id' => 1946,
                'country_id' => 109,
                'name' => 'Nara',
            ),
            446 => 
            array (
                'id' => 1947,
                'country_id' => 109,
                'name' => 'Niigata',
            ),
            447 => 
            array (
                'id' => 1948,
                'country_id' => 109,
                'name' => 'Oita',
            ),
            448 => 
            array (
                'id' => 1949,
                'country_id' => 109,
                'name' => 'Okayama',
            ),
            449 => 
            array (
                'id' => 1950,
                'country_id' => 109,
                'name' => 'Okinawa',
            ),
            450 => 
            array (
                'id' => 1951,
                'country_id' => 109,
                'name' => 'Osaka',
            ),
            451 => 
            array (
                'id' => 1952,
                'country_id' => 109,
                'name' => 'Saga',
            ),
            452 => 
            array (
                'id' => 1953,
                'country_id' => 109,
                'name' => 'Saitama',
            ),
            453 => 
            array (
                'id' => 1954,
                'country_id' => 109,
                'name' => 'Shiga',
            ),
            454 => 
            array (
                'id' => 1955,
                'country_id' => 109,
                'name' => 'Shimane',
            ),
            455 => 
            array (
                'id' => 1956,
                'country_id' => 109,
                'name' => 'Shizuoka',
            ),
            456 => 
            array (
                'id' => 1957,
                'country_id' => 109,
                'name' => 'Tochigi',
            ),
            457 => 
            array (
                'id' => 1958,
                'country_id' => 109,
                'name' => 'Tokushima',
            ),
            458 => 
            array (
                'id' => 1959,
                'country_id' => 109,
                'name' => 'Tokyo',
            ),
            459 => 
            array (
                'id' => 1960,
                'country_id' => 109,
                'name' => 'Tottori',
            ),
            460 => 
            array (
                'id' => 1961,
                'country_id' => 109,
                'name' => 'Toyama',
            ),
            461 => 
            array (
                'id' => 1962,
                'country_id' => 109,
                'name' => 'Wakayama',
            ),
            462 => 
            array (
                'id' => 1963,
                'country_id' => 109,
                'name' => 'Yamagata',
            ),
            463 => 
            array (
                'id' => 1964,
                'country_id' => 109,
                'name' => 'Yamaguchi',
            ),
            464 => 
            array (
                'id' => 1965,
                'country_id' => 109,
                'name' => 'Yamanashi',
            ),
            465 => 
            array (
                'id' => 1966,
                'country_id' => 110,
                'name' => 'Grouville',
            ),
            466 => 
            array (
                'id' => 1967,
                'country_id' => 110,
                'name' => 'Saint Brelade',
            ),
            467 => 
            array (
                'id' => 1968,
                'country_id' => 110,
                'name' => 'Saint Clement',
            ),
            468 => 
            array (
                'id' => 1969,
                'country_id' => 110,
                'name' => 'Saint Helier',
            ),
            469 => 
            array (
                'id' => 1970,
                'country_id' => 110,
                'name' => 'Saint Joh',
            ),
            470 => 
            array (
                'id' => 1971,
                'country_id' => 110,
                'name' => 'Saint Lawrence',
            ),
            471 => 
            array (
                'id' => 1972,
                'country_id' => 110,
                'name' => 'Saint Marti',
            ),
            472 => 
            array (
                'id' => 1973,
                'country_id' => 110,
                'name' => 'Saint Mary',
            ),
            473 => 
            array (
                'id' => 1974,
                'country_id' => 110,
                'name' => 'Saint Peter',
            ),
            474 => 
            array (
                'id' => 1975,
                'country_id' => 110,
                'name' => 'Saint Saviour',
            ),
            475 => 
            array (
                'id' => 1976,
                'country_id' => 110,
                'name' => 'Trinity',
            ),
            476 => 
            array (
                'id' => 1977,
                'country_id' => 111,
                'name' => '\'Ajlu',
            ),
            477 => 
            array (
                'id' => 1978,
                'country_id' => 111,
                'name' => 'Amma',
            ),
            478 => 
            array (
                'id' => 1979,
                'country_id' => 111,
                'name' => 'Irbid',
            ),
            479 => 
            array (
                'id' => 1980,
                'country_id' => 111,
                'name' => 'Jarash',
            ),
            480 => 
            array (
                'id' => 1981,
                'country_id' => 111,
                'name' => 'Ma\'a',
            ),
            481 => 
            array (
                'id' => 1982,
                'country_id' => 111,
                'name' => 'Madaba',
            ),
            482 => 
            array (
                'id' => 1983,
                'country_id' => 111,
                'name' => 'al-\'Aqabah',
            ),
            483 => 
            array (
                'id' => 1984,
                'country_id' => 111,
                'name' => 'al-Balqa\'',
            ),
            484 => 
            array (
                'id' => 1985,
                'country_id' => 111,
                'name' => 'al-Karak',
            ),
            485 => 
            array (
                'id' => 1986,
                'country_id' => 111,
                'name' => 'al-Mafraq',
            ),
            486 => 
            array (
                'id' => 1987,
                'country_id' => 111,
                'name' => 'at-Tafilah',
            ),
            487 => 
            array (
                'id' => 1988,
                'country_id' => 111,
                'name' => 'az-Zarqa\'',
            ),
            488 => 
            array (
                'id' => 1989,
                'country_id' => 112,
                'name' => 'Akmecet',
            ),
            489 => 
            array (
                'id' => 1990,
                'country_id' => 112,
                'name' => 'Akmola',
            ),
            490 => 
            array (
                'id' => 1991,
                'country_id' => 112,
                'name' => 'Aktobe',
            ),
            491 => 
            array (
                'id' => 1992,
                'country_id' => 112,
                'name' => 'Almati',
            ),
            492 => 
            array (
                'id' => 1993,
                'country_id' => 112,
                'name' => 'Atirau',
            ),
            493 => 
            array (
                'id' => 1994,
                'country_id' => 112,
                'name' => 'Batis Kazaksta',
            ),
            494 => 
            array (
                'id' => 1995,
                'country_id' => 112,
                'name' => 'Burlinsky Regio',
            ),
            495 => 
            array (
                'id' => 1996,
                'country_id' => 112,
                'name' => 'Karagandi',
            ),
            496 => 
            array (
                'id' => 1997,
                'country_id' => 112,
                'name' => 'Kostanay',
            ),
            497 => 
            array (
                'id' => 1998,
                'country_id' => 112,
                'name' => 'Mankistau',
            ),
            498 => 
            array (
                'id' => 1999,
                'country_id' => 112,
                'name' => 'Ontustik Kazaksta',
            ),
            499 => 
            array (
                'id' => 2000,
                'country_id' => 112,
                'name' => 'Pavlodar',
            ),
        ));
        \DB::table('tbl_states')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'country_id' => 112,
                'name' => 'Sigis Kazaksta',
            ),
            1 => 
            array (
                'id' => 2002,
                'country_id' => 112,
                'name' => 'Soltustik Kazaksta',
            ),
            2 => 
            array (
                'id' => 2003,
                'country_id' => 112,
                'name' => 'Taraz',
            ),
            3 => 
            array (
                'id' => 2004,
                'country_id' => 113,
                'name' => 'Central',
            ),
            4 => 
            array (
                'id' => 2005,
                'country_id' => 113,
                'name' => 'Coast',
            ),
            5 => 
            array (
                'id' => 2006,
                'country_id' => 113,
                'name' => 'Easter',
            ),
            6 => 
            array (
                'id' => 2007,
                'country_id' => 113,
                'name' => 'Nairobi',
            ),
            7 => 
            array (
                'id' => 2008,
                'country_id' => 113,
                'name' => 'North Easter',
            ),
            8 => 
            array (
                'id' => 2009,
                'country_id' => 113,
                'name' => 'Nyanza',
            ),
            9 => 
            array (
                'id' => 2010,
                'country_id' => 113,
                'name' => 'Rift Valley',
            ),
            10 => 
            array (
                'id' => 2011,
                'country_id' => 113,
                'name' => 'Wester',
            ),
            11 => 
            array (
                'id' => 2012,
                'country_id' => 114,
                'name' => 'Abaiang',
            ),
            12 => 
            array (
                'id' => 2013,
                'country_id' => 114,
                'name' => 'Abemana',
            ),
            13 => 
            array (
                'id' => 2014,
                'country_id' => 114,
                'name' => 'Aranuka',
            ),
            14 => 
            array (
                'id' => 2015,
                'country_id' => 114,
                'name' => 'Arorae',
            ),
            15 => 
            array (
                'id' => 2016,
                'country_id' => 114,
                'name' => 'Banaba',
            ),
            16 => 
            array (
                'id' => 2017,
                'country_id' => 114,
                'name' => 'Beru',
            ),
            17 => 
            array (
                'id' => 2018,
                'country_id' => 114,
                'name' => 'Butaritari',
            ),
            18 => 
            array (
                'id' => 2019,
                'country_id' => 114,
                'name' => 'Kiritimati',
            ),
            19 => 
            array (
                'id' => 2020,
                'country_id' => 114,
                'name' => 'Kuria',
            ),
            20 => 
            array (
                'id' => 2021,
                'country_id' => 114,
                'name' => 'Maiana',
            ),
            21 => 
            array (
                'id' => 2022,
                'country_id' => 114,
                'name' => 'Maki',
            ),
            22 => 
            array (
                'id' => 2023,
                'country_id' => 114,
                'name' => 'Marakei',
            ),
            23 => 
            array (
                'id' => 2024,
                'country_id' => 114,
                'name' => 'Nikunau',
            ),
            24 => 
            array (
                'id' => 2025,
                'country_id' => 114,
                'name' => 'Nonouti',
            ),
            25 => 
            array (
                'id' => 2026,
                'country_id' => 114,
                'name' => 'Onotoa',
            ),
            26 => 
            array (
                'id' => 2027,
                'country_id' => 114,
                'name' => 'Phoenix Islands',
            ),
            27 => 
            array (
                'id' => 2028,
                'country_id' => 114,
                'name' => 'Tabiteuea North',
            ),
            28 => 
            array (
                'id' => 2029,
                'country_id' => 114,
                'name' => 'Tabiteuea South',
            ),
            29 => 
            array (
                'id' => 2030,
                'country_id' => 114,
                'name' => 'Tabuaera',
            ),
            30 => 
            array (
                'id' => 2031,
                'country_id' => 114,
                'name' => 'Tamana',
            ),
            31 => 
            array (
                'id' => 2032,
                'country_id' => 114,
                'name' => 'Tarawa North',
            ),
            32 => 
            array (
                'id' => 2033,
                'country_id' => 114,
                'name' => 'Tarawa South',
            ),
            33 => 
            array (
                'id' => 2034,
                'country_id' => 114,
                'name' => 'Teraina',
            ),
            34 => 
            array (
                'id' => 2035,
                'country_id' => 115,
                'name' => 'Chagangdo',
            ),
            35 => 
            array (
                'id' => 2036,
                'country_id' => 115,
                'name' => 'Hamgyeongbukto',
            ),
            36 => 
            array (
                'id' => 2037,
                'country_id' => 115,
                'name' => 'Hamgyeongnamdo',
            ),
            37 => 
            array (
                'id' => 2038,
                'country_id' => 115,
                'name' => 'Hwanghaebukto',
            ),
            38 => 
            array (
                'id' => 2039,
                'country_id' => 115,
                'name' => 'Hwanghaenamdo',
            ),
            39 => 
            array (
                'id' => 2040,
                'country_id' => 115,
                'name' => 'Kaeseong',
            ),
            40 => 
            array (
                'id' => 2041,
                'country_id' => 115,
                'name' => 'Kangweo',
            ),
            41 => 
            array (
                'id' => 2042,
                'country_id' => 115,
                'name' => 'Nampo',
            ),
            42 => 
            array (
                'id' => 2043,
                'country_id' => 115,
                'name' => 'Pyeonganbukto',
            ),
            43 => 
            array (
                'id' => 2044,
                'country_id' => 115,
                'name' => 'Pyeongannamdo',
            ),
            44 => 
            array (
                'id' => 2045,
                'country_id' => 115,
                'name' => 'Pyeongyang',
            ),
            45 => 
            array (
                'id' => 2046,
                'country_id' => 115,
                'name' => 'Yanggang',
            ),
            46 => 
            array (
                'id' => 2047,
                'country_id' => 116,
                'name' => 'Busa',
            ),
            47 => 
            array (
                'id' => 2048,
                'country_id' => 116,
                'name' => 'Cheju',
            ),
            48 => 
            array (
                'id' => 2049,
                'country_id' => 116,
                'name' => 'Chollabuk',
            ),
            49 => 
            array (
                'id' => 2050,
                'country_id' => 116,
                'name' => 'Chollanam',
            ),
            50 => 
            array (
                'id' => 2051,
                'country_id' => 116,
                'name' => 'Chungbuk',
            ),
            51 => 
            array (
                'id' => 2052,
                'country_id' => 116,
                'name' => 'Chungcheongbuk',
            ),
            52 => 
            array (
                'id' => 2053,
                'country_id' => 116,
                'name' => 'Chungcheongnam',
            ),
            53 => 
            array (
                'id' => 2054,
                'country_id' => 116,
                'name' => 'Chungnam',
            ),
            54 => 
            array (
                'id' => 2055,
                'country_id' => 116,
                'name' => 'Daegu',
            ),
            55 => 
            array (
                'id' => 2056,
                'country_id' => 116,
                'name' => 'Gangwon-do',
            ),
            56 => 
            array (
                'id' => 2057,
                'country_id' => 116,
                'name' => 'Goyang-si',
            ),
            57 => 
            array (
                'id' => 2058,
                'country_id' => 116,
                'name' => 'Gyeonggi-do',
            ),
            58 => 
            array (
                'id' => 2059,
                'country_id' => 116,
                'name' => 'Gyeongsang ',
            ),
            59 => 
            array (
                'id' => 2060,
                'country_id' => 116,
                'name' => 'Gyeongsangnam-do',
            ),
            60 => 
            array (
                'id' => 2061,
                'country_id' => 116,
                'name' => 'Incheo',
            ),
            61 => 
            array (
                'id' => 2062,
                'country_id' => 116,
                'name' => 'Jeju-Si',
            ),
            62 => 
            array (
                'id' => 2063,
                'country_id' => 116,
                'name' => 'Jeonbuk',
            ),
            63 => 
            array (
                'id' => 2064,
                'country_id' => 116,
                'name' => 'Kangweo',
            ),
            64 => 
            array (
                'id' => 2065,
                'country_id' => 116,
                'name' => 'Kwangju',
            ),
            65 => 
            array (
                'id' => 2066,
                'country_id' => 116,
                'name' => 'Kyeonggi',
            ),
            66 => 
            array (
                'id' => 2067,
                'country_id' => 116,
                'name' => 'Kyeongsangbuk',
            ),
            67 => 
            array (
                'id' => 2068,
                'country_id' => 116,
                'name' => 'Kyeongsangnam',
            ),
            68 => 
            array (
                'id' => 2069,
                'country_id' => 116,
                'name' => 'Kyonggi-do',
            ),
            69 => 
            array (
                'id' => 2070,
                'country_id' => 116,
                'name' => 'Kyungbuk-Do',
            ),
            70 => 
            array (
                'id' => 2071,
                'country_id' => 116,
                'name' => 'Kyunggi-Do',
            ),
            71 => 
            array (
                'id' => 2072,
                'country_id' => 116,
                'name' => 'Kyunggi-do',
            ),
            72 => 
            array (
                'id' => 2073,
                'country_id' => 116,
                'name' => 'Pusa',
            ),
            73 => 
            array (
                'id' => 2074,
                'country_id' => 116,
                'name' => 'Seoul',
            ),
            74 => 
            array (
                'id' => 2075,
                'country_id' => 116,
                'name' => 'Sudogwo',
            ),
            75 => 
            array (
                'id' => 2076,
                'country_id' => 116,
                'name' => 'Taegu',
            ),
            76 => 
            array (
                'id' => 2077,
                'country_id' => 116,
                'name' => 'Taejeo',
            ),
            77 => 
            array (
                'id' => 2078,
                'country_id' => 116,
                'name' => 'Taejon-gwangyoksi',
            ),
            78 => 
            array (
                'id' => 2079,
                'country_id' => 116,
                'name' => 'Ulsa',
            ),
            79 => 
            array (
                'id' => 2080,
                'country_id' => 116,
                'name' => 'Wonju',
            ),
            80 => 
            array (
                'id' => 2081,
                'country_id' => 116,
                'name' => 'gwangyoksi',
            ),
            81 => 
            array (
                'id' => 2082,
                'country_id' => 117,
                'name' => 'Al Asimah',
            ),
            82 => 
            array (
                'id' => 2083,
                'country_id' => 117,
                'name' => 'Hawalli',
            ),
            83 => 
            array (
                'id' => 2084,
                'country_id' => 117,
                'name' => 'Mishref',
            ),
            84 => 
            array (
                'id' => 2085,
                'country_id' => 117,
                'name' => 'Qadesiya',
            ),
            85 => 
            array (
                'id' => 2086,
                'country_id' => 117,
                'name' => 'Safat',
            ),
            86 => 
            array (
                'id' => 2087,
                'country_id' => 117,
                'name' => 'Salmiya',
            ),
            87 => 
            array (
                'id' => 2088,
                'country_id' => 117,
                'name' => 'al-Ahmadi',
            ),
            88 => 
            array (
                'id' => 2089,
                'country_id' => 117,
                'name' => 'al-Farwaniyah',
            ),
            89 => 
            array (
                'id' => 2090,
                'country_id' => 117,
                'name' => 'al-Jahra',
            ),
            90 => 
            array (
                'id' => 2091,
                'country_id' => 117,
                'name' => 'al-Kuwayt',
            ),
            91 => 
            array (
                'id' => 2092,
                'country_id' => 118,
                'name' => 'Batke',
            ),
            92 => 
            array (
                'id' => 2093,
                'country_id' => 118,
                'name' => 'Bishkek',
            ),
            93 => 
            array (
                'id' => 2094,
                'country_id' => 118,
                'name' => 'Chui',
            ),
            94 => 
            array (
                'id' => 2095,
                'country_id' => 118,
                'name' => 'Issyk-Kul',
            ),
            95 => 
            array (
                'id' => 2096,
                'country_id' => 118,
                'name' => 'Jalal-Abad',
            ),
            96 => 
            array (
                'id' => 2097,
                'country_id' => 118,
                'name' => 'Nary',
            ),
            97 => 
            array (
                'id' => 2098,
                'country_id' => 118,
                'name' => 'Osh',
            ),
            98 => 
            array (
                'id' => 2099,
                'country_id' => 118,
                'name' => 'Talas',
            ),
            99 => 
            array (
                'id' => 2100,
                'country_id' => 119,
                'name' => 'Attopu',
            ),
            100 => 
            array (
                'id' => 2101,
                'country_id' => 119,
                'name' => 'Bokeo',
            ),
            101 => 
            array (
                'id' => 2102,
                'country_id' => 119,
                'name' => 'Bolikhamsay',
            ),
            102 => 
            array (
                'id' => 2103,
                'country_id' => 119,
                'name' => 'Champasak',
            ),
            103 => 
            array (
                'id' => 2104,
                'country_id' => 119,
                'name' => 'Houaphanh',
            ),
            104 => 
            array (
                'id' => 2105,
                'country_id' => 119,
                'name' => 'Khammouane',
            ),
            105 => 
            array (
                'id' => 2106,
                'country_id' => 119,
                'name' => 'Luang Nam Tha',
            ),
            106 => 
            array (
                'id' => 2107,
                'country_id' => 119,
                'name' => 'Luang Prabang',
            ),
            107 => 
            array (
                'id' => 2108,
                'country_id' => 119,
                'name' => 'Oudomxay',
            ),
            108 => 
            array (
                'id' => 2109,
                'country_id' => 119,
                'name' => 'Phongsaly',
            ),
            109 => 
            array (
                'id' => 2110,
                'country_id' => 119,
                'name' => 'Sarava',
            ),
            110 => 
            array (
                'id' => 2111,
                'country_id' => 119,
                'name' => 'Savannakhet',
            ),
            111 => 
            array (
                'id' => 2112,
                'country_id' => 119,
                'name' => 'Sekong',
            ),
            112 => 
            array (
                'id' => 2113,
                'country_id' => 119,
                'name' => 'Viangchan Prefecture',
            ),
            113 => 
            array (
                'id' => 2114,
                'country_id' => 119,
                'name' => 'Viangchan Province',
            ),
            114 => 
            array (
                'id' => 2115,
                'country_id' => 119,
                'name' => 'Xaignabury',
            ),
            115 => 
            array (
                'id' => 2116,
                'country_id' => 119,
                'name' => 'Xiang Khuang',
            ),
            116 => 
            array (
                'id' => 2117,
                'country_id' => 120,
                'name' => 'Aizkraukles',
            ),
            117 => 
            array (
                'id' => 2118,
                'country_id' => 120,
                'name' => 'Aluksnes',
            ),
            118 => 
            array (
                'id' => 2119,
                'country_id' => 120,
                'name' => 'Balvu',
            ),
            119 => 
            array (
                'id' => 2120,
                'country_id' => 120,
                'name' => 'Bauskas',
            ),
            120 => 
            array (
                'id' => 2121,
                'country_id' => 120,
                'name' => 'Cesu',
            ),
            121 => 
            array (
                'id' => 2122,
                'country_id' => 120,
                'name' => 'Daugavpils',
            ),
            122 => 
            array (
                'id' => 2123,
                'country_id' => 120,
                'name' => 'Daugavpils City',
            ),
            123 => 
            array (
                'id' => 2124,
                'country_id' => 120,
                'name' => 'Dobeles',
            ),
            124 => 
            array (
                'id' => 2125,
                'country_id' => 120,
                'name' => 'Gulbenes',
            ),
            125 => 
            array (
                'id' => 2126,
                'country_id' => 120,
                'name' => 'Jekabspils',
            ),
            126 => 
            array (
                'id' => 2127,
                'country_id' => 120,
                'name' => 'Jelgava',
            ),
            127 => 
            array (
                'id' => 2128,
                'country_id' => 120,
                'name' => 'Jelgavas',
            ),
            128 => 
            array (
                'id' => 2129,
                'country_id' => 120,
                'name' => 'Jurmala City',
            ),
            129 => 
            array (
                'id' => 2130,
                'country_id' => 120,
                'name' => 'Kraslavas',
            ),
            130 => 
            array (
                'id' => 2131,
                'country_id' => 120,
                'name' => 'Kuldigas',
            ),
            131 => 
            array (
                'id' => 2132,
                'country_id' => 120,
                'name' => 'Liepaja',
            ),
            132 => 
            array (
                'id' => 2133,
                'country_id' => 120,
                'name' => 'Liepajas',
            ),
            133 => 
            array (
                'id' => 2134,
                'country_id' => 120,
                'name' => 'Limbazhu',
            ),
            134 => 
            array (
                'id' => 2135,
                'country_id' => 120,
                'name' => 'Ludzas',
            ),
            135 => 
            array (
                'id' => 2136,
                'country_id' => 120,
                'name' => 'Madonas',
            ),
            136 => 
            array (
                'id' => 2137,
                'country_id' => 120,
                'name' => 'Ogres',
            ),
            137 => 
            array (
                'id' => 2138,
                'country_id' => 120,
                'name' => 'Preilu',
            ),
            138 => 
            array (
                'id' => 2139,
                'country_id' => 120,
                'name' => 'Rezekne',
            ),
            139 => 
            array (
                'id' => 2140,
                'country_id' => 120,
                'name' => 'Rezeknes',
            ),
            140 => 
            array (
                'id' => 2141,
                'country_id' => 120,
                'name' => 'Riga',
            ),
            141 => 
            array (
                'id' => 2142,
                'country_id' => 120,
                'name' => 'Rigas',
            ),
            142 => 
            array (
                'id' => 2143,
                'country_id' => 120,
                'name' => 'Saldus',
            ),
            143 => 
            array (
                'id' => 2144,
                'country_id' => 120,
                'name' => 'Talsu',
            ),
            144 => 
            array (
                'id' => 2145,
                'country_id' => 120,
                'name' => 'Tukuma',
            ),
            145 => 
            array (
                'id' => 2146,
                'country_id' => 120,
                'name' => 'Valkas',
            ),
            146 => 
            array (
                'id' => 2147,
                'country_id' => 120,
                'name' => 'Valmieras',
            ),
            147 => 
            array (
                'id' => 2148,
                'country_id' => 120,
                'name' => 'Ventspils',
            ),
            148 => 
            array (
                'id' => 2149,
                'country_id' => 120,
                'name' => 'Ventspils City',
            ),
            149 => 
            array (
                'id' => 2150,
                'country_id' => 121,
                'name' => 'Beirut',
            ),
            150 => 
            array (
                'id' => 2151,
                'country_id' => 121,
                'name' => 'Jabal Lubna',
            ),
            151 => 
            array (
                'id' => 2152,
                'country_id' => 121,
                'name' => 'Mohafazat Liban-Nord',
            ),
            152 => 
            array (
                'id' => 2153,
                'country_id' => 121,
                'name' => 'Mohafazat Mont-Liba',
            ),
            153 => 
            array (
                'id' => 2154,
                'country_id' => 121,
                'name' => 'Sido',
            ),
            154 => 
            array (
                'id' => 2155,
                'country_id' => 121,
                'name' => 'al-Biqa',
            ),
            155 => 
            array (
                'id' => 2156,
                'country_id' => 121,
                'name' => 'al-Janub',
            ),
            156 => 
            array (
                'id' => 2157,
                'country_id' => 121,
                'name' => 'an-Nabatiyah',
            ),
            157 => 
            array (
                'id' => 2158,
                'country_id' => 121,
                'name' => 'ash-Shamal',
            ),
            158 => 
            array (
                'id' => 2159,
                'country_id' => 122,
                'name' => 'Berea',
            ),
            159 => 
            array (
                'id' => 2160,
                'country_id' => 122,
                'name' => 'Butha-Buthe',
            ),
            160 => 
            array (
                'id' => 2161,
                'country_id' => 122,
                'name' => 'Leribe',
            ),
            161 => 
            array (
                'id' => 2162,
                'country_id' => 122,
                'name' => 'Mafeteng',
            ),
            162 => 
            array (
                'id' => 2163,
                'country_id' => 122,
                'name' => 'Maseru',
            ),
            163 => 
            array (
                'id' => 2164,
                'country_id' => 122,
                'name' => 'Mohale\'s Hoek',
            ),
            164 => 
            array (
                'id' => 2165,
                'country_id' => 122,
                'name' => 'Mokhotlong',
            ),
            165 => 
            array (
                'id' => 2166,
                'country_id' => 122,
                'name' => 'Qacha\'s Nek',
            ),
            166 => 
            array (
                'id' => 2167,
                'country_id' => 122,
                'name' => 'Quthing',
            ),
            167 => 
            array (
                'id' => 2168,
                'country_id' => 122,
                'name' => 'Thaba-Tseka',
            ),
            168 => 
            array (
                'id' => 2169,
                'country_id' => 123,
                'name' => 'Bomi',
            ),
            169 => 
            array (
                'id' => 2170,
                'country_id' => 123,
                'name' => 'Bong',
            ),
            170 => 
            array (
                'id' => 2171,
                'country_id' => 123,
                'name' => 'Grand Bassa',
            ),
            171 => 
            array (
                'id' => 2172,
                'country_id' => 123,
                'name' => 'Grand Cape Mount',
            ),
            172 => 
            array (
                'id' => 2173,
                'country_id' => 123,
                'name' => 'Grand Gedeh',
            ),
            173 => 
            array (
                'id' => 2174,
                'country_id' => 123,
                'name' => 'Loffa',
            ),
            174 => 
            array (
                'id' => 2175,
                'country_id' => 123,
                'name' => 'Margibi',
            ),
            175 => 
            array (
                'id' => 2176,
                'country_id' => 123,
                'name' => 'Maryland and Grand Kru',
            ),
            176 => 
            array (
                'id' => 2177,
                'country_id' => 123,
                'name' => 'Montserrado',
            ),
            177 => 
            array (
                'id' => 2178,
                'country_id' => 123,
                'name' => 'Nimba',
            ),
            178 => 
            array (
                'id' => 2179,
                'country_id' => 123,
                'name' => 'Rivercess',
            ),
            179 => 
            array (
                'id' => 2180,
                'country_id' => 123,
                'name' => 'Sinoe',
            ),
            180 => 
            array (
                'id' => 2181,
                'country_id' => 124,
                'name' => 'Ajdabiya',
            ),
            181 => 
            array (
                'id' => 2183,
                'country_id' => 124,
                'name' => 'Banghazi',
            ),
            182 => 
            array (
                'id' => 2184,
                'country_id' => 124,
                'name' => 'Darnah',
            ),
            183 => 
            array (
                'id' => 2185,
                'country_id' => 124,
                'name' => 'Ghadamis',
            ),
            184 => 
            array (
                'id' => 2186,
                'country_id' => 124,
                'name' => 'Gharya',
            ),
            185 => 
            array (
                'id' => 2187,
                'country_id' => 124,
                'name' => 'Misratah',
            ),
            186 => 
            array (
                'id' => 2188,
                'country_id' => 124,
                'name' => 'Murzuq',
            ),
            187 => 
            array (
                'id' => 2189,
                'country_id' => 124,
                'name' => 'Sabha',
            ),
            188 => 
            array (
                'id' => 2190,
                'country_id' => 124,
                'name' => 'Sawfajji',
            ),
            189 => 
            array (
                'id' => 2191,
                'country_id' => 124,
                'name' => 'Surt',
            ),
            190 => 
            array (
                'id' => 2192,
                'country_id' => 124,
                'name' => 'Tarabulus',
            ),
            191 => 
            array (
                'id' => 2193,
                'country_id' => 124,
                'name' => 'Tarhunah',
            ),
            192 => 
            array (
                'id' => 2194,
                'country_id' => 124,
                'name' => 'Tripolitania',
            ),
            193 => 
            array (
                'id' => 2195,
                'country_id' => 124,
                'name' => 'Tubruq',
            ),
            194 => 
            array (
                'id' => 2196,
                'country_id' => 124,
                'name' => 'Yafra',
            ),
            195 => 
            array (
                'id' => 2197,
                'country_id' => 124,
                'name' => 'Zlita',
            ),
            196 => 
            array (
                'id' => 2198,
                'country_id' => 124,
                'name' => 'al-\'Aziziyah',
            ),
            197 => 
            array (
                'id' => 2199,
                'country_id' => 124,
                'name' => 'al-Fatih',
            ),
            198 => 
            array (
                'id' => 2200,
                'country_id' => 124,
                'name' => 'al-Jabal al Akhdar',
            ),
            199 => 
            array (
                'id' => 2201,
                'country_id' => 124,
                'name' => 'al-Jufrah',
            ),
            200 => 
            array (
                'id' => 2202,
                'country_id' => 124,
                'name' => 'al-Khums',
            ),
            201 => 
            array (
                'id' => 2203,
                'country_id' => 124,
                'name' => 'al-Kufrah',
            ),
            202 => 
            array (
                'id' => 2204,
                'country_id' => 124,
                'name' => 'an-Nuqat al-Khams',
            ),
            203 => 
            array (
                'id' => 2205,
                'country_id' => 124,
                'name' => 'ash-Shati\'',
            ),
            204 => 
            array (
                'id' => 2206,
                'country_id' => 124,
                'name' => 'az-Zawiyah',
            ),
            205 => 
            array (
                'id' => 2207,
                'country_id' => 125,
                'name' => 'Balzers',
            ),
            206 => 
            array (
                'id' => 2208,
                'country_id' => 125,
                'name' => 'Esche',
            ),
            207 => 
            array (
                'id' => 2209,
                'country_id' => 125,
                'name' => 'Gampri',
            ),
            208 => 
            array (
                'id' => 2210,
                'country_id' => 125,
                'name' => 'Maure',
            ),
            209 => 
            array (
                'id' => 2211,
                'country_id' => 125,
                'name' => 'Planke',
            ),
            210 => 
            array (
                'id' => 2212,
                'country_id' => 125,
                'name' => 'Ruggell',
            ),
            211 => 
            array (
                'id' => 2213,
                'country_id' => 125,
                'name' => 'Schaa',
            ),
            212 => 
            array (
                'id' => 2214,
                'country_id' => 125,
                'name' => 'Schellenberg',
            ),
            213 => 
            array (
                'id' => 2215,
                'country_id' => 125,
                'name' => 'Triese',
            ),
            214 => 
            array (
                'id' => 2216,
                'country_id' => 125,
                'name' => 'Triesenberg',
            ),
            215 => 
            array (
                'id' => 2217,
                'country_id' => 125,
                'name' => 'Vaduz',
            ),
            216 => 
            array (
                'id' => 2218,
                'country_id' => 126,
                'name' => 'Alytaus',
            ),
            217 => 
            array (
                'id' => 2219,
                'country_id' => 126,
                'name' => 'Anyksciai',
            ),
            218 => 
            array (
                'id' => 2220,
                'country_id' => 126,
                'name' => 'Kauno',
            ),
            219 => 
            array (
                'id' => 2221,
                'country_id' => 126,
                'name' => 'Klaipedos',
            ),
            220 => 
            array (
                'id' => 2222,
                'country_id' => 126,
                'name' => 'Marijampoles',
            ),
            221 => 
            array (
                'id' => 2223,
                'country_id' => 126,
                'name' => 'Panevezhio',
            ),
            222 => 
            array (
                'id' => 2224,
                'country_id' => 126,
                'name' => 'Panevezys',
            ),
            223 => 
            array (
                'id' => 2225,
                'country_id' => 126,
                'name' => 'Shiauliu',
            ),
            224 => 
            array (
                'id' => 2226,
                'country_id' => 126,
                'name' => 'Taurages',
            ),
            225 => 
            array (
                'id' => 2227,
                'country_id' => 126,
                'name' => 'Telshiu',
            ),
            226 => 
            array (
                'id' => 2228,
                'country_id' => 126,
                'name' => 'Telsiai',
            ),
            227 => 
            array (
                'id' => 2229,
                'country_id' => 126,
                'name' => 'Utenos',
            ),
            228 => 
            array (
                'id' => 2230,
                'country_id' => 126,
                'name' => 'Vilniaus',
            ),
            229 => 
            array (
                'id' => 2231,
                'country_id' => 127,
                'name' => 'Capelle',
            ),
            230 => 
            array (
                'id' => 2232,
                'country_id' => 127,
                'name' => 'Clervaux',
            ),
            231 => 
            array (
                'id' => 2233,
                'country_id' => 127,
                'name' => 'Diekirch',
            ),
            232 => 
            array (
                'id' => 2234,
                'country_id' => 127,
                'name' => 'Echternach',
            ),
            233 => 
            array (
                'id' => 2235,
                'country_id' => 127,
                'name' => 'Esch-sur-Alzette',
            ),
            234 => 
            array (
                'id' => 2236,
                'country_id' => 127,
                'name' => 'Grevenmacher',
            ),
            235 => 
            array (
                'id' => 2237,
                'country_id' => 127,
                'name' => 'Luxembourg',
            ),
            236 => 
            array (
                'id' => 2238,
                'country_id' => 127,
                'name' => 'Mersch',
            ),
            237 => 
            array (
                'id' => 2239,
                'country_id' => 127,
                'name' => 'Redange',
            ),
            238 => 
            array (
                'id' => 2240,
                'country_id' => 127,
                'name' => 'Remich',
            ),
            239 => 
            array (
                'id' => 2241,
                'country_id' => 127,
                'name' => 'Viande',
            ),
            240 => 
            array (
                'id' => 2242,
                'country_id' => 127,
                'name' => 'Wiltz',
            ),
            241 => 
            array (
                'id' => 2243,
                'country_id' => 128,
                'name' => 'Macau',
            ),
            242 => 
            array (
                'id' => 2244,
                'country_id' => 129,
                'name' => 'Berovo',
            ),
            243 => 
            array (
                'id' => 2245,
                'country_id' => 129,
                'name' => 'Bitola',
            ),
            244 => 
            array (
                'id' => 2246,
                'country_id' => 129,
                'name' => 'Brod',
            ),
            245 => 
            array (
                'id' => 2247,
                'country_id' => 129,
                'name' => 'Debar',
            ),
            246 => 
            array (
                'id' => 2248,
                'country_id' => 129,
                'name' => 'Delchevo',
            ),
            247 => 
            array (
                'id' => 2249,
                'country_id' => 129,
                'name' => 'Demir Hisar',
            ),
            248 => 
            array (
                'id' => 2250,
                'country_id' => 129,
                'name' => 'Gevgelija',
            ),
            249 => 
            array (
                'id' => 2251,
                'country_id' => 129,
                'name' => 'Gostivar',
            ),
            250 => 
            array (
                'id' => 2252,
                'country_id' => 129,
                'name' => 'Kavadarci',
            ),
            251 => 
            array (
                'id' => 2253,
                'country_id' => 129,
                'name' => 'Kichevo',
            ),
            252 => 
            array (
                'id' => 2254,
                'country_id' => 129,
                'name' => 'Kochani',
            ),
            253 => 
            array (
                'id' => 2255,
                'country_id' => 129,
                'name' => 'Kratovo',
            ),
            254 => 
            array (
                'id' => 2256,
                'country_id' => 129,
                'name' => 'Kriva Palanka',
            ),
            255 => 
            array (
                'id' => 2257,
                'country_id' => 129,
                'name' => 'Krushevo',
            ),
            256 => 
            array (
                'id' => 2258,
                'country_id' => 129,
                'name' => 'Kumanovo',
            ),
            257 => 
            array (
                'id' => 2259,
                'country_id' => 129,
                'name' => 'Negotino',
            ),
            258 => 
            array (
                'id' => 2260,
                'country_id' => 129,
                'name' => 'Ohrid',
            ),
            259 => 
            array (
                'id' => 2261,
                'country_id' => 129,
                'name' => 'Prilep',
            ),
            260 => 
            array (
                'id' => 2262,
                'country_id' => 129,
                'name' => 'Probishtip',
            ),
            261 => 
            array (
                'id' => 2263,
                'country_id' => 129,
                'name' => 'Radovish',
            ),
            262 => 
            array (
                'id' => 2264,
                'country_id' => 129,
                'name' => 'Rese',
            ),
            263 => 
            array (
                'id' => 2265,
                'country_id' => 129,
                'name' => 'Shtip',
            ),
            264 => 
            array (
                'id' => 2266,
                'country_id' => 129,
                'name' => 'Skopje',
            ),
            265 => 
            array (
                'id' => 2267,
                'country_id' => 129,
                'name' => 'Struga',
            ),
            266 => 
            array (
                'id' => 2268,
                'country_id' => 129,
                'name' => 'Strumica',
            ),
            267 => 
            array (
                'id' => 2269,
                'country_id' => 129,
                'name' => 'Sveti Nikole',
            ),
            268 => 
            array (
                'id' => 2270,
                'country_id' => 129,
                'name' => 'Tetovo',
            ),
            269 => 
            array (
                'id' => 2271,
                'country_id' => 129,
                'name' => 'Valandovo',
            ),
            270 => 
            array (
                'id' => 2272,
                'country_id' => 129,
                'name' => 'Veles',
            ),
            271 => 
            array (
                'id' => 2273,
                'country_id' => 129,
                'name' => 'Vinica',
            ),
            272 => 
            array (
                'id' => 2274,
                'country_id' => 130,
                'name' => 'Antananarivo',
            ),
            273 => 
            array (
                'id' => 2275,
                'country_id' => 130,
                'name' => 'Antsiranana',
            ),
            274 => 
            array (
                'id' => 2276,
                'country_id' => 130,
                'name' => 'Fianarantsoa',
            ),
            275 => 
            array (
                'id' => 2277,
                'country_id' => 130,
                'name' => 'Mahajanga',
            ),
            276 => 
            array (
                'id' => 2278,
                'country_id' => 130,
                'name' => 'Toamasina',
            ),
            277 => 
            array (
                'id' => 2279,
                'country_id' => 130,
                'name' => 'Toliary',
            ),
            278 => 
            array (
                'id' => 2280,
                'country_id' => 131,
                'name' => 'Balaka',
            ),
            279 => 
            array (
                'id' => 2281,
                'country_id' => 131,
                'name' => 'Blantyre City',
            ),
            280 => 
            array (
                'id' => 2282,
                'country_id' => 131,
                'name' => 'Chikwawa',
            ),
            281 => 
            array (
                'id' => 2283,
                'country_id' => 131,
                'name' => 'Chiradzulu',
            ),
            282 => 
            array (
                'id' => 2284,
                'country_id' => 131,
                'name' => 'Chitipa',
            ),
            283 => 
            array (
                'id' => 2285,
                'country_id' => 131,
                'name' => 'Dedza',
            ),
            284 => 
            array (
                'id' => 2286,
                'country_id' => 131,
                'name' => 'Dowa',
            ),
            285 => 
            array (
                'id' => 2287,
                'country_id' => 131,
                'name' => 'Karonga',
            ),
            286 => 
            array (
                'id' => 2288,
                'country_id' => 131,
                'name' => 'Kasungu',
            ),
            287 => 
            array (
                'id' => 2289,
                'country_id' => 131,
                'name' => 'Lilongwe City',
            ),
            288 => 
            array (
                'id' => 2290,
                'country_id' => 131,
                'name' => 'Machinga',
            ),
            289 => 
            array (
                'id' => 2291,
                'country_id' => 131,
                'name' => 'Mangochi',
            ),
            290 => 
            array (
                'id' => 2292,
                'country_id' => 131,
                'name' => 'Mchinji',
            ),
            291 => 
            array (
                'id' => 2293,
                'country_id' => 131,
                'name' => 'Mulanje',
            ),
            292 => 
            array (
                'id' => 2294,
                'country_id' => 131,
                'name' => 'Mwanza',
            ),
            293 => 
            array (
                'id' => 2295,
                'country_id' => 131,
                'name' => 'Mzimba',
            ),
            294 => 
            array (
                'id' => 2296,
                'country_id' => 131,
                'name' => 'Mzuzu City',
            ),
            295 => 
            array (
                'id' => 2297,
                'country_id' => 131,
                'name' => 'Nkhata Bay',
            ),
            296 => 
            array (
                'id' => 2298,
                'country_id' => 131,
                'name' => 'Nkhotakota',
            ),
            297 => 
            array (
                'id' => 2299,
                'country_id' => 131,
                'name' => 'Nsanje',
            ),
            298 => 
            array (
                'id' => 2300,
                'country_id' => 131,
                'name' => 'Ntcheu',
            ),
            299 => 
            array (
                'id' => 2301,
                'country_id' => 131,
                'name' => 'Ntchisi',
            ),
            300 => 
            array (
                'id' => 2302,
                'country_id' => 131,
                'name' => 'Phalombe',
            ),
            301 => 
            array (
                'id' => 2303,
                'country_id' => 131,
                'name' => 'Rumphi',
            ),
            302 => 
            array (
                'id' => 2304,
                'country_id' => 131,
                'name' => 'Salima',
            ),
            303 => 
            array (
                'id' => 2305,
                'country_id' => 131,
                'name' => 'Thyolo',
            ),
            304 => 
            array (
                'id' => 2306,
                'country_id' => 131,
                'name' => 'Zomba Municipality',
            ),
            305 => 
            array (
                'id' => 2307,
                'country_id' => 132,
                'name' => 'Johor',
            ),
            306 => 
            array (
                'id' => 2308,
                'country_id' => 132,
                'name' => 'Kedah',
            ),
            307 => 
            array (
                'id' => 2309,
                'country_id' => 132,
                'name' => 'Kelanta',
            ),
            308 => 
            array (
                'id' => 2310,
                'country_id' => 132,
                'name' => 'Kuala Lumpur',
            ),
            309 => 
            array (
                'id' => 2311,
                'country_id' => 132,
                'name' => 'Labua',
            ),
            310 => 
            array (
                'id' => 2312,
                'country_id' => 132,
                'name' => 'Melaka',
            ),
            311 => 
            array (
                'id' => 2313,
                'country_id' => 132,
                'name' => 'Negeri Johor',
            ),
            312 => 
            array (
                'id' => 2314,
                'country_id' => 132,
                'name' => 'Negeri Sembila',
            ),
            313 => 
            array (
                'id' => 2315,
                'country_id' => 132,
                'name' => 'Pahang',
            ),
            314 => 
            array (
                'id' => 2316,
                'country_id' => 132,
                'name' => 'Penang',
            ),
            315 => 
            array (
                'id' => 2317,
                'country_id' => 132,
                'name' => 'Perak',
            ),
            316 => 
            array (
                'id' => 2318,
                'country_id' => 132,
                'name' => 'Perlis',
            ),
            317 => 
            array (
                'id' => 2319,
                'country_id' => 132,
                'name' => 'Pulau Pinang',
            ),
            318 => 
            array (
                'id' => 2320,
                'country_id' => 132,
                'name' => 'Sabah',
            ),
            319 => 
            array (
                'id' => 2321,
                'country_id' => 132,
                'name' => 'Sarawak',
            ),
            320 => 
            array (
                'id' => 2322,
                'country_id' => 132,
                'name' => 'Selangor',
            ),
            321 => 
            array (
                'id' => 2323,
                'country_id' => 132,
                'name' => 'Sembila',
            ),
            322 => 
            array (
                'id' => 2324,
                'country_id' => 132,
                'name' => 'Terengganu',
            ),
            323 => 
            array (
                'id' => 2325,
                'country_id' => 133,
                'name' => 'Alif Alif',
            ),
            324 => 
            array (
                'id' => 2326,
                'country_id' => 133,
                'name' => 'Alif Dhaal',
            ),
            325 => 
            array (
                'id' => 2327,
                'country_id' => 133,
                'name' => 'Baa',
            ),
            326 => 
            array (
                'id' => 2328,
                'country_id' => 133,
                'name' => 'Dhaal',
            ),
            327 => 
            array (
                'id' => 2329,
                'country_id' => 133,
                'name' => 'Faaf',
            ),
            328 => 
            array (
                'id' => 2330,
                'country_id' => 133,
                'name' => 'Gaaf Alif',
            ),
            329 => 
            array (
                'id' => 2331,
                'country_id' => 133,
                'name' => 'Gaaf Dhaal',
            ),
            330 => 
            array (
                'id' => 2332,
                'country_id' => 133,
                'name' => 'Ghaviyani',
            ),
            331 => 
            array (
                'id' => 2333,
                'country_id' => 133,
                'name' => 'Haa Alif',
            ),
            332 => 
            array (
                'id' => 2334,
                'country_id' => 133,
                'name' => 'Haa Dhaal',
            ),
            333 => 
            array (
                'id' => 2335,
                'country_id' => 133,
                'name' => 'Kaaf',
            ),
            334 => 
            array (
                'id' => 2336,
                'country_id' => 133,
                'name' => 'Laam',
            ),
            335 => 
            array (
                'id' => 2337,
                'country_id' => 133,
                'name' => 'Lhaviyani',
            ),
            336 => 
            array (
                'id' => 2338,
                'country_id' => 133,
                'name' => 'Male',
            ),
            337 => 
            array (
                'id' => 2339,
                'country_id' => 133,
                'name' => 'Miim',
            ),
            338 => 
            array (
                'id' => 2340,
                'country_id' => 133,
                'name' => 'Nuu',
            ),
            339 => 
            array (
                'id' => 2341,
                'country_id' => 133,
                'name' => 'Raa',
            ),
            340 => 
            array (
                'id' => 2342,
                'country_id' => 133,
                'name' => 'Shaviyani',
            ),
            341 => 
            array (
                'id' => 2343,
                'country_id' => 133,
                'name' => 'Sii',
            ),
            342 => 
            array (
                'id' => 2344,
                'country_id' => 133,
                'name' => 'Thaa',
            ),
            343 => 
            array (
                'id' => 2345,
                'country_id' => 133,
                'name' => 'Vaav',
            ),
            344 => 
            array (
                'id' => 2346,
                'country_id' => 134,
                'name' => 'Bamako',
            ),
            345 => 
            array (
                'id' => 2347,
                'country_id' => 134,
                'name' => 'Gao',
            ),
            346 => 
            array (
                'id' => 2348,
                'country_id' => 134,
                'name' => 'Kayes',
            ),
            347 => 
            array (
                'id' => 2349,
                'country_id' => 134,
                'name' => 'Kidal',
            ),
            348 => 
            array (
                'id' => 2350,
                'country_id' => 134,
                'name' => 'Koulikoro',
            ),
            349 => 
            array (
                'id' => 2351,
                'country_id' => 134,
                'name' => 'Mopti',
            ),
            350 => 
            array (
                'id' => 2352,
                'country_id' => 134,
                'name' => 'Segou',
            ),
            351 => 
            array (
                'id' => 2353,
                'country_id' => 134,
                'name' => 'Sikasso',
            ),
            352 => 
            array (
                'id' => 2354,
                'country_id' => 134,
                'name' => 'Tombouctou',
            ),
            353 => 
            array (
                'id' => 2355,
                'country_id' => 135,
                'name' => 'Gozo and Comino',
            ),
            354 => 
            array (
                'id' => 2356,
                'country_id' => 135,
                'name' => 'Inner Harbour',
            ),
            355 => 
            array (
                'id' => 2357,
                'country_id' => 135,
                'name' => 'Norther',
            ),
            356 => 
            array (
                'id' => 2358,
                'country_id' => 135,
                'name' => 'Outer Harbour',
            ),
            357 => 
            array (
                'id' => 2359,
                'country_id' => 135,
                'name' => 'South Easter',
            ),
            358 => 
            array (
                'id' => 2360,
                'country_id' => 135,
                'name' => 'Valletta',
            ),
            359 => 
            array (
                'id' => 2361,
                'country_id' => 135,
                'name' => 'Wester',
            ),
            360 => 
            array (
                'id' => 2362,
                'country_id' => 136,
                'name' => 'Castletow',
            ),
            361 => 
            array (
                'id' => 2363,
                'country_id' => 136,
                'name' => 'Douglas',
            ),
            362 => 
            array (
                'id' => 2364,
                'country_id' => 136,
                'name' => 'Laxey',
            ),
            363 => 
            array (
                'id' => 2365,
                'country_id' => 136,
                'name' => 'Oncha',
            ),
            364 => 
            array (
                'id' => 2366,
                'country_id' => 136,
                'name' => 'Peel',
            ),
            365 => 
            array (
                'id' => 2367,
                'country_id' => 136,
                'name' => 'Port Eri',
            ),
            366 => 
            array (
                'id' => 2368,
                'country_id' => 136,
                'name' => 'Port Saint Mary',
            ),
            367 => 
            array (
                'id' => 2369,
                'country_id' => 136,
                'name' => 'Ramsey',
            ),
            368 => 
            array (
                'id' => 2370,
                'country_id' => 137,
                'name' => 'Ailinlaplap',
            ),
            369 => 
            array (
                'id' => 2371,
                'country_id' => 137,
                'name' => 'Ailuk',
            ),
            370 => 
            array (
                'id' => 2372,
                'country_id' => 137,
                'name' => 'Arno',
            ),
            371 => 
            array (
                'id' => 2373,
                'country_id' => 137,
                'name' => 'Aur',
            ),
            372 => 
            array (
                'id' => 2374,
                'country_id' => 137,
                'name' => 'Bikini',
            ),
            373 => 
            array (
                'id' => 2375,
                'country_id' => 137,
                'name' => 'Ebo',
            ),
            374 => 
            array (
                'id' => 2376,
                'country_id' => 137,
                'name' => 'Enewetak',
            ),
            375 => 
            array (
                'id' => 2377,
                'country_id' => 137,
                'name' => 'Jabat',
            ),
            376 => 
            array (
                'id' => 2378,
                'country_id' => 137,
                'name' => 'Jaluit',
            ),
            377 => 
            array (
                'id' => 2379,
                'country_id' => 137,
                'name' => 'Kili',
            ),
            378 => 
            array (
                'id' => 2380,
                'country_id' => 137,
                'name' => 'Kwajalei',
            ),
            379 => 
            array (
                'id' => 2381,
                'country_id' => 137,
                'name' => 'Lae',
            ),
            380 => 
            array (
                'id' => 2382,
                'country_id' => 137,
                'name' => 'Lib',
            ),
            381 => 
            array (
                'id' => 2383,
                'country_id' => 137,
                'name' => 'Likiep',
            ),
            382 => 
            array (
                'id' => 2384,
                'country_id' => 137,
                'name' => 'Majuro',
            ),
            383 => 
            array (
                'id' => 2385,
                'country_id' => 137,
                'name' => 'Maloelap',
            ),
            384 => 
            array (
                'id' => 2386,
                'country_id' => 137,
                'name' => 'Mejit',
            ),
            385 => 
            array (
                'id' => 2387,
                'country_id' => 137,
                'name' => 'Mili',
            ),
            386 => 
            array (
                'id' => 2388,
                'country_id' => 137,
                'name' => 'Namorik',
            ),
            387 => 
            array (
                'id' => 2389,
                'country_id' => 137,
                'name' => 'Namu',
            ),
            388 => 
            array (
                'id' => 2390,
                'country_id' => 137,
                'name' => 'Rongelap',
            ),
            389 => 
            array (
                'id' => 2391,
                'country_id' => 137,
                'name' => 'Ujae',
            ),
            390 => 
            array (
                'id' => 2392,
                'country_id' => 137,
                'name' => 'Utrik',
            ),
            391 => 
            array (
                'id' => 2393,
                'country_id' => 137,
                'name' => 'Wotho',
            ),
            392 => 
            array (
                'id' => 2394,
                'country_id' => 137,
                'name' => 'Wotje',
            ),
            393 => 
            array (
                'id' => 2395,
                'country_id' => 138,
                'name' => 'Fort-de-France',
            ),
            394 => 
            array (
                'id' => 2396,
                'country_id' => 138,
                'name' => 'La Trinite',
            ),
            395 => 
            array (
                'id' => 2397,
                'country_id' => 138,
                'name' => 'Le Mari',
            ),
            396 => 
            array (
                'id' => 2398,
                'country_id' => 138,
                'name' => 'Saint-Pierre',
            ),
            397 => 
            array (
                'id' => 2399,
                'country_id' => 139,
                'name' => 'Adrar',
            ),
            398 => 
            array (
                'id' => 2400,
                'country_id' => 139,
                'name' => 'Assaba',
            ),
            399 => 
            array (
                'id' => 2401,
                'country_id' => 139,
                'name' => 'Brakna',
            ),
            400 => 
            array (
                'id' => 2402,
                'country_id' => 139,
                'name' => 'Dhakhlat Nawadibu',
            ),
            401 => 
            array (
                'id' => 2403,
                'country_id' => 139,
                'name' => 'Hudh-al-Gharbi',
            ),
            402 => 
            array (
                'id' => 2404,
                'country_id' => 139,
                'name' => 'Hudh-ash-Sharqi',
            ),
            403 => 
            array (
                'id' => 2405,
                'country_id' => 139,
                'name' => 'Inshiri',
            ),
            404 => 
            array (
                'id' => 2406,
                'country_id' => 139,
                'name' => 'Nawakshut',
            ),
            405 => 
            array (
                'id' => 2407,
                'country_id' => 139,
                'name' => 'Qidimagha',
            ),
            406 => 
            array (
                'id' => 2408,
                'country_id' => 139,
                'name' => 'Qurqul',
            ),
            407 => 
            array (
                'id' => 2409,
                'country_id' => 139,
                'name' => 'Taqant',
            ),
            408 => 
            array (
                'id' => 2410,
                'country_id' => 139,
                'name' => 'Tiris Zammur',
            ),
            409 => 
            array (
                'id' => 2411,
                'country_id' => 139,
                'name' => 'Trarza',
            ),
            410 => 
            array (
                'id' => 2412,
                'country_id' => 140,
                'name' => 'Black River',
            ),
            411 => 
            array (
                'id' => 2413,
                'country_id' => 140,
                'name' => 'Eau Coulee',
            ),
            412 => 
            array (
                'id' => 2414,
                'country_id' => 140,
                'name' => 'Flacq',
            ),
            413 => 
            array (
                'id' => 2415,
                'country_id' => 140,
                'name' => 'Floreal',
            ),
            414 => 
            array (
                'id' => 2416,
                'country_id' => 140,
                'name' => 'Grand Port',
            ),
            415 => 
            array (
                'id' => 2417,
                'country_id' => 140,
                'name' => 'Moka',
            ),
            416 => 
            array (
                'id' => 2418,
                'country_id' => 140,
                'name' => 'Pamplempousses',
            ),
            417 => 
            array (
                'id' => 2419,
                'country_id' => 140,
                'name' => 'Plaines Wilhelm',
            ),
            418 => 
            array (
                'id' => 2420,
                'country_id' => 140,
                'name' => 'Port Louis',
            ),
            419 => 
            array (
                'id' => 2421,
                'country_id' => 140,
                'name' => 'Riviere du Rempart',
            ),
            420 => 
            array (
                'id' => 2422,
                'country_id' => 140,
                'name' => 'Rodrigues',
            ),
            421 => 
            array (
                'id' => 2423,
                'country_id' => 140,
                'name' => 'Rose Hill',
            ),
            422 => 
            array (
                'id' => 2424,
                'country_id' => 140,
                'name' => 'Savanne',
            ),
            423 => 
            array (
                'id' => 2425,
                'country_id' => 141,
                'name' => 'Mayotte',
            ),
            424 => 
            array (
                'id' => 2426,
                'country_id' => 141,
                'name' => 'Pamanzi',
            ),
            425 => 
            array (
                'id' => 2427,
                'country_id' => 142,
                'name' => 'Aguascalientes',
            ),
            426 => 
            array (
                'id' => 2428,
                'country_id' => 142,
                'name' => 'Baja California',
            ),
            427 => 
            array (
                'id' => 2429,
                'country_id' => 142,
                'name' => 'Baja California Sur',
            ),
            428 => 
            array (
                'id' => 2430,
                'country_id' => 142,
                'name' => 'Campeche',
            ),
            429 => 
            array (
                'id' => 2431,
                'country_id' => 142,
                'name' => 'Chiapas',
            ),
            430 => 
            array (
                'id' => 2432,
                'country_id' => 142,
                'name' => 'Chihuahua',
            ),
            431 => 
            array (
                'id' => 2433,
                'country_id' => 142,
                'name' => 'Coahuila',
            ),
            432 => 
            array (
                'id' => 2434,
                'country_id' => 142,
                'name' => 'Colima',
            ),
            433 => 
            array (
                'id' => 2435,
                'country_id' => 142,
                'name' => 'Distrito Federal',
            ),
            434 => 
            array (
                'id' => 2436,
                'country_id' => 142,
                'name' => 'Durango',
            ),
            435 => 
            array (
                'id' => 2437,
                'country_id' => 142,
                'name' => 'Estado de Mexico',
            ),
            436 => 
            array (
                'id' => 2438,
                'country_id' => 142,
                'name' => 'Guanajuato',
            ),
            437 => 
            array (
                'id' => 2439,
                'country_id' => 142,
                'name' => 'Guerrero',
            ),
            438 => 
            array (
                'id' => 2440,
                'country_id' => 142,
                'name' => 'Hidalgo',
            ),
            439 => 
            array (
                'id' => 2441,
                'country_id' => 142,
                'name' => 'Jalisco',
            ),
            440 => 
            array (
                'id' => 2442,
                'country_id' => 142,
                'name' => 'Mexico',
            ),
            441 => 
            array (
                'id' => 2443,
                'country_id' => 142,
                'name' => 'Michoaca',
            ),
            442 => 
            array (
                'id' => 2444,
                'country_id' => 142,
                'name' => 'Morelos',
            ),
            443 => 
            array (
                'id' => 2445,
                'country_id' => 142,
                'name' => 'Nayarit',
            ),
            444 => 
            array (
                'id' => 2446,
                'country_id' => 142,
                'name' => 'Nuevo Leo',
            ),
            445 => 
            array (
                'id' => 2447,
                'country_id' => 142,
                'name' => 'Oaxaca',
            ),
            446 => 
            array (
                'id' => 2448,
                'country_id' => 142,
                'name' => 'Puebla',
            ),
            447 => 
            array (
                'id' => 2449,
                'country_id' => 142,
                'name' => 'Queretaro',
            ),
            448 => 
            array (
                'id' => 2450,
                'country_id' => 142,
                'name' => 'Quintana Roo',
            ),
            449 => 
            array (
                'id' => 2451,
                'country_id' => 142,
                'name' => 'San Luis Potosi',
            ),
            450 => 
            array (
                'id' => 2452,
                'country_id' => 142,
                'name' => 'Sinaloa',
            ),
            451 => 
            array (
                'id' => 2453,
                'country_id' => 142,
                'name' => 'Sonora',
            ),
            452 => 
            array (
                'id' => 2454,
                'country_id' => 142,
                'name' => 'Tabasco',
            ),
            453 => 
            array (
                'id' => 2455,
                'country_id' => 142,
                'name' => 'Tamaulipas',
            ),
            454 => 
            array (
                'id' => 2456,
                'country_id' => 142,
                'name' => 'Tlaxcala',
            ),
            455 => 
            array (
                'id' => 2457,
                'country_id' => 142,
                'name' => 'Veracruz',
            ),
            456 => 
            array (
                'id' => 2458,
                'country_id' => 142,
                'name' => 'Yucata',
            ),
            457 => 
            array (
                'id' => 2459,
                'country_id' => 142,
                'name' => 'Zacatecas',
            ),
            458 => 
            array (
                'id' => 2460,
                'country_id' => 143,
                'name' => 'Chuuk',
            ),
            459 => 
            array (
                'id' => 2461,
                'country_id' => 143,
                'name' => 'Kusaie',
            ),
            460 => 
            array (
                'id' => 2462,
                'country_id' => 143,
                'name' => 'Pohnpei',
            ),
            461 => 
            array (
                'id' => 2463,
                'country_id' => 143,
                'name' => 'Yap',
            ),
            462 => 
            array (
                'id' => 2464,
                'country_id' => 144,
                'name' => 'Balti',
            ),
            463 => 
            array (
                'id' => 2465,
                'country_id' => 144,
                'name' => 'Cahul',
            ),
            464 => 
            array (
                'id' => 2466,
                'country_id' => 144,
                'name' => 'Chisinau',
            ),
            465 => 
            array (
                'id' => 2467,
                'country_id' => 144,
                'name' => 'Chisinau Oras',
            ),
            466 => 
            array (
                'id' => 2468,
                'country_id' => 144,
                'name' => 'Edinet',
            ),
            467 => 
            array (
                'id' => 2469,
                'country_id' => 144,
                'name' => 'Gagauzia',
            ),
            468 => 
            array (
                'id' => 2470,
                'country_id' => 144,
                'name' => 'Lapusna',
            ),
            469 => 
            array (
                'id' => 2471,
                'country_id' => 144,
                'name' => 'Orhei',
            ),
            470 => 
            array (
                'id' => 2472,
                'country_id' => 144,
                'name' => 'Soroca',
            ),
            471 => 
            array (
                'id' => 2473,
                'country_id' => 144,
                'name' => 'Taraclia',
            ),
            472 => 
            array (
                'id' => 2474,
                'country_id' => 144,
                'name' => 'Tighina',
            ),
            473 => 
            array (
                'id' => 2475,
                'country_id' => 144,
                'name' => 'Transnistria',
            ),
            474 => 
            array (
                'id' => 2476,
                'country_id' => 144,
                'name' => 'Ungheni',
            ),
            475 => 
            array (
                'id' => 2477,
                'country_id' => 145,
                'name' => 'Fontvieille',
            ),
            476 => 
            array (
                'id' => 2478,
                'country_id' => 145,
                'name' => 'La Condamine',
            ),
            477 => 
            array (
                'id' => 2479,
                'country_id' => 145,
                'name' => 'Monaco-Ville',
            ),
            478 => 
            array (
                'id' => 2480,
                'country_id' => 145,
                'name' => 'Monte Carlo',
            ),
            479 => 
            array (
                'id' => 2481,
                'country_id' => 146,
                'name' => 'Arhangaj',
            ),
            480 => 
            array (
                'id' => 2482,
                'country_id' => 146,
                'name' => 'Bajan-Olgij',
            ),
            481 => 
            array (
                'id' => 2483,
                'country_id' => 146,
                'name' => 'Bajanhongor',
            ),
            482 => 
            array (
                'id' => 2484,
                'country_id' => 146,
                'name' => 'Bulga',
            ),
            483 => 
            array (
                'id' => 2485,
                'country_id' => 146,
                'name' => 'Darhan-Uul',
            ),
            484 => 
            array (
                'id' => 2486,
                'country_id' => 146,
                'name' => 'Dornod',
            ),
            485 => 
            array (
                'id' => 2487,
                'country_id' => 146,
                'name' => 'Dornogovi',
            ),
            486 => 
            array (
                'id' => 2488,
                'country_id' => 146,
                'name' => 'Dundgovi',
            ),
            487 => 
            array (
                'id' => 2489,
                'country_id' => 146,
                'name' => 'Govi-Altaj',
            ),
            488 => 
            array (
                'id' => 2490,
                'country_id' => 146,
                'name' => 'Govisumber',
            ),
            489 => 
            array (
                'id' => 2491,
                'country_id' => 146,
                'name' => 'Hentij',
            ),
            490 => 
            array (
                'id' => 2492,
                'country_id' => 146,
                'name' => 'Hovd',
            ),
            491 => 
            array (
                'id' => 2493,
                'country_id' => 146,
                'name' => 'Hovsgol',
            ),
            492 => 
            array (
                'id' => 2494,
                'country_id' => 146,
                'name' => 'Omnogovi',
            ),
            493 => 
            array (
                'id' => 2495,
                'country_id' => 146,
                'name' => 'Orho',
            ),
            494 => 
            array (
                'id' => 2496,
                'country_id' => 146,
                'name' => 'Ovorhangaj',
            ),
            495 => 
            array (
                'id' => 2497,
                'country_id' => 146,
                'name' => 'Selenge',
            ),
            496 => 
            array (
                'id' => 2498,
                'country_id' => 146,
                'name' => 'Suhbaatar',
            ),
            497 => 
            array (
                'id' => 2499,
                'country_id' => 146,
                'name' => 'Tov',
            ),
            498 => 
            array (
                'id' => 2500,
                'country_id' => 146,
                'name' => 'Ulaanbaatar',
            ),
            499 => 
            array (
                'id' => 2501,
                'country_id' => 146,
                'name' => 'Uvs',
            ),
        ));
        \DB::table('tbl_states')->insert(array (
            0 => 
            array (
                'id' => 2502,
                'country_id' => 146,
                'name' => 'Zavha',
            ),
            1 => 
            array (
                'id' => 2503,
                'country_id' => 147,
                'name' => 'Montserrat',
            ),
            2 => 
            array (
                'id' => 2504,
                'country_id' => 148,
                'name' => 'Agadir',
            ),
            3 => 
            array (
                'id' => 2505,
                'country_id' => 148,
                'name' => 'Casablanca',
            ),
            4 => 
            array (
                'id' => 2506,
                'country_id' => 148,
                'name' => 'Chaouia-Ouardigha',
            ),
            5 => 
            array (
                'id' => 2507,
                'country_id' => 148,
                'name' => 'Doukkala-Abda',
            ),
            6 => 
            array (
                'id' => 2508,
                'country_id' => 148,
                'name' => 'Fes-Boulemane',
            ),
            7 => 
            array (
                'id' => 2509,
                'country_id' => 148,
                'name' => 'Gharb-Chrarda-Beni Hsse',
            ),
            8 => 
            array (
                'id' => 2510,
                'country_id' => 148,
                'name' => 'Guelmim',
            ),
            9 => 
            array (
                'id' => 2511,
                'country_id' => 148,
                'name' => 'Kenitra',
            ),
            10 => 
            array (
                'id' => 2512,
                'country_id' => 148,
                'name' => 'Marrakech-Tensift-Al Haouz',
            ),
            11 => 
            array (
                'id' => 2513,
                'country_id' => 148,
                'name' => 'Meknes-Tafilalet',
            ),
            12 => 
            array (
                'id' => 2514,
                'country_id' => 148,
                'name' => 'Oriental',
            ),
            13 => 
            array (
                'id' => 2515,
                'country_id' => 148,
                'name' => 'Oujda',
            ),
            14 => 
            array (
                'id' => 2516,
                'country_id' => 148,
                'name' => 'Province de Tanger',
            ),
            15 => 
            array (
                'id' => 2517,
                'country_id' => 148,
                'name' => 'Rabat-Sale-Zammour-Zaer',
            ),
            16 => 
            array (
                'id' => 2518,
                'country_id' => 148,
                'name' => 'Sala Al Jadida',
            ),
            17 => 
            array (
                'id' => 2519,
                'country_id' => 148,
                'name' => 'Settat',
            ),
            18 => 
            array (
                'id' => 2520,
                'country_id' => 148,
                'name' => 'Souss Massa-Draa',
            ),
            19 => 
            array (
                'id' => 2521,
                'country_id' => 148,
                'name' => 'Tadla-Azilal',
            ),
            20 => 
            array (
                'id' => 2522,
                'country_id' => 148,
                'name' => 'Tangier-Tetoua',
            ),
            21 => 
            array (
                'id' => 2523,
                'country_id' => 148,
                'name' => 'Taza-Al Hoceima-Taounate',
            ),
            22 => 
            array (
                'id' => 2524,
                'country_id' => 148,
                'name' => 'Wilaya de Casablanca',
            ),
            23 => 
            array (
                'id' => 2525,
                'country_id' => 148,
                'name' => 'Wilaya de Rabat-Sale',
            ),
            24 => 
            array (
                'id' => 2526,
                'country_id' => 149,
                'name' => 'Cabo Delgado',
            ),
            25 => 
            array (
                'id' => 2527,
                'country_id' => 149,
                'name' => 'Gaza',
            ),
            26 => 
            array (
                'id' => 2528,
                'country_id' => 149,
                'name' => 'Inhambane',
            ),
            27 => 
            array (
                'id' => 2529,
                'country_id' => 149,
                'name' => 'Manica',
            ),
            28 => 
            array (
                'id' => 2530,
                'country_id' => 149,
                'name' => 'Maputo',
            ),
            29 => 
            array (
                'id' => 2531,
                'country_id' => 149,
                'name' => 'Maputo Provincia',
            ),
            30 => 
            array (
                'id' => 2532,
                'country_id' => 149,
                'name' => 'Nampula',
            ),
            31 => 
            array (
                'id' => 2533,
                'country_id' => 149,
                'name' => 'Niassa',
            ),
            32 => 
            array (
                'id' => 2534,
                'country_id' => 149,
                'name' => 'Sofala',
            ),
            33 => 
            array (
                'id' => 2535,
                'country_id' => 149,
                'name' => 'Tete',
            ),
            34 => 
            array (
                'id' => 2536,
                'country_id' => 149,
                'name' => 'Zambezia',
            ),
            35 => 
            array (
                'id' => 2537,
                'country_id' => 150,
                'name' => 'Ayeyarwady',
            ),
            36 => 
            array (
                'id' => 2538,
                'country_id' => 150,
                'name' => 'Bago',
            ),
            37 => 
            array (
                'id' => 2539,
                'country_id' => 150,
                'name' => 'Chi',
            ),
            38 => 
            array (
                'id' => 2540,
                'country_id' => 150,
                'name' => 'Kachi',
            ),
            39 => 
            array (
                'id' => 2541,
                'country_id' => 150,
                'name' => 'Kayah',
            ),
            40 => 
            array (
                'id' => 2542,
                'country_id' => 150,
                'name' => 'Kayi',
            ),
            41 => 
            array (
                'id' => 2543,
                'country_id' => 150,
                'name' => 'Magway',
            ),
            42 => 
            array (
                'id' => 2544,
                'country_id' => 150,
                'name' => 'Mandalay',
            ),
            43 => 
            array (
                'id' => 2545,
                'country_id' => 150,
                'name' => 'Mo',
            ),
            44 => 
            array (
                'id' => 2546,
                'country_id' => 150,
                'name' => 'Nay Pyi Taw',
            ),
            45 => 
            array (
                'id' => 2547,
                'country_id' => 150,
                'name' => 'Rakhine',
            ),
            46 => 
            array (
                'id' => 2548,
                'country_id' => 150,
                'name' => 'Sagaing',
            ),
            47 => 
            array (
                'id' => 2549,
                'country_id' => 150,
                'name' => 'Sha',
            ),
            48 => 
            array (
                'id' => 2550,
                'country_id' => 150,
                'name' => 'Tanintharyi',
            ),
            49 => 
            array (
                'id' => 2551,
                'country_id' => 150,
                'name' => 'Yango',
            ),
            50 => 
            array (
                'id' => 2552,
                'country_id' => 151,
                'name' => 'Caprivi',
            ),
            51 => 
            array (
                'id' => 2553,
                'country_id' => 151,
                'name' => 'Erongo',
            ),
            52 => 
            array (
                'id' => 2554,
                'country_id' => 151,
                'name' => 'Hardap',
            ),
            53 => 
            array (
                'id' => 2555,
                'country_id' => 151,
                'name' => 'Karas',
            ),
            54 => 
            array (
                'id' => 2556,
                'country_id' => 151,
                'name' => 'Kavango',
            ),
            55 => 
            array (
                'id' => 2557,
                'country_id' => 151,
                'name' => 'Khomas',
            ),
            56 => 
            array (
                'id' => 2558,
                'country_id' => 151,
                'name' => 'Kunene',
            ),
            57 => 
            array (
                'id' => 2559,
                'country_id' => 151,
                'name' => 'Ohangwena',
            ),
            58 => 
            array (
                'id' => 2560,
                'country_id' => 151,
                'name' => 'Omaheke',
            ),
            59 => 
            array (
                'id' => 2561,
                'country_id' => 151,
                'name' => 'Omusati',
            ),
            60 => 
            array (
                'id' => 2562,
                'country_id' => 151,
                'name' => 'Oshana',
            ),
            61 => 
            array (
                'id' => 2563,
                'country_id' => 151,
                'name' => 'Oshikoto',
            ),
            62 => 
            array (
                'id' => 2564,
                'country_id' => 151,
                'name' => 'Otjozondjupa',
            ),
            63 => 
            array (
                'id' => 2565,
                'country_id' => 152,
                'name' => 'Yare',
            ),
            64 => 
            array (
                'id' => 2566,
                'country_id' => 153,
                'name' => 'Bagmati',
            ),
            65 => 
            array (
                'id' => 2567,
                'country_id' => 153,
                'name' => 'Bheri',
            ),
            66 => 
            array (
                'id' => 2568,
                'country_id' => 153,
                'name' => 'Dhawalagiri',
            ),
            67 => 
            array (
                'id' => 2569,
                'country_id' => 153,
                'name' => 'Gandaki',
            ),
            68 => 
            array (
                'id' => 2570,
                'country_id' => 153,
                'name' => 'Janakpur',
            ),
            69 => 
            array (
                'id' => 2571,
                'country_id' => 153,
                'name' => 'Karnali',
            ),
            70 => 
            array (
                'id' => 2572,
                'country_id' => 153,
                'name' => 'Koshi',
            ),
            71 => 
            array (
                'id' => 2573,
                'country_id' => 153,
                'name' => 'Lumbini',
            ),
            72 => 
            array (
                'id' => 2574,
                'country_id' => 153,
                'name' => 'Mahakali',
            ),
            73 => 
            array (
                'id' => 2575,
                'country_id' => 153,
                'name' => 'Mechi',
            ),
            74 => 
            array (
                'id' => 2576,
                'country_id' => 153,
                'name' => 'Narayani',
            ),
            75 => 
            array (
                'id' => 2577,
                'country_id' => 153,
                'name' => 'Rapti',
            ),
            76 => 
            array (
                'id' => 2578,
                'country_id' => 153,
                'name' => 'Sagarmatha',
            ),
            77 => 
            array (
                'id' => 2579,
                'country_id' => 153,
                'name' => 'Seti',
            ),
            78 => 
            array (
                'id' => 2580,
                'country_id' => 154,
                'name' => 'Bonaire',
            ),
            79 => 
            array (
                'id' => 2581,
                'country_id' => 154,
                'name' => 'Curacao',
            ),
            80 => 
            array (
                'id' => 2582,
                'country_id' => 154,
                'name' => 'Saba',
            ),
            81 => 
            array (
                'id' => 2583,
                'country_id' => 154,
                'name' => 'Sint Eustatius',
            ),
            82 => 
            array (
                'id' => 2584,
                'country_id' => 154,
                'name' => 'Sint Maarte',
            ),
            83 => 
            array (
                'id' => 2585,
                'country_id' => 155,
                'name' => 'Amsterdam',
            ),
            84 => 
            array (
                'id' => 2586,
                'country_id' => 155,
                'name' => 'Benelux',
            ),
            85 => 
            array (
                'id' => 2587,
                'country_id' => 155,
                'name' => 'Drenthe',
            ),
            86 => 
            array (
                'id' => 2588,
                'country_id' => 155,
                'name' => 'Flevoland',
            ),
            87 => 
            array (
                'id' => 2589,
                'country_id' => 155,
                'name' => 'Friesland',
            ),
            88 => 
            array (
                'id' => 2590,
                'country_id' => 155,
                'name' => 'Gelderland',
            ),
            89 => 
            array (
                'id' => 2591,
                'country_id' => 155,
                'name' => 'Groninge',
            ),
            90 => 
            array (
                'id' => 2592,
                'country_id' => 155,
                'name' => 'Limburg',
            ),
            91 => 
            array (
                'id' => 2593,
                'country_id' => 155,
                'name' => 'Noord-Brabant',
            ),
            92 => 
            array (
                'id' => 2594,
                'country_id' => 155,
                'name' => 'Noord-Holland',
            ),
            93 => 
            array (
                'id' => 2595,
                'country_id' => 155,
                'name' => 'Overijssel',
            ),
            94 => 
            array (
                'id' => 2596,
                'country_id' => 155,
                'name' => 'South Holland',
            ),
            95 => 
            array (
                'id' => 2597,
                'country_id' => 155,
                'name' => 'Utrecht',
            ),
            96 => 
            array (
                'id' => 2598,
                'country_id' => 155,
                'name' => 'Zeeland',
            ),
            97 => 
            array (
                'id' => 2599,
                'country_id' => 155,
                'name' => 'Zuid-Holland',
            ),
            98 => 
            array (
                'id' => 2600,
                'country_id' => 156,
                'name' => 'Iles',
            ),
            99 => 
            array (
                'id' => 2601,
                'country_id' => 156,
                'name' => 'Nord',
            ),
            100 => 
            array (
                'id' => 2602,
                'country_id' => 156,
                'name' => 'Sud',
            ),
            101 => 
            array (
                'id' => 2603,
                'country_id' => 157,
                'name' => 'Area Outside Regio',
            ),
            102 => 
            array (
                'id' => 2604,
                'country_id' => 157,
                'name' => 'Auckland',
            ),
            103 => 
            array (
                'id' => 2605,
                'country_id' => 157,
                'name' => 'Bay of Plenty',
            ),
            104 => 
            array (
                'id' => 2606,
                'country_id' => 157,
                'name' => 'Canterbury',
            ),
            105 => 
            array (
                'id' => 2607,
                'country_id' => 157,
                'name' => 'Christchurch',
            ),
            106 => 
            array (
                'id' => 2608,
                'country_id' => 157,
                'name' => 'Gisborne',
            ),
            107 => 
            array (
                'id' => 2609,
                'country_id' => 157,
                'name' => 'Hawke\'s Bay',
            ),
            108 => 
            array (
                'id' => 2610,
                'country_id' => 157,
                'name' => 'Manawatu-Wanganui',
            ),
            109 => 
            array (
                'id' => 2611,
                'country_id' => 157,
                'name' => 'Marlborough',
            ),
            110 => 
            array (
                'id' => 2612,
                'country_id' => 157,
                'name' => 'Nelso',
            ),
            111 => 
            array (
                'id' => 2613,
                'country_id' => 157,
                'name' => 'Northland',
            ),
            112 => 
            array (
                'id' => 2614,
                'country_id' => 157,
                'name' => 'Otago',
            ),
            113 => 
            array (
                'id' => 2615,
                'country_id' => 157,
                'name' => 'Rodney',
            ),
            114 => 
            array (
                'id' => 2616,
                'country_id' => 157,
                'name' => 'Southland',
            ),
            115 => 
            array (
                'id' => 2617,
                'country_id' => 157,
                'name' => 'Taranaki',
            ),
            116 => 
            array (
                'id' => 2618,
                'country_id' => 157,
                'name' => 'Tasma',
            ),
            117 => 
            array (
                'id' => 2619,
                'country_id' => 157,
                'name' => 'Waikato',
            ),
            118 => 
            array (
                'id' => 2620,
                'country_id' => 157,
                'name' => 'Wellingto',
            ),
            119 => 
            array (
                'id' => 2621,
                'country_id' => 157,
                'name' => 'West Coast',
            ),
            120 => 
            array (
                'id' => 2622,
                'country_id' => 158,
                'name' => 'Atlantico Norte',
            ),
            121 => 
            array (
                'id' => 2623,
                'country_id' => 158,
                'name' => 'Atlantico Sur',
            ),
            122 => 
            array (
                'id' => 2624,
                'country_id' => 158,
                'name' => 'Boaco',
            ),
            123 => 
            array (
                'id' => 2625,
                'country_id' => 158,
                'name' => 'Carazo',
            ),
            124 => 
            array (
                'id' => 2626,
                'country_id' => 158,
                'name' => 'Chinandega',
            ),
            125 => 
            array (
                'id' => 2627,
                'country_id' => 158,
                'name' => 'Chontales',
            ),
            126 => 
            array (
                'id' => 2628,
                'country_id' => 158,
                'name' => 'Esteli',
            ),
            127 => 
            array (
                'id' => 2629,
                'country_id' => 158,
                'name' => 'Granada',
            ),
            128 => 
            array (
                'id' => 2630,
                'country_id' => 158,
                'name' => 'Jinotega',
            ),
            129 => 
            array (
                'id' => 2631,
                'country_id' => 158,
                'name' => 'Leo',
            ),
            130 => 
            array (
                'id' => 2632,
                'country_id' => 158,
                'name' => 'Madriz',
            ),
            131 => 
            array (
                'id' => 2633,
                'country_id' => 158,
                'name' => 'Managua',
            ),
            132 => 
            array (
                'id' => 2634,
                'country_id' => 158,
                'name' => 'Masaya',
            ),
            133 => 
            array (
                'id' => 2635,
                'country_id' => 158,
                'name' => 'Matagalpa',
            ),
            134 => 
            array (
                'id' => 2636,
                'country_id' => 158,
                'name' => 'Nueva Segovia',
            ),
            135 => 
            array (
                'id' => 2637,
                'country_id' => 158,
                'name' => 'Rio San Jua',
            ),
            136 => 
            array (
                'id' => 2638,
                'country_id' => 158,
                'name' => 'Rivas',
            ),
            137 => 
            array (
                'id' => 2639,
                'country_id' => 159,
                'name' => 'Agadez',
            ),
            138 => 
            array (
                'id' => 2640,
                'country_id' => 159,
                'name' => 'Diffa',
            ),
            139 => 
            array (
                'id' => 2641,
                'country_id' => 159,
                'name' => 'Dosso',
            ),
            140 => 
            array (
                'id' => 2642,
                'country_id' => 159,
                'name' => 'Maradi',
            ),
            141 => 
            array (
                'id' => 2643,
                'country_id' => 159,
                'name' => 'Niamey',
            ),
            142 => 
            array (
                'id' => 2644,
                'country_id' => 159,
                'name' => 'Tahoua',
            ),
            143 => 
            array (
                'id' => 2645,
                'country_id' => 159,
                'name' => 'Tillabery',
            ),
            144 => 
            array (
                'id' => 2646,
                'country_id' => 159,
                'name' => 'Zinder',
            ),
            145 => 
            array (
                'id' => 2647,
                'country_id' => 160,
                'name' => 'Abia',
            ),
            146 => 
            array (
                'id' => 2648,
                'country_id' => 160,
                'name' => 'Abuja Federal Capital Territor',
            ),
            147 => 
            array (
                'id' => 2649,
                'country_id' => 160,
                'name' => 'Adamawa',
            ),
            148 => 
            array (
                'id' => 2650,
                'country_id' => 160,
                'name' => 'Akwa Ibom',
            ),
            149 => 
            array (
                'id' => 2651,
                'country_id' => 160,
                'name' => 'Anambra',
            ),
            150 => 
            array (
                'id' => 2652,
                'country_id' => 160,
                'name' => 'Bauchi',
            ),
            151 => 
            array (
                'id' => 2653,
                'country_id' => 160,
                'name' => 'Bayelsa',
            ),
            152 => 
            array (
                'id' => 2654,
                'country_id' => 160,
                'name' => 'Benue',
            ),
            153 => 
            array (
                'id' => 2655,
                'country_id' => 160,
                'name' => 'Borno',
            ),
            154 => 
            array (
                'id' => 2656,
                'country_id' => 160,
                'name' => 'Cross River',
            ),
            155 => 
            array (
                'id' => 2657,
                'country_id' => 160,
                'name' => 'Delta',
            ),
            156 => 
            array (
                'id' => 2658,
                'country_id' => 160,
                'name' => 'Ebonyi',
            ),
            157 => 
            array (
                'id' => 2659,
                'country_id' => 160,
                'name' => 'Edo',
            ),
            158 => 
            array (
                'id' => 2660,
                'country_id' => 160,
                'name' => 'Ekiti',
            ),
            159 => 
            array (
                'id' => 2661,
                'country_id' => 160,
                'name' => 'Enugu',
            ),
            160 => 
            array (
                'id' => 2662,
                'country_id' => 160,
                'name' => 'Gombe',
            ),
            161 => 
            array (
                'id' => 2663,
                'country_id' => 160,
                'name' => 'Imo',
            ),
            162 => 
            array (
                'id' => 2664,
                'country_id' => 160,
                'name' => 'Jigawa',
            ),
            163 => 
            array (
                'id' => 2665,
                'country_id' => 160,
                'name' => 'Kaduna',
            ),
            164 => 
            array (
                'id' => 2666,
                'country_id' => 160,
                'name' => 'Kano',
            ),
            165 => 
            array (
                'id' => 2667,
                'country_id' => 160,
                'name' => 'Katsina',
            ),
            166 => 
            array (
                'id' => 2668,
                'country_id' => 160,
                'name' => 'Kebbi',
            ),
            167 => 
            array (
                'id' => 2669,
                'country_id' => 160,
                'name' => 'Kogi',
            ),
            168 => 
            array (
                'id' => 2670,
                'country_id' => 160,
                'name' => 'Kwara',
            ),
            169 => 
            array (
                'id' => 2671,
                'country_id' => 160,
                'name' => 'Lagos',
            ),
            170 => 
            array (
                'id' => 2672,
                'country_id' => 160,
                'name' => 'Nassarawa',
            ),
            171 => 
            array (
                'id' => 2673,
                'country_id' => 160,
                'name' => 'Niger',
            ),
            172 => 
            array (
                'id' => 2674,
                'country_id' => 160,
                'name' => 'Ogu',
            ),
            173 => 
            array (
                'id' => 2675,
                'country_id' => 160,
                'name' => 'Ondo',
            ),
            174 => 
            array (
                'id' => 2676,
                'country_id' => 160,
                'name' => 'Osu',
            ),
            175 => 
            array (
                'id' => 2677,
                'country_id' => 160,
                'name' => 'Oyo',
            ),
            176 => 
            array (
                'id' => 2678,
                'country_id' => 160,
                'name' => 'Plateau',
            ),
            177 => 
            array (
                'id' => 2679,
                'country_id' => 160,
                'name' => 'Rivers',
            ),
            178 => 
            array (
                'id' => 2680,
                'country_id' => 160,
                'name' => 'Sokoto',
            ),
            179 => 
            array (
                'id' => 2681,
                'country_id' => 160,
                'name' => 'Taraba',
            ),
            180 => 
            array (
                'id' => 2682,
                'country_id' => 160,
                'name' => 'Yobe',
            ),
            181 => 
            array (
                'id' => 2683,
                'country_id' => 160,
                'name' => 'Zamfara',
            ),
            182 => 
            array (
                'id' => 2684,
                'country_id' => 161,
                'name' => 'Niue',
            ),
            183 => 
            array (
                'id' => 2685,
                'country_id' => 162,
                'name' => 'Norfolk Island',
            ),
            184 => 
            array (
                'id' => 2686,
                'country_id' => 163,
                'name' => 'Northern Islands',
            ),
            185 => 
            array (
                'id' => 2687,
                'country_id' => 163,
                'name' => 'Rota',
            ),
            186 => 
            array (
                'id' => 2688,
                'country_id' => 163,
                'name' => 'Saipa',
            ),
            187 => 
            array (
                'id' => 2689,
                'country_id' => 163,
                'name' => 'Tinia',
            ),
            188 => 
            array (
                'id' => 2690,
                'country_id' => 164,
                'name' => 'Akershus',
            ),
            189 => 
            array (
                'id' => 2691,
                'country_id' => 164,
                'name' => 'Aust Agder',
            ),
            190 => 
            array (
                'id' => 2692,
                'country_id' => 164,
                'name' => 'Berge',
            ),
            191 => 
            array (
                'id' => 2693,
                'country_id' => 164,
                'name' => 'Buskerud',
            ),
            192 => 
            array (
                'id' => 2694,
                'country_id' => 164,
                'name' => 'Finnmark',
            ),
            193 => 
            array (
                'id' => 2695,
                'country_id' => 164,
                'name' => 'Hedmark',
            ),
            194 => 
            array (
                'id' => 2696,
                'country_id' => 164,
                'name' => 'Hordaland',
            ),
            195 => 
            array (
                'id' => 2697,
                'country_id' => 164,
                'name' => 'Moere og Romsdal',
            ),
            196 => 
            array (
                'id' => 2698,
                'country_id' => 164,
                'name' => 'Nord Trondelag',
            ),
            197 => 
            array (
                'id' => 2699,
                'country_id' => 164,
                'name' => 'Nordland',
            ),
            198 => 
            array (
                'id' => 2700,
                'country_id' => 164,
                'name' => 'Oestfold',
            ),
            199 => 
            array (
                'id' => 2701,
                'country_id' => 164,
                'name' => 'Oppland',
            ),
            200 => 
            array (
                'id' => 2702,
                'country_id' => 164,
                'name' => 'Oslo',
            ),
            201 => 
            array (
                'id' => 2703,
                'country_id' => 164,
                'name' => 'Rogaland',
            ),
            202 => 
            array (
                'id' => 2704,
                'country_id' => 164,
                'name' => 'Soer Troendelag',
            ),
            203 => 
            array (
                'id' => 2705,
                'country_id' => 164,
                'name' => 'Sogn og Fjordane',
            ),
            204 => 
            array (
                'id' => 2706,
                'country_id' => 164,
                'name' => 'Staver',
            ),
            205 => 
            array (
                'id' => 2707,
                'country_id' => 164,
                'name' => 'Sykkylve',
            ),
            206 => 
            array (
                'id' => 2708,
                'country_id' => 164,
                'name' => 'Telemark',
            ),
            207 => 
            array (
                'id' => 2709,
                'country_id' => 164,
                'name' => 'Troms',
            ),
            208 => 
            array (
                'id' => 2710,
                'country_id' => 164,
                'name' => 'Vest Agder',
            ),
            209 => 
            array (
                'id' => 2711,
                'country_id' => 164,
                'name' => 'Vestfold',
            ),
            210 => 
            array (
                'id' => 2712,
                'country_id' => 164,
                'name' => 'ÃƒÂ˜stfold',
            ),
            211 => 
            array (
                'id' => 2713,
                'country_id' => 165,
                'name' => 'Al Buraimi',
            ),
            212 => 
            array (
                'id' => 2714,
                'country_id' => 165,
                'name' => 'Dhufar',
            ),
            213 => 
            array (
                'id' => 2715,
                'country_id' => 165,
                'name' => 'Masqat',
            ),
            214 => 
            array (
                'id' => 2716,
                'country_id' => 165,
                'name' => 'Musandam',
            ),
            215 => 
            array (
                'id' => 2717,
                'country_id' => 165,
                'name' => 'Rusayl',
            ),
            216 => 
            array (
                'id' => 2718,
                'country_id' => 165,
                'name' => 'Wadi Kabir',
            ),
            217 => 
            array (
                'id' => 2719,
                'country_id' => 165,
                'name' => 'ad-Dakhiliyah',
            ),
            218 => 
            array (
                'id' => 2720,
                'country_id' => 165,
                'name' => 'adh-Dhahirah',
            ),
            219 => 
            array (
                'id' => 2721,
                'country_id' => 165,
                'name' => 'al-Batinah',
            ),
            220 => 
            array (
                'id' => 2722,
                'country_id' => 165,
                'name' => 'ash-Sharqiyah',
            ),
            221 => 
            array (
                'id' => 2723,
                'country_id' => 166,
                'name' => 'Baluchista',
            ),
            222 => 
            array (
                'id' => 2724,
                'country_id' => 166,
                'name' => 'Federal Capital Area',
            ),
            223 => 
            array (
                'id' => 2725,
                'country_id' => 166,
                'name' => 'Federally administered Tribal ',
            ),
            224 => 
            array (
                'id' => 2726,
                'country_id' => 166,
                'name' => 'North-West Frontier',
            ),
            225 => 
            array (
                'id' => 2727,
                'country_id' => 166,
                'name' => 'Northern Areas',
            ),
            226 => 
            array (
                'id' => 2728,
                'country_id' => 166,
                'name' => 'Punjab',
            ),
            227 => 
            array (
                'id' => 2729,
                'country_id' => 166,
                'name' => 'Sind',
            ),
            228 => 
            array (
                'id' => 2730,
                'country_id' => 167,
                'name' => 'Aimeliik',
            ),
            229 => 
            array (
                'id' => 2731,
                'country_id' => 167,
                'name' => 'Airai',
            ),
            230 => 
            array (
                'id' => 2732,
                'country_id' => 167,
                'name' => 'Angaur',
            ),
            231 => 
            array (
                'id' => 2733,
                'country_id' => 167,
                'name' => 'Hatobohei',
            ),
            232 => 
            array (
                'id' => 2734,
                'country_id' => 167,
                'name' => 'Kayangel',
            ),
            233 => 
            array (
                'id' => 2735,
                'country_id' => 167,
                'name' => 'Koror',
            ),
            234 => 
            array (
                'id' => 2736,
                'country_id' => 167,
                'name' => 'Melekeok',
            ),
            235 => 
            array (
                'id' => 2737,
                'country_id' => 167,
                'name' => 'Ngaraard',
            ),
            236 => 
            array (
                'id' => 2738,
                'country_id' => 167,
                'name' => 'Ngardmau',
            ),
            237 => 
            array (
                'id' => 2739,
                'country_id' => 167,
                'name' => 'Ngaremlengui',
            ),
            238 => 
            array (
                'id' => 2740,
                'country_id' => 167,
                'name' => 'Ngatpang',
            ),
            239 => 
            array (
                'id' => 2741,
                'country_id' => 167,
                'name' => 'Ngchesar',
            ),
            240 => 
            array (
                'id' => 2742,
                'country_id' => 167,
                'name' => 'Ngerchelong',
            ),
            241 => 
            array (
                'id' => 2743,
                'country_id' => 167,
                'name' => 'Ngiwal',
            ),
            242 => 
            array (
                'id' => 2744,
                'country_id' => 167,
                'name' => 'Peleliu',
            ),
            243 => 
            array (
                'id' => 2745,
                'country_id' => 167,
                'name' => 'Sonsorol',
            ),
            244 => 
            array (
                'id' => 2746,
                'country_id' => 168,
                'name' => 'Ariha',
            ),
            245 => 
            array (
                'id' => 2747,
                'country_id' => 168,
                'name' => 'Bayt Lahm',
            ),
            246 => 
            array (
                'id' => 2748,
                'country_id' => 168,
                'name' => 'Bethlehem',
            ),
            247 => 
            array (
                'id' => 2749,
                'country_id' => 168,
                'name' => 'Dayr-al-Balah',
            ),
            248 => 
            array (
                'id' => 2750,
                'country_id' => 168,
                'name' => 'Ghazzah',
            ),
            249 => 
            array (
                'id' => 2751,
                'country_id' => 168,
                'name' => 'Ghazzah ash-Shamaliyah',
            ),
            250 => 
            array (
                'id' => 2752,
                'country_id' => 168,
                'name' => 'Jani',
            ),
            251 => 
            array (
                'id' => 2753,
                'country_id' => 168,
                'name' => 'Khan Yunis',
            ),
            252 => 
            array (
                'id' => 2754,
                'country_id' => 168,
                'name' => 'Nabulus',
            ),
            253 => 
            array (
                'id' => 2755,
                'country_id' => 168,
                'name' => 'Qalqilyah',
            ),
            254 => 
            array (
                'id' => 2756,
                'country_id' => 168,
                'name' => 'Rafah',
            ),
            255 => 
            array (
                'id' => 2757,
                'country_id' => 168,
                'name' => 'Ram Allah wal-Birah',
            ),
            256 => 
            array (
                'id' => 2758,
                'country_id' => 168,
                'name' => 'Salfit',
            ),
            257 => 
            array (
                'id' => 2759,
                'country_id' => 168,
                'name' => 'Tubas',
            ),
            258 => 
            array (
                'id' => 2760,
                'country_id' => 168,
                'name' => 'Tulkarm',
            ),
            259 => 
            array (
                'id' => 2761,
                'country_id' => 168,
                'name' => 'al-Khalil',
            ),
            260 => 
            array (
                'id' => 2762,
                'country_id' => 168,
                'name' => 'al-Quds',
            ),
            261 => 
            array (
                'id' => 2763,
                'country_id' => 169,
                'name' => 'Bocas del Toro',
            ),
            262 => 
            array (
                'id' => 2764,
                'country_id' => 169,
                'name' => 'Chiriqui',
            ),
            263 => 
            array (
                'id' => 2765,
                'country_id' => 169,
                'name' => 'Cocle',
            ),
            264 => 
            array (
                'id' => 2766,
                'country_id' => 169,
                'name' => 'Colo',
            ),
            265 => 
            array (
                'id' => 2767,
                'country_id' => 169,
                'name' => 'Darie',
            ),
            266 => 
            array (
                'id' => 2768,
                'country_id' => 169,
                'name' => 'Embera',
            ),
            267 => 
            array (
                'id' => 2769,
                'country_id' => 169,
                'name' => 'Herrera',
            ),
            268 => 
            array (
                'id' => 2770,
                'country_id' => 169,
                'name' => 'Kuna Yala',
            ),
            269 => 
            array (
                'id' => 2771,
                'country_id' => 169,
                'name' => 'Los Santos',
            ),
            270 => 
            array (
                'id' => 2772,
                'country_id' => 169,
                'name' => 'Ngobe Bugle',
            ),
            271 => 
            array (
                'id' => 2773,
                'country_id' => 169,
                'name' => 'Panama',
            ),
            272 => 
            array (
                'id' => 2774,
                'country_id' => 169,
                'name' => 'Veraguas',
            ),
            273 => 
            array (
                'id' => 2775,
                'country_id' => 170,
                'name' => 'East New Britai',
            ),
            274 => 
            array (
                'id' => 2776,
                'country_id' => 170,
                'name' => 'East Sepik',
            ),
            275 => 
            array (
                'id' => 2777,
                'country_id' => 170,
                'name' => 'Eastern Highlands',
            ),
            276 => 
            array (
                'id' => 2778,
                'country_id' => 170,
                'name' => 'Enga',
            ),
            277 => 
            array (
                'id' => 2779,
                'country_id' => 170,
                'name' => 'Fly River',
            ),
            278 => 
            array (
                'id' => 2780,
                'country_id' => 170,
                'name' => 'Gulf',
            ),
            279 => 
            array (
                'id' => 2781,
                'country_id' => 170,
                'name' => 'Madang',
            ),
            280 => 
            array (
                'id' => 2782,
                'country_id' => 170,
                'name' => 'Manus',
            ),
            281 => 
            array (
                'id' => 2783,
                'country_id' => 170,
                'name' => 'Milne Bay',
            ),
            282 => 
            array (
                'id' => 2784,
                'country_id' => 170,
                'name' => 'Morobe',
            ),
            283 => 
            array (
                'id' => 2785,
                'country_id' => 170,
                'name' => 'National Capital District',
            ),
            284 => 
            array (
                'id' => 2786,
                'country_id' => 170,
                'name' => 'New Ireland',
            ),
            285 => 
            array (
                'id' => 2787,
                'country_id' => 170,
                'name' => 'North Solomons',
            ),
            286 => 
            array (
                'id' => 2788,
                'country_id' => 170,
                'name' => 'Oro',
            ),
            287 => 
            array (
                'id' => 2789,
                'country_id' => 170,
                'name' => 'Sandau',
            ),
            288 => 
            array (
                'id' => 2790,
                'country_id' => 170,
                'name' => 'Simbu',
            ),
            289 => 
            array (
                'id' => 2791,
                'country_id' => 170,
                'name' => 'Southern Highlands',
            ),
            290 => 
            array (
                'id' => 2792,
                'country_id' => 170,
                'name' => 'West New Britai',
            ),
            291 => 
            array (
                'id' => 2793,
                'country_id' => 170,
                'name' => 'Western Highlands',
            ),
            292 => 
            array (
                'id' => 2794,
                'country_id' => 171,
                'name' => 'Alto Paraguay',
            ),
            293 => 
            array (
                'id' => 2795,
                'country_id' => 171,
                'name' => 'Alto Parana',
            ),
            294 => 
            array (
                'id' => 2796,
                'country_id' => 171,
                'name' => 'Amambay',
            ),
            295 => 
            array (
                'id' => 2797,
                'country_id' => 171,
                'name' => 'Asuncio',
            ),
            296 => 
            array (
                'id' => 2798,
                'country_id' => 171,
                'name' => 'Boquero',
            ),
            297 => 
            array (
                'id' => 2799,
                'country_id' => 171,
                'name' => 'Caaguazu',
            ),
            298 => 
            array (
                'id' => 2800,
                'country_id' => 171,
                'name' => 'Caazapa',
            ),
            299 => 
            array (
                'id' => 2801,
                'country_id' => 171,
                'name' => 'Canendiyu',
            ),
            300 => 
            array (
                'id' => 2802,
                'country_id' => 171,
                'name' => 'Central',
            ),
            301 => 
            array (
                'id' => 2803,
                'country_id' => 171,
                'name' => 'Concepcio',
            ),
            302 => 
            array (
                'id' => 2804,
                'country_id' => 171,
                'name' => 'Cordillera',
            ),
            303 => 
            array (
                'id' => 2805,
                'country_id' => 171,
                'name' => 'Guaira',
            ),
            304 => 
            array (
                'id' => 2806,
                'country_id' => 171,
                'name' => 'Itapua',
            ),
            305 => 
            array (
                'id' => 2807,
                'country_id' => 171,
                'name' => 'Misiones',
            ),
            306 => 
            array (
                'id' => 2808,
                'country_id' => 171,
                'name' => 'Neembucu',
            ),
            307 => 
            array (
                'id' => 2809,
                'country_id' => 171,
                'name' => 'Paraguari',
            ),
            308 => 
            array (
                'id' => 2810,
                'country_id' => 171,
                'name' => 'Presidente Hayes',
            ),
            309 => 
            array (
                'id' => 2811,
                'country_id' => 171,
                'name' => 'San Pedro',
            ),
            310 => 
            array (
                'id' => 2812,
                'country_id' => 172,
                'name' => 'Amazonas',
            ),
            311 => 
            array (
                'id' => 2813,
                'country_id' => 172,
                'name' => 'Ancash',
            ),
            312 => 
            array (
                'id' => 2814,
                'country_id' => 172,
                'name' => 'Apurimac',
            ),
            313 => 
            array (
                'id' => 2815,
                'country_id' => 172,
                'name' => 'Arequipa',
            ),
            314 => 
            array (
                'id' => 2816,
                'country_id' => 172,
                'name' => 'Ayacucho',
            ),
            315 => 
            array (
                'id' => 2817,
                'country_id' => 172,
                'name' => 'Cajamarca',
            ),
            316 => 
            array (
                'id' => 2818,
                'country_id' => 172,
                'name' => 'Cusco',
            ),
            317 => 
            array (
                'id' => 2819,
                'country_id' => 172,
                'name' => 'Huancavelica',
            ),
            318 => 
            array (
                'id' => 2820,
                'country_id' => 172,
                'name' => 'Huanuco',
            ),
            319 => 
            array (
                'id' => 2821,
                'country_id' => 172,
                'name' => 'Ica',
            ),
            320 => 
            array (
                'id' => 2822,
                'country_id' => 172,
                'name' => 'Juni',
            ),
            321 => 
            array (
                'id' => 2823,
                'country_id' => 172,
                'name' => 'La Libertad',
            ),
            322 => 
            array (
                'id' => 2824,
                'country_id' => 172,
                'name' => 'Lambayeque',
            ),
            323 => 
            array (
                'id' => 2825,
                'country_id' => 172,
                'name' => 'Lima y Callao',
            ),
            324 => 
            array (
                'id' => 2826,
                'country_id' => 172,
                'name' => 'Loreto',
            ),
            325 => 
            array (
                'id' => 2827,
                'country_id' => 172,
                'name' => 'Madre de Dios',
            ),
            326 => 
            array (
                'id' => 2828,
                'country_id' => 172,
                'name' => 'Moquegua',
            ),
            327 => 
            array (
                'id' => 2829,
                'country_id' => 172,
                'name' => 'Pasco',
            ),
            328 => 
            array (
                'id' => 2830,
                'country_id' => 172,
                'name' => 'Piura',
            ),
            329 => 
            array (
                'id' => 2831,
                'country_id' => 172,
                'name' => 'Puno',
            ),
            330 => 
            array (
                'id' => 2832,
                'country_id' => 172,
                'name' => 'San Marti',
            ),
            331 => 
            array (
                'id' => 2833,
                'country_id' => 172,
                'name' => 'Tacna',
            ),
            332 => 
            array (
                'id' => 2834,
                'country_id' => 172,
                'name' => 'Tumbes',
            ),
            333 => 
            array (
                'id' => 2835,
                'country_id' => 172,
                'name' => 'Ucayali',
            ),
            334 => 
            array (
                'id' => 2836,
                'country_id' => 173,
                'name' => 'Batangas',
            ),
            335 => 
            array (
                'id' => 2837,
                'country_id' => 173,
                'name' => 'Bicol',
            ),
            336 => 
            array (
                'id' => 2838,
                'country_id' => 173,
                'name' => 'Bulaca',
            ),
            337 => 
            array (
                'id' => 2839,
                'country_id' => 173,
                'name' => 'Cagaya',
            ),
            338 => 
            array (
                'id' => 2840,
                'country_id' => 173,
                'name' => 'Caraga',
            ),
            339 => 
            array (
                'id' => 2841,
                'country_id' => 173,
                'name' => 'Central Luzo',
            ),
            340 => 
            array (
                'id' => 2842,
                'country_id' => 173,
                'name' => 'Central Mindanao',
            ),
            341 => 
            array (
                'id' => 2843,
                'country_id' => 173,
                'name' => 'Central Visayas',
            ),
            342 => 
            array (
                'id' => 2844,
                'country_id' => 173,
                'name' => 'Cordillera',
            ),
            343 => 
            array (
                'id' => 2845,
                'country_id' => 173,
                'name' => 'Davao',
            ),
            344 => 
            array (
                'id' => 2846,
                'country_id' => 173,
                'name' => 'Eastern Visayas',
            ),
            345 => 
            array (
                'id' => 2847,
                'country_id' => 173,
                'name' => 'Greater Metropolitan Area',
            ),
            346 => 
            array (
                'id' => 2848,
                'country_id' => 173,
                'name' => 'Ilocos',
            ),
            347 => 
            array (
                'id' => 2849,
                'country_id' => 173,
                'name' => 'Laguna',
            ),
            348 => 
            array (
                'id' => 2850,
                'country_id' => 173,
                'name' => 'Luzo',
            ),
            349 => 
            array (
                'id' => 2851,
                'country_id' => 173,
                'name' => 'Macta',
            ),
            350 => 
            array (
                'id' => 2852,
                'country_id' => 173,
                'name' => 'Metropolitan Manila Area',
            ),
            351 => 
            array (
                'id' => 2853,
                'country_id' => 173,
                'name' => 'Muslim Mindanao',
            ),
            352 => 
            array (
                'id' => 2854,
                'country_id' => 173,
                'name' => 'Northern Mindanao',
            ),
            353 => 
            array (
                'id' => 2855,
                'country_id' => 173,
                'name' => 'Southern Mindanao',
            ),
            354 => 
            array (
                'id' => 2856,
                'country_id' => 173,
                'name' => 'Southern Tagalog',
            ),
            355 => 
            array (
                'id' => 2857,
                'country_id' => 173,
                'name' => 'Western Mindanao',
            ),
            356 => 
            array (
                'id' => 2858,
                'country_id' => 173,
                'name' => 'Western Visayas',
            ),
            357 => 
            array (
                'id' => 2859,
                'country_id' => 174,
                'name' => 'Pitcairn Island',
            ),
            358 => 
            array (
                'id' => 2860,
                'country_id' => 175,
                'name' => 'Biale Blota',
            ),
            359 => 
            array (
                'id' => 2861,
                'country_id' => 175,
                'name' => 'Dobroszyce',
            ),
            360 => 
            array (
                'id' => 2862,
                'country_id' => 175,
                'name' => 'Dolnoslaskie',
            ),
            361 => 
            array (
                'id' => 2863,
                'country_id' => 175,
                'name' => 'Dziekanow Lesny',
            ),
            362 => 
            array (
                'id' => 2864,
                'country_id' => 175,
                'name' => 'Hopowo',
            ),
            363 => 
            array (
                'id' => 2865,
                'country_id' => 175,
                'name' => 'Kartuzy',
            ),
            364 => 
            array (
                'id' => 2866,
                'country_id' => 175,
                'name' => 'Koscia',
            ),
            365 => 
            array (
                'id' => 2867,
                'country_id' => 175,
                'name' => 'Krakow',
            ),
            366 => 
            array (
                'id' => 2868,
                'country_id' => 175,
                'name' => 'Kujawsko-Pomorskie',
            ),
            367 => 
            array (
                'id' => 2869,
                'country_id' => 175,
                'name' => 'Lodzkie',
            ),
            368 => 
            array (
                'id' => 2870,
                'country_id' => 175,
                'name' => 'Lubelskie',
            ),
            369 => 
            array (
                'id' => 2871,
                'country_id' => 175,
                'name' => 'Lubuskie',
            ),
            370 => 
            array (
                'id' => 2872,
                'country_id' => 175,
                'name' => 'Malomice',
            ),
            371 => 
            array (
                'id' => 2873,
                'country_id' => 175,
                'name' => 'Malopolskie',
            ),
            372 => 
            array (
                'id' => 2874,
                'country_id' => 175,
                'name' => 'Mazowieckie',
            ),
            373 => 
            array (
                'id' => 2875,
                'country_id' => 175,
                'name' => 'Mirkow',
            ),
            374 => 
            array (
                'id' => 2876,
                'country_id' => 175,
                'name' => 'Opolskie',
            ),
            375 => 
            array (
                'id' => 2877,
                'country_id' => 175,
                'name' => 'Ostrowiec',
            ),
            376 => 
            array (
                'id' => 2878,
                'country_id' => 175,
                'name' => 'Podkarpackie',
            ),
            377 => 
            array (
                'id' => 2879,
                'country_id' => 175,
                'name' => 'Podlaskie',
            ),
            378 => 
            array (
                'id' => 2880,
                'country_id' => 175,
                'name' => 'Polska',
            ),
            379 => 
            array (
                'id' => 2881,
                'country_id' => 175,
                'name' => 'Pomorskie',
            ),
            380 => 
            array (
                'id' => 2882,
                'country_id' => 175,
                'name' => 'Pozna',
            ),
            381 => 
            array (
                'id' => 2883,
                'country_id' => 175,
                'name' => 'Pruszkow',
            ),
            382 => 
            array (
                'id' => 2884,
                'country_id' => 175,
                'name' => 'Rymanowska',
            ),
            383 => 
            array (
                'id' => 2885,
                'country_id' => 175,
                'name' => 'Rzeszow',
            ),
            384 => 
            array (
                'id' => 2886,
                'country_id' => 175,
                'name' => 'Slaskie',
            ),
            385 => 
            array (
                'id' => 2887,
                'country_id' => 175,
                'name' => 'Stare Pole',
            ),
            386 => 
            array (
                'id' => 2888,
                'country_id' => 175,
                'name' => 'Swietokrzyskie',
            ),
            387 => 
            array (
                'id' => 2889,
                'country_id' => 175,
                'name' => 'Warminsko-Mazurskie',
            ),
            388 => 
            array (
                'id' => 2890,
                'country_id' => 175,
                'name' => 'Warsaw',
            ),
            389 => 
            array (
                'id' => 2891,
                'country_id' => 175,
                'name' => 'Wejherowo',
            ),
            390 => 
            array (
                'id' => 2892,
                'country_id' => 175,
                'name' => 'Wielkopolskie',
            ),
            391 => 
            array (
                'id' => 2893,
                'country_id' => 175,
                'name' => 'Wroclaw',
            ),
            392 => 
            array (
                'id' => 2894,
                'country_id' => 175,
                'name' => 'Zachodnio-Pomorskie',
            ),
            393 => 
            array (
                'id' => 2895,
                'country_id' => 175,
                'name' => 'Zukowo',
            ),
            394 => 
            array (
                'id' => 2896,
                'country_id' => 176,
                'name' => 'Abrantes',
            ),
            395 => 
            array (
                'id' => 2897,
                'country_id' => 176,
                'name' => 'Acores',
            ),
            396 => 
            array (
                'id' => 2898,
                'country_id' => 176,
                'name' => 'Alentejo',
            ),
            397 => 
            array (
                'id' => 2899,
                'country_id' => 176,
                'name' => 'Algarve',
            ),
            398 => 
            array (
                'id' => 2900,
                'country_id' => 176,
                'name' => 'Braga',
            ),
            399 => 
            array (
                'id' => 2901,
                'country_id' => 176,
                'name' => 'Centro',
            ),
            400 => 
            array (
                'id' => 2902,
                'country_id' => 176,
                'name' => 'Distrito de Leiria',
            ),
            401 => 
            array (
                'id' => 2903,
                'country_id' => 176,
                'name' => 'Distrito de Viana do Castelo',
            ),
            402 => 
            array (
                'id' => 2904,
                'country_id' => 176,
                'name' => 'Distrito de Vila Real',
            ),
            403 => 
            array (
                'id' => 2905,
                'country_id' => 176,
                'name' => 'Distrito do Porto',
            ),
            404 => 
            array (
                'id' => 2906,
                'country_id' => 176,
                'name' => 'Lisboa e Vale do Tejo',
            ),
            405 => 
            array (
                'id' => 2907,
                'country_id' => 176,
                'name' => 'Madeira',
            ),
            406 => 
            array (
                'id' => 2908,
                'country_id' => 176,
                'name' => 'Norte',
            ),
            407 => 
            array (
                'id' => 2909,
                'country_id' => 176,
                'name' => 'Paivas',
            ),
            408 => 
            array (
                'id' => 2910,
                'country_id' => 177,
                'name' => 'Arecibo',
            ),
            409 => 
            array (
                'id' => 2911,
                'country_id' => 177,
                'name' => 'Bayamo',
            ),
            410 => 
            array (
                'id' => 2912,
                'country_id' => 177,
                'name' => 'Carolina',
            ),
            411 => 
            array (
                'id' => 2913,
                'country_id' => 177,
                'name' => 'Florida',
            ),
            412 => 
            array (
                'id' => 2914,
                'country_id' => 177,
                'name' => 'Guayama',
            ),
            413 => 
            array (
                'id' => 2915,
                'country_id' => 177,
                'name' => 'Humacao',
            ),
            414 => 
            array (
                'id' => 2916,
                'country_id' => 177,
                'name' => 'Mayaguez-Aguadilla',
            ),
            415 => 
            array (
                'id' => 2917,
                'country_id' => 177,
                'name' => 'Ponce',
            ),
            416 => 
            array (
                'id' => 2918,
                'country_id' => 177,
                'name' => 'Salinas',
            ),
            417 => 
            array (
                'id' => 2919,
                'country_id' => 177,
                'name' => 'San Jua',
            ),
            418 => 
            array (
                'id' => 2920,
                'country_id' => 178,
                'name' => 'Doha',
            ),
            419 => 
            array (
                'id' => 2921,
                'country_id' => 178,
                'name' => 'Jarian-al-Batnah',
            ),
            420 => 
            array (
                'id' => 2922,
                'country_id' => 178,
                'name' => 'Umm Salal',
            ),
            421 => 
            array (
                'id' => 2923,
                'country_id' => 178,
                'name' => 'ad-Dawhah',
            ),
            422 => 
            array (
                'id' => 2924,
                'country_id' => 178,
                'name' => 'al-Ghuwayriyah',
            ),
            423 => 
            array (
                'id' => 2925,
                'country_id' => 178,
                'name' => 'al-Jumayliyah',
            ),
            424 => 
            array (
                'id' => 2926,
                'country_id' => 178,
                'name' => 'al-Khawr',
            ),
            425 => 
            array (
                'id' => 2927,
                'country_id' => 178,
                'name' => 'al-Wakrah',
            ),
            426 => 
            array (
                'id' => 2928,
                'country_id' => 178,
                'name' => 'ar-Rayya',
            ),
            427 => 
            array (
                'id' => 2929,
                'country_id' => 178,
                'name' => 'ash-Shamal',
            ),
            428 => 
            array (
                'id' => 2930,
                'country_id' => 179,
                'name' => 'Saint-Benoit',
            ),
            429 => 
            array (
                'id' => 2931,
                'country_id' => 179,
                'name' => 'Saint-Denis',
            ),
            430 => 
            array (
                'id' => 2932,
                'country_id' => 179,
                'name' => 'Saint-Paul',
            ),
            431 => 
            array (
                'id' => 2933,
                'country_id' => 179,
                'name' => 'Saint-Pierre',
            ),
            432 => 
            array (
                'id' => 2934,
                'country_id' => 180,
                'name' => 'Alba',
            ),
            433 => 
            array (
                'id' => 2935,
                'country_id' => 180,
                'name' => 'Arad',
            ),
            434 => 
            array (
                'id' => 2936,
                'country_id' => 180,
                'name' => 'Arges',
            ),
            435 => 
            array (
                'id' => 2937,
                'country_id' => 180,
                'name' => 'Bacau',
            ),
            436 => 
            array (
                'id' => 2938,
                'country_id' => 180,
                'name' => 'Bihor',
            ),
            437 => 
            array (
                'id' => 2939,
                'country_id' => 180,
                'name' => 'Bistrita-Nasaud',
            ),
            438 => 
            array (
                'id' => 2940,
                'country_id' => 180,
                'name' => 'Botosani',
            ),
            439 => 
            array (
                'id' => 2941,
                'country_id' => 180,
                'name' => 'Braila',
            ),
            440 => 
            array (
                'id' => 2942,
                'country_id' => 180,
                'name' => 'Brasov',
            ),
            441 => 
            array (
                'id' => 2943,
                'country_id' => 180,
                'name' => 'Bucuresti',
            ),
            442 => 
            array (
                'id' => 2944,
                'country_id' => 180,
                'name' => 'Buzau',
            ),
            443 => 
            array (
                'id' => 2945,
                'country_id' => 180,
                'name' => 'Calarasi',
            ),
            444 => 
            array (
                'id' => 2946,
                'country_id' => 180,
                'name' => 'Caras-Severi',
            ),
            445 => 
            array (
                'id' => 2947,
                'country_id' => 180,
                'name' => 'Cluj',
            ),
            446 => 
            array (
                'id' => 2948,
                'country_id' => 180,
                'name' => 'Constanta',
            ),
            447 => 
            array (
                'id' => 2949,
                'country_id' => 180,
                'name' => 'Covasna',
            ),
            448 => 
            array (
                'id' => 2950,
                'country_id' => 180,
                'name' => 'Dambovita',
            ),
            449 => 
            array (
                'id' => 2951,
                'country_id' => 180,
                'name' => 'Dolj',
            ),
            450 => 
            array (
                'id' => 2952,
                'country_id' => 180,
                'name' => 'Galati',
            ),
            451 => 
            array (
                'id' => 2953,
                'country_id' => 180,
                'name' => 'Giurgiu',
            ),
            452 => 
            array (
                'id' => 2954,
                'country_id' => 180,
                'name' => 'Gorj',
            ),
            453 => 
            array (
                'id' => 2955,
                'country_id' => 180,
                'name' => 'Harghita',
            ),
            454 => 
            array (
                'id' => 2956,
                'country_id' => 180,
                'name' => 'Hunedoara',
            ),
            455 => 
            array (
                'id' => 2957,
                'country_id' => 180,
                'name' => 'Ialomita',
            ),
            456 => 
            array (
                'id' => 2958,
                'country_id' => 180,
                'name' => 'Iasi',
            ),
            457 => 
            array (
                'id' => 2959,
                'country_id' => 180,
                'name' => 'Ilfov',
            ),
            458 => 
            array (
                'id' => 2960,
                'country_id' => 180,
                'name' => 'Maramures',
            ),
            459 => 
            array (
                'id' => 2961,
                'country_id' => 180,
                'name' => 'Mehedinti',
            ),
            460 => 
            array (
                'id' => 2962,
                'country_id' => 180,
                'name' => 'Mures',
            ),
            461 => 
            array (
                'id' => 2963,
                'country_id' => 180,
                'name' => 'Neamt',
            ),
            462 => 
            array (
                'id' => 2964,
                'country_id' => 180,
                'name' => 'Olt',
            ),
            463 => 
            array (
                'id' => 2965,
                'country_id' => 180,
                'name' => 'Prahova',
            ),
            464 => 
            array (
                'id' => 2966,
                'country_id' => 180,
                'name' => 'Salaj',
            ),
            465 => 
            array (
                'id' => 2967,
                'country_id' => 180,
                'name' => 'Satu Mare',
            ),
            466 => 
            array (
                'id' => 2968,
                'country_id' => 180,
                'name' => 'Sibiu',
            ),
            467 => 
            array (
                'id' => 2969,
                'country_id' => 180,
                'name' => 'Sondelor',
            ),
            468 => 
            array (
                'id' => 2970,
                'country_id' => 180,
                'name' => 'Suceava',
            ),
            469 => 
            array (
                'id' => 2971,
                'country_id' => 180,
                'name' => 'Teleorma',
            ),
            470 => 
            array (
                'id' => 2972,
                'country_id' => 180,
                'name' => 'Timis',
            ),
            471 => 
            array (
                'id' => 2973,
                'country_id' => 180,
                'name' => 'Tulcea',
            ),
            472 => 
            array (
                'id' => 2974,
                'country_id' => 180,
                'name' => 'Valcea',
            ),
            473 => 
            array (
                'id' => 2975,
                'country_id' => 180,
                'name' => 'Vaslui',
            ),
            474 => 
            array (
                'id' => 2976,
                'country_id' => 180,
                'name' => 'Vrancea',
            ),
            475 => 
            array (
                'id' => 2977,
                'country_id' => 181,
                'name' => 'Adygeja',
            ),
            476 => 
            array (
                'id' => 2978,
                'country_id' => 181,
                'name' => 'Aga',
            ),
            477 => 
            array (
                'id' => 2979,
                'country_id' => 181,
                'name' => 'Alanija',
            ),
            478 => 
            array (
                'id' => 2980,
                'country_id' => 181,
                'name' => 'Altaj',
            ),
            479 => 
            array (
                'id' => 2981,
                'country_id' => 181,
                'name' => 'Amur',
            ),
            480 => 
            array (
                'id' => 2982,
                'country_id' => 181,
                'name' => 'Arhangelsk',
            ),
            481 => 
            array (
                'id' => 2983,
                'country_id' => 181,
                'name' => 'Astraha',
            ),
            482 => 
            array (
                'id' => 2984,
                'country_id' => 181,
                'name' => 'Bashkortosta',
            ),
            483 => 
            array (
                'id' => 2985,
                'country_id' => 181,
                'name' => 'Belgorod',
            ),
            484 => 
            array (
                'id' => 2986,
                'country_id' => 181,
                'name' => 'Brjansk',
            ),
            485 => 
            array (
                'id' => 2987,
                'country_id' => 181,
                'name' => 'Burjatija',
            ),
            486 => 
            array (
                'id' => 2988,
                'country_id' => 181,
                'name' => 'Chechenija',
            ),
            487 => 
            array (
                'id' => 2989,
                'country_id' => 181,
                'name' => 'Cheljabinsk',
            ),
            488 => 
            array (
                'id' => 2990,
                'country_id' => 181,
                'name' => 'Chita',
            ),
            489 => 
            array (
                'id' => 2991,
                'country_id' => 181,
                'name' => 'Chukotka',
            ),
            490 => 
            array (
                'id' => 2992,
                'country_id' => 181,
                'name' => 'Chuvashija',
            ),
            491 => 
            array (
                'id' => 2993,
                'country_id' => 181,
                'name' => 'Dagesta',
            ),
            492 => 
            array (
                'id' => 2994,
                'country_id' => 181,
                'name' => 'Evenkija',
            ),
            493 => 
            array (
                'id' => 2995,
                'country_id' => 181,
                'name' => 'Gorno-Altaj',
            ),
            494 => 
            array (
                'id' => 2996,
                'country_id' => 181,
                'name' => 'Habarovsk',
            ),
            495 => 
            array (
                'id' => 2997,
                'country_id' => 181,
                'name' => 'Hakasija',
            ),
            496 => 
            array (
                'id' => 2998,
                'country_id' => 181,
                'name' => 'Hanty-Mansija',
            ),
            497 => 
            array (
                'id' => 2999,
                'country_id' => 181,
                'name' => 'Ingusetija',
            ),
            498 => 
            array (
                'id' => 3000,
                'country_id' => 181,
                'name' => 'Irkutsk',
            ),
            499 => 
            array (
                'id' => 3001,
                'country_id' => 181,
                'name' => 'Ivanovo',
            ),
        ));
        \DB::table('tbl_states')->insert(array (
            0 => 
            array (
                'id' => 3002,
                'country_id' => 181,
                'name' => 'Jamalo-Nenets',
            ),
            1 => 
            array (
                'id' => 3003,
                'country_id' => 181,
                'name' => 'Jaroslavl',
            ),
            2 => 
            array (
                'id' => 3004,
                'country_id' => 181,
                'name' => 'Jevrej',
            ),
            3 => 
            array (
                'id' => 3005,
                'country_id' => 181,
                'name' => 'Kabardino-Balkarija',
            ),
            4 => 
            array (
                'id' => 3006,
                'country_id' => 181,
                'name' => 'Kaliningrad',
            ),
            5 => 
            array (
                'id' => 3007,
                'country_id' => 181,
                'name' => 'Kalmykija',
            ),
            6 => 
            array (
                'id' => 3008,
                'country_id' => 181,
                'name' => 'Kaluga',
            ),
            7 => 
            array (
                'id' => 3009,
                'country_id' => 181,
                'name' => 'Kamchatka',
            ),
            8 => 
            array (
                'id' => 3010,
                'country_id' => 181,
                'name' => 'Karachaj-Cherkessija',
            ),
            9 => 
            array (
                'id' => 3011,
                'country_id' => 181,
                'name' => 'Karelija',
            ),
            10 => 
            array (
                'id' => 3012,
                'country_id' => 181,
                'name' => 'Kemerovo',
            ),
            11 => 
            array (
                'id' => 3013,
                'country_id' => 181,
                'name' => 'Khabarovskiy Kray',
            ),
            12 => 
            array (
                'id' => 3014,
                'country_id' => 181,
                'name' => 'Kirov',
            ),
            13 => 
            array (
                'id' => 3015,
                'country_id' => 181,
                'name' => 'Komi',
            ),
            14 => 
            array (
                'id' => 3016,
                'country_id' => 181,
                'name' => 'Komi-Permjakija',
            ),
            15 => 
            array (
                'id' => 3017,
                'country_id' => 181,
                'name' => 'Korjakija',
            ),
            16 => 
            array (
                'id' => 3018,
                'country_id' => 181,
                'name' => 'Kostroma',
            ),
            17 => 
            array (
                'id' => 3019,
                'country_id' => 181,
                'name' => 'Krasnodar',
            ),
            18 => 
            array (
                'id' => 3020,
                'country_id' => 181,
                'name' => 'Krasnojarsk',
            ),
            19 => 
            array (
                'id' => 3021,
                'country_id' => 181,
                'name' => 'Krasnoyarskiy Kray',
            ),
            20 => 
            array (
                'id' => 3022,
                'country_id' => 181,
                'name' => 'Kurga',
            ),
            21 => 
            array (
                'id' => 3023,
                'country_id' => 181,
                'name' => 'Kursk',
            ),
            22 => 
            array (
                'id' => 3024,
                'country_id' => 181,
                'name' => 'Leningrad',
            ),
            23 => 
            array (
                'id' => 3025,
                'country_id' => 181,
                'name' => 'Lipeck',
            ),
            24 => 
            array (
                'id' => 3026,
                'country_id' => 181,
                'name' => 'Magada',
            ),
            25 => 
            array (
                'id' => 3027,
                'country_id' => 181,
                'name' => 'Marij El',
            ),
            26 => 
            array (
                'id' => 3028,
                'country_id' => 181,
                'name' => 'Mordovija',
            ),
            27 => 
            array (
                'id' => 3029,
                'country_id' => 181,
                'name' => 'Moscow',
            ),
            28 => 
            array (
                'id' => 3030,
                'country_id' => 181,
                'name' => 'Moskovskaja Oblast',
            ),
            29 => 
            array (
                'id' => 3031,
                'country_id' => 181,
                'name' => 'Moskovskaya Oblast',
            ),
            30 => 
            array (
                'id' => 3032,
                'country_id' => 181,
                'name' => 'Moskva',
            ),
            31 => 
            array (
                'id' => 3033,
                'country_id' => 181,
                'name' => 'Murmansk',
            ),
            32 => 
            array (
                'id' => 3034,
                'country_id' => 181,
                'name' => 'Nenets',
            ),
            33 => 
            array (
                'id' => 3035,
                'country_id' => 181,
                'name' => 'Nizhnij Novgorod',
            ),
            34 => 
            array (
                'id' => 3036,
                'country_id' => 181,
                'name' => 'Novgorod',
            ),
            35 => 
            array (
                'id' => 3037,
                'country_id' => 181,
                'name' => 'Novokusnezk',
            ),
            36 => 
            array (
                'id' => 3038,
                'country_id' => 181,
                'name' => 'Novosibirsk',
            ),
            37 => 
            array (
                'id' => 3039,
                'country_id' => 181,
                'name' => 'Omsk',
            ),
            38 => 
            array (
                'id' => 3040,
                'country_id' => 181,
                'name' => 'Orenburg',
            ),
            39 => 
            array (
                'id' => 3041,
                'country_id' => 181,
                'name' => 'Orjol',
            ),
            40 => 
            array (
                'id' => 3042,
                'country_id' => 181,
                'name' => 'Penza',
            ),
            41 => 
            array (
                'id' => 3043,
                'country_id' => 181,
                'name' => 'Perm',
            ),
            42 => 
            array (
                'id' => 3044,
                'country_id' => 181,
                'name' => 'Primorje',
            ),
            43 => 
            array (
                'id' => 3045,
                'country_id' => 181,
                'name' => 'Pskov',
            ),
            44 => 
            array (
                'id' => 3046,
                'country_id' => 181,
                'name' => 'Pskovskaya Oblast',
            ),
            45 => 
            array (
                'id' => 3047,
                'country_id' => 181,
                'name' => 'Rjaza',
            ),
            46 => 
            array (
                'id' => 3048,
                'country_id' => 181,
                'name' => 'Rostov',
            ),
            47 => 
            array (
                'id' => 3049,
                'country_id' => 181,
                'name' => 'Saha',
            ),
            48 => 
            array (
                'id' => 3050,
                'country_id' => 181,
                'name' => 'Sahali',
            ),
            49 => 
            array (
                'id' => 3051,
                'country_id' => 181,
                'name' => 'Samara',
            ),
            50 => 
            array (
                'id' => 3052,
                'country_id' => 181,
                'name' => 'Samarskaya',
            ),
            51 => 
            array (
                'id' => 3053,
                'country_id' => 181,
                'name' => 'Sankt-Peterburg',
            ),
            52 => 
            array (
                'id' => 3054,
                'country_id' => 181,
                'name' => 'Saratov',
            ),
            53 => 
            array (
                'id' => 3055,
                'country_id' => 181,
                'name' => 'Smolensk',
            ),
            54 => 
            array (
                'id' => 3056,
                'country_id' => 181,
                'name' => 'Stavropol',
            ),
            55 => 
            array (
                'id' => 3057,
                'country_id' => 181,
                'name' => 'Sverdlovsk',
            ),
            56 => 
            array (
                'id' => 3058,
                'country_id' => 181,
                'name' => 'Tajmyrija',
            ),
            57 => 
            array (
                'id' => 3059,
                'country_id' => 181,
                'name' => 'Tambov',
            ),
            58 => 
            array (
                'id' => 3060,
                'country_id' => 181,
                'name' => 'Tatarsta',
            ),
            59 => 
            array (
                'id' => 3061,
                'country_id' => 181,
                'name' => 'Tjume',
            ),
            60 => 
            array (
                'id' => 3062,
                'country_id' => 181,
                'name' => 'Tomsk',
            ),
            61 => 
            array (
                'id' => 3063,
                'country_id' => 181,
                'name' => 'Tula',
            ),
            62 => 
            array (
                'id' => 3064,
                'country_id' => 181,
                'name' => 'Tver',
            ),
            63 => 
            array (
                'id' => 3065,
                'country_id' => 181,
                'name' => 'Tyva',
            ),
            64 => 
            array (
                'id' => 3066,
                'country_id' => 181,
                'name' => 'Udmurtija',
            ),
            65 => 
            array (
                'id' => 3067,
                'country_id' => 181,
                'name' => 'Uljanovsk',
            ),
            66 => 
            array (
                'id' => 3068,
                'country_id' => 181,
                'name' => 'Ulyanovskaya Oblast',
            ),
            67 => 
            array (
                'id' => 3069,
                'country_id' => 181,
                'name' => 'Ust-Orda',
            ),
            68 => 
            array (
                'id' => 3070,
                'country_id' => 181,
                'name' => 'Vladimir',
            ),
            69 => 
            array (
                'id' => 3071,
                'country_id' => 181,
                'name' => 'Volgograd',
            ),
            70 => 
            array (
                'id' => 3072,
                'country_id' => 181,
                'name' => 'Vologda',
            ),
            71 => 
            array (
                'id' => 3073,
                'country_id' => 181,
                'name' => 'Voronezh',
            ),
            72 => 
            array (
                'id' => 3074,
                'country_id' => 182,
                'name' => 'Butare',
            ),
            73 => 
            array (
                'id' => 3075,
                'country_id' => 182,
                'name' => 'Byumba',
            ),
            74 => 
            array (
                'id' => 3076,
                'country_id' => 182,
                'name' => 'Cyangugu',
            ),
            75 => 
            array (
                'id' => 3077,
                'country_id' => 182,
                'name' => 'Gikongoro',
            ),
            76 => 
            array (
                'id' => 3078,
                'country_id' => 182,
                'name' => 'Gisenyi',
            ),
            77 => 
            array (
                'id' => 3079,
                'country_id' => 182,
                'name' => 'Gitarama',
            ),
            78 => 
            array (
                'id' => 3080,
                'country_id' => 182,
                'name' => 'Kibungo',
            ),
            79 => 
            array (
                'id' => 3081,
                'country_id' => 182,
                'name' => 'Kibuye',
            ),
            80 => 
            array (
                'id' => 3082,
                'country_id' => 182,
                'name' => 'Kigali-ngali',
            ),
            81 => 
            array (
                'id' => 3083,
                'country_id' => 182,
                'name' => 'Ruhengeri',
            ),
            82 => 
            array (
                'id' => 3084,
                'country_id' => 183,
                'name' => 'Ascensio',
            ),
            83 => 
            array (
                'id' => 3085,
                'country_id' => 183,
                'name' => 'Gough Island',
            ),
            84 => 
            array (
                'id' => 3086,
                'country_id' => 183,
                'name' => 'Saint Helena',
            ),
            85 => 
            array (
                'id' => 3087,
                'country_id' => 183,
                'name' => 'Tristan da Cunha',
            ),
            86 => 
            array (
                'id' => 3088,
                'country_id' => 184,
                'name' => 'Christ Church Nichola Tow',
            ),
            87 => 
            array (
                'id' => 3089,
                'country_id' => 184,
                'name' => 'Saint Anne Sandy Point',
            ),
            88 => 
            array (
                'id' => 3090,
                'country_id' => 184,
                'name' => 'Saint George Basseterre',
            ),
            89 => 
            array (
                'id' => 3091,
                'country_id' => 184,
                'name' => 'Saint George Gingerland',
            ),
            90 => 
            array (
                'id' => 3092,
                'country_id' => 184,
                'name' => 'Saint James Windward',
            ),
            91 => 
            array (
                'id' => 3093,
                'country_id' => 184,
                'name' => 'Saint John Capesterre',
            ),
            92 => 
            array (
                'id' => 3094,
                'country_id' => 184,
                'name' => 'Saint John Figtree',
            ),
            93 => 
            array (
                'id' => 3095,
                'country_id' => 184,
                'name' => 'Saint Mary Cayo',
            ),
            94 => 
            array (
                'id' => 3096,
                'country_id' => 184,
                'name' => 'Saint Paul Capesterre',
            ),
            95 => 
            array (
                'id' => 3097,
                'country_id' => 184,
                'name' => 'Saint Paul Charlestow',
            ),
            96 => 
            array (
                'id' => 3098,
                'country_id' => 184,
                'name' => 'Saint Peter Basseterre',
            ),
            97 => 
            array (
                'id' => 3099,
                'country_id' => 184,
                'name' => 'Saint Thomas Lowland',
            ),
            98 => 
            array (
                'id' => 3100,
                'country_id' => 184,
                'name' => 'Saint Thomas Middle Island',
            ),
            99 => 
            array (
                'id' => 3101,
                'country_id' => 184,
                'name' => 'Trinity Palmetto Point',
            ),
            100 => 
            array (
                'id' => 3102,
                'country_id' => 185,
                'name' => 'Anse-la-Raye',
            ),
            101 => 
            array (
                'id' => 3103,
                'country_id' => 185,
                'name' => 'Canaries',
            ),
            102 => 
            array (
                'id' => 3104,
                'country_id' => 185,
                'name' => 'Castries',
            ),
            103 => 
            array (
                'id' => 3105,
                'country_id' => 185,
                'name' => 'Choiseul',
            ),
            104 => 
            array (
                'id' => 3106,
                'country_id' => 185,
                'name' => 'Dennery',
            ),
            105 => 
            array (
                'id' => 3107,
                'country_id' => 185,
                'name' => 'Gros Inlet',
            ),
            106 => 
            array (
                'id' => 3108,
                'country_id' => 185,
                'name' => 'Laborie',
            ),
            107 => 
            array (
                'id' => 3109,
                'country_id' => 185,
                'name' => 'Micoud',
            ),
            108 => 
            array (
                'id' => 3110,
                'country_id' => 185,
                'name' => 'Soufriere',
            ),
            109 => 
            array (
                'id' => 3111,
                'country_id' => 185,
                'name' => 'Vieux Fort',
            ),
            110 => 
            array (
                'id' => 3112,
                'country_id' => 186,
                'name' => 'Miquelon-Langlade',
            ),
            111 => 
            array (
                'id' => 3113,
                'country_id' => 186,
                'name' => 'Saint-Pierre',
            ),
            112 => 
            array (
                'id' => 3114,
                'country_id' => 187,
                'name' => 'Charlotte',
            ),
            113 => 
            array (
                'id' => 3115,
                'country_id' => 187,
                'name' => 'Grenadines',
            ),
            114 => 
            array (
                'id' => 3116,
                'country_id' => 187,
                'name' => 'Saint Andrew',
            ),
            115 => 
            array (
                'id' => 3117,
                'country_id' => 187,
                'name' => 'Saint David',
            ),
            116 => 
            array (
                'id' => 3118,
                'country_id' => 187,
                'name' => 'Saint George',
            ),
            117 => 
            array (
                'id' => 3119,
                'country_id' => 187,
                'name' => 'Saint Patrick',
            ),
            118 => 
            array (
                'id' => 3120,
                'country_id' => 188,
                'name' => 'A\'ana',
            ),
            119 => 
            array (
                'id' => 3121,
                'country_id' => 188,
                'name' => 'Aiga-i-le-Tai',
            ),
            120 => 
            array (
                'id' => 3122,
                'country_id' => 188,
                'name' => 'Atua',
            ),
            121 => 
            array (
                'id' => 3123,
                'country_id' => 188,
                'name' => 'Fa\'asaleleaga',
            ),
            122 => 
            array (
                'id' => 3124,
                'country_id' => 188,
                'name' => 'Gaga\'emauga',
            ),
            123 => 
            array (
                'id' => 3125,
                'country_id' => 188,
                'name' => 'Gagaifomauga',
            ),
            124 => 
            array (
                'id' => 3126,
                'country_id' => 188,
                'name' => 'Palauli',
            ),
            125 => 
            array (
                'id' => 3127,
                'country_id' => 188,
                'name' => 'Satupa\'itea',
            ),
            126 => 
            array (
                'id' => 3128,
                'country_id' => 188,
                'name' => 'Tuamasaga',
            ),
            127 => 
            array (
                'id' => 3129,
                'country_id' => 188,
                'name' => 'Va\'a-o-Fonoti',
            ),
            128 => 
            array (
                'id' => 3130,
                'country_id' => 188,
                'name' => 'Vaisigano',
            ),
            129 => 
            array (
                'id' => 3131,
                'country_id' => 189,
                'name' => 'Acquaviva',
            ),
            130 => 
            array (
                'id' => 3132,
                'country_id' => 189,
                'name' => 'Borgo Maggiore',
            ),
            131 => 
            array (
                'id' => 3133,
                'country_id' => 189,
                'name' => 'Chiesanuova',
            ),
            132 => 
            array (
                'id' => 3134,
                'country_id' => 189,
                'name' => 'Domagnano',
            ),
            133 => 
            array (
                'id' => 3135,
                'country_id' => 189,
                'name' => 'Faetano',
            ),
            134 => 
            array (
                'id' => 3136,
                'country_id' => 189,
                'name' => 'Fiorentino',
            ),
            135 => 
            array (
                'id' => 3137,
                'country_id' => 189,
                'name' => 'Montegiardino',
            ),
            136 => 
            array (
                'id' => 3138,
                'country_id' => 189,
                'name' => 'San Marino',
            ),
            137 => 
            array (
                'id' => 3139,
                'country_id' => 189,
                'name' => 'Serravalle',
            ),
            138 => 
            array (
                'id' => 3140,
                'country_id' => 190,
                'name' => 'Agua Grande',
            ),
            139 => 
            array (
                'id' => 3141,
                'country_id' => 190,
                'name' => 'Cantagalo',
            ),
            140 => 
            array (
                'id' => 3142,
                'country_id' => 190,
                'name' => 'Lemba',
            ),
            141 => 
            array (
                'id' => 3143,
                'country_id' => 190,
                'name' => 'Lobata',
            ),
            142 => 
            array (
                'id' => 3144,
                'country_id' => 190,
                'name' => 'Me-Zochi',
            ),
            143 => 
            array (
                'id' => 3145,
                'country_id' => 190,
                'name' => 'Pague',
            ),
            144 => 
            array (
                'id' => 3146,
                'country_id' => 191,
                'name' => 'Al Khobar',
            ),
            145 => 
            array (
                'id' => 3147,
                'country_id' => 191,
                'name' => 'Aseer',
            ),
            146 => 
            array (
                'id' => 3148,
                'country_id' => 191,
                'name' => 'Ash Sharqiyah',
            ),
            147 => 
            array (
                'id' => 3149,
                'country_id' => 191,
                'name' => 'Asir',
            ),
            148 => 
            array (
                'id' => 3150,
                'country_id' => 191,
                'name' => 'Central Province',
            ),
            149 => 
            array (
                'id' => 3151,
                'country_id' => 191,
                'name' => 'Eastern Province',
            ),
            150 => 
            array (
                'id' => 3152,
                'country_id' => 191,
                'name' => 'Ha\'il',
            ),
            151 => 
            array (
                'id' => 3153,
                'country_id' => 191,
                'name' => 'Jawf',
            ),
            152 => 
            array (
                'id' => 3154,
                'country_id' => 191,
                'name' => 'Jiza',
            ),
            153 => 
            array (
                'id' => 3155,
                'country_id' => 191,
                'name' => 'Makkah',
            ),
            154 => 
            array (
                'id' => 3156,
                'country_id' => 191,
                'name' => 'Najra',
            ),
            155 => 
            array (
                'id' => 3157,
                'country_id' => 191,
                'name' => 'Qasim',
            ),
            156 => 
            array (
                'id' => 3158,
                'country_id' => 191,
                'name' => 'Tabuk',
            ),
            157 => 
            array (
                'id' => 3159,
                'country_id' => 191,
                'name' => 'Western Province',
            ),
            158 => 
            array (
                'id' => 3160,
                'country_id' => 191,
                'name' => 'al-Bahah',
            ),
            159 => 
            array (
                'id' => 3161,
                'country_id' => 191,
                'name' => 'al-Hudud-ash-Shamaliyah',
            ),
            160 => 
            array (
                'id' => 3162,
                'country_id' => 191,
                'name' => 'al-Madinah',
            ),
            161 => 
            array (
                'id' => 3163,
                'country_id' => 191,
                'name' => 'ar-Riyad',
            ),
            162 => 
            array (
                'id' => 3164,
                'country_id' => 192,
                'name' => 'Dakar',
            ),
            163 => 
            array (
                'id' => 3165,
                'country_id' => 192,
                'name' => 'Diourbel',
            ),
            164 => 
            array (
                'id' => 3166,
                'country_id' => 192,
                'name' => 'Fatick',
            ),
            165 => 
            array (
                'id' => 3167,
                'country_id' => 192,
                'name' => 'Kaolack',
            ),
            166 => 
            array (
                'id' => 3168,
                'country_id' => 192,
                'name' => 'Kolda',
            ),
            167 => 
            array (
                'id' => 3169,
                'country_id' => 192,
                'name' => 'Louga',
            ),
            168 => 
            array (
                'id' => 3170,
                'country_id' => 192,
                'name' => 'Saint-Louis',
            ),
            169 => 
            array (
                'id' => 3171,
                'country_id' => 192,
                'name' => 'Tambacounda',
            ),
            170 => 
            array (
                'id' => 3172,
                'country_id' => 192,
                'name' => 'Thies',
            ),
            171 => 
            array (
                'id' => 3173,
                'country_id' => 192,
                'name' => 'Ziguinchor',
            ),
            172 => 
            array (
                'id' => 3174,
                'country_id' => 193,
                'name' => 'Central Serbia',
            ),
            173 => 
            array (
                'id' => 3175,
                'country_id' => 193,
                'name' => 'Kosovo and Metohija',
            ),
            174 => 
            array (
                'id' => 3176,
                'country_id' => 193,
                'name' => 'Vojvodina',
            ),
            175 => 
            array (
                'id' => 3177,
                'country_id' => 194,
                'name' => 'Anse Boileau',
            ),
            176 => 
            array (
                'id' => 3178,
                'country_id' => 194,
                'name' => 'Anse Royale',
            ),
            177 => 
            array (
                'id' => 3179,
                'country_id' => 194,
                'name' => 'Cascade',
            ),
            178 => 
            array (
                'id' => 3180,
                'country_id' => 194,
                'name' => 'Takamaka',
            ),
            179 => 
            array (
                'id' => 3181,
                'country_id' => 194,
                'name' => 'Victoria',
            ),
            180 => 
            array (
                'id' => 3182,
                'country_id' => 195,
                'name' => 'Easter',
            ),
            181 => 
            array (
                'id' => 3183,
                'country_id' => 195,
                'name' => 'Norther',
            ),
            182 => 
            array (
                'id' => 3184,
                'country_id' => 195,
                'name' => 'Souther',
            ),
            183 => 
            array (
                'id' => 3185,
                'country_id' => 195,
                'name' => 'Wester',
            ),
            184 => 
            array (
                'id' => 3186,
                'country_id' => 196,
                'name' => 'Singapore',
            ),
            185 => 
            array (
                'id' => 3187,
                'country_id' => 197,
                'name' => 'Banskobystricky',
            ),
            186 => 
            array (
                'id' => 3188,
                'country_id' => 197,
                'name' => 'Bratislavsky',
            ),
            187 => 
            array (
                'id' => 3189,
                'country_id' => 197,
                'name' => 'Kosicky',
            ),
            188 => 
            array (
                'id' => 3190,
                'country_id' => 197,
                'name' => 'Nitriansky',
            ),
            189 => 
            array (
                'id' => 3191,
                'country_id' => 197,
                'name' => 'Presovsky',
            ),
            190 => 
            array (
                'id' => 3192,
                'country_id' => 197,
                'name' => 'Trenciansky',
            ),
            191 => 
            array (
                'id' => 3193,
                'country_id' => 197,
                'name' => 'Trnavsky',
            ),
            192 => 
            array (
                'id' => 3194,
                'country_id' => 197,
                'name' => 'Zilinsky',
            ),
            193 => 
            array (
                'id' => 3195,
                'country_id' => 198,
                'name' => 'Benedikt',
            ),
            194 => 
            array (
                'id' => 3196,
                'country_id' => 198,
                'name' => 'Gorenjska',
            ),
            195 => 
            array (
                'id' => 3197,
                'country_id' => 198,
                'name' => 'Gorishka',
            ),
            196 => 
            array (
                'id' => 3198,
                'country_id' => 198,
                'name' => 'Jugovzhodna Slovenija',
            ),
            197 => 
            array (
                'id' => 3199,
                'country_id' => 198,
                'name' => 'Koroshka',
            ),
            198 => 
            array (
                'id' => 3200,
                'country_id' => 198,
                'name' => 'Notranjsko-krashka',
            ),
            199 => 
            array (
                'id' => 3201,
                'country_id' => 198,
                'name' => 'Obalno-krashka',
            ),
            200 => 
            array (
                'id' => 3202,
                'country_id' => 198,
                'name' => 'Obcina Domzale',
            ),
            201 => 
            array (
                'id' => 3203,
                'country_id' => 198,
                'name' => 'Obcina Vitanje',
            ),
            202 => 
            array (
                'id' => 3204,
                'country_id' => 198,
                'name' => 'Osrednjeslovenska',
            ),
            203 => 
            array (
                'id' => 3205,
                'country_id' => 198,
                'name' => 'Podravska',
            ),
            204 => 
            array (
                'id' => 3206,
                'country_id' => 198,
                'name' => 'Pomurska',
            ),
            205 => 
            array (
                'id' => 3207,
                'country_id' => 198,
                'name' => 'Savinjska',
            ),
            206 => 
            array (
                'id' => 3208,
                'country_id' => 198,
                'name' => 'Slovenian Littoral',
            ),
            207 => 
            array (
                'id' => 3209,
                'country_id' => 198,
                'name' => 'Spodnjeposavska',
            ),
            208 => 
            array (
                'id' => 3210,
                'country_id' => 198,
                'name' => 'Zasavska',
            ),
            209 => 
            array (
                'id' => 3211,
                'country_id' => 199,
                'name' => 'Pitcair',
            ),
            210 => 
            array (
                'id' => 3212,
                'country_id' => 200,
                'name' => 'Central',
            ),
            211 => 
            array (
                'id' => 3213,
                'country_id' => 200,
                'name' => 'Choiseul',
            ),
            212 => 
            array (
                'id' => 3214,
                'country_id' => 200,
                'name' => 'Guadalcanal',
            ),
            213 => 
            array (
                'id' => 3215,
                'country_id' => 200,
                'name' => 'Isabel',
            ),
            214 => 
            array (
                'id' => 3216,
                'country_id' => 200,
                'name' => 'Makira and Ulawa',
            ),
            215 => 
            array (
                'id' => 3217,
                'country_id' => 200,
                'name' => 'Malaita',
            ),
            216 => 
            array (
                'id' => 3218,
                'country_id' => 200,
                'name' => 'Rennell and Bellona',
            ),
            217 => 
            array (
                'id' => 3219,
                'country_id' => 200,
                'name' => 'Temotu',
            ),
            218 => 
            array (
                'id' => 3220,
                'country_id' => 200,
                'name' => 'Wester',
            ),
            219 => 
            array (
                'id' => 3221,
                'country_id' => 201,
                'name' => 'Awdal',
            ),
            220 => 
            array (
                'id' => 3222,
                'country_id' => 201,
                'name' => 'Bakol',
            ),
            221 => 
            array (
                'id' => 3223,
                'country_id' => 201,
                'name' => 'Banadir',
            ),
            222 => 
            array (
                'id' => 3224,
                'country_id' => 201,
                'name' => 'Bari',
            ),
            223 => 
            array (
                'id' => 3225,
                'country_id' => 201,
                'name' => 'Bay',
            ),
            224 => 
            array (
                'id' => 3226,
                'country_id' => 201,
                'name' => 'Galgudug',
            ),
            225 => 
            array (
                'id' => 3227,
                'country_id' => 201,
                'name' => 'Gedo',
            ),
            226 => 
            array (
                'id' => 3228,
                'country_id' => 201,
                'name' => 'Hira',
            ),
            227 => 
            array (
                'id' => 3229,
                'country_id' => 201,
                'name' => 'Jubbada Hose',
            ),
            228 => 
            array (
                'id' => 3230,
                'country_id' => 201,
                'name' => 'Jubbadha Dexe',
            ),
            229 => 
            array (
                'id' => 3231,
                'country_id' => 201,
                'name' => 'Mudug',
            ),
            230 => 
            array (
                'id' => 3232,
                'country_id' => 201,
                'name' => 'Nugal',
            ),
            231 => 
            array (
                'id' => 3233,
                'country_id' => 201,
                'name' => 'Sanag',
            ),
            232 => 
            array (
                'id' => 3234,
                'country_id' => 201,
                'name' => 'Shabellaha Dhexe',
            ),
            233 => 
            array (
                'id' => 3235,
                'country_id' => 201,
                'name' => 'Shabellaha Hose',
            ),
            234 => 
            array (
                'id' => 3236,
                'country_id' => 201,
                'name' => 'Togdher',
            ),
            235 => 
            array (
                'id' => 3237,
                'country_id' => 201,
                'name' => 'Woqoyi Galbed',
            ),
            236 => 
            array (
                'id' => 3238,
                'country_id' => 202,
                'name' => 'Eastern Cape',
            ),
            237 => 
            array (
                'id' => 3239,
                'country_id' => 202,
                'name' => 'Free State',
            ),
            238 => 
            array (
                'id' => 3240,
                'country_id' => 202,
                'name' => 'Gauteng',
            ),
            239 => 
            array (
                'id' => 3241,
                'country_id' => 202,
                'name' => 'Kempton Park',
            ),
            240 => 
            array (
                'id' => 3242,
                'country_id' => 202,
                'name' => 'Kramerville',
            ),
            241 => 
            array (
                'id' => 3243,
                'country_id' => 202,
                'name' => 'KwaZulu Natal',
            ),
            242 => 
            array (
                'id' => 3244,
                'country_id' => 202,
                'name' => 'Limpopo',
            ),
            243 => 
            array (
                'id' => 3245,
                'country_id' => 202,
                'name' => 'Mpumalanga',
            ),
            244 => 
            array (
                'id' => 3246,
                'country_id' => 202,
                'name' => 'North West',
            ),
            245 => 
            array (
                'id' => 3247,
                'country_id' => 202,
                'name' => 'Northern Cape',
            ),
            246 => 
            array (
                'id' => 3248,
                'country_id' => 202,
                'name' => 'Parow',
            ),
            247 => 
            array (
                'id' => 3249,
                'country_id' => 202,
                'name' => 'Table View',
            ),
            248 => 
            array (
                'id' => 3250,
                'country_id' => 202,
                'name' => 'Umtentweni',
            ),
            249 => 
            array (
                'id' => 3251,
                'country_id' => 202,
                'name' => 'Western Cape',
            ),
            250 => 
            array (
                'id' => 3252,
                'country_id' => 203,
                'name' => 'South Georgia',
            ),
            251 => 
            array (
                'id' => 3253,
                'country_id' => 204,
                'name' => 'Central Equatoria',
            ),
            252 => 
            array (
                'id' => 3254,
                'country_id' => 205,
                'name' => 'A Coruna',
            ),
            253 => 
            array (
                'id' => 3255,
                'country_id' => 205,
                'name' => 'Alacant',
            ),
            254 => 
            array (
                'id' => 3256,
                'country_id' => 205,
                'name' => 'Alava',
            ),
            255 => 
            array (
                'id' => 3257,
                'country_id' => 205,
                'name' => 'Albacete',
            ),
            256 => 
            array (
                'id' => 3258,
                'country_id' => 205,
                'name' => 'Almeria',
            ),
            257 => 
            array (
                'id' => 3259,
                'country_id' => 205,
                'name' => 'Andalucia',
            ),
            258 => 
            array (
                'id' => 3260,
                'country_id' => 205,
                'name' => 'Asturias',
            ),
            259 => 
            array (
                'id' => 3261,
                'country_id' => 205,
                'name' => 'Avila',
            ),
            260 => 
            array (
                'id' => 3262,
                'country_id' => 205,
                'name' => 'Badajoz',
            ),
            261 => 
            array (
                'id' => 3263,
                'country_id' => 205,
                'name' => 'Balears',
            ),
            262 => 
            array (
                'id' => 3264,
                'country_id' => 205,
                'name' => 'Barcelona',
            ),
            263 => 
            array (
                'id' => 3265,
                'country_id' => 205,
                'name' => 'Bertamirans',
            ),
            264 => 
            array (
                'id' => 3266,
                'country_id' => 205,
                'name' => 'Biscay',
            ),
            265 => 
            array (
                'id' => 3267,
                'country_id' => 205,
                'name' => 'Burgos',
            ),
            266 => 
            array (
                'id' => 3268,
                'country_id' => 205,
                'name' => 'Caceres',
            ),
            267 => 
            array (
                'id' => 3269,
                'country_id' => 205,
                'name' => 'Cadiz',
            ),
            268 => 
            array (
                'id' => 3270,
                'country_id' => 205,
                'name' => 'Cantabria',
            ),
            269 => 
            array (
                'id' => 3271,
                'country_id' => 205,
                'name' => 'Castello',
            ),
            270 => 
            array (
                'id' => 3272,
                'country_id' => 205,
                'name' => 'Catalunya',
            ),
            271 => 
            array (
                'id' => 3273,
                'country_id' => 205,
                'name' => 'Ceuta',
            ),
            272 => 
            array (
                'id' => 3274,
                'country_id' => 205,
                'name' => 'Ciudad Real',
            ),
            273 => 
            array (
                'id' => 3275,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma de Canarias',
            ),
            274 => 
            array (
                'id' => 3276,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma de Cataluna',
            ),
            275 => 
            array (
                'id' => 3277,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma de Galicia',
            ),
            276 => 
            array (
                'id' => 3278,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma de las Isla',
            ),
            277 => 
            array (
                'id' => 3279,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma del Princip',
            ),
            278 => 
            array (
                'id' => 3280,
                'country_id' => 205,
                'name' => 'Comunidad Valenciana',
            ),
            279 => 
            array (
                'id' => 3281,
                'country_id' => 205,
                'name' => 'Cordoba',
            ),
            280 => 
            array (
                'id' => 3282,
                'country_id' => 205,
                'name' => 'Cuenca',
            ),
            281 => 
            array (
                'id' => 3283,
                'country_id' => 205,
                'name' => 'Gipuzkoa',
            ),
            282 => 
            array (
                'id' => 3284,
                'country_id' => 205,
                'name' => 'Girona',
            ),
            283 => 
            array (
                'id' => 3285,
                'country_id' => 205,
                'name' => 'Granada',
            ),
            284 => 
            array (
                'id' => 3286,
                'country_id' => 205,
                'name' => 'Guadalajara',
            ),
            285 => 
            array (
                'id' => 3287,
                'country_id' => 205,
                'name' => 'Guipuzcoa',
            ),
            286 => 
            array (
                'id' => 3288,
                'country_id' => 205,
                'name' => 'Huelva',
            ),
            287 => 
            array (
                'id' => 3289,
                'country_id' => 205,
                'name' => 'Huesca',
            ),
            288 => 
            array (
                'id' => 3290,
                'country_id' => 205,
                'name' => 'Jae',
            ),
            289 => 
            array (
                'id' => 3291,
                'country_id' => 205,
                'name' => 'La Rioja',
            ),
            290 => 
            array (
                'id' => 3292,
                'country_id' => 205,
                'name' => 'Las Palmas',
            ),
            291 => 
            array (
                'id' => 3293,
                'country_id' => 205,
                'name' => 'Leo',
            ),
            292 => 
            array (
                'id' => 3294,
                'country_id' => 205,
                'name' => 'Lerida',
            ),
            293 => 
            array (
                'id' => 3295,
                'country_id' => 205,
                'name' => 'Lleida',
            ),
            294 => 
            array (
                'id' => 3296,
                'country_id' => 205,
                'name' => 'Lugo',
            ),
            295 => 
            array (
                'id' => 3297,
                'country_id' => 205,
                'name' => 'Madrid',
            ),
            296 => 
            array (
                'id' => 3298,
                'country_id' => 205,
                'name' => 'Malaga',
            ),
            297 => 
            array (
                'id' => 3299,
                'country_id' => 205,
                'name' => 'Melilla',
            ),
            298 => 
            array (
                'id' => 3300,
                'country_id' => 205,
                'name' => 'Murcia',
            ),
            299 => 
            array (
                'id' => 3301,
                'country_id' => 205,
                'name' => 'Navarra',
            ),
            300 => 
            array (
                'id' => 3302,
                'country_id' => 205,
                'name' => 'Ourense',
            ),
            301 => 
            array (
                'id' => 3303,
                'country_id' => 205,
                'name' => 'Pais Vasco',
            ),
            302 => 
            array (
                'id' => 3304,
                'country_id' => 205,
                'name' => 'Palencia',
            ),
            303 => 
            array (
                'id' => 3305,
                'country_id' => 205,
                'name' => 'Pontevedra',
            ),
            304 => 
            array (
                'id' => 3306,
                'country_id' => 205,
                'name' => 'Salamanca',
            ),
            305 => 
            array (
                'id' => 3307,
                'country_id' => 205,
                'name' => 'Santa Cruz de Tenerife',
            ),
            306 => 
            array (
                'id' => 3308,
                'country_id' => 205,
                'name' => 'Segovia',
            ),
            307 => 
            array (
                'id' => 3309,
                'country_id' => 205,
                'name' => 'Sevilla',
            ),
            308 => 
            array (
                'id' => 3310,
                'country_id' => 205,
                'name' => 'Soria',
            ),
            309 => 
            array (
                'id' => 3311,
                'country_id' => 205,
                'name' => 'Tarragona',
            ),
            310 => 
            array (
                'id' => 3312,
                'country_id' => 205,
                'name' => 'Tenerife',
            ),
            311 => 
            array (
                'id' => 3313,
                'country_id' => 205,
                'name' => 'Teruel',
            ),
            312 => 
            array (
                'id' => 3314,
                'country_id' => 205,
                'name' => 'Toledo',
            ),
            313 => 
            array (
                'id' => 3315,
                'country_id' => 205,
                'name' => 'Valencia',
            ),
            314 => 
            array (
                'id' => 3316,
                'country_id' => 205,
                'name' => 'Valladolid',
            ),
            315 => 
            array (
                'id' => 3317,
                'country_id' => 205,
                'name' => 'Vizcaya',
            ),
            316 => 
            array (
                'id' => 3318,
                'country_id' => 205,
                'name' => 'Zamora',
            ),
            317 => 
            array (
                'id' => 3319,
                'country_id' => 205,
                'name' => 'Zaragoza',
            ),
            318 => 
            array (
                'id' => 3320,
                'country_id' => 206,
                'name' => 'Amparai',
            ),
            319 => 
            array (
                'id' => 3321,
                'country_id' => 206,
                'name' => 'Anuradhapuraya',
            ),
            320 => 
            array (
                'id' => 3322,
                'country_id' => 206,
                'name' => 'Badulla',
            ),
            321 => 
            array (
                'id' => 3323,
                'country_id' => 206,
                'name' => 'Boralesgamuwa',
            ),
            322 => 
            array (
                'id' => 3324,
                'country_id' => 206,
                'name' => 'Colombo',
            ),
            323 => 
            array (
                'id' => 3325,
                'country_id' => 206,
                'name' => 'Galla',
            ),
            324 => 
            array (
                'id' => 3326,
                'country_id' => 206,
                'name' => 'Gampaha',
            ),
            325 => 
            array (
                'id' => 3327,
                'country_id' => 206,
                'name' => 'Hambantota',
            ),
            326 => 
            array (
                'id' => 3328,
                'country_id' => 206,
                'name' => 'Kalatura',
            ),
            327 => 
            array (
                'id' => 3329,
                'country_id' => 206,
                'name' => 'Kegalla',
            ),
            328 => 
            array (
                'id' => 3330,
                'country_id' => 206,
                'name' => 'Kilinochchi',
            ),
            329 => 
            array (
                'id' => 3331,
                'country_id' => 206,
                'name' => 'Kurunegala',
            ),
            330 => 
            array (
                'id' => 3332,
                'country_id' => 206,
                'name' => 'Madakalpuwa',
            ),
            331 => 
            array (
                'id' => 3333,
                'country_id' => 206,
                'name' => 'Maha Nuwara',
            ),
            332 => 
            array (
                'id' => 3334,
                'country_id' => 206,
                'name' => 'Malwana',
            ),
            333 => 
            array (
                'id' => 3335,
                'country_id' => 206,
                'name' => 'Mannarama',
            ),
            334 => 
            array (
                'id' => 3336,
                'country_id' => 206,
                'name' => 'Matale',
            ),
            335 => 
            array (
                'id' => 3337,
                'country_id' => 206,
                'name' => 'Matara',
            ),
            336 => 
            array (
                'id' => 3338,
                'country_id' => 206,
                'name' => 'Monaragala',
            ),
            337 => 
            array (
                'id' => 3339,
                'country_id' => 206,
                'name' => 'Mullaitivu',
            ),
            338 => 
            array (
                'id' => 3340,
                'country_id' => 206,
                'name' => 'North Eastern Province',
            ),
            339 => 
            array (
                'id' => 3341,
                'country_id' => 206,
                'name' => 'North Western Province',
            ),
            340 => 
            array (
                'id' => 3342,
                'country_id' => 206,
                'name' => 'Nuwara Eliya',
            ),
            341 => 
            array (
                'id' => 3343,
                'country_id' => 206,
                'name' => 'Polonnaruwa',
            ),
            342 => 
            array (
                'id' => 3344,
                'country_id' => 206,
                'name' => 'Puttalama',
            ),
            343 => 
            array (
                'id' => 3345,
                'country_id' => 206,
                'name' => 'Ratnapuraya',
            ),
            344 => 
            array (
                'id' => 3346,
                'country_id' => 206,
                'name' => 'Southern Province',
            ),
            345 => 
            array (
                'id' => 3347,
                'country_id' => 206,
                'name' => 'Tirikunamalaya',
            ),
            346 => 
            array (
                'id' => 3348,
                'country_id' => 206,
                'name' => 'Tuscany',
            ),
            347 => 
            array (
                'id' => 3349,
                'country_id' => 206,
                'name' => 'Vavuniyawa',
            ),
            348 => 
            array (
                'id' => 3350,
                'country_id' => 206,
                'name' => 'Western Province',
            ),
            349 => 
            array (
                'id' => 3351,
                'country_id' => 206,
                'name' => 'Yapanaya',
            ),
            350 => 
            array (
                'id' => 3352,
                'country_id' => 206,
                'name' => 'kadawatha',
            ),
            351 => 
            array (
                'id' => 3353,
                'country_id' => 207,
                'name' => 'A\'ali-an-Nil',
            ),
            352 => 
            array (
                'id' => 3354,
                'country_id' => 207,
                'name' => 'Bahr-al-Jabal',
            ),
            353 => 
            array (
                'id' => 3355,
                'country_id' => 207,
                'name' => 'Central Equatoria',
            ),
            354 => 
            array (
                'id' => 3356,
                'country_id' => 207,
                'name' => 'Gharb Bahr-al-Ghazal',
            ),
            355 => 
            array (
                'id' => 3357,
                'country_id' => 207,
                'name' => 'Gharb Darfur',
            ),
            356 => 
            array (
                'id' => 3358,
                'country_id' => 207,
                'name' => 'Gharb Kurdufa',
            ),
            357 => 
            array (
                'id' => 3359,
                'country_id' => 207,
                'name' => 'Gharb-al-Istiwa\'iyah',
            ),
            358 => 
            array (
                'id' => 3360,
                'country_id' => 207,
                'name' => 'Janub Darfur',
            ),
            359 => 
            array (
                'id' => 3361,
                'country_id' => 207,
                'name' => 'Janub Kurdufa',
            ),
            360 => 
            array (
                'id' => 3362,
                'country_id' => 207,
                'name' => 'Junqali',
            ),
            361 => 
            array (
                'id' => 3363,
                'country_id' => 207,
                'name' => 'Kassala',
            ),
            362 => 
            array (
                'id' => 3364,
                'country_id' => 207,
                'name' => 'Nahr-an-Nil',
            ),
            363 => 
            array (
                'id' => 3365,
                'country_id' => 207,
                'name' => 'Shamal Bahr-al-Ghazal',
            ),
            364 => 
            array (
                'id' => 3366,
                'country_id' => 207,
                'name' => 'Shamal Darfur',
            ),
            365 => 
            array (
                'id' => 3367,
                'country_id' => 207,
                'name' => 'Shamal Kurdufa',
            ),
            366 => 
            array (
                'id' => 3368,
                'country_id' => 207,
                'name' => 'Sharq-al-Istiwa\'iyah',
            ),
            367 => 
            array (
                'id' => 3369,
                'country_id' => 207,
                'name' => 'Sinnar',
            ),
            368 => 
            array (
                'id' => 3370,
                'country_id' => 207,
                'name' => 'Warab',
            ),
            369 => 
            array (
                'id' => 3371,
                'country_id' => 207,
                'name' => 'Wilayat al Khartum',
            ),
            370 => 
            array (
                'id' => 3372,
                'country_id' => 207,
                'name' => 'al-Bahr-al-Ahmar',
            ),
            371 => 
            array (
                'id' => 3373,
                'country_id' => 207,
                'name' => 'al-Buhayrat',
            ),
            372 => 
            array (
                'id' => 3374,
                'country_id' => 207,
                'name' => 'al-Jazirah',
            ),
            373 => 
            array (
                'id' => 3375,
                'country_id' => 207,
                'name' => 'al-Khartum',
            ),
            374 => 
            array (
                'id' => 3376,
                'country_id' => 207,
                'name' => 'al-Qadarif',
            ),
            375 => 
            array (
                'id' => 3377,
                'country_id' => 207,
                'name' => 'al-Wahdah',
            ),
            376 => 
            array (
                'id' => 3378,
                'country_id' => 207,
                'name' => 'an-Nil-al-Abyad',
            ),
            377 => 
            array (
                'id' => 3379,
                'country_id' => 207,
                'name' => 'an-Nil-al-Azraq',
            ),
            378 => 
            array (
                'id' => 3380,
                'country_id' => 207,
                'name' => 'ash-Shamaliyah',
            ),
            379 => 
            array (
                'id' => 3381,
                'country_id' => 208,
                'name' => 'Brokopondo',
            ),
            380 => 
            array (
                'id' => 3382,
                'country_id' => 208,
                'name' => 'Commewijne',
            ),
            381 => 
            array (
                'id' => 3383,
                'country_id' => 208,
                'name' => 'Coronie',
            ),
            382 => 
            array (
                'id' => 3384,
                'country_id' => 208,
                'name' => 'Marowijne',
            ),
            383 => 
            array (
                'id' => 3385,
                'country_id' => 208,
                'name' => 'Nickerie',
            ),
            384 => 
            array (
                'id' => 3386,
                'country_id' => 208,
                'name' => 'Para',
            ),
            385 => 
            array (
                'id' => 3387,
                'country_id' => 208,
                'name' => 'Paramaribo',
            ),
            386 => 
            array (
                'id' => 3388,
                'country_id' => 208,
                'name' => 'Saramacca',
            ),
            387 => 
            array (
                'id' => 3389,
                'country_id' => 208,
                'name' => 'Wanica',
            ),
            388 => 
            array (
                'id' => 3390,
                'country_id' => 209,
                'name' => 'Svalbard',
            ),
            389 => 
            array (
                'id' => 3391,
                'country_id' => 210,
                'name' => 'Hhohho',
            ),
            390 => 
            array (
                'id' => 3392,
                'country_id' => 210,
                'name' => 'Lubombo',
            ),
            391 => 
            array (
                'id' => 3393,
                'country_id' => 210,
                'name' => 'Manzini',
            ),
            392 => 
            array (
                'id' => 3394,
                'country_id' => 210,
                'name' => 'Shiselweni',
            ),
            393 => 
            array (
                'id' => 3395,
                'country_id' => 211,
                'name' => 'Alvsborgs La',
            ),
            394 => 
            array (
                'id' => 3396,
                'country_id' => 211,
                'name' => 'Angermanland',
            ),
            395 => 
            array (
                'id' => 3397,
                'country_id' => 211,
                'name' => 'Blekinge',
            ),
            396 => 
            array (
                'id' => 3398,
                'country_id' => 211,
                'name' => 'Bohusla',
            ),
            397 => 
            array (
                'id' => 3399,
                'country_id' => 211,
                'name' => 'Dalarna',
            ),
            398 => 
            array (
                'id' => 3400,
                'country_id' => 211,
                'name' => 'Gavleborg',
            ),
            399 => 
            array (
                'id' => 3401,
                'country_id' => 211,
                'name' => 'Gaza',
            ),
            400 => 
            array (
                'id' => 3402,
                'country_id' => 211,
                'name' => 'Gotland',
            ),
            401 => 
            array (
                'id' => 3403,
                'country_id' => 211,
                'name' => 'Halland',
            ),
            402 => 
            array (
                'id' => 3404,
                'country_id' => 211,
                'name' => 'Jamtland',
            ),
            403 => 
            array (
                'id' => 3405,
                'country_id' => 211,
                'name' => 'Jonkoping',
            ),
            404 => 
            array (
                'id' => 3406,
                'country_id' => 211,
                'name' => 'Kalmar',
            ),
            405 => 
            array (
                'id' => 3407,
                'country_id' => 211,
                'name' => 'Kristianstads',
            ),
            406 => 
            array (
                'id' => 3408,
                'country_id' => 211,
                'name' => 'Kronoberg',
            ),
            407 => 
            array (
                'id' => 3409,
                'country_id' => 211,
                'name' => 'Norrbotte',
            ),
            408 => 
            array (
                'id' => 3410,
                'country_id' => 211,
                'name' => 'Orebro',
            ),
            409 => 
            array (
                'id' => 3411,
                'country_id' => 211,
                'name' => 'Ostergotland',
            ),
            410 => 
            array (
                'id' => 3412,
                'country_id' => 211,
                'name' => 'Saltsjo-Boo',
            ),
            411 => 
            array (
                'id' => 3413,
                'country_id' => 211,
                'name' => 'Skane',
            ),
            412 => 
            array (
                'id' => 3414,
                'country_id' => 211,
                'name' => 'Smaland',
            ),
            413 => 
            array (
                'id' => 3415,
                'country_id' => 211,
                'name' => 'Sodermanland',
            ),
            414 => 
            array (
                'id' => 3416,
                'country_id' => 211,
                'name' => 'Stockholm',
            ),
            415 => 
            array (
                'id' => 3417,
                'country_id' => 211,
                'name' => 'Uppsala',
            ),
            416 => 
            array (
                'id' => 3418,
                'country_id' => 211,
                'name' => 'Varmland',
            ),
            417 => 
            array (
                'id' => 3419,
                'country_id' => 211,
                'name' => 'Vasterbotte',
            ),
            418 => 
            array (
                'id' => 3420,
                'country_id' => 211,
                'name' => 'Vastergotland',
            ),
            419 => 
            array (
                'id' => 3421,
                'country_id' => 211,
                'name' => 'Vasternorrland',
            ),
            420 => 
            array (
                'id' => 3422,
                'country_id' => 211,
                'name' => 'Vastmanland',
            ),
            421 => 
            array (
                'id' => 3423,
                'country_id' => 211,
                'name' => 'Vastra Gotaland',
            ),
            422 => 
            array (
                'id' => 3424,
                'country_id' => 212,
                'name' => 'Aargau',
            ),
            423 => 
            array (
                'id' => 3425,
                'country_id' => 212,
                'name' => 'Appenzell Inner-Rhode',
            ),
            424 => 
            array (
                'id' => 3426,
                'country_id' => 212,
                'name' => 'Appenzell-Ausser Rhode',
            ),
            425 => 
            array (
                'id' => 3427,
                'country_id' => 212,
                'name' => 'Basel-Landschaft',
            ),
            426 => 
            array (
                'id' => 3428,
                'country_id' => 212,
                'name' => 'Basel-Stadt',
            ),
            427 => 
            array (
                'id' => 3429,
                'country_id' => 212,
                'name' => 'Ber',
            ),
            428 => 
            array (
                'id' => 3430,
                'country_id' => 212,
                'name' => 'Canton Ticino',
            ),
            429 => 
            array (
                'id' => 3431,
                'country_id' => 212,
                'name' => 'Fribourg',
            ),
            430 => 
            array (
                'id' => 3432,
                'country_id' => 212,
                'name' => 'Geneve',
            ),
            431 => 
            array (
                'id' => 3433,
                'country_id' => 212,
                'name' => 'Glarus',
            ),
            432 => 
            array (
                'id' => 3434,
                'country_id' => 212,
                'name' => 'Graubunde',
            ),
            433 => 
            array (
                'id' => 3435,
                'country_id' => 212,
                'name' => 'Heerbrugg',
            ),
            434 => 
            array (
                'id' => 3436,
                'country_id' => 212,
                'name' => 'Jura',
            ),
            435 => 
            array (
                'id' => 3437,
                'country_id' => 212,
                'name' => 'Kanton Aargau',
            ),
            436 => 
            array (
                'id' => 3438,
                'country_id' => 212,
                'name' => 'Luzer',
            ),
            437 => 
            array (
                'id' => 3439,
                'country_id' => 212,
                'name' => 'Morbio Inferiore',
            ),
            438 => 
            array (
                'id' => 3440,
                'country_id' => 212,
                'name' => 'Muhe',
            ),
            439 => 
            array (
                'id' => 3441,
                'country_id' => 212,
                'name' => 'Neuchatel',
            ),
            440 => 
            array (
                'id' => 3442,
                'country_id' => 212,
                'name' => 'Nidwalde',
            ),
            441 => 
            array (
                'id' => 3443,
                'country_id' => 212,
                'name' => 'Obwalde',
            ),
            442 => 
            array (
                'id' => 3444,
                'country_id' => 212,
                'name' => 'Sankt Galle',
            ),
            443 => 
            array (
                'id' => 3445,
                'country_id' => 212,
                'name' => 'Schaffhause',
            ),
            444 => 
            array (
                'id' => 3446,
                'country_id' => 212,
                'name' => 'Schwyz',
            ),
            445 => 
            array (
                'id' => 3447,
                'country_id' => 212,
                'name' => 'Solothur',
            ),
            446 => 
            array (
                'id' => 3448,
                'country_id' => 212,
                'name' => 'Thurgau',
            ),
            447 => 
            array (
                'id' => 3449,
                'country_id' => 212,
                'name' => 'Ticino',
            ),
            448 => 
            array (
                'id' => 3450,
                'country_id' => 212,
                'name' => 'Uri',
            ),
            449 => 
            array (
                'id' => 3451,
                'country_id' => 212,
                'name' => 'Valais',
            ),
            450 => 
            array (
                'id' => 3452,
                'country_id' => 212,
                'name' => 'Vaud',
            ),
            451 => 
            array (
                'id' => 3453,
                'country_id' => 212,
                'name' => 'Vauffeli',
            ),
            452 => 
            array (
                'id' => 3454,
                'country_id' => 212,
                'name' => 'Zug',
            ),
            453 => 
            array (
                'id' => 3455,
                'country_id' => 212,
                'name' => 'Zurich',
            ),
            454 => 
            array (
                'id' => 3456,
                'country_id' => 213,
                'name' => 'Aleppo',
            ),
            455 => 
            array (
                'id' => 3457,
                'country_id' => 213,
                'name' => 'Dar\'a',
            ),
            456 => 
            array (
                'id' => 3458,
                'country_id' => 213,
                'name' => 'Dayr-az-Zawr',
            ),
            457 => 
            array (
                'id' => 3459,
                'country_id' => 213,
                'name' => 'Dimashq',
            ),
            458 => 
            array (
                'id' => 3460,
                'country_id' => 213,
                'name' => 'Halab',
            ),
            459 => 
            array (
                'id' => 3461,
                'country_id' => 213,
                'name' => 'Hamah',
            ),
            460 => 
            array (
                'id' => 3462,
                'country_id' => 213,
                'name' => 'Hims',
            ),
            461 => 
            array (
                'id' => 3463,
                'country_id' => 213,
                'name' => 'Idlib',
            ),
            462 => 
            array (
                'id' => 3464,
                'country_id' => 213,
                'name' => 'Madinat Dimashq',
            ),
            463 => 
            array (
                'id' => 3465,
                'country_id' => 213,
                'name' => 'Tartus',
            ),
            464 => 
            array (
                'id' => 3466,
                'country_id' => 213,
                'name' => 'al-Hasakah',
            ),
            465 => 
            array (
                'id' => 3467,
                'country_id' => 213,
                'name' => 'al-Ladhiqiyah',
            ),
            466 => 
            array (
                'id' => 3468,
                'country_id' => 213,
                'name' => 'al-Qunaytirah',
            ),
            467 => 
            array (
                'id' => 3469,
                'country_id' => 213,
                'name' => 'ar-Raqqah',
            ),
            468 => 
            array (
                'id' => 3470,
                'country_id' => 213,
                'name' => 'as-Suwayda',
            ),
            469 => 
            array (
                'id' => 3471,
                'country_id' => 214,
                'name' => 'Changhwa',
            ),
            470 => 
            array (
                'id' => 3472,
                'country_id' => 214,
                'name' => 'Chiayi Hsie',
            ),
            471 => 
            array (
                'id' => 3473,
                'country_id' => 214,
                'name' => 'Chiayi Shih',
            ),
            472 => 
            array (
                'id' => 3474,
                'country_id' => 214,
                'name' => 'Eastern Taipei',
            ),
            473 => 
            array (
                'id' => 3475,
                'country_id' => 214,
                'name' => 'Hsinchu Hsie',
            ),
            474 => 
            array (
                'id' => 3476,
                'country_id' => 214,
                'name' => 'Hsinchu Shih',
            ),
            475 => 
            array (
                'id' => 3477,
                'country_id' => 214,
                'name' => 'Hualie',
            ),
            476 => 
            array (
                'id' => 3478,
                'country_id' => 214,
                'name' => 'Ila',
            ),
            477 => 
            array (
                'id' => 3479,
                'country_id' => 214,
                'name' => 'Kaohsiung Hsie',
            ),
            478 => 
            array (
                'id' => 3480,
                'country_id' => 214,
                'name' => 'Kaohsiung Shih',
            ),
            479 => 
            array (
                'id' => 3481,
                'country_id' => 214,
                'name' => 'Keelung Shih',
            ),
            480 => 
            array (
                'id' => 3482,
                'country_id' => 214,
                'name' => 'Kinme',
            ),
            481 => 
            array (
                'id' => 3483,
                'country_id' => 214,
                'name' => 'Miaoli',
            ),
            482 => 
            array (
                'id' => 3484,
                'country_id' => 214,
                'name' => 'Nantou',
            ),
            483 => 
            array (
                'id' => 3485,
                'country_id' => 214,
                'name' => 'Northern Taiwa',
            ),
            484 => 
            array (
                'id' => 3486,
                'country_id' => 214,
                'name' => 'Penghu',
            ),
            485 => 
            array (
                'id' => 3487,
                'country_id' => 214,
                'name' => 'Pingtung',
            ),
            486 => 
            array (
                'id' => 3488,
                'country_id' => 214,
                'name' => 'Taichung',
            ),
            487 => 
            array (
                'id' => 3489,
                'country_id' => 214,
                'name' => 'Taichung Hsie',
            ),
            488 => 
            array (
                'id' => 3490,
                'country_id' => 214,
                'name' => 'Taichung Shih',
            ),
            489 => 
            array (
                'id' => 3491,
                'country_id' => 214,
                'name' => 'Tainan Hsie',
            ),
            490 => 
            array (
                'id' => 3492,
                'country_id' => 214,
                'name' => 'Tainan Shih',
            ),
            491 => 
            array (
                'id' => 3493,
                'country_id' => 214,
                'name' => 'Taipei Hsie',
            ),
            492 => 
            array (
                'id' => 3494,
                'country_id' => 214,
                'name' => 'Taipei Shih / Taipei Hsie',
            ),
            493 => 
            array (
                'id' => 3495,
                'country_id' => 214,
                'name' => 'Taitung',
            ),
            494 => 
            array (
                'id' => 3496,
                'country_id' => 214,
                'name' => 'Taoyua',
            ),
            495 => 
            array (
                'id' => 3497,
                'country_id' => 214,
                'name' => 'Yila',
            ),
            496 => 
            array (
                'id' => 3498,
                'country_id' => 214,
                'name' => 'Yun-Lin Hsie',
            ),
            497 => 
            array (
                'id' => 3499,
                'country_id' => 214,
                'name' => 'Yunli',
            ),
            498 => 
            array (
                'id' => 3500,
                'country_id' => 215,
                'name' => 'Dushanbe',
            ),
            499 => 
            array (
                'id' => 3501,
                'country_id' => 215,
                'name' => 'Gorno-Badakhsha',
            ),
        ));
        \DB::table('tbl_states')->insert(array (
            0 => 
            array (
                'id' => 3502,
                'country_id' => 215,
                'name' => 'Karotegi',
            ),
            1 => 
            array (
                'id' => 3503,
                'country_id' => 215,
                'name' => 'Khatlo',
            ),
            2 => 
            array (
                'id' => 3504,
                'country_id' => 215,
                'name' => 'Sughd',
            ),
            3 => 
            array (
                'id' => 3505,
                'country_id' => 216,
                'name' => 'Arusha',
            ),
            4 => 
            array (
                'id' => 3506,
                'country_id' => 216,
                'name' => 'Dar es Salaam',
            ),
            5 => 
            array (
                'id' => 3507,
                'country_id' => 216,
                'name' => 'Dodoma',
            ),
            6 => 
            array (
                'id' => 3508,
                'country_id' => 216,
                'name' => 'Iringa',
            ),
            7 => 
            array (
                'id' => 3509,
                'country_id' => 216,
                'name' => 'Kagera',
            ),
            8 => 
            array (
                'id' => 3510,
                'country_id' => 216,
                'name' => 'Kigoma',
            ),
            9 => 
            array (
                'id' => 3511,
                'country_id' => 216,
                'name' => 'Kilimanjaro',
            ),
            10 => 
            array (
                'id' => 3512,
                'country_id' => 216,
                'name' => 'Lindi',
            ),
            11 => 
            array (
                'id' => 3513,
                'country_id' => 216,
                'name' => 'Mara',
            ),
            12 => 
            array (
                'id' => 3514,
                'country_id' => 216,
                'name' => 'Mbeya',
            ),
            13 => 
            array (
                'id' => 3515,
                'country_id' => 216,
                'name' => 'Morogoro',
            ),
            14 => 
            array (
                'id' => 3516,
                'country_id' => 216,
                'name' => 'Mtwara',
            ),
            15 => 
            array (
                'id' => 3517,
                'country_id' => 216,
                'name' => 'Mwanza',
            ),
            16 => 
            array (
                'id' => 3518,
                'country_id' => 216,
                'name' => 'Pwani',
            ),
            17 => 
            array (
                'id' => 3519,
                'country_id' => 216,
                'name' => 'Rukwa',
            ),
            18 => 
            array (
                'id' => 3520,
                'country_id' => 216,
                'name' => 'Ruvuma',
            ),
            19 => 
            array (
                'id' => 3521,
                'country_id' => 216,
                'name' => 'Shinyanga',
            ),
            20 => 
            array (
                'id' => 3522,
                'country_id' => 216,
                'name' => 'Singida',
            ),
            21 => 
            array (
                'id' => 3523,
                'country_id' => 216,
                'name' => 'Tabora',
            ),
            22 => 
            array (
                'id' => 3524,
                'country_id' => 216,
                'name' => 'Tanga',
            ),
            23 => 
            array (
                'id' => 3525,
                'country_id' => 216,
                'name' => 'Zanzibar and Pemba',
            ),
            24 => 
            array (
                'id' => 3526,
                'country_id' => 217,
                'name' => 'Amnat Charoe',
            ),
            25 => 
            array (
                'id' => 3527,
                'country_id' => 217,
                'name' => 'Ang Thong',
            ),
            26 => 
            array (
                'id' => 3528,
                'country_id' => 217,
                'name' => 'Bangkok',
            ),
            27 => 
            array (
                'id' => 3529,
                'country_id' => 217,
                'name' => 'Buri Ram',
            ),
            28 => 
            array (
                'id' => 3530,
                'country_id' => 217,
                'name' => 'Chachoengsao',
            ),
            29 => 
            array (
                'id' => 3531,
                'country_id' => 217,
                'name' => 'Chai Nat',
            ),
            30 => 
            array (
                'id' => 3532,
                'country_id' => 217,
                'name' => 'Chaiyaphum',
            ),
            31 => 
            array (
                'id' => 3533,
                'country_id' => 217,
                'name' => 'Changwat Chaiyaphum',
            ),
            32 => 
            array (
                'id' => 3534,
                'country_id' => 217,
                'name' => 'Chanthaburi',
            ),
            33 => 
            array (
                'id' => 3535,
                'country_id' => 217,
                'name' => 'Chiang Mai',
            ),
            34 => 
            array (
                'id' => 3536,
                'country_id' => 217,
                'name' => 'Chiang Rai',
            ),
            35 => 
            array (
                'id' => 3537,
                'country_id' => 217,
                'name' => 'Chon Buri',
            ),
            36 => 
            array (
                'id' => 3538,
                'country_id' => 217,
                'name' => 'Chumpho',
            ),
            37 => 
            array (
                'id' => 3539,
                'country_id' => 217,
                'name' => 'Kalasi',
            ),
            38 => 
            array (
                'id' => 3540,
                'country_id' => 217,
                'name' => 'Kamphaeng Phet',
            ),
            39 => 
            array (
                'id' => 3541,
                'country_id' => 217,
                'name' => 'Kanchanaburi',
            ),
            40 => 
            array (
                'id' => 3542,
                'country_id' => 217,
                'name' => 'Khon Kae',
            ),
            41 => 
            array (
                'id' => 3543,
                'country_id' => 217,
                'name' => 'Krabi',
            ),
            42 => 
            array (
                'id' => 3544,
                'country_id' => 217,
                'name' => 'Krung Thep',
            ),
            43 => 
            array (
                'id' => 3545,
                'country_id' => 217,
                'name' => 'Lampang',
            ),
            44 => 
            array (
                'id' => 3546,
                'country_id' => 217,
                'name' => 'Lamphu',
            ),
            45 => 
            array (
                'id' => 3547,
                'country_id' => 217,
                'name' => 'Loei',
            ),
            46 => 
            array (
                'id' => 3548,
                'country_id' => 217,
                'name' => 'Lop Buri',
            ),
            47 => 
            array (
                'id' => 3549,
                'country_id' => 217,
                'name' => 'Mae Hong So',
            ),
            48 => 
            array (
                'id' => 3550,
                'country_id' => 217,
                'name' => 'Maha Sarakham',
            ),
            49 => 
            array (
                'id' => 3551,
                'country_id' => 217,
                'name' => 'Mukdaha',
            ),
            50 => 
            array (
                'id' => 3552,
                'country_id' => 217,
                'name' => 'Nakhon Nayok',
            ),
            51 => 
            array (
                'id' => 3553,
                'country_id' => 217,
                'name' => 'Nakhon Pathom',
            ),
            52 => 
            array (
                'id' => 3554,
                'country_id' => 217,
                'name' => 'Nakhon Phanom',
            ),
            53 => 
            array (
                'id' => 3555,
                'country_id' => 217,
                'name' => 'Nakhon Ratchasima',
            ),
            54 => 
            array (
                'id' => 3556,
                'country_id' => 217,
                'name' => 'Nakhon Sawa',
            ),
            55 => 
            array (
                'id' => 3557,
                'country_id' => 217,
                'name' => 'Nakhon Si Thammarat',
            ),
            56 => 
            array (
                'id' => 3558,
                'country_id' => 217,
                'name' => 'Na',
            ),
            57 => 
            array (
                'id' => 3559,
                'country_id' => 217,
                'name' => 'Narathiwat',
            ),
            58 => 
            array (
                'id' => 3560,
                'country_id' => 217,
                'name' => 'Nong Bua Lam Phu',
            ),
            59 => 
            array (
                'id' => 3561,
                'country_id' => 217,
                'name' => 'Nong Khai',
            ),
            60 => 
            array (
                'id' => 3562,
                'country_id' => 217,
                'name' => 'Nonthaburi',
            ),
            61 => 
            array (
                'id' => 3563,
                'country_id' => 217,
                'name' => 'Pathum Thani',
            ),
            62 => 
            array (
                'id' => 3564,
                'country_id' => 217,
                'name' => 'Pattani',
            ),
            63 => 
            array (
                'id' => 3565,
                'country_id' => 217,
                'name' => 'Phangnga',
            ),
            64 => 
            array (
                'id' => 3566,
                'country_id' => 217,
                'name' => 'Phatthalung',
            ),
            65 => 
            array (
                'id' => 3567,
                'country_id' => 217,
                'name' => 'Phayao',
            ),
            66 => 
            array (
                'id' => 3568,
                'country_id' => 217,
                'name' => 'Phetchabu',
            ),
            67 => 
            array (
                'id' => 3569,
                'country_id' => 217,
                'name' => 'Phetchaburi',
            ),
            68 => 
            array (
                'id' => 3570,
                'country_id' => 217,
                'name' => 'Phichit',
            ),
            69 => 
            array (
                'id' => 3571,
                'country_id' => 217,
                'name' => 'Phitsanulok',
            ),
            70 => 
            array (
                'id' => 3572,
                'country_id' => 217,
                'name' => 'Phra Nakhon Si Ayutthaya',
            ),
            71 => 
            array (
                'id' => 3573,
                'country_id' => 217,
                'name' => 'Phrae',
            ),
            72 => 
            array (
                'id' => 3574,
                'country_id' => 217,
                'name' => 'Phuket',
            ),
            73 => 
            array (
                'id' => 3575,
                'country_id' => 217,
                'name' => 'Prachin Buri',
            ),
            74 => 
            array (
                'id' => 3576,
                'country_id' => 217,
                'name' => 'Prachuap Khiri Kha',
            ),
            75 => 
            array (
                'id' => 3577,
                'country_id' => 217,
                'name' => 'Ranong',
            ),
            76 => 
            array (
                'id' => 3578,
                'country_id' => 217,
                'name' => 'Ratchaburi',
            ),
            77 => 
            array (
                'id' => 3579,
                'country_id' => 217,
                'name' => 'Rayong',
            ),
            78 => 
            array (
                'id' => 3580,
                'country_id' => 217,
                'name' => 'Roi Et',
            ),
            79 => 
            array (
                'id' => 3581,
                'country_id' => 217,
                'name' => 'Sa Kaeo',
            ),
            80 => 
            array (
                'id' => 3582,
                'country_id' => 217,
                'name' => 'Sakon Nakho',
            ),
            81 => 
            array (
                'id' => 3583,
                'country_id' => 217,
                'name' => 'Samut Praka',
            ),
            82 => 
            array (
                'id' => 3584,
                'country_id' => 217,
                'name' => 'Samut Sakho',
            ),
            83 => 
            array (
                'id' => 3585,
                'country_id' => 217,
                'name' => 'Samut Songkhra',
            ),
            84 => 
            array (
                'id' => 3586,
                'country_id' => 217,
                'name' => 'Saraburi',
            ),
            85 => 
            array (
                'id' => 3587,
                'country_id' => 217,
                'name' => 'Satu',
            ),
            86 => 
            array (
                'id' => 3588,
                'country_id' => 217,
                'name' => 'Si Sa Ket',
            ),
            87 => 
            array (
                'id' => 3589,
                'country_id' => 217,
                'name' => 'Sing Buri',
            ),
            88 => 
            array (
                'id' => 3590,
                'country_id' => 217,
                'name' => 'Songkhla',
            ),
            89 => 
            array (
                'id' => 3591,
                'country_id' => 217,
                'name' => 'Sukhothai',
            ),
            90 => 
            array (
                'id' => 3592,
                'country_id' => 217,
                'name' => 'Suphan Buri',
            ),
            91 => 
            array (
                'id' => 3593,
                'country_id' => 217,
                'name' => 'Surat Thani',
            ),
            92 => 
            array (
                'id' => 3594,
                'country_id' => 217,
                'name' => 'Suri',
            ),
            93 => 
            array (
                'id' => 3595,
                'country_id' => 217,
                'name' => 'Tak',
            ),
            94 => 
            array (
                'id' => 3596,
                'country_id' => 217,
                'name' => 'Trang',
            ),
            95 => 
            array (
                'id' => 3597,
                'country_id' => 217,
                'name' => 'Trat',
            ),
            96 => 
            array (
                'id' => 3598,
                'country_id' => 217,
                'name' => 'Ubon Ratchathani',
            ),
            97 => 
            array (
                'id' => 3599,
                'country_id' => 217,
                'name' => 'Udon Thani',
            ),
            98 => 
            array (
                'id' => 3600,
                'country_id' => 217,
                'name' => 'Uthai Thani',
            ),
            99 => 
            array (
                'id' => 3601,
                'country_id' => 217,
                'name' => 'Uttaradit',
            ),
            100 => 
            array (
                'id' => 3602,
                'country_id' => 217,
                'name' => 'Yala',
            ),
            101 => 
            array (
                'id' => 3603,
                'country_id' => 217,
                'name' => 'Yasotho',
            ),
            102 => 
            array (
                'id' => 3604,
                'country_id' => 218,
                'name' => 'Centre',
            ),
            103 => 
            array (
                'id' => 3605,
                'country_id' => 218,
                'name' => 'Kara',
            ),
            104 => 
            array (
                'id' => 3606,
                'country_id' => 218,
                'name' => 'Maritime',
            ),
            105 => 
            array (
                'id' => 3607,
                'country_id' => 218,
                'name' => 'Plateaux',
            ),
            106 => 
            array (
                'id' => 3608,
                'country_id' => 218,
                'name' => 'Savanes',
            ),
            107 => 
            array (
                'id' => 3609,
                'country_id' => 219,
                'name' => 'Atafu',
            ),
            108 => 
            array (
                'id' => 3610,
                'country_id' => 219,
                'name' => 'Fakaofo',
            ),
            109 => 
            array (
                'id' => 3611,
                'country_id' => 219,
                'name' => 'Nukunonu',
            ),
            110 => 
            array (
                'id' => 3612,
                'country_id' => 220,
                'name' => 'Eua',
            ),
            111 => 
            array (
                'id' => 3613,
                'country_id' => 220,
                'name' => 'Ha\'apai',
            ),
            112 => 
            array (
                'id' => 3614,
                'country_id' => 220,
                'name' => 'Niuas',
            ),
            113 => 
            array (
                'id' => 3615,
                'country_id' => 220,
                'name' => 'Tongatapu',
            ),
            114 => 
            array (
                'id' => 3616,
                'country_id' => 220,
                'name' => 'Vava\'u',
            ),
            115 => 
            array (
                'id' => 3617,
                'country_id' => 221,
                'name' => 'Arima-Tunapuna-Piarco',
            ),
            116 => 
            array (
                'id' => 3618,
                'country_id' => 221,
                'name' => 'Caroni',
            ),
            117 => 
            array (
                'id' => 3619,
                'country_id' => 221,
                'name' => 'Chaguanas',
            ),
            118 => 
            array (
                'id' => 3620,
                'country_id' => 221,
                'name' => 'Couva-Tabaquite-Talparo',
            ),
            119 => 
            array (
                'id' => 3621,
                'country_id' => 221,
                'name' => 'Diego Marti',
            ),
            120 => 
            array (
                'id' => 3622,
                'country_id' => 221,
                'name' => 'Glencoe',
            ),
            121 => 
            array (
                'id' => 3623,
                'country_id' => 221,
                'name' => 'Penal Debe',
            ),
            122 => 
            array (
                'id' => 3624,
                'country_id' => 221,
                'name' => 'Point Forti',
            ),
            123 => 
            array (
                'id' => 3625,
                'country_id' => 221,
                'name' => 'Port of Spai',
            ),
            124 => 
            array (
                'id' => 3626,
                'country_id' => 221,
                'name' => 'Princes Tow',
            ),
            125 => 
            array (
                'id' => 3627,
                'country_id' => 221,
                'name' => 'Saint George',
            ),
            126 => 
            array (
                'id' => 3628,
                'country_id' => 221,
                'name' => 'San Fernando',
            ),
            127 => 
            array (
                'id' => 3629,
                'country_id' => 221,
                'name' => 'San Jua',
            ),
            128 => 
            array (
                'id' => 3630,
                'country_id' => 221,
                'name' => 'Sangre Grande',
            ),
            129 => 
            array (
                'id' => 3631,
                'country_id' => 221,
                'name' => 'Siparia',
            ),
            130 => 
            array (
                'id' => 3632,
                'country_id' => 221,
                'name' => 'Tobago',
            ),
            131 => 
            array (
                'id' => 3633,
                'country_id' => 222,
                'name' => 'Aryanah',
            ),
            132 => 
            array (
                'id' => 3634,
                'country_id' => 222,
                'name' => 'Bajah',
            ),
            133 => 
            array (
                'id' => 3635,
                'country_id' => 222,
                'name' => 'Bin \'Arus',
            ),
            134 => 
            array (
                'id' => 3636,
                'country_id' => 222,
                'name' => 'Binzart',
            ),
            135 => 
            array (
                'id' => 3637,
                'country_id' => 222,
                'name' => 'Gouvernorat de Ariana',
            ),
            136 => 
            array (
                'id' => 3638,
                'country_id' => 222,
                'name' => 'Gouvernorat de Nabeul',
            ),
            137 => 
            array (
                'id' => 3639,
                'country_id' => 222,
                'name' => 'Gouvernorat de Sousse',
            ),
            138 => 
            array (
                'id' => 3640,
                'country_id' => 222,
                'name' => 'Hammamet Yasmine',
            ),
            139 => 
            array (
                'id' => 3641,
                'country_id' => 222,
                'name' => 'Jundubah',
            ),
            140 => 
            array (
                'id' => 3642,
                'country_id' => 222,
                'name' => 'Madaniyi',
            ),
            141 => 
            array (
                'id' => 3643,
                'country_id' => 222,
                'name' => 'Manubah',
            ),
            142 => 
            array (
                'id' => 3644,
                'country_id' => 222,
                'name' => 'Monastir',
            ),
            143 => 
            array (
                'id' => 3645,
                'country_id' => 222,
                'name' => 'Nabul',
            ),
            144 => 
            array (
                'id' => 3646,
                'country_id' => 222,
                'name' => 'Qabis',
            ),
            145 => 
            array (
                'id' => 3647,
                'country_id' => 222,
                'name' => 'Qafsah',
            ),
            146 => 
            array (
                'id' => 3648,
                'country_id' => 222,
                'name' => 'Qibili',
            ),
            147 => 
            array (
                'id' => 3649,
                'country_id' => 222,
                'name' => 'Safaqis',
            ),
            148 => 
            array (
                'id' => 3650,
                'country_id' => 222,
                'name' => 'Sfax',
            ),
            149 => 
            array (
                'id' => 3651,
                'country_id' => 222,
                'name' => 'Sidi Bu Zayd',
            ),
            150 => 
            array (
                'id' => 3652,
                'country_id' => 222,
                'name' => 'Silyanah',
            ),
            151 => 
            array (
                'id' => 3653,
                'country_id' => 222,
                'name' => 'Susah',
            ),
            152 => 
            array (
                'id' => 3654,
                'country_id' => 222,
                'name' => 'Tatawi',
            ),
            153 => 
            array (
                'id' => 3655,
                'country_id' => 222,
                'name' => 'Tawzar',
            ),
            154 => 
            array (
                'id' => 3656,
                'country_id' => 222,
                'name' => 'Tunis',
            ),
            155 => 
            array (
                'id' => 3657,
                'country_id' => 222,
                'name' => 'Zaghwa',
            ),
            156 => 
            array (
                'id' => 3658,
                'country_id' => 222,
                'name' => 'al-Kaf',
            ),
            157 => 
            array (
                'id' => 3659,
                'country_id' => 222,
                'name' => 'al-Mahdiyah',
            ),
            158 => 
            array (
                'id' => 3660,
                'country_id' => 222,
                'name' => 'al-Munastir',
            ),
            159 => 
            array (
                'id' => 3661,
                'country_id' => 222,
                'name' => 'al-Qasray',
            ),
            160 => 
            array (
                'id' => 3662,
                'country_id' => 222,
                'name' => 'al-Qayrawa',
            ),
            161 => 
            array (
                'id' => 3663,
                'country_id' => 223,
                'name' => 'Adana',
            ),
            162 => 
            array (
                'id' => 3664,
                'country_id' => 223,
                'name' => 'Adiyama',
            ),
            163 => 
            array (
                'id' => 3665,
                'country_id' => 223,
                'name' => 'Afyo',
            ),
            164 => 
            array (
                'id' => 3666,
                'country_id' => 223,
                'name' => 'Agri',
            ),
            165 => 
            array (
                'id' => 3667,
                'country_id' => 223,
                'name' => 'Aksaray',
            ),
            166 => 
            array (
                'id' => 3668,
                'country_id' => 223,
                'name' => 'Amasya',
            ),
            167 => 
            array (
                'id' => 3669,
                'country_id' => 223,
                'name' => 'Ankara',
            ),
            168 => 
            array (
                'id' => 3670,
                'country_id' => 223,
                'name' => 'Antalya',
            ),
            169 => 
            array (
                'id' => 3671,
                'country_id' => 223,
                'name' => 'Ardaha',
            ),
            170 => 
            array (
                'id' => 3672,
                'country_id' => 223,
                'name' => 'Artvi',
            ),
            171 => 
            array (
                'id' => 3673,
                'country_id' => 223,
                'name' => 'Aydi',
            ),
            172 => 
            array (
                'id' => 3674,
                'country_id' => 223,
                'name' => 'Balikesir',
            ),
            173 => 
            array (
                'id' => 3675,
                'country_id' => 223,
                'name' => 'Barti',
            ),
            174 => 
            array (
                'id' => 3676,
                'country_id' => 223,
                'name' => 'Batma',
            ),
            175 => 
            array (
                'id' => 3677,
                'country_id' => 223,
                'name' => 'Bayburt',
            ),
            176 => 
            array (
                'id' => 3678,
                'country_id' => 223,
                'name' => 'Bilecik',
            ),
            177 => 
            array (
                'id' => 3679,
                'country_id' => 223,
                'name' => 'Bingol',
            ),
            178 => 
            array (
                'id' => 3680,
                'country_id' => 223,
                'name' => 'Bitlis',
            ),
            179 => 
            array (
                'id' => 3681,
                'country_id' => 223,
                'name' => 'Bolu',
            ),
            180 => 
            array (
                'id' => 3682,
                'country_id' => 223,
                'name' => 'Burdur',
            ),
            181 => 
            array (
                'id' => 3683,
                'country_id' => 223,
                'name' => 'Bursa',
            ),
            182 => 
            array (
                'id' => 3684,
                'country_id' => 223,
                'name' => 'Canakkale',
            ),
            183 => 
            array (
                'id' => 3685,
                'country_id' => 223,
                'name' => 'Cankiri',
            ),
            184 => 
            array (
                'id' => 3686,
                'country_id' => 223,
                'name' => 'Corum',
            ),
            185 => 
            array (
                'id' => 3687,
                'country_id' => 223,
                'name' => 'Denizli',
            ),
            186 => 
            array (
                'id' => 3688,
                'country_id' => 223,
                'name' => 'Diyarbakir',
            ),
            187 => 
            array (
                'id' => 3689,
                'country_id' => 223,
                'name' => 'Duzce',
            ),
            188 => 
            array (
                'id' => 3690,
                'country_id' => 223,
                'name' => 'Edirne',
            ),
            189 => 
            array (
                'id' => 3691,
                'country_id' => 223,
                'name' => 'Elazig',
            ),
            190 => 
            array (
                'id' => 3692,
                'country_id' => 223,
                'name' => 'Erzinca',
            ),
            191 => 
            array (
                'id' => 3693,
                'country_id' => 223,
                'name' => 'Erzurum',
            ),
            192 => 
            array (
                'id' => 3694,
                'country_id' => 223,
                'name' => 'Eskisehir',
            ),
            193 => 
            array (
                'id' => 3695,
                'country_id' => 223,
                'name' => 'Gaziantep',
            ),
            194 => 
            array (
                'id' => 3696,
                'country_id' => 223,
                'name' => 'Giresu',
            ),
            195 => 
            array (
                'id' => 3697,
                'country_id' => 223,
                'name' => 'Gumushane',
            ),
            196 => 
            array (
                'id' => 3698,
                'country_id' => 223,
                'name' => 'Hakkari',
            ),
            197 => 
            array (
                'id' => 3699,
                'country_id' => 223,
                'name' => 'Hatay',
            ),
            198 => 
            array (
                'id' => 3700,
                'country_id' => 223,
                'name' => 'Icel',
            ),
            199 => 
            array (
                'id' => 3701,
                'country_id' => 223,
                'name' => 'Igdir',
            ),
            200 => 
            array (
                'id' => 3702,
                'country_id' => 223,
                'name' => 'Isparta',
            ),
            201 => 
            array (
                'id' => 3703,
                'country_id' => 223,
                'name' => 'Istanbul',
            ),
            202 => 
            array (
                'id' => 3704,
                'country_id' => 223,
                'name' => 'Izmir',
            ),
            203 => 
            array (
                'id' => 3705,
                'country_id' => 223,
                'name' => 'Kahramanmaras',
            ),
            204 => 
            array (
                'id' => 3706,
                'country_id' => 223,
                'name' => 'Karabuk',
            ),
            205 => 
            array (
                'id' => 3707,
                'country_id' => 223,
                'name' => 'Karama',
            ),
            206 => 
            array (
                'id' => 3708,
                'country_id' => 223,
                'name' => 'Kars',
            ),
            207 => 
            array (
                'id' => 3709,
                'country_id' => 223,
                'name' => 'Karsiyaka',
            ),
            208 => 
            array (
                'id' => 3710,
                'country_id' => 223,
                'name' => 'Kastamonu',
            ),
            209 => 
            array (
                'id' => 3711,
                'country_id' => 223,
                'name' => 'Kayseri',
            ),
            210 => 
            array (
                'id' => 3712,
                'country_id' => 223,
                'name' => 'Kilis',
            ),
            211 => 
            array (
                'id' => 3713,
                'country_id' => 223,
                'name' => 'Kirikkale',
            ),
            212 => 
            array (
                'id' => 3714,
                'country_id' => 223,
                'name' => 'Kirklareli',
            ),
            213 => 
            array (
                'id' => 3715,
                'country_id' => 223,
                'name' => 'Kirsehir',
            ),
            214 => 
            array (
                'id' => 3716,
                'country_id' => 223,
                'name' => 'Kocaeli',
            ),
            215 => 
            array (
                'id' => 3717,
                'country_id' => 223,
                'name' => 'Konya',
            ),
            216 => 
            array (
                'id' => 3718,
                'country_id' => 223,
                'name' => 'Kutahya',
            ),
            217 => 
            array (
                'id' => 3719,
                'country_id' => 223,
                'name' => 'Lefkosa',
            ),
            218 => 
            array (
                'id' => 3720,
                'country_id' => 223,
                'name' => 'Malatya',
            ),
            219 => 
            array (
                'id' => 3721,
                'country_id' => 223,
                'name' => 'Manisa',
            ),
            220 => 
            array (
                'id' => 3722,
                'country_id' => 223,
                'name' => 'Mardi',
            ),
            221 => 
            array (
                'id' => 3723,
                'country_id' => 223,
                'name' => 'Mugla',
            ),
            222 => 
            array (
                'id' => 3724,
                'country_id' => 223,
                'name' => 'Mus',
            ),
            223 => 
            array (
                'id' => 3725,
                'country_id' => 223,
                'name' => 'Nevsehir',
            ),
            224 => 
            array (
                'id' => 3726,
                'country_id' => 223,
                'name' => 'Nigde',
            ),
            225 => 
            array (
                'id' => 3727,
                'country_id' => 223,
                'name' => 'Ordu',
            ),
            226 => 
            array (
                'id' => 3728,
                'country_id' => 223,
                'name' => 'Osmaniye',
            ),
            227 => 
            array (
                'id' => 3729,
                'country_id' => 223,
                'name' => 'Rize',
            ),
            228 => 
            array (
                'id' => 3730,
                'country_id' => 223,
                'name' => 'Sakarya',
            ),
            229 => 
            array (
                'id' => 3731,
                'country_id' => 223,
                'name' => 'Samsu',
            ),
            230 => 
            array (
                'id' => 3732,
                'country_id' => 223,
                'name' => 'Sanliurfa',
            ),
            231 => 
            array (
                'id' => 3733,
                'country_id' => 223,
                'name' => 'Siirt',
            ),
            232 => 
            array (
                'id' => 3734,
                'country_id' => 223,
                'name' => 'Sinop',
            ),
            233 => 
            array (
                'id' => 3735,
                'country_id' => 223,
                'name' => 'Sirnak',
            ),
            234 => 
            array (
                'id' => 3736,
                'country_id' => 223,
                'name' => 'Sivas',
            ),
            235 => 
            array (
                'id' => 3737,
                'country_id' => 223,
                'name' => 'Tekirdag',
            ),
            236 => 
            array (
                'id' => 3738,
                'country_id' => 223,
                'name' => 'Tokat',
            ),
            237 => 
            array (
                'id' => 3739,
                'country_id' => 223,
                'name' => 'Trabzo',
            ),
            238 => 
            array (
                'id' => 3740,
                'country_id' => 223,
                'name' => 'Tunceli',
            ),
            239 => 
            array (
                'id' => 3741,
                'country_id' => 223,
                'name' => 'Usak',
            ),
            240 => 
            array (
                'id' => 3742,
                'country_id' => 223,
                'name' => 'Va',
            ),
            241 => 
            array (
                'id' => 3743,
                'country_id' => 223,
                'name' => 'Yalova',
            ),
            242 => 
            array (
                'id' => 3744,
                'country_id' => 223,
                'name' => 'Yozgat',
            ),
            243 => 
            array (
                'id' => 3745,
                'country_id' => 223,
                'name' => 'Zonguldak',
            ),
            244 => 
            array (
                'id' => 3746,
                'country_id' => 224,
                'name' => 'Ahal',
            ),
            245 => 
            array (
                'id' => 3747,
                'country_id' => 224,
                'name' => 'Asgabat',
            ),
            246 => 
            array (
                'id' => 3748,
                'country_id' => 224,
                'name' => 'Balka',
            ),
            247 => 
            array (
                'id' => 3749,
                'country_id' => 224,
                'name' => 'Dasoguz',
            ),
            248 => 
            array (
                'id' => 3750,
                'country_id' => 224,
                'name' => 'Lebap',
            ),
            249 => 
            array (
                'id' => 3751,
                'country_id' => 224,
                'name' => 'Mari',
            ),
            250 => 
            array (
                'id' => 3752,
                'country_id' => 225,
                'name' => 'Grand Turk',
            ),
            251 => 
            array (
                'id' => 3753,
                'country_id' => 225,
                'name' => 'South Caicos and East Caicos',
            ),
            252 => 
            array (
                'id' => 3754,
                'country_id' => 226,
                'name' => 'Funafuti',
            ),
            253 => 
            array (
                'id' => 3755,
                'country_id' => 226,
                'name' => 'Nanumanga',
            ),
            254 => 
            array (
                'id' => 3756,
                'country_id' => 226,
                'name' => 'Nanumea',
            ),
            255 => 
            array (
                'id' => 3757,
                'country_id' => 226,
                'name' => 'Niutao',
            ),
            256 => 
            array (
                'id' => 3758,
                'country_id' => 226,
                'name' => 'Nui',
            ),
            257 => 
            array (
                'id' => 3759,
                'country_id' => 226,
                'name' => 'Nukufetau',
            ),
            258 => 
            array (
                'id' => 3760,
                'country_id' => 226,
                'name' => 'Nukulaelae',
            ),
            259 => 
            array (
                'id' => 3761,
                'country_id' => 226,
                'name' => 'Vaitupu',
            ),
            260 => 
            array (
                'id' => 3762,
                'country_id' => 227,
                'name' => 'Central',
            ),
            261 => 
            array (
                'id' => 3763,
                'country_id' => 227,
                'name' => 'Easter',
            ),
            262 => 
            array (
                'id' => 3764,
                'country_id' => 227,
                'name' => 'Norther',
            ),
            263 => 
            array (
                'id' => 3765,
                'country_id' => 227,
                'name' => 'Wester',
            ),
            264 => 
            array (
                'id' => 3766,
                'country_id' => 228,
                'name' => 'Cherkas\'ka',
            ),
            265 => 
            array (
                'id' => 3767,
                'country_id' => 228,
                'name' => 'Chernihivs\'ka',
            ),
            266 => 
            array (
                'id' => 3768,
                'country_id' => 228,
                'name' => 'Chernivets\'ka',
            ),
            267 => 
            array (
                'id' => 3769,
                'country_id' => 228,
                'name' => 'Crimea',
            ),
            268 => 
            array (
                'id' => 3770,
                'country_id' => 228,
                'name' => 'Dnipropetrovska',
            ),
            269 => 
            array (
                'id' => 3771,
                'country_id' => 228,
                'name' => 'Donets\'ka',
            ),
            270 => 
            array (
                'id' => 3772,
                'country_id' => 228,
                'name' => 'Ivano-Frankivs\'ka',
            ),
            271 => 
            array (
                'id' => 3773,
                'country_id' => 228,
                'name' => 'Kharkiv',
            ),
            272 => 
            array (
                'id' => 3774,
                'country_id' => 228,
                'name' => 'Kharkov',
            ),
            273 => 
            array (
                'id' => 3775,
                'country_id' => 228,
                'name' => 'Khersonska',
            ),
            274 => 
            array (
                'id' => 3776,
                'country_id' => 228,
                'name' => 'Khmel\'nyts\'ka',
            ),
            275 => 
            array (
                'id' => 3777,
                'country_id' => 228,
                'name' => 'Kirovohrad',
            ),
            276 => 
            array (
                'id' => 3778,
                'country_id' => 228,
                'name' => 'Krym',
            ),
            277 => 
            array (
                'id' => 3779,
                'country_id' => 228,
                'name' => 'Kyyiv',
            ),
            278 => 
            array (
                'id' => 3780,
                'country_id' => 228,
                'name' => 'Kyyivs\'ka',
            ),
            279 => 
            array (
                'id' => 3781,
                'country_id' => 228,
                'name' => 'L\'vivs\'ka',
            ),
            280 => 
            array (
                'id' => 3782,
                'country_id' => 228,
                'name' => 'Luhans\'ka',
            ),
            281 => 
            array (
                'id' => 3783,
                'country_id' => 228,
                'name' => 'Mykolayivs\'ka',
            ),
            282 => 
            array (
                'id' => 3784,
                'country_id' => 228,
                'name' => 'Odes\'ka',
            ),
            283 => 
            array (
                'id' => 3785,
                'country_id' => 228,
                'name' => 'Odessa',
            ),
            284 => 
            array (
                'id' => 3786,
                'country_id' => 228,
                'name' => 'Poltavs\'ka',
            ),
            285 => 
            array (
                'id' => 3787,
                'country_id' => 228,
                'name' => 'Rivnens\'ka',
            ),
            286 => 
            array (
                'id' => 3788,
                'country_id' => 228,
                'name' => 'Sevastopol\'',
            ),
            287 => 
            array (
                'id' => 3789,
                'country_id' => 228,
                'name' => 'Sums\'ka',
            ),
            288 => 
            array (
                'id' => 3790,
                'country_id' => 228,
                'name' => 'Ternopil\'s\'ka',
            ),
            289 => 
            array (
                'id' => 3791,
                'country_id' => 228,
                'name' => 'Volyns\'ka',
            ),
            290 => 
            array (
                'id' => 3792,
                'country_id' => 228,
                'name' => 'Vynnyts\'ka',
            ),
            291 => 
            array (
                'id' => 3793,
                'country_id' => 228,
                'name' => 'Zakarpats\'ka',
            ),
            292 => 
            array (
                'id' => 3794,
                'country_id' => 228,
                'name' => 'Zaporizhia',
            ),
            293 => 
            array (
                'id' => 3795,
                'country_id' => 228,
                'name' => 'Zhytomyrs\'ka',
            ),
            294 => 
            array (
                'id' => 3796,
                'country_id' => 229,
                'name' => 'Abu Zabi',
            ),
            295 => 
            array (
                'id' => 3797,
                'country_id' => 229,
                'name' => 'Ajma',
            ),
            296 => 
            array (
                'id' => 3798,
                'country_id' => 229,
                'name' => 'Dubai',
            ),
            297 => 
            array (
                'id' => 3799,
                'country_id' => 229,
                'name' => 'Ras al-Khaymah',
            ),
            298 => 
            array (
                'id' => 3800,
                'country_id' => 229,
                'name' => 'Sharjah',
            ),
            299 => 
            array (
                'id' => 3801,
                'country_id' => 229,
                'name' => 'Sharjha',
            ),
            300 => 
            array (
                'id' => 3802,
                'country_id' => 229,
                'name' => 'Umm al Qayway',
            ),
            301 => 
            array (
                'id' => 3803,
                'country_id' => 229,
                'name' => 'al-Fujayrah',
            ),
            302 => 
            array (
                'id' => 3804,
                'country_id' => 229,
                'name' => 'ash-Shariqah',
            ),
            303 => 
            array (
                'id' => 3805,
                'country_id' => 230,
                'name' => 'Aberdee',
            ),
            304 => 
            array (
                'id' => 3806,
                'country_id' => 230,
                'name' => 'Aberdeenshire',
            ),
            305 => 
            array (
                'id' => 3807,
                'country_id' => 230,
                'name' => 'Argyll',
            ),
            306 => 
            array (
                'id' => 3808,
                'country_id' => 230,
                'name' => 'Armagh',
            ),
            307 => 
            array (
                'id' => 3809,
                'country_id' => 230,
                'name' => 'Bedfordshire',
            ),
            308 => 
            array (
                'id' => 3810,
                'country_id' => 230,
                'name' => 'Belfast',
            ),
            309 => 
            array (
                'id' => 3811,
                'country_id' => 230,
                'name' => 'Berkshire',
            ),
            310 => 
            array (
                'id' => 3812,
                'country_id' => 230,
                'name' => 'Birmingham',
            ),
            311 => 
            array (
                'id' => 3813,
                'country_id' => 230,
                'name' => 'Brechi',
            ),
            312 => 
            array (
                'id' => 3814,
                'country_id' => 230,
                'name' => 'Bridgnorth',
            ),
            313 => 
            array (
                'id' => 3815,
                'country_id' => 230,
                'name' => 'Bristol',
            ),
            314 => 
            array (
                'id' => 3816,
                'country_id' => 230,
                'name' => 'Buckinghamshire',
            ),
            315 => 
            array (
                'id' => 3817,
                'country_id' => 230,
                'name' => 'Cambridge',
            ),
            316 => 
            array (
                'id' => 3818,
                'country_id' => 230,
                'name' => 'Cambridgeshire',
            ),
            317 => 
            array (
                'id' => 3819,
                'country_id' => 230,
                'name' => 'Channel Islands',
            ),
            318 => 
            array (
                'id' => 3820,
                'country_id' => 230,
                'name' => 'Cheshire',
            ),
            319 => 
            array (
                'id' => 3821,
                'country_id' => 230,
                'name' => 'Cleveland',
            ),
            320 => 
            array (
                'id' => 3822,
                'country_id' => 230,
                'name' => 'Co Fermanagh',
            ),
            321 => 
            array (
                'id' => 3823,
                'country_id' => 230,
                'name' => 'Conwy',
            ),
            322 => 
            array (
                'id' => 3824,
                'country_id' => 230,
                'name' => 'Cornwall',
            ),
            323 => 
            array (
                'id' => 3825,
                'country_id' => 230,
                'name' => 'Coventry',
            ),
            324 => 
            array (
                'id' => 3826,
                'country_id' => 230,
                'name' => 'Craven Arms',
            ),
            325 => 
            array (
                'id' => 3827,
                'country_id' => 230,
                'name' => 'Cumbria',
            ),
            326 => 
            array (
                'id' => 3828,
                'country_id' => 230,
                'name' => 'Denbighshire',
            ),
            327 => 
            array (
                'id' => 3829,
                'country_id' => 230,
                'name' => 'Derby',
            ),
            328 => 
            array (
                'id' => 3830,
                'country_id' => 230,
                'name' => 'Derbyshire',
            ),
            329 => 
            array (
                'id' => 3831,
                'country_id' => 230,
                'name' => 'Devo',
            ),
            330 => 
            array (
                'id' => 3832,
                'country_id' => 230,
                'name' => 'Dial Code Dunganno',
            ),
            331 => 
            array (
                'id' => 3833,
                'country_id' => 230,
                'name' => 'Didcot',
            ),
            332 => 
            array (
                'id' => 3834,
                'country_id' => 230,
                'name' => 'Dorset',
            ),
            333 => 
            array (
                'id' => 3835,
                'country_id' => 230,
                'name' => 'Dunbartonshire',
            ),
            334 => 
            array (
                'id' => 3836,
                'country_id' => 230,
                'name' => 'Durham',
            ),
            335 => 
            array (
                'id' => 3837,
                'country_id' => 230,
                'name' => 'East Dunbartonshire',
            ),
            336 => 
            array (
                'id' => 3838,
                'country_id' => 230,
                'name' => 'East Lothia',
            ),
            337 => 
            array (
                'id' => 3839,
                'country_id' => 230,
                'name' => 'East Midlands',
            ),
            338 => 
            array (
                'id' => 3840,
                'country_id' => 230,
                'name' => 'East Sussex',
            ),
            339 => 
            array (
                'id' => 3841,
                'country_id' => 230,
                'name' => 'East Yorkshire',
            ),
            340 => 
            array (
                'id' => 3842,
                'country_id' => 230,
                'name' => 'England',
            ),
            341 => 
            array (
                'id' => 3843,
                'country_id' => 230,
                'name' => 'Essex',
            ),
            342 => 
            array (
                'id' => 3844,
                'country_id' => 230,
                'name' => 'Fermanagh',
            ),
            343 => 
            array (
                'id' => 3845,
                'country_id' => 230,
                'name' => 'Fife',
            ),
            344 => 
            array (
                'id' => 3846,
                'country_id' => 230,
                'name' => 'Flintshire',
            ),
            345 => 
            array (
                'id' => 3847,
                'country_id' => 230,
                'name' => 'Fulham',
            ),
            346 => 
            array (
                'id' => 3848,
                'country_id' => 230,
                'name' => 'Gainsborough',
            ),
            347 => 
            array (
                'id' => 3849,
                'country_id' => 230,
                'name' => 'Glocestershire',
            ),
            348 => 
            array (
                'id' => 3850,
                'country_id' => 230,
                'name' => 'Gwent',
            ),
            349 => 
            array (
                'id' => 3851,
                'country_id' => 230,
                'name' => 'Hampshire',
            ),
            350 => 
            array (
                'id' => 3852,
                'country_id' => 230,
                'name' => 'Hants',
            ),
            351 => 
            array (
                'id' => 3853,
                'country_id' => 230,
                'name' => 'Herefordshire',
            ),
            352 => 
            array (
                'id' => 3854,
                'country_id' => 230,
                'name' => 'Hertfordshire',
            ),
            353 => 
            array (
                'id' => 3855,
                'country_id' => 230,
                'name' => 'Ireland',
            ),
            354 => 
            array (
                'id' => 3856,
                'country_id' => 230,
                'name' => 'Isle Of Ma',
            ),
            355 => 
            array (
                'id' => 3857,
                'country_id' => 230,
                'name' => 'Isle of Wight',
            ),
            356 => 
            array (
                'id' => 3858,
                'country_id' => 230,
                'name' => 'Kenford',
            ),
            357 => 
            array (
                'id' => 3859,
                'country_id' => 230,
                'name' => 'Kent',
            ),
            358 => 
            array (
                'id' => 3860,
                'country_id' => 230,
                'name' => 'Kilmarnock',
            ),
            359 => 
            array (
                'id' => 3861,
                'country_id' => 230,
                'name' => 'Lanarkshire',
            ),
            360 => 
            array (
                'id' => 3862,
                'country_id' => 230,
                'name' => 'Lancashire',
            ),
            361 => 
            array (
                'id' => 3863,
                'country_id' => 230,
                'name' => 'Leicestershire',
            ),
            362 => 
            array (
                'id' => 3864,
                'country_id' => 230,
                'name' => 'Lincolnshire',
            ),
            363 => 
            array (
                'id' => 3865,
                'country_id' => 230,
                'name' => 'Llanymynech',
            ),
            364 => 
            array (
                'id' => 3866,
                'country_id' => 230,
                'name' => 'Londo',
            ),
            365 => 
            array (
                'id' => 3867,
                'country_id' => 230,
                'name' => 'Ludlow',
            ),
            366 => 
            array (
                'id' => 3868,
                'country_id' => 230,
                'name' => 'Manchester',
            ),
            367 => 
            array (
                'id' => 3869,
                'country_id' => 230,
                'name' => 'Mayfair',
            ),
            368 => 
            array (
                'id' => 3870,
                'country_id' => 230,
                'name' => 'Merseyside',
            ),
            369 => 
            array (
                'id' => 3871,
                'country_id' => 230,
                'name' => 'Mid Glamorga',
            ),
            370 => 
            array (
                'id' => 3872,
                'country_id' => 230,
                'name' => 'Middlesex',
            ),
            371 => 
            array (
                'id' => 3873,
                'country_id' => 230,
                'name' => 'Mildenhall',
            ),
            372 => 
            array (
                'id' => 3874,
                'country_id' => 230,
                'name' => 'Monmouthshire',
            ),
            373 => 
            array (
                'id' => 3875,
                'country_id' => 230,
                'name' => 'Newton Stewart',
            ),
            374 => 
            array (
                'id' => 3876,
                'country_id' => 230,
                'name' => 'Norfolk',
            ),
            375 => 
            array (
                'id' => 3877,
                'country_id' => 230,
                'name' => 'North Humberside',
            ),
            376 => 
            array (
                'id' => 3878,
                'country_id' => 230,
                'name' => 'North Yorkshire',
            ),
            377 => 
            array (
                'id' => 3879,
                'country_id' => 230,
                'name' => 'Northamptonshire',
            ),
            378 => 
            array (
                'id' => 3880,
                'country_id' => 230,
                'name' => 'Northants',
            ),
            379 => 
            array (
                'id' => 3881,
                'country_id' => 230,
                'name' => 'Northern Ireland',
            ),
            380 => 
            array (
                'id' => 3882,
                'country_id' => 230,
                'name' => 'Northumberland',
            ),
            381 => 
            array (
                'id' => 3883,
                'country_id' => 230,
                'name' => 'Nottinghamshire',
            ),
            382 => 
            array (
                'id' => 3884,
                'country_id' => 230,
                'name' => 'Oxford',
            ),
            383 => 
            array (
                'id' => 3885,
                'country_id' => 230,
                'name' => 'Powys',
            ),
            384 => 
            array (
                'id' => 3886,
                'country_id' => 230,
                'name' => 'Roos-shire',
            ),
            385 => 
            array (
                'id' => 3887,
                'country_id' => 230,
                'name' => 'SUSSEX',
            ),
            386 => 
            array (
                'id' => 3888,
                'country_id' => 230,
                'name' => 'Sark',
            ),
            387 => 
            array (
                'id' => 3889,
                'country_id' => 230,
                'name' => 'Scotland',
            ),
            388 => 
            array (
                'id' => 3890,
                'country_id' => 230,
                'name' => 'Scottish Borders',
            ),
            389 => 
            array (
                'id' => 3891,
                'country_id' => 230,
                'name' => 'Shropshire',
            ),
            390 => 
            array (
                'id' => 3892,
                'country_id' => 230,
                'name' => 'Somerset',
            ),
            391 => 
            array (
                'id' => 3893,
                'country_id' => 230,
                'name' => 'South Glamorga',
            ),
            392 => 
            array (
                'id' => 3894,
                'country_id' => 230,
                'name' => 'South Wales',
            ),
            393 => 
            array (
                'id' => 3895,
                'country_id' => 230,
                'name' => 'South Yorkshire',
            ),
            394 => 
            array (
                'id' => 3896,
                'country_id' => 230,
                'name' => 'Southwell',
            ),
            395 => 
            array (
                'id' => 3897,
                'country_id' => 230,
                'name' => 'Staffordshire',
            ),
            396 => 
            array (
                'id' => 3898,
                'country_id' => 230,
                'name' => 'Strabane',
            ),
            397 => 
            array (
                'id' => 3899,
                'country_id' => 230,
                'name' => 'Suffolk',
            ),
            398 => 
            array (
                'id' => 3900,
                'country_id' => 230,
                'name' => 'Surrey',
            ),
            399 => 
            array (
                'id' => 3901,
                'country_id' => 230,
                'name' => 'Sussex',
            ),
            400 => 
            array (
                'id' => 3902,
                'country_id' => 230,
                'name' => 'Twickenham',
            ),
            401 => 
            array (
                'id' => 3903,
                'country_id' => 230,
                'name' => 'Tyne and Wear',
            ),
            402 => 
            array (
                'id' => 3904,
                'country_id' => 230,
                'name' => 'Tyrone',
            ),
            403 => 
            array (
                'id' => 3905,
                'country_id' => 230,
                'name' => 'Utah',
            ),
            404 => 
            array (
                'id' => 3906,
                'country_id' => 230,
                'name' => 'Wales',
            ),
            405 => 
            array (
                'id' => 3907,
                'country_id' => 230,
                'name' => 'Warwickshire',
            ),
            406 => 
            array (
                'id' => 3908,
                'country_id' => 230,
                'name' => 'West Lothia',
            ),
            407 => 
            array (
                'id' => 3909,
                'country_id' => 230,
                'name' => 'West Midlands',
            ),
            408 => 
            array (
                'id' => 3910,
                'country_id' => 230,
                'name' => 'West Sussex',
            ),
            409 => 
            array (
                'id' => 3911,
                'country_id' => 230,
                'name' => 'West Yorkshire',
            ),
            410 => 
            array (
                'id' => 3912,
                'country_id' => 230,
                'name' => 'Whissendine',
            ),
            411 => 
            array (
                'id' => 3913,
                'country_id' => 230,
                'name' => 'Wiltshire',
            ),
            412 => 
            array (
                'id' => 3914,
                'country_id' => 230,
                'name' => 'Wokingham',
            ),
            413 => 
            array (
                'id' => 3915,
                'country_id' => 230,
                'name' => 'Worcestershire',
            ),
            414 => 
            array (
                'id' => 3916,
                'country_id' => 230,
                'name' => 'Wrexham',
            ),
            415 => 
            array (
                'id' => 3917,
                'country_id' => 230,
                'name' => 'Wurttemberg',
            ),
            416 => 
            array (
                'id' => 3918,
                'country_id' => 230,
                'name' => 'Yorkshire',
            ),
            417 => 
            array (
                'id' => 3919,
                'country_id' => 231,
                'name' => 'Alabama',
            ),
            418 => 
            array (
                'id' => 3920,
                'country_id' => 231,
                'name' => 'Alaska',
            ),
            419 => 
            array (
                'id' => 3921,
                'country_id' => 231,
                'name' => 'Arizona',
            ),
            420 => 
            array (
                'id' => 3922,
                'country_id' => 231,
                'name' => 'Arkansas',
            ),
            421 => 
            array (
                'id' => 3923,
                'country_id' => 231,
                'name' => 'Byram',
            ),
            422 => 
            array (
                'id' => 3924,
                'country_id' => 231,
                'name' => 'California',
            ),
            423 => 
            array (
                'id' => 3925,
                'country_id' => 231,
                'name' => 'Cokato',
            ),
            424 => 
            array (
                'id' => 3926,
                'country_id' => 231,
                'name' => 'Colorado',
            ),
            425 => 
            array (
                'id' => 3927,
                'country_id' => 231,
                'name' => 'Connecticut',
            ),
            426 => 
            array (
                'id' => 3928,
                'country_id' => 231,
                'name' => 'Delaware',
            ),
            427 => 
            array (
                'id' => 3929,
                'country_id' => 231,
                'name' => 'District of Columbia',
            ),
            428 => 
            array (
                'id' => 3930,
                'country_id' => 231,
                'name' => 'Florida',
            ),
            429 => 
            array (
                'id' => 3931,
                'country_id' => 231,
                'name' => 'Georgia',
            ),
            430 => 
            array (
                'id' => 3932,
                'country_id' => 231,
                'name' => 'Hawaii',
            ),
            431 => 
            array (
                'id' => 3933,
                'country_id' => 231,
                'name' => 'Idaho',
            ),
            432 => 
            array (
                'id' => 3934,
                'country_id' => 231,
                'name' => 'Illinois',
            ),
            433 => 
            array (
                'id' => 3935,
                'country_id' => 231,
                'name' => 'Indiana',
            ),
            434 => 
            array (
                'id' => 3936,
                'country_id' => 231,
                'name' => 'Iowa',
            ),
            435 => 
            array (
                'id' => 3937,
                'country_id' => 231,
                'name' => 'Kansas',
            ),
            436 => 
            array (
                'id' => 3938,
                'country_id' => 231,
                'name' => 'Kentucky',
            ),
            437 => 
            array (
                'id' => 3939,
                'country_id' => 231,
                'name' => 'Louisiana',
            ),
            438 => 
            array (
                'id' => 3940,
                'country_id' => 231,
                'name' => 'Lowa',
            ),
            439 => 
            array (
                'id' => 3941,
                'country_id' => 231,
                'name' => 'Maine',
            ),
            440 => 
            array (
                'id' => 3942,
                'country_id' => 231,
                'name' => 'Maryland',
            ),
            441 => 
            array (
                'id' => 3943,
                'country_id' => 231,
                'name' => 'Massachusetts',
            ),
            442 => 
            array (
                'id' => 3944,
                'country_id' => 231,
                'name' => 'Medfield',
            ),
            443 => 
            array (
                'id' => 3945,
                'country_id' => 231,
                'name' => 'Michiga',
            ),
            444 => 
            array (
                'id' => 3946,
                'country_id' => 231,
                'name' => 'Minnesota',
            ),
            445 => 
            array (
                'id' => 3947,
                'country_id' => 231,
                'name' => 'Mississippi',
            ),
            446 => 
            array (
                'id' => 3948,
                'country_id' => 231,
                'name' => 'Missouri',
            ),
            447 => 
            array (
                'id' => 3949,
                'country_id' => 231,
                'name' => 'Montana',
            ),
            448 => 
            array (
                'id' => 3950,
                'country_id' => 231,
                'name' => 'Nebraska',
            ),
            449 => 
            array (
                'id' => 3951,
                'country_id' => 231,
                'name' => 'Nevada',
            ),
            450 => 
            array (
                'id' => 3952,
                'country_id' => 231,
                'name' => 'New Hampshire',
            ),
            451 => 
            array (
                'id' => 3953,
                'country_id' => 231,
                'name' => 'New Jersey',
            ),
            452 => 
            array (
                'id' => 3954,
                'country_id' => 231,
                'name' => 'New Jersy',
            ),
            453 => 
            array (
                'id' => 3955,
                'country_id' => 231,
                'name' => 'New Mexico',
            ),
            454 => 
            array (
                'id' => 3956,
                'country_id' => 231,
                'name' => 'New York',
            ),
            455 => 
            array (
                'id' => 3957,
                'country_id' => 231,
                'name' => 'North Carolina',
            ),
            456 => 
            array (
                'id' => 3958,
                'country_id' => 231,
                'name' => 'North Dakota',
            ),
            457 => 
            array (
                'id' => 3959,
                'country_id' => 231,
                'name' => 'Ohio',
            ),
            458 => 
            array (
                'id' => 3960,
                'country_id' => 231,
                'name' => 'Oklahoma',
            ),
            459 => 
            array (
                'id' => 3961,
                'country_id' => 231,
                'name' => 'Ontario',
            ),
            460 => 
            array (
                'id' => 3962,
                'country_id' => 231,
                'name' => 'Orego',
            ),
            461 => 
            array (
                'id' => 3963,
                'country_id' => 231,
                'name' => 'Pennsylvania',
            ),
            462 => 
            array (
                'id' => 3964,
                'country_id' => 231,
                'name' => 'Ramey',
            ),
            463 => 
            array (
                'id' => 3965,
                'country_id' => 231,
                'name' => 'Rhode Island',
            ),
            464 => 
            array (
                'id' => 3966,
                'country_id' => 231,
                'name' => 'South Carolina',
            ),
            465 => 
            array (
                'id' => 3967,
                'country_id' => 231,
                'name' => 'South Dakota',
            ),
            466 => 
            array (
                'id' => 3968,
                'country_id' => 231,
                'name' => 'Sublimity',
            ),
            467 => 
            array (
                'id' => 3969,
                'country_id' => 231,
                'name' => 'Tennessee',
            ),
            468 => 
            array (
                'id' => 3970,
                'country_id' => 231,
                'name' => 'Texas',
            ),
            469 => 
            array (
                'id' => 3971,
                'country_id' => 231,
                'name' => 'Trimble',
            ),
            470 => 
            array (
                'id' => 3972,
                'country_id' => 231,
                'name' => 'Utah',
            ),
            471 => 
            array (
                'id' => 3973,
                'country_id' => 231,
                'name' => 'Vermont',
            ),
            472 => 
            array (
                'id' => 3974,
                'country_id' => 231,
                'name' => 'Virginia',
            ),
            473 => 
            array (
                'id' => 3975,
                'country_id' => 231,
                'name' => 'Washingto',
            ),
            474 => 
            array (
                'id' => 3976,
                'country_id' => 231,
                'name' => 'West Virginia',
            ),
            475 => 
            array (
                'id' => 3977,
                'country_id' => 231,
                'name' => 'Wisconsi',
            ),
            476 => 
            array (
                'id' => 3978,
                'country_id' => 231,
                'name' => 'Wyoming',
            ),
            477 => 
            array (
                'id' => 3979,
                'country_id' => 232,
                'name' => 'United States Minor Outlying I',
            ),
            478 => 
            array (
                'id' => 3980,
                'country_id' => 233,
                'name' => 'Artigas',
            ),
            479 => 
            array (
                'id' => 3981,
                'country_id' => 233,
                'name' => 'Canelones',
            ),
            480 => 
            array (
                'id' => 3982,
                'country_id' => 233,
                'name' => 'Cerro Largo',
            ),
            481 => 
            array (
                'id' => 3983,
                'country_id' => 233,
                'name' => 'Colonia',
            ),
            482 => 
            array (
                'id' => 3984,
                'country_id' => 233,
                'name' => 'Durazno',
            ),
            483 => 
            array (
                'id' => 3985,
                'country_id' => 233,
                'name' => 'FLorida',
            ),
            484 => 
            array (
                'id' => 3986,
                'country_id' => 233,
                'name' => 'Flores',
            ),
            485 => 
            array (
                'id' => 3987,
                'country_id' => 233,
                'name' => 'Lavalleja',
            ),
            486 => 
            array (
                'id' => 3988,
                'country_id' => 233,
                'name' => 'Maldonado',
            ),
            487 => 
            array (
                'id' => 3989,
                'country_id' => 233,
                'name' => 'Montevideo',
            ),
            488 => 
            array (
                'id' => 3990,
                'country_id' => 233,
                'name' => 'Paysandu',
            ),
            489 => 
            array (
                'id' => 3991,
                'country_id' => 233,
                'name' => 'Rio Negro',
            ),
            490 => 
            array (
                'id' => 3992,
                'country_id' => 233,
                'name' => 'Rivera',
            ),
            491 => 
            array (
                'id' => 3993,
                'country_id' => 233,
                'name' => 'Rocha',
            ),
            492 => 
            array (
                'id' => 3994,
                'country_id' => 233,
                'name' => 'Salto',
            ),
            493 => 
            array (
                'id' => 3995,
                'country_id' => 233,
                'name' => 'San Jose',
            ),
            494 => 
            array (
                'id' => 3996,
                'country_id' => 233,
                'name' => 'Soriano',
            ),
            495 => 
            array (
                'id' => 3997,
                'country_id' => 233,
                'name' => 'Tacuarembo',
            ),
            496 => 
            array (
                'id' => 3998,
                'country_id' => 233,
                'name' => 'Treinta y Tres',
            ),
            497 => 
            array (
                'id' => 3999,
                'country_id' => 234,
                'name' => 'Andijo',
            ),
            498 => 
            array (
                'id' => 4000,
                'country_id' => 234,
                'name' => 'Buhoro',
            ),
            499 => 
            array (
                'id' => 4001,
                'country_id' => 234,
                'name' => 'Buxoro Viloyati',
            ),
        ));
        \DB::table('tbl_states')->insert(array (
            0 => 
            array (
                'id' => 4002,
                'country_id' => 234,
                'name' => 'Cizah',
            ),
            1 => 
            array (
                'id' => 4003,
                'country_id' => 234,
                'name' => 'Fargona',
            ),
            2 => 
            array (
                'id' => 4004,
                'country_id' => 234,
                'name' => 'Horazm',
            ),
            3 => 
            array (
                'id' => 4005,
                'country_id' => 234,
                'name' => 'Kaskadar',
            ),
            4 => 
            array (
                'id' => 4006,
                'country_id' => 234,
                'name' => 'Korakalpogisto',
            ),
            5 => 
            array (
                'id' => 4007,
                'country_id' => 234,
                'name' => 'Namanga',
            ),
            6 => 
            array (
                'id' => 4008,
                'country_id' => 234,
                'name' => 'Navoi',
            ),
            7 => 
            array (
                'id' => 4009,
                'country_id' => 234,
                'name' => 'Samarkand',
            ),
            8 => 
            array (
                'id' => 4010,
                'country_id' => 234,
                'name' => 'Sirdare',
            ),
            9 => 
            array (
                'id' => 4011,
                'country_id' => 234,
                'name' => 'Surhondar',
            ),
            10 => 
            array (
                'id' => 4012,
                'country_id' => 234,
                'name' => 'Toskent',
            ),
            11 => 
            array (
                'id' => 4013,
                'country_id' => 235,
                'name' => 'Malampa',
            ),
            12 => 
            array (
                'id' => 4014,
                'country_id' => 235,
                'name' => 'Penama',
            ),
            13 => 
            array (
                'id' => 4015,
                'country_id' => 235,
                'name' => 'Sanma',
            ),
            14 => 
            array (
                'id' => 4016,
                'country_id' => 235,
                'name' => 'Shefa',
            ),
            15 => 
            array (
                'id' => 4017,
                'country_id' => 235,
                'name' => 'Tafea',
            ),
            16 => 
            array (
                'id' => 4018,
                'country_id' => 235,
                'name' => 'Torba',
            ),
            17 => 
            array (
                'id' => 4019,
                'country_id' => 236,
            'name' => 'Vatican City State (Holy See);',
            ),
            18 => 
            array (
                'id' => 4020,
                'country_id' => 237,
                'name' => 'Amazonas',
            ),
            19 => 
            array (
                'id' => 4021,
                'country_id' => 237,
                'name' => 'Anzoategui',
            ),
            20 => 
            array (
                'id' => 4022,
                'country_id' => 237,
                'name' => 'Apure',
            ),
            21 => 
            array (
                'id' => 4023,
                'country_id' => 237,
                'name' => 'Aragua',
            ),
            22 => 
            array (
                'id' => 4024,
                'country_id' => 237,
                'name' => 'Barinas',
            ),
            23 => 
            array (
                'id' => 4025,
                'country_id' => 237,
                'name' => 'Bolivar',
            ),
            24 => 
            array (
                'id' => 4026,
                'country_id' => 237,
                'name' => 'Carabobo',
            ),
            25 => 
            array (
                'id' => 4027,
                'country_id' => 237,
                'name' => 'Cojedes',
            ),
            26 => 
            array (
                'id' => 4028,
                'country_id' => 237,
                'name' => 'Delta Amacuro',
            ),
            27 => 
            array (
                'id' => 4029,
                'country_id' => 237,
                'name' => 'Distrito Federal',
            ),
            28 => 
            array (
                'id' => 4030,
                'country_id' => 237,
                'name' => 'Falco',
            ),
            29 => 
            array (
                'id' => 4031,
                'country_id' => 237,
                'name' => 'Guarico',
            ),
            30 => 
            array (
                'id' => 4032,
                'country_id' => 237,
                'name' => 'Lara',
            ),
            31 => 
            array (
                'id' => 4033,
                'country_id' => 237,
                'name' => 'Merida',
            ),
            32 => 
            array (
                'id' => 4034,
                'country_id' => 237,
                'name' => 'Miranda',
            ),
            33 => 
            array (
                'id' => 4035,
                'country_id' => 237,
                'name' => 'Monagas',
            ),
            34 => 
            array (
                'id' => 4036,
                'country_id' => 237,
                'name' => 'Nueva Esparta',
            ),
            35 => 
            array (
                'id' => 4037,
                'country_id' => 237,
                'name' => 'Portuguesa',
            ),
            36 => 
            array (
                'id' => 4038,
                'country_id' => 237,
                'name' => 'Sucre',
            ),
            37 => 
            array (
                'id' => 4039,
                'country_id' => 237,
                'name' => 'Tachira',
            ),
            38 => 
            array (
                'id' => 4040,
                'country_id' => 237,
                'name' => 'Trujillo',
            ),
            39 => 
            array (
                'id' => 4041,
                'country_id' => 237,
                'name' => 'Vargas',
            ),
            40 => 
            array (
                'id' => 4042,
                'country_id' => 237,
                'name' => 'Yaracuy',
            ),
            41 => 
            array (
                'id' => 4043,
                'country_id' => 237,
                'name' => 'Zulia',
            ),
            42 => 
            array (
                'id' => 4044,
                'country_id' => 238,
                'name' => 'Bac Giang',
            ),
            43 => 
            array (
                'id' => 4045,
                'country_id' => 238,
                'name' => 'Binh Dinh',
            ),
            44 => 
            array (
                'id' => 4046,
                'country_id' => 238,
                'name' => 'Binh Duong',
            ),
            45 => 
            array (
                'id' => 4047,
                'country_id' => 238,
                'name' => 'Da Nang',
            ),
            46 => 
            array (
                'id' => 4048,
                'country_id' => 238,
                'name' => 'Dong Bang Song Cuu Long',
            ),
            47 => 
            array (
                'id' => 4049,
                'country_id' => 238,
                'name' => 'Dong Bang Song Hong',
            ),
            48 => 
            array (
                'id' => 4050,
                'country_id' => 238,
                'name' => 'Dong Nai',
            ),
            49 => 
            array (
                'id' => 4051,
                'country_id' => 238,
                'name' => 'Dong Nam Bo',
            ),
            50 => 
            array (
                'id' => 4052,
                'country_id' => 238,
                'name' => 'Duyen Hai Mien Trung',
            ),
            51 => 
            array (
                'id' => 4053,
                'country_id' => 238,
                'name' => 'Hanoi',
            ),
            52 => 
            array (
                'id' => 4054,
                'country_id' => 238,
                'name' => 'Hung Ye',
            ),
            53 => 
            array (
                'id' => 4055,
                'country_id' => 238,
                'name' => 'Khu Bon Cu',
            ),
            54 => 
            array (
                'id' => 4056,
                'country_id' => 238,
                'name' => 'Long A',
            ),
            55 => 
            array (
                'id' => 4057,
                'country_id' => 238,
                'name' => 'Mien Nui Va Trung Du',
            ),
            56 => 
            array (
                'id' => 4058,
                'country_id' => 238,
                'name' => 'Thai Nguye',
            ),
            57 => 
            array (
                'id' => 4059,
                'country_id' => 238,
                'name' => 'Thanh Pho Ho Chi Minh',
            ),
            58 => 
            array (
                'id' => 4060,
                'country_id' => 238,
                'name' => 'Thu Do Ha Noi',
            ),
            59 => 
            array (
                'id' => 4061,
                'country_id' => 238,
                'name' => 'Tinh Can Tho',
            ),
            60 => 
            array (
                'id' => 4062,
                'country_id' => 238,
                'name' => 'Tinh Da Nang',
            ),
            61 => 
            array (
                'id' => 4063,
                'country_id' => 238,
                'name' => 'Tinh Gia Lai',
            ),
            62 => 
            array (
                'id' => 4064,
                'country_id' => 239,
                'name' => 'Anegada',
            ),
            63 => 
            array (
                'id' => 4065,
                'country_id' => 239,
                'name' => 'Jost van Dyke',
            ),
            64 => 
            array (
                'id' => 4066,
                'country_id' => 239,
                'name' => 'Tortola',
            ),
            65 => 
            array (
                'id' => 4067,
                'country_id' => 240,
                'name' => 'Saint Croix',
            ),
            66 => 
            array (
                'id' => 4068,
                'country_id' => 240,
                'name' => 'Saint Joh',
            ),
            67 => 
            array (
                'id' => 4069,
                'country_id' => 240,
                'name' => 'Saint Thomas',
            ),
            68 => 
            array (
                'id' => 4070,
                'country_id' => 241,
                'name' => 'Alo',
            ),
            69 => 
            array (
                'id' => 4071,
                'country_id' => 241,
                'name' => 'Singave',
            ),
            70 => 
            array (
                'id' => 4072,
                'country_id' => 241,
                'name' => 'Wallis',
            ),
            71 => 
            array (
                'id' => 4073,
                'country_id' => 242,
                'name' => 'Bu Jaydur',
            ),
            72 => 
            array (
                'id' => 4074,
                'country_id' => 242,
                'name' => 'Wad-adh-Dhahab',
            ),
            73 => 
            array (
                'id' => 4075,
                'country_id' => 242,
                'name' => 'al-\'Ayu',
            ),
            74 => 
            array (
                'id' => 4076,
                'country_id' => 242,
                'name' => 'as-Samarah',
            ),
            75 => 
            array (
                'id' => 4077,
                'country_id' => 243,
                'name' => '\'Ada',
            ),
            76 => 
            array (
                'id' => 4078,
                'country_id' => 243,
                'name' => 'Abya',
            ),
            77 => 
            array (
                'id' => 4079,
                'country_id' => 243,
                'name' => 'Dhamar',
            ),
            78 => 
            array (
                'id' => 4080,
                'country_id' => 243,
                'name' => 'Hadramaut',
            ),
            79 => 
            array (
                'id' => 4081,
                'country_id' => 243,
                'name' => 'Hajjah',
            ),
            80 => 
            array (
                'id' => 4082,
                'country_id' => 243,
                'name' => 'Hudaydah',
            ),
            81 => 
            array (
                'id' => 4083,
                'country_id' => 243,
                'name' => 'Ibb',
            ),
            82 => 
            array (
                'id' => 4084,
                'country_id' => 243,
                'name' => 'Lahij',
            ),
            83 => 
            array (
                'id' => 4085,
                'country_id' => 243,
                'name' => 'Ma\'rib',
            ),
            84 => 
            array (
                'id' => 4086,
                'country_id' => 243,
                'name' => 'Madinat Sa\'a',
            ),
            85 => 
            array (
                'id' => 4087,
                'country_id' => 243,
                'name' => 'Sa\'dah',
            ),
            86 => 
            array (
                'id' => 4088,
                'country_id' => 243,
                'name' => 'Sana',
            ),
            87 => 
            array (
                'id' => 4089,
                'country_id' => 243,
                'name' => 'Shabwah',
            ),
            88 => 
            array (
                'id' => 4090,
                'country_id' => 243,
                'name' => 'Ta\'izz',
            ),
            89 => 
            array (
                'id' => 4091,
                'country_id' => 243,
                'name' => 'al-Bayda',
            ),
            90 => 
            array (
                'id' => 4092,
                'country_id' => 243,
                'name' => 'al-Hudaydah',
            ),
            91 => 
            array (
                'id' => 4093,
                'country_id' => 243,
                'name' => 'al-Jawf',
            ),
            92 => 
            array (
                'id' => 4094,
                'country_id' => 243,
                'name' => 'al-Mahrah',
            ),
            93 => 
            array (
                'id' => 4095,
                'country_id' => 243,
                'name' => 'al-Mahwit',
            ),
            94 => 
            array (
                'id' => 4096,
                'country_id' => 244,
                'name' => 'Central Serbia',
            ),
            95 => 
            array (
                'id' => 4097,
                'country_id' => 244,
                'name' => 'Kosovo and Metohija',
            ),
            96 => 
            array (
                'id' => 4098,
                'country_id' => 244,
                'name' => 'Montenegro',
            ),
            97 => 
            array (
                'id' => 4099,
                'country_id' => 244,
                'name' => 'Republic of Serbia',
            ),
            98 => 
            array (
                'id' => 4100,
                'country_id' => 244,
                'name' => 'Serbia',
            ),
            99 => 
            array (
                'id' => 4101,
                'country_id' => 244,
                'name' => 'Vojvodina',
            ),
            100 => 
            array (
                'id' => 4102,
                'country_id' => 245,
                'name' => 'Central',
            ),
            101 => 
            array (
                'id' => 4103,
                'country_id' => 245,
                'name' => 'Copperbelt',
            ),
            102 => 
            array (
                'id' => 4104,
                'country_id' => 245,
                'name' => 'Easter',
            ),
            103 => 
            array (
                'id' => 4105,
                'country_id' => 245,
                'name' => 'Luapala',
            ),
            104 => 
            array (
                'id' => 4106,
                'country_id' => 245,
                'name' => 'Lusaka',
            ),
            105 => 
            array (
                'id' => 4107,
                'country_id' => 245,
                'name' => 'North-Wester',
            ),
            106 => 
            array (
                'id' => 4108,
                'country_id' => 245,
                'name' => 'Norther',
            ),
            107 => 
            array (
                'id' => 4109,
                'country_id' => 245,
                'name' => 'Souther',
            ),
            108 => 
            array (
                'id' => 4110,
                'country_id' => 245,
                'name' => 'Wester',
            ),
            109 => 
            array (
                'id' => 4111,
                'country_id' => 246,
                'name' => 'Bulawayo',
            ),
            110 => 
            array (
                'id' => 4112,
                'country_id' => 246,
                'name' => 'Harare',
            ),
            111 => 
            array (
                'id' => 4113,
                'country_id' => 246,
                'name' => 'Manicaland',
            ),
            112 => 
            array (
                'id' => 4114,
                'country_id' => 246,
                'name' => 'Mashonaland Central',
            ),
            113 => 
            array (
                'id' => 4115,
                'country_id' => 246,
                'name' => 'Mashonaland East',
            ),
            114 => 
            array (
                'id' => 4116,
                'country_id' => 246,
                'name' => 'Mashonaland West',
            ),
            115 => 
            array (
                'id' => 4117,
                'country_id' => 246,
                'name' => 'Masvingo',
            ),
            116 => 
            array (
                'id' => 4118,
                'country_id' => 246,
                'name' => 'Matabeleland North',
            ),
            117 => 
            array (
                'id' => 4119,
                'country_id' => 246,
                'name' => 'Matabeleland South',
            ),
            118 => 
            array (
                'id' => 4120,
                'country_id' => 246,
                'name' => 'Midlands',
            ),
        ));
        
        
    }
}