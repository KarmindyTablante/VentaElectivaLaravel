@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
	 	<div class="container">
	 	 <h1 class="display-4">{{$categoria->id}}</h1><br>
		  <div class="row">
		    <div class="col"><p class="lead">Nombre: {{$categoria->nombre}}</p></div>
		    <div class="col"></div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"><p class="lead">Condición: {{$categoria->condicion}}</p>
                 <p class="lead">Descripción: {{$categoria->descripcion}}</p>
		    </div>
		    <div class="col">
		    	
		    </div>
		  </div>
		  <div class="row">
		    <div class="col"><p class="lead"> </p> 

		    </div>
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



		    	