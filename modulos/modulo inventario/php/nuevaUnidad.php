<?php 
  $conexion = mysqli_connect('localhost', 'root', '', 'sicondb');
  if (isset($_POST["crearUnidad"])) {
    $nomUnidad = $_POST["nombreUnidad"];
    $catUnidad = $_POST["unidadmetrica"];
    $insercion = "INSERT into tblunidadmetrica values (NULL, '$nomUnidad', '$catUnidad')";
    $ejecutar = mysqli_query($conexion, $insercion) or die (mysqli_error($conexion));
    if ($ejecutar) {
      echo "<script>
      alert('Unidad creada');
      window.open('../form 3-1 metricas.php', '_self');
      </script>";
    }
  }