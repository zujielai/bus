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
                        <td><b>Receipt</b></td>
                        <td><b>Action</b></td>
                    </tr>
                    @foreach($tngs as $tng)
                    <tr>
                        <td>{{$tng->id}}</td>
                        <td>{{$tng->time}}</td>
                        <td>{{$tng->date}}</td>
                        <td>{{$tng->from}}</td>
                        <td>{{$tng->to}}</td>
                        <td>{{$tng->busNo}}</td>
                        <td>{{$tng->driver}}</td>
                        <td><div class="col-md-6"><img src="{{asset('images')}}/{{$tng->image}}" alt="" class="img-fluid" size="10%"></div></td>
                        <td><a href="{{route('deleteMyTng',['id'=>$tng->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to Cancel?')">Cancel</a></td>
                    </tr>
                    @endforeach

                    
                </table>
            </div>
        </div>
@endsection