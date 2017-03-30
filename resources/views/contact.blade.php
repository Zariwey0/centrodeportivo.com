@extends('layouts.home')

@section('content')

			<!-- contain main informative part of the site -->
			<main id="main" role="main">
                <!-- page banner -->
				<header class="page-banner">
					<div class="stretch">
						<img alt="image description" src="http://placehold.it/1920x400">
					</div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="holder">
									<h1 class="heading text-capitalize">Contact Us</h1>
									<p>We connect every where</p>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="#">HOME</a></li>
									<li class="active"><a href="#">contact us</a></li>
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
							<div class="map" data-lat="31.5497" data-lng="74.3436" data-zoom="8">
								<div class="map-info">
									<h2>Fekra</h2>
									<p>Lorem ipsum dolor sit amet...</p>
								</div>
							</div>
						</div>
					</div>
                    <!-- contact message -->
					<div class="row contact-message">
						<div class="col-sm-6 col-xs-12">
							<h2>Send a message</h2>
							<p>Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<form action="#" class="contact-form2">
								<fieldset>
									<input class="form-control" type="text" placeholder="Name*">
									<input class="form-control" type="email" placeholder="E-mail *">
									<input class="form-control" type="text" placeholder="Website*">
									<textarea  class="form-control" cols="30" rows="10" placeholder="Message*"></textarea>
									<input class="btn-more btn" type="submit" value="submit">
								</fieldset>
							</form>
						</div>
						<div class="col-sm-6 col-xs-12">
							<h2>How to reach us</h2>
							<p>Ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
							<div class="contact-address">
								<div class="alignleft">
									<img class="img-responsive" alt="image description" src="http://placehold.it/270x250" >
								</div>
								<div class="contact-info">
									<h3><i class="fa fa-road"></i>Address</h3>
									<address>1422 1st St. Santa Rosa,t CA 94559. USA</address>
									<h3><i class="fa fa-phone"></i>Phones Numbers</h3>
									<div class="tel-box">
										<span class="tel">
											<a href="tel:02214521421" class="tel">02 - 2145 214 21</a>
										</span>
										<span class="tel">
											<a href="tel:0201008431112" class="tel">02 - 0100 843 1112</a>
										</span>
									</div>
									<h3><i class="fa fa-envelope"></i>E-mail</h3>
									<a href="mailto:&#105;&#110;&#102;&#111;&#114;&#109;&#097;&#116;&#105;&#111;&#110;&#064;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#114;&#109;&#097;&#116;&#105;&#111;&#110;&#064;&#100;&#111;&#109;&#097;&#105;&#110;&#046;&#099;&#111;&#109;</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
@stop