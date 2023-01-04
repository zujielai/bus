@extends('layout')
@section('content')
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function calTotal(){
        var sub=0;
        var price=document.getElementById("price").value;
        var quantity=document.getElementById("quantity").value;
        sub=(price*quantity);
        document.getElementById("sub").value=sub;
    }
      
</script>
</head>
 
<div class="row">

    <div class="col-sm-10">
        <br><br>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-4"><h2 align="center">My Cart</h2></div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>From</th>                        
                        <th>To</th>
                        <th>Time</th>
                        <th>BusNo</th> 
                        <th>Driver</th>  
                        <th>Price</th>                            
                        <th>Quantity</th> 
                        <th>Total</th>                        
                    </tr>
                </thead>
                 
                <form class="row" action="{{route('addTng')}}" method="post" enctype="multipart/form-data"><br> @csrf 
                <tbody>
                    @foreach($schedules as $schedule)
                    <tr>
                    <td><input name="date" id="date" type="text" style="border: none" value="{{$schedule->date}}" readonly></td>               
                        <td><input name="from" id="from" type="text" style="border: none" value="{{$schedule->from}}" readonly></td>                              
                        <td><input name="to" id="to" type="text" style="border: none" value="{{$schedule->to}}" readonly></td>       
                        <td><input name="time" id="time" type="text" style="border: none" value="{{$schedule->time}}" readonly></td>
                        <td><input name="busNo" id="busNo" type="text" style="border: none" value="{{$schedule->busNo}}" readonly></td>   
                        <td><input name="driver" id="driver" type="text" style="border: none" value="{{$schedule->driver}}" readonly></td>   
                        <td><input name="price" id="price" type="number" style="border: none" value="{{$schedule->price}}" readonly></td>                
                        <td><input type="number" name="quantity" id="quantity" value="1" min="1" onchange="calTotal()">
                        <td>RM <input type="text" value="0" name="sub" id="sub" readonly /></td>                                      
                    </tr>
                    @endforeach            
                </tbody>      
            
                
            </table>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-5"><br>
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QR Code Payment</h3>  
          
        <div class="row">
            <div class="col-12">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="data:image/jpeg;base64,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" alt="">
            </div>
        
        </div>
        <div class="col-12">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="image" class="form-label">Image:</label>
        <input name="image" type="file" class="form-control" style="width: 95%; margin: 5px auto;">
        </div><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button  class="btn btn-info" type="submit" onClick="return confirm('Are you sure to submit?')">Submit</button><br><br>  
    </div>
    
    <div class="col-sm-1"></div>
</form>
</div>



<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
  var $form = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form = $(".require-validation"),
    inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
    $inputs = $form.find('.required').find(inputSelector),
    $errorMessage = $form.find('div.error'),
    valid = true;
    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
        }
    });
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
          number: $('.card-number').val(),
          cvc: $('.card-cvc').val(),
          exp_month: $('.card-expiry-month').val(),
          exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
      if (response.error) {
          $('.error')
              .removeClass('hide')
              .find('.alert')
              .text(response.error.message);
      } else {
          /* token contains id, last4, and card type */
          var token = response['id'];
          $form.find('input[type=text]').empty();
          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
          $form.get(0).submit();
      }
  }
});

</script>


@endsection