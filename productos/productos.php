<?php
if (!isset($_COOKIE["empleado"])) {
  header("Location: ../login/login.html");
}
function Select($dni)
{
  $c = mysqli_connect("localhost", "alex", "alex");
  $base = "herbolario";
  $tabla = "proveedores";
  mysqli_select_db($c, $base);
  $resultado = mysqli_query($c, "Select dni,nombre from $tabla");
  $select = '<select name="proveedor" id="">';
  if ($dni == "") {
    $select .= '<option value=""selected> Null </option>';
  }
  while ($proveedor = mysqli_fetch_array($resultado)) {
    if ($proveedor["dni"] == $dni) {
      $select .= '<option value="' . $proveedor["dni"] . '" selected>' . $proveedor["nombre"] . '</option>';
    } else {
      $select .= '<option value="' . $proveedor["dni"] . '">' . $proveedor["nombre"] . '</option>';
    }
  };
  $select .=    '</select>';
  return $select;
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
  <link rel="stylesheet" href="../estilos/header.css">
  <link rel="stylesheet" href="../estilos/productos.css" />
  <link rel="shortcut icon" href="../icons/logo.svg" type="image/x-icon">
  <title>Hector & Pablo Herbolario</title>
</head>

<body>
  <header>
    <img src="../icons/logo.svg" alt="" />
    <h1>Hector & Pablo Herbolario</h1>
    <nav>
      <ul>
        <li><i class="fa-solid fa-user-tie"></i><a href="../index/index.php">Gestión empleados</a></li>
        <li><i class="fa-brands fa-pagelines"></i><a href="">Gestión de productos</a></li>
        <li><i class="fa-solid fa-boxes-packing"></i></i><a href="../proveedores/proveedores.php">Gestión proveedores</a> </li>

      </ul>
    </nav>
  </header>
  <h2>Actualizar productos</h2>
  <table>
    <thead>
      <tr>

        <th>Precio</th>
        <th>Descripción</th>
        <th>Nombre</th>
        <th>Categoría</th>
        <th>Dni proveedor</th>
        <th>url imagen</th>
        <th>Previsualizar imagen</th>
        <th>Actualizar</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $c = mysqli_connect("localhost", "alex", "alex");
      $base = "herbolario";
      $tabla = "productos";
      mysqli_select_db($c, $base);
      $resultado = mysqli_query($c, "Select * from $tabla");
      while ($fila = mysqli_fetch_array($resultado))
        echo
        "<tr>
        <form method='POST' action='actualizar.php' class='actualizar'>
        <td> <input type='text' value='$fila[precio]' name='precio'class='precio' /> </td>
        <td> <input type='text' value='$fila[descp]' name='descp' /></td>
        <td> <input type='text' value='$fila[nombre]' name='nombre' /> </td>
        <td> <input type='text' value='$fila[categoria]' name='categoria' /> </td><td>"
          . Select($fila["dni_proveedor"]) .
          "</td>
        <td> <input type='text' value='$fila[url]' name='url' class='url' /> </td>
        <td><img src='$fila[url]' alt='' class='img'></td>
        <td> <button  class='actualizar'>Actualizar</button></td>
        <td> <input type='hidden' value='$fila[id]' name='id' /></td>
        </form>
        </tr>";

      ?>
    </tbody>
  </table>

  <h2>Insertar productos</h2>
  <div class="container">
    <form action="insertar.php" method="post" class="insertar">

      <p for="nombre">Nombre</p>
      <input type="text" name="nombre" />
      <p for="descp">Descripción</p>
      <input type="text" name="descp" />

      <p for="precio">Precio</p>
      <input type="text" name="precio" />
      <p for="url">Url imagen</p>
      <input type="text" name="url" class="imagen" />

      <div>
        <p for="proveedor">Proveedor</p>
        <?php echo Select("proveedores"); ?>
      </div>

      <p for="categoria">Categoría</p>
      <input type="text" name="categoria" />

      <button class="insertar">Insertar</button>
    </form>
    <div>
      <h3>Previsualizar imagen</h3>
      <img src="https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-image_large.png?v=1530129081" alt="" class="previsualizar">
    </div>
  </div>
  <script src="index.js"></script>
</body>

</html>