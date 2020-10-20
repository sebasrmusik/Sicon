<!DOCTYPE html>
<html lang="es">
<head>
  <?php 
    $conexion = mysqli_connect('localhost', 'root', '', 'sicondb');
  ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subcategorias</title>
    <link rel="icon" type="image" href="img/general/favicon.png">
    <link rel="stylesheet" href="css/c form 2-1 ppal subcategorias y 3-1 ppal metricas.css">
</head>
<body>
    <div class="contenedor">
      <form action="" class="form">
        <!-- TITULO -->
        <h2>Categorias y Subcategorias</h2>  
        <!-- BOTONES DE ACCION -->
        <div id="botonesInternos">
          <div>
            <a href="form 2-1-1 nueva subcategoria.html"><img class="boton" src="img/categorias/Nueva subcategoria.jpg" alt="Nueva subcategoria"></a>
            <a href="form 2-1-2 editar subcategoria.html" onclick="validacion_radio()"><img class="boton" src="img/categorias/Modificar subcategoria.jpg" alt="Modificar subcategoria"></a>
            <a href="php/eliminarSubCat.php" onclick="validacion_radio()"><img class="boton" src="img/categorias/Eliminar subcategoria.jpg" alt="Eliminar subcategoria"></a>
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
                  <th class="tamanioDos">Petreos</th>
                </tr>
              </thead>
              <tbody>

                <?php 
                $consultaSubcategorias = "SELECT * from tblsubcategorias where idCategoria = '1'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioPetreos" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idSubcategoria"];?>" name="idSubCat"><?php echo $fila["nomSubcategoria"];?></td>
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
                  <th class="tamanioDos">Arcillas</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $consultaSubcategorias = "SELECT * from tblsubcategorias where idCategoria = '2'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioArcillas" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idSubcategoria"];?>" name="idSubCat"><?php echo $fila["nomSubcategoria"];?></td>
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
                  <th class="tamanioDos">Metalicos</th>
                </tr>
              </thead>
              <?php 
                $consultaSubcategorias = "SELECT * from tblsubcategorias where idCategoria = '3'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioMetalicos" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idSubcategoria"];?>" name="idSubCat"><?php echo $fila["nomSubcategoria"];?></td>
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
                  <th class="tamanioDos">Organicos</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $consultaSubcategorias = "SELECT * from tblsubcategorias where idCategoria = '4'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioOrganicos" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idSubcategoria"];?>" name="idSubCat"><?php echo $fila["nomSubcategoria"];?></td>
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
                  <th class="tamanioDos">Sinteticos</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $consultaSubcategorias = "SELECT * from tblsubcategorias where idCategoria = '5'";
                $ejecucion = mysqli_query($conexion, $consultaSubcategorias);

                while($fila = mysqli_fetch_array($ejecucion)){
                  ?>
                  <tr class="cebra">
                    <td><input type="radio" name="radioSinteticos" id=""></td>
                    <td><input type="hidden" value="<?php echo $fila["idSubcategoria"];?>" name="idSubCat"><?php echo $fila["nomSubcategoria"];?></td>
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
    <script src="js/form 2-1 subcategorias.js"></script>
  </body>
</html>