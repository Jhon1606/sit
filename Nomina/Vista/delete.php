<form action="../Controlador/delete.php" method="POST" >
    <input type="hidden" id="ideliminar" name="id_nomina">

    <div class="contenedor__form--seleccion">
        
        <div class="cerrar">
            <p onclick="document.getElementById('flotanteEliminar').style.display='none'" 
            class="cerrar--talento" title="Cerrar">
                <i class="fa fa-close"></i>
            </p>
        </div>

        <div class="tituloSeleccion">
            <h2 class="tituloCrud"><i class="fas fa-user-check"></i>Requisición de Personal</h2>
        </div>
        
        <div class="form--titulo">
            <h2 class="eliminar center">¿Está seguro que desea eliminarlo?</h2>
        </div>

        <div class="form--titulo center">
                <input class="boton boton-si" type="submit" value="Sí">
                <input class="boton boton-no" onclick="document.getElementById('flotanteEliminar').style.display='none'" type="button" value="No">     
        </div>
    </div> <!-- .contenedor__form--talento-->
</form>