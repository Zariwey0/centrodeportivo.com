@extends('layouts.home')
@section('title', 'Centro Deportivo La Isleta FIT - Las instalaciones')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

@section('content')

<div class="padding-top-100">
	<main id="main" role="main">
        <!-- page banner -->
		<header class="page-banner">
			<div class="stretch">
				<?php													
        			$ruta = "images/facilitiesPortada.jpg";
					$imagen = Image::make($ruta)->fit(1920,400)->encode("data-url");
				?>
				<img src="{{$imagen}}" alt="image description">
				<!--<img alt="image description" src="http://placehold.it/1920x400" >-->
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="holder">
							<h1 class="heading text-capitalize">Las instalaciones</h1>
							<p>El lugar perfecto</p>
						</div>
						<ul class="breadcrumbs list-inline">
							<li><a href="/">Inicio</a></li>
							<li class="active"><a href="#">Las Instalaciones</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- container block -->
		<section class="container padding-top-90 padding-bottom-30">
			<div class="row">
				<!-- about-post -->
				<article class="about-post col-sm-4 col-xs-12" data-animate="fadeInUp" data-delay="200">
					<div class="img-box">
						<?php													
		        			$ruta = "images/salamusc.jpg";
							$imagen = Image::make($ruta)->fit(370,270)->encode("data-url");
						?>
						<img class="img-responsive" src="{{$imagen}}" alt="image description">
					</div>
					<h3>Sala de musculación</h3>
					<p>Disfruta de una gran gama de máquinas y pesas con la supervisión de nuestros monitores. Una amplia sala con todo lo necesario para tu desarrollo físico.</p>
				</article>
				<!-- about-post -->
				<article class="about-post col-sm-4 col-xs-12" data-animate="fadeInUp" data-delay="300">
					<div class="img-box">
						<?php													
		        			$ruta = "images/piscybicis.jpg";
							$imagen = Image::make($ruta)->fit(370,270)->encode("data-url");
						?>
						<img class="img-responsive" src="{{$imagen}}" alt="image description">
					</div>
					<h3>Piscina y salas de actividades</h3>
					<p>En la piscina olímpica y el resto de salas podrás elegir entre la mejor selección de actividades. Hay para todos los gustos.</p>
				</article>
				<!-- about-post -->
				<article class="about-post col-sm-4 col-xs-12" data-animate="fadeInUp" data-delay="400">
					<div class="img-box">
						<?php													
		        			$ruta = "images/cafeteria.jpg";
							$imagen = Image::make($ruta)->fit(370,270)->encode("data-url");
						?>
						<img class="img-responsive" src="{{$imagen}}" alt="image description">
					</div>
					<h3>Cafetería</h3>
					<p>Porque la alimentación no se puede descuidar y nosotros lo sabemos, nuestra cafetería está siempre abierta para un tentempié.</p>
				</article>
			</div>
		</section>
		<!-- banner img -->
		<div class="banner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<p>Queremos que nuestras instalaciones te inviten a venir<br> y te obligen a quedarte.</p>
					</div>
				</div>
			</div>
			<div class="parallax-holder">
				<?php													
        			$ruta = "images/facilitiesMedio.jpg";
					$imagen = Image::make($ruta)->fit(1920,400)->encode("data-url");
				?>
				<div class="parallax-frame"><img src="{{$imagen}}" height="400" width="1920" alt="image description"></div>
			</div>
		</div>
		<!-- services section -->
		<section class="services-section container padding-top-90 padding-bottom-60 style7">
            <!-- page heading -->
            <header class="page-heading">
                <h2 class="lime text-capitalize font-medium">NUESTRO COMPROMISO</h2>
		        <p>Queremos que te sientas como en casa<br> y nos esforzamos para que así sea</p>
            </header>
			<div class="row holder">
				<div class="col-xs-12 col-md-4">
					<!-- box -->
					<div class="box" data-animate="fadeIn" data-delay="200">
						<h3><i class="fa fa-home"></i> Renovadas y modernas</h3>
						<p>Nuestras instalaciones han sido renovadas con esmero cuidando los detalles. Siempre buscamos mejorar y ofrecer lo último.</p>
					</div>
					<!-- box -->
					<div class="box" data-animate="fadeIn" data-delay="300">
						<h3><i class="fa fa-universal-access"></i> Accesibles</h3>
						<p>Todo el mundo tiene cabida en nuestro centro por eso, desde los accesos hasta los vestuarios, está al 100% habilitado para personas con discapacidad.</p>
					</div>
					<!-- box -->
					<div class="box" data-animate="fadeIn" data-delay="400">
						<h3><i class="fa fa-shower"></i> Múltiples vestuarios y servicios</h3>
						<p>En cada una de nuestras tres plantas, podrás encontrar cuatro vestuarios y dos baños, todos ellos con taquillas donde poder guardar tus pertenencias.</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 hidden-xs">
					<?php													
	        			$ruta = "images/reception.gif";
						$imagen = Image::make($ruta)->fit(200,410)->encode("data-url");
					?>
					<img class="img" src="{{$imagen}}" alt="image description">					
				</div>
				<div class="col-xs-12 col-md-4">
					<!-- box -->
					<div class="box" data-animate="fadeIn" data-delay="200">
						<h3><i class="fa fa-calendar-check-o"></i> ABIERTO TODA LA SEMANA</h3>
						<p>Creemos que nunca es mal momento para ejercitar un poco el cuerpo, por eso nuestras instalaciones abren de lunes a domingo.</p>
					</div>
					<!-- box -->
					<div class="box" data-animate="fadeIn" data-delay="300">
						<h3><i class="fa fa-vcard"></i> ÚLTIMAS TECNOLOGÍAS</h3>
						<p>Hacemos uso de las últimas tecnologías para aportarte todas las facilidades posibles. Siempre en constante evolución.</p>
					</div>
					<!-- box -->
					<div class="box" data-animate="fadeIn" data-delay="400">
						<h3><i class="fa fa-car"></i> PARKING GRATUITO</h3>
						<p>Disfruta de nuestro parking gratuito. Venir con tu coche al centro nunca más será un problema con nuestras gran cantidad de plazas de aparcamiento.</p>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>

@stop
