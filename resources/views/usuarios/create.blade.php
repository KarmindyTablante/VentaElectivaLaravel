@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2>Registro de usuarios administradores</h2><br>
	<form action="/usuarios" method="POST" enctype="multipart/form-data">
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
							<label for="nombres">Nombres</label>
							<input type="text" class="form-control" name="name" placeholder="Ingrese nombres">
						</div>
						<div class="form-group">
							<label for="dni">Identificación</label>
							<input type="number" class="form-control" name="dni" placeholder="Ingrese identificación">
						</div>
						<div class="form-group">
							<label for="email">Email/Usuario</label>
							<input type="email" class="form-control" name="email" placeholder="Ingrese Email">
						</div>
						<div class="form-group">
					    	
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="apellidos">Aplellidos</label>
						    <input type="text" class="form-control" name="apellido" placeholder="Ingrese apellidos">
					    </div>
					    <div class="form-group">
							<label for="telefono">Celular</label>
							<input type="number" class="form-control" name="telefono" placeholder="Ingrese número de celular">
						</div>
						<div class="form-group">
					    	
					    </div>
					    <div class="form-group">
					    	<label for="password">Contraseña</label>
					    	<input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
					  </div>
		    </div>
		</div>
		<br>
  		<center><button type="submit" class="btn btn-primary">Registrar</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
@endsection
