-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2023 a las 05:22:47
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
-- Estructura de tabla para la tabla `required`
--

CREATE TABLE `required` (
  `id_required` int(200) NOT NULL,
  `id_users` int(200) NOT NULL,
  `id_services` int(200) NOT NULL,
  `fecha_servicio` date NOT NULL,
  `hora_servicio` varchar(200) NOT NULL,
  `subtotal` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id_services` int(11) NOT NULL,
  `Nombre` varchar(200) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `medida` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id_services`, `Nombre`, `precio`, `medida`) VALUES
(1, 'Pintura y repintado de áreas comunes', 135.00, 'm<sup>2</sup>'),
(2, 'Pintura Antigraffiti', 100.00, 'm<sup>2</sup>'),
(3, 'Retoque de pintura', 80.00, 'm<sup>2</sup>'),
(4, 'Pintura a herrería', 180.00, 'm<sup>2</sup>'),
(5, 'Impermeabilización de techos del condominio (Caucho)', 250.00, 'm<sup>2</sup>'),
(6, 'Impermeabilización de techos del condominio (Terracota)', 180.00, 'm<sup>2</sup>'),
(7, 'Servicio de reparación de filtraciones', 100.00, 'm<sup>2</sup>'),
(8, 'Servicio de impermeabilización de paredes', 180.00, 'm<sup>2</sup>'),
(9, 'Cisterna de 1200L', 852.30, '1 Cisterna'),
(10, 'Cisterna de 2800L', 1145.99, '1 Cisterna'),
(11, 'Cisterna de 5000L', 1987.60, '1 Cisterna'),
(12, 'Cisterna de 10000L', 2897.41, '1 Cisterna'),
(13, 'Tinaco de 450L a 600L', 356.20, '1 Tinaco'),
(14, 'Tinaco de 600L a 1100L', 680.20, '1 Tinaco'),
(15, 'Tinaco de 1100L a 2500L', 893.20, '1 Tinaco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_users` int(200) NOT NULL,
  `Nombres` varchar(200) NOT NULL,
  `AP` varchar(200) NOT NULL,
  `AM` varchar(200) NOT NULL,
  `Celular` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Servicio` varchar(200) NOT NULL,
  `Calle` varchar(200) NOT NULL,
  `Colonia` varchar(200) NOT NULL,
  `NumExt` varchar(200) NOT NULL,
  `NumInt` varchar(200) DEFAULT NULL,
  `Municipio` varchar(200) NOT NULL,
  `CP` varchar(10) NOT NULL,
  `Estado` varchar(200) NOT NULL,
  `RFC` varchar(200) NOT NULL,
  `Nombre_Condominio` varchar(200) NOT NULL,
  `Calle_Condominio` varchar(200) NOT NULL,
  `Colonia_Condominio` varchar(200) NOT NULL,
  `NumExt_Condominio` varchar(200) NOT NULL,
  `Municipio_Condominio` varchar(200) NOT NULL,
  `CP_Condominio` varchar(10) NOT NULL,
  `Estado_Condominio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `Nombres`, `AP`, `AM`, `Celular`, `Email`, `password`, `Servicio`, `Calle`, `Colonia`, `NumExt`, `NumInt`, `Municipio`, `CP`, `Estado`, `RFC`, `Nombre_Condominio`, `Calle_Condominio`, `Colonia_Condominio`, `NumExt_Condominio`, `Municipio_Condominio`, `CP_Condominio`, `Estado_Condominio`) VALUES
(19, 'Miguel Ángel ', 'Silva ', 'Bata', '5527826521', 'miguelxv74@gmail.com', '$2y$10$V8aX3gwKpyh9oEejFe4xJuexug.ul3VwUztUuThUYBHaTmvh374hq', 'De 15 a 30 departamentos', 'Berriozabal', 'Liberales de 1857', '12', NULL, 'Álvaro Obregón', '01110', 'Jalisco', 'SIBM010801SP0', 'Unidad Colorines II', 'Calle 5', 'Agricola Pantitlan', '33', 'Iztacalco', '09830', 'Nayarit'),
(22, 'José', 'Madero', 'Vizcaíno', '5527826521', 'miguelxv74@hotmail.com', '$2y$10$S9GhTBczfCXz4nTYXA/M3eqR3yUWXAPIrHltdHvFZAp.QDj5xJQne', 'De 15 a 30 departamentos', 'Avenida Providencia', 'La bonita', '1504-A', 'B-405', 'Oaxaca', '08502', 'Oaxaca', 'SIBM010801SP0', 'Cerrado', '15', 'Bonito', '33', 'Oaxaca', '01510', 'Ciudad de México');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `required`
--
ALTER TABLE `required`
  ADD PRIMARY KEY (`id_required`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `required`
--
ALTER TABLE `required`
  MODIFY `id_required` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
