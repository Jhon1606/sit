
<form action="../Controlador/add.php" method="POST" >
    <div class="contenedor__form--seleccion auto">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteIngreso').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-user-plus"></i>Orden de Ingreso</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="cedula">Cédula</label>
            <input type="number" class="form--input" name="cedula" placeholder="Número de cédula...">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="nombre">Nombre Completo</label>
            <input type="text" class="form--input" name="nombre" placeholder="Nombre..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>

        <div class="form--flex">
            <label class="form--label" for="cargo">Cargo a desempeñar</label>
            <input type="text" class="form--input" name="cargo" placeholder="Cargo..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>

        <div class="form--flex">
            <label class="form--label" for="asignacion">Asignación salarial</label>
            <input class="form--input" type="number" name="asignacion" placeholder="Asignación salarial...">
        </div>

        <div class="form--flex fecha">
            <label class="form--label" for="fechai">Fecha de ingreso</label>
            <input type="date" name="fechai" class="form--input">
        </div>

        <div class="form--flex">
            <label class="form--label" for="nomina">Tipo de nómina</label>
            <select name="nomina" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Semanal</option>
                <option>Quincenal</option>
                <option>Mensual</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="ciudad">Ciudad</label>
            <input class="form--input" type="text" name="ciudad" placeholder="Ciudad..." 
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>

        <div class="form--flex">
            <label class="form--label" for="centrocosto">Centro de costo</label>
            <input class="form--input" type="text" name="centrocosto" placeholder="Centro de costo...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="nivelriesgo">Nivel de riesgo</label>
            <select name="nivelriesgo" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Nivel I (0.522%)</option>
                <option>Nivel II (1.044%)</option>
                <option>Nivel III (2.436%)</option>
                <option>Nivel IV (4.350%)</option>
                <option>Nivel V (6.960%)</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="procesoseleccion">¿Aplicó proceso de selección Contactamos?</label>
            <select name="procesoseleccion" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Sí</option>
                <option>No</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="motivo">Motivo del requerimiento</label>
            <select name="motivo" class="form--input">
                <option>Seleccione una opción</option>
                <option>Labores ocasionales, accidentales o transitorias</option>
                <option>Reemplazo de personal en vacaciones, en uso de licencia, 
                    en incapacidad por enfermedad o maternidad</option>
                <option>Atender incrementos en la producción, el transporte, las ventas 
                    de productos o mercancías, los periodos estacionales de cosechas y 
                    en la prestación de servicios</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="nombrelabor">Nombre de la obra o labor (Estimado)</label>
            <textarea name="nombrelabor" class="form--input" placeholder="Especifique el nombre de la obra o labor..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--flex">
            <label class="form--label" for="tiempo">Tiempo estimado de la obra o labor (meses)</label>
            <input type="number" class="form--input" name="tiempo">
        </div>

        <div class="form--flex">
            <label class="form--label" for="telseleccion">Teléfono postulantes sin proceso de selección Contactamos</label>
            <input type="number" class="form--input" name="telseleccion">
        </div>

        <div class="form--flex observaciones">
            <label class="form--label" for="comentarios">Observaciones</label>
            <textarea class="form--input" name="comentarios" placeholder="Escriba cualquier comentario u observación adicional si aplica..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>