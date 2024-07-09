-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2024 a las 05:33:53
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
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `idautor` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`idautor`, `nombre`, `nacionalidad`) VALUES
(11476, 'Antoine SaintExupery', 'Francés'),
(12334, 'William Faulkner', 'Estadounidense'),
(62553, 'Miguel de Cervantes', 'Español'),
(70312, 'Maquiavelo', 'Italiano'),
(72844, 'Henry Kissinger', 'Estadounidense');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `idlector` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `carrera` varchar(20) NOT NULL,
  `edad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idlector`, `nombre`, `direccion`, `carrera`, `edad`) VALUES
(21083, 'Rosa Lucia Zúñiga Gonzáles', 'Josefa Ortiz de Domínguez, Cen', 'programacion', '16'),
(43508, 'Miriam Nahomy Olachea Carreño', 'Sierra Victoria, Banobras', 'programacion', '16'),
(45449, 'Ethel NoIvanna Hernández Castr', 'Del Cobre,  Fracc. El Dorado', 'programacion', '16'),
(52773, 'José Alejandro Abaroa Mendoza', 'Baja California Sur, Chametla', 'programacion', '16'),
(56913, 'Kevin Fernando Pérez Pérez', 'Justicia, Diana Laura', 'programacion', '16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `idlibro` int(11) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `editorial` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`idlibro`, `titulo`, `editorial`, `area`) VALUES
(4458, 'Historias de Nueva Orlean', 'Alfaguara', 'SQL'),
(29694, 'El Principito', 'Andina', 'SQL'),
(71439, 'El Príncipe', 'S.M.', 'SQL'),
(89325, 'Diplomacia', 'S.M.', 'SQL'),
(92414, 'Don Quijote de la Mancha ', 'Anaya', 'SQL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libroaut`
--

CREATE TABLE `libroaut` (
  `idautor` int(11) NOT NULL,
  `idlibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libroaut`
--

INSERT INTO `libroaut` (`idautor`, `idlibro`) VALUES
(12334, 4458),
(11476, 29694),
(70312, 71439),
(72844, 89325),
(62553, 92414);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `idlector` int(11) NOT NULL,
  `idlibro` int(11) NOT NULL,
  `fechaprestamo` date NOT NULL,
  `fechadevolucion` date NOT NULL,
  `devuelto` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`idlector`, `idlibro`, `fechaprestamo`, `fechadevolucion`, `devuelto`) VALUES
(21083, 4458, '2024-06-04', '2025-06-04', 0),
(45449, 29694, '2024-06-04', '2030-09-11', 0),
(56913, 71439, '2024-06-04', '2024-06-26', 0),
(52773, 89325, '2024-06-04', '2024-06-05', 0),
(43508, 92414, '2024-06-04', '2024-08-01', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idautor`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idlector`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD UNIQUE KEY `idlibro` (`idlibro`);

--
-- Indices de la tabla `libroaut`
--
ALTER TABLE `libroaut`
  ADD UNIQUE KEY `idautor` (`idautor`),
  ADD UNIQUE KEY `idlibro` (`idlibro`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`idlibro`),
  ADD UNIQUE KEY `idlector` (`idlector`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libroaut`
--
ALTER TABLE `libroaut`
  ADD CONSTRAINT `libroaut_ibfk_1` FOREIGN KEY (`idlibro`) REFERENCES `libro` (`idlibro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libroaut_ibfk_2` FOREIGN KEY (`idautor`) REFERENCES `autor` (`idautor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`idlector`) REFERENCES `estudiante` (`idlector`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`idlibro`) REFERENCES `libro` (`idlibro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
