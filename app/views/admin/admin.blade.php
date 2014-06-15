@extends('layouts.master')
 
@section('sidebar')
     @parent
@stop
 
@section('content')
        <h1>Panel de administraci&oacute;n</h1>
        
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
                <a href="./admin/users"> 
                        <button type="button" class="btn btn-default" >
                            <img src="./images/admin/users.png" />
                            Usuarios
                        </button>
                </a>
            </div>
            <div class="btn-group">
                <a href="./logout"> 
                        <button type="button" class="btn btn-default" >
                            <img src="./images/admin/logout.png" />
                            Cerrar sesi&oacute;n
                        </button>
                </a>
            </div>
        </div>
@stop        