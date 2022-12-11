<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transport;

class Api_VendorController extends Controller
{
    //

    function transport_list()
    {
        $data = transport::all();
        return  $data;
    }

}
