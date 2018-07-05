@extends('layouts.app')

@section('content')

<div class="row">
 <div class="col-md-8 col-md-offset-2">
        @if($message = Session::get('success'))
        <div class="alert alert-success">
         <p>{{$message}}</p>
        </div>
        @endif
  <div align="left">
   <a href="{{route('student.create')}}" class="btn btn-primary">Agregar Estudiante</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th colspan="3">Acciones</th>
   </tr>
   @foreach($students as $student)
   <tr>
    <td>{{ $student->first_name }}</td>
    <td>{{ $student->last_name }}</td>
    <td><a href="{{action('StudentController@show', $student['id'])}}" class="btn btn-info">Ver</a></td>
    <td><a href="{{action('StudentController@edit', $student->id)}}" class="btn btn-warning">Editar</a></td>
    <td>
     <form method="post" class="delete_form" action="{{action('StudentController@destroy', $student['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Eliminar</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Seguro que quieres eliminarlo?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection