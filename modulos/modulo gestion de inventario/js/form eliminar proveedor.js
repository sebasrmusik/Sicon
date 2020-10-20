function validacion_eliminar_proveedor() {
  var campo1 = document.querySelector("#eliminar");

  if (!campo1.checked) {
    alert(
      "Marque la casilla 'Eliminar' si esta seguro\nque desea eliminar el proveedor seleccionado"
    );
    return false;
  }
  if (campo1.checked) {
    alert("Proveedor eliminado satisfactoriamente");
    location.replace("#");
  }
}
