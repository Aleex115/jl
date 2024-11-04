<?php
if (!isset($_COOKIE["email"])) {
  header("Location: ../login/login.html");
}
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
  <link rel="stylesheet" href="../estilos/usuario.css" />
  <link rel="shortcut icon" href="../icons/logo.svg" type="image/x-icon">
  <title>Usuario</title>
</head>

<body>
  <header>
    <img src="../icons/logo.svg" alt="" />
    <h1>Hector & Pablo Herbolario</h1>
    <nav>
      <ul>
        <li><i class="fa-solid fa-house"></i><a href="../index/indexClientes.php">Inicio</a></li>
        <li><i class="fa-solid fa-user"></i><a href="">Usuario</a></li>
        <li><i class="fa-solid fa-cart-shopping"></i><a href="">Carrito</a><span class="carrito">0</span> </li>
      </ul>
    </nav>
  </header>
  <div class="container">
    <form action="contraseña.php" method="post" class="contraseña">
      <h2>Cambiar contraseña</h2>
      <label for="contraseña">Introduce la nueva contraseña</label>
      <input type="password" name="contraseña" id="contraseña" required>
      <label for="r-contraseña">Repite la nueva contraseña</label>
      <input type="password" name="r-contraseña" id="r-contraseña" required>
      <input type="submit" value="Cambiar">
    </form>
    <form action="email.php" method="post" class="email">
      <h2>Cambiar email</h2>
      <label for="email">Introduce el nuevo email</label>
      <input type="email" name="email" id="email" required>
      <label for="r-email">Repite el nuevo email</label>
      <input type="email" name="r-email" id="r-email" required>
      <input type="submit" value="Cambiar">
    </form>
    <form action="cerrar.php" method="post" class="sesion">
      <h2>Cerrar sesión</h2>
      <input type="submit" value="Cerrar sesión" class="cerrar">
    </form>
  </div>
  <main>
    <?php
    $c = mysqli_connect("localhost", "alex", "alex");
    $base = "herbolario";
    $tabla = "clientes";
    $email = $_COOKIE["email"];
    mysqli_select_db($c, $base);
    $resultado  = mysqli_query($c, "SELECT dni FROM $tabla where email = '$email'");
    $dni = mysqli_fetch_array($resultado);
    $dni = $dni["dni"];

    $tabla = "compras";
    $resultado  = mysqli_query($c, "SELECT id,fecha FROM $tabla where dni = '$dni' order by id desc");
    $numCompras = mysqli_num_rows($resultado);

    if ($numCompras < 0) {
      echo "<h2>No has realizado ninguna compra</h2>";
    } else {
      $ids = [];
      $fechas = [];
      while ($compra = mysqli_fetch_array($resultado)) {
        $ids[] = $compra["id"];
        $fechas[$compra["id"]] = $compra["fecha"];
      }
      foreach ($ids as $id) {
        echo "<h3>Pedido nº$id, realizada en $fechas[$id] </h3>";
        $resultado  =
          mysqli_query($c, "SELECT p.nombre, p.url,l.cantidad,l.precio from lineas_compra l
                          inner join productos p on l.id_producto  = p.id 
                          where l.id_compra = $id");

        while ($producto = mysqli_fetch_array($resultado)) {
          $url = $producto["url"];
          $nombre = $producto["nombre"];
          $cantidad = $producto["cantidad"];
          $precio = $producto["precio"];
          echo
          "<div class='card'>
            <img src='$url'/>
            <h4>$nombre</h4>
            <p>Cantidad: $cantidad</p>
            <p>Precio: $precio €</p>
          </div>";
        }
      }
    }
    ?>
    <script src="usuario.js"></script>
  </main>
</body>

</html>