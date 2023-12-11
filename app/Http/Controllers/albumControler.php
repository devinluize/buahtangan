<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class albumControler extends Controller
{
    public function add_photo(Request $requesrt,$id){
        $uploadedFile = $requesrt->file('plant_picture');
        $filename = uniqid() . '_' . $uploadedFile->getClientOriginalName();
        $picturePath = $uploadedFile->storeAs('assets', $filename, 'public');
        Album::create([
            'user_id'=>1,
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
