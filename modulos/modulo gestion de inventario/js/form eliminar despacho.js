function validacion_eliminar_despacho() {
  var campo1 = document.querySelector("#eliminar");

  if (!campo1.checked) {
    alert(
      "Marque la casilla 'Eliminar' si esta seguro\nque desea eliminar el Despacho seleccionado"
    );
    return false;
  }
  if (campo1.checked) {
    alert("Despacho eliminado satisfactoriamente");
    location.replace("#");
  }
}
