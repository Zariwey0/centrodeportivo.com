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
<h1>Configurar horario</h1>
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
		data-show-toggle="false"
		data-show-columns="false"
		data-show-export="true"
		data-detail-view="false"
		
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

	    <tbody>
	    	<!-- 9:00 -->
	        <tr>
	            <td rowspan="4">9:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address1" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address2" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address3" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address4" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address5" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address6" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address7" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address8" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address9" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address10" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address11" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address12" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address13" data-type="address" data-pk="1"></a></td>
            	<td><a href="#" class="schedule" id="address14" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address15" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address16" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address17" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address18" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address19" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address20" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address21" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address22" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address23" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address24" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address25" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address26" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address27" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address28" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 10:00 -->
	        <tr>
	            <td rowspan="4">10:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address29" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address30" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address31" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address32" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address33" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address34" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address35" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address36" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address37" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address38" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address39" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address40" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address41" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address42" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address43" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address44" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address45" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address46" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address47" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address48" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address49" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address50" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address51" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address52" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address53" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address54" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address55" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address56" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 11:00 -->
	        <tr>
	            <td rowspan="4">11:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address57" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address58" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address59" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address60" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address61" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address62" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address63" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address64" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address65" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address66" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address67" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address68" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address69" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address70" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address71" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address72" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address73" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address74" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address75" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address76" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address77" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address78" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address79" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address80" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address81" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address82" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address83" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address84" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 12:00 -->
	        <tr>
	            <td rowspan="4">12:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address85" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address86" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address87" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address88" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address89" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address90" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address91" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address92" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address93" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address94" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address95" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address96" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address97" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address98" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address99" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address100" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address101" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address102" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address103" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address104" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address105" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address106" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address107" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address108" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address109" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address110" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address111" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address112" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 13:00 -->
	        <tr>
	            <td rowspan="4">13:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address113" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address114" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address115" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address116" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address117" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address118" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address119" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address120" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address121" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address122" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address123" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address124" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address125" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address126" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address127" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address128" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address129" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address130" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address131" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address132" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address133" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address134" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address135" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address136" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address137" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address138" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address139" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address140" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 14:00 -->
	        <tr>
	            <td rowspan="4">14:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address141" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address142" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address143" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address144" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address145" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address146" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address147" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address148" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address149" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address150" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address151" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address152" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address153" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address154" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address155" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address156" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address157" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address158" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address159" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address160" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address161" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address162" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address163" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address164" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address165" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address166" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address167" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address168" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 15:00 -->
	        <tr>
	            <td rowspan="4">15:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address169" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address170" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address171" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address172" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address173" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address174" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address175" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address176" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address177" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address178" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address179" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address180" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address181" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address182" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address183" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address184" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address185" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address186" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address187" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address188" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address189" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address190" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address191" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address192" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address193" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address194" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address195" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address196" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 16:00 -->
	        <tr>
	            <td rowspan="4">16:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address197" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address198" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address199" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address200" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address201" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address202" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address203" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address204" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address205" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address206" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address207" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address208" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address209" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address210" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address211" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address212" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address213" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address214" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address215" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address216" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address217" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address218" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address219" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address220" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address221" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address222" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address223" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address224" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 17:00 -->
	        <tr>
	            <td rowspan="4">17:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address225" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address226" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address227" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address228" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address229" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address230" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address231" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address232" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address233" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address234" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address235" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address236" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address237" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address238" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address239" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address240" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address241" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address242" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address243" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address244" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address245" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address246" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address247" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address248" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address249" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address250" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address251" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address252" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 18:00 -->
	        <tr>
	            <td rowspan="4">18:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address253" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address254" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address255" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address256" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address257" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address258" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address259" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address260" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address261" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address262" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address263" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address264" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address265" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address266" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address267" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address268" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address269" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address270" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address271" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address272" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address273" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address274" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address275" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address276" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address277" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address278" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address279" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address280" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 19:00 -->
	        <tr>
	            <td rowspan="4">19:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address281" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address282" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address283" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address284" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address285" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address286" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address287" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address288" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address289" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address290" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address291" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address292" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address293" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address294" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address295" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address296" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address297" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address298" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address299" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address300" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address301" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address302" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address303" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address304" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address305" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address306" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address307" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address308" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 20:00 -->
	        <tr>
	            <td rowspan="4">20:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address309" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address310" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address311" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address312" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address313" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address314" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address315" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address316" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address317" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address318" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address319" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address320" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address321" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address322" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address323" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address324" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address325" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address326" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address327" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address328" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address329" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr class="lastrow">
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address330" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address331" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address332" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address333" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address334" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address335" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address336" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <!-- 21:00 -->
	        <tr>
	            <td rowspan="4">21:00</td>
	            <td><b><i>Sala 1</i></b></td>
	            <td><a href="#" class="schedule" id="address337" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address338" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address339" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address340" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address341" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address342" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address343" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 2</i></b></td>
	            <td><a href="#" class="schedule" id="address344" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address345" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address346" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address347" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address348" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address349" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address350" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Sala 3</i></b></td>
	            <td><a href="#" class="schedule" id="address351" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address352" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address353" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address354" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address355" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address356" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address357" data-type="address" data-pk="1"></a></td>
	        </tr>
	        <tr>
	        	<td><b><i>Piscina</i></b></td>
	            <td><a href="#" class="schedule" id="address358" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address359" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address360" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address361" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address362" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address363" data-type="address" data-pk="1"></a></td>
	            <td><a href="#" class="schedule" id="address364" data-type="address" data-pk="1"></a></td>
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
				  $.each(act, function(key,value){
				  	text5 += '<option value="' + key + '">' + key + '</option>';
				  })
				}); 
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
	        tpl: text1 + text2 + text3 + text4 + text5 + text6,
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
				for (var i = 1; i < 365; i++){
					temp_id = iddd + i;
					$(temp_id).editable('setValue',
				resultado[i-1]['address']).children(":first-child").addClass( resultado[i-1]['id'] );
				}
			},
			error: function(error){
				console.log(error);
			}
		});
	}
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

//Aquí es donde guardamos los valores de cada casilla del horario en la base de datos.
$(document).ready(function() {
  	$("td").on("click", "button.btn.editable-submit", function(){

		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		var activity = $('#activity :selected').attr('value');
		var activity_type = $('#activity :selected').attr('class');
		var monitor = $('#monitor :selected').attr('value');
		var id = $(this).parents('td').children('a.schedule').attr('id');

		$.ajax({
			url: './updateschedule', // This is the url we gave in the route
			type: 'POST',
		    data: {_token: CSRF_TOKEN, activity: activity, activity_type: activity_type, monitor: monitor, id: id},
		    success: function(){ 
		    }
		});
	});
});

@stop
