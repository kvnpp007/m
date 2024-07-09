-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2024 a las 18:49:19
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
-- Base de datos: `bibliotecas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `autor_id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`autor_id`, `nombre`, `nacionalidad`) VALUES
(46950, 'J. R. R. Tolkien', 'Reino Unido'),
(87446, 'Jane Austen', 'Reino Unido'),
(58211, 'Nicholas Sparks', 'Estados Unidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `libro_id` int(11) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `editorial` varchar(25) NOT NULL,
  `edicion` varchar(20) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `ubicacion` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`libro_id`, `titulo`, `autor`, `editorial`, `edicion`, `categoria`, `ubicacion`, `cantidad`) VALUES
(29509, 'Orgullo y prejuicio', 'Jane Austen', 'MMindLLC', 'Edicion de lujo', 'Romantico', 'C-30', 12),
(73663, 'El señor de los anillos', 'J. R. R. Tolkien', 'RanchCo', '4', 'Ciencia ficcion', 'A-36', 12),
(95219, 'Diario de un pasion', 'Nicholas Sparks', 'MMindLLC', '3', 'Romantico', 'B-20', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `identificador` int(11) NOT NULL,
  `prestado` date NOT NULL,
  `devolucion` date NOT NULL,
  `devuelto` tinyint(1) NOT NULL,
  `libro_id` int(11) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`identificador`, `prestado`, `devolucion`, `devuelto`, `libro_id`, `nombres`, `direccion`, `telefono`) VALUES
(1, '2024-05-28', '2024-05-30', 0, 29509, 'Perez Perez Kevin Fernando', 'Justicia', '6121512248'),
(2, '2024-05-28', '2024-05-30', 1, 95219, 'Olachea Carreño Miriam Nahomy', 'Sierra Victoria', '6122045825'),
(3, '2024-05-30', '2024-05-31', 0, 73663, 'Olachea Carreño Miriam Nahomy', 'Sierra Victoria', '6122045825');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`libro_id`,`autor`),
  ADD KEY `autor` (`autor`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`identificador`,`libro_id`),
  ADD KEY `libro_id` (`libro_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `autor` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`libro_id`) REFERENCES `libro` (`libro_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
