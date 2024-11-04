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
