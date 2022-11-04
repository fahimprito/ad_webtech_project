@extends('layouts.customer-main')
@section('content')


<div class="contrainer py-2">
    <div class="row text-center">
        <div class="col-12">
            <h3>Transport Information </h3>
        </div>
    </div>



    <div class="row py-5">
        <div class="col-2">
            <nav class="nav flex-column">
                <a class="nav-link" href="{{route('addtransport')}}">Add new transports</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
            </nav>

        </div>
        <div class="col-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#Transport ID</th>
                        <th scope="col">Transport Name</th>
                        <th scope="col">Transport Type</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                @foreach($data as $datas)
                    <tr>
                        <td>{{$datas->transport_id}}</a></td>
                        <td>{{$datas->transport_name}}</td>
                        <td>{{$datas->transport_type}}</td>
                        <td>{{$datas->route_from}}</td>
                        <td>{{$datas->route_to}}</td>
                        <td>{{$datas->transport_date}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-2">
            
        </div>
    </div>
    
    
</div>
@endsection