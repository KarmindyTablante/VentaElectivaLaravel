@extends('layouts.app')

@section('content')
<div class="container">

    <br>
    <h2>Ventas<a href="detalles/edit">
    <button style="margin-left:14px;" type="button" class="btn btn-success float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Ventas Hechas</button></a> 

    <a href="ventas/create">
    <button type="button" class="btn btn-success float-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Vender Articulo</button></a></h2>

    <br>
    <h6>

    </h6>
  <!--   <table class="table">  
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nombre</th>
          <th scope="col">Tipo De Documento</th>
          <th scope="col">Numero De Documento</th>
          <th scope="col">Dirección</th>
          <th scope="col">Telefono</th>
          <th scope="col">Correo</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach($ventas as $persona)
        <tr>
          <td>{{$persona->id}}</td>
          <td>{{$persona->nombre}}</td>
          <td>{{$persona->tipo_documento}}</td>
          <td>{{$persona->num_documento}}</td>
           <td>{{$persona->direccion}}</td>
          <td>{{$persona->telefono}}</td>
          <td>{{$persona->email}}</td>
          <td>
            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                <a title="Ver" href="{{route('personas.show', $persona->id)}}"><button type="button" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></button></a>
                <a title="Editar" href="{{route('personas.edit', $persona->id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
                @method('DELETE')
                @csrf 
                <a title="Eliminar" href="{{route('personas.destroy', $persona->id)}}"><button type="submit" onclick="return confirm('Seguro que desea borrar este cliente?'); " class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></a>
            </form>

          </td>
        </tr>
      </tbody>
      @endforeach
    </table> -->
    <div class="row">
      <div class="mx-auto">
      </div>
    </div>
    
</div>
@endsection

