<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Course::create([
            'course_name'=>'Roma Tomato',
            'course_detail'=>'Roma Tomato'
        ]);
        Course::create([
            'course_name'=>'Lady Slipper Orchid',
            'course_detail'=>'Lady Slipper Orchid'
        ]);
        Course::create([
            'course_name'=>'Spinach',
            'course_detail'=>'Spinach'
        ]);
    }
}
