<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\admin;
use App\Models\vendor;
use App\Models\customer;

class Api_Controller extends Controller
{
    //
    function registration(Request $request){
        $validator = Validator::make($request->all(),[
            "userType"=>'required',
            "name"=>"required|regex:/^[A-Z a-z,.-]+$/i",
            "username"=>'required|min:5|max:50|unique:vendors|unique:customers|unique:admins',
            "email"=>'required|email',
            "phone"=>"required|numeric|digits:10",
            "password"=>'required|min: 8',
            "c_password"=>'required|min: 8',
            "gender"=>'required',
            "dob"=>'required',
            "address"=>"required"
        ],
        [
            'name.regex' => 'Name cannot contain special characters or numbers.',
            'email.required'=>"Please Enter your email"
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

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

        return response()->json(
            [
                "msg"=>"Added Successfully",
                "data"=>$res        
            ]
        );


        
    }

    function login(Request $request){
        $validator = Validator::make($request->all(),[
            "userType"=>'required',
            "email"=>'required | email',
            "password"=>'required '
        ],
        [
            'userType.required'=>"Please select a user",
            'email.required'=>"Please Enter your email",
            'password.required'=>"Please Enter your password"
        ]
        );

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        
        if($request->userType=="admin"){$user=admin::where('email','=',$request->email)->first();}
        elseif($request->userType=="vendor"){$user=vendor::where('email','=',$request->email)->first();}
        elseif($request->userType=="customer"){$user=customer::where('email','=',$request->email)->first();}
        else{return back()->with ('fail','The email is not registered.');}

        if($user){
            
            if(hash::check($request->password,$user->password)){
                if($request->userType == "admin"){
                    
                    return response()->json(
                        [
                            "msg"=>"Login Successfull",
                            "userType"=>$request->userType, 
                            "user"=>$user    
                        ]
                    );
                }
    
                elseif($request->userType == "vendor"){
                    return response()->json(
                        [
                            "msg"=>"Login Successfull",
                            "userType"=>$request->userType, 
                            "user"=>$user    
                        ]
                    );
                }
    
                elseif($request->userType == "customer"){
                    return response()->json(
                        [
                            "msg"=>"Login Successfull",
                            "userType"=>$request->userType, 
                            "user"=>$user    
                        ]
                    );
                }
            }
            else{
                return response()->json(
                    [
                        "errmsg"=>"Password is invalid"
                    ]
                    );
            }
        }else{
            return response()->json(
                [
                    "errmsg"=>"Email is invalid"
                ]
                );
        }
        
        
        
        
    }

    
}
