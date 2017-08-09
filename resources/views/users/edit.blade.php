@extends('layouts.app')

@section('title', 'Modificar Usuario')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <br>
        <ol class="breadcrumb">
            <li><a href="{{url('/') }}">Lista de Usuarios</a></li>
            <li class="active">Modificar Usuario</li>
        </ol>
        <h1 class="lead"> <i class="fa fa-edit"></i> Modificar Usuario </h1>
        <hr>
        <form class="" action="{{ url('user/'. $usr->id ) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="old_image" value="{{ $usr->image }}">

            <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{ $usr->name }}" placeholder="Nombre Completo">
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control" value="{{ $usr->email }}" placeholder="inserte Email">
            </div>



            <div class="form-group">
                <select name="role" class="form-control">
                    <option value="">Seleccione Rol...</option>
                    <option value="Admin" @if ( $usr->role == 'Admin' ) selected @endif>Administrador</option>
                    <option value="Cliente" @if ( $usr->role =='Cliente' ) selected @endif>Cliente</option>
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
                    <i class="fa fa-save"></i> Modificar
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
