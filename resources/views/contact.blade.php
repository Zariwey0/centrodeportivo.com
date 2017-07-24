@extends('layouts.home')
@section('title', 'Centro Deportivo La Isleta FIT - Contacto')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

@section('content')

			<!-- contain main informative part of the site -->
			<main id="main" role="main">
                <!-- page banner -->
				<header class="page-banner small">
				<!--
					<div class="stretch">
						<img alt="image description" src="https://placehold.it/1920x400">
					</div>
					-->
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="holder">
									<h1 class="heading text-capitalize">Ponte en contacto con nosotros</h1>
									<p>Existen muchas maneras</p>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="#">INICIO</a></li>
									<li class="active"><a href="#">Ponte en contacto con nosotros</a></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
                <!-- contact block -->
				<div class="contact-block container">
                    <!-- contact map -->
					<div class="row contact-map">
						<div class="col-xs-12">
							<!--<div class="map" data-lat="31.5497" data-lng="74.3436" data-zoom="8">-->
							<div class="map" data-lat="28.1578" data-lng="-15.4335" data-zoom="17">
								<div class="map-info">
									<h2>Centro Deportivo La Isleta FIT</h2>
									<p>Cargando mapa...</p>
								</div>
							</div>
						</div>
					</div>
                    <!-- contact message -->
					<div class="row contact-message">
						<div class="col-sm-6 col-xs-12">
							<h2>Envíanos un mensaje</h2>
							<p>Rellena tus datos, selecciona el tipo de consulta que quieres hacernos y nos pondremos en contacto contigo lo antes posible.</p>
							<form action="#" class="contact-form2">
								<fieldset>
									<input class="form-control" type="text" placeholder="Nombre*" required>
									<input class="form-control" type="email" placeholder="E-mail *" required>
									<!--<input class="form-control" type="text" placeholder="Website*">-->								
									<select name="tipo" class="form-control" required>
										<option disabled value="selecciona" selected>Selecciona un tipo</option>
										<option value="queja">Queja</option>
										<option value="sugerencia">Sugerencia</option>
										<option value="problema">Problema</option>
										<option value="aviso">Aviso</option>
										<!--<option value=""></option>
										<option value=""></option>
										<option value=""></option>-->
									</select>
									<textarea  class="form-control" cols="30" rows="10" placeholder="Mensaje*" required></textarea>
									<input class="btn-more btn" type="submit" value="enviar">
								</fieldset>
							</form>
							</br>
						</div>
						<div class="col-sm-6 col-xs-12">
							<h2>Contacta con nosotros</h2>
							<p>No solo puedes comunicarte con nosotros a través del formulario, puedes enviarnos un e-mail, llamarnos por teléfono o acudir directamente al centro.</p>
							<div class="contact-address">
								<div class="alignleft">
									<!--<img class="img-responsive" alt="image description" src="https://placehold.it/270x250" >-->
									<?php
										$ruta = "images/entradacentro.jpg";
										$imagen = Image::make($ruta)->fit(270,250)->encode("data-url");
									?>
									<img class="img-responsive" src="{{$imagen}}" alt="image description">
								</div>
								<div class="contact-info">
									<h3><i class="fa fa-road"></i>Dirección</h3>
									<address>Playa del Confital, sn, La Isleta, 35008, Las Palmas de Gran Canaria</address>
									<h3><i class="fa fa-phone"></i>Número de teléfono</h3>
									<div class="tel-box">
										<span class="tel">
											<a href="tel:02214521421" class="tel">000 00 00 00</a>
										</span>
									</div>
									<h3><i class="fa fa-envelope"></i>E-mail</h3>
									<a href="mailto:info@cdlaisleta.com">info@cdlaisleta.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
@stop