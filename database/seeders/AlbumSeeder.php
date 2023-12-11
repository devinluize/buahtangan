<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Album::create([
        //     'user_id'=>1,
        //     'plant_id'=>rand(1,5),
        //     'album_name'=>'Bayem kedua',
        //     'album_desc'=>'bayem 2',
        //     'path'=>'assets/spinach.png'
        // ]);
        // Album::create([
        //     'user_id'=>1,
        //     'plant_id'=>rand(1,5),
        //     'album_name'=>'Bayem 3',
        //     'album_desc'=>'bayem 3',
        //     'path'=>'assets/spinach.png'
        // ]);
        $choices = ['assets/spinach.png', 'assets/tomato.png', 'assets/beansprout.png'];


        for($i=0;$i<5;$i++){
    $randomChoice = $choices[array_rand($choices)];
    Album::create([
        'user_id'=>1,
        'plant_id'=>1,
        'album_name'=>'Bayem ke '.$i,
        'album_desc'=>'bayem '.$i,
        'path'=>$randomChoice
    ]);
}

for($i=1;$i<=5;$i++){
    $randomChoice = $choices[array_rand($choices)];
    Album::create([
        'user_id'=>1,
        'plant_id'=>2,
        'album_name'=>'Bayem ke '.$i,
        'album_desc'=>'bayem '.$i,
        'path'=>$randomChoice
    ]);
}
for($i=1;$i<=5;$i++){
    $randomChoice = $choices[array_rand($choices)];
    Album::create([
        'user_id'=>1,
        'plant_id'=>5,
        'album_name'=>'Bayem ke '.$i,
        'album_desc'=>'bayem '.$i,
        'path'=>$randomChoice
    ]);
}
for($i=1;$i<=5;$i++){
    $randomChoice = $choices[array_rand($choices)];
    Album::create([
        'user_id'=>1,
        'plant_id'=>4,
        'album_name'=>'Bayem ke '.$i,
        'album_desc'=>'bayem '.$i,
        'path'=>$randomChoice
    ]);
}
for($i=1;$i<=5;$i++){
    $randomChoice = $choices[array_rand($choices)];
    Album::create([
        'user_id'=>1,
        'plant_id'=>3,
        'album_name'=>'Bayem ke '.$i,
        'album_desc'=>'bayem '.$i,
        'path'=>$randomChoice
    ]);
}
    }
}
