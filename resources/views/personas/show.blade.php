@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
	 	<div class="container">
	 	 <h1 class="display-4">{{$persona->id}}</h1><br>
		  <div class="row">
		    <div class="col"><p class="lead">Nombre: {{$persona->nombre}}</p><p class="lead">Tipo De Documento: {{$persona->tipo_documento}}</p><p class="lead">Numero De Documento: {{$persona->num_documento}}</p></div>
		    <div class="col"></div>
		    <div class="col"></div>
		    <div class="col"></div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"><p class="lead">Dirección: {{$persona->direccion}}</p>
           <p class="lead">Telefono: {{$persona->telefono}}</p><p class="lead">Correo: {{$persona->email}}</p>
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



		    	