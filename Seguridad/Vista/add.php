<?php
    require_once("../../Departamento/Modelo/departamento.php");
    
    $ModeloDepartamentos = new departamento();
    $InformacionDepartamentos = $ModeloDepartamentos->get();
?>  

<form action="../Controlador/add.php" method="POST" >
    <div class="contenedor__form--seleccion auto">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteSeguridad').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-user-shield"></i>Reporte de Accidentes</h2>
        </div>
        
        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Información de la persona a la que le ocurre el evento</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="nombretrabajador">Nombre del trabajador</label>
            <input type="text" class="form--input" name="nombretrabajador" id="nombretrabajadort" placeholder="Nombre del trabajador..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="tipodocumento">Tipo de documento</label>
            <select name="tipodocumento" id="tipodocumentot" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>CC</option>
                <option>CE</option>
                <option>TI</option>
            </select>
        </div>

        <!-- Darle click y hacer un onchange, ingreso el dato de cedula y carga toda la información del cliente -->

        <div class="form--flex">
            <label class="form--label" for="identificacion">No. identificación</label>
            <input type="number" class="form--input" name="identificacion" id="identificaciont" placeholder="Número de identificación..." 
            onchange="cargarTrabajador(this.value)">
        </div>

        <div class="form--flex">
            <label class="form--label" for="nacimiento">Fecha de nacimiento</label>
            <input type="date" class="form--input" name="nacimiento" id="nacimientot">
        </div>

        <div class="form--flex">
            <label class="form--label" for="sexo">Sexo</label>
            <select name="sexo" id="sexot" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Masculino</option>
                <option>Femenino</option>
                <option>Indiferente</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="eps">EPS</label>
            <input class="form--input" type="text" name="eps" id="epst" placeholder="EPS...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="afp">AFP</label>
            <input class="form--input" type="text" name="afp" id="afpt" placeholder="AFP...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="cargo">Cargo</label>
            <input class="form--input" type="text" name="cargo" id="cargot" placeholder="Cargo...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="fechaingreso">Fecha de ingreso</label>
            <input type="date" class="form--input" name="fechaingreso" id="fechaingresot">
        </div>

        <div class="form--flex">
            <label class="form--label" for="ocupacion">Ocupación habitual</label>
            <input type="text" class="form--input" name="ocupacion" id="ocupaciont">
        </div>

        <div class="form--flex">
            <label class="form--label" for="zona">Zona</label>
            <input type="text" class="form--input" name="zona" id="zonat">
        </div>

        <div class="form--flex">
            <label class="form--label" for="tipovinculacion">Tipo de vinculación</label>
            <input type="text" class="form--input" name="tipovinculacion" id="tipovinculaciont">
        </div>

        <div class="form--flex">
            <label class="form--label" for="departamento">Dpto. vive</label>
            <select name="departamento" id="departamentot" required="" class="form--input" onchange="cargarMunicipios(this.value, '')">
                <option>Seleccione una opción</option>
                <?php

                foreach ($InformacionDepartamentos as $InfoDepartamento) {
                    echo "<option value='" . $InfoDepartamento["id_departamento"] . "'>" . $InfoDepartamento["departamento"] . "</option>";
                }

                ?>
            </select>
            <script>

                function cargarMunicipios(idDepartamento, idMunicipio)
                {
                    $.ajax({
                        url: "../../General/Queries/filtrociudadseguridad.php",
                        type: "POST",
                        dataType: "HTML",
                        data: {idDepartamento: idDepartamento, idMunicipio: idMunicipio},
                        success: function(selectMunicipios){

                            document.getElementById("divMunicipio").innerHTML = selectMunicipios;

                        }
                    });
                }

            </script>
        </div>

        <div class="form--flex" id="divMunicipio">
            
        </div>

        <div class="form--flex">
            <label class="form--label" for="direccion">Dirección</label>
            <input type="text" class="form--input" name="direccion" id="direcciont">
        </div>

        <div class="form--flex">
            <label class="form--label" for="centrotrabajo">Centro de trabajo</label>
            <input type="text" class="form--input" name="centrotrabajo" id="centrotrabajot"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>

        <div class="form--flex">
            <label class="form--label" for="jornada">Jornada de trabajo habitual</label>
            <select name="jornada" id="jornadat" class="form--input">
                <option value="">Seleccione Jornada</option>
                <option>DIURNA</option>
                <option>NOCTURNA</option>
                <option>MIXTA</option>
                <option>TURNOS</option>
            </select>
        </div>

        <!-- INFORMACION SOBRE EL EVENTO -->

        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Información sobre el evento</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="fechaevento">Fecha de evento</label>
            <input type="date" class="form--input" name="fechaevento" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="hhmm">Tiempo laborado previo evento</label>
            <div class="flex--seguridad">
                <input type="number" class="form--input--w50" name="hh" placeholder="HH" required="">
                <input type="number" class="form--input--w50" name="mm" placeholder="MM" required="">
            </div>
        </div>

        <div class="form--flex">
            <label class="form--label" for="horaevento">Hora del evento</label>
            <input type="time" name="horaevento" class="form--input" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="jornadasucede">Jornada en la que sucede</label>
            <select name="jornadasucede" class="form--input" required="">
                <option value="">Seleccione Jornada</option>
                <option>NORMAL</option>
                <option>EXTRA</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="tipoevento">Tipo de evento</label>
            <select name="tipoevento" class="form--input" required="">
                <option value="">Seleccione Jornada</option>
                <option>DEPORTIVO</option>
                <option>PROPIOS DEL TRABAJO</option>
                <option>RECREATIVO O CULTURAL</option>
                <option>TRÁNSITO</option>
                <option>VIOLENCIA</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="laborhabitual">¿Estaba realizando su labor habitual?</label>
            <div class="flex--seguridad radio">
                <input type="radio" name="laborhabitual"> <label for="laborhabitual" class="opcionradio">SI</label>
                <input type="radio" name="laborhabitual"> <label for="laborhabitual" class="opcionradio">NO</label>
            </div>
        </div>

        <div class="form--flex">
            <label class="form--label" for="labor">¿Cuál?</label>
            <input type="text" class="form--input" name="labor" required="">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="causamuerte">¿Causó la muerte al trabajador?</label>
            <div class="flex--seguridad radio">
                <input type="radio" name="causamuerte"> <label for="causamuerte" class="opcionradio">SI</label>
                <input type="radio" name="causamuerte"> <label for="causamuerte" class="opcionradio">NO</label>
            </div>
        </div>

        <div class="form--flex">
            <label class="form--label" for="zonaevento">Zona donde ocurrió el evento</label>
            <div class="flex--seguridad radio">
                <input type="radio" name="zonaevento"> <label for="zonaevento" class="opcionradio">URBANA</label>
                <input type="radio" name="zonaevento"> <label for="zonaevento" class="opcionradio">RURAL</label>
            </div>
        </div>

        <div class="form--flex">
            <label class="form--label" for="departamentoevento">Dpto. del evento</label>
            <select name="departamentoevento" required="" class="form--input" onchange="cargarMunicipiosCrear(this.value, '')">
                <option>Seleccione una opción</option>
                <?php

                foreach ($InformacionDepartamentos as $InfoDepartamento) {
                    echo "<option value='" . $InfoDepartamento["id_departamento"] . "'>" . $InfoDepartamento["departamento"] . "</option>";
                }

                ?>
            </select>
            <script>

                function cargarMunicipiosCrear(idDepartamento, idMunicipio)
                {
                    $.ajax({
                        url: "../../General/Queries/filtromunicipio.php",
                        type: "POST",
                        dataType: "HTML",
                        data: {idDepartamento: idDepartamento, idMunicipio: idMunicipio},
                        success: function(selectMunipicios){

                            document.getElementById("divMunicipioCrear").innerHTML = selectMunipicios;

                        }
                    });
                }

            </script>
        </div>

        <div class="form--flex" id="divMunicipioCrear">
            
        </div>

        <div class="form--flex">
            <label class="form--label" for="eventoempresa">¿Ocurrió el evento dentro de la empresa?</label>
            <div class="flex--seguridad radio">
                <input type="radio" name="eventoempresa"> <label for="eventoempresa" class="opcionradio">SI</label>
                <input type="radio" name="eventoempresa"> <label for="eventoempresa" class="opcionradio">NO</label>
            </div>
        </div>

        <div class="form--flex">
            <label class="form--label" for="sitio">Indique cuál sitio</label>
            <select name="sitio" class="form--input" required="">
                <option value="">Seleccione el lugar</option>
                <option>ALMACENES O DEPÓSITOS</option>
                <option>ÁREAS DE PRODUCCIÓN</option>
                <option>ÁREAS RECREATIVAS O PRODUCTIVAS</option>
                <option>CORREDORES O PASILLOS</option>
                <option>ESCALERAS</option>
                <option>OFICINAS</option>
                <option>OTRAS ÁREAS COMUNES</option>
                <option>PARQUEADEROS O ÁREAS DE CIRCULACIÓN VEHICULAR</option>  
                <option>OTRO</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="cuerpo">Parte del cuerpo afectada</label>
            <select name="cuerpo" class="form--input" required="">
                <option value="">Seleccione Parte</option>
                <option>ABDOMEN</option>
                <option>CABEZA</option>
                <option>CUELLO</option>
                <option>LESIONES GENERALES U OTRAS</option>
                <option>MANOS</option>
                <option>MIEMBROS INFERIORES</option>
                <option>MIEMBROS SUPERIORES</option>
                <option>OJOS</option>
                <option>PIES</option>
                <option>TORAX</option>
                <option>TRONCO (Incluye espalda, columna vertebral, médula espinal, pélvis))</option>
                <option>UBICACIONES MULTIPLES</option>
                <option>OTRO </option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="agente_evento">Agente del evento</label>
            <select name="agente_evento" class="form--input" required="">
                <option value="">Seleccione Medio</option>
                <option>AGENTES NO CLASIFICADAS POR FALTA DE DATOS</option>
                <option>AMBIENTE DE TRABAJO (Incluye superficies de tránsito y de trabajo, muebles, tejados, en el exterior, interior o subterráneos)</option>
                <option>ANIMALES (Vivos o productos animales)</option>
                <option>APARATOS</option>
                <option>ESCALERAS</option>
                <option>HERRAMIENTAS, IMPLEMENTOS O UTENSILIOS</option>
                <option>MÁQUINAS Y/O EQUIPOS</option>
                <option>MATERIALES O SUSTANCIAS</option>
                <option>MEDIOS DE TRANSPORTE</option>
                <option>RADIACIONES</option>
                <option>OTROS AGENTES NO CLASIFICADOS</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="mecanismoevento">Mecanismo o forma del evento</label>
            <select name="mecanismoevento" class="form--input" required="">
                <option value="">Seleccione Mecanismo</option>
                <option>ATRAPAMIENTOS</option>
                <option>CAÍDA DE OBJETOS</option>
                <option>CAIDA DE PERSONAS</option>
                <option>EXPOSICIÓN O CONTACTO CON TEMPERATURA EXTREMA</option>
                <option>EXPOSICIÓN O CONTACTO CON LA ELECTRICIDAD</option>
                <option>EXPOSICIÓN O CONTACTO CON SUSTNACIAS NOCIVAS, RADIACIONES O SALPICADURAS</option>
                <option>PISADAS, CHOQUES O GOLPES</option>
                <option>SOBREESFUERZO, ESFUERZO EXCESIVO O FALSO MOVIMIENTO</option>
                <option>OTRO</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="tipolesion">Tipo de lesión</label>
            <select name="tipolesion" class="form--input" required="">
                <option value="">Seleccione Lesión</option>
                <option>AMPUTACIÓN O ENUCLEACIÓN (Exclusión o pérdida del ojo)</option>
                <option>ASFIXIA</option>
                <option>CONMOCIÓN O TRAUMA INTERNO</option>
                <option>EFECTO DE LA ELECTRICIDAD</option>
                <option>EFECTO DEL TIEMPO, DEL CLIMA U OTRO RELACIONADO CON EL AMBIENTE</option>
                <option>EFECTO NOCIVO DE LA RADIACIÓN</option>
                <option>ENVENENAMIENTO O INTOXICACIÓN AGUDA O ALERGIA</option>
                <option>FRACTURA</option>
                <option>GOLPE, CONTUSIÓN O APLASTAMIENTO</option>
                <option>HERIDA</option>
                <option>LESIONES MULTIPLES</option>
                <option>LUXACIÓN</option>
                <option>QUEMADURA</option>
                <option>TORCEDURA, ESGUINCE, DESGARRO MUSCULAR, HERNIA O LACERACIÓN DE MÚSCULO O TENDÓN SIN HERIDA</option>
                <option>TRAUMA SUPERFICIAL (Incluye rasguño, punción o pinchazo y lesión en ojo por cuerpo extraño)</option>
                <option>OTRO</option>
            </select>
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="descripcion">Descripción del evento</label>
            <textarea class="form--input" name="descripcion" 
            placeholder="Describa detalladamente el evento. ¿Qué lo originó o causó? (Responda a las preguntas qué pasó, cuándo, dónde, cómo y por qué)."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--flex">
            <label class="form--label" for="accidente">¿Hubo personas que presenciaron el accidente?</label>
            <div class="flex--seguridad radio">
                <input type="radio" name="accidente"> <label for="accidente" class="opcionradio">SI</label>
                <input type="radio" name="accidente"> <label for="accidente" class="opcionradio">NO</label>
            </div>
        </div>

        <!-- INFORMACIÓN DE QUIEN REPORTA EL EVENTO -->
        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Información de quien reporta el evento</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="tipodocumento_inf">Tipo de documento</label>
            <select name="tipodocumento_inf" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>CEDULA DE CIUDADANIA</option>
                <option>CEDULA DE EXTRANJERIA</option>
                <option>PASAPORTE</option>
                <option>PERMISO ESPECIAL</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="identificacion_inf">No. identificación</label>
            <input type="number" class="form--input" name="identificacion_inf" placeholder="Número de identificación..." required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="nombres_inf">Nombres y apellidos</label>
            <input type="text" class="form--input" name="nombres_inf" placeholder="Nombres y apellidos..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="cargo_inf">Cargo</label>
            <input type="text" class="form--input" name="cargo_inf" placeholder="Cargo..."
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase" required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="telefono_inf">Teléfono o celular</label>
            <input type="number" class="form--input" name="telefono_inf" placeholder="Telefono o celular..." required="">
        </div>

        <div class="form--flex">
            <label class="form--label" for="correo_inf">Correo Electrónico</label>
            <input type="text" class="form--input" name="correo_inf" placeholder="Correo electrónico..." onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase" required="">
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Reportar Accidente">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>