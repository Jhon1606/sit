<?php
require_once('../Modelo/ingreso.php');
require_once('../../General/Helpers/helpers.php');

$modeloIngreso = new ingreso();
$ingresos = $modeloIngreso->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de personal - SIT Contactamos</title>
    <link rel="shortcut icon" href="../../Public/imagenes/logoContactamos02.png">
    <link rel="stylesheet" href="../../Public/css/estilo.css">
    <link rel="stylesheet" href="../../Public/css/normalize.css">
    <link rel="stylesheet" href="../../Public/css/tabla.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/768de8c2f5.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="noopener"></script>
</head>

<body>

    <header class="header--ingreso">
        <div class="contenedor--header">
            <div class="flex--conocenos">
                <div class="menu menu--none">
                    <a href="Javascript:void()" onclick="abrirNav()"> <i class="fa fa-navicon icono"></i> </a>
                </div>

                <div class="contenedor--flex">
                    <a href="">
                        <img class="header--imagen" src="../../Public/imagenes/logoContactamos3.png" alt="">
                    </a>
                </div>

                <div class="contenedor--texto">
                    <h1 class="header--titulo-conocenos">Ingreso de Personal</h1>
                    <p class="header--texto--blanco w100 center">Es el proceso mediante el cual se contrata al personal
                        seleccionado por nuestros clientes, aplicando las validaciones y controles legales y definidos en el
                        acuerdo de servicio.</p>
                </div>
            </div>
        </div>
    </header>

    <div class="navegacion--none" id="nav">
        <nav class="navegacion">
            <div class="usuario">
                <p class="texto--usuario no-margin"><i class='fas fa-user-alt'></i> Jhon Barros Lozano</p>
                <p class="texto--usuario no-margin"><a class="enlace--usuario" href=""><i class='fa fa-power-off color'></i> Cerrar sesión</a></p>
            </div>
            <a class="navegacion__enlace" href="../../Inicio/Vista/index.php"><i class="fas fa-home"></i> Inicio</a>
            <a class="navegacion__enlace" href="../../Conocenos/Vista/index.php"><i class="fas fa-search-location"></i> Conócenos</a>
            <a class="navegacion__enlace" href="../../Seleccion/Vista/index.php"><i class="fas fa-user-check"></i> Selección de personal</a>
            <a class="navegacion__enlace active" href="../../Ingreso/Vista/index.php"><i class="fas fa-user-plus"></i> Ingreso de personal</a>
            <a class="navegacion__enlace" href="../../Nomina/Vista/index.php"><i class="fas fa-hand-holding-usd"></i> Gestión de Nómina</a>
            <a class="navegacion__enlace" href="../../Retiro/Vista/index.php"><i class="fas fa-user-minus"></i> Retiro de personal</a>
            <a class="navegacion__enlace" href="../../Seguridad/Vista/index.php"><i class="fas fa-user-shield"></i> Seguridad en el trabajo</a>
            <a class="navegacion__enlace" href="../../Talento/Vista/index.php"><i class="fas fa-users"></i> Talento humano</a>
            <a class="navegacion__enlace" href="../../Buzon/Vista/index.php"><i class="fas fa-mail-bulk"></i> Buzón de contacto</a>
            <p class="navegacion__parrafo"><i class="fa fa-cogs"></i>Administración</p>
            <a class="navegacion__enlace" href="../../Trabajador/Vista/index.php"><i class="fa fa-user"></i> Trabajadores</a>
            <a class="navegacion__enlace" href="../../Usuarios/Vista/index.php"><i class="fa fa-user"></i> Usuarios</a>
        </nav>

    </div>



    <section>
        <div class="titulo">
            <h1 class="titulo--conocenos">Información de contacto</h1>
        </div>

        <main class="contenedor">
            <div class="contenedor__bloque--conocenos">
                <div class="contenedor__grid--seleccion">
                    <div class="contacto center">
                        <div>
                            <img class="contacto--imagen center" src="../../Public/imagenes/Personal/zunellyPalomino.jpg" alt="">
                        </div>

                        <div class="contacto--informacion">
                            <p class="contacto--texto"><i class='fas fa-user-alt'></i> <b>Zunelly Palomino</b></p>
                            <p class="contacto--texto"><i class='fas fa-user-tie'></i> <b>Jefe de Contratación </b> </p>
                            <p class="contacto--texto"><i class='fas fa-city'></i> Oficina Barranquilla</p>
                            <p class="contacto--texto"><i class='fa fa-mobile'></i> <b>Cel:</b> 3114120474</p>
                            <p class="contacto--texto"><i class='fas fa-phone-alt'></i> <b>Tel:</b> 3776363 <b>Ext.</b> 104</p>
                            <p class="contacto--texto"><i class='fa fa-envelope-open'></i> <b>E-mail:</b> contratacionbq@contactamos.com.co </p>
                        </div>
                    </div>

                    <div class="contacto center">
                        <div>
                            <img class="contacto--imagen center" src="../../Public/imagenes/Personal/katherineRomo.jpg" alt="">
                        </div>

                        <div class="contacto--informacion">
                            <p class="contacto--texto"><i class='fas fa-user-alt'></i> <b>Katherine Romo</b></p>
                            <p class="contacto--texto"><i class='fas fa-user-tie'></i> <b>Jefe de Contratación </b> </p>
                            <p class="contacto--texto"><i class='fas fa-city'></i> Oficina Barranquilla</p>
                            <p class="contacto--texto"><i class='fa fa-mobile'></i> <b>Cel:</b> 3205623235</p>
                            <p class="contacto--texto"><i class='fas fa-phone-alt'></i> <b>Tel:</b> 8051592-93 <b>Ext.</b> 103</p>
                            <p class="contacto--texto"><i class='fa fa-envelope-open'></i> <b>E-mail:</b> kromo@contactamos.com.co </p>
                        </div>
                    </div> <!-- .contacto-->
                </div> <!-- .contenedor__grid--seleccion-->
            </div> <!--.contenedor__bloque--conocenos-->
        </main>
    </section>

    <section>
        <div class="titulo">
            <h1 class="titulo--conocenos">¿Qué hacer una vez que ha seleccionado a los candidatos?</h1>
        </div>

        <main class="contenedor">
            <div class="contenedor__bloque--conocenos">
                <div class="contenedor__texto--contactamos">
                    <p class="contenedor--texto--conocenos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                        pretium vel ante vel egestas. Vestibulum semper maximus dolor,
                        vehicula fermentum nulla tempor ut. Sed nec lectus non nisi
                        ultrices placerat sit amet quis justo. Ut hendrerit vehicula
                        vehicula. Morbi pellentesque risus quis quam consectetur faucibus.
                        Curabitur auctor ex sed metus ultrices sodales. Fusce tempor tellus
                        ac nulla iaculis, in eleifend elit posuere. Pellentesque sed interdum
                        leo, nec pharetra risus. Quisque dapibus quam nisi. Donec hendrerit
                        laoreet mi, aliquet efficitur arcu placerat ullamcorper. Donec at
                        risus viverra, interdum nisi eget, tempus lorem. Maecenas vitae massa dolor.</p>

                    <p class="contenedor--texto--conocenos">Vestibulum eget fermentum libero. Nulla rhoncus orci eget ipsum imperdiet,
                        vel malesuada mi ultrices. Duis at eleifend risus. Sed eu ipsum in justo
                        aliquam ullamcorper. Maecenas dignissim nisi quis finibus vulputate.
                        Duis molestie fringilla eros, a iaculis velit iaculis vel. Mauris ante
                        felis, semper nec ullamcorper vitae, imperdiet ut risus. Pellentesque
                        vitae scelerisque mauris, a pharetra enim. Proin urna massa, blandit
                        in mollis a, ullamcorper in dolor. Nulla blandit tellus vitae ullamcorper
                        placerat. Quisque fermentum porttitor eros ac vehicula.</p>
                </div>
            </div>
        </main>
    </section>

    <section>
        <div class="titulo">
            <h1 class="titulo--conocenos">Ingreso de Personal</h1>
        </div>

        <main class="contenedor">
            <div class="contenedor__bloque--conocenos">
                <div class="contenedor__texto--contactamos">
                    <input type="search" placeholder="Buscar..." class="buscar" onchange="filtrar(this.value)" value="">

                    <a href="Javascript:void()" onclick="abrirFlotante('Ingreso')"><i class="fa fa-plus iconoGris"></i></a>
                    <div class="crud">
                        <table class="tabla">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th class="anchoa2">Cargo</th>
                                    <th class="anchoa">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if ($ingresos != null) {
                                    foreach ($ingresos as $ingreso) {
                                ?>
                                        <tr class="fila">
                                            <td><?php echo $ingreso['id_ingreso']; ?></td>
                                            <td class="center"><?php echo formatDate($ingreso['fechai']); ?></td>
                                            <td><?php echo $ingreso['cargo']; ?></td>
                                            <td class="center">
                                                <a href="Javascript:void()" onclick="abrirFlotanteEditarIngreso(<?php echo $ingreso['id_ingreso']; ?>)" class="link" title="Editar"><i class="fa fa-pencil color"></i></a>
                                                <a href="Javascript:void()" onclick="abrirFlotanteEliminar(<?php echo $ingreso['id_ingreso']; ?>)" class="link" title="Eliminar"><i class="fas fa-trash-alt color"></i></a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- .contenedor__texto--contactamos-->


                <div id="flotanteIngreso" class="contenedor__bloque--conocenos form--none">
                    <div onclick="this.parentNode.style.display='none'" class="formulario"></div>

                    <div class="form">
                        <?php
                        require_once('add.php');
                        ?>
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque--conocenos formulario-->


                <!-- EDITAR -->

                <div id="flotanteEditarIngreso" class="contenedor__bloque--conocenos form--none">
                    <div onclick="this.parentNode.style.display='none'" class="formulario"></div>

                    <div class="form">
                        <?php
                        require_once('edit.php');
                        ?>
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque--conocenos formulario-->

                <!-- ELIMINAR -->

                <div id="flotanteEliminar" class="contenedor__bloque--conocenos form--none">
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