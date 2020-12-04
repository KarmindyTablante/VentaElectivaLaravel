@extends('layouts.app')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<div class="container">

     <h2>Listado de usuarios domiciliarios registrados </h2>
 <br>
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
        @foreach ($arrDomi as $domiciliario)
        <tr style="background: transparent !important;">
          <th scope="row">{{ $domiciliario['Nombre'] }}</th>
          <td style="background: transparent !important;">{{ $domiciliario['Email'] }}</td>        
           <td class="fondo">

             <?php if ($domiciliario['Estado']){ ?>
                  
                <span class="badge badge-success">Activo</span>
                
              <?php }else{?>
                <span class="badge badge-danger">Inactivo</span>
              
              <?php 
                } 
              ?> 
              
            </td>
            <td class="fondo">
                <a title="Ver" href="{{route('domiciliarios.show', $domiciliario['key'] )}}"><button type="button" class="btn btn-secondary"><i class="far fa-eye"></i></button></a>
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
