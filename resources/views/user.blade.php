@extends('layouts.home')

<?php

$title = 'Centro Deportivo La Isleta FIT - Perfil Público - '.$user->name;

?>

@section('title', $title)
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

@section('content')
<div class="padding-top-100" style="position: relative;">
  <header class="page-banner padding-bottom-30"></header>
  <div class="container padding-top-100 padding-bottom-50">

    <h1>Perfil público de <a href="{{secure_url('user/'.$user->id)}}">{{$user->name}}</a></h1>
    <img src="{{secure_url($user->profile)}}" class="img-responsive" style="max-width: 150px" />
    <hr />
    @if(Session::has('status'))
      <div class="bg-info" style="padding: 20px">{{Session::get('status')}}</div>
      <hr />
    @endif
    @if(Session::has('error'))
      <div class="bg-danger" style="padding: 20px">{{Session::get('error')}}</div>
      <hr />
    @endif
    <section class="widget cate-widget">
      <h2>Opciones</h2>
      <ul class="list-unstyled">
        <li><a href="{{secure_url('seeschedule/'.$user->name)}}"><i class="fa fa-caret-right"></i>Ver su horario al completo</a></li>
      </ul>
    </section>
    <!-- Si el usuario está autenticado -->
    @if (Auth::check())
      <!-- Y este es su id de perfil posibilitar la creación de comentarios -->
      @if($user->id == Auth::user()->id)
        <form method="post" action="{{secure_url('user/createcomment')}}">
          {{csrf_field()}}
          <div class="form-group">
            <div class="row">
              <div class="col-md-1">
                <img src="{{secure_url(Auth::user()->profile)}}" class='img-responsive' style='max-width: 60px' />
                <strong><a href="{{secure_url('user/'.Auth::user()->id)}}">{{Auth::user()->name}}</a></strong>
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
      @endif
    @endif
    <!-- Seleccionar los comentarios del usuario -->
    <?php 
      $modal = 0;
      $comments = App\Comments::where('id_section','=',Request::path())->orderBy('id', 'desc')->simplePaginate(5);
      foreach($comments as $comment):
    ?>
    <div class="row">
      <div class="col-md-1">
          <img src='{{secure_url($user->profile)}}' class='img-responsive' style='max-width: 60px' />
          <strong><a href="{{secure_url('user/'.$user->id)}}">{{$user->name}}</a></strong>
      </div>
      <div class='col-md-6'>
        {{$comment->comment}} 
        <br />
        <i>Fecha: {{$comment->date}} · Hora: {{$comment->time}}</i>
  
        <!-- Si el usuario está autenticado, es decir, la propiedad id existe -->
        @if(isset(Auth::user()->id))
        <!-- Si el usuario está autenticado agregar las opciones editar y eliminar cuando visite en su perfil -->
          @if($comment->id_user == Auth::user()->id)
            <hr />
            <!-- Botón que abre la ventana modal eliminar -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteComment{{$modal}}">Eliminar</button>
            <!-- Ventana modal para eliminar -->
            <div class="modal fade" id="deleteComment{{$modal}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">¿Realmente quieres eliminar este comentario?</h4>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{secure_url('user/deletecomment')}}">
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editComment{{$modal}}">Editar</button>
            <!-- Ventana modal editar -->
            <div class="modal fade" id="editComment{{$modal}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Editar comentario</h4>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{secure_url('user/editcomment')}}">
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
        @endif
      </div>
    </div>
    <hr />
    <?php endforeach ?>
  </div>
</div>

@stop
