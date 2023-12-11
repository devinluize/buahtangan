<?php

use App\Http\Controllers\albumControler;
use App\Http\Controllers\plantController;
use App\Http\Controllers\subController;
use App\Http\Controllers\Usercontroller;
use App\Models\Album;
use App\Models\Course;
use App\Models\Step;
use App\Models\Sub;
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
    // $sub = Sub::all();
    $sub = Sub::where('user_id',1)->get();
    $course = Course::all();
    // foreach($sub as $s){
    //     dump($s->user->username);
    // }
    return view('home',compact('sub','course'));
})->name('home');

//Schedule
Route::get('/schedule', function () {
    return view('schedule');
});
Route::post('/add_plant_data',[plantController::class,'add_plant'])->name('add_plant_data');
Route::get('/add_course_sub/{id}',[subController::class,'add_sub'])->name('add_course_sub');
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
Route::get('/my/{id}', function ($id) {
    return view('add-photo-album',compact('id'));
})->name('foto');
Route::post('/my-plants-add-album-action/{id}',[albumControler::class,'add_photo'])->name('add_photo');

Route::get('/my-photo-add-album/{id}', function ($id) {
    return view('add-photo-album',compact('id'));
});
Route::get('/my-plants/plant-detail/{id}',function ($id) {
    // dd($id);
    return view('plant-detail',compact('id'));
})->name('pindah');

Route::get('/my-plants/plant-detail/view-album/{id}', function ($id) {
    // $album = Album::where('user_id',1)->get();
    $album = Album::where('user_id', 1)
              ->where('plant_id', $id)
              ->get();
    // dd($album);
    return view('view-album',compact('album','id'));
})->name('my-plants/plant-detail/view-album');
//Courses
Route::get('/my-course', function(){
    return view('my-course');
});

Route::get('/course-detail', function(){
    $steps = Step::all();
    return view('course-detail',['steps' => $steps]);
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
