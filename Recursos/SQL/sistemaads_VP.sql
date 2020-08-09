-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-08-2020 a las 06:58:24
-- Versión del servidor: 5.7.12-log
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaads`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleherramientas`
--

CREATE TABLE `detalleherramientas` (
  `idDetalle` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `idHerramienta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalleherramientas`
--

INSERT INTO `detalleherramientas` (`idDetalle`, `idSolicitud`, `idHerramienta`, `cantidad`) VALUES
(1, 3, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesuministros`
--

CREATE TABLE `detallesuministros` (
  `idDetalle` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `idSuministro` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detallesuministros`
--

INSERT INTO `detallesuministros` (`idDetalle`, `idSolicitud`, `idSuministro`, `cantidad`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 3),
(3, 2, 3, 1),
(4, 2, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleusuarios`
--

CREATE TABLE `detalleusuarios` (
  `idDetalle` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalleusuarios`
--

INSERT INTO `detalleusuarios` (`idDetalle`, `login`, `id`, `estado`) VALUES
(1, 'user2', 1, 1),
(2, 'user2', 2, 0),
(3, 'user2', 3, 1),
(4, 'user2', 4, 1),
(5, 'user1', 1, 1),
(6, 'user1', 2, 0),
(7, 'user1', 3, 0),
(8, 'user1', 4, 1),
(54, 'user3', 1, 1),
(55, 'user3', 2, 0),
(56, 'user3', 3, 1),
(57, 'user3', 4, 1),
(58, 'user4', 1, 0),
(59, 'user4', 2, 1),
(60, 'user4', 3, 0),
(61, 'user4', 4, 0),
(62, 'user5', 1, 1),
(63, 'user5', 2, 0),
(64, 'user5', 3, 0),
(65, 'user5', 4, 1),
(66, 'aaaaa', 1, 0),
(67, 'aaaaa', 2, 0),
(68, 'aaaaa', 3, 0),
(69, 'aaaaa', 4, 0),
(70, 'lmaonade', 1, 1),
(71, 'lmaonade', 2, 1),
(72, 'lmaonade', 3, 1),
(73, 'lmaonade', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta`
--

CREATE TABLE `herramienta` (
  `idherramienta` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `detalle` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `herramienta`
--

INSERT INTO `herramienta` (`idherramienta`, `nombre`, `cantidad`, `estado`, `detalle`) VALUES
(1, 'Alicate de punta', 10, 1, 'Alicate de punta larga para uso en áreas de difícil acceso. Cuenta con un mango para un agarre cómodo.'),
(2, 'Alicate universal', 10, 1, 'Este alicate es el preferido por los electricistas para realizar distintos trabajos. Cuenta con un mango de agarre cómodo para que sea más fácil sujetar y cortar cables.'),
(3, 'Alicate de corte', 10, 1, 'Alicate de 6" para cortes diagonales. El mango es de un material especial que ayudará al agarre al momento del trabajo'),
(4, 'Alicate de presion', 10, 1, 'Alicate de presión fabricado en acero cromo vanadio con palanca de afloje rápido y mordazas curvas con 4 puntos de contacto para una máxima presión sobre tuercas y tornillos.'),
(5, 'Pelacable', 10, 1, 'Pinza que corta y pela cables de 10 a 18 AWG. Cuenta con 10 mordazas para crimpar.'),
(6, 'Alicate pelacable', 10, 1, 'Estos alicates están específicamente destinados a quitar la cubierta protectora de los cables eléctricos para poder manipular el núcleo conductor de cobre y crear así las conexiones necesarias.'),
(7, 'Alicates para anillos Seeger', 10, 1, 'Este tipo de alicates son muy útiles para el montaje y desmontaje de anillos de retención'),
(8, 'Martillo Carpintero', 10, 1, 'Mango de fibra con cubierta de jebe antideslizante y ergonómica.\r\nPeso 20oz'),
(9, 'Llave Stillson 8\'\'', 10, 1, 'Marca ProField'),
(10, 'Caja de herramientas 12"', 5, 1, 'Marca Bauker'),
(11, 'Arco de Sierra Ajustable', 10, 1, 'Marca Stanley'),
(12, 'Remachadora de 2 Posiciones', 10, 1, 'Marca Redline'),
(13, 'Caja de Herramientas 11"', 5, 1, 'Marca Rimax'),
(14, 'Set tarraja Macho', 3, 1, 'Marca UyusTools'),
(15, 'Lima Mediacaña 8\'\'', 10, 1, 'Marca ProField'),
(16, 'Caja de Herramientas 28"', 5, 1, 'Marca Ubermann'),
(17, 'Prensa C', 15, 1, 'Marca Home Tools'),
(18, 'Desarmador M/de color 102-12\'\' (3/16)', 10, 1, 'Marca Rubicon'),
(19, 'Caja de Herramientas Tool Box', 5, 1, 'Marca Bosh'),
(20, 'Set 92 Herramientas Manuales', 2, 1, 'Marca Redline'),
(21, 'Llave ajustable 6"', 10, 1, 'Marca Redline'),
(22, 'Huincha 3 m', 10, 1, 'Stanley'),
(23, 'Huincha 5 m', 10, 1, 'Stanley'),
(24, 'Juego de 8 Destornilladores Plano y Phillips', 4, 1, 'Marca WILLIAMS'),
(25, 'Guantes de Hilo p/d', 20, 1, 'Marca Redline'),
(26, 'Guantes de Cuero Driver amarillo', 20, 1, 'Marca STEELPRO'),
(27, 'Guantes de Nitrilo Talla M', 20, 1, 'Marca Redline'),
(28, 'michi', 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL,
  `icono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrol`, `rol`, `path`, `icono`) VALUES
(1, 'Personal de Atencion', '../atentionModule/indexEmitirSolicitud.php', 'fa fa-group'),
(2, 'Almacenero', '../managementModule/indexGestionSH.php', 'fa fa-key'),
(3, 'Despachador', '../atentionModule/indexEmitirRegistro.php', 'glyphicon glyphicon-pencil'),
(4, 'Administrador', '../managementModule/indexGestionUsuario.php', 'fa fa-coffee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `idSolicitud` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `motivo` text NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`idSolicitud`, `nombre`, `dni`, `motivo`, `fecha`, `estado`) VALUES
(1, 'Moisés', '77777666', '', '2020-08-07', 1),
(2, 'Larios', '77776945', '', '2020-08-07', 2),
(3, 'Ochoa', '78528585', 'Los suministros no son necesarios para el trabajo actual', '2020-08-07', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suministro`
--

CREATE TABLE `suministro` (
  `idsuministro` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `detalle` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suministro`
--

INSERT INTO `suministro` (`idsuministro`, `nombre`, `cantidad`, `unidad`, `estado`, `detalle`) VALUES
(1, 'clavo sin cabeza 3.4\'', 5, 6, 1, ''),
(2, 'clavo con cabeza 1.2\'\'', 5, 6, 1, ''),
(3, 'Cable TW 14 AWG Azul', 100, 1, 1, 'Marca Indeco'),
(4, 'Cables Mellizos', 30, 1, 1, ''),
(5, 'Cable Soldar 2 AWG', 50, 1, 1, 'Marca Elcope'),
(6, 'Cable Concéntrico 2x6mm2', 20, 1, 1, ''),
(7, 'Cable TW 4 mm2 ', 50, 1, 1, 'color Verde/Amarillo'),
(8, 'Cable THW 14 AWG ', 100, 1, 1, 'color Rojo'),
(9, 'miguel', 9, 15, 0, ''),
(10, 'michi', 0, 1, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `idunidad` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `diminutivo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`idunidad`, `nombre`, `diminutivo`) VALUES
(1, 'Metro', 'm'),
(2, 'Centimetro', 'cm'),
(3, 'Milimetro', 'mm'),
(4, 'Metro cuadrado', 'm2'),
(5, 'Centimetro Cuadrado', 'cm2'),
(6, 'Kilogramo', 'kg'),
(7, 'Gramo', 'g'),
(8, 'Litro', 'l'),
(9, 'Mililitro', 'ml'),
(10, 'Metro cúbico', 'm3'),
(11, 'Pulgada', 'in'),
(12, 'Galon', 'gl'),
(13, 'Pie', 'ft'),
(14, 'Libra', 'lb'),
(15, 'Onza', 'oz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `appaterno` varchar(50) NOT NULL,
  `apmaterno` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre`, `appaterno`, `apmaterno`, `login`, `password`, `estado`) VALUES
(1, 'Flavio', 'Salirrosas', 'Llamocuro', 'user1', '12345', 1),
(2, 'Antonio', 'Gutierrez', 'Huamanttupa', 'user2', '12345', 1),
(57, 'Rodrigo', 'Chauca', 'Mamani', 'user3', '12345', 1),
(58, 'Lizbeth', 'Mejia', 'Vasquez', 'user4', '54321', 1),
(59, 'Milton', 'Avalos', 'Pucyura', 'user5', '987765', 1),
(60, 'aaaaa', 'aaaa', 'aaaa', 'aaaaa', 'aaaaaa', 0),
(61, 'test', 'apex', 'test', 'lmaonade', '123456789', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalleherramientas`
--
ALTER TABLE `detalleherramientas`
  ADD PRIMARY KEY (`idDetalle`);

--
-- Indices de la tabla `detallesuministros`
--
ALTER TABLE `detallesuministros`
  ADD PRIMARY KEY (`idDetalle`);

--
-- Indices de la tabla `detalleusuarios`
--
ALTER TABLE `detalleusuarios`
  ADD PRIMARY KEY (`idDetalle`);

--
-- Indices de la tabla `herramienta`
--
ALTER TABLE `herramienta`
  ADD PRIMARY KEY (`idherramienta`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`idSolicitud`);

--
-- Indices de la tabla `suministro`
--
ALTER TABLE `suministro`
  ADD PRIMARY KEY (`idsuministro`),
  ADD KEY `unidad` (`unidad`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`idunidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalleherramientas`
--
ALTER TABLE `detalleherramientas`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detallesuministros`
--
ALTER TABLE `detallesuministros`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalleusuarios`
--
ALTER TABLE `detalleusuarios`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT de la tabla `herramienta`
--
ALTER TABLE `herramienta`
  MODIFY `idherramienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `suministro`
--
ALTER TABLE `suministro`
  MODIFY `idsuministro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `idunidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `suministro`
--
ALTER TABLE `suministro`
  ADD CONSTRAINT `suministro_ibfk_1` FOREIGN KEY (`unidad`) REFERENCES `unidad` (`idunidad`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
