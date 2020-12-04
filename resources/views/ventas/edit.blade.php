@extends('layouts.app')

@section('content')

	
<div class="container">
<?php
extract($_REQUEST); 

$id=Auth::user()->id;
 $precio=$_GET['precio'];
              $descuento=$_GET['descuento'];
              $impuesto=$_GET['impuesto'];
               $cantidad=$_GET['cantidad'];
               $tipo_comprobante=$_GET['tipo_comprobante'];
               $num_comprobante=$_GET['num_comprobante'];
               $nombre=$_GET['nombre'];
                $id_persona=$_GET['id_persona'];

$monto=$precio+$impuesto-$descuento;
$total=$monto*$cantidad;
	$conexion = new mysqli("localhost","root","","tuscomprashoy");
                      mysqli_set_charset($conexion, 'utf8');



$sql5= "SELECT stock FROM articulos73s WHERE id='$nombre'";
$resultado5=mysqli_query($conexion, $sql5);
$row5=mysqli_fetch_assoc($resultado5);
$stock=$row5['stock']-$cantidad;
if ($cantidad > $row5['stock'] || $row5['stock']=='0') {
 echo "<script>   alert('No hay suficientes articulos solicite una cantidad mas baja'); window.location='../ventas/create'; </script>";
}else{
$sql="UPDATE  articulos73s  SET stock='$stock'  WHERE id='$nombre'";
$resultado=mysqli_query($conexion, $sql);
}









$sql2="INSERT INTO ventas73s(id_cliente, id_usuario, tipo_comprobante, num_comprobante,serie_comprobante,impuesto,total,estado) VALUES ('$id_persona', '$id', '$tipo_comprobante', '$num_comprobante','jhdsjj','$impuesto','$total','Consolidada')";
$resultado2=mysqli_query($conexion, $sql2);


$sql3= "SELECT ventas73s.id FROM ventas73s WHERE num_comprobante='$num_comprobante' ORDER BY ventas73s.id DESC LIMIT 1";
$resultado3=mysqli_query($conexion, $sql3);

$row3=mysqli_fetch_assoc($resultado3);

$id_venta=$row3['id'];





$sql="INSERT INTO detalles73s(cantidad, id_articulo, precio, descuento,id_venta) VALUES ('$cantidad', '$nombre', '$precio', '$descuento','$id_venta')";
$resultado=mysqli_query($conexion, $sql);
  
                     
  if ($resultado && $resultado2) {

 echo "<script> window.location='../detalles/create'; </script>";


} else {
                           echo $sql2;

}            

?>
 </div>
@endsection
