<?php
  $conexion = mysqli_connect('localhost', 'root', '', 'sicondb');
  if (isset($_POST["modificarRol"])) {
    $idRol = $_POST["idRolModificar"];
    $check1 = ($_POST["check1mp"] == "on" ? "1" : "0");
    $check2 = ($_POST["check2mp"] == "on" ? "1" : "0");
    $check3 = ($_POST["check3mp"] == "on" ? "1" : "0");
    $check4 = ($_POST["check4mp"] == "on" ? "1" : "0");
    $check5 = ($_POST["check5mp"] == "on" ? "1" : "0");
    $check6 = ($_POST["check6mp"] == "on" ? "1" : "0");
    $check7 = ($_POST["check7mp"] == "on" ? "1" : "0");

    $actualizacion = "UPDATE tblRoles set generarInformes = '$check1', crearEyS = '$check2', modificarEyS = '$check3', eliminarEyS = '$check4', crearMateriales = '$check5', modificarMateriales = '$check6', eliminarMateriales = '$check7' where idRol = '$idRol'";
    $ejecucion = mysqli_query($conexion, $actualizacion) or die ("Error al actualizar datos");
    if ($ejecucion) {
      echo "<script>
        alert('Permisos actualizados');
        window.open('../gestion de usuarios.php#modal_roles_y_privilegios', '_self');
      </script>";
    }
  }