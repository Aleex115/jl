let ulrs = document.querySelectorAll(".url");

ulrs.forEach((el) => {
  el.addEventListener("change", (e) => {
    console.log(e.target.value);
    let img = e.target.closest("td").nextElementSibling.querySelector("img");
    img.src = e.target.value;
  });
});
let forms = document.querySelectorAll(".actualizar");

forms.forEach((el) => {
  el.addEventListener("submit", (e) => {
    e.preventDefault();
    if (confirm("¿Estas seguro?")) {
      alert("Se ha modificado el registro");

      e.target.submit();
    } else {
      alert("No se ha actualizado el registro");
    }
  });
});
let imagen = document.querySelector(".imagen");
imagen.addEventListener("change", (e) => {
  let previsualizar = document.querySelector(".previsualizar");
  previsualizar.src = e.target.value;
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
