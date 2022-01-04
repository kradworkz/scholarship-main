<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationMunicipalitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location_municipalities')->delete();
        
        \DB::table('location_municipalities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '012801000',
                'name' => 'Adams',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '012802000',
                'name' => 'Bacarra',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '012803000',
                'name' => 'Badoc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '012804000',
                'name' => 'Bangui',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '012805000',
                'name' => 'City of Batac',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '012800000',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '012806000',
                'name' => 'Burgos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '012807000',
                'name' => 'Carasi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '012808000',
                'name' => 'Currimao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '012809000',
                'name' => 'Dingras',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '012810000',
                'name' => 'Dumalneg',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => '012811000',
                'name' => 'Banna',
                'old_name' => 'Espiritu',
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => '012812000',
                'name' => 'City of Laoag',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '012800000',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => '012813000',
                'name' => 'Marcos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => '012814000',
                'name' => 'Nueva Era',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => '012815000',
                'name' => 'Pagudpud',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => '012816000',
                'name' => 'Paoay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => '012817000',
                'name' => 'Pasuquin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => '012818000',
                'name' => 'Piddig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => '012819000',
                'name' => 'Pinili',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => '012820000',
                'name' => 'San Nicolas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => '012821000',
                'name' => 'Sarrat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => '012822000',
                'name' => 'Solsona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => '012823000',
                'name' => 'Vintar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012800000',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => '012901000',
                'name' => 'Alilem',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => '012902000',
                'name' => 'Banayoyo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => '012903000',
                'name' => 'Bantay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => '012904000',
                'name' => 'Burgos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => '012905000',
                'name' => 'Cabugao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => '012906000',
                'name' => 'City of Candon',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '012900000',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => '012907000',
                'name' => 'Caoayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => '012908000',
                'name' => 'Cervantes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => '012909000',
                'name' => 'Galimuyod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => '012910000',
                'name' => 'Gregorio Del Pilar',
                'old_name' => 'Concepcion',
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => '012911000',
                'name' => 'Lidlidda',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            34 => 
            array (
                'id' => 35,
                'code' => '012912000',
                'name' => 'Magsingal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            35 => 
            array (
                'id' => 36,
                'code' => '012913000',
                'name' => 'Nagbukel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            36 => 
            array (
                'id' => 37,
                'code' => '012914000',
                'name' => 'Narvacan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            37 => 
            array (
                'id' => 38,
                'code' => '012915000',
                'name' => 'Quirino',
                'old_name' => 'Angkaki',
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            38 => 
            array (
                'id' => 39,
                'code' => '012916000',
                'name' => 'Salcedo',
                'old_name' => 'Baugen',
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            39 => 
            array (
                'id' => 40,
                'code' => '012917000',
                'name' => 'San Emilio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            40 => 
            array (
                'id' => 41,
                'code' => '012918000',
                'name' => 'San Esteban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            41 => 
            array (
                'id' => 42,
                'code' => '012919000',
                'name' => 'San Ildefonso',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            42 => 
            array (
                'id' => 43,
                'code' => '012920000',
                'name' => 'San Juan',
                'old_name' => 'Lapog',
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            43 => 
            array (
                'id' => 44,
                'code' => '012921000',
                'name' => 'San Vicente',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            44 => 
            array (
                'id' => 45,
                'code' => '012922000',
                'name' => 'Santa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            45 => 
            array (
                'id' => 46,
                'code' => '012923000',
                'name' => 'Santa Catalina',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            46 => 
            array (
                'id' => 47,
                'code' => '012924000',
                'name' => 'Santa Cruz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            47 => 
            array (
                'id' => 48,
                'code' => '012925000',
                'name' => 'Santa Lucia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            48 => 
            array (
                'id' => 49,
                'code' => '012926000',
                'name' => 'Santa Maria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            49 => 
            array (
                'id' => 50,
                'code' => '012927000',
                'name' => 'Santiago',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            50 => 
            array (
                'id' => 51,
                'code' => '012928000',
                'name' => 'Santo Domingo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            51 => 
            array (
                'id' => 52,
                'code' => '012929000',
                'name' => 'Sigay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            52 => 
            array (
                'id' => 53,
                'code' => '012930000',
                'name' => 'Sinait',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            53 => 
            array (
                'id' => 54,
                'code' => '012931000',
                'name' => 'Sugpon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            54 => 
            array (
                'id' => 55,
                'code' => '012932000',
                'name' => 'Suyo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            55 => 
            array (
                'id' => 56,
                'code' => '012933000',
                'name' => 'Tagudin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '012900000',
            ),
            56 => 
            array (
                'id' => 57,
                'code' => '012934000',
                'name' => 'City of Vigan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '012900000',
            ),
            57 => 
            array (
                'id' => 58,
                'code' => '013301000',
                'name' => 'Agoo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            58 => 
            array (
                'id' => 59,
                'code' => '013302000',
                'name' => 'Aringay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            59 => 
            array (
                'id' => 60,
                'code' => '013303000',
                'name' => 'Bacnotan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            60 => 
            array (
                'id' => 61,
                'code' => '013304000',
                'name' => 'Bagulin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            61 => 
            array (
                'id' => 62,
                'code' => '013305000',
                'name' => 'Balaoan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            62 => 
            array (
                'id' => 63,
                'code' => '013306000',
                'name' => 'Bangar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            63 => 
            array (
                'id' => 64,
                'code' => '013307000',
                'name' => 'Bauang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            64 => 
            array (
                'id' => 65,
                'code' => '013308000',
                'name' => 'Burgos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            65 => 
            array (
                'id' => 66,
                'code' => '013309000',
                'name' => 'Caba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            66 => 
            array (
                'id' => 67,
                'code' => '013310000',
                'name' => 'Luna',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            67 => 
            array (
                'id' => 68,
                'code' => '013311000',
                'name' => 'Naguilian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            68 => 
            array (
                'id' => 69,
                'code' => '013312000',
                'name' => 'Pugo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            69 => 
            array (
                'id' => 70,
                'code' => '013313000',
                'name' => 'Rosario',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            70 => 
            array (
                'id' => 71,
                'code' => '013314000',
                'name' => 'City of San Fernando',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '013300000',
            ),
            71 => 
            array (
                'id' => 72,
                'code' => '013315000',
                'name' => 'San Gabriel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            72 => 
            array (
                'id' => 73,
                'code' => '013316000',
                'name' => 'San Juan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            73 => 
            array (
                'id' => 74,
                'code' => '013317000',
                'name' => 'Santo Tomas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            74 => 
            array (
                'id' => 75,
                'code' => '013318000',
                'name' => 'Santol',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            75 => 
            array (
                'id' => 76,
                'code' => '013319000',
                'name' => 'Sudipen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            76 => 
            array (
                'id' => 77,
                'code' => '013320000',
                'name' => 'Tubao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '013300000',
            ),
            77 => 
            array (
                'id' => 78,
                'code' => '015501000',
                'name' => 'Agno',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            78 => 
            array (
                'id' => 79,
                'code' => '015502000',
                'name' => 'Aguilar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            79 => 
            array (
                'id' => 80,
                'code' => '015503000',
                'name' => 'City of Alaminos',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '015500000',
            ),
            80 => 
            array (
                'id' => 81,
                'code' => '015504000',
                'name' => 'Alcala',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            81 => 
            array (
                'id' => 82,
                'code' => '015505000',
                'name' => 'Anda',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            82 => 
            array (
                'id' => 83,
                'code' => '015506000',
                'name' => 'Asingan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            83 => 
            array (
                'id' => 84,
                'code' => '015507000',
                'name' => 'Balungao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            84 => 
            array (
                'id' => 85,
                'code' => '015508000',
                'name' => 'Bani',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            85 => 
            array (
                'id' => 86,
                'code' => '015509000',
                'name' => 'Basista',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            86 => 
            array (
                'id' => 87,
                'code' => '015510000',
                'name' => 'Bautista',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            87 => 
            array (
                'id' => 88,
                'code' => '015511000',
                'name' => 'Bayambang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            88 => 
            array (
                'id' => 89,
                'code' => '015512000',
                'name' => 'Binalonan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            89 => 
            array (
                'id' => 90,
                'code' => '015513000',
                'name' => 'Binmaley',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            90 => 
            array (
                'id' => 91,
                'code' => '015514000',
                'name' => 'Bolinao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            91 => 
            array (
                'id' => 92,
                'code' => '015515000',
                'name' => 'Bugallon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            92 => 
            array (
                'id' => 93,
                'code' => '015516000',
                'name' => 'Burgos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            93 => 
            array (
                'id' => 94,
                'code' => '015517000',
                'name' => 'Calasiao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            94 => 
            array (
                'id' => 95,
                'code' => '015518000',
                'name' => 'City of Dagupan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '015500000',
            ),
            95 => 
            array (
                'id' => 96,
                'code' => '015519000',
                'name' => 'Dasol',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            96 => 
            array (
                'id' => 97,
                'code' => '015520000',
                'name' => 'Infanta',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            97 => 
            array (
                'id' => 98,
                'code' => '015521000',
                'name' => 'Labrador',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            98 => 
            array (
                'id' => 99,
                'code' => '015522000',
                'name' => 'Lingayen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            99 => 
            array (
                'id' => 100,
                'code' => '015523000',
                'name' => 'Mabini',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            100 => 
            array (
                'id' => 101,
                'code' => '015524000',
                'name' => 'Malasiqui',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            101 => 
            array (
                'id' => 102,
                'code' => '015525000',
                'name' => 'Manaoag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            102 => 
            array (
                'id' => 103,
                'code' => '015526000',
                'name' => 'Mangaldan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            103 => 
            array (
                'id' => 104,
                'code' => '015527000',
                'name' => 'Mangatarem',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            104 => 
            array (
                'id' => 105,
                'code' => '015528000',
                'name' => 'Mapandan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            105 => 
            array (
                'id' => 106,
                'code' => '015529000',
                'name' => 'Natividad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            106 => 
            array (
                'id' => 107,
                'code' => '015530000',
                'name' => 'Pozorrubio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            107 => 
            array (
                'id' => 108,
                'code' => '015531000',
                'name' => 'Rosales',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            108 => 
            array (
                'id' => 109,
                'code' => '015532000',
                'name' => 'City of San Carlos',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '015500000',
            ),
            109 => 
            array (
                'id' => 110,
                'code' => '015533000',
                'name' => 'San Fabian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            110 => 
            array (
                'id' => 111,
                'code' => '015534000',
                'name' => 'San Jacinto',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            111 => 
            array (
                'id' => 112,
                'code' => '015535000',
                'name' => 'San Manuel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            112 => 
            array (
                'id' => 113,
                'code' => '015536000',
                'name' => 'San Nicolas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            113 => 
            array (
                'id' => 114,
                'code' => '015537000',
                'name' => 'San Quintin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            114 => 
            array (
                'id' => 115,
                'code' => '015538000',
                'name' => 'Santa Barbara',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            115 => 
            array (
                'id' => 116,
                'code' => '015539000',
                'name' => 'Santa Maria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            116 => 
            array (
                'id' => 117,
                'code' => '015540000',
                'name' => 'Santo Tomas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            117 => 
            array (
                'id' => 118,
                'code' => '015541000',
                'name' => 'Sison',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            118 => 
            array (
                'id' => 119,
                'code' => '015542000',
                'name' => 'Sual',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            119 => 
            array (
                'id' => 120,
                'code' => '015543000',
                'name' => 'Tayug',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            120 => 
            array (
                'id' => 121,
                'code' => '015544000',
                'name' => 'Umingan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            121 => 
            array (
                'id' => 122,
                'code' => '015545000',
                'name' => 'Urbiztondo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            122 => 
            array (
                'id' => 123,
                'code' => '015546000',
                'name' => 'City of Urdaneta',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '015500000',
            ),
            123 => 
            array (
                'id' => 124,
                'code' => '015547000',
                'name' => 'Villasis',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            124 => 
            array (
                'id' => 125,
                'code' => '015548000',
                'name' => 'Laoac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '015500000',
            ),
            125 => 
            array (
                'id' => 126,
                'code' => '020901000',
                'name' => 'Basco',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '020900000',
            ),
            126 => 
            array (
                'id' => 127,
                'code' => '020902000',
                'name' => 'Itbayat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '020900000',
            ),
            127 => 
            array (
                'id' => 128,
                'code' => '020903000',
                'name' => 'Ivana',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '020900000',
            ),
            128 => 
            array (
                'id' => 129,
                'code' => '020904000',
                'name' => 'Mahatao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '020900000',
            ),
            129 => 
            array (
                'id' => 130,
                'code' => '020905000',
                'name' => 'Sabtang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '020900000',
            ),
            130 => 
            array (
                'id' => 131,
                'code' => '020906000',
                'name' => 'Uyugan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '020900000',
            ),
            131 => 
            array (
                'id' => 132,
                'code' => '021501000',
                'name' => 'Abulug',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            132 => 
            array (
                'id' => 133,
                'code' => '021502000',
                'name' => 'Alcala',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            133 => 
            array (
                'id' => 134,
                'code' => '021503000',
                'name' => 'Allacapan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            134 => 
            array (
                'id' => 135,
                'code' => '021504000',
                'name' => 'Amulung',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            135 => 
            array (
                'id' => 136,
                'code' => '021505000',
                'name' => 'Aparri',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            136 => 
            array (
                'id' => 137,
                'code' => '021506000',
                'name' => 'Baggao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            137 => 
            array (
                'id' => 138,
                'code' => '021507000',
                'name' => 'Ballesteros',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            138 => 
            array (
                'id' => 139,
                'code' => '021508000',
                'name' => 'Buguey',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            139 => 
            array (
                'id' => 140,
                'code' => '021509000',
                'name' => 'Calayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            140 => 
            array (
                'id' => 141,
                'code' => '021510000',
                'name' => 'Camalaniugan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            141 => 
            array (
                'id' => 142,
                'code' => '021511000',
                'name' => 'Claveria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            142 => 
            array (
                'id' => 143,
                'code' => '021512000',
                'name' => 'Enrile',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            143 => 
            array (
                'id' => 144,
                'code' => '021513000',
                'name' => 'Gattaran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            144 => 
            array (
                'id' => 145,
                'code' => '021514000',
                'name' => 'Gonzaga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            145 => 
            array (
                'id' => 146,
                'code' => '021515000',
                'name' => 'Iguig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            146 => 
            array (
                'id' => 147,
                'code' => '021516000',
                'name' => 'Lal-Lo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            147 => 
            array (
                'id' => 148,
                'code' => '021517000',
                'name' => 'Lasam',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            148 => 
            array (
                'id' => 149,
                'code' => '021518000',
                'name' => 'Pamplona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            149 => 
            array (
                'id' => 150,
                'code' => '021519000',
                'name' => 'Peñablanca',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            150 => 
            array (
                'id' => 151,
                'code' => '021520000',
                'name' => 'Piat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            151 => 
            array (
                'id' => 152,
                'code' => '021521000',
                'name' => 'Rizal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            152 => 
            array (
                'id' => 153,
                'code' => '021522000',
                'name' => 'Sanchez-Mira',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            153 => 
            array (
                'id' => 154,
                'code' => '021523000',
                'name' => 'Santa Ana',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            154 => 
            array (
                'id' => 155,
                'code' => '021524000',
                'name' => 'Santa Praxedes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            155 => 
            array (
                'id' => 156,
                'code' => '021525000',
                'name' => 'Santa Teresita',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            156 => 
            array (
                'id' => 157,
                'code' => '021526000',
                'name' => 'Santo Niño',
                'old_name' => 'Faire',
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            157 => 
            array (
                'id' => 158,
                'code' => '021527000',
                'name' => 'Solana',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            158 => 
            array (
                'id' => 159,
                'code' => '021528000',
                'name' => 'Tuao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '021500000',
            ),
            159 => 
            array (
                'id' => 160,
                'code' => '021529000',
                'name' => 'Tuguegarao City',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '021500000',
            ),
            160 => 
            array (
                'id' => 161,
                'code' => '023101000',
                'name' => 'Alicia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            161 => 
            array (
                'id' => 162,
                'code' => '023102000',
                'name' => 'Angadanan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            162 => 
            array (
                'id' => 163,
                'code' => '023103000',
                'name' => 'Aurora',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            163 => 
            array (
                'id' => 164,
                'code' => '023104000',
                'name' => 'Benito Soliven',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            164 => 
            array (
                'id' => 165,
                'code' => '023105000',
                'name' => 'Burgos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            165 => 
            array (
                'id' => 166,
                'code' => '023106000',
                'name' => 'Cabagan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            166 => 
            array (
                'id' => 167,
                'code' => '023107000',
                'name' => 'Cabatuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            167 => 
            array (
                'id' => 168,
                'code' => '023108000',
                'name' => 'City of Cauayan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '023100000',
            ),
            168 => 
            array (
                'id' => 169,
                'code' => '023109000',
                'name' => 'Cordon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            169 => 
            array (
                'id' => 170,
                'code' => '023110000',
                'name' => 'Dinapigue',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            170 => 
            array (
                'id' => 171,
                'code' => '023111000',
                'name' => 'Divilacan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            171 => 
            array (
                'id' => 172,
                'code' => '023112000',
                'name' => 'Echague',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            172 => 
            array (
                'id' => 173,
                'code' => '023113000',
                'name' => 'Gamu',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            173 => 
            array (
                'id' => 174,
                'code' => '023114000',
                'name' => 'City of Ilagan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '023100000',
            ),
            174 => 
            array (
                'id' => 175,
                'code' => '023115000',
                'name' => 'Jones',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            175 => 
            array (
                'id' => 176,
                'code' => '023116000',
                'name' => 'Luna',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            176 => 
            array (
                'id' => 177,
                'code' => '023117000',
                'name' => 'Maconacon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            177 => 
            array (
                'id' => 178,
                'code' => '023118000',
                'name' => 'Delfin Albano',
                'old_name' => 'Magsaysay',
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            178 => 
            array (
                'id' => 179,
                'code' => '023119000',
                'name' => 'Mallig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            179 => 
            array (
                'id' => 180,
                'code' => '023120000',
                'name' => 'Naguilian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            180 => 
            array (
                'id' => 181,
                'code' => '023121000',
                'name' => 'Palanan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            181 => 
            array (
                'id' => 182,
                'code' => '023122000',
                'name' => 'Quezon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            182 => 
            array (
                'id' => 183,
                'code' => '023123000',
                'name' => 'Quirino',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            183 => 
            array (
                'id' => 184,
                'code' => '023124000',
                'name' => 'Ramon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            184 => 
            array (
                'id' => 185,
                'code' => '023125000',
                'name' => 'Reina Mercedes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            185 => 
            array (
                'id' => 186,
                'code' => '023126000',
                'name' => 'Roxas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            186 => 
            array (
                'id' => 187,
                'code' => '023127000',
                'name' => 'San Agustin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            187 => 
            array (
                'id' => 188,
                'code' => '023128000',
                'name' => 'San Guillermo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            188 => 
            array (
                'id' => 189,
                'code' => '023129000',
                'name' => 'San Isidro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            189 => 
            array (
                'id' => 190,
                'code' => '023130000',
                'name' => 'San Manuel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            190 => 
            array (
                'id' => 191,
                'code' => '023131000',
                'name' => 'San Mariano',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            191 => 
            array (
                'id' => 192,
                'code' => '023132000',
                'name' => 'San Mateo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            192 => 
            array (
                'id' => 193,
                'code' => '023133000',
                'name' => 'San Pablo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            193 => 
            array (
                'id' => 194,
                'code' => '023134000',
                'name' => 'Santa Maria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            194 => 
            array (
                'id' => 195,
                'code' => '023135000',
                'name' => 'City of Santiago',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '023100000',
            ),
            195 => 
            array (
                'id' => 196,
                'code' => '023136000',
                'name' => 'Santo Tomas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            196 => 
            array (
                'id' => 197,
                'code' => '023137000',
                'name' => 'Tumauini',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '023100000',
            ),
            197 => 
            array (
                'id' => 198,
                'code' => '025001000',
                'name' => 'Ambaguio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            198 => 
            array (
                'id' => 199,
                'code' => '025002000',
                'name' => 'Aritao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            199 => 
            array (
                'id' => 200,
                'code' => '025003000',
                'name' => 'Bagabag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            200 => 
            array (
                'id' => 201,
                'code' => '025004000',
                'name' => 'Bambang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            201 => 
            array (
                'id' => 202,
                'code' => '025005000',
                'name' => 'Bayombong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            202 => 
            array (
                'id' => 203,
                'code' => '025006000',
                'name' => 'Diadi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            203 => 
            array (
                'id' => 204,
                'code' => '025007000',
                'name' => 'Dupax Del Norte',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            204 => 
            array (
                'id' => 205,
                'code' => '025008000',
                'name' => 'Dupax Del Sur',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            205 => 
            array (
                'id' => 206,
                'code' => '025009000',
                'name' => 'Kasibu',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            206 => 
            array (
                'id' => 207,
                'code' => '025010000',
                'name' => 'Kayapa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            207 => 
            array (
                'id' => 208,
                'code' => '025011000',
                'name' => 'Quezon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            208 => 
            array (
                'id' => 209,
                'code' => '025012000',
                'name' => 'Santa Fe',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            209 => 
            array (
                'id' => 210,
                'code' => '025013000',
                'name' => 'Solano',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            210 => 
            array (
                'id' => 211,
                'code' => '025014000',
                'name' => 'Villaverde',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            211 => 
            array (
                'id' => 212,
                'code' => '025015000',
                'name' => 'Alfonso Castaneda',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025000000',
            ),
            212 => 
            array (
                'id' => 213,
                'code' => '025701000',
                'name' => 'Aglipay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025700000',
            ),
            213 => 
            array (
                'id' => 214,
                'code' => '025702000',
                'name' => 'Cabarroguis',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025700000',
            ),
            214 => 
            array (
                'id' => 215,
                'code' => '025703000',
                'name' => 'Diffun',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025700000',
            ),
            215 => 
            array (
                'id' => 216,
                'code' => '025704000',
                'name' => 'Maddela',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025700000',
            ),
            216 => 
            array (
                'id' => 217,
                'code' => '025705000',
                'name' => 'Saguday',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025700000',
            ),
            217 => 
            array (
                'id' => 218,
                'code' => '025706000',
                'name' => 'Nagtipunan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '025700000',
            ),
            218 => 
            array (
                'id' => 219,
                'code' => '030801000',
                'name' => 'Abucay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            219 => 
            array (
                'id' => 220,
                'code' => '030802000',
                'name' => 'Bagac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            220 => 
            array (
                'id' => 221,
                'code' => '030803000',
                'name' => 'City of Balanga',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '030800000',
            ),
            221 => 
            array (
                'id' => 222,
                'code' => '030804000',
                'name' => 'Dinalupihan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            222 => 
            array (
                'id' => 223,
                'code' => '030805000',
                'name' => 'Hermosa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            223 => 
            array (
                'id' => 224,
                'code' => '030806000',
                'name' => 'Limay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            224 => 
            array (
                'id' => 225,
                'code' => '030807000',
                'name' => 'Mariveles',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            225 => 
            array (
                'id' => 226,
                'code' => '030808000',
                'name' => 'Morong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            226 => 
            array (
                'id' => 227,
                'code' => '030809000',
                'name' => 'Orani',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            227 => 
            array (
                'id' => 228,
                'code' => '030810000',
                'name' => 'Orion',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            228 => 
            array (
                'id' => 229,
                'code' => '030811000',
                'name' => 'Pilar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            229 => 
            array (
                'id' => 230,
                'code' => '030812000',
                'name' => 'Samal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '030800000',
            ),
            230 => 
            array (
                'id' => 231,
                'code' => '031401000',
                'name' => 'Angat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            231 => 
            array (
                'id' => 232,
                'code' => '031402000',
                'name' => 'Balagtas',
                'old_name' => 'Bigaa',
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            232 => 
            array (
                'id' => 233,
                'code' => '031403000',
                'name' => 'Baliuag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            233 => 
            array (
                'id' => 234,
                'code' => '031404000',
                'name' => 'Bocaue',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            234 => 
            array (
                'id' => 235,
                'code' => '031405000',
                'name' => 'Bulacan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            235 => 
            array (
                'id' => 236,
                'code' => '031406000',
                'name' => 'Bustos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            236 => 
            array (
                'id' => 237,
                'code' => '031407000',
                'name' => 'Calumpit',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            237 => 
            array (
                'id' => 238,
                'code' => '031408000',
                'name' => 'Guiguinto',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            238 => 
            array (
                'id' => 239,
                'code' => '031409000',
                'name' => 'Hagonoy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            239 => 
            array (
                'id' => 240,
                'code' => '031410000',
                'name' => 'City of Malolos',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '031400000',
            ),
            240 => 
            array (
                'id' => 241,
                'code' => '031411000',
                'name' => 'Marilao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            241 => 
            array (
                'id' => 242,
                'code' => '031412000',
                'name' => 'City of Meycauayan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '031400000',
            ),
            242 => 
            array (
                'id' => 243,
                'code' => '031413000',
                'name' => 'Norzagaray',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            243 => 
            array (
                'id' => 244,
                'code' => '031414000',
                'name' => 'Obando',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            244 => 
            array (
                'id' => 245,
                'code' => '031415000',
                'name' => 'Pandi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            245 => 
            array (
                'id' => 246,
                'code' => '031416000',
                'name' => 'Paombong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            246 => 
            array (
                'id' => 247,
                'code' => '031417000',
                'name' => 'Plaridel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            247 => 
            array (
                'id' => 248,
                'code' => '031418000',
                'name' => 'Pulilan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            248 => 
            array (
                'id' => 249,
                'code' => '031419000',
                'name' => 'San Ildefonso',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            249 => 
            array (
                'id' => 250,
                'code' => '031420000',
                'name' => 'City of San Jose Del Monte',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '031400000',
            ),
            250 => 
            array (
                'id' => 251,
                'code' => '031421000',
                'name' => 'San Miguel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            251 => 
            array (
                'id' => 252,
                'code' => '031422000',
                'name' => 'San Rafael',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            252 => 
            array (
                'id' => 253,
                'code' => '031423000',
                'name' => 'Santa Maria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            253 => 
            array (
                'id' => 254,
                'code' => '031424000',
                'name' => 'Doña Remedios Trinidad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '031400000',
            ),
            254 => 
            array (
                'id' => 255,
                'code' => '034901000',
                'name' => 'Aliaga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            255 => 
            array (
                'id' => 256,
                'code' => '034902000',
                'name' => 'Bongabon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            256 => 
            array (
                'id' => 257,
                'code' => '034903000',
                'name' => 'City of Cabanatuan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '034900000',
            ),
            257 => 
            array (
                'id' => 258,
                'code' => '034904000',
                'name' => 'Cabiao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            258 => 
            array (
                'id' => 259,
                'code' => '034905000',
                'name' => 'Carranglan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            259 => 
            array (
                'id' => 260,
                'code' => '034906000',
                'name' => 'Cuyapo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            260 => 
            array (
                'id' => 261,
                'code' => '034907000',
                'name' => 'Gabaldon',
                'old_name' => 'Bitulok & Sabani',
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            261 => 
            array (
                'id' => 262,
                'code' => '034908000',
                'name' => 'City of Gapan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '034900000',
            ),
            262 => 
            array (
                'id' => 263,
                'code' => '034909000',
                'name' => 'General Mamerto Natividad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            263 => 
            array (
                'id' => 264,
                'code' => '034910000',
                'name' => 'General Tinio',
                'old_name' => 'Papaya',
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            264 => 
            array (
                'id' => 265,
                'code' => '034911000',
                'name' => 'Guimba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            265 => 
            array (
                'id' => 266,
                'code' => '034912000',
                'name' => 'Jaen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            266 => 
            array (
                'id' => 267,
                'code' => '034913000',
                'name' => 'Laur',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            267 => 
            array (
                'id' => 268,
                'code' => '034914000',
                'name' => 'Licab',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            268 => 
            array (
                'id' => 269,
                'code' => '034915000',
                'name' => 'Llanera',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            269 => 
            array (
                'id' => 270,
                'code' => '034916000',
                'name' => 'Lupao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            270 => 
            array (
                'id' => 271,
                'code' => '034917000',
                'name' => 'Science City of Muñoz',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '034900000',
            ),
            271 => 
            array (
                'id' => 272,
                'code' => '034918000',
                'name' => 'Nampicuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            272 => 
            array (
                'id' => 273,
                'code' => '034919000',
                'name' => 'City of Palayan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '034900000',
            ),
            273 => 
            array (
                'id' => 274,
                'code' => '034920000',
                'name' => 'Pantabangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            274 => 
            array (
                'id' => 275,
                'code' => '034921000',
                'name' => 'Peñaranda',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            275 => 
            array (
                'id' => 276,
                'code' => '034922000',
                'name' => 'Quezon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            276 => 
            array (
                'id' => 277,
                'code' => '034923000',
                'name' => 'Rizal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            277 => 
            array (
                'id' => 278,
                'code' => '034924000',
                'name' => 'San Antonio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            278 => 
            array (
                'id' => 279,
                'code' => '034925000',
                'name' => 'San Isidro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            279 => 
            array (
                'id' => 280,
                'code' => '034926000',
                'name' => 'San Jose City',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '034900000',
            ),
            280 => 
            array (
                'id' => 281,
                'code' => '034927000',
                'name' => 'San Leonardo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            281 => 
            array (
                'id' => 282,
                'code' => '034928000',
                'name' => 'Santa Rosa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            282 => 
            array (
                'id' => 283,
                'code' => '034929000',
                'name' => 'Santo Domingo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            283 => 
            array (
                'id' => 284,
                'code' => '034930000',
                'name' => 'Talavera',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            284 => 
            array (
                'id' => 285,
                'code' => '034931000',
                'name' => 'Talugtug',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            285 => 
            array (
                'id' => 286,
                'code' => '034932000',
                'name' => 'Zaragoza',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '034900000',
            ),
            286 => 
            array (
                'id' => 287,
                'code' => '035401000',
                'name' => 'City of Angeles',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '035400000',
            ),
            287 => 
            array (
                'id' => 288,
                'code' => '035402000',
                'name' => 'Apalit',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            288 => 
            array (
                'id' => 289,
                'code' => '035403000',
                'name' => 'Arayat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            289 => 
            array (
                'id' => 290,
                'code' => '035404000',
                'name' => 'Bacolor',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            290 => 
            array (
                'id' => 291,
                'code' => '035405000',
                'name' => 'Candaba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            291 => 
            array (
                'id' => 292,
                'code' => '035406000',
                'name' => 'Floridablanca',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            292 => 
            array (
                'id' => 293,
                'code' => '035407000',
                'name' => 'Guagua',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            293 => 
            array (
                'id' => 294,
                'code' => '035408000',
                'name' => 'Lubao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            294 => 
            array (
                'id' => 295,
                'code' => '035409000',
                'name' => 'Mabalacat City',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '035400000',
            ),
            295 => 
            array (
                'id' => 296,
                'code' => '035410000',
                'name' => 'Macabebe',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            296 => 
            array (
                'id' => 297,
                'code' => '035411000',
                'name' => 'Magalang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            297 => 
            array (
                'id' => 298,
                'code' => '035412000',
                'name' => 'Masantol',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            298 => 
            array (
                'id' => 299,
                'code' => '035413000',
                'name' => 'Mexico',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            299 => 
            array (
                'id' => 300,
                'code' => '035414000',
                'name' => 'Minalin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            300 => 
            array (
                'id' => 301,
                'code' => '035415000',
                'name' => 'Porac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            301 => 
            array (
                'id' => 302,
                'code' => '035416000',
                'name' => 'City of San Fernando',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '035400000',
            ),
            302 => 
            array (
                'id' => 303,
                'code' => '035417000',
                'name' => 'San Luis',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            303 => 
            array (
                'id' => 304,
                'code' => '035418000',
                'name' => 'San Simon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            304 => 
            array (
                'id' => 305,
                'code' => '035419000',
                'name' => 'Santa Ana',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            305 => 
            array (
                'id' => 306,
                'code' => '035420000',
                'name' => 'Santa Rita',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            306 => 
            array (
                'id' => 307,
                'code' => '035421000',
                'name' => 'Santo Tomas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            307 => 
            array (
                'id' => 308,
                'code' => '035422000',
                'name' => 'Sasmuan',
                'old_name' => 'Sexmoan',
                'is_municipality' => 1,
                'province_code' => '035400000',
            ),
            308 => 
            array (
                'id' => 309,
                'code' => '036901000',
                'name' => 'Anao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            309 => 
            array (
                'id' => 310,
                'code' => '036902000',
                'name' => 'Bamban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            310 => 
            array (
                'id' => 311,
                'code' => '036903000',
                'name' => 'Camiling',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            311 => 
            array (
                'id' => 312,
                'code' => '036904000',
                'name' => 'Capas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            312 => 
            array (
                'id' => 313,
                'code' => '036905000',
                'name' => 'Concepcion',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            313 => 
            array (
                'id' => 314,
                'code' => '036906000',
                'name' => 'Gerona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            314 => 
            array (
                'id' => 315,
                'code' => '036907000',
                'name' => 'La Paz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            315 => 
            array (
                'id' => 316,
                'code' => '036908000',
                'name' => 'Mayantoc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            316 => 
            array (
                'id' => 317,
                'code' => '036909000',
                'name' => 'Moncada',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            317 => 
            array (
                'id' => 318,
                'code' => '036910000',
                'name' => 'Paniqui',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            318 => 
            array (
                'id' => 319,
                'code' => '036911000',
                'name' => 'Pura',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            319 => 
            array (
                'id' => 320,
                'code' => '036912000',
                'name' => 'Ramos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            320 => 
            array (
                'id' => 321,
                'code' => '036913000',
                'name' => 'San Clemente',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            321 => 
            array (
                'id' => 322,
                'code' => '036914000',
                'name' => 'San Manuel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            322 => 
            array (
                'id' => 323,
                'code' => '036915000',
                'name' => 'Santa Ignacia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            323 => 
            array (
                'id' => 324,
                'code' => '036916000',
                'name' => 'City of Tarlac',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '036900000',
            ),
            324 => 
            array (
                'id' => 325,
                'code' => '036917000',
                'name' => 'Victoria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            325 => 
            array (
                'id' => 326,
                'code' => '036918000',
                'name' => 'San Jose',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '036900000',
            ),
            326 => 
            array (
                'id' => 327,
                'code' => '037101000',
                'name' => 'Botolan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            327 => 
            array (
                'id' => 328,
                'code' => '037102000',
                'name' => 'Cabangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            328 => 
            array (
                'id' => 329,
                'code' => '037103000',
                'name' => 'Candelaria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            329 => 
            array (
                'id' => 330,
                'code' => '037104000',
                'name' => 'Castillejos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            330 => 
            array (
                'id' => 331,
                'code' => '037105000',
                'name' => 'Iba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            331 => 
            array (
                'id' => 332,
                'code' => '037106000',
                'name' => 'Masinloc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            332 => 
            array (
                'id' => 333,
                'code' => '037107000',
                'name' => 'City of Olongapo',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '037100000',
            ),
            333 => 
            array (
                'id' => 334,
                'code' => '037108000',
                'name' => 'Palauig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            334 => 
            array (
                'id' => 335,
                'code' => '037109000',
                'name' => 'San Antonio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            335 => 
            array (
                'id' => 336,
                'code' => '037110000',
                'name' => 'San Felipe',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            336 => 
            array (
                'id' => 337,
                'code' => '037111000',
                'name' => 'San Marcelino',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            337 => 
            array (
                'id' => 338,
                'code' => '037112000',
                'name' => 'San Narciso',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            338 => 
            array (
                'id' => 339,
                'code' => '037113000',
                'name' => 'Santa Cruz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            339 => 
            array (
                'id' => 340,
                'code' => '037114000',
                'name' => 'Subic',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037100000',
            ),
            340 => 
            array (
                'id' => 341,
                'code' => '037701000',
                'name' => 'Baler',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037700000',
            ),
            341 => 
            array (
                'id' => 342,
                'code' => '037702000',
                'name' => 'Casiguran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037700000',
            ),
            342 => 
            array (
                'id' => 343,
                'code' => '037703000',
                'name' => 'Dilasag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037700000',
            ),
            343 => 
            array (
                'id' => 344,
                'code' => '037704000',
                'name' => 'Dinalungan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037700000',
            ),
            344 => 
            array (
                'id' => 345,
                'code' => '037705000',
                'name' => 'Dingalan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037700000',
            ),
            345 => 
            array (
                'id' => 346,
                'code' => '037706000',
                'name' => 'Dipaculao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037700000',
            ),
            346 => 
            array (
                'id' => 347,
                'code' => '037707000',
                'name' => 'Maria Aurora',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037700000',
            ),
            347 => 
            array (
                'id' => 348,
                'code' => '037708000',
                'name' => 'San Luis',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '037700000',
            ),
            348 => 
            array (
                'id' => 349,
                'code' => '041001000',
                'name' => 'Agoncillo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            349 => 
            array (
                'id' => 350,
                'code' => '041002000',
                'name' => 'Alitagtag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            350 => 
            array (
                'id' => 351,
                'code' => '041003000',
                'name' => 'Balayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            351 => 
            array (
                'id' => 352,
                'code' => '041004000',
                'name' => 'Balete',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            352 => 
            array (
                'id' => 353,
                'code' => '041005000',
                'name' => 'Batangas City',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '041000000',
            ),
            353 => 
            array (
                'id' => 354,
                'code' => '041006000',
                'name' => 'Bauan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            354 => 
            array (
                'id' => 355,
                'code' => '041007000',
                'name' => 'Calaca',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            355 => 
            array (
                'id' => 356,
                'code' => '041008000',
                'name' => 'Calatagan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            356 => 
            array (
                'id' => 357,
                'code' => '041009000',
                'name' => 'Cuenca',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            357 => 
            array (
                'id' => 358,
                'code' => '041010000',
                'name' => 'Ibaan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            358 => 
            array (
                'id' => 359,
                'code' => '041011000',
                'name' => 'Laurel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            359 => 
            array (
                'id' => 360,
                'code' => '041012000',
                'name' => 'Lemery',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            360 => 
            array (
                'id' => 361,
                'code' => '041013000',
                'name' => 'Lian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            361 => 
            array (
                'id' => 362,
                'code' => '041014000',
                'name' => 'City of Lipa',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '041000000',
            ),
            362 => 
            array (
                'id' => 363,
                'code' => '041015000',
                'name' => 'Lobo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            363 => 
            array (
                'id' => 364,
                'code' => '041016000',
                'name' => 'Mabini',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            364 => 
            array (
                'id' => 365,
                'code' => '041017000',
                'name' => 'Malvar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            365 => 
            array (
                'id' => 366,
                'code' => '041018000',
                'name' => 'Mataasnakahoy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            366 => 
            array (
                'id' => 367,
                'code' => '041019000',
                'name' => 'Nasugbu',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            367 => 
            array (
                'id' => 368,
                'code' => '041020000',
                'name' => 'Padre Garcia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            368 => 
            array (
                'id' => 369,
                'code' => '041021000',
                'name' => 'Rosario',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            369 => 
            array (
                'id' => 370,
                'code' => '041022000',
                'name' => 'San Jose',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            370 => 
            array (
                'id' => 371,
                'code' => '041023000',
                'name' => 'San Juan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            371 => 
            array (
                'id' => 372,
                'code' => '041024000',
                'name' => 'San Luis',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            372 => 
            array (
                'id' => 373,
                'code' => '041025000',
                'name' => 'San Nicolas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            373 => 
            array (
                'id' => 374,
                'code' => '041026000',
                'name' => 'San Pascual',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            374 => 
            array (
                'id' => 375,
                'code' => '041027000',
                'name' => 'Santa Teresita',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            375 => 
            array (
                'id' => 376,
                'code' => '041028000',
                'name' => 'City of Sto. Tomas',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '041000000',
            ),
            376 => 
            array (
                'id' => 377,
                'code' => '041029000',
                'name' => 'Taal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            377 => 
            array (
                'id' => 378,
                'code' => '041030000',
                'name' => 'Talisay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            378 => 
            array (
                'id' => 379,
                'code' => '041031000',
                'name' => 'City of Tanauan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '041000000',
            ),
            379 => 
            array (
                'id' => 380,
                'code' => '041032000',
                'name' => 'Taysan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            380 => 
            array (
                'id' => 381,
                'code' => '041033000',
                'name' => 'Tingloy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            381 => 
            array (
                'id' => 382,
                'code' => '041034000',
                'name' => 'Tuy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '041000000',
            ),
            382 => 
            array (
                'id' => 383,
                'code' => '042101000',
                'name' => 'Alfonso',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            383 => 
            array (
                'id' => 384,
                'code' => '042102000',
                'name' => 'Amadeo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            384 => 
            array (
                'id' => 385,
                'code' => '042103000',
                'name' => 'City of Bacoor',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '042100000',
            ),
            385 => 
            array (
                'id' => 386,
                'code' => '042104000',
                'name' => 'Carmona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            386 => 
            array (
                'id' => 387,
                'code' => '042105000',
                'name' => 'City of Cavite',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '042100000',
            ),
            387 => 
            array (
                'id' => 388,
                'code' => '042106000',
                'name' => 'City of Dasmariñas',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '042100000',
            ),
            388 => 
            array (
                'id' => 389,
                'code' => '042107000',
                'name' => 'General Emilio Aguinaldo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            389 => 
            array (
                'id' => 390,
                'code' => '042108000',
                'name' => 'City of General Trias',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '042100000',
            ),
            390 => 
            array (
                'id' => 391,
                'code' => '042109000',
                'name' => 'City of Imus',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '042100000',
            ),
            391 => 
            array (
                'id' => 392,
                'code' => '042110000',
                'name' => 'Indang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            392 => 
            array (
                'id' => 393,
                'code' => '042111000',
                'name' => 'Kawit',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            393 => 
            array (
                'id' => 394,
                'code' => '042112000',
                'name' => 'Magallanes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            394 => 
            array (
                'id' => 395,
                'code' => '042113000',
                'name' => 'Maragondon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            395 => 
            array (
                'id' => 396,
                'code' => '042114000',
                'name' => 'Mendez',
                'old_name' => 'Mendez-Nuñez',
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            396 => 
            array (
                'id' => 397,
                'code' => '042115000',
                'name' => 'Naic',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            397 => 
            array (
                'id' => 398,
                'code' => '042116000',
                'name' => 'Noveleta',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            398 => 
            array (
                'id' => 399,
                'code' => '042117000',
                'name' => 'Rosario',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            399 => 
            array (
                'id' => 400,
                'code' => '042118000',
                'name' => 'Silang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            400 => 
            array (
                'id' => 401,
                'code' => '042119000',
                'name' => 'City of Tagaytay',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '042100000',
            ),
            401 => 
            array (
                'id' => 402,
                'code' => '042120000',
                'name' => 'Tanza',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            402 => 
            array (
                'id' => 403,
                'code' => '042121000',
                'name' => 'Ternate',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            403 => 
            array (
                'id' => 404,
                'code' => '042122000',
                'name' => 'City of Trece Martires',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '042100000',
            ),
            404 => 
            array (
                'id' => 405,
                'code' => '042123000',
                'name' => 'Gen. Mariano Alvarez',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '042100000',
            ),
            405 => 
            array (
                'id' => 406,
                'code' => '043401000',
                'name' => 'Alaminos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            406 => 
            array (
                'id' => 407,
                'code' => '043402000',
                'name' => 'Bay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            407 => 
            array (
                'id' => 408,
                'code' => '043403000',
                'name' => 'City of Biñan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '043400000',
            ),
            408 => 
            array (
                'id' => 409,
                'code' => '043404000',
                'name' => 'City of Cabuyao',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '043400000',
            ),
            409 => 
            array (
                'id' => 410,
                'code' => '043405000',
                'name' => 'City of Calamba',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '043400000',
            ),
            410 => 
            array (
                'id' => 411,
                'code' => '043406000',
                'name' => 'Calauan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            411 => 
            array (
                'id' => 412,
                'code' => '043407000',
                'name' => 'Cavinti',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            412 => 
            array (
                'id' => 413,
                'code' => '043408000',
                'name' => 'Famy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            413 => 
            array (
                'id' => 414,
                'code' => '043409000',
                'name' => 'Kalayaan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            414 => 
            array (
                'id' => 415,
                'code' => '043410000',
                'name' => 'Liliw',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            415 => 
            array (
                'id' => 416,
                'code' => '043411000',
                'name' => 'Los Baños',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            416 => 
            array (
                'id' => 417,
                'code' => '043412000',
                'name' => 'Luisiana',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            417 => 
            array (
                'id' => 418,
                'code' => '043413000',
                'name' => 'Lumban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            418 => 
            array (
                'id' => 419,
                'code' => '043414000',
                'name' => 'Mabitac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            419 => 
            array (
                'id' => 420,
                'code' => '043415000',
                'name' => 'Magdalena',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            420 => 
            array (
                'id' => 421,
                'code' => '043416000',
                'name' => 'Majayjay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            421 => 
            array (
                'id' => 422,
                'code' => '043417000',
                'name' => 'Nagcarlan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            422 => 
            array (
                'id' => 423,
                'code' => '043418000',
                'name' => 'Paete',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            423 => 
            array (
                'id' => 424,
                'code' => '043419000',
                'name' => 'Pagsanjan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            424 => 
            array (
                'id' => 425,
                'code' => '043420000',
                'name' => 'Pakil',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            425 => 
            array (
                'id' => 426,
                'code' => '043421000',
                'name' => 'Pangil',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            426 => 
            array (
                'id' => 427,
                'code' => '043422000',
                'name' => 'Pila',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            427 => 
            array (
                'id' => 428,
                'code' => '043423000',
                'name' => 'Rizal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            428 => 
            array (
                'id' => 429,
                'code' => '043424000',
                'name' => 'City of San Pablo',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '043400000',
            ),
            429 => 
            array (
                'id' => 430,
                'code' => '043425000',
                'name' => 'City of San Pedro',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '043400000',
            ),
            430 => 
            array (
                'id' => 431,
                'code' => '043426000',
                'name' => 'Santa Cruz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            431 => 
            array (
                'id' => 432,
                'code' => '043427000',
                'name' => 'Santa Maria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            432 => 
            array (
                'id' => 433,
                'code' => '043428000',
                'name' => 'City of Santa Rosa',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '043400000',
            ),
            433 => 
            array (
                'id' => 434,
                'code' => '043429000',
                'name' => 'Siniloan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            434 => 
            array (
                'id' => 435,
                'code' => '043430000',
                'name' => 'Victoria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '043400000',
            ),
            435 => 
            array (
                'id' => 436,
                'code' => '045601000',
                'name' => 'Agdangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            436 => 
            array (
                'id' => 437,
                'code' => '045602000',
                'name' => 'Alabat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            437 => 
            array (
                'id' => 438,
                'code' => '045603000',
                'name' => 'Atimonan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            438 => 
            array (
                'id' => 439,
                'code' => '045605000',
                'name' => 'Buenavista',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            439 => 
            array (
                'id' => 440,
                'code' => '045606000',
                'name' => 'Burdeos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            440 => 
            array (
                'id' => 441,
                'code' => '045607000',
                'name' => 'Calauag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            441 => 
            array (
                'id' => 442,
                'code' => '045608000',
                'name' => 'Candelaria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            442 => 
            array (
                'id' => 443,
                'code' => '045610000',
                'name' => 'Catanauan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            443 => 
            array (
                'id' => 444,
                'code' => '045615000',
                'name' => 'Dolores',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            444 => 
            array (
                'id' => 445,
                'code' => '045616000',
                'name' => 'General Luna',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            445 => 
            array (
                'id' => 446,
                'code' => '045617000',
                'name' => 'General Nakar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            446 => 
            array (
                'id' => 447,
                'code' => '045618000',
                'name' => 'Guinayangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            447 => 
            array (
                'id' => 448,
                'code' => '045619000',
                'name' => 'Gumaca',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            448 => 
            array (
                'id' => 449,
                'code' => '045620000',
                'name' => 'Infanta',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            449 => 
            array (
                'id' => 450,
                'code' => '045621000',
                'name' => 'Jomalig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            450 => 
            array (
                'id' => 451,
                'code' => '045622000',
                'name' => 'Lopez',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            451 => 
            array (
                'id' => 452,
                'code' => '045623000',
                'name' => 'Lucban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            452 => 
            array (
                'id' => 453,
                'code' => '045624000',
                'name' => 'City of Lucena',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '045600000',
            ),
            453 => 
            array (
                'id' => 454,
                'code' => '045625000',
                'name' => 'Macalelon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            454 => 
            array (
                'id' => 455,
                'code' => '045627000',
                'name' => 'Mauban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            455 => 
            array (
                'id' => 456,
                'code' => '045628000',
                'name' => 'Mulanay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            456 => 
            array (
                'id' => 457,
                'code' => '045629000',
                'name' => 'Padre Burgos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            457 => 
            array (
                'id' => 458,
                'code' => '045630000',
                'name' => 'Pagbilao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            458 => 
            array (
                'id' => 459,
                'code' => '045631000',
                'name' => 'Panukulan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            459 => 
            array (
                'id' => 460,
                'code' => '045632000',
                'name' => 'Patnanungan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            460 => 
            array (
                'id' => 461,
                'code' => '045633000',
                'name' => 'Perez',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            461 => 
            array (
                'id' => 462,
                'code' => '045634000',
                'name' => 'Pitogo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            462 => 
            array (
                'id' => 463,
                'code' => '045635000',
                'name' => 'Plaridel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            463 => 
            array (
                'id' => 464,
                'code' => '045636000',
                'name' => 'Polillo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            464 => 
            array (
                'id' => 465,
                'code' => '045637000',
                'name' => 'Quezon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            465 => 
            array (
                'id' => 466,
                'code' => '045638000',
                'name' => 'Real',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            466 => 
            array (
                'id' => 467,
                'code' => '045639000',
                'name' => 'Sampaloc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            467 => 
            array (
                'id' => 468,
                'code' => '045640000',
                'name' => 'San Andres',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            468 => 
            array (
                'id' => 469,
                'code' => '045641000',
                'name' => 'San Antonio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            469 => 
            array (
                'id' => 470,
                'code' => '045642000',
                'name' => 'San Francisco',
                'old_name' => 'Aurora',
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            470 => 
            array (
                'id' => 471,
                'code' => '045644000',
                'name' => 'San Narciso',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            471 => 
            array (
                'id' => 472,
                'code' => '045645000',
                'name' => 'Sariaya',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            472 => 
            array (
                'id' => 473,
                'code' => '045646000',
                'name' => 'Tagkawayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            473 => 
            array (
                'id' => 474,
                'code' => '045647000',
                'name' => 'City of Tayabas',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '045600000',
            ),
            474 => 
            array (
                'id' => 475,
                'code' => '045648000',
                'name' => 'Tiaong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            475 => 
            array (
                'id' => 476,
                'code' => '045649000',
                'name' => 'Unisan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045600000',
            ),
            476 => 
            array (
                'id' => 477,
                'code' => '045801000',
                'name' => 'Angono',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            477 => 
            array (
                'id' => 478,
                'code' => '045802000',
                'name' => 'City of Antipolo',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '045800000',
            ),
            478 => 
            array (
                'id' => 479,
                'code' => '045803000',
                'name' => 'Baras',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            479 => 
            array (
                'id' => 480,
                'code' => '045804000',
                'name' => 'Binangonan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            480 => 
            array (
                'id' => 481,
                'code' => '045805000',
                'name' => 'Cainta',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            481 => 
            array (
                'id' => 482,
                'code' => '045806000',
                'name' => 'Cardona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            482 => 
            array (
                'id' => 483,
                'code' => '045807000',
                'name' => 'Jala-Jala',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            483 => 
            array (
                'id' => 484,
                'code' => '045808000',
                'name' => 'Rodriguez',
                'old_name' => 'Montalban',
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            484 => 
            array (
                'id' => 485,
                'code' => '045809000',
                'name' => 'Morong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            485 => 
            array (
                'id' => 486,
                'code' => '045810000',
                'name' => 'Pililla',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            486 => 
            array (
                'id' => 487,
                'code' => '045811000',
                'name' => 'San Mateo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            487 => 
            array (
                'id' => 488,
                'code' => '045812000',
                'name' => 'Tanay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            488 => 
            array (
                'id' => 489,
                'code' => '045813000',
                'name' => 'Taytay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            489 => 
            array (
                'id' => 490,
                'code' => '045814000',
                'name' => 'Teresa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '045800000',
            ),
            490 => 
            array (
                'id' => 491,
                'code' => '174001000',
                'name' => 'Boac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '174000000',
            ),
            491 => 
            array (
                'id' => 492,
                'code' => '174002000',
                'name' => 'Buenavista',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '174000000',
            ),
            492 => 
            array (
                'id' => 493,
                'code' => '174003000',
                'name' => 'Gasan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '174000000',
            ),
            493 => 
            array (
                'id' => 494,
                'code' => '174004000',
                'name' => 'Mogpog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '174000000',
            ),
            494 => 
            array (
                'id' => 495,
                'code' => '174005000',
                'name' => 'Santa Cruz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '174000000',
            ),
            495 => 
            array (
                'id' => 496,
                'code' => '174006000',
                'name' => 'Torrijos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '174000000',
            ),
            496 => 
            array (
                'id' => 497,
                'code' => '175101000',
                'name' => 'Abra De Ilog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            497 => 
            array (
                'id' => 498,
                'code' => '175102000',
                'name' => 'Calintaan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            498 => 
            array (
                'id' => 499,
                'code' => '175103000',
                'name' => 'Looc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            499 => 
            array (
                'id' => 500,
                'code' => '175104000',
                'name' => 'Lubang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
        ));
        \DB::table('location_municipalities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'code' => '175105000',
                'name' => 'Magsaysay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            1 => 
            array (
                'id' => 502,
                'code' => '175106000',
                'name' => 'Mamburao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            2 => 
            array (
                'id' => 503,
                'code' => '175107000',
                'name' => 'Paluan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            3 => 
            array (
                'id' => 504,
                'code' => '175108000',
                'name' => 'Rizal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            4 => 
            array (
                'id' => 505,
                'code' => '175109000',
                'name' => 'Sablayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            5 => 
            array (
                'id' => 506,
                'code' => '175110000',
                'name' => 'San Jose',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            6 => 
            array (
                'id' => 507,
                'code' => '175111000',
                'name' => 'Santa Cruz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175100000',
            ),
            7 => 
            array (
                'id' => 508,
                'code' => '175201000',
                'name' => 'Baco',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            8 => 
            array (
                'id' => 509,
                'code' => '175202000',
                'name' => 'Bansud',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            9 => 
            array (
                'id' => 510,
                'code' => '175203000',
                'name' => 'Bongabong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            10 => 
            array (
                'id' => 511,
                'code' => '175204000',
                'name' => 'Bulalacao',
                'old_name' => 'San Pedro',
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            11 => 
            array (
                'id' => 512,
                'code' => '175205000',
                'name' => 'City of Calapan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '175200000',
            ),
            12 => 
            array (
                'id' => 513,
                'code' => '175206000',
                'name' => 'Gloria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            13 => 
            array (
                'id' => 514,
                'code' => '175207000',
                'name' => 'Mansalay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            14 => 
            array (
                'id' => 515,
                'code' => '175208000',
                'name' => 'Naujan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            15 => 
            array (
                'id' => 516,
                'code' => '175209000',
                'name' => 'Pinamalayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            16 => 
            array (
                'id' => 517,
                'code' => '175210000',
                'name' => 'Pola',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            17 => 
            array (
                'id' => 518,
                'code' => '175211000',
                'name' => 'Puerto Galera',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            18 => 
            array (
                'id' => 519,
                'code' => '175212000',
                'name' => 'Roxas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            19 => 
            array (
                'id' => 520,
                'code' => '175213000',
                'name' => 'San Teodoro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            20 => 
            array (
                'id' => 521,
                'code' => '175214000',
                'name' => 'Socorro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            21 => 
            array (
                'id' => 522,
                'code' => '175215000',
                'name' => 'Victoria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175200000',
            ),
            22 => 
            array (
                'id' => 523,
                'code' => '175301000',
                'name' => 'Aborlan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            23 => 
            array (
                'id' => 524,
                'code' => '175302000',
                'name' => 'Agutaya',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            24 => 
            array (
                'id' => 525,
                'code' => '175303000',
                'name' => 'Araceli',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            25 => 
            array (
                'id' => 526,
                'code' => '175304000',
                'name' => 'Balabac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            26 => 
            array (
                'id' => 527,
                'code' => '175305000',
                'name' => 'Bataraza',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            27 => 
            array (
                'id' => 528,
                'code' => '175306000',
                'name' => 'Brooke\'s Point',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            28 => 
            array (
                'id' => 529,
                'code' => '175307000',
                'name' => 'Busuanga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            29 => 
            array (
                'id' => 530,
                'code' => '175308000',
                'name' => 'Cagayancillo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            30 => 
            array (
                'id' => 531,
                'code' => '175309000',
                'name' => 'Coron',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            31 => 
            array (
                'id' => 532,
                'code' => '175310000',
                'name' => 'Cuyo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            32 => 
            array (
                'id' => 533,
                'code' => '175311000',
                'name' => 'Dumaran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            33 => 
            array (
                'id' => 534,
                'code' => '175312000',
                'name' => 'El Nido',
                'old_name' => 'Bacuit',
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            34 => 
            array (
                'id' => 535,
                'code' => '175313000',
                'name' => 'Linapacan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            35 => 
            array (
                'id' => 536,
                'code' => '175314000',
                'name' => 'Magsaysay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            36 => 
            array (
                'id' => 537,
                'code' => '175315000',
                'name' => 'Narra',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            37 => 
            array (
                'id' => 538,
                'code' => '175316000',
                'name' => 'City of Puerto Princesa',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '175300000',
            ),
            38 => 
            array (
                'id' => 539,
                'code' => '175317000',
                'name' => 'Quezon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            39 => 
            array (
                'id' => 540,
                'code' => '175318000',
                'name' => 'Roxas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            40 => 
            array (
                'id' => 541,
                'code' => '175319000',
                'name' => 'San Vicente',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            41 => 
            array (
                'id' => 542,
                'code' => '175320000',
                'name' => 'Taytay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            42 => 
            array (
                'id' => 543,
                'code' => '175321000',
                'name' => 'Kalayaan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            43 => 
            array (
                'id' => 544,
                'code' => '175322000',
                'name' => 'Culion',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            44 => 
            array (
                'id' => 545,
                'code' => '175323000',
                'name' => 'Rizal',
                'old_name' => 'Marcos',
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            45 => 
            array (
                'id' => 546,
                'code' => '175324000',
                'name' => 'Sofronio Española',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175300000',
            ),
            46 => 
            array (
                'id' => 547,
                'code' => '175901000',
                'name' => 'Alcantara',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            47 => 
            array (
                'id' => 548,
                'code' => '175902000',
                'name' => 'Banton',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            48 => 
            array (
                'id' => 549,
                'code' => '175903000',
                'name' => 'Cajidiocan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            49 => 
            array (
                'id' => 550,
                'code' => '175904000',
                'name' => 'Calatrava',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            50 => 
            array (
                'id' => 551,
                'code' => '175905000',
                'name' => 'Concepcion',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            51 => 
            array (
                'id' => 552,
                'code' => '175906000',
                'name' => 'Corcuera',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            52 => 
            array (
                'id' => 553,
                'code' => '175907000',
                'name' => 'Looc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            53 => 
            array (
                'id' => 554,
                'code' => '175908000',
                'name' => 'Magdiwang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            54 => 
            array (
                'id' => 555,
                'code' => '175909000',
                'name' => 'Odiongan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            55 => 
            array (
                'id' => 556,
                'code' => '175910000',
                'name' => 'Romblon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            56 => 
            array (
                'id' => 557,
                'code' => '175911000',
                'name' => 'San Agustin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            57 => 
            array (
                'id' => 558,
                'code' => '175912000',
                'name' => 'San Andres',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            58 => 
            array (
                'id' => 559,
                'code' => '175913000',
                'name' => 'San Fernando',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            59 => 
            array (
                'id' => 560,
                'code' => '175914000',
                'name' => 'San Jose',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            60 => 
            array (
                'id' => 561,
                'code' => '175915000',
                'name' => 'Santa Fe',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            61 => 
            array (
                'id' => 562,
                'code' => '175916000',
                'name' => 'Ferrol',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            62 => 
            array (
                'id' => 563,
                'code' => '175917000',
                'name' => 'Santa Maria',
                'old_name' => 'Imelda',
                'is_municipality' => 1,
                'province_code' => '175900000',
            ),
            63 => 
            array (
                'id' => 564,
                'code' => '050501000',
                'name' => 'Bacacay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            64 => 
            array (
                'id' => 565,
                'code' => '050502000',
                'name' => 'Camalig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            65 => 
            array (
                'id' => 566,
                'code' => '050503000',
                'name' => 'Daraga',
                'old_name' => 'Locsin',
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            66 => 
            array (
                'id' => 567,
                'code' => '050504000',
                'name' => 'Guinobatan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            67 => 
            array (
                'id' => 568,
                'code' => '050505000',
                'name' => 'Jovellar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            68 => 
            array (
                'id' => 569,
                'code' => '050506000',
                'name' => 'City of Legazpi',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '050500000',
            ),
            69 => 
            array (
                'id' => 570,
                'code' => '050507000',
                'name' => 'Libon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            70 => 
            array (
                'id' => 571,
                'code' => '050508000',
                'name' => 'City of Ligao',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '050500000',
            ),
            71 => 
            array (
                'id' => 572,
                'code' => '050509000',
                'name' => 'Malilipot',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            72 => 
            array (
                'id' => 573,
                'code' => '050510000',
                'name' => 'Malinao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            73 => 
            array (
                'id' => 574,
                'code' => '050511000',
                'name' => 'Manito',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            74 => 
            array (
                'id' => 575,
                'code' => '050512000',
                'name' => 'Oas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            75 => 
            array (
                'id' => 576,
                'code' => '050513000',
                'name' => 'Pio Duran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            76 => 
            array (
                'id' => 577,
                'code' => '050514000',
                'name' => 'Polangui',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            77 => 
            array (
                'id' => 578,
                'code' => '050515000',
                'name' => 'Rapu-Rapu',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            78 => 
            array (
                'id' => 579,
                'code' => '050516000',
                'name' => 'Santo Domingo',
                'old_name' => 'Libog',
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            79 => 
            array (
                'id' => 580,
                'code' => '050517000',
                'name' => 'City of Tabaco',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '050500000',
            ),
            80 => 
            array (
                'id' => 581,
                'code' => '050518000',
                'name' => 'Tiwi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '050500000',
            ),
            81 => 
            array (
                'id' => 582,
                'code' => '051601000',
                'name' => 'Basud',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            82 => 
            array (
                'id' => 583,
                'code' => '051602000',
                'name' => 'Capalonga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            83 => 
            array (
                'id' => 584,
                'code' => '051603000',
                'name' => 'Daet',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            84 => 
            array (
                'id' => 585,
                'code' => '051604000',
                'name' => 'San Lorenzo Ruiz',
                'old_name' => 'Imelda',
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            85 => 
            array (
                'id' => 586,
                'code' => '051605000',
                'name' => 'Jose Panganiban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            86 => 
            array (
                'id' => 587,
                'code' => '051606000',
                'name' => 'Labo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            87 => 
            array (
                'id' => 588,
                'code' => '051607000',
                'name' => 'Mercedes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            88 => 
            array (
                'id' => 589,
                'code' => '051608000',
                'name' => 'Paracale',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            89 => 
            array (
                'id' => 590,
                'code' => '051609000',
                'name' => 'San Vicente',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            90 => 
            array (
                'id' => 591,
                'code' => '051610000',
                'name' => 'Santa Elena',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            91 => 
            array (
                'id' => 592,
                'code' => '051611000',
                'name' => 'Talisay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            92 => 
            array (
                'id' => 593,
                'code' => '051612000',
                'name' => 'Vinzons',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051600000',
            ),
            93 => 
            array (
                'id' => 594,
                'code' => '051701000',
                'name' => 'Baao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            94 => 
            array (
                'id' => 595,
                'code' => '051702000',
                'name' => 'Balatan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            95 => 
            array (
                'id' => 596,
                'code' => '051703000',
                'name' => 'Bato',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            96 => 
            array (
                'id' => 597,
                'code' => '051704000',
                'name' => 'Bombon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            97 => 
            array (
                'id' => 598,
                'code' => '051705000',
                'name' => 'Buhi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            98 => 
            array (
                'id' => 599,
                'code' => '051706000',
                'name' => 'Bula',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            99 => 
            array (
                'id' => 600,
                'code' => '051707000',
                'name' => 'Cabusao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            100 => 
            array (
                'id' => 601,
                'code' => '051708000',
                'name' => 'Calabanga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            101 => 
            array (
                'id' => 602,
                'code' => '051709000',
                'name' => 'Camaligan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            102 => 
            array (
                'id' => 603,
                'code' => '051710000',
                'name' => 'Canaman',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            103 => 
            array (
                'id' => 604,
                'code' => '051711000',
                'name' => 'Caramoan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            104 => 
            array (
                'id' => 605,
                'code' => '051712000',
                'name' => 'Del Gallego',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            105 => 
            array (
                'id' => 606,
                'code' => '051713000',
                'name' => 'Gainza',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            106 => 
            array (
                'id' => 607,
                'code' => '051714000',
                'name' => 'Garchitorena',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            107 => 
            array (
                'id' => 608,
                'code' => '051715000',
                'name' => 'Goa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            108 => 
            array (
                'id' => 609,
                'code' => '051716000',
                'name' => 'City of Iriga',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '051700000',
            ),
            109 => 
            array (
                'id' => 610,
                'code' => '051717000',
                'name' => 'Lagonoy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            110 => 
            array (
                'id' => 611,
                'code' => '051718000',
                'name' => 'Libmanan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            111 => 
            array (
                'id' => 612,
                'code' => '051719000',
                'name' => 'Lupi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            112 => 
            array (
                'id' => 613,
                'code' => '051720000',
                'name' => 'Magarao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            113 => 
            array (
                'id' => 614,
                'code' => '051721000',
                'name' => 'Milaor',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            114 => 
            array (
                'id' => 615,
                'code' => '051722000',
                'name' => 'Minalabac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            115 => 
            array (
                'id' => 616,
                'code' => '051723000',
                'name' => 'Nabua',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            116 => 
            array (
                'id' => 617,
                'code' => '051724000',
                'name' => 'City of Naga',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '051700000',
            ),
            117 => 
            array (
                'id' => 618,
                'code' => '051725000',
                'name' => 'Ocampo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            118 => 
            array (
                'id' => 619,
                'code' => '051726000',
                'name' => 'Pamplona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            119 => 
            array (
                'id' => 620,
                'code' => '051727000',
                'name' => 'Pasacao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            120 => 
            array (
                'id' => 621,
                'code' => '051728000',
                'name' => 'Pili',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            121 => 
            array (
                'id' => 622,
                'code' => '051729000',
                'name' => 'Presentacion',
                'old_name' => 'Parubcan',
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            122 => 
            array (
                'id' => 623,
                'code' => '051730000',
                'name' => 'Ragay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            123 => 
            array (
                'id' => 624,
                'code' => '051731000',
                'name' => 'Sagñay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            124 => 
            array (
                'id' => 625,
                'code' => '051732000',
                'name' => 'San Fernando',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            125 => 
            array (
                'id' => 626,
                'code' => '051733000',
                'name' => 'San Jose',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            126 => 
            array (
                'id' => 627,
                'code' => '051734000',
                'name' => 'Sipocot',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            127 => 
            array (
                'id' => 628,
                'code' => '051735000',
                'name' => 'Siruma',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            128 => 
            array (
                'id' => 629,
                'code' => '051736000',
                'name' => 'Tigaon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            129 => 
            array (
                'id' => 630,
                'code' => '051737000',
                'name' => 'Tinambac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '051700000',
            ),
            130 => 
            array (
                'id' => 631,
                'code' => '052001000',
                'name' => 'Bagamanoc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            131 => 
            array (
                'id' => 632,
                'code' => '052002000',
                'name' => 'Baras',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            132 => 
            array (
                'id' => 633,
                'code' => '052003000',
                'name' => 'Bato',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            133 => 
            array (
                'id' => 634,
                'code' => '052004000',
                'name' => 'Caramoran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            134 => 
            array (
                'id' => 635,
                'code' => '052005000',
                'name' => 'Gigmoto',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            135 => 
            array (
                'id' => 636,
                'code' => '052006000',
                'name' => 'Pandan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            136 => 
            array (
                'id' => 637,
                'code' => '052007000',
                'name' => 'Panganiban',
                'old_name' => 'Payo',
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            137 => 
            array (
                'id' => 638,
                'code' => '052008000',
                'name' => 'San Andres',
                'old_name' => 'Calolbon',
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            138 => 
            array (
                'id' => 639,
                'code' => '052009000',
                'name' => 'San Miguel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            139 => 
            array (
                'id' => 640,
                'code' => '052010000',
                'name' => 'Viga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            140 => 
            array (
                'id' => 641,
                'code' => '052011000',
                'name' => 'Virac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '052000000',
            ),
            141 => 
            array (
                'id' => 642,
                'code' => '054101000',
                'name' => 'Aroroy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            142 => 
            array (
                'id' => 643,
                'code' => '054102000',
                'name' => 'Baleno',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            143 => 
            array (
                'id' => 644,
                'code' => '054103000',
                'name' => 'Balud',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            144 => 
            array (
                'id' => 645,
                'code' => '054104000',
                'name' => 'Batuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            145 => 
            array (
                'id' => 646,
                'code' => '054105000',
                'name' => 'Cataingan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            146 => 
            array (
                'id' => 647,
                'code' => '054106000',
                'name' => 'Cawayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            147 => 
            array (
                'id' => 648,
                'code' => '054107000',
                'name' => 'Claveria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            148 => 
            array (
                'id' => 649,
                'code' => '054108000',
                'name' => 'Dimasalang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            149 => 
            array (
                'id' => 650,
                'code' => '054109000',
                'name' => 'Esperanza',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            150 => 
            array (
                'id' => 651,
                'code' => '054110000',
                'name' => 'Mandaon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            151 => 
            array (
                'id' => 652,
                'code' => '054111000',
                'name' => 'City of Masbate',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '054100000',
            ),
            152 => 
            array (
                'id' => 653,
                'code' => '054112000',
                'name' => 'Milagros',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            153 => 
            array (
                'id' => 654,
                'code' => '054113000',
                'name' => 'Mobo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            154 => 
            array (
                'id' => 655,
                'code' => '054114000',
                'name' => 'Monreal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            155 => 
            array (
                'id' => 656,
                'code' => '054115000',
                'name' => 'Palanas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            156 => 
            array (
                'id' => 657,
                'code' => '054116000',
                'name' => 'Pio v. Corpuz',
                'old_name' => 'Limbuhan',
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            157 => 
            array (
                'id' => 658,
                'code' => '054117000',
                'name' => 'Placer',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            158 => 
            array (
                'id' => 659,
                'code' => '054118000',
                'name' => 'San Fernando',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            159 => 
            array (
                'id' => 660,
                'code' => '054119000',
                'name' => 'San Jacinto',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            160 => 
            array (
                'id' => 661,
                'code' => '054120000',
                'name' => 'San Pascual',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            161 => 
            array (
                'id' => 662,
                'code' => '054121000',
                'name' => 'Uson',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '054100000',
            ),
            162 => 
            array (
                'id' => 663,
                'code' => '056202000',
                'name' => 'Barcelona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            163 => 
            array (
                'id' => 664,
                'code' => '056203000',
                'name' => 'Bulan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            164 => 
            array (
                'id' => 665,
                'code' => '056204000',
                'name' => 'Bulusan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            165 => 
            array (
                'id' => 666,
                'code' => '056205000',
                'name' => 'Casiguran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            166 => 
            array (
                'id' => 667,
                'code' => '056206000',
                'name' => 'Castilla',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            167 => 
            array (
                'id' => 668,
                'code' => '056207000',
                'name' => 'Donsol',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            168 => 
            array (
                'id' => 669,
                'code' => '056208000',
                'name' => 'Gubat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            169 => 
            array (
                'id' => 670,
                'code' => '056209000',
                'name' => 'Irosin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            170 => 
            array (
                'id' => 671,
                'code' => '056210000',
                'name' => 'Juban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            171 => 
            array (
                'id' => 672,
                'code' => '056211000',
                'name' => 'Magallanes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            172 => 
            array (
                'id' => 673,
                'code' => '056212000',
                'name' => 'Matnog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            173 => 
            array (
                'id' => 674,
                'code' => '056213000',
                'name' => 'Pilar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            174 => 
            array (
                'id' => 675,
                'code' => '056214000',
                'name' => 'Prieto Diaz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            175 => 
            array (
                'id' => 676,
                'code' => '056215000',
                'name' => 'Santa Magdalena',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '056200000',
            ),
            176 => 
            array (
                'id' => 677,
                'code' => '056216000',
                'name' => 'City of Sorsogon',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '056200000',
            ),
            177 => 
            array (
                'id' => 678,
                'code' => '060401000',
                'name' => 'Altavas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            178 => 
            array (
                'id' => 679,
                'code' => '060402000',
                'name' => 'Balete',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            179 => 
            array (
                'id' => 680,
                'code' => '060403000',
                'name' => 'Banga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            180 => 
            array (
                'id' => 681,
                'code' => '060404000',
                'name' => 'Batan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            181 => 
            array (
                'id' => 682,
                'code' => '060405000',
                'name' => 'Buruanga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            182 => 
            array (
                'id' => 683,
                'code' => '060406000',
                'name' => 'Ibajay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            183 => 
            array (
                'id' => 684,
                'code' => '060407000',
                'name' => 'Kalibo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            184 => 
            array (
                'id' => 685,
                'code' => '060408000',
                'name' => 'Lezo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            185 => 
            array (
                'id' => 686,
                'code' => '060409000',
                'name' => 'Libacao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            186 => 
            array (
                'id' => 687,
                'code' => '060410000',
                'name' => 'Madalag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            187 => 
            array (
                'id' => 688,
                'code' => '060411000',
                'name' => 'Makato',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            188 => 
            array (
                'id' => 689,
                'code' => '060412000',
                'name' => 'Malay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            189 => 
            array (
                'id' => 690,
                'code' => '060413000',
                'name' => 'Malinao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            190 => 
            array (
                'id' => 691,
                'code' => '060414000',
                'name' => 'Nabas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            191 => 
            array (
                'id' => 692,
                'code' => '060415000',
                'name' => 'New Washington',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            192 => 
            array (
                'id' => 693,
                'code' => '060416000',
                'name' => 'Numancia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            193 => 
            array (
                'id' => 694,
                'code' => '060417000',
                'name' => 'Tangalan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060400000',
            ),
            194 => 
            array (
                'id' => 695,
                'code' => '060601000',
                'name' => 'Anini-Y',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            195 => 
            array (
                'id' => 696,
                'code' => '060602000',
                'name' => 'Barbaza',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            196 => 
            array (
                'id' => 697,
                'code' => '060603000',
                'name' => 'Belison',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            197 => 
            array (
                'id' => 698,
                'code' => '060604000',
                'name' => 'Bugasong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            198 => 
            array (
                'id' => 699,
                'code' => '060605000',
                'name' => 'Caluya',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            199 => 
            array (
                'id' => 700,
                'code' => '060606000',
                'name' => 'Culasi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            200 => 
            array (
                'id' => 701,
                'code' => '060607000',
                'name' => 'Tobias Fornier',
                'old_name' => 'Dao',
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            201 => 
            array (
                'id' => 702,
                'code' => '060608000',
                'name' => 'Hamtic',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            202 => 
            array (
                'id' => 703,
                'code' => '060609000',
                'name' => 'Laua-An',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            203 => 
            array (
                'id' => 704,
                'code' => '060610000',
                'name' => 'Libertad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            204 => 
            array (
                'id' => 705,
                'code' => '060611000',
                'name' => 'Pandan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            205 => 
            array (
                'id' => 706,
                'code' => '060612000',
                'name' => 'Patnongon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            206 => 
            array (
                'id' => 707,
                'code' => '060613000',
                'name' => 'San Jose',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            207 => 
            array (
                'id' => 708,
                'code' => '060614000',
                'name' => 'San Remigio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            208 => 
            array (
                'id' => 709,
                'code' => '060615000',
                'name' => 'Sebaste',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            209 => 
            array (
                'id' => 710,
                'code' => '060616000',
                'name' => 'Sibalom',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            210 => 
            array (
                'id' => 711,
                'code' => '060617000',
                'name' => 'Tibiao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            211 => 
            array (
                'id' => 712,
                'code' => '060618000',
                'name' => 'Valderrama',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '060600000',
            ),
            212 => 
            array (
                'id' => 713,
                'code' => '061901000',
                'name' => 'Cuartero',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            213 => 
            array (
                'id' => 714,
                'code' => '061902000',
                'name' => 'Dao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            214 => 
            array (
                'id' => 715,
                'code' => '061903000',
                'name' => 'Dumalag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            215 => 
            array (
                'id' => 716,
                'code' => '061904000',
                'name' => 'Dumarao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            216 => 
            array (
                'id' => 717,
                'code' => '061905000',
                'name' => 'Ivisan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            217 => 
            array (
                'id' => 718,
                'code' => '061906000',
                'name' => 'Jamindan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            218 => 
            array (
                'id' => 719,
                'code' => '061907000',
                'name' => 'Ma-Ayon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            219 => 
            array (
                'id' => 720,
                'code' => '061908000',
                'name' => 'Mambusao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            220 => 
            array (
                'id' => 721,
                'code' => '061909000',
                'name' => 'Panay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            221 => 
            array (
                'id' => 722,
                'code' => '061910000',
                'name' => 'Panitan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            222 => 
            array (
                'id' => 723,
                'code' => '061911000',
                'name' => 'Pilar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            223 => 
            array (
                'id' => 724,
                'code' => '061912000',
                'name' => 'Pontevedra',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            224 => 
            array (
                'id' => 725,
                'code' => '061913000',
                'name' => 'President Roxas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            225 => 
            array (
                'id' => 726,
                'code' => '061914000',
                'name' => 'City of Roxas',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '061900000',
            ),
            226 => 
            array (
                'id' => 727,
                'code' => '061915000',
                'name' => 'Sapi-An',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            227 => 
            array (
                'id' => 728,
                'code' => '061916000',
                'name' => 'Sigma',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            228 => 
            array (
                'id' => 729,
                'code' => '061917000',
                'name' => 'Tapaz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '061900000',
            ),
            229 => 
            array (
                'id' => 730,
                'code' => '063001000',
                'name' => 'Ajuy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            230 => 
            array (
                'id' => 731,
                'code' => '063002000',
                'name' => 'Alimodian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            231 => 
            array (
                'id' => 732,
                'code' => '063003000',
                'name' => 'Anilao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            232 => 
            array (
                'id' => 733,
                'code' => '063004000',
                'name' => 'Badiangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            233 => 
            array (
                'id' => 734,
                'code' => '063005000',
                'name' => 'Balasan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            234 => 
            array (
                'id' => 735,
                'code' => '063006000',
                'name' => 'Banate',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            235 => 
            array (
                'id' => 736,
                'code' => '063007000',
                'name' => 'Barotac Nuevo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            236 => 
            array (
                'id' => 737,
                'code' => '063008000',
                'name' => 'Barotac Viejo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            237 => 
            array (
                'id' => 738,
                'code' => '063009000',
                'name' => 'Batad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            238 => 
            array (
                'id' => 739,
                'code' => '063010000',
                'name' => 'Bingawan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            239 => 
            array (
                'id' => 740,
                'code' => '063012000',
                'name' => 'Cabatuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            240 => 
            array (
                'id' => 741,
                'code' => '063013000',
                'name' => 'Calinog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            241 => 
            array (
                'id' => 742,
                'code' => '063014000',
                'name' => 'Carles',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            242 => 
            array (
                'id' => 743,
                'code' => '063015000',
                'name' => 'Concepcion',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            243 => 
            array (
                'id' => 744,
                'code' => '063016000',
                'name' => 'Dingle',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            244 => 
            array (
                'id' => 745,
                'code' => '063017000',
                'name' => 'Dueñas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            245 => 
            array (
                'id' => 746,
                'code' => '063018000',
                'name' => 'Dumangas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            246 => 
            array (
                'id' => 747,
                'code' => '063019000',
                'name' => 'Estancia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            247 => 
            array (
                'id' => 748,
                'code' => '063020000',
                'name' => 'Guimbal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            248 => 
            array (
                'id' => 749,
                'code' => '063021000',
                'name' => 'Igbaras',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            249 => 
            array (
                'id' => 750,
                'code' => '063022000',
                'name' => 'City of Iloilo',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '063000000',
            ),
            250 => 
            array (
                'id' => 751,
                'code' => '063023000',
                'name' => 'Janiuay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            251 => 
            array (
                'id' => 752,
                'code' => '063025000',
                'name' => 'Lambunao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            252 => 
            array (
                'id' => 753,
                'code' => '063026000',
                'name' => 'Leganes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            253 => 
            array (
                'id' => 754,
                'code' => '063027000',
                'name' => 'Lemery',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            254 => 
            array (
                'id' => 755,
                'code' => '063028000',
                'name' => 'Leon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            255 => 
            array (
                'id' => 756,
                'code' => '063029000',
                'name' => 'Maasin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            256 => 
            array (
                'id' => 757,
                'code' => '063030000',
                'name' => 'Miagao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            257 => 
            array (
                'id' => 758,
                'code' => '063031000',
                'name' => 'Mina',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            258 => 
            array (
                'id' => 759,
                'code' => '063032000',
                'name' => 'New Lucena',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            259 => 
            array (
                'id' => 760,
                'code' => '063034000',
                'name' => 'Oton',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            260 => 
            array (
                'id' => 761,
                'code' => '063035000',
                'name' => 'City of Passi',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '063000000',
            ),
            261 => 
            array (
                'id' => 762,
                'code' => '063036000',
                'name' => 'Pavia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            262 => 
            array (
                'id' => 763,
                'code' => '063037000',
                'name' => 'Pototan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            263 => 
            array (
                'id' => 764,
                'code' => '063038000',
                'name' => 'San Dionisio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            264 => 
            array (
                'id' => 765,
                'code' => '063039000',
                'name' => 'San Enrique',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            265 => 
            array (
                'id' => 766,
                'code' => '063040000',
                'name' => 'San Joaquin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            266 => 
            array (
                'id' => 767,
                'code' => '063041000',
                'name' => 'San Miguel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            267 => 
            array (
                'id' => 768,
                'code' => '063042000',
                'name' => 'San Rafael',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            268 => 
            array (
                'id' => 769,
                'code' => '063043000',
                'name' => 'Santa Barbara',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            269 => 
            array (
                'id' => 770,
                'code' => '063044000',
                'name' => 'Sara',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            270 => 
            array (
                'id' => 771,
                'code' => '063045000',
                'name' => 'Tigbauan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            271 => 
            array (
                'id' => 772,
                'code' => '063046000',
                'name' => 'Tubungan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            272 => 
            array (
                'id' => 773,
                'code' => '063047000',
                'name' => 'Zarraga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '063000000',
            ),
            273 => 
            array (
                'id' => 774,
                'code' => '064501000',
                'name' => 'City of Bacolod',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            274 => 
            array (
                'id' => 775,
                'code' => '064502000',
                'name' => 'City of Bago',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            275 => 
            array (
                'id' => 776,
                'code' => '064503000',
                'name' => 'Binalbagan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            276 => 
            array (
                'id' => 777,
                'code' => '064504000',
                'name' => 'City of Cadiz',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            277 => 
            array (
                'id' => 778,
                'code' => '064505000',
                'name' => 'Calatrava',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            278 => 
            array (
                'id' => 779,
                'code' => '064506000',
                'name' => 'Candoni',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            279 => 
            array (
                'id' => 780,
                'code' => '064507000',
                'name' => 'Cauayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            280 => 
            array (
                'id' => 781,
                'code' => '064508000',
                'name' => 'Enrique B. Magalona',
                'old_name' => 'Saravia',
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            281 => 
            array (
                'id' => 782,
                'code' => '064509000',
                'name' => 'City of Escalante',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            282 => 
            array (
                'id' => 783,
                'code' => '064510000',
                'name' => 'City of Himamaylan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            283 => 
            array (
                'id' => 784,
                'code' => '064511000',
                'name' => 'Hinigaran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            284 => 
            array (
                'id' => 785,
                'code' => '064512000',
                'name' => 'Hinoba-An',
                'old_name' => 'Asia',
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            285 => 
            array (
                'id' => 786,
                'code' => '064513000',
                'name' => 'Ilog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            286 => 
            array (
                'id' => 787,
                'code' => '064514000',
                'name' => 'Isabela',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            287 => 
            array (
                'id' => 788,
                'code' => '064515000',
                'name' => 'City of Kabankalan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            288 => 
            array (
                'id' => 789,
                'code' => '064516000',
                'name' => 'City of La Carlota',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            289 => 
            array (
                'id' => 790,
                'code' => '064517000',
                'name' => 'La Castellana',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            290 => 
            array (
                'id' => 791,
                'code' => '064518000',
                'name' => 'Manapla',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            291 => 
            array (
                'id' => 792,
                'code' => '064519000',
                'name' => 'Moises Padilla',
                'old_name' => 'Magallon',
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            292 => 
            array (
                'id' => 793,
                'code' => '064520000',
                'name' => 'Murcia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            293 => 
            array (
                'id' => 794,
                'code' => '064521000',
                'name' => 'Pontevedra',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            294 => 
            array (
                'id' => 795,
                'code' => '064522000',
                'name' => 'Pulupandan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            295 => 
            array (
                'id' => 796,
                'code' => '064523000',
                'name' => 'City of Sagay',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            296 => 
            array (
                'id' => 797,
                'code' => '064524000',
                'name' => 'City of San Carlos',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            297 => 
            array (
                'id' => 798,
                'code' => '064525000',
                'name' => 'San Enrique',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            298 => 
            array (
                'id' => 799,
                'code' => '064526000',
                'name' => 'City of Silay',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            299 => 
            array (
                'id' => 800,
                'code' => '064527000',
                'name' => 'City of Sipalay',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            300 => 
            array (
                'id' => 801,
                'code' => '064528000',
                'name' => 'City of Talisay',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            301 => 
            array (
                'id' => 802,
                'code' => '064529000',
                'name' => 'Toboso',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            302 => 
            array (
                'id' => 803,
                'code' => '064530000',
                'name' => 'Valladolid',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            303 => 
            array (
                'id' => 804,
                'code' => '064531000',
                'name' => 'City of Victorias',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '064500000',
            ),
            304 => 
            array (
                'id' => 805,
                'code' => '064532000',
                'name' => 'Salvador Benedicto',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '064500000',
            ),
            305 => 
            array (
                'id' => 806,
                'code' => '067901000',
                'name' => 'Buenavista',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '067900000',
            ),
            306 => 
            array (
                'id' => 807,
                'code' => '067902000',
                'name' => 'Jordan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '067900000',
            ),
            307 => 
            array (
                'id' => 808,
                'code' => '067903000',
                'name' => 'Nueva Valencia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '067900000',
            ),
            308 => 
            array (
                'id' => 809,
                'code' => '067904000',
                'name' => 'San Lorenzo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '067900000',
            ),
            309 => 
            array (
                'id' => 810,
                'code' => '067905000',
                'name' => 'Sibunag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '067900000',
            ),
            310 => 
            array (
                'id' => 811,
                'code' => '071201000',
                'name' => 'Alburquerque',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            311 => 
            array (
                'id' => 812,
                'code' => '071202000',
                'name' => 'Alicia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            312 => 
            array (
                'id' => 813,
                'code' => '071203000',
                'name' => 'Anda',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            313 => 
            array (
                'id' => 814,
                'code' => '071204000',
                'name' => 'Antequera',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            314 => 
            array (
                'id' => 815,
                'code' => '071205000',
                'name' => 'Baclayon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            315 => 
            array (
                'id' => 816,
                'code' => '071206000',
                'name' => 'Balilihan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            316 => 
            array (
                'id' => 817,
                'code' => '071207000',
                'name' => 'Batuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            317 => 
            array (
                'id' => 818,
                'code' => '071208000',
                'name' => 'Bilar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            318 => 
            array (
                'id' => 819,
                'code' => '071209000',
                'name' => 'Buenavista',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            319 => 
            array (
                'id' => 820,
                'code' => '071210000',
                'name' => 'Calape',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            320 => 
            array (
                'id' => 821,
                'code' => '071211000',
                'name' => 'Candijay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            321 => 
            array (
                'id' => 822,
                'code' => '071212000',
                'name' => 'Carmen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            322 => 
            array (
                'id' => 823,
                'code' => '071213000',
                'name' => 'Catigbian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            323 => 
            array (
                'id' => 824,
                'code' => '071214000',
                'name' => 'Clarin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            324 => 
            array (
                'id' => 825,
                'code' => '071215000',
                'name' => 'Corella',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            325 => 
            array (
                'id' => 826,
                'code' => '071216000',
                'name' => 'Cortes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            326 => 
            array (
                'id' => 827,
                'code' => '071217000',
                'name' => 'Dagohoy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            327 => 
            array (
                'id' => 828,
                'code' => '071218000',
                'name' => 'Danao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            328 => 
            array (
                'id' => 829,
                'code' => '071219000',
                'name' => 'Dauis',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            329 => 
            array (
                'id' => 830,
                'code' => '071220000',
                'name' => 'Dimiao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            330 => 
            array (
                'id' => 831,
                'code' => '071221000',
                'name' => 'Duero',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            331 => 
            array (
                'id' => 832,
                'code' => '071222000',
                'name' => 'Garcia Hernandez',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            332 => 
            array (
                'id' => 833,
                'code' => '071223000',
                'name' => 'Guindulman',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            333 => 
            array (
                'id' => 834,
                'code' => '071224000',
                'name' => 'Inabanga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            334 => 
            array (
                'id' => 835,
                'code' => '071225000',
                'name' => 'Jagna',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            335 => 
            array (
                'id' => 836,
                'code' => '071226000',
                'name' => 'Getafe',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            336 => 
            array (
                'id' => 837,
                'code' => '071227000',
                'name' => 'Lila',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            337 => 
            array (
                'id' => 838,
                'code' => '071228000',
                'name' => 'Loay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            338 => 
            array (
                'id' => 839,
                'code' => '071229000',
                'name' => 'Loboc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            339 => 
            array (
                'id' => 840,
                'code' => '071230000',
                'name' => 'Loon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            340 => 
            array (
                'id' => 841,
                'code' => '071231000',
                'name' => 'Mabini',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            341 => 
            array (
                'id' => 842,
                'code' => '071232000',
                'name' => 'Maribojoc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            342 => 
            array (
                'id' => 843,
                'code' => '071233000',
                'name' => 'Panglao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            343 => 
            array (
                'id' => 844,
                'code' => '071234000',
                'name' => 'Pilar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            344 => 
            array (
                'id' => 845,
                'code' => '071235000',
                'name' => 'President Carlos P. Garcia',
                'old_name' => 'Pitogo',
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            345 => 
            array (
                'id' => 846,
                'code' => '071236000',
                'name' => 'Sagbayan',
                'old_name' => 'Borja',
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            346 => 
            array (
                'id' => 847,
                'code' => '071237000',
                'name' => 'San Isidro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            347 => 
            array (
                'id' => 848,
                'code' => '071238000',
                'name' => 'San Miguel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            348 => 
            array (
                'id' => 849,
                'code' => '071239000',
                'name' => 'Sevilla',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            349 => 
            array (
                'id' => 850,
                'code' => '071240000',
                'name' => 'Sierra Bullones',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            350 => 
            array (
                'id' => 851,
                'code' => '071241000',
                'name' => 'Sikatuna',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            351 => 
            array (
                'id' => 852,
                'code' => '071242000',
                'name' => 'City of Tagbilaran',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '071200000',
            ),
            352 => 
            array (
                'id' => 853,
                'code' => '071243000',
                'name' => 'Talibon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            353 => 
            array (
                'id' => 854,
                'code' => '071244000',
                'name' => 'Trinidad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            354 => 
            array (
                'id' => 855,
                'code' => '071245000',
                'name' => 'Tubigon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            355 => 
            array (
                'id' => 856,
                'code' => '071246000',
                'name' => 'Ubay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            356 => 
            array (
                'id' => 857,
                'code' => '071247000',
                'name' => 'Valencia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            357 => 
            array (
                'id' => 858,
                'code' => '071248000',
                'name' => 'Bien Unido',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '071200000',
            ),
            358 => 
            array (
                'id' => 859,
                'code' => '072201000',
                'name' => 'Alcantara',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            359 => 
            array (
                'id' => 860,
                'code' => '072202000',
                'name' => 'Alcoy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            360 => 
            array (
                'id' => 861,
                'code' => '072203000',
                'name' => 'Alegria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            361 => 
            array (
                'id' => 862,
                'code' => '072204000',
                'name' => 'Aloguinsan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            362 => 
            array (
                'id' => 863,
                'code' => '072205000',
                'name' => 'Argao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            363 => 
            array (
                'id' => 864,
                'code' => '072206000',
                'name' => 'Asturias',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            364 => 
            array (
                'id' => 865,
                'code' => '072207000',
                'name' => 'Badian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            365 => 
            array (
                'id' => 866,
                'code' => '072208000',
                'name' => 'Balamban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            366 => 
            array (
                'id' => 867,
                'code' => '072209000',
                'name' => 'Bantayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            367 => 
            array (
                'id' => 868,
                'code' => '072210000',
                'name' => 'Barili',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            368 => 
            array (
                'id' => 869,
                'code' => '072211000',
                'name' => 'City of Bogo',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '072200000',
            ),
            369 => 
            array (
                'id' => 870,
                'code' => '072212000',
                'name' => 'Boljoon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            370 => 
            array (
                'id' => 871,
                'code' => '072213000',
                'name' => 'Borbon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            371 => 
            array (
                'id' => 872,
                'code' => '072214000',
                'name' => 'City of Carcar',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '072200000',
            ),
            372 => 
            array (
                'id' => 873,
                'code' => '072215000',
                'name' => 'Carmen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            373 => 
            array (
                'id' => 874,
                'code' => '072216000',
                'name' => 'Catmon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            374 => 
            array (
                'id' => 875,
                'code' => '072217000',
                'name' => 'City of Cebu',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '072200000',
            ),
            375 => 
            array (
                'id' => 876,
                'code' => '072218000',
                'name' => 'Compostela',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            376 => 
            array (
                'id' => 877,
                'code' => '072219000',
                'name' => 'Consolacion',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            377 => 
            array (
                'id' => 878,
                'code' => '072220000',
                'name' => 'Cordova',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            378 => 
            array (
                'id' => 879,
                'code' => '072221000',
                'name' => 'Daanbantayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            379 => 
            array (
                'id' => 880,
                'code' => '072222000',
                'name' => 'Dalaguete',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            380 => 
            array (
                'id' => 881,
                'code' => '072223000',
                'name' => 'Danao City',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '072200000',
            ),
            381 => 
            array (
                'id' => 882,
                'code' => '072224000',
                'name' => 'Dumanjug',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            382 => 
            array (
                'id' => 883,
                'code' => '072225000',
                'name' => 'Ginatilan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            383 => 
            array (
                'id' => 884,
                'code' => '072226000',
                'name' => 'City of Lapu-Lapu',
                'old_name' => 'Opon',
                'is_municipality' => 0,
                'province_code' => '072200000',
            ),
            384 => 
            array (
                'id' => 885,
                'code' => '072227000',
                'name' => 'Liloan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            385 => 
            array (
                'id' => 886,
                'code' => '072228000',
                'name' => 'Madridejos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            386 => 
            array (
                'id' => 887,
                'code' => '072229000',
                'name' => 'Malabuyoc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            387 => 
            array (
                'id' => 888,
                'code' => '072230000',
                'name' => 'City of Mandaue',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '072200000',
            ),
            388 => 
            array (
                'id' => 889,
                'code' => '072231000',
                'name' => 'Medellin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            389 => 
            array (
                'id' => 890,
                'code' => '072232000',
                'name' => 'Minglanilla',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            390 => 
            array (
                'id' => 891,
                'code' => '072233000',
                'name' => 'Moalboal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            391 => 
            array (
                'id' => 892,
                'code' => '072234000',
                'name' => 'City of Naga',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '072200000',
            ),
            392 => 
            array (
                'id' => 893,
                'code' => '072235000',
                'name' => 'Oslob',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            393 => 
            array (
                'id' => 894,
                'code' => '072236000',
                'name' => 'Pilar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            394 => 
            array (
                'id' => 895,
                'code' => '072237000',
                'name' => 'Pinamungajan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            395 => 
            array (
                'id' => 896,
                'code' => '072238000',
                'name' => 'Poro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            396 => 
            array (
                'id' => 897,
                'code' => '072239000',
                'name' => 'Ronda',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            397 => 
            array (
                'id' => 898,
                'code' => '072240000',
                'name' => 'Samboan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            398 => 
            array (
                'id' => 899,
                'code' => '072241000',
                'name' => 'San Fernando',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            399 => 
            array (
                'id' => 900,
                'code' => '072242000',
                'name' => 'San Francisco',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            400 => 
            array (
                'id' => 901,
                'code' => '072243000',
                'name' => 'San Remigio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            401 => 
            array (
                'id' => 902,
                'code' => '072244000',
                'name' => 'Santa Fe',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            402 => 
            array (
                'id' => 903,
                'code' => '072245000',
                'name' => 'Santander',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            403 => 
            array (
                'id' => 904,
                'code' => '072246000',
                'name' => 'Sibonga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            404 => 
            array (
                'id' => 905,
                'code' => '072247000',
                'name' => 'Sogod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            405 => 
            array (
                'id' => 906,
                'code' => '072248000',
                'name' => 'Tabogon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            406 => 
            array (
                'id' => 907,
                'code' => '072249000',
                'name' => 'Tabuelan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            407 => 
            array (
                'id' => 908,
                'code' => '072250000',
                'name' => 'City of Talisay',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '072200000',
            ),
            408 => 
            array (
                'id' => 909,
                'code' => '072251000',
                'name' => 'City of Toledo',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '072200000',
            ),
            409 => 
            array (
                'id' => 910,
                'code' => '072252000',
                'name' => 'Tuburan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            410 => 
            array (
                'id' => 911,
                'code' => '072253000',
                'name' => 'Tudela',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '072200000',
            ),
            411 => 
            array (
                'id' => 912,
                'code' => '074601000',
                'name' => 'Amlan',
                'old_name' => 'Ayuquitan',
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            412 => 
            array (
                'id' => 913,
                'code' => '074602000',
                'name' => 'Ayungon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            413 => 
            array (
                'id' => 914,
                'code' => '074603000',
                'name' => 'Bacong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            414 => 
            array (
                'id' => 915,
                'code' => '074604000',
                'name' => 'City of Bais',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '074600000',
            ),
            415 => 
            array (
                'id' => 916,
                'code' => '074605000',
                'name' => 'Basay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            416 => 
            array (
                'id' => 917,
                'code' => '074606000',
                'name' => 'City of Bayawan',
                'old_name' => 'Tulong',
                'is_municipality' => 0,
                'province_code' => '074600000',
            ),
            417 => 
            array (
                'id' => 918,
                'code' => '074607000',
                'name' => 'Bindoy',
                'old_name' => 'Payabon',
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            418 => 
            array (
                'id' => 919,
                'code' => '074608000',
                'name' => 'City of Canlaon',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '074600000',
            ),
            419 => 
            array (
                'id' => 920,
                'code' => '074609000',
                'name' => 'Dauin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            420 => 
            array (
                'id' => 921,
                'code' => '074610000',
                'name' => 'City of Dumaguete',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '074600000',
            ),
            421 => 
            array (
                'id' => 922,
                'code' => '074611000',
                'name' => 'City of Guihulngan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '074600000',
            ),
            422 => 
            array (
                'id' => 923,
                'code' => '074612000',
                'name' => 'Jimalalud',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            423 => 
            array (
                'id' => 924,
                'code' => '074613000',
                'name' => 'La Libertad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            424 => 
            array (
                'id' => 925,
                'code' => '074614000',
                'name' => 'Mabinay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            425 => 
            array (
                'id' => 926,
                'code' => '074615000',
                'name' => 'Manjuyod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            426 => 
            array (
                'id' => 927,
                'code' => '074616000',
                'name' => 'Pamplona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            427 => 
            array (
                'id' => 928,
                'code' => '074617000',
                'name' => 'San Jose',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            428 => 
            array (
                'id' => 929,
                'code' => '074618000',
                'name' => 'Santa Catalina',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            429 => 
            array (
                'id' => 930,
                'code' => '074619000',
                'name' => 'Siaton',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            430 => 
            array (
                'id' => 931,
                'code' => '074620000',
                'name' => 'Sibulan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            431 => 
            array (
                'id' => 932,
                'code' => '074621000',
                'name' => 'City of Tanjay',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '074600000',
            ),
            432 => 
            array (
                'id' => 933,
                'code' => '074622000',
                'name' => 'Tayasan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            433 => 
            array (
                'id' => 934,
                'code' => '074623000',
                'name' => 'Valencia',
                'old_name' => 'Luzurriaga',
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            434 => 
            array (
                'id' => 935,
                'code' => '074624000',
                'name' => 'Vallehermoso',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            435 => 
            array (
                'id' => 936,
                'code' => '074625000',
                'name' => 'Zamboanguita',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '074600000',
            ),
            436 => 
            array (
                'id' => 937,
                'code' => '076101000',
                'name' => 'Enrique Villanueva',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '076100000',
            ),
            437 => 
            array (
                'id' => 938,
                'code' => '076102000',
                'name' => 'Larena',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '076100000',
            ),
            438 => 
            array (
                'id' => 939,
                'code' => '076103000',
                'name' => 'Lazi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '076100000',
            ),
            439 => 
            array (
                'id' => 940,
                'code' => '076104000',
                'name' => 'Maria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '076100000',
            ),
            440 => 
            array (
                'id' => 941,
                'code' => '076105000',
                'name' => 'San Juan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '076100000',
            ),
            441 => 
            array (
                'id' => 942,
                'code' => '076106000',
                'name' => 'Siquijor',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '076100000',
            ),
            442 => 
            array (
                'id' => 943,
                'code' => '082601000',
                'name' => 'Arteche',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            443 => 
            array (
                'id' => 944,
                'code' => '082602000',
                'name' => 'Balangiga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            444 => 
            array (
                'id' => 945,
                'code' => '082603000',
                'name' => 'Balangkayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            445 => 
            array (
                'id' => 946,
                'code' => '082604000',
                'name' => 'City of Borongan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '082600000',
            ),
            446 => 
            array (
                'id' => 947,
                'code' => '082605000',
                'name' => 'Can-Avid',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            447 => 
            array (
                'id' => 948,
                'code' => '082606000',
                'name' => 'Dolores',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            448 => 
            array (
                'id' => 949,
                'code' => '082607000',
                'name' => 'General Macarthur',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            449 => 
            array (
                'id' => 950,
                'code' => '082608000',
                'name' => 'Giporlos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            450 => 
            array (
                'id' => 951,
                'code' => '082609000',
                'name' => 'Guiuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            451 => 
            array (
                'id' => 952,
                'code' => '082610000',
                'name' => 'Hernani',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            452 => 
            array (
                'id' => 953,
                'code' => '082611000',
                'name' => 'Jipapad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            453 => 
            array (
                'id' => 954,
                'code' => '082612000',
                'name' => 'Lawaan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            454 => 
            array (
                'id' => 955,
                'code' => '082613000',
                'name' => 'Llorente',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            455 => 
            array (
                'id' => 956,
                'code' => '082614000',
                'name' => 'Maslog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            456 => 
            array (
                'id' => 957,
                'code' => '082615000',
                'name' => 'Maydolong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            457 => 
            array (
                'id' => 958,
                'code' => '082616000',
                'name' => 'Mercedes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            458 => 
            array (
                'id' => 959,
                'code' => '082617000',
                'name' => 'Oras',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            459 => 
            array (
                'id' => 960,
                'code' => '082618000',
                'name' => 'Quinapondan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            460 => 
            array (
                'id' => 961,
                'code' => '082619000',
                'name' => 'Salcedo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            461 => 
            array (
                'id' => 962,
                'code' => '082620000',
                'name' => 'San Julian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            462 => 
            array (
                'id' => 963,
                'code' => '082621000',
                'name' => 'San Policarpo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            463 => 
            array (
                'id' => 964,
                'code' => '082622000',
                'name' => 'Sulat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            464 => 
            array (
                'id' => 965,
                'code' => '082623000',
                'name' => 'Taft',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '082600000',
            ),
            465 => 
            array (
                'id' => 966,
                'code' => '083701000',
                'name' => 'Abuyog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            466 => 
            array (
                'id' => 967,
                'code' => '083702000',
                'name' => 'Alangalang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            467 => 
            array (
                'id' => 968,
                'code' => '083703000',
                'name' => 'Albuera',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            468 => 
            array (
                'id' => 969,
                'code' => '083705000',
                'name' => 'Babatngon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            469 => 
            array (
                'id' => 970,
                'code' => '083706000',
                'name' => 'Barugo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            470 => 
            array (
                'id' => 971,
                'code' => '083707000',
                'name' => 'Bato',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            471 => 
            array (
                'id' => 972,
                'code' => '083708000',
                'name' => 'City of Baybay',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '083700000',
            ),
            472 => 
            array (
                'id' => 973,
                'code' => '083710000',
                'name' => 'Burauen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            473 => 
            array (
                'id' => 974,
                'code' => '083713000',
                'name' => 'Calubian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            474 => 
            array (
                'id' => 975,
                'code' => '083714000',
                'name' => 'Capoocan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            475 => 
            array (
                'id' => 976,
                'code' => '083715000',
                'name' => 'Carigara',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            476 => 
            array (
                'id' => 977,
                'code' => '083717000',
                'name' => 'Dagami',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            477 => 
            array (
                'id' => 978,
                'code' => '083718000',
                'name' => 'Dulag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            478 => 
            array (
                'id' => 979,
                'code' => '083719000',
                'name' => 'Hilongos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            479 => 
            array (
                'id' => 980,
                'code' => '083720000',
                'name' => 'Hindang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            480 => 
            array (
                'id' => 981,
                'code' => '083721000',
                'name' => 'Inopacan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            481 => 
            array (
                'id' => 982,
                'code' => '083722000',
                'name' => 'Isabel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            482 => 
            array (
                'id' => 983,
                'code' => '083723000',
                'name' => 'Jaro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            483 => 
            array (
                'id' => 984,
                'code' => '083724000',
                'name' => 'Javier',
                'old_name' => 'Bugho',
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            484 => 
            array (
                'id' => 985,
                'code' => '083725000',
                'name' => 'Julita',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            485 => 
            array (
                'id' => 986,
                'code' => '083726000',
                'name' => 'Kananga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            486 => 
            array (
                'id' => 987,
                'code' => '083728000',
                'name' => 'La Paz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            487 => 
            array (
                'id' => 988,
                'code' => '083729000',
                'name' => 'Leyte',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            488 => 
            array (
                'id' => 989,
                'code' => '083730000',
                'name' => 'Macarthur',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            489 => 
            array (
                'id' => 990,
                'code' => '083731000',
                'name' => 'Mahaplag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            490 => 
            array (
                'id' => 991,
                'code' => '083733000',
                'name' => 'Matag-Ob',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            491 => 
            array (
                'id' => 992,
                'code' => '083734000',
                'name' => 'Matalom',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            492 => 
            array (
                'id' => 993,
                'code' => '083735000',
                'name' => 'Mayorga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            493 => 
            array (
                'id' => 994,
                'code' => '083736000',
                'name' => 'Merida',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            494 => 
            array (
                'id' => 995,
                'code' => '083738000',
                'name' => 'Ormoc City',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '083700000',
            ),
            495 => 
            array (
                'id' => 996,
                'code' => '083739000',
                'name' => 'Palo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            496 => 
            array (
                'id' => 997,
                'code' => '083740000',
                'name' => 'Palompon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            497 => 
            array (
                'id' => 998,
                'code' => '083741000',
                'name' => 'Pastrana',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            498 => 
            array (
                'id' => 999,
                'code' => '083742000',
                'name' => 'San Isidro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            499 => 
            array (
                'id' => 1000,
                'code' => '083743000',
                'name' => 'San Miguel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
        ));
        \DB::table('location_municipalities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'code' => '083744000',
                'name' => 'Santa Fe',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            1 => 
            array (
                'id' => 1002,
                'code' => '083745000',
                'name' => 'Tabango',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            2 => 
            array (
                'id' => 1003,
                'code' => '083746000',
                'name' => 'Tabontabon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            3 => 
            array (
                'id' => 1004,
                'code' => '083747000',
                'name' => 'City of Tacloban',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '083700000',
            ),
            4 => 
            array (
                'id' => 1005,
                'code' => '083748000',
                'name' => 'Tanauan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            5 => 
            array (
                'id' => 1006,
                'code' => '083749000',
                'name' => 'Tolosa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            6 => 
            array (
                'id' => 1007,
                'code' => '083750000',
                'name' => 'Tunga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            7 => 
            array (
                'id' => 1008,
                'code' => '083751000',
                'name' => 'Villaba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '083700000',
            ),
            8 => 
            array (
                'id' => 1009,
                'code' => '084801000',
                'name' => 'Allen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            9 => 
            array (
                'id' => 1010,
                'code' => '084802000',
                'name' => 'Biri',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            10 => 
            array (
                'id' => 1011,
                'code' => '084803000',
                'name' => 'Bobon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            11 => 
            array (
                'id' => 1012,
                'code' => '084804000',
                'name' => 'Capul',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            12 => 
            array (
                'id' => 1013,
                'code' => '084805000',
                'name' => 'Catarman',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            13 => 
            array (
                'id' => 1014,
                'code' => '084806000',
                'name' => 'Catubig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            14 => 
            array (
                'id' => 1015,
                'code' => '084807000',
                'name' => 'Gamay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            15 => 
            array (
                'id' => 1016,
                'code' => '084808000',
                'name' => 'Laoang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            16 => 
            array (
                'id' => 1017,
                'code' => '084809000',
                'name' => 'Lapinig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            17 => 
            array (
                'id' => 1018,
                'code' => '084810000',
                'name' => 'Las Navas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            18 => 
            array (
                'id' => 1019,
                'code' => '084811000',
                'name' => 'Lavezares',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            19 => 
            array (
                'id' => 1020,
                'code' => '084812000',
                'name' => 'Mapanas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            20 => 
            array (
                'id' => 1021,
                'code' => '084813000',
                'name' => 'Mondragon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            21 => 
            array (
                'id' => 1022,
                'code' => '084814000',
                'name' => 'Palapag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            22 => 
            array (
                'id' => 1023,
                'code' => '084815000',
                'name' => 'Pambujan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            23 => 
            array (
                'id' => 1024,
                'code' => '084816000',
                'name' => 'Rosario',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            24 => 
            array (
                'id' => 1025,
                'code' => '084817000',
                'name' => 'San Antonio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            25 => 
            array (
                'id' => 1026,
                'code' => '084818000',
                'name' => 'San Isidro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            26 => 
            array (
                'id' => 1027,
                'code' => '084819000',
                'name' => 'San Jose',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            27 => 
            array (
                'id' => 1028,
                'code' => '084820000',
                'name' => 'San Roque',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            28 => 
            array (
                'id' => 1029,
                'code' => '084821000',
                'name' => 'San Vicente',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            29 => 
            array (
                'id' => 1030,
                'code' => '084822000',
                'name' => 'Silvino Lobos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            30 => 
            array (
                'id' => 1031,
                'code' => '084823000',
                'name' => 'Victoria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            31 => 
            array (
                'id' => 1032,
                'code' => '084824000',
                'name' => 'Lope De Vega',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '084800000',
            ),
            32 => 
            array (
                'id' => 1033,
                'code' => '086001000',
                'name' => 'Almagro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            33 => 
            array (
                'id' => 1034,
                'code' => '086002000',
                'name' => 'Basey',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            34 => 
            array (
                'id' => 1035,
                'code' => '086003000',
                'name' => 'City of Calbayog',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '086000000',
            ),
            35 => 
            array (
                'id' => 1036,
                'code' => '086004000',
                'name' => 'Calbiga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            36 => 
            array (
                'id' => 1037,
                'code' => '086005000',
                'name' => 'City of Catbalogan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '086000000',
            ),
            37 => 
            array (
                'id' => 1038,
                'code' => '086006000',
                'name' => 'Daram',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            38 => 
            array (
                'id' => 1039,
                'code' => '086007000',
                'name' => 'Gandara',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            39 => 
            array (
                'id' => 1040,
                'code' => '086008000',
                'name' => 'Hinabangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            40 => 
            array (
                'id' => 1041,
                'code' => '086009000',
                'name' => 'Jiabong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            41 => 
            array (
                'id' => 1042,
                'code' => '086010000',
                'name' => 'Marabut',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            42 => 
            array (
                'id' => 1043,
                'code' => '086011000',
                'name' => 'Matuguinao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            43 => 
            array (
                'id' => 1044,
                'code' => '086012000',
                'name' => 'Motiong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            44 => 
            array (
                'id' => 1045,
                'code' => '086013000',
                'name' => 'Pinabacdao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            45 => 
            array (
                'id' => 1046,
                'code' => '086014000',
                'name' => 'San Jose De Buan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            46 => 
            array (
                'id' => 1047,
                'code' => '086015000',
                'name' => 'San Sebastian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            47 => 
            array (
                'id' => 1048,
                'code' => '086016000',
                'name' => 'Santa Margarita',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            48 => 
            array (
                'id' => 1049,
                'code' => '086017000',
                'name' => 'Santa Rita',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            49 => 
            array (
                'id' => 1050,
                'code' => '086018000',
                'name' => 'Santo Niño',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            50 => 
            array (
                'id' => 1051,
                'code' => '086019000',
                'name' => 'Talalora',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            51 => 
            array (
                'id' => 1052,
                'code' => '086020000',
                'name' => 'Tarangnan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            52 => 
            array (
                'id' => 1053,
                'code' => '086021000',
                'name' => 'Villareal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            53 => 
            array (
                'id' => 1054,
                'code' => '086022000',
                'name' => 'Paranas',
                'old_name' => 'Wright',
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            54 => 
            array (
                'id' => 1055,
                'code' => '086023000',
                'name' => 'Zumarraga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            55 => 
            array (
                'id' => 1056,
                'code' => '086024000',
                'name' => 'Tagapul-An',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            56 => 
            array (
                'id' => 1057,
                'code' => '086025000',
                'name' => 'San Jorge',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            57 => 
            array (
                'id' => 1058,
                'code' => '086026000',
                'name' => 'Pagsanghan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086000000',
            ),
            58 => 
            array (
                'id' => 1059,
                'code' => '086401000',
                'name' => 'Anahawan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            59 => 
            array (
                'id' => 1060,
                'code' => '086402000',
                'name' => 'Bontoc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            60 => 
            array (
                'id' => 1061,
                'code' => '086403000',
                'name' => 'Hinunangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            61 => 
            array (
                'id' => 1062,
                'code' => '086404000',
                'name' => 'Hinundayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            62 => 
            array (
                'id' => 1063,
                'code' => '086405000',
                'name' => 'Libagon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            63 => 
            array (
                'id' => 1064,
                'code' => '086406000',
                'name' => 'Liloan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            64 => 
            array (
                'id' => 1065,
                'code' => '086407000',
                'name' => 'City of Maasin',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '086400000',
            ),
            65 => 
            array (
                'id' => 1066,
                'code' => '086408000',
                'name' => 'Macrohon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            66 => 
            array (
                'id' => 1067,
                'code' => '086409000',
                'name' => 'Malitbog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            67 => 
            array (
                'id' => 1068,
                'code' => '086410000',
                'name' => 'Padre Burgos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            68 => 
            array (
                'id' => 1069,
                'code' => '086411000',
                'name' => 'Pintuyan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            69 => 
            array (
                'id' => 1070,
                'code' => '086412000',
                'name' => 'Saint Bernard',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            70 => 
            array (
                'id' => 1071,
                'code' => '086413000',
                'name' => 'San Francisco',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            71 => 
            array (
                'id' => 1072,
                'code' => '086414000',
                'name' => 'San Juan',
                'old_name' => 'Cabalian',
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            72 => 
            array (
                'id' => 1073,
                'code' => '086415000',
                'name' => 'San Ricardo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            73 => 
            array (
                'id' => 1074,
                'code' => '086416000',
                'name' => 'Silago',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            74 => 
            array (
                'id' => 1075,
                'code' => '086417000',
                'name' => 'Sogod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            75 => 
            array (
                'id' => 1076,
                'code' => '086418000',
                'name' => 'Tomas Oppus',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            76 => 
            array (
                'id' => 1077,
                'code' => '086419000',
                'name' => 'Limasawa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '086400000',
            ),
            77 => 
            array (
                'id' => 1078,
                'code' => '087801000',
                'name' => 'Almeria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '087800000',
            ),
            78 => 
            array (
                'id' => 1079,
                'code' => '087802000',
                'name' => 'Biliran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '087800000',
            ),
            79 => 
            array (
                'id' => 1080,
                'code' => '087803000',
                'name' => 'Cabucgayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '087800000',
            ),
            80 => 
            array (
                'id' => 1081,
                'code' => '087804000',
                'name' => 'Caibiran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '087800000',
            ),
            81 => 
            array (
                'id' => 1082,
                'code' => '087805000',
                'name' => 'Culaba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '087800000',
            ),
            82 => 
            array (
                'id' => 1083,
                'code' => '087806000',
                'name' => 'Kawayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '087800000',
            ),
            83 => 
            array (
                'id' => 1084,
                'code' => '087807000',
                'name' => 'Maripipi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '087800000',
            ),
            84 => 
            array (
                'id' => 1085,
                'code' => '087808000',
                'name' => 'Naval',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '087800000',
            ),
            85 => 
            array (
                'id' => 1086,
                'code' => '097201000',
                'name' => 'City of Dapitan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '097200000',
            ),
            86 => 
            array (
                'id' => 1087,
                'code' => '097202000',
                'name' => 'City of Dipolog',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '097200000',
            ),
            87 => 
            array (
                'id' => 1088,
                'code' => '097203000',
                'name' => 'Katipunan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            88 => 
            array (
                'id' => 1089,
                'code' => '097204000',
                'name' => 'La Libertad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            89 => 
            array (
                'id' => 1090,
                'code' => '097205000',
                'name' => 'Labason',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            90 => 
            array (
                'id' => 1091,
                'code' => '097206000',
                'name' => 'Liloy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            91 => 
            array (
                'id' => 1092,
                'code' => '097207000',
                'name' => 'Manukan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            92 => 
            array (
                'id' => 1093,
                'code' => '097208000',
                'name' => 'Mutia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            93 => 
            array (
                'id' => 1094,
                'code' => '097209000',
                'name' => 'Piñan',
                'old_name' => 'New Piñan',
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            94 => 
            array (
                'id' => 1095,
                'code' => '097210000',
                'name' => 'Polanco',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            95 => 
            array (
                'id' => 1096,
                'code' => '097211000',
                'name' => 'Pres. Manuel a. Roxas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            96 => 
            array (
                'id' => 1097,
                'code' => '097212000',
                'name' => 'Rizal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            97 => 
            array (
                'id' => 1098,
                'code' => '097213000',
                'name' => 'Salug',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            98 => 
            array (
                'id' => 1099,
                'code' => '097214000',
                'name' => 'Sergio osmeña Sr.',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            99 => 
            array (
                'id' => 1100,
                'code' => '097215000',
                'name' => 'Siayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            100 => 
            array (
                'id' => 1101,
                'code' => '097216000',
                'name' => 'Sibuco',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            101 => 
            array (
                'id' => 1102,
                'code' => '097217000',
                'name' => 'Sibutad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            102 => 
            array (
                'id' => 1103,
                'code' => '097218000',
                'name' => 'Sindangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            103 => 
            array (
                'id' => 1104,
                'code' => '097219000',
                'name' => 'Siocon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            104 => 
            array (
                'id' => 1105,
                'code' => '097220000',
                'name' => 'Sirawai',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            105 => 
            array (
                'id' => 1106,
                'code' => '097221000',
                'name' => 'Tampilisan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            106 => 
            array (
                'id' => 1107,
                'code' => '097222000',
                'name' => 'Jose Dalman',
                'old_name' => 'Ponot',
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            107 => 
            array (
                'id' => 1108,
                'code' => '097223000',
                'name' => 'Gutalac',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            108 => 
            array (
                'id' => 1109,
                'code' => '097224000',
                'name' => 'Baliguian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            109 => 
            array (
                'id' => 1110,
                'code' => '097225000',
                'name' => 'Godod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            110 => 
            array (
                'id' => 1111,
                'code' => '097226000',
                'name' => 'Bacungan',
                'old_name' => 'Leon T. Postigo',
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            111 => 
            array (
                'id' => 1112,
                'code' => '097227000',
                'name' => 'Kalawit',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097200000',
            ),
            112 => 
            array (
                'id' => 1113,
                'code' => '097302000',
                'name' => 'Aurora',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            113 => 
            array (
                'id' => 1114,
                'code' => '097303000',
                'name' => 'Bayog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            114 => 
            array (
                'id' => 1115,
                'code' => '097305000',
                'name' => 'Dimataling',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            115 => 
            array (
                'id' => 1116,
                'code' => '097306000',
                'name' => 'Dinas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            116 => 
            array (
                'id' => 1117,
                'code' => '097307000',
                'name' => 'Dumalinao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            117 => 
            array (
                'id' => 1118,
                'code' => '097308000',
                'name' => 'Dumingag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            118 => 
            array (
                'id' => 1119,
                'code' => '097311000',
                'name' => 'Kumalarang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            119 => 
            array (
                'id' => 1120,
                'code' => '097312000',
                'name' => 'Labangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            120 => 
            array (
                'id' => 1121,
                'code' => '097313000',
                'name' => 'Lapuyan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            121 => 
            array (
                'id' => 1122,
                'code' => '097315000',
                'name' => 'Mahayag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            122 => 
            array (
                'id' => 1123,
                'code' => '097317000',
                'name' => 'Margosatubig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            123 => 
            array (
                'id' => 1124,
                'code' => '097318000',
                'name' => 'Midsalip',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            124 => 
            array (
                'id' => 1125,
                'code' => '097319000',
                'name' => 'Molave',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            125 => 
            array (
                'id' => 1126,
                'code' => '097322000',
                'name' => 'City of Pagadian',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '097300000',
            ),
            126 => 
            array (
                'id' => 1127,
                'code' => '097323000',
                'name' => 'Ramon Magsaysay',
                'old_name' => 'Liargo',
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            127 => 
            array (
                'id' => 1128,
                'code' => '097324000',
                'name' => 'San Miguel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            128 => 
            array (
                'id' => 1129,
                'code' => '097325000',
                'name' => 'San Pablo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            129 => 
            array (
                'id' => 1130,
                'code' => '097327000',
                'name' => 'Tabina',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            130 => 
            array (
                'id' => 1131,
                'code' => '097328000',
                'name' => 'Tambulig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            131 => 
            array (
                'id' => 1132,
                'code' => '097330000',
                'name' => 'Tukuran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            132 => 
            array (
                'id' => 1133,
                'code' => '097332000',
                'name' => 'City of Zamboanga',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '097300000',
            ),
            133 => 
            array (
                'id' => 1134,
                'code' => '097333000',
                'name' => 'Lakewood',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            134 => 
            array (
                'id' => 1135,
                'code' => '097337000',
                'name' => 'Josefina',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            135 => 
            array (
                'id' => 1136,
                'code' => '097338000',
                'name' => 'Pitogo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            136 => 
            array (
                'id' => 1137,
                'code' => '097340000',
                'name' => 'Sominot',
                'old_name' => 'Don Mariano Marcos',
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            137 => 
            array (
                'id' => 1138,
                'code' => '097341000',
                'name' => 'Vincenzo a. Sagun',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            138 => 
            array (
                'id' => 1139,
                'code' => '097343000',
                'name' => 'Guipos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            139 => 
            array (
                'id' => 1140,
                'code' => '097344000',
                'name' => 'Tigbao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '097300000',
            ),
            140 => 
            array (
                'id' => 1141,
                'code' => '098301000',
                'name' => 'Alicia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            141 => 
            array (
                'id' => 1142,
                'code' => '098302000',
                'name' => 'Buug',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            142 => 
            array (
                'id' => 1143,
                'code' => '098303000',
                'name' => 'Diplahan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            143 => 
            array (
                'id' => 1144,
                'code' => '098304000',
                'name' => 'Imelda',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            144 => 
            array (
                'id' => 1145,
                'code' => '098305000',
                'name' => 'Ipil',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            145 => 
            array (
                'id' => 1146,
                'code' => '098306000',
                'name' => 'Kabasalan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            146 => 
            array (
                'id' => 1147,
                'code' => '098307000',
                'name' => 'Mabuhay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            147 => 
            array (
                'id' => 1148,
                'code' => '098308000',
                'name' => 'Malangas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            148 => 
            array (
                'id' => 1149,
                'code' => '098309000',
                'name' => 'Naga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            149 => 
            array (
                'id' => 1150,
                'code' => '098310000',
                'name' => 'Olutanga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            150 => 
            array (
                'id' => 1151,
                'code' => '098311000',
                'name' => 'Payao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            151 => 
            array (
                'id' => 1152,
                'code' => '098312000',
                'name' => 'Roseller Lim',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            152 => 
            array (
                'id' => 1153,
                'code' => '098313000',
                'name' => 'Siay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            153 => 
            array (
                'id' => 1154,
                'code' => '098314000',
                'name' => 'Talusan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            154 => 
            array (
                'id' => 1155,
                'code' => '098315000',
                'name' => 'Titay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            155 => 
            array (
                'id' => 1156,
                'code' => '098316000',
                'name' => 'Tungawan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '098300000',
            ),
            156 => 
            array (
                'id' => 1157,
                'code' => '099701000',
                'name' => 'City of Isabela',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '150700000',
            ),
            157 => 
            array (
                'id' => 1158,
                'code' => '101301000',
                'name' => 'Baungon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            158 => 
            array (
                'id' => 1159,
                'code' => '101302000',
                'name' => 'Damulog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            159 => 
            array (
                'id' => 1160,
                'code' => '101303000',
                'name' => 'Dangcagan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            160 => 
            array (
                'id' => 1161,
                'code' => '101304000',
                'name' => 'Don Carlos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            161 => 
            array (
                'id' => 1162,
                'code' => '101305000',
                'name' => 'Impasug-Ong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            162 => 
            array (
                'id' => 1163,
                'code' => '101306000',
                'name' => 'Kadingilan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            163 => 
            array (
                'id' => 1164,
                'code' => '101307000',
                'name' => 'Kalilangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            164 => 
            array (
                'id' => 1165,
                'code' => '101308000',
                'name' => 'Kibawe',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            165 => 
            array (
                'id' => 1166,
                'code' => '101309000',
                'name' => 'Kitaotao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            166 => 
            array (
                'id' => 1167,
                'code' => '101310000',
                'name' => 'Lantapan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            167 => 
            array (
                'id' => 1168,
                'code' => '101311000',
                'name' => 'Libona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            168 => 
            array (
                'id' => 1169,
                'code' => '101312000',
                'name' => 'City of Malaybalay',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '101300000',
            ),
            169 => 
            array (
                'id' => 1170,
                'code' => '101313000',
                'name' => 'Malitbog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            170 => 
            array (
                'id' => 1171,
                'code' => '101314000',
                'name' => 'Manolo Fortich',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            171 => 
            array (
                'id' => 1172,
                'code' => '101315000',
                'name' => 'Maramag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            172 => 
            array (
                'id' => 1173,
                'code' => '101316000',
                'name' => 'Pangantucan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            173 => 
            array (
                'id' => 1174,
                'code' => '101317000',
                'name' => 'Quezon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            174 => 
            array (
                'id' => 1175,
                'code' => '101318000',
                'name' => 'San Fernando',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            175 => 
            array (
                'id' => 1176,
                'code' => '101319000',
                'name' => 'Sumilao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            176 => 
            array (
                'id' => 1177,
                'code' => '101320000',
                'name' => 'Talakag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            177 => 
            array (
                'id' => 1178,
                'code' => '101321000',
                'name' => 'City of Valencia',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '101300000',
            ),
            178 => 
            array (
                'id' => 1179,
                'code' => '101322000',
                'name' => 'Cabanglasan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101300000',
            ),
            179 => 
            array (
                'id' => 1180,
                'code' => '101801000',
                'name' => 'Catarman',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101800000',
            ),
            180 => 
            array (
                'id' => 1181,
                'code' => '101802000',
                'name' => 'Guinsiliban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101800000',
            ),
            181 => 
            array (
                'id' => 1182,
                'code' => '101803000',
                'name' => 'Mahinog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101800000',
            ),
            182 => 
            array (
                'id' => 1183,
                'code' => '101804000',
                'name' => 'Mambajao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101800000',
            ),
            183 => 
            array (
                'id' => 1184,
                'code' => '101805000',
                'name' => 'Sagay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '101800000',
            ),
            184 => 
            array (
                'id' => 1185,
                'code' => '103501000',
                'name' => 'Bacolod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            185 => 
            array (
                'id' => 1186,
                'code' => '103502000',
                'name' => 'Baloi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            186 => 
            array (
                'id' => 1187,
                'code' => '103503000',
                'name' => 'Baroy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            187 => 
            array (
                'id' => 1188,
                'code' => '103504000',
                'name' => 'City of Iligan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '103500000',
            ),
            188 => 
            array (
                'id' => 1189,
                'code' => '103505000',
                'name' => 'Kapatagan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            189 => 
            array (
                'id' => 1190,
                'code' => '103506000',
                'name' => 'Sultan Naga Dimaporo',
                'old_name' => 'Karomatan',
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            190 => 
            array (
                'id' => 1191,
                'code' => '103507000',
                'name' => 'Kauswagan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            191 => 
            array (
                'id' => 1192,
                'code' => '103508000',
                'name' => 'Kolambugan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            192 => 
            array (
                'id' => 1193,
                'code' => '103509000',
                'name' => 'Lala',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            193 => 
            array (
                'id' => 1194,
                'code' => '103510000',
                'name' => 'Linamon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            194 => 
            array (
                'id' => 1195,
                'code' => '103511000',
                'name' => 'Magsaysay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            195 => 
            array (
                'id' => 1196,
                'code' => '103512000',
                'name' => 'Maigo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            196 => 
            array (
                'id' => 1197,
                'code' => '103513000',
                'name' => 'Matungao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            197 => 
            array (
                'id' => 1198,
                'code' => '103514000',
                'name' => 'Munai',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            198 => 
            array (
                'id' => 1199,
                'code' => '103515000',
                'name' => 'Nunungan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            199 => 
            array (
                'id' => 1200,
                'code' => '103516000',
                'name' => 'Pantao Ragat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            200 => 
            array (
                'id' => 1201,
                'code' => '103517000',
                'name' => 'Poona Piagapo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            201 => 
            array (
                'id' => 1202,
                'code' => '103518000',
                'name' => 'Salvador',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            202 => 
            array (
                'id' => 1203,
                'code' => '103519000',
                'name' => 'Sapad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            203 => 
            array (
                'id' => 1204,
                'code' => '103520000',
                'name' => 'Tagoloan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            204 => 
            array (
                'id' => 1205,
                'code' => '103521000',
                'name' => 'Tangcal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            205 => 
            array (
                'id' => 1206,
                'code' => '103522000',
                'name' => 'Tubod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            206 => 
            array (
                'id' => 1207,
                'code' => '103523000',
                'name' => 'Pantar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '103500000',
            ),
            207 => 
            array (
                'id' => 1208,
                'code' => '104201000',
                'name' => 'Aloran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            208 => 
            array (
                'id' => 1209,
                'code' => '104202000',
                'name' => 'Baliangao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            209 => 
            array (
                'id' => 1210,
                'code' => '104203000',
                'name' => 'Bonifacio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            210 => 
            array (
                'id' => 1211,
                'code' => '104204000',
                'name' => 'Calamba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            211 => 
            array (
                'id' => 1212,
                'code' => '104205000',
                'name' => 'Clarin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            212 => 
            array (
                'id' => 1213,
                'code' => '104206000',
                'name' => 'Concepcion',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            213 => 
            array (
                'id' => 1214,
                'code' => '104207000',
                'name' => 'Jimenez',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            214 => 
            array (
                'id' => 1215,
                'code' => '104208000',
                'name' => 'Lopez Jaena',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            215 => 
            array (
                'id' => 1216,
                'code' => '104209000',
                'name' => 'City of Oroquieta',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '104200000',
            ),
            216 => 
            array (
                'id' => 1217,
                'code' => '104210000',
                'name' => 'City of Ozamiz',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '104200000',
            ),
            217 => 
            array (
                'id' => 1218,
                'code' => '104211000',
                'name' => 'Panaon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            218 => 
            array (
                'id' => 1219,
                'code' => '104212000',
                'name' => 'Plaridel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            219 => 
            array (
                'id' => 1220,
                'code' => '104213000',
                'name' => 'Sapang Dalaga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            220 => 
            array (
                'id' => 1221,
                'code' => '104214000',
                'name' => 'Sinacaban',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            221 => 
            array (
                'id' => 1222,
                'code' => '104215000',
                'name' => 'City of Tangub',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '104200000',
            ),
            222 => 
            array (
                'id' => 1223,
                'code' => '104216000',
                'name' => 'Tudela',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            223 => 
            array (
                'id' => 1224,
                'code' => '104217000',
                'name' => 'Don Victoriano Chiongbian',
                'old_name' => 'Don Mariano Marcos',
                'is_municipality' => 1,
                'province_code' => '104200000',
            ),
            224 => 
            array (
                'id' => 1225,
                'code' => '104301000',
                'name' => 'Alubijid',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            225 => 
            array (
                'id' => 1226,
                'code' => '104302000',
                'name' => 'Balingasag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            226 => 
            array (
                'id' => 1227,
                'code' => '104303000',
                'name' => 'Balingoan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            227 => 
            array (
                'id' => 1228,
                'code' => '104304000',
                'name' => 'Binuangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            228 => 
            array (
                'id' => 1229,
                'code' => '104305000',
                'name' => 'City of Cagayan De Oro',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '104300000',
            ),
            229 => 
            array (
                'id' => 1230,
                'code' => '104306000',
                'name' => 'Claveria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            230 => 
            array (
                'id' => 1231,
                'code' => '104307000',
                'name' => 'City of El Salvador',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '104300000',
            ),
            231 => 
            array (
                'id' => 1232,
                'code' => '104308000',
                'name' => 'City of Gingoog',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '104300000',
            ),
            232 => 
            array (
                'id' => 1233,
                'code' => '104309000',
                'name' => 'Gitagum',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            233 => 
            array (
                'id' => 1234,
                'code' => '104310000',
                'name' => 'Initao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            234 => 
            array (
                'id' => 1235,
                'code' => '104311000',
                'name' => 'Jasaan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            235 => 
            array (
                'id' => 1236,
                'code' => '104312000',
                'name' => 'Kinoguitan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            236 => 
            array (
                'id' => 1237,
                'code' => '104313000',
                'name' => 'Lagonglong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            237 => 
            array (
                'id' => 1238,
                'code' => '104314000',
                'name' => 'Laguindingan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            238 => 
            array (
                'id' => 1239,
                'code' => '104315000',
                'name' => 'Libertad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            239 => 
            array (
                'id' => 1240,
                'code' => '104316000',
                'name' => 'Lugait',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            240 => 
            array (
                'id' => 1241,
                'code' => '104317000',
                'name' => 'Magsaysay',
                'old_name' => 'Linugos',
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            241 => 
            array (
                'id' => 1242,
                'code' => '104318000',
                'name' => 'Manticao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            242 => 
            array (
                'id' => 1243,
                'code' => '104319000',
                'name' => 'Medina',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            243 => 
            array (
                'id' => 1244,
                'code' => '104320000',
                'name' => 'Naawan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            244 => 
            array (
                'id' => 1245,
                'code' => '104321000',
                'name' => 'Opol',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            245 => 
            array (
                'id' => 1246,
                'code' => '104322000',
                'name' => 'Salay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            246 => 
            array (
                'id' => 1247,
                'code' => '104323000',
                'name' => 'Sugbongcogon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            247 => 
            array (
                'id' => 1248,
                'code' => '104324000',
                'name' => 'Tagoloan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            248 => 
            array (
                'id' => 1249,
                'code' => '104325000',
                'name' => 'Talisayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            249 => 
            array (
                'id' => 1250,
                'code' => '104326000',
                'name' => 'Villanueva',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '104300000',
            ),
            250 => 
            array (
                'id' => 1251,
                'code' => '112301000',
                'name' => 'Asuncion',
                'old_name' => 'Saug',
                'is_municipality' => 1,
                'province_code' => '112300000',
            ),
            251 => 
            array (
                'id' => 1252,
                'code' => '112303000',
                'name' => 'Carmen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112300000',
            ),
            252 => 
            array (
                'id' => 1253,
                'code' => '112305000',
                'name' => 'Kapalong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112300000',
            ),
            253 => 
            array (
                'id' => 1254,
                'code' => '112314000',
                'name' => 'New Corella',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112300000',
            ),
            254 => 
            array (
                'id' => 1255,
                'code' => '112315000',
                'name' => 'City of Panabo',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '112300000',
            ),
            255 => 
            array (
                'id' => 1256,
                'code' => '112317000',
                'name' => 'Island Garden City of Samal',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '112300000',
            ),
            256 => 
            array (
                'id' => 1257,
                'code' => '112318000',
                'name' => 'Santo Tomas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112300000',
            ),
            257 => 
            array (
                'id' => 1258,
                'code' => '112319000',
                'name' => 'City of Tagum',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '112300000',
            ),
            258 => 
            array (
                'id' => 1259,
                'code' => '112322000',
                'name' => 'Talaingod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112300000',
            ),
            259 => 
            array (
                'id' => 1260,
                'code' => '112323000',
                'name' => 'Braulio E. Dujali',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112300000',
            ),
            260 => 
            array (
                'id' => 1261,
                'code' => '112324000',
                'name' => 'San Isidro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112300000',
            ),
            261 => 
            array (
                'id' => 1262,
                'code' => '112401000',
                'name' => 'Bansalan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112400000',
            ),
            262 => 
            array (
                'id' => 1263,
                'code' => '112402000',
                'name' => 'City of Davao',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '112400000',
            ),
            263 => 
            array (
                'id' => 1264,
                'code' => '112403000',
                'name' => 'City of Digos',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '112400000',
            ),
            264 => 
            array (
                'id' => 1265,
                'code' => '112404000',
                'name' => 'Hagonoy',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112400000',
            ),
            265 => 
            array (
                'id' => 1266,
                'code' => '112406000',
                'name' => 'Kiblawan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112400000',
            ),
            266 => 
            array (
                'id' => 1267,
                'code' => '112407000',
                'name' => 'Magsaysay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112400000',
            ),
            267 => 
            array (
                'id' => 1268,
                'code' => '112408000',
                'name' => 'Malalag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112400000',
            ),
            268 => 
            array (
                'id' => 1269,
                'code' => '112410000',
                'name' => 'Matanao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112400000',
            ),
            269 => 
            array (
                'id' => 1270,
                'code' => '112411000',
                'name' => 'Padada',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112400000',
            ),
            270 => 
            array (
                'id' => 1271,
                'code' => '112412000',
                'name' => 'Santa Cruz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112400000',
            ),
            271 => 
            array (
                'id' => 1272,
                'code' => '112414000',
                'name' => 'Sulop',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112400000',
            ),
            272 => 
            array (
                'id' => 1273,
                'code' => '112501000',
                'name' => 'Baganga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            273 => 
            array (
                'id' => 1274,
                'code' => '112502000',
                'name' => 'Banaybanay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            274 => 
            array (
                'id' => 1275,
                'code' => '112503000',
                'name' => 'Boston',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            275 => 
            array (
                'id' => 1276,
                'code' => '112504000',
                'name' => 'Caraga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            276 => 
            array (
                'id' => 1277,
                'code' => '112505000',
                'name' => 'Cateel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            277 => 
            array (
                'id' => 1278,
                'code' => '112506000',
                'name' => 'Governor Generoso',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            278 => 
            array (
                'id' => 1279,
                'code' => '112507000',
                'name' => 'Lupon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            279 => 
            array (
                'id' => 1280,
                'code' => '112508000',
                'name' => 'Manay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            280 => 
            array (
                'id' => 1281,
                'code' => '112509000',
                'name' => 'City of Mati',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '112500000',
            ),
            281 => 
            array (
                'id' => 1282,
                'code' => '112510000',
                'name' => 'San Isidro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            282 => 
            array (
                'id' => 1283,
                'code' => '112511000',
                'name' => 'Tarragona',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '112500000',
            ),
            283 => 
            array (
                'id' => 1284,
                'code' => '118201000',
                'name' => 'Compostela',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            284 => 
            array (
                'id' => 1285,
                'code' => '118202000',
                'name' => 'Laak',
                'old_name' => 'San Vicente',
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            285 => 
            array (
                'id' => 1286,
                'code' => '118203000',
                'name' => 'Mabini',
                'old_name' => 'Doña Alicia',
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            286 => 
            array (
                'id' => 1287,
                'code' => '118204000',
                'name' => 'Maco',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            287 => 
            array (
                'id' => 1288,
                'code' => '118205000',
                'name' => 'Maragusan',
                'old_name' => 'San Mariano',
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            288 => 
            array (
                'id' => 1289,
                'code' => '118206000',
                'name' => 'Mawab',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            289 => 
            array (
                'id' => 1290,
                'code' => '118207000',
                'name' => 'Monkayo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            290 => 
            array (
                'id' => 1291,
                'code' => '118208000',
                'name' => 'Montevista',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            291 => 
            array (
                'id' => 1292,
                'code' => '118209000',
                'name' => 'Nabunturan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            292 => 
            array (
                'id' => 1293,
                'code' => '118210000',
                'name' => 'New Bataan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            293 => 
            array (
                'id' => 1294,
                'code' => '118211000',
                'name' => 'Pantukan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118200000',
            ),
            294 => 
            array (
                'id' => 1295,
                'code' => '118601000',
                'name' => 'Don Marcelino',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118600000',
            ),
            295 => 
            array (
                'id' => 1296,
                'code' => '118602000',
                'name' => 'Jose Abad Santos',
                'old_name' => 'Trinidad',
                'is_municipality' => 1,
                'province_code' => '118600000',
            ),
            296 => 
            array (
                'id' => 1297,
                'code' => '118603000',
                'name' => 'Malita',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118600000',
            ),
            297 => 
            array (
                'id' => 1298,
                'code' => '118604000',
                'name' => 'Santa Maria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118600000',
            ),
            298 => 
            array (
                'id' => 1299,
                'code' => '118605000',
                'name' => 'Sarangani',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '118600000',
            ),
            299 => 
            array (
                'id' => 1300,
                'code' => '124701000',
                'name' => 'Alamada',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            300 => 
            array (
                'id' => 1301,
                'code' => '124702000',
                'name' => 'Carmen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            301 => 
            array (
                'id' => 1302,
                'code' => '124703000',
                'name' => 'Kabacan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            302 => 
            array (
                'id' => 1303,
                'code' => '124704000',
                'name' => 'City of Kidapawan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '124700000',
            ),
            303 => 
            array (
                'id' => 1304,
                'code' => '124705000',
                'name' => 'Libungan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            304 => 
            array (
                'id' => 1305,
                'code' => '124706000',
                'name' => 'Magpet',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            305 => 
            array (
                'id' => 1306,
                'code' => '124707000',
                'name' => 'Makilala',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            306 => 
            array (
                'id' => 1307,
                'code' => '124708000',
                'name' => 'Matalam',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            307 => 
            array (
                'id' => 1308,
                'code' => '124709000',
                'name' => 'Midsayap',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            308 => 
            array (
                'id' => 1309,
                'code' => '124710000',
                'name' => 'M\'lang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            309 => 
            array (
                'id' => 1310,
                'code' => '124711000',
                'name' => 'Pigkawayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            310 => 
            array (
                'id' => 1311,
                'code' => '124712000',
                'name' => 'Pikit',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            311 => 
            array (
                'id' => 1312,
                'code' => '124713000',
                'name' => 'President Roxas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            312 => 
            array (
                'id' => 1313,
                'code' => '124714000',
                'name' => 'Tulunan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            313 => 
            array (
                'id' => 1314,
                'code' => '124715000',
                'name' => 'Antipas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            314 => 
            array (
                'id' => 1315,
                'code' => '124716000',
                'name' => 'Banisilan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            315 => 
            array (
                'id' => 1316,
                'code' => '124717000',
                'name' => 'Aleosan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            316 => 
            array (
                'id' => 1317,
                'code' => '124718000',
                'name' => 'Arakan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '124700000',
            ),
            317 => 
            array (
                'id' => 1318,
                'code' => '126302000',
                'name' => 'Banga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            318 => 
            array (
                'id' => 1319,
                'code' => '126303000',
                'name' => 'City of General Santos',
                'old_name' => 'Dadiangas',
                'is_municipality' => 0,
                'province_code' => '126300000',
            ),
            319 => 
            array (
                'id' => 1320,
                'code' => '126306000',
                'name' => 'City of Koronadal',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '126300000',
            ),
            320 => 
            array (
                'id' => 1321,
                'code' => '126311000',
                'name' => 'Norala',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            321 => 
            array (
                'id' => 1322,
                'code' => '126312000',
                'name' => 'Polomolok',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            322 => 
            array (
                'id' => 1323,
                'code' => '126313000',
                'name' => 'Surallah',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            323 => 
            array (
                'id' => 1324,
                'code' => '126314000',
                'name' => 'Tampakan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            324 => 
            array (
                'id' => 1325,
                'code' => '126315000',
                'name' => 'Tantangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            325 => 
            array (
                'id' => 1326,
                'code' => '126316000',
                'name' => 'T\'boli',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            326 => 
            array (
                'id' => 1327,
                'code' => '126317000',
                'name' => 'Tupi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            327 => 
            array (
                'id' => 1328,
                'code' => '126318000',
                'name' => 'Santo Niño',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            328 => 
            array (
                'id' => 1329,
                'code' => '126319000',
                'name' => 'Lake Sebu',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126300000',
            ),
            329 => 
            array (
                'id' => 1330,
                'code' => '126501000',
                'name' => 'Bagumbayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            330 => 
            array (
                'id' => 1331,
                'code' => '126502000',
                'name' => 'Columbio',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            331 => 
            array (
                'id' => 1332,
                'code' => '126503000',
                'name' => 'Esperanza',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            332 => 
            array (
                'id' => 1333,
                'code' => '126504000',
                'name' => 'Isulan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            333 => 
            array (
                'id' => 1334,
                'code' => '126505000',
                'name' => 'Kalamansig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            334 => 
            array (
                'id' => 1335,
                'code' => '126506000',
                'name' => 'Lebak',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            335 => 
            array (
                'id' => 1336,
                'code' => '126507000',
                'name' => 'Lutayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            336 => 
            array (
                'id' => 1337,
                'code' => '126508000',
                'name' => 'Lambayong',
                'old_name' => 'Mariano Marcos',
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            337 => 
            array (
                'id' => 1338,
                'code' => '126509000',
                'name' => 'Palimbang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            338 => 
            array (
                'id' => 1339,
                'code' => '126510000',
                'name' => 'President Quirino',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            339 => 
            array (
                'id' => 1340,
                'code' => '126511000',
                'name' => 'City of Tacurong',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '126500000',
            ),
            340 => 
            array (
                'id' => 1341,
                'code' => '126512000',
                'name' => 'Sen. Ninoy Aquino',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '126500000',
            ),
            341 => 
            array (
                'id' => 1342,
                'code' => '128001000',
                'name' => 'Alabel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '128000000',
            ),
            342 => 
            array (
                'id' => 1343,
                'code' => '128002000',
                'name' => 'Glan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '128000000',
            ),
            343 => 
            array (
                'id' => 1344,
                'code' => '128003000',
                'name' => 'Kiamba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '128000000',
            ),
            344 => 
            array (
                'id' => 1345,
                'code' => '128004000',
                'name' => 'Maasim',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '128000000',
            ),
            345 => 
            array (
                'id' => 1346,
                'code' => '128005000',
                'name' => 'Maitum',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '128000000',
            ),
            346 => 
            array (
                'id' => 1347,
                'code' => '128006000',
                'name' => 'Malapatan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '128000000',
            ),
            347 => 
            array (
                'id' => 1348,
                'code' => '128007000',
                'name' => 'Malungon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '128000000',
            ),
            348 => 
            array (
                'id' => 1349,
                'code' => '129804000',
                'name' => 'City of Cotabato',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '153800000',
            ),
            349 => 
            array (
                'id' => 1350,
                'code' => '133900000',
                'name' => 'City of Manila',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            350 => 
            array (
                'id' => 1351,
                'code' => '137401000',
                'name' => 'City of Mandaluyong',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            351 => 
            array (
                'id' => 1352,
                'code' => '137402000',
                'name' => 'City of Marikina',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            352 => 
            array (
                'id' => 1353,
                'code' => '137403000',
                'name' => 'City of Pasig',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            353 => 
            array (
                'id' => 1354,
                'code' => '137404000',
                'name' => 'Quezon City',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            354 => 
            array (
                'id' => 1355,
                'code' => '137405000',
                'name' => 'City of San Juan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            355 => 
            array (
                'id' => 1356,
                'code' => '137501000',
                'name' => 'City of Caloocan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            356 => 
            array (
                'id' => 1357,
                'code' => '137502000',
                'name' => 'City of Malabon',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            357 => 
            array (
                'id' => 1358,
                'code' => '137503000',
                'name' => 'City of Navotas',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            358 => 
            array (
                'id' => 1359,
                'code' => '137504000',
                'name' => 'City of Valenzuela',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            359 => 
            array (
                'id' => 1360,
                'code' => '137601000',
                'name' => 'City of Las Piñas',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            360 => 
            array (
                'id' => 1361,
                'code' => '137602000',
                'name' => 'City of Makati',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            361 => 
            array (
                'id' => 1362,
                'code' => '137603000',
                'name' => 'City of Muntinlupa',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            362 => 
            array (
                'id' => 1363,
                'code' => '137604000',
                'name' => 'City of Parañaque',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            363 => 
            array (
                'id' => 1364,
                'code' => '137605000',
                'name' => 'Pasay City',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            364 => 
            array (
                'id' => 1365,
                'code' => '137606000',
                'name' => 'Pateros',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '170000000',
            ),
            365 => 
            array (
                'id' => 1366,
                'code' => '137607000',
                'name' => 'City of Taguig',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '170000000',
            ),
            366 => 
            array (
                'id' => 1367,
                'code' => '140101000',
                'name' => 'Bangued',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            367 => 
            array (
                'id' => 1368,
                'code' => '140102000',
                'name' => 'Boliney',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            368 => 
            array (
                'id' => 1369,
                'code' => '140103000',
                'name' => 'Bucay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            369 => 
            array (
                'id' => 1370,
                'code' => '140104000',
                'name' => 'Bucloc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            370 => 
            array (
                'id' => 1371,
                'code' => '140105000',
                'name' => 'Daguioman',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            371 => 
            array (
                'id' => 1372,
                'code' => '140106000',
                'name' => 'Danglas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            372 => 
            array (
                'id' => 1373,
                'code' => '140107000',
                'name' => 'Dolores',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            373 => 
            array (
                'id' => 1374,
                'code' => '140108000',
                'name' => 'La Paz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            374 => 
            array (
                'id' => 1375,
                'code' => '140109000',
                'name' => 'Lacub',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            375 => 
            array (
                'id' => 1376,
                'code' => '140110000',
                'name' => 'Lagangilang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            376 => 
            array (
                'id' => 1377,
                'code' => '140111000',
                'name' => 'Lagayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            377 => 
            array (
                'id' => 1378,
                'code' => '140112000',
                'name' => 'Langiden',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            378 => 
            array (
                'id' => 1379,
                'code' => '140113000',
                'name' => 'Licuan-Baay',
                'old_name' => 'Licuan',
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            379 => 
            array (
                'id' => 1380,
                'code' => '140114000',
                'name' => 'Luba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            380 => 
            array (
                'id' => 1381,
                'code' => '140115000',
                'name' => 'Malibcong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            381 => 
            array (
                'id' => 1382,
                'code' => '140116000',
                'name' => 'Manabo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            382 => 
            array (
                'id' => 1383,
                'code' => '140117000',
                'name' => 'Peñarrubia',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            383 => 
            array (
                'id' => 1384,
                'code' => '140118000',
                'name' => 'Pidigan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            384 => 
            array (
                'id' => 1385,
                'code' => '140119000',
                'name' => 'Pilar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            385 => 
            array (
                'id' => 1386,
                'code' => '140120000',
                'name' => 'Sallapadan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            386 => 
            array (
                'id' => 1387,
                'code' => '140121000',
                'name' => 'San Isidro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            387 => 
            array (
                'id' => 1388,
                'code' => '140122000',
                'name' => 'San Juan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            388 => 
            array (
                'id' => 1389,
                'code' => '140123000',
                'name' => 'San Quintin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            389 => 
            array (
                'id' => 1390,
                'code' => '140124000',
                'name' => 'Tayum',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            390 => 
            array (
                'id' => 1391,
                'code' => '140125000',
                'name' => 'Tineg',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            391 => 
            array (
                'id' => 1392,
                'code' => '140126000',
                'name' => 'Tubo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            392 => 
            array (
                'id' => 1393,
                'code' => '140127000',
                'name' => 'Villaviciosa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '140100000',
            ),
            393 => 
            array (
                'id' => 1394,
                'code' => '141101000',
                'name' => 'Atok',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            394 => 
            array (
                'id' => 1395,
                'code' => '141102000',
                'name' => 'City of Baguio',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '141100000',
            ),
            395 => 
            array (
                'id' => 1396,
                'code' => '141103000',
                'name' => 'Bakun',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            396 => 
            array (
                'id' => 1397,
                'code' => '141104000',
                'name' => 'Bokod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            397 => 
            array (
                'id' => 1398,
                'code' => '141105000',
                'name' => 'Buguias',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            398 => 
            array (
                'id' => 1399,
                'code' => '141106000',
                'name' => 'Itogon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            399 => 
            array (
                'id' => 1400,
                'code' => '141107000',
                'name' => 'Kabayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            400 => 
            array (
                'id' => 1401,
                'code' => '141108000',
                'name' => 'Kapangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            401 => 
            array (
                'id' => 1402,
                'code' => '141109000',
                'name' => 'Kibungan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            402 => 
            array (
                'id' => 1403,
                'code' => '141110000',
                'name' => 'La Trinidad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            403 => 
            array (
                'id' => 1404,
                'code' => '141111000',
                'name' => 'Mankayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            404 => 
            array (
                'id' => 1405,
                'code' => '141112000',
                'name' => 'Sablan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            405 => 
            array (
                'id' => 1406,
                'code' => '141113000',
                'name' => 'Tuba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            406 => 
            array (
                'id' => 1407,
                'code' => '141114000',
                'name' => 'Tublay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '141100000',
            ),
            407 => 
            array (
                'id' => 1408,
                'code' => '142701000',
                'name' => 'Banaue',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            408 => 
            array (
                'id' => 1409,
                'code' => '142702000',
                'name' => 'Hungduan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            409 => 
            array (
                'id' => 1410,
                'code' => '142703000',
                'name' => 'Kiangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            410 => 
            array (
                'id' => 1411,
                'code' => '142704000',
                'name' => 'Lagawe',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            411 => 
            array (
                'id' => 1412,
                'code' => '142705000',
                'name' => 'Lamut',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            412 => 
            array (
                'id' => 1413,
                'code' => '142706000',
                'name' => 'Mayoyao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            413 => 
            array (
                'id' => 1414,
                'code' => '142707000',
                'name' => 'Alfonso Lista',
                'old_name' => 'Potia',
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            414 => 
            array (
                'id' => 1415,
                'code' => '142708000',
                'name' => 'Aguinaldo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            415 => 
            array (
                'id' => 1416,
                'code' => '142709000',
                'name' => 'Hingyon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            416 => 
            array (
                'id' => 1417,
                'code' => '142710000',
                'name' => 'Tinoc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            417 => 
            array (
                'id' => 1418,
                'code' => '142711000',
                'name' => 'Asipulo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '142700000',
            ),
            418 => 
            array (
                'id' => 1419,
                'code' => '143201000',
                'name' => 'Balbalan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '143200000',
            ),
            419 => 
            array (
                'id' => 1420,
                'code' => '143206000',
                'name' => 'Lubuagan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '143200000',
            ),
            420 => 
            array (
                'id' => 1421,
                'code' => '143208000',
                'name' => 'Pasil',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '143200000',
            ),
            421 => 
            array (
                'id' => 1422,
                'code' => '143209000',
                'name' => 'Pinukpuk',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '143200000',
            ),
            422 => 
            array (
                'id' => 1423,
                'code' => '143211000',
                'name' => 'Rizal',
                'old_name' => 'Liwan',
                'is_municipality' => 1,
                'province_code' => '143200000',
            ),
            423 => 
            array (
                'id' => 1424,
                'code' => '143213000',
                'name' => 'City of Tabuk',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '143200000',
            ),
            424 => 
            array (
                'id' => 1425,
                'code' => '143214000',
                'name' => 'Tanudan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '143200000',
            ),
            425 => 
            array (
                'id' => 1426,
                'code' => '143215000',
                'name' => 'Tinglayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '143200000',
            ),
            426 => 
            array (
                'id' => 1427,
                'code' => '144401000',
                'name' => 'Barlig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            427 => 
            array (
                'id' => 1428,
                'code' => '144402000',
                'name' => 'Bauko',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            428 => 
            array (
                'id' => 1429,
                'code' => '144403000',
                'name' => 'Besao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            429 => 
            array (
                'id' => 1430,
                'code' => '144404000',
                'name' => 'Bontoc',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            430 => 
            array (
                'id' => 1431,
                'code' => '144405000',
                'name' => 'Natonin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            431 => 
            array (
                'id' => 1432,
                'code' => '144406000',
                'name' => 'Paracelis',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            432 => 
            array (
                'id' => 1433,
                'code' => '144407000',
                'name' => 'Sabangan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            433 => 
            array (
                'id' => 1434,
                'code' => '144408000',
                'name' => 'Sadanga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            434 => 
            array (
                'id' => 1435,
                'code' => '144409000',
                'name' => 'Sagada',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            435 => 
            array (
                'id' => 1436,
                'code' => '144410000',
                'name' => 'Tadian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '144400000',
            ),
            436 => 
            array (
                'id' => 1437,
                'code' => '148101000',
                'name' => 'Calanasan',
                'old_name' => 'Bayag',
                'is_municipality' => 1,
                'province_code' => '148100000',
            ),
            437 => 
            array (
                'id' => 1438,
                'code' => '148102000',
                'name' => 'Conner',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '148100000',
            ),
            438 => 
            array (
                'id' => 1439,
                'code' => '148103000',
                'name' => 'Flora',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '148100000',
            ),
            439 => 
            array (
                'id' => 1440,
                'code' => '148104000',
                'name' => 'Kabugao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '148100000',
            ),
            440 => 
            array (
                'id' => 1441,
                'code' => '148105000',
                'name' => 'Luna',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '148100000',
            ),
            441 => 
            array (
                'id' => 1442,
                'code' => '148106000',
                'name' => 'Pudtol',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '148100000',
            ),
            442 => 
            array (
                'id' => 1443,
                'code' => '148107000',
                'name' => 'Santa Marcela',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '148100000',
            ),
            443 => 
            array (
                'id' => 1444,
                'code' => '150702000',
                'name' => 'City of Lamitan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '150700000',
            ),
            444 => 
            array (
                'id' => 1445,
                'code' => '150703000',
                'name' => 'Lantawan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            445 => 
            array (
                'id' => 1446,
                'code' => '150704000',
                'name' => 'Maluso',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            446 => 
            array (
                'id' => 1447,
                'code' => '150705000',
                'name' => 'Sumisip',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            447 => 
            array (
                'id' => 1448,
                'code' => '150706000',
                'name' => 'Tipo-Tipo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            448 => 
            array (
                'id' => 1449,
                'code' => '150707000',
                'name' => 'Tuburan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            449 => 
            array (
                'id' => 1450,
                'code' => '150708000',
                'name' => 'Akbar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            450 => 
            array (
                'id' => 1451,
                'code' => '150709000',
                'name' => 'Al-Barka',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            451 => 
            array (
                'id' => 1452,
                'code' => '150710000',
                'name' => 'Hadji Mohammad Ajul',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            452 => 
            array (
                'id' => 1453,
                'code' => '150711000',
                'name' => 'Ungkaya Pukan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            453 => 
            array (
                'id' => 1454,
                'code' => '150712000',
                'name' => 'Hadji Muhtamad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            454 => 
            array (
                'id' => 1455,
                'code' => '150713000',
                'name' => 'Tabuan-Lasa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '150700000',
            ),
            455 => 
            array (
                'id' => 1456,
                'code' => '153601000',
                'name' => 'Bacolod-Kalawi',
                'old_name' => 'Bacolod Grande',
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            456 => 
            array (
                'id' => 1457,
                'code' => '153602000',
                'name' => 'Balabagan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            457 => 
            array (
                'id' => 1458,
                'code' => '153603000',
                'name' => 'Balindong',
                'old_name' => 'Watu',
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            458 => 
            array (
                'id' => 1459,
                'code' => '153604000',
                'name' => 'Bayang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            459 => 
            array (
                'id' => 1460,
                'code' => '153605000',
                'name' => 'Binidayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            460 => 
            array (
                'id' => 1461,
                'code' => '153606000',
                'name' => 'Bubong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            461 => 
            array (
                'id' => 1462,
                'code' => '153607000',
                'name' => 'Butig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            462 => 
            array (
                'id' => 1463,
                'code' => '153609000',
                'name' => 'Ganassi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            463 => 
            array (
                'id' => 1464,
                'code' => '153610000',
                'name' => 'Kapai',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            464 => 
            array (
                'id' => 1465,
                'code' => '153611000',
                'name' => 'Lumba-Bayabao',
                'old_name' => 'Maguing',
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            465 => 
            array (
                'id' => 1466,
                'code' => '153612000',
                'name' => 'Lumbatan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            466 => 
            array (
                'id' => 1467,
                'code' => '153613000',
                'name' => 'Madalum',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            467 => 
            array (
                'id' => 1468,
                'code' => '153614000',
                'name' => 'Madamba',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            468 => 
            array (
                'id' => 1469,
                'code' => '153615000',
                'name' => 'Malabang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            469 => 
            array (
                'id' => 1470,
                'code' => '153616000',
                'name' => 'Marantao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            470 => 
            array (
                'id' => 1471,
                'code' => '153617000',
                'name' => 'City of Marawi',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '153600000',
            ),
            471 => 
            array (
                'id' => 1472,
                'code' => '153618000',
                'name' => 'Masiu',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            472 => 
            array (
                'id' => 1473,
                'code' => '153619000',
                'name' => 'Mulondo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            473 => 
            array (
                'id' => 1474,
                'code' => '153620000',
                'name' => 'Pagayawan',
                'old_name' => 'Tatarikan',
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            474 => 
            array (
                'id' => 1475,
                'code' => '153621000',
                'name' => 'Piagapo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            475 => 
            array (
                'id' => 1476,
                'code' => '153622000',
                'name' => 'Poona Bayabao',
                'old_name' => 'Gata',
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            476 => 
            array (
                'id' => 1477,
                'code' => '153623000',
                'name' => 'Pualas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            477 => 
            array (
                'id' => 1478,
                'code' => '153624000',
                'name' => 'Ditsaan-Ramain',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            478 => 
            array (
                'id' => 1479,
                'code' => '153625000',
                'name' => 'Saguiaran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            479 => 
            array (
                'id' => 1480,
                'code' => '153626000',
                'name' => 'Tamparan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            480 => 
            array (
                'id' => 1481,
                'code' => '153627000',
                'name' => 'Taraka',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            481 => 
            array (
                'id' => 1482,
                'code' => '153628000',
                'name' => 'Tubaran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            482 => 
            array (
                'id' => 1483,
                'code' => '153629000',
                'name' => 'Tugaya',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            483 => 
            array (
                'id' => 1484,
                'code' => '153630000',
                'name' => 'Wao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            484 => 
            array (
                'id' => 1485,
                'code' => '153631000',
                'name' => 'Marogong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            485 => 
            array (
                'id' => 1486,
                'code' => '153632000',
                'name' => 'Calanogas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            486 => 
            array (
                'id' => 1487,
                'code' => '153633000',
                'name' => 'Buadiposo-Buntong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            487 => 
            array (
                'id' => 1488,
                'code' => '153634000',
                'name' => 'Maguing',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            488 => 
            array (
                'id' => 1489,
                'code' => '153635000',
                'name' => 'Picong',
                'old_name' => 'Sultan Gumander',
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            489 => 
            array (
                'id' => 1490,
                'code' => '153636000',
                'name' => 'Lumbayanague',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            490 => 
            array (
                'id' => 1491,
                'code' => '153637000',
                'name' => 'Amai Manabilang',
                'old_name' => 'Bumbaran',
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            491 => 
            array (
                'id' => 1492,
                'code' => '153638000',
                'name' => 'Tagoloan Ii',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            492 => 
            array (
                'id' => 1493,
                'code' => '153639000',
                'name' => 'Kapatagan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            493 => 
            array (
                'id' => 1494,
                'code' => '153640000',
                'name' => 'Sultan Dumalondong',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            494 => 
            array (
                'id' => 1495,
                'code' => '153641000',
                'name' => 'Lumbaca-Unayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153600000',
            ),
            495 => 
            array (
                'id' => 1496,
                'code' => '153801000',
                'name' => 'Ampatuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            496 => 
            array (
                'id' => 1497,
                'code' => '153802000',
                'name' => 'Buldon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            497 => 
            array (
                'id' => 1498,
                'code' => '153803000',
                'name' => 'Buluan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            498 => 
            array (
                'id' => 1499,
                'code' => '153805000',
                'name' => 'Datu Paglas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            499 => 
            array (
                'id' => 1500,
                'code' => '153806000',
                'name' => 'Datu Piang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
        ));
        \DB::table('location_municipalities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'code' => '153807000',
                'name' => 'Datu Odin Sinsuat',
                'old_name' => 'Dinaig',
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            1 => 
            array (
                'id' => 1502,
                'code' => '153808000',
                'name' => 'Shariff Aguak',
                'old_name' => 'Maganoy',
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            2 => 
            array (
                'id' => 1503,
                'code' => '153809000',
                'name' => 'Matanog',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            3 => 
            array (
                'id' => 1504,
                'code' => '153810000',
                'name' => 'Pagalungan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            4 => 
            array (
                'id' => 1505,
                'code' => '153811000',
                'name' => 'Parang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            5 => 
            array (
                'id' => 1506,
                'code' => '153812000',
                'name' => 'Sultan Kudarat',
                'old_name' => 'Nuling',
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            6 => 
            array (
                'id' => 1507,
                'code' => '153813000',
                'name' => 'Sultan Sa Barongis',
                'old_name' => 'Lambayong',
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            7 => 
            array (
                'id' => 1508,
                'code' => '153814000',
                'name' => 'Kabuntalan',
                'old_name' => 'Tumbao',
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            8 => 
            array (
                'id' => 1509,
                'code' => '153815000',
                'name' => 'Upi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            9 => 
            array (
                'id' => 1510,
                'code' => '153816000',
                'name' => 'Talayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            10 => 
            array (
                'id' => 1511,
                'code' => '153817000',
                'name' => 'South Upi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            11 => 
            array (
                'id' => 1512,
                'code' => '153818000',
                'name' => 'Barira',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            12 => 
            array (
                'id' => 1513,
                'code' => '153819000',
                'name' => 'Gen. s.k. Pendatun',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            13 => 
            array (
                'id' => 1514,
                'code' => '153820000',
                'name' => 'Mamasapano',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            14 => 
            array (
                'id' => 1515,
                'code' => '153821000',
                'name' => 'Talitay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            15 => 
            array (
                'id' => 1516,
                'code' => '153822000',
                'name' => 'Pagagawan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            16 => 
            array (
                'id' => 1517,
                'code' => '153823000',
                'name' => 'Paglat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            17 => 
            array (
                'id' => 1518,
                'code' => '153824000',
                'name' => 'Sultan Mastura',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            18 => 
            array (
                'id' => 1519,
                'code' => '153825000',
                'name' => 'Guindulungan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            19 => 
            array (
                'id' => 1520,
                'code' => '153826000',
                'name' => 'Datu Saudi-Ampatuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            20 => 
            array (
                'id' => 1521,
                'code' => '153827000',
                'name' => 'Datu Unsay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            21 => 
            array (
                'id' => 1522,
                'code' => '153828000',
                'name' => 'Datu Abdullah Sangki',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            22 => 
            array (
                'id' => 1523,
                'code' => '153829000',
                'name' => 'Rajah Buayan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            23 => 
            array (
                'id' => 1524,
                'code' => '153830000',
                'name' => 'Datu Blah T. Sinsuat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            24 => 
            array (
                'id' => 1525,
                'code' => '153831000',
                'name' => 'Datu Anggal Midtimbang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            25 => 
            array (
                'id' => 1526,
                'code' => '153832000',
                'name' => 'Mangudadatu',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            26 => 
            array (
                'id' => 1527,
                'code' => '153833000',
                'name' => 'Pandag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            27 => 
            array (
                'id' => 1528,
                'code' => '153834000',
                'name' => 'Northern Kabuntalan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            28 => 
            array (
                'id' => 1529,
                'code' => '153835000',
                'name' => 'Datu Hoffer Ampatuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            29 => 
            array (
                'id' => 1530,
                'code' => '153836000',
                'name' => 'Datu Salibo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            30 => 
            array (
                'id' => 1531,
                'code' => '153837000',
                'name' => 'Shariff Saydona Mustapha',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '153800000',
            ),
            31 => 
            array (
                'id' => 1532,
                'code' => '156601000',
                'name' => 'Indanan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            32 => 
            array (
                'id' => 1533,
                'code' => '156602000',
                'name' => 'Jolo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            33 => 
            array (
                'id' => 1534,
                'code' => '156603000',
                'name' => 'Kalingalan Caluang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            34 => 
            array (
                'id' => 1535,
                'code' => '156604000',
                'name' => 'Luuk',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            35 => 
            array (
                'id' => 1536,
                'code' => '156605000',
                'name' => 'Maimbung',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            36 => 
            array (
                'id' => 1537,
                'code' => '156606000',
                'name' => 'Hadji Panglima Tahil',
                'old_name' => 'Marunggas',
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            37 => 
            array (
                'id' => 1538,
                'code' => '156607000',
                'name' => 'Old Panamao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            38 => 
            array (
                'id' => 1539,
                'code' => '156608000',
                'name' => 'Pangutaran',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            39 => 
            array (
                'id' => 1540,
                'code' => '156609000',
                'name' => 'Parang',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            40 => 
            array (
                'id' => 1541,
                'code' => '156610000',
                'name' => 'Pata',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            41 => 
            array (
                'id' => 1542,
                'code' => '156611000',
                'name' => 'Patikul',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            42 => 
            array (
                'id' => 1543,
                'code' => '156612000',
                'name' => 'Siasi',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            43 => 
            array (
                'id' => 1544,
                'code' => '156613000',
                'name' => 'Talipao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            44 => 
            array (
                'id' => 1545,
                'code' => '156614000',
                'name' => 'Tapul',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            45 => 
            array (
                'id' => 1546,
                'code' => '156615000',
                'name' => 'Tongkil',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            46 => 
            array (
                'id' => 1547,
                'code' => '156616000',
                'name' => 'Panglima Estino',
                'old_name' => 'New Panamao',
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            47 => 
            array (
                'id' => 1548,
                'code' => '156617000',
                'name' => 'Lugus',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            48 => 
            array (
                'id' => 1549,
                'code' => '156618000',
                'name' => 'Pandami',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            49 => 
            array (
                'id' => 1550,
                'code' => '156619000',
                'name' => 'Omar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '156600000',
            ),
            50 => 
            array (
                'id' => 1551,
                'code' => '157001000',
                'name' => 'Panglima Sugala',
                'old_name' => 'Balimbing',
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            51 => 
            array (
                'id' => 1552,
                'code' => '157002000',
                'name' => 'Bongao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            52 => 
            array (
                'id' => 1553,
                'code' => '157003000',
                'name' => 'Mapun',
                'old_name' => 'Cagayan de Tawi-Tawi',
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            53 => 
            array (
                'id' => 1554,
                'code' => '157004000',
                'name' => 'Simunul',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            54 => 
            array (
                'id' => 1555,
                'code' => '157005000',
                'name' => 'Sitangkai',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            55 => 
            array (
                'id' => 1556,
                'code' => '157006000',
                'name' => 'South Ubian',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            56 => 
            array (
                'id' => 1557,
                'code' => '157007000',
                'name' => 'Tandubas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            57 => 
            array (
                'id' => 1558,
                'code' => '157008000',
                'name' => 'Turtle Islands',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            58 => 
            array (
                'id' => 1559,
                'code' => '157009000',
                'name' => 'Languyan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            59 => 
            array (
                'id' => 1560,
                'code' => '157010000',
                'name' => 'Sapa-Sapa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            60 => 
            array (
                'id' => 1561,
                'code' => '157011000',
                'name' => 'Sibutu',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '157000000',
            ),
            61 => 
            array (
                'id' => 1562,
                'code' => '160201000',
                'name' => 'Buenavista',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            62 => 
            array (
                'id' => 1563,
                'code' => '160202000',
                'name' => 'City of Butuan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '160200000',
            ),
            63 => 
            array (
                'id' => 1564,
                'code' => '160203000',
                'name' => 'City of Cabadbaran',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '160200000',
            ),
            64 => 
            array (
                'id' => 1565,
                'code' => '160204000',
                'name' => 'Carmen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            65 => 
            array (
                'id' => 1566,
                'code' => '160205000',
                'name' => 'Jabonga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            66 => 
            array (
                'id' => 1567,
                'code' => '160206000',
                'name' => 'Kitcharao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            67 => 
            array (
                'id' => 1568,
                'code' => '160207000',
                'name' => 'Las Nieves',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            68 => 
            array (
                'id' => 1569,
                'code' => '160208000',
                'name' => 'Magallanes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            69 => 
            array (
                'id' => 1570,
                'code' => '160209000',
                'name' => 'Nasipit',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            70 => 
            array (
                'id' => 1571,
                'code' => '160210000',
                'name' => 'Santiago',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            71 => 
            array (
                'id' => 1572,
                'code' => '160211000',
                'name' => 'Tubay',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            72 => 
            array (
                'id' => 1573,
                'code' => '160212000',
                'name' => 'Remedios T. Romualdez',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160200000',
            ),
            73 => 
            array (
                'id' => 1574,
                'code' => '160301000',
                'name' => 'City of Bayugan',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '160300000',
            ),
            74 => 
            array (
                'id' => 1575,
                'code' => '160302000',
                'name' => 'Bunawan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            75 => 
            array (
                'id' => 1576,
                'code' => '160303000',
                'name' => 'Esperanza',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            76 => 
            array (
                'id' => 1577,
                'code' => '160304000',
                'name' => 'La Paz',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            77 => 
            array (
                'id' => 1578,
                'code' => '160305000',
                'name' => 'Loreto',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            78 => 
            array (
                'id' => 1579,
                'code' => '160306000',
                'name' => 'Prosperidad',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            79 => 
            array (
                'id' => 1580,
                'code' => '160307000',
                'name' => 'Rosario',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            80 => 
            array (
                'id' => 1581,
                'code' => '160308000',
                'name' => 'San Francisco',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            81 => 
            array (
                'id' => 1582,
                'code' => '160309000',
                'name' => 'San Luis',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            82 => 
            array (
                'id' => 1583,
                'code' => '160310000',
                'name' => 'Santa Josefa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            83 => 
            array (
                'id' => 1584,
                'code' => '160311000',
                'name' => 'Talacogon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            84 => 
            array (
                'id' => 1585,
                'code' => '160312000',
                'name' => 'Trento',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            85 => 
            array (
                'id' => 1586,
                'code' => '160313000',
                'name' => 'Veruela',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            86 => 
            array (
                'id' => 1587,
                'code' => '160314000',
                'name' => 'Sibagat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '160300000',
            ),
            87 => 
            array (
                'id' => 1588,
                'code' => '166701000',
                'name' => 'Alegria',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            88 => 
            array (
                'id' => 1589,
                'code' => '166702000',
                'name' => 'Bacuag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            89 => 
            array (
                'id' => 1590,
                'code' => '166704000',
                'name' => 'Burgos',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            90 => 
            array (
                'id' => 1591,
                'code' => '166706000',
                'name' => 'Claver',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            91 => 
            array (
                'id' => 1592,
                'code' => '166707000',
                'name' => 'Dapa',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            92 => 
            array (
                'id' => 1593,
                'code' => '166708000',
                'name' => 'Del Carmen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            93 => 
            array (
                'id' => 1594,
                'code' => '166710000',
                'name' => 'General Luna',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            94 => 
            array (
                'id' => 1595,
                'code' => '166711000',
                'name' => 'Gigaquit',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            95 => 
            array (
                'id' => 1596,
                'code' => '166714000',
                'name' => 'Mainit',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            96 => 
            array (
                'id' => 1597,
                'code' => '166715000',
                'name' => 'Malimono',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            97 => 
            array (
                'id' => 1598,
                'code' => '166716000',
                'name' => 'Pilar',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            98 => 
            array (
                'id' => 1599,
                'code' => '166717000',
                'name' => 'Placer',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            99 => 
            array (
                'id' => 1600,
                'code' => '166718000',
                'name' => 'San Benito',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            100 => 
            array (
                'id' => 1601,
                'code' => '166719000',
                'name' => 'San Francisco',
                'old_name' => 'Anao-aon',
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            101 => 
            array (
                'id' => 1602,
                'code' => '166720000',
                'name' => 'San Isidro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            102 => 
            array (
                'id' => 1603,
                'code' => '166721000',
                'name' => 'Santa Monica',
                'old_name' => 'Sapao',
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            103 => 
            array (
                'id' => 1604,
                'code' => '166722000',
                'name' => 'Sison',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            104 => 
            array (
                'id' => 1605,
                'code' => '166723000',
                'name' => 'Socorro',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            105 => 
            array (
                'id' => 1606,
                'code' => '166724000',
                'name' => 'City of Surigao',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '166700000',
            ),
            106 => 
            array (
                'id' => 1607,
                'code' => '166725000',
                'name' => 'Tagana-An',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            107 => 
            array (
                'id' => 1608,
                'code' => '166727000',
                'name' => 'Tubod',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166700000',
            ),
            108 => 
            array (
                'id' => 1609,
                'code' => '166801000',
                'name' => 'Barobo',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            109 => 
            array (
                'id' => 1610,
                'code' => '166802000',
                'name' => 'Bayabas',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            110 => 
            array (
                'id' => 1611,
                'code' => '166803000',
                'name' => 'City of Bislig',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '166800000',
            ),
            111 => 
            array (
                'id' => 1612,
                'code' => '166804000',
                'name' => 'Cagwait',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            112 => 
            array (
                'id' => 1613,
                'code' => '166805000',
                'name' => 'Cantilan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            113 => 
            array (
                'id' => 1614,
                'code' => '166806000',
                'name' => 'Carmen',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            114 => 
            array (
                'id' => 1615,
                'code' => '166807000',
                'name' => 'Carrascal',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            115 => 
            array (
                'id' => 1616,
                'code' => '166808000',
                'name' => 'Cortes',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            116 => 
            array (
                'id' => 1617,
                'code' => '166809000',
                'name' => 'Hinatuan',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            117 => 
            array (
                'id' => 1618,
                'code' => '166810000',
                'name' => 'Lanuza',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            118 => 
            array (
                'id' => 1619,
                'code' => '166811000',
                'name' => 'Lianga',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            119 => 
            array (
                'id' => 1620,
                'code' => '166812000',
                'name' => 'Lingig',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            120 => 
            array (
                'id' => 1621,
                'code' => '166813000',
                'name' => 'Madrid',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            121 => 
            array (
                'id' => 1622,
                'code' => '166814000',
                'name' => 'Marihatag',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            122 => 
            array (
                'id' => 1623,
                'code' => '166815000',
                'name' => 'San Agustin',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            123 => 
            array (
                'id' => 1624,
                'code' => '166816000',
                'name' => 'San Miguel',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            124 => 
            array (
                'id' => 1625,
                'code' => '166817000',
                'name' => 'Tagbina',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            125 => 
            array (
                'id' => 1626,
                'code' => '166818000',
                'name' => 'Tago',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '166800000',
            ),
            126 => 
            array (
                'id' => 1627,
                'code' => '166819000',
                'name' => 'City of Tandag',
                'old_name' => NULL,
                'is_municipality' => 0,
                'province_code' => '166800000',
            ),
            127 => 
            array (
                'id' => 1628,
                'code' => '168501000',
                'name' => 'Basilisa',
                'old_name' => 'Rizal',
                'is_municipality' => 1,
                'province_code' => '168500000',
            ),
            128 => 
            array (
                'id' => 1629,
                'code' => '168502000',
                'name' => 'Cagdianao',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '168500000',
            ),
            129 => 
            array (
                'id' => 1630,
                'code' => '168503000',
                'name' => 'Dinagat',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '168500000',
            ),
            130 => 
            array (
                'id' => 1631,
                'code' => '168504000',
                'name' => 'Libjo',
                'old_name' => 'Albor',
                'is_municipality' => 1,
                'province_code' => '168500000',
            ),
            131 => 
            array (
                'id' => 1632,
                'code' => '168505000',
                'name' => 'Loreto',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '168500000',
            ),
            132 => 
            array (
                'id' => 1633,
                'code' => '168506000',
                'name' => 'San Jose',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '168500000',
            ),
            133 => 
            array (
                'id' => 1634,
                'code' => '168507000',
                'name' => 'Tubajon',
                'old_name' => NULL,
                'is_municipality' => 1,
                'province_code' => '168500000',
            ),
        ));
        
        
    }
}