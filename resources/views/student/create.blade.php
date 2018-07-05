@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-8 col-md-offset-2">
  <br />
  <h3 aling="center">Agregar Estudiante</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('student')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="first_name" class="form-control"/>
   </div>
   <div class="form-group">
    <input type="text" name="last_name" class="form-control" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Aceptar" />
    <a href="{{ route('student.index') }}" class="btn btn-danger">Regresar</a>
   </div>
  </form>
 </div>
</div>
@endsection