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
        Album::create([
            'user_id'=>1,
            'plant_id'=>rand(1,5),
            'album_name'=>'Bayem kedua',
            'album_desc'=>'bayem 2',
            'path'=>'assets/spinach.png'
        ]);
        Album::create([
            'user_id'=>1,
            'plant_id'=>rand(1,5),
            'album_name'=>'Bayem 3',
            'album_desc'=>'bayem 3',
            'path'=>'assets/spinach.png'
        ]);
        $choices = ['assets/spinach.png', 'assets/tomato.png', 'assets/beansprout.png'];


for($i=0;$i<20;$i++){
    $randomChoice = $choices[array_rand($choices)];
    Album::create([
        'user_id'=>1,
        'plant_id'=>rand(1,5),
        'album_name'=>'Bayem ke'.$i,
        'album_desc'=>'bayem '.$i,
        'path'=>$randomChoice
    ]);
}
    }
}
