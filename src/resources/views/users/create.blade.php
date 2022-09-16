@extends('adminlte::page')

@section('title', 'Laravel')

@section('content_header')
    <h1>CREAR USUARIO</h1>
@stop

@section('content')
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="/users" method="POST">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input id="name" name="name" type="text" class="form-control" tabindex="1">    
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Email</label>
      <input id="email" name="email" type="email" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Password</label>
      <input id="password" name="password" type="password" class="form-control" tabindex="3">
    </div>
    <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  </form>
@stop