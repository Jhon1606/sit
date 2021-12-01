<form action="../Controlador/edit.php" method="POST" >
    <input type="hidden" id="ideditar" name="id_retiro">

    <div class="contenedor__form--seleccion auto">
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteNomina').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-hand-holding-usd"></i> Solicitud de retiro</h2>
        </div>
        
        <!--  SOLICITUD DE RETIRO -->

        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Solicitud de retiro</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="cedula">Cédula<span class="red">*</span></label>
            <input type="number" name="cedula" id="cedula" class="form--input" placeholder="Cédula" required="">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="nombre">Nombre<span class="red">*</span></label>
            <input type="text" name="nombre" id="nombre" class="form--input"  
            onChange="this.value=(this.value).toUppercase()" style="text-transform:Uppercase" 
            placeholder="Nombre completo" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="salario">Salario (si aplica novedades)</label>
            <input type="number" name="salario" id="salario" class="form--input" placeholder="Salario">
        </div>

        <div class="form--flex">
            <label class="form--label" for="centrodecosto">Centro de costos</label>
            <input type="text" name="centrodecosto" id="centrodecosto" class="form--input" placeholder="Centro de costos">
        </div>

        <div class="form--flex">
            <label class="form--label" for="cargo">Cargo</label>
            <input type="text" name="cargo" id="cargo" class="form--input" placeholder="Cargo">
        </div>

        <div class="form--flex">
            <label class="form--label" for="fechanomina">Fecha última nómina pagada (si aplica novedades)</label>
            <input type="date" name="fechanomina" id="fechanomina" class="form--input">
        </div>

        <div class="form--flex">
            <label class="form--label" for="fecharetiro">Fecha de retiro<span class="red">*</span></label>
            <input type="date" name="fecharetiro" id="fecharetiro" class="form--input">
        </div>

        <div class="form--flex">
            <label class="form--label" for="cartaretiro">Enviada carta de retiro<span class="red">*</span></label>
            <select name="cartaretiro" id="cartaretiro" class="form--input" required="">
                <option value="">Seleccione una opción</option>
                <option>Sí</option>
                <option>No</option>
                <option>No aplica</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="novedadesnomina">Tiene novedades pendientes de nómina<span class="red">*</span></label>
            <select name="novedadesnomina" id="novedadesnomina" class="form--input" required="">
                <option value="">Seleccione una opción</option>
                <option>Sí</option>
                <option>No</option>
            </select>
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="pazysalvo">Paz y salvo<span class="red">*</span></label>
            <select name="pazysalvo" id="pazysalvo" class="form--input" required="">
                <option value="">Seleccione una opción</option>
                <option>Sí</option>
                <option>No</option>
            </select>
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="observaciones">Observaciones</label>
            <textarea class="form--input" name="observaciones" id="observaciones" placeholder="Observaciones..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Reporte de novedades de retiro</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="ordinario">Ordinario (horas)<span class="red">*</span></label>
            <input type="number" name="ordinario" id="ordinario" class="form--input" placeholder="Ordinario" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="transporte">Transporte en días</label>
            <input type="number" name="transporte" id="transporte" class="form--input" placeholder="Transporte en días">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasrecargo">Horas recargo</label>
            <input type="number" name="horasrecargo" id="horasrecargo" class="form--input" placeholder="Horas recargo">
        </div>

        <div class="form--flex">
            <label class="form--label" for="domingocompensado">Domingo compensado</label>
            <input type="number" name="domingocompensado" id="domingocompensado" class="form--input" placeholder="Domingo compensado">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasdiurnas">Horas diurnas</label>
            <input type="number" name="horasdiurnas" id="horasdiurnas" class="form--input" placeholder="Horas diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasnocturnas">Horas nocturnas</label>
            <input type="number" name="horasnocturnas" id="horasnocturnas" class="form--input" placeholder="Horas nocturnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasdominicales">Horas dominicales</label>
            <input type="number" name="horasdominicales" id="horasdominicales" class="form--input" placeholder="Horas dominicales">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasdomingo_d">Horas domingo diurnas</label>
            <input type="number" name="horasdomingo_d" id="horasdomingo_d" class="form--input" placeholder="Horas domingo diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasdomingo_n">Horas domingo nocturnas festivos</label>
            <input type="number" name="horasdomingo_n" id="horasdomingo_n" class="form--input" placeholder="Horas extras domingo diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasrec_dominical">Horas recargo dominical</label>
            <input type="number" name="horasrec_dominical" id="horasrec_dominical" class="form--input" placeholder="Horas extras domingo diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="bonificacion">Bonificación mera liberalidad</label>
            <input type="number" name="bonificacion" id="bonificacion" class="form--input" placeholder="Bonificacion mera liberalidad">
        </div>

        <div class="form--flex">
            <label class="form--label" for="auxilio">Auxilio</label>
            <input type="number" name="auxilio" id="auxilio" class="form--input" placeholder="Auxilio">
        </div>

        <div class="form--flex">
            <label class="form--label" for="comision">Comisión</label>
            <input type="number" name="comision" id="comision" class="form--input" placeholder="Comision">
        </div>

        <div class="form--flex">
            <label class="form--label" for="otro">Otro</label>
            <input type="number" name="otro" id="otro" class="form--input" placeholder="Otro">
        </div>

        <div class="form--flex">
            <label class="form--label" for="incapacidad">Incapacidad</label>
            <input type="number" name="incapacidad" id="incapacidad" class="form--input" placeholder="Incapacidad">
        </div>

        <div class="form--flex">
            <label class="form--label" for="permisos">Permisos y suspensiones</label>
            <input type="number" name="permisos" id="permisos" class="form--input" placeholder="Permisos y suspenciones">
        </div>

        <div class="form--flex">
            <label class="form--label" for="otro_horas">Otro (en horas)</label>
            <input type="number" name="otro_horas" id="otro_horas" class="form--input" placeholder="Otro">
        </div>
       
        <div class="form--flex">
            <label class="form--label" for="casino">Casino</label>
            <input type="number" name="casino" id="casino" class="form--input" placeholder="Casino">
        </div>

        <div class="form--flex">
            <label class="form--label" for="otro_desc">Otro</label>
            <input type="number" name="otro_desc" id="otro_desc" class="form--input" placeholder="Otro">
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="observaciones_reporte">Observaciones</label>
            <textarea class="form--input" name="observaciones_reporte" id="observaciones_reporte" placeholder="Observaciones..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>