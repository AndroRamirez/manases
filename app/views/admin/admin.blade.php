@extends('layouts.master')
 
@section('sidebar')
     @parent
@stop

@section ('title') Panel de administraci&oacute;n @stop

@section ('modulo') Manases @stop

@section ('descripcion') Manases es un Sistema de gesti&oacute;n de contenidos o CMS (por sus siglas en ingl&eacute;s, Content Management System) que permite desarrollar sitios web din&aacute;micos e interactivos. Permite crear, modificar o eliminar contenido de un sitio web de manera sencilla a trav&eacute;s de un Panel de Administraci&oacute;n. Es un software de c&oacute;digo abierto, desarrollado en PHP y liberado bajo licencia GPL. Este administrador de contenidos puede utilizarse en una PC local (en Localhost), en una Intranet o a trav&eacute;s de Internet y requiere para su funcionamiento una base de datos creada con un gestor de bases de datos (MySQL es lo más habitual), así como de un servidor HTTP Apache. @stop

@section('content')
        
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <a href="./admin/users"> 
                    <span class="glyphicon glyphicon-user" style="font-size:48px;"></span>
                        <!-- <button type="button" class="btn btn-default" >
                            <img src="./images/admin/users.png" />
                            Usuarios
                        </button> -->
                        Usuarios
                </a>
            </div>
            <div class="btn-group">
                <a href="./logout"> 
                     <span class="glyphicon glyphicon-log-out" style="font-size:48px;"></span>
                        <!-- <button type="button" class="btn btn-default" >
                            <img src="./images/admin/logout.png" />
                            Cerrar sesi&oacute;n
                        </button>-->
                        Cerrar sesi&oacute;n
                </a>
            </div>
        </div>
@stop        