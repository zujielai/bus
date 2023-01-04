@extends('layout2')
@section('content2')
        <div class="row">
            <div class="col-md-12"><br>
                <h3 align="center">Bus Ticket Record</h3><br>
                <table class="table table-info">
                    <tr>
                        <td><b>OrderID</b></td>
                        <td><b>Time</b></td>
                        <td><b>Date</b></td>
                        <td><b>From</b></td>
                        <td><b>To</b></td>
                        <td><b>Bus No</b></td>
                        <td><b>Driver</b></td>
                        <td><b>Action</b></td>
                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->time}}</td>
                        <td>{{$order->date}}</td>
                        <td>{{$order->from}}</td>
                        <td>{{$order->to}}</td>
                        <td>{{$order->busNo}}</td>
                        <td>{{$order->driver}}</td>
                        <td><a href="{{route('deleteMyOrder',['id'=>$order->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to Cancel?')">Cancel</a></td>
                    </tr>
                    @endforeach

                    
                </table>
            </div>
        </div>
@endsection