@extends('layouts.main')
@section('title')
    Login
@endsection
@section('content')


<div class="container py-5 h-100" >
    <div class="mx-auto" style="width: 450px;">
        <div >
            <div class="shadow p-5 mb-5 bg-body rounded">
                <form action="{{route('login')}}" class="form-group" method="post">
                    @if(Session::has('success'))
                    <div class="alert alert-success"> {{Session::get('success')}} </div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger"> {{Session::get('fail')}} </div>
                    @endif


                    {{csrf_field()}}

                    <h3 class="mb-5">Login</h3>
                    <div class="row align-items-center">
                        <div class="mb-3 col-md-6 pb-2">
                            <label for="userType">User Type:</label>
                        </div>
                        

                        <div class="mb-3 col-md-6 pb-2" >
                            <select class="form-select" name="userType"  >
                                <!-- <option selected>select</option> -->
                                <option value="admin">Admin</option>
                                <option value="vendor">Vendor</option>
                                <option value="customer">Customer</option> 
                            </select>
                            @error('userType')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                        </div>

                        <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" value="Sign in" class="btn btn-primary btn-block mb-4">Sign in</button>
                    </div>
                    
                    <div class="text-center">
                        <p>Don't have an account? <a href="{{route('registration')}}">Register</a></p>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
    
</div>



@endsection