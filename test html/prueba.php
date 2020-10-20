<!DOCTYPE html>
<html lang="en">
  <?php
    $conexion = mysqli_connect('localhost', 'root', '', 'test') or die ("Error al conectar con la base de datos");
  ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $consulta = "SELECT * from pruebacheckbox";
    $ejecutar = mysqli_query($conexion, $consulta) or die ("Error en la consulta");

    // var_dump($ejecutar);

    while ($fila = mysqli_fetch_array($ejecutar)) {
      $id = $fila["id"];
      $nombre = $fila["nombre"];

      ?> 
      <input type="text" name="" id="" value="<?php echo $nombre; ?>" readonly>
      <input type="checkbox" name="" id="" <?php echo ($fila['columna1']== '1' ? 'checked' : '') ; ?> disabled>
      <input type="checkbox" name="" id="" <?php echo ($fila['columna2']== '1' ? 'checked' : '') ; ?> disabled>
      <input type="checkbox" name="" id="" <?php echo ($fila['columna3']== '1' ? 'checked' : '') ; ?> disabled><br>
      <?php
    }
  ?>
  <p>Insertar Datos en base de datos</p>
  <form action="insercionRoles.php" method="post">
    <input type="text" name="nombre" id="">
    <input type="checkbox" name="columna1" id="">
    <input type="checkbox" name="columna2" id="">
    <input type="checkbox" name="columna3" id="">
    <input type="submit" value="Enviar" name="enviar">
  </form>
</body>
</html>