@extends('layout2')
@section('content2')
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="row">
    <div class="col-sm-2"&nbsp;></div>
    <h3><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Schedule:</h3><br>
</div>
<form class="row" action="{{route('updateSchedule')}}" method="post" enctype="multipart/form-data"><br> @csrf
@foreach($schedules as $schedule)
<input name="catID" type="text" class="form-control" value="{{$schedule->id}}" readonly hidden><br>
  <div class="col-md-6">
    <label for="date" class="form-label">Date</label>
    <input type="date" class="form-control" id="" name="catDate" value="{{$schedule->date}}">
  </div>
  <div class="col-md-6">
    <label for="time" class="form-label">Time:</label>
    <input type="text" class="form-control" id="" name="catTime" value="{{$schedule->time}}">
  </div>
  <div class="col-md-6">
    <label for="endTime" class="form-label">End Time:</label>
    <input type="text" class="form-control" id="" name="catEndTime" value="{{$schedule->endTime}}">
  </div>
  <div class="col-md-6">
    <label for="duration" class="form-label">Duration:</label>
    <input type="text" class="form-control" id="" name="catDuration" value="{{$schedule->duration}}">
  </div>
  <div class="col-12">
    <label for="from" class="form-label">From:</label>
    <input type="text" class="form-control" id="" name="catFrom" value="{{$schedule->from}}">
  </div>
  <div class="col-12">
    <label for="to" class="form-label">To:</label>
    <input type="text" class="form-control" id=""  name="catTo" value="{{$schedule->to}}">
  </div>
  <div class="col-md-6">
    <label for="Seats" class="form-label">Seats:</label>
    <input type="text" class="form-control" id="" name="catType" value="{{$schedule->type}}">
  </div>
  <div class="col-md-6">
    <label for="busNo" class="form-label">Bus No.</label>
    <input type="text" class="form-control" id="" name="catBusNo" value="{{$schedule->busNo}}">
  </div>
  <div class="col-12">
    <label for="price" class="form-label">MYR:</label>
    <input type="text" class="form-control" id="price"  name="catPrice" value="{{$schedule->price}}">
  </div>
  <div class="col-12">
    <label for="driver" class="form-label">Driver:</label>
    <input type="text" class="form-control" id=""  name="catDriver" value="{{$schedule->driver}}">
  </div><br><br> 
@endforeach   
  <div class="col-12">
    <br>    <button type="submit" class="btn btn-info">Edit Schedule</button><br><br>
  </div>
</form>
</div>
<div class="col-sm-3"></div>
</div>
@endsection