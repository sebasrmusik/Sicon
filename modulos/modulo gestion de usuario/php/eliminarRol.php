<?php
  $conexion = mysqli_connect('localhost', 'root', '', 'sicondb');
  if (isset($_POST["eliminarRol"])) {
    $rolId = $_POST["numRolEliminar"];

    $consultaRolesUsuarios = "SELECT * from tblusuariosroles";
    $resultado = mysqli_query($conexion, $consultaRolesUsuarios);
    while($fila = mysqli_fetch_array($resultado)) {
      if ($rolId == $fila["idRol"]) {
        echo "<script>
          alert('El rol está asociado con un usuario, para poder eliminar un rol, no debe estar asociado con ningún usuario');
          window.open('../gestion de usuarios.php#modal_roles_y_privilegios', '_self');
        </script>";
      }
    }

    $eliminacion = "DELETE from tblroles where idRol = '$rolId'";
    $ejecucion = mysqli_query($conexion, $eliminacion) or die ("Error en la eliminacion de los datos");

    if ($ejecucion) {
      echo "<script>
        alert('El rol ha sido eliminado');
        window.open('../gestion de usuarios.php#modal_roles_y_privilegios', '_self');
      </script>";
    }
  }