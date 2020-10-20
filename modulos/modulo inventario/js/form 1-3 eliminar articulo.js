function validacion_eliminar_articulo() {
  var campo1 = document.querySelector("#eliminar");

  if (!campo1.checked) {
    alert("Marque la casilla 'Eliminar' si esta seguro\nque desea eliminar el articulo seleccionado");
    return false;
  }
  if (campo1.checked) {
    alert("Articulo eliminado satisfactoriamente");
    location.replace("#");
  }
}
