@extends('layouts.private')

<?php

use App\ActivitiesType;
//$types = ActivitiesType::all();
$types = DB::table('activities_type')->pluck('name', 'id');

	    //return Response::json(array('activities' => $activities));
	    //$data = $request->all(); // This will get all the request data.
//dd(Response::json(array('activities' => $activities)));
//dd($activities); // This will dump and die

?>

@section('content')

<div class="container padding-bottom-100 padding-top-100">
<h1> Configurar horario </h1>
<div class="container">
	<!--
	<div id="toolbar">
        <button id="remove" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-remove"></i> Delete
        </button>
    </div>
-->
    <table data-toggle="table"
    	id="table3"
		data-toolbar="#toolbar"
		data-search="true"
		data-editable-emptytext="Vacío"
		data-show-refresh="false"
		data-show-toggle="true"
		data-show-columns="true"
		data-show-export="true"
		data-detail-view="true"
		
		data-detail-formatter="detailFormatter"
		data-id-field="id"
		data-show-footer="false">
	    <thead>
	        <tr>
	            <th>Hora</th>
	            <th>Sala</th>
	            <th>Lunes</th>
	            <th>Martes</th>
	            <th>Miércoles</th>
	            <th>Jueves</th>
	            <th>Viernes</th>
	            <th>Sábado</th>
	            <th>Domingo</th>
	        </tr>
	    </thead>
	    <!-------------------------->
	    <!-- ID'S DE LOS ADDRESS: -->
	    <!-- PRIMER VALOR: HORA   -->
	    <!-- SEGUNDO VALOR: SALA  -->
	    <!-- TERCER VALOR: DÍA    -->
	    <!-------------------------->
	    <tbody>
	    	<!-- 9:00 -->
	        <tr>
	            <td rowspan="4">9:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address111" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address112" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address113" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address114" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address115" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address116" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address117" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address121" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address122" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address123" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address124" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address125" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address126" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address127" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address131" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address132" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address133" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address134" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address135" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address136" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address137" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address141" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address142" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address143" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address144" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address145" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address146" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address147" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 10:00 -->
	        <tr>
	            <td rowspan="4">10:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address211" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address212" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address213" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address214" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address215" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address216" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address217" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address221" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address222" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address223" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address224" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address225" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address226" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address227" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address231" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address232" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address233" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address234" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address235" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address236" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address237" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address241" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address242" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address243" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address244" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address245" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address246" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address247" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 11:00 -->
	        <tr>
	            <td rowspan="4">11:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address311" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address312" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address313" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address314" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address315" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address316" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address317" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address321" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address322" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address323" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address324" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address325" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address326" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address327" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address331" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address332" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address333" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address334" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address335" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address336" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address337" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address341" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address342" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address343" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address344" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address345" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address346" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address347" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 12:00 -->
	        <tr>
	            <td rowspan="4">12:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address411" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address412" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address413" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address414" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address415" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address416" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address417" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address421" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address422" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address423" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address424" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address425" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address426" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address427" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address431" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address432" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address433" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address434" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address435" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address436" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address437" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address441" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address442" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address443" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address444" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address445" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address446" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address447" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 13:00 -->
	        <tr>
	            <td rowspan="4">13:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address511" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address512" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address513" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address514" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address515" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address516" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address517" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address521" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address522" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address523" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address524" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address525" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address526" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address527" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address531" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address532" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address533" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address534" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address535" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address536" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address537" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address541" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address542" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address543" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address544" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address545" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address546" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address547" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 14:00 -->
	        <tr>
	            <td rowspan="4">14:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address611" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address612" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address613" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address614" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address615" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address616" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address617" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address621" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address622" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address623" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address624" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address625" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address626" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address627" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address631" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address632" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address633" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address634" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address635" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address636" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address637" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address641" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address642" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address643" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address644" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address645" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address646" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address647" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 15:00 -->
	        <tr>
	            <td rowspan="4">15:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address711" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address712" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address713" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address714" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address715" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address716" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address717" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address721" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address722" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address723" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address724" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address725" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address726" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address727" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address731" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address732" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address733" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address734" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address735" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address736" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address737" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address741" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address742" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address743" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address744" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address745" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address746" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address747" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 16:00 -->
	        <tr>
	            <td rowspan="4">16:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address811" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address812" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address813" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address814" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address815" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address816" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address817" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address821" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address822" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address823" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address824" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address825" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address826" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address827" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address831" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address832" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address833" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address834" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address835" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address836" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address837" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address841" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address842" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address843" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address844" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address845" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address846" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address847" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 17:00 -->
	        <tr>
	            <td rowspan="4">17:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address911" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address912" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address913" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address914" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address915" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address916" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address917" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address921" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address922" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address923" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address924" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address925" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address926" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address927" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address931" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address932" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address933" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address934" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address935" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address936" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address937" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address941" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address942" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address943" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address944" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address945" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address946" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address947" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 18:00 -->
	        <tr>
	            <td rowspan="4">18:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address1011" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1012" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1013" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1014" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1015" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1016" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1017" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address1021" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1022" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1023" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1024" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1025" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1026" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1027" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address1031" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1032" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1033" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1034" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1035" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1036" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1037" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address1041" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1042" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1043" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1044" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1045" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1046" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1047" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 19:00 -->
	        <tr>
	            <td rowspan="4">19:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address1111" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1112" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1113" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1114" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1115" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1116" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1117" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address1121" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1122" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1123" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1124" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1125" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1126" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1127" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address1131" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1132" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1133" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1134" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1135" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1136" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1137" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address1141" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1142" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1143" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1144" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1145" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1146" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1147" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 20:00 -->
	        <tr>
	            <td rowspan="4">20:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address1211" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1212" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1213" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1214" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1215" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1216" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1217" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address1221" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1222" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1223" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1224" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1225" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1226" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1227" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address1231" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1232" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1233" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1234" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1235" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1236" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1237" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address1241" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1242" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1243" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1244" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1245" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1246" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1247" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 21:00 -->
	        <tr>
	            <td rowspan="4">21:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address1311" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1312" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1313" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1314" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1315" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1316" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1317" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address1321" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1322" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1323" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1324" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1325" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1326" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1327" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address1331" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1332" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1333" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1334" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1335" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1336" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1337" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address1341" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1342" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1343" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1344" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1345" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1346" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address1347" data-type="address" data-pk="1"></a></td>
	        </tr>        
	    </tbody>
	</table>
<!--
	<table id="table2"
		data-toolbar="#toolbar"
		data-search="true"
		data-editable-emptytext="Vacío"
		data-show-refresh="true"
		data-show-toggle="true"
		data-show-columns="true"
		data-show-export="true"
		data-detail-view="true"
		data-detail-formatter="detailFormatter"
		data-minimum-count-columns="2"
		data-id-field="id"
		data-show-footer="false">
	</table>

	<table id="table"
           data-toolbar="#toolbar"
           data-search="true"
           data-editable-emptytext="Vacío"
           data-show-refresh="true"
           data-show-toggle="true"
           data-show-columns="true"
           data-show-export="true"
           data-detail-view="true"
           data-detail-formatter="detailFormatter"
           data-minimum-count-columns="2"
           data-id-field="id"
           data-show-footer="false">
    </table>
-->
    <!--
    <a href="#" id="address" data-type="address" data-pk="1"></a>  
	-->
</div>
</div>


@stop

@section('scripts')


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$(function(){

	
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	var unvalue;
	var unkey;

	//LOS TIPOS DE ACTIVIDADES PARA SEPARAR LAS ACTIVIDADES EN EL SELECT.
	var types = <?php echo json_encode($types); ?>;

	var index = 0;

	var text1 = '<div class="editable-address"><label><span>Actividad: </span><select name="activity" id="activity" class="input-small">';

 	var text2 = '<option value="" disabled selected>Selecciona una opción</option>';

	var text3 = '</select></label></div>';

	var text4 = '<div class="editable-address"><label><span>Monitor: </span><select name="monitor" id="monitor" class="input-mini">';

	var text5 = '<option value="" disabled selected>Selecciona una opción</option>';

	var text6 = '</select></label></div>';

	get_activities();

	function get_activities(){
	    $.ajax({
			url: './getactivities', // This is the url we gave in the route
			type: 'POST',
		    data: {_token: CSRF_TOKEN},
		    dataType: 'JSON',
		    success: function(data){ // What to do if we succeed
			    $.each(data, function(name,act) {
				  $.each(act, function(key,value){
				  	if (index != value){
				  		index = value;
						text2 += '<option class="disabled' + value + '" disabled>' + types[index] + '</option>';
				  	}
				  	text2 += '<option class="' + value + '" value="' + key + '">' + key + '</option>';
				  })
				}); 
		        get_monitors();
		    }
		});
		
	}

	function get_monitors(){
	    $.ajax({
			url: './getmonitors', // This is the url we gave in the route
			type: 'POST',
		    data: {_token: CSRF_TOKEN},
		    dataType: 'JSON',
		    success: function(data){ // What to do if we succeed
			    $.each(data, function(name,act) {
				  //alert(name);
				  $.each(act, function(key,value){
				  	//alert(key + ' ' + value);
				  	text5 += '<option value="' + key + '">' + key + '</option>';
				  	//unvalue = value;
				  	//unkey = key;
				  })
				  //alert(unvalue + ' 1');
				  //alert(unkey + ' 1');
				}); 
		        //actividades = data;
		        //console.log(actividades);
		        set_selects();
		    }
		});
		
	}

	//$(document).ajaxStop(function () {
	function set_selects() {
    	$('.schedule').editable({
	        //url: '/post',
	        url: 'scripts/post.php',
	        title: 'Selecciona una actividad y un monitor:',
	        tpl: /*'<div class="editable-address"><label><span>Actividad: </span><select name="activity" id="activity" class="input-small"><option value="Volvo">Volvo</option><option value="Fiat">Fiat</option><option value="Saab">Saab</option><option value="Mercedes">Mercedes</option><option value="Mercedes Benz">Mercedes Benz</option><option value="Audi">Audi</option><option value="'+{unvalue}+'">'+{unkey}+'</option></select></label></div>'+
	             '<div class="editable-address"><label><span>Monitor: </span><select name="monitor" id="monitor" class="input-mini"><option value="Volvo">Volvo</option><option value="Fiat">Fiat</option><option value="Saab">Saab</option><option value="Mercedes">Mercedes</option><option value="Audi">Audi</option></select></label></div>',*/
	             //text1 + unkey + text2 + unkey + text3 + text4,
	             //text1 + text2 + text3 + text4,
	             text1 + text2 + text3 + text4 + text5 + text6,
	        success: function(response, newValue) {
		        if(response.status == 'error') return response.msg; //msg will be shown in editable form
		    }      
	    });
	    set_values();
  	//})
  	}		
    
  	function set_values(){
	    //set value from ajax
	    var iddd = '#address';
	    var temp_id = "";
	    var index = 0;
		$.ajax({
			url: 'bootstrap-table-examples/json/prueba.php',
			dataType: 'json',
			success: function(resultado){
				//$("[id^=address1]").editable('setValue',
				//resultado[0]['address']).children(":first-child").addClass( resultado[0]['id'] );
				
				//FOR PARA HORAS
				for (var j = 1; j < 14; j++) {
					//FOR PARA SALAS
					for (var k = 1; k < 5; k++) {
						//FOR PARA DÍAS
						for (var i = 1; i < 8; i++) {
							temp_id = iddd + j + k + i;
							$(temp_id).editable('setValue',
				resultado[index]['address']).children(":first-child").addClass( resultado[index]['id'] );
						index++;
						}
					}
				}
				/*
				$(iddd).editable('setValue',
				resultado[0]['address']).children(":first-child").addClass( resultado[0]['id'] );
				$('#address212').editable('setValue', resultado[1]['address']).children(":first-child").addClass( resultado[1]['id'] );
				$('#address313').editable('setValue', resultado[2]['address']).children(":first-child").addClass( resultado[2]['id'] );
				$('#address414').editable('setValue', resultado[3]['address']).children(":first-child").addClass( resultado[3]['id'] );
				$('#address515').editable('setValue', resultado[4]['address']).children(":first-child").addClass( resultado[4]['id'] );
				$('#address616').editable('setValue', resultado[5]['address']).children(":first-child").addClass( resultado[5]['id'] );
				$('#address717').editable('setValue', resultado[6]['address']).children(":first-child").addClass( resultado[6]['id'] );
				*/
			},
			error: function(error){
				console.log(error);
			}
		});
	}

	/*
	$('.schedule').editable({
	    success: function(response, newValue) {
	        if(response.status == 'error') return response.msg; //msg will be shown in editable form
	    }
	});
	*/
	/*
	$('.schedule').editable({
	    success: function(response, newValue) {
	        userModel.set('schedule', newValue); //update backbone model
	    }
	});
	*/

});
/*

	$('#table2').bootstrapTable({
	    url: 'bootstrap-table-examples/json/schedule.json',
	    columns: [
		    [	
		    	{
		        	field: 'hora',
		        	title: 'Hora',
		        	rowspan: 2
		    	}, {
		        	field: 'sala',
		        	title: 'Sala',
		        	rowspan: 2
		    	}, {
		        	field: 'lunes',
		        	title: 'Lunes',
		        	rowspan: 2
		    	}, {
			        field: 'martes',
			        title: 'Martes',
		        	rowspan: 2
			    }, {
			        field: 'miercoles',
			        title: 'Miércoles',
		        	rowspan: 2
			    }, {
			        field: 'jueves',
			        title: 'Jueves',
		        	rowspan: 2
			    }, {
			        field: 'viernes',
			        title: 'Viernes',
		        	rowspan: 2
			    }, {
			        field: 'sabado',
			        title: 'Sábado',
		        	rowspan: 2
			    }, {
			        field: 'domingo',
			        title: 'Domingo',
			        colspan: 3
		    	}
		    ],
		    [
		    	{
			    	field: 'yeah',
			    	title: 'Yeah'
			    }, {
			    	field: 'yeah2',
			    	title: 'Yeah2'
			    }
		    ]
		]
	});
	
	*/
	
/*
	var $table = $('#table'),
        $remove = $('#remove'),
        selections = [];
    function initTable() {
    	$table.bootstrapTable({
        	//url: 'bootstrap-table-examples/json/409.json',
        	url: 'bootstrap-table-examples/json/multifield.json',
            //height: getHeight(),
            columns: [
                [
                    {
                        field: 'state',
                        checkbox: true,
                        rowspan: 2,
                        align: 'center',
                        valign: 'middle'
                    }, {
                        title: 'Item ID',
                        field: 'id',
                        rowspan: 2,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                        footerFormatter: totalTextFormatter
                    }, {
                        title: 'Item Detail',
                        colspan: 3,
                        align: 'center'
                    }
                ],
                [
                    {
                   	
                    	
                    	field: 'address',
                        title: 'Enter city, street and building #',
                        editable: {
                        	
                        	url: '/post',
					        title: 'Enter city, street and building #'
                        }
                        //footerFormatter: totalNameFormatter,
                        //align: 'center'
                        
                    }, {
                        field: 'price',
                        title: 'Item Price',
                        sortable: true,
                        align: 'center',
                        editable: {
                            type: 'text',
                            title: 'Item Price',
                            validate: function (value) {
                                value = $.trim(value);
                                if (!value) {
                                    return 'El campo es obligatorio';
                                }
                                if (!/^\$/.test(value)) {
                                    return 'El texto debe empezar por $.'
                                }
                                var data = $table.bootstrapTable('getData'),
                                    index = $(this).parents('tr').data('index');
                                console.log(data[index]);
                                return '';
                            }
                        },
                        footerFormatter: totalPriceFormatter
                    }, {
                        field: 'operate',
                        title: 'Item Operate',
                        align: 'center',
                        events: operateEvents,
                        formatter: operateFormatter
                    }
                ]
            ]
        });

        // sometimes footer render error.
        setTimeout(function () {
            $table.bootstrapTable('resetView');
        }, 200);
        $table.on('check.bs.table uncheck.bs.table ' +
                'check-all.bs.table uncheck-all.bs.table', function () {
            $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
            // save your data, here just save the current page
            selections = getIdSelections();
            // push or splice the selections if you want to save all data selections
        });

        $table.on('all.bs.table', function (e, name, args) {
            console.log(name, args);
        });
        $remove.click(function () {
            var ids = getIdSelections();
            $table.bootstrapTable('remove', {
                field: 'id',
                values: ids
            });
            $remove.prop('disabled', true);
        });
        $(window).resize(function () {
            $table.bootstrapTable('resetView', {
                height: getHeight()
            });
        });
    }

    function getIdSelections() {
        return $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id
        });
    }
    function responseHandler(res) {
        $.each(res.rows, function (i, row) {
            row.state = $.inArray(row.id, selections) !== -1;
        });
        return res;
    }
    function detailFormatter(index, row) {
        var html = [];
        $.each(row, function (key, value) {
            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
        });
        return html.join('');
    }
    function operateFormatter(value, row, index) {
        return [
            '<a class="like" href="javascript:void(0)" title="Like">',
            '<i class="glyphicon glyphicon-heart"></i>',
            '</a>  ',
            '<a class="remove" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>'
        ].join('');
    }
    window.operateEvents = {
        'click .like': function (e, value, row, index) {
            alert('You click like action, row: ' + JSON.stringify(row));
        },
        'click .remove': function (e, value, row, index) {
            $table.bootstrapTable('remove', {
                field: 'id',
                values: [row.id]
            });
        }
    };
    function totalTextFormatter(data) {
        return 'Total';
    }
    function totalNameFormatter(data) {
        return data.length;
    }
    function totalPriceFormatter(data) {
        var total = 0;
        $.each(data, function (i, row) {
            total += +(row.price.substring(1));
        });
        return '$' + total;
    }
    function getHeight() {
        return $(window).height() - $('h1').outerHeight(true);
    }
    $(function () {
    	//'bootstrap-table/src/bootstrap-table.js'
        var scripts = [
                location.search.substring(1) || 'js/bootstrap-table-es-ES.js',
                'bootstrap-table/src/extensions/export/bootstrap-table-export.js',
                'http://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js',
                'bootstrap-table/src/extensions/editable/bootstrap-table-editable.js',
               	'http://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/js/bootstrap-editable.js'
            ],
            eachSeries = function (arr, iterator, callback) {
                callback = callback || function () {};
                if (!arr.length) {
                    return callback();
                }
                var completed = 0;
                var iterate = function () {
                    iterator(arr[completed], function (err) {
                        if (err) {
                            callback(err);
                            callback = function () {};
                        }
                        else {
                            completed += 1;
                            if (completed >= arr.length) {
                                callback(null);
                            }
                            else {
                                iterate();
                            }
                        }
                    });
                };
                iterate();
            };
        eachSeries(scripts, getScript, initTable);
    });
    function getScript(url, callback) {
        var head = document.getElementsByTagName('head')[0];
        var script = document.createElement('script');
        script.src = url;
        var done = false;
        // Attach handlers for all browsers
        script.onload = script.onreadystatechange = function() {
            if (!done && (!this.readyState ||
                    this.readyState == 'loaded' || this.readyState == 'complete')) {
                done = true;
                if (callback)
                    callback();
                // Handle memory leak in IE
                script.onload = script.onreadystatechange = null;
            }
        };
        head.appendChild(script);
        // We handle everything using the script element injection
        return undefined;
    }


*/

@stop