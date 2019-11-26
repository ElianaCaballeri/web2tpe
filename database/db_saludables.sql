-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2019 a las 20:01:23
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_saludables`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `puntaje` int(10) NOT NULL,
  `id_producto_fk` int(11) NOT NULL,
  `id_usuario_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `descripcion`, `puntaje`, `id_producto_fk`, `id_usuario_fk`) VALUES
(2, 'sdd', 2, 12, 1),
(4, 'bla bla bla', 2, 9, 1),
(5, 'bla bla bla', 2, 9, 1),
(6, 'bla bla bla', 2, 9, 1),
(7, 'Prueba', 2, 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `ruta` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `id_producto_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `ruta`, `id_producto_fk`) VALUES
(1, 'imagenes/5dd296d4f3ff5.jpg', 18),
(2, 'imagenes/5dd42fe16a2ce.jpeg', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_tipo_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `precio`, `stock`, `id_tipo_fk`) VALUES
(9, 'Sucralosa', 'edulcorante diet', '2000', 100, 2),
(10, 'Stevia', 'educorante diet', '250', 80, 2),
(11, 'Mascabo', 'azúcar orgánico', '100', 75, 2),
(12, 'Semillas', 'chia, sésamo, amapola, girasol.', '300', 20, 1),
(13, 'Frutos Secos', 'nueces, almendras, pistachos, manies.', '600', 30, 1),
(14, 'Aceite de coco', 'natural y organico', '500', 10, 1),
(15, 'Te', 'mix de sabores', '100', 40, 3),
(16, 'Cafe Soluble', 'instantáneo', '180', 25, 3),
(17, 'Yerba', 'orgánica con palo', '200', 50, 3),
(18, 'conImagen', 'jkhkjh', '222', 122, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `nombre`, `descripcion`) VALUES
(1, 'Grasas saludables', 'Son grasas insaturadas de origen vegetal.'),
(2, 'Endulzantes', 'Son sustancias tanto naturales como artificiales que sirven para dulcificar los alimentos y bebidas.'),
(3, 'Infusiones', 'Bebidas obtenidas a partir de hierbas y plantas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$T5NzaukUvzhpl8B8RvsV2eZ0sKFtQVDraWmc3g.7oI2SjUPzuQw7u');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_producto_fk` (`id_producto_fk`),
  ADD KEY `id_usuario_fk` (`id_usuario_fk`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `id_producto_fk` (`id_producto_fk`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_tipo_fk` (`id_tipo_fk`,`nombre`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_producto_fk`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_producto_fk`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_tipo_fk`) REFERENCES `tipo` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
