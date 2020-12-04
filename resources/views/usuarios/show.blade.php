@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
	 	<div class="container">
	 	 <h1 class="display-4">{{$user->name}}</h1><br>
		  <div class="row">
		    <div class="col"><p class="lead">Nombre: {{$user->name}}</p></div>
		    <div class="col"></div>
		    <div class="w-100"> 
		    </div>
		    <div class="col"><p class="lead">Email: {{$user->email}}</p></div>
		    <div class="col">
		           
		    </div>
		  </div>
		  <div class="row">
		    <div class="col"><p class="lead">Apellido: {{$user->apellido}}</p>

		    </div>
		    <div class="col"> 
		    	@if($user->imagen != '')
		                         	<img src=" {{asset('imagenes/'.$user->imagen) }}" alt="{{$user->imagen}}" height="50px" width="50px">
		        @endif</div>
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



		    	