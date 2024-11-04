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
    let id = e.target.id;
    delete compras[id];
    setCookie("compras", compras, 7);
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
