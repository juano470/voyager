@extends('layouts.app')

@section('title', 'Consultar Usuario')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <br>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Lista de Usuarios</a></li>
            <li class="active">Consultar Usuario</li>
        </ol>
        <h1 class="lead"> <i class="fa fa-search"></i> Consultar Usuario </h1>
        <hr>
        <table class="table">
            <tr>
                <th>ID:</th>
                <td>{{ $usr->name }}</td>
            </tr>
            <tr>
                 <th>CORREO:</th>
                <td>{{ $usr->email }}</td>
            </tr>
            <tr>
                 <th>ROL:</th>
                <td>{{ $usr->role }}</td>
            </tr>
            <tr>
                 <th>FOTO:</th>

                <td><img src="{{ asset('photos/'.$usr->image) }}" alt="" style="width: 50%; height: auto"></td>
            </tr>
            <tr>
                 <th>CREADO:</th>
                <td>{{ $usr->created_at }}</td>
            </tr>
             <tr>
                 <th>MODIFICADO:</th>
                <td>{{ $usr->updated_at }}</td>
            </tr>

        </table>


    </div>
</div>
@endsection
