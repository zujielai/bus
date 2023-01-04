@extends('layout2')
@section('content2')

<div class="row">
            <div class="col-md-12"><br>
                <h3 align="center">Feedback</h3><br>
                <table class="table table-info">
                    <tr>
                        <td><b>Name</b></td>
                        <td><b>Phone No</b></td>
                        <td><b>Email</b></td>
                        <td><b>Feedback</b></td>
                    </tr>
                    @foreach($feedback as $feedback)
                    <tr>
                        <td>{{$feedback->name}}</td>
                        <td>{{$feedback->phoneNo}}</td>
                        <td>{{$feedback->email}}</td>
                        <td>{{$feedback->enquiry}}</td>
                    </tr>
                    @endforeach

                    
                </table>
            </div>
</div>



@endsection