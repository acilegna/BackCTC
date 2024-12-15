<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $password = '12345';

        DB::table('tasks')->insert([


            "name" => "angie",
            "email" => "acilegna.airam88@gmail.com",
            "password" => "123ideft",
            "password_confirmation" => "123ideft"

        ]);
    }
}