<!-- nombre, fechadeingreso, cargo,fechaausetismo,observaciones no son numeros -->
<!-- periodo,novedad desde hasta, registro index. -->
<form action="../Controlador/add.php" method="POST" >
    <div class="contenedor__form--seleccion auto">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteNomina').style.display='none'" 
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
            <label class="form--label" for="novedad_desde">Novedad desde el<span class="red">*</span></label>
            <input type="date" class="form--input" name="novedad_desde" required="">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="novedad_hasta">Hasta<span class="red">*</span></label>
            <input type="date" class="form--input" name="novedad_hasta" required="">
        </div>

        <!-- REPORTE DE NOMINA QUINCENAL -->

        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Reporte de nómina quincenal</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="cedula">Cédula<span class="red">*</span></label>
            <input type="number" name="cedula" id="identificaciont" class="form--input" placeholder="Cédula" required=""
            onchange="cargarTrabajador(this.value)">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="nombre">Nombre<span class="red">*</span></label>
            <input type="text" name="nombre" id="nombretrabajadort" class="form--input" 
            onChange="this.value=(this.value).toUppercase()" style="text-transform:Uppercase" 
            placeholder="Nombre completo" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="salario">Salario<span class="red">*</span></label>
            <input type="number" name="salario" id="salariot" class="form--input" placeholder="Salario" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="fechaingreso">Fecha de ingreso<span class="red">*</span></label>
            <input type="date" name="fechaingreso" class="form--input" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="centrodecosto">Centro de costos</label>
            <input type="text" name="centrodecosto" id="centrodecostot" class="form--input" placeholder="Centro de costos">
        </div>

        <div class="form--flex">
            <label class="form--label" for="cargo">Cargo</label>
            <input type="text" name="cargo" id="cargot" class="form--input" placeholder="Cargo">
        </div>

        <div class="form--flex">
            <label class="form--label" for="ordinario">Ordinario (horas)<span class="red">*</span></label>
            <input type="number" name="ordinario" class="form--input" placeholder="Ordinario" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="transporte">Transporte en días</label>
            <input type="number" name="transporte" class="form--input" placeholder="Transporte en días">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasrecargo">Horas recargo</label>
            <input type="number" name="horasrecargo" class="form--input" placeholder="Horas recargo">
        </div>

        <div class="form--flex">
            <label class="form--label" for="domingocompensado">Domingo compensado</label>
            <input type="number" name="domingocompensado" class="form--input" placeholder="Domingo compensado">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasrecnocturno">Horas recargo nocturno domingo compensado</label>
            <input type="number" name="horasrecnocturno" class="form--input" placeholder="Horas recargo nocturno domingo compensado">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasextradiurno">Horas extras diurnas</label>
            <input type="number" name="horasextradiurno" class="form--input" placeholder="Horas extras diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasextranocturna">Horas extras nocturna</label>
            <input type="number" name="horasextranocturna" class="form--input" placeholder="Domingo compensado">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasordinarias">Horas ordinarias dominicales</label>
            <input type="number" name="horasordinarias" class="form--input" placeholder="Horas ordinarias dominicales">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasex_domingod">Horas extras domingo diurnas</label>
            <input type="number" name="horasex_domingod" class="form--input" placeholder="Horas extras domingo diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasrecdominical">Horas recargo dominical o festivo</label>
            <input type="number" name="horasrecdominical" class="form--input" placeholder="Horas extras domingo diurnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horasex_domingon">Horas extra domingo nocturnas festivas</label>
            <input type="number" name="horasex_domingon" class="form--input" placeholder="Horas extras domingo nocturnas">
        </div>

        <div class="form--flex">
            <label class="form--label" for="bonificacion">Bonificación mera liberalidad</label>
            <input type="number" name="bonificacion" class="form--input" placeholder="Bonificacion mera liberalidad">
        </div>

        <div class="form--flex">
            <label class="form--label" for="auxilio">Auxilio</label>
            <input type="number" name="auxilio" class="form--input" placeholder="Auxilio">
        </div>

        <div class="form--flex">
            <label class="form--label" for="comision">Comisión</label>
            <input type="number" name="comision" class="form--input" placeholder="comision">
        </div>

        <div class="form--flex">
            <label class="form--label" for="bonosalarial">Bono salarial</label>
            <input type="number" name="bonosalarial" class="form--input" placeholder="Bono salarial">
        </div>

        <div class="form--flex">
            <label class="form--label" for="incapacidad">Incapacidad</label>
            <input type="number" name="incapacidad" class="form--input" placeholder="incapacidad">
        </div>

        <div class="form--flex">
            <label class="form--label" for="permisos">Permisos y suspensiones</label>
            <input type="number" name="permisos" class="form--input" placeholder="Permisos y suspenciones">
        </div>

        <div class="form--flex">
            <label class="form--label" for="otro_horas">Otro (en horas)</label>
            <input type="number" name="otro_horas" class="form--input" placeholder="otro">
        </div>

        <div class="form--flex">
            <label class="form--label" for="fecha_ausentismo">Fecha ausentismo</label>
            <input type="date" name="fecha_ausentismo" class="form--input" placeholder="otro">
        </div>
       
        <div class="form--flex">
            <label class="form--label" for="casino">Casino</label>
            <input type="number" name="casino" class="form--input" placeholder="otro">
        </div>

        <div class="form--flex">
            <label class="form--label" for="otro">Otro</label>
            <input type="number" name="otro" class="form--input" placeholder="otro">
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="observaciones">Observaciones</label>
            <textarea class="form--input" name="observaciones" placeholder="Observaciones..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>