<?php
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$usuario = $_POST['usuario'];

echo "<head>
<style>
 
</style>
</head>
<body>";
if (empty($email) || empty($contraseña) || empty($usuario)) {
  echo "<h1>Todos los campos son obligatorios</h1>";
  echo "<a href='signin.html'>Volver</a>";
  exit();
} else if (!preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}/i", $email)) {
  echo "<h1>Introduce un email valido</h1>";
  echo "<a href='signin.html'>Volver</a>";

  exit();
}
echo "</body>";


if ($usuario == "trabajador") {
  $tabla = "empleados";
} else {
  $tabla = "clientes";
}

$c = mysqli_connect("localhost", "alex", "alex");
$base = "herbolario";
mysqli_select_db($c, $base);
$resultado = mysqli_query($c, "select email, contraseña from $tabla where email = '$email'");
while ($row = mysqli_fetch_array($resultado)) {
  if (password_verify($contraseña, $row['contraseña'])) {
    setcookie("email", "" . $email . "", time() + (86400 * 14), "/");

    if ($tabla == "clientes") {
      header("Location: ../index/indexClientes.html");
    } else {
      header("Location: ../index/index.html");
    }
  } else {
    echo "Contraseña incorrecta";
  }
}
