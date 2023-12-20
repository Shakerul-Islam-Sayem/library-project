<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (\App\Models\User::count() == 0) {
            // Create 5 admin users without using Faker or a loop
            \App\Models\User::create([
                'name' => 'Sayem',
                'username' => 'sayem',
                'password' => bcrypt('Sayem123'),
            ]);

            \App\Models\User::create([
                'name' => 'Imon',
                'username' => 'Imon',
                'password' => bcrypt('Imon123'),
            ]);

            \App\Models\User::create([
                'name' => 'Ashis',
                'username' => 'ashis',
                'password' => bcrypt('Ashis123'),
            ]);

            \App\Models\User::create([
                'name' => 'Mufiqur',
                'username' => 'mufiqur',
                'password' => bcrypt('Mufiqur123'),
            ]);

            \App\Models\User::create([
                'name' => 'Opu',
                'username' => 'Opu',
                'password' => bcrypt('Opu123'),
            ]);
        }
    }
}
