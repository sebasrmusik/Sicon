<!DOCTYPE html>
<html lang="es"> 
  <?php
    $conexion = mysqli_connect('localhost', 'root', '', 'sicondb');
  ?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventario</title>
    <link rel="icon" type="image" href="img/general/favicon.png">
    <link rel="stylesheet" href="css/inventario.css">
    <link rel="stylesheet" href="css/b form 1-3 eliminar articulo.css">
  </head>
  <body>
    <div class="contenedor">
      <!-- HEADER -->
      <div class="header">
        <header>
          <a href="#">
            <figure>
              <img src="img/general/sicon.png" alt="logo sicon" id="logoCabecera" />
            </figure>
          </a>
          <div id="tituloNav">
            <div id="contenedorH1Usuario">
              <h1>Inventario Eficiente</h1>
              <div id="iniciarSesion">
                <div id="contenedorUsuario">
                  <figure id="figAvatar">
                    <img id="avatar" src="img/general/avatar.png" alt="avatar" />
                  </figure>
                  <p>Administrador</p>
                  <a href="../../index.html">
                  <input type="button" value="Cerrar sesion"></a>
                </div>
              </div>
            </div>
            <nav id="nav1">
              <ul>
                <li><a href="../modulo inventario/Inventario.php">Inventario</a></li>
                <li><a href="../modulo gestion de usuario/gestion de usuarios.php">Gestion de usuario</a></li>
                <li><a href="../modulo gestion de inventario/gestion inventario proveedor.html">Gestion de Inventario</a></li>
                <!-- <li><a href="#">Informes</a></li> -->
              </ul>
            </nav>
          </div>
        </header>
        <input type="text" name="" id="linea">
      </div>
      <!-- BOTONES DE ACCION -->
      <div class="botones">
        <form action="" id="formBotones">
          <fieldset id="botonesInternos">
            <div>
              <a href="form 1-1 nuevo articulo.html"><img class="boton" src="img/inventario/Nuevo articulo.jpg" alt="Nuevo articulo"></a>
              <a href="form 1-2 editar articulo.html"><img class="boton" src="img/inventario/Modificar articulo.jpg" alt="Editar articulo"></a>
              <a href="#modal_eliminar_articulo"><img class="boton" src="img/inventario/Eliminar articulo.jpg" alt="Eliminar proveedor"></a>
              <a href="form 2-1 subcategorias.php"><img class="boton" src="img/inventario/Categorias y subcategorias.jpg" alt="Categorias y subcategorias"></a>
              <a href="form 3-1 metricas.php"><img class="boton" src="img/inventario/Unidades metricas.jpg" alt="Unidades metricas"></a>
              <a href="form 4 importar.html"><img class="boton" src="img/inventario/Importar desde excel.jpg" alt="Importar desde excel"></a>
            </div>
          </fieldset>
            <div id="contenedorLinea">
              <input type="text" name="" id="lineaBotones">
            </div>
        </form>
      </div>
      <!-- GRILLA -->
      <div class="grilla">
        <form>
          <fieldset>
            <input class="buscar" type="search" name="Buscar usuario" id="" placeholder="Buscar usuario" autocomplete="transaction-currency"/>
            <div id="contenedorTabla">
              <table>
                <thead>
                  <tr>
                    <th class="tamanioTres"><input type="radio" name="grillaInventario" id="" disabled></th> 
                    <th class="tamanioTres">Id</th>
                    <th class="tamanioUno">Nombre</th>
                    <th class="tamanioDos">Unidad de medida</th>
                    <th class="tamanioTres">Venci miento</td>
                    <th class="tamanioDos">Stock minimo</th>
                    <th class="tamanioDos">Stock maximo</th>
                    <th class="tamanioDos">Categoria</th>
                    <th class="tamanioDos">Subcategoria</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    $consultaArticulos = "SELECT * from tblproductos";
                    $resultado = mysqli_query($conexion, $consultaArticulos);

                    while ($fila =  mysqli_fetch_array($resultado)) {
                      
                    }
                  ?>
                  <!-- <tr class="cebra">
                    <td class="stickyId"><input type="radio" name="grillaInventario" id=""></td> 
                    <td>001</td>
                    <td>141516</td>
                    <td>Cemento Samper</td>
                    <td>Bulto</td>
                    <td>180</td>
                    <td>500</td>
                    <td>2000</td>
                    <td>Petreos</td>
                    <td>Cemento</td>
                  </tr>
                  <tr class="cebra">
                    <td class="stickyId"><input type="radio" name="grillaInventario" id=""></td> 
                    <td>002</td>
                    <td>141516</td>
                    <td>Cemento Samper</td>
                    <td>Bulto</td>
                    <td>180</td>
                    <td>500</td>
                    <td>2000</td>
                    <td>Petreos</td>
                    <td>Cemento</td>
                  </tr>
                  <tr class="cebra">
                    <td class="stickyId"><input type="radio" name="grillaInventario" id=""></td> 
                    <td>003</td>
                    <td>141516</td>
                    <td>Cemento Samper</td>
                    <td>Bulto</td>
                    <td>180</td>
                    <td>500</td>
                    <td>2000</td>
                    <td>Petreos</td>
                    <td>Cemento</td>
                  </tr>
                  <tr class="cebra">
                    <td class="stickyId"><input type="radio" name="grillaInventario" id=""></td> 
                    <td>004</td>
                    <td>141516</td>
                    <td>Cemento Samper</td>
                    <td>Bulto</td>
                    <td>180</td>
                    <td>500</td>
                    <td>2000</td>
                    <td>Petreos</td>
                    <td>Cemento</td>
                  </tr>
                  <tr class="cebra">
                    <td class="stickyId"><input type="radio" name="grillaInventario" id=""></td> 
                    <td>005</td>
                    <td>141516</td>
                    <td>Cemento Samper</td>
                    <td>Bulto</td>
                    <td>180</td>
                    <td>500</td>
                    <td>2000</td>
                    <td>Petreos</td>
                    <td>Cemento</td>
                  </tr>
                  <tr class="cebra">
                    <td class="stickyId"><input type="radio" name="grillaInventario" id=""></td> 
                    <td>006</td>
                    <td>141516</td>
                    <td>Cemento Samper</td>
                    <td>Bulto</td>
                    <td>180</td>
                    <td>500</td>
                    <td>2000</td>
                    <td>Petreos</td>
                    <td>Cemento</td>
                  </tr>
                  <tr class="cebra">
                    <td class="stickyId"><input type="radio" name="grillaInventario" id=""></td> 
                    <td>007</td>
                    <td>141516</td>
                    <td>Cemento Samper</td>
                    <td>Bulto</td>
                    <td>180</td>
                    <td>500</td>
                    <td>2000</td>
                    <td>Petreos</td>
                    <td>Cemento</td>
                  </tr>
                  <tr class="cebra">
                    <td class="stickyId"><input type="radio" name="grillaInventario" id=""></td> 
                    <td>008</td>
                    <td>141516</td>
                    <td>Cemento Samper</td>
                    <td>Bulto</td>
                    <td>180</td>
                    <td>500</td>
                    <td>2000</td>
                    <td>Petreos</td>
                    <td>Cemento</td>
                  </tr> -->
                </tbody>
              </table>
            </div>
            <a href="form 5 exportar.html">
              <img class="exportar" src="img/inventario/Exportar articulos.jpg" alt="Exportar articulos" width="150px">
            </a>
          </fieldset>
        </form>
      </div>
      <!-- FOOTER -->
      <div class="footer">
        <footer>
          <div id="seccionFooter">
            <nav class="navfooter" id="navFooter1">
              <ul>
                <a href="#"><li>Aviso legal</li></a>
                <a href="#"><li>Politicas de privacidad</li></a>
                <a href="#"><li>Politicas de calidad</li></a>
                <a href="#"><li>Politicas de cookies</li></a>
              </ul>
            </nav>
            <div class="imgFooter">
              <figure>
                <div id="seccionImg">
                  <img id="logoFooter" src="img/general/sicon.png" alt="Logo Sicon" />
                  <img id="logoRedes" src="img/general/redes.png" alt="Logo Redes.png"  />
                </div>  
              </figure>
            </div>
            <nav class="navfooter" id="navFooter2">
              <ul>
                <a href="#"><li>Sicon</li></a>
                <a href="#"><li>Blog</li></a>
                <a href="#"><li>PQR</li></a>
                <a href="#"><li>Contáctenos</li></a>
              </ul>
            </nav>
          </div>
          <p>
          Sicon inc International | Cra 9 No 7 a 16(Fusagasuga) COLOMBIA | servicioalcliente@sicon.com | +57 3115701088
          </p>
        </footer>
      </div>

      <div class="modal" id="modal_eliminar_articulo">
        <div class="contenedor">
          <form action="" class="form" onsubmit="return validacion_eliminar_articulo()">
            <h2>Eliminar Articulo</h2>
            <div class="formulario1">
              <p id="pregunta">Desea eliminar el articulo seleccionado?</p>
              <p class="p">Nombre del articulo:</p>
              <p>Cemento Samper</p>
              <p class="p">Codigo interno</p>
              <p>141516</p>
              <div class="inputs">
                <div>
                  <input type="checkbox" name="" id="eliminar" checked>
                  <label for="eliminar"> Eliminar </label>
                </div>
              </div>
            </div>
            <div class="botones">
              <input type="submit" value="Eliminar Articulo" class="boton" />
              <a href="#"><input type="button" value="Cancelar" class="boton"></a>
            </div>
          </form>
        </div>
        <script src="js/form 1-3 eliminar articulo.js"></script>
      </div>
    </div>
  </body>
</html>
