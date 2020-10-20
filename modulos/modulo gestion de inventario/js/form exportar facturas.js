function validacion_exportar_facturas() {
  var campo1 = document.querySelector("#nombre");
  var campo2 = document.querySelector("#directorio");

  if (campo1.value == "" || campo1.value == null) {
    alert("El siguiente campo está vacío: Nombre del Documento");
    return false;
  } else if (campo2.value == "" || campo2.value == null) {
    alert("El siguiente campo está vacío: Directorio");
    return false;
  }
  campo1 = document.querySelector("#excel");
  campo2 = document.querySelector("#pdf");
  if (!campo1.checked && !campo2.checked) {
    alert("Seleccione un tipo de archivo");
    return false;
  }

  alert("Reporte generado satisfactoriamente");
  location.replace("#");
}
