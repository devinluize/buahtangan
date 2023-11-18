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
        $user_data = new User();
        $user_data->name=$request->username;
        $user_data->email=$request->email;
        $user_data->password=$request->password;
        $user_data->save();
        return redirect()->route('login');
    }
}
