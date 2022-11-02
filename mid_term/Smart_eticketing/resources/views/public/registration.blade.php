@extends('layouts.main')
@section('title')
    Registration
@endsection
@section('content')


<div class="container py-5 h-100" >
    <div class="mx-auto" style="width: 800px;">
        <div >
            <div class="shadow p-5 mb-5 bg-body rounded">
                <form>
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
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Admin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Vendor</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">Customer</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row align-items-center ">
                        
                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example1cg">Full name</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="text" id="form3Example1cg" class="form-control" />
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example1cg">UserName</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                            <div class="input-group">
                                <div class="input-group-text">@</div>
                                <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
                            </div>
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example1cg">Email address</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="email" class="form-control" placeholder="example@example.com" />
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Examplea8">Phone Number</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="text" id="form3Examplea8" class="form-control " />
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example4cg">Password</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="password" id="form3Example4cg" class="form-control " />
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example4cg">Confirm Password</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="password" id="form3Example4cg" class="form-control " />
                        </div>


                        <div class="mb-3 col-md-3 ps-4">
                            <label for="userType">Gender </label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                <label class="form-check-label" for="inlineRadio3">Others</label>
                            </div>
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example1cg">Date of Birth</label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                        </div>

                        <div class="mb-3 col-md-3 ps-4">
                            <label class="form-label" for="form3Example4cg">Address </label>
                        </div>
                        <div class="mb-3 col-md-9 pe-4">
                            <textarea class="form-control" rows="3" placeholder="Address"></textarea>
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