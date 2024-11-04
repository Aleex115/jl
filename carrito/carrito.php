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
  <link rel="stylesheet" href="../estilos/carrito.css" />
  <link rel="shortcut icon" href="../icons/logo.svg" type="image/x-icon">
  <title>Carrito</title>
</head>

<body>
  <header>
    <img src="../icons/logo.svg" alt="" />
    <h1>Hector & Pablo Herbolario</h1>
    <nav>
      <ul>
        <li><i class="fa-solid fa-house"></i><a href="../index/indexClientes.php">Inicio</a></li>
        <li><i class="fa-solid fa-user"></i><a href="../usuario/usuario.php">Usuario</a></li>
        <li><i class="fa-solid fa-cart-shopping"></i><a href="">Carrito</a> </li>
      </ul>
    </nav>
  </header>
  <main>
    <?php
    if (isset($_COOKIE["compras"])) {
      $compras = $_COOKIE["compras"];
      $compras = json_decode($compras, true);
      $ids = array_keys($compras);
      $ids = implode(",", $ids);

      $c = mysqli_connect("localhost", "alex", "alex");
      $base = "herbolario";
      $tabla = "productos";
      mysqli_select_db($c, $base);
      if (!empty($ids)) {
        $resultado = mysqli_query($c, "SELECT id, precio, nombre, categoria, url FROM $tabla WHERE id IN ($ids)");
        while ($registro = mysqli_fetch_array($resultado)) {
          $cantidad = $compras[$registro["id"]];
          $total = ($registro["precio"] * $cantidad);
          echo "<form class='card'>
                <div class='img'>
                    <img src='$registro[url]' alt=''>
                </div>
                <div class='info'>
                    <h3>$registro[nombre]</h3>
                    <p>$registro[categoria]</p>
                    <p>Total: <span class='precio'>$total</span> €</p>
                    <p>Cantidad: $cantidad</p>
                </div>
                <div class='botones'>
                    <button class='boton eliminar' id=$registro[id]>Eliminar</button>
                    <div class='seleccionar'>
                        <label for='$registro[id]'>Seleccionar</label>
                        <input type='checkbox' name='seleccion' id='$registro[id]' value='$cantidad'>
                    </div>
                </div>
            </form>";
        }
        echo
        "<div class='pagar'>
        <button class='boton comprar'  >Comprar</button>
        <h3 >Total: <span class='total'> 0</span> €</h3>
      </div>";
      } else {
        echo "<h2>No hay productos en el carrito</h2>";
      }
    }

    ?>
  </main>
  <script src="./carrito.js">

  </script>
</body>

</html>