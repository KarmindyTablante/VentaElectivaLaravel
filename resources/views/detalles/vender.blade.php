@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2>Registro De Clientes</h2><br>
	<form action="/ventas" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	  @csrf
	  	<div class="row">
	  		<div class="col-sm-6">
	  			@if($errors->any())
		  			<div class="alert alert-danger">
		  				<ul>
		  					@foreach($errors->all() as $error)
		  					<li>{{$error}}</li>
		  					@endforeach
		  				</ul> 
		  			</div>
	  			@endif
	  		</div>
	  	</div>

		<div class="row">
		    <div class="col">
		      <div class="form-group">
							<label for="cliente">Cliente</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre Del Cliente">
						</div>
						<div class="form-group">
							<label for="tipo_documento">Usuario</label>
							<input type="text" class="form-control" name="tipo_documento" placeholder="Ingrese Tipo De Documento Del Cliente">
						</div>
						<div class="form-group">
							
						</div>
						<div class="form-group">
					    	<label for="direccion">Dirección</label>
						    <input type="text" class="form-control" name="direccion" placeholder="Ingrese Dirección Del Cliente">
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="telefono">Telefono</label>
							<input type="text" class="form-control" name="telefono" placeholder="Ingrese Telefono Del Cliente">
					    </div>
					    <div class="form-group">
							<label for="num_documento">Numero De Documento</label>
							<input type="text" class="form-control" name="num_documento" placeholder="Ingrese Numero De Documento Del Cliente">
						</div>
						<div class="form-group">
						<label for="email">Correo</label>
					    	<input type="text" class="form-control" name="email" placeholder="Ingrese Correo Del Cliente">
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
  		<center><button type="submit" class="btn btn-primary">Registrar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
@endsection
