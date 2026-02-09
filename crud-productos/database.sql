-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2026 a las 11:03:31
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
-- Base de datos: `tienda_cctv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `created_at`) VALUES
(1, 'Cámara IP', 'Cámara de seguridad IP 1080p', 85.50, 12, '2026-02-09 04:17:10'),
(2, 'DVR 4 Canales', 'Grabador digital para cámaras CCTV', 120.00, 8, '2026-02-09 04:17:10'),
(3, 'Disco Duro 1TB', 'Disco duro para grabación de video', 65.00, 20, '2026-02-09 04:17:10'),
(4, 'Fuente 12V', 'Fuente de poder Generica para cámaras', 8.00, 35, '2026-02-09 04:17:10'),
(5, 'Cable UTP CAT6', 'Bobina de cable UTP para CCTV', 100.00, 8, '2026-02-09 04:17:10'),
(7, 'Cable UTP CAT5', 'Prueba de eliminación', 25.00, 5, '2026-02-09 09:02:03'),
(8, 'Plugs Macho', 'Plugs macho JFD-702 ', 1.10, 50, '2026-02-09 09:41:30'),
(10, 'Ponchadora Cable UTP', 'Ponchadora de cables UTP generica', 10.00, 20, '2026-02-09 09:49:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
