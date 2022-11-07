@extends('layouts.admin-main')
@section('content')


<div class="contrainer py-2">
    <div class="row ">
        <div class="col-2">
            <a class="nav-link" href="{{route('adminhome')}}"><< Back</a>
        </div>
        <div class="col-8 text-center">
            <h3>Transport Information </h3>
        </div>
    </div>



    <div class="row py-5">
        <div class="col-2">
            <nav class="nav flex-column">
                <a class="nav-link" href="{{route('admin_addtransport')}}">Add new transports</a>
                <a class="nav-link" href="#">Transport details</a>
                <a class="nav-link" href="#">Transport Seats</a>
            </nav>

        </div>
        <div class="col-10 text-center">
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
            <nav aria-label="Page navigation example">
                {{$data->links('pagination::bootstrap-5')}}
            </nav>
            
            
        </div>
        <div class="col-2">
            
        </div>
    </div>
    
    
</div>
@endsection