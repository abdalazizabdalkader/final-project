<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Car;
// use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgencyController extends Controller
{



    public function index()
    {

        $id = Auth::id();
        $agency = Agency::all();
        // dd($agency);
        // dd($agency->name);
        return view('admin-dashbord.agency')->with('agencies', $agency);
    }


    public function create()
    {
        // $subscriptions=Subscription::all();
        return view('admin-dashbord.add-agency');
    }

    public function store(Request $request)
    {
        $request->validate([
            //   'imageFile' => 'required',
              'url' => 'requiredj',
              'url.*' => 'mimes:peg,jpg,png|max:2048'
            ]);
        //save photo in folder
        $file_extension = $request->photo->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'uploads/agency';
        $request -> photo -> move($path,$file_name);


        $sub_moth = $request->subscription_month;
        $agency = Agency::create([
            'name' => $request->name,
            'email'=> $request->email,
            'photo' => $file_name,
            'password' => Hash::make($request->password),
            'subscription_month' => $request->subscription_month,
            'end_subscription' => date('Y-m-d', strtotime(date("Y/m/d"). ' + '.$sub_moth.' month'))
           ]);
        return redirect('admin/Agencies')->with('success', 'The Agency has added');
    }

    public function unactive($id , Request $req)
    {
        Agency::where('id', $id)->update([
            'avilable'=> $req ->unactive
        ]);
        return redirect()->back()->with('success', 'the avilableety of car has toggeld');
    }

    public function test()
    {
        // $date =date("Y/m/d");
        // $new = date('Y-m-d', strtotime(date("Y/m/d"). ' + 6 month'));
        // dd($new);
        // $sub_moth = 1;
        // dd(date('Y-m-d', strtotime(date("Y/m/d"). ' + '.$sub_moth.' month')));
    }
    public function show(Agency $agency)
    {
        //
    }


    public function edit( )
    {
       $id = Auth::id();
       $agency = Agency::where('id',$id)->first();
        // dd($agency->name);
          return view('agency-dashbord.edit')->with('agency',$agency);

    }


    public function update(Request $request, $id)
    {
        // dd($request->name);
        // $agency = Agency::where($id)->first();
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required',
            // 'photo' =>'required',
            'password' =>'required',
        ]);
        if ($request->has('photo')) {
            $file_extension = $request->photo->getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $path = 'uploads/agency';
            $request -> photo -> move($path,$file_name);
            $newAgenct=Agency::where('id', $id)->update([
                'photo' => $file_name,
            ]);
        }
        Agency::where('id', $id)->update([
            'name' => $request-> name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password)
        ]);
        // $agency->name = $request->name;
        // $agency->email = $request->email;
        // $agency->password = Hash::make($request->password);
        // $agency->save();
        return back()->with('success', 'The data has updated');
    }

    // public function showAllCarsAgency($id)
    // {
    //     $agencyCar = Car::where('agency_id', $id)->get;
    //     dd($agencyCar);
    //     // return view('main_UI.agencyProfile')->$agencyCar;
    // }



}
