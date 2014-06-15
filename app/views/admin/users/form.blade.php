@extends('layouts.master')

<?php

    if ($user->exists):
        $form_data = array('route' => array('admin.users.update', $user->id), 'method' => 'PATCH');
        $action    = 'Editar';
    else:
        $form_data = array('route' => 'admin.users.store', 'method' => 'POST');
        $action    = 'Crear';        
    endif;

?>

@section ('title') {{ $action }} Usuario @stop

@section ('content')

<h1>{{ $action }} Usuario</h1>

<p>
      <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Regresar</a>
</p>

@if ($action == 'Editar')  
{{ Form::model($user, array('route' => array('admin.users.destroy', $user->id), 'method' => 'DELETE', 'role' => 'form')) }}
  <div class="row">
    <div class="form-group col-md-4">
        {{ Form::submit('Eliminar usuario', array('class' => 'btn btn-danger')) }}
    </div>
  </div>
{{ Form::close() }}
@endif

@include ('admin/errors', array('errors' => $errors)) 

{{ Form::model($user, $form_data, array('role' => 'form')) }}

  <div class="row">
    <div class="form-group">
      {{ Form::label('username', 'Login') }}
      {{ Form::text('username', null, array('placeholder' => 'Login', 'class' => 'form-control')) }}        
    </div>
    <div class="form-group">
      {{ Form::label('email', 'Dirección de E-mail') }}
      {{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail', 'class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('name', 'Nombre completo') }}
      {{ Form::text('name', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
    </div>    
    <div class="form-group">
      {{ Form::label('password', 'Contraseña') }}
      {{ Form::password('password', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
      {{ Form::label('password_confirmation', 'Confirmar contraseña') }}
      {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
    </div>
  </div>
  {{ Form::button($action . ' usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
  
{{ Form::close() }}

@stop