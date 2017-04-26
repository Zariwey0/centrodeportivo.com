@extends('layouts.home')

@section('content')
 <h1>Iniciar sesión</h1>
 
 <div class="container text-danger">
  @if (Session::has('message'))
   {{Session::get('message')}}
  @endif
 </div>
 <hr />

 <div class="container padding-top-100 padding-bottom-50">
  <h1>Inicia sesión</h1>
   <form method="post" action="{{secure_url('auth/login')}}">
    {{csrf_field()}}
    <div class="form-group">
     <label for="email">Email:</label>
     <input type="email" name="email" class="form-control" value="{{Input::old('email')}}" />
     <div class="text-danger">{{$errors->first('email')}}</div>
    </div>
    <div class="form-group">
     <label for="password">Password:</label>
     <input type="password" name="password" class="form-control" />
     <div class="text-danger">{{$errors->first('password')}}</div>
    </div>
    <div class="form-group">
     <label for="remember">No cerrar sesión:</label>
     <input type="checkbox" name="remember" />
    </div>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
   </form>
 


    <a href="{{secure_url('auth/register')}}">Registrarme</a>
</div>
@stop

