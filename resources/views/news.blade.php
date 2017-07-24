@extends('layouts.home')
@section('title', 'Centro Deportivo La Isleta FIT - Noticias')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

<?php
	use Intervention\Image\ImageManager;
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
									<h1 class="heading text-uppercase">NOTICIAS</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<!--
									<li><a href="#">HOME</a></li>
									<li><a href="#">PORTFOLIO</a></li>
									-->
									<li class="active"><a href="#"> siempre con las últimas novedades</a></li>
								</ul>
							</div>
						</div>
				    </div>
				</header>
                <!-- work section -->
				<section class="work-section padding-top-100 padding-bottom-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-md-9 col-sm-push-4 col-md-push-3">
								<div class="icotop-holder margin-bottom-60">
                                    <!-- portfolio block coll-2 nospace -->
                                    <div class="portfolio-block coll-2 nospace">
                                        <!-- box -->
                                        <div class="box">
                                            <div class="box-holder">
                                                <a href="#" class="over">
                                                    <div class="holder">
                                                        <div class="frame">
                                                            <div class="over-frame">
                                                                <span class="plus">+</span>
                                                                <strong class="title">Nuevo horario del mes de junio ya disponible</strong>
                                                                <p>Puedes acceder al listado completo de actividades</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="stretch">
                                        		<?php
                                        			$ruta = "images/sunny-clock.png";
													$imagen = Image::make($ruta)->fit(435,435)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- portfolio block coll-2 nospace -->
                                    <div class="portfolio-block coll-2 nospace">
                                        <!-- box -->
                                        <div class="box">
                                            <div class="box-holder">
                                                <a href="#" class="over">
                                                    <div class="holder">
                                                        <div class="frame">
                                                            <div class="over-frame">
                                                                <span class="plus">+</span>
                                                                <strong class="title">Terminadas las obras de los nuevos vestuarios de la planta baja</strong>
                                                                <p>Ya puedes hacer uso de las nuevas instalaciones</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="stretch">
                               					<?php
                                        			$ruta = "images/vestuario.jpg";
													$imagen = Image::make($ruta)->fit(435,435)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- portfolio block coll-2 nospace -->
                                    <div class="portfolio-block coll-2 nospace">
                                        <!-- box -->
                                        <div class="box">
                                            <div class="box-holder">
                                                <a href="#" class="over">
                                                    <div class="holder">
                                                        <div class="frame">
                                                            <div class="over-frame">
                                                                <span class="plus">+</span>
                                                                <strong class="title">La Isleta Trail 2017</strong>
                                                                <p>Ya disponible toda la información</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="stretch">
                               					<?php
                                        			$ruta = "images/carrera.png";
													$imagen = Image::make($ruta)->fit(435,435)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- portfolio block coll-2 nospace -->
                                    <div class="portfolio-block coll-2 nospace">
                                        <!-- box -->
                                        <div class="box">
                                            <div class="box-holder">
                                                <a href="#" class="over">
                                                    <div class="holder">
                                                        <div class="frame">
                                                            <div class="over-frame">
                                                                <span class="plus">+</span>
                                                                <strong class="title">La famosa pirámide estaba equivocada</strong>
                                                                <p>Un estudio demuestra que unos hábitos diferentes mejorarían nuestra calidad de vida</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="stretch">
                               					<?php
                                        			$ruta = "images/piramide.gif";
													$imagen = Image::make($ruta)->fit(435,435)->encode("data-url");
												?>
												<img src="{{$imagen}}" alt="image description">
                                            </div>
                                        </div>
                                    </div>                                   
								</div>
								<div class="text-center">
									<a class="btn btn-load" href="#">MOSTRAR MÁS</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-3 col-sm-pull-8 col-md-pull-9">
								<!-- widget -->
								<section class="widget cate-widget">
									<h2>Busca por categoría</h2>
									<ul class="list-unstyled">
										<li><a href="#"><i class="fa fa-caret-right"></i> El centro (16)</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i> Salud y alimentación (4)</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i> General (5)</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i> Competiciones (2)</a></li>
										<!--
										<li><a href="#"><i class="fa fa-caret-right"></i> Magazine (25)</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i> Creative (23)</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i> Winter(2)</a></li>
										-->
									</ul>
								</section>
								<!-- widget -->
								<section class="widget toppost-widget">
									<h2>Las más populares</h2>
									<ul class="list-inline tabset">
										<li class="active"><a href="#tab1">Noticias</a></li>
										<li><a href="#tab2">COMENTarioS</a></li>
									</ul>
									<!-- tab content -->
									<div class="tab-content">
										<!-- tab1 -->
										<div id="tab1">
											<!-- box -->
											<article class="box">
												<div class="img-box">
													<?php
	                                        			$ruta = "images/carrera.png";
														$imagen = Image::make($ruta)->fit(65,65)->encode("data-url");
													?>
												<img src="{{$imagen}}" alt="image description">
												</div>
												<div class="holder">
													<time datetime="2015-01-01">21 MAY 2017</time>
													<h3>La Isleta Trail 2017 </h3>
												</div>
											</article>
											<!-- box -->
											<article class="box">
												<div class="img-box">
													<?php
	                                        			$ruta = "images/sunny-clock.png";
														$imagen = Image::make($ruta)->fit(65,65)->encode("data-url");
													?>
												<img src="{{$imagen}}" alt="image description">
												</div>
												<div class="holder">
													<time datetime="2015-01-01">1 JUN 2017</time>
													<h3>Nuevo horario del mes de junio ya disponible </h3>
												</div>
											</article>
											<!-- box -->
											<article class="box">
												<div class="img-box">
													<?php													
	                                        			$ruta = "images/piramide.gif";
														$imagen = Image::make($ruta)->fit(65,65)->encode("data-url");
													?>
													<img src="{{$imagen}}" alt="image description">
												</div>
												<div class="holder">
													<time datetime="2015-01-01">13 MAY 2017</time>
													<h3>La famosa pirámide está equivocada </h3>
												</div>
											</article>
										</div>
										<!-- tab2 -->
										<div id="tab2">
											<!-- box -->
											<article class="box">
												<time datetime="2015-01-01">13 MAY 2015</time>
												<h3>Terminadas las obras de los nuevos vestuarios de la planta baja </h3>
												<a href="#">Alfredo Pérez</a>
											</article>
											<!-- box -->
											<article class="box">
												<time datetime="2015-01-01">13 MAY 2015</time>
												<h3>Nuevo horario del mes de junio ya disponible </h3>
												<a href="#">María Gutiérrez</a>
											</article>
											<!-- box -->
											<article class="box">
												<time datetime="2015-01-01">13 MAY 2015</time>
												<h3>La Isleta Trail 2017 </h3>
												<a href="#">Juana Méndez</a>
											</article>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</section>
			</main>
</div>

@stop