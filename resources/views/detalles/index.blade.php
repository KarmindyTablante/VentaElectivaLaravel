@extends('layouts.app')
 @if(Session::has('alertas'))
                       {{ Session::get('alertas') }}
                    @endif
@section('content')

  
<div class="container">
  <h2>Realizar Venta</h2><br>
    <?php
              extract($_REQUEST); 
              $id_persona=$_GET['id_persona'];
               $id_categoria=$_GET['id_categoria'];
$conexion = new mysqli("localhost","root","","tuscomprashoy");
                      mysqli_set_charset($conexion, 'utf8');
 


    $sql2="SELECT * FROM categorias73s WHERE categorias73s.id='$id_categoria'";
    $resultado2=mysqli_query($conexion, $sql2);
    $row2=mysqli_fetch_assoc($resultado2);








?>
  <form action="../ventas/edit" method="GET" enctype="multipart/form-data">
  {{csrf_field()}}
    @csrf
      <div class="row">
        <div class="col-sm-6">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul> 
            </div>
          @endif
        </div>
      </div>
    

    <div class="row">
        <div class="col">
          <div class="form-group"> 
              <label for="descripcion">Categoria</label>
              <input type="text" class="form-control" name="id"  readonly="readonly"  value="<?php echo $row2['nombre']; ?>">
              </div>
            <div class="form-group">
              <label for="cantidad">Cantidad</label>
              <input type="text" class="form-control" name="cantidad" placeholder="Ingrese Cantidad Del Articulo">
            </div>
            <div class="form-group">
              <label for="impuesto">Impuesto</label>
                <input type="text" class="form-control" name="impuesto" placeholder="Ingrese Impuesto Del Articulo">
            </div>
            <div class="form-group">
                <label for="tipo_comprobante">Tipo De Comprobante</label>
                <input type="text" class="form-control" name="tipo_comprobante" placeholder="Ingrese Tipo De Comprobante ">
              </div>  
              
        </div>
        <div class="col">
          <div class="form-group">
           <label for="id_categoria">Articulo</label>   
                <select class="form-control" name="nombre">
                  <option selected disabled>Seleccione</option>
                  <?php

                  $sql="SELECT * FROM articulos73s WHERE articulos73s.id_categoria='$id_categoria'";
                  $resultado=mysqli_query($conexion, $sql);
                  while ($row=mysqli_fetch_assoc($resultado)) {
                  
                  ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                  <?php
                    }
                  ?>
                </select> 
            
              <label for="codigo">Precio</label>
              <input type="text" class="form-control"  name="precio" >
                
              </div>
              <div class="form-group">
              <label for="descuento">Descuento</label>
                <input type="text" class="form-control" name="descuento" placeholder="Ingrese Descuento Del Articulo">
              
            </div>
            <div class="form-group">
                <label for="num_comprobante">Numero De Comprobante</label>
                <input type="text" class="form-control" name="num_comprobante" placeholder="Ingrese El Numero De Comprobante">
              
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="id_persona" value="<?php echo $id_persona; ?>">
                <input type="hidden" class="form-control" name="id_categoria" value="<?php echo  $id_categoria; ?>">

            </div>
        </div>
    </div>
       
    <br>
      <center><button type="submit" class="btn btn-primary">Siguiente</button>
      <button type="reset" class="btn btn-danger">Cancelar</button></center>
    </form> 
  
                    <br>
  </div>
@endsection
