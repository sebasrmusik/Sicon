<?php
  error_reporting(E_ALL ^ E_NOTICE); 
  $conexion = mysqli_connect('localhost', 'root', '', 'sicondb');
  if (isset($_POST["crearRol"])) {
    $nombreRol = $_POST["nombreRol"];
    $generarInformes = ($_POST["check1cr"] == "on" ? "1" : "0");
    $crearEyS = ($_POST["check2cr"] == "on" ? "1" : "0");
    $modificarEyS = ($_POST["check3cr"] == "on" ? "1" : "0");
    $eliminarEyS = ($_POST["check4cr"] == "on" ? "1" : "0");
    $crearProducto = ($_POST["check5cr"] == "on" ? "1" : "0");
    $modificarProducto = ($_POST["check6cr"] == "on" ? "1" : "0");
    $eliminarProducto = ($_POST["check7cr"] == "on" ? "1" : "0");

    $insercion = "INSERT into tblroles values (NULL, '$nombreRol', '$generarInformes', '$crearEyS', '$modificarEyS', '$eliminarEyS', '$crearProducto', '$modificarProducto', '$eliminarProducto')";
    $ejecucion = mysqli_query($conexion, $insercion) or die ("Error al insertar datos");

    if ($ejecucion) {
      echo "<script>
        alert('Rol creado satisfactoriamente');
        window.open('../gestion de usuarios.php#modal_roles_y_privilegios', '_self');
      </script>";
    }
  }