@extends('layouts.app')

@section('content')
<div class="container">

                
    <br>
    <h2>Listado de usuarios administradores registrados <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar usuario</button></a></h2> <br>
    <h6>
    
    </h6>
    <table class="table">  
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Imagen</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($usuarios as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          
           <td>
            <img src=" {{asset('imagenes/'.$user->imagen) }}" alt="{{$user->imagen}}" height="50px" width="50px">
          </td>
          <td>
            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                <a title="Ver" href="{{route('usuarios.show', $user->id)}}"><button type="button" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></button></a>
                <a title="Editar" href="{{route('usuarios.edit', $user->id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
                @method('DELETE')
                @csrf 
                <a title="Eliminar" href="{{route('usuarios.destroy', $user->id)}}"><button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></a>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="mx-auto">
        {{$usuarios->links()}}
      </div>
    </div>
    
</div>
@endsection

