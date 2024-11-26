-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql108.infinityfree.com
-- Tiempo de generación: 26-11-2024 a las 13:19:48
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_37603160_registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_registradas`
--

CREATE TABLE `personas_registradas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personas_registradas`
--

INSERT INTO `personas_registradas` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `contraseña`) VALUES
(1, 'Proyecto 2', 'Avalos', '2024-11-12', 'fdsfsd'),
(2, 'Estefania', 'Avalos', '2024-11-05', 'dsdsds'),
(3, 'Estefania', 'Avalos', '2024-11-13', 'ssasasa'),
(4, 'pitu', 'rodriguez', '2024-11-01', 'fdfdf'),
(5, 'Estefania', 'Avalos', '2024-11-23', '$2y$10$Cj.KHOg1Ya8AWT6Ox0h6weqkH.Hr6udsV/HLNtbjpjE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas_registradas`
--
ALTER TABLE `personas_registradas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas_registradas`
--
ALTER TABLE `personas_registradas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
