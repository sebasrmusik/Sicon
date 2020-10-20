function validacion_nueva_metrica() {
  var campo1 = document.querySelector("#unidad");
  var campo2 = document.querySelector("#longitud");
  var campo3 = document.querySelector("#area");
  var campo4 = document.querySelector("#peso");
  var campo5 = document.querySelector("#volumen");
  if (
    !campo1.checked &&
    !campo2.checked &&
    !campo3.checked &&
    !campo4.checked &&
    !campo5.checked
  ) {
    alert("Seleccione una categoria");
    return false;
  }

  var campo1 = document.querySelector("#nombre");

  if (campo1.value == "" || campo1.value == null) {
    alert("El siguiente campo está vacío: 'Nombre de la unidad metrica'");
    return false;
  }
  alert("Nueva unidad metrica creada satisfactoriamente");
  location.replace("#");
}
