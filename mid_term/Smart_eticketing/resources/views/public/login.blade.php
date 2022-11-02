@extends('layouts.main')
@section('title')
    Login
@endsection
@section('content')


<div class="container py-5 h-100" >
    <div class="mx-auto" style="width: 450px;">
        <div >
            <div class="shadow p-5 mb-5 bg-body rounded">
                <form>
                    <h3 class="mb-5">Login</h3>
                    <div class="row align-items-center">
                        <div class="mb-3 col-md-6 pb-2">
                            <label for="userType">User Type:</label>
                        </div>
                        

                        <div class="mb-3 col-md-6 pb-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="1">Admin</option>
                                <option value="2">Vendor</option>
                                <option value="3">Customer</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
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
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
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