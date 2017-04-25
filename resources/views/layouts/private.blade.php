<!DOCTYPE html>
<html>
	<head>
		<!-- set the encoding of your site -->
		<meta charset="utf-8" />
		<!-- set the viewport width and initial-scale on mobile devices -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- set the title, description and keywords of your site -->
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')" />
		<meta name="keywords" content="@yield('keywords')" />

		<!-- CSRF_TOKEN() -->
		<meta name="csrf-token" content="{{ csrf_token() }}" />


		<!-- ========= Favicon Icons ========= -->
		<link rel="shortcut icon" href="{{ secure_asset('images/favicon/favicon.ico') }}">
		<!-- Standard iPhone Touch Icon-->
		<link rel="apple-touch-icon" sizes="57x57" href="{{ secure_asset('images/favicon/apple-touch-icon-57x57.png') }}">
		<!-- Retina iPhone Touch Icon-->
		<link rel="apple-touch-icon" sizes="114x114" href="{{ secure_asset('images/favicon/apple-touch-icon-114x114.png') }}">
		<!-- Standard iPad Touch Icon-->
		<link rel="apple-touch-icon" sizes="72x72" href="{{ secure_asset('images/favicon/apple-touch-icon-72x72.png') }}">
		<!-- Retina iPad Touch Icon-->
		<link rel="apple-touch-icon" sizes="144x144" href="{{ secure_asset('images/favicon/apple-touch-icon-144x144.png') }}">
		<!-- include Google fonts  -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900%7CRaleway:400,100,200,300,500,600,700,800,900%7CGreat+Vibes%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<!-- Links pasados a formato LARAVEL 5 -->
		<link rel="stylesheet" href="{{ secure_asset('css/font-awesome.min.css') }}" />
		<link rel="stylesheet" href="{{ secure_asset('css/page-assets.css') }}" />
		<link rel="stylesheet" href="{{ secure_asset('css/helper-elements.css') }}" />
		<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}" />
		<link rel="stylesheet" href="{{ secure_asset('css/color/color.css') }}" />
		<link rel="stylesheet" href="{{ secure_asset('css/animate.css') }}" />
		<!-- Nuevos links de la misma versión. FALTA PASAR A LARAVEL Y PONER EN LOCAL. -->
		<link rel="stylesheet" href="{{ secure_asset('css/bootstrap-table.css') }}" />
		<link rel="stylesheet" href="{{ secure_asset('css/address.css') }}" />
		<!--
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		-->
		<!-- Latest compiled and minified CSS -->
		

		<!-- ¡¡¡IMPORTANTE!!!-->

		<!-- CAMBIANDO LA LOCAL POR LA ONLINE SE SOLUCIONAN LOS PROBLEMAS DE LOS ICONOS QUE NO SE VEN Y LOS COLORES DE FONDO AL PASAR EL RATÓN POR ENCIMA -->
		

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<!--<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />-->
		

		<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

		
		<!--<link rel="stylesheet" href="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">-->
		

		<!--
		<style>
		a.accordion-toggle {
		  display: block;
		  padding: 10px  15px;
		}

		div.panel-heading {
		  padding: 0;
		}
		</style>
		-->
	</head>
	<body class="no-transition">
		<!-- Page pre loader -->
	    <div id="pre-loader">
	        <div class="loader-holder">
	            <div class="frame">
	                <img src="{{ secure_asset('images/preloader/logo.png') }}" alt="Fekra"/>
	                <div class="spinner7">
	                    <div class="circ1"></div>
	                    <div class="circ2"></div>
	                    <div class="circ3"></div>
	                    <div class="circ4"></div>
	                </div>
	            </div>
	        </div>
	    </div>
		<!-- main container of all the page elements -->
		<div id="wrapper">
			<!-- ESTO ES LO NUEVO -->
			<div class="w1">
				<!-- header of the page style2 -->
				<header id="header" class="style21">
					<div class="container">
						
						<!-- header top -->
						<div class="col-xs-12 header-top">

						</div>
						
						<div class="row">
							<div class="col-xs-12">
								<!-- page logo -->
								<div class="logo">
									<a href="{{ secure_url('/') }}">
										<img src="{{ secure_asset('images/logo-fitness2.png') }}" alt="Fekra" class="img-responsive w-logo">
										<img src="{{ secure_asset('images/logoFIT.png') }}" alt="Fekra" class="img-responsive b-logo" />
										<!--
										<img src="images/logoguay.png" alt="Fekra" class="img-responsive b-logo">
										-->
										<!--
										<img src="images/logo-fitness.png" alt="Fekra" class="img-responsive b-logo">
										-->
									</a>
								</div>
								<div class="holder">
									<!-- icon list -->
									<ul class="list-unstyled icon-list">
										<li>
											<a href="#" class="search-opener opener-icons"><i class="fa fa-search"></i></a>
										</li>
										<!-- ESTO ES EL PRINCIPIO DE LA PRUEBA DEL LOGIN -->
																		<!-- cart box -->	
																		
										@if (Auth::check())
											@if (Auth::user()->user == 0)
												<li><a href="{{secure_url('user')}}" class="opener-icons"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
											@elseif (Auth::user()->user == 1)
												<li><a href="{{secure_url('admin')}}" class="opener-icons"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
											@endif
											<li><a href="{{secure_url('auth/logout')}}" class="opener-icons"><i class="fa fa-sign-out"></i> Salir</a></li>
										@else
											<li><a href="#" class="user-opener opener-icons"><i class="fa fa-lock"></i><small> ÁREA PRIVADA</small></a></li>
										@endif	
										
										
										<!-- ESTO ES EL FIN DE LA PRUEBA DEL LOGIN -->
									</ul>
									<!-- main navigation of the page -->
									<nav id="nav">
										<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
										<div class="nav-holder">
											<ul class="list-inline nav-top">
												<li>
													<a href="{{ secure_url('/') }}">Inicio</a>
												</li>
												<li>
													<a href="{{ secure_url('/') }}">El Centro</a>
													<div class="drop">
														<div class="coll">
															<ul class="list-unstyled">
																<li><a href="{{ secure_url('/facilities') }}">LAS INSTALACIONES</a></li>
																<li><a href="{{ secure_url('/team') }}">EL EQUIPO</a></li>
																<li><a href="{{ secure_url('/activities') }}">LAS ACTIVIDADES</a></li>
																
															</ul>
														</div>
													</div>
												</li>
												<li>
													<a href="{{ secure_url('/seeschedule') }}">Horario</a>
												</li>
												<li>
													<a href="{{ secure_url('/news') }}">Noticias</a>		
												</li>
												@if (!Auth::check())
												<li>
													<a href="{{ secure_url('auth/register') }}">Suscripción</a>										
												</li>
												@endif
												<li>
													<a href="{{ secure_url('/blog') }}">Vive LaIsletaFIT</a>				
												</li>
											</ul>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</header>
				<!-- search popup -->
				<div class="search-popup win-height">
					<div class="holder">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<a href="#" class="close-btn">close</a>
									<form action="#" class="search-form">
										<fieldset>
											<input type="search" placeholder="¿Qué quieres buscar?" class="search">
											<button class="submit"><i class="fa fa-search"></i></button>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- user popup -->
				<div class="user-popup win-height">
					<div class="holder">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<a href="#" class="close-btn2">close</a>
									<!--
									<form action="#" class="user-form">
										<fieldset>
											<input type="search" placeholder="search..." class="search">
											<button class="submit"><i class="fa fa-user"></i></button>
										</fieldset>
									</form>

									-->
									<form class="user-form" method="post" action="{{secure_url('auth/login')}}">
		                                {!! csrf_field() !!}
		                                <fieldset>
			                                <input type="email" name="email" id="email" placeholder="Introduce tu email" />
			                                <input type="password" name="password" id="password" placeholder="Introduce tu contraseña" />

			                                <label for="remember">No cerrar sesión:</label>
		   									<input type="checkbox" name="remember" />
			                              
			                                <button type="submit" class="submit"><i class="fa fa-user"></i>Acceder</button>
			                            </fieldset>
		                        	</form>
		                        	
								</div>
							</div>
						</div>
					</div>
				</div>
				<main id="main" role="main">
				<!-- FIN DE LA PRIMERA PARTE DE LO NUEVO -->
					@yield('content')	
				<!-- COMIENZO DE LA SEGUNDA PARTE DE LO NUEVO -->
				</main>
					<!-- footer of the page -->
					<footer id="footer" class="style15">
						<!-- footer cent -->
						<div class="footer-cent">
			                <div class="container">
			                    <div class="row">
			                        <div class="col-xs-12 col-sm-6 col-md-3 info-box column1">
			                            <!-- f info col -->
			                            <div class="f-info-col">		  
			                            <!--<img src="{{ asset('images/logo-fitness2.png') }}" alt="Fekra" class="img-responsive w-logo">-->
										<!--<img src="{{ asset('images/logoguay.png') }}" alt="Fekra" class="img-responsive b-logo" />-->
			                                <div class="logo"><a href="{{ secure_url('/') }}"><img src="{{ secure_asset('images/logopeque3.png') }}" alt="Logo"></a></div>
			                                <p>El centro deportivo preferido de toda la familia. No olvides seguirnos en las redes sociales para estar informado de las últimas noticias y novedades.</p>
			                                <!-- footer-social -->
			                                <ul class="list-inline footer-social">
			                                    <li><a target="_blank" href="https://facebook.com/cdlaisleta"><i class="fa fa-facebook"></i></a></li>
												<li><a target="_blank" href="https://twitter.com/cdlaisleta"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" href="https://play.spotify.com/user/cdlaisleta"><i class="fa fa-spotify"></i></a></li>
												<li><a target="_blank" href="https://plus.google.com/u/0/113009037857170534534"><i class="fa fa-google-plus"></i></a></li>
												<li><a target="_blank" href="https://www.instagram.com/cdlaisleta/"><i class="fa fa-instagram"></i></a></li>
			                                </ul>
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-3 column3">
			                            <!-- f contact info2 -->
			                            <div class="f-contact-info2">
			                                <h5><span class="add-color">Datos</span> Contacto</h5>
			                                <address><i class="fa fa-map-marker"></i> Avenida de la Universidad, 14, Las Palmas de Gran Canaria</address>
			                                <div class="mail-box2">
			                                    <span class="mail-box"><i class="fa fa-clock-o"></i> Abierto todos los días de 7:00 a 23:00</span>
			                                </div>
			                                <div class="tel-holder">
			                                    <span class="tel-box"><i class="fa fa-phone"></i> <a class="tel" href="tel:928987654">928 98 76 54</a></span>
			                                </div>
			                                <div class="mail-box2">
			                                    <span class="mail-box"><i class="fa fa-envelope-o"></i> <a class="email" href="mailto:info@cdlaisleta.com"> info@cdlaisleta.com</a></span>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-3 column3 clearfix-sm">
			                            <!-- f lastest news -->
			                            <div class="f-lastest-news">
			                                <h5><span class="add-color">Últimas</span> noticias</h5>
			                                <!-- footer-news-box -->
			                                <div class="footer-news-box">
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/violenciamachista.jpg";
														$imagen = Image::make($ruta)->fit(70,70)->encode("data-url");
													?>
													<a href="#"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="txt">
			                                        <p><a href="#">Día contra la violencia machista.</a></p>
			                                        <time datetime="2015-02-02">25 NOV 2016</time>
			                                    </div>
			                                </div>
			                                <!-- footer-news-box -->
			                                <div class="footer-news-box">
			                                    <div class="img-box">
			                                     	<?php
														$ruta = "images/horariodiciembre.jpg";
														$imagen = Image::make($ruta)->fit(70,70)->encode("data-url");
													?>
													<a href="#"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="txt">
			                                        <p><a href="#">Nuevo horario del mes de diciembre ya disponible.</a></p>
			                                        <time datetime="2015-02-02">1 DIC 2016</time>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-3 column4">
			                            <!-- f flicker -->
			                            <div class="f-flicker">
											<h5><span class="add-color">Fotos</span> Instagram</h5>
											<!--<div class="flickr-feed" data-count="9" data-id="20154996@N00"></div>-->
											<!--
											<h5><span class="add-color">Fotos</span> Instagram</h5>
											<div class="flickr-feed" data-id="121500546@N06" data-count="9"></div>
											-->

			                                <!-- footer-news-box -->
			                                <div class="footer-news-box">
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/instafotos/insta1.jpg";
														$imagen = Image::make($ruta)->fit(60,60)->encode("data-url");
														$imagenG = Image::make($ruta)->encode("data-url");
													?>
													<a href="{{$imagenG}}" class="search lightbox"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/instafotos/insta2.jpg";
														$imagen = Image::make($ruta)->fit(60,60)->encode("data-url");
														$imagenG = Image::make($ruta)->encode("data-url");
													?>
													<a href="{{$imagenG}}" class="search lightbox"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/instafotos/insta3.jpg";
														$imagen = Image::make($ruta)->fit(60,60)->encode("data-url");
														$imagenG = Image::make($ruta)->encode("data-url");
													?>
													<a href="{{$imagenG}}" class="search lightbox"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/instafotos/insta4.jpg";
														$imagen = Image::make($ruta)->fit(60,60)->encode("data-url");
														$imagenG = Image::make($ruta)->encode("data-url");
													?>
													<a href="{{$imagenG}}" class="search lightbox"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/instafotos/insta5.jpg";
														$imagen = Image::make($ruta)->fit(60,60)->encode("data-url");
														$imagenG = Image::make($ruta)->encode("data-url");
													?>
													<a href="{{$imagenG}}" class="search lightbox"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/instafotos/insta6.jpg";
														$imagen = Image::make($ruta)->fit(60,60)->encode("data-url");
														$imagenG = Image::make($ruta)->encode("data-url");
													?>
													<a href="{{$imagenG}}" class="search lightbox"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/instafotos/insta7.jpg";
														$imagen = Image::make($ruta)->fit(60,60)->encode("data-url");
														$imagenG = Image::make($ruta)->encode("data-url");
													?>
													<a href="{{$imagenG}}" class="search lightbox"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/instafotos/insta8.jpg";
														$imagen = Image::make($ruta)->fit(60,60)->encode("data-url");
														$imagenG = Image::make($ruta)->encode("data-url");
													?>
													<a href="{{$imagenG}}" class="search lightbox"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                    <div class="img-box">
			                                        <?php
														$ruta = "images/instafotos/insta9.jpg";
														$imagen = Image::make($ruta)->fit(60,60)->encode("data-url");
														$imagenG = Image::make($ruta)->encode("data-url");
													?>
													<a href="{{$imagenG}}" class="search lightbox"><img src="{{$imagen}}" alt="image description"></a>
			                                    </div>
			                                   
			                                </div>

			                            </div>
			                        </div>
			                    </div>
			                </div>
						</div>
						<!-- footer bottom -->
						<div class="footer-bottom">
			                <div class="container">
			                    <div class="row">
			                        <div class="col-xs-12">
			                            <!-- bottom box1 -->
			                            <div class="bottom-box1">
			                                <!-- footer nav -->
			                                <ul class="list-inline footer-nav">
			                                    <li><a href="{{ secure_url('/') }}">| Inicio</a></li>
			                                    <!--<li><a href="#">About Us</a></li>-->
			                                    <!--<li><a href="#">| Sobre nosotros</a></li>-->
			                                    <!--<li><a href="#">PROJECTS</a></li>-->
			                                    <li><a href="{{ secure_url('/contact') }}">| Contacto</a></li>
			                                   	<li><a href="{{ secure_url('/jobs') }}">| Trabaja con nosotros</a></li>
			                                    <!--<li><a href="#">PRIVACY POLICY</a></li>-->
			                                    <li><a href="{{ secure_url('/privacy') }}">| Política de privacidad</a></li>
			                                </ul>
			                                <span class="copyright">&copy; 2017 <a href="{{ secure_url('/') }}">Centro Deportivo LaIsletaFIT</a></span>
			                            </div>
			                        </div>
			                    </div>
			                </div>
						</div>
						<div class="parallax-holder">
							<!--<div class="parallax-frame"><img src="http://placehold.it/1920x451" height="451" width="1920" alt="image description"></div>-->
							
							<div class="parallax-frame"><img src="{{ secure_asset('images/fueradelcentrogrande.jpg') }}" height="451" width="1920" alt="image description"></div>
						</div>
					</footer>
				</div>
			    <!-- popup-holder -->
				<div class="popup-holder">
					<!-- popup1 -->
					<div id="popup1" class="lightbox team-lightbox">
						<div class="img-box">
							<img src="//placehold.it/250x320" alt="image description"/>
						</div>
						<div class="holder">
							<strong class="title">Mohammed Arafa</strong>
							<strong class="subtitle">FOUNDER AND CEO</strong>
							<p>Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
							<ul class="list-unstyled socialnetworks">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- popup2 -->
					<div id="popup2" class="lightbox team-lightbox">
						<div class="img-box">
							<img src="//placehold.it/250x320" alt="image description"/>
						</div>
						<div class="holder">
							<strong class="title">Fatma Mahmoud</strong>
							<strong class="subtitle">PROJECT MANAGEMENT</strong>
							<p>Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
							<ul class="list-unstyled socialnetworks">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- popup3 -->
					<div id="popup3" class="lightbox team-lightbox">
						<div class="img-box">
							<img src="//placehold.it/250x320" alt="image description"/>
						</div>
						<div class="holder">
							<strong class="title">Hossam Eldin Mostafa</strong>
							<strong class="subtitle">IT LEADER</strong>
							<p>Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
							<ul class="list-unstyled socialnetworks">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- popup4 -->
					<div id="popup4" class="lightbox team-lightbox">
						<div class="img-box">
							<img src="//placehold.it/250x320" alt="image description"/>
						</div>
						<div class="holder">
							<strong class="title">Amanay Abdel Fattah</strong>
							<strong class="subtitle">VISUAL DESIGNER</strong>
							<p>Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
							<ul class="list-unstyled socialnetworks">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="fa fa-chevron-up" id="gotoTop" style="display: none;"></div>

				<!-- FIN DE LO NUEVO -->
		</div>

		<!-- include jQuery library -->
		<script type="text/javascript" src="{{ secure_asset('js/jquery-1.11.3.min.js') }}"></script>
		<!-- include custom JavaScript -->
		<script type="text/javascript" src="{{ secure_asset('js/jquery.main.js') }}"></script>
		<!-- include plugins JavaScript -->
		<script type="text/javascript" src="{{ secure_asset('js/plugins.js') }}"></script>
		<!-- Latest compiled and minified JavaScript -->
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
		<script type="text/javascript" src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
		<!-- include Bootstrap tabs JavaScript -->
		<script type="text/javascript" src="{{ secure_asset('js/responsive-tabs.js') }}"></script>
		<!-- include Bootstrap table JavaScript -->
		<script type="text/javascript" src="{{ secure_asset('js/bootstrap-table.js') }}"></script>
		<!-- put your locale files after bootstrap-table.js -->
		<script type="text/javascript" src="{{ secure_asset('js/bootstrap-table-es-ES.js') }}"></script>
		<!-- include Bootstrap table editable JavaScript -->
		<!--<script type="text/javascript" src="{{ URL::asset('js/bootstrap-editable.js') }}"></script>-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
		<!-- include Bootstrap table editable address type JavaScript -->
		<script type="text/javascript" src="{{ secure_asset('js/address.js') }}"></script>



		<script type="text/javascript">
	        @yield ('scripts')
	    </script>
	</body>
</html>