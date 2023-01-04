@extends('layout')
@section('content')
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="row">
    <div class="col-sm-2"&nbsp;></div>
    <h3><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Profile:</h3><br>
</div>
<form class="row" action="{{route('updateProfile')}}" method="post" ><br> @csrf
@foreach($users as $user)
<input name="catID" type="text" class="form-control" value="{{$user->id}}" readonly hidden><br>
  <div class="col-md-6">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="" name="name" value="{{$user->name}}">
  </div>
  <div class="col-md-6">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="" name="address" value="{{$user->address}}">
  </div>
  <div class="col-md-6">
    <label for="phoneNo" class="form-label">Phone No:</label>
    <input type="text" class="form-control" id="" name="phoneNo" value="{{$user->phoneNo}}">
  </div>
  <div class="col-md-6">
    <label for="nationality" class="form-label">Nationality:</label>
    <input type="text" class="form-control" id="" name="nationality" value="{{$user->nationality}}">
  </div>
@endforeach   
  <div class="col-12">
    <br>    <button type="submit" class="btn btn-info">Edit Profile</button><br><br>
  </div>
</form>
</div>
<div class="col-sm-3"></div>
</div>
@endsection