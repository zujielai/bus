@extends('layout')
@section('content')
<style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

</style>

<br><div class="container-fluid">
   <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-1">
         <img src="https://png.pngtree.com/png-clipart/20190619/original/pngtree-vector-valid-user-icon-png-image_3989973.jpg" class="d-block h-1" alt="...">
      </div>  
      <div class="col-sm-8">
      @foreach($users as $user) 
        <h3>{{$user->name}}</h3>
      @endforeach
      </div>   
   </div><br>
  
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-1">
       <a href="http://localhost:8000/userProfile"><button type="button" class="btn btn-outline-primary">My Profile</button></a><br><br>
    </div>
    
    <div class="col-sm-8">
        <table border="2" style="background-image: url('https://i.ytimg.com/vi/3FtoelDmSlY/maxresdefault.jpg');">
            @foreach($users as $user) 
            <tr>
                <td colspan="3" width="1000" height="190">
                    &nbsp;Name: {{$user->name}}<br><br>
                    &nbsp;Email: {{$user->email}}<br><br>
                    &nbsp;Address: {{$user->address}}<br><br>
                    &nbsp;Phone Number: {{$user->phoneNo}}<br><br>
                    &nbsp;Nationality: {{$user->nationality}}<br><br>                  
                </td>
            </tr>
            @endforeach
        </table><br>
    </div>
  </div>

</div>



@endsection