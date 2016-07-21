<!DOCTYPE html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the title of your site -->
	<title>Centro Deportivo</title>
	<!-- ========= Favicon Icons ========= -->
	<link rel="shortcut icon" href="images/favicon/favicon.ico">
	<!-- Standard iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png">
	<!-- Retina iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
	<!-- Standard iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
	<!-- Retina iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png">
	<!-- include Google fonts  -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic%7CPlayfair+Display:400,400italic,700,700italic,900,900italic%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900%7CRaleway:400,100,200,300,500,600,700,800,900%7CGreat+Vibes%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
	
	<!-- Links pasados a formato LARAVEL 5 -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/page-assets.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/helper-elements.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/color/color.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}" />

	<!-- include the site stylesheet of bootstrap  -->
	<!--
	<link rel="stylesheet" href="css/bootstrap.css">
	-->
	<!-- include the font awesome stylesheet  -->
	<!--
	<link rel="stylesheet" href="css/font-awesome.min.css">
	-->
	<!-- include the stylesheets of headers and footer of the page  -->
	<!--
	<link rel="stylesheet" type="text/css" href="css/page-assets.css">
	-->
	<!-- include the helping elements stylesheets of  the page  -->
	<!--
	<link rel="stylesheet" type="text/css" href="css/helper-elements.css">
	-->
	<!-- include the site stylesheet  -->
	<!--
	<link rel="stylesheet" type="text/css" href="style.css">
	-->
	<!-- include the site color stylesheet  -->
	<!--
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
	-->
    <!-- include the site animation stylesheet  -->
    <!--
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    -->

</head>
<body>
	<!-- Page pre loader -->
    <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="images/preloader/pesi.png" alt="Fekra"/>
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
		<div class="w1">
			<!-- header of the page style2 -->
			<header id="header" class="style22">
				<div class="container">
					<div class="row">
						<!-- header top -->
						<div class="col-xs-12 header-top">
							<!-- language nav -->
							<nav class="nav language-nav">
								<ul class="list-inline">
									<li><a href="#">en</a></li>
									<li><a href="#">tr</a></li>
									<li><a href="#">fr</a></li>
								</ul>
							</nav>
							<!-- top nav -->
							<nav class="top-nav">
								<ul class="list-inline">
									<li><a href="#">MY ACCOUNT</a></li>
									<li><a href="shop-checkout.blade.php">WISHLIST</a></li>
									<li><a href="login.blade.php">LOGIN</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<!-- page logo -->
							<div class="logo">
								<a href="#">
									<img src="images/travel/logo-w.png" alt="Fekra" class="img-responsive w-logo">
									<img src="images/travel/logo-b.png" alt="Fekra" class="img-responsive b-logo">
								</a>
							</div>
							<div class="holder">
								<!-- icon list -->
								<ul class="list-unstyled icon-list">
									<li>
										<a href="#" class="search-opener opener-icons"><i class="fa fa-search"></i></a>
									</li>
									<!-- cart box -->
									<li class="cart-box">
										<a href="#" class="cart-opener opener-icons">
											<i class="fa fa-shopping-cart"></i>
											<span class="cart-num">5</span>
										</a>
										<!-- cart drop -->
										<div class="cart-drop">
											<div class="cart-holder">
												<strong class="main-title">shopping cart</strong>
												<ul class="cart-list list-unstyled">
													<li>
														<div class="image">
															<a href="#"><img src="http://placehold.it/56x56" alt="Image Description"></a>
														</div>
														<div class="description">
															<span class="product-name"><a href="#">Product Name</a></span>
															<ul class="rating list-inline">
																<li><a href="#" class="fa fa-star"></a></li>
																<li><a href="#" class="fa fa-star"></a></li>
																<li><a href="#" class="fa fa-star"></a></li>
																<li><a href="#" class="fa fa-star"></a></li>
																<li><a href="#" class="fa fa-star-o"></a></li>
															</ul>
															<div class="price-area">
																<span class="price">$80</span>
																<span class="quantity">x2</span>
															</div>
														</div>
														<a href="#" class="delete fa fa-times"></a>
													</li>
													<li>
														<div class="image">
															<a href="#"><img src="http://placehold.it/56x56" alt="Image Description"></a>
														</div>
														<div class="description">
															<span class="product-name"><a href="#">Product Name</a></span>
															<ul class="rating list-inline">
																<li><a href="#" class="fa fa-star"></a></li>
																<li><a href="#" class="fa fa-star"></a></li>
																<li><a href="#" class="fa fa-star"></a></li>
																<li><a href="#" class="fa fa-star"></a></li>
																<li><a href="#" class="fa fa-star-o"></a></li>
															</ul>
															<div class="price-area">
																<span class="price">$80</span>
																<span class="quantity">x2</span>
															</div>
														</div>
														<a href="#" class="delete fa fa-times"></a>
													</li>
												</ul>
												<div class="total-price-area">
													<span class="title-text text-uppercase">total:</span>
													<span class="price">$160</span>
												</div>
												<ul class="btn-list list-unstyled">
													<li><a href="#" class="btn btn-default"><span>checkout</span></a></li>
													<li><a href="#" class="btn btn-default add"><span>view cart</span></a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
								<!-- main navigation of the page -->
								<nav id="nav">
									<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
									<div class="nav-holder">
										<ul class="list-inline nav-top">
											<li>
												<a href="index-agency.blade.php">Home</a>
												<div class="mega-drop">
													<div class="drop-holder">
														<div class="coll">
															<strong class="title">HOME</strong>
															<ul class="list-unstyled">
																<li><a href="/agency">Home - Agency</a></li>
																<li><a href="index-business.blade.php">Home - Business</a></li>
																<li><a href="index-creative.blade.php">Home - Creative</a></li>
																<li><a href="index-croporate.blade.php">Home - Croporate</a></li>
																<li><a href="index-minimal.blade.php">Home - Minimal</a></li>
																<li><a href="index-personal.blade.php">Home - Personal</a></li>
																<li><a href="index-photographer.blade.php">Home - Photographer</a></li>
																<li><a href="index-freelancer.blade.php">Home - Freelancer</a></li>
																<li><a href="index-wedding.blade.php">Home - Wedding</a></li>
																<li><a href="index-shop.blade.php">Home - Shop</a></li>
																<li><a href="index-restaurant.blade.php">Home - Restaurant</a></li>
																<li><a href="index-home-parallax.blade.php">Home - Parallax</a></li>
																<li><a href="index-architecture.blade.php">Home - Architecture</a></li>
																<li><a href="index-construction.blade.php">Home - Construction</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">HOME</strong>
															<ul class="list-unstyled">
																<li><a href="index-app-showcase.blade.php">Home - App Showcase</a></li>
																<li><a href="index-education.blade.php">Home - Education</a></li>
																<li><a href="index-lawyer.blade.php">Home - Lawyer</a></li>
																<li><a href="index-plumber.blade.php">Home - Plumber</a></li>
																<li><a href="index-real-estate.blade.php">Home - Real Estate</a></li>
																<li class="active"><a href="index-travel.blade.php">Home - Travel</a></li>
																<li><a href="index-yoga.blade.php">Home - Yoga</a></li>
																<li><a href="index-spa.blade.php">Home - Spa</a></li>
															</ul>
															<strong class="title">HOME Portfolio</strong>
															<ul class="list-unstyled">
																<li><a href="index-portfolio.blade.php">Home - Portfolio 1</a></li>
																<li><a href="index-portfolio-2.blade.php">Home - Portfolio 2</a></li>
																<li><a href="index-portfolio-3.blade.php">Home - Portfolio 3</a></li>
																<li><a href="index-portfolio-4.blade.php">Home - Portfolio 4</a></li>
																<li><a href="index-portfolio-5.blade.php">Home - Portfolio 5</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">HOME Blog</strong>
															<ul class="list-unstyled">
																<li><a href="index-blog.blade.php">Home - Blog 1</a></li>
																<li><a href="index-blog-2.blade.php">Home - Blog 2</a></li>
																<li><a href="index-blog-3.blade.php">Home - Blog 3</a></li>
																<li><a href="index-blog-4.blade.php">Home - Blog 4</a></li>
															</ul>
															<strong class="title">one page</strong>
															<ul class="list-unstyled">
																<li><a href="index-one-page.blade.php">onepage - Default</a></li>
																<li><a href="index-onepage-agency.blade.php">onepage - Agency</a></li>
																<li><a href="index-onepage-business.blade.php">onepage - Business</a></li>
																<li><a href="index-onepage-creative.blade.php">onepage - Creative</a></li>
																<li><a href="index-onepage-croporate.blade.php">onepage - Croporate</a></li>
																<li><a href="index-onepage-minimal.blade.php">onepage - Minimal</a></li>
																<li><a href="index-onepage-personal.blade.php">onepage - Personal</a></li>
																<li><a href="index-onepage-freelancer.blade.php">onepage - Freelancer</a></li>
																<li><a href="index-onepage-Wedding.blade.php">onepage - Wedding</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">one page</strong>
															<ul class="list-unstyled">
																<li><a href="index-onepage-restaurant.blade.php">onepage - restaurant</a></li>
																<li><a href="index-onepage-architecture.blade.php">onepage - Architecture</a></li>
																<li><a href="index-onepage-construction.blade.php">onepage - Construction</a></li>
																<li><a href="index-onepage-education.blade.php">onepage - Education</a></li>
																<li><a href="index-onepage-lawyer.blade.php">onepage - Lawyer</a></li>
																<li><a href="index-onepage-plumber.blade.php">onepage - Plumber</a></li>
																<li><a href="index-onepage-travel.blade.php">onepage - Travel</a></li>
																<li><a href="index-onepage-yoga.blade.php">onepage - Yoga</a></li>
																<li><a href="index-onepage-spa.blade.php">onepage - Spa</a></li>
															</ul>
															<strong class="title">landing Page</strong>
															<ul class="list-unstyled">
																<li><a href="index-app-showcase.blade.php">Home - App Showcase</a></li>
																<li><a href="index-applanding-page.blade.php">Home - Applanding Page</a></li>
																<li><a href="index-applanding-page2.blade.php">Home - Applanding Page 2</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li>
												<a href="pages.blade.php">Pages</a>
												<div class="mega-drop">
													<div class="drop-holder">
														<div class="coll">
															<strong class="title">COMPANY</strong>
															<ul class="list-unstyled">
																<li><a href="/about">ABOUT US</a></li>
																<li><a href="about-me.blade.php">ABOUT ME</a></li>
																<li><a href="clients.blade.php">CLIENTS</a></li>
																<li><a href="testimonials.blade.php">TESTIMONIALS</a></li>
																<li><a href="team.blade.php">OUR TEAM</a></li>
																<li><a href="team-single.blade.php">TEAM SINGLE</a></li>
																<li><a href="contact.blade.php">contact</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">UTLITY</strong>
															<ul class="list-unstyled">
																<li><a href="services.blade.php">services</a></li>
																<li><a href="services2.blade.php">service 2</a></li>
																<li><a href="faq-1.blade.php">FAQ LAYOUT 1</a></li>
																<li><a href="faq-2.blade.php">FAQ LAYOUT 2</a></li>
																<li><a href="faq-3.blade.php">FAQ LAYOUT 3</a></li>
																<li><a href="sitemap.blade.php">sitemap</a></li>
																<li><a href="blank-page.blade.php">blank page</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">LAYOUT DESIGN</strong>
															<ul class="list-unstyled">
																<li><a href="layout-full-widthwide.blade.php">LAYOUT WIDE</a></li>
																<li><a href="layout-full-width.blade.php">FULL WIDTH</a></li>
																<li><a href="layout-left-sidebar.blade.php">LEFT SIDE BAR</a></li>
																<li><a href="layout-right-sidebar.blade.php">RIGHT SIDEBAR</a></li>
																<li><a href="layout-both-sidebar.blade.php">both  SIDEBAR</a></li>
																<li><a href="layout-side-navigation.blade.php">SIDE NAVIGATION</a></li>
																<li><a href="index-freelancer.blade.php">vertical menu</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">Miscellaneous</strong>
															<ul class="list-unstyled">
																<li><a href="comming-soon.blade.php">coming soon layout 1</a></li>
																<li><a href="comming-soon2.blade.php">coming soon layout 2</a></li>
																<li><a href="comming-soon3.blade.php">coming soon layout 3</a></li>
																<li><a href="404.blade.php">404 - layout 1</a></li>
																<li><a href="404-2.blade.php">404 - layout 2</a></li>
																<li><a href="404-3.blade.php">404 - layout 3</a></li>
																<li><a href="login.blade.php">Login</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li>
												<a href="features.blade.php">Features</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="rs-slider.blade.php">SLIDERs</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="rs-slider.blade.php">REVOLUTION SLIDER</a></li>
																	<li><a href="index-onepage-interactive.blade.php">interactive</a></li>
																	<li><a href="index-parallax.blade.php">parallax</a></li>
																	<li><a href="index-youtube.blade.php">YOUTUBE</a></li>
																	<li><a href="index-vimeo.blade.php">VIMEO</a></li>
																	<li><a href="index-html5video.blade.php">HTML5 VIDEO</a></li>
																	<li><a href="index-text-rotator.blade.php">TEXT ROTATER</a></li>
																	<li><a href="index-fixed-background.blade.php">FIXED BACKGROUND</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="index-agency.blade.php#header">Headers</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="index-agency.blade.php#header">Headers - Layout 1</a></li>
																	<li><a href="index-business.blade.php#header">Headers - Layout 2</a></li>
																	<li><a href="index-croporate.blade.php#header">Headers - Layout 3</a></li>
																	<li><a href="index-creative.blade.php#header">Headers - Layout 4</a></li>
																	<li><a href="index-freelancer.blade.php#header">Headers - Layout 5</a></li>
																	<li><a href="index-portfolio.blade.php#header">Headers - Layout 6</a></li>
																	<li><a href="index-portfolio-2.blade.php#header">Headers - Layout 7</a></li>
																	<li><a href="index-photographer.blade.php#header">Headers - Layout 8</a></li>
																	<li><a href="index-minimal.blade.php#header">Headers - Layout 9</a></li>
																	<li><a href="index-one-page.blade.php#header">Headers - Layout 10</a></li>
																	<li><a href="index-restaurant.blade.php#header">Headers - Layout 11</a></li>
																	<li><a href="index-blog.blade.php#header">Headers - Layout 12</a></li>
																	<li><a href="index-app-showcase.blade.php#header">Headers - Layout 13</a></li>
																	<li><a href="index-applanding-page.blade.php#header">Headers - Layout 14</a></li>
																	<li><a href="index-wedding.blade.php#header">Headers - Layout 15</a></li>
																	<li><a href="index-shop.blade.php#header">Headers - Layout 16</a></li>
																	<li><a href="index-construction.blade.php#header">Headers - Layout 17</a></li>
																	<li><a href="index-plumber.blade.php#header">Headers - Layout 18</a></li>
																	<li><a href="index-blog-4.blade.php#header">Headers - Layout 19</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="index-agency.blade.php#footer">Footers</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="index-agency.blade.php#footer">Footers - Layout 1</a></li>
																	<li><a href="index-business.blade.php#footer">Footers - Layout 2</a></li>
																	<li><a href="index-croporate.blade.php#footer">Footers - Layout 3</a></li>
																	<li><a href="index-creative.blade.php#footer">Footers - Layout 4</a></li>
																	<li><a href="index-minimal.blade.php#footer">Footers - Layout 5</a></li>
																	<li><a href="index-personal.blade.php#footer">Footers - Layout 6</a></li>
																	<li><a href="index-photographer.blade.php#footer">Footers - Layout 7</a></li>
																	<li><a href="index-freelancer.blade.php#footer">Footers - Layout 8</a></li>
																	<li><a href="index-wedding.blade.php#footer">Footers - Layout 9</a></li>
																	<li><a href="index-shop.blade.php#footer">Footers - Layout 10</a></li>
																	<li><a href="index-restaurant.blade.php#footer">Footers - Layout 11</a></li>
																	<li><a href="index-construction.blade.php#footer">Footers - Layout 12</a></li>
																	<li><a href="index-app-showcase.blade.php#footer">Footers - Layout 13</a></li>
																	<li><a href="index-applanding-page.blade.php#footer">Footers - Layout 14</a></li>
																	<li><a href="index-applanding-page2.blade.php#footer">Footers - Layout 15</a></li>
																	<li><a href="index-one-page.blade.php#footer">Footers - Layout 16</a></li>
																	<li><a href="index-yoga.blade.php#footer">Footers - Layout 17</a></li>
																	<li><a href="index-portfolio-2.blade.php#footer">Footers - Layout 18</a></li>
																	<li><a href="index-blog.blade.php#footer">Footers - Layout 19</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="page-title.blade.php">Page Title</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="page-title.blade.php">DEFAULT</a>
																		<div class="drop right-align">
																			<ul class="list-unstyled">
																				<li><a href="page-title.blade.php">left align</a></li>
																				<li><a href="page-title-right-align.blade.php">right align</a></li>
																				<li><a href="page-title-center-align.blade.php">center align</a></li>
																				<li><a href="page-title-dark-background.blade.php">dark background</a></li>
																				<li><a href="page-title-grey-background.blade.php">grey background</a></li>
																				<li><a href="page-title-image-background.blade.php">image background</a></li>
																				<li><a href="page-title-video-background.blade.php">video background</a></li>
																				<li><a href="page-title-patteren-background.blade.php">pattern background</a></li>
																				<li><a href="page-title-parallax.blade.php">parallax background</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="page-title-alt.blade.php">ALT</a>
																		<div class="drop right-align">
																			<ul class="list-unstyled">
																				<li><a href="page-title-alt.blade.php">left align</a></li>
																				<li><a href="page-title-alt-right-align.blade.php">right align</a></li>
																				<li><a href="page-title-alt-center-align.blade.php">center align</a></li>
																				<li><a href="page-title-alt-dark-background.blade.php">dark background</a></li>
																				<li><a href="page-title-alt-grey-background.blade.php">grey background</a></li>
																				<li><a href="page-title-alt-image-background.blade.php">image background</a></li>
																				<li><a href="page-title-alt-video-background.blade.php">video background</a></li>
																				<li><a href="page-title-alt-pattern-background.blade.php">pattern background</a></li>
																				<li><a href="page-title-alt-parallax-background.blade.php">parallax background</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="page-title-alt2.blade.php">ALT 2</a>
																		<div class="drop right-align">
																			<ul class="list-unstyled">
																				<li><a href="page-title-alt2.blade.php">left align</a></li>
																				<li><a href="page-title-alt2-right-align.blade.php">right align</a></li>
																				<li><a href="page-title-alt2-center-align.blade.php">center align</a></li>
																				<li><a href="page-title-alt2-dark-background.blade.php">dark background</a></li>
																				<li><a href="page-title-alt2-grey-background.blade.php">grey background</a></li>
																				<li><a href="page-title-alt2-image-background.blade.php">image background</a></li>
																				<li><a href="page-title-alt2-video-background.blade.php">video background</a></li>
																				<li><a href="page-title-alt2-pattern-background.blade.php">pattern background</a></li>
																				<li><a href="page-title-alt2-parallax-background.blade.php">parallax background</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<a href="portfolio.blade.php">Portfolio</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="portfolio-2columns.blade.php">GIRD</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="portfolio-2columns.blade.php">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-1columns.blade.php">1 column</a></li>
																				<li><a href="portfolio-2columns.blade.php">2 column</a></li>
																				<li><a href="portfolio-3columns.blade.php">3 column</a></li>
																				<li><a href="portfolio-4columns.blade.php">4 column</a></li>
																				<li><a href="portfolio-5columns.blade.php">5 column</a></li>
																				<li><a href="portfolio-6columns.blade.php">6 column</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="portfolio-2columns-nospace.blade.php">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-1columns-nospace.blade.php">1 column</a></li>
																				<li><a href="portfolio-2columns-nospace.blade.php">2 column</a></li>
																				<li><a href="portfolio-3columns-nospace.blade.php">3 column</a></li>
																				<li><a href="portfolio-4columns-nospace.blade.php">4 column</a></li>
																				<li><a href="portfolio-5columns-nospace.blade.php">5 column</a></li>
																				<li><a href="portfolio-6columns-nospace.blade.php">6 column</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-masonry-2column.blade.php">masonry</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="portfolio-masonry-2column.blade.php">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-masonry-2column.blade.php">2 column</a></li>
																				<li><a href="portfolio-masonry-3column.blade.php">3 column</a></li>
																				<li><a href="portfolio-masonry-4column.blade.php">4 column</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="portfolio-masonry-2column-nospace.blade.php">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-masonry-2column-nospace.blade.php">2 column</a></li>
																				<li><a href="portfolio-masonry-3column-nospace.blade.php">3 column</a></li>
																				<li><a href="portfolio-masonry-4column-nospace.blade.php">4 column</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="portfolio-masonry-4column-fullwidth.blade.php">LAYOUT</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-masonry-4column-fullwidth.blade.php">4 cloumn full width </a></li>
																				<li><a href="portfolio-masonry-4column-fullwidth-nospace.blade.php">4 cloumn full width  2</a></li>
																				<li><a href="portfolio-masonry-5column-fullwidth.blade.php">5 cloumn full width </a></li>
																				<li><a href="portfolio-masonry-5column-fullwidth-nospace.blade.php">5 cloumn full width  2</a></li>
																				<li><a href="portfolio-alt-masonry-fullwidth.blade.php">ALT FULL WIDTH</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-layout-full-width.blade.php">layout</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="portfolio-layout-full-width.blade.php">FULL WIDTH</a></li>
																	<li><a href="portfolio-layout-full-width-nospace.blade.php">FULL WIDTH NO SPACE</a></li>
																	<li><a href="portfolio-layout-left-sidebar.blade.php">LEFT SIDEBAR</a></li>
																	<li><a href="portfolio-layout-right-sidebar.blade.php">right SIDEBAR</a></li>
																	<li><a href="portfolio-layout-both-sidebar.blade.php">both SIDEBAR</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-vert-2columns.blade.php">VERTICAL</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="portfolio-vert-2columns.blade.php">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-vert-1columns.blade.php">1 column</a></li>
																				<li><a href="portfolio-vert-2columns.blade.php">2 column</a></li>
																				<li><a href="portfolio-vert-3columns.blade.php">3 column</a></li>
																				<li><a href="portfolio-vert-4columns.blade.php">4 column</a></li>
																				<li><a href="portfolio-vert-5columns.blade.php">5 column</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="portfolio-vert-1columns-nospace.blade.php">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-vert-1columns-nospace.blade.php">1 column</a></li>
																				<li><a href="portfolio-vert-2columns-nospace.blade.php">2 column</a></li>
																				<li><a href="portfolio-vert-3columns-nospace.blade.php">3 column</a></li>
																				<li><a href="portfolio-vert-4columns-nospace.blade.php">4 column</a></li>
																				<li><a href="portfolio-vert-5columns-nospace.blade.php">5 column</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-parallex-fullwidth.blade.php">PARALLAX</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="portfolio-parallex.blade.php">default</a></li>
																	<li><a href="portfolio-parallex-fullwidth.blade.php">parallax full width</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-single-image.blade.php">SINGLE</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="portfolio-single-image.blade.php">image</a></li>
																	<li><a href="portfolio-single-image-fullwidth.blade.php">image full width</a></li>
																	<li><a href="portfolio-single-slider.blade.php">slider</a></li>
																	<li><a href="portfolio-single-slider-fullwidth.blade.php">slider full width</a></li>
																	<li><a href="portfolio-single-parallex.blade.php">parallax</a></li>
																	<li><a href="portfolio-single-parallex-fullwidth.blade.php">parallax full width</a></li>
																	<li><a href="portfolio-single-masonry.blade.php">masonry</a></li>
																	<li><a href="portfolio-single-video-vimeo.blade.php">vimeo</a></li>
																	<li><a href="portfolio-single-video-youtube.blade.php">youtube</a></li>
																	<li><a href="portfolio-single-video.blade.php">html5 video</a></li>
																	<li><a href="portfolio-single-video-dailymotion.blade.php">dialymotion</a></li>
																	<li><a href="portfolio-single-soundcloud.blade.php">sound cloud</a></li>
																	<li><a href="portfolio-single-3-column.blade.php">3 column</a></li>
																	<li><a href="portfolio-single-audio.blade.php">audio</a></li>
																	<li><a href="portfolio-single-blockquote.blade.php">blockquote</a></li>
																	<li><a href="portfolio-single-link.blade.php">link</a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<a href="blogs.blade.php">Blogs</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="blog-grids-2column.blade.php">GIRD</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="blog-grids-2column.blade.php">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-grids-2column.blade.php">2 column</a></li>
																				<li><a href="blog-grids-3column.blade.php">3 column</a></li>
																				<li><a href="blog-grids-4column.blade.php">4 column</a></li>
																				<li><a href="blog-grids-fullwidth.blade.php">Full width</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="blog-grids-2column-nospace.blade.php">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-grids-2column-nospace.blade.php">2 column</a></li>
																				<li><a href="blog-grids-3column-nospace.blade.php">3 column</a></li>
																				<li><a href="blog-grids-4column-nospace.blade.php">4 column</a></li>
																				<li><a href="blog-grids-fullwidth-nospace.blade.php">Full width</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-masonry-2column.blade.php">masonry</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="blog-grids-2column.blade.php">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-masonry-2column.blade.php">2 column</a></li>
																				<li><a href="blog-masonry-3column.blade.php">3 column</a></li>
																				<li><a href="blog-masonry-4column.blade.php">4 column</a></li>
																				<li><a href="blog-masonry-fullwidth.blade.php">Full width</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="blog-grids-2column-nospace.blade.php">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-masonry-2column-nospace.blade.php">2 column</a></li>
																				<li><a href="blog-masonry-3column-nospace.blade.php">3 column</a></li>
																				<li><a href="blog-masonry-4column-nospace.blade.php">4 column</a></li>
																				<li><a href="blog-masonry-fullwidth-nospace.blade.php">Full width</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-full-width-accordion.blade.php">accordion</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="blog-full-width-accordion.blade.php">FULL WIDTH</a></li>
																	<li><a href="blog-full-width-accordion-leftsidebar.blade.php">LEFT SIDEBAR</a></li>
																	<li><a href="blog-full-width-accordion-rightsidebar.blade.php">RIGHT SIDEBAR</a></li>
																	<li><a href="blog-full-width-accordion-bothsidebar.blade.php">BOTH  SIDEBAR</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-timeline-default.blade.php">TIMELINE</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="blog-timeline-default.blade.php">ALT</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-timeline-default.blade.php">DEFAULT</a></li>
																				<li><a href="blog-timeline-default-rightsidebar.blade.php">RIGHT SIDEBAR</a></li>
																				<li><a href="blog-timeline-default-leftsidebar.blade.php">LEFT SIDEBAR</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="blog-alt-timeline-default.blade.php">ALT 2</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-alt-timeline-default.blade.php">DEFAULT</a></li>
																				<li><a href="blog-alt-timeline-default-rightsidebar.blade.php">RIGHT SIDEBAR</a></li>
																				<li><a href="blog-alt-timeline-default-leftsidebar.blade.php">LEFT SIDEBAR</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-full-width.blade.php">LAYOUT</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="blog-full-width.blade.php">FULL WIDTH</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-full-width.blade.php">DEFAULT</a></li>
																				<li><a href="blog-full-width-list.blade.php">LIST</a></li>
																				<li><a href="blog-full-width-leftsidebar.blade.php">LEFT SIDEBAR</a></li>
																				<li><a href="blog-full-width-rightsidebar.blade.php">right SIDEBAR</a></li>
																				<li><a href="blog-full-width-bothsidebar.blade.php">both SIDEBAR</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="blog-alt-default.blade.php">ALT</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-alt-default.blade.php">default</a></li>
																				<li><a href="blog-alt2-default.blade.php">default - layout 2</a></li>
																				<li><a href="blog-alt-default-leftsidebar.blade.php">LEFT SIDEBAR</a></li>
																				<li><a href="blog-alt2-default-leftsidebar.blade.php">LEFT SIDEBAR - layout 2</a></li>
																				<li><a href="blog-alt-default-rightsidebar.blade.php">right SIDEBAR</a></li>
																				<li><a href="blog-alt2-default-rightsidebar.blade.php">right SIDEBAR - layout 2</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-single-image.blade.php">SINGLE</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="blog-single-image.blade.php">image</a></li>
																	<li><a href="blog-single-image-fullwidth.blade.php">image full width</a></li>
																	<li><a href="blog-single-slider.blade.php">slider</a></li>
																	<li><a href="blog-single-video-vimeo.blade.php">vimeo</a></li>
																	<li><a href="blog-single-video-youtube.blade.php">youtube</a></li>
																	<li><a href="blog-single-video.blade.php">html5 video</a></li>
																	<li><a href="blog-single-video-daily-motion.blade.php">dialymotion</a></li>
																	<li><a href="blog-single-soundcloud.blade.php">sound cloud</a></li>
																	<li><a href="blog-single-3column.blade.php">3 column</a></li>
																	<li><a href="blog-single-audio.blade.php">audio</a></li>
																	<li><a href="blog-single-blockquote.blade.php">blockquote</a></li>
																	<li>
																		<a href="blog-single-default-sidebar-left.blade.php">SIDEBAR</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-single-default-sidebar-left.blade.php">default</a></li>
																				<li><a href="blog-single-default-sidebar-left.blade.php">lEFT SIDEBAR</a></li>
																				<li><a href="blog-single-default-sidebar-right.blade.php">right SIDEBAR</a></li>
																				<li><a href="blog-single-default-sidebar-both.blade.php">both sidebar</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<a href="shop.blade.php">shop</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="shop-grid-3column.blade.php">GIRD</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="shop-grid-3column.blade.php">3 column</a></li>
																	<li><a href="shop-grid-3column-rightsidebar.blade.php">3 column - right sidebar</a></li>
																	<li><a href="shop-grid-3column-leftsidebar.blade.php">3 column - left sidebar</a></li>
																	<li><a href="shop-grid-4column.blade.php">4 column</a></li>
																	<li><a href="shop-grid-4column-rightsidebar.blade.php">4 column - right sidebar</a></li>
																	<li><a href="shop-grid-4column-leftsidebar.blade.php">4 column - left sidebar</a></li>
																	<li><a href="shop-grid-full-width.blade.php">full width</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="shop-list.blade.php">LIST</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="shop-list.blade.php">default</a></li>
																	<li><a href="shop-list-leftsidebar.blade.php">right sidebar</a></li>
																	<li><a href="shop-list-rightsidebar.blade.php">leftsidebar</a></li>
																</ul>
															</div>
														</li>
														<li><a href="shop-single.blade.php">single</a></li>
														<li><a href="shop-cart.blade.php">cart</a></li>
														<li><a href="shop-checkout.blade.php">checkout</a></li>
														<li><a href="login.blade.php">login</a></li>
													</ul>
												</div>
											</li>
											<li>
												<a href="shortcodes.blade.php">Short Codes</a>
												<div class="mega-drop">
													<div class="drop-holder">
														<div class="coll">
															<ul class="list-unstyled">
																<li><a href="shortcode-alert-boxes.blade.php"><i class="fa fa-bolt"></i> ALERT BOXES</a></li>
																<li><a href="shortcode-animations.blade.php"><i class="fa fa-certificate"></i> ANIMATION</a></li>
																<li><a href="shortcode-blockquotes.blade.php"><i class="fa fa-compress"></i> BLOCQUOTE</a></li>
																<li><a href="shortcode-buttons.blade.php"><i class="fa fa-dot-circle-o"></i> BUTTONS</a></li>
																<li><a href="shortcode-carousel.blade.php"><i class="fa fa-eye"></i> CAROUSAL</a></li>
																<li><a href="shortcode-clients.blade.php"><i class="fa fa-gavel"></i> CLIENTS</a></li>
																<li><a href="shortcode-columns.blade.php"><i class="fa fa-odnoklassniki"></i> CLOUMNS</a></li>
																<li><a href="shortcode-counters.blade.php"><i class="fa fa-th-large"></i> COUNTERS</a></li>
															</ul>
														</div>
														<div class="coll">
															<ul class="list-unstyled">
																<li><a href="shortcode-dividers.blade.php"><i class="fa fa-bolt"></i> DIVIDERS</a></li>
																<li><a href="shortcode-galleries.blade.php"><i class="fa fa-bolt"></i> GALLERIES</a></li>
																<li><a href="shortcode-heading-styles.blade.php"><i class="fa fa-bolt"></i> HEADING STYLES</a></li>
																<li><a href="shortcode-icon-boxes.blade.php"><i class="fa fa-bolt"></i> ICON BOXES</a></li>
																<li><a href="shortcode-icon-lists.blade.php"><i class="fa fa-bolt"></i> ICON LISTS</a></li>
																<li><a href="shortcode-labels.blade.php"><i class="fa fa-bolt"></i> LABELS</a></li>
																<li><a href="shortcode-lightbox.blade.php"><i class="fa fa-bolt"></i> LIGHTBOX</a></li>
																<li><a href="shortcode-lists-panels.blade.php"><i class="fa fa-bolt"></i> LIST PANELS</a></li>
															</ul>
														</div>
														<div class="coll">
															<ul class="list-unstyled">
																<li><a href="shortcode-maps.blade.php"><i class="fa fa-bolt"></i> MAPS</a></li>
																<li><a href="shortcode-media-embeds.blade.php"><i class="fa fa-bolt"></i> MEDIA EMBDED</a></li>
																<li><a href="shortcode-modal-boxes.blade.php"><i class="fa fa-bolt"></i> MODAL BOXES</a></li>
																<li><a href="shortcode-navigations.blade.php"><i class="fa fa-bolt"></i> NAVIGATIONS</a></li>
																<li><a href="shortcode-pagination.blade.php"><i class="fa fa-bolt"></i> PAGINATIONS</a></li>
																<li><a href="shortcode-pies-skills.blade.php"><i class="fa fa-bolt"></i> PIES SKILLS</a></li>
																<li><a href="shortcode-pricing-boxes.blade.php"><i class="fa fa-bolt"></i> PRICING BOXES</a></li>
																<li><a href="shortcode-process-steps.blade.php"><i class="fa fa-bolt"></i> PROCESS STEPS</a></li>
															</ul>
														</div>
														<div class="coll">
															<ul class="list-unstyled">
																<li><a href="shortcode-promo-boxes.blade.php"><i class="fa fa-bolt"></i> PROMO BOXES</a></li>
																<li><a href="shortcode-responsive.blade.php"><i class="fa fa-bolt"></i> RESPONSIVE</a></li>
																<li><a href="shortcode-sections.blade.php"><i class="fa fa-bolt"></i> SECTIONS</a></li>
																<li><a href="shortcode-social-icons.blade.php"><i class="fa fa-bolt"></i> SOCIAL ICONS</a></li>
																<li><a href="shortcode-tables.blade.php"><i class="fa fa-bolt"></i> TABLES</a></li>
																<li><a href="shortcode-tabs.blade.php"><i class="fa fa-bolt"></i> TABS</a></li>
																<li><a href="shortcode-thumbnails.blade.php"><i class="fa fa-bolt"></i> THUMBNAILS</a></li>
																<li><a href="shortcode-toggles.blade.php"><i class="fa fa-bolt"></i> TOGGLE</a></li>
															</ul>
														</div>
													</div>
												</div>
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
			<!-- contain main informative part of the site -->
			<main id="main" role="main">
				<!-- main slider -->
				<div class="travel-slider beans-slider" data-rotate="true">
					<div class="beans-mask">
						<div class="beans-slideset">
							<!-- beans-slide -->
							<div class="beans-slide">
								<div class="container">
									<div class="row">
										<div class="col-xs-12">
											<div class="caption win-height">
												<div class="holder">
													<h1 class="heading2">Best enjoyed slowly</h1>
													<span class="title2">TAKE YOU TO EVERY CORNOR OF THE WORLD</span>
													<div class="btn-box add">
														<a href="http://fekra.csshunter.com" class="btn btn-f-default">get strated</a>
														<a href="index.blade.php" class="btn btn-f-info">VIEW OFFERS</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="stretch">
									<img src="images/pool.jpg" alt="Fekra"/>
									<!--
									<img src="http://placehold.it/1920x1000" alt="image description"/>
									-->
								</div>
							</div>
							<!-- beans-slide -->
							<div class="beans-slide">
								<div class="container">
									<div class="row">
										<div class="col-xs-12">
											<div class="caption win-height">
												<div class="holder">
													<h1 class="heading2">A whole world on a single island</h1>
													<span class="title2">Awaken To A Different World.</span>
													<div class="btn-box add">
														<a href="index.blade.php" class="btn btn-f-info">get strated</a>
														<a href="http://fekra.csshunter.com" class="btn btn-f-default">PURCHASE now</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="stretch">
									<img src="images/oldies.jpg" alt="Fekra"/>
									<!--
									<img src="http://placehold.it/1920x1000" alt="image description"/>
									-->
								</div>
							</div>
							<!-- beans-slide ESTE SE LO AÑADÍ YO-->
							<div class="beans-slide">
								<div class="container">
									<div class="row">
										<div class="col-xs-12">
											<div class="caption win-height">
												<div class="holder">
													<h1 class="heading2">A whole world on a single island</h1>
													<span class="title2">Awaken To A Different World.</span>
													<div class="btn-box add">
														<a href="index.blade.php" class="btn btn-f-info">get strated</a>
														<a href="http://fekra.csshunter.com" class="btn btn-f-default">PURCHASE now</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="stretch">
									<img src="images/sport5.jpg" alt="Fekra"/>
									<!--
									<img src="http://placehold.it/1920x1000" alt="image description"/>
									-->
								</div>
							</div>
						</div>
					</div>
					<a class="btn-prev" href="#"><i class="fa fa-angle-left"></i></a>
					<a class="btn-next" href="#"><i class="fa fa-angle-right"></i></a>
				</div>
				<!-- travel section -->
				<section class="travel-section container">
					<div class="row">
						<div class="col-xs-12">
							<ul class="tabset">
								<li class="active"><a href="#tab1">HOTELS</a></li>
								<li><a href="#tab2">TOURS</a></li>
							</ul>
							<!-- tab content -->
							<div class="tab-content">
								<!-- tab1 -->
								<div id="tab1">
									<!-- tab form -->
									<form action="#" class="tab-form">
										<fieldset>
											<!-- box -->
											<div class="box">

												<strong class="form-title">When</strong>
												<div class="row">
													<div class="col-xs-12 col-sm-6">
														<label>CHECK IN</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>mm/dd/yy</option>
															<option>01</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
													<div class="col-xs-12 col-sm-6">
														<label>CHECK OUT</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>mm/dd/yy</option>
															<option>01</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
												</div>
											</div>
											<!-- box -->
											<div class="box add">
												<strong class="form-title">Where</strong>
												<label>Your Destination</label>
												<div class="block">
													<input type="search" placeholder="From Cairo, Egypt">
													<i class="fa fa-map-marker"></i>
												</div>
											</div>
											<!-- box -->
											<div class="box add2">
												<strong class="form-title">Who</strong>
												<div class="row">
													<div class="col-xs-12 col-sm-4">
														<label>Rooms</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>1</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
													<div class="col-xs-12 col-sm-4">
														<label>Adults</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>1</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
													<div class="col-xs-12 col-sm-4">
														<label>Kids</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>0</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
												</div>
											</div>
											<button class="btn btn-submit" type="submit"><i class="fa fa-search"></i></button>
										</fieldset>
									</form>
								</div>
								<!-- tab2 -->
								<div id="tab2">
									<!-- tab form -->
									<form action="#" class="tab-form">
										<fieldset>
											<!-- box -->
											<div class="box">
												<strong class="form-title">Where</strong>
												<label>Your Destination</label>
												<div class="block">
													<input type="search" placeholder="From Cairo, Egypt">
													<i class="fa fa-map-marker"></i>
												</div>
											</div>
											<!-- box -->
											<div class="box add">
												<strong class="form-title">When</strong>
												<div class="row">
													<div class="col-xs-12 col-sm-6">
														<label>CHECK IN</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>mm/dd/yy</option>
															<option>01</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
													<div class="col-xs-12 col-sm-6">
														<label>CHECK OUT</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>mm/dd/yy</option>
															<option>01</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
												</div>
											</div>
											<!-- box -->
											<div class="box add2">
												<strong class="form-title">Who</strong>
												<div class="row">
													<div class="col-xs-12 col-sm-4">
														<label>Rooms</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>1</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
													<div class="col-xs-12 col-sm-4">
														<label>Adults</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>1</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
													<div class="col-xs-12 col-sm-4">
														<label>Kids</label>
														<select data-jcf='{"wrapNative": false}'>
															<option>0</option>
															<option>02</option>
															<option>03</option>
															<option>04</option>
														</select>
													</div>
												</div>
											</div>
											<button class="btn btn-submit" type="submit"><i class="fa fa-search"></i></button>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- product section -->
				<section class="container product-section">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <p class="text-uppercase">A different light</p>
                            <h2 class="heading5 small-heading lime text-capitalize font-medium">FEATURED OFFERS</h2>
                        </div>
                    </header>
					<div class="row">
						<div class="col-xs-12">
							<!-- products-holder -->
							<div class="products-holder">
								<!-- new-product -->
								<article class="new-product" data-animate="fadeInUp" data-delay="200">
									<div class="product-img">
										<img src="http://placehold.it/270x370" alt="image description">
										<div class="product-over">
											<div class="frame">
												<div class="box">
													<a href="#" class="btn btn-f-default">DETAILS</a>
												</div>
											</div>
										</div>
									</div>
									<span class="title">MALDIVES</span>
									<h2><a href="#">Bora Bora Beach</a></h2>
									<ul class="rattings-nav list-inline">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
									</ul>
									<a href="#" class="btn-cart">[ BOOK NOW ]</a>
									<span class="amount"><sub>$</sub>99.00</span>
								</article>
								<!-- new-product -->
								<article class="new-product" data-animate="fadeInUp" data-delay="300">
									<div class="product-img">
										<img src="http://placehold.it/270x370" alt="image description">
										<div class="product-over">
											<div class="frame">
												<div class="box">
													<a href="#" class="btn btn-f-default">DETAILS</a>
												</div>
											</div>
										</div>
									</div>
									<span class="title">australia</span>
									<h2><a href="#">Sydney Nights</a></h2>
									<ul class="rattings-nav list-inline">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
									</ul>
									<a href="#" class="btn-cart">[ BOOK NOW ]</a>
									<span class="amount"><sub>$</sub>782.00</span>
								</article>
								<!-- new-product -->
								<article class="new-product" data-animate="fadeInUp" data-delay="400">
									<div class="product-img">
										<img src="http://placehold.it/270x370" alt="image description">
										<div class="product-over">
											<div class="frame">
												<div class="box">
													<a href="#" class="btn btn-f-default">DETAILS</a>
												</div>
											</div>
										</div>
									</div>
									<span class="title">uk</span>
									<h2><a href="#">Great Brita</a></h2>
									<ul class="rattings-nav list-inline">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
									</ul>
									<a href="#" class="btn-cart">[ BOOK NOW ]</a>
									<span class="amount"><sub>$</sub>699.00</span>
								</article>
								<!-- new-product -->
								<article class="new-product" data-animate="fadeInUp" data-delay="500">
									<div class="product-img">
										<img src="http://placehold.it/270x370" alt="image description">
										<div class="product-over">
											<div class="frame">
												<div class="box">
													<a href="#" class="btn btn-f-default">DETAILS</a>
												</div>
											</div>
										</div>
									</div>
									<span class="title">FRANCE</span>
									<h2><a href="#">Eiffal Tower</a></h2>
									<ul class="rattings-nav list-inline">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
									</ul>
									<a href="#" class="btn-cart">[ BOOK NOW ]</a>
									<span class="amount"><sub>$</sub>1009.00</span>
								</article>
								<!-- new-product -->
								<article class="new-product" data-animate="fadeInUp" data-delay="200">
									<div class="product-img">
										<img src="http://placehold.it/270x370" alt="image description">
										<div class="product-over">
											<div class="frame">
												<div class="box">
													<a href="#" class="btn btn-f-default">DETAILS</a>
												</div>
											</div>
										</div>
									</div>
									<span class="title">italy</span>
									<h2><a href="#">Romane Theatre</a></h2>
									<ul class="rattings-nav list-inline">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
									</ul>
									<a href="#" class="btn-cart">[ BOOK NOW ]</a>
									<span class="amount"><sub>$</sub>782.00</span>
								</article>
								<!-- new-product -->
								<article class="new-product" data-animate="fadeInUp" data-delay="300">
									<div class="product-img">
										<img src="http://placehold.it/270x370" alt="image description">
										<div class="product-over">
											<div class="frame">
												<div class="box">
													<a href="#" class="btn btn-f-default">DETAILS</a>
												</div>
											</div>
										</div>
									</div>
									<span class="title">EMARATIES</span>
									<h2><a href="#">Khalifa Towers</a></h2>
									<ul class="rattings-nav list-inline">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
									</ul>
									<a href="#" class="btn-cart">[ BOOK NOW ]</a>
									<span class="amount"><sub>$</sub>699.00</span>
								</article>
								<!-- new-product -->
								<article class="new-product" data-animate="fadeInUp" data-delay="400">
									<div class="product-img">
										<img src="http://placehold.it/270x370" alt="image description">
										<div class="product-over">
											<div class="frame">
												<div class="box">
													<a href="#" class="btn btn-f-default">DETAILS</a>
												</div>
											</div>
										</div>
									</div>
									<span class="title">egypt</span>
									<h2><a href="#">Pyramids</a></h2>
									<ul class="rattings-nav list-inline">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
									</ul>
									<a href="#" class="btn-cart">[ BOOK NOW ]</a>
									<span class="amount"><sub>$</sub>1009.00</span>
								</article>
								<!-- new-product -->
								<article class="new-product" data-animate="fadeInUp" data-delay="500">
									<div class="product-img">
										<img src="http://placehold.it/270x370" alt="image description">
										<div class="product-over">
											<div class="frame">
												<div class="box">
													<a href="#" class="btn btn-f-default">DETAILS</a>
												</div>
											</div>
										</div>
									</div>
									<span class="title">mexico</span>
									<h2><a href="#">Catedral Toluca</a></h2>
									<ul class="rattings-nav list-inline">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
										<li class="add"><i class="fa fa-star"></i></li>
									</ul>
									<a href="#" class="btn-cart">[ BOOK NOW ]</a>
									<span class="amount"><sub>$</sub>1009.00</span>
								</article>
							</div>
						</div>
					</div>
					<div class="row text-center padding-bottom-60">
						<div class="col-xs-12">
							<a href="#" class="btn btn-dark">VIEW ALL OFFERS</a>
						</div>
					</div>
				</section>
				<!-- special block style2 -->
				<div class="special-block style2">
					<div class="parallax-holder">
						<div class="parallax-frame"><img src="http://placehold.it/1920x1000" height="1000" width="1920" alt="image description"></div>
					</div>
					<!-- main slider -->
					<div class="beans-slider" data-rotate="true">
						<div class="beans-mask">
							<div class="beans-slideset">
								<!-- beans-slide -->
								<div class="beans-slide">
									<div class="container">
										<div class="row">
											<section class="col-xs-12 special-content">
												<div class="special-box">
													<h2>white haven beach, australia</h2>
													<p>Welcome to WordPress. This is your first post. Edit or delete it, then start bloggin Molestias excepturi sint occaecati cupiditate non provident similique sunt in culpa qui officia deserunt animi id est laborum et dolorum fuga et harum quidem rerum facilis est et expedita distinction.</p>
													<a href="#" class="btn btn-f-default">LEARN MORE</a>
												</div>
											</section>
										</div>
									</div>
								</div>
								<!-- beans-slide -->
								<div class="beans-slide">
									<div class="container">
										<div class="row">
											<section class="col-xs-12 special-content">
												<div class="special-box">
													<h2>white haven beach, australia</h2>
													<p>Welcome to WordPress. This is your first post. Edit or delete it, then start bloggin Molestias excepturi sint occaecati cupiditate non provident similique sunt in culpa qui officia deserunt animi id est laborum et dolorum fuga et harum quidem rerum facilis est et expedita distinction.</p>
													<a href="#" class="btn btn-f-default">LEARN MORE</a>
												</div>
											</section>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="btn-prev" href="#"><i class="fa fa-angle-left"></i></a>
						<a class="btn-next" href="#"><i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<!-- collection block style2 -->
				<div class="container collection-block style2">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <p class="text-uppercase">Even better this year</p>
                            <h2 class="heading5 small-heading lime text-capitalize font-medium">FEATURED DESTINATIONS</h2>
                        </div>
                    </header>
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<!-- collection-col -->
							<div class="collection-col" data-animate="fadeInUp" data-delay="200">
								<img src="http://placehold.it/370x491" alt="image description">
								<div class="collection-over add2">
									<div class="frame">
										<div class="box">
											<h2><span class="txt">ITALY</span> VENICE</h2>
											<a href="#" class="btn-shop">2541 Hotel  Available</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-8 col-xs-12">
							<div class="row ">
								<div class="col-sm-6 col-xs-12" data-animate="fadeInUp" data-delay="200">
									<!-- collection-col -->
									<div class="collection-col women">
										<img src="http://placehold.it/370x231" alt="image description">
										<div class="collection-over add">
											<div class="frame">
												<div class="box">
													<h2><span class="txt">indonesia</span> BALI</h2>
													<a href="#" class="btn-shop">3854  Hotel  Available</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-xs-12" data-animate="fadeInUp" data-delay="200">
									<!-- collection-col -->
									<div class="collection-col women">
										<img src="http://placehold.it/370x231" alt="image description">
										<div class="collection-over add">
											<div class="frame">
												<div class="box">
													<h2><span class="txt">australia</span> sydney</h2>
													<a href="#" class="btn-shop">2541 Hotel  Available</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" data-animate="fadeInUp" data-delay="300">
								<div class="col-xs-12">
									<!-- collection-col -->
									<div class="collection-col">
										<img src="http://placehold.it/770x230" alt="image description">
										<div class="collection-over add2">
											<div class="frame">
												<div class="box">
													<h2><span class="txt">EGYPT</span> GIZA</h2>
													<a href="#" class="btn-shop">3541 Hotel  Available</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row text-center padding-top-60 padding-bottom-60">
						<div class="col-xs-12">
							<a class="btn btn-dark" href="#">VIEW ALL 421  DESTINATIONS</a>
						</div>
					</div>
				</div>
				<!-- blog section -->
				<section class="blog-section padding-top-90 padding-bottom-90 bg-grey">
					<div class="container">
                        <!-- page heading small -->
                        <header class="page-heading small">
                            <div class="heading">
                                <p class="text-uppercase">better this year</p>
                                <h2 class="heading5 small-heading lime text-uppercase font-medium">latest news</h2>
                            </div>
                        </header>
						<!-- beans-slider -->
						<div class="beans-slider" data-rotate="true" data-pause-hover="true">
							<div class="beans-mask">
								<div class="beans-slideset">
									<!-- beans-slide -->
									<div class="beans-slide">
										<div class="row">
											<!-- coll -->
											<article class="col-xs-12 col-sm-6 blog-m-post">
												<a href="blog-single-image.blade.php"><img src="http://placehold.it/570x220" alt="image description" class="img-responsive"></a>
												<div class="blog-txt">
													<h3><a href="blog-single-image.blade.php">Why Does Music Feel So Good?</a></h3>
													<ul class="meta list-inline">
														<li>
															<i class="fa fa-user"></i>
															By <a href="blog-single-image.blade.php">Admin name</a>
														</li>
														<li>
															<i class="fa fa-tags"></i>
															<a href="blog-single-image.blade.php">Music</a>, <a href="blog-single-image.blade.php">Technologies</a>, <a href="blog-single-image.blade.php">People</a> 
														</li>
														<li>
															<i class="fa fa-heart"></i>
															<a href="blog-single-image.blade.php">14</a>
														</li>
														<li>
															<i class="fa fa-comments"></i>
															<a href="blog-single-image.blade.php">320</a>
														</li>
													</ul>
													<div class="box-holder">
														<span class="icon"><i class="fa fa-picture-o"></i></span>
														<time datetime="2015-02-18">
															<span class="add">18</span>jan
														</time>
													</div>
												</div>
											</article>
											<!-- coll -->
											<article class="col-xs-12 col-sm-6 blog-m-post">
												<a href="blog-single-image.blade.php"><img src="http://placehold.it/570x220" alt="image description" class="img-responsive"></a>
												<div class="blog-txt">
													<h3><a href="blog-single-image.blade.php">All Things Workplace: Change &amp; Transitions</a></h3>
													<ul class="meta list-inline">
														<li>
															<i class="fa fa-user"></i>
															By <a href="blog-single-image.blade.php">Admin name</a>
														</li>
														<li>
															<i class="fa fa-tags"></i>
															<a href="blog-single-image.blade.php">Business</a>, <a href="blog-single-image.blade.php">Technologies</a>, <a href="blog-single-image.blade.php">Sport</a> 
														</li>
														<li>
															<i class="fa fa-heart"></i>
															<a href="blog-single-image.blade.php">14</a>
														</li>
														<li>
															<i class="fa fa-comments"></i>
															<a href="blog-single-image.blade.php">320</a>
														</li>
													</ul>
													<div class="box-holder">
														<span class="icon"><i class="fa fa-video-camera"></i></span>
														<time datetime="2015-02-18">
															<span class="add">18</span>jan
														</time>
													</div>
												</div>
											</article>
										</div>
									</div>
									<!-- beans-slide -->
									<div class="beans-slide">
										<div class="row">
											<!-- coll -->
											<article class="col-xs-12 col-sm-6 blog-m-post">
												<a href="blog-single-image.blade.php"><img src="http://placehold.it/570x220" alt="image description" class="img-responsive"></a>
												<div class="blog-txt">
													<h3><a href="blog-single-image.blade.php">Intelegent transitions in ux design</a></h3>
													<ul class="meta list-inline">
														<li>
															<i class="fa fa-user"></i>
															By <a href="blog-single-image.blade.php">Admin name</a>
														</li>
														<li>
															<i class="fa fa-tags"></i>
															<a href="blog-single-image.blade.php">Business</a>, <a href="blog-single-image.blade.php">Technologies</a>, <a href="blog-single-image.blade.php">Sport</a> 
														</li>
														<li>
															<i class="fa fa-heart"></i>
															<a href="blog-single-image.blade.php">14</a>
														</li>
														<li>
															<i class="fa fa-comments"></i>
															<a href="blog-single-image.blade.php">320</a>
														</li>
													</ul>
													<div class="box-holder">
														<span class="icon"><i class="fa fa-picture-o"></i></span>
														<time datetime="2015-02-18">
															<span class="add">18</span>jan
														</time>
													</div>
												</div>
											</article>
											<!-- coll -->
											<article class="col-xs-12 col-sm-6 blog-m-post">
												<a href="blog-single-image.blade.php"><img src="http://placehold.it/570x220" alt="image description" class="img-responsive"></a>
												<div class="blog-txt">
													<h3><a href="blog-single-image.blade.php">clean code that works</a></h3>
													<ul class="meta list-inline">
														<li>
															<i class="fa fa-user"></i>
															By <a href="blog-single-image.blade.php">Admin name</a>
														</li>
														<li>
															<i class="fa fa-tags"></i>
															<a href="blog-single-image.blade.php">Business</a>, <a href="blog-single-image.blade.php">Technologies</a>, <a href="blog-single-image.blade.php">Sport</a> 
														</li>
														<li>
															<i class="fa fa-heart"></i>
															<a href="blog-single-image.blade.php">14</a>
														</li>
														<li>
															<i class="fa fa-comments"></i>
															<a href="blog-single-image.blade.php">320</a>
														</li>
													</ul>
													<div class="box-holder">
														<span class="icon"><i class="fa fa-video-camera"></i></span>
														<time datetime="2015-02-18">
															<span class="add">18</span>jan
														</time>
													</div>
												</div>
											</article>
										</div>
									</div>
									<!-- beans-slide -->
									<div class="beans-slide">
										<div class="row">
											<!-- coll -->
											<article class="col-xs-12 col-sm-6 blog-m-post">
												<a href="blog-single-image.blade.php"><img src="http://placehold.it/570x220" alt="image description" class="img-responsive"></a>
												<div class="blog-txt">
													<h3><a href="blog-single-image.blade.php">change-makers economic security</a></h3>
													<ul class="meta list-inline">
														<li>
															<i class="fa fa-user"></i>
															By <a href="blog-single-image.blade.php">Admin name</a>
														</li>
														<li>
															<i class="fa fa-tags"></i>
															<a href="blog-single-image.blade.php">Business</a>, <a href="blog-single-image.blade.php">Technologies</a>, <a href="blog-single-image.blade.php">Sport</a> 
														</li>
														<li>
															<i class="fa fa-heart"></i>
															<a href="blog-single-image.blade.php">14</a>
														</li>
														<li>
															<i class="fa fa-comments"></i>
															<a href="blog-single-image.blade.php">320</a>
														</li>
													</ul>
													<div class="box-holder">
														<span class="icon"><i class="fa fa-picture-o"></i></span>
														<time datetime="2015-02-18">
															<span class="add">18</span>jan
														</time>
													</div>
												</div>
											</article>
											<!-- coll -->
											<article class="col-xs-12 col-sm-6 blog-m-post">
												<a href="blog-single-image.blade.php"><img src="http://placehold.it/570x220" alt="image description" class="img-responsive"></a>
												<div class="blog-txt">
													<h3><a href="blog-single-image.blade.php">Relationships Get Better and Other Reminders</a></h3>
													<ul class="meta list-inline">
														<li>
															<i class="fa fa-user"></i>
															By <a href="blog-single-image.blade.php">Admin name</a>
														</li>
														<li>
															<i class="fa fa-tags"></i>
															<a href="blog-single-image.blade.php">Business</a>, <a href="blog-single-image.blade.php">Technologies</a>, <a href="blog-single-image.blade.php">Sport</a> 
														</li>
														<li>
															<i class="fa fa-heart"></i>
															<a href="blog-single-image.blade.php">14</a>
														</li>
														<li>
															<i class="fa fa-comments"></i>
															<a href="blog-single-image.blade.php">320</a>
														</li>
													</ul>
													<div class="box-holder">
														<span class="icon"><i class="fa fa-video-camera"></i></span>
														<time datetime="2015-02-18">
															<span class="add">18</span>jan
														</time>
													</div>
												</div>
											</article>
										</div>
									</div>
									<!-- beans-slide -->
									<div class="beans-slide">
										<div class="row">
											<!-- coll -->
											<article class="col-xs-12 col-sm-6 blog-m-post">
												<a href="blog-single-image.blade.php"><img src="http://placehold.it/570x220" alt="image description" class="img-responsive"></a>
												<div class="blog-txt">
													<h3><a href="blog-single-image.blade.php">Bruce Jenner Transition: Caitlyn Jenner on Vanity</a></h3>
													<ul class="meta list-inline">
														<li>
															<i class="fa fa-user"></i>
															By <a href="blog-single-image.blade.php">Admin name</a>
														</li>
														<li>
															<i class="fa fa-tags"></i>
															<a href="blog-single-image.blade.php">Business</a>, <a href="blog-single-image.blade.php">Technologies</a>, <a href="blog-single-image.blade.php">Sport</a> 
														</li>
														<li>
															<i class="fa fa-heart"></i>
															<a href="blog-single-image.blade.php">14</a>
														</li>
														<li>
															<i class="fa fa-comments"></i>
															<a href="blog-single-image.blade.php">320</a>
														</li>
													</ul>
													<div class="box-holder">
														<span class="icon"><i class="fa fa-picture-o"></i></span>
														<time datetime="2015-02-18">
															<span class="add">18</span>jan
														</time>
													</div>
												</div>
											</article>
											<!-- coll -->
											<article class="col-xs-12 col-sm-6 blog-m-post">
												<a href="blog-single-image.blade.php"><img src="http://placehold.it/570x220" alt="image description" class="img-responsive"></a>
												<div class="blog-txt">
													<h3><a href="blog-single-image.blade.php">Transitions Film Festival » Love Thy Nature</a></h3>
													<ul class="meta list-inline">
														<li>
															<i class="fa fa-user"></i>
															By <a href="blog-single-image.blade.php">Admin name</a>
														</li>
														<li>
															<i class="fa fa-tags"></i>
															<a href="blog-single-image.blade.php">Business</a>, <a href="blog-single-image.blade.php">Technologies</a>, <a href="blog-single-image.blade.php">Sport</a> 
														</li>
														<li>
															<i class="fa fa-heart"></i>
															<a href="blog-single-image.blade.php">14</a>
														</li>
														<li>
															<i class="fa fa-comments"></i>
															<a href="blog-single-image.blade.php">320</a>
														</li>
													</ul>
													<div class="box-holder">
														<span class="icon"><i class="fa fa-video-camera"></i></span>
														<time datetime="2015-02-18">
															<span class="add">18</span>jan
														</time>
													</div>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
							<div class="beans-pagination">
								<!-- pagination generated here -->
							</div>
						</div>
					</div>
				</section>
				<!-- social block style4 -->
				<div class="social-block style4">
					<div class="parallax-holder">
						<div class="parallax-frame"><img src="http://placehold.it/1920x1000" height="1000" width="1920" alt="image description"></div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 social-container">
								<ul class="list-inline footer-social">
									<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="behance"><a href="#"><i class="fa fa-behance"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
									<li><a href="#"><i class="fa fa-apple"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!-- footer of the page -->
			<footer id="footer" class="style22">
				<!-- footer cent -->
				<div class="bg-shark footer-cent">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 info-box column1">
								<!-- f contact info2 -->
								<div class="f-contact-info2">
									<h5>Contact Information</h5>
									<address><i class="fa fa-map-marker"></i> 1422 1st St. Santa Rosa,t CA 94559. USA</address>
									<div class="mail-box2">
										<span class="mail-box"><i class="fa fa-envelope-o"></i> <a href="mailto:&#097;&#100;&#109;&#105;&#110;&#064;&#101;&#045;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;" class="email"> &#097;&#100;&#109;&#105;&#110;&#064;&#101;&#045;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a></span>
									</div>
									<div class="tel-holder">
										<span class="tel-box"><i class="fa fa-phone"></i> <a href="tel:00201008431112" class="tel">002- 01008431112</a></span>
									</div>
									<div class="mail-box2">
										<span class="mail-box"><i class="fa fa-link"></i> <a href="mailto:&#119;&#119;&#119;&#046;&#121;&#111;&#117;&#114;&#095;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;" class="email">&#119;&#119;&#119;&#046;&#121;&#111;&#117;&#114;&#095;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;</a></span>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 column2">
								<!-- f mailing form2 -->
								<div class="f-mailing-form2">
									<h5>Mailing List</h5>
									<div class="mailing-form2">
										<label>Please enter your email address for our mailing list to keep your self our lastest updated.</label>
										<div class="form-col">
											<!-- Begin MailChimp Signup Form -->
											<div id="mc_embed_signup">
												<form action="//htmlbeans.us11.list-manage.com/subscribe/post?u=cb2d5a07fdf0d86c96f260674&amp;id=1103b14a3b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
													<div id="mc_embed_signup_scroll">
														<div class="mc-field-group">
															<label for="mce-EMAIL">Email Address </label>
															<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
														</div>
														<div id="mce-responses" class="clear">
															<div class="response" id="mce-error-response" style="display:none"></div>
															<div class="response" id="mce-success-response" style="display:none"></div>
														</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
														<div style="position: absolute; left: -5000px;"><input type="text" name="b_cb2d5a07fdf0d86c96f260674_1103b14a3b" tabindex="-1" value=""></div>
														<div class="clear">
															<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn button btn-submit"><i class="fa fa-paper-plane"></i></button>
														</div>
													</div>
												</form>
											</div>
											<!--End mc_embed_signup-->
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 column3 clearfix-sm">
								<!-- f popular tags -->
								<div class="f-popular-tags">
									<h5>Popular Tags</h5>
									<ul class="list-inline footer-tags">
										<li><a href="#">Business</a></li>
										<li><a href="#">Creative</a></li>
										<li><a href="#">One Page</a></li>
										<li><a href="#">Parallax</a></li>
										<li><a href="#">Clean</a></li>
										<li><a href="#">Customization</a></li>
										<li><a href="#">Themeforest</a></li>
										<li><a href="#">Visual</a></li>
										<li><a href="#">Elegant</a></li>
										<li><a href="#">Development </a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 column4">
								<!-- f flicker -->
								<div class="f-flicker">
									<h5>Flickr Stream</h5>
                                    <div class="insta-box flickr-feed" data-id="44802888@N04" data-count="8" data-lightbox="gallery"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- footer bottom -->
				<div class="bg-dark-jungle footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<!-- bottom box1 -->
								<div class="bottom-box1">
									<!-- payment nav -->
									<ul class="list-inline payment-nav">
										<li><a href="#"><img src="http://placehold.it/38x28" alt="Amarican Express"></a></li>
										<li><a href="#"><img src="http://placehold.it/38x28" alt="Amarican Express"></a></li>
										<li><a href="#"><img src="http://placehold.it/38x28" alt="Amarican Express"></a></li>
										<li><a href="#"><img src="http://placehold.it/38x28" alt="Amarican Express"></a></li>
									</ul>
									<span class="copyright">&copy; 2015 <a href="#">Fekra corporation</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="fa fa-chevron-up" id="gotoTop" style="display: none;"></div>
	</div>
	<!-- include jQuery library -->
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<!-- include custom JavaScript -->
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<!-- include JavaScript Plugins -->
	<script type="text/javascript" src="js/plugins.js"></script>
</body>
</html>