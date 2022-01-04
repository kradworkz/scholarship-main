<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolCampusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('school_campuses')->delete();
        
        \DB::table('school_campuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'campus' => 'salvador',
                'address' => 'la purisima st.',
                'is_main' => 1,
                'has_jhs' => 0,
                'has_shs' => 1,
                'has_tertiary' => 1,
                'municipality_code' => '097332000',
                'school_id' => 4,
                'created_at' => '2022-01-03 11:33:27',
                'updated_at' => '2022-01-03 11:33:27',
            ),
            1 => 
            array (
                'id' => 2,
                'campus' => 'kreutz',
                'address' => 'tumaga',
                'is_main' => 0,
                'has_jhs' => 1,
                'has_shs' => 0,
                'has_tertiary' => 0,
                'municipality_code' => '097332000',
                'school_id' => 4,
                'created_at' => '2022-01-03 11:34:08',
                'updated_at' => '2022-01-03 11:34:08',
            ),
            2 => 
            array (
                'id' => 3,
                'campus' => 'Main',
                'address' => 'Normal Road, Baliwasan',
                'is_main' => 0,
                'has_jhs' => 0,
                'has_shs' => 0,
                'has_tertiary' => 0,
                'municipality_code' => '097332000',
                'school_id' => 5,
                'created_at' => '2022-01-03 11:38:30',
                'updated_at' => '2022-01-03 13:14:40',
            ),
            3 => 
            array (
                'id' => 4,
                'campus' => 'poblacion',
                'address' => 'poblacion',
                'is_main' => 0,
                'has_jhs' => 0,
                'has_shs' => 0,
                'has_tertiary' => 0,
                'municipality_code' => '098301000',
                'school_id' => 5,
                'created_at' => '2022-01-03 11:39:47',
                'updated_at' => '2022-01-03 11:39:47',
            ),
            4 => 
            array (
                'id' => 5,
                'campus' => 'aurora',
                'address' => 'japan bldg, anhs, balide',
                'is_main' => 0,
                'has_jhs' => 0,
                'has_shs' => 0,
                'has_tertiary' => 0,
                'municipality_code' => '097302000',
                'school_id' => 5,
                'created_at' => '2022-01-03 11:40:32',
                'updated_at' => '2022-01-03 11:40:32',
            ),
            5 => 
            array (
                'id' => 6,
                'campus' => 'curuan',
                'address' => 'curuan',
                'is_main' => 0,
                'has_jhs' => 0,
                'has_shs' => 0,
                'has_tertiary' => 0,
                'municipality_code' => '097332000',
                'school_id' => 5,
                'created_at' => '2022-01-03 11:41:06',
                'updated_at' => '2022-01-03 11:41:06',
            ),
            6 => 
            array (
                'id' => 7,
                'campus' => 'diplahan',
                'address' => 'purok rizal, poblacion',
                'is_main' => 0,
                'has_jhs' => 0,
                'has_shs' => 0,
                'has_tertiary' => 0,
                'municipality_code' => '098303000',
                'school_id' => 5,
                'created_at' => '2022-01-03 11:41:44',
                'updated_at' => '2022-01-03 11:41:44',
            ),
            7 => 
            array (
                'id' => 8,
                'campus' => 'ipil',
                'address' => 'ipil heights',
                'is_main' => 0,
                'has_jhs' => 0,
                'has_shs' => 0,
                'has_tertiary' => 0,
                'municipality_code' => '098305000',
                'school_id' => 5,
                'created_at' => '2022-01-03 11:52:55',
                'updated_at' => '2022-01-03 11:52:55',
            ),
            8 => 
            array (
                'id' => 9,
                'campus' => 'molave',
                'address' => 'mabini st. maluloy-on',
                'is_main' => 0,
                'has_jhs' => 0,
                'has_shs' => 0,
                'has_tertiary' => 0,
                'municipality_code' => '097319000',
                'school_id' => 5,
                'created_at' => '2022-01-03 13:34:04',
                'updated_at' => '2022-01-03 13:34:04',
            ),
        ));
        
        
    }
}