function validacion_cambiar_contraseña() {
  var campo1 = document.querySelector("#modal_cambiar_contraseña #contraseña");

  if (campo1.value == "" || campo1.value == null) {
    alert("El siguiente campo está vacío: Contraseña");
    return false;
  } 
  var campo2 = document.querySelector("#modal_cambiar_contraseña #confirmar_contraseña");
  if (campo2.value == "" || campo2.value == null) {
    alert("El siguiente campo está vacío: Confirmar Contraseña");
    return false;
  } else if (campo1.value != campo2.value) {
    alert("Las contraseñas no coindicen, intente nuevamente");
    return false;
  }

  alert ("Contraseña cambiada satisfactoriamente");
  location.replace("#");
}