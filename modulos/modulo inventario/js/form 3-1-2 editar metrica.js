function validacion_editar_metrica(){
 var campo1 = document.querySelector("#nuevaCategoria");

  if (campo1.value == "" || campo1.value == null) {
    alert("El siguiente campo está vacío: 'Nombre de la unidad metrica'");
    return false;
  }
  alert("Unidad metrica editada satisfactoriamente");
  location.replace("#");
}