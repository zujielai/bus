@extends('layout')
@section('content')
<br>
<div class="row">
    <div class="col-sm-12">
       <h3 align="center">Bus Ticket</h3>
    </div>
</div>
<div class="row">
   <div class="col-sm-3"></div>
   <div class="col-sm-9">
        <table border="2">
            @foreach($schedules as $schedule)
            <tr>
                <td colspan="3" width="1000" height="150" style="background-image: url('https://i.ytimg.com/vi/3FtoelDmSlY/maxresdefault.jpg');">
                    <br>&nbsp;Date: <input type="text" value="{{$schedule->date}}" readonly>&nbsp;&nbsp;&nbsp;From: <input type="text" value="{{$schedule->from}}" style="width: 17%; margin: 5px auto;" readonly>&nbsp;&nbsp;&nbsp;Driver: <input type="text" value="{{$schedule->driver}}" readonly>&nbsp;&nbsp;&nbsp;Duration: <input type="text" value="{{$schedule->duration}}" readonly><br><br>
                    &nbsp;Time: <input type="text" value="{{$schedule->time}}" readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: <input type="text" value="{{$schedule->to}}" style="width: 17%; margin: 5px auto;" readonly>&nbsp;&nbsp;&nbsp;&nbsp;Seats: <input type="text" value="{{$schedule->type}}" readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bus No: <input type="text" value="{{$schedule->busNo}}" readonly><br><br>
                    &nbsp;End Time: <input type="text" value="{{$schedule->endTime}}" style="width: 16%; margin: 5px auto;" readonly>&nbsp;&nbsp;&nbsp;&nbsp;MYR: <input type="text" value="{{$schedule->price}}" style="width: 17%; margin: 5px auto;" readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{route('scheduleDetail',['id'=>$schedule->id])}}"><button type="button" class="btn btn-dark" style="width: 16%; margin: 5px auto;">Select</button></a><br><br>
                </td>
            </tr>
            @endforeach
        </table><br>
   </div>  
</div><br><br>


@endsection