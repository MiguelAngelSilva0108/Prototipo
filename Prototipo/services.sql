-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2023 a las 04:26:57
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
-- Base de datos: `prototipo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id_services` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `medida` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id_services`, `Nombre`, `precio`, `medida`) VALUES
(1, 'Pint_int', 135.00, 'm<sup>2</sup>'),
(2, 'Pint_graf', 100.00, 'm<sup>2</sup>'),
(3, 'Pint_retoque', 80.00, 'm<sup>2</sup>'),
(4, 'Pint_herreria', 180.00, 'm<sup>2</sup>'),
(5, 'Imper_caucho', 230.00, 'm<sup>2</sup>'),
(6, 'Imper_terracota', 180.00, 'm<sup>2</sup>'),
(7, 'filtraciones', 100.00, 'm<sup>2</sup>'),
(8, 'Imper_Paredes', 180.00, 'm<sup>2</sup>'),
(9, 'Cis_1200L', 852.30, 'Litros'),
(10, 'Cis_2800L', 1145.99, 'Litros'),
(11, 'Cis_5000L', 1987.60, 'Litros'),
(12, 'Cis_5000L', 2897.41, 'Litros'),
(13, 'Tin_450_600', 356.20, 'Litros'),
(14, 'Tin_600_1100', 680.20, 'Litros'),
(15, 'Tin_1100_2500', 893.20, 'Litros');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
