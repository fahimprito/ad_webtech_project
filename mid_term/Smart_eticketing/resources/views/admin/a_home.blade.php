@extends('layouts.admin-main')
@section('content')
<div class="row" style="margin-top: 30px;">
	<div  class="col-2">
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('user_informastion')}}">USER INFORMASTION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('transport_informastion')}}">TRANSPORT INFORMATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">SEAT INFORMATION</a>
  </li>
</ul>
</div>
<div  class="col-8">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/img/1.jpeg')}}" class="img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/4.jpeg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/5.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>
</div>
@endsection