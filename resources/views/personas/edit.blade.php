@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2>Editar Cliente: {{$persona->nombre}}</h2><br>
	<form action="{{ route('personas.destroy', $persona->id) }}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	  @csrf
	 	   @method('PATCH')

				
		<div class="row">
		    <div class="col">
		      <div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="Nombre" placeholder="Ingrese Nombre Del Cliente" value="{{$persona->Nombre}}">
						</div>
						<div class="form-group">
							<label for="tipo_documento">Tipo De Documento</label>
							<input type="text" class="form-control" name="tipo_documento" placeholder="Ingrese Tipo De Documento Del Cliente" value="{{$persona->tipo_documento}}">
						</div>
						<div class="form-group">
							<label for="num_documento">Numero De Documento</label>
							<input type="text" class="form-control" name="num_documento" placeholder="Ingrese Numero De Documento Del Cliente" value="{{$persona->num_documento}}">
						</div>
						<div class="form-group">
					    	 <label for="direccion">Dirección</label>
						    <input type="text" class="form-control" name="direccion" placeholder="Ingrese Dirección Del Cliente" value="{{$persona->direccion}}">
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="telefono">Telefono</label>
							<input type="text" class="form-control" name="telefono" placeholder="Ingrese Telefono Del Cliente" value="{{$persona->telefono}}">
					    </div>
					    <div class="form-group">
							<label for="email">Correo</label>
					    	<input type="text" class="form-control" name="email" placeholder="Ingrese Correo Del Cliente" value="{{$persona->email}}">
						</div>
						<div class="form-group">
					    	<!-- <label for="correo">Correo</label>
					    	<input type="text" class="form-control" name="correo" placeholder="Ingrese Correo Del Cliente"> -->

					    </div>
					    <div class="form-group">
					    	<!-- <label for="password_confirmation">Confirmar Contraseña</label>
					    	<input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña"> -->
					  </div>
		    </div>
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Editar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
@endsection
