<?php
if (!isset($_COOKIE["email"])) {
  header("Location: ../login/login.html");
}
include("../conexion/conexion.php");

$base = "herbolario";
$tabla = "clientes";
mysqli_select_db($c, $base);
$resultado  = mysqli_query($c, "SELECT nombre FROM $tabla where email = '$_COOKIE[email]'");
$nombre = mysqli_fetch_array($resultado);
$nombre = $nombre["nombre"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script
    src="https://kit.fontawesome.com/42f1fa0ef9.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilos/normalize.css">
  <link rel="stylesheet" href="../estilos/indexClientes.css" />

  <link rel="shortcut icon" href="../icons/logo.svg" type="image/x-icon">
  <title>Hector & Pablo Herbolario</title>
</head>

<body>
  <header>
    <img src="../icons/logo.svg" alt="" />
    <h1>Hector & Pablo Herbolario</h1>
    <nav>
      <ul>
        <li><i class="fa-solid fa-house"></i><a href="">Inicio</a></li>
        <li><i class="fa-solid fa-user"></i><a href="../usuario/usuario.php"><?php echo $nombre ?></a></li>
        <li><i class="fa-solid fa-cart-shopping"></i><a href="../carrito/carrito.php">Carrito</a> <span class="carrito">0</span></li>
        <li><i class="fa-solid fa-circle-info"></i><a href="../informacion/informacion.php">Sobre nosotros</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <?php

    $base = "herbolario";
    $tabla = "productos";
    mysqli_select_db($c, $base);
    $resultado  = mysqli_query($c, "SELECT id,precio,descp,nombre,categoria,url FROM $tabla");
    while ($registro = mysqli_fetch_array($resultado)) {
      echo
      "<div class='card'>
      <h3>$registro[nombre]</h3>
      <img src='$registro[url]' alt=''>
      <p>$registro[categoria]</p>
      <p>$registro[precio]€</p>
      <button class='boton' id=$registro[id] >Añadir al carrito</button>
      <details>
      <summary>Descripción</summary>
      <p>$registro[descp]</p>
      </details>
    </div>";
    }
    ?>
  </main>

  <script src="indexClientes.js"></script>
</body>

</html>