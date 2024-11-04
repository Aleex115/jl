<?php
$contraseña = $_POST['contraseña'];
$contraseña2 = $_POST['r-contraseña'];

$hash = password_hash($contraseña, PASSWORD_DEFAULT);
echo
"<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
if ($contraseña != $contraseña2) {
  echo "<h1>Las contraseñas no coinciden</h1>";
  echo "<a href='usuario.php'>Volver</a>";
  exit();
}
echo "</body>";
$c = mysqli_connect("localhost", "alex", "alex");
$base = "herbolario";
$tabla = "clientes";
$cookie = $_COOKIE["email"];
mysqli_select_db($c, $base);
if (mysqli_query($c, "UPDATE $tabla set contraseña='$hash' where email = '$cookie'")) {
  header("Location:./usuario.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($c);
}
