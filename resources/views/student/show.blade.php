@extends('layouts.app')

@section('content')

<div class="row">
    <h3 align="center">Estudiante</h3>
  <br />
 <div class="col-md-8 col-md-offset-2">
  <table class="table table-bordered table-striped">
   <tr>
    <th>First Name</th>
    <th>Last Name</th>
   </tr>
   <tr>
    <td>{{ $student->first_name }}</td>
    <td>{{ $student->last_name }}</td>
   </tr>
  </table>
  <div align="center">
    <a href="{{ route('student.index') }}" class="btn btn-primary">Regresar</a>
  </div>
 </div>
</div>

@endsection