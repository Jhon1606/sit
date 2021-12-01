window.onload=function(){

    var pos=window.name || 0;
    window.scrollTo(0,pos);

}

window.onunload=function(){

    window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);

}

function abrirFlotante(proceso){
    document.getElementById("flotante" + proceso).style.display = "block";
}

function abrirFlotanteEditarSeleccion(ideditar){
    
    $.ajax({
        url: "../../General/Queries/inforequisicion.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var cargo = info[0].cargo;
        var cantidad = info[0].cantidad;
        var nivel = info[0].nivel;
        var salario = info[0].salario;
        var comisiones = info[0].comisiones;
        var motivo = info[0].motivo;
        var nombrelabor = info[0].nombrelabor;
        var tiempo = info[0].tiempo;
        var fechae = info[0].fechae;
        var horae = info[0].horae;
        var fechal = info[0].fechal;
        var horal = info[0].horal;
        var sexo = info[0].sexo;
        var edadmin = info[0].edadmin;
        var edadmax = info[0].edadmax;
        var tiempolaboral = info[0].tiempolaboral;
        var tarjetapro = info[0].tarjetapro;
        var otroidioma = info[0].otroidioma;
        var usoherramientas = info[0].usoherramientas;
        var conduccion = info[0].conduccion;
        var estudios = info[0].estudios;
        var funciones = info[0].funciones;
        var departamento = info[0].departamento;
        var municipio = info[0].municipio;
        var direccion = info[0].direccion;
        var horario = info[0].horario;
        var turnos = info[0].turnos;
        var ruta = info[0].ruta;
        var casino = info[0].casino;
        var comentarios = info[0].comentarios;

        $("#ideditar").val(ideditar);
        $("#cargo").val(cargo);
        $("#cantidad").val(cantidad);
        $("#nivel").val(nivel);
        $("#salario").val(salario);
        $("#comisiones").val(comisiones);
        $("#motivo").val(motivo);
        $("#nombrelabor").val(nombrelabor);
        $("#tiempo").val(tiempo);
        $("#fechae").val(fechae);
        $("#horae").val(horae);
        $("#fechal").val(fechal);
        $("#horal").val(horal);
        $("#sexo").val(sexo);
        $("#edadmin").val(edadmin);
        $("#edadmax").val(edadmax);
        $("#tiempolaboral").val(tiempolaboral);
        $("#tarjetapro").val(tarjetapro);
        $("#otroidioma").val(otroidioma);
        $("#usoherramientas").val(usoherramientas);
        $("#conduccion").val(conduccion);
        $("#estudios").val(estudios);
        $("#funciones").val(funciones);
        $("#departamento").val(departamento);

        cargarMunicipiosEditar(departamento, municipio); 

        $("#direccion").val(direccion);
        $("#horario").val(horario);
        $("#turnos").val(turnos);
        $("#ruta").val(ruta);
        $("#casino").val(casino); 
        $("#comentarios").val(comentarios);
        $("#flotanteEditarSeleccion").show();

    });
}

function abrirFlotanteEditarIngreso(ideditar){

    $.ajax({
        url: "../../General/Queries/infoingreso.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var cedula = info[0].cedula;
        var nombre = info[0].nombre;
        var cargo = info[0].cargo;
        var asignacion = info[0].asignacion;
        var fechai = info[0].fechai;
        var nomina = info[0].nomina;
        var ciudad = info[0].ciudad;
        var centrocosto = info[0].centrocosto;
        var nivelriesgo = info[0].nivelriesgo;
        var procesoseleccion = info[0].procesoseleccion;
        var motivo = info[0].motivo;
        var nombrelabor = info[0].nombrelabor;
        var tiempo = info[0].tiempo;
        var telseleccion = info[0].telseleccion;
        var comentarios = info[0].comentarios;

        $("#ideditar").val(ideditar);
        $("#cedula").val(cedula);
        $("#nombre").val(nombre);
        $("#cargo").val(cargo);
        $("#asignacion").val(asignacion);
        $("#fechai").val(fechai);
        $("#nomina").val(nomina);
        $("#ciudad").val(ciudad);
        $("#centrocosto").val(centrocosto);
        $("#nivelriesgo").val(nivelriesgo);
        $("#procesoseleccion").val(procesoseleccion);
        $("#motivo").val(motivo);
        $("#nombrelabor").val(nombrelabor);
        $("#tiempo").val(tiempo);
        $("#telseleccion").val(telseleccion);
        $("#comentarios").val(comentarios);
        $("#flotanteEditarIngreso").show();
    });
}

function abrirFlotanteEditarRetiro(ideditar){

    $.ajax({
        url: "../../General/Queries/inforetiro.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){
   
        var cedula = info[0].cedula;
        var nombre = info[0].nombre;
        var salario = info[0].salario;
        var centrodecosto = info[0].centrodecosto;
        var cargo = info[0].cargo;
        var fechanomina = info[0].fechanomina;
        var fecharetiro = info[0].fecharetiro;
        var cartaretiro = info[0].cartaretiro;
        var novedadesnomina = info[0].novedadesnomina;
        var pazysalvo = info[0].pazysalvo;
        var observaciones = info[0].observaciones;
        var ordinario = info[0].ordinario;
        var transporte = info[0].transporte;
        var horasrecargo = info[0].horasrecargo;
        var domingocompensado = info[0].domingocompensado;
        var horasdiurnas = info[0].horasdiurnas;
        var horasnocturnas = info[0].horasnocturnas;
        var horasdominicales = info[0].horasdominicales;
        var horasdomingo_d = info[0].horasdomingo_d;
        var horasdomingo_n = info[0].horasdomingo_n;
        var horasrec_dominical = info[0].horasrec_dominical;
        var bonificacion = info[0].bonificacion;
        var auxilio = info[0].auxilio;
        var comision = info[0].comision;
        var otro = info[0].otro;
        var incapacidad = info[0].incapacidad;
        var permisos = info[0].permisos;
        var otro_horas = info[0].otro_horas;
        var casino = info[0].casino;
        var otro_desc = info[0].otro_desc;
        var observaciones_reporte = info[0].observaciones_reporte;
      
        $("#ideditar").val(ideditar);
        $("#cedula").val(cedula);
        $("#nombre").val(nombre);
        $("#salario").val(salario);
        $("#centrodecosto").val(centrodecosto);
        $("#cargo").val(cargo);
        $("#fechanomina").val(fechanomina);
        $("#fecharetiro").val(fecharetiro);
        $("#cartaretiro").val(cartaretiro);
        $("#novedadesnomina").val(novedadesnomina);
        $("#pazysalvo").val(pazysalvo);
        $("#observaciones").val(observaciones);
        $("#ordinario").val(ordinario);
        $("#transporte").val(transporte);
        $("#horasrecargo").val(horasrecargo);
        $("#domingocompensado").val(domingocompensado);
        $("#horasdiurnas").val(horasdiurnas);
        $("#horasnocturnas").val(horasnocturnas);
        $("#horasdominicales").val(horasdominicales);
        $("#horasdomingo_d").val(horasdomingo_d);
        $("#horasdomingo_n").val(horasdomingo_n);
        $("#horasrec_dominical").val(horasrec_dominical);
        $("#bonificacion").val(bonificacion);
        $("#auxilio").val(auxilio);
        $("#comision").val(comision);
        $("#otro").val(otro);
        $("#incapacidad").val(incapacidad);
        $("#permisos").val(permisos);
        $("#otro_horas").val(otro_horas);
        $("#casino").val(casino);
        $("#otro_desc").val(otro_desc);
        $("#observaciones_reporte").val(observaciones_reporte);
        $("#flotanteEditarRetiro").show();
    });
}

function abrirFlotanteEditarNomina(ideditar){

    $.ajax({
        url: "../../General/Queries/infonomina.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var novedad_desde = info[0].novedad_desde;
        var novedad_hasta = info[0].novedad_hasta;
        var cedula = info[0].cedula;
        var nombre = info[0].nombre;
        var salario = info[0].salario;
        var fechaingreso = info[0].fechaingreso;
        var centrodecosto = info[0].centrodecosto;
        var cargo = info[0].cargo;
        var ordinario = info[0].ordinario;
        var transporte = info[0].transporte;
        var horasrecargo = info[0].horasrecargo;
        var domingocompensado = info[0].domingocompensado;
        var horasrecnocturno = info[0].horasrecnocturno;
        var horasextradiurno = info[0].horasextradiurno;
        var horasextranocturna = info[0].horasextranocturna;
        var horasordinarias = info[0].horasordinarias;
        var horasex_domingod = info[0].horasex_domingod;
        var horasrecdominical = info[0].horasrecdominical;
        var horasex_domingon = info[0].horasex_domingon;
        var bonificacion = info[0].bonificacion;
        var auxilio = info[0].auxilio;
        var comision = info[0].comision;
        var bonosalarial = info[0].bonosalarial;
        var incapacidad = info[0].incapacidad;
        var permisos = info[0].permisos;
        var otro_horas = info[0].otro_horas;
        var fecha_ausentismo = info[0].fecha_ausentismo;
        var casino = info[0].casino;
        var otro = info[0].otro;
        var observaciones = info[0].observaciones;
      
        $("#ideditar").val(ideditar);
        $("#novedad_desde").val(novedad_desde);
        $("#novedad_hasta").val(novedad_hasta);
        $("#cedula").val(cedula);
        $("#nombre").val(nombre);
        $("#salario").val(salario);
        $("#fechaingreso").val(fechaingreso);
        $("#centrodecosto").val(centrodecosto);
        $("#cargo").val(cargo);
        $("#ordinario").val(ordinario);
        $("#transporte").val(transporte);
        $("#horasrecargo").val(horasrecargo);
        $("#domingocompensado").val(domingocompensado);
        $("#horasrecnocturno").val(horasrecnocturno);
        $("#horasextradiurno").val(horasextradiurno);
        $("#horasextranocturna").val(horasextranocturna);
        $("#horasordinarias").val(horasordinarias);
        $("#horasex_domingod").val(horasex_domingod);
        $("#horasrecdominical").val(horasrecdominical);
        $("#horasex_domingon").val(horasex_domingon);
        $("#bonificacion").val(bonificacion);
        $("#auxilio").val(auxilio);
        $("#comision").val(comision);
        $("#bonosalarial").val(bonosalarial);
        $("#incapacidad").val(incapacidad);
        $("#permisos").val(permisos);
        $("#otro_horas").val(otro_horas);
        $("#fecha_ausentismo").val(fecha_ausentismo);
        $("#casino").val(casino);
        $("#otro").val(otro);
        $("#observaciones").val(observaciones);
        $("#flotanteEditarNomina").show();
    });
}

function abrirFlotanteEditarBuzon(ideditar){

    $.ajax({
        url: "../../General/Queries/infobuzon.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var descripcion = info[0].descripcion;
        var respuesta = info[0].respuesta;
        var fecharespuesta = info[0].fecharespuesta;
        var registro = info[0].registro;
        var personasoli = info[0].personasoli;
        var asunto = info[0].asunto;
        var archivo = info[0].archivo;
        var estado = info[0].estado;
      
        $("#ideditar").val(ideditar);
        $("#descripcion").val(descripcion);
        $("#respuesta").val(respuesta);
        $("#fecharespuesta").val(fecharespuesta);
        $("#registro").val(registro);
        $("#personasoli").val(personasoli);
        $("#asunto").val(asunto);
        $("#archivo").attr("href", "../../General/Files/" + archivo);
        $("#estado").val(estado);
        $("#flotanteEditarBuzon").show();
    });
}

function abrirFlotanteEditarTalento(ideditar){

    $.ajax({
        url: "../../General/Queries/infotalento.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var turno = info[0].turno;
        var hora = info[0].hora;
        var fecha = info[0].fecha;
        var ciudad = info[0].ciudad;
        var proyecto = info[0].proyecto;
        var nombretrabajador = info[0].nombretrabajador;
        var nombresuperior = info[0].nombresuperior;
        var motivo = info[0].motivo;
        var comentarios = info[0].comentarios; 
        var archivouno = info[0].archivouno; 
        var archivo_uno = info[0].archivo_uno; 
        var archivodos = info[0].archivodos; 
        var archivo_dos = info[0].archivo_dos; 
        var archivotres = info[0].archivotres; 
        var archivo_tres = info[0].archivo_tres; 
        var archivocuatro = info[0].archivocuatro; 
        var archivo_cuatro = info[0].archivo_cuatro; 
      
        $("#ideditar").val(ideditar);
        $("#turno").val(turno);
        $("#hora").val(hora);
        $("#fecha").val(fecha);
        $("#ciudad").val(ciudad);
        $("#proyecto").val(proyecto);
        $("#nombretrabajador").val(nombretrabajador);
        $("#nombresuperior").val(nombresuperior);
        $("#motivo").val(motivo);
        $("#comentarios").val(comentarios);
        $("#archivouno").val(archivouno);
        $("#archivo_uno").val(archivo_uno);
        $("#archivodos").val(archivodos);
        $("#archivo_dos").val(archivo_dos);
        $("#archivotres").val(archivotres);
        $("#archivo_tres").val(archivo_tres);
        $("#archivocuatro").val(archivocuatro);
        $("#archivo_cuatro").val(archivo_cuatro);
        $("#flotanteEditarTalento").show();
    });
}

function abrirFlotanteEditarSeguridad(ideditar){
    
    $.ajax({
        url: "../../General/Queries/infoseguridad.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var nombretrabajador = info[0].nombretrabajador;
        var tipodocumento = info[0].tipodocumento;
        var identificacion = info[0].identificacion;
        var nacimiento = info[0].nacimiento;
        var sexo = info[0].sexo;
        var eps = info[0].eps;
        var afp = info[0].afp;
        var cargo = info[0].cargo;
        var fechaingreso = info[0].fechaingreso;
        var ocupacion = info[0].ocupacion;
        var zona = info[0].zona;
        var tipovinculacion = info[0].tipovinculacion;
        var departamento = info[0].departamento;
        var ciudad = info[0].ciudad;
        var direccion = info[0].direccion;
        var centrotrabajo = info[0].centrotrabajo;
        var jornada = info[0].jornada;
        var fechaevento = info[0].fechaevento;
        var hh = info[0].hh;
        var mm = info[0].mm;
        var horaevento = info[0].horaevento;
        var jornadasucede = info[0].jornadasucede;
        var tipoevento = info[0].tipoevento;
        var laborhabitual = info[0].laborhabitual;
        var labor = info[0].labor;
        var causamuerte = info[0].causamuerte;
        var motivo = info[0].motivo;
        var zonaevento = info[0].zonaevento;
        var tiempo = info[0].tiempo;
        var telseleccion = info[0].telseleccion;
        var departamentoevento = info[0].departamentoevento;
        var municipio = info[0].municipio;
        var eventoempresa = info[0].eventoempresa;
        var sitio = info[0].sitio;
        var cuerpo = info[0].cuerpo;
        var agente_evento = info[0].agente_evento;
        var mecanismoevento = info[0].mecanismoevento;
        var tipolesion = info[0].tipolesion;
        var descripcion = info[0].descripcion;
        var accidente = info[0].accidente;
        var tipodocumento_inf = info[0].tipodocumento_inf;
        var identificacion_inf = info[0].identificacion_inf;
        var nombres_inf = info[0].nombres_inf;
        var cargo_inf = info[0].cargo_inf;
        var telefono_inf = info[0].telefono_inf;
        var correo_inf = info[0].correo_inf;

        $("#ideditar").val(ideditar);
        $("#nombretrabajador").val(nombretrabajador);
        $("#tipodocumento").val(tipodocumento);
        $("#identificacion").val(identificacion);
        $("#nacimiento").val(nacimiento);
        $("#sexo").val(sexo);
        $("#eps").val(eps);
        $("#afp").val(afp);
        $("#cargo").val(cargo);
        $("#fechaingreso").val(fechaingreso);
        $("#ocupacion").val(ocupacion);
        $("#zona").val(zona);
        $("#tipovinculacion").val(tipovinculacion);
        $("#departamento").val(departamento);
        cargarMunicipiosEditarCiudad(departamento, ciudad);
        $("#direccion").val(direccion);
        $("#centrotrabajo").val(centrotrabajo);
        $("#jornada").val(jornada);
        $("#fechaevento").val(fechaevento);
        $("#hh").val(hh);
        $("#mm").val(mm);
        $("#horaevento").val(horaevento);
        $("#jornadasucede").val(jornadasucede);
        $("#tipoevento").val(tipoevento);

        if(laborhabitual == "on"){
            document.getElementById("laborhabitualsi").checked = true;
        } else{
            document.getElementById("laborhabitualno").checked = true;
        }      

        $("#labor").val(labor);

        if(causamuerte == "on"){
            document.getElementById("causamuertesi").checked = true;
        } else{
            document.getElementById("causamuerteno").checked = true;
        }   
        $("#motivo").val(motivo);

        if(zonaevento == "on"){
            document.getElementById("zonaeventosi").checked = true;
        } else{
            document.getElementById("zonaeventono").checked = true;
        }  

        $("#tiempo").val(tiempo);
        $("#telseleccion").val(telseleccion);
        $("#departamentoevento").val(departamentoevento);
        cargarMunicipiosEditar(departamentoevento, municipio); 

        if(eventoempresa == "on"){
            document.getElementById("eventoempresasi").checked = true;
        } else{
            document.getElementById("eventoempresano").checked = true;
        }      

        $("#sitio").val(sitio);
        $("#cuerpo").val(cuerpo);
        $("#agente_evento").val(agente_evento);
        $("#mecanismoevento").val(mecanismoevento);
        $("#tipolesion").val(tipolesion);
        $("#descripcion").val(descripcion);

        if(accidente == "on"){
            document.getElementById("accidentesi").checked = true;
        } else{
            document.getElementById("accidenteno").checked = true;
        }     

        $("#tipodocumento_inf").val(tipodocumento_inf);
        $("#identificacion_inf").val(identificacion_inf);
        $("#nombres_inf").val(nombres_inf);
        $("#cargo_inf").val(cargo_inf);
        $("#telefono_inf").val(telefono_inf);
        $("#correo_inf").val(correo_inf);
        $("#flotanteEditarSeguridad").show();
    });
}

function abrirFlotanteEditarUsuario(ideditar){

    $.ajax({
        url: "../../General/Queries/infousuario.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var nombre_completo = info[0].nombre_completo;
        var correo = info[0].correo;
        var usuario = info[0].usuario;
        var contrasena = info[0].contrasena;
        var perfil = info[0].perfil;
        var fecha_registro = info[0].fecha_registro;
        var estado = info[0].estado;
      
        
        $("#ideditar").val(ideditar);
        $("#nombre_completo").val(nombre_completo);
        $("#correo").val(correo);
        $("#usuario").val(usuario);
        $("#contrasena").val(contrasena);
        $("#perfil").val(perfil);
        $("#fecha_registro").val(fecha_registro);
        $("#estado").val(estado);
        $("#flotanteEditarUsuario").show();
    });
}

function abrirFlotanteEditarTrabajador(ideditar){

    $.ajax({
        url: "../../General/Queries/infotrabajador.php",
        type: "POST",
        dataType: "JSON",
        data: {ideditar: ideditar}
    })
    .done(function(info){

        var identificaciont = info[0].identificaciont;
        var nombretrabajadort = info[0].nombretrabajadort;
        var tipodocumentot = info[0].tipodocumentot;
        var fecharespuestat = info[0].fecharespuestat;
        var nacimientot = info[0].nacimientot;
        var sexot = info[0].sexot;
        var epst = info[0].epst;
        var afpt = info[0].afpt;
        var cargot = info[0].cargot;
        var fechaingresot = info[0].fechaingresot;
        var ocupaciont = info[0].ocupaciont;
        var salariot = info[0].salariot;
        var centrodecostot = info[0].centrodecostot;
        var zonat = info[0].zonat;
        var tipovinculaciont = info[0].tipovinculaciont;
        var departamentot = info[0].departamentot;
        var ciudadt = info[0].ciudadt;
        var direcciont = info[0].direcciont;
        var centrotrabajot = info[0].centrotrabajot;
        var jornadat = info[0].jornadat;    
      
        $("#ideditar").val(ideditar);
        $("#identificaciont").val(identificaciont);
        $("#nombretrabajadort").val(nombretrabajadort);
        $("#tipodocumentot").val(tipodocumentot);
        $("#fecharespuestat").val(fecharespuestat);
        $("#nacimientot").val(nacimientot);
        $("#sexot").val(sexot);
        $("#epst").val(epst);
        $("#afpt").val(afpt);
        $("#cargot").val(cargot);
        $("#fechaingresot").val(fechaingresot);
        $("#ocupaciont").val(ocupaciont);
        $("#salariot").val(salariot);
        $("#centrodecostot").val(centrodecostot);
        $("#zonat").val(zonat);
        $("#tipovinculaciont").val(tipovinculaciont);
        $("#departamentot").val(departamentot);
        cargarMunicipiosEditar(departamentot, ciudadt); 
        $("#direcciont").val(direcciont);
        $("#centrotrabajot").val(centrotrabajot);
        $("#jornadat").val(jornadat);
        $("#flotanteEditarTrabajador").show();
    });
}


function cargarTrabajador(identificaciont){

    $.ajax({
        url: "../../General/Queries/filtrotrabajador.php",
        type: "POST",
        dataType: "JSON",
        data: {identificaciont: identificaciont}
    })
    .done(function(info){

        var identificaciont = info[0].identificaciont;
        var nombretrabajadort = info[0].nombretrabajadort;
        var tipodocumentot = info[0].tipodocumentot;
        var fecharespuestat = info[0].fecharespuestat;
        var nacimientot = info[0].nacimientot;
        var sexot = info[0].sexot;
        var epst = info[0].epst;
        var afpt = info[0].afpt;
        var cargot = info[0].cargot;
        var fechaingresot = info[0].fechaingresot;
        var ocupaciont = info[0].ocupaciont;
        var salariot = info[0].salariot;
        var centrodecostot = info[0].centrodecostot;
        var zonat = info[0].zonat;
        var tipovinculaciont = info[0].tipovinculaciont;
        var departamentot = info[0].departamentot;
        var ciudadt = info[0].ciudadt;
        var direcciont = info[0].direcciont;
        var centrotrabajot = info[0].centrotrabajot;
        var jornadat = info[0].jornadat;
      
        $("#identificaciont").val(identificaciont);
        $("#nombretrabajadort").val(nombretrabajadort);
        $("#tipodocumentot").val(tipodocumentot);
        $("#fecharespuestat").val(fecharespuestat);
        $("#nacimientot").val(nacimientot);
        $("#sexot").val(sexot);
        $("#epst").val(epst);
        $("#afpt").val(afpt);
        $("#cargot").val(cargot);
        $("#fechaingresot").val(fechaingresot);
        $("#ocupaciont").val(ocupaciont);
        $("#salariot").val(salariot);
        $("#centrodecostot").val(centrodecostot);
        $("#zonat").val(zonat);
        $("#tipovinculaciont").val(tipovinculaciont);
        $("#departamentot").val(departamentot);
        cargarMunicipios(departamentot, ciudadt); 
        $("#direcciont").val(direcciont);
        $("#centrotrabajot").val(centrotrabajot);
        $("#jornadat").val(jornadat);
        $("#flotanteSeguridad").show();
    });
}

function abrirFlotanteEliminar(ideliminar){
    document.getElementById("ideliminar").value = ideliminar;
    document.getElementById("flotanteEliminar").style.display = "block";
}

function abrirRecuperar(){
    document.getElementById("recuperar").style.display = "block";
}

function abrirNav(){
    var clase = document.getElementById("nav").className;

    if (clase == "navegacion--block"){
        clase = "navegacion--none";
    }else{
        clase = "navegacion--block";
    }
    document.getElementById("nav").className = clase;
}