function validar(nombreGrupo) {
  var radios = document.getElementsByName(nombreGrupo);
  var texto = document.getElementsByName("texto[]");
  var texfinal = document.getElementById("textofinal");
  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      texfinal.value = texto[i].value;
    }
  }
  return false;
}

function borrar(){
  document.getElementById("textofinal").value = "";
  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      radios[i].checked = false;
    }
  }
}