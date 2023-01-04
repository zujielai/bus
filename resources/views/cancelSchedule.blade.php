@extends('layout2')
@section('content2')
<br>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
       <h3 align="center">Cancel Schedule</h3>
    </div>
    <div class="col-sm-4"></div>
</div>
<div class="row">
   <div class="col-sm-1"></div>
   <div class="col-sm-10" align="center">
        <table border="2">
            @foreach($schedules as $schedule)
            <tr>
                <td colspan="3" width="1000" height="150"  style="background-image: url('https://i.ytimg.com/vi/3FtoelDmSlY/maxresdefault.jpg');">
                    <br>&nbsp;Date: <input type="text" value="{{$schedule->date}}" readonly>&nbsp;&nbsp;&nbsp;To: <input type="text" value="{{$schedule->to}}" readonly>&nbsp;&nbsp;&nbsp;Driver: <input type="text" value="{{$schedule->driver}}" readonly>&nbsp;&nbsp;&nbsp;Duration: <input type="text" value="{{$schedule->duration}}" readonly><br><br>
                    &nbsp;Time: <input type="text" value="{{$schedule->time}}" readonly>&nbsp;&nbsp;&nbsp;From: <input type="text" value="{{$schedule->from}}" style="width: 17%; margin: 5px auto;" readonly>&nbsp;&nbsp;&nbsp;&nbsp;Seats: <input type="text" value="{{$schedule->type}}" readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bus No: <input type="text" value="{{$schedule->busNo}}" readonly><br><br>
                    &nbsp;End Time: <input type="text" value="{{$schedule->endTime}}" style="width: 16%; margin: 5px auto;" readonly>&nbsp;&nbsp;&nbsp;&nbsp;MYR: <input type="text" value="{{$schedule->price}}" readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    &nbsp;<td  style="background-image: url('https://i.ytimg.com/vi/3FtoelDmSlY/maxresdefault.jpg');"><a href="{{route('deleteSchedule',['id'=>$schedule->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to cancel?')">Cancel</a>
                    <a href="{{route('editSchedule',['id'=>$schedule->id])}}" class="btn btn-info btn-xs" class="btn btn-info btn-xs">Edit</a></td>
                </td>
            </tr>
            @endforeach
        </table><br>
   </div>  
</div>

@endsection