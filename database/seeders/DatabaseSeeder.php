<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Schedule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PlantSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(StepSeeder::class);
        $this->call(SubSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(ScheduleSeeder::class);




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
