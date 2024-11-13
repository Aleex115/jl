<?php
$email = $_POST['email'];
$email2 = $_POST['r-email'];
echo
"<head>
<link rel='stylesheet' href='../estilos/error.css' />
</head>
<body>";
if (!preg_match("/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}/i", $email)) {
  echo "<h1>Introduce un email valido</h1>";
  echo "<a href='usuario.php'>Volver</a>";
  exit();
} else if ($email != $email2) {
  echo "<h1>Los emails no coinciden</h1>";
  echo "<a href='usuario.php'>Volver</a>";
  exit();
}
echo "</body>";
$c = mysqli_connect("localhost", "alex", "alex");
$base = "herbolario";
$tabla = "clientes";
$cookie = $_COOKIE["email"];
mysqli_select_db($c, $base);

if (mysqli_query($c, "UPDATE $tabla set email='$email' where email = '$cookie'")) {
  setcookie("email", "" . $email . "", time() + (86400 * 14), "/");
  header("Location:./usuario.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($c);
}

mysqli_close($c);
