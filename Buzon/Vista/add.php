<form action="../Controlador/add.php" method="POST" enctype="multipart/form-data" >
    <div class="contenedor__form--seleccion auto">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteBuzon').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-mail-bulk"></i>Buzón de contacto</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="personasoli">Persona que solicita</label>
            <input class="form--input" type="text" name="personasoli" placeholder="Persona que solicita..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>

        <div class="form--flex fecha">
            <label class="form--label" for="asunto">Asunto</label>
            <input type="text" name="asunto" class="form--input" placeholder="Asunto...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form--input" placeholder="Descripción..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="archivo">Archivo adjunto</label>
            <input type="file" name="archivo" class="form--input">
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>