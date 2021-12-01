<form action="../Controlador/add.php" method="POST" >
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
            <input type="number" class="form--input" name="turno" placeholder="Turno">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="hora">Hora</label>
            <input type="number" class="form--input" name="hora" placeholder="Hora">
        </div>

        
        <div class="form--flex">
            <label class="form--label" for="fecha">Fecha</label>
            <input type="date" class="form--input" name="fecha">
        </div>

        <div class="form--flex">
            <label class="form--label" for="ciudad">Ciudad</label>
            <input type="text" class="form--input" name="ciudad"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase"
            placeholder="Ciudad" >
        </div>

        <div class="form--flex">
            <label class="form--label" for="proyecto">Proyecto</label>
            <input type="text" class="form--input" name="proyecto"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase"
            placeholder="Proyecto" >
        </div>

        <div class="form--flex">
            <label class="form--label" for="nombretrabajador">Nombre del trabajador</label>
            <input type="text" class="form--input" name="nombretrabajador"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase"
            placeholder="Nombre del trabajador" >
        </div>

        <div class="form--flex">
            <label class="form--label" for="nombresuperior">Nombre del superior interviniente</label>
            <input type="text" class="form--input" name="nombresuperior"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase"
            placeholder="Nombre del superior interviniente" >
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="motivo">Hecho o motivo de la intervención</label>
            <textarea class="form--input" name="motivo" placeholder="Escriba el hecho o el motivo de la intervención..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="comentarios">Comentarios del trabajador</label>
            <textarea class="form--input" name="comentarios" placeholder="Escriba cualquier comentario..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--talento">
            <p class="texto--entrevista center">Pruebas que se relacionan</p>
        </div>

        <div class="form--flex">
            <label class="form--label" for="archivouno">Archivo 1</label>
            <input type="text" class="form--input" name="archivouno"
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"
            placeholder="Nombre del superior interviniente">
            <input type="file" name="archivo_uno">
        </div>

        <div class="form--flex">
            <label class="form--label" for="archivodos">Archivo 2</label>
            <input type="text" class="form--input" name="archivodos"
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"
            placeholder="Nombre del superior interviniente">
            <input type="file" name="archivo_dos">
        </div>

        <div class="form--flex">
            <label class="form--label" for="archivotres">Archivo 3</label>
            <input type="text" class="form--input" name="archivotres"
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"
            placeholder="Nombre del superior interviniente">
            <input type="file" name="archivo_tres">
        </div>

        <div class="form--flex">
            <label class="form--label" for="archivocuatro">Archivo 4</label>
            <input type="text" class="form--input" name="archivocuatro"
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"
            placeholder="Nombre del superior interviniente">
            <input type="file" name="archivo_cuatro">
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>