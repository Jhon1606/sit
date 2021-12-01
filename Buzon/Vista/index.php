<?php
    require_once('../Modelo/buzon.php');
    require_once('../../General/Helpers/helpers.php');

    $modeloBuzon = new buzon();
    $buzones = $modeloBuzon->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzón - SIT Contactamos</title>
    <link rel="shortcut icon" href="../../Public/imagenes/logoContactamos02.png">
    <link rel="stylesheet" href="../../Public/css/estilo.css">
    <link rel="stylesheet" href="../../Public/css/normalize.css">
    <link rel="stylesheet" href="../../Public/css/tabla.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/768de8c2f5.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="noopener"></script>
</head>
<body>
    
    <header class="header--buzon">
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
                    <h1 class="header--titulo-conocenos">Buzón de contacto</h1>
                    <p class="header--texto--blanco">A través de este medio podrá realizar solicitudes 
                        formales a los diferentes procesos, así como manifestar las opiniones respecto 
                        al cumplimiento de los objetivos propuestos, la calidad de los servicios ofrecidos 
                        y las actuaciones de sus funcionarios.</p>
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
            <a class="navegacion__enlace" href="../../Ingreso/Vista/index.php"><i class="fas fa-user-plus"></i> Ingreso de personal</a>
            <a class="navegacion__enlace" href="../../Nomina/Vista/index.php"><i class="fas fa-hand-holding-usd"></i> Gestión de Nómina</a>
            <a class="navegacion__enlace" href="../../Retiro/Vista/index.php"><i class="fas fa-user-minus"></i> Retiro de personal</a>
            <a class="navegacion__enlace" href="../../Seguridad/Vista/index.php"><i class="fas fa-user-shield"></i> Seguridad en el trabajo</a>
            <a class="navegacion__enlace" href="../../Talento/Vista/index.php"><i class="fas fa-users"></i> Talento humano</a>
            <a class="navegacion__enlace active" href="../../Buzon/Vista/index.php"><i class="fas fa-mail-bulk"></i> Buzón de contacto</a>
            <p class="navegacion__parrafo"><i class="fa fa-cogs"></i>Administración</p>
            <a class="navegacion__enlace" href="../../Trabajador/Vista/index.php"><i class="fa fa-user"></i> Trabajadores</a>
            <a class="navegacion__enlace" href="../../Usuarios/Vista/index.php"><i class="fa fa-user"></i> Usuarios</a>
        </nav>
    </div>
    
    <section>
        <div class="titulo">
            <h1 class="titulo--conocenos">Tipos de contacto</h1>
        </div>

        <main class="contenedor">
            <div class="contenedor__bloque--conocenos">
                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento">Felicitación</h2>
                    <p class="contenedor--texto--conocenos">Esta opción le permitirá reconocer el buen 
                        servicio recibido y/o ofrecido por parte de un funcionario o un Departamento de 
                        Contactamos.</p>
                </div>

                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento">Sugerencia</h2>
                    <p class="contenedor--texto--conocenos">Si Usted desea darnos su opinión, idea o propuesta 
                        sobre la forma como podemos mejorar un proceso interno o la prestación de un servicio 
                        ingrese por esta opción.</p>
                </div>

                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento">Queja</h2>
                    <p class="contenedor--texto--conocenos">Seleccione esta opción si Usted requiere manifestar 
                        una protesta, censura, descontento e inconformidad por la insatisfacción que le causó 
                        la prestación del servicio de uno o varios de los funcionarios en desarrollo de sus funciones.</p>
                </div>

                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento">Asuntos administrativos</h2>
                    <p class="contenedor--texto--conocenos">Asuntos concernientes con los procesos, procedimientos, y trámites de 
                        apoyo y/o administrativos, relacionados con Selección de personal, Contratación de personal, Administración 
                        del Talento Humano, Nómina, Facturación y Seguridad en el Trabajo.</p>  
                </div>

                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento center">Buzón de contacto</h2>
                    <p class="contenedor--texto--conocenos">A través del siguiente formulario se puede hacer llegar de manera respetuosa 
                        un reconocimiento, sugerencia, queja o requerimiento administrativo específico, dependiendo su necesidad y respecto 
                        a cualquier trámite o servicio que sea competencia de CONTACTAMOS DE COLOMBIA S.A.S. Tenga presente que para garantizar 
                        el trámite de su petición, el seguimiento al trámite de la misma, así como la entrega de la respuesta es importante 
                        contar con toda la información y con sus datos de contacto actualizados.</p>  
                </div>

                
            </div> <!-- .contenedor--bloque--conocenos-->
        </main>
    </section>

    <section>
        <div class="titulo">
            <h1 class="titulo--conocenos">Buzón de contacto</h1>
        </div>

        <main class="contenedor">
            <div class="contenedor__bloque--conocenos">
                <div class="contenedor__texto--contactamos">
                    <input type="search" placeholder="Buscar..." class="buscar" onchange="filtrar(this.value)" value="">
                    <a href="Javascript:void()" onclick="abrirFlotante('Buzon')"><i class="fa fa-plus iconoGris"></i></a>
                    
                    <div class="crud">
                        <table class="tabla">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th class="anchoa">Persona solicitada</th>
                                    <th>Asunto</th>
                                    <th>Estado</th>
                                    <th>Fecha de respuesta</th>
                                    <th class="anchoa2">Acciones</th>
                                </tr>
                            </thead>
                
                            <tbody>
                            <?php         
                                if($buzones != null){ 
                                    foreach($buzones as $buzon){
                            ?>
                                <tr class="fila">
                                    <td class="center"><?php echo $buzon['id_buzon']; ?></td>
                                    <td class="center"><?php echo $buzon['personasoli']; ?></td>
                                    <td><?php echo $buzon['asunto']; ?></td>
                                    <td><?php echo $buzon['estado']; ?></td>
                                    <td><?php echo formatDate($buzon['fecharespuesta']); ?></td>
                                    <td class="center">
                                        <a href="<?php echo "http://localhost/Sit3/General/Files/" . $buzon['archivo']; ?>" target="_blank" class="link"><i class="fa fa-search color"></i> </a>
                                        <a href="Javascript:void()" onclick="abrirFlotanteEditarBuzon(<?php echo $buzon['id_buzon']; ?>)" class="link" title="Editar"><i class="fa fa-pencil color"></i></a>
                                        <a href="Javascript:void()" onclick="abrirFlotanteEliminar(<?php echo $buzon['id_buzon']; ?>)" class="link" title="Eliminar"><i class="fas fa-trash-alt color"></i></a>
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

                <div id="flotanteBuzon" class="contenedor__bloque--conocenos form--none" >
                    <div onclick="this.parentNode.style.display='none'" class="formulario"></div>

                    <div class="form">
                       <?php
                            require_once('add.php');
                        ?>
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque--conocenos formulario-->

                <!-- EDITAR -->

                <div id="flotanteEditarBuzon" class="contenedor__bloque--conocenos form--none" >
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