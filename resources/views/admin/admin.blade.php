@extends('layouts.private')
@section('content')

<div class="padding-top-100">

	<header class="page-banner small grey">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="holder">
						<h1 class="heading text-uppercase">Panel de Administrador</h1>
					</div>
					<ul class="breadcrumbs list-inline">
						<li><a href="/">HOME</a></li>
						<li class="active"><a href="#">Panel de Administrador</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	@if (Session::has('status'))
		<div class='bg-success' style="padding: 20px;">
		    {{Session::get('status')}}
		</div>
		<hr />
	@endif

	@if (Session::has('error'))
		<div class="bg-danger" style="padding: 20px;">
	  		{{Session::get('error')}}
	 	</div>
	 	<hr />
	@endif

	<div class="container">
	<ul class="nav nav-tabs responsive" id="myTab">
	  	<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
	  	<li><a data-toggle="tab" href="#profile">Profile</a></li>
	  	<li><a data-toggle="tab" href="#messages">Messages</a></li>
	  	<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1<span class="caret"></span></a>
		    <ul class="dropdown-menu">
		    	<li><a data-toggle="tab" href="#sub1">Submenu 1-1</a></li>
		      	<li><a data-toggle="tab" href="#sub2">Submenu 1-2</a></li>
		      	<li><a data-toggle="tab" href="#sub3">Submenu 1-3</a></li> 
		    </ul>
		</li>
	</ul>

	<div class="tab-content responsive">
	  	<div class="tab-pane active" id="home">



	  		@if (Auth::check())
					<form method="post" action="{{url('user/createcomment')}}">
						{{csrf_field()}}
						<div class="form-group">
							<div class="row">
								<div class="col-md-1">
									<img src="{{url(Auth::user()->profile)}}" class='img-responsive' style='max-width: 60px' />
									<strong><a href="{{url('user/'.Auth::user()->id)}}">{{Auth::user()->name}}</a></strong>
								</div>
								<div class="col-md-6">
									<textarea name="comment" class="form-control"></textarea>
									
									<input name="id_section" type="hidden" value="{{Request::path()}}">

									<button type="submit" class="btn btn-resume">Publicar</button>
								</div>
							</div>
						</div>
					</form>
					<hr />
				        <?php 
				        $comments = App\Comments::select()->where('id_section', '=', Request::path())->orderBy('id', 'desc')->get();
				        $modal = 0;

				        foreach($comments as $comment):
				            $user = App\User::select()->where('id', '=', $comment->id_user)->first();
				        ?>
				        <div class="row">
				            <div class="col-md-1">
				                <img src='{{url($user->profile)}}' class='img-responsive' style='max-width: 60px' />
				                <strong><a href="{{url('user/'.$user->id)}}">{{$user->name}}</a></strong>        
				            </div>
				            <div class='col-md-6'>
				               {{$comment->comment}} 
				               <br />

				               <i>Fecha: {{$comment->date}} · Hora: {{$comment->time}}</i>

				               @if($comment->id_user == Auth::user()->id)
				               <hr />
				                <!-- Botón que abre la ventana modal eliminar -->
				                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteComment{{$modal}}">
				                  Eliminar
				                </button>

				                <!-- Ventana modal para eliminar -->
				                <div class="modal fade" id="deleteComment{{$modal}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				                  <div class="modal-dialog" role="document">
				                    <div class="modal-content">
				                      <div class="modal-header">
				                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				                        <h4 class="modal-title" id="myModalLabel">¿Realmente quieres eliminar este comentario?</h4>
				                      </div>
				                      <div class="modal-body">
				                        <form method="post" action="{{url('user/deletecomment')}}">
				                            {{csrf_field()}}
				                            <input type="hidden" name="id_comment" value="{{$comment->id}}" />
				                            <button type="submit" class="btn btn-danger">Eliminar</button>
				                        </form>
				                      </div>
				                      <div class="modal-footer">
				                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				                      </div>
				                    </div>
				                  </div>
				                </div>

				                <!-- Botón para abrir la ventana modal de editar -->
				                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editComment{{$modal}}">
				                  Editar
				                </button>

				                <!-- Ventana modal editar -->
				                <div class="modal fade" id="editComment{{$modal}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				                  <div class="modal-dialog" role="document">
				                    <div class="modal-content">
				                      <div class="modal-header">
				                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				                        <h4 class="modal-title" id="myModalLabel">Editar comentario</h4>
				                      </div>
				                      <div class="modal-body">
				                        <form method="post" action="{{url('user/editcomment')}}">
				                            {{csrf_field()}}
				                            <div class="form-group">
				                            <textarea name="comment" rows="10" class="form-control">{{$comment->comment}}</textarea>
				                            </div>
				                            <input type="hidden" name="id_comment" value="{{$comment->id}}" />
				                            <button type="submit" class="btn btn-primary">Editar</button>
				                        </form>
				                      </div>
				                      <div class="modal-footer">
				                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				                      </div>
				                    </div>
				                  </div>
				                </div>
				                <?php $modal++ ?>
				               @endif
				            </div>
				        </div>
				        <hr />
				        <?php endforeach ?>
				@else
					<hr />
					<p class="bg-info" style="padding: 20px;">Para poder publicar comentarios tienes que <a href="{{url('auth/login')}}">iniciar sesión</a></div>
					<hr />
				@endif
				<!--
			</div>
			-->
			<!--
			<aside class="col-xs-12 col-sm-4 col-md-3 col-sm-pull-8 col-md-pull-9">
				<section class="widget cate-widget">
					<img src='{{url(Auth::user()->profile)}}' class='img-responsive' style='max-width: 150px' />
				</section>
				<!-- widget -->

				<section class="widget cate-widget">
					<h2>Opciones</h2>
					<ul class="list-unstyled">
						<li><a href="{{url('profile')}}"><i class="fa fa-caret-right"></i>Cambiar mi imagen de perfil</a></li>
    					<li><a href="{{url('password')}}"><i class="fa fa-caret-right"></i>Cambiar mi password</a></li>
    					<li><a href="{{url('admin/createadmin')}}"><i class="fa fa-caret-right"></i>Crear nuevo editor</a></li>
    					<li><a href="{{url('admin/createmonitor')}}"><i class="fa fa-caret-right"></i>Crear nuevo monitor</a></li>
    					<li><a href="{{url('admin/createactivitytype')}}"><i class="fa fa-caret-right"></i>Crear nuevo tipo de actividad</a></li>
    					<li><a href="{{url('admin/createactivity')}}"><i class="fa fa-caret-right"></i>Crear nueva actividad</a></li>
					</ul>
				</section>
				<!-- widget -->
<!--
				<section class="widget toppost-widget">
					<h2>Top Post</h2>
					<ul class="list-inline tabset">
						<li class="active"><a href="#tab1">POPULAR</a></li>
						<li><a href="#tab2">COMMENTS</a></li>
					</ul>
					<!-- tab-content -->
					<!--
					<div class="tab-content">
						<!-- tab1 -->
						<!--
						<div id="tab1">
							<!-- box -->
							<!--
							<article class="box">
								<div class="img-box">
									<img src="http://placehold.it/64x64" alt="image description">
								</div>
								<div class="holder">
									<time datetime="2015-01-01">13 MAY 2015</time>
									<h3>Cicero famously orated against </h3>
								</div>
							</article>
							<!-- box -->
							<!--
							<article class="box">
								<div class="img-box">
									<img src="http://placehold.it/64x64" alt="image description">
								</div>
								<div class="holder">
									<time datetime="2015-01-01">13 MAY 2015</time>
									<h3>Cicero famously orated </h3>
								</div>
							</article>
							<!-- box -->
							<!--
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
						<!-- tab2 -->
						<!--
						<div id="tab2">
							<!-- box -->
							<!--
							<article class="box">
								<time datetime="2015-01-01">13 MAY 2015</time>
								<h3>Cicero famously orated against </h3>
								<a href="#">Alfaredo hilco</a>
							</article>
							<!-- box -->
							<!--
							<article class="box">
								<time datetime="2015-01-01">13 MAY 2015</time>
								<h3>Cicero famously orated </h3>
								<a href="#">akram fatah</a>
							</article>
							<!-- box -->
							<!--
							<article class="box">
								<time datetime="2015-01-01">13 MAY 2015</time>
								<h3>Cicero famously orated against </h3>
								<a href="#">Arfa Fatah</a>
							</article>
						</div>
					</div>
				</section>
				<!-- widget -->
				<!--
				<section class="widget video-widget">
					<h2>Video Channel</h2>
					<div class="video-area">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/1sfuxvwHBnY" frameborder="0" allowfullscreen></iframe>
					</div>
				</section>
			</aside>
			-->
		
	  </div>
	  <div class="tab-pane" id="profile">...chacho...</div>
	  <div class="tab-pane" id="messages">...venga...</div>
	  <div class="tab-pane" id="sub1">...venga1...</div>
	  <div class="tab-pane" id="sub2">...venga2...</div>
	  <div class="tab-pane" id="sub3">...venga3...</div>
	</div>
	<!--
	<script type="text/javascript">
	  (function($) {
	      fakewaffle.responsiveTabs(['xs', 'sm']);
	  })(jQuery);
	</script>
	-->


	<!--<div class="container padding-bottom-100 padding-top-100">
	   <div class="row">
	   -->
			<!--<div class="col-xs-12 col-sm-8 col-md-9 col-sm-push-4 col-md-push-3">-->

	
			

			



					<!--
		</div>
	</div>
	-->
	</div>

</div>

@stop




