function validacion_eliminar_subcategoria(){
 var campo1 = document.querySelector("#eliminar");

 if (!campo1.checked) {
   alert("Marque la casilla 'Eliminar' si esta seguro que desea eliminar\nla subcategoria seleccionada");
   return false;
 }
 if (campo1.checked) {
   alert("Subcategoria eliminada satisfactoriamente");
   location.replace("#");
 }
}
