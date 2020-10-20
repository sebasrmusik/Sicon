function validacion_eliminar_empleado() {
  var campo1 = document.querySelector("#eliminar");

  if (!campo1.checked) {
    alert(
      "Marque la casilla 'Eliminar' si esta seguro\nque desea eliminar el empleado seleccionado"
    );
    return false;
  }
  if (campo1.checked) {
    alert("Empleado eliminado satisfactoriamente");
    location.replace("#");
  }
}
