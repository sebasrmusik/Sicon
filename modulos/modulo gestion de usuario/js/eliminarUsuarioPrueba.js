function validarEliminarUsuario() {
  var radios = document.getElementsByName("radioUsuarios");
  var idUsuario = document.getElementsByName("idUsuario[]");
  var nombreUsuario = document.getElementsByName("nombreUsuario[]");
  var rolUsuario = document.getElementsByName("rolUsuario[]");
  var eliminarUsuario = document.querySelector("#modal_deshabilitar_usuarios #usuarioEliminar");
  var eliminarUsuarioRol = document.querySelector("#modal_deshabilitar_usuarios #rolEliminar");
  var eliminarUsuarioId = document.querySelector("#modal_deshabilitar_usuarios #idUsuarioEliminar");
  var chequeo = false;
  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      chequeo = true;
      eliminarUsuario.value = nombreUsuario[i].value;
      eliminarUsuarioRol.value = rolUsuario[i].value;
      eliminarUsuarioId.value = idUsuario[i].value;
    }
  }
  
  if (chequeo == false) {
    alert('Seleccione un usuario');
    return false;
  }
}

function reiniciarDatos() {
  var radios = document.getElementsByName("radioUsuarios");
  document.querySelector("#modal_deshabilitar_usuarios #usuarioEliminar").value = "";
  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      radios[i].checked = false;
    }
  }
}

function validarEliminarRol() {
  var radios = document.getElementsByName("radioRoles");
  var nombreRol = document.getElementsByName("rolNombre[]");
  var idRol = document.getElementsByName("rolId[]");
  var eliminarRol = document.getElementById("nombreRolEliminar");
  var eliminarRolId = document.getElementById("numRolEliminar");
  var chequeo = false;
  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      chequeo = true;
      eliminarRol.value = nombreRol[i].value;
      eliminarRolId.value = idRol[i].value;

    }
  }

  if (!chequeo) {
    alert('Seleccione un rol');
    return false;
  }
}

function borrarDatosEliminar() {
  var radios = document.getElementsByName("radioRoles");
  document.getElementById("nombreRolEliminar").value = "";
  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      radios[i].checked = false;
    }
  }
}