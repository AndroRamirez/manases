@extends('layouts.master')
 
@section('sidebar')
     @parent
@stop

@section ('title_alt') Relaci&oacute;n de diezmos y ofrendas @stop

@section ('title') Opciones del m&oacute;dulo @stop

@section ('modulo') Administraci&oacute;n eclesi&aacute;stica @stop

@section ('descripcion') Administraci&oacute;n eclesi&aacute;stica @stop

@section('content')
   {{ Form::open(array('url' => 'iglesia/ajax', 'id' => 'iglesiaForm', 'autocomplete' => 'off')) }}
        <div class="form-group">
           {{ Form::label('cedula', 'C&eacute;dula') }}
           {{ Form::text('cedula', null, array('placeholder' => 'Introduce la c&eacute;dula', 'class' => 'form-control')) }}        
         </div>
         <div id="listaPersona">

         </div>
   
        <table id="listadoOfrendas" class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Diezmo</th>
                    <th>Misiones</th>
                    <th>Protemplo</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
         <ta>
   {{ Form::close() }}
   
   <style> 
       #listaPersona{
           cursor:pointer;
           z-index: 99999;
       }
   </style>
   
    <script type="text/javascript">
          $(document).ready(function () {
                var ajax = null;
                $('#cedula').keyup(function() {
                   var ced = $(this).val();
                   var form = $('#iglesiaForm');
                   var action = form.attr('action');

                   if(ajax != null) ajax.abort();

                   ajax = $.post(action, {ced : ced+""}, function(result) {
                      if (result.success) {

                        if(ced){
                            var listaHtml = "<ul class='list-group'>";
                            result.users.forEach(function(persona){
                                listaHtml += "<li class='list-group-item listas' ced='"+persona.cedula+"' nom='"+persona.name+"'>";
                                listaHtml += ""+persona.cedula.replace(ced,"<strong class='text-danger'>"+ced+"</strong>") + " - " + persona.name;
                                listaHtml += "</li>";
                            });
                            listaHtml += "</ul>";
                            $("#listaPersona").html(listaHtml);
                        }else $("#listaPersona").html("");

                      } else {

                            if(ced.length>=6){
                                var listaHtml = "<ul class='list-group'>";
                                listaHtml += "<li class='list-group-item'>";
                                listaHtml += "La cedula no existe - ¿Desea crearla?";
                                listaHtml += "</li>";
                                listaHtml += "</ul>";
                            }else var listaHtml = "";

                            $("#listaPersona").html(listaHtml);
                      }
                   });
                });

                $("#listaPersona").delegate('.listas','click',function(){
                    $("#listaPersona").html("");
                    $("#cedula").val("");
                    var cedula = $(this).attr('ced');
                    var nombre = $(this).attr('nom');
                    
                    var tr = "<tr>";
                    tr +="<td><small>"+nombre+"</small></td><td><small>"+cedula+"</small></td>";
                    tr +="<td><div class='input-group'><span class='input-group-addon'>$</span><input placeholder='Diezmo' class='form-control' name='ofrendas["+cedula+"][diezmo]' type='text'><span class='input-group-addon'>.00</span></div></td>";
                    tr +="<td><div class='input-group'><span class='input-group-addon'>$</span><input placeholder='Misiones' class='form-control' name='ofrendas["+cedula+"][misiones]' type='text'><span class='input-group-addon'>.00</span></div></td>";
                    tr +="<td><div class='input-group'><span class='input-group-addon'>$</span><input placeholder='Protemplo' class='form-control' name='ofrendas["+cedula+"][protemplo]' type='text'><span class='input-group-addon'>.00</span></div></td>";
                    tr +="<td align='center'><span class='glyphicon glyphicon-remove'></span></td>";
                    tr +="</tr>";
                    $("#listadoOfrendas").append(tr);
                });
          });
      </script>
@stop        