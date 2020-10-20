function validarModificarRol() {
  reiniciarValoresModificarRol();
  var radios = document.getElementsByName("radioRoles");
  var nombreRol = document.getElementsByName("rolNombre[]");
  var idRol = document.getElementsByName("rolId[]");
  var modificarRol = document.getElementById("nombreRolModificar");
  var modificarRolId = document.getElementById("idRolModificar");
  // Checkboxes de rol
  var checkbox1 = document.getElementsByName("generarInformes");
  var checkbox2 = document.getElementsByName("crearEyS");
  var checkbox3 = document.getElementsByName("modificarEyS");
  var checkbox4 = document.getElementsByName("eliminarEyS");
  var checkbox5 = document.getElementsByName("crearMateriales");
  var checkbox6 = document.getElementsByName("modificarMateriales");
  var checkbox7 = document.getElementsByName("eliminarMateriales");
  //checkboxes de modificacion
  var checkboxmp1 = document.getElementById("check1mp");
  var checkboxmp2 = document.getElementById("check2mp");
  var checkboxmp3 = document.getElementById("check3mp");
  var checkboxmp4 = document.getElementById("check4mp");
  var checkboxmp5 = document.getElementById("check5mp");
  var checkboxmp6 = document.getElementById("check6mp");
  var checkboxmp7 = document.getElementById("check7mp");
// chequeo de seleccion
var chequeo = false;

for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      chequeo = true;
      modificarRol.value = nombreRol[i].value;
      modificarRolId.value = idRol[i].value;
      if (checkbox1[i].checked) {
        checkboxmp1.checked = true;
      }
      if (checkbox2[i].checked) {
        checkboxmp2.checked = true;
      }
      if (checkbox3[i].checked) {
        checkboxmp3.checked = true;
      }
      if (checkbox4[i].checked) {
        checkboxmp4.checked = true;
      }
      if (checkbox5[i].checked) {
        checkboxmp5.checked = true;
      }
      if (checkbox6[i].checked) {
        checkboxmp6.checked = true;
      }
      if (checkbox7[i].checked) {
        checkboxmp7.checked = true;
      }
    }
  }
  if (!chequeo) {
    alert('Seleccione un rol');
    return false;
  }

}

function reiniciarValoresModificarRol (radiovar = false) {
  var radios = document.getElementsByName("radioRoles");
  var checkboxmp1 = document.getElementById("check1mp");
  var checkboxmp2 = document.getElementById("check2mp");
  var checkboxmp3 = document.getElementById("check3mp");
  var checkboxmp4 = document.getElementById("check4mp");
  var checkboxmp5 = document.getElementById("check5mp");
  var checkboxmp6 = document.getElementById("check6mp");
  var checkboxmp7 = document.getElementById("check7mp");

  if (radiovar) {
    for (let i = 0; i < radios.length; i++) {
      if (radios[i].checked) {
        radios[i].checked = false;
      }
    }
  }

  checkboxmp1.checked = false;
  checkboxmp2.checked = false;
  checkboxmp3.checked = false;
  checkboxmp4.checked = false;
  checkboxmp5.checked = false;
  checkboxmp6.checked = false;
  checkboxmp7.checked = false;


}