<?php
    require_once('../Modelo/usuario.php');
    require_once('../../General/Helpers/helpers.php');

    $modeloUsuario = new usuarios();
    $usuarios = $modeloUsuario->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - SIT Contactamos</title>
    <link rel="shortcut icon" href="../../Public/imagenes/logoContactamos02.png">
    <link rel="stylesheet" href="../../Public/css/estilo.css">
    <link rel="stylesheet" href="../../Public/css/normalize.css">
    <link rel="stylesheet" href="../../Public/css/tabla.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/768de8c2f5.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="noopener"></script>
</head>
<body>
    <div class="navegacion--none" id="nav">
        <nav class="navegacion">
            <div class="usuario">
                <p class="texto--usuario no-margin"><i class='fas fa-user-alt'></i> Jhon Barros Lozano</p>
                <p class="texto--usuario no-margin"><a class="enlace--usuario" href=""><i class='fa fa-power-off color'></i> Cerrar sesión</a></p>
            </div>
            <a class="navegacion__enlace" href="../../Inicio/Vista/index.php"><i class="fas fa-home"></i> Inicio</a>
            <a class="navegacion__enlace" href="../../Conocenos/Vista/index.php"><i class="fas fa-search-location"></i> Conócenos</a>
            <a class="navegacion__enlace" href="../../Seleccion/Vista/index.php"><i class="fas fa-user-check"></i> Selección de personal</a>
            <a class="navegacion__enlace" href="../../Ingreso/Vista/index.php"><i class="fas fa-user-plus"></i> Ingreso de personal</a>
            <a class="navegacion__enlace" href="../../Nomina/Vista/index.php"><i class="fas fa-hand-holding-usd"></i> Gestión de Nómina</a>
            <a class="navegacion__enlace" href="../../Retiro/Vista/index.php"><i class="fas fa-user-minus"></i> Retiro de personal</a>
            <a class="navegacion__enlace" href="../../Seguridad/Vista/index.php"><i class="fas fa-user-shield"></i> Seguridad en el trabajo</a>
            <a class="navegacion__enlace" href="../../Talento/Vista/index.php"><i class="fas fa-users"></i> Talento humano</a>
            <a class="navegacion__enlace" href="../../Buzon/Vista/index.php"><i class="fas fa-mail-bulk"></i> Buzón de contacto</a>
            <p class="navegacion__parrafo"><i class="fa fa-cogs"></i>Administración</p>
            <a class="navegacion__enlace" href="../../Trabajador/Vista/index.php"><i class="fa fa-user"></i> Trabajadores</a>
            <a class="navegacion__enlace active" href="../../Usuarios/Vista/index.php"><i class="fa fa-user"></i> Usuarios</a>
        </nav>
    </div>

    <section>
        <div class="titulo">
            <h1 class="titulo--conocenos">Usuarios</h1>
        </div>

        <div class="menu menu--none">
            <a href="Javascript:void()" onclick="abrirNav()"> <i class="fa fa-navicon icono"></i> </a>
        </div>

        <main class="contenedor">
            <div class="contenedor__bloque--conocenos">
                <div class="contenedor__texto--contactamos">
                    <input type="search" placeholder="Buscar..." class="buscar" onchange="filtrar(this.value)" value="">
                    
                    <a href="Javascript:void()" onclick="abrirFlotante('Usuario')"><i class="fa fa-plus iconoGris"></i></a>
                    <div class="crud">
                        <table class="tabla">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th class="anchoa2">Fecha de registro</th>
                                    <th class="anchoa2">Nombre completo</th>
                                    <th class="anchoa2">Correo</th>
                                    <th class="anchoa2">Usuario</th>
                                    <th class="anchoa2">Perfil</th>
                                    <th class="anchoa2">Estado</th>
                                    <th class="anchoa2">Acciones</th>
                                </tr>
                            </thead>
                
                            <tbody>
                            <?php         
                                if($usuarios != null){ 
                                    foreach($usuarios as $usuario){
                            ?>
                                <tr class="fila">
                                    <td><?php echo $usuario['id_usuario']; ?></td>
                                    <td class="center"><?php echo formatDate($usuario['fecha_registro']); ?></td>
                                    <td class="center"><?php echo $usuario['nombre_completo']; ?></td>
                                    <td class="center"><?php echo $usuario['correo']; ?></td>
                                    <td class="center"><?php echo $usuario['usuario']; ?></td>
                                    <td class="center"><?php echo $usuario['perfil']; ?></td>
                                    <td class="center"><?php echo $usuario['estado']; ?></td>
                                    <td class="center">
                                        <a href="Javascript:void()" onclick="abrirFlotanteEditarUsuario(<?php echo $usuario['id_usuario']; ?>)" class="link" title="Editar"><i class="fa fa-pencil color"></i></a>
                                        <a href="Javascript:void()" onclick="abrirFlotanteEliminar(<?php echo $usuario['id_usuario']; ?>)" class="link" title="Eliminar"><i class="fas fa-trash-alt color"></i></a>
                                    </td>
                                </tr>
                            <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div id="flotanteUsuario" class="contenedor__bloque--conocenos form--none" >
                    <div onclick="this.parentNode.style.display='none'" class="formulario"></div>

                    <div class="form">
                        <?php
        
                            require_once('add.php');

                        ?>
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque--conocenos formulario-->

                  <!-- EDITAR -->

                <div id="flotanteEditarUsuario" class="contenedor__bloque--conocenos form--none" >
                    <div onclick="this.parentNode.style.display='none'" class="formulario"></div>

                    <div class="form">
                        <?php
                            require_once('edit.php');
                        ?>
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque--conocenos formulario-->

                <!-- ELIMINAR -->

                <div id="flotanteEliminar" class="contenedor__bloque--conocenos form--none" >
                    <div onclick="this.parentNode.style.display='none'" class="formulario"></div>

                    <div class="formEliminar">
                        <?php
                            require_once('delete.php');
                        ?>
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque--conocenos formulario-->
                
            </div>
        </main>
    </section>

    <section>
        <div class="asisTecnica">
            <div class="asisTitulo">
                <h2 class="contenedor__titulo--conocenos"><b>Asistencia Técnica</b></h2>
            </div>

            <div class="asistente">
                <p class="nomAsistente"><b>Carlos Vega</b></p>
                <p><i class='fa fa-envelope-open'></i>cvega@contactamos.com.co</p>
                <p><i class='fa fa-mobile'></i>301 2713798</p>
                <p><i class='fas fa-phone-alt'></i>3776363 Ext. 111</p>
            </div>
            
            <div class="asistente">
                <p class="nomAsistente"><b>Luis Rodriguez</b></p>
                <p><i class='fa fa-envelope-open'></i>comunicaciones@contactamos.com.co</p>
                <p><i class='fa fa-mobile'></i>300 2596939</p>
                <p><i class='fas fa-phone-alt'></i>3776363 Ext. 122</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>© 2021 - 2021 <a class="enlace__footer" target="_blank" href="https://contactamos.com.co/">Contactamos</a> - Todos los derechos reservados</p>
    </footer>

    <script src="../../Public/js/javascript.js"></script>
</body>
</html>