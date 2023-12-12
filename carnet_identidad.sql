-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2023 a las 02:54:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carnet_identidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carnet`
--

CREATE TABLE `carnet` (
  `id` int(100) NOT NULL,
  `primer_nombre` varchar(100) NOT NULL,
  `segundo_nombre` varchar(20) NOT NULL,
  `apellido_paterno` varchar(20) NOT NULL,
  `apellido_materno` varchar(20) NOT NULL,
  `nacionalidad` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `rut` int(11) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `fecha_emision` date NOT NULL,
  `fecha_devencimiento` date NOT NULL,
  `foto_carnet` varchar(100) NOT NULL,
  `otra_profesion` varchar(100) NOT NULL,
  `discapacidad` varchar(3) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `donante` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carnet`
--

INSERT INTO `carnet` (`id`, `primer_nombre`, `segundo_nombre`, `apellido_paterno`, `apellido_materno`, `nacionalidad`, `fecha_nacimiento`, `rut`, `ciudad`, `fecha_emision`, `fecha_devencimiento`, `foto_carnet`, `otra_profesion`, `discapacidad`, `sexo`, `donante`) VALUES
(24, 'Rafael', 'Ignacio', 'Quezada', 'Ojeda', 'chilena', '2014-10-07', 24764, 'limache', '2023-12-12', '0000-00-00', '', 'no', 'no', 'M', 'si'),
(25, 'Alejandra', 'Elena', 'Ojeda', 'Machuca', 'chilena', '1995-10-01', 19251, 'limache', '2023-12-15', '0000-00-00', '', 'no', 'no', 'F', 'si'),
(26, 'Alejandra', 'Elena', 'Ojeda', 'Machuca', 'chilena', '1995-10-01', 19251, 'limache', '2023-12-23', '2028-12-23', '', 'no', 'no', 'F', 'si'),
(27, 'Rodolfo ', 'Guillermo', 'Quezada', 'Sierra', 'chilena', '1985-10-23', 16147, 'limache', '2023-12-26', '2028-12-26', '', 'si', 'no', 'M', 'si'),
(28, 'Rodolfo ', 'Guillermo', 'Quezada', 'Sierra', 'chilena', '1985-10-23', 16147, 'limache', '2023-12-27', '2028-12-27', '', '', 'no', 'M', 'si'),
(29, 'Rodolfo ', 'Guillermo', 'Quezada', 'Sierra', 'chilena', '1985-10-23', 16147, 'limache', '2023-12-11', '2028-12-11', '', 'ingeniero Informatico', 'no', 'M', 'si'),
(31, 'hugo', 'Alejandro', 'Ojeda', 'Machuca', 'chilena', '2023-08-03', 16147, 'limache', '2023-12-20', '2028-12-20', '', '', 'no', 'M', 'si'),
(32, 'doris', 'angela', 'Sierra', 'Cisternas', 'chilena', '1997-07-10', 19251857, '', '2023-12-31', '2028-12-31', '', '', 'no', 'F', 'si'),
(33, 'doris', 'angela', 'Sierra', 'Cisternas', 'chilena', '1997-07-10', 19251, '', '2023-12-31', '2028-12-31', '', '', 'no', 'F', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carnet`
--
ALTER TABLE `carnet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carnet`
--
ALTER TABLE `carnet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
