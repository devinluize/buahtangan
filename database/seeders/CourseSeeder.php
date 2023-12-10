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
            'course_detail'=>'Roma Tomato',
            'course_dif'=>"Beginner",
            'course_type'=>'Vegetable',
            'course_place'=>'Versatile',
        ]);
        Course::create([
            'course_name'=>'Lady Slipper Orchid',
            'course_detail'=>'Lady Slipper Orchid',
            'course_dif'=>"Advanced",
            'course_type'=>'Flower',
            'course_place'=>'Indoor',
        ]);
        Course::create([
            'course_name'=>'Spinach',
            'course_detail'=>'Spinach',
            'course_dif'=>"Begiiner",
            'course_type'=>'Fruits',
            'course_place'=>'Outdoor',
        ]);
    }
}
