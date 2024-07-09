-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2024 a las 05:02:29
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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idClient` int(11) NOT NULL,
  `forename` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idClient`, `forename`, `surname`) VALUES
(105200, 'Zulema', 'Wences Martínez'),
(4112007, 'Melissa Fernanda', 'Arellano Cota'),
(14062007, 'Ian Kaled', 'González Maraver'),
(16082007, 'Omar Elías', 'Ruíz Dario'),
(24042007, 'Sofía Davissa', 'Noriega Cervantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `idPet` int(11) NOT NULL,
  `idVet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id`, `date`, `idPet`, `idVet`) VALUES
(35519757, '2024-06-02', 17743477, 23102007),
(59652790, '2024-06-02', 18024079, 9082997),
(28590211, '2024-06-07', 24137523, 11072007),
(84401522, '2024-06-03', 29361144, 15032007),
(37050321, '2024-06-06', 52816365, 1082007);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `idPet` int(11) NOT NULL,
  `species` varchar(25) NOT NULL,
  `names` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `vet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`idPet`, `species`, `names`, `age`, `owner`, `vet`) VALUES
(17743477, 'ratón', 'Hazel', 1, 16082007, 23102007),
(18024079, 'ave', 'Willow', 8, 24042007, 9082997),
(24137523, 'perro', 'Lola', 8, 105200, 11072007),
(29361144, 'gato', 'Juniper', 7, 4112007, 15032007),
(52816365, 'roedor', 'Darcy', 4, 14062007, 1082007);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veterinarios`
--

CREATE TABLE `veterinarios` (
  `idVet` int(11) NOT NULL,
  `forename` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `veterinarios`
--

INSERT INTO `veterinarios` (`idVet`, `forename`, `surname`) VALUES
(1082007, 'Miriam Nahomy', 'Olachea Carreño'),
(9082997, 'Kevin Fernando', 'Pérez Pérez'),
(11072007, 'Ángel Isaac', 'Camacho Orantes'),
(15032007, 'Ian Carlo', 'Islas Ramírez'),
(23102007, 'José Alejandro', 'Abaroa Mendoza');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClient`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD UNIQUE KEY `pet` (`idPet`),
  ADD UNIQUE KEY `vet` (`idVet`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`idPet`),
  ADD UNIQUE KEY `owner` (`owner`),
  ADD UNIQUE KEY `vet` (`vet`),
  ADD UNIQUE KEY `species` (`species`);

--
-- Indices de la tabla `veterinarios`
--
ALTER TABLE `veterinarios`
  ADD PRIMARY KEY (`idVet`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`idPet`) REFERENCES `mascotas` (`idPet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_3` FOREIGN KEY (`idVet`) REFERENCES `mascotas` (`vet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `clientes` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mascotas_ibfk_2` FOREIGN KEY (`vet`) REFERENCES `veterinarios` (`idVet`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
