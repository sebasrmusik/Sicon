function validacion_crear_empleado() {
  var campo = document.querySelector("#NoIdentificacion");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Cédula");
    campo.focus();
    return false;
  } else if (campo.value.length > 10) {
    alert(
      "El dato del siguiente campo excede la longitud permitida: Cédula \nLongitud máxima: 10 caracteres"
    );
    campo.focus();
    return false;
  } else if (isNaN(campo.value)) {
    alert(
      "El dato suministrado en el siguiente campo no cumple con los requisitos: Cédula \nDebe ser de tipo numérico"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#RazonSocial");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Razon social/Nombre");
    campo.focus();
    return false;
  } else if (campo.value.length > 45) {
    alert(
      "El dato del siguiente campo excede la longitud permitida: Razon social/Nombre \nLongitud máxima: 25 caracteres"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#NombreContacto");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Nombre");
    campo.focus();
    return false;
  } else if (campo.value.length > 25) {
    alert(
      "El dato del siguiente campo excede la longitud permitida: Nombre \nLongitud máxima: 25 caracteres"
    );
    campo.focus();
    return false;
  } else if (!isNaN(campo.value)) {
    alert(
      "El dato suministrado en el siguiente campo no cumple con los requisitos: Nombre \nDebe ser de tipo alfabetico"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#Telefono1");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Teléfono 1");
    campo.focus();
    return false;
  } else if (campo.value.length > 10) {
    alert(
      "El dato del siguiente campo excede la longitud permitida: Teléfono 1 \nLongitud máxima: 10 caracteres"
    );
    campo.focus();
    return false;
  } else if (isNaN(campo.value)) {
    alert(
      "El dato suministrado en el siguiente campo no cumple con los requisitos: Teléfono 1 \nDebe ser de tipo numérico"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#Direccion");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Dirección");
    campo.focus();
    return false;
  } else if (campo.value.length > 45) {
    alert(
      "El dato del siguiente campo excede la longitud permitida: Dirección \nLongitud máxima: 45 caracteres"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#Departamento");

  if (campo.value == "") {
    alert("Seleccone una opción en el siguiente campo: Departamento");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#CiudadMunicipio");

  if (campo.value == "") {
    alert("Seleccone una opción en el siguiente campo: Municipio");
    campo.focus();
    return false;
  }

  alert("Los datos ha sido actualizados correctamente");
  location.replace("#");
}
