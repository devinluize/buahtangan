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
            'path'=>'assets/tomato.png',
            'course_name'=>'Roma Tomato',
            'course_detail'=>'Roma Tomato',
            'course_dif'=>"Beginner",
            'course_type'=>'Vegetable',
            'course_place'=>'Versatile',
        ]);
        Course::create([
            'path'=>'assets/orchid.png',
            'course_name'=>'Lady Slipper Orchid',
            'course_detail'=>'Lady Slipper Orchid',
            'course_dif'=>"Advanced",
            'course_type'=>'Flower',
            'course_place'=>'Indoor',
        ]);
        Course::create([
            'path'=>'assets/spinach.png',

            'course_name'=>'Spinach',
            'course_detail'=>'Spinach',
            'course_dif'=>"Begiiner",
            'course_type'=>'Fruits',
            'course_place'=>'Outdoor',
        ]);
        Course::create([
            'path'=>'assets/beansprout.png',
            'course_name'=>'Beansprout',
            'course_detail'=>'Soil and plant basics',
            'course_dif'=>"Beginer",
            'course_type'=>'Fruits',
            'course_place'=>'Outdoor',
        ]


    );
    Course::create([
        'path'=>'assets/spinach.png',
        'course_name' => 'Sunflower Basics',
        'course_detail' => 'Introduction to sunflowers and their growth',
        'course_dif' => 'Beginner',
        'course_type' => 'Flower',
        'course_place' => 'Outdoor',
    ]);

Course::create([
    'path'=>'assets/tomato.png',

        'course_name' => 'Tomato Cultivation',
        'course_detail' => 'Growing tomatoes from seed to harvest',
        'course_dif' => 'Advanced',
        'course_type' => 'Vegetable',
        'course_place' => 'Indoor',
    ]);

Course::create([
    'path'=>'assets/orchid.png',

        'course_name' => 'Apple Tree Care',
        'course_detail' => 'Maintaining and pruning apple trees',
        'course_dif' => 'Advanced',
        'course_type' => 'Fruits',
        'course_place' => 'Outdoor',
    ]);

Course::create([
    'path'=>'assets/beansprout.png',
        'course_name' => 'Tulip Planting Guide',
        'course_detail' => 'Planting and caring for tulip flowers',
        'course_dif' => 'Beginner',
        'course_type' => 'Flower',
        'course_place' => 'Outdoor',
    ]);

Course::create([
    'path'=>'assets/tomato.png',

        'course_name' => 'Herb Garden Basics',
        'course_detail' => 'Starting and maintaining a herb garden',
        'course_dif' => 'Beginner',
        'course_type' => 'Vegetable',
        'course_place' => 'Indoor',
    ]);

Course::create([
    'path'=>'assets/spinach.png',

        'course_name' => 'Strawberry Farming Techniques',
        'course_detail' => 'Best practices for cultivating strawberries',
        'course_dif' => 'Advanced',
        'course_type' => 'Fruits',
        'course_place' => 'Outdoor',
    ]);

Course::create([
    'path'=>'assets/orchid.png',

        'course_name' => 'Rose Care Masterclass',
        'course_detail' => 'In-depth guide to caring for rose plants',
        'course_dif' => 'Advanced',
        'course_type' => 'Flower',
        'course_place' => 'Outdoor',
    ]);

Course::create([
    'path'=>'assets/tomato.png',

        'course_name' => 'Cactus and Succulent Basics',
        'course_detail' => 'Introduction to growing cacti and succulents',
        'course_dif' => 'Beginner',
        'course_type' => 'Flower',
        'course_place' => 'Indoor',
    ]);

Course::create([
    'path'=>'assets/spinach.png',

        'course_name' => 'Banana Plantation 101',
        'course_detail' => 'Tips for successful banana cultivation',
        'course_dif' => 'Advanced',
        'course_type' => 'Fruits',
        'course_place' => 'Outdoor',
    ]);
Course::create([
    'path'=>'assets/tomato.png',
        'course_name' => 'Indoor Herb Gardening',
        'course_detail' => 'Growing herbs indoors for year-round',
        'course_dif' => 'Beginner',
        'course_type' => 'Vegetable',
        'course_place' => 'Indoor',
    ]);

    }
}
