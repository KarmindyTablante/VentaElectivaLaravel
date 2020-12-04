@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  
<div class="container"> 

     <h2>Listado de usuarios comerciantes registrados </h2> <br>

    <table class="table" id="example">
      <thead>
        <tr>
          <th scope="col">Nombre</th>    
          <th scope="col">Email</th>
          <th scope="col">Estado</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody> 
        @foreach ($arrDomi as $comerciante)
        <tr style="background: transparent !important;">
          <td style="background: transparent !important;" class="fondo" scope="row">{{ $comerciante['Nombre'] }}</td>
          <td class="fondo">{{ $comerciante['Email'] }}</td>        
           <td class="fondo">
              Estado              
            </td>
            <td class="fondo">
                <a title="Ver" href="{{route('comerciantes.show', $comerciante['key'] )}}"><button type="button" class="btn btn-secondary"><i class="far fa-eye"></i></button></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="mx-auto">

      </div>
    </div>
    
</div>

@endsection




