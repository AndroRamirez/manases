@extends('layouts.frontend')
 
@section('sidebar')
     @parent
     <h1>Inicio de sesi&oacute;n</h1>
@stop
 
@section('content')
    
    <div class="panel panel-default">
        <div class="panel-body">
            {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
            @if(Session::has('mensaje_error'))
                <div class="alert alert-danger">{{ Session::get('mensaje_error') }}</div>
            @endif
            {{ Form::open(array('url' => '/login','class'=>'form-horizontal')) }}
               
                <div class="row">
                    <div class="col-xs-4">
                        {{-- Form::label('usuario', 'Nombre de usuario') --}}
                        {{ Form::text('username', Input::old('username'), array('class' => 'form-control','placeholder'=>'Login de usuario')); }}
                    </div>
                    <div class="col-xs-3">
                        {{-- Form::label('contraseña', 'Contraseña') --}}
                        {{ Form::password('password', array('class' => 'form-control','placeholder'=>'Contrase&ntilde;a')); }}
                    </div>
                    <div class="col-xs-1"> {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}</div>
                    <div class="checkbox col-xs-2">
                        <label>
                            Recordar contrase&ntilde;a
                            {{ Form::checkbox('rememberme', true) }}
                        </label>
                    </div>
                </div>
                
            {{ Form::close() }}
        </div>
    </div>
@stop