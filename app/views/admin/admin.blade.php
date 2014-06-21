@extends('layouts.master')
 
@section('sidebar')
     @parent
@stop

@section ('title_alt') M&oacute;dulos del sistema @stop

@section ('title') Panel de administraci&oacute;n @stop

@section ('modulo') Manas&eacute;s @stop

@section ('descripcion') Manas&eacute;s es un Sistema de gesti&oacute;n de contenidos o CMS (por sus siglas en ingl&eacute;s, Content Management System) que permite desarrollar sitios web din&aacute;micos e interactivos. Permite crear, modificar o eliminar contenido de un sitio web de manera sencilla a trav&eacute;s de un Panel de Administraci&oacute;n. Es un software de c&oacute;digo abierto, desarrollado en PHP y liberado bajo licencia GPL. Este administrador de contenidos puede utilizarse en una PC local (en Localhost), en una Intranet o a trav&eacute;s de Internet y requiere para su funcionamiento una base de datos creada con un gestor de bases de datos (MySQL es lo más habitual), así como de un servidor HTTP Apache. @stop

@section('content')

    <div class="btn-group">
        <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="glyphicon glyphicon-user"></span> Usuarios 
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="./admin/users">Listar usuarios</a></li>
            <li class="divider"></li>
            <li><a href="./admin/users/create">Crear usuarios</a></li>
        </ul>
    </div>
    
    <div class="btn-group dropup">
        <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="glyphicon glyphicon-home"></span> Administraci&oacute;n eclesi&aacute;stica 
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="#">Reportes</a></li>
            <li class="divider"></li>
            <li><a href="./iglesia/main">Relaci&oacute;n de diezmos y ofrendas</a></li>
        </ul>
    </div>
    
    <div class="btn-group">
        <a class="btn btn-danger btn-xs" href="./logout">
            <span class="glyphicon glyphicon-log-out"></span> Cerrar sesi&oacute;n
        </a>
    </div>

@stop        