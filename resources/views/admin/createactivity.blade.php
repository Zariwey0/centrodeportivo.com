@extends('layouts.private')
@section('content')

<?php
    //use App\ActivitiesType;
    //$activitiestypes = DB::table('activities_type')->lists('id','name');//get();
    //$items = ActivitiesTypes::orderBy('name')->pluck('name', 'id');
    $items = DB::table('activities_type')->orderBy('name')->pluck('id', 'name');
    /*
    foreach ($items as $id => $title) {
        echo $title;
    }
    */
    //$items;
?>

<div class="container shop-gallery fitness">

<h1>Crear una nueva actividad</h1>

@if (Session::has('message'))
 <div class='bg-info' style='padding: 20px'>
  {{Session::get('message')}}
 </div>
 <hr />
@endif
@if (Session::has('error'))
 <div class='bg-danger' style='padding: 20px'>
  {{Session::get('error')}}
 </div>
 <hr />
@endif
<!--
<form class="" action="#">
        <fieldset>
            <!-- page heading -->
    <!--        
            <input type="text" placeholder="user name" class="form-control">
            <input type="password" placeholder="password" class="form-control">
            <select id="type" class="form-control" value="{{ old('activitytype') }}">
                <option value="1">Seleccione un tipo</option>
                <OPTION value="2">Component_3</OPTION>
            </select>
            <input type="submit" value="submit" class="btn btn-f-info">
            <div class="forget text-center">
              <p><a href="#">Create an account <i class="fa fa-chevron-circle-right"></i></a></p>
              <p><a href="">I've forgotten my password <i class="fa fa-chevron-circle-right"></i></a></p>
            </div>
        </fieldset>
    </form>
-->


<form method="POST" action="{{url('admin/createactivity')}}">
    {!! csrf_field() !!}


    <div class='form-group'>
        <label for="name">Nombre:</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
        <div class="text-danger">{{$errors->first('name')}}</div>
    </div>
    
    <div class="form-group">
        <label for="activitytype">Tipo de actividad:</label>
<!--
        <input class="form-control" list="activitytype" name="activitytype" placeholder="Seleccione uno...">
        -->
<!--
        <datalist id="activitytype">
            <?php
                //foreach ($items as $id => $name) {
                    //echo '<option id="' . '"' . $id . ' value="' . $name . '">';
                //    echo '<option value="' . $id . '">' . $name . '</option>';
                //}
            ?>
            <!--
            <option value="123">Sam's Fresh Sandwiches</option>
            <option value="Internet Explorer">
            -->
            <!--
        </datalist>-->

        <select name="activitytype" class="form-control" value="{{ old('activitytype') }}">
            <option value="-">Seleccione un tipo</option>
            <?php
                foreach ($items as $name => $id) {
                    //echo '<option id="' . '"' . $id . ' value="' . $name . '">';
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
            ?>
            <!--
            <option value="1">joder</option>
            <option value="2">ya</option>
            -->
        </select>
        
        <div class="text-danger">{{$errors->first('activitytype')}}</div>
    </div>
    

    <div class="form-group">
        <label for="description">Descripción:</label>
        <input type="text" name="description" class="form-control" value="{{ old('description') }}">
        <div class="text-danger">{{$errors->first('description')}}</div>
    </div>
    <!--
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password">
        <div class="text-danger">{{$errors->first('password')}}</div>
    </div>
    -->
    <!--
    <div class="form-group">
        <label for="password_confirmation">Confirmar Password:</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>
    -->

    <div>
        <button type="submit" class="btn btn-primary">Crear actividad</button>
    </div>
</form>

</div>

@stop