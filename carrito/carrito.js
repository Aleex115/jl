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
    if (name === "email" && key === name) {
      return decodeURIComponent(value);
    } else if (key === name) {
      return JSON.parse(value);
    }
  }
  return null;
};

let compras = getCookie("compras");
let checkboxes = document.querySelectorAll("input[type=checkbox]");

checkboxes.forEach((el) => {
  el.addEventListener("change", () => {
    let total = document.querySelector(".total");
    total.textContent = 0;
    checkboxes.forEach((checkbox) => {
      if (checkbox.checked) {
        console.log(
          checkbox.closest("form").querySelector(".precio").textContent
        );
        total.textContent =
          parseFloat(total.textContent) +
          parseFloat(
            checkbox.closest("form").querySelector(".precio").textContent
          ) *
            checkbox.value;
      }
    });
  });
});

addEventListener("click", (e) => {
  if (e.target.matches(".eliminar")) {
    if (confirm("¿Estas seguro?")) {
      let id = e.target.id;
      delete compras[id];
      setCookie("compras", compras, 7);
    }
  }
  if (e.target.matches(".comprar")) {
    if (confirm("¿Estas seguro?")) {
      let forms = document.querySelectorAll("form");
      let cond = false;

      forms.forEach((el) => {
        if (el.seleccion.checked) {
          cond = true;
          delete compras[el.seleccion.id];
          setCookie("compras", compras, 7);
        }
      });

      if (cond) {
        generarPDF();
        fetch("./compra.php", {
          method: "POST",
        })
          .then((response) => response.text())
          .then((data) => {
            alert(data);
            forms.forEach((el) => {
              if (el.seleccion.checked) {
                let data = new FormData();
                data.append("id", el.seleccion.id);
                data.append("cantidad", el.seleccion.value);
                fetch("./lineaCompra.php", {
                  method: "POST",
                  body: data,
                })
                  .then((response) => response.text())
                  .then((data) => {
                    alert(data);
                  });
              }
            });
            location.reload();
          });
      } else {
        alert("Selecciona algun elemento");
      }
    } else {
      alert("Compra cancelada");
    }
  }
});
async function generarPDF() {
  const { jsPDF } = window.jspdf;
  const doc = new jsPDF();

  doc.setFontSize(16);
  doc.text("Detalles de la Compra", 105, 20, null, null, "center");

  doc.setFontSize(12);
  doc.text("Fecha: " + new Date().toLocaleDateString(), 10, 30);
  doc.text("Email: " + getCookie("email"), 10, 40);

  let selecciones = document.querySelectorAll("form");
  let posicionY = 50;

  for (let el of selecciones) {
    if (el.seleccion.checked) {
      let precio = el.querySelector(".precio").textContent;
      let nombre = el.querySelector("h3").textContent;
      let img = el.querySelector("img").src;

      doc.text(`Producto: ${nombre}`, 10, posicionY);
      posicionY += 10;
      doc.text(`Costo: ${precio}€`, 10, posicionY);
      posicionY += 10;

      try {
        const imgData = await cargarImagenBase64(img);
        doc.addImage(imgData, "JPEG", 10, posicionY, 50, 50);
        posicionY += 60;
      } catch (error) {
        console.error("Error al cargar la imagen:", error);
        doc.text("Imagen no disponible", 10, posicionY);
        posicionY += 10;
      }
    }
  }
  doc.save("detalle_compra.pdf");
}

async function cargarImagenBase64(url) {
  const response = await fetch(url);
  const blob = await response.blob();
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.onloadend = () => resolve(reader.result);
    reader.onerror = reject;
    reader.readAsDataURL(blob);
  });
}
