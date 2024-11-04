<?php
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$usuario = $_POST['usuario'];

echo "<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
if (empty($email) || empty($contraseña) || empty($usuario)) {
  echo "<h1>Todos los campos son obligatorios</h1>";
  echo "<a href='login.html'>Volver</a>";
  exit();
} else if (!preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}/i", $email)) {
  echo "<h1>Introduce un email valido</h1>";
  echo "<a href='login.html'>Volver</a>";

  exit();
}
echo "</body>";


if ($usuario == "trabajador") {
  echo $usuario;
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


    if ($tabla == "clientes") {
      setcookie("email", "" . $email . "", time() + (86400 * 14), "/");
      header("Location: ../index/indexClientes.php");
    } else {
      setcookie("empleado", "" . $email . "", time() + (86400 * 14), "/");
      header("Location: ../index/index.php");
    }
  } else {
    echo "<h1>Contraseña incorrecta</h1>";
    echo "<a href='login.html'>Volver</a>";
  }
}
