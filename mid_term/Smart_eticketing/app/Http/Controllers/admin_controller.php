<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class admin_controller extends Controller
{
   
    function adminprofile()
    {
        $id = session()->get('id');
        $admin = [];
        $admin = admin::where('id', '=', $id)->first();
        return view('admin.a_profile')->with('admin', $admin);
    }
}
