@extends('layouts.app')
 @if(Session::has('alertas'))
                       {{ Session::get('alertas') }}
                    @endif
@section('content')
<div class="container">

               
    <br>
    <h2>Listado De Articulos Registrados <a href="articulos/create"><button type="button" class="btn btn-success float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Agregar Articulo</button></a></h2> <br>
    <h6>

    </h6>
    <table class="table">  
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nombre</th>
          <th scope="col">Codigo</th>
          <th scope="col">Precio De Venta</th>
          <th scope="col">Stock</th>
          <th scope="col">Condición</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
         

      @foreach($articulos as $articulo)
        <tr>
          <td>{{$articulo->id}}</td>
          <td>{{$articulo->nombre}}</td>
          <td>{{$articulo->codigo}}</td>
           <td>{{$articulo->precio_venta}}</td>
          <td>{{$articulo->stock}}</td>
          <td>{{$articulo->condicion}}</td>
          <td>
            <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST">
                <a title="Ver" href="{{route('articulos.show', $articulo->id)}}"><button type="button" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></button></a>
                <a title="Editar" href="{{route('articulos.edit', $articulo->id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
                @method('DELETE')
                @csrf 
                <a title="Eliminar" href="{{route('articulos.destroy', $articulo->id)}}"><button type="submit" onclick="return confirm('Seguro que desea borrar este articulo?'); " class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></a>
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

