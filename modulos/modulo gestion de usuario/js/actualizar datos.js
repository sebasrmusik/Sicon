function validacion_actualizar_datos() {
  var campo = document.querySelector("#modal_actualizar_datos #cedulaad");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Cédula");
    campo.focus();
    return false;
  } else if (campo.value.length > 10) {
    alert ("El dato del siguiente campo excede la longitud permitida: Cédula \nLongitud máxima: 10 caracteres");
    campo.focus();
    return false;
  } else if (isNaN(campo.value)) {
    alert("El dato suministrado en el siguiente campo no cumple con los requisitos: Cédula \nDebe ser de tipo numérico" );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#modal_actualizar_datos #nombresad");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Nombres");
    campo.focus();
    return false;
  } else if (campo.value.length > 25) {
    alert("El dato del siguiente campo excede la longitud permitida: Nombres \nLongitud máxima: 25 caracteres");
    campo.focus();
    return false;
  } else if (!isNaN(campo.value)) {
    alert("El dato suministrado en el siguiente campo no cumple con los requisitos: Nombres \nDebe ser de tipo alfabetico");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#modal_actualizar_datos #apellidosad");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Apellidos");
    campo.focus();
    return false;
  } else if (campo.value.length > 25) {
    alert("El dato del siguiente campo excede la longitud permitida: Apellidos \nLongitud máxima: 25 caracteres");
    campo.focus();
    return false;
  } else if (!isNaN(campo.value)) {
    alert("El dato suministrado en el siguiente campo no cumple con los requisitos: Apellidos \nDebe ser de tipo alfabetico");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#modal_actualizar_datos #direccionad");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Dirección");
    campo.focus();
    return false;
  } else if (campo.value.length > 25) {
    alert("El dato del siguiente campo excede la longitud permitida: Apellidos \nLongitud máxima: 45 caracteres");
    campo.focus();
    return false;
  } 

  campo = document.querySelector("#modal_actualizar_datos #departamentoad");

  if (campo.value == "") {
    alert("Seleccone una opción en el siguiente campo: Departamento");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#modal_actualizar_datos #municipioad");

  if (campo.value == "") {
    alert("Seleccone una opción en el siguiente campo: Municipio");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#modal_actualizar_datos #tel1ad");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Teléfono 1");
    campo.focus();
    return false;
  } else if (campo.value.length > 10) {
    alert("El dato del siguiente campo excede la longitud permitida: Teléfono 1 \nLongitud máxima: 10 caracteres");
    campo.focus();
    return false;
  } else if (isNaN(campo.value)) {
    alert("El dato suministrado en el siguiente campo no cumple con los requisitos: Teléfono 1 \nDebe ser de tipo numérico");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#modal_actualizar_datos #tel2ad");

  if (campo.value.length > 10) {
    alert("El dato del siguiente campo excede la longitud permitida: Teléfono 2 \nLongitud máxima: 10 caracteres");
    campo.focus();
    return false;
  } else if (isNaN(campo.value)) {
    alert("El dato suministrado en el siguiente campo no cumple con los requisitos: Teléfono 2 \nDebe ser de tipo numérico");
    campo.focus();
    return false;
  }

  var campo = document.getElementById("emailad");
  var expresion = /\w+@[a-z]+\.[a-z]{2,4}$/;

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: e-Mail");
    campo.focus();
    return false;
  } if (campo.value.length > 30) {
    alert("El dato del siguiente campo excede la longitud permitida: e-Mail \nLongitud máxima: 30 caracteres");
    campo.focus();
    return false;
  } if (!expresion.test(campo.value)) {
    alert("El dato suministrado en el siguiente campo no cumple con los requisitos: e-Mail \nVerifique la información e intente nuevamente");
    campo.focus();
    return false;
  }

  alert('Los datos ha sido actualizados correctamente');
  location.replace("#");
}