<?php

namespace Database\Seeders;

use App\Models\Sub;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sub::create([
            'user_id'=>1,
            'course_id'=>2,
            'step'=>1
        ]);
        Sub::create([
            'user_id'=>1,
            'course_id'=>1,
            'step'=>3
        ]);
        Sub::create([
            'user_id'=>1,
            'course_id'=>1,
            'step'=>6
        ]);
        Sub::create([
            'user_id'=>1,
            'course_id'=>1,
            'step'=>2
        ]);
        Sub::create([
            'user_id'=>1,
            'course_id'=>1,
            'step'=>4
        ]);
    }
}
