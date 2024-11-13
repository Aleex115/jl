<?php
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$sueldo = $_POST['sueldo'];
$dni = $_POST['dni'];
$contraseña = $_POST['contraseña'];

echo "<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
if (empty($email)  || empty($nombre) || empty($dni)) {
  echo "<h1>Todos los campos son obligatorios</h1>";
  echo "<a href='index.php'>Volver</a>";
  exit();
} else if (!preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}/i", $email)) {
  echo "<h1>Introduce un email valido</h1>";
  echo "<a href='index.php'>Volver</a>";

  exit();
} else if ($sueldo < 1000 || $sueldo > 10000) {
  echo "<h1>Introduce un sueldo valido</h1>";
  echo "<a href='index.php'>Volver</a>";

  exit();
} else if (!preg_match("/[0-9]{8}[A-Z]{1}/i", $dni)) {
  echo "<h1>Introduce un dni valido</h1>";
  echo "<a href='index.php'>Volver</a>";

  exit();
}
echo "</body>";
$hash = password_hash($contraseña, PASSWORD_DEFAULT);

$c = mysqli_connect("localhost", "alex", "alex");
$base = "herbolario";
$tabla = "empleados";
mysqli_select_db($c, $base);
if (mysqli_query($c, "UPDATE $tabla set email='$email',nombre='$nombre',sueldo='$sueldo',contraseña='$hash' where dni = '$dni'")) {
  setcookie("empleado", "" . $email . "", time() + (86400 * 14), "/");
  header("Location: ./index.php");
} else {
  echo "<p>Error: " . $sql . "<br>" . mysqli_error($c) . "</p>";
}
