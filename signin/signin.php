<?php
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
echo "<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
if (empty($email) || empty($contraseña) || empty($nombre) || empty($dni) || empty($direccion)) {
  echo "<h1>Todos los campos son obligatorios</h1>";
  echo "<a href='signin.html'>Volver</a>";
  exit();
} else if (!preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}/i", $email)) {
  echo "<h1>Introduce un email valido</h1>";
  echo "<a href='signin.html'>Volver</a>";

  exit();
} else if (!preg_match("/[0-9]{8}[A-Z]{1}/i", $dni)) {
  echo "<h1>Introduce un dni valido</h1>";
  echo "<a href='signin.html'>Volver</a>";

  exit();
}
echo "</body>";

$hash = password_hash($contraseña, PASSWORD_DEFAULT);

$c = mysqli_connect("localhost", "alex", "alex");
$base = "herbolario";
$tabla = "clientes";
mysqli_select_db($c, $base);
$sql = "INSERT INTO $tabla VALUES('$dni', '$nombre', '$email', '$hash', '$direccion')";
if (mysqli_query($c, $sql)) {
  header("Location: ../login/login.html");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($c);
}

mysqli_close($c);
