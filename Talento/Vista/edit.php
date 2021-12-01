<form action="../Controlador/edit.php" method="POST" >
<input type="hidden" id="ideditar" name="id_talento">

    <div class="contenedor__form--seleccion auto">
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteTalento').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-users"></i> FURD</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="turno">Turno</label>
            <input type="number" class="form--input" name="turno" id="turno" placeholder="Turno">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="hora">Hora</label>
            <input type="number" class="form--input" name="hora" id="hora" placeholder="Hora">
        </div>

        
        <div class="form--flex">
            <label class="form--label" for="fecha">Fecha</label>
            <input type="date" class="form--input" id="fecha" name="fecha">
        </div>

        <div class="form--flex">
            <label class="form--label" for="ciudad">Ciudad</label>
            <input type="text" class="form--input" name="ciudad" id="ciudad"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase"
            placeholder="Ciudad" >
        </div>

        <div class="form--flex">
            <label class="form--label" for="proyecto">Proyecto</label>
            <input type="text" class="form--input" name="proyecto" id="proyecto"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase"
            placeholder="Proyecto" >
        </div>

        <div class="form--flex">
            <label class="form--label" for="nombretrabajador">Nombre del trabajador</label>
            <input type="text" class="form--input" name="nombretrabajador" id="nombretrabajador"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase"
            placeholder="Nombre del trabajador" >
        </div>

        <div class="form--flex">
            <label class="form--label" for="nombresuperior">Nombre del superior interviniente</label>
            <input type="text" class="form--input" name="nombresuperior" id="nombresuperior"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase"
            placeholder="Nombre del superior interviniente" >
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="motivo">Hecho o motivo de la intervención</label>
            <textarea class="form--input" name="motivo" id="motivo" placeholder="Escriba el hecho o el motivo de la intervención..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="comentarios">Comentarios del trabajador</label>
            <textarea class="form--input" name="comentarios" id="comentarios" placeholder="Escriba cualquier comentario..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>