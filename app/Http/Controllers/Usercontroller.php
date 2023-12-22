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
        $infolog=[
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($infolog)){
            return redirect()->intended(route('home'));
        }
        else{
            return redirect()->intended(route('login'));

        }
    }
    public function update_profile(Request $request){
        // $request->validate([
        //     'email' => 'required',
        //     'username' => 'required|unique:tb_user',
        //     'password' => 'required',
        //     'password_confirm' => 'required|same:password',
        // ]);
        $uploadedFile = $request->file('plant_picture');
        $filename = uniqid() . '_' . $uploadedFile->getClientOriginalName();
        // dd($filename);
        $picturePath = $uploadedFile->storeAs('assets', $filename, 'public');
        $user = User::find(Auth::id());
        $user->username=$request->username;
        $user->phonenumber=$request->phone;
        $user->email=$request->email;
        $user->path=$picturePath;
        if(!$request->password==NULL){
            $user->password=$request->password;
        }
        $user->save();
        return redirect()->intended('/profile');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function register_action(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'username' => 'required|unique:tb_user',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'phonenumber' => 'required|numeric',
        ]);
        
        $user_data = new User();
        $user_data->username = $data['username'];
        $user_data->email = $data['email'];
        $user_data->password = Hash::make($data['password']);
        $user_data->phonenumber = $data['phonenumber'];
        $user_data->save();
        
        // Redirect to login or home page
        return redirect()->route('login');
    }
    
    // public function register_action(){
    //     return view('register');
    // }
}
