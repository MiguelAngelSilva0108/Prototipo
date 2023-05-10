-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2023 a las 05:03:41
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

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
  `CP` int(10) NOT NULL,
  `Estado` varchar(200) NOT NULL,
  `RFC` varchar(200) NOT NULL,
  `Nombre_Condominio` varchar(200) NOT NULL,
  `Calle_Condominio` varchar(200) NOT NULL,
  `Colonia_Condominio` varchar(200) NOT NULL,
  `NumExt_Condominio` varchar(200) NOT NULL,
  `Municipio_Condominio` varchar(200) NOT NULL,
  `CP_Condominio` int(200) NOT NULL,
  `Estado_Condominio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `Nombres`, `AP`, `AM`, `Celular`, `Email`, `password`, `Servicio`, `Calle`, `Colonia`, `NumExt`, `NumInt`, `Municipio`, `CP`, `Estado`, `RFC`, `Nombre_Condominio`, `Calle_Condominio`, `Colonia_Condominio`, `NumExt_Condominio`, `Municipio_Condominio`, `CP_Condominio`, `Estado_Condominio`) VALUES
(1, 'Miguel Ángel', 'Silva', 'Bata', '5527826521', 'miguelxv74@gmail.com', '$2y$10$QIZM1iHDtoz46yAz.TDqa.DfdEFcLBptJRKbu3X/U5AO6kgT7G/Xa', 'Internet + Telefonía 50 MB', 'Berriozábal', 'Liberales de 1857', '12', NULL, 'Álvaro Obregón', 1110, 'Ciudad de México', 'Unidad Colorines II', 'SIBM010801SP0', 'Calle 5', 'Agrícola Pantitlán', '33', 'Iztacalco', 9830, 'Ciudad de México');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
