<?php
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];

echo "<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
if (empty($email)  || empty($nombre) || empty($dni) || empty($telefono)) {
  echo "<h1>Todos los campos son obligatorios</h1>";
  echo "<a href='proveedores.php'>Volver</a>";
  exit();
} else if (!preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}/i", $email)) {
  echo "<h1>Introduce un email valido</h1>";
  echo "<a href='proveedores.php'>Volver</a>";

  exit();
} else if (strlen($telefono) != 9 || !is_numeric($telefono)) {
  echo "<h1>Introduce un teléfono valido</h1>";
  echo "<a href='proveedores.php'>Volver</a>";

  exit();
} else if (!preg_match("/[0-9]{8}[A-Z]{1}/i", $dni)) {
  echo "<h1>Introduce un dni valido</h1>";
  echo "<a href='proveedores.php'>Volver</a>";

  exit();
}
echo "</body>";


$c = mysqli_connect("localhost", "alex", "alex");
$base = "herbolario";
$tabla = "proveedores";
mysqli_select_db($c, $base);
if (mysqli_query($c, "UPDATE $tabla set email='$email',nombre='$nombre',telefono='$telefono' where dni = '$dni'")) {
  header("Location: ./proveedores.php");
} else {
  echo "<p>Error: " . $sql . "<br>" . mysqli_error($c) . "</p>";
}
