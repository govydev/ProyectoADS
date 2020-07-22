-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-07-2020 a las 00:41:58
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

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
(3, 'user2', 3, 0),
(4, 'user2', 4, 1),
(5, 'user1', 1, 1),
(6, 'user1', 2, 0),
(7, 'user1', 3, 1),
(8, 'user1', 4, 1);

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
(1, 'Personal de Atención', '', 'fa fa-group'),
(2, 'Almacenero', '', 'fa fa-key'),
(3, 'Despachador', '', 'glyphicon glyphicon-pencil'),
(4, 'Administrador', '../managementModule/indexGestionUsuario.php', 'fa fa-coffee');

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
(2, 'Antonio', 'Gutierrez', 'Huamanttupa', 'user2', '67890', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalleusuarios`
--
ALTER TABLE `detalleusuarios`
  ADD PRIMARY KEY (`idDetalle`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalleusuarios`
--
ALTER TABLE `detalleusuarios`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
