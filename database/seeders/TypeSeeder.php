<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'type_name'=>"spinach",
        ]);
        Type::create([
            'type_name'=>"Roma Tomato",
        ]);
        Type::create([
            'type_name'=>"Lady Slipper Orchid",
        ]);
    }
}
