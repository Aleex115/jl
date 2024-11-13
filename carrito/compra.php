<?php

$email = $_COOKIE["email"];

include("../conexion/conexion.php");

$base = "herbolario";
$tabla = "clientes";
mysqli_select_db($c, $base);
$resultado  = mysqli_query($c, "SELECT dni FROM $tabla where email = '$email'");
$dni = mysqli_fetch_array($resultado);
$dni = $dni["dni"];

$tabla = "compras";
$fecha = date("Y-m-d");
if (mysqli_query($c, "INSERT INTO $tabla (dni,fecha) VALUES ('$dni','$fecha')")) {
  echo "Compra registrada con exito";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($c);
}

mysqli_close($c);
