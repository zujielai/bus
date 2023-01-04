@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" align="center"><br>
       <a href="http://localhost:8000/myTrip"><button type="button" class="btn btn-outline-secondary">My Trip(CP)</button></a>
       <a href="http://localhost:8000/myTrip2"><button type="button" class="btn btn-outline-danger">My Trip(Tng)</button></a>
    </div>
    <div class="col-sm-4"></div>
</div>
<div class="row">
            <div class="col-md-12"><br>
                <h3 align="center">MyTrip</h3><br>
                <table class="table table-info">
                    <tr>
                        <td><b>Time</b></td>
                        <td><b>Date</b></td>
                        <td><b>From</b></td>
                        <td><b>To</b></td>
                        <td><b>Bus No</b></td>
                        <td><b>Driver</b></td>
                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->time}}</td>
                        <td>{{$order->date}}</td>
                        <td>{{$order->from}}</td>
                        <td>{{$order->to}}</td>
                        <td>{{$order->busNo}}</td>
                        <td>{{$order->driver}}</td>
                    </tr>
                    @endforeach

                    
                </table>
            </div>
</div>


@endsection