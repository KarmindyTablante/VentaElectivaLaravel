@extends('layouts.app')

@section('content')
<div class="container">
		<h3>Editar usuario: {{$user->name}}</h3> <br>

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
		    <form action="{{ route('usuarios.update', $user->id) }}" method="POST" enctype="multipart/form-data">
		      @method('PATCH')
		      @csrf 
		      <div class="row">
			    <div class="col">
			      <div class="form-group">
								<label for="nombres">Nombres</label>
								<input type="text" class="form-control" name="name" placeholder="Ingrese nombres" value="{{$user->name}}">
							</div>
							<div class="form-group">
								<label for="dni">Identificación</label>
								<input type="number" class="form-control" name="dni" placeholder="Ingrese identificación" value="{{$user->dni}}">
							</div>
							<div class="form-group">
								<label for="email">Email/Usuario</label>
								<input type="email" class="form-control" name="email" placeholder="Ingrese Email" value="{{$user->email}}">
							</div>
							<div class="form-group">
						    	
						  	</div>	
						  	<div class="input-group">
		                        <div class="custom-file">
		                          <input type="file" class="custom-file-input" id="exampleInputFile" name="imagen">
		                         <label class="custom-file-label" for="exampleInputFile">Selecciona imagen</label>
		                         @if($user->imagen != '')
		                         	<img src=" {{asset('imagenes/'.$user->imagen) }}" alt="{{$user->imagen}}" height="50px" width="50px">
		                         @endif
		                        </div>
		                    </div>
			    </div>
			    <div class="col">
			      <div class="form-group">
							    <label for="apellidos">Aplellidos</label>
							    <input type="text" class="form-control" name="apellido" placeholder="Ingrese apellidos" value="{{$user->apellido}}">
						    </div>
						    <div class="form-group">
								<label for="telefono">Celular</label>
								<input type="number" class="form-control" name="telefono" placeholder="Ingrese número de celular" value="{{$user->telefono}}">
							</div>
							<div class="form-group">
						    	
							</div>
						    <div class="form-group">
						    	<label for="password">Contraseña <span class="small">(Opcional)</span></label>
						    	<input type="password" class="form-control" name="password" placeholder="Ingrese contraseña">
						  </div>
			    </div>
			</div>
<br>
		      <center>
		      	<button type="submit" class="btn btn-primary">Guardar cambios</button>
		      </center>
		  	  
			
			</form>
		</div>

@endsection
