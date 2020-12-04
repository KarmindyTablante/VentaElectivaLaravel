@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
	 	<div class="container">
	 	 <h1 class="display-4">{{$articulo->id_categoria}}</h1><br>
		  <div class="row">
		    <div class="col"><p class="lead">Nombre: {{$articulo->nombre}}</p><p class="lead">Codigo: {{$articulo->codigo}}</p><p class="lead">Stock: {{$articulo->stock}}</p></div>
		    <div class="col"></div>
		    <div class="col"></div>
		    <div class="col"></div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"><p class="lead">Precio De Venta: {{$articulo->precio_venta}}</p>
           <p class="lead">Precio De Venta: {{$articulo->precio_venta}}</p><p class="lead">Condición: {{$articulo->condicion}}</p>
		    </div>
		    <div class="col">
		    	
		    </div>
		  </div>
		  <div class="row">
		    
		    <div class="col"> 

		      </div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"></div>
		    <div class="col">
		    </div>
		  </div>
		</div>
		 <center>
                 <input type="button" id="entrar" value="Volver"  class="btn btn-primary" onclick="history.back(-1)">        
</center>
	</div>
</div>


@endsection



		    	