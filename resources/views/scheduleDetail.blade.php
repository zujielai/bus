@extends('layout')
@section('content')
<div class="row">
    @foreach($schedules as $schedule)
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    <div class="card-body">
        <input type="hidden" name="id" value="{{$schedule->id}}">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-3">
               <h5 class="card-title">Date: {{$schedule->date}}</h5>
               <img src="{{asset('images')}}/{{$schedule->image}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-7"><br><br><br>
                <p class="card-text">From: {{$schedule->from}}</p>
                <p class="card-text">To: {{$schedule->to}}</p>
                <p class="card-text">Bus No: {{$schedule->busNo}}</p>
                <p class="card-text">Time: {{$schedule->time}}</p>
                <div class="card-heading">MYR: {{$schedule->price}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{route('myCart',['id'=>$schedule->id])}}"><button class="btn btn-danger btn-xs" type="submit">CARD PAYMENT</button></a>
                <a href="{{route('myCart2',['id'=>$schedule->id])}}"><button class="btn btn-danger btn-xs" type="submit">TNG</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach
</div>

@endsection