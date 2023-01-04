@extends('layout')
@section('content')
<div class="container">
  <div class="center" style="width: 30%; margin: 10px auto;">
  <form action="{{route('searchSchedule')}}" method="post" enctype="multipart/form-data"><br><br> @csrf
    <h3>Search your Bus Ticket</h3><br>

  <div class="center" style="width: 100%; margin: 5px auto;">
  <form class="form-inline my-2 my-lg-0" method="post" action="{{route('searchSchedule')}}">@csrf
    <select id="" class="form-control" type="search" aria-label="Search" name="keyword">
        <option value="">From</option>
        <option value="Johor">Johor</option>
        <option value="Kuala Lumpur">Kuala Lumpur</option>
        <option value="Melaka">Melaka</option>
        <option value="Perak">Perak</option>
        <option value="Penang">Penang</option>
        <option value="Kedah">Kedah</option>
        <option value="Perlis">Perlis</option>
        <option value="Kelantan">Kelantan</option>
        <option value="Selangor">Selangor</option>
        <option value="Negeri Sembilan">Negeri Sembilan</option>
        <option value="Pahang">Pahang</option>
        <option value="Terengganu">Terengganu</option>
    </select>
  </div><br>
  <div class="center" style="width: 100%; margin: 5px auto;">
    <select id="" class="form-control" type="search2" aria-label="Search2" name="keyword2">
        <option value="">To</option>
        <option value="Johor">Johor</option>
        <option value="Kuala Lumpur">Kuala Lumpur</option>
        <option value="Melaka">Melaka</option>
        <option value="Perak">Perak</option>
        <option value="Penang">Penang</option>
        <option value="Kedah">Kedah</option>
        <option value="Perlis">Perlis</option>
        <option value="Kelantan">Kelantan</option>
        <option value="Selangor">Selangor</option>
        <option value="Negeri Sembilan">Negeri Sembilan</option>
        <option value="Pahang">Pahang</option>
        <option value="Terengganu">Terengganu</option>
    </select>
  </div><br>
  <div class="center" style="width: 100%; margin: 5px auto;">
    <label for="departure">Departure Date:</label>
    <input name="keyword3" type="date" style="width:55%;"><br><br>
  </div><br><br>  

  <div class="right" style="width: 35%; margin: 10px auto;">
    <button type="submit" class="btn btn-info">Search</button>
  </form>
  </div>&nbsp;<br>
  </div>
</form>
</div>
</div>
@endsection

