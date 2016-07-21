@extends('layouts.home')

@section('content')
<div class="padding-top-100">
  <div class="container padding-bottom-100 padding-top-100">

      <h1>Formulario de registro</h1>

      <div class="text-info">
          @if(Session::has('message'))
              {{Session::get('message')}}
          @endif
      </div>
      <!--
      <form method="POST" action="{{url('auth/register')}}" id="payment-form">
      -->

      
      <form method="POST" action="" id="payment-form">
          {!! csrf_field() !!}

          

          <div class='form-group'>
              <label for="name">Nombre:</label>
              <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
              <div class="text-danger">{{$errors->first('name')}}</div>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" class="form-control" value="{{ old('email') }}" />
              <div class="text-danger">{{$errors->first('email')}}</div>
          </div>

          <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" name="password" />
              <div class="text-danger">{{$errors->first('password')}}</div>
          </div>

          <div class="form-group">
              <label for="password_confirmation">Confirmar Password:</label>
              <input type="password" class="form-control" name="password_confirmation" />
          </div>

          <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-label="Paga con tarjeta"
            data-key="pk_test_Xn6LamaJOXrAC06IHHXOO0uy"
            data-amount="900"
            data-name="Centro Deportivo Lisleta"
            data-description="Suscripción Mensual"
            data-image="http://imgur.com/lH6mLVf.png"
            data-locale="auto"
            data-zip-code="false"
            data-currency="eur">
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
