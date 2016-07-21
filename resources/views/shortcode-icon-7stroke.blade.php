<!DOCTYPE html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the title of your site -->
	<title>Fekra</title>
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
	<!-- include the site stylesheet of bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the font awesome stylesheet  -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- include icon fonts stylesheet  -->
	<link rel="stylesheet" href="css/icon-fonts-css.css">
	<!-- include the stylesheets of headers and footer of the page  -->
	<link rel="stylesheet" type="text/css" href="css/page-assets.css">
	<!-- include the helping elements stylesheets of  the page  -->
	<link rel="stylesheet" type="text/css" href="css/helper-elements.css">
	<!-- include the site stylesheet  -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- include the site color stylesheet  -->
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
    <!-- include the site animation stylesheet  -->
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
	<style>
		.font-icon-list {
		  padding: 20px 0px 0px 0px;
		  margin-bottom: 20px; }

		.font-icon-list:hover {cursor: pointer; }
		.font-icon-detail {text-align: center; }
		.font-icon-detail span:first-child {
		  display: inline-block;
		  transition: color 150ms linear, background 150ms linear, font-size 150ms linear, width 150ms;
		  padding: 10px 0px;
		  width: 70px;
		  font-size: 48px;
		  color: #1a1a1a;
		  border: 1px solid #eaeaea;
		  border-radius: 3px; }
		.font-icon-name {
		  font-size: 13px;
		  margin-top: 15px;
		  display: block;
		  text-align: center;
		  width: 100%;
		  padding: 0;
		  border: 0; }
		.font-icon-name:focus, .font-icon-name:active {outline: none; }
		.font-icon-code {
		  overflow: hidden;
		  text-align: center;
		  transition: max-height 200ms linear, opacity 200ms linear; }
		.code-value, .unicode, .unicode-text {
		  background: none;
		  text-align: center;
		  border: none;
		  color: #a0a0a0; }
		.code-value {
		  display: block;
		  width: 100%; }
		.unicode, .unicode-text {color: #a0a0a0; }
		.unicode {
		  float: left;
		  font-family: "Pe-icon-7-stroke";
		  text-align: right;
		  width: 38%;
		  padding-right: 5px; }
		.unicode-text {
		  text-align: left;
		  float: left;
		  display: inline-block;
		  width: 100px;
		  border: none; }
		.unicode-text:focus,
		.unicode-text:active {outline: none; }
		.font-icon-list:hover .font-icon-name,
		.font-icon-list:hover .code-value,
		.font-icon-list:hover .unicode,
		.font-icon-list:hover .unicode-text,
		.font-icon-detail.zeroclipboard-is-hover .font-icon-name,
		.font-icon-detail.zeroclipboard-is-hover + .font-icon-code .code-value,
		.font-icon-detail.zeroclipboard-is-hover + .font-icon-code .unicode,
		.font-icon-detail.zeroclipboard-is-hover + .font-icon-code .unicode-text {
		  cursor: text;
		  color: #1a1a1a; }
		.font-icon-list:hover .font-icon-detail span:first-child,
		.font-icon-detail.zeroclipboard-is-hover span:first-child {
		  color: #fff;
		  background: #1a1a1a; }
	</style>
</head>
<body>
	<!-- Page pre loader -->
    <div id="pre-loader">
        <div class="loader-holder">
            <div class="frame">
                <img src="images/preloader/logo.png" alt="Fekra"/>
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
			<!-- header of the page -->
			<header id="header" class="style5">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- page logo -->
							<div class="logo">
								<a href="#">
									<img src="images/logo.png" alt="Fekra" class="img-responsive w-logo">
									<img src="images/logo-2.png" alt="Fekra" class="img-responsive b-logo">
								</a>
							</div>
							<div class="holder">
								<!-- icon list -->
								<ul class="list-unstyled icon-list">
									<li>
										<a href="#" class="search-opener opener-icons"><i class="fa fa-search"></i></a>
									</li>
								</ul>
								<!-- main navigation of the page -->
								<nav id="nav">
									<a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
									<div class="nav-holder">
										<ul class="list-inline nav-top">
											<li>
												<a href="index.html">Home</a>
												<div class="mega-drop">
													<div class="drop-holder">
														<div class="coll">
															<strong class="title">HOME</strong>
															<ul class="list-unstyled">
																<li><a href="index-agency.html">Home - Agency</a></li>
																<li><a href="index-business.html">Home - Business</a></li>
																<li><a href="index-creative.html">Home - Creative</a></li>
																<li><a href="index-croporate.html">Home - Croporate</a></li>
																<li><a href="index-minimal.html">Home - Minimal</a></li>
																<li><a href="index-personal.html">Home - Personal</a></li>
																<li><a href="index-photographer.html">Home - Photographer</a></li>
																<li><a href="index-freelancer.html">Home - Freelancer</a></li>
																<li><a href="index-wedding.html">Home - Wedding</a></li>
																<li><a href="index-shop.html">Home - Shop</a></li>
																<li><a href="index-restaurant.html">Home - Restaurant</a></li>
																<li><a href="index-home-parallax.html">Home - Parallax</a></li>
																<li><a href="index-architecture.html">Home - Architecture</a></li>
																<li><a href="index-construction.html">Home - Construction</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">HOME</strong>
															<ul class="list-unstyled">
																<li><a href="index-app-showcase.html">Home - App Showcase</a></li>
																<li><a href="index-education.html">Home - Education</a></li>
																<li><a href="index-lawyer.html">Home - Lawyer</a></li>
																<li><a href="index-plumber.html">Home - Plumber</a></li>
																<li><a href="index-real-estate.html">Home - Real Estate</a></li>
																<li><a href="index-travel.html">Home - Travel</a></li>
																<li><a href="index-yoga.html">Home - Yoga</a></li>
																<li><a href="index-spa.html">Home - Spa</a></li>
															</ul>
															<strong class="title">HOME Portfolio</strong>
															<ul class="list-unstyled">
																<li><a href="index-portfolio.html">Home - Portfolio 1</a></li>
																<li><a href="index-portfolio-2.html">Home - Portfolio 2</a></li>
																<li><a href="index-portfolio-3.html">Home - Portfolio 3</a></li>
																<li><a href="index-portfolio-4.html">Home - Portfolio 4</a></li>
																<li><a href="index-portfolio-5.html">Home - Portfolio 5</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">HOME Blog</strong>
															<ul class="list-unstyled">
																<li><a href="index-blog.html">Home - Blog 1</a></li>
																<li><a href="index-blog-2.html">Home - Blog 2</a></li>
																<li><a href="index-blog-3.html">Home - Blog 3</a></li>
																<li><a href="index-blog-4.html">Home - Blog 4</a></li>
															</ul>
															<strong class="title">one page</strong>
															<ul class="list-unstyled">
																<li><a href="index-one-page.html">onepage - Default</a></li>
																<li><a href="index-onepage-agency.html">onepage - Agency</a></li>
																<li><a href="index-onepage-business.html">onepage - Business</a></li>
																<li><a href="index-onepage-creative.html">onepage - Creative</a></li>
																<li><a href="index-onepage-croporate.html">onepage - Croporate</a></li>
																<li><a href="index-onepage-minimal.html">onepage - Minimal</a></li>
																<li><a href="index-onepage-personal.html">onepage - Personal</a></li>
																<li><a href="index-onepage-freelancer.html">onepage - Freelancer</a></li>
																<li><a href="index-onepage-Wedding.html">onepage - Wedding</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">one page</strong>
															<ul class="list-unstyled">
																<li><a href="index-onepage-restaurant.html">onepage - restaurant</a></li>
																<li><a href="index-onepage-architecture.html">onepage - Architecture</a></li>
																<li><a href="index-onepage-construction.html">onepage - Construction</a></li>
																<li><a href="index-onepage-education.html">onepage - Education</a></li>
																<li><a href="index-onepage-lawyer.html">onepage - Lawyer</a></li>
																<li><a href="index-onepage-plumber.html">onepage - Plumber</a></li>
																<li><a href="index-onepage-travel.html">onepage - Travel</a></li>
																<li><a href="index-onepage-yoga.html">onepage - Yoga</a></li>
																<li><a href="index-onepage-spa.html">onepage - Spa</a></li>
															</ul>
															<strong class="title">landing Page</strong>
															<ul class="list-unstyled">
																<li><a href="index-app-showcase.html">Home - App Showcase</a></li>
																<li><a href="index-applanding-page.html">Home - Applanding Page</a></li>
																<li><a href="index-applanding-page2.html">Home - Applanding Page 2</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li>
												<a href="pages.html">Pages</a>
												<div class="mega-drop">
													<div class="drop-holder">
														<div class="coll">
															<strong class="title">COMPANY</strong>
															<ul class="list-unstyled">
																<li><a href="about-us.html">ABOUT US</a></li>
																<li><a href="about-me.html">ABOUT ME</a></li>
																<li><a href="clients.html">CLIENTS</a></li>
																<li><a href="testimonials.html">TESTIMONIALS</a></li>
																<li><a href="team.html">OUR TEAM</a></li>
																<li><a href="team-single.html">TEAM SINGLE</a></li>
																<li><a href="contact.html">contact</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">UTLITY</strong>
															<ul class="list-unstyled">
																<li><a href="services.html">services</a></li>
																<li><a href="services2.html">service 2</a></li>
																<li><a href="faq-1.html">FAQ LAYOUT 1</a></li>
																<li><a href="faq-2.html">FAQ LAYOUT 2</a></li>
																<li><a href="faq-3.html">FAQ LAYOUT 3</a></li>
																<li><a href="sitemap.html">sitemap</a></li>
																<li><a href="blank-page.html">blank page</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">LAYOUT DESIGN</strong>
															<ul class="list-unstyled">
																<li><a href="layout-full-widthwide.html">LAYOUT WIDE</a></li>
																<li><a href="layout-full-width.html">FULL WIDTH</a></li>
																<li><a href="layout-left-sidebar.html">LEFT SIDE BAR</a></li>
																<li><a href="layout-right-sidebar.html">RIGHT SIDEBAR</a></li>
																<li><a href="layout-both-sidebar.html">both  SIDEBAR</a></li>
																<li><a href="layout-side-navigation.html">SIDE NAVIGATION</a></li>
																<li><a href="index-freelancer.html">vertical menu</a></li>
															</ul>
														</div>
														<div class="coll">
															<strong class="title">Miscellaneous</strong>
															<ul class="list-unstyled">
																<li><a href="comming-soon.html">coming soon layout 1</a></li>
																<li><a href="comming-soon2.html">coming soon layout 2</a></li>
																<li><a href="comming-soon3.html">coming soon layout 3</a></li>
																<li><a href="404.html">404 - layout 1</a></li>
																<li><a href="404-2.html">404 - layout 2</a></li>
																<li><a href="404-3.html">404 - layout 3</a></li>
																<li><a href="login.html">Login</a></li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li>
												<a href="features.html">Features</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="rs-slider.html">SLIDERs</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="rs-slider.html">REVOLUTION SLIDER</a></li>
																	<li><a href="index-onepage-interactive.html">interactive</a></li>
																	<li><a href="index-parallax.html">parallax</a></li>
																	<li><a href="index-youtube.html">YOUTUBE</a></li>
																	<li><a href="index-vimeo.html">VIMEO</a></li>
																	<li><a href="index-html5video.html">HTML5 VIDEO</a></li>
																	<li><a href="index-text-rotator.html">TEXT ROTATER</a></li>
																	<li><a href="index-fixed-background.html">FIXED BACKGROUND</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="index-agency.html#header">Headers</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="index-agency.html#header">Headers - Layout 1</a></li>
																	<li><a href="index-business.html#header">Headers - Layout 2</a></li>
																	<li><a href="index-croporate.html#header">Headers - Layout 3</a></li>
																	<li><a href="index-creative.html#header">Headers - Layout 4</a></li>
																	<li><a href="index-freelancer.html#header">Headers - Layout 5</a></li>
																	<li><a href="index-portfolio.html#header">Headers - Layout 6</a></li>
																	<li><a href="index-portfolio-2.html#header">Headers - Layout 7</a></li>
																	<li><a href="index-photographer.html#header">Headers - Layout 8</a></li>
																	<li><a href="index-minimal.html#header">Headers - Layout 9</a></li>
																	<li><a href="index-one-page.html#header">Headers - Layout 10</a></li>
																	<li><a href="index-restaurant.html#header">Headers - Layout 11</a></li>
																	<li><a href="index-blog.html#header">Headers - Layout 12</a></li>
																	<li><a href="index-app-showcase.html#header">Headers - Layout 13</a></li>
																	<li><a href="index-applanding-page.html#header">Headers - Layout 14</a></li>
																	<li><a href="index-wedding.html#header">Headers - Layout 15</a></li>
																	<li><a href="index-shop.html#header">Headers - Layout 16</a></li>
																	<li><a href="index-construction.html#header">Headers - Layout 17</a></li>
																	<li><a href="index-plumber.html#header">Headers - Layout 18</a></li>
																	<li><a href="index-blog-4.html#header">Headers - Layout 19</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="index-agency.html#footer">Footers</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="index-agency.html#footer">Footers - Layout 1</a></li>
																	<li><a href="index-business.html#footer">Footers - Layout 2</a></li>
																	<li><a href="index-croporate.html#footer">Footers - Layout 3</a></li>
																	<li><a href="index-creative.html#footer">Footers - Layout 4</a></li>
																	<li><a href="index-minimal.html#footer">Footers - Layout 5</a></li>
																	<li><a href="index-personal.html#footer">Footers - Layout 6</a></li>
																	<li><a href="index-photographer.html#footer">Footers - Layout 7</a></li>
																	<li><a href="index-freelancer.html#footer">Footers - Layout 8</a></li>
																	<li><a href="index-wedding.html#footer">Footers - Layout 9</a></li>
																	<li><a href="index-shop.html#footer">Footers - Layout 10</a></li>
																	<li><a href="index-restaurant.html#footer">Footers - Layout 11</a></li>
																	<li><a href="index-construction.html#footer">Footers - Layout 12</a></li>
																	<li><a href="index-app-showcase.html#footer">Footers - Layout 13</a></li>
																	<li><a href="index-applanding-page.html#footer">Footers - Layout 14</a></li>
																	<li><a href="index-applanding-page2.html#footer">Footers - Layout 15</a></li>
																	<li><a href="index-one-page.html#footer">Footers - Layout 16</a></li>
																	<li><a href="index-yoga.html#footer">Footers - Layout 17</a></li>
																	<li><a href="index-portfolio-2.html#footer">Footers - Layout 18</a></li>
																	<li><a href="index-blog.html#footer">Footers - Layout 19</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="page-title.html">Page Title</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="page-title.html">DEFAULT</a>
																		<div class="drop right-align">
																			<ul class="list-unstyled">
																				<li><a href="page-title.html">left align</a></li>
																				<li><a href="page-title-right-align.html">right align</a></li>
																				<li><a href="page-title-center-align.html">center align</a></li>
																				<li><a href="page-title-dark-background.html">dark background</a></li>
																				<li><a href="page-title-grey-background.html">grey background</a></li>
																				<li><a href="page-title-image-background.html">image background</a></li>
																				<li><a href="page-title-video-background.html">video background</a></li>
																				<li><a href="page-title-patteren-background.html">pattern background</a></li>
																				<li><a href="page-title-parallax.html">parallax background</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="page-title-alt.html">ALT</a>
																		<div class="drop right-align">
																			<ul class="list-unstyled">
																				<li><a href="page-title-alt.html">left align</a></li>
																				<li><a href="page-title-alt-right-align.html">right align</a></li>
																				<li><a href="page-title-alt-center-align.html">center align</a></li>
																				<li><a href="page-title-alt-dark-background.html">dark background</a></li>
																				<li><a href="page-title-alt-grey-background.html">grey background</a></li>
																				<li><a href="page-title-alt-image-background.html">image background</a></li>
																				<li><a href="page-title-alt-video-background.html">video background</a></li>
																				<li><a href="page-title-alt-pattern-background.html">pattern background</a></li>
																				<li><a href="page-title-alt-parallax-background.html">parallax background</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="page-title-alt2.html">ALT 2</a>
																		<div class="drop right-align">
																			<ul class="list-unstyled">
																				<li><a href="page-title-alt2.html">left align</a></li>
																				<li><a href="page-title-alt2-right-align.html">right align</a></li>
																				<li><a href="page-title-alt2-center-align.html">center align</a></li>
																				<li><a href="page-title-alt2-dark-background.html">dark background</a></li>
																				<li><a href="page-title-alt2-grey-background.html">grey background</a></li>
																				<li><a href="page-title-alt2-image-background.html">image background</a></li>
																				<li><a href="page-title-alt2-video-background.html">video background</a></li>
																				<li><a href="page-title-alt2-pattern-background.html">pattern background</a></li>
																				<li><a href="page-title-alt2-parallax-background.html">parallax background</a></li>
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
												<a href="portfolio.html">Portfolio</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="portfolio-2columns.html">GIRD</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="portfolio-2columns.html">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-1columns.html">1 column</a></li>
																				<li><a href="portfolio-2columns.html">2 column</a></li>
																				<li><a href="portfolio-3columns.html">3 column</a></li>
																				<li><a href="portfolio-4columns.html">4 column</a></li>
																				<li><a href="portfolio-5columns.html">5 column</a></li>
																				<li><a href="portfolio-6columns.html">6 column</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="portfolio-2columns-nospace.html">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-1columns-nospace.html">1 column</a></li>
																				<li><a href="portfolio-2columns-nospace.html">2 column</a></li>
																				<li><a href="portfolio-3columns-nospace.html">3 column</a></li>
																				<li><a href="portfolio-4columns-nospace.html">4 column</a></li>
																				<li><a href="portfolio-5columns-nospace.html">5 column</a></li>
																				<li><a href="portfolio-6columns-nospace.html">6 column</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-masonry-2column.html">masonry</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="portfolio-masonry-2column.html">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-masonry-2column.html">2 column</a></li>
																				<li><a href="portfolio-masonry-3column.html">3 column</a></li>
																				<li><a href="portfolio-masonry-4column.html">4 column</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="portfolio-masonry-2column-nospace.html">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-masonry-2column-nospace.html">2 column</a></li>
																				<li><a href="portfolio-masonry-3column-nospace.html">3 column</a></li>
																				<li><a href="portfolio-masonry-4column-nospace.html">4 column</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="portfolio-masonry-4column-fullwidth.html">LAYOUT</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-masonry-4column-fullwidth.html">4 cloumn full width </a></li>
																				<li><a href="portfolio-masonry-4column-fullwidth-nospace.html">4 cloumn full width  2</a></li>
																				<li><a href="portfolio-masonry-5column-fullwidth.html">5 cloumn full width </a></li>
																				<li><a href="portfolio-masonry-5column-fullwidth-nospace.html">5 cloumn full width  2</a></li>
																				<li><a href="portfolio-alt-masonry-fullwidth.html">ALT FULL WIDTH</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-layout-full-width.html">layout</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="portfolio-layout-full-width.html">FULL WIDTH</a></li>
																	<li><a href="portfolio-layout-full-width-nospace.html">FULL WIDTH NO SPACE</a></li>
																	<li><a href="portfolio-layout-left-sidebar.html">LEFT SIDEBAR</a></li>
																	<li><a href="portfolio-layout-right-sidebar.html">right SIDEBAR</a></li>
																	<li><a href="portfolio-layout-both-sidebar.html">both SIDEBAR</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-vert-2columns.html">VERTICAL</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="portfolio-vert-2columns.html">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-vert-1columns.html">1 column</a></li>
																				<li><a href="portfolio-vert-2columns.html">2 column</a></li>
																				<li><a href="portfolio-vert-3columns.html">3 column</a></li>
																				<li><a href="portfolio-vert-4columns.html">4 column</a></li>
																				<li><a href="portfolio-vert-5columns.html">5 column</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="portfolio-vert-1columns-nospace.html">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="portfolio-vert-1columns-nospace.html">1 column</a></li>
																				<li><a href="portfolio-vert-2columns-nospace.html">2 column</a></li>
																				<li><a href="portfolio-vert-3columns-nospace.html">3 column</a></li>
																				<li><a href="portfolio-vert-4columns-nospace.html">4 column</a></li>
																				<li><a href="portfolio-vert-5columns-nospace.html">5 column</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-parallex-fullwidth.html">PARALLAX</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="portfolio-parallex.html">default</a></li>
																	<li><a href="portfolio-parallex-fullwidth.html">parallax full width</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="portfolio-single-image.html">SINGLE</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="portfolio-single-image.html">image</a></li>
																	<li><a href="portfolio-single-image-fullwidth.html">image full width</a></li>
																	<li><a href="portfolio-single-slider.html">slider</a></li>
																	<li><a href="portfolio-single-slider-fullwidth.html">slider full width</a></li>
																	<li><a href="portfolio-single-parallex.html">parallax</a></li>
																	<li><a href="portfolio-single-parallex-fullwidth.html">parallax full width</a></li>
																	<li><a href="portfolio-single-masonry.html">masonry</a></li>
																	<li><a href="portfolio-single-video-vimeo.html">vimeo</a></li>
																	<li><a href="portfolio-single-video-youtube.html">youtube</a></li>
																	<li><a href="portfolio-single-video.html">html5 video</a></li>
																	<li><a href="portfolio-single-video-dailymotion.html">dialymotion</a></li>
																	<li><a href="portfolio-single-soundcloud.html">sound cloud</a></li>
																	<li><a href="portfolio-single-3-column.html">3 column</a></li>
																	<li><a href="portfolio-single-audio.html">audio</a></li>
																	<li><a href="portfolio-single-blockquote.html">blockquote</a></li>
																	<li><a href="portfolio-single-link.html">link</a></li>
																</ul>
															</div>
														</li>
													</ul>
												</div>
											</li>
											<li>
												<a href="blogs.html">Blogs</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="blog-grids-2column.html">GIRD</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="blog-grids-2column.html">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-grids-2column.html">2 column</a></li>
																				<li><a href="blog-grids-3column.html">3 column</a></li>
																				<li><a href="blog-grids-4column.html">4 column</a></li>
																				<li><a href="blog-grids-fullwidth.html">Full width</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="blog-grids-2column-nospace.html">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-grids-2column-nospace.html">2 column</a></li>
																				<li><a href="blog-grids-3column-nospace.html">3 column</a></li>
																				<li><a href="blog-grids-4column-nospace.html">4 column</a></li>
																				<li><a href="blog-grids-fullwidth-nospace.html">Full width</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-masonry-2column.html">masonry</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="blog-grids-2column.html">with space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-masonry-2column.html">2 column</a></li>
																				<li><a href="blog-masonry-3column.html">3 column</a></li>
																				<li><a href="blog-masonry-4column.html">4 column</a></li>
																				<li><a href="blog-masonry-fullwidth.html">Full width</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="blog-grids-2column-nospace.html">without space</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-masonry-2column-nospace.html">2 column</a></li>
																				<li><a href="blog-masonry-3column-nospace.html">3 column</a></li>
																				<li><a href="blog-masonry-4column-nospace.html">4 column</a></li>
																				<li><a href="blog-masonry-fullwidth-nospace.html">Full width</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-full-width-accordion.html">accordion</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="blog-full-width-accordion.html">FULL WIDTH</a></li>
																	<li><a href="blog-full-width-accordion-leftsidebar.html">LEFT SIDEBAR</a></li>
																	<li><a href="blog-full-width-accordion-rightsidebar.html">RIGHT SIDEBAR</a></li>
																	<li><a href="blog-full-width-accordion-bothsidebar.html">BOTH  SIDEBAR</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-timeline-default.html">TIMELINE</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="blog-timeline-default.html">ALT</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-timeline-default.html">DEFAULT</a></li>
																				<li><a href="blog-timeline-default-rightsidebar.html">RIGHT SIDEBAR</a></li>
																				<li><a href="blog-timeline-default-leftsidebar.html">LEFT SIDEBAR</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="blog-alt-timeline-default.html">ALT 2</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-alt-timeline-default.html">DEFAULT</a></li>
																				<li><a href="blog-alt-timeline-default-rightsidebar.html">RIGHT SIDEBAR</a></li>
																				<li><a href="blog-alt-timeline-default-leftsidebar.html">LEFT SIDEBAR</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-full-width.html">LAYOUT</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li>
																		<a href="blog-full-width.html">FULL WIDTH</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-full-width.html">DEFAULT</a></li>
																				<li><a href="blog-full-width-list.html">LIST</a></li>
																				<li><a href="blog-full-width-leftsidebar.html">LEFT SIDEBAR</a></li>
																				<li><a href="blog-full-width-rightsidebar.html">right SIDEBAR</a></li>
																				<li><a href="blog-full-width-bothsidebar.html">both SIDEBAR</a></li>
																			</ul>
																		</div>
																	</li>
																	<li>
																		<a href="blog-alt-default.html">ALT</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-alt-default.html">default</a></li>
																				<li><a href="blog-alt2-default.html">default - layout 2</a></li>
																				<li><a href="blog-alt-default-leftsidebar.html">LEFT SIDEBAR</a></li>
																				<li><a href="blog-alt2-default-leftsidebar.html">LEFT SIDEBAR - layout 2</a></li>
																				<li><a href="blog-alt-default-rightsidebar.html">right SIDEBAR</a></li>
																				<li><a href="blog-alt2-default-rightsidebar.html">right SIDEBAR - layout 2</a></li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</li>
														<li>
															<a href="blog-single-image.html">SINGLE</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="blog-single-image.html">image</a></li>
																	<li><a href="blog-single-image-fullwidth.html">image full width</a></li>
																	<li><a href="blog-single-slider.html">slider</a></li>
																	<li><a href="blog-single-video-vimeo.html">vimeo</a></li>
																	<li><a href="blog-single-video-youtube.html">youtube</a></li>
																	<li><a href="blog-single-video.html">html5 video</a></li>
																	<li><a href="blog-single-video-daily-motion.html">dialymotion</a></li>
																	<li><a href="blog-single-soundcloud.html">sound cloud</a></li>
																	<li><a href="blog-single-3column.html">3 column</a></li>
																	<li><a href="blog-single-audio.html">audio</a></li>
																	<li><a href="blog-single-blockquote.html">blockquote</a></li>
																	<li>
																		<a href="blog-single-default-sidebar-left.html">SIDEBAR</a>
																		<div class="drop">
																			<ul class="list-unstyled">
																				<li><a href="blog-single-default-sidebar-left.html">default</a></li>
																				<li><a href="blog-single-default-sidebar-left.html">lEFT SIDEBAR</a></li>
																				<li><a href="blog-single-default-sidebar-right.html">right SIDEBAR</a></li>
																				<li><a href="blog-single-default-sidebar-both.html">both sidebar</a></li>
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
												<a href="shop.html">shop</a>
												<div class="drop">
													<ul class="list-unstyled">
														<li>
															<a href="shop-grid-3column.html">GIRD</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="shop-grid-3column.html">3 column</a></li>
																	<li><a href="shop-grid-3column-rightsidebar.html">3 column - right sidebar</a></li>
																	<li><a href="shop-grid-3column-leftsidebar.html">3 column - left sidebar</a></li>
																	<li><a href="shop-grid-4column.html">4 column</a></li>
																	<li><a href="shop-grid-4column-rightsidebar.html">4 column - right sidebar</a></li>
																	<li><a href="shop-grid-4column-leftsidebar.html">4 column - left sidebar</a></li>
																	<li><a href="shop-grid-full-width.html">full width</a></li>
																</ul>
															</div>
														</li>
														<li>
															<a href="shop-list.html">LIST</a>
															<div class="drop">
																<ul class="list-unstyled">
																	<li><a href="shop-list.html">default</a></li>
																	<li><a href="shop-list-leftsidebar.html">right sidebar</a></li>
																	<li><a href="shop-list-rightsidebar.html">leftsidebar</a></li>
																</ul>
															</div>
														</li>
														<li><a href="shop-single.html">single</a></li>
														<li><a href="shop-cart.html">cart</a></li>
														<li><a href="shop-checkout.html">checkout</a></li>
														<li><a href="login.html">login</a></li>
													</ul>
												</div>
											</li>
											<li class="active">
												<a href="shortcodes.html">ShortCodes</a>
												<div class="mega-drop">
													<div class="drop-holder">
														<div class="coll">
															<ul class="list-unstyled">
																<li><a href="shortcode-alert-boxes.html"><i class="fa fa-bolt"></i> ALERT BOXES</a></li>
																<li><a href="shortcode-animations.html"><i class="fa fa-certificate"></i> ANIMATION</a></li>
																<li><a href="shortcode-blockquotes.html"><i class="fa fa-compress"></i> BLOCQUOTE</a></li>
																<li><a href="shortcode-buttons.html"><i class="fa fa-dot-circle-o"></i> BUTTONS</a></li>
																<li><a href="shortcode-carousel.html"><i class="fa fa-eye"></i> CAROUSAL</a></li>
																<li><a href="shortcode-clients.html"><i class="fa fa-gavel"></i> CLIENTS</a></li>
																<li><a href="shortcode-columns.html"><i class="fa fa-odnoklassniki"></i> CLOUMNS</a></li>
																<li><a href="shortcode-counters.html"><i class="fa fa-th-large"></i> COUNTERS</a></li>
															</ul>
														</div>
														<div class="coll">
															<ul class="list-unstyled">
																<li><a href="shortcode-dividers.html"><i class="fa fa-bolt"></i> DIVIDERS</a></li>
																<li><a href="shortcode-galleries.html"><i class="fa fa-bolt"></i> GALLERIES</a></li>
																<li><a href="shortcode-heading-styles.html"><i class="fa fa-bolt"></i> HEADING STYLES</a></li>
																<li class="active"><a href="shortcode-icon-boxes.html"><i class="fa fa-bolt"></i> ICON BOXES</a></li>
																<li><a href="shortcode-icon-lists.html"><i class="fa fa-bolt"></i> ICON LISTS</a></li>
																<li><a href="shortcode-labels.html"><i class="fa fa-bolt"></i> LABELS</a></li>
																<li><a href="shortcode-lightbox.html"><i class="fa fa-bolt"></i> LIGHTBOX</a></li>
																<li><a href="shortcode-lists-panels.html"><i class="fa fa-bolt"></i> LIST PANELS</a></li>
															</ul>
														</div>
														<div class="coll">
															<ul class="list-unstyled">
																<li><a href="shortcode-maps.html"><i class="fa fa-bolt"></i> MAPS</a></li>
																<li><a href="shortcode-media-embeds.html"><i class="fa fa-bolt"></i> MEDIA EMBDED</a></li>
																<li><a href="shortcode-modal-boxes.html"><i class="fa fa-bolt"></i> MODAL BOXES</a></li>
																<li><a href="shortcode-navigations.html"><i class="fa fa-bolt"></i> NAVIGATIONS</a></li>
																<li><a href="shortcode-pagination.html"><i class="fa fa-bolt"></i> PAGINATIONS</a></li>
																<li><a href="shortcode-pies-skills.html"><i class="fa fa-bolt"></i> PIES SKILLS</a></li>
																<li><a href="shortcode-pricing-boxes.html"><i class="fa fa-bolt"></i> PRICING BOXES</a></li>
																<li><a href="shortcode-process-steps.html"><i class="fa fa-bolt"></i> PROCESS STEPS</a></li>
															</ul>
														</div>
														<div class="coll">
															<ul class="list-unstyled">
																<li><a href="shortcode-promo-boxes.html"><i class="fa fa-bolt"></i> PROMO BOXES</a></li>
																<li><a href="shortcode-responsive.html"><i class="fa fa-bolt"></i> RESPONSIVE</a></li>
																<li><a href="shortcode-sections.html"><i class="fa fa-bolt"></i> SECTIONS</a></li>
																<li><a href="shortcode-social-icons.html"><i class="fa fa-bolt"></i> SOCIAL ICONS</a></li>
																<li><a href="shortcode-tables.html"><i class="fa fa-bolt"></i> TABLES</a></li>
																<li><a href="shortcode-tabs.html"><i class="fa fa-bolt"></i> TABS</a></li>
																<li><a href="shortcode-thumbnails.html"><i class="fa fa-bolt"></i> THUMBNAILS</a></li>
																<li><a href="shortcode-toggles.html"><i class="fa fa-bolt"></i> TOGGLE</a></li>
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
                <!-- page banner -->
				<header class="page-banner small grey margin-bottom-60">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="holder">
									<h1 class="heading text-uppercase">icon boxes</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="#">HOME</a></li>
									<li><a href="#">short codes</a></li>
									<li class="active"><a href="#">icon boxes</a></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
				<div class="container margin-bottom-60">
				<div id="all-icons" class="row">
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-album"></span>
					  <input type="text" value="pe-7s-album" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6aa" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6aa" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-arc"></span>
					  <input type="text" value="pe-7s-arc" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6ab" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6ab" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-back-2"></span>
					  <input type="text" value="pe-7s-back-2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6ac" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6ac" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-bandaid"></span>
					  <input type="text" value="pe-7s-bandaid" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6ad" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6ad" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-car"></span>
					  <input type="text" value="pe-7s-car" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6ae" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6ae" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-diamond"></span>
					  <input type="text" value="pe-7s-diamond" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6af" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6af" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-door-lock"></span>
					  <input type="text" value="pe-7s-door-lock" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b0" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b0" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-eyedropper"></span>
					  <input type="text" value="pe-7s-eyedropper" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b1" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b1" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-female"></span>
					  <input type="text" value="pe-7s-female" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b2" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b2" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-gym"></span>
					  <input type="text" value="pe-7s-gym" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b3" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b3" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-hammer"></span>
					  <input type="text" value="pe-7s-hammer" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b4" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b4" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-headphones"></span>
					  <input type="text" value="pe-7s-headphones" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b5" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b5" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-helm"></span>
					  <input type="text" value="pe-7s-helm" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b6" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b6" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-hourglass"></span>
					  <input type="text" value="pe-7s-hourglass" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b7" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b7" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-leaf"></span>
					  <input type="text" value="pe-7s-leaf" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b8" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b8" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-magic-wand"></span>
					  <input type="text" value="pe-7s-magic-wand" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6b9" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6b9" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-male"></span>
					  <input type="text" value="pe-7s-male" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6ba" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6ba" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-map-2"></span>
					  <input type="text" value="pe-7s-map-2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6bb" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6bb" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-next-2"></span>
					  <input type="text" value="pe-7s-next-2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6bc" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6bc" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-paint-bucket"></span>
					  <input type="text" value="pe-7s-paint-bucket" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6bd" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6bd" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-pendrive"></span>
					  <input type="text" value="pe-7s-pendrive" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6be" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6be" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-photo"></span>
					  <input type="text" value="pe-7s-photo" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6bf" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6bf" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-piggy"></span>
					  <input type="text" value="pe-7s-piggy" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c0" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c0" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-plugin"></span>
					  <input type="text" value="pe-7s-plugin" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c1" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c1" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-refresh-2"></span>
					  <input type="text" value="pe-7s-refresh-2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c2" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c2" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-rocket"></span>
					  <input type="text" value="pe-7s-rocket" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c3" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c3" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-settings"></span>
					  <input type="text" value="pe-7s-settings" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c4" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c4" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-shield"></span>
					  <input type="text" value="pe-7s-shield" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c5" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c5" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-smile"></span>
					  <input type="text" value="pe-7s-smile" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c6" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c6" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-usb"></span>
					  <input type="text" value="pe-7s-usb" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c7" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c7" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-vector"></span>
					  <input type="text" value="pe-7s-vector" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c8" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c8" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-wine"></span>
					  <input type="text" value="pe-7s-wine" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6c9" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6c9" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-cloud-upload"></span>
					  <input type="text" value="pe-7s-cloud-upload" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e68a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe68a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-cash"></span>
					  <input type="text" value="pe-7s-cash" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e68c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe68c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-close"></span>
					  <input type="text" value="pe-7s-close" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e680" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe680" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-bluetooth"></span>
					  <input type="text" value="pe-7s-bluetooth" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e68d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe68d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-cloud-download"></span>
					  <input type="text" value="pe-7s-cloud-download" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e68b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe68b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-way"></span>
					  <input type="text" value="pe-7s-way" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e68e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe68e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-close-circle"></span>
					  <input type="text" value="pe-7s-close-circle" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e681" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe681" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-id"></span>
					  <input type="text" value="pe-7s-id" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e68f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe68f" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-angle-up"></span>
					  <input type="text" value="pe-7s-angle-up" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e682" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe682" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-wristwatch"></span>
					  <input type="text" value="pe-7s-wristwatch" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e690" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe690" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-angle-up-circle"></span>
					  <input type="text" value="pe-7s-angle-up-circle" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e683" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe683" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-world"></span>
					  <input type="text" value="pe-7s-world" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e691" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe691" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-angle-right"></span>
					  <input type="text" value="pe-7s-angle-right" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e684" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe684" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-volume"></span>
					  <input type="text" value="pe-7s-volume" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e692" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe692" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-angle-right-circle"></span>
					  <input type="text" value="pe-7s-angle-right-circle" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e685" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe685" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-users"></span>
					  <input type="text" value="pe-7s-users" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e693" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe693" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-angle-left"></span>
					  <input type="text" value="pe-7s-angle-left" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e686" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe686" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-user-female"></span>
					  <input type="text" value="pe-7s-user-female" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e694" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe694" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-angle-left-circle"></span>
					  <input type="text" value="pe-7s-angle-left-circle" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e687" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe687" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-up-arrow"></span>
					  <input type="text" value="pe-7s-up-arrow" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e695" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe695" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-angle-down"></span>
					  <input type="text" value="pe-7s-angle-down" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e688" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe688" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-switch"></span>
					  <input type="text" value="pe-7s-switch" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e696" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe696" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-angle-down-circle"></span>
					  <input type="text" value="pe-7s-angle-down-circle" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e689" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe689" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-scissors"></span>
					  <input type="text" value="pe-7s-scissors" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e697" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe697" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-wallet"></span>
					  <input type="text" value="pe-7s-wallet" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e600" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe600" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-safe"></span>
					  <input type="text" value="pe-7s-safe" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e698" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe698" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-volume2"></span>
					  <input type="text" value="pe-7s-volume2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e601" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe601" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-volume1"></span>
					  <input type="text" value="pe-7s-volume1" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e602" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe602" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-voicemail"></span>
					  <input type="text" value="pe-7s-voicemail" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e603" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe603" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-video"></span>
					  <input type="text" value="pe-7s-video" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e604" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe604" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-user"></span>
					  <input type="text" value="pe-7s-user" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e605" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe605" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-upload"></span>
					  <input type="text" value="pe-7s-upload" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e606" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe606" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-unlock"></span>
					  <input type="text" value="pe-7s-unlock" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e607" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe607" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-umbrella"></span>
					  <input type="text" value="pe-7s-umbrella" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e608" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe608" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-trash"></span>
					  <input type="text" value="pe-7s-trash" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e609" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe609" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-tools"></span>
					  <input type="text" value="pe-7s-tools" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e60a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe60a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-timer"></span>
					  <input type="text" value="pe-7s-timer" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e60b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe60b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-ticket"></span>
					  <input type="text" value="pe-7s-ticket" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e60c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe60c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-target"></span>
					  <input type="text" value="pe-7s-target" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e60d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe60d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-sun"></span>
					  <input type="text" value="pe-7s-sun" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e60e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe60e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-study"></span>
					  <input type="text" value="pe-7s-study" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e60f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe60f" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-stopwatch"></span>
					  <input type="text" value="pe-7s-stopwatch" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e610" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe610" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-star"></span>
					  <input type="text" value="pe-7s-star" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e611" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe611" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-speaker"></span>
					  <input type="text" value="pe-7s-speaker" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e612" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe612" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-signal"></span>
					  <input type="text" value="pe-7s-signal" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e613" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe613" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-shuffle"></span>
					  <input type="text" value="pe-7s-shuffle" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e614" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe614" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-shopbag"></span>
					  <input type="text" value="pe-7s-shopbag" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e615" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe615" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-share"></span>
					  <input type="text" value="pe-7s-share" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e616" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe616" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-server"></span>
					  <input type="text" value="pe-7s-server" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e617" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe617" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-search"></span>
					  <input type="text" value="pe-7s-search" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e618" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe618" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-film"></span>
					  <input type="text" value="pe-7s-film" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a5" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a5" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-science"></span>
					  <input type="text" value="pe-7s-science" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e619" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe619" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-disk"></span>
					  <input type="text" value="pe-7s-disk" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a6" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a6" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-ribbon"></span>
					  <input type="text" value="pe-7s-ribbon" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e61a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe61a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-repeat"></span>
					  <input type="text" value="pe-7s-repeat" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e61b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe61b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-refresh"></span>
					  <input type="text" value="pe-7s-refresh" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e61c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe61c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-add-user"></span>
					  <input type="text" value="pe-7s-add-user" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a9" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a9" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-refresh-cloud"></span>
					  <input type="text" value="pe-7s-refresh-cloud" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e61d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe61d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-paperclip"></span>
					  <input type="text" value="pe-7s-paperclip" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e69c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe69c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-radio"></span>
					  <input type="text" value="pe-7s-radio" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e61e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe61e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-note2"></span>
					  <input type="text" value="pe-7s-note2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e69d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe69d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-print"></span>
					  <input type="text" value="pe-7s-print" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e61f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe61f" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-network"></span>
					  <input type="text" value="pe-7s-network" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e69e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe69e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-prev"></span>
					  <input type="text" value="pe-7s-prev" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e620" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe620" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-mute"></span>
					  <input type="text" value="pe-7s-mute" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e69f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe69f" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-power"></span>
					  <input type="text" value="pe-7s-power" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e621" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe621" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-medal"></span>
					  <input type="text" value="pe-7s-medal" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a0" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a0" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-portfolio"></span>
					  <input type="text" value="pe-7s-portfolio" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e622" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe622" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-like2"></span>
					  <input type="text" value="pe-7s-like2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a1" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a1" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-plus"></span>
					  <input type="text" value="pe-7s-plus" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e623" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe623" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-left-arrow"></span>
					  <input type="text" value="pe-7s-left-arrow" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a2" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a2" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-play"></span>
					  <input type="text" value="pe-7s-play" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e624" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe624" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-key"></span>
					  <input type="text" value="pe-7s-key" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a3" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a3" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-plane"></span>
					  <input type="text" value="pe-7s-plane" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e625" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe625" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-joy"></span>
					  <input type="text" value="pe-7s-joy" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a4" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a4" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-photo-gallery"></span>
					  <input type="text" value="pe-7s-photo-gallery" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e626" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe626" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-pin"></span>
					  <input type="text" value="pe-7s-pin" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e69b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe69b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-phone"></span>
					  <input type="text" value="pe-7s-phone" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e627" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe627" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-plug"></span>
					  <input type="text" value="pe-7s-plug" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e69a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe69a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-pen"></span>
					  <input type="text" value="pe-7s-pen" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e628" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe628" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-right-arrow"></span>
					  <input type="text" value="pe-7s-right-arrow" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e699" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe699" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-paper-plane"></span>
					  <input type="text" value="pe-7s-paper-plane" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e629" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe629" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-delete-user"></span>
					  <input type="text" value="pe-7s-delete-user" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a7" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a7" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-paint"></span>
					  <input type="text" value="pe-7s-paint" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e62a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe62a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-bottom-arrow"></span>
					  <input type="text" value="pe-7s-bottom-arrow" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e6a8" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe6a8" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-notebook"></span>
					  <input type="text" value="pe-7s-notebook" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e62b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe62b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-note"></span>
					  <input type="text" value="pe-7s-note" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e62c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe62c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-next"></span>
					  <input type="text" value="pe-7s-next" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e62d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe62d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-news-paper"></span>
					  <input type="text" value="pe-7s-news-paper" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e62e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe62e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-musiclist"></span>
					  <input type="text" value="pe-7s-musiclist" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e62f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe62f" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-music"></span>
					  <input type="text" value="pe-7s-music" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e630" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe630" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-mouse"></span>
					  <input type="text" value="pe-7s-mouse" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e631" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe631" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-more"></span>
					  <input type="text" value="pe-7s-more" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e632" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe632" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-moon"></span>
					  <input type="text" value="pe-7s-moon" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e633" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe633" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-monitor"></span>
					  <input type="text" value="pe-7s-monitor" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e634" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe634" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-micro"></span>
					  <input type="text" value="pe-7s-micro" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e635" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe635" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-menu"></span>
					  <input type="text" value="pe-7s-menu" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e636" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe636" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-map"></span>
					  <input type="text" value="pe-7s-map" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e637" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe637" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-map-marker"></span>
					  <input type="text" value="pe-7s-map-marker" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e638" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe638" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-mail"></span>
					  <input type="text" value="pe-7s-mail" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e639" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe639" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-mail-open"></span>
					  <input type="text" value="pe-7s-mail-open" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e63a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe63a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-mail-open-file"></span>
					  <input type="text" value="pe-7s-mail-open-file" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e63b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe63b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-magnet"></span>
					  <input type="text" value="pe-7s-magnet" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e63c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe63c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-loop"></span>
					  <input type="text" value="pe-7s-loop" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e63d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe63d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-look"></span>
					  <input type="text" value="pe-7s-look" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e63e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe63e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-lock"></span>
					  <input type="text" value="pe-7s-lock" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e63f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe63f" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-lintern"></span>
					  <input type="text" value="pe-7s-lintern" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e640" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe640" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-link"></span>
					  <input type="text" value="pe-7s-link" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e641" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe641" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-like"></span>
					  <input type="text" value="pe-7s-like" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e642" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe642" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-light"></span>
					  <input type="text" value="pe-7s-light" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e643" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe643" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-less"></span>
					  <input type="text" value="pe-7s-less" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e644" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe644" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-keypad"></span>
					  <input type="text" value="pe-7s-keypad" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e645" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe645" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-junk"></span>
					  <input type="text" value="pe-7s-junk" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e646" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe646" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-info"></span>
					  <input type="text" value="pe-7s-info" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e647" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe647" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-home"></span>
					  <input type="text" value="pe-7s-home" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e648" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe648" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-help2"></span>
					  <input type="text" value="pe-7s-help2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e649" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe649" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-help1"></span>
					  <input type="text" value="pe-7s-help1" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e64a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe64a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-graph3"></span>
					  <input type="text" value="pe-7s-graph3" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e64b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe64b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-graph2"></span>
					  <input type="text" value="pe-7s-graph2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e64c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe64c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-graph1"></span>
					  <input type="text" value="pe-7s-graph1" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e64d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe64d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-graph"></span>
					  <input type="text" value="pe-7s-graph" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e64e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe64e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-global"></span>
					  <input type="text" value="pe-7s-global" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e64f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe64f" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-gleam"></span>
					  <input type="text" value="pe-7s-gleam" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e650" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe650" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-glasses"></span>
					  <input type="text" value="pe-7s-glasses" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e651" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe651" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-gift"></span>
					  <input type="text" value="pe-7s-gift" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e652" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe652" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-folder"></span>
					  <input type="text" value="pe-7s-folder" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e653" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe653" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-flag"></span>
					  <input type="text" value="pe-7s-flag" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e654" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe654" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-filter"></span>
					  <input type="text" value="pe-7s-filter" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e655" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe655" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-file"></span>
					  <input type="text" value="pe-7s-file" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e656" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe656" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-expand1"></span>
					  <input type="text" value="pe-7s-expand1" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e657" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe657" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-exapnd2"></span>
					  <input type="text" value="pe-7s-exapnd2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e658" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe658" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-edit"></span>
					  <input type="text" value="pe-7s-edit" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e659" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe659" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-drop"></span>
					  <input type="text" value="pe-7s-drop" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e65a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe65a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-drawer"></span>
					  <input type="text" value="pe-7s-drawer" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e65b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe65b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-download"></span>
					  <input type="text" value="pe-7s-download" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e65c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe65c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-display2"></span>
					  <input type="text" value="pe-7s-display2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e65d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe65d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-display1"></span>
					  <input type="text" value="pe-7s-display1" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e65e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe65e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-diskette"></span>
					  <input type="text" value="pe-7s-diskette" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e65f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe65f" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-date"></span>
					  <input type="text" value="pe-7s-date" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e660" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe660" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-cup"></span>
					  <input type="text" value="pe-7s-cup" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e661" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe661" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-culture"></span>
					  <input type="text" value="pe-7s-culture" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e662" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe662" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-crop"></span>
					  <input type="text" value="pe-7s-crop" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e663" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe663" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-credit"></span>
					  <input type="text" value="pe-7s-credit" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e664" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe664" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-copy-file"></span>
					  <input type="text" value="pe-7s-copy-file" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e665" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe665" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-config"></span>
					  <input type="text" value="pe-7s-config" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e666" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe666" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-compass"></span>
					  <input type="text" value="pe-7s-compass" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e667" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe667" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-comment"></span>
					  <input type="text" value="pe-7s-comment" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e668" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe668" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-coffee"></span>
					  <input type="text" value="pe-7s-coffee" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e669" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe669" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-cloud"></span>
					  <input type="text" value="pe-7s-cloud" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e66a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe66a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-clock"></span>
					  <input type="text" value="pe-7s-clock" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e66b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe66b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-check"></span>
					  <input type="text" value="pe-7s-check" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e66c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe66c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-chat"></span>
					  <input type="text" value="pe-7s-chat" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e66d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe66d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-cart"></span>
					  <input type="text" value="pe-7s-cart" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e66e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe66e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-camera"></span>
					  <input type="text" value="pe-7s-camera" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e66f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe66f" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-call"></span>
					  <input type="text" value="pe-7s-call" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e670" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe670" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-calculator"></span>
					  <input type="text" value="pe-7s-calculator" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e671" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe671" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-browser"></span>
					  <input type="text" value="pe-7s-browser" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e672" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe672" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-box2"></span>
					  <input type="text" value="pe-7s-box2" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e673" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe673" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-box1"></span>
					  <input type="text" value="pe-7s-box1" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e674" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe674" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-bookmarks"></span>
					  <input type="text" value="pe-7s-bookmarks" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e675" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe675" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-bicycle"></span>
					  <input type="text" value="pe-7s-bicycle" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e676" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe676" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-bell"></span>
					  <input type="text" value="pe-7s-bell" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e677" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe677" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-battery"></span>
					  <input type="text" value="pe-7s-battery" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e678" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe678" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-ball"></span>
					  <input type="text" value="pe-7s-ball" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e679" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe679" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-back"></span>
					  <input type="text" value="pe-7s-back" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e67a" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe67a" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-attention"></span>
					  <input type="text" value="pe-7s-attention" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e67b" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe67b" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-anchor"></span>
					  <input type="text" value="pe-7s-anchor" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e67c" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe67c" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-albums"></span>
					  <input type="text" value="pe-7s-albums" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e67d" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe67d" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-alarm"></span>
					  <input type="text" value="pe-7s-alarm" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e67e" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe67e" class="unicode-text">
					</fieldset>
				  </div>
				  <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
					<div class="font-icon-detail"><span class="pe-7s-airplay"></span>
					  <input type="text" value="pe-7s-airplay" class="font-icon-name">
					</div>
					<fieldset class="font-icon-code">
					  <input type="text" readonly value="e67f" class="code-value">
					  <input type="text" readonly maxlength="1" value="" class="unicode">
					  <input type="text" value="&amp;#xe67f" class="unicode-text">
					</fieldset>
				  </div>
				</div>
			</main>
			<!-- footer of the page -->
			<footer id="footer">
				<!-- footer top -->
				<div class="footer-top bg-shark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="holder">
									<div class="logo"><a href="#"><img src="images/logo.png" alt="fekra"></a></div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<!-- foote-social -->
									<ul class="list-inline footer-social">
										<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li class="behance"><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- footer cent -->
				<div class="footer-cent bg-dark-jungle">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 info-box column1">
								<div class="f-get-touch">
									<h5>Get in touch</h5>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry .</p>
									<address><i class="fa fa-map-marker"></i> 1422 1st St. Santa Rosa,t CA 94559. USA</address>
									<a href="mailto:&#097;&#100;&#109;&#105;&#110;&#064;&#101;&#045;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;" class="email"><i class="fa fa-envelope-o"></i> &#097;&#100;&#109;&#105;&#110;&#064;&#101;&#045;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;</a>
									<a href="tel:00201008431112" class="tel"><i class="fa fa-phone"></i> 002- 01008431112</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 column2">
								<!-- f-popular-tags -->
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
							<div class="col-xs-12 col-sm-6 col-md-3 column3 clearfix-sm">
								<!-- footer-lastest-news -->
								<div class="f-lastest-news">
									<h5>Latest News</h5>
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
								<!-- f-flicker -->
								<div class="f-flicker">
									<h5>Flickr Stream</h5>
									<div class="insta-box flickr-feed" data-id="44802888@N04" data-count="8" data-lightbox="gallery"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- footer bottom -->
				<div class="footer-bottom bg-shark">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="bottom-box1">
									<!-- foote-nav -->
									<ul class="list-inline footer-nav">
										<li><a href="#">Home</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Career</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Use of terms</a></li>
									</ul>
									<span class="copyright">&copy; 2015 &nbsp; <a href="#">Fekra Corporation</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- fa fa-chevron-up -->
		<div class="fa fa-chevron-up" id="gotoTop"></div>
	</div>
	<div id="style-changer" data-src="inc/style-changer.html"></div>
	<!-- include jQuery library -->
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<!-- include custom JavaScript -->
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<!-- include plugins JavaScript -->
	<script type="text/javascript" src="js/plugins.js"></script>
</body>
</html>