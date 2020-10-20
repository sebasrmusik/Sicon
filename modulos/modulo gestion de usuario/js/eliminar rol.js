document.querySelector("#modal_roles_y_privilegios #eliminarRol").addEventListener("click", confirmarEliminacion);

function confirmarEliminacion() {

  if (confirm("¿Desea eliminar el rol seleccionado: Jefe de Bodega?")) {
    alert("El rol seleccionado ha sido eliminado");
  }
}