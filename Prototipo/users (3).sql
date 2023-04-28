-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2023 a las 04:44:22
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
  `Apellido Paterno` varchar(200) NOT NULL,
  `Apellido Materno` varchar(200) NOT NULL,
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
  `Nombre Condominio` varchar(200) NOT NULL,
  `Calle Condominio` varchar(200) NOT NULL,
  `Colonia Condominio` varchar(200) NOT NULL,
  `NumExt Condominio` varchar(200) NOT NULL,
  `Municipio Condominio` varchar(200) NOT NULL,
  `CP Condominio` int(200) NOT NULL,
  `Estado Condominio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id_users` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
