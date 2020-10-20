<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    $conexion = mysqli_connect('localhost', 'root', '', 'sicondb');
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades metricas</title>
    <link rel="icon" type="image" href="img/general/favicon.png">
    <link rel="stylesheet" href="css/c form 2-1 ppal subcategorias y 3-1 ppal metricas.css">
</head>
<body>
    <div class="contenedor">
      <form action="" class="form">
        <!-- TITULO -->
        <h2>Unidades Metricas</h2>  
        <!-- BOTONES DE ACCION -->
        <div id="botonesInternos">
          <div>
            <a href="form 3-1-1 nueva metrica.html" ><img class="boton" src="img/metricas/Nueva metrica.jpg" alt="Nueva metrica"></a>
            <a href="form 3-1-2 editar metrica.html" onclick="validacion_radio()"><img class="boton" src="img/metricas/Modificar metrica.jpg" alt="Modificar metrica"></a>
            <a href="form 3-1-3 eliminar metrica.html" onclick="validacion_radio()"><img class="boton" src="img/metricas/Eliminar metrica.jpg" alt="Eliminar metrica"></a>
          </div>
          <div id="contenedorLinea">
            <input type="text" name="" id="lineaBotones">
          </div>
        </div>
        <!-- TABLAS -->
        <div id="tablas">
          <div id="tablaUno">
            <table>
              <thead>
                <tr>
                  <th class="tamanioUno"><input type="checkbox" name="" id="" disabled></th>
                  <th class="tamanioDos">Unidad</th>
                </tr>
              </thead>
              <tbody>

              <?php 
                $consultaSubcategorias = "SELECT * from tblunidadmetrica where catUnidad = 'Unidad'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioPetreos" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idunidadmetrica"];?>" name="idSubCat"><?php echo $fila["nomUnidadMetrica"];?></td>
                  </tr>
                  <?php

                }
                ?>
                
              </tbody>
            </table>
          </div>
          <div id="tablaDos">
            <table>
              <thead>
                <tr>
                  <th class="tamanioUno"><input type="checkbox" name="" id="" disabled></th>
                  <th class="tamanioDos">Longitud</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $consultaSubcategorias = "SELECT * from tblunidadmetrica where catUnidad = 'Longitud'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioPetreos" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idunidadmetrica"];?>" name="idSubCat"><?php echo $fila["nomUnidadMetrica"];?></td>
                  </tr>
                  <?php

                }
                ?>
              </tbody>
            </table>
          </div>
          <div id="tablaTres">
            <table>
              <thead>
                <tr>
                  <th class="tamanioUno"><input type="checkbox" name="" id="" disabled></th>
                  <th class="tamanioDos">Area</th>
                </tr>
              </thead>
              <?php 
                $consultaSubcategorias = "SELECT * from tblunidadmetrica where catUnidad = 'Area'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioPetreos" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idunidadmetrica"];?>" name="idSubCat"><?php echo $fila["nomUnidadMetrica"];?></td>
                  </tr>
                  <?php

                }
                ?>
              </tbody>
            </table>
          </div>
          <div id="tablaCuatro">
            <table>
              <thead>
                <tr>
                  <th class="tamanioUno"><input type="checkbox" name="" id="" disabled></th>
                  <th class="tamanioDos">Peso</th>
                </tr>
              </thead>
              <?php 
                $consultaSubcategorias = "SELECT * from tblunidadmetrica where catUnidad = 'Peso'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioPetreos" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idunidadmetrica"];?>" name="idSubCat"><?php echo $fila["nomUnidadMetrica"];?></td>
                  </tr>
                  <?php

                }
                ?>
              </tbody>
            </table>
          </div>
          <div id="tablaCinco">
            <table>
              <thead>
                <tr>
                  <th class="tamanioUno"><input type="checkbox" name="" id="" disabled></th>
                  <th class="tamanioDos">Volumen</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $consultaSubcategorias = "SELECT * from tblunidadmetrica where catUnidad = 'Volumen'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioPetreos" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idunidadmetrica"];?>" name="idSubCat"><?php echo $fila["nomUnidadMetrica"];?></td>
                  </tr>
                  <?php

                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- BOTONES -->
        <div class="botones">
          <a href="inventario.html"><input type="button" value="Aceptar" class="boton"></a>
          <a href="inventario.html"><input type="button" value="Cancelar" class="boton"></a>
        </div>
      </form>
    </div> 
    <script src="js/form 3-1 metricas.js"></script>
  </body>
</html>