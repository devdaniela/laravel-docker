@extends('adminlte::page')

@section('title', 'Laravel 8')

@section('content_header')
    <h1>LISTADO DE USUARIOS</h1>
@stop

@section('content')
    <a href="/users/create" class="btn btn-primary mb-3">CREAR USUARIO</a>

    <table id="users" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form action="{{ route ('users.destroy',$user->id)}}" method="POST">
                    <a href="/users/{{$user->id}}/edit" class="btn btn-success">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop