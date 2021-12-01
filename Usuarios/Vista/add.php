<?php
    require_once("../../Departamento/Modelo/departamento.php");
    
    $ModeloDepartamentos = new departamento();
    $InformacionDepartamentos = $ModeloDepartamentos->get();
?>  

<form action="../Controlador/add.php" method="POST" >
    <div class="contenedor__form--seleccion auto">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteUsuarios').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-user-plus"></i> Añadir usuario</h2>
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="nombre_completo">Nombre completo</label>
            <input type="text" class="form--input" name="nombre_completo" placeholder="Nombre completo..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="correo">Correo electrónico</label>
            <input type="email" class="form--input" name="correo" placeholder="Correo electrónico..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase">
        </div>

        <!-- Darle click y hacer un onchange, ingreso el dato de cedula y carga toda la información del cliente -->

        <div class="form--flex">
            <label class="form--label" for="usuario">Usuario</label>
            <input type="text" class="form--input" name="usuario" placeholder="Nombre de usuario..." 
            onchange="cargarTrabajador(this.value)">
        </div>

        <div class="form--flex">
            <label class="form--label" for="contrasena">Contraseña</label>
            <input type="password" class="form--input" name="contrasena" placeholder="Contraseña...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="perfil">Perfil</label>
            <input type="text" class="form--input" name="perfil" placeholder="Perfil...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="estado">Estado</label>
            <select class="form--input" name="estado">
                <option>Activo</option>
                <option>Inactivo</option>
            </select>
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Reportar Accidente">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>