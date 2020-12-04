@extends('layouts.app')

@section('content')
<div class="container">

             
    <br>
    <h2>Listado De Categorias Registradas <a href="categorias/create"><button type="button" class="btn btn-success float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Agregar Categoria</button></a></h2> <br>
    <h6>

    </h6>
    <table class="table">  
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Condicion</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach($categorias as $categoria)
        <tr>
          <td>{{$categoria->id}}</td>
          <td>{{$categoria->nombre}}</td>
          <td>{{$categoria->descripcion}}</td>
          <td>{{$categoria->condicion}}</td>
          <td>
            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                <a title="Ver" href="{{route('categorias.show', $categoria->id)}}"><button type="button" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></button></a>
                <a title="Editar" href="{{route('categorias.edit', $categoria->id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
                @method('DELETE')
                @csrf 
                <a title="Eliminar" href="{{route('categorias.destroy', $categoria->id)}}"><button type="submit" onclick="return confirm('Seguro que desea borrar esta categoria?'); " class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></a>
            </form>

          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
    <div class="row">
      <div class="mx-auto">
      </div>
    </div>
    
</div>
@endsection

