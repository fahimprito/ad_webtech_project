<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //home
    function home(){return view('public.home');}
    function vendorhome(){return view('vendor.home');}
    function adminhome(){return view('admin.a_home');}
    function customerhome(){return view('customer.c_home');}
    //about
    function about(){return view('public.about');}
    function vendorabout(){return view('vendor.vendor-about');}


    



}
