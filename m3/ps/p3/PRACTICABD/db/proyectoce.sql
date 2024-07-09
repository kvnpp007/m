-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2024 a las 19:02:04
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ningreso`
--

CREATE TABLE `ningreso` (
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `ncontrol` varchar(12) NOT NULL,
  `email` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `ningreso`
--

INSERT INTO `ningreso` (`nombres`, `apellidos`, `direccion`, `telefono`, `ncontrol`, `email`) VALUES
('Kevin Fernando', 'Pérez Pérez', 'Justicia', '6121512248', '25', 'kevinfernandopp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ningreso`
--
ALTER TABLE `ningreso`
  ADD PRIMARY KEY (`ncontrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
