var cont = 1;
function agregarProducto() {

  var incremental = 1;
  var articulo = document.getElementById("fromArticulo");
  var metrica = document.getElementById("fromMetrica");
  var cantidad = document.getElementById("fromCantidad");
  var datos = document.getElementById("tablaProducto");
  
  datos.innerHTML = datos.innerHTML +
  `<tr class="azul">
  <td><input type="hidden" name="incremental[]" value="${incremental}">${cont++}</td>
  <td>${articulo.value}</td>
  <td>${metrica.value}</td>
  <td>${cantidad.value}</td>
  <td><a href="#" onclick="eliminarArticulo(this)"><img src="img/general/trash.png" alt="Boton eliminar" id="eliminar"></a></td>
  </tr>`;

  limpiarCampos();
}
function eliminarArticulo(eliminarFila){
  var fila = eliminarFila.parentElement.parentElement.remove();
  calcularTotales();
}
function limpiarCampos(){
  fromArticulo.value = "";
  fromMetrica.value = "";
  fromCantidad.value = "";
  fromPrecio.value = "";
}