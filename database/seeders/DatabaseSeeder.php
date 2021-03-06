<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'email' => 'admin@dost.com',
            'password' => bcrypt('dost9ict'),
            'role' => 'Administrator',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
        ]);

        \DB::table('user_profiles')->insert([
            'firstname' => 'Ra-ouf',
            'lastname' => 'Jumli',
            'middlename' => 'Indanan',
            'gender' => 'Male',
            'user_id' => 1,
            'mobile' => '09557650803',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->call(AgenciesTableSeeder::class);
        $this->call(DropdownsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(LocationRegionsTableSeeder::class);
        $this->call(LocationProvincesTableSeeder::class);
        $this->call(LocationMunicipalitiesTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(SchoolCampusesTableSeeder::class);
    }
}
