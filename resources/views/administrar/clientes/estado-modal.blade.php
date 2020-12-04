<!-- Modal -->
<div class="modal fade" id="staticModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cambio de estado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span>Seguro que deseas cambiar el estado del usuario <b> {{ $arrDomi['Nombre'] }} </b> ?</span>
      
        <?php 

        $estado = $arrDomi['Estado'] ? 'true' : 'false';
        ?>       
      </div>
      <div class="modal-footer">
      	<form action="{{route('domiciliarios.update', $arrDomi['key'])}}" method="POST">
		    @method('PATCH')
		    @csrf 
      		<input type="hidden" name="Estado" value="{{$estado}}">
          <input type="hidden" name="Nombre" value="{{$arrDomi['Nombre']}}">
      		<button type="submit" class="btn btn-primary">Sí, estoy seguro</button>
      	</form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>