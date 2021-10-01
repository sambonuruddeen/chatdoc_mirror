<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        
        DB::table('users')->insert([
          'name' => 'Admin user',
          'email' => 'admin@gmail.com',
          'role' => 'admin',
          'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
          'name' => 'Doctor User',
          'email' => 'doctor@gmail.com',
          'role' => 'doctor',
          'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Patient User',
            'email' => 'patient@gmail.com',
            'role' => 'patient',
            'password' => Hash::make('password'),
          ]);
    }
}
