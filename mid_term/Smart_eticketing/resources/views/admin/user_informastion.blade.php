@extends('layouts.admin-main')
@section('content')


<div class="contrainer py-2">
    <div class="row ">
        <div class="col-2">
            <a class="nav-link" href="{{route('adminhome')}}"><< Back</a>
        </div>
        <div class="col-8 text-center">
            <h3>User Information </h3>
        </div>
    </div>



    <div class="row py-5">
        <div class="col-2">
            <nav class="nav flex-column">
                <a class="nav-link" href="#">Add new USER</a>
              
            </nav>

        </div>
        <div class="col-10 text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                         <th scope="col">Phone No</th>
                          <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Adress</th>
                    </tr>
                </thead>
                
                @foreach($data as $datas)
                    <tr>
                        <td>{{$datas->ID}}</a></td>
                        <td>{{$datas->name}}</a></td>
                        <td>{{$datas->username}}</td>
                        <td>{{$datas->email}}</td>
                        <td>{{$datas->phone}}</td>
                        <td>{{$datas->password}}</td>
                        <td>{{$datas->gender}}</td>
                        <td>{{$datas->dob}}</td>
                        <td>{{$datas->Address}}</td>
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