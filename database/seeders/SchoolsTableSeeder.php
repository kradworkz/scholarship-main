<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'id' => 4,
                'deped_id' => '123456489',
                'name' => 'ateneo de zamboanga university',
                'is_jlss' => 1,
                'is_undergrad' => 1,
                'class_id' => 21,
                'term_id' => 8,
                'grading_id' => 10,
                'created_at' => '2022-01-03 11:33:27',
                'updated_at' => '2022-01-03 11:33:27',
            ),
            1 => 
            array (
                'id' => 5,
                'deped_id' => '321546789',
                'name' => 'western mindanao state university',
                'is_jlss' => 1,
                'is_undergrad' => 1,
                'class_id' => 20,
                'term_id' => 6,
                'grading_id' => 10,
                'created_at' => '2022-01-03 11:38:30',
                'updated_at' => '2022-01-03 11:38:30',
            ),
        ));
        
        
    }
}