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
            'path' => 'assets/tomato.png',
            'course_name' => 'Roma Tomato',
            'course_detail' => 'Roma Tomato',
            'course_dif' => "Beginner",
            'course_type' => 'Vegetable',
            'course_place' => 'Versatile',
            'scientific_name' => 'Solanum lycopersicum' // Scientific name for Roma Tomato
        ]);

        Course::create([
            'path' => 'assets/orchid.png',
            'course_name' => 'Lady Slipper Orchid',
            'course_detail' => 'Lady Slipper Orchid',
            'course_dif' => "Advanced",
            'course_type' => 'Flower',
            'course_place' => 'Indoor',
            'scientific_name' => 'Cypripedioideae' // Scientific name for Lady Slipper Orchid
        ]);

        Course::create([
            'path' => 'assets/spinach.png',
            'course_name' => 'Spinach',
            'course_detail' => 'Spinach',
            'course_dif' => "Beginner",
            'course_type' => 'Fruits',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Spinacia oleracea' // Scientific name for Spinach
        ]);

        Course::create([
            'path' => 'assets/beansprout.png',
            'course_name' => 'Beansprout',
            'course_detail' => 'Soil and plant basics',
            'course_dif' => "Beginner",
            'course_type' => 'Fruits',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Various' // Scientific names vary for different beansprout varieties
        ]);

        Course::create([
            'path' => 'assets/spinach.png',
            'course_name' => 'Sunflower Basics',
            'course_detail' => 'Introduction to sunflowers and their growth',
            'course_dif' => 'Beginner',
            'course_type' => 'Flower',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Helianthus annuus' // Scientific name for Sunflower
        ]);

        // Add similar 'scientific_name' entries for other courses accordingly...


        Course::create([
            'path' => 'assets/tomato.png',
            'course_name' => 'Tomato Cultivation',
            'course_detail' => 'Growing tomatoes from seed to harvest',
            'course_dif' => 'Advanced',
            'course_type' => 'Vegetable',
            'course_place' => 'Indoor',
            'scientific_name' => 'Solanum lycopersicum' // Scientific name for Tomato
        ]);

        Course::create([
            'path' => 'assets/orchid.png',
            'course_name' => 'Apple Tree Care',
            'course_detail' => 'Maintaining and pruning apple trees',
            'course_dif' => 'Advanced',
            'course_type' => 'Fruits',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Malus domestica' // Scientific name for Apple Tree
        ]);

        Course::create([
            'path' => 'assets/beansprout.png',
            'course_name' => 'Tulip Planting Guide',
            'course_detail' => 'Planting and caring for tulip flowers',
            'course_dif' => 'Beginner',
            'course_type' => 'Flower',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Tulipa' // Scientific name for Tulip
        ]);

        // Continue updating the 'scientific_name' field for each course entry...


        Course::create([
            'path' => 'assets/tomato.png',
            'course_name' => 'Herb Garden Basics',
            'course_detail' => 'Starting and maintaining a herb garden',
            'course_dif' => 'Beginner',
            'course_type' => 'Vegetable',
            'course_place' => 'Indoor',
            'scientific_name' => 'Various' // Scientific names vary for different herbs
        ]);

        Course::create([
            'path' => 'assets/spinach.png',
            'course_name' => 'Strawberry Farming Techniques',
            'course_detail' => 'Best practices for cultivating strawberries',
            'course_dif' => 'Advanced',
            'course_type' => 'Fruits',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Fragaria × ananassa' // Scientific name for Strawberry
        ]);

        Course::create([
            'path' => 'assets/orchid.png',
            'course_name' => 'Rose Care Masterclass',
            'course_detail' => 'In-depth guide to caring for rose plants',
            'course_dif' => 'Advanced',
            'course_type' => 'Flower',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Rosa' // Scientific name for Rose
        ]);

        Course::create([
            'path' => 'assets/tomato.png',
            'course_name' => 'Cactus and Succulent Basics',
            'course_detail' => 'Introduction to growing cacti and succulents',
            'course_dif' => 'Beginner',
            'course_type' => 'Flower',
            'course_place' => 'Indoor',
            'scientific_name' => 'Various' // Scientific names vary for different cacti and succulents
        ]);

        Course::create([
            'path' => 'assets/spinach.png',
            'course_name' => 'Banana Plantation 101',
            'course_detail' => 'Tips for successful banana cultivation',
            'course_dif' => 'Advanced',
            'course_type' => 'Fruits',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Musa' // Scientific name for Banana
        ]);

        Course::create([
            'path' => 'assets/tomato.png',
            'course_name' => 'Indoor Herb Gardening',
            'course_detail' => 'Growing herbs indoors for year-round',
            'course_dif' => 'Beginner',
            'course_type' => 'Vegetable',
            'course_place' => 'Indoor',
            'scientific_name' => 'Various' // Scientific names vary for different herbs
        ]);
        Course::create([
            'path' => 'assets/tomato.png',
            'course_name' => 'Cherry Tomato Cultivation',
            'course_detail' => 'Growing cherry tomatoes indoors',
            'course_dif' => 'Intermediate',
            'course_type' => 'Vegetable',
            'course_place' => 'Indoor',
            'scientific_name' => 'Solanum lycopersicum var. cerasiforme' // Scientific name for Cherry Tomato
        ]);

        Course::create([
            'path' => 'assets/spinach.png',
            'course_name' => 'Popeye Spinach Diet',
            'course_detail' => 'Understanding the nutritional benefits of spinach',
            'course_dif' => 'Beginner',
            'course_type' => 'Vegetable',
            'course_place' => 'Indoor/Outdoor',
            'scientific_name' => 'Spinacia oleracea' // Scientific name for Spinach
        ]);

        Course::create([
            'path' => 'assets/orchid.png',
            'course_name' => 'Orchid Repotting Techniques',
            'course_detail' => 'Methods for repotting and caring for orchids',
            'course_dif' => 'Intermediate',
            'course_type' => 'Flower',
            'course_place' => 'Indoor',
            'scientific_name' => 'Orchidaceae' // Scientific name for Orchid
        ]);

        Course::create([
            'path' => 'assets/beansprout.png',
            'course_name' => 'Bean Sprouts in Asian Cuisine',
            'course_detail' => 'Using bean sprouts in various Asian dishes',
            'course_dif' => 'Beginner',
            'course_type' => 'Fruits',
            'course_place' => 'Indoor',
            'scientific_name' => 'Various' // Scientific names vary for different beansprout varieties
        ]);

        Course::create([
            'path' => 'assets/spinach.png',
            'course_name' => 'Organic Spinach Farming',
            'course_detail' => 'Practices for cultivating organic spinach',
            'course_dif' => 'Advanced',
            'course_type' => 'Vegetable',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Spinacia oleracea' // Scientific name for Spinach
        ]);

        Course::create([
            'path' => 'assets/tomato.png',
            'course_name' => 'Heirloom Tomato Varieties',
            'course_detail' => 'Exploring heirloom tomato diversity',
            'course_dif' => 'Intermediate',
            'course_type' => 'Vegetable',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Solanum lycopersicum' // Scientific name for Heirloom Tomato
        ]);

        Course::create([
            'path' => 'assets/orchid.png',
            'course_name' => 'Orchid Watering Guide',
            'course_detail' => 'Understanding the right watering techniques for orchids',
            'course_dif' => 'Beginner',
            'course_type' => 'Flower',
            'course_place' => 'Indoor',
            'scientific_name' => 'Orchidaceae' // Scientific name for Orchid
        ]);

        Course::create([
            'path' => 'assets/beansprout.png',
            'course_name' => 'Bean Sprouts Nutrition Facts',
            'course_detail' => 'Analyzing the nutritional content of bean sprouts',
            'course_dif' => 'Beginner',
            'course_type' => 'Fruits',
            'course_place' => 'Indoor',
            'scientific_name' => 'Various' // Scientific names vary for different beansprout varieties
        ]);

        Course::create([
            'path' => 'assets/tomato.png',
            'course_name' => 'Tomato Pest Control',
            'course_detail' => 'Methods to control pests in tomato cultivation',
            'course_dif' => 'Intermediate',
            'course_type' => 'Vegetable',
            'course_place' => 'Outdoor',
            'scientific_name' => 'Solanum lycopersicum' // Scientific name for Tomato
        ]);

        Course::create([
            'path' => 'assets/spinach.png',
            'course_name' => 'Hydroponic Spinach Farming',
            'course_detail' => 'Growing spinach using hydroponic systems',
            'course_dif' => 'Advanced',
            'course_type' => 'Vegetable',
            'course_place' => 'Indoor',
            'scientific_name' => 'Spinacia oleracea' // Scientific name for Spinach
        ]);

    }
}
