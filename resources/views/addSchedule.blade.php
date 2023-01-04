@extends('layout2')
@section('content2')
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6"><br>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <h3 align="center">Add New Schedule:</h3><br>
    </div>
    <div class="col-sm-4"></div><br>
</div>
<form class="row" action="{{route('addSchedule')}}" method="post" enctype="multipart/form-data"><br> @csrf

  <div class="col-md-6">
    <label for="date" class="form-label">Date</label>
    <input type="date" class="form-control" id="" name="catDate">
  </div>
  <div class="col-md-6">
    <label for="time" class="form-label">Time:</label>
    <input type="text" class="form-control" id="" name="catTime">
  </div>
  <div class="col-md-6">
    <label for="endTime" class="form-label">End Time:</label>
    <input type="text" class="form-control" id="" name="catEndTime">
  </div>
  <div class="col-md-6">
    <label for="duration" class="form-label">Duration:</label>
    <input type="text" class="form-control" id="" name="catDuration">
  </div>
  <div class="col-12">
    <label for="from" class="form-label">From:</label>
    <input type="text" class="form-control" id="" name="catFrom">
  </div>
  <div class="col-12">
    <label for="to" class="form-label">To:</label>
    <input type="text" class="form-control" id=""  name="catTo">
  </div>
  <div class="col-md-6">
    <label for="Seats" class="form-label">Seats:</label>
    <input type="text" class="form-control" id="" name="catType">
  </div>
  <div class="col-md-6">
    <label for="busNo" class="form-label">Bus No.</label>
    <input type="text" class="form-control" id="" name="catBusNo">
  </div>
  <div class="col-12">
    <label for="price" class="form-label">MYR:</label>
    <input type="text" class="form-control" id="price"  name="catPrice">
  </div>
  <div class="col-12">
    <label for="image" class="form-label">Image:</label>
    <input name="image" type="file" class="form-control">
  </div>
  <div class="col-12">
    <label for="driver" class="form-label">Driver:</label>
    <input type="text" class="form-control" id=""  name="catDriver">
  </div><br><br>    
  <div class="col-12">
    <br>    <button type="submit" class="btn btn-info">Add Schedule</button><br><br>
  </div>
</form>
</div>
<div class="col-sm-3"></div>
</div>
@endsection