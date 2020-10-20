function validacion_editar_articulo() {
  var campo = document.querySelector("#CodigoInterno");

  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Codigo interno");
    campo.focus();
    return false;
  } else if (campo.value.length > 10) {
    alert(
      "El dato del siguiente campo excede la longitud permitida: Codigo interno \nLongitud máxima: 10 caracteres"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#Nombre");

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

  campo = document.querySelector("#UnidadMedida");

  if (campo.value == "" || campo.value == null) {
    alert("El siguiente campo está vacío: 'Unidad de medida'");
    campo.focus();
    return false;
  }
  if (campo.value == "" || campo.value === null) {
    alert("El siguiente campo está vacío: Nombre");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#StockMinimo");

  var min = parseInt(campo.value);
  if (min < 0) {
    alert(
      "El siguiente campo no puede ser\nun numero negativo: 'Stock Minimo'"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#StockMaximo");

  var max = parseInt(campo.value);
  if (max < 0) {
    alert(
      "El siguiente campo no puede ser\nun numero negativo: 'Stock Maximo'"
    );
    campo.focus();
    return false;
  }

  campo = document.querySelector("#Categoria");

  if (campo.value == "" || campo.value == null) {
    alert("El siguiente campo está vacío: 'Categoria'");
    campo.focus();
    return false;
  }

  campo = document.querySelector("#subcategoria");

  if (campo.value == "" || campo.value == null) {
    alert("El siguiente campo está vacío: 'Subcategoria'");
    campo.focus();
    return false;
  }

  alert("Los datos ha sido agregados correctamente");
  location.href("modulos/modulo inventario/Inventario.php");
}
