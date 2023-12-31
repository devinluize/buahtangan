<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class plantController extends Controller
{
    public function add_plant(Request $request){
        // dd("Dasdasdas");
        // $request->validate([
        //     'plant_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);
        $uploadedFile = $request->file('plant_picture');
        $coverExtension = $uploadedFile->getClientOriginalExtension();
        $fileNameCover = $request->name . '.' . $coverExtension;
        // dd($fileNameCover);
        // $type_id
        $selectedPlantSpecies = $request->input('plantSpecies');
        // dd($selectedPlantSpecies);
        $filename = uniqid() . '_' . $uploadedFile->getClientOriginalName();
        $picturePath = $uploadedFile->storeAs('assets', $filename, 'public');
        Plant::create([
            'path'=>$picturePath,
            'user_id'=>Auth::id(),
            'plant_name'=>$request->plant_name,
            'plant_desc'=>$request->plant_desc,
            'plant_type_id'=>$selectedPlantSpecies
        ]);
        return redirect()->intended('/my-plants');

    }
    public function my_plant(){
        $pohon = Plant::where('user_id',Auth::id())->get();
        // foreach($pohon as $tree){
        //     dump($tree->type->type_name);
        // }
        // dd("s");
        return view('my-plants',compact('pohon'));
    }
    //
}
