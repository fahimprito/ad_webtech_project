<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\transport;
use App\Models\customer;


class admin_controller extends Controller
{
   
    function adminprofile()
    {
        $id = session()->get('id');
        $admin = [];
        $admin = admin::where('id', '=', $id)->first();
        return view('admin.a_profile')->with('admin', $admin);
    }
     function transport_informastion()
    {
        $data = transport::all();
        $data = transport::paginate(15);

        return view('admin.transport_informastion')->with('data', $data);
    }

    function admin_addtransport()
    {
        return view('admin.admin_addtransport');
    }
    function transportSubmitted( Request $request )
    {
        $validate = $request->validate([
            "transport_id"=>'required',
            "transport_name"=>"required|regex:/^[A-Z a-z,.-]+$/i",
            "transport_type"=>'required',
            "route_from"=>'required',
            "route_to"=>"required",
            "transport_date"=>'required'
        ],
        [
            'name.regex' => 'Name cannot contain special characters or numbers.'
        ]
        );

        $user = new transport();
        $user->transport_id = $request->transport_id;
        $user->transport_name = $request->transport_name;
        $user->transport_type = $request->transport_type;
        $user->route_from = $request->route_from;
        $user->route_to = $request->route_to;
        $user->transport_date = $request->transport_date;
        $res = $user->save();

        if($res)
        {
            return back()->with ('success','New transport added successfully');
        }
        else
        {
            return back()->with ('fail','Somethihng is wrong!');
        }

    }

     function user_informastion()
    {
        $data = customer::all();
        $data = customer::paginate(15);

        return view('admin.user_informastion')->with('data', $data);
    }
}
