-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 17-11-2021 a las 17:28:10
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--
drop table if exists servicios;
CREATE TABLE `servicios` (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `servicio` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `tiempo` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trabajador`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `servicios` (`id`, `servicio`, `descripcion`, `tiempo`, `precio`) VALUES
(1, 'DETOX', 'Descongestiona y equilibra cabello', '50', '60'),
(2, 'RESTAURADOR', 'Recupera y fortalece el cabello', '30', '50'),
(3, 'INFOACTIVO', 'Actua en la raiz', '30', '70'),
(4, 'PROTEINAS', 'Rellena de materia el cabello', '50', '100'),
(5, 'DETOX ORO', 'Descongestiona e hidrata cuero cabelludo', '30', '100')
;
