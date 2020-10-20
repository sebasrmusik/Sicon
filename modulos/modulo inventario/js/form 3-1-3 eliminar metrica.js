function validacion_eliminar_metrica() {
  var campo1 = document.querySelector("#eliminar");

  if (!campo1.checked) {
    alert(
      "Marque la casilla 'Eliminar' si esta seguro que desea eliminar\nla unidad metrica seleccionada"
    );
    return false;
  }
  if (campo1.checked) {
    alert("Unidad metrica eliminada satisfactoriamente");
    location.replace("#");
  }
}
