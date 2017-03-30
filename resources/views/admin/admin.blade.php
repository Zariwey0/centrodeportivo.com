@extends('layouts.private')

@section('title', 'Centro Deportivo Lisleta - Zona privada - Editor')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

<?php
	//use App\ActivitiesType;
	//El orden diferente nos da diferentes listas. No es lo mismo.
	$types = DB::table('activities_type')->pluck('name', 'id');
    $items = DB::table('activities_type')->orderBy('name')->pluck('id', 'name');

?>

@section('content')

<div class="padding-top-100">

	<header class="page-banner small grey">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="holder">
						<h1 class="heading text-uppercase">Panel de Editor</h1>
					</div>
					<!--
					<ul class="breadcrumbs list-inline">
						<li><a href="/">HOME</a></li>
						<li class="active"><a href="#">Panel de Editor</a></li>
					</ul>
					-->
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
		  	<li class="active"><a data-toggle="tab" href="#home">Inicio</a></li>
		  	<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuarios y Actividades<span class="caret"></span></a>
			    <ul class="dropdown-menu">
			    	<li><a data-toggle="tab" href="#crearMonitor">Crear nuevo monitor</a></li>
			      	<li><a data-toggle="tab" href="#crearEditor">Crear nuevo editor</a></li>
			      	<li><a data-toggle="tab" href="#crearActividad">Crear nueva actividad</a></li> 
			      	<li><a data-toggle="tab" href="#crearTipo">Crear nuevo tipo de actividad</a></li>
			    </ul>
			</li>
			<!--
		  	<li><a data-toggle="tab" href="#profile">Usuarios y Actividades</a></li>
		  	-->
		  	<li><a data-toggle="tab" href="#configHorario">Configurar Horario</a></li>
		  	<!--
		  	<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Horario<span class="caret"></span></a>
			    <ul class="dropdown-menu">
			    	<li><a data-toggle="tab" href="#configHorario">Configurar horario</a></li>
			      	<li><a data-toggle="tab" href="#verHorario">Ver horario</a></li>
			    </ul>
			</li>
			-->
			<!--
		  	<li><a data-toggle="tab" href="#messages">Horario</a></li>
		  	-->
		  	<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Perfil<span class="caret"></span></a>
			    <ul class="dropdown-menu">
			    	<li><a data-toggle="tab" href="#cambiarImagen">Cambiar imagen de perfil</a></li>
			      	<li><a data-toggle="tab" href="#cambiarPassword">Cambiar password</a></li>
			    </ul>
			</li>
		</ul>

		<div class="tab-content responsive">
		  	<div class="tab-pane active" id="home">

		  		<h1 class="">Bienvenido al tablón de anuncios!</h1>		  				
		  		@if (Auth::check())					
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
			        <form method="post" action="{{url('user/createcomment')}}">
						{{csrf_field()}}
						<div class="form-group">
							<h3>Únete a la conversación:</h3>
							<div class="row">
								<div class="col-md-1">
									<img src="{{url(Auth::user()->profile)}}" class='img-responsive' style='max-width: 60px' />
									<strong><a href="{{url('user/'.Auth::user()->id)}}">{{Auth::user()->name}}</a></strong>
								</div>
								<div class="col-md-6">
									<textarea name="comment" class="form-control"></textarea>
									
									<input name="id_section" type="hidden" value="{{Request::path()}}">

									<button type="submit" class="btn btn-purchase">Publicar</button>
								</div>
							</div>
						</div>
					</form>
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
    					<li><a href="{{url('schedule')}}"><i class="fa fa-caret-right"></i>Configurar horario</a></li>
    					<li><a href="{{url('seeschedule')}}"><i class="fa fa-caret-right"></i>Ver horario</a></li>
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

			<div class="tab-pane" id="crearMonitor">
				<h1>Crear un nuevo monitor</h1>

				@if (Session::has('message'))
					<div class='bg-info' style='padding: 20px'>
						{{Session::get('message')}}
					</div>
					<hr />
				@endif
				@if (Session::has('error'))
					<div class='bg-danger' style='padding: 20px'>
				  		{{Session::get('error')}}
				 	</div>
				 	<hr />
				@endif
				<form method="POST" action="{{url('admin/createmonitor')}}" enctype='multipart/form-data'>
				    {!! csrf_field() !!}

				    <div class='form-group'>
				        <label for="name">Nombre:</label>
				        <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
				        <div class="text-danger">{{$errors->first('name')}}</div>
				    </div>

				    <div class="form-group">
				        <label for="email">Email:</label>
				        <input type="email" name="email" class="form-control" value="{{ old('email') }}" />
				        <div class="text-danger">{{$errors->first('email')}}</div>
				    </div>

				    <div class="form-group">
				        <label for="password">Password:</label>
				        <input type="password" class="form-control" name="password">
				        <div class="text-danger">{{$errors->first('password')}}</div>
				    </div>

				    <div class="form-group">
				        <label for="password_confirmation">Confirmar Password:</label>
				        <input type="password" class="form-control" name="password_confirmation">
				    </div>

				    <div class="form-group">
				        <label for='image'>Imagen de perfil: </label>
				        <input type="file" name="image" class="form-control" />
				        <div class='text-danger'>{{$errors->first('image')}}</div>
				    </div>

				    <div>
				        <button type="submit" class="btn btn-primary">Crear monitor</button>
				    </div>
				</form>
			</div>
			<div class="tab-pane" id="crearEditor">
				<h1>Crear un nuevo editor</h1>

				@if (Session::has('message'))
					<div class='bg-info' style='padding: 20px'>
				  		{{Session::get('message')}}
				 	</div>
				 	<hr />
				@endif
				@if (Session::has('error'))
				 	<div class='bg-danger' style='padding: 20px'>
				  		{{Session::get('error')}}
					</div>
				 	<hr />
				@endif
				<form method="POST" action="{{url('admin/createadmin')}}">
				    {!! csrf_field() !!}

				    <div class='form-group'>
				        <label for="name">Nombre:</label>
				        <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
				        <div class="text-danger">{{$errors->first('name')}}</div>
				    </div>

				    <div class="form-group">
				        <label for="email">Email:</label>
				        <input type="email" name="email" class="form-control" value="{{ old('email') }}" />
				        <div class="text-danger">{{$errors->first('email')}}</div>
				    </div>

				    <div class="form-group">
				        <label for="password">Password:</label>
				        <input type="password" class="form-control" name="password">
				        <div class="text-danger">{{$errors->first('password')}}</div>
				    </div>

				    <div class="form-group">
				        <label for="password_confirmation">Confirmar Password:</label>
				        <input type="password" class="form-control" name="password_confirmation">
				    </div>

				    <div>
				        <button type="submit" class="btn btn-primary">Crear editor</button>
				    </div>
				</form>
			</div>
			<div class="tab-pane" id="crearActividad">
				<h1>Crear una nueva actividad</h1>

				@if (Session::has('message'))
					<div class='bg-info' style='padding: 20px'>
				  		{{Session::get('message')}}
					</div>
				 	<hr />
				@endif
				@if (Session::has('error'))
				 	<div class='bg-danger' style='padding: 20px'>
				  		{{Session::get('error')}}
					</div>
				 	<hr />
				@endif


				<form method="POST" enctype="multipart/form-data" action="{{url('admin/createactivity')}}">
				    {{ csrf_field() }}


				    <div class='form-group'>
				        <label for="name">Nombre:</label>
				        <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
				        <div class="text-danger">{{$errors->first('name')}}</div>
				    </div>
				    
				    <div class="form-group">
				        <label for="activitytype">Tipo de actividad:</label>
				        <select name="activitytype" class="form-control" value="{{ old('activitytype') }}">
				            <option value="-">Seleccione un tipo</option>
				            <?php
				                foreach ($items as $name => $id) {
				                    echo '<option value="' . $id . '">' . $name . '</option>';
				                }
				            ?>

				        </select>
				        <div class="text-danger">{{$errors->first('activitytype')}}</div>
				    </div>
				    
				    <div class="form-group">
				        <label for="description">Descripción:</label>
				        <input type="text" name="description" class="form-control" value="{{ old('description') }}">
				        <div class="text-danger">{{$errors->first('description')}}</div>
				    </div>
				    
				    <div class="form-group">
				        <label for="image">Imagen:</label>
				        <input type="file" name="image" />
				        <div class="text-danger">{{$errors->first('image')}}</div>
				    </div>

				    <div>
				        <button type="submit" class="btn btn-primary">Crear actividad</button>
				    </div>
				</form>

			</div>
			<div class="tab-pane" id="crearTipo">
				<h1>Crear un nuevo tipo de actividad</h1>

				@if (Session::has('message'))
				 	<div class='bg-info' style='padding: 20px'>
				  		{{Session::get('message')}}
				 	</div>
				 	<hr />
				@endif
				@if (Session::has('error'))
				 	<div class='bg-danger' style='padding: 20px'>
				  		{{Session::get('error')}}
				 	</div>
				 	<hr />
				@endif
				<form method="POST" action="{{url('admin/createactivitytype')}}">
				    {!! csrf_field() !!}

				    <div class='form-group'>
				        <label for="name">Nombre:</label>
				        <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
				        <div class="text-danger">{{$errors->first('name')}}</div>
				    </div>

				    <div class="form-group">
				        <label for="description">Descripción:</label>
				        <input type="text" name="description" class="form-control" value="{{ old('description') }}" />
				        <div class="text-danger">{{$errors->first('description')}}</div>
				    </div>

				    <div>
				        <button type="submit" class="btn btn-primary">Crear tipo de actividad</button>
				    </div>
				</form>
			</div>
			<div class="tab-pane" id="configHorario">
				<h1>Configurar horario</h1>
		
			    <table data-toggle="table"
			    	id="table3"
					data-toolbar="#toolbar"
					data-search="true"
					data-editable-emptytext="Vacío"
					data-show-refresh="false"
					data-show-toggle="false"
					data-show-columns="false"
					data-show-export="true"
					data-detail-view="false"
					
					data-detail-formatter="detailFormatter"
					data-id-field="id"
					data-show-footer="false">
				    <thead>
				        <tr>
				            <th>Hora</th>
				            <th>Sala</th>
				            <th>Lunes</th>
				            <th>Martes</th>
				            <th>Miércoles</th>
				            <th>Jueves</th>
				            <th>Viernes</th>
				            <th>Sábado</th>
				            <th>Domingo</th>
				        </tr>
				    </thead>

				    <tbody>
				    	<!-- 9:00 -->
				        <tr>
				            <td rowspan="4">9:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address1" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address2" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address3" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address4" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address5" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address6" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address7" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address8" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address9" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address10" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address11" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address12" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address13" data-type="address" data-pk="1"></a></td>
			            	<td><a href="#" class="schedule" id="address14" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address15" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address16" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address17" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address18" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address19" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address20" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address21" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address22" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address23" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address24" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address25" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address26" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address27" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address28" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 10:00 -->
				        <tr>
				            <td rowspan="4">10:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address29" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address30" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address31" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address32" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address33" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address34" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address35" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address36" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address37" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address38" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address39" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address40" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address41" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address42" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address43" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address44" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address45" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address46" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address47" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address48" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address49" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address50" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address51" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address52" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address53" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address54" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address55" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address56" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 11:00 -->
				        <tr>
				            <td rowspan="4">11:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address57" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address58" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address59" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address60" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address61" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address62" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address63" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address64" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address65" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address66" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address67" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address68" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address69" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address70" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address71" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address72" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address73" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address74" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address75" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address76" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address77" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address78" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address79" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address80" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address81" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address82" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address83" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address84" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 12:00 -->
				        <tr>
				            <td rowspan="4">12:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address85" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address86" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address87" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address88" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address89" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address90" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address91" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address92" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address93" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address94" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address95" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address96" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address97" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address98" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address99" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address100" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address101" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address102" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address103" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address104" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address105" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address106" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address107" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address108" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address109" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address110" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address111" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address112" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 13:00 -->
				        <tr>
				            <td rowspan="4">13:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address113" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address114" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address115" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address116" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address117" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address118" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address119" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address120" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address121" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address122" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address123" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address124" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address125" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address126" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address127" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address128" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address129" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address130" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address131" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address132" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address133" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address134" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address135" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address136" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address137" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address138" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address139" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address140" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 14:00 -->
				        <tr>
				            <td rowspan="4">14:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address141" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address142" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address143" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address144" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address145" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address146" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address147" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address148" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address149" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address150" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address151" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address152" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address153" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address154" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address155" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address156" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address157" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address158" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address159" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address160" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address161" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address162" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address163" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address164" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address165" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address166" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address167" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address168" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 15:00 -->
				        <tr>
				            <td rowspan="4">15:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address169" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address170" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address171" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address172" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address173" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address174" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address175" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address176" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address177" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address178" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address179" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address180" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address181" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address182" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address183" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address184" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address185" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address186" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address187" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address188" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address189" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address190" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address191" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address192" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address193" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address194" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address195" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address196" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 16:00 -->
				        <tr>
				            <td rowspan="4">16:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address197" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address198" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address199" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address200" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address201" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address202" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address203" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address204" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address205" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address206" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address207" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address208" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address209" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address210" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address211" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address212" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address213" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address214" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address215" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address216" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address217" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address218" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address219" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address220" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address221" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address222" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address223" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address224" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 17:00 -->
				        <tr>
				            <td rowspan="4">17:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address225" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address226" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address227" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address228" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address229" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address230" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address231" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address232" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address233" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address234" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address235" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address236" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address237" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address238" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address239" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address240" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address241" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address242" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address243" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address244" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address245" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address246" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address247" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address248" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address249" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address250" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address251" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address252" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 18:00 -->
				        <tr>
				            <td rowspan="4">18:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address253" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address254" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address255" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address256" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address257" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address258" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address259" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address260" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address261" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address262" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address263" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address264" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address265" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address266" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address267" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address268" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address269" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address270" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address271" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address272" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address273" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address274" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address275" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address276" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address277" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address278" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address279" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address280" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 19:00 -->
				        <tr>
				            <td rowspan="4">19:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address281" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address282" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address283" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address284" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address285" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address286" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address287" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address288" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address289" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address290" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address291" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address292" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address293" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address294" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address295" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address296" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address297" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address298" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address299" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address300" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address301" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address302" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address303" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address304" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address305" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address306" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address307" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address308" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 20:00 -->
				        <tr>
				            <td rowspan="4">20:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address309" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address310" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address311" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address312" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address313" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address314" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address315" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address316" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address317" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address318" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address319" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address320" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address321" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address322" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address323" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address324" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address325" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address326" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address327" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address328" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address329" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr class="lastrow">
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address330" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address331" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address332" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address333" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address334" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address335" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address336" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <!-- 21:00 -->
				        <tr>
				            <td rowspan="4">21:00</td>
				            <td><b><i>Sala 1</i></b></td>
				            <td><a href="#" class="schedule" id="address337" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address338" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address339" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address340" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address341" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address342" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address343" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 2</i></b></td>
				            <td><a href="#" class="schedule" id="address344" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address345" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address346" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address347" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address348" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address349" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address350" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Sala 3</i></b></td>
				            <td><a href="#" class="schedule" id="address351" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address352" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address353" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address354" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address355" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address356" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address357" data-type="address" data-pk="1"></a></td>
				        </tr>
				        <tr>
				        	<td><b><i>Piscina</i></b></td>
				            <td><a href="#" class="schedule" id="address358" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address359" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address360" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address361" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address362" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address363" data-type="address" data-pk="1"></a></td>
				            <td><a href="#" class="schedule" id="address364" data-type="address" data-pk="1"></a></td>
				        </tr>        
				    </tbody>
				</table>
				
			</div>
			<!--<div class="tab-pane" id="verHorario">...Ver Horario...</div>-->
			<div class="tab-pane" id="cambiarImagen">
				<h1>Cambiar imagen de perfil</h1>
				<form method='post' action='{{url("updateprofile")}}' enctype='multipart/form-data'>
					{{csrf_field()}}
					<div class='form-group'>
						<label for='image'>Imagen: </label>
						<input type="file" name="image" />
						<div class='text-danger'>{{$errors->first('image')}}</div>
					</div>
					<button type='submit' class='btn btn-primary'>Actualizar imagen de perfil</button>
				</form>
			</div>
			<div class="tab-pane" id="cambiarPassword">
				<h1>Cambiar contraseña</h1>
				@if (Session::has('message'))
				 	<div class="text-danger">
				 		{{Session::get('message')}}
				 	</div>
				@endif
				<hr />
				<form method="post" action="{{url('user/updatepassword')}}">
				 	{{csrf_field()}}
				 	<div class="form-group">
				  		<label for="mypassword">Introduce la contraseña actual:</label>
				  		<input type="password" name="mypassword" class="form-control">
				  		<div class="text-danger">{{$errors->first('mypassword')}}</div>
				 	</div>
				 	<div class="form-group">
				  		<label for="password">Introduce la nueva contraseña:</label>
					  	<input type="password" name="password" class="form-control">
					  	<div class="text-danger">{{$errors->first('password')}}</div>
				 	</div>
				 	<div class="form-group">
				  		<label for="mypassword">Confirma la nueva contraseña:</label>
				  		<input type="password" name="password_confirmation" class="form-control">
				 	</div>
				 	<button type="submit" class="btn btn-primary">Cambiar password</button>
				</form>
			</div>
		</div>
	</div>
</div>

@stop

@section('scripts')

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


$(function(){

	//PARA COMPROBAR VERSIÓN DE JQUERY.
	//BORRAR!
	if (typeof jQuery != 'undefined') {  
	    // jQuery is loaded => print the version
	    alert(jQuery.fn.jquery);
	}

	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	var unvalue;
	var unkey;

	//LOS TIPOS DE ACTIVIDADES PARA SEPARAR LAS ACTIVIDADES EN EL SELECT.
	var types = <?php echo json_encode($types); ?>;

	var index = 0;

	var text1 = '<div class="editable-address"><label><span>Actividad: </span><select name="activity" id="activity" class="input-small">';

 	var text2 = '<option value="" disabled selected>Selecciona una opción</option>';

	var text3 = '</select></label></div>';

	var text4 = '<div class="editable-address"><label><span>Monitor: </span><select name="monitor" id="monitor" class="input-mini">';

	var text5 = '<option value="" disabled selected>Selecciona una opción</option>';

	var text6 = '</select></label></div>';

	get_activities();

	function get_activities(){
	    $.ajax({
			url: './getactivities', // This is the url we gave in the route
			type: 'POST',
		    data: {_token: CSRF_TOKEN},
		    dataType: 'JSON',
		    success: function(data){ // What to do if we succeed
			    $.each(data, function(name,act) {
				  $.each(act, function(key,value){
				  	if (index != value){
				  		index = value;
						text2 += '<option class="disabled' + value + '" disabled>' + types[index] + '</option>';
				  	}
				  	text2 += '<option class="' + value + '" value="' + key + '">' + key + '</option>';
				  })
				}); 
		        get_monitors();
		    }
		});
		
	}

	function get_monitors(){
	    $.ajax({
			url: './getmonitors', // This is the url we gave in the route
			type: 'POST',
		    data: {_token: CSRF_TOKEN},
		    dataType: 'JSON',
		    success: function(data){ // What to do if we succeed
			    $.each(data, function(name,act) {
				  $.each(act, function(key,value){
				  	text5 += '<option value="' + key + '">' + key + '</option>';
				  })
				}); 
		        set_selects();
		    }
		});
		
	}

	function set_selects() {
    	$('.schedule').editable({
	        //url: '/post',
	        url: 'scripts/post.php',
	        title: 'Selecciona una actividad y un monitor:',
	        tpl: text1 + text2 + text3 + text4 + text5 + text6,
	        success: function(response, newValue) {
		        if(response.status == 'error') return response.msg; //msg will be shown in editable form
		    }      
	    });
	    set_values();
  	}		
    
  	function set_values(){
	    //set value from ajax
	    var iddd = '#address';
	    var temp_id = "";
	    var index = 0;
		$.ajax({
			url: 'bootstrap-table-examples/json/prueba.php',
			dataType: 'json',
			success: function(resultado){
				for (var i = 1; i < 365; i++){
					temp_id = iddd + i;
					$(temp_id).editable('setValue',
				resultado[i-1]['address']).children(":first-child").addClass( resultado[i-1]['id'] );
				}
			},
			error: function(error){
				console.log(error);
			}
		});
	}
});

//Aquí es donde guardamos los valores de cada casilla del horario en la base de datos.
$(document).ready(function() {
  	$("td").on("click", "button.btn.editable-submit", function(){

		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		var activity = $('#activity :selected').attr('value');
		var activity_type = $('#activity :selected').attr('class');
		var monitor = $('#monitor :selected').attr('value');
		var id = $(this).parents('td').children('a.schedule').attr('id');

		$.ajax({
			url: './updateschedule', // This is the url we gave in the route
			type: 'POST',
		    data: {_token: CSRF_TOKEN, activity: activity, activity_type: activity_type, monitor: monitor, id: id},
		    success: function(){ 
		    }
		});
	});
});

@stop
