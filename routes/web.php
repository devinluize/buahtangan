<?php

use App\Http\Controllers\plantController;
use App\Http\Controllers\Usercontroller;
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
})->name('home');

//Schedule
Route::get('/schedule', function () {
    return view('schedule');
});
Route::post('/add_plant_data',[plantController::class,'add_plant'])->name('add_plant_data');

//Explore
Route::get('/explore', function () {
    return view('explore');
});

//My Plants
// Route::get('/my-plants', function(){
//     return view('my-plants');
// });
Route::get('/my-plants',[plantController::class,'my_plant']);


Route::get('/my-plants-add-album', function () {
    return view('add-plant-album');
});

Route::get('/my-plants/plant-detail',function () {
    return view('plant-detail');
});

Route::get('/my-plants/plant-detail/view-album', function () {
    return view('view-album');
});

//Courses
Route::get('/my-course', function(){
    return view('my-course');
});

Route::get('/course-detail', function(){
    return view('course-detail');
});

Route::get('/course-detail/preparing-soil',function(){
    return view('preparing-soil');
});

Route::get('/course-detail/picture-plant',function(){
    return view('picture-plant');
});
//Profile
Route::get('/profile', function(){
    return view('profile');
});
Route::get('/edit-profile', function () {
    return view('edit-profile');
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

Route::post('/action_re',[Usercontroller::class,'register_action'])->name('register.action');
Route::post('/login',[Usercontroller::class,'login'])->name('login.action');

// Route::get('/asdads', function () {
//     return view('register');
// })->name('register');
