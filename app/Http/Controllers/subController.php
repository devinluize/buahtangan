<?php

namespace App\Http\Controllers;

use App\Models\Sub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class subController extends Controller
{
    //
    public function add_sub($id){
        Sub::create([
            'user_id'=>Auth::id(),
            'course_id'=>$id,
            'step'=>1
        ]);
        return redirect()->intended('/');
    }
}
