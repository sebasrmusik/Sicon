<?php
$conexion = mysqli_connect('localhost', 'root', '', 'sicondb');
  if (isset($_POST["crearSubcategoria"])) {
    $idCategoria = "";
    $nombreSubCat = $_POST["nombreSubcategoria"];
    switch ($_POST["Categorias"]) {
      case 'Petreos':
        $idCategoria = '1';
        break;
      
      case 'Arcillas':
        $idCategoria = '2';
        break;
      
      case 'Metalicos':
        $idCategoria = '3';
        break;
      
      case 'Organicos':
        $idCategoria = '4';
        break;
      
      case 'Sintetico':
        $idCategoria = '5';
        break;
      
      default:
        
        break;
    }
    $insercion = "INSERT into tblsubcategorias values(NULL, '$nombreSubCat', '$idCategoria')";
    $ejecucion = mysqli_query($conexion, $insercion) or die (mysqli_error($conexion));

    if ($ejecucionx) {
      echo "<script>
      alert('Subcategoria creada');
      window.open('../form 2-1 subcategorias.php', '_self');
      </script>";
    }
  }