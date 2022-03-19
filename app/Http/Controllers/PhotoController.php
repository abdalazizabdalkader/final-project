<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        //get cars for agency
        // $id = Auth::id();
        // $cars =Car::where('agency_id', $id)->get();

        // $image = array();
        // if ($file = $request->file('image')) {
        //     foreach ($file as $file) {
        //         $image_name = md5(rand(1000, 10000));
        //         $ext = strtolower($file->getClientOriginalExtension());
        //         $image_full_name = $image_name . '.' . $ext;
        //         $uploade_path = 'uploads/car_photos/';
        //         $image_url = $uploade_path . $image_full_name;
        //         $file->move($uploade_path, $image_full_name);
        //         $image[] = $image_url;
        //     }
        //     Photo::insert([
        //         'url' => implode('|', $image),
        //         'car_id' => $request->car_id,
        //     ]);
            //   return back()->with('cars', $cars);
        }
    }
}
