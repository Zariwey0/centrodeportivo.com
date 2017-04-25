@extends('layouts.home')
@section('title', 'Centro Deportivo Lisleta - Home')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

<?php

//Las funciones que necesitamos para el tratamiento de texto.
include('scripts/funciones.php');

use App\ActivitiesType;

$types = DB::table('activities_type')->pluck('name','id');
$activities = DB::table('activities')->select('name', 'id_type', 'image')->orderBy('name')->get();

?>

@section('content')

<div class="padding-top-100">
			<main id="main" role="main">
                <!-- page banner -->
				<header class="page-banner grey small">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="holder">
									<h1 class="heading text-uppercase">actividades</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="{{url('/')}}">INICIO</a></li>
									<li class="active"><a href="#">ACTIVIDADES</a></li>
									<!--<li class="active"><a href="#"> PORTFOLIO GIRD 3 COLUMN no space</a></li>-->
								</ul>
							</div>
						</div>
				    </div>
				</header>
                <!-- work section -->
				<section class="work-section padding-top-90 padding-bottom-90">
                    <div class="container padding-zero">
                    <ul id="work-filter" class="list-inline isotop-controls">
                        <li class="active"><a href="#">Todas</a></li>
                        <!--
                        <li><a data-filter=".work-design" href="#">Design</a></li>
                        <li><a data-filter=".work-fashion" href="#">Fashion</a></li>
                        <li><a data-filter=".work-illustration" href="#">Illustration</a></li>
                        <li><a data-filter=".work-products" href="#">Products</a></li>
                        -->
                        <?php
                        	$cleanname;
                        	foreach ($types as $id => $name){
                        		//print (str_replace(' ', '-', strtolower($name)))
                        		$cleanname = str_replace(' ', '-', strtolower(remove_accents($name)));
                        		echo '<li><a class="'.$cleanname.'" data-filter=".'.$cleanname.'" href="#">'.$name.'</a></li>';
                        	}
                        ?>
                    </ul>
                    <div class="icotop-holder margin-bottom-60" id="work">

                    	<?php
                    		//$imagen = "activitiesimages/sryvMaYUTWRUROztBfeRC5EHDVZqYg-Acuáticasgeneral1.jpg";
                    		foreach($activities as $activity){

                    			echo '<div class="portfolio-block coll-3 nospace '.str_replace(' ', '-', strtolower(remove_accents($types[$activity->id_type]))).'"><div class="box"><div class="box-holder">
                                    <a href="activity/'.$activity->name.'" class="over">
                                        <div class="holder">
                                            <div class="frame">
                                                <div class="over-frame">
                                                    <span class="plus">+</span><strong class="title">'.$activity->name.'</strong><p>'.$types[$activity->id_type].'</p></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="stretch">
                                    <img src="'.Image::make($activity->image)->crop(400,400)->encode("data-url").'" alt="image description">
                                </div>
                            </div>
                        </div>';
                    		}
                    	?>



                    <!--
                    <div class="text-center">
                        <a class="btn btn-load" href="#">LOAD MORE</a>
                    </div>
                    -->
                    </div>
				</section>
			</main>
	</div>
@stop