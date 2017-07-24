@extends('layouts.home')
@section('title', 'Centro Deportivo La Isleta FIT - Blog - ¿Por qué nos gusta tanto la música?')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

<?php
	use Intervention\Image\ImageManager;
?>

@section('content')
	<div class="padding-top-100">
	<div class="padding-top-100">
		<main id="main" role="main">
            <!-- page banner -->
			<header class="page-banner small">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="holder">
								<h1 class="heading text-uppercase">¿Por qué nos gusta tanto la música?</h1>
							</div>
							<ul class="breadcrumbs list-inline">
								<li><a href="{{ secure_url('/') }}">Inicio</a></li>
								<li><a href="{{ secure_url('/blog') }}">BLOG</a></li>
								<li class="active"><a href="#">post</a></li>
							</ul>
						</div>
					</div>
			    </div>
				<div class="stretch">
					<?php
            			$ruta = "images/background-negro.png";
						$imagen = Image::make($ruta)->fit(1920,200)->encode("data-url");
					?>
					<img src="{{$imagen}}" alt="image description">
				</div>
			</header>
			<div class="container padding-top-100">
				<div class="row">
					<div class="col-xs-12">
						<!-- blog-post-v1 -->
						<article class="blog-post-v1 style-full">
							<div class="img-box">
								<?php
		                			$ruta = "images/music.png";
									$imagen = Image::make($ruta)->fit(1170,480)->encode("data-url");
								?>
								<img src="{{$imagen}}" alt="image description" class="img-responsive">
							</div>
							<div class="blog-txt">
								<h2>¿Por qué nos gusta tanto la música?</h2>
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
								<div class="box-holder">
									<span class="icon"><i class="fa fa-picture-o"></i></span>
									<time datetime="2017-06-18">
										<span class="add">18</span>jun
									</time>
								</div>
							</div>
							<div class="txt">
								<p>Muchas y muy variadas opciones y solo una muy infrecuente, rara, casi desconocida ¿sabemos de alguien a quien no le guste nada la música, ningún tipo de música? En la cultura occidental, la atracción del ser humano hacia la música ha generado innumerables opiniones y estudios. Desde los realizados por conocidos filósofos en torno al sentido y la utilidad de la música como actividad artística, hasta concienzudas investigaciones neurocientíficas sobre cómo reacciona el cerebro a la audición musical. Todas han arrojado valiosos conocimientos sobre la relación de los hombres con el sonido y nos llevan a dos conclusiones:<span class="fa fa-caret-right"> De todas las manifestaciones artísticas, la música es la que consigue que afloren nuestras emociones de una forma más inmediata e incontrolable</span><span class="fa fa-caret-right"> El gusto por la música parece ser algo innato, a diferencia del conocimiento musical que es algo que se aprende.</span></br>Dos son también las preguntas que surgen a partir de estas conclusiones y que son las que trataremos de responder en este artículo.</p>
								<h3>¿Qué hace de la música algo tan próximo a nosotros?</h3>
								<p>Los sistemas de grabación y reproducción musical han revolucionado la relación del ser humano con el sonido y, en cierta medida, han permitido que la proximidad de la música en nuestro día a día se sitúe por encima del de nuestra relación con el resto de artes escénicas y visuales. Sin embargo, la tecnología no ha promovido desde la nada este interés, sino que ha proyectado exponencialmente algo ya existente.</p>
								<p>La ventaja de la música con respecto al resto de artes es que su procesamiento se produce a través del oído y este sentido es el que mayor desarrollo intrauterino alcanza. Su formación comienza en las primeras semanas de gestación y antes de la mitad del embarazo, aproximadamente en la semana dieciséis, el feto puede percibir sonidos procedentes de la madre (los latidos del corazón, los ruidos intestinales, el flujo sanguíneo…) o del exterior (las voces, los ruidos de la calle, la música…) y reacciona a lo que escucha a través del movimiento corporal y del aumento de ritmo cardíaco. Lo curioso es que el oído comienza a funcionar unas nueve semanas antes de que la oreja esté en su sitio y completamente formada (esto ocurre en la semana veinticinco) y nos da una pista de por qué la percepción auditiva resulta más evocadora que el resto de percepciones: el enorme nivel de sofisticación del sistema auditivo nos permite atender no solo a estímulos sonoros externos sino que tenemos la capacidad de reproducir sonidos internamente con bastante más precisión que las sensaciones y experiencias que podemos recrear con el resto de sentidos.</p>
								<blockquote class="post-blockquote"><q>La ventaja de la música con respecto al resto de artes es que su procesamiento se produce a través del oído y este sentido es el que mayor desarrollo intrauterino alcanza.</q></blockquote>
								<p>Si queremos dejar de ver algo de inmediato podemos cerrar los ojos, si queremos dejar de oler basta con taparnos la nariz, si queremos dejar de tocar lo solucionamos retirando nuestra mano de allí, si queremos cambiar nuestro mal sabor de boca podemos beber o comer algo nuevo pero… ¿qué podemos hacer cuando una canción se nos ha metido en la cabeza y no hay manera de olvidarla instantáneamente? Tenemos pocas alternativas: no podemos cerrar las orejas, no solucionamos mucho tapándolas, no podemos retirarlas del objeto sonoro ¡porque está dentro de nuestra cabeza! y muchas veces poner otra canción es solo una solución momentánea… La anterior puede volver en cualquier momento. De modo que solo podemos esperar a que el sistema auditivo se centre en otra actividad o la memoria musical desista.</p>
								<p>He aquí una de las razones por las que la música, como sonido que es, nos resulta tan próxima: el sistema auditivo nos permite recibir estímulos externos a los que reaccionamos antes de nacer y reconocemos inmediatamente después del nacimiento; somos capaces de recrear internamente algo que nosotros mismos imaginamos porque podemos percibir sin necesidad de que se produzcan cambios en la presión de las moléculas de aire.</p>
								<p>Nuestro oído está diseñado en primera instancia para protegernos, advirtiéndonos, a través de los sonidos, de algo que puede resultar peligroso. No hace falta que estemos mirando un coche para sentir el claxon y subir a la acera. Además, el oído es uno de los sentidos que más rápidamente reacciona cuando estamos dormidos ya que junto con el olfato tiene un mecanismo de alerta que no se desactiva.</p>
								<p>La música es más compleja que un sonido aislado y por ello los estudios neurológicos la han utilizado para investigar en profundidad cómo funciona la percepción auditiva. Los experimentos con encefalograma han arrojado datos muy interesantes sobre cómo, al escuchar determinado tipo de música, cada individuo activa regiones concretas del cerebro relacionadas, en muchos casos, con las mismas áreas que se activan cuando sentimos miedo o un placer muy intenso. También han permitido determinar que: el oído tiene una gran capacidad de memoria que funciona como un enorme vademécum al que recurrimos para que nos ayude a explorar nuevos sonidos o nuevas músicas y que con pocos estímulos es capaz de activar más regiones cerebrales que el resto de sentidos.</p>
								<p>Esta es la segunda razón por la que la música nos resulta tan próxima: al activarse en el cerebro regiones no relacionadas propiamente con el sistema auditivo, se nos permite acumular experiencias que vivimos a partir de otros sentidos, de otros estados emocionales. Además, al necesitar tan poco para activarse, con sentir dos o tres notas de una melodía se mueven nuestros recuerdos no solo musicales sino también las vivencias relacionadas con ellos. Que la música nos mueve y nos conmueve no es nada nuevo. La diferencia entre los estudios actuales y los anteriores radica en que se da una explicación científica más profunda que pretende responder a cómo y por qué con la música se nos pone tantas veces la piel de gallina, se nos hace un nudo en la garganta, se nos llenan los ojos de lágrimas o nos entran ganas de saltar y gritar. La gran mayoría de los seres humanos no sienten tan a menudo estas sensaciones con otras manifestaciones artísticas como con la música. Por ese motivo se plantea la siguiente pregunta:</p>
								<h3>¿Se puede mejorar la apreciación y la comprensión musical sin estudiar música?</h3>
								<p>Apreciar y comprender poseen diferencias sustanciales que se pusieron de relevancia en las clases de Introducción a la música, con 183 estudiantes de Historia del Arte de la Universidad de Barcelona a lo largo de tres cursos académicos. En estas clases se explicaron los parámetros y los elementos musicales a través de metáforas, símiles y paralelismos con las artes visuales para que los estudiantes pudieran entender conceptos como, por ejemplo, sistema armónico modal, textura contrapuntística o principio rítmico aditivo. El resultado es que todos estos estudiantes fueron capaces de realizar un análisis más detallado de aquella música que escuchaban sirviéndose de un esquema dado y que llamamos ficha de características musicales. En todos los casos, aquellos que no tenían conocimientos musicales, se observó que, si sabían qué preguntas debían hacerse durante y después del proceso de escucha de una obra o fragmento, su atención era mayor; y aunque reconocieran que no les había gustado, podían llegar a apreciar y estimar el esfuerzo del compositor o del intérprete. Incluso diferenciaban y definían sin ninguna duda algunos elementos de la música como el tipo de dinámicas, el sistema armónico y la textura principal. En el caso de los estudiantes con conocimientos musicales a los que se había explicado en los mismos términos esta ficha de características musicales, se observó que su análisis era más profundo y no sólo describían el tipo de dinámicas sino que lo relacionaban con otros parámetros como por ejemplo la melodía o la estructura, definían con mayor precisión el sistema armónico y eran capaces de hablar de cómo estaba establecida la textura principal y qué cambios se producían en ella.</p>
								<p>La conclusión a la que se llegó es que si entendemos la comprensión musical como la acción de penetrar en su conocimiento para poder entender e interpretar de una forma más precisa los parámetros y elementos musicales, es indispensable tener nociones avanzadas sobre lectura, entonación y ejecución instrumental. Sin embargo, si la apreciación musical es la acción de poder evaluar con un mínimo de rigor aquello que escuchamos, no hace falta tener nociones relacionadas con la lectura y la entonación musical, pero sí unas pocas ideas claras y concisas sobre análisis auditivo. Esto mejora en mucho la apreciación y la consideración de la música, especialmente la de aquella que no está dentro de nuestro gusto ni de lo que escuchamos habitualmente.</p>
								<blockquote class="post-blockquote"><q>...y aunque reconocieran que no les había gustado, podían llegar a apreciar y estimar el esfuerzo del compositor o del intérprete.</q></blockquote>
								<p>Esto es, precisamente, lo que hace que no podamos decir que la música es un lenguaje universal –no todo el mundo comprende toda la música– aunque sí podemos confirmar que la música es como una lengua pues, igual que éstas, utiliza esquemas. Unos esquemas que se pueden aprender de forma implícita a base de escuchar y comparar o de forma explícita aprendiendo qué parámetros y elementos son los que conforman esa música. Unos esquemas al fin y al cabo que nos proporcionan muy variados niveles de conocimiento sobre algo que a todos nos gusta: La música.</p>
							</div>
						</article>
						<!-- post-footer -->
						<footer class="post-footer">
							<div class="post-tags">
								<strong class="title">Etiquetado por</strong>
								<ul class="list-unstyled">
									<li><a href="#">Música</a></li>
									<li><a href="#">Tecnología</a></li>
									<li><a href="#">Gente</a></li>
								</ul>
							</div>
							<ul class="post-social list-unstyled">
								<li><a href="#"><i class="fa fa-facebook"></i> Comparte</a></li>
								<li><a href="#"><i class="fa fa-twitter"></i> Twittea</a></li>
								<!--<li><a href="#"><i class="fa fa-pinterest"></i> PIN</a></li>-->
							</ul>
						</footer>
						<!-- post-author-box -->
						<div class="post-author-box">
							<div class="img-box">
								<?php
		                			$ruta = "profiles/5Imfer3rQLbdmBRiKscTs5LCHBfMhE-teacher1.jpg";
									$imagen = Image::make($ruta)->fit(120,120)->encode("data-url");
								?>
								<img src="{{$imagen}}" alt="image description">
							</div>
							<div class="holder">
								<strong class="title"><a href="#">- Admin</a></strong>
								<span class="aut-text"><a href="#">34 POSTS</a>  -  <a href="#">36 COMENTARIOS</a></span>
								<p>Orgulloso editor principal del Centro Deportivo La Isleta FIT. Deportista y administrativo.</p>
							</div>
						</div>
						<!-- comment-box -->
						<div class="comment-box">
							<h4>Comentarios (5)</h4>
							<ul class="list-unstyled list">
								<li>
									<div class="box">
										<div class="img-box">
											<?php
					                			$ruta = "profiles/profile.jpg";
												$imagen = Image::make($ruta)->fit(80,80)->encode("data-url");
											?>
											<img src="{{$imagen}}" alt="image description">
											<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Responder</span></a>
										</div>
										<div class="holder">
											<strong class="title">Adrián Sánchez</strong>
											<time datetime="2017-06-19">Jun 19, 2017 a las 10:50</time>
											<p>Un artículo muy interesante aunque me parece que no ahonda lo suficiente en el tema.</p>
										</div>
									</div>
									<ul class="list-unstyled list">
										<li>
											<div class="box">
												<div class="img-box">
													<?php
							                			$ruta = "profiles/profile.jpg";
														$imagen = Image::make($ruta)->fit(80,80)->encode("data-url");
													?>
													<img src="{{$imagen}}" alt="image description">
													<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Responder</span></a>
												</div>
												<div class="holder">
													<strong class="title">Elena Rodríguez</strong>
													<time datetime="2017-06-20">Jun 20, 2017 a las 14:34</time>
													<p>La verdad es que discrepo bastante. Creo que aporta suficiente información como para decir eso. Buen trabajo, admin.</p>
												</div>
											</div>
											<ul class="list-unstyled list">
												<li>
													<div class="box">
														<div class="img-box">
															<?php
									                			$ruta = "profiles/profile.jpg";
																$imagen = Image::make($ruta)->fit(80,80)->encode("data-url");
															?>
															<img src="{{$imagen}}" alt="image description">
															<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Responder</span></a>
														</div>
														<div class="holder">
															<strong class="title">Tamara Rijo</strong>
															<time datetime="2017-06-01">Jun 22, 2017 a las 20:03</time>
															<p>Tampoco es eso, mujer. Seguro que Adrián lo dice con buena intención. ¡Muy buen post!</p>
														</div>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<div class="box">
										<div class="img-box">
											<?php
					                			$ruta = "profiles/profile.jpg";
												$imagen = Image::make($ruta)->fit(80,80)->encode("data-url");
											?>
											<img src="{{$imagen}}" alt="image description">
											<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Responder</span></a>
										</div>
										<div class="holder">
											<strong class="title">Claudia Brito</strong>
											<time datetime="2017-06-20">Jun 20, 2017 a las 16:32</time>
											<p>¡Me encanta la música! No sé qué haría sin ella.</p>
										</div>
									</div>
									<ul class="list-unstyled list">
										<li>
											<div class="box">
												<div class="img-box">
													<?php
							                			$ruta = "profiles/profile.jpg";
														$imagen = Image::make($ruta)->fit(80,80)->encode("data-url");
													?>
													<img src="{{$imagen}}" alt="image description">
													<a href="#" class="reply"><i class="fa fa-reply"></i> <span class="txt-over">Responder</span></a>
												</div>
												<div class="holder">
													<strong class="title">Enrique Machín</strong>
													<time datetime="2017-06-23">Jun 23, 2017 a las 13:16</time>
													<p>Lo mismo digo. ¡La música es vida!</p>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
							<form action="#" class="comment-form">
								<fieldset>
								<h4>Deja un comentario</h4>
									<div class="form-row">
										<input type="text" class="input" placeholder="Tu nombre *">
										<input type="text" class="input" placeholder="Tus apellidos ">
										<input type="email" class="input" placeholder="Email *">
									</div>
									<textarea cols="30" rows="10" placeholder="Opinión *"></textarea>
									<div class="text-center">
										<button class="btn btn-submit" type="submit">Enviar</button>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--
			<div class="container-fluid bg-grey related-post-widget dark-bottom-border">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h5>Related News</h5>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="row">

							<article class="blog-post-v2">
								<div class="img-box">
									<a href="#"><img src="http://placehold.it/635x240" alt="image description" class="img-responsive"></a>
								</div>
								<div class="blog-txt">
									<h2><a href="#">Intelegent transitions in ux design</a></h2>
									<ul class="meta list-inline">
										<li>
											<i class="fa fa-user"></i>
											By <a href="#">Admin name</a>
										</li>
										<li>
											<i class="fa fa-tags"></i>
											<a href="#">Business</a>, <a href="#">Technologies</a>, <a href="#">Sport</a> 
										</li>
										<li>
											<i class="fa fa-heart"></i>
											<a href="#">14</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">320</a>
										</li>
									</ul>
									<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptate...</p>
									<div class="box">
										<span class="icon"><i class="fa fa-picture-o"></i></span>
										<time datetime="2017-02-18">
											<span class="add">18</span>jan
										</time>
									</div>
								</div>
							</article>

							<article class="blog-post-v2">
								<div class="img-box">

									<div class="beans-slider" data-rotate="true">
										<div class="beans-mask">
											<div class="beans-slideset">
			
												<div class="beans-slide">
													<a href="#"><img src="http://placehold.it/635x240" alt="image description" class="img-responsive"></a>
												</div>
								
												<div class="beans-slide">
													<a href="#"><img src="http://placehold.it/635x240" alt="image description" class="img-responsive"></a>
												</div>
										
												<div class="beans-slide">
													<a href="#"><img src="http://placehold.it/635x240" alt="image description" class="img-responsive"></a>
												</div>
											</div>
										</div>
										<div class="beans-pagination">
						
										</div>
									</div>
								</div>
								<div class="blog-txt">
									<h2><a href="#">Intelegent transitions in ux design</a></h2>
									<ul class="meta list-inline">
										<li>
											<i class="fa fa-user"></i>
											By <a href="#">Admin name</a>
										</li>
										<li>
											<i class="fa fa-tags"></i>
											<a href="#">Business</a>, <a href="#">Technologies</a>, <a href="#">Sport</a> 
										</li>
										<li>
											<i class="fa fa-heart"></i>
											<a href="#">14</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">320</a>
										</li>
									</ul>
									<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptate...</p>
									<div class="box">
										<span class="icon"><i class="fa fa-picture-o"></i></span>
										<time datetime="2017-02-18">
											<span class="add">18</span>jan
										</time>
									</div>
								</div>
							</article>
			
							<article class="blog-post-v2">
								<div class="img-box video-area">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/YmyGzIgD_QU" frameborder="0" allowfullscreen></iframe>
								</div>
								<div class="blog-txt">
									<h2><a href="#">Intelegent transitions in ux design</a></h2>
									<ul class="meta list-inline">
										<li>
											<i class="fa fa-user"></i>
											By <a href="#">Admin name</a>
										</li>
										<li>
											<i class="fa fa-tags"></i>
											<a href="#">Business</a>, <a href="#">Technologies</a>, <a href="#">Sport</a> 
										</li>
										<li>
											<i class="fa fa-heart"></i>
											<a href="#">14</a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">320</a>
										</li>
									</ul>
									<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptate...</p>
									<div class="box">
										<span class="icon"><i class="fa fa-video-camera"></i></span>
										<time datetime="2017-02-18">
											<span class="add">18</span>jan
										</time>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>

			-->
		</main>
	</div>
	</div>
@stop