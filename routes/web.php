<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Home
Route::get('/', function () {
    return view('home');
});

//Schedule
Route::get('/schedule', function () {
    return view('schedule');
});

//Explore
Route::get('/explore', function () {
    return view('explore');
});

//My Plants
Route::get('/my-plants', function(){
    return view('my-plants');
});

//My Courses
Route::get('/my-course', function(){
    return view('my-course');
});

//Profile
Route::get('/profile', function(){
    return view('profile');
});

//About Us
Route::get('/about-us', function(){
    return view('about-us');
});

//Authentication
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');