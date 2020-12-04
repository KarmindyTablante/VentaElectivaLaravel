<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">Datos disponibles:</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-6 mx-auto float-right">
        	<h5>Datos del Comerciante:</h5>		
   			<table class="table table-borderless">
		      <thead>
		        <tr>
		          <th scope="col">Nombre completo: </th>
		          <td scope="col">{{ $arrDomi['Nombre'] }} {{ $arrDomi['Apellido'] }}</td>
		        </tr>
		        <tr>
		          <th scope="row">N° de identificación:</th>
		          <td>
		          	{{ $arrDomi['Documento'] }}
		          </td>
		        </tr>
		        <tr>
		          <th scope="row">Celular:</th>
		          <td>
		          	{{ $arrDomi['Telefono'] }}
		          </td>
		        </tr>
		        <tr>
		          <th scope="row">Correo:</th>
		          <td>
		          	{{ $arrDomi['Email'] }}
		          </td>
		        </tr>
		        <tr>
		          <th scope="row">Departamento:</th>
		          <td>
		          	{{ $arrDomi['Departamento'] }}
		          </td>
		        </tr>
		        <tr>
		          <th scope="row">Ciudad:</th>
		          <td>
		          	{{ $arrDomi['Ciudad'] }}
		          </td>
		        </tr>
		        <tr>
		          <th scope="row">Barrio:</th>
		          <td>
		          	{{ $arrDomi['Barrio'] }}
		          </td>
		        </tr>
		 	</table>
		</div>
		<div class="col-md-6 mx-auto float-left">	
			<h5>Datos del comercio:</h5>	
   			<table class="table table-borderless">
		      <thead>
		        <tr>
		          <th scope="col"><p class="imagen-top">Imagen:</p></th>
		          <td scope="col"><img width="200" height="300" src="{{$arrDomi['Foto']}}"></td>
		        </tr>
		        <tr>
		          <th scope="row">Nombre:</th>
		          <td>
		          	{{ $arrDomi['nombre'] }}
		          </td>
		        </tr>
		        <tr>
		          <th scope="row">Tipo de comercio:</th>
		          <td>
		          	{{ $arrDomi['TipoComercio'] }}
		          </td>
		        </tr>
		        <tr>
		          <th scope="row">Direccion:</th>
		          <td>
		          	{{ $arrDomi['Direccion'] }}
		          </td>
		        </tr>
		 	</table>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>