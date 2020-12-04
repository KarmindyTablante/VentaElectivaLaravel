@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2>Registro de Categorias</h2><br>
	<form action="/categorias" method="POST" enctype="multipart/form-data">
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
							<label for="nombres">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre De La Categoria">
						</div>
						<div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" name="descripcion" placeholder="Ingrese Descripción De La Categoria">
						</div>
						<div class="form-group">
							<label for="condicion">Condición</label>
							<input type="text" class="form-control" name="condicion" placeholder="Ingrese Condición De La Categoria">
						</div>
						<!-- <div class="form-group">
					    	<label for="password">Contraseña</label>
					    	<input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
					  	</div>	 -->
					  	
		    </div>
		 
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Registrar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
@endsection
