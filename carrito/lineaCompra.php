<?php
$cantidad = $_POST["cantidad"];
$idProducto = $_POST["id"];

$c = mysqli_connect("localhost", "alex", "alex");
$base = "herbolario";
$tabla = "productos";
mysqli_select_db($c, $base);
$resultado  = mysqli_query($c, "SELECT precio,nombre FROM $tabla where id = '$idProducto'");
$arr = mysqli_fetch_array($resultado);
$precio = $arr["precio"];
$nombre = $arr["nombre"];

$tabla = "compras";
$resultado  = mysqli_query($c, "SELECT id FROM $tabla order by id desc limit 1");
$id = mysqli_fetch_array($resultado);
$id = $id["id"];

$tabla = "lineas_compra";
if (mysqli_query($c, "INSERT INTO $tabla (id_compra,id_producto,precio,cantidad) VALUES ('$id','$idProducto','$precio','$cantidad')")) {
  echo "$nombre comprado con exito";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($c);
}

mysqli_close($c);
