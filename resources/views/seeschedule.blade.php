@extends('layouts.home')
@section('title', 'Centro Deportivo Lisleta - Home')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

@section('content')

<?php

use Intervention\Image\ImageManager;
include('scripts/funciones.php');
$types = DB::table('activities_type')->pluck('name','id');
$activities = DB::table('activities')->select('id','name')->orderBy('name')->get();
$act = DB::table('activities')->pluck('name', 'id_type');

//Aquí buscamos las actividades para enlazar directamente con la anterior y la siguiente de la lista
/*
for($i = 0; $i < count($activities); $i++){
	if ($activities[$i]->name == $activity->name){
		if($i == 0){
			$prev = $activities[count($activities)-1]->name;
			$next = $activities[$i+1]->name;
			break;
		}elseif($i == count($activities)-1){
			$prev = $activities[$i-1]->name;
			$next = $activities[0]->name;
			break;
		}else{
			$prev = $activities[$i-1]->name;
			$next = $activities[$i+1]->name;
			break;
		}
	}
}*/

//Buscamos actividades del mismo tipo para mostrarlas al usuario
//$relateds = DB::table('activities')->where('id_type','=',$activity->id_type)->where('id','<>',$activity->id)->orderBy('name')->take(3)->get();

$schedule = DB::table('schedule')->get();

?>

<div class="padding-top-100">
			<!-- contain main informative part of the site -->
			<main id="main" role="main">
                <!-- page banner -->
				
				<!-- port single -->
				<section class="port-single padding-top-100 padding-bottom-50">
					<div class="container">
                       <div class="row">
                            <!-- page heading small -->
                            <header class="page-heading left-align col-xs-12 col-md-12">
                                <h2 class="lime text-capitalize font-light">Horario</h2>
                            </header>
                       </div>
                    </div>
                    <div class="container">
                        <div class="row">
                        <input class="buscadorTabla" type="text" id="myInput" onkeyup="searchInSchedule()" placeholder="¿Qué quieres buscar?">
						    <table data-toggle="table"
						    	id="table3"
								data-toolbar="#toolbar"
								data-search="false"
								data-editable-emptytext="Vacío"
								data-show-refresh="false"
								data-show-toggle="false"
								data-show-columns="false"
								data-show-export="true"
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
							            <td class="schedule" id="address1"></td>
						            	<td class="schedule" id="address2"></td>
						            	<td class="schedule" id="address3"></td>
						            	<td class="schedule" id="address4"></td>
						            	<td class="schedule" id="address5"></td>
						            	<td class="schedule" id="address6"></td>
						            	<td class="schedule" id="address7"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address8"></td>
						            	<td class="schedule" id="address9"></td>
						            	<td class="schedule" id="address10"></td>
						            	<td class="schedule" id="address11"></td>
						            	<td class="schedule" id="address12"></td>
						            	<td class="schedule" id="address13"></td>
						            	<td class="schedule" id="address14"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address15"></td>
							            <td class="schedule" id="address16"></td>
							            <td class="schedule" id="address17"></td>
							            <td class="schedule" id="address18"></td>
							            <td class="schedule" id="address19"></td>
							            <td class="schedule" id="address20"></td>
							            <td class="schedule" id="address21"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address22"></td>
							            <td class="schedule" id="address23"></td>
							            <td class="schedule" id="address24"></td>
							            <td class="schedule" id="address25"></td>
							            <td class="schedule" id="address26"></td>
							            <td class="schedule" id="address27"></td>
							            <td class="schedule" id="address28"></td>
							        </tr>
							        <!-- 10:00 -->
							        <tr>
							            <td rowspan="4">10:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address29"></td>
							            <td class="schedule" id="address30"></td>
							            <td class="schedule" id="address31"></td>
							            <td class="schedule" id="address32"></td>
							            <td class="schedule" id="address33"></td>
							            <td class="schedule" id="address34"></td>
							            <td class="schedule" id="address35"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address36"></td>
							            <td class="schedule" id="address37"></td>
							            <td class="schedule" id="address38"></td>
							            <td class="schedule" id="address39"></td>
							            <td class="schedule" id="address40"></td>
							            <td class="schedule" id="address41"></td>
							            <td class="schedule" id="address42"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address43"></td>
							            <td class="schedule" id="address44"></td>
							            <td class="schedule" id="address45"></td>
							            <td class="schedule" id="address46"></td>
							            <td class="schedule" id="address47"></td>
							            <td class="schedule" id="address48"></td>
							            <td class="schedule" id="address49"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address50"></td>
							            <td class="schedule" id="address51"></td>
							            <td class="schedule" id="address52"></td>
							            <td class="schedule" id="address53"></td>
							            <td class="schedule" id="address54"></td>
							            <td class="schedule" id="address55"></td>
							            <td class="schedule" id="address56"></td>
							        </tr>
							        <!-- 11:00 -->
							        <tr>
							            <td rowspan="4">11:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address57"></td>
							            <td class="schedule" id="address58"></td>
							            <td class="schedule" id="address59"></td>
							            <td class="schedule" id="address60"></td>
							            <td class="schedule" id="address61"></td>
							            <td class="schedule" id="address62"></td>
							            <td class="schedule" id="address63"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address64"></td>
							            <td class="schedule" id="address65"></td>
							            <td class="schedule" id="address66"></td>
							            <td class="schedule" id="address67"></td>
							            <td class="schedule" id="address68"></td>
							            <td class="schedule" id="address69"></td>
							            <td class="schedule" id="address70"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address71"></td>
							            <td class="schedule" id="address72"></td>
							            <td class="schedule" id="address73"></td>
							            <td class="schedule" id="address74"></td>
							            <td class="schedule" id="address75"></td>
							            <td class="schedule" id="address76"></td>
							            <td class="schedule" id="address77"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address78"></td>
							            <td class="schedule" id="address79"></td>
							            <td class="schedule" id="address80"></td>
							            <td class="schedule" id="address81"></td>
							            <td class="schedule" id="address82"></td>
							            <td class="schedule" id="address83"></td>
							            <td class="schedule" id="address84"></td>
							        </tr>
							        <!-- 12:00 -->
							        <tr>
							            <td rowspan="4">12:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address85"></td>
							            <td class="schedule" id="address86"></td>
							            <td class="schedule" id="address87"></td>
							            <td class="schedule" id="address88"></td>
							            <td class="schedule" id="address89"></td>
							            <td class="schedule" id="address90"></td>
							            <td class="schedule" id="address91"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address92"></td>
							            <td class="schedule" id="address93"></td>
							            <td class="schedule" id="address94"></td>
							            <td class="schedule" id="address95"></td>
							            <td class="schedule" id="address96"></td>
							            <td class="schedule" id="address97"></td>
							            <td class="schedule" id="address98"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address99"></td>
							            <td class="schedule" id="address100"></td>
							            <td class="schedule" id="address101"></td>
							            <td class="schedule" id="address102"></td>
							            <td class="schedule" id="address103"></td>
							            <td class="schedule" id="address104"></td>
							            <td class="schedule" id="address105"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address106"></td>
							            <td class="schedule" id="address107"></td>
							            <td class="schedule" id="address108"></td>
							            <td class="schedule" id="address109"></td>
							            <td class="schedule" id="address110"></td>
							            <td class="schedule" id="address111"></td>
							            <td class="schedule" id="address112"></td>
							        </tr>
							        <!-- 13:00 -->
							        <tr>
							            <td rowspan="4">13:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address113"></td>
							            <td class="schedule" id="address114"></td>
							            <td class="schedule" id="address115"></td>
							            <td class="schedule" id="address116"></td>
							            <td class="schedule" id="address117"></td>
							            <td class="schedule" id="address118"></td>
							            <td class="schedule" id="address119"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address120"></td>
							            <td class="schedule" id="address121"></td>
							            <td class="schedule" id="address122"></td>
							            <td class="schedule" id="address123"></td>
							            <td class="schedule" id="address124"></td>
							            <td class="schedule" id="address125"></td>
							            <td class="schedule" id="address126"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address127"></td>
							            <td class="schedule" id="address128"></td>
							            <td class="schedule" id="address129"></td>
							            <td class="schedule" id="address130"></td>
							            <td class="schedule" id="address131"></td>
							            <td class="schedule" id="address132"></td>
							            <td class="schedule" id="address133"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address134"></td>
							            <td class="schedule" id="address135"></td>
							            <td class="schedule" id="address136"></td>
							            <td class="schedule" id="address137"></td>
							            <td class="schedule" id="address138"></td>
							            <td class="schedule" id="address139"></td>
							            <td class="schedule" id="address140"></td>
							        </tr>
							        <!-- 14:00 -->
							        <tr>
							            <td rowspan="4">14:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address141"></td>
							            <td class="schedule" id="address142"></td>
							            <td class="schedule" id="address143"></td>
							            <td class="schedule" id="address144"></td>
							            <td class="schedule" id="address145"></td>
							            <td class="schedule" id="address146"></td>
							            <td class="schedule" id="address147"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address148"></td>
							            <td class="schedule" id="address149"></td>
							            <td class="schedule" id="address150"></td>
							            <td class="schedule" id="address151"></td>
							            <td class="schedule" id="address152"></td>
							            <td class="schedule" id="address153"></td>
							            <td class="schedule" id="address154"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address155"></td>
							            <td class="schedule" id="address156"></td>
							            <td class="schedule" id="address157"></td>
							            <td class="schedule" id="address158"></td>
							            <td class="schedule" id="address159"></td>
							            <td class="schedule" id="address160"></td>
							            <td class="schedule" id="address161"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address162"></td>
							            <td class="schedule" id="address163"></td>
							            <td class="schedule" id="address164"></td>
							            <td class="schedule" id="address165"></td>
							            <td class="schedule" id="address166"></td>
							            <td class="schedule" id="address167"></td>
							            <td class="schedule" id="address168"></td>
							        </tr>
							        <!-- 15:00 -->
							        <tr>
							            <td rowspan="4">15:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address169"></td>
							            <td class="schedule" id="address170"></td>
							            <td class="schedule" id="address171"></td>
							            <td class="schedule" id="address172"></td>
							            <td class="schedule" id="address173"></td>
							            <td class="schedule" id="address174"></td>
							            <td class="schedule" id="address175"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address176"></td>
							            <td class="schedule" id="address177"></td>
							            <td class="schedule" id="address178"></td>
							            <td class="schedule" id="address179"></td>
							            <td class="schedule" id="address180"></td>
							            <td class="schedule" id="address181"></td>
							            <td class="schedule" id="address182"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address183"></td>
							            <td class="schedule" id="address184"></td>
							            <td class="schedule" id="address185"></td>
							            <td class="schedule" id="address186"></td>
							            <td class="schedule" id="address187"></td>
							            <td class="schedule" id="address188"></td>
							            <td class="schedule" id="address189"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address190"></td>
							            <td class="schedule" id="address191"></td>
							            <td class="schedule" id="address192"></td>
							            <td class="schedule" id="address193"></td>
							            <td class="schedule" id="address194"></td>
							            <td class="schedule" id="address195"></td>
							            <td class="schedule" id="address196"></td>
							        </tr>
							        <!-- 16:00 -->
							        <tr>
							            <td rowspan="4">16:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address197"></td>
							            <td class="schedule" id="address198"></td>
							            <td class="schedule" id="address199"></td>
							            <td class="schedule" id="address200"></td>
							            <td class="schedule" id="address201"></td>
							            <td class="schedule" id="address202"></td>
							            <td class="schedule" id="address203"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address204"></td>
							            <td class="schedule" id="address205"></td>
							            <td class="schedule" id="address206"></td>
							            <td class="schedule" id="address207"></td>
							            <td class="schedule" id="address208"></td>
							            <td class="schedule" id="address209"></td>
							            <td class="schedule" id="address210"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address211"></td>
							            <td class="schedule" id="address212"></td>
							            <td class="schedule" id="address213"></td>
							            <td class="schedule" id="address214"></td>
							            <td class="schedule" id="address215"></td>
							            <td class="schedule" id="address216"></td>
							            <td class="schedule" id="address217"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address218"></td>
							            <td class="schedule" id="address219"></td>
							            <td class="schedule" id="address220"></td>
							            <td class="schedule" id="address221"></td>
							            <td class="schedule" id="address222"></td>
							            <td class="schedule" id="address223"></td>
							            <td class="schedule" id="address224"></td>
							        </tr>
							        <!-- 17:00 -->
							        <tr>
							            <td rowspan="4">17:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address225"></td>
							            <td class="schedule" id="address226"></td>
							            <td class="schedule" id="address227"></td>
							            <td class="schedule" id="address228"></td>
							            <td class="schedule" id="address229"></td>
							            <td class="schedule" id="address230"></td>
							            <td class="schedule" id="address231"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address232"></td>
							            <td class="schedule" id="address233"></td>
							            <td class="schedule" id="address234"></td>
							            <td class="schedule" id="address235"></td>
							            <td class="schedule" id="address236"></td>
							            <td class="schedule" id="address237"></td>
							            <td class="schedule" id="address238"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address239"></td>
							            <td class="schedule" id="address240"></td>
							            <td class="schedule" id="address241"></td>
							            <td class="schedule" id="address242"></td>
							            <td class="schedule" id="address243"></td>
							            <td class="schedule" id="address244"></td>
							            <td class="schedule" id="address245"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address246"></td>
							            <td class="schedule" id="address247"></td>
							            <td class="schedule" id="address248"></td>
							            <td class="schedule" id="address249"></td>
							            <td class="schedule" id="address250"></td>
							            <td class="schedule" id="address251"></td>
							            <td class="schedule" id="address252"></td>
							        </tr>
							        <!-- 18:00 -->
							        <tr>
							            <td rowspan="4">18:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address253"></td>
							            <td class="schedule" id="address254"></td>
							            <td class="schedule" id="address255"></td>
							            <td class="schedule" id="address256"></td>
							            <td class="schedule" id="address257"></td>
							            <td class="schedule" id="address258"></td>
							            <td class="schedule" id="address259"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address260"></td>
							            <td class="schedule" id="address261"></td>
							            <td class="schedule" id="address262"></td>
							            <td class="schedule" id="address263"></td>
							            <td class="schedule" id="address264"></td>
							            <td class="schedule" id="address265"></td>
							            <td class="schedule" id="address266"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address267"></td>
							            <td class="schedule" id="address268"></td>
							            <td class="schedule" id="address269"></td>
							            <td class="schedule" id="address270"></td>
							            <td class="schedule" id="address271"></td>
							            <td class="schedule" id="address272"></td>
							            <td class="schedule" id="address273"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address274"></td>
							            <td class="schedule" id="address275"></td>
							            <td class="schedule" id="address276"></td>
							            <td class="schedule" id="address277"></td>
							            <td class="schedule" id="address278"></td>
							            <td class="schedule" id="address279"></td>
							            <td class="schedule" id="address280"></td>
							        </tr>
							        <!-- 19:00 -->
							        <tr>
							            <td rowspan="4">19:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address281"></td>
							            <td class="schedule" id="address282"></td>
							            <td class="schedule" id="address283"></td>
							            <td class="schedule" id="address284"></td>
							            <td class="schedule" id="address285"></td>
							            <td class="schedule" id="address286"></td>
							            <td class="schedule" id="address287"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address288"></td>
							            <td class="schedule" id="address289"></td>
							            <td class="schedule" id="address290"></td>
							            <td class="schedule" id="address291"></td>
							            <td class="schedule" id="address292"></td>
							            <td class="schedule" id="address293"></td>
							            <td class="schedule" id="address294"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address295"></td>
							            <td class="schedule" id="address296"></td>
							            <td class="schedule" id="address297"></td>
							            <td class="schedule" id="address298"></td>
							            <td class="schedule" id="address299"></td>
							            <td class="schedule" id="address300"></td>
							            <td class="schedule" id="address301"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address302"></td>
							            <td class="schedule" id="address303"></td>
							            <td class="schedule" id="address304"></td>
							            <td class="schedule" id="address305"></td>
							            <td class="schedule" id="address306"></td>
							            <td class="schedule" id="address307"></td>
							            <td class="schedule" id="address308"></td>
							        </tr>
							        <!-- 20:00 -->
							        <tr>
							            <td rowspan="4">20:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address309"></td>
							            <td class="schedule" id="address310"></td>
							            <td class="schedule" id="address311"></td>
							            <td class="schedule" id="address312"></td>
							            <td class="schedule" id="address313"></td>
							            <td class="schedule" id="address314"></td>
							            <td class="schedule" id="address315"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address316"></td>
							            <td class="schedule" id="address317"></td>
							            <td class="schedule" id="address318"></td>
							            <td class="schedule" id="address319"></td>
							            <td class="schedule" id="address320"></td>
							            <td class="schedule" id="address321"></td>
							            <td class="schedule" id="address322"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address323"></td>
							            <td class="schedule" id="address324"></td>
							            <td class="schedule" id="address325"></td>
							            <td class="schedule" id="address326"></td>
							            <td class="schedule" id="address327"></td>
							            <td class="schedule" id="address328"></td>
							            <td class="schedule" id="address329"></td>
							        </tr>
							        <tr class="lastrow">
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address330"></td>
							            <td class="schedule" id="address331"></td>
							            <td class="schedule" id="address332"></td>
							            <td class="schedule" id="address333"></td>
							            <td class="schedule" id="address334"></td>
							            <td class="schedule" id="address335"></td>
							            <td class="schedule" id="address336"></td>
							        </tr>
							        <!-- 21:00 -->
							        <tr>
							            <td rowspan="4">21:00</td>
							            <td><b><i>Sala 1</i></b></td>
							            <td class="schedule" id="address337"></td>
							            <td class="schedule" id="address338"></td>
							            <td class="schedule" id="address339"></td>
							            <td class="schedule" id="address340"></td>
							            <td class="schedule" id="address341"></td>
							            <td class="schedule" id="address342"></td>
							            <td class="schedule" id="address343"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 2</i></b></td>
							            <td class="schedule" id="address344"></td>
							            <td class="schedule" id="address345"></td>
							            <td class="schedule" id="address346"></td>
							            <td class="schedule" id="address347"></td>
							            <td class="schedule" id="address348"></td>
							            <td class="schedule" id="address349"></td>
							            <td class="schedule" id="address350"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Sala 3</i></b></td>
							            <td class="schedule" id="address351"></td>
							            <td class="schedule" id="address352"></td>
							            <td class="schedule" id="address353"></td>
							            <td class="schedule" id="address354"></td>
							            <td class="schedule" id="address355"></td>
							            <td class="schedule" id="address356"></td>
							            <td class="schedule" id="address357"></td>
							        </tr>
							        <tr>
							        	<td><b><i>Piscina</i></b></td>
							            <td class="schedule" id="address358"></td>
							            <td class="schedule" id="address359"></td>
							            <td class="schedule" id="address360"></td>
							            <td class="schedule" id="address361"></td>
							            <td class="schedule" id="address362"></td>
							            <td class="schedule" id="address363"></td>
							            <td class="schedule" id="address364"></td>
							        </tr>        
							    </tbody>
							</table>

                        </div>
                    </div>
				</section>

			</main>
			</div>
@stop

@section('scripts')


var schedule = <?php echo json_encode($schedule); ?>;

var i, leng, iddd;
var text = '';
var idd = "address";
for (i=0, leng = schedule.length; i<leng; ++i){
	iddd = idd + schedule[i].id;
	text = "<a href='http://www.google.es'><b class='type" + schedule[i].activity_type + "'>" + schedule[i].activity + "</b></a></br><a style='color:black' href='http://www.marca.com'>" + schedule[i].monitor + "</a>"; 
	document.getElementById(iddd).innerHTML = text;
}

	/*

	    var $table = $('#table'),
	        $remove = $('#remove'),
	        selections = [];
	    function initTable() {
	        $table.bootstrapTable({
	            height: getHeight(),
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
	                        order: 'asc',
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
	                        field: 'name',
	                        title: 'Item Name',
	                        sortable: true,
	                        editable: true,
	                        footerFormatter: totalNameFormatter,
	                        align: 'center'
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
	                                    return 'This field is required';
	                                }
	                                if (!/^\$/.test(value)) {
	                                    return 'This field needs to start width $.'
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
	        $table.on('expand-row.bs.table', function (e, index, row, $detail) {
	            if (index % 2 == 1) {
	                $detail.html('Loading from ajax request...');
	                $.get('LICENSE', function (res) {
	                    $detail.html(res.replace(/\n/g, '<br>'));
	                });
	            }
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
	        var scripts = [
	                location.search.substring(1) || 'assets/bootstrap-table/src/bootstrap-table.js',
	                'assets/bootstrap-table/src/extensions/export/bootstrap-table-export.js',
	                'http://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js',
	                'assets/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js',
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


		function detailFormatter(index, row) {
	        var html = [];
	        $.each(row, function (key, value) {
	            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
	        });
	        return html.join('');
	    }

	    function daySorter(a, b) {
	        var daysweek = {"Domingo": 7, "Lunes": 1, "Martes": 2, "Miércoles": 3, "Jueves": 4, "Viernes": 5, "Sábado": 6};

	        if (daysweek[a] > daysweek[b]) return 1;
	        if (daysweek[a] < daysweek[b]) return -1;
	        return 0;
	    }

	    function hourSorter(a, b) {
	        //a = +a.substring(1); // remove $
	        //b = +b.substring(1);
	        a = parseInt(a.split(':',1)[0]);
	        b = parseInt(b.split(':',1)[0]);
	        //var daysweek = {"Domingo": 7, "Lunes": 1, "Martes": 2, "Miércoles": 3, "Jueves": 4, "Viernes": 5, "Sábado": 6};

	        if (a > b) return 1;
	        if (a < b) return -1;
	        return 0;
	    }


	    function searchInSchedule() {
			// Declare variables 
			var input, filter, table, tr, td, i, j;
		  	input = document.getElementById("myInput");
		  	filter = input.value.toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "");
		  	table = document.getElementById("table3");
		  	tr = table.getElementsByTagName("tr");
		  	// Loop through all table rows, and hide those who don't match the search query
		  	for (i = 1; i < tr.length; i++) {
		  		//Controlamos el desfase de la primera fila de cada hora de la tabla
		  		if (i%4 == 1){
			  		for (j = 2; j < 9; j++) {
				    	td = tr[i].getElementsByTagName("td")[j];
				    	if (td) {
				      		if (td.innerHTML.toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "").indexOf(filter) > -1 && filter.length > 1) {
				        		//tr[i].style.display = "";
				        		td.style.backgroundColor = "#eef02f";
				      		} else {
					    	    //tr[i].style.display = "none";
					    	    td.style.backgroundColor = "white";
					    	}
				    	} 
				    }
				} else {
					for (j = 1; j < 8; j++) {
				    	td = tr[i].getElementsByTagName("td")[j];
				    	if (td) {
				      		if (td.innerHTML.toUpperCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "").indexOf(filter) > -1 && filter.length > 1) {
				        		//tr[i].style.display = "";
				        		td.style.backgroundColor = "#eef02f";
				      		} else {
					    	    //tr[i].style.display = "none";
					    	    td.style.backgroundColor = "white";
					    	}
				    	} 
				    }

				}
		  	}
		}


@stop