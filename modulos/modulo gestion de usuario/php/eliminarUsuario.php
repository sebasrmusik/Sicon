<?php
  $conexion = mysqli_connect('localhost', 'root', '', 'sicondb');
  if (isset($_POST["eliminarUsuario"])) {
    $idUsuario = $_POST["idUsuarioEliminar"];
    $eliminarUsuarioRol = "DELETE from tblusuariosroles where idUsuario = '$idUsuario'";
    $ejecutar = mysqli_query($conexion, $eliminarUsuarioRol);

    $eliminarUsuarioIngreso = "DELETE from tblusuariosinfoingreso where idUsuarioIngreso = '$idUsuario'";
    $ejecutar = mysqli_query($conexion, $eliminarUsuarioIngreso);

    $eliminarUsuario = "DELETE from tblusuariossistema where idUsuario = '$idUsuario'";
    $ejecutar = mysqli_query($conexion, $eliminarUsuario);
    
    if ($ejecutar) {
      echo "<script>
        alert('Usuaro Eliminado');
        window.open('../gestion de usuarios.php', '_self');
      </script>";
    }
  }