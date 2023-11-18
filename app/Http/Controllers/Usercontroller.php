<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    public function register_action(Request $request){
        $request->validate([
            'email' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);
        $user = new User();
        $user->name=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return redirect()->route('login');
    }
}
