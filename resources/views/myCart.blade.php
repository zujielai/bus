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
                 
                <form action="{{ route('payment.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">  
                @csrf 
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

</div><br>


<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-5">
    <div class="panel-body"><br>
        <div class="row">
            <h3 align="center">&nbsp;&nbsp;Card Payment</h3><br>
        </div><br>                
        <div class='form-row row'>
            <div class='col-xs-12 col-md-6 form-group required'>
                <label class='control-label'>Name</label> 
                <input class='form-control' size='4' type='text'>
            </div>
            <div class='col-xs-12 col-md-6 form-group required'>
                <label class='control-label'>Card Number</label> 
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
            </div>                           
        </div>                        
        <div class='form-row row'>
            <div class='col-xs-12 col-md-4 form-group cvc required'>
                <label class='control-label'>CVC</label> 
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
            </div>
            <div class='col-xs-12 col-md-4 form-group expiration required'>
                <label class='control-label'>Expiration Month</label> 
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
            </div>
            <div class='col-xs-12 col-md-4 form-group expiration required'>
                <label class='control-label'>Expiration Year</label> 
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
            </div>
        </div>
        {{-- <div class='form-row row'>
            <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>Please correct the errors and try
                            again.
                </div>
            </div>
        </div> --}}
        <div class="form-row row">
            <div class="col-xs-12">
                <button class="btn btn-primary btn-xs btn-block" type="submit">Pay Now</button><br>
            </div>
        </div>                 
    </div>
    </div>

    <div class="col-sm-5"><br>
         
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