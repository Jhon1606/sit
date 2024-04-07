-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2024 a las 05:32:44
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buzon`
--

CREATE TABLE `buzon` (
  `id_buzon` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `personasoli` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inf_seguridad`
--

CREATE TABLE `inf_seguridad` (
  `id_infseguridad` int(11) NOT NULL,
  `nombretrabajadort` varchar(150) NOT NULL,
  `tipodocumento` varchar(50) NOT NULL,
  `identificaciont` int(11) NOT NULL,
  `nacimientot` date NOT NULL,
  `sexot` varchar(50) NOT NULL,
  `epst` varchar(255) NOT NULL,
  `afpt` varchar(255) NOT NULL,
  `cargot` varchar(255) NOT NULL,
  `fechaingresot` date NOT NULL,
  `ocupaciont` varchar(255) NOT NULL,
  `salariot` int(11) NOT NULL,
  `centrodecostot` varchar(255) NOT NULL,
  `zonat` varchar(255) NOT NULL,
  `tipovinculaciont` varchar(255) NOT NULL,
  `departamentot` varchar(255) NOT NULL,
  `ciudadt` varchar(255) NOT NULL,
  `direcciont` varchar(255) NOT NULL,
  `centrotrabajot` varchar(255) NOT NULL,
  `jornadat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id_ingreso` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cargo` varchar(80) NOT NULL,
  `asignacion` int(11) NOT NULL,
  `fechai` date NOT NULL,
  `nomina` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `centrocosto` varchar(50) NOT NULL,
  `nivelriesgo` varchar(80) NOT NULL,
  `procesoseleccion` varchar(10) NOT NULL,
  `motivo` varchar(200) NOT NULL,
  `nombrelabor` varchar(100) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `telseleccion` int(11) NOT NULL,
  `comentarios` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

CREATE TABLE `nomina` (
  `id_nomina` int(11) NOT NULL,
  `novedad_desde` date NOT NULL,
  `novedad_hasta` date NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `salario` int(11) NOT NULL,
  `fechaingreso` date NOT NULL,
  `centrodecosto` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `ordinario` int(11) NOT NULL,
  `transporte` int(11) NOT NULL,
  `horasrecargo` int(11) NOT NULL,
  `domingocompensado` int(11) NOT NULL,
  `horasrecnocturno` int(11) NOT NULL,
  `horasextradiurno` int(11) NOT NULL,
  `horasextranocturna` int(11) NOT NULL,
  `horasordinarias` int(11) NOT NULL,
  `horasex_domingod` int(11) NOT NULL,
  `horasrecdominical` int(11) NOT NULL,
  `horasex_domingon` int(11) NOT NULL,
  `bonificacion` int(11) NOT NULL,
  `auxilio` int(11) NOT NULL,
  `comision` int(11) NOT NULL,
  `bonosalarial` int(11) NOT NULL,
  `incapacidad` int(11) NOT NULL,
  `permisos` int(11) NOT NULL,
  `otro_horas` int(11) NOT NULL,
  `fecha_ausentismo` date NOT NULL,
  `casino` int(11) NOT NULL,
  `otro` int(11) NOT NULL,
  `observaciones` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nomina`
--

INSERT INTO `nomina` (`id_nomina`, `novedad_desde`, `novedad_hasta`, `cedula`, `nombre`, `salario`, `fechaingreso`, `centrodecosto`, `cargo`, `ordinario`, `transporte`, `horasrecargo`, `domingocompensado`, `horasrecnocturno`, `horasextradiurno`, `horasextranocturna`, `horasordinarias`, `horasex_domingod`, `horasrecdominical`, `horasex_domingon`, `bonificacion`, `auxilio`, `comision`, `bonosalarial`, `incapacidad`, `permisos`, `otro_horas`, `fecha_ausentismo`, `casino`, `otro`, `observaciones`) VALUES
(1, '0000-00-00', '0000-00-00', 0, 0, 0, '0000-00-00', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisiciones`
--

CREATE TABLE `requisiciones` (
  `id_requisicion` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `salario` int(11) NOT NULL,
  `comisiones` varchar(60) NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `nombrelabor` varchar(100) NOT NULL,
  `tiempo` int(11) NOT NULL,
  `fechae` date NOT NULL,
  `horae` time NOT NULL,
  `fechal` date NOT NULL,
  `horal` time NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `edadmin` int(11) NOT NULL,
  `edadmax` int(11) NOT NULL,
  `tiempolaboral` varchar(100) NOT NULL,
  `tarjetapro` varchar(20) NOT NULL,
  `otroidioma` varchar(20) NOT NULL,
  `usoherramientas` varchar(20) NOT NULL,
  `conduccion` varchar(20) NOT NULL,
  `estudios` varchar(100) NOT NULL,
  `funciones` varchar(100) NOT NULL,
  `departamento` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `turnos` varchar(50) NOT NULL,
  `ruta` varchar(50) NOT NULL,
  `casino` varchar(50) NOT NULL,
  `comentarios` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiro`
--

CREATE TABLE `retiro` (
  `id_retiro` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `salario` int(11) NOT NULL,
  `centrodecosto` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `fechanomina` date NOT NULL,
  `fecharetiro` date NOT NULL,
  `cartaretiro` varchar(50) NOT NULL,
  `novedadesnomina` varchar(255) NOT NULL,
  `pazysalvo` varchar(255) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  `ordinario` int(11) NOT NULL,
  `transporte` int(11) NOT NULL,
  `horasrecargo` int(11) NOT NULL,
  `domingocompensado` int(11) NOT NULL,
  `horasdiurnas` int(11) NOT NULL,
  `horasnocturnas` int(11) NOT NULL,
  `horasdominicales` int(11) NOT NULL,
  `horasdomingo_d` int(11) NOT NULL,
  `horasdomingo_n` int(11) NOT NULL,
  `horasrec_dominical` int(11) NOT NULL,
  `bonificacion` int(11) NOT NULL,
  `auxilio` int(11) NOT NULL,
  `comision` int(11) NOT NULL,
  `otro` int(11) NOT NULL,
  `incapacidad` int(11) NOT NULL,
  `permisos` int(11) NOT NULL,
  `otro_horas` int(11) NOT NULL,
  `casino` int(11) NOT NULL,
  `otro_desc` int(11) NOT NULL,
  `observaciones_reporte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad`
--

CREATE TABLE `seguridad` (
  `id_seguridad` int(11) NOT NULL,
  `nombretrabajador` varchar(100) NOT NULL,
  `tipodocumento` varchar(50) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nacimiento` date NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `eps` varchar(100) NOT NULL,
  `afp` varchar(100) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `fechaingreso` date NOT NULL,
  `ocupacion` varchar(255) NOT NULL,
  `zona` varchar(255) NOT NULL,
  `tipovinculacion` varchar(255) NOT NULL,
  `departamento` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `centrotrabajo` varchar(255) NOT NULL,
  `jornada` varchar(255) NOT NULL,
  `fechaevento` date NOT NULL,
  `hh` int(11) NOT NULL,
  `mm` int(11) NOT NULL,
  `horaevento` time NOT NULL,
  `jornadasucede` varchar(255) NOT NULL,
  `tipoevento` varchar(255) NOT NULL,
  `laborhabitual` varchar(255) NOT NULL,
  `labor` varchar(255) NOT NULL,
  `causamuerte` varchar(255) NOT NULL,
  `zonaevento` varchar(255) NOT NULL,
  `departamentoevento` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `eventoempresa` varchar(255) NOT NULL,
  `sitio` varchar(255) NOT NULL,
  `cuerpo` varchar(255) NOT NULL,
  `agente_evento` varchar(255) NOT NULL,
  `mecanismoevento` int(11) NOT NULL,
  `tipolesion` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `accidente` varchar(255) NOT NULL,
  `tipodocumento_inf` varchar(255) NOT NULL,
  `identificacion_inf` int(11) NOT NULL,
  `nombres_inf` varchar(255) NOT NULL,
  `cargo_inf` varchar(255) NOT NULL,
  `telefono_inf` int(11) NOT NULL,
  `correo_inf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talento`
--

CREATE TABLE `talento` (
  `id_talento` int(11) NOT NULL,
  `turno` int(11) NOT NULL,
  `hora` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `proyecto` varchar(255) NOT NULL,
  `nombretrabajador` varchar(100) NOT NULL,
  `nombresuperior` varchar(100) NOT NULL,
  `motivo` varchar(255) NOT NULL,
  `comentarios` varchar(255) NOT NULL,
  `archivouno` varchar(255) NOT NULL,
  `archivo_uno` varchar(255) NOT NULL,
  `archivodos` varchar(255) NOT NULL,
  `archivo_dos` varchar(255) NOT NULL,
  `archivotres` varchar(255) NOT NULL,
  `archivo_tres` varchar(255) NOT NULL,
  `archivocuatro` varchar(255) NOT NULL,
  `archivo_cuatro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_completo` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `perfil` varchar(150) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buzon`
--
ALTER TABLE `buzon`
  ADD PRIMARY KEY (`id_buzon`);

--
-- Indices de la tabla `inf_seguridad`
--
ALTER TABLE `inf_seguridad`
  ADD PRIMARY KEY (`id_infseguridad`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id_ingreso`);

--
-- Indices de la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD PRIMARY KEY (`id_nomina`);

--
-- Indices de la tabla `requisiciones`
--
ALTER TABLE `requisiciones`
  ADD PRIMARY KEY (`id_requisicion`);

--
-- Indices de la tabla `retiro`
--
ALTER TABLE `retiro`
  ADD PRIMARY KEY (`id_retiro`);

--
-- Indices de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  ADD PRIMARY KEY (`id_seguridad`);

--
-- Indices de la tabla `talento`
--
ALTER TABLE `talento`
  ADD PRIMARY KEY (`id_talento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buzon`
--
ALTER TABLE `buzon`
  MODIFY `id_buzon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inf_seguridad`
--
ALTER TABLE `inf_seguridad`
  MODIFY `id_infseguridad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nomina`
--
ALTER TABLE `nomina`
  MODIFY `id_nomina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `requisiciones`
--
ALTER TABLE `requisiciones`
  MODIFY `id_requisicion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `retiro`
--
ALTER TABLE `retiro`
  MODIFY `id_retiro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguridad`
--
ALTER TABLE `seguridad`
  MODIFY `id_seguridad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talento`
--
ALTER TABLE `talento`
  MODIFY `id_talento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
