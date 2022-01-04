<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        
        \DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bachelor in Mathematics Education',
                'created_at' => '2022-01-03 14:12:41',
                'updated_at' => '2022-01-03 14:12:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bachelor in Technology and Livelihood Education with Specialization in Information and Communications',
                'created_at' => '2022-01-03 14:13:18',
                'updated_at' => '2022-01-03 14:13:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Bachelor of Library and Information Science',
                'created_at' => '2022-01-03 14:13:27',
                'updated_at' => '2022-01-03 14:13:27',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'BS Aeronautical Engineering',
                'created_at' => '2022-01-03 14:14:11',
                'updated_at' => '2022-01-03 14:14:11',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'BS Aerospace Engineering',
                'created_at' => '2022-01-03 14:14:18',
                'updated_at' => '2022-01-03 14:14:18',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'BS Agribusiness',
                'created_at' => '2022-01-03 14:14:25',
                'updated_at' => '2022-01-03 14:14:25',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'BS Agribusiness Management',
                'created_at' => '2022-01-03 14:14:32',
                'updated_at' => '2022-01-03 14:14:32',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'BS Agribusiness Management and Entrepreneurship',
                'created_at' => '2022-01-03 14:14:39',
                'updated_at' => '2022-01-03 14:14:39',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'BS Agricultural and Biosystems Engineering',
                'created_at' => '2022-01-03 14:14:58',
                'updated_at' => '2022-01-03 14:14:58',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'BS Agricultural Biotechnology',
                'created_at' => '2022-01-03 14:15:19',
                'updated_at' => '2022-01-03 14:15:19',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'BS Agricultural Chemistry',
                'created_at' => '2022-01-03 14:15:26',
                'updated_at' => '2022-01-03 14:15:26',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'BS Agricultural Economics',
                'created_at' => '2022-01-03 14:16:24',
                'updated_at' => '2022-01-03 14:16:24',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'BS Agricultural Engineering',
                'created_at' => '2022-01-03 14:16:30',
                'updated_at' => '2022-01-03 14:16:30',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'BS Agricultural Technology',
                'created_at' => '2022-01-03 14:16:35',
                'updated_at' => '2022-01-03 14:16:35',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'BS Agriculture',
                'created_at' => '2022-01-03 14:16:41',
                'updated_at' => '2022-01-03 14:16:41',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'BS Animal Husbandry',
                'created_at' => '2022-01-03 14:16:49',
                'updated_at' => '2022-01-03 14:16:49',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'BS Animal Science',
                'created_at' => '2022-01-03 14:16:54',
                'updated_at' => '2022-01-03 14:16:54',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'BS Applied Mathematics',
                'created_at' => '2022-01-03 14:16:59',
                'updated_at' => '2022-01-03 14:16:59',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'BS Applied Mathematics major in Mathematical Finance',
                'created_at' => '2022-01-03 14:17:07',
                'updated_at' => '2022-01-03 14:17:07',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'BS Applied Physics',
                'created_at' => '2022-01-03 14:17:14',
                'updated_at' => '2022-01-03 14:17:14',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'BS Applied Physics with Applied Computer System',
                'created_at' => '2022-01-03 14:17:20',
                'updated_at' => '2022-01-03 14:17:20',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'BS Applied Physics with Materials Science and Engineering',
                'created_at' => '2022-01-03 14:17:28',
                'updated_at' => '2022-01-03 14:17:28',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'BS Architecture',
                'created_at' => '2022-01-03 14:17:43',
                'updated_at' => '2022-01-03 14:17:43',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'BS Astronomy',
                'created_at' => '2022-01-03 14:17:50',
                'updated_at' => '2022-01-03 14:17:50',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'BS Astronomy Technology',
                'created_at' => '2022-01-03 14:17:59',
                'updated_at' => '2022-01-03 14:17:59',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'BS Basic Medical Sciences',
                'created_at' => '2022-01-03 14:18:06',
                'updated_at' => '2022-01-03 14:18:06',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'BS Biochemistry',
                'created_at' => '2022-01-03 14:18:25',
                'updated_at' => '2022-01-03 14:18:25',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'BS Biology',
                'created_at' => '2022-01-03 14:18:31',
                'updated_at' => '2022-01-03 14:18:31',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'BS Biology for Teachers',
                'created_at' => '2022-01-03 14:18:38',
                'updated_at' => '2022-01-03 14:18:38',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'BS Biotechnology',
                'created_at' => '2022-01-03 14:18:43',
                'updated_at' => '2022-01-03 14:18:43',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'BS Ceramics Engineering',
                'created_at' => '2022-01-03 14:18:49',
                'updated_at' => '2022-01-03 14:18:49',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'BS Chemical Engineering',
                'created_at' => '2022-01-03 14:18:55',
                'updated_at' => '2022-01-03 14:18:55',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'BS Chemistry',
                'created_at' => '2022-01-03 14:19:00',
                'updated_at' => '2022-01-03 14:19:00',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'BS Chemistry for Teachers',
                'created_at' => '2022-01-03 14:19:07',
                'updated_at' => '2022-01-03 14:19:07',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'BS Chemistry with Applied Computer Systems',
                'created_at' => '2022-01-03 14:19:12',
                'updated_at' => '2022-01-03 14:19:12',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'BS Chemistry with Materials Science and Engineering',
                'created_at' => '2022-01-03 14:19:18',
                'updated_at' => '2022-01-03 14:19:18',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'BS Civil Engineering',
                'created_at' => '2022-01-03 14:19:33',
                'updated_at' => '2022-01-03 14:19:33',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'BS Clothing Technology',
                'created_at' => '2022-01-03 14:19:38',
                'updated_at' => '2022-01-03 14:19:38',
            ),
        ));
        
        
    }
}