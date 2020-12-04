@extends('layouts.app')

@section('content')
<div class="container">
	@include('administrar.comerciantes.modal')
    <div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <center><h3 >Comerciante</h3></center>

<div class="col-md-9 mx-auto">
	<table class="table table-borderless">  
		<tr>
		    <th colspan="3">
		      	Email: 
		      	<span class="lead">{{ $arrDomi['Email'] }}</span>
				<button type="button" class="btn btn-secondary float-right" data-toggle="modal" data-target="#staticBackdrop">
 				   Ver
				</button>
		    </th>
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
	<form action="{{route('comerciantes.store', $arrDomi['key'] )}}" method="POST">
		<input type="hidden" name="Nombre" value="{{$arrDomi['Nombre']}}">
		<input type="hidden" name="Apellido" value="{{$arrDomi['Apellido']}}">
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
		    <a href="{{url('administrar/comerciantes')}}" class="btn btn-warning float-left" role="button">Atrás</a>
		    
		 
</div>
 

	  </div>
	</div>
</div>
@endsection





