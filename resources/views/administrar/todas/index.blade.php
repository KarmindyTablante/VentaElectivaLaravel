@extends('layouts.app')

@section('content')
<div class="container">
	<dicv class="row">
		<div class="col-md-6 mx-auto">		
		    <h2>Bienvenido</h2> <br>    <img class="zona-administrativa" src="{{asset('dist/img/TusComprasHoyLogo.png')}}" alt="TusComprasHoy Logo">
		    <h4>Zona Administrativa</h4>
		    <br>
		    <table class="table">
		      <thead>
		      	<tr>
		      	  <td colspan="2"></td>
		      	  <th><center>Usuarios en línea</center></th>
		      	</tr>
		        <tr>
		          <th scope="col">Área Comercianetes</th>
		          <td scope="col">
		          	<a href="{{url('administrar/comerciantes')}}" class="btn btn-info" role="button">Ingresar</a>
		          </td>
		          <td>
		          	<center><span class="badge badge-success en-linea">(Número)</span></center>
		          </td>
		        </tr>
		        <tr>
		          <th scope="row">Área Domiciliarios</th>
		          <td>
		          	<a href="{{url('administrar/domiciliarios')}}" class="btn btn-info" role="button">Ingresar</a>
		          </td>
		          <td>
		          	<?php if ($numero==0) { ?>
		          		<center><span class="badge badge-warning en-linea">{{$numero}}</span></center>
		          	<?php	
		          	}else{ ?>
		          	<center><span class="badge badge-success en-linea">{{$numero}}</span></center>
		          	<?php } ?>
		          </td>
		        </tr>
		        <tr>
		          <th scope="row">Área Clientes</th>
		          <td><a href="{{url('administrar/clientes')}}" class="btn btn-info" role="button">Ingresar</a></td>
		          <td>
		          	<center><span class="badge badge-success en-linea">(Número)</span></center>
		          </td>
		        </tr>
		    </table>
		    <br>

		    <!-- Este botón es solo para el superadmin -->
		    <a class="btn btn-warning float-left" role="button" href="javascript:history.back()">Atrás</a>
		   <!--  -->
		    <a class="logout btn btn-secondary float-right" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
            </a>
	    </div> 
    </div> 
</div>
@endsection
