<button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#addRole">Crear Rol</button><br><br>

{!! Form::open(['url' => 'roles']) !!}
{{Form::token()}}
  
	<div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Nuevo Rol de usuario</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
	          <div class="form-group">
	            <label for="titulo" class="col-form-label">Nombre del rol:</label>
	            <input type="text" class="form-control" name="name" id="recipient-name">
	          </div>

	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Guardar Role</button>
	      </div>
	    </div>
	  </div>
	</div>

{!! Form::close() !!}