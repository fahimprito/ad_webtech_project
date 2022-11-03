<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\vendor;
use App\Models\customer;
use Illuminate\Support\Facades\Hash;
use session;

class UserController extends Controller
{

    public function registration(){
        return view('public.registration');
    }

    public function registrationSubmitted(Request $request){
        $validate = $request->validate([
            "userType"=>'required',
            "name"=>"required|regex:/^[A-Z a-z,.-]+$/i",
            "username"=>'required|min:5|max:50|unique:vendors|unique:customers|unique:admins',
            "email"=>'required|email|unique:vendors|unique:customers|unique:admins',
            "phone"=>"required|numeric|digits:10",
            "password"=>'required|min: 8',
            "c_password"=>'required|min: 8',
            "gender"=>'required',
            "dob"=>'required',
            "address"=>"required"
        ],
        [
            'name.regex' => 'Name cannot contain special characters or numbers.',
            'email.required'=>"Please Enter your email"]
        );

        if($request->userType=="admin"){$user = new admin();}
        elseif($request->userType=="vendor"){$user = new vendor();}
        elseif($request->userType=="customer"){$user = new customer();}
        
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email =$request->email;
        $user->phone = $request->phone;
        $user->password = hash::make($request->password);
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $res = $user->save();

        if($res)
        {
            return back()->with ('success','You have registered successfully');
        }
        else
        {
            return back()->with ('fail','Somethihng is wrong!');
        }


    }
    
    //login
    function Login()
    {
        return view('public.login');
    }

    public function loginSubmitted(Request $request)
    {
        $validate = $request->validate([
            "userType"=>'required',
            "email"=>'required | email',
            "password"=>'required | min:8'
        ],
        [
            'userType.required'=>"Please select a user",
            'email.required'=>"Please Enter your email",
            'password.required'=>"Please Enter your password"
        ]
        );

        if($request->userType=="admin"){$user=admin::where('email','=',$request->email)->first();}
        elseif($request->userType=="vendor"){$user=vendor::where('email','=',$request->email)->first();}
        elseif($request->userType=="customer"){$user=customer::where('email','=',$request->email)->first();}
        else{return back()->with ('fail','The email is not registered.');}

        
        if($user)
        {
            if(hash::check($request->password,$user->password))
            {
                $request->session()->put('id',$user->id);
                $request->session()->put('userType',$request->userType);
                $request->session()->put('username', $user->username);

                if($request->userType == "admin"){
                    return redirect()->route("adminhome");
                }
    
                elseif($request->userType == "vendor"){
                    return redirect()->route("vendorhome");
                }
    
                elseif($request->userType == "customer"){
                    return redirect()->route("customerhome");
                }
            }else{
                return back()->with ('fail','Password is not matches.');
            }
            
        }else{
            return back()->with ('fail','The email is not registered.');
        }


        
    }

    //logout
    function logout(){
        session()->flush();
        return redirect()->route("login");
    }   




}
