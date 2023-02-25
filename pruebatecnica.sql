-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 21:19:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebatecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ROLID` int(1) NOT NULL,
  `DESCRIPCION` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ROLID`, `DESCRIPCION`) VALUES
(3, 'Director'),
(1, 'Alumno'),
(2, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(100) NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `EDAD` int(2) NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `ROLID` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `EDAD`, `SEXO`, `ROLID`) VALUES
(1, 'Jorge', 26, 'H', 1),
(2, 'Martin', 33, 'H', 2),
(3, 'Eduardo', 36, 'H', 3),
(4, 'Marcela', 23, 'M', 2),
(6, 'Laura', 45, 'M', 3),
(8, 'Liliana', 34, 'M', 1),
(41, 'Flavio Gonzalo', 3, 'H', 3),
(10, 'Pablo', 26, 'H', 1),
(11, 'Mariana', 26, 'M', 0),
(12, 'Susana', 45, 'M', 2),
(13, 'Felipe', 27, 'H', 2),
(36, 'Flavio Gonzalo', 33, 'H', 3),
(15, 'Ernestojjjj', 22, 'H', 0),
(40, 'Flavio Gonzalo', 0, 'H', 0),
(33, 'Flavio Gonzalo Villalba Gargantini', 33, 'H', 3),
(19, 'María ', 33, 'M', 2),
(38, 'Flavio Gonzalo', 33, 'H', 3),
(39, 'María Alejandra', 23, 'M', 2),
(37, 'Flavio Gonzalo', 33, 'H', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ROLID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
