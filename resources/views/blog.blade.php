@extends('layouts.home')
@section('title', 'Centro Deportivo Lisleta - Home')
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
						<h1 class="heading text-uppercase">vive lisletafit</h1>
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
					<div class="img-box">
						<!-- beans-slider -->
						<div class="beans-slider" data-rotate="true">
							<div class="beans-mask">
								<div class="beans-slideset">
									<!-- beans-slide -->
									<div class="beans-slide">
										<a href="blog-single-slider.html"><img src="http://placehold.it/870x400" alt="image description" class="img-responsive"></a>
									</div>
									<!-- beans-slide -->
									<div class="beans-slide">
										<a href="blog-single-slider.html"><img src="http://placehold.it/870x400" alt="image description" class="img-responsive"></a>
									</div>
									<!-- beans-slide -->
									<div class="beans-slide">
										<a href="blog-single-slider.html"><img src="http://placehold.it/870x400" alt="image description" class="img-responsive"></a>
									</div>
								</div>
							</div>
							<div class="beans-pagination">
								<!-- pagination generated here -->
							</div>
						</div>
					</div>
					<div class="blog-txt">
						<h2><a href="blog-single-slider.html">Why Does Music Feel So Good?</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								By <a href="blog-single-slider.html">Admin name</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="blog-single-slider.html">Music</a>, <a href="blog-single-slider.html">Technologies</a>, <a href="blog-single-slider.html">People</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="blog-single-slider.html">14</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="blog-single-slider.html">320</a>
							</li>
						</ul>
						<p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that's filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied  newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.</p>
						<a href="blog-single-slider.html" class="more">[ CONTINUE READING ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-picture-o"></i></span>
							<time datetime="2015-02-18">
								<span class="add">18</span>jan
							</time>
						</div>
					</div>
				</article>
				<!-- blog-post-v1 -->
				<article class="blog-post-v1">
					<div class="img-box">
						<a href="blog-single-image.html"><img src="http://placehold.it/870x400" alt="image description" class="img-responsive"></a>
					</div>
					<div class="blog-txt">
						<h2><a href="blog-single-image.html">Intelegent transitions in ux design</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								By <a href="blog-single-image.html">Admin name</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="blog-single-image.html">Music</a>, <a href="blog-single-image.html">Technologies</a>, <a href="blog-single-image.html">People</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="blog-single-image.html">14</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="blog-single-image.html">320</a>
							</li>
						</ul>
						<p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that's filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied  newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.</p>
						<a href="blog-single-image.html" class="more">[ CONTINUE READING ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-picture-o"></i></span>
							<time datetime="2015-02-18">
								<span class="add">18</span>jan
							</time>
						</div>
					</div>
				</article>
				<!-- blog-post-v1 -->
				<article class="blog-post-v1">
					<div class="img-box">
						<div class="box">
							<a href="blog-single-3column.html"><img src="http://placehold.it/275x275" alt="image description" class="img-responsive"></a>
						</div>
						<div class="box">
							<a href="blog-single-3column.html"><img src="http://placehold.it/275x275" alt="image description" class="img-responsive"></a>
						</div>
						<div class="box">
							<a href="blog-single-3column.html"><img src="http://placehold.it/275x275" alt="image description" class="img-responsive"></a>
						</div>
					</div>
					<div class="blog-txt">
						<h2><a href="blog-single-3column.html">This is multi images post</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								By <a href="blog-single-3column.html">Admin name</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="blog-single-3column.html">Music</a>, <a href="blog-single-3column.html">Technologies</a>, <a href="blog-single-3column.html">People</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="blog-single-3column.html">14</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="blog-single-3column.html">320</a>
							</li>
						</ul>
						<p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that's filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied  newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.</p>
						<a href="blog-single-3column.html" class="more">[ CONTINUE READING ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-picture-o"></i></span>
							<time datetime="2015-02-18">
								<span class="add">18</span>jan
							</time>
						</div>
					</div>
				</article>
				<!-- blog-post-v1 -->
				<article class="blog-post-v1">
					<div class="img-box video-area">
						<iframe src="https://player.vimeo.com/video/78907778" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div class="blog-txt">
						<h2><a href="blog-single-video-vimeo.html">Video post</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								By <a href="blog-single-video-vimeo.html">Admin name</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="blog-single-video-vimeo.html">Music</a>, <a href="blog-single-video-vimeo.html">Technologies</a>, <a href="blog-single-video-vimeo.html">People</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="blog-single-video-vimeo.html">14</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="blog-single-video-vimeo.html">320</a>
							</li>
						</ul>
						<p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that's filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied  newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.</p>
						<a href="blog-single-video-vimeo.html" class="more">[ CONTINUE READING ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-video-camera"></i></span>
							<time datetime="2015-02-18">
								<span class="add">18</span>jan
							</time>
						</div>
					</div>
				</article>
				<!-- blog-post-v1 -->
				<article class="blog-post-v1">
					<div class="img-box video-area">
						<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/207659137&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
					</div>
					<div class="blog-txt">
						<h2><a href="blog-single-soundcloud.html">soundcloud post</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								By <a href="blog-single-soundcloud.html">Admin name</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="blog-single-soundcloud.html">Music</a>, <a href="blog-single-soundcloud.html">Technologies</a>, <a href="blog-single-soundcloud.html">People</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="blog-single-soundcloud.html">14</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="blog-single-soundcloud.html">320</a>
							</li>
						</ul>
						<p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that's filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied  newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.</p>
						<a href="blog-single-soundcloud.html" class="more">[ CONTINUE READING ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-volume-down"></i></span>
							<time datetime="2015-02-18">
								<span class="add">18</span>jan
							</time>
						</div>
					</div>
				</article>
				<!-- blog-post-v1 -->
				<article class="blog-post-v1">
					<div class="blog-txt">
						<h2><a href="blog-single-image.html">Intelegent transitions in ux design</a></h2>
						<ul class="meta list-inline">
							<li>
								<i class="fa fa-user"></i>
								By <a href="blog-single-image.html">Admin name</a>
							</li>
							<li>
								<i class="fa fa-tags"></i>
								<a href="blog-single-image.html">Music</a>, <a href="blog-single-image.html">Technologies</a>, <a href="blog-single-image.html">People</a> 
							</li>
							<li>
								<i class="fa fa-heart"></i>
								<a href="blog-single-image.html">14</a>
							</li>
							<li>
								<i class="fa fa-comments"></i>
								<a href="blog-single-image.html">320</a>
							</li>
						</ul>
						<p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that's filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied  newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments.</p>
						<a href="blog-single-image.html" class="more">[ CONTINUE READING ]</a>
						<div class="box-holder">
							<span class="icon"><i class="fa fa-pencil"></i></span>
							<time datetime="2015-02-18">
								<span class="add">18</span>jan
							</time>
						</div>
					</div>
				</article>
				<!-- blog-footer -->
				<nav class="blog-footer">
					<div class="btn-box">
						<a href="blog-single-image.html" class="btn">PREVIOUS</a>
						<a href="blog-single-image.html" class="btn">NEXT</a>
					</div>
					<ul class="b-pagination list-unstyled">
						<li><a href="blog-single-image.html">1</a></li>
						<li class="active"><a href="blog-single-image.html">2</a></li>
						<li><a href="blog-single-image.html">3</a></li>
						<li><a href="blog-single-image.html">4</a></li>
					</ul>
				</nav>
			</div>
			<aside class="col-xs-12 col-sm-4 col-md-3 col-sm-pull-8 col-md-pull-9">
				<!-- widget -->
				<section class="widget cate-widget">
					<h2>Pages</h2>
					<ul class="list-unstyled">
						<li><a href="#"><i class="fa fa-caret-right"></i> Branding (16)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Typography (4)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> UI Design (5)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Art Director (254)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Magazine (25)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Creative (23)</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i> Winter(2)</a></li>
					</ul>
				</section>
				<!-- widget -->
				<section class="widget toppost-widget">
					<h2>Top Post</h2>
					<ul class="list-inline tabset">
						<li class="active"><a href="#tab1">POPULAR</a></li>
						<li><a href="#tab2">COMMENTS</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab1">
							<article class="box">
								<div class="img-box">
									<img src="http://placehold.it/64x64" alt="image description">
								</div>
								<div class="holder">
									<time datetime="2015-01-01">13 MAY 2015</time>
									<h3>Cicero famously orated against </h3>
								</div>
							</article>
							<article class="box">
								<div class="img-box">
									<img src="http://placehold.it/64x64" alt="image description">
								</div>
								<div class="holder">
									<time datetime="2015-01-01">13 MAY 2015</time>
									<h3>Cicero famously orated </h3>
								</div>
							</article>
							<article class="box">
								<div class="img-box">
									<img src="http://placehold.it/64x64" alt="image description">
								</div>
								<div class="holder">
									<time datetime="2015-01-01">13 MAY 2015</time>
									<h3>Cicero famously orated against </h3>
								</div>
							</article>
						</div>
						<div id="tab2">
							<article class="box">
								<time datetime="2015-01-01">13 MAY 2015</time>
								<h3>Cicero famously orated against </h3>
								<a href="#">Alfaredo hilco</a>
							</article>
							<article class="box">
								<time datetime="2015-01-01">13 MAY 2015</time>
								<h3>Cicero famously orated </h3>
								<a href="#">akram fatah</a>
							</article>
							<article class="box">
								<time datetime="2015-01-01">13 MAY 2015</time>
								<h3>Cicero famously orated against </h3>
								<a href="#">Arfa Fatah</a>
							</article>
						</div>
					</div>
				</section>
				<!-- widget -->
				<section class="widget video-widget">
					<!-- f insta photo -->
					<div class="f-insta-photo">
						<h2>Instgram Photos</h2>
						<div class="insta-box instagram-photos" data-count="8" data-user="b9e559ec7c284375bf41e9a9fb72ae01"></div>
					</div>
				</section>
			</aside>
		</div>
	</div>
</main>
</div>

@stop