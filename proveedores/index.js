let forms = document.querySelectorAll(".actualizar");

forms.forEach((el) => {
  el.addEventListener("submit", (e) => {
    e.preventDefault();
    if (confirm("¿Estas seguro?")) {
      alert("Se ha modificado el registro");

      e.target.submit();
    } else {
      alert("No se ha insertado el registro");
    }
  });
});
let insertar = document.querySelector(".insertar");

insertar.addEventListener("submit", (e) => {
  e.preventDefault();
  if (confirm("¿Estas seguro?")) {
    alert("Se ha añadido el registro");

    e.target.submit();
  } else {
    alert("No se ha insertado el registro");
  }
});

let eliminar = document.querySelector(".eliminar");

eliminar.addEventListener("submit", (e) => {
  e.preventDefault();
  if (confirm("¿Estas seguro?")) {
    alert("Se ha eliminado el registro");
    e.target.submit();
  } else {
    alert("No se ha insertado el registro");
  }
});
