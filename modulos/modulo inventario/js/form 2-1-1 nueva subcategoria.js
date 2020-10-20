function validacion_nueva_subcategoria() {
  
  var campo1 = document.querySelector("#petreos");
  var campo2 = document.querySelector("#arcillas");
  var campo3 = document.querySelector("#metalicos");
  var campo4 = document.querySelector("#Organicos");
  var campo5 = document.querySelector("#sinteticos");
  if (
    !campo1.checked &&
    !campo2.checked &&
    !campo3.checked &&
    !campo4.checked &&
    !campo5.checked
  ) {
    alert("Seleccione una categoria");
    return false;
  }

  var campo1 = document.querySelector("#nombre");

  if (campo1.value == "" || campo1.value == null) {
    alert("El siguiente campo está vacío: 'Nombre de la subcategoria'");
    return false;
  }
  alert("Nueva subcategoria creada satisfactoriamente");
  location.replace("#");
}
