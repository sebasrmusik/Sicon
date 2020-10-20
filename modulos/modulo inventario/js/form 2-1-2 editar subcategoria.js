function validacion_editar_subcategoria() {
  var campo1 = document.querySelector("#nuevaCategoria");

  if (campo1.value == "" || campo1.value == null) {
    alert("El siguiente campo está vacío: 'Nombre de la subcategoria'");
    return false;
  }
  alert("Subcategoria editada satisfactoriamente");
  location.replace("#");
}
