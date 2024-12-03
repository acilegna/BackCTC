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
            'title' => 'Pintar',
            'description' => 'Pintar baños',
            'date' => now(),
            'location' => 'Guadalajara',
            'responsible' => 'Luis',
            'likes' => 0
        ]);
    }
}
