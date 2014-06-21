@extends('layouts.frontend')
 
@section('sidebar')
     @parent
     <!--<h1>Inicio de sesi&oacute;n</h1>-->
@stop
 
@section('content')

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Manas&eacute;s CMS</a>
            </div>
            <div class="navbar-collapse collapse">    
              <div class="form-group">
                {{ Form::open(array('url' => '/login','class'=>'navbar-form navbar-right','role'=>'form')) }}

                    <div class="form-group">
                        {{-- Form::label('usuario', 'Nombre de usuario') --}}
                        {{ Form::text('username', Input::old('username'), array('class' => 'form-control','placeholder'=>'Login de usuario')); }}
                    </div>
                    <div class="form-group">
                         {{-- Form::label('contraseña', 'Contraseña') --}}
                         {{ Form::password('password', array('class' => 'form-control','placeholder'=>'Contrase&ntilde;a')); }}
                    </div>
                        {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                    <div class="form-group" style='color:white'>
                        {{ Form::label('rememberme', 'Recordar contrase&ntilde;a') }}
                        {{ Form::checkbox('rememberme', true) }}
                    </div>
                    
                {{ Form::close() }}
            </div>
        </div>
    </div>
   
    {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
                
    @if(Session::has('mensaje_error'))
                        <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
                    @endif
    @stop
    
 <!--
<div class="form-group">
    <label>
        Recordar contrase&ntilde;a
        {{ Form::checkbox('rememberme', true) }}
    </label>
</div>  
        -->