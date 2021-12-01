<form action="../Controlador/edit.php" method="POST" >
<input type="hidden" id="ideditar" name="id_usuario">

    <div class="contenedor__form--seleccion auto">
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteEditarUsuario').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-user-shield"></i>Usuarios</h2>
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="nombre_completo">Nombre completo</label>
            <input type="text" class="form--input" name="nombre_completo" id="nombre_completo" placeholder="Nombre completo..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="correo">Correo electrónico</label>
            <input type="email" class="form--input" name="correo" id="correo" placeholder="Correo electrónico..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase">
        </div>

        <!-- Darle click y hacer un onchange, ingreso el dato de cedula y carga toda la información del cliente -->

        <div class="form--flex">
            <label class="form--label" for="usuario">Usuario</label>
            <input type="text" class="form--input" name="usuario" id="usuario" placeholder="Nombre de usuario...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="contrasena">Contraseña</label>
            <input type="password" class="form--input" name="contrasena" id="contrasena" placeholder="Contraseña...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="perfil">Perfil</label>
            <input type="text" class="form--input" name="perfil" id="perfil" placeholder="Perfil...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="estado">Estado</label>
            <select class="form--input" name="estado" id="estado">
                <option>Activo</option>
                <option>Inactivo</option>
            </select>
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Reportar Accidente">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>