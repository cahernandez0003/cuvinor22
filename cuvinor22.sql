-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2022 a las 02:56:58
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuvinor22`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `documento` varchar(20) NOT NULL,
  `nombres` varchar(64) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `genero` varchar(16) NOT NULL,
  `puesto` varchar(32) NOT NULL,
  `fnacimiento` varchar(12) NOT NULL,
  `nacionalidad` varchar(32) NOT NULL,
  `direccion` varchar(128) NOT NULL,
  `codpostal` int(5) NOT NULL,
  `telefono` int(20) DEFAULT NULL,
  `correo` varchar(32) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `escolaridad` varchar(32) NOT NULL,
  `titulos` varchar(32) NOT NULL,
  `experiencia` text NOT NULL,
  `idiomas` varchar(256) NOT NULL,
  `rol` varchar(32) NOT NULL DEFAULT '''vendedor''',
  `foto` varchar(128) NOT NULL DEFAULT '''public/imgs/fotos/nofoto.png'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`documento`, `nombres`, `apellidos`, `genero`, `puesto`, `fnacimiento`, `nacionalidad`, `direccion`, `codpostal`, `telefono`, `correo`, `clave`, `escolaridad`, `titulos`, `experiencia`, `idiomas`, `rol`, `foto`) VALUES
('75000014', 'Carlos Andrés Hernández', '', 'M', '', '', '', '', 0, 885014, 'carlos@misena.edu.co', 'e10adc3949ba59abbe56e057f20f883e', '<br /><b>Warning</b>:  Undefined', '', '', '', 'Admin', 'public/imgs/fotos/transparent-bg-designify.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
