@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
          @if(isset($trips))
            @forEach($trips as $trip)
              <h4>{{$trip->trip_name}}</h4>
            @endForeach
          @endif
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href="{{ url('/user/trip_map/get') }}">See Your Trips</a>|<a href="{{ url('/user/trip_map') }}">Book a Trip</a></div>
                <div class="col-md-2">
                  @if(file_exists(public_path().'/uploads/files/'.$image))
                  <img src={{ "/uploads/files/".$image}} width="100" height="100" alt="Admin Image" class="pull-left gap-right">
                  @else
                  <img src={{ $image}} width="100" height="100" alt="Admin Image" class="pull-left gap-right">
                  @endif
                </div>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
