@extends('layouts.vendor-main')
@section('content')

<div class="contrainer py-1">
    <div class="row text-center">
        <div class="col-12">
            <h3>Welcome to the vendor home page! </h3>
        </div>
    </div>

    
    <div class="row " style="background-color: #e3f2fd;">
        <div class="py-2 col-3 border border-5 bg-light ">
            <nav class="nav flex-column">
                <a class="nav-link" href="{{route('transport_list')}}">Transport List</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
            </nav>
        </div>
        <div class="col-9">
            <img src="{{asset('assets/img/bushome.jpg')}}" class="img-fluid" alt="...">
        </div>
    </div>


    <div class= 'row text-center bg-primary' >
        <div class="col-4">
            <h3>Welcome to the  vendor home page! </h3>
        </div>
        <div class="col-4">
            <h3>Welcome to the vendor home page! </h3>
        </div>
        <div class="col-4">
            <h3>Welcome to the vendor home page! </h3>
        </div>


    
    </div>
</div>

@endsection

