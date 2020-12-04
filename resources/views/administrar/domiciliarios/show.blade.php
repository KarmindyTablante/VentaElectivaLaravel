@extends('layouts.app')

@section('content')
<div class="container">
	@include('administrar.domiciliarios.modal')
	@include('administrar.domiciliarios.estado-modal')
    <div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <center><h3 >Domiciliario</h3></center>

<div class="col-md-9 mx-auto">
	<table class="table ">  
		<tr>
		    <th colspan="3">
		      	Email: 
		      	<span class="lead">{{ $arrDomi['Email'] }}</span>
				<button type="button" class="btn btn-secondary float-right" data-toggle="modal" data-target="#staticBackdrop">
 				   Ver
				</button>
		    </th>
		</tr>
		<tr>
			<?php 
					if (isset($_GET["cambio_estado"])) { 
			?>
				<div class="alert alert-primary" role="alert">
				 	El cambio de estado del usuario se ha realizado con éxito!
				</div> 
			<?php
					
				}

			?>
			<?php if ($arrDomi['Estado']==true){ ?>
		    <th scope="col">Desactivar Usuario</th>		   

		   	<td scope="col">
		   		<input class="float-right"  type="checkbox" name="Estado" checked data-toggle="modal" data-target="#staticModal" >
		   	</td>
	 		
	 		<?php } else{ 
	 		
	 		$arrDomi['Estado']=false;	

	 		?>
	 		<th scope="col">Activar Usuario</th>
	 			<td scope="col"><input class="float-right"   type="checkbox" data-toggle="modal" data-target="#staticModal"></td>
	 		<?php } ?>
		
		</tr>

	</table>

	
	<?php 
		if (isset($_GET["correccion"])) { 
	?>
			<div class="alert alert-primary" role="alert">
	 			Corrección enviada con éxito!
			</div> 
	<?php
		
		}

	?>
	<form action="{{route('domiciliarios.store', $arrDomi['key'] )}}" method="POST">
		<input type="hidden" name="Nombre" value="{{$arrDomi['Nombre']}}">
		<input type="hidden" name="Estado" value="{{$arrDomi['Estado']}}">
		<input type="hidden" name="Estado" value="{{$arrDomi['Email']}}">
		<input type="hidden" name="key" value="{{$arrDomi['key']}}">
    	{{ csrf_field() }}
	    <table class="table table-borderless">
		        <tr>
		          <th scope="row">En corrección:</th>
		          <td>
		        </tr>
		        <tr>	       
		          <td colspan="2">
		          	<textarea class="form-control" id="correccion" rows="3" placeholder="Ingrese la corrección" name="correccion"></textarea> <br>

		          	<button type="submit" class="btn btn-primary float-right">Enviar Correcciones</button>
		          </td>
		        </tr>
	</form>

		        <tr>
		          <th scope="row">Pagos Realizados:</th>
		        </tr>
		        <tr>
		          <td colspan="2">
		          	<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Fase II"></textarea>
		          </td>		        	
		        </tr>
		        <tr>
		          <th scope="row">Observaciones:</th>
		        </tr>
		        <tr>
		        	<td colspan="2">
		          		<textarea class="form-control" id="observaciones" rows="3" placeholder="Ingrese la observación" name="observaciones"></textarea>
		          		<br>
		          		<button type="submit" class="btn btn-primary float-right">Guardar Observaciones</button>
		          </td>
		        </tr>
		</table>
		    <br>
		    <a class="btn btn-warning float-left" role="button" href="{{url('administrar/domiciliarios')}}">Atrás</a>
		    
		 
</div>
 

	  </div>
	</div>
</div>
@endsection





