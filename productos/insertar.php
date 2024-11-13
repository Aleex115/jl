<?php
$precio = $_POST['precio'];
$nombre = $_POST['nombre'];
$descp = $_POST['descp'];
$categoria = $_POST['categoria'];
$url = $_POST['url'];
$proveedor = $_POST['proveedor'];

echo "<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
if (empty($precio)  || empty($nombre)  || empty($url) || empty($descp) || empty($categoria) || empty($proveedor)) {
  echo "<h1>Todos los campos son obligatorios</h1>";
  echo "<a href='productos.php'>Volver</a>";
  exit();
} else if ($precio < 0) {
  echo "<h1>Introduce un precio valido</h1>";
  echo "<a href='productos.php'>Volver</a>";

  exit();
}
echo "</body>";
$c = mysqli_connect("localhost", "alex", "alex");
$base = "herbolario";
$tabla = "productos";
mysqli_select_db($c, $base);

$resultado = mysqli_query($c, "Insert into $tabla (nombre,descp,precio,url,categoria,dni_proveedor) values('$nombre','$descp',$precio,'$url','$categoria','$proveedor')");
if ($resultado) {
  header("Location: ./productos.php");
} else {
  echo "<p>Error: " . $sql . "<br>" . mysqli_error($c) . "</p>";
}
