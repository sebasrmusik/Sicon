<!DOCTYPE html>
<html lang="es">
<?php 
  $conexion = mysqli_connect('localhost', 'root', '', 'sicondb') or die ("Error al conectar con la base de datos");
?>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestion de usuario</title>
    <link rel="icon" type="image" href="img/general/favicon.png">
    <link rel="stylesheet" href="css/gestion de usuarios.css" />
    <link rel="stylesheet" href="css/inputs eliminar usuario.css">
    <link rel="stylesheet" href="css/form eliminar rol.css">
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
                <li><a href="../modulo inventario/inventario.html">Inventario</a></li>
                <li><a href="../modulo gestion de usuario/gestion de usuarios.html">Gestion de usuario</a></li>
                <li><a href="../modulo gestion de inventario/gestion inventario proveedor.html">Gestion de Inventario</a></li>
                
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
            <a href="#modal_roles_y_privilegios"><img class="boton" src="img/general/1.png" alt="Roles y privilegios"></a>
            <a href="#modal_crear_usuario"><img class="boton" src="img/general/2.png" alt="Crear"></a>
            <a href="#modal_actualizar_datos"><img class="boton" src="img/general/3.png" alt="Modificar"></a>
            <a href="#modal_cambiar_contraseña"><img class="boton" src="img/general/4.png" alt="Cambiar contraseña"></a>
            <a href="#modal_deshabilitar_usuarios" onclick="return validarEliminarUsuario()"><img class="boton" src="img/general/5.png" alt="Deshabilitar usuario"></a>
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
                    <th class="tamanioTres"><input type="radio" name="" id="" disabled></th>
                    <th class="tamanioTres">Id</th>
                    <th class="tamanioUno">Nombre de usuario</th>
                    <th class="tamanioDos">Rol</th>
                    <th class="tamanioDos">Cedula</td>
                    <th class="tamanioUno">Nombre</th>
                    <th class="tamanioDos">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $consultaUsuarios = "SELECT * from tblusuariossistema";
                    $ejecucion = mysqli_query($conexion, $consultaUsuarios);

                    $idUsuario = "";
                    $idRol = "";
                    $nombreIngreso = "";
                    $rolusUsario = "";
                    $cedulaUsuario = "";
                    $nombreUsuario = "";
                    
                    while ($filaUsuarios = mysqli_fetch_array($ejecucion)) {
                      //Consulta Rol
                      $idUsuario = $filaUsuarios["idUsuario"];
                      $cedulaUsuario = $filaUsuarios["cedulaUsuario"];
                      $nombreUsuario = $filaUsuarios["nombresUsuario"] . " " . $filaUsuarios["apellidosUsuario"];
                      $consultaRoles = "SELECT * from tblusuariosroles where idUsuario = '$idUsuario'";
                      $resultadoRoles = mysqli_query($conexion, $consultaRoles);
                      while ($filaRoles = mysqli_fetch_array($resultadoRoles)) {
                        $idRol = $filaRoles["idRol"];
                      }
                      $consultaRoles = "SELECT * from tblroles where idRol = '$idRol'";
                      $resultadoRoles = mysqli_query($conexion, $consultaRoles);

                      while ($filaRoles = mysqli_fetch_array($resultadoRoles)) {
                        $rolUsuario = $filaRoles["nombreRol"];
                      }

                      $consultaIngreso = "SELECT * from tblusuariosinfoingreso where idUsuarioIngreso = '$idUsuario'";
                      $resultadoIngreso = mysqli_query($conexion, $consultaIngreso);
                      while ($filaIngreso = mysqli_fetch_array($resultadoIngreso)) {
                        $nombreIngreso = $filaIngreso["nombreUsuarioIngreso"];
                      }
                      ?>
                      <tr class="cebra">
                        <td class="stickyId"><input type="radio" name="radioUsuarios"></td>
                        <td><input type="hidden" name="idUsuario[]" value="<?php echo $idUsuario; ?>"><?php echo $idUsuario; ?></td>
                        <td><input type="hidden" name="nombreUsuario[]" value="<?php echo $nombreIngreso; ?>"><?php echo $nombreIngreso; ?></td>
                        <td><input type="hidden" name="rolUsuario[]" value="<?php echo $rolUsuario; ?>"><?php echo $rolUsuario; ?></td>
                        <td><input type="hidden" name="cedulaUsuario[]" value="<?php echo $cedulaUsuario; ?>"><?php echo $cedulaUsuario; ?></td>
                        <td><?php echo $nombreUsuario; ?></td>
                        <td>Habilitado</td>
                      </tr>
                      <?php
                    }
                  ?>
                  
                </tbody>
              </table>
            </div>
            <a href="#modal_generar_informe">
              <img class="exportar" src="img/general/6.png" alt="Gererar reporte" width="150px">
            </a>
          </fieldset>
        </form>
      </div>
      <!-- Modal Roles y privilegios -->
      <div id="modal_roles_y_privilegios" class="modal">
        <div class="contenedor">
          <div class="form">
            <h2>Rol y privilegios</h2>
            <div class="botonesAccion">
              <div id="tres">
                <a href="#modal_crear_rol"><input class="botonAccion" type="image" src="img/roles y privilegios/1.png" alt="Crear usuario" placeholder="Crear usuario" width="150px"></a>
                <a href="#modal_modificar_permisos" onclick="return validarModificarRol()"><input class="botonAccion" type="image" src="img/roles y privilegios/2.png" alt="Actualizar datos" placeholder="Actualizar datos" width="150px"></a>
                <a href="#modal_eliminar_rol" onclick="return validarEliminarRol()">
                <input class="botonAccion" id="eliminarRol" type="image" src="img/roles y privilegios/3.png" alt="Deshabilitar Eliminar" placeholder="Deshabilitar Eliminar" width="150px"></a>
              </div>
            </div>
            <div id="contenedorTabla">
              <table>
                <thead>
                  <tr>
                    <th class="tamanioTres"></th> 
                    <th class="tamanioTres">No</th>
                    <th class="tamanioDos">Rol</th>
                    <th class="tamanioUno">Generar informes</th>
                    <th class="tamanioUno">Crear E/S</th>
                    <th class="tamanioUno">Modificar E/S</th>
                    <th class="tamanioUno">Eliminar E/S</th>
                    <th class="tamanioUno">Crear materiales</th>
                    <th class="tamanioUno">Modificar materiales</th>
                    <th class="tamanioUno">Eliminar materiales</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $consultaRoles = "SELECT * from tblroles";
                    $consulta = mysqli_query($conexion, $consultaRoles);
                    
                    while ($fila = mysqli_fetch_array($consulta)) {
                      $idRol = $fila["idRol"];
                      $nombreRol = $fila["nombreRol"];

                      ?>
                      <tr class="cebra">
                        <td class="stickyId"><input type="radio" name="radioRoles" id=""></td>
                        <td><input type="hidden" name="rolId[]" value="<?php echo $idRol;?>"><?php echo $idRol;?></td>
                        <td><input type="hidden" name="rolNombre[]" value="<?php echo $nombreRol; ?>"><?php echo $nombreRol; ?></td>
                        <td><input type="checkbox"  name="generarInformes" id="" onclick="return false" <?php echo ($fila['generarInformes'] == "1" ? "checked" : "")?>></td>
                        <td><input type="checkbox"  name="crearEyS" id="" onclick="return false" <?php echo ($fila['crearEyS'] == "1" ? "checked" : "")?>></td>
                        <td><input type="checkbox"  name="modificarEyS" id="" onclick="return false" <?php echo ($fila['modificarEyS'] == "1" ? "checked" : "")?>></td>
                        <td><input type="checkbox"  name="eliminarEyS" id="" onclick="return false" <?php echo ($fila['eliminarEyS'] == "1" ? "checked" : "")?>></td>
                        <td><input type="checkbox"  name="crearMateriales" id="" onclick="return false" <?php echo ($fila['crearMateriales'] == "1" ? "checked" : "")?>></td>
                        <td><input type="checkbox"  name="modificarMateriales" id="" onclick="return false" <?php echo ($fila['modificarMateriales'] == "1" ? "checked" : "")?>></td>
                        <td><input type="checkbox" name="eliminarMateriales" id="" onclick="return false" <?php echo ($fila['eliminarMateriales'] == "1" ? "checked" : "")?>></td>
                      </tr>
                      <?php
                    }
                  ?>
                </div>
              </table>
            </div>
            <div class="roles_y_privilegios_botones">
              <a href="#"><input type="button" value="Cancelar" class="boton"/></a>
            </div>
          </div>
        </div>
      </div>
      
        <!-- Modal crear rol -->

        <div id="modal_crear_rol" class="modal">
          <div class="contenedor">
            <form action="php/crearRol.php" class="form" onsubmit="return crear_rol_validacion()" method="post">
              <h2>Crear rol</h2>  
              <h3>Datos del rol</h3>
              <div class="formulario1">
                <div class="etiquetas">
                  <label for="nombreRol">Rol*</label>
                </div>
                <div class="inputs">
                  <input type="text" name="nombreRol" id="nombreRol" />
                </div>
              </div>
              <h3>Atributos</h3>
              <div class="formulario2">
                <div>
                  <input
                  type="checkbox"
                  name="check1cr"
                  id="check1cr"
                  />
                  <label for="check1cr" class="espacio">Generar informes</label>
                </div>
                <div>
                  <input
                  type="checkbox"
                  name="check2cr"
                  id="check2cr"
                  class="espacio"
                  class="izquierda"
                  />
                  <label for="check2cr" class="espacio">Crear E/S</label>
                </div>
                <div>
                  <input
                  type="checkbox"
                  name="check3cr"
                  id="check3cr"
                  class="espacio"
                  class="izquierda"
                  />
                  <label for="check3cr" class="espacio">Modificar E/S</label>
                </div>
                <div>
                  <input
                  type="checkbox"
                  name="check4cr"
                  id="check4cr"
                  class="espacio"
                  class="izquierda"
                  />
                  <label for="check4cr" class="espacio">Eliminar E/S</label>
                </div>
                <div>
                  <input
                  type="checkbox"
                  name="check5cr"
                  id="check5cr"
                  class="espacio"
                  class="izquierda"
                  />
                  <label for="check5cr" class="espacio">Crear producto</label>
                </div>
                <div>
                  <input
                  type="checkbox"
                  name="check6cr"
                  id="check6cr"
                  class="espacio"
                  class="izquierda"
                  />
                  <label for="check6cr" class="espacio">Modificar producto</label>
                </div>
                <div>
                  <input
                  type="checkbox"
                  name="check7cr"
                  id="check7cr"
                  class="espacio"
                  class="izquierda"
                  />
                  <label for="check7cr" class="espacio">Eliminar producto</label>
                </div>
                </div>
                <div class="botones">
                <input type="submit" value="Crear" class="boton" name="crearRol"/>
                <a href="#modal_roles_y_privilegios"><input type="button" value="Cancelar" class="boton"/></a>
              </div>
            </form>
          </div>
        </div>

        <!-- Modal modificar permisos -->

        <div id="modal_modificar_permisos" class="modal">
          <div class="contenedor">
            <form action="php/modificarRol.php" class="form" onsubmit="return modificar_permisos_validacion()" method="post">
              <h2>Actualizar Rol</h2>  
              <h3>Datos del rol</h3>
                <div class="formulario1">
                  <div class="etiquetas">
                    <label for="nombreRol">Nombre*</label>
                  </div>
                  <div class="inputs">
                    <input type="text" name="nombreRolModificar" id="nombreRolModificar" readonly>
                    <input type="hidden" name="idRolModificar" id="idRolModificar" >
                  </div>
                </div>
                <h3>Atributos</h3>
                <div class="formulario2">
                  <div>
                    <input
                    type="checkbox"
                    name="check1mp"
                    id="check1mp"
                    />
                    <label for="check1mp" class="espacio">Generar informes</label>
                  </div>
                  <div>
                    <input
                    type="checkbox"
                    name="check2mp"
                    id="check2mp"
                    class="espacio"
                    class="izquierda"
                    />
                    <label for="check2mp" class="espacio">Crear E/S</label>
                  </div>
                  <div>
                    <input
                    type="checkbox"
                    name="check3mp"
                    id="check3mp"
                    class="espacio"
                    class="izquierda"
                    />
                    <label for="check3mp" class="espacio">Modificar E/S</label>
                  </div>
                  <div>
                    <input
                    type="checkbox"
                    name="check4mp"
                    id="check4mp"
                    class="espacio"
                    class="izquierda"
                    />
                    <label for="check4mp" class="espacio">Eliminar E/S</label>
                  </div>
                  <div>
                    <input
                    type="checkbox"
                    name="check5mp"
                    id="check5mp"
                    class="espacio"
                    class="izquierda"
                    />
                    <label for="check5mp" class="espacio">Crear producto</label>
                  </div>
                  <div>
                    <input
                    type="checkbox"
                    name="check6mp"
                    id="check6mp"
                    class="espacio"
                    class="izquierda"
                    />
                    <label for="check6mp" class="espacio">Modificar producto</label>
                  </div>
                  <div>
                    <input
                    type="checkbox"
                    name="check7mp"
                    id="check7mp"
                    class="espacio"
                    class="izquierda"
                    />
                    <label for="check7mp" class="espacio">Eliminar producto</label>
                  </div>
                </div>
                <div class="modificar_permisos_botones">
                <input type="submit" value="Actualizar" class="boton" name="modificarRol"/>
                <a href="#modal_roles_y_privilegios" onclick="return reiniciarValoresModificarRol(true)"><input type="button" value="Cancelar" class="boton"/></a>
              </div>
            </form>
          </div>
        </div>

        <!-- Modal eliminar rol -->

        <div id="modal_eliminar_rol" class="modal">
          <div class="contenedor">
            <form class="form" method="post" action="php/eliminarRol.php">
              <h2>Eliminar Rol</h2>
              <div class="formulario1">
                <p id="pregunta">Desea eliminar el rol seleccionado?</p>
                <p class="p">Nombre del rol</p>
                <input type="text" name="nombreRolEliminar" id="nombreRolEliminar" class="eliminar">
                <p class="p">Numero</p>
                <input type="text" name="numRolEliminar" id="numRolEliminar" class="eliminar">
                <div class="inputs">
                  <div>
                    <input type="checkbox" name="" id="eliminar" checked>
                    <label for="eliminar"> Eliminar </label>
                  </div>
                </div>
              </div>
              <div class="botones">
                <input type="submit" value="Eliminar" class="boton" name="eliminarRol"/>
                <a href="#modal_roles_y_privilegios" onclick="return borrarDatosEliminar()"><input type="button" value="Cancelar" class="boton"/></a>
              </div>
            </form>
          </div>
        </div>

      <!-- Modal Creación de usuarios -->

      <div id="modal_crear_usuario" class="modal">
        <div class="contenedor">
          <form action="php/crearUsuario.php" class="form" onsubmit="return validacion_crear_usuario()" method="post">
            <h2>Creacion de usuario</h2>
            <?php 
              $idNuevoUsuario = "";
              $consultaUsuarios = "SELECT * from tblusuariossistema";
              $resultado = mysqli_query($conexion, $consultaUsuarios);

              while ($fila = mysqli_fetch_array($resultado)) {
                $idNuevoUsuario = $fila["idUsuario"];
              }
              $idNuevoUsuario++;
            ?>
            <div class="derecha">
              <label for="id" id="id">ID:</label>
              <input type="text" name="idNuevoUsuario" id="idNuevoUsuario" value="<?php echo $idNuevoUsuario;?>" readonly>
            </div>
            <h3>Datos del empleado</h3>
            <div class="formulario1">
              <div class="etiquetas">
                <label for="cedulacu">Cedula *</label>
                <label for="nombrescu">Nombres *</label>
                <label for="apellidoscu">Apellidos *</label>
                <label for="direccioncu">Direccion *</label>
                <label for="departamentoscu">Departamentos *</label>
                <label for="municipioscu">Municipios *</label>
                <label for="tel1cu">Telefono 1 *</label>
                <label for="tel2cu">Telefono 2 </label>
                <label for="emailcu">e-Mail *</label>
              </div>
              <div class="inputs">
                <input type="text" name="cedulacu" id="cedulacu">
                <input type="text" name="nombrescu" id="nombrescu">
                <input type="text" name="apellidoscu" id="apellidoscu">
                <input type="text" name="direccioncu" id="direccioncu">
    
                <select name="departamentoscu" id="departamentoscu">
                  <option value="">Seleccione una opción</option>
                  <?php 
                    $consultaDep = "SELECT * FROM tbldepartamento";
                    $resultado = mysqli_query($conexion, $consultaDep) or die ("Error al conectar con la tabla Departamentos");
                    while ($fila = mysqli_fetch_array($resultado)) {
                      ?>
                      <option value="<?php echo $fila["nomDepartamento"] ?>"><?php echo $fila["nomDepartamento"] ?></option>
                      <?php
                    }
                  ?>
                </select>
                
                <select name="municipioscu" id="municipioscu">
                  <option value="">Seleccione una opcion</option>
                    <?php 
                      $consultaMun = "SELECT * from tblmunicipio";
                      $resultado = mysqli_query($conexion, $consultaMun);

                      while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila["nomMunicipio"];?>"><?php echo $fila["nomMunicipio"];?></option>
                        <?php
                      }
                    ?>
                </select>
    
                <input type="tel" name="tel1cu" id="tel1cu">
                <input type="tel" name="tel2cu" id="tel2cu">
                <input type="email" name="emailcu" id="emailcu">
                </select>
              </div>
            </div>
            <h3>Datos de usuario</h3>
            <div class="formulario2">
              <div class="etiquetas">
                <label for="nombrecu">Nombre de usuario *</label>
                <label for="contra1cu">Contraseña *</label>
                <label for="contra2cu">Confirmar contraseña *</label>
                <label for="rolcu">Rol *</label>
              </div>
              <div class="inputs">
                <input type="text" name="nombreincu" id="nombrecu">
                <input type="password" name="contracu" id="contra1cu">
                <input type="password" name="" id="contra2cu">
                <select name="rolcu" id="rolcu">
                  <option value="">Seleccione una opción</option>
                  <?php 
                    $consultaRoles = "SELECT * from tblroles";
                    $resultado = mysqli_query($conexion, $consultaRoles);

                    while ($fila = mysqli_fetch_array($resultado)) {
                      ?>
                      <option value="<?php echo $fila["nombreRol"];?>"><?php echo $fila["nombreRol"];?></option>
                      <?php
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="crear_usuario_botones">
              <input type="submit" value="Crear usuario" class="boton" name="crearUsuario">
              <a href="#"><input type="button" value="Cancelar" class="boton"></a>
            </div>
          </form>
        </div>
      </div>

      <!-- Modal actualizar datos-->

      <div id="modal_actualizar_datos" class="modal">
        <div class="contenedor">
          <form action="" class="form" onsubmit="return validacion_actualizar_datos()">
            <h2>Actualizacion de usuario</h2>
            <div class="derecha">
              <label for="id">ID:</label>
              <input type="text" name="" id="id" placeholder="004" readonly>
            </div>
            <h3>Datos del empleado</h3>
            <div class="formulario1">
              <div class="etiquetas">
                <label for="cedulaad">Cedula *</label>
                <label for="nombresad">Nombres *</label>
                <label for="apellidosad">Apellidos *</label>
                <label for="direccionad">Direccion *</label>
                <label for="departamentoad">Departamento *</label>
                <label for="municipioad">Municipio *</label>
                <label for="tel1ad">Telefono 1 *</label>
                <label for="tel2ad">Telefono 2</label>
                <label for="emailad">e-Mail *</label>
              </div>
              <div class="inputs">
                <input type="text" name="cedula" id="cedulaad" >
                <input type="text" name="nombres" id="nombresad">
                <input type="text" name="apellidos" id="apellidosad">
                <input type="text" name="direccion" id="direccionad">
                <select name="" id="departamentoad">
                  <option value="">Seleccione una opción</option>
                  <option value="Cundinamarca">Cundinamarca</option>
                  <option value="Antioquia">Antioquia</option>
                  <option value="Santander">Santander</option>
                </select>
                <select name="municipio" id="municipioad">
                    <option value="">Seleccione una opción</option>
                    <option value="Fusagasuga">Fusagasuga</option>
                    <option value="Silvania">Silvania</option>
                    <option value="Pasca">Pasca</option>
                </select>
                <input type="tel" name="tel1" id="tel1ad">
                <input type="tel" name="tel2" id="tel2ad">
                <input type="email" name="email" id="emailad">
                
                
              </div>
            </div>
            <div class="actualizar_datos_botones">
              <input type="submit" value="Actualizar datos" class="boton">
              <a href="#"><input type="button" value="Cancelar" class="boton"></a>
            </div>
          </form>
        </div>
      </div>

      <!-- Modal Cambiar Contraseña -->

      <div id="modal_cambiar_contraseña" class="modal">
        <div class="contenedor">
          <form action="" class="form" onsubmit="return validacion_cambiar_contraseña()">
            <h2>Cambio de contraseña</h2>
            <div class="derecha">
              <label for="incremental" class="derecha">ID</label>
              <input type="text" name="" id="incremental" value="000004" disabled size="3" class="derecha"/>
            </div>
            <div class="nombres_de_usuario">
              <div class="etiquetas">
                <label for="nombres de usuario">Nombres de usuario *</label>
                <br /><br />
                <label for="contraseña">Contraseña *</label>
                <br /><br />
                <label for="confirmar_contraseña">Confirmar Contraseña *</abel>
                  <br /><br />
                <label for="tipo_usuario">Tipo de Usuario o Rol*</label>
                <br /><br />
              </div>
              <div class="inputs">
                <input type="text" name="nombres_de_usuario" id="nombres_de_usuario" value="Gerencia_valencia" disabled class="der"
                /><br /><br />
                <input type="password" name="contraseña" id="contraseña" class="der"
                /><br /><br />
                <input
                  type="password" name="confirmar_contraseña" id="confirmar_contraseña" class="der"
                /><br /><br />
                <select name="tipo_usuario" id="tipo_usuario" disabled>
                  <option value="">Gerente</option>
                </select>
                <br /><br />
              </div>
            </div>
            <div class="cambiar_contraseña_botones">
              <input type="submit" value="Cambiar" class="boton" />
              <a href="#"><input type="button" value="Cancelar" class="boton" /></a>
            </div>
          </form>
        </div>
      </div>

      <!-- DESHABILITAR/ELIMINAR USUAIRO -->

      <div id="modal_deshabilitar_usuarios" class="modal">
        <div class="contenedor">
          <form class="form" onsubmit="return validacion_deshabilitar_usuario()" method="post" action="php/eliminarUsuario.php">
            <h2>Deshabilitar un usuario</h2>
            <div class="formulario1">
              <p id="pregunta">¿Desea deshabilitar el usuario seleccionado?</p>
              <p class="p">Nombre de usuario:</p>
              <input type="text" name="usuarioEliminar" class="eliminar" id="usuarioEliminar">
              <p class="p">Nombre del rol:</p>
              <input type="text" name="rolEliminar" class="eliminar" id="rolEliminar" >
              <input type="hidden" name="idUsuarioEliminar" id="idUsuarioEliminar">
              <div class="inputs">
                <div>
                  <input type="checkbox" name="dehabilitar_usuario" id="deshabilitar" checked>
                  <label for="deshabilitar"> Deshabilitar </label>
                </div>
                
              </div>
            </div>
            <div class="deshabilitar_usuario_botones">
              <input type="submit" value="Proceder" class="boton" name="eliminarUsuario"/>
              <a href="#" onclick="return reiniciarDatos()"><input type="button" value="Cancelar" class="boton"/></a>
            </div>
          </form>
        </div>
      </div>

      <!-- GENERAR REPORTE -->

      <div id="modal_generar_informe" class="modal">
        <div class="contenedor">
          <form class="form" onsubmit="return validacion_generar_informe()">
            <h2>Exportar</h2>
            <h3>Generar reporte</h3>
            <div class="formulario1">
              <div class="contenido">
                <div class="etiquetas">
                  <label for="nombre">Nombre del documento</label>
                  <label for="directorio">Directorio</label>
                </div>
                <div class="inputs">
                  <input type="text" name="1" id="nombre">
                  <input type="text" name="2" id="directorio">
                </div>
              </div>
              <div class="checkbox">
                <div>
                  <p>Tipo de documento </p>
                </div>
                <div>
                  <input type="radio" name="exportar" id="excel">
                  <label for="excel"> Excel </label>
                </div>
                <div>
                  <input type="radio" name="exportar" id="pdf">
                  <label for="pdf"> PDF </label>
                </div>
              </div>
            </div>

            <h3>Tipo de reporte</h3>
            <div class="formulario2">
              <div class="contenido">
                <div id="seccionUno">
                  <div class="inputs">
                    <input type="checkbox" name="general" id="general" onclick="uncheck(1)">
                    <input type="checkbox" name="estadoHabilitado" id="estadoHabilitado" onclick="uncheck(2)">
                    <input type="checkbox" name="estadoDeshabilitado" id="estadoDeshabilitado" onclick="uncheck(3)">
                  </div>
                  <div class="etiquetas">
                    <label for="general">Reporte general</label>
                    <label  for="estadoHabilitado">Filtrar por el estado habilitado</label>
                    <label  for="estadoDeshabilitado">Filtrar por el estado deshabilitado</label>
                  </div>
                </div>
                <div id="seccionDos">
                  <label  for="rol">Filtrar por rol</label>
                  <select name="" id="seleccionarRol" onchange="uncheck(4)">
                    <option value="">Seleccione una opcion</option>
                    <option value="Gerente">Gerente</option>
                    <option value="Aux de gerencia">Aux de gerencia</option>
                    <option value="Jefe de bodega">Jefe de bodega</option>
                    <option value="Aux de bodega">Aux de bodega</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="generar_informe_botones">
              <input type="submit" value="Exportar" class="boton" />
              <a href="#"><input type="button" value="Cancelar" class="boton"/></a>
            </div>
          </form>
        </div>
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
                  <img id="logoRedes" src="img/general/redes.png" alt="redes.png"  />
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
            Sicon inc International | Cra 9 No 7 a 16(Fusagasuga) COLOMBIA |
            servicioalcliente@sicon.com | +57 3115701088
          </p>
        </footer>
      </div>
    </div>
  </body>
  <script src="js/crear rol.js"></script>
  <script src="js/modificar permisos.js"></script>
  <!-- <script src="js/eliminar rol.js"></script> -->
  <script src="js/crear usuario.js"></script>
  <script src="js/actualizar datos.js"></script>
  <script src="js/cambiar contraseña.js"></script>
  <script src="js/generar informe.js"></script>
  <script src="js/eliminarUsuarioPrueba.js"></script>
  <script src="js/validacionModificarRol.js"></script>
</html>
