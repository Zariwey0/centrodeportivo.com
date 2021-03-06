@extends('layouts.home')
@section('title', 'Centro Deportivo Lisleta - Home')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

@section('content')
			<!-- contain main informative part of the site -->
			<main id="main" role="main">
                <!-- page banner -->
				<header class="page-banner small dark dark-bottom-border">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="holder">
									<h1 class="heading text-uppercase">portfolio</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="#">HOME</a></li>
									<li><a href="#">PORTFOLIO</a></li>
									<li class="active"><a href="#"> PORTFOLIO single image</a></li>
								</ul>
							</div>
						</div>
				    </div>
				</header>
				<!-- port single -->
				<section class="port-single padding-top-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-center">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
								<a href="#" class="dashboard"><i class="fa fa-th"></i></a>
								<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="row text-upercase">
							<div class="col-xs-12 text-center">
								<h2>The Project Name</h2>
								<p>IN WEB DESIGN</p>
							</div>
						</div>
						<div class="beans-slider" data-rotate="true">
							<div class="beans-mask">
								<div class="beans-slideset">
									<div class="beans-slide">
										<div class="stretch">
											<img src="http://placehold.it/1170x450" alt="image description">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-8">
								<h3>About the project</h3>
								<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. </p>
								<p>Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum.</p>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<h3>PROJECT INFO</h3>
								<ul>
									<li>
										<i class="fa fa-user"></i> <strong>Client Name:</strong> Jues Harber
									</li>
									<li>
										<i class="fa fa-calendar"></i> <strong>Published Date: </strong> 30 Jan, 2015
									</li>
									<li>
										<i class="fa fa-tags"></i> <strong>Category:</strong> <a href="#">Web Design,</a> <a href="#">Logo,</a> <a href="#">Graphics,</a> <a href="#">3D Design</a>
									</li>
								</ul>
								<footer>
									<a href="#" class="btn btn-f-info">LAUNCH</a>
									<ul class="social-network">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</footer>
							</div>
						</div>
					</div>
				</section>
				<!-- port aside -->
				<aside class="port-aside bg-grey dark-bottom-border padding-top-90 padding-bottom-90">
                   <div class="container">
                       <div class="row">
                            <!-- page heading small -->
                            <header class="page-heading left-align col-xs-12 col-md-12">
                                <h2 class="lime text-capitalize font-light">Related Projects</h2>
                            </header>
                       </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <!-- portfolio block nospace -->
                                <div class="portfolio-block nospace">
                                    <!-- box -->
                                    <div class="box">
                                        <div class="over">
                                            <div class="holder">
                                                <div class="frame">
                                                    <div class="over-frame">
                                                        <strong class="title upper">THE HAVE</strong>
                                                        <p>DESIGN</p>
                                                    </div>
                                                </div>
                                            </div>
											<a href="images/placeholder.jpg" class="search lightbox"><i class="fa fa-search"></i></a>
											<a href="portfolio-single-image.html" class="link"><i class="fa fa-link"></i></a>
										</div>
										<img src="http://placehold.it/370x370" alt="image description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <!-- portfolio block nospace -->
                                <div class="portfolio-block nospace">
                                    <!-- box -->
                                    <div class="box">
                                        <div class="over">
                                            <div class="holder">
                                                <div class="frame">
                                                    <div class="over-frame">
                                                        <strong class="title upper">products we Have</strong>
                                                        <p>product</p>
                                                    </div>
                                                </div>
                                            </div>
											<a href="images/placeholder.jpg" class="search lightbox"><i class="fa fa-search"></i></a>
											<a href="portfolio-single-image.html" class="link"><i class="fa fa-link"></i></a>
										</div>
										<img src="http://placehold.it/370x370" alt="image description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <!-- portfolio block nospace -->
                                <div class="portfolio-block nospace">
                                    <!-- box -->
                                    <div class="box">
                                        <div class="over">
                                            <div class="holder">
                                                <div class="frame">
                                                    <div class="over-frame">
                                                        <strong class="title upper">new bags fashion</strong>
                                                        <p>fashion</p>
                                                    </div>
                                                </div>
                                            </div>
											<a href="images/placeholder.jpg" class="search lightbox"><i class="fa fa-search"></i></a>
											<a href="portfolio-single-image.html" class="link"><i class="fa fa-link"></i></a>
										</div>
										<img src="http://placehold.it/370x370" alt="image description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</aside>
			</main>
			<!-- footer of the page -->

@stop