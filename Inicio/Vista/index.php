<!-- <?php

        // require_once("../../Usuarios/Modelo/usuario.php");
        // $modeloUsuario = new usuarios;   
        // $modeloUsuario->validarSesion();
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - SIT Contactamos</title>
    <link rel="shortcut icon" href="../../Public/imagenes/logoContactamos02.png">
    <link rel="stylesheet" href="../../Public/css/estilo.css">
    <link rel="stylesheet" href="../../Public/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/768de8c2f5.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header">
        <div class="contenedor--header">

            <div class="flex">
                <div class="menu menu--none">
                    <a href="Javascript:void()" onclick="abrirNav()"> <i class="fa fa-navicon icono"></i> </a>
                </div>

                <div class="contenedor--flex imagenContactamos">
                    <a href="">
                        <img class="imagen--logo" src="../../Public/imagenes/logoContactamos5.png" alt="">
                    </a>
                </div>
                <div class="contenedor--texto--inicio">
                    <h2 class="header--titulo">SIT</h2>
                    <p class="header--texto">Te damos la bienvenida al Site Interno de Trámites</p>
                </div>
            </div>
        </div>
    </header>

    <div class="navegacion--none" id="nav">
        <nav class="navegacion">
            <div class="usuario">
                <p class="texto--usuario no-margin"><i class='fas fa-user-alt'></i> Jhon Barros Lozano </p>
                <p class="texto--usuario no-margin"><a class="enlace--usuario" href=""><i class='fa fa-power-off color'></i> Cerrar sesión</a></p>
            </div>
            <a class="navegacion__enlace active" href="../../Inicio/Vista/index.php"><i class="fas fa-home"></i> Inicio</a>
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
            <a class="navegacion__enlace" href="../../Usuarios/Vista/index.php"><i class="fa fa-user"></i> Usuarios</a>
        </nav>
    </div>

    <section>
        <div class="titulo">
            <a href="../../Conocenos/Vista/index.php">
                <h1 class="titulo--inicio">Conócenos dando click aquí</h1>
            </a>
        </div>

        <main class="contenedor">
            <div class="contenedor--grid">
                <a href="../../Seleccion/Vista/index.php">
                    <div class="contenedor__bloque center">
                        <div class="contenedor__imagen">
                            <img class="imagen--proceso" src="../../Public/imagenes/seleccion.jpg" alt="">
                        </div>
                        <div class="contenedor__texto">
                            <h2 class="contenedor__titulo">Selección de personal</h2>
                        </div>
                    </div>
                </a>

                <a href="../../Ingreso/Vista/index.php">
                    <div class="contenedor__bloque">
                        <div class="contenedor__imagen">
                            <img class="imagen--proceso" src="../../Public/imagenes/ingreso.jpg" alt="">
                        </div>
                        <div class="contenedor__texto">
                            <h2 class="contenedor__titulo">Ingreso de personal</h2>
                        </div>
                    </div>
                </a>

                <a href="../../Nomina/Vista/index.php">
                    <div class="contenedor__bloque">
                        <div class="contenedor__imagen">
                            <img class="imagen--proceso" src="../../Public/imagenes/nomina.jpg" alt="">
                        </div>
                        <div class="contenedor__texto">
                            <h2 class="contenedor__titulo">Gestión de nómina</h2>
                        </div>
                    </div>
                </a>

                <a href="../../Retiro/Vista/index.php">
                    <div class="contenedor__bloque">
                        <div class="contenedor__imagen">
                            <img class="imagen--proceso" src="../../Public/imagenes/retiro.jpg" alt="">
                        </div>
                        <div class="contenedor__texto">
                            <h2 class="contenedor__titulo">Retiro de personal</h2>
                        </div>
                    </div>
                </a>

                <a href="../../Seguridad/Vista/index.php">
                    <div class="contenedor__bloque">
                        <div class="contenedor__imagen">
                            <img class="imagen--proceso" src="../../Public/imagenes/seguridad.jpg" alt="">
                        </div>
                        <div class="contenedor__texto">
                            <h2 class="contenedor__titulo">Seguridad en el trabajo</h2>
                        </div>
                    </div>
                </a>

                <a href="../../Talento/Vista/index.php">
                    <div class="contenedor__bloque">
                        <div class="contenedor__imagen">
                            <img class="imagen--proceso" src="../../Public/imagenes/talentohumano.jpg" alt="">
                        </div>
                        <div class="contenedor__texto">
                            <h2 class="contenedor__titulo">Gestíon del talento Humano</h2>
                        </div>
                    </div>
                </a>

                <a href="../../Buzon/Vista/index.php">
                    <div class="contenedor__bloque">
                        <div class="contenedor__imagen">
                            <img class="imagen--proceso" src="../../Public/imagenes/buzondecontacto.jpg" alt="">
                        </div>
                        <div class="contenedor__texto">
                            <h2 class="contenedor__titulo">Buzón de contacto</h2>
                        </div>
                    </div>
                </a>
            </div> <!-- .contenedor--grid-->
        </main>
    </section>

    <section>
        <div class="video">
            <div class="contenedor center">
                <iframe width="85%" height="450" src="https://www.youtube.com/embed/MM8D5pomFdc" title="YouTube video player" frameborder="0" allow="accelerometer; 
                autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section>
        <div class="contenedor">
            <div class="nuestrasOficinas">
                <div class="tituloOficina">
                    <h2 class="titulo--oficina center">Nuestras oficinas</h2>
                </div>

                <div class="oficinaBarranquilla">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.460410920139!2d-74.8172798851973!3d11.004041492167307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42da62c2abaab%3A0x12081ff4f5023b2d!2sContactamos%20Outsourcing%20S.A.S!5e0!3m2!1ses!2sco!4v1633970143892!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="oficinaBogota">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6579046334805!2d-74.06054818590988!3d4.654953243350316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a436bd8ff55%3A0x4ffab1cb32113138!2sContactamos%20Outsourcing%20s.a.s!5e0!3m2!1ses!2sco!4v1633970660453!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="encuentranos">

            <div class="encuentranos--informacion">
                <p class="nomAsistente"><b>Página Web</b></p>
                <p><a class="encuentranos--enlace" target="__blank" href="https://contactamos.com.co/">contactamos.com.co</a></p>
            </div>

            <div class="encuentranos--informacion">
                <p class="nomAsistente"><b>Políticas</b></p>
                <p><a class="encuentranos--enlace" target="_blank" href="https://drive.google.com/file/d/1p4RTUUqxNK7iFDFYCqzoizloRVpxIYeN/view">Política de calidad</a></p>
                <p><a class="encuentranos--enlace" target="_blank" href="https://drive.google.com/file/d/1YEPAT2cacpKkMGLlssX2I9eBx0CwWzGa/view">Tratamiento de datos personales</a></p>
            </div>

            <div class="encuentranos--informacion">
                <p class="nomAsistente"><b>Redes</b></p>
                <p><a class="encuentranos--enlace" target="_blank" href="https://www.google.com/url?q=https%3A%2F%2Fwww.facebook.com%2Fcontactamossas%2F&sa=D&sntz=1&usg=AFQjCNEAAIoC0m8_OBvkHUfHXFA0JGT3GA"> <i class='fab fa-facebook-square'></i>Facebook</a></p>
                <p><a class="encuentranos--enlace" target="_blank" href="https://www.instagram.com/contactamossas/"> <i class='fab fa-instagram'></i>Instagram</a></p>
                <p><a class="encuentranos--enlace" target="_blank" href="https://www.linkedin.com/company/contactamossas"> <i class='fab fa-linkedin '></i>Linkedin</a></p>
            </div>

            <div class="encuentranos--informacion">
                <p class="nomAsistente"><b>Para trabajadores</b></p>
                <p><a class="encuentranos--enlace" target="_blank" href="https://www.youtube.com/watch?v=4631vJV6GD8&ab_channel=ComunicacionesContactamos"> Instructivo Oficina Virtual</a></p>
                <p><a class="encuentranos--enlace" target="_blank" href="../../Administracion/Vista/administracion.html"> Convenios</a></p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>© 2021 - 2021 <a class="enlace__footer" target="_blank" href="https://contactamos.com.co/">Contactamos</a> - Todos los derechos reservados</p>
    </footer>

    <script src="../../Public/js/javascript.js"></script>
</body>

</html>