@extends('adminlte::page')

@section('title', 'Laravel')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
   <form action="/users/{{$user->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="email" name="email" type="email" class="form-control" value="{{$user->email}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input id="password" name="password" type="password" class="form-control" value="{{$user->password}}">
  </div>
  <a href="/users" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop