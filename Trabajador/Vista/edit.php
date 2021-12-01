
<form action="../Controlador/edit.php" method="POST" >
<input type="hidden" id="ideditar" name="id_infseguridad">

    <div class="contenedor__form--seleccion auto">        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteEditarTrabajador').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-user-shield"></i> Editar trabajador</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="nombretrabajadort">Nombre del trabajador</label>
            <input type="text" class="form--input" name="nombretrabajadort" id="nombretrabajadort" placeholder="Nombre del trabajador..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="tipodocumentot">Tipo de documento</label>
            <select name="tipodocumentot" id="tipodocumentot" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>CC</option>
                <option>CE</option>
                <option>TI</option>
            </select>
        </div>

        <!-- Darle click y hacer un onchange, ingreso el dato de cedula y carga toda la información del cliente -->

        <div class="form--flex">
            <label class="form--label" for="identificaciont">No. identificación</label>
            <input type="number" class="form--input" name="identificaciont" id="identificaciont" placeholder="Número de identificación..." >
        </div>

        <div class="form--flex">
            <label class="form--label" for="nacimientot">Fecha de nacimiento</label>
            <input type="date" class="form--input" name="nacimientot" id="nacimientot">
        </div>

        <div class="form--flex">
            <label class="form--label" for="sexot">Sexo</label>
            <select name="sexot" id="sexot" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Masculino</option>
                <option>Femenino</option>
                <option>Indiferente</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="epst">EPS</label>
            <input class="form--input" type="text" name="epst" id="epst" placeholder="EPS...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="afpt">AFP</label>
            <input class="form--input" type="text" name="afpt" id="afpt" placeholder="AFP...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="cargot">Cargo</label>
            <input class="form--input" type="text" name="cargot" id="cargot" placeholder="Cargo...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="fechaingresot">Fecha de ingreso</label>
            <input type="date" class="form--input" name="fechaingresot" id="fechaingresot">
        </div>

        <div class="form--flex">
            <label class="form--label" for="ocupaciont">Ocupación habitual</label>
            <input type="text" class="form--input" name="ocupaciont" id="ocupaciont">
        </div>

        <div class="form--flex">
            <label class="form--label" for="salariot">Salario</label>
            <input type="number" class="form--input" name="salariot" id="salariot">
        </div>

        <div class="form--flex">
            <label class="form--label" for="centrodecostot">Centro de costo</label>
            <input type="text" class="form--input" name="centrodecostot" id="centrodecostot">
        </div>

        <div class="form--flex">
            <label class="form--label" for="zonat">Zona</label>
            <input type="text" class="form--input" name="zonat" id="zonat">
        </div>

        <div class="form--flex">
            <label class="form--label" for="tipovinculaciont">Tipo de vinculación</label>
            <select name="tipovinculaciont" id="tipovinculaciont" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Directo</option>
                <option>Temporal</option>
            </select>
        </div>


        <div class="form--flex">
            <label class="form--label" for="departamentot">Departamento</label>
            <select name="departamentot" id="departamentot" class="form--input" onchange="cargarMunicipiosEditar(this.value, '')">
                <option>Seleccione una opción</option>
                <?php

                foreach ($InformacionDepartamentos as $InfoDepartamento) {
                    echo "<option value='" . $InfoDepartamento["id_departamento"] . "'>" . $InfoDepartamento["departamento"] . "</option>";
                }   

                ?>
            </select>
            <script>

                function cargarMunicipiosEditar(idDepartamento, idMunicipio)
                {
                    $.ajax({
                        url: "../../General/Queries/filtrociudad.php",
                        type: "POST",
                        dataType: "HTML",
                        data: {idDepartamento: idDepartamento, idMunicipio, idMunicipio},
                        success: function(selectMunicipios){

                            document.getElementById("divMunicipioEditar").innerHTML = selectMunicipios;

                        }
                    });
                }

            </script>
        </div>

        <div class="form--flex" id="divMunicipioEditar">
        </div>

       

        <div class="form--flex">
            <label class="form--label" for="direcciont">Dirección</label>
            <input type="text" class="form--input" name="direcciont" id="direcciont">
        </div>

        <div class="form--flex">
            <label class="form--label" for="centrotrabajot">Centro de trabajo</label>
            <input type="text" class="form--input" name="centrotrabajot" id="centrotrabajot"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>

        <div class="form--flex">
            <label class="form--label" for="jornadat">Jornada de trabajo habitual</label>
            <select name="jornadat" id="jornadat" class="form--input">
                <option value="">Seleccione Jornada</option>
                <option>DIURNA</option>
                <option>NOCTURNA</option>
                <option>MIXTA</option>
                <option>TURNOS</option>
            </select>
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>