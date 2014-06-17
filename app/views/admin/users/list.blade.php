@extends('layouts.master')

@section ('title') Lista de Usuarios @stop

@section('sidebar')
    <h1>Lista de usuarios</h1>
@stop
 
@section('content')
   <p>
      <a href="../admin" class="btn btn-primary">Regresar</a> 
      <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear un nuevo usuario</a>
   </p>
  <table class="table table-striped">
    <tr>
        <th>Login</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ HTML::link('admin/users/'.$user->id, $user->username); }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
            <a href="#" data-id="{{ $user->id }}" class="btn btn-danger btn-delete">
              Eliminar
            </a>
        </td>
    </tr>
    @endforeach
  </table>
  {{ $users->links() }}
  
  {{ Form::open(array('route' => array('admin.users.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
  {{ Form::close() }}
  <script type="text/javascript">
      $(document).ready(function () {
        if ($('.btn-delete').length) {
            $('.btn-delete').click(function() {
               var id = $(this).data('id');
               var form = $('#form-delete');
               var action = form.attr('action').replace('USER_ID', id);
               var row =  $(this).parents('tr');

               row.fadeOut(1000);

               $.post(action, form.serialize(), function(result) {
                  if (result.success) {
                     setTimeout (function () {
                        row.delay(1000).remove();
                        alert(result.msg);
                     }, 1000);                
                  } else {
                     alert ('El registro ' + result.id + ' no pudo ser eliminado');
                     row.show();
                  }
               }, 'json');
            });
         }

      });
  </script>
@stop        