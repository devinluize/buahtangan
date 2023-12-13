<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username'=>'devin',
            'email'=>'devin.saan@binus.ac.id',
            'password'=>Hash::make('password123'),
            'phonenumber'=>'081212892521'

        ]);
        User::create([
            'username'=>'vije',
            'email'=>'vije@gmail.com',
            'password'=>Hash::make('password123'),
            'phonenumber'=>'081212892521'
        ]);
        //
    }
}
