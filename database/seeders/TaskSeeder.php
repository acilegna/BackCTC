<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'title' => 'Limpieza',
            'description' => 'limpiar parque',
            'date' => '2024-12-10',
            'location' => 'Guadalajara',
            'responsible' => 'Jose',
            'likes' => 2
        ]);
    }
}