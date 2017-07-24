@extends('layouts.home')
@section('title', 'Centro Deportivo La Isleta FIT - El equipo')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

<?php
	use Intervention\Image\ImageManager;
	$monitors = DB::table('users')->where('user','=','2')->orWhere('user','=','0')->latest()->take(8)->get();
?>

@section('content')
<div class="padding-top-100">
<main id="main" role="main">
    <!-- page banner -->
	<header class="page-banner">
		<div class="stretch">
			<?php
				$ruta = "images/team1.jpg";
				$imagen = Image::make($ruta)->fit(1920,400)->encode("data-url");
			?>
			<img src="images/team2.jpg" alt="image description">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="holder">
						<h1 class="heading">Nuestro equipo</h1>
						<p>Siempre a tu disposición</p>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- about chef -->
	<div class="about-chef style3">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-7 col-xs-12 txt-box">
					<blockquote class="chef-quotes">
						<q>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In pharetra, ipsum ac malesuada cursus, mauris purus semper lorem, in blandit dolor ligula at quam. Vivamus ultrices porttitor neque, nec vestibulum turpis pretium nec. Mauris ultricies  Nullam et lacus lacus. Resources exquisite set arranging moonlight him household had. Months had too ham cousin remove far spirit. She procuring the why performed continual improving.</q>
						<cite>brahwargt</cite>
					</blockquote>
				</div>
				<div class="col-md-5 col-xs-12 img-box hidden-xs hidden-sm" data-animate="fadeInUp" data-delay="300">
					<img class="img-responsive" src="images/directora.jpg" alt="image description">
				</div>
			</div>
		</div>
	</div>
	<!-- banner -->
	<div class="banner margin-bottom-90">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p>Nuestra estrategia empresarial es sencilla:<br>un cliente feliz es un cliente para toda la vida.</p>
				</div>
			</div>
		</div>
		<div class="parallax-holder">
			<div class="parallax-frame"><img src="images/globos.jpg" height="400" width="1920" alt="image description"></div>
		</div>
	</div>
	<!-- container -->
	<section class="container">
		

		<?php
        $cont = 1;
        $pos = 1;
        $delay = 200;
        foreach($monitors as $monitor){ 
        	if ($cont == 5){
        		$cont = 1;
        	}
        	if ($pos == 1 && $cont == 1){
        		echo'<div class="row padding-bottom-60">';
        		$pos++;
        	}elseif ($pos == 2 && $cont == 1) echo '<div class="row padding-bottom-90">';
        	//if ($cont == 4) $cont = 1;
        	if ($cont == 3){
        		$cont++;
        		echo '<div class="col-xs-12 col-sm-6 col-md-3 clearfix-sm">';
        	}else{
        		$cont++;
        		echo '<div class="col-xs-12 col-sm-6 col-md-3">';
        	}
        	echo '<div class="team-box" data-animate="fadeInUp" data-delay="'.$delay.'">
					<div class="img-box">
						<img src="'.Image::make($monitor->profile)->fit(270,266)->encode("data-url").'" alt="image description" class="img-responsive">
						<span class="over"></span>
						<a href="#popup1" class="plus lightbox">+</a>
					</div>
					<h3 class="heading">'.$monitor->name.'</h3>
					<p>FOUNDER AND CEO</p>
					<ul class="social-network list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>';
			if ($delay == 350) $delay = 200;
			else $delay += 50;
			if ($cont == 5){
        		echo '</div>';
        	}
		}
		?>



			<!--
		<div class="row padding-bottom-60">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="team-box" data-animate="fadeInUp" data-delay="200">
					<div class="img-box">
						<img src="http://placehold.it/270x266" alt="image description" class="img-responsive">
						<span class="over"></span>
						<a href="#popup1" class="plus lightbox">+</a>
					</div>
					<h3 class="heading">Your Name</h3>
					<p>FOUNDER AND CEO</p>
					<ul class="social-network list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="team-box" data-animate="fadeInUp" data-delay="250">
					<div class="img-box">
						<img src="http://placehold.it/270x266" alt="image description" class="img-responsive">
						<span class="over"></span>
						<a href="#popup2" class="plus lightbox">+</a>
					</div>
					<h3 class="heading">Fatma Mahmoud</h3>
					<p>PROJECT MANAGEMENT</p>
					<ul class="social-network list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 clearfix-sm">
				<div class="team-box" data-animate="fadeInUp" data-delay="300">
					<div class="img-box">
						<img src="http://placehold.it/270x266" alt="image description" class="img-responsive">
						<span class="over"></span>
						<a href="#popup3" class="plus lightbox">+</a>
					</div>
					<h3 class="heading">Hossam Eldin Mostafa</h3>
					<p>IT LEADER</p>
					<ul class="social-network list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="team-box" data-animate="fadeInUp" data-delay="350">
					<div class="img-box">
						<img src="http://placehold.it/270x266" alt="image description" class="img-responsive">
						<span class="over"></span>
						<a href="#popup4" class="plus lightbox">+</a>
					</div>
					<h3 class="heading">Amanay Abdel Fattah</h3>
					<p>VISUAL DESIGNER</p>
					<ul class="social-network list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row padding-bottom-90">
			<div class="col-xs-12 col-sm-6 col-md-3">

				<div class="team-box" data-animate="fadeInUp" data-delay="200">
					<div class="img-box">
						<img src="http://placehold.it/270x266" alt="image description" class="img-responsive">
						<span class="over"></span>
						<a href="#popup5" class="plus lightbox">+</a>
					</div>
					<h3 class="heading">Mohammed Arafa</h3>
					<p>PROJECT MANAGEMENT</p>
					<ul class="social-network list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">

				<div class="team-box" data-animate="fadeInUp" data-delay="250">
					<div class="img-box">
						<img src="http://placehold.it/270x266" alt="image description" class="img-responsive">
						<span class="over"></span>
						<a href="#popup6" class="plus lightbox">+</a>
					</div>
					<h3 class="heading">Fatma Mahmoud</h3>
					<p>PROJECT MANAGEMENT</p>
					<ul class="social-network list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 clearfix-sm">

				<div class="team-box" data-animate="fadeInUp" data-delay="300">
					<div class="img-box">
						<img src="http://placehold.it/270x266" alt="image description" class="img-responsive">
						<span class="over"></span>
						<a href="#popup7" class="plus lightbox">+</a>
					</div>
					<h3 class="heading">Hossam Eldin Mostafa</h3>
					<p>IT LEADER</p>
					<ul class="social-network list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">

				<div class="team-box" data-animate="fadeInUp" data-delay="350">
					<div class="img-box">
						<img src="http://placehold.it/270x266" alt="image description" class="img-responsive">
						<span class="over"></span>
						<a href="#popup8" class="plus lightbox">+</a>
					</div>
					<h3 class="heading">Amanay Abdel Fattah</h3>
					<p>VISUAL DESIGNER</p>
					<ul class="social-network list-inline">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		-->
	</section>
</main>
<div>

@stop