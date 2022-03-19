<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{

    // public function notify_admins()
    // {
    //     $notifications = Notification::orderby('created_at','DESC')->get();
    //     return view('admin-dashbord.noti.noti')->with('noti',$notifications);
    // }
     public function notifyAgencies()
    {
        $notifications = Notification::orderby('created_at','DESC')->get();
        return view('agency-dashbord.noti')->with('notifications',$notifications);
    }


    public function create()
    {
        return view('admin-dashbord.noti.add-noti');
    }

    public function store(Request $request)
    {
        $id = Auth::id();
        $notifications = Notification::create([
        'title'  => $request->title ,
		'agency_id'  =>$id,
		'description'  => $request->description ,
		'from' =>1,
		'admin_id'  => 1,
        ]);
        return  redirect('agency/notifications')->with('success', 'The Notificatin has sended');
    }


    public function show(notification $notification)
    {
        $id = Auth::id();
        dd($id);
    }

    public function edit(notification $notification)
    {
        //
    }


    public function update(Request $request, notification $notification)
    {
        //
    }


    public function destroy(notification $notification)
    {
        //
    }
}
