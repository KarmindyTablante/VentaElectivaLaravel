@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2>Editar La Categoria: {{$categoria->nombre}}</h2><br>
	<form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	  @csrf
	 	   @method('PATCH')

		<div class="row">
		    <div class="col">
		      <div class="form-group">
							<label for="nombres">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre De La Categoria" value="{{$categoria->nombre}}">
						</div>
						<div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" name="descripcion" placeholder="Ingrese Descripción De La Categoria" value="{{$categoria->descripcion}}">
						</div>
						<div class="form-group">
							<label for="condicion">Condición</label>
							<input type="text" class="form-control" name="condicion" placeholder="Ingrese Condición De La Categoria" value="{{$categoria->condicion}}">
						</div>
						<!-- <div class="form-group">
					    	<label for="password">Contraseña</label>
					    	<input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
					  	</div>	 -->
					  	
		    </div>
		 
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Editar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
@endsection
