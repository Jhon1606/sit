<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIT Contactamos</title>
    <link rel="shortcut icon" href="Public/imagenes/logoContactamos02.png">
    <link rel="stylesheet" href="Public/css/estilo.css">
    <link rel="stylesheet" href="Public/css/normalize.css">
    <link rel="stylesheet" href="Public/css/estilo1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/768de8c2f5.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p class="negro">Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p class="negro">Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->

                <form action="Inicio/Vista/index.php" class="formulario__login">  
                    <img src="Public/imagenes/logoContactamos.png">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" class="inputUsuario">
                    <input type="password" placeholder="Contraseña" class="inputContrasena"> <br>
                    <a href="Javascript:void()" onclick="abrirRecuperar()" class="ancla__recuperar-login">Recuperar contraseña</a>
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" class="inputNombre">
                    <input type="text" placeholder="Correo Electronico" class="inputCorreo">
                    <input type="text" placeholder="Usuario" class="inputUsuario">
                    <input type="password" placeholder="Contraseña" class="inputContrasena">
                    <button>Regístrarse</button>
                </form>
                
                <!-- Recuperar -->
                <div id="recuperar" class="formulario--none" >
                    <div onclick="this.parentNode.style.display='none'" class="formulario--recuperar"></div>

                    <div class="form">
                        <form action="" class="">
                            <p onclick="document.getElementById('recuperar').style.display='none'" class="cerrar--talento"><i class="fa fa-close"></i></p>
                            <h2>Recuperar contraseña</h2>
                            <input type="text" placeholder="Correo Electronico" class="inputCorreo">
                            <button>Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="Public/js/javascript.js"></script>
    <script src="Public/js/script.js"></script>

</body>
</html>