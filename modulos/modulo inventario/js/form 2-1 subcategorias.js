function validacion_radio() {
  var campo1 = document.querySelector("#");
  var campo2 = document.querySelector("#");
  var campo3 = document.querySelector("#");
  var campo4 = document.querySelector("#");
  var campo5 = document.querySelector("#");
  if (
    !campo1.checked &&
    !campo2.checked &&
    !campo3.checked &&
    !campo4.checked &&
    !campo5.checked
  ) {
    alert("Seleccione una subcategoria");
    return false;
  }
}
