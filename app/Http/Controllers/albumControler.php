<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class albumControler extends Controller
{
    public function add_photo(Request $requesrt,$id){
        $uploadedFile = $requesrt->file('plant_picture');
        $filename = uniqid() . '_' . $uploadedFile->getClientOriginalName();
        $picturePath = $uploadedFile->storeAs('assets', $filename, 'public');
        Album::create([
            'user_id'=>Auth::id(),
            'plant_id'=>$id,
            'album_name'=>$requesrt->plant_name,
            'album_desc'=>$requesrt->plant_desc,
            'path'=>$picturePath
        ]);
        // return redirect()->intended('/');
        return redirect()->route('my-plants/plant-detail/view-album',['id'=>$id]);


    }
    //
}
