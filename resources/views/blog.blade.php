@extends('layouts.home')
@section('title', 'Centro Deportivo La Isleta FIT - Blog')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

<?php
	use Intervention\Image\ImageManager;
?>

@section('content')

<div class="padding-top-100">
<main id="main" role="main">
    <!-- page banner -->
	<header class="page-banner small">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="holder">
						<h1 class="heading text-uppercase">vive la isleta fit</h1>
					</div>
					<ul class="breadcrumbs">
						<p>Vida sana con nuestros consejos</p>
					</ul>
					<!--
					<ul class="breadcrumbs list-inline">
						<li><a href="#">HOME</a></li>
						<li><a href="#">BLOG</a></li>
						<li class="active"><a href="#"> BLOG FULL WIDTH left sidebar</a></li>
					</ul>
					-->
				</div>
			</div>
	    </div>
		<div class="stretch">
			<?php
				$ruta = "images/healthy2.jpg";
				$imagen = Image::make($ruta)->fit(1920,200,null,'bottom-left')->encode("data-url");
			?>
			<img src="{{$imagen}}" alt="image description">
		</div>
	</header>
	<div class="container padding-top-100">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9 col-sm-push-4 col-md-push-3">
				<!-- blog-post-v1 -->
				<article class="blog-post-v1">
					<!--
					<div class="img-box">
						
						<div class="beans-slider" data-rotate="true">
							<div class="beans-mask">
								<div class="beans-slideset">
									
									<div class="beans-slide">
										<a href="#"><img src="https://placehold.it/870x400" alt="image description" class="img-responsive"></a>
									</div>
									
									<div class="beans-slide">
										<a href="#"><img src="https://placehold.it/870x400" alt="image description" class="img-responsive"></a>
									</div>
									
									<div class="beans-slide">
										<a href="#"><img src="https://placehold.it/870x400" alt="image description" class="img-responsive"></a>
									</div>
								</div>
							</div>
							<div class="beans-pagination">
								
							</div>
						</div>
					</div>-->
					<div class="img-box">
						<?php
                			$ruta = "images/music.png";
							$imagen = Image::make($ruta)->fit(870,400)->encode("data-url");
						?>
						
						<a href="{{ secure_url('/blog/por-que-nos-gusta-tanto-la-musica') }}"><img src="{{$imagen}}" alt="image description" class="img-responsive"></a>
					</div>
					<div class="blog-txt">
						<h2><a href="{{ secure_url('/blog/por-que-nos-gusta-tanto-la-musica') }}">¿Por qué nos gusta tanto la música?</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								Por <a href="#">Admin</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="#">Música</a>, <a href="#">Tecnología</a>, <a href="#">Gente</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="#">14</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="#">32</a>
							</li>
						</ul>
						<p>Si pensamos en los gustos musicales de las personas que conocemos, podremos observar varias cosas: que las preferencias por autores, épocas, géneros, intérpretes… son muy diferentes; que, mientras unos están escuchando música a todas horas, otros prefieren hacerlo en momentos puntuales; que para algunos la música es un entretenimiento más, para otros una pasión, algo imprescindible, para unos pocos una profesión, una vocación…</p>
						<a href="{{ secure_url('/blog/por-que-nos-gusta-tanto-la-musica') }}" class="more">[ LEER MÁS ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-picture-o"></i></span>
							<time datetime="2017-06-18">
								<span class="add">18</span>jun
							</time>
						</div>
					</div>
				</article>
				<!-- blog-post-v1 -->
				<article class="blog-post-v1">
					<div class="img-box">
						<?php
                			$ruta = "images/dietadelapina.jpg";
							$imagen = Image::make($ruta)->fit(870,400)->encode("data-url");
						?>
						
						<a href="#"><img src="{{$imagen}}" alt="image description" class="img-responsive"></a>
					</div>
					<div class="blog-txt">
						<h2><a href="#">La dieta de la piña</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								Por <a href="#">Admin</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="#">Dieta</a>, <a href="#">Salud</a>, <a href="#">Gente</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="#">6</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="#">22</a>
							</li>
						</ul>
						<p>Como es bien sabido, las calorías engordan al ser éstas escasas en frutas y verduras, pero pueden ser enormemente ricas en vitaminas y minerales y pueden constituir muy bien la base de una dieta sana, en especial si se complementa con la piña. De todas las maneras, estas dietas para adelgazar suelen ser breves y su duración sólo raras veces supera una semana, puesto que para más tiempo la fruta y las verduras como único alimento no proporcionan los hidratos de carbono y las proteínas suficientes.</p>
						<a href="#" class="more">[ LEER MÁS ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-picture-o"></i></span>
							<time datetime="2017-06-15">
								<span class="add">15</span>jun
							</time>
						</div>
					</div>
				</article>
				<!-- blog-post-v1 -->
				<article class="blog-post-v1">
					<div class="img-box">
						<div class="box">
							<?php
	                			$ruta = "images/ejerc1.png";
								$imagen = Image::make($ruta)->fit(275,275)->encode("data-url");
							?>
							
							<a href="#"><img src="{{$imagen}}" alt="image description" class="img-responsive"></a>
							
						</div>
						<div class="box">
							<?php
	                			$ruta = "images/ejerc2.jpg";
								$imagen = Image::make($ruta)->fit(275,275)->encode("data-url");
							?>
							
							<a href="#"><img src="{{$imagen}}" alt="image description" class="img-responsive"></a>
						</div>
						<div class="box">
							<?php
	                			$ruta = "images/ejerc3.jpg";
								$imagen = Image::make($ruta)->fit(275,275)->encode("data-url");
							?>
							
							<a href="#"><img src="{{$imagen}}" alt="image description" class="img-responsive"></a>
						</div>
					</div>
					<div class="blog-txt">
						<h2><a href="#">El plan definitivo para perder grasa</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								Por <a href="#">Admin</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="#">Salud</a>, <a href="#">Ejercicio</a>, <a href="#">Gente</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="#">24</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="#">39</a>
							</li>
						</ul>
						<p>Si eres una de tantas personas que hacen ejercicio a diario o practican algún deporte regularmente y, a pesar de ello, no consiguen eliminar esa capa de grasa que se acumula en la zona abdominal, te damos las claves para eliminar definitivamente y en sólo un mes esos molestos michelines.</p>
						<a href="#" class="more">[ LEER MÁS ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-picture-o"></i></span>
							<time datetime="2017-06-14">
								<span class="add">14</span>jun
							</time>
						</div>
					</div>
				</article>
				<!-- blog-post-v1 -->
				<article class="blog-post-v1">
					<div class="img-box video-area">
						<iframe width="500" height="281" src="https://www.youtube.com/embed/cZnsLVArIt8" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="blog-txt">
						<h2><a href="#">Rutina 20 minutos HIIT en casa</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								Por <a href="#">Admin</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="#">Rutina</a>, <a href="#">Ejercicio</a>, <a href="#">Salud</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="#">3</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="#">20</a>
							</li>
						</ul>
						<p>Los entrenamientos por intervalos de alta intensidad, especialmente utilizados para perder grasa, se han puesto de moda en estos últimos años, convirtiéndose en una verdadera fiebre en el mundo del Fitness. Debes saber que es una pieza más que nos sirve para armar nuestro protocolo quema-grasas semanal, pero no la única.</p>
						<a href="#" class="more">[ LEER MÁS ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-video-camera"></i></span>
							<time datetime="2017-06-10">
								<span class="add">10</span>jun
							</time>
						</div>
					</div>
				</article>
				
				<nav class="blog-footer">
					<div class="btn-box">
						<a href="#" class="btn">ANTERIOR</a>
						<a href="#" class="btn">SIGUIENTE</a>
					</div>
					<ul class="b-pagination list-unstyled">
						<li><a href="#">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
					</ul>
				</nav>
			</div>
			<aside class="col-xs-12 col-sm-4 col-md-3 col-sm-pull-8 col-md-pull-9">
				<!-- widget -->
				<section class="widget cate-widget">
					<h2>Busca por etiqueta</h2>
					<ul class="list-unstyled">
						<li><a href="#"><i class="fa fa-caret-right"></i> Gente (16)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Tecnología (4)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Música (5)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Ejercicio (24)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Dieta (25)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Salud (23)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Rutina (2)</a></li>
					</ul>
				</section>
				<!-- widget -->
				<section class="widget toppost-widget">
					<h2>Los posts más populares</h2>
					<ul class="list-inline tabset">
						<li class="active"><a href="#tab1">Posts</a></li>
						<li><a href="#tab2">Comentarios</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab1">
							<article class="box">
								<div class="img-box">
									<?php
			                			$ruta = "images/dietadelapina.jpg";
										$imagen = Image::make($ruta)->fit(64,64)->encode("data-url");
									?>									
									<img src="{{$imagen}}" alt="image description">
								</div>
								<div class="holder">
									<time datetime="2017-06-15">15 JUN 2017</time>
									<h3>la dieta de la piña </h3>
								</div>
							</article>
							<article class="box">
								<div class="img-box">
									<?php
			                			$ruta = "images/vistapreviavideoblog.jpg";
										$imagen = Image::make($ruta)->fit(64,64)->encode("data-url");
									?>									
									<img src="{{$imagen}}" alt="image description">
								</div>
								<div class="holder">
									<time datetime="2017-06-10">10 JUN 2017</time>
									<h3>rutina 20 minutos hiit en casa </h3>
								</div>
							</article>
							<article class="box">
								<div class="img-box">
									<?php
			                			$ruta = "images/music.png";
										$imagen = Image::make($ruta)->fit(64,64)->encode("data-url");
									?>									
									<img src="{{$imagen}}" alt="image description">
								</div>
								<div class="holder">
									<time datetime="2017-06-18">18 JUN 2017</time>
									<h3>¿por qué nos gusta tanto la música? </h3>
								</div>
							</article>
						</div>
						<div id="tab2">
							<article class="box">
								<time datetime="2017-06-14">14 JUN 2017</time>
								<h3>El plan definitivo para perder grasa </h3>
								<a href="#">Pepe López</a>
							</article>
							<article class="box">
								<time datetime="2017-06-15">15 JUN 2017</time>
								<h3>La dieta de la piña </h3>
								<a href="#">Carmen Brito</a>
							</article>
							<article class="box">
								<time datetime="2017-06-10">10 JUN 2017</time>
								<h3>rutina 20 minutos hiit en casa </h3>
								<a href="#">Victoria Peña</a>
							</article>
						</div>
					</div>
				</section>				
			</aside>
		</div>
	</div>
</main>
</div>

@stop