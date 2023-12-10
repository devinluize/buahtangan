<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    //
    public function login(Request $request){
        // Auth::attempt('username')
        // dd($request);
        $credentials = $request->only('email','password');
        // if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            dd(Auth::id());
        // }
        // dd("dasdsa");
    }
    public function register_action(Request $request){
        // $data = $request->validate([
        //     'email' => 'required',
        //     'username' => 'required|unique:tb_user',
        //     'password' => 'required',
        //     'password_confirm' => 'required|same:password',
        // ]);
        // dd("dasdasdas");
        $user_data = new User();
        $user_data->username=$request->username;
        $user_data->email=$request->email;
        $user_data->password=Hash::make($request->password);
        $user_data->save();
        $credentials = $request->only('email', 'password');
        // Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->intended('/');

        // Auth::attempt(['username' => $request->username, 'password' => $request->password])
        // return redirect()->route('home');
        // ->withSuccess('You have successfully registered & logged in!');
        // dd($user_data);
        // if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // $request->session()->regenerate();
            // return redirect()->back();
        // }
// dd($credentials);
        return view('register');
    }
    // public function register_action(){
    //     return view('register');
    // }
}
