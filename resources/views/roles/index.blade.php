@extends('layouts.app')

@section('content')
<div class="container">
	<dicv class="row">
		<div class="col-md-6 mx-auto">	
		    <h2 class="float-left">Roles de usuarios</h2> @include('roles.modal')	
		    <br>
		    <table class="table">
		      <thead>
		        <tr>
		          <th scope="col">N°</th>
		          <th scope="col">Nombre</th>
		        </tr>
		      </thead>
		      <tbody>
		        @foreach($roles as $role)
		        <tr>
		          <th scope="row">{{$role->id}}</th>
		          <td>{{$role->name}}</td>
		        </tr>
		        @endforeach
		      </tbody>
		    </table>
	    </div> 
    </div> 
</div>
@endsection
