<form action="../Controlador/edit.php" method="POST" >
<input type="hidden" id="ideditar" name="id_nomina">

    <div class="contenedor__form--seleccion auto">
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteEditarNomina').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-hand-holding-usd"></i> Reportes de nómina</h2>
        </div>
        
        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Corte de Nómina</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="novedad_desde">Novedad desde el</label>
            <input type="date" class="form--input" name="novedad_desde" id="novedad_desde">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="novedad_hasta">Hasta</label>
            <input type="date" class="form--input" name="novedad_hasta" id="novedad_hasta">
        </div>

        <!-- REPORTE DE NOMINA QUINCENAL -->

        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Reporte de nómina quincenal</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="cedula">Cédula</label>
            <input type="number" name="cedula" id="cedula" class="form--input" placeholder="Cédula">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form--input" 
            onChange="this.value=(this.value).toUppercase()" style="text-transform:Uppercase" 
            placeholder="Nombre completo">
        </div>

        <div class="form--flex">
            <label class="form--label" for="salario">Salario</label>
            <input type="number" name="salario" id="salario" class="form--input" placeholder="Salario">
        </div>

        <div class="form--flex">
            <label class="form--label" for="fechaingreso">Fecha de ingreso</label>
            <input type="date" name="fechaingreso" id="fechaingreso" class="form--input">
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
            <label class="form--label" for="ordinario">Ordinario (horas)</label>
            <input type="number" name="ordinario" id="ordinario" class="form--input" placeholder="Ordinario">
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
            <label class="form--label" for="horasrecnocturno">Horas recargo nocturno domingo compensado</label>
            <input type="number" name="horasrecnocturno" id="horasrecnocturno" class="form--input" placeholder="Horas recargo nocturno domingo compensado">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasextradiurno">Horas extras diurnas</label>
            <input type="number" name="horasextradiurno" id="horasextradiurno" class="form--input" placeholder="Horas extras diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasextranocturna">Horas extras nocturna</label>
            <input type="number" name="horasextranocturna" id="horasextranocturna" class="form--input" placeholder="Domingo compensado">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasordinarias">Horas ordinarias dominicales</label>
            <input type="number" name="horasordinarias" id="horasordinarias" class="form--input" placeholder="Horas ordinarias dominicales">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasex_domingod">Horas extras domingo diurnas</label>
            <input type="number" name="horasex_domingod" id="horasex_domingod" class="form--input" placeholder="Horas extras domingo diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasrecdominical">Horas recargo dominical o festivo</label>
            <input type="number" name="horasrecdominical" id="horasrecdominical" class="form--input" placeholder="Horas extras domingo diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasex_domingon">Horas extra domingo nocturnas festivas</label>
            <input type="number" name="horasex_domingon" id="horasex_domingon" class="form--input" placeholder="Horas extras domingo nocturnas">
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
            <input type="number" name="comision" id="comision" class="form--input" placeholder="comision">
        </div>

        <div class="form--flex">
            <label class="form--label" for="bonosalarial">Bono salarial</label>
            <input type="number" name="bonosalarial" id="bonosalarial" class="form--input" placeholder="Bono salarial">
        </div>

        <div class="form--flex">
            <label class="form--label" for="incapacidad">Incapacidad</label>
            <input type="number" name="incapacidad" id="incapacidad" class="form--input" placeholder="incapacidad">
        </div>

        <div class="form--flex">
            <label class="form--label" for="permisos">Permisos y suspensiones</label>
            <input type="number" name="permisos" id="permisos" class="form--input" placeholder="Permisos y suspenciones">
        </div>

        <div class="form--flex">
            <label class="form--label" for="otro_horas">Otro (en horas)</label>
            <input type="number" name="otro_horas" id="otro_horas" class="form--input" placeholder="otro">
        </div>

        <div class="form--flex">
            <label class="form--label" for="fecha_ausentismo">Fecha ausentismo</label>
            <input type="date" name="fecha_ausentismo" id="fecha_ausentismo" class="form--input" placeholder="otro">
        </div>
       
        <div class="form--flex">
            <label class="form--label" for="casino">Casino</label>
            <input type="number" name="casino" id="casino" class="form--input" placeholder="otro">
        </div>

        <div class="form--flex">
            <label class="form--label" for="otro">Otro</label>
            <input type="number" name="otro" id="otro" class="form--input" placeholder="otro">
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="observaciones">Observaciones</label>
            <textarea class="form--input" name="observaciones" id="observaciones" placeholder="Observaciones..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>