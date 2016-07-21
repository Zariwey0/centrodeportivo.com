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
		<!-- ========= Favicon Icons ========= -->
		<link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}">
		<!-- Standard iPhone Touch Icon-->
		<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicon/apple-touch-icon-57x57.png') }}">
		<!-- Retina iPhone Touch Icon-->
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon/apple-touch-icon-114x114.png') }}">
		<!-- Standard iPad Touch Icon-->
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/apple-touch-icon-72x72.png') }}">
		<!-- Retina iPad Touch Icon-->
		<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon/apple-touch-icon-144x144.png') }}">
		<!-- include Google fonts  -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900%7CRaleway:400,100,200,300,500,600,700,800,900%7CGreat+Vibes%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<!-- Links pasados a formato LARAVEL 5 -->
		
		<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/page-assets.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/helper-elements.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/color/color.css') }}" />
		<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}" />
		<!-- Nuevos links de la misma versión. FALTA PASAR A LARAVEL Y PONER EN LOCAL. -->
		<!--
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
	                <img src="{{ asset('images/preloader/logo.png') }}" alt="Fekra"/>
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
									<a href="#">
										<img src="{{ asset('images/logo-fitness2.png') }}" alt="Fekra" class="img-responsive w-logo">
										<img src="{{ asset('images/logoguay.png') }}" alt="Fekra" class="img-responsive b-logo">
										<!--
										<img src="images/logopropio2.png" alt="Fekra" class="img-responsive b-logo">-->
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
												<li><a href="{{url('user')}}" class="opener-icons"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
											@elseif (Auth::user()->user == 1)
												<li><a href="{{url('admin')}}" class="opener-icons"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
											@endif
											<li><a href="{{url('auth/logout')}}" class="opener-icons"><i class="fa fa-sign-out"></i> Salir</a></li>
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
													<a href="index.html">Home</a>
													
												</li>
												<li>
													<a href="pages.html">Pages</a>
													
												</li>
												<li>
													<a href="features.html">Features</a>
													<div class="drop">
														<ul class="list-unstyled">
															<li>
																<a href="rs-slider.html">SLIDERs</a>
															</li>
															<li>
																<a href="index-agency.html#header">Headers</a>
															</li>
															<li>
																<a href="index-agency.html#footer">Footers</a>
															</li>
															<li>
																<a href="page-title.html">Page Title</a>
															</li>
														</ul>
													</div>
												</li>
												<li>
													<a href="portfolio.html">Portfolio</a>
												</li>
												<li>
													<a href="blogs.html">Blogs</a>
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
											<input type="search" placeholder="search..." class="search">
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
									<form class="user-form" method="post" action="{{url('auth/login')}}">
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
			                                <div class="logo"><a href="#"><img src="{{ asset('images/construction/img25.png') }}" alt="Fekra"></a></div>
			                                <p>Mea omnium explicari te, eu sit vidit harum fabellas, his no legere feugaitper in laudem malorum epicuri,.</p>
			                                <!-- footer-social -->
			                                <ul class="list-inline footer-social">
			                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
			                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
			                                    <li><a href="#"><i class="fa fa-apple"></i></a></li>
			                                </ul>
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-3 column3">
			                            <!-- f contact info2 -->
			                            <div class="f-contact-info2">
			                                <h5><span class="add-color">darna</span> office</h5>
			                                <address><i class="fa fa-map-marker"></i> 1422 1st St. Santa Rosa,t CA 94559. USA</address>
			                                <div class="mail-box2">
			                                    <span class="mail-box"><i class="fa fa-clock-o"></i> Opening from 10.00 am L 5.00p.m Sunday is off</span>
			                                </div>
			                                <div class="tel-holder">
			                                    <span class="tel-box"><i class="fa fa-phone"></i> <a class="tel" href="tel:00201008431112">002- 01008431112</a></span>
			                                </div>
			                                <div class="mail-box2">
			                                    <span class="mail-box"><i class="fa fa-envelope-o"></i> <a class="email" href="mailto:admin@e-mail.com"> admin@e-mail.com</a></span>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-3 column3 clearfix-sm">
			                            <!-- f lastest news -->
			                            <div class="f-lastest-news">
			                                <h5><span class="add-color">Latest</span> NEWS</h5>
			                                <!-- footer-news-box -->
			                                <div class="footer-news-box">
			                                    <div class="img-box">
			                                        <a href="#"><img src="http://placehold.it/70x70" alt="image description"></a>
			                                    </div>
			                                    <div class="txt">
			                                        <p><a href="#">Lorem Ipsum is simply dummy text of the printing typese.</a></p>
			                                        <time datetime="2015-02-02">2 FEB 2015</time>
			                                    </div>
			                                </div>
			                                <!-- footer-news-box -->
			                                <div class="footer-news-box">
			                                    <div class="img-box">
			                                        <a href="#"><img src="http://placehold.it/70x70" alt="image description"></a>
			                                    </div>
			                                    <div class="txt">
			                                        <p><a href="#">Lorem Ipsum is simply dummy text of the printing typese.</a></p>
			                                        <time datetime="2015-02-02">2 FEB 2015</time>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-xs-12 col-sm-6 col-md-3 column4">
			                            <!-- f flicker -->
			                            <div class="f-flicker">
											<h5><span class="add-color">Instgram</span> Photos</h5>
											<div class="insta-box instagram-photos" data-count="8" data-user="e37e5979509b44cb811a8be2b1067f11"></div>
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
			                                    <li><a href="#">Home</a></li>
			                                    <li><a href="#">About Us</a></li>
			                                    <li><a href="#">PROJECTS</a></li>
			                                    <li><a href="#">CONTACT</a></li>
			                                    <li><a href="#">PRIVACY POLICY</a></li>
			                                </ul>
			                                <span class="copyright">&copy; 2015 <a href="#">Fekra corporation</a></span>
			                            </div>
			                        </div>
			                    </div>
			                </div>
						</div>
						<div class="parallax-holder">
							<div class="parallax-frame"><img src="http://placehold.it/1920x451" height="451" width="1920" alt="image description"></div>
						</div>
					</footer>
				</div>
			    <!-- popup-holder -->
				<div class="popup-holder">
					<!-- popup1 -->
					<div id="popup1" class="lightbox team-lightbox">
						<div class="img-box">
							<img src="http://placehold.it/250x320" alt="image description"/>
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
							<img src="http://placehold.it/250x320" alt="image description"/>
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
							<img src="http://placehold.it/250x320" alt="image description"/>
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
							<img src="http://placehold.it/250x320" alt="image description"/>
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
		<script type="text/javascript" src="{{ URL::asset('js/jquery-1.11.3.min.js') }}"></script>
		<!-- include custom JavaScript -->
		<script type="text/javascript" src="{{ URL::asset('js/jquery.main.js') }}"></script>
		<!-- include plugins JavaScript -->
		<script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>
		<!-- include Bootstrap tabs JavaScript -->
		<script type="text/javascript" src="{{ URL::asset('js/responsive-tabs.js') }}"></script>
	</body>
</html>