<?php

namespace App\Http\Controllers;

use Agency;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    //admin controller
    public function allCars()
    {
        $cars = Car::all();
        return view('admin-dashbord.car')->with('cars', $cars);
    }

    public function carSetting()
    {
        return view('admin-dashbord.cars-sttings');
    }

    //agency controller
    public function carsAgency()
    {
        $id = Auth::id();
        $cars = Car::where('agency_id', $id)->get();
        return view('agency-dashbord.cars')->with('cars', $cars);
    }


    public function create()
    {
        $brand = Brand::all();
        $color = Color::all();
        $country = Country::all();
        $type = Type::all();
        return view('agency-dashbord.add-car')->with('brands', $brand)
            ->with('colors', $color)
            ->with('types', $type)
            ->with('countries', $country);
    }


    public function store(Request $request)
    {
        $car = Car::create([
            'name' => $request->name,
            'agency_id' => Auth::id(), //
            'brand_id' => $request->barnd,
            'color_id' => $request->color,
            'type_id' => $request->type,
            'country_id' => $request->country,
            'running_volume' => $request->running_volume,
            'cylinders' => $request->cylinders,
            'horsepower' => $request->horsepower,
            'consumption' => $request->consumption,
            'price' => $request->consumption,
            'views' => 55,
            'avilable' => 1,
        ]);

        $image = array();
        if ($file = $request->file('image')) {
            foreach ($file as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $uploade_path = 'uploads/car_photos/';
                $image_url = $uploade_path . $image_full_name;
                $file->move($uploade_path, $image_full_name);
                $image[] = $image_url;
            }
            Photo::create([
                'url' => implode('|', $image),
                'car_id' => $car->id,
            ]);
        }
        return redirect('/agency/cars')->with('success', 'the car has added');
    }


    public function unactive($id, Request $req)
    {

        Car::where('id', $id)->update([
            'avilable' => $req->unactive
        ]);
        return redirect()->back()->with('success', 'the avilableety of car has toggeld');
    }

    public function showAllCars()
    {
        $cars = Car::all();
        $photos = Photo::all();
        return view('main_UI.allProduct')->with('cars', $cars)->with('photos', $photos);
    }
    public function showDetails($id)
    {
        $car = Car::where('id', $id)->first();
        // $carID = $car->id;
        $photos = Photo::where('car_id', $id)->first();
        // dd($photos->url);
        return view('main_UI.car')->with('car', $car)->with('photos',$photos);
    }


    public function showAllCarsAgency($id)
    {
        $agencyCar = Car::where('agency_id', $id)->get();
        // $carid =$agencyCar->id;
        $photoCar = Photo::all();
        // dd($agencyCar);
        return view('main_UI.agencyProfile')->with('agencyCar',$agencyCar)->with('photoCar', $photoCar);
    }
   
    public function destroy( $id)
    {
        $car = Car::where('id',$id)->first();
        $car->forceDelete();
        return redirect()->back()->with('success', 'the car was deleted');
    }
}
