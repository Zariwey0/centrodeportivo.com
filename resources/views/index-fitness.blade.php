@extends('layouts.home')
@section('title', 'Centro Deportivo La Isleta FIT - Inicio')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

@section('content')

<?php

use Intervention\Image\ImageManager;
include('scripts/funciones.php');
$types = DB::table('activities_type')->pluck('name','id');
$dw = date( "w" );
$hs = date( "H" )-8;
$activities = DB::table('activities')->select('id','name')->orderBy('name')->get();

//Para la sección nuestros monitores
$monitors = DB::table('users')->where('user','=','2')->latest()->take(4)->get();

//Para el horario
$monitorsS = DB::table('users')->where('user','=','2')->pluck('id','name');

$schedule = DB::table('schedule')->select('id','monitor','activity')->whereRaw('id%7 = '.$dw)->whereRaw('ceil(id/28) >'.$hs)->get();


?>

			<!-- shop gallery fitness -->
			<div data-rotate="true" class="shop-gallery beans-slider fitness">
				<div class="beans-mask">
					<div class="beans-slideset">
						<!-- beans-slide -->
						<div class="beans-slide">
							<div class="stretch">
								<!--
								<img src="http://placehold.it/1920x610" alt="image description">
								-->
								<img src="images/oldies.jpg" alt="image description" class="img-responsive">
							</div>
							<section class="container">
								<div class="row">
									<div class="col-xs-12 shop-content add">
										<header class="shop-heading">
											<h1><span class="add-text">ALCANZA</span> TUS METAS</h1>
											<p>Ponemos todo nuestro equipo a tu entera disposición para que cada día suponga un nuevo reto y estimulante.</p>
											<div class="button-slider">
												<a href="{{secure_url('/register')}}" class="btn btn-f-default">EMPIEZA HOY</a>
											</div>
										</header>
									</div>
								</div>
							</section>
						</div>
						<!-- beans-slide -->
						<div class="beans-slide">
							<div class="stretch">
								<!--
								<img src="http://placehold.it/1920x610" alt="image description">
								-->
								<img src="images/otras3.jpeg" alt="image description" class="img-responsive">
							</div>
							<section class="container">
								<div class="row">
									<div class="col-xs-12 shop-content add2">
										<header class="shop-heading">
											<h1><span class="add-text">DESAFÍA</span> TUS LÍMITES</h1>
											<p>Tu cuerpo está hecho para hacer grandes cosas. Entrena con nosotros y déjanos sacar lo mejor que hay en ti.</p>
											<div class="button-slider">
												<a href="{{secure_url('/register')}}" class="btn btn-f-default">EMPIEZA HOY</a>
											</div>
										</header>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<a class="btn-prev" href="#"><i class="fa fa-angle-left"></i></a>
				<a class="btn-next" href="#"><i class="fa fa-angle-right"></i></a>
			</div>
			<!-- const-services -->
			<section class="const-services">
				<div class="container">
                    <!-- page heading -->
                    <header class="page-heading margin-bottom-20">
                        <h2 class="white text-capitalize font-medium margin-bottom-10">PRÓXIMAS ACTIVIDADES</h2>
                        <p class="heading7 title text-uppercase">NO TE LAS PIERDAS</p>
                    </header>
					<div class="row">
						<table id="table2"
							class="tablahome"
							data-toolbar="#toolbar"
					       	data-search="false"
					       	data-show-toggle="false"
					       	data-show-columns="false"
					       	data-show-export="false"
					       	data-detail-view="false"
					       	data-sort-name="hour"
					       	data-detail-formatter="detailFormatter"
					       	data-minimum-count-columns="2"
					       	data-pagination="true"
					       	
					       	data-id-field="id"
					       	data-response-handler="responseHandler">
						</table>
					</div>
					<p align="left">Pulsa <a target="_blank" href="{{secure_url('seeschedule')}}">aquí</a> para ver el horario semanal al completo.</p>
					<p align="left">*Todas las actividades empiezan a las horas en punto y su duración varía entre 20 y 45 minutos.</p>
					
				</div>
				<div class="stretch">
					<!--<img alt="image description" src="images/bg-3.jpg">-->
					<!--<img alt="image description" src="images/corchomasocuro.jpg">-->
					<!--<img alt="image description" src="images/corchooscuro5.jpg">-->
					<img alt="image description" src="images/maderaoscura2.jpg">
				</div>
			</section>
			<!-- collection block -->
			<div class="collection-block padding-bottom-90">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-xs-12" data-animate="fadeInUp" data-delay="300">
							<!-- collection-col -->
							<div class="collection-col">
								<!--<img src="http://placehold.it/375x493" alt="image description">-->
								<img src="images/trainers_portada3.jpg" alt="image description">
								<div class="collection-over add2">
									<div class="frame">
										<div class="box">
											<h2><span class="txt">ENTRENA CON</span>  PROFESIONALES CUALIFICADOS</h2>
											<a href="{{secure_url('team')}}" class="btn-shop add">CONÓCELOS <i class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8 col-xs-12">
							<div class="row">
								<div class="col-sm-6 col-xs-12" data-animate="fadeInUp" data-delay="300">
									<!-- collection-col -->
									<div class="collection-col women">
										<!--<img src="http://placehold.it/370x231" alt="image description">-->
										<img src="images/join_now.jpg" alt="image description">
										<div class="collection-over add">
											<div class="frame">
												<div class="box">
													<h2><span class="txt">DATE AHORA <br>DE ALTA Y</span> APROVECHA <br>NUESTRAS OFERTAS</h2>
													<a href="{{secure_url('/register')}}" class="btn-shop add">SUSCRÍBETE <i class="fa fa-angle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-xs-12" data-animate="fadeInUp" data-delay="300">
									<!-- collection-col -->
									<div class="collection-col women">
										<!--<img src="http://placehold.it/370x231" alt="image description">-->
										<img src="images/heavy_weight.jpg" alt="image description">
										<div class="collection-over add">
											<div class="frame">
												<div class="box">
													<h2>CLASES <span class="txt">PARA TODOS <br> LOS GUSTOS</span></h2>
													<a href="{{secure_url('activities')}}" class="btn-shop add">INFORMÁTE  <i class="fa fa-angle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- collection-col -->
							<div class="collection-col" data-animate="fadeInUp" data-delay="300">
								<!--<img src="http://placehold.it/770x230" alt="image description">-->
								<img src="images/get_shape.jpg" alt="image description">
								<div class="collection-over">
									<div class="frame">
										<div class="box">
											<h2><span class="txt">TENEMOS TODO LO NECESARIO</span> PARA MANTENERTE EN FORMA</h2>
											<a href="team-single.html" class="btn-shop add">NUESTRAS INSTALACIONES <i class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- const-services -->
			<section class="const-services">
				<div class="container">
                    <!-- page heading -->
                    <header class="page-heading margin-bottom-20">
                        <h2 class="white text-capitalize font-medium margin-bottom-10">¿POR QUÉ NOSOTROS?</h2>
                        <p class="heading7 title text-uppercase">DESCUBRE NUESTRA OFERTA</p>
                    </header>
					<div class="row">
						<div class="col-xs-12">
							<!-- beans-slider -->
							<div class="beans-slider">
								<a href="#" class="btn-prev"><i class="fa fa-angle-left"></i></a>
								<a href="#" class="btn-next"><i class="fa fa-angle-right"></i></a>
								<div class="beans-mask">
									<div class="beans-slideset">
										<!-- beans-slide -->
										<div class="beans-slide">
											<div class="box">
												<div class="over">
													<div class="frame">
														<div class="block">
															<span class="icon-users icon moonico"></span>
															<span class="title">EL MEJOR EQUIPO</span>
															<div class="text-box">
																<p>Ponemos a tu disposición el mejor capital humano</p>
															</div>
														</div>
													</div>
												</div>
												<?php
													$ruta = "images/colaboracion.jpg";
													$imagen = Image::make($ruta)->fit(291,270)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
											</div>
											<div class="box">
												<div class="over">
													<div class="frame">
														<div class="block">
															<span class="icon-bubbles icon moonico"></span>
															<span class="title">SIEMPRE CONECTADOS</span>
															<div class="text-box">
																<p>Contacta con nuestros monitores o administradores para resolver tus dudas</p>
															</div>
														</div>
													</div>
												</div>
												<?php
													$ruta = "images/chat.png";
													$imagen = Image::make($ruta)->fit(291,270)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
											</div>
											<div class="box">
												<div class="over">
													<div class="frame">
														<div class="block">
															<span class="icon-alarm icon moonico"></span>
															<span class="title">MULTIPLES HORARIOS</span>
															<div class="text-box">
																<p>Todas nuestras actividades se repiten a lo largo del día para que no te las pierdas</p>
															</div>
														</div>
													</div>
												</div>
												<?php
													$ruta = "images/multschedules.jpg";
													$imagen = Image::make($ruta)->fit(291,270)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
											</div>
											<div class="box">
												<div class="over">
													<div class="frame">
														<div class="block">
															<span class="icon-coin-euro icon moonico"></span>
															<span class="title">ECONÓMICO</span>
															<div class="text-box">
																<p>Escoge el plan que más se ajuste a ti y aprovéchate de nuestros descuentos</p>
															</div>
														</div>
													</div>
												</div>
												<?php
													$ruta = "images/cheap.jpg";
													$imagen = Image::make($ruta)->fit(291,270)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
											</div>
										</div>
										<!-- beans-slide -->
										<div class="beans-slide">
											<div class="box">
												<div class="over">
													<div class="frame">
														<div class="block">
															<span class="icon-home icon moonico"></span>
															<span class="title">COMO EN CASA</span>
															<div class="text-box">
																<p>Sabemos que lo más importante son nuestros clientes por eso queremos que te sientas a gusto en todo momento</p>
															</div>
														</div>
													</div>
												</div>
												<?php
													$ruta = "images/second.jpg";
													$imagen = Image::make($ruta)->fit(291,270)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
											</div>
											<div class="box">
												<div class="over">
													<div class="frame">
														<div class="block">
															<span class="icon-accessibility icon moonico"></span>
															<span class="title">INSTALACIONES ACCESIBLES</span>
															<div class="text-box">
																<p>Todas nuestras instalaciones están habilitadas para nuestros usuarios</p>
															</div>
														</div>
													</div>
												</div>
												<?php
													$ruta = "images/accesibilidad.jpg";
													$imagen = Image::make($ruta)->fit(291,270)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
											</div>
											<div class="box">
												<div class="over">
													<div class="frame">
														<div class="block">
															<span class="icon-anatomy icon moonico"></span>
															<span class="title">SUPÉRATE</span>
															<div class="text-box">
																<p>Consigue llegar a donde quieras con nuestra ayuda</p>
															</div>
														</div>
													</div>
												</div>
												<?php
													$ruta = "images/cuerpo.jpg";
													$imagen = Image::make($ruta)->fit(291,270)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
											</div>
											<div class="box">
												<div class="over">
													<div class="frame">
														<div class="block">
															<span class="icon-gym icon moonico"></span>
															<span class="title">BIENESTAR</span>
															<div class="text-box">
																<p>Ya sabes, mens sana in corpore sano</p>
															</div>
														</div>
													</div>
												</div>
												<?php
													$ruta = "images/bienestar.jpg";
													$imagen = Image::make($ruta)->fit(291,270)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="stretch">
					<img alt="image description" src="images/bg-1.jpg">
				</div>
			</section>
			<!-- section -->
			<section class="padding-top-90 padding-bottom-90">
				<div class="container">
                    <!-- page heading -->
                    <header class="page-heading margin-bottom-60">
                        <h2 class="lime text-capitalize font-medium margin-bottom-10">NUESTROS MONITORES</h2>
                        <p class="heading7 title text-uppercase">CONÓCELOS</p>
                    </header>

                    <?php
                    $cont = 1;
                    $pos = "";
                    foreach($monitors as $monitor){
                    	if ($cont == 1){
                    		$cont = 0;
                    		$pos = "right ";
                    		echo '<div class="row">';
                    	}else{
                    		$cont = 1;
                    		$pos = "";
                    	} 
                    	echo '<div class="col-xs-12 col-sm-6">
							<!-- team box -->
							<div class="team-box '.$pos.'style2">
								<div class="img-box">

									<img src="'.Image::make($monitor->profile)->resize(270,270)->encode("data-url").'" alt="image description" class="img-responsive">
									<span class="over"></span>
									<a href="#popup2" class="plus lightbox">+</a>
								</div>
								<div class="block">
									<h3 class="heading">'.$monitor->name.'</h3>
									<strong class="subtitle">MALE FITNESS COACH</strong>
									<div class="padding-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.</div>
									<ul class="social-network list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>';
						if ($cont == 1) echo '</div>';
                    }

                    ?>
                    <!--
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="team-box right style2">
								<div class="img-box">
									<img src="http://placehold.it/269x270" alt="image description" class="img-responsive">
									<span class="over"></span>
									<a href="#popup2" class="plus lightbox">+</a>
								</div>
								<div class="block">
									<h3 class="heading">Mohammed Arafa</h3>
									<strong class="subtitle">MALE FITNESS COACH</strong>
									<div class="padding-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.</div>
									<ul class="social-network list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="team-box style2">
								<div class="img-box">
									<img src="http://placehold.it/269x270" alt="image description" class="img-responsive">
									<span class="over"></span>
									<a href="#popup1" class="plus lightbox">+</a>
								</div>
								<div class="block">
									<h3 class="heading">ALISA HANOUN</h3>
									<strong class="subtitle">FEMALE FITNESS COACH</strong>
									<div class="padding-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.</div>
									<ul class="social-network list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="team-box right style2">
								<div class="img-box">
									<img src="http://placehold.it/269x270" alt="image description" class="img-responsive">
									<span class="over"></span>
									<a href="#popup4" class="plus lightbox">+</a>
								</div>
								<div class="block">
									<h3 class="heading">Fatma Hassan</h3>
									<strong class="subtitle">FITNESS  COACH</strong>
									<div class="padding-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.</div>
									<ul class="social-network list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="team-box style2">
								<div class="img-box">
									<img src="http://placehold.it/269x270" alt="image description" class="img-responsive">
									<span class="over"></span>
									<a href="#popup3" class="plus lightbox">+</a>
								</div>
								<div class="block">
									<h3 class="heading">ARNOLD BUTCHER</h3>
									<strong class="subtitle">FITNESS INSTRUCTOR</strong>
									<div class="padding-bottom-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta.</div>
									<ul class="social-network list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					-->
				</div>
			</section>
			<!-- price section style4 -->
			<section class="price-section style4">
                <div class="container">
                    <!-- page heading -->
                    <header class="page-heading margin-bottom-90 padding-bottom-30">
                        <h2 class="white text-capitalize font-medium margin-bottom-10">SUSCRIPCIONES</h2>
                        <p class="heading7 title text-uppercase">Elige la que más se adecúe a tus intereses</p>
                    </header>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<!-- box -->
							<div class="box padding-bottom-10">
								<strong class="heading margin-bottom-30">Mensual</strong>
								<ul class="list-unstyled price-list margin-bottom-20">
									<li>Acceso a todas las actividades</li>
									<li>Plan específico</li>
									<li>Entrenadores personales</li>
									<li style="visibility:hidden">_</li>
									<li style="visibility:hidden">_</li>
								</ul>
								<span class="price">20.99<sup>€</sup></span>
								<span class="month margin-bottom-30">Cada mes</span>
								<a href="{{secure_url('/register')}}" class="btn btn-purchase margin-bottom-30">Únete ahora</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<!-- box -->
							<div class="box active padding-bottom-10">
								<strong class="heading margin-bottom-30">Trimestral</strong>
								<ul class="list-unstyled price-list margin-bottom-20">
									<li>15% de descuento</li>
									<li>Acceso a todas las actividades</li>
									<li>Plan específico</li>
									<li>Entrenadores personales</li>
									<li style="visibility:hidden">_</li>
								</ul>
								<span class="price">52.99<sup>€</sup></span>
								<span class="month margin-bottom-30">Cada tres meses</span>
								<a href="{{secure_url('/register')}}" class="btn btn-purchase margin-bottom-30">Únete ahora</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 clearfix-sm">
							<!-- box -->
							<div class="box padding-bottom-10">
								<strong class="heading margin-bottom-30">Familiar trimestral</strong>
								<ul class="list-unstyled price-list margin-bottom-20">
									<li>13% de descuento</li>
									<li>Dos adultos y hasta dos niños gratis</li>
									<li>Acceso a todas las actividades</li>
									<li>Plan específico</li>
									<li>Entrenadores personales</li>
								</ul>
								<span class="price">109.99<sup>€</sup></span>
								<span class="month margin-bottom-30">Cada tres meses</span>
								<a href="{{secure_url('/register')}}" class="btn btn-purchase margin-bottom-30">Únete ahora</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<!-- box -->
							<div class="box padding-bottom-10">
								<strong class="heading margin-bottom-30">Anual</strong>
								<ul class="list-unstyled price-list margin-bottom-20">
									<li>36% de descuento</li>
									<li>Acceso a todas las actividades</li>
									<li>Plan específico</li>
									<li>Entrenadores personales</li>
									<li>Club premium</li>
								</ul>
								<span class="price">161.99<sup>€</sup></span>
								<span class="month margin-bottom-30">Cada año</span>
								<a href="{{secure_url('/register')}}" class="btn btn-purchase margin-bottom-30">Únete ahora</a>
							</div>
						</div>
					</div>
				</div>
				<div class="parallax-holder">
					<div class="parallax-frame"><img src="images/sport6-2.jpg" height="817" width="1920" alt="image description"></div>
					<!--
					<div class="parallax-frame"><img src="http://placehold.it/1920x817" height="817" width="1920" alt="image description"></div>
					-->
				</div>
			</section>
			<!-- testimon section -->
			<div class="testimon-section alt-version no-bg">
				<div class="container">
                    <!-- page heading -->
                    <header class="page-heading margin-bottom-60">
                        <h2 class="lime text-capitalize font-medium margin-bottom-10">TESTIMONIOS </h2>
                        <p class="heading7 title text-uppercase">nuestros usuarios opinan</p>
                    </header>
					<div class="row">
						<div class="col-xs-12">
							<!-- beans-slider -->
							<div class="beans-slider" data-interval="6000" data-rotate="true">
								<div class="beans-mask">
									<div class="beans-slideset">
										<!-- beans-slide -->
										<div class="beans-slide">
											<blockquote>
												<q>Soy usuaria del centro desde hace ya dos años y la verdad es que no podría estar más contenta. Llegué con una forma física nefasta y sintiéndome incómoda con mi cuerpo y ahora soy una mujer nueva. Lo recomiendo 100%.</q>
												<cite>
													<span class="name">Dolores Pérez</span>
													<span class="comp-name"><a href="#">Usuaria de nuestro centro</a></span>
												</cite>
											</blockquote>
										</div>
										<!-- beans-slide -->
										<div class="beans-slide">
											<blockquote>
												<q>El Centro Deportivo La Isleta FIT es, seguramente, el mejor centro de la isla de Gran Canaria. Un lugar donde toda la familia puede disfrutar haciendo deporte. Unas instalaciones envidiables y un equipo siempre dispuesto a ayudarte en lo que necesites.</q>
												<cite>
													<span class="name">Canarias 7</span>
													<span class="comp-name"><a href="#">Periódico insular</a></span>
												</cite>
											</blockquote>
										</div>
										<!-- beans-slide -->
										<div class="beans-slide">
											<blockquote>
												<q>Muchos de mis familiares y amigos me habían hablado maravillas de este centro deportivo y, después de probarlo gracias a su día de prueba, no puedo estar más de acuerdo. Sin lugar a dudas un gran lugar donde invertir tu tiempo.</q>
												<cite>
													<span class="name">Jorge García</span>
													<span class="comp-name"><a href="#">Redactor Jefe - El deporte en Canarias</a></span>
												</cite>
											</blockquote>
										</div>
									</div>
								</div>
								<div class="beans-pagination small">
									<!-- pagination generated here -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
@stop

@section('scripts')


var schedule = <?php echo json_encode($schedule); ?>;

var monitorsS = <?php echo json_encode($monitorsS); ?>;

var weekdays = {0: "Domingo", 1: "Lunes", 2: "Martes", 3: "Miércoles", 4: "Jueves", 5: "Viernes", 6: "Sábado"};

var hours = {1: "9:00", 2: "10:00", 3: "11:00", 4: "12:00", 5: "13:00", 6: "14:00", 7: "15:00", 8: "16:00", 9: "17:00", 10: "18:00", 11: "19:00", 12: "20:00", 13: "21:00"};

var rooms = {1: "Sala 1", 2: "Sala 2", 3: "Sala 3", 4: "Piscina"};

//var yeah = [{day: 'Lunes', hour: '9:00', monitor: '<a href="www.marca.com">Eustaquio</a>'}, {day: 'Viernes', hour: '11:00', monitor: 'dsfasd'}];
//name: hours[Math.ceil(29/28)],
//price: weekdays[16%7]



var i, leng;
var text = '';
var aux = [];
var web1; //= '<a class=\\"index\\" href=\\"//www.marca.com\\">';
var web2; //= '</a>';

for (i=0, leng = schedule.length; i<leng; ++i){
	web1 = '<select class=\\"enhorario index\\" name=\\"forma\\" onchange=\\"location = this.value;\\"><option value=\\"\\">' + schedule[i].monitor + '</option><option value=\\"/user/' + monitorsS[schedule[i].monitor] + '\\">Ver su perfil</option><option value=\\"/seeschedule/?monitor=' + schedule[i].monitor + '\\">Ver todas sus clases</option></select>';
	web2 = '<a class=\\"index\\" href=\\"/activity/' + schedule[i].activity.replace(/ /g,"%20") +  '\\">' + schedule[i].activity + '</a>';
	text = '[{"hour":';
	text += '"' + hours[Math.ceil(schedule[i].id/28)] + '"';
	text += ',"activity":';
	text += '"' + web2 + '"';
	text += ',"room":';
	text += '"' + rooms[Math.ceil((schedule[i].id%28)/7)] + '","monitor":';
	text += '"' + web1 + '"';
	text += '}]';
	aux = aux.concat(JSON.parse(text));
}

$('#table2').bootstrapTable({
    columns: [{
        field: 'hour',
        sortable: true,
        order: 'desc',
        sorter: 'hourSorter',
        title: 'Hora'
    }, {
        field: 'activity',
        sortable: true,
        order: 'desc',
        //sorter: 'hourSorter',
        title: 'Actividad'
    }, {
        field: 'room',
        sortable: true,
        order: 'desc',
        sorter: 'roomSorter',
        title: 'Sala'
    }, {
        field: 'monitor',
        sortable: true,
        order: 'desc',
        class: 'latas',
        title: 'Monitor'
    }],
    data: aux
});
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
	                '//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js',
	                'assets/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js',
	                '//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/js/bootstrap-editable.js'
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
	        var daysweek = {"Lunes": 1, "Martes": 2, "Miércoles": 3, "Jueves": 4, "Viernes": 5, "Sábado": 6, "Domingo": 7};

	        var time = new Date();
	        var dia0 = time.getDay();
	        if (dia0 == 0) dia0 = 7;
	        var daysweekordered = {};

	        for (i = 1; i <= 8; i++) { 
	        	if (i == 1){
	        		daysweekordered[dia0++] = i;
	        	}else{
	        		if (dia0 = 7){
	        			dia0 = 1;
	        			
	        		}
	        		daysweekordered[dia0++] = i;
	        	}

	        }


 			var hours=time.getHours();


	        var diaa = a.split(',',1)[0];
	        var diab = b.split(',',1)[0];

	        var tiempoa = a.split(',',2)[1];
	        var tiempob = b.split(',',2)[1];

	        var horaa = parseInt(tiempoa.split(':',1)[0]);
	        var horab = parseInt(tiempob.split(':',1)[0]);


	        //diaa y diab tengo el texto
	        //daysweek[diaa] y daysweek[diab] tengo el número

	        //if (daysweek[diaa] > daysweek[diab]) return 1;
	        //if (daysweek[diaa] < daysweek[diab]) return -1;
	        ahora = daysweek[diaa];
	        oque = daysweek[diab];
	        if (daysweekordered[ahora] > daysweekordered[oque]) return 1;
	        if (daysweekordered[ahora] < daysweekordered[oque]) return -1;
	        if (horaa > horab) return 1;
	        if (horaa < horab) return -1;
	        return 0;
	    }

	    function hourSorter(a, b) {
	        a = parseInt(a.split(':',1)[0]);
	        b = parseInt(b.split(':',1)[0]);

	        if (a > b) return 1;
	        if (a < b) return -1;
	        return 0;
	    }

	    function roomSorter(a, b) {
	        a = a.split(' ',2)[1];
	        b = b.split(' ',2)[1];
	        if (a != 1 && a != 2 && a != 3) a = 4;
	        if (b != 1 && b != 2 && b != 3) b = 4;

	        if (a > b) return 1;
	        if (a < b) return -1;
	        return 0;
	    }

@stop