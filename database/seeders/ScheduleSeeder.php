<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $birthdate = Carbon::now()->subYears(rand(18, 60))->subDays(rand(0, 365))->format('Y-m-d');
            $birthDateTime = $birthdate . ' ' . rand(0, 23) . ':' . rand(0, 59) . ':' . rand(0, 59);
            $birthDateTime2 = $birthdate . ' ' . rand(0, 23) . ':' . rand(0, 59) . ':' . rand(0, 59);
            Schedule::create([
                // Other user fields...
                'user_id'=>1,

                'start' => $birthDateTime,
                'end'=>$birthDateTime2,
                'sch_name'=>'watering the plant',
                'sch_desc'=>'Beansprout needs your care, water the plant now.'
            ]);
            Schedule::create([
                // Other user fields...
                'start' => $birthDateTime,
                'user_id'=>1,

                'end'=>$birthDateTime2,
                'sch_name'=>'fertilize the plant',
                'sch_desc'=>'Beansprout needs your care, fertilize the plant now.'
            ]);
            Schedule::create([
                'user_id'=>1,
                // Other user fields...
                'start' => $birthDateTime,
                'end'=>$birthDateTime2,
                'sch_name'=>'fertilize the plant',
                'sch_desc'=>'Beansprout needs your care, fertilize the plant now.'
            ]);
            Schedule::create([
                // Other user fields...
                'user_id'=>1,

                'start' => $birthDateTime,
                'end'=>$birthDateTime2,
                'sch_name'=>'fertilize the plant',
                'sch_desc'=>'Beansprout needs your care, fertilize the plant now.'
            ]);
            Schedule::create([
                // Other user fields...
                'user_id'=>1,
                'start' => $birthDateTime,
                'end'=>$birthDateTime2,
                'sch_name'=>'fertilize the plant',
                'sch_desc'=>'Beansprout needs your care, fertilize the plant now.'
            ]);

    }
}
