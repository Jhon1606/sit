<?php
    require_once('../Modelo/talento.php');
    require_once('../../General/Helpers/helpers.php');

    $modeloTalento = new talento();
    $talentos = $modeloTalento->get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración del talento humano - SIT Contactamos</title>
    <link rel="shortcut icon" href="../../Public/imagenes/logoContactamos02.png">
    <link rel="stylesheet" href="../../Public/css/estilo.css">
    <link rel="stylesheet" href="../../Public/css/normalize.css">
    <link rel="stylesheet" href="../../Public/css/tabla.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/768de8c2f5.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="noopener"></script>
</head>
<body>
    
    <header class="header--talento">
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
                    <h1 class="header--titulo-conocenos">Talento Humano</h1>
                    <p class="header--texto--blanco">Mediante este proceso CONTACTAMOS acerca a sus clientes las herramientas
                        necesarias para gestionar el talento humano, como la disciplina, el tesoro del saber, información del 
                        Contact Center, Colegio virtual, convenios vigentes para los empleados y mucho más.</p>
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
            <a class="navegacion__enlace active" href="../../Talento/Vista/index.php"><i class="fas fa-users"></i> Talento humano</a>
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
                <div class="contenedor__grid--talento">
                    <div class="contacto center">
                        <div>
                            <img class="contacto--imagen center" src="../../Public/imagenes/AdminTalentoHum/mariaSarmiento.jpg" alt="">
                        </div>

                        <div class="contacto--informacion">
                            <p class="contacto--texto"><i class='fas fa-user-alt'></i> <b>Maria E Sarmiento</b></p>
                            <p class="contacto--texto"><i class='fas fa-user-tie'></i> <b>Subgerente Comercial </b> </p>
                            <p class="contacto--texto"><i class='fas fa-city'></i> Oficina Barranquilla</p>
                            <p class="contacto--texto"><i class='fa fa-mobile'></i> <b>Cel:</b> 3205423890</p>
                            <p class="contacto--texto"><i class='fas fa-phone-alt'></i> <b>Tel:</b> 3776363 <b>Ext.</b> 119</p>
                            <p class="contacto--texto"><i class='fa fa-envelope-open'></i> <b>E-mail:</b> msarmiento@contactamos.com.co </p>
                        </div>
                    </div>

                    <div class="contacto center">
                        <div>
                            <img class="contacto--imagen center" src="../../Public/imagenes/AdminTalentoHum/luzRamirez.jpg" alt="">
                        </div>

                        <div class="contacto--informacion">
                            <p class="contacto--texto"><i class='fas fa-user-alt'></i> <b>Luz Ramirez</b></p>
                            <p class="contacto--texto"><i class='fas fa-user-tie'></i> <b>Ejecutiva Comercial </b></p>
                            <p class="contacto--texto"><i class='fas fa-city'></i> Oficina Barranquilla</p>
                            <p class="contacto--texto"><i class='fa fa-mobile'></i> <b>Cel:</b> 3103331956</p>
                            <p class="contacto--texto"><i class='fas fa-phone-alt'></i> <b>Tel:</b> 3776363 <b>Ext.</b> 119</p>
                            <p class="contacto--texto"><i class='fa fa-envelope-open'></i> <b>E-mail:</b> lramirez@contactamos.com.co</p>
                        </div>
                    </div> 

                    <div class="contacto center">
                        <div>
                            <img class="contacto--imagen center" src="../../Public/imagenes/AdminTalentoHum/luzRamirez.jpg" alt="">
                        </div>

                        <div class="contacto--informacion">
                            <p class="contacto--texto"><i class='fas fa-user-alt'></i> <b>Kiangsy Acosta</b></p>
                            <p class="contacto--texto"><i class='fas fa-user-tie'></i> <b>Ejecutiva Comercial </b></p>
                            <p class="contacto--texto"><i class='fas fa-city'></i> Oficina Bogotá</p>
                            <p class="contacto--texto"><i class='fa fa-mobile'></i> <b>Cel:</b> 3126311112</p>
                            <p class="contacto--texto"><i class='fa fa-envelope-open'></i> <b>E-mail:</b> kacosta@contactamos.com.co</p>
                        </div>
                    </div> 

                    <div class="contacto center">
                        <div>
                            <img class="contacto--imagen center" src="../../Public/imagenes/AdminTalentoHum/luzRamirez.jpg" alt="">
                        </div>

                        <div class="contacto--informacion">
                            <p class="contacto--texto"><i class='fas fa-user-alt'></i> <b>Gloria Siabato</b></p>
                            <p class="contacto--texto"><i class='fas fa-user-tie'></i> <b>Ejecutiva Comercial </b></p>
                            <p class="contacto--texto"><i class='fas fa-city'></i> Oficina Bogotá</p>
                            <p class="contacto--texto"><i class='fa fa-mobile'></i> <b>Cel:</b> 3103331956</p>
                            <p class="contacto--texto"><i class='fas fa-phone-alt'></i> <b>Tel:</b> 3776363 <b>Ext.</b> 119</p>
                            <p class="contacto--texto"><i class='fa fa-envelope-open'></i> <b>E-mail:</b> lramirez@contactamos.com.co</p>
                        </div>
                    </div> <!--.contacto--> 
                </div> <!-- .contenedor__grid--seleccion-->
            </div> <!--.contenedor__bloque--conocenos--> 
        </main>
    </section>

    <section>
        <div class="titulo">
            <h1 class="titulo--conocenos">Sobre el proceso</h1>
        </div>

        <main class="contenedor">
            <div class="contenedor__bloque--conocenos">
                <div class="contenedor__texto--contactamos">
                    <p class="contenedor--texto--conocenos">Mediante este proceso CONTACTAMOS 
                        pretende acercar a nuestros clientes las herramientas necesarias para 
                        gestionar el talento humano como:</p>
                </div>

                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento">Colegio Virtual</h2>
                    <p class="contenedor--texto--conocenos">Medio a través del cual capacitamos 
                        a nuestros empleados mediante un método tecnológico flexible, dinámico 
                        y autoevaluable, logrando con ello contar con personal competitivo y 
                        comprometido con sus procesos.</p>
                </div>

                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento">Tesoro del saber</h2>
                    <p class="contenedor--texto--conocenos">Documento de gran valor que ofrece información 
                        básica y recomendaciones que ayudan a nuestros empleados a resolver con facilidad 
                        dudas relacionadas al ámbito laboral.</p>
                </div>

                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento">Contact center</h2>
                    <p class="contenedor--texto--conocenos">El Contact Center es un medio de comunicación 
                        directa que ofrecemos a nuestros empleados y clientes a través del cual pueden 
                        aclarar inquietudes, hacer solicitudes, informar sobre algún problema o queja y 
                        recibir información sobre los diferentes convenios con los que cuenta nuestra empresa.</p>
                </div>

                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento">Convenios</h2>
                    <p class="contenedor--texto--conocenos">Contamos con alianzas corporativas con empresas para 
                        ofrecer beneficios tangibles y diferenciables para nuestros empleados. Los empleados 
                        pueden tener acceso a los convenios a través del Contact Center. (Ver convenios al final 
                        de la página)</p>
                </div>
            
                <div class="contenedor__texto--contactamos">
                    <h2 class="contenedor__titulo--talento">FURD (Disciplina)</h2>
                    
                    <div class="contenedor--lista">
                        <ul>
                            <li class="contenedor--lista--conocenos">En caso de que un empleado comenta una falta, el cliente debe diligenciar 
                                el FORMATO FURD en su totalidad incluyendo fecha, hechos, turno y pruebas. </li>

                            <li class="contenedor--lista--conocenos">El FURD debe contener la justificación o el por qué de la falta del trabajador 
                                escrita con su letra y debe incluir la firma del empleado. </li>
                                
                            <li class="contenedor--lista--conocenos">El FURD se envía escaneado a RRHH de Contactamos, ya que es el soporte para 
                                poder realizar el proceso disciplinario.</li> 
                        </ul>
                    </div>
                </div>

                <div class="contenedor__texto--contactamos">
                    <p class="contenedor--texto--conocenos"><span class="span--verde">NOTA:</span> El FURD debe ser diligenciado de manera clara, a mano alzada, por parte del superior pero siempre 
                        la justificación (comentarios del trabajador) debe ser escrita a mano por este mismo y nunca traducida 
                        por el superior. En caso de que éste no desee firmar el mismo se procede a realizarlo con testigos.</p>
                </div>
            </div>
        </main>
    </section>

    <section>
        <div class="titulo">
            <h1 class="titulo--conocenos">Envío de FURD</h1>
        </div>

        <main class="contenedor">
            <div class="contenedor__bloque--conocenos">
                <div class="contenedor__texto--contactamos">
                    <input type="search" placeholder="Buscar..." class="buscar" onchange="filtrar(this.value)" value="">
                    
                    <a href="Javascript:void()" onclick="abrirFlotante('Talento')"><i class="fa fa-plus iconoGris"></i></a>
                    <div class="crud">
                        <table class="tabla">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th class="anchoa2">Proyecto</th>
                                    <th class="anchoa2">Nombre del trabajador</th>
                                    <th class="anchoa2">Fecha de registro</th>
                                    <th class="anchoa2">Acciones</th>
                                </tr>
                            </thead>
                
                            <tbody>
                            <?php         
                                if($talentos != null){ 
                                    foreach($talentos as $talento){
                            ?>
                                <tr class="fila">
                                    <td><?php echo $talento['id_talento']; ?></td>
                                    <td class="center"><?php echo $talento['proyecto']; ?></td>
                                    <td class="center"><?php echo $talento['nombretrabajador']; ?></td>
                                    <td class="center"><?php echo formatDate($talento['fecharegistro']); ?></td>
                                    <td class="center">
                                        <a href="Javascript:void()" onclick="abrirFlotanteEditarTalento(<?php echo $talento['id_talento']; ?>)" class="link" title="Editar"><i class="fa fa-pencil color"></i></a>
                                        <a href="Javascript:void()" onclick="abrirFlotanteEliminar(<?php echo $talento['id_talento']; ?>)" class="link" title="Eliminar"><i class="fas fa-trash-alt color"></i></a>
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
                
                <div id="flotanteTalento" class="contenedor__bloque--conocenos form--none" >
                    <div onclick="this.parentNode.style.display='none'" class="formulario"></div>

                    <div class="form">
                        <?php
        
                            require_once('add.php');

                        ?>
                    </div> <!-- .form-->
                </div> <!-- .contenedor__bloque--conocenos formulario-->

                  <!-- EDITAR -->

                <div id="flotanteEditarTalento" class="contenedor__bloque--conocenos form--none" >
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
        <div class="titulo">
            <h1 class="titulo--conocenos">Convenios</h1>
        </div>

        <main class="contenedor">
            <div class="contenedor--talento">
                <p class="contenedor--texto--conocenos convenio">En CONTACTAMOS ofrecemos convenios que beneficien la economía y los lazos 
                    familiares. Los empleados tienen acceso a estos convenios haciendo sus 
                    solicitudes a través del Contact Center y/o directamente en las oficinas 
                    de Contactamos. Contactamos les da el beneficio de la financiación sin 
                    intereses de los productos de estas empresas.</p>
    
                
                    <div class="contenedor__texto--contactamos">
                        <div class="contenedor__imagen">
                            <a href="">
                                <img class="imagen--proceso" src="../../Public/imagenes/cine1.jpg" alt="">
                            </a>
                        </div>
    
                        <div class="contenedor--texto">
                            <h2 class="contenedor__titulo--talento">Cine Colombia</h2>
                            <p class="contenedor--texto--conocenos">Esta opción le permitirá reconocer el buen 
                            servicio recibido y/o ofrecido por parte de un funcionario o un Departamento de 
                            Contactamos.</p>
                        </div>
                    </div>
                  
                        <div class="contenedor__texto--contactamos">
                            <div class="contenedor__imagen">
                                <a href="">
                                    <img class="imagen--proceso" src="../../Public/imagenes/los olivos.jpg" alt="">
                                </a>
                            </div>
        
                            <div class="contenedor--texto">
                                <h2 class="contenedor__titulo--talento">Los Olivos</h2>
                                <p class="contenedor--texto--conocenos">Esta opción le permitirá reconocer el buen 
                                servicio recibido y/o ofrecido por parte de un funcionario o un Departamento de 
                                Contactamos.</p>
                            </div>
                        </div>
                    
    
                    <div class="contenedor__texto--contactamos">
                        <div class="contenedor__imagen">
                            <a href="">
                                <img class="imagen--proceso" src="../../Public/imagenes/unad1.jpg" alt="">
                            </a>
                        </div>
    
                        <div class="contenedor--texto">
                            <h2 class="contenedor__titulo--talento">Universidad nacional abierta y a distancia</h2>
                            <p class="contenedor--texto--conocenos">Esta opción le permitirá reconocer el buen 
                            servicio recibido y/o ofrecido por parte de un funcionario o un Departamento de 
                            Contactamos.</p>
                        </div>
                    </div>
    
                    <div class="contenedor__texto--contactamos">
                        <div class="contenedor__imagen">
                            <a href="">
                                <img class="imagen--proceso" src="../../Public/imagenes/optica ov2.jpg" alt="">
                            </a>
                        </div>
    
                        <div class="contenedor--texto">
                            <h2 class="contenedor__titulo--talento">Optica OV</h2>
                            <p class="contenedor--texto--conocenos">A través de esta alianza, nuestros empleados 
                                pueden adquirir gafas medicadas para ellos y su grupo familiar a precios 
                                especiales descontados por nómina.</p>
                        </div>
                    </div>
    
                    <div class="contenedor__texto--contactamos">
                        <div class="contenedor__imagen">
                            <a href="">
                                <img class="imagen--proceso" src="../../Public/imagenes/recordar1.jpg" alt="">
                            </a>
                        </div>
    
                        <div class="contenedor--texto">
                            <h2 class="contenedor__titulo--talento">Recordar</h2>
                            <p class="contenedor--texto--conocenos">Planes Exequiales para afiliación del 
                                trabajador y su grupo familiar a precios especiales, descontados por nómina 
                                y con atención personalizada.</p>
                        </div>
                    </div>
    
                    <div class="contenedor__texto--contactamos">
                        <div class="contenedor__imagen">
                            <a href="">
                                <img class="imagen--proceso navidad" src="../../Public/imagenes/navideña1.jpg" alt="">
                            </a>
                        </div>
    
                        <div class="contenedor--texto">
                            <h2 class="contenedor__titulo--talento">Temporada navideña y escolar</h2>
                            <p class="contenedor--texto--conocenos">Convenio con almacenes para créditos 
                                de juguetes, textos y útiles escolares. Órdenes sin intereses y pagados 
                                en cuotas quincenales descontadas por nómina.</p>
                        </div>
                    </div>
                </div>
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