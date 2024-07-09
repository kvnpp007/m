-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 05:34:38
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
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `propietario` varchar(20) NOT NULL,
  `especie` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `fechaNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombre`, `propietario`, `especie`, `sexo`, `fechaNacimiento`) VALUES
(105200, 'Iván', 'José', 'Perro', 'Macho', '2021-03-20'),
(4112007, 'Marco', 'Isaac', 'Hámster', 'Macho', '2024-02-06'),
(14062007, 'Estrella', 'Carlos', 'Gato', 'Hembra', '2014-04-01'),
(52816365, 'Camila', 'José', 'Hámster', 'Macho', '2021-08-19'),
(987654321, 'Estefania', 'Fernando', 'Nutria', 'Hembra', '2018-08-09'),
(1234567890, 'Luz', 'Davissa', 'Ave', 'Hembra', '2021-03-20'),
(2147483647, 'Cachito', 'Teresa', 'Perro', 'Macho', '2021-08-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
