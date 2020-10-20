function crear_rol_validacion() {
  if (document.getElementById("nombreRol").value == "") {
    alert ("Ingrese el nombre del rol");
    return false;
  }

  if (
    !document.querySelector("#modal_crear_rol #check1cr").checked &&
    !document.querySelector("#modal_crear_rol #check2cr").checked &&
    !document.querySelector("#modal_crear_rol #check3cr").checked &&
    !document.querySelector("#modal_crear_rol #check4cr").checked &&
    !document.querySelector("#modal_crear_rol #check5cr").checked &&
    !document.querySelector("#modal_crear_rol #check6cr").checked &&
    !document.querySelector("#modal_crear_rol #check7cr").checked
  ) {
    alert("Seleccione una opción");
    return false;
  }

  
}