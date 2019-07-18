-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-07-2019 a las 13:56:16
-- Versión del servidor: 5.6.41-84.1
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `normandi_2016`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `username_canonical` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `email`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `username_canonical`, `email_canonical`) VALUES
(1, 'admin', 'admin@example.com', 1, 'qg8sjnavsmoogo80w0ck0ooow0k8s04', '$2y$13$vYeEqbWVD4ZQG8JjLzjv/OjedUyn9n.g/eOK0WmyZDWQDrX0h45dO', '2018-11-11 14:46:54', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', 0, NULL, 'admin', 'admin@example.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeria` longtext COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `nombre`, `galeria`) VALUES
(1, 'Principal', 'a:13:{i:0;s:52:\"cropped/361c0a9bced7d38cf3a1106f119b086f9701f934.jpg\";i:1;s:52:\"cropped/20e7065af1cb6e74041f394a7305123c8300d9eb.jpg\";i:2;s:52:\"cropped/cc03a27d29e462ec87cefbebcf4e7699111e6fef.jpg\";i:3;s:52:\"cropped/9c2533408412a8ede8d99c0a02b0860bc613714c.jpg\";i:4;s:52:\"cropped/ffec32ae6c6548a2d860b3f87894a35714c0e268.jpg\";i:5;s:52:\"cropped/fd26fa6986aa0b3af5cdaf9792372147c067c131.jpg\";i:6;s:52:\"cropped/df9c0b16cc9e52718d55305b7bed9c4f613aaec7.jpg\";i:7;s:52:\"cropped/37435fa8b16684b4fa5b85adca522ab3720ab0f0.jpg\";i:8;s:52:\"cropped/c13650f25fa1f3a793153df5cd3cc27171e2b370.jpg\";i:9;s:52:\"cropped/938f8001b31b0bbdeac5a9e48a474303d856a3b1.jpg\";i:10;s:52:\"cropped/1229d649dcdc8bc59072f239076853e4476a771c.jpg\";i:11;s:52:\"cropped/9aae2846008259380f4c227ad56de5fcff86fdb5.jpg\";i:12;s:52:\"cropped/0939e347822d4491645fa1f8457f46b36deac151.jpg\";}'),
(2, 'Doble', 'a:7:{i:0;s:52:\"cropped/ab9aee8d8c275d56e5aa9be9d3806841dfe31d73.jpg\";i:1;s:52:\"cropped/2cbf694add27da10972724c11e495665879bc9ef.jpg\";i:2;s:52:\"cropped/7ffd21a86903f8cf41e195d1671bedb8e01822e7.jpg\";i:3;s:52:\"cropped/ecfdb815acabbdbf7483b106a8eaed98eaefe641.jpg\";i:4;s:52:\"cropped/229ef8e99c7decb9aa10d3e083f3e27e52f2300e.jpg\";i:5;s:52:\"cropped/48858edd7791550cea47f3e387a191c7ac25e6d6.jpg\";i:6;s:52:\"cropped/26d7e41b7b576d7fc4c3a065eb82133364dfe16a.jpg\";}'),
(3, 'Departamentos', 'a:4:{i:0;s:52:\"cropped/a9d9fed2981a5fdb42d3ec77d4140d9d5b58a019.jpg\";i:1;s:52:\"cropped/0961965b117792a4284252c85618e0fffe69585f.jpg\";i:2;s:52:\"cropped/20f6b47c7676d63dae2460e8ad73ed368ff7ea2b.jpg\";i:3;s:52:\"cropped/f7e9595593df75956ed5c03aa694d5cc8d64ecb9.jpg\";}'),
(4, 'Triple Estándar', 'a:2:{i:0;s:52:\"cropped/b3fdf713578a999bffd15ece840fcf2ab2860b1d.jpg\";i:1;s:52:\"cropped/3f5c12c21f9c588e3d0fc01ac873f5221b86ae87.jpg\";}'),
(5, 'Triple Superior', 'a:2:{i:0;s:52:\"cropped/4cc1b2fa49fdc03b3bcb2a7e4cd00742fa2f273a.jpg\";i:1;s:52:\"cropped/94f37bb02b50d564b3f1a2f5ce067c224227d9b2.jpg\";}'),
(6, 'Cuádruple integrada', 'a:1:{i:0;s:52:\"cropped/f746c3dea1dc4c03981a9dfe9c7fda37dacb4863.jpg\";}'),
(7, 'Cuádruple 2 ambientes', 'a:0:{}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `generica` tinyint(1) DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `mensaje` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`id`, `nombre`, `fecha_publicacion`, `fecha_vencimiento`, `generica`, `descripcion`, `mensaje`, `imagen`, `orden`) VALUES
(1, 'Hotel Normandie', '2013-01-01', '2023-01-01', 0, 'Está ubicado en la zona céntrica de Miramar, a 300 metros del mar y a 100 metros de la peatonal.\r\nBrindamos  un servicio de excelente calidad en un ambiente cálido y familiar.', NULL, 'cropped/6fff000f20202d269bfb2e70afc82ddb13f03e51.jpg', NULL),
(2, 'Miramar', '2013-01-01', '2021-01-01', 1, 'Una ciudad apacible, dedicada a los niños y la familia. La ciudad dispone de una magnífica costa, con amplias playas de suave arena, que brindan todas las posibilidades para disfrutar del sol y el mar..', NULL, 'cropped/d17b1c9215dd2fa8da3f7025141acd1a3c67a860.jpg', NULL),
(3, 'Actividades', '2013-01-01', '2021-01-01', 1, 'Vivero Dunícola Florentino Ameghino y monte energetico constituye uno de los paseos más tradicionales de Miramar; Realizar cabalgatas en Parque de los patricios; etc.', NULL, 'cropped/9b6b6d2e7d5e949d924242233268b59d9078d1ae.jpg', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
