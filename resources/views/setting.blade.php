@extends('layout2')
@section('content2')
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" align="center"><br>
       <a href="http://localhost:8000/setting"><button type="button" class="btn btn-outline-secondary">Setting</button></a>
       <a href="http://localhost:8000/feedback"><button type="button" class="btn btn-outline-danger">Feedback</button></a>
    </div>
    <div class="col-sm-4"></div>
</div><br>


<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h3 align="center">QR Code</h3>
    </div>
    <div class="col-md-4"></div>
</div>  
     
<form  action="{{route('updateQr')}}" method="post" ><br> @csrf   
@foreach($q_r_s as $q_r_s)
<div class="row">
    <div class="col-md-4"></div> 
    <input name="catID" type="text" class="form-control" value="{{$q_r_s->id}}" readonly hidden><br>  
    <div class="col-md-4" align="center">
        <img src="{{asset('images')}}/{{$q_r_s->image}}" alt="" class="img-fluid"><br>
        <br><input name="imageName" type="file" class="form-control" value="{{$q_r_s->image}}"><br>
    </div>

    <div class="col-md-4"></div>
</div> 
@endforeach

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" align="center">
    <button type="submit" class="btn btn-info">Edit QR CODE</button><br><br>
    </div>
    <div class="col-md-4"></div>
</div>  


                



@endsection