-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2023 a las 05:48:53
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
-- Base de datos: `tp_example`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` int(11) NOT NULL,
  `departamento` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `departamento`) VALUES
(1, 'Boyaca'),
(2, 'Cundinamarca'),
(3, 'Santander');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tp_empleados_2023`
--

CREATE TABLE `tp_empleados_2023` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `documento` varchar(50) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `ciudad_residencia` varchar(50) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tp_empleados_2023`
--

INSERT INTO `tp_empleados_2023` (`id_empleado`, `nombre`, `documento`, `correo`, `ciudad_residencia`, `id_departamento`) VALUES
(1, ':nombre', NULL, ':correo', NULL, NULL),
(2, ':nombre', NULL, ':correo', NULL, NULL),
(3, 'hola', NULL, 'hola', NULL, NULL),
(4, 'hola1', NULL, 'hola1', NULL, NULL),
(5, 'FFASFSDF', NULL, 'ASDFSADF@GAMIL.COM', NULL, NULL),
(6, 'Prueba', NULL, 'Prueba@gmail.com', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `tp_empleados_2023`
--
ALTER TABLE `tp_empleados_2023`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tp_empleados_2023`
--
ALTER TABLE `tp_empleados_2023`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tp_empleados_2023`
--
ALTER TABLE `tp_empleados_2023`
  ADD CONSTRAINT `tp_empleados_2023_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id_departamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
