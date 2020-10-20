// VALIDAR CAMPOS

function validar_campos() {
  var campo = document.querySelector("#fechaCrearFactura");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Fecha'");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#NoReferenciaCrearFactura");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Ref del proveedor'");
    campo.focus();
    return false;
  } else if (campo.value.length > 45) {
    alert(
      "El dato del siguiente campo excede la longitud permitida: Ref del proveedor\nLongitud máxima: 45 caracteres"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#proveedorCrearFactura");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Proveedor'");
    campo.focus();
    return false;
  } else if (campo.value.length > 45) {
    alert(
      "El dato del siguiente campo excede la longitud permitida: Proveedor\nLongitud máxima: 45 caracteres"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#impuestoCrearFactura");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Impuesto'");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#descuentoCrearFactura");
  var min = parseInt(campo.value);
  if (min < 0) {
    alert("El siguiente campo no puede ser\nun numero negativo: 'Descuento'");
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

  campo = document.querySelector("#fromPrecio");
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: 'Precio Unitario'");
    campo.focus();
    return false;
  }
  min = parseInt(campo.value);
  if (min <= 0) {
    alert(
      "El siguiente campo no puede ser\nun numero negativo o igual a 0(cero): 'Precio Unitario'"
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
  var precio = document.getElementById("fromPrecio");
  var subtotal = Number(cantidad.value) * Number(precio.value);
  var datos = document.getElementById("tablaProducto");

  datos.innerHTML =
    datos.innerHTML +
    `<tr class="azul">
 <td><input type="hidden" name="incremental[]" value="${incremental}">${cont++}</td>
 <td>${articulo.value}</td>
 <td>${metrica.value}</td>
 <td>${cantidad.value}</td>
 <td>${precio.value}</td>
 <td name="subtotal">${subtotal}</td>
 <td><a href="#" onclick="eliminarArticulo(this)"><img src="img/general/trash.png" alt="Boton eliminar" id="eliminar"></a></td>
 </tr>`;

  calcularTotales();
  limpiarCampos();
}

function calcularTotales() {
  var subtotales = document.getElementsByName("subtotal");
  var dto = document.getElementById("descuentoCrearFactura");
  var ivaaa = document.getElementById("impuestoCrearFactura");
  var sumaSubtotales = 0;

  for (var i = 0; i < subtotales.length; i++) {
    sumaSubtotales = sumaSubtotales + Number(subtotales[i].innerHTML);
  }

  var valorDto = sumaSubtotales * (Number(dto.value) / 100);
  var subtotalll = sumaSubtotales - valorDto;
  var valorIva = subtotalll * Number(ivaaa.value);
  var totalFactura = subtotalll + valorIva;

  descuento.value = valorDto.toLocaleString("es-MX");
  subtotal.value = subtotalll.toLocaleString("es-MX");
  iva.value = valorIva.toLocaleString("es-MX");
  total.value = totalFactura.toLocaleString("es-MX");
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
