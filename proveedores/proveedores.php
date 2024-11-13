<?php
if (!isset($_COOKIE["empleado"])) {
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
  <link rel="stylesheet" href="../estilos/header.css">
  <link rel="stylesheet" href="../estilos/proveedores.css" />
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
        <li><i class="fa-brands fa-pagelines"></i><a href="../productos/productos.php">Gestión de productos</a></li>
        <li><i class="fa-solid fa-boxes-packing"></i></i><a href="">Gestión proveedores</a> </li>
      </ul>
    </nav>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Teléfono</th>
          <th>Actualizar</th>

        </tr>
      </thead>

      <tbody>
        <?php
        include_once("../conexion/conexion.php");

        $base = "herbolario";
        $tabla = "proveedores";
        mysqli_select_db($c, $base);
        $resultado = mysqli_query($c, "Select dni,nombre,email,telefono from $tabla");
        while ($fila = mysqli_fetch_array($resultado))
          echo
          "<tr>
        <form method='POST' action='actualizar.php' class='actualizar'>
        <td> <input type='text' value='$fila[nombre]' name='nombre' /> </td>
        <td> <input type='email' value='$fila[email]' name='email' /></td>
        <td> <input type='text' value='$fila[telefono]' name='telefono' /> </td>
        <td> <button  class='actualizar'>Actualizar</button></td>
        <td> <input type='hidden' value='$fila[dni]' name='dni' /></td>
        </form>
        </tr>"

        ?>
      </tbody>
    </table>
    <form action="insertar.php" method="POST" class="insertar form">
      <h2>Insertar proveedor</h2>
      <label for="nombre">Introduce el nombre</label>
      <input type="text" name="nombre" id="nombre" required>
      <label for="email">Introduce el email</label>
      <input type="email" name="email" id="email" required>
      <label for="telefono">Introduce el teléfono</label>
      <input type="text" name="telefono" id="telefono" required>
      <label for="dni">Introduce el dni</label>
      <input type="text" name="dni" id="dni" required>
      <input type="submit" value="Insertar">
    </form>

    <form action="borrar.php" method="POST" class="form eliminar">
      <h2>Selecciona un proveedor a eliminar</h2>
      <select name="proveedor" id="">
        <?php
        $resultado = mysqli_query($c, "Select dni,nombre from $tabla");

        while ($proveedor = mysqli_fetch_array($resultado))
          echo "<option value='$proveedor[dni]'>$proveedor[nombre]</option>";
        ?>
      </select>
      <input type="submit" value="Borrar" class="borrar">
    </form>
  </main>
  <script src="index.js"></script>
</body>

</html>