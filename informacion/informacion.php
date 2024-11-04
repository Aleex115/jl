<?php
if (!isset($_COOKIE["email"])) {
  header("Location: ../login/login.html");
}
$c = mysqli_connect("localhost", "alex", "alex");
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
  <script src="https://kit.fontawesome.com/42f1fa0ef9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilos/normalize.css">
  <link rel="stylesheet" href="../estilos/header.css">
  <link rel="stylesheet" href="../estilos/informacion.css">
  <link rel="stylesheet" href="../estilos/footer.css">

  <link rel="shortcut icon" href="../icons/logo.svg" type="image/x-icon">
  <title>Hector & Pablo Herbolario</title>
</head>

<body>
  <header>
    <img src="../icons/logo.svg" alt="" />
    <h1>Hector & Pablo Herbolario</h1>
    <nav>
      <ul>
        <li><i class="fa-solid fa-house"></i><a href="../index/indexClientes.php">Inicio</a></li>
        <li><i class="fa-solid fa-user"></i><a href="../usuario/usuario.php"><?php echo $nombre ?></a></li>
        <li><i class="fa-solid fa-cart-shopping"></i><a href="../carrito/carrito.php">Carrito</a> <span
            class="carrito">0</span></li>
        <li><i class="fa-solid fa-circle-info"></i><a href="../informacion/informacion.html">Sobre nosotros</a></li>
      </ul>
    </nav>
  </header>
  <div>
    <h2>Sobre nosotros</h2>
    <p>Héctor & Pablo es un herbolario dedicado a ofrecer una amplia variedad de productos naturales para el bienestar
      físico y
      mental. Nos especializamos en hierbas, suplementos naturales, aceites esenciales y productos de cosmética
      ecológica,
      seleccionados cuidadosamente para promover una vida más saludable y equilibrada. En Héctor & Pablo creemos en el
      poder
      de la naturaleza para apoyar la salud de forma integral, por eso nuestros productos están libres de químicos
      nocivos
      y
      son respetuosos con el medio ambiente. Te invitamos a explorar nuestro catálogo y a descubrir soluciones naturales
      para
      cuidar de ti y de tu bienestar.</p>
  </div>
  <footer>
    <p>&copy; 2023 Hector & Pablo Herbolario. Todos los derechos reservados.</p>
    <p>Dirección: Calle Fentano nº23, Madrid, España</p>
  </footer>
  <script src="index.js"></script>

</body>

</html>