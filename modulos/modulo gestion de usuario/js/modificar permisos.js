function modificar_permisos_validacion() {
  if (
    !document.querySelector("#modal_modificar_permisos #check1mp").checked &&
    !document.querySelector("#modal_modificar_permisos #check2mp").checked &&
    !document.querySelector("#modal_modificar_permisos #check3mp").checked &&
    !document.querySelector("#modal_modificar_permisos #check4mp").checked &&
    !document.querySelector("#modal_modificar_permisos #check5mp").checked &&
    !document.querySelector("#modal_modificar_permisos #check6mp").checked &&
    !document.querySelector("#modal_modificar_permisos #check7mp").checked
  ) {
    alert("Seleccione una opción");
    return false;
  }
  
}

