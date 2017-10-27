-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2017 a las 10:57:33
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ladingpages`
--

CREATE TABLE `ladingpages` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ladingpages`
--

INSERT INTO `ladingpages` (`id`, `id_product`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `tittle` varchar(120) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_newsletter_viewers` int(11) NOT NULL,
  `id_ladingpage` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `exp_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `newsletters`
--

INSERT INTO `newsletters` (`id`, `tittle`, `message`, `status`, `id_newsletter_viewers`, `id_ladingpage`, `created_at`, `exp_at`) VALUES
(1, 'Newletter title', 'Content here', 1, 1, 1, '2017-10-27 05:30:00', '2017-10-27 17:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletters_viewers`
--

CREATE TABLE `newsletters_viewers` (
  `id` int(11) NOT NULL,
  `id_lading` int(11) NOT NULL,
  `id_newletter` int(11) NOT NULL,
  `ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(155) COLLATE utf8_bin NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`) VALUES
(1, 'Gomas', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `username` varchar(120) COLLATE utf8_bin NOT NULL,
  `email` varchar(120) COLLATE utf8_bin NOT NULL,
  `password` varchar(120) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `sub` tinyint(1) NOT NULL,
  `code` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_bin NOT NULL,
  `email` varchar(120) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `sub` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `last_session` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `email`, `password`, `sub`, `created_at`, `last_session`) VALUES
(6, 'Marcos Gin', 'marcosgin291@gmail.com', '899755b120ef45cc69afe76f2756f6cb', 1, '2017-10-27 05:30:22', '2017-10-27 05:30:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ladingpages`
--
ALTER TABLE `ladingpages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletters_viewers`
--
ALTER TABLE `newsletters_viewers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ladingpages`
--
ALTER TABLE `ladingpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `newsletters_viewers`
--
ALTER TABLE `newsletters_viewers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
