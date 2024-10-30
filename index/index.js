let compras = {};
addEventListener("click", (e) => {
  if (e.target.matches(".boton")) {
    if (confirm("¿Estas seguro?")) {
      let id = e.target.id;
      let carrito = document.querySelector(".carrito");
      compras[id] = compras[id] + 1 || 1;
      carrito.innerHTML = parseInt(carrito.innerHTML) + 1;
      console.log(compras);
      setCookie("compras", compras, 7);
    } else {
      alert("No se ha añadido al carrito");
    }
  }
});

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
addEventListener("load", () => {
  if (getCookie("compras")) {
    compras = getCookie("compras");
    document.querySelector(".carrito").innerHTML = Object.values(
      compras
    ).reduce((a, b) => a + b);
  }
});
