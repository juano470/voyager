@extends('layouts.app')

@section('title', 'Lista de Usuarios')


@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="lead">Lista de Usuarios</h1>
        @if(session('status'))
          <div class="alert alert-success">
            <ul>
              <li>{!! session('status') !!}</li>
            </ul>
          </div>
        @endif
        <hr>
        <a class="btn-lg btn-success"href="{{ url('user/create')}}"> <i class="fa fa-plus "> </i> Adicionar Usuarios</a>
        <hr>
        <strong> Hay <span class="badge">{{ $users->total() }}</span> Usuarios en total</strong>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Rol</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->role }} </td>
                <td> <img src="photos/{{ $user->image }}" alt="" style="width: 200px; height: auto"> </td>
                <td>
                  <a class="btn btn-warning btn-sm"href="{{ url('user/'.$user->id) }}"> <i class="fa fa-search "></i> </a>
                  <a class="btn btn-warning btn-sm"href="{{ url('user/'.$user->id. '/edit')}}"> <i class="fa fa-pencil "></i> </a>


                  <form action="{{ url('user/'. $user->id ) }}" method="POST" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-sm">
                      <i class="fa fa-trash "></i>
                    </button>
                  </form>


                </td>
              </tr>


            @endforeach
          </tbody>
        </table>

        {{ $users->links() }}

    </div>

  </div>

@endsection
