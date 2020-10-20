function validar_campos() {
  var campo = document.querySelector("#fechaCrearFactura");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Fecha'");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#empleadoCrearFactura");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Empleado'");
    campo.focus();
    return false;
  } else if (campo.value.length > 45) {
    alert(
      "El dato del siguiente campo excede la longitud permitida: 'Empleado'\nLongitud máxima: 45 caracteres"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#fromArticulo");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Articulo'");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#fromMetrica");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Unidad metrica'");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#fromCantidad");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Cantidad'");
    campo.focus();
    return false;
  }
  min = parseInt(campo.value);
  if (min <= 0) {
    alert(
      "El siguiente campo no puede ser\nun numero negativo o igual a 0(cero): 'Cantidad'"
    );
    campo.focus();
    return false;
  }

  agregarProducto();
}

// AGREGAR PRODUCTO

var cont = 1;
function agregarProducto() {
  var incremental = 1;
  var articulo = document.getElementById("fromArticulo");
  var metrica = document.getElementById("fromMetrica");
  var cantidad = document.getElementById("fromCantidad");
  var datos = document.getElementById("tablaProducto");

  datos.innerHTML =
    datos.innerHTML +
    `<tr class="azul">
  <td><input type="hidden" name="incremental[]" value="${incremental}">${cont++}</td>
  <td><input type="hidden" name="" values="${articulo.value}">${articulo.value}</td>
  <td><input type="hidden" name="" values="${metrica.calue}">${metrica.value}</td>
  <td<input type="hidden" name="" values="${cantidad.value}">${cantidad.value}</td>
  <td><a href="#" onclick="eliminarArticulo(this)"><img src="img/general/trash.png" alt="Boton eliminar" id="eliminar"></a></td>
  </tr>`;

  limpiarCampos();
}
function eliminarArticulo(eliminarFila) {
  var fila = eliminarFila.parentElement.parentElement.remove();
  calcularTotales();
}
function limpiarCampos() {
  fromArticulo.value = "";
  fromMetrica.value = "";
  fromCantidad.value = "";
  fromPrecio.value = "";
}
