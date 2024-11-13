
<?php

$dni = $_POST['proveedor'];
include_once("../conexion/conexion.php");


if (!$c) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM proveedores WHERE dni = '$dni'";
if (mysqli_query($c, $sql)) {
  header("Location: ./proveedores.php");
} else {
  echo "<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
  echo "<p>Error: " . mysqli_error($c) . "</p>";
  echo "</body>";
}
