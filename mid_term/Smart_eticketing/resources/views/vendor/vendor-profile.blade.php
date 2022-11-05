@extends('layouts.vendor-main')
@section('content')


<div class="p-5 contrainer">


<div class="row pt-2">
    <div class="col-2">

    </div>
    <div class="col-lg-2">
        <div class="card">
            <div class="card-body text-center">
                
                <img src="https://t4.ftcdn.net/jpg/00/65/77/27/360_F_65772719_A1UV5kLi5nCEWI0BNLLiFaBPEkUbv5Fv.jpg"
                    alt="admin avatar" class="img-fluid mt-5" style="height: 150px">

                <h5 class="mt-5">{{session('username')}}</h5>
                <p class="text-muted my-2">Vendor, Smart e-ticket</p>
                <p class="text-muted my-2">{{$vendor->address}}</p>

                <div class="pt-5">
                    
                    <form action="#" >
                        <div>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <button type="submit" class="btn btn-primary mr-1" style="margin: 30px 0px 10px">Update Profile Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card mb-4 py-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">ID</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$vendor->id}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Username</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$vendor->username}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$vendor->name}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$vendor->email}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$vendor->phone}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Gender</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$vendor->gender}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">DOB</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$vendor->dob}}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$vendor->address}}</p>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="justify-content-center">
                        <a href="#" class="btn btn-primary mr-1">Edit Profile</a>
                        <a href="#" class="btn btn-primary mr-1">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection