<form action="../Controlador/edit.php" method="POST">
    <input type="hidden" id="ideditar" name="id_requisicion">
        
    <div class="contenedor__form--seleccion auto">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteEditarSeleccion').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-user-check"></i>Requisición de Personal</h2>
        </div>
        
        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Información básica de la solicitud</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="cargo">Cargo Solicitado</label>
            <input type="text" class="form--input" name="cargo" id="cargo"
            onChange="this.value=(this.value).toUpperCase()" style="text-transform:uppercase">
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="cantidad">Cantidad requerida</label>
            <input type="number" class="form--input" name="cantidad" id="cantidad" placeholder="Cantidad...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="nivel">Nivel de formación</label>
            <select name="nivel" id="nivel" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Comercial</option>
                <option>Directivo</option>
                <option>Operativo</option>
                <option>Profesional</option>
                <option>Técnico</option>
                <option>Tecnólogo</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="salario">Salario básico</label>
            <input type="number" class="form--input" name="salario" id="salario" placeholder="Salario básico...">
        </div>

        <div class="form--flex">
            <label class="form--label" for="comisiones">Comisiones</label>
            <input class="form--input" type="text" name="comisiones" id="comisiones" placeholder="Comisión..">
        </div>

        <div class="form--flex">
            <label class="form--label" for="motivo">Motivo del requerimiento</label>
            <select name="motivo" id="motivo" class="form--input">
                <option value="">Seleccione una opción</option>
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
            <textarea name="nombrelabor" id="nombrelabor" class="form--input" placeholder="Especifique el nombre de la obra o labor..." value="<?php echo $info['nombrelabor']; ?>"></textarea>
        </div>

        <div class="form--flex">
            <label class="form--label" for="tiempo">Tiempo estimado de la obra o labor (meses)</label>
            <input type="number" class="form--input" name="tiempo" id="tiempo">
        </div>

        <!-- ENTREVISTA CON EL CLIENTE -->
        
        <div class="form--entrevista">
            <p class="texto--entrevista center">Entrevista con el cliente (Tentativo)</p>
        </div>
        
        
        <div class="form--flex fecha">
            <label class="form--label" for="fechae">Fecha</label>
            <input type="date" name="fechae" id="fechae" class="form--input">
        </div>

        <div class="form--flex hora">
            <label class="form--label" for="horae">Hora</label>
            <input type="time" name="horae" id="horae" class="form--input">
        </div>
    
        
            
            <!-- INICIO DE LABOR -->
        
        <div class="form--inicioLabor">
            <p class="texto--entrevista center">Inicio de Labor (Tentativo)</p>
        </div>
            
            
        <div class="form--flex">
            <label class="form--label" for="fechal">Fecha</label>
            <input type="date" name="fechal" id="fechal" class="form--input">
        </div>

        <div class="form--flex">
            <label class="form--label" for="horal">Hora</label>
            <input type="time" name="horal" id="horal" class="form--input">
        </div> 


        <!-- PERFIL DE CARGO -->

        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Perfil de cargo</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="sexo">Sexo</label>
            <select name="sexo" id="sexo" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Masculino</option>
                <option>Femenino</option>
                <option>Indiferente</option>
            </select>
        </div>
        
        <div class="form--flex">
            <label class="form--label" for="tiempolaboral">Tiempo de experiencia laboral</label>
            <textarea name="tiempolaboral" id="tiempolaboral" class="form--input" 
            placeholder="Tiempo requerido en cargos similares..."></textarea>
        </div>

        <div class="form--flex">
            <label class="form--label" for="edadmin">Edad Minima</label>
            <input type="number" name="edadmin" id="edadmin" class="form--input" placeholder="18">
        </div>

        <div class="form--flex">
            <label class="form--label" for="edadmax">Edad máxima</label>
            <input type="number" name="edadmax" id="edadmax" class="form--input">
        </div>

        <!-- REQUISITOS ESPECIFICOS -->
        <div class="form--requisito">
            <p class="texto--entrevista center">Requisitos especificos</p>
        </div>

        <div class="form--flex">
            <label class="form--label" for="tarjetapro">Tarjeta profesional</label>
            <select name="tarjetapro" id="tarjetapro" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Aplica</option>
                <option>No aplica</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="otroidioma">Uso de otro idioma</label>
            <select name="otroidioma" id="otroidioma" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>No aplica</option>
                <option>Alemán</option>
                <option>Francés</option>
                <option>Inglés</option>
                <option>Mandarín</option>
                <option>Portugués</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="usoherramientas">Uso de herramientas ofimáticas</label>
            <select name="usoherramientas" id="usoherramientas" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Aplica</option>
                <option>No aplica</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="conduccion">Conducción de vehiculos</label>
            <select name="conduccion" id="conduccion" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>No aplica</option>
                <option>A1</option>
                <option>A2</option>
                <option>B1</option>
                <option>B2</option>
                <option>B3</option>
                <option>C1</option>
                <option>C2</option>
                <option>C3</option>
            </select>
        </div>

        <div class="form--flex estudio">
            <label class="form--label" for="estudios">Estudios</label>
            <textarea class="form--input" name="estudios" id="estudios"
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--flex funciones">
            <label class="form--label" for="funciones">Funciones del cargo</label>
            <textarea class="form--input" name="funciones" id="funciones"
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--titulo">
            <h2 class="contenedor__titulo--conocenos center">Condiciones del puesto de trabajo</h2>
        </div>

        <div class="form--flex">
            <label class="form--label" for="departamento">Departamento</label>
            <select name="departamento" id="departamento" class="form--input" onchange="cargarMunicipiosEditar(this.value, '')">
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
                        url: "../../General/Queries/filtromunicipio.php",
                        type: "POST",
                        dataType: "HTML",
                        data: {idDepartamento: idDepartamento, idMunicipio, idMunicipio},
                        success: function(selectMunipicios){

                            document.getElementById("divMunicipioEditar").innerHTML = selectMunipicios;

                        }
                    });
                }

            </script>
        </div>

        <div class="form--flex" id="divMunicipioEditar">
        </div>

        <div class="form--flex">
            <label class="form--label" for="direccion">Dirección</label>
            <textarea class="form--input" name="direccion" id="direccion" placeholder="Dirección del sitio de trabajo..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--flex">
            <label class="form--label" for="horario">Horario</label>
            <textarea class="form--input" name="horario" id="horario" placeholder="Horarios establecidos para el cargo..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--requisito">
            <p class="texto--entrevista center">Condiciones especificas</p>
        </div>

        <div class="form--flex">
            <label class="form--label" for="turnos">Turnos</label>
            <select name="turnos" id="turnos" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Aplica</option>
                <option>No aplica</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="ruta">Ruta de transporte</label>
            <select name="ruta" id="ruta" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Aplica</option>
                <option>No aplica</option>
            </select>
        </div>

        <div class="form--flex">
            <label class="form--label" for="casino">Casino</label>
            <select name="casino" id="casino" class="form--input">
                <option value="">Seleccione una opción</option>
                <option>Aplica</option>
                <option>No aplica</option>
            </select>
        </div>

        <div class="form--flex comentarios">
            <label class="form--label" for="comentarios">Comentarios adicionales</label>
            <textarea class="form--input" name="comentarios" id="comentarios" placeholder="Escriba cualquier comentario u observación adicional si aplica..."
            onChange="this.value=(this.value).toLowerCase()" style="text-transform:lowercase"></textarea>
        </div>

        <div class="form--titulo botonSeleccion">
            <input class="boton" type="submit" value="Enviar">
        </div> 
    </div> <!-- .contenedor__form--talento-->
</form>

