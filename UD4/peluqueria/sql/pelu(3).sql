-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 09-12-2021 a las 17:15:05
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pelu`
--
CREATE DATABASE IF NOT EXISTS `pelu` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pelu`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee_service`
--

CREATE TABLE `employee_service` (
  `employee_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `employee_service`
--

INSERT INTO `employee_service` (`employee_id`, `service_id`) VALUES
(1, 1),
(14, 1),
(15, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(15, 2),
(2, 3),
(4, 3),
(6, 3),
(14, 3),
(2, 4),
(3, 4),
(5, 4),
(14, 4),
(1, 5),
(3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaciones`
--

CREATE TABLE `estaciones` (
  `id` int(11) NOT NULL,
  `titulo` text,
  `descripcion` text,
  `urls` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estaciones`
--

INSERT INTO `estaciones` (`id`, `titulo`, `descripcion`, `urls`) VALUES
(1, 'Otoño', 'bavjobou8901y248ey18y412174712347275475274175497129', 'subidos/imagen.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `servicio` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `tiempo` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicio`, `descripcion`, `tiempo`, `precio`) VALUES
(1, 'Lavado', 'Lavar el pelo', 10, 2),
(2, 'Corte', 'Cortar el pelo', 30, 20),
(3, 'Peinado', 'Peinar ', 30, 15),
(4, 'Secado', 'Secar', 22, 8),
(5, 'Teñir', 'Colorear el pelo', 120, 67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(11) NOT NULL,
  `users` varchar(50) DEFAULT NULL,
  `passwords` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id`, `users`, `passwords`) VALUES
(1, 'alfred', 'alfred215'),
(2, 'ester', 'ester');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) DEFAULT NULL,
  `apellidos` varchar(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `nombre`, `apellidos`, `correo`, `telefono`, `categoria`) VALUES
(1, 'alfred', 'garcia', '812346816486186', '389549133', 'profesor'),
(2, 'Sergio', 'Calavia', '5645454', '5444', '56456'),
(3, 'Adrian', 'Ramos', '2141441', '1414141', 'Peluquero'),
(4, 'Sergio', 'Lopez', '141414141', '13412414', 'Aprendiz'),
(5, 'Alfonso', 'Gomez', '1242512512541', '14154151', 'Senior'),
(6, 'Pablo', 'Garcia', '12421515', '1251252', 'Profesor'),
(14, 'Juan', 'Garcia', 'afkafip', '6454', 'apjgoa'),
(15, 'Pedro', 'Garcia', 'afaf', '535465546', 'ajfoao');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employee_service`
--
ALTER TABLE `employee_service`
  ADD PRIMARY KEY (`employee_id`,`service_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indices de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employee_service`
--
ALTER TABLE `employee_service`
  ADD CONSTRAINT `employee_service_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `trabajador` (`id`),
  ADD CONSTRAINT `employee_service_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `servicios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
