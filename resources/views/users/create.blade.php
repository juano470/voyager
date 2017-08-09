@extends('layouts.app')

@section('title', 'Adicionar Usuario')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <br>
        <ol class="breadcrumb">
            <li><a href="{{url('/') }}">Lista de Usuarios</a></li>
            <li class="active">Adicionar Usuario</li>
        </ol>
        <h1 class="lead"> <i class="fa fa-add"></i> Adicionar Usuario </h1>
        <hr>
        <form class="" action="{{ url('user')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nombre Completo">
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="inserte Email">
            </div>

            <div class="form-group">
                <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="Ingrese su contraseña">
            </div>

            <div class="form-group">
                <select name="role" class="form-control">
                    <option value="">Seleccione Rol...</option>
                    <option value="Admin" @if (old( 'role')=='Admin' ) selected @endif>Administrador</option>
                    <option value="Cliente" @if (old( 'role')=='Cliente' ) selected @endif>Cliente</option>
                </select>
            </div>

            <div class="form-group">
                <input type="file" name="image" id="upload" accept="image/*" class="hide"></input>
                <button type="button" class="btn btn-default btn-block" id="doUpload">
                    <i class="fa fa-upload"></i> Subir Foto
                </button>
            </div>

            <div class="form-group">
                <button type="submit" name="" class="btn btn-success btn-large">
                    <i class="fa fa-save"></i> Guardar!
                </button>
            </div>

        </form>

        @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>
</div>
@endsection
