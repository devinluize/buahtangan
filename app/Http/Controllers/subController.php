<?php

namespace App\Http\Controllers;

use App\Models\Sub;
use Illuminate\Http\Request;

class subController extends Controller
{
    //
    public function add_sub($id){
        Sub::create([
            'user_id'=>1,
            'course_id'=>$id,
            'step'=>1
        ]);
        return redirect()->intended('/');
    }
}
