let sesion = document.querySelector(".sesion");

sesion.addEventListener("submit", (e) => {
  e.preventDefault();
  if (confirm("¿Estas seguro?")) {
    e.target.submit();
  } else {
    alert("No se ha cerrado sesión");
  }
});
let email = document.querySelector(".email");

email.addEventListener("submit", (e) => {
  e.preventDefault();
  if (confirm("¿Estas seguro?")) {
    e.target.submit();
  } else {
    alert("No se ha modificado el email");
  }
});
let contraseña = document.querySelector(".contraseña");

contraseña.addEventListener("submit", (e) => {
  e.preventDefault();
  if (confirm("¿Estas seguro?")) {
    e.target.submit();
  } else {
    alert("No se ha modificado la contraseña");
  }
});

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
    if (Object.keys(compras).length !== 0) {
      document.querySelector(".carrito").innerHTML = Object.values(
        compras
      ).reduce((a, b) => a + b);
    }
  }
});
