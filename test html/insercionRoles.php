<?php
  error_reporting(E_ALL ^ E_NOTICE); 
  $conexion = mysqli_connect('localhost', 'root', '', 'test');
  if ($_POST["enviar"]) {
    $nombre = $_POST["nombre"];
    $columna1 = ($_POST["columna1"] == "on" ? "1" : "0");

    $columna2 = ($_POST["columna2"] == "on" ? "1" : "0");
    $columna3 = ($_POST["columna3"] == "on" ? "1" : "0");
    $insercion = "INSERT into pruebacheckbox values (NULL, '$nombre', '$columna1', '$columna2', '$columna3')";
    $ejecutar = mysqli_query($conexion, $insercion) or die ("Error al insertar datos");

    if ($ejecutar) {
      echo "<script>
      alert('Datos ingresados correctamente');
      window.open('prueba.php', '_self');
      </script>";
    }
  }