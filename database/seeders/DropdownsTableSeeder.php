<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DropdownsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('dropdowns')->delete();
        
        \DB::table('dropdowns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'n/a',
                'classification' => 'n/a',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Personal Services',
                'classification' => 'Expenditure',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'PS',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Maintenance And Other Operating Expenses',
                'classification' => 'Expenditure',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'MOOE',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Special Purposes',
                'classification' => 'Expenditure',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'SP',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Capital Outlay',
                'classification' => 'Expenditure',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'CO',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Semester',
                'classification' => 'Term Type',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Trimester',
                'classification' => 'Term Type',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Quarter Term',
                'classification' => 'Term Type',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Transmutation',
                'classification' => 'Grading System',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Percent Grading',
                'classification' => 'Grading System',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Per Grade',
                'classification' => 'Grading System',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Engineering And Technology',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Life Sciences',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Physical And Earth Sciences',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Agricultural And Veterinary Science',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Medical And Health Sciences',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Science / Mathematics Teaching',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'IT / ICT',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Mathematicians, Actuaries And Statisticians',
                'classification' => 'S&T Categories',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Public',
                'classification' => 'Class',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Private',
                'classification' => 'Class',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Ra 7687',
                'classification' => 'Category',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Merit',
                'classification' => 'Category',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Jlap',
                'classification' => 'Category',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'Junior Level Assistance Program',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Ra 10612',
                'classification' => 'Category',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'Junior Level Science Scholarships',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Great-m',
                'classification' => 'Category',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'Grants for Educational Assistance on Technology and Science Teaching Courses in Mindanao',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Ra 7687 Sophomore',
                'classification' => 'Category',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'RA 7687 Scholarship Program for Sophomore students',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Jlss - Ra 7687',
                'classification' => 'Category',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'Junior Level Science Scholarships',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Jlss-merit',
                'classification' => 'Category',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'Junior Level Science Scholarships',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Good Standing',
                'classification' => 'Status',
                'type' => 'ongoing',
                'color' => 'green',
                'others' => 'n/a',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Suspended',
                'classification' => 'Status',
                'type' => 'ongoing',
                'color' => 'red',
                'others' => 'n/a',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Leave Of Absence',
                'classification' => 'Status',
                'type' => 'ongoing',
                'color' => 'yellow',
                'others' => 'n/a',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'No Report',
                'classification' => 'Status',
                'type' => 'ongoing',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Graduated',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Terminated',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Non-compliance',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Withdrawn',
                'classification' => 'Status',
                'type' => 'n/a',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Stipend',
                'classification' => 'Benefit Type',
                'type' => 'Monthly',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Book Allowance',
                'classification' => 'Benefit Type',
                'type' => 'Term',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Tuition',
                'classification' => 'Benefit Type',
                'type' => 'Term',
                'color' => 'gray',
                'others' => 'n/a',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Clothing',
                'classification' => 'Benefit Type',
                'type' => 'One-time',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Transportation',
                'classification' => 'Benefit Type',
                'type' => 'Academic Year',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Thesis',
                'classification' => 'Benefit Type',
                'type' => 'One-time',
                'color' => 'n/a',
                'others' => 'n/a',
            ),
        ));
        
        
    }
}