@extends('layouts.master')

@section ('title') Informaci&oacute;n de Usuario @stop

@section('sidebar')
    <h1>Informaci&oacute;n de Usuario </h1>
@stop

@section ('content')

<p>{{ HTML::link('admin/users', 'Regresar', array('class' => 'btn btn-primary')); }}</p>
{{ Form::model($user, array('route' => array('admin.users.destroy', $user->id), 'method' => 'DELETE'), array('role' => 'form')) }}
  {{ Form::submit('Eliminar usuario', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}

<table class="table table-hover">
    <tbody>
        <tr>
            <th>Login</th>
            <td>{{ $user->username}}</td>
        </tr>

        <tr>
            <th>E-mail</th>
            <td>{{ $user->email}}</td>
        </tr>

        <tr>
            <th>Nombre</th>
            <td>{{ $user->name}}</td>
        </tr>
    </tbody>
</table>
@stop