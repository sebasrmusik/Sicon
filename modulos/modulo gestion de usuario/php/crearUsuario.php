<?php
$conexion = mysqli_connect('localhost', 'root', '', 'sicondb')or die ("Error al conectar con la base de datos");
  if (isset($_POST["crearUsuario"])) {
    $idUsuario = $_POST["idNuevoUsuario"];
    $cedulaUsuario = $_POST["cedulacu"];
    $nombresUsuario = $_POST["nombrescu"];
    $apellidosUsuario = $_POST["apellidoscu"];
    $direccionUsuario = $_POST["direccioncu"];

    $consultadep = "SELECT * from tbldepartamento";
    $resultado = mysqli_query($conexion, $consultadep) or die ("Error al conectar con tblDepartamento");
    $depUsuario = "";
    $munUsuario = "";
    $rolUsuario = "";

    while($fila = mysqli_fetch_array($resultado)){
      if ($fila["nomDepartamento"] == $_POST["departamentoscu"]) {
        $depUsuario = $fila["idDepartamento"];
      }
    }

    $consultamun = "SELECT * FROM tblmunicipio";
    $resultado = mysqli_query($conexion, $consultamun) or die ("Error al conectar con tblMunicipio");

    while ($fila = mysqli_fetch_array($resultado)) {
      if ($fila["nomMunicipio"] == $_POST["municipioscu"]) {
        $munUsuario = $fila["idMunicipio"];
      }
    }
    $tel1Usuario = $_POST["tel1cu"];
    $tel2Usuario = $_POST["tel2cu"];
    $emailUsuario = $_POST["emailcu"];
    $usuarioIngreso = $_POST["nombreincu"];
    $contraseña = $_POST["contracu"];

    $consultarol = "SELECT * from tblroles";
    $resultado = mysqli_query($conexion, $consultarol);

    while ($fila = mysqli_fetch_array($resultado)) {
      if ($fila["nombreRol"] == $_POST["rolcu"]) {
        $rolUsuario = $fila["idRol"];
      }
    }

    var_dump($rolUsuario);

    $insercion = "INSERT into tblusuariossistema values('$idUsuario', '$cedulaUsuario', '$nombresUsuario', '$apellidosUsuario', '$direccionUsuario', '$depUsuario', '$munUsuario', '$tel1Usuario', '$tel2Usuario', '$emailUsuario')";
    $ejecutar = mysqli_query($conexion, $insercion) or die ("Error  al insertar datos de info de usuario");
    if ($ejecutar) {
      echo "<script>
        alert('Informacion ingresada correctamente');

      </script>";
    }
    $insercionUsuario = "INSERT into tblusuariosinfoingreso values ('$idUsuario', '$usuarioIngreso', '$contraseña')";
    $ejecutar = mysqli_query($conexion, $insercionUsuario) or die ("Fallo al ingresar datos de ingreso");
    if ($ejecutar) {
      echo "<script>
      alert('Usuario creado');
      </script>";
    }

    $insercionRol = "INSERT into tblusuariosroles values ('$idUsuario', '$rolUsuario')";
    $ejecutar = mysqli_query($conexion, $insercionRol) or die (mysqli_error($conexion));

    if ($ejecutar) {
      echo "<script>
        alert('Rol asignado');
        window.open('../gestion de usuarios.php', '_self');
      </script>";
    }
  }