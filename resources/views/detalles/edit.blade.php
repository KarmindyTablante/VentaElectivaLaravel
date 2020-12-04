@extends('layouts.app')

@section('content')
<div class="container">

        
    <br>
    <h2>Listado De Ventas Hechas </h2> <br>
    <h6>

    </h6>
    <table class="table">  
      <thead>
        <tr>
          <th scope="col">N° de venta</th>
          <th scope="col">Articulo</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
          <th scope="col">Total<br>(con descuento y impuesto)</th>
          <th scope="col">Cliente</th>
          <th scope="col">Vendedor</th>
          <th scope="col">Fecha</th>

        </tr>
      </thead>
      <tbody>
           <?php 

//------------------------------------
//conexion con la base de datos
$conexion = new mysqli("localhost","root","","tuscomprashoy");
mysqli_set_charset($conexion, 'utf8');
// -----------------------------------
      
	



$sql4= "SELECT ventas73s.id, ventas73s.total, ventas73s.fecha_hora, ventas73s.num_comprobante, ventas73s.tipo_comprobante, ventas73s.impuesto, detalles73s.id, detalles73s.precio, detalles73s.cantidad, detalles73s.descuento, detalles73s.id_articulo, articulos73s.nombre, articulos73s.id, detalles73s.id_venta, ventas73s.id_cliente, personas73s.id, personas73s.Nombre, users.id, users.name, ventas73s.id_usuario FROM detalles73s, articulos73s, ventas73s, personas73s, users WHERE detalles73s.id_articulo=articulos73s.id AND ventas73s.id_cliente=personas73s.id AND detalles73s.id_venta=ventas73s.id";
$resultado4=mysqli_query($conexion, $sql4);
  $num=1;

while ($row4=mysqli_fetch_assoc($resultado4)) {
	


      ?>

        <tr>
          <td><?php echo $num; ?></td>
          <td><?php echo $row4['nombre']; ?></td>
          <td><?php echo $row4['cantidad']; ?></td>
          <td><?php echo $row4['precio']; ?></td>
          <td><?php echo $row4['total']; ?></td>
          <td><?php echo $row4['Nombre']; ?></td>
           <td><?php echo $row4['name']; ?></td>
          <td><?php echo $row4['fecha_hora']; ?></td>


        </tr>
      </tbody>
                 <?php 
$num++;
}
      ?>

    </table>
    <div class="row">
      <div class="mx-auto">
      </div>
    </div>
    
</div>
@endsection

