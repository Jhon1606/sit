
<form action="../Controlador/edit.php" method="POST" >
<input type="hidden" id="ideditar" name="id_buzon">
    
    <div class="contenedor__form--seleccion auto">        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteEditarBuzon').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-mail-bulk"></i>Buzón de contacto</h2>
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="registro">Fecha de registro</label>
            <input type="text" class="form--input" name="registro" id="registro" readonly>
        </div>

        <div class="form--flex">
            <label class="form--label" for="personasoli">Persona que solicita</label>
            <input class="form--input" type="text" name="personasoli" id="personasoli" placeholder="Persona que solicita..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>

        <div class="form--flex fecha">
            <label class="form--label" for="asunto">Asunto</label>
            <input type="text" name="asunto" id="asunto" class="form--input" placeholder="Asunto...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form--input"
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--flex">
            <label class="form--label" for="archivo">Archivo adjunto [<a href="" id="archivo" target="_blank">Abrir</a>]</label>
            <input type="file" name="archivo" class="form--input">
        </div>

        <div class="form--flex">
            <label class="form--label" for="estado">Estado</label>
            <select name="estado" id="estado" class="form--input">
                <option>Abierta</option>
                <option>Cerrada</option>
            </select>
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="respuesta">Respuesta</label>
            <textarea name="respuesta" id="respuesta" class="form--input"
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--flex">
            <label class="form--label" for="fecharespuesta">Fecha de respuesta</label>
            <input type="date" class="form--input" name="fecharespuesta" id="fecharespuesta">
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>