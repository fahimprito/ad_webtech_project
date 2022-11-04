<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transport;

class VendorController extends Controller
{
    //
    function addtransport()
    {
        return view('vendor.addtransport');
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



    function transport_list()
    {
        $data = transport::all();

        return view('vendor.transport_list')->with('data', $data);
    }
   
}
