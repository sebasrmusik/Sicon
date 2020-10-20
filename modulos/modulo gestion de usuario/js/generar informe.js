function validacion_generar_informe() {
  var campo1 = document.querySelector("#modal_generar_informe #nombre");
  var campo2 = document.querySelector("#modal_generar_informe #directorio");
  
  if (campo1.value == "" || campo1.value == null) {
    alert("El siguiente campo está vacío: Nombre del Documento");
    return false;
  } else if (campo2.value == "" || campo2.value == null) {
    alert("El siguiente campo está vacío: Directorio");
    return false;
  } 
  campo1 = document.querySelector("#modal_generar_informe #excel");
  campo2 = document.querySelector("#modal_generar_informe #pdf");
  if (!campo1.checked && !campo2.checked) {
    alert("Seleccione un tipo de archivo");
    return false;
  }

  var prim = document.getElementById("general");
  var secn = document.getElementById("estadoHabilitado");
  var thir = document.getElementById("estadoDeshabilitado");
  var list = document.getElementById("seleccionarRol");

  if (
    (!prim.checked) &&
    (!secn.checked) &&
    (!thir.checked) &&
    list.value == "" || list.value == null
    ) {
    alert("Seleccione un tipo de reporte")
    return false;
  }

  alert("Reporte generado satisfactoriamente");
  location.replace("#");
}

function uncheck(check) {
  var prim = document.getElementById("general");
  var secn = document.getElementById("estadoHabilitado");
  var thir = document.getElementById("estadoDeshabilitado");
  var list = document.getElementById("seleccionarRol");
  if (
    (prim.checked == true && secn.checked == true) ||
    (prim.checked == true && thir.checked == true) ||
    (secn.checked == true && thir.checked == true) ||
    (!(list.value == "") && prim.checked == true) ||
    (!(list.value == "") && secn.checked == true) ||
    (!(list.value == "") && thir.checked == true)
  ) {
    if (check == 1) {
      secn.checked = false;
      thir.checked = false;
      list.value = false;
      // checkRefresh();
    } else if (check == 2) {
      prim.checked = false;
      thir.checked = false;
      list.value = false;
      // checkRefresh();
    } else if (check == 3) {
      prim.checked = false;
      secn.checked = false;
      list.value = false;
      // checkRefresh();
    } else if (check == 4) {
      prim.checked = false;
      secn.checked = false;
      thir.checked = false;
    }
  }
}