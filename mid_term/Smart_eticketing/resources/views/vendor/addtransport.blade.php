@extends('layouts.vendor-main')

@section('content')

<div class="row ">
    <div class="col-2">
        <a class="nav-link" href="{{route('transport_list')}}"><< Back</a>
    </div>
</div>

<div class="container py-5">
    
    <div class="row justify-content-center">
        <div class="col-md-10">
            
            <div class="card">
                <div class="card-header"><h3>Add New Transport</h3></div>

                <div class="card-body">
                    <form action="{{route('addtransport')}}" class="form-group" method="post">
                        @if(Session::has('success'))
                        <div class="alert alert-success"> {{Session::get('success')}} </div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger"> {{Session::get('fail')}} </div>
                        @endif

                        {{csrf_field()}}
                        <!-- <div class="row mb-3">
                            <label for="transport_id" class="col-sm-2 col-form-label">Transport ID</label>
                            <div class="col-sm-10">
                                <input type="text" id="form3Example1cg" name="transport_id" class="form-control" value="{{old('transport_id')}}"/>
                                @error('transport_id')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="row mb-3">
                            <label for="transport_name" class="col-sm-2 col-form-label">Transport Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="form3Example1cg" name="transport_name" class="form-control" value="{{old('transport_name')}}"/>
                                @error('transport_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Transport Type</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="transport_type" id="gridRadios1" value="bus">
                                    <label class="form-check-label" for="gridRadios1">
                                    Bus
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="transport_type" id="gridRadios2" value="train">
                                    <label class="form-check-label" for="gridRadios2">
                                    Train
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="transport_type" id="gridRadios3" value="launch" >
                                    <label class="form-check-label" for="gridRadios3">
                                    Launch
                                    </label>
                                </div>
                                <br>
                                @error('transport_type')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </fieldset>

                        <div class="row mb-3">
                            <label for="transport_route" class="col-sm-2 col-form-label">Route </label>
                            <div class="col-sm-5">
                                <label for="route_from" class="form-label">From</label>
                                <select id="inputState" class="form-select" name="route_from">
                                <option >Choose...</option>
                                <option >Dhaka</option>
                                <option >Bogra</option>
                                <option >Barisal</option>
                                <option >Bandarban</option>
                                <option >Chittagong</option>
                                <option >Comilla</option>
                                <option >Dinajpur</option>
                                <option >Faridpur</option>
                                <option >Jamalpur</option>
                                <option >Jessore</option>
                                <option >Khulna</option>
                                <option >Shariatpur</option>
                                <option >Kushtia</option>
                                <option >Mymensingh</option>
                                <option >Noakhali</option>
                                <option >Pabna</option>
                                <option >Patuakhali</option>
                                <option >Rajshahi</option>
                                <option >Rangpur</option>
                                <option >Sylhet</option>
                                <option >Tangail</option>
                                </select>
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    Please select a state.
                                </div>
                                @error('route_from')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-sm-5">
                                <label for="route_to" class="form-label">To</label>
                                <select id="inputState" class="form-select" name="route_to">
                                <option >Choose...</option>
                                <option >Dhaka</option>
                                <option >Bogra</option>
                                <option >Barisal</option>
                                <option >Bandarban</option>
                                <option >Chittagong</option>
                                <option >Comilla</option>
                                <option >Dinajpur</option>
                                <option >Faridpur</option>
                                <option >Jamalpur</option>
                                <option >Jessore</option>
                                <option >Khulna</option>
                                <option >Shariatpur</option>
                                <option >Kushtia</option>
                                <option >Mymensingh</option>
                                <option >Noakhali</option>
                                <option >Pabna</option>
                                <option >Patuakhali</option>
                                <option >Rajshahi</option>
                                <option >Rangpur</option>
                                <option >Sylhet</option>
                                <option >Tangail</option>
                                <option>...</option>
                                </select>
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    Please select a state.
                                </div>
                                @error('route_to')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            
                            <label class="col-sm-2 col-form-label" for="form3Example1cg">Date </label>
                            
                            <div class="col-sm-10">
                                <input type="date" name="transport_date" value="{{old('transport_date')}}" class="form-control" >
                                @error('transport_date')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                        
                        <div class="row mb-5">
                            
                            
                            
                            <div class=" d-grid gap-2 col-3 mx-auto">
                                <button type="submit" class="btn btn-primary "> ADD </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
