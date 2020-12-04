@extends('layouts.app')

@section('content')

	
<div class="container">
	<h2>Editar Articulo: {{$articulo->nombre}}</h2><br>
	<form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	  @csrf
	 	   @method('PATCH')

				<div class="row">
		    <div class="col">
		      <div class="form-group">
							<label for="id_categoria">Categoria</label>
					
                               <select class="form-control" name="id_categoria">
						    		<option selected disabled>Seleccione</option>
						    				     <?php 

											//------------------------------------
											//conexion con la base de datos
											$conexion = new mysqli("localhost","root","","tuscomprashoy");
											mysqli_set_charset($conexion, 'utf8');
											// -----------------------------------
								            $sql="SELECT * FROM categorias73s";
								             $resultado=mysqli_query($conexion, $sql);
								             while ($row=mysqli_fetch_assoc($resultado)) {
								            
      							?>
						    		<option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
					    			  <?php
					    			 }
					    		 ?>					
					    		 </select>	
					    			
								
					    </div>
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre Del Articulo" value="{{$articulo->nombre}}">
						</div>
						<div class="form-group">
							<label for="codigo">Codigo</label>
							<input type="text" class="form-control" name="codigo" placeholder="Ingrese Codigo Del Articulo" value="{{$articulo->codigo}}">
						</div>
						<div class="form-group">
					    	<label for="precio_venta">Precio De Venta</label>
					    	<input type="number" class="form-control" name="precio_venta" placeholder="Ingrese El Precio De Venta Del Articulo" value="{{$articulo->precio_venta}}">
					  	</div>	
					  	
		    </div>
		    <div class="col">
		      <div class="form-group">
						    <label for="stock">Stock</label>
						    <input type="number" class="form-control" name="stock" placeholder="Ingrese Stock Del Articulo" value="{{$articulo->stock}}">
					    </div>
					    <div class="form-group">
							<label for="descripcion">Descripción</label>
							<input type="text" class="form-control" name="descripcion" placeholder="Ingrese Descripción Del Articulo" value="{{$articulo->descripcion}}">
						</div>
						<div class="form-group">
					    	<label for="condicion">Condición</label>
					    	<input type="text" class="form-control" name="condicion" placeholder="Ingrese Condición Del Articulo" value="{{$articulo->condicion}}">

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
