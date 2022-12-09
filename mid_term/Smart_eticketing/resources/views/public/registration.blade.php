@extends('layouts.main')
@section('title')
    Registration
@endsection
@section('content')


<div class="container py-5 h-100" >
    <div class="mx-auto" style="width: 800px;">
        <div >
            <div class="shadow p-5 mb-5 bg-body rounded">
                <form action="{{route('registration')}}" class="form-group" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success"> {{Session::get('success')}} </div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger"> {{Session::get('fail')}} </div>
                    @endif

                    {{csrf_field()}}

                    <div class="row align-items-center">
                        <div class="mb-3 col-md-3 ps-4">
                            <h3 class="mb-5">Registration</h3>
                        </div>
                    </div>
                    

                    <div class="row align-items-center">
                        <div class="mb-3 col-md-3 ps-4">
                            <label for="userType">Registration as </label>
                        </div>
                        

                        <div class="mb-3 col-md-9 pe-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="userType" id="inlineRadio1" value="admin">
                                <label class="form-check-label" for="inlineRadio1">Admin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="userType" id="inlineRadio2" value="vendor">
                                <label class="form-check-label" for="inlineRadio2">Vendor</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="userType" id="inlineRadio3" value="customer">
                                <label class="form-check-label" for="inlineRadio3">Customer</label>
                            </div>
                            <br>
                            @error('userType')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row align-items-center ">
                        
                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example1cg">Full name</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="text" id="form3Example1cg" name="name" class="form-control" value="{{old('name')}}"/>
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example1cg">UserName</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" name="username" placeholder="Username" value="{{old('Username')}}">
                                <br>
                                @error('username')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example1cg">Email address</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="email" class="form-control" name="email"  placeholder="example@example.com" value="{{old('email')}}"/>
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Examplea8">Phone Number</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="text" id="form3Examplea8"  name="phone"  class="form-control " value="{{old('phone')}}"/>
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example4cg">Password</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="password" id="form3Example4cg" name="password"  class="form-control " value="{{old('password')}}"/>
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example4cg">Confirm Password</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="password" id="form3Example4cg" name="c_password" class="form-control " value="{{old('c_password')}}" />
                            @error('c_password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>


                        <div class="mb-3 col-md-3 ps-4">
                            <label for="gender">Gender </label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others">
                                <label class="form-check-label" for="inlineRadio3">Others</label>
                            </div>
                            @error('gender')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example1cg">Date of Birth</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="date" name="dob" value="{{old('dob')}}" class="form-control" >
                            @error('dob')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example4cg">Address </label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <textarea type="text" class="form-control" rows="3" name="address" value="{{old('address')}}" placeholder="Address"></textarea>
                            @error('address')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>



                        
                    </div>
                    
                    <div class="row align-items-center ">
                        <div class="mb-3 col-md-5 ps-4 ">
                            <button type="submit" class="btn btn-primary btn-lg">Registration</button>
                        </div>
                        <div class="text-center col-md-7 pe-4">
                            <p>Already have an account? <a href="{{route('login')}}">Login</a></p>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection