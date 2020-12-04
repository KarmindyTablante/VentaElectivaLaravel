@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2>Realizar Nueva Venta</h2><br>
	<form action="{{url('detalles')}}" method="GET" enctype="multipart/form-data">
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
							<label for="nombre">Cliente</label>
	  							<select class="form-control" name="id_persona" required="required">
						    		<option selected disabled>Seleccione</option>
						    		@foreach($personas as $persona)
						    		<option value="{{$persona->id}}">{{$persona->Nombre}}</option>
						    		@endforeach
						    	</select>						
					    </div>
						<div class="form-group">
						
						    </div>
						<div class="form-group">
							
						</div>
						<div class="form-group">
					    	
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="telefono">Categoria</label>
								<select class="form-control" name="id_categoria" required="required">
						    		<option selected disabled>Seleccione</option>
						    		@foreach($categorias as $categoria)
						    		<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
						    		@endforeach
						    	</select>
						    </div>
					    <div class="form-group">
							
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
  		<center><button type="submit" class="btn btn-primary">Siguiente</button>
  		<button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> <br>
</div>
@endsection
