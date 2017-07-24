@extends('layouts.home')
@section('title', 'Centro Deportivo La Isleta FIT - Suscripción')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

<?php

//Útil cuando se redirige al pago desde uno de los planes 
$cantidad = 2099;
$tiempo = 'Suscripción Mensual';
$existe = '0';

if(isset($plan)){
  $existe = '1';
  if ($plan == "mensual"){
    $cantidad = 2099;
    $tiempo = 'Suscripción Mensual';
  }elseif ($plan == "trimestral"){
    $cantidad = 5299;
    $tiempo = 'Suscripción Trimestral';
  }elseif ($plan == "familiatri"){
    $cantidad = 10999;
    $tiempo = "Suscripción Familiar Trimestral";
  }elseif ($plan == "anual"){
    $cantidad = 16199;
    $tiempo = 'Suscripción Anual';
  }elseif ($plan == "familiamen"){
    $cantidad = 1;
    $tiempo = 'Suscripción Familiar Mensual';
  }elseif ($plan == "familiaanu"){
    $cantidad = 1;
    $tiempo = 'Suscripción Familiar Anual';
  }elseif ($plan == "parejamen"){
    $cantidad = 1;
    $tiempo = 'Suscripción Pareja Mensual';
  }elseif ($plan == "parejatri"){
    $cantidad = 1;
    $tiempo = 'Suscripción Pareja Trimestral';
  }elseif ($plan == "parejaanu"){
    $cantidad = 1;
    $tiempo = 'Suscripción Pareja Anual';
  }

}

?>

@section('content')
<div class="padding-top-100" style="position: relative;">
  <header class="page-banner">
    <h1>Formulario de suscripción</h1>
  </header>
  <div class="container padding-bottom-100 padding-top-30">

      <h1>Formulario de suscripción</h1>
      <p>Únete al resto de nuestros usuarios en la experiencia FIT definitiva.</p>

      <div class="text-info">
          @if(Session::has('message'))
              {{Session::get('message')}}
          @endif
      </div>
      <!--
      <form method="POST" action="{{url('auth/register')}}" id="payment-form">
      -->
      </br>
      </br>
      
      <form method="POST" action="" id="payment-form">
          {!! csrf_field() !!}

          

          <div class='form-group'>
              <label for="name">Nombre:</label>
              <input type="text" name="name" placeholder="Nombre" class="form-control" value="{{ old('name') }}" />
              <div class="text-danger">{{$errors->first('name')}}</div>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" />
              <div class="text-danger">{{$errors->first('email')}}</div>
          </div>

          <div class="form-group">
              <label for="plan">Plan:</label>
              <select id="plan" name="plan" class="form-control plan" value="{{ old('plan') }}">
                  <option disabled selected hidden>Selecciona el plan que más se adecúe a tus necesidades</option>
                  <option value="mensual">Mensual</option>
                  <option value="trimestral">Trimestral</option>
                  <option value="anual">Anual</option>
                  <option disabled="disabled">----------------------------</option>
                  <option value="familiamen">Familiar Mensual</option>
                  <option value="familiatri">Familiar Trimestral</option>
                  <option value="familiaanu">Familiar Anual</option>
                  <option disabled="disabled">----------------------------</option>
                  <option value="parejamen">Pareja Mensual</option>
                  <option value="parejatri">Pareja Trimestral</option>
                  <option value="parejaanu">Pareja Anual</option>                  
              </select>
              <div class="text-danger">{{$errors->first('plan')}}</div>
          </div>

          <div class="form-group">
              <label for="password">Contraseña:</label>
              <input type="password" placeholder="Contraseña" class="form-control" name="password" />
              <div class="text-danger">{{$errors->first('password')}}</div>
          </div>

          <div class="form-group">
              <label for="password_confirmation">Confirma contraseña:</label>
              <input type="password" placeholder="Confirma contraseña" class="form-control" name="password_confirmation" />
          </div>
          <!--
          <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-label="Paga con tarjeta"
            data-key="pk_test_Xn6LamaJOXrAC06IHHXOO0uy"
            data-amount={{$cantidad}}
            data-name="CD La Isleta FIT"
            data-description={{$tiempo}}
            data-image="https://imgur.com/lH6mLVf.png"
            data-locale="auto"
            data-zip-code="false"
            data-currency="eur">
          </script>
          -->
          <script src="https://checkout.stripe.com/checkout.js"></script>

          <button class="dark btn btn-f-default" id="customButton">Paga con tarjeta</button>

          <script>
            var cantidad = "<?php echo ($cantidad); ?>";
            var tiempo = "<?php echo ($tiempo); ?>";
            var handler = StripeCheckout.configure({
              key: 'pk_test_Xn6LamaJOXrAC06IHHXOO0uy',
              image: 'https://imgur.com/lH6mLVf.png',
              locale: 'auto'/*,
              token: function(token) {
                // You can access the token ID with `token.id`.
                // Get the token ID to your server-side code for use.
              }*/
            });

 
/*
            document.getElementById('plan').addEventListener('change' {
              // Open Checkout with further options:
              //var str = ""; // CREATE AN EMPTY STRING
              //str += $(this).val(); // GET ACTUALL VALUE
              //handler.open({
              cantidad: 1234;
              //});
              //e.preventDefault();
            });

*/
            document.getElementById('customButton').addEventListener('click', function(e) {
              // Open Checkout with further options:
              handler.open({
                name: 'CD La Isleta FIT',
                description: tiempo,
                zipCode: false,
                currency: 'eur',
                amount: cantidad
              });
              e.preventDefault();
            });

            // Close Checkout on page navigation:
            window.addEventListener('popstate', function() {
              handler.close();
            });
          </script>
<!--
          <div>
              <button type="submit" class="btn btn-primary">Registrarme</button>
          </div>
-->
          
          <!--
          <span class="payment-errors"></span>

          <div class="form-row">
            <label>
              <span>Card Number</span>
              <input type="text" size="20" data-stripe="number">
            </label>
          </div>

          <div class="form-row">
            <label>
              <span>Expiration (MM/YY)</span>
              <input type="text" size="2" data-stripe="exp_month">
            </label>
            <span> / </span>
            <input type="text" size="2" data-stripe="exp_year">
          </div>

          <div class="form-row">
            <label>
              <span>CVC</span>
              <input type="text" size="4" data-stripe="cvc">
            </label>
          </div>

          <div class="form-row">
            <label>
              <span>Billing Zip</span>
              <input type="text" size="6" data-stripe="address_zip">
            </label>
          </div>

          <input type="submit" class="submit" value="Submit Payment">
          -->
      
      </form>


  </div>
</div>

@stop

@section('scripts')


var existe = "<?php echo ($existe); ?>";

if (existe === '1') {
  var plan = <?php echo (isset($plan) && $plan) ? json_encode($plan) : 'null'; ?>;
  //alert(plan);
  $('.form-group select option[value='+plan+']').attr('selected','selected');
}

$(document).ready(function() {  
  $( ".plan" ).change(function () { 
    var plan = ""; 
    plan += $(this).val(); 
    //cantidad=1234;

      if (plan == "mensual"){
        cantidad = 2099;
        tiempo = 'Suscripción Mensual';
      }else if (plan == "trimestral"){
        cantidad = 5299;
        tiempo = 'Suscripción Trimestral';
      }else if (plan == "familiatri"){
        cantidad = 10999;
        tiempo = "Suscripción Familiar Trimestral";
      }else if (plan == "anual"){
        cantidad = 16199;
        tiempo = 'Suscripción Anual';
      }else if (plan == "familiamen"){
        cantidad = 1;
        tiempo = 'Suscripción Familiar Mensual';
      }else if (plan == "familiaanu"){
        cantidad = 1;
        tiempo = 'Suscripción Familiar Anual';
      }else if (plan == "parejamen"){
        cantidad = 1;
        tiempo = 'Suscripción Pareja Mensual';
      }else if (plan == "parejatri"){
        cantidad = 1;
        tiempo = 'Suscripción Pareja Trimestral';
      }else if (plan == "parejaanu"){
        cantidad = 1;
        tiempo = 'Suscripción Pareja Anual';
      }

    //alert(plan);
  })
  //.change();
});


@stop