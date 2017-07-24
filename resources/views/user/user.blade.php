@extends('layouts.home')

@section('title', 'Centro Deportivo La Isleta FIT - Zona privada - Usuario')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

@section('content')
 <div class="container padding-top-100 padding-bottom-50">

<h1>Bienvenid@ {{Auth::user()->name}} a su Panel de Control</h1>
<hr />
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

<img src='{{url(Auth::user()->profile)}}' class='img-responsive' style='max-width: 150px' />

<h3>Opciones:</h3>
<ul>
    <li><a href="{{url('user/profile')}}">Cambiar mi imagen de perfil</a></li>
    <li><a href="{{url('user/password')}}">Cambiar mi password</a></li>
</ul>

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

					<button type="submit" class="btn btn-primary">Publicar</button>
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
                <strong><a href="{{url('user/'.Auth::user()->id)}}">{{$user->name}}</a></strong>        
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
	<p class="bg-info" style="padding: 20px;">Para poder publicar comentarios tienes que <a href="{{url('/login')}}">iniciar sesión</a></div>
	<hr />
@endif
</div>

@stop


