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
        <li><i class="fa-solid fa-user"></i><a href="">Usuario</a></li>
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
      $resultado  = mysqli_query($c, "SELECT id,precio,nombre,categoria,url FROM $tabla where id IN ($ids)");
      while ($registro = mysqli_fetch_array($resultado)) {
        $cantidad = $compras[$registro["id"]];
        $total = ($registro["precio"] * $cantidad);
        echo
        "<form class='card'>
          <div class='img'>
          <img src='$registro[url]' alt=''>
          </div>
          <div class='info'>
            <h3>$registro[nombre]</h3>
            <p>$registro[categoria]</p>
            <p >Total: <span class='precio'>$total</span> €</p>
            <p>Cantidad: $cantidad</p>
          </div>
          <div class='botones'>
            <button class='boton eliminar' id=$registro[id] >Eliminar</button>
            <div class='seleccionar'>
              <label for='$registro[id]'> Seleccionar</label>
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

    ?>
  </main>
  <script>
    setCookie = (name, value, days) => {
      let expires = "";
      if (days) {
        const date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + JSON.stringify(value) + expires + "; path=/";
    };

    getCookie = (name) => {
      const cookieArray = document.cookie.split("; ");
      for (let cookie of cookieArray) {
        const [key, value] = cookie.split("=");
        if (key === name) {
          return JSON.parse(value);
        }
      }
      return null;
    };

    let boton = document.querySelector(".comprar");
    let compras = getCookie("compras");
    let checkboxes = document.querySelectorAll("input[type=checkbox]");

    checkboxes.forEach((el) => {
      el.addEventListener("change", () => {
        let total = document.querySelector(".total");
        total.textContent = 0
        checkboxes.forEach((checkbox) => {
          if (checkbox.checked) {
            console.log(checkbox.closest("form").querySelector(".precio").textContent)
            total.textContent = parseFloat(total.textContent) + parseFloat(checkbox.closest("form").querySelector(".precio").textContent) * checkbox.value
          }
        })
      })
    })

    boton.addEventListener("click", () => {
      if (confirm("¿Estas seguro?")) {
        let forms = document.querySelectorAll("form");
        let cond = false

        forms.forEach((el) => {
          if (el.seleccion.checked) {
            cond = true
            delete compras[el.seleccion.id]
            setCookie("compras", compras, 7)
          }
        })

        if (cond) {
          fetch("./compra.php", {
            method: "POST",
          }).then((response) => response.text()).then((data) => {
            alert(data)
            forms.forEach((el) => {
              if (el.seleccion.checked) {
                let data = new FormData();
                data.append("id", el.seleccion.id);
                data.append("cantidad", el.seleccion.value);
                fetch("./lineaCompra.php", {
                  method: "POST",
                  body: data
                }).then((response) => response.text()).then((data) => {
                  alert(data)
                })
              }
            })
          })
        } else {
          alert("Selecciona algun elemento")
        }
      } else {
        alert("Compra cancelada")
      }
    })

    addEventListener("click", (e) => {
      if (e.target.matches(".eliminar")) {
        let id = e.target.id;
        delete compras[id];
        setCookie("compras", compras, 7);
      }
    });
  </script>
</body>

</html>