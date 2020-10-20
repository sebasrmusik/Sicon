function validacion_eliminar_factura() {
  var campo1 = document.querySelector("#eliminar");

  if (!campo1.checked) {
    alert(
      "Marque la casilla 'Eliminar' si esta seguro\nque desea eliminar la Factura seleccionada"
    );
    return false;
  }
  if (campo1.checked) {
    alert("Factura eliminada satisfactoriamente");
    location.replace("#");
  }
}
