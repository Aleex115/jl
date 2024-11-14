
<?php

$dni = $_POST['empleados'];
include("../conexion/conexion.php");
$base = "herbolario";
mysqli_select_db($c, $base);


$sql = "DELETE FROM empleados WHERE dni = '$dni'";
if (mysqli_query($c, $sql)) {
  header("Location: ./index.php");
} else {
  echo "<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
  echo "<p>Error: " . mysqli_error($c) . "</p>";
  echo "</body>";
}
