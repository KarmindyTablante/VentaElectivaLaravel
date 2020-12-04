@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2>Registro De Articulos</h2><br>
	<form action="/articulos" method="POST" enctype="multipart/form-data">
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
							<label for="id_categoria">Categoria</label>
                              <select class="form-control" name="id_categoria">
					    		<option selected disabled>Seleccione</option>
					    		@foreach($categorias as $categoria)
					    		<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
					    		@endforeach
					    	</select>						
					    </div>
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre Del Articulo">
						</div>
						<div class="form-group">
							<label for="codigo">Codigo</label>
							<input type="text" class="form-control" name="codigo" placeholder="Ingrese Codigo Del Articulo">
						</div>
						<div class="form-group">
					    	<label for="precio_venta">Precio De Venta</label>
					    	<input type="number" class="form-control" name="precio_venta" placeholder="Ingrese El Precio De Venta Del Articulo">
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="stock">Stock</label>
						    <input type="number" class="form-control" name="stock" placeholder="Ingrese Stock Del Articulo">
					    </div>
					    <div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" name="descripcion" placeholder="Ingrese Descripción Del Articulo">
						</div>
						<div class="form-group">
					    	<label for="condicion">Condición</label>
					    	<input type="text" class="form-control" name="condicion" placeholder="Ingrese Condición Del Articulo">

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
