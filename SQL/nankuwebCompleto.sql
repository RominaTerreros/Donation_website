-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2023 a las 19:55:24
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
-- Base de datos: `nankuweb`
--
CREATE DATABASE IF NOT EXISTS `nankuweb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nankuweb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campana`
--

CREATE TABLE `campana` (
  `idcampana` int(5) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tipo_opcion` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_apoyo` varchar(50) NOT NULL,
  `consulta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `campana`
--

INSERT INTO `campana` (`idcampana`, `usuario`, `correo`, `tipo_opcion`, `fecha`, `tipo_apoyo`, `consulta`) VALUES
(22, 'YeseniaTD', 'yeseniaandrea.torres@unmsm.edu.pe', 'Campaña Una Playa Limpia', '2023-03-11', 'Publicitario', 'holi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compraproductos`
--

CREATE TABLE `compraproductos` (
  `IdCompra` int(11) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `TipoTarjeta` varchar(25) NOT NULL,
  `NumTarjeta` varchar(16) NOT NULL,
  `Cvv` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compraproductos`
--

INSERT INTO `compraproductos` (`IdCompra`, `Nombres`, `Apellidos`, `Correo`, `Producto`, `TipoTarjeta`, `NumTarjeta`, `Cvv`) VALUES
(5, 'Rommina', 'Terreros', 'rommmina@gmail.com', 'Box Ropa y Calzado', 'Master Card', '1472583691234567', '456'),
(6, 'Rommina', 'Terreros', 'rommmina@gmail.com', 'Box Utiles Escolares', 'VISA', '1234123412341234', '456'),
(7, 'Rommina', 'Terreros', 'rommmina@gmail.com', 'Box Alimenticio', 'Master Card', '1234123412341234', '147'),
(8, 'Rommina', 'Terreros', 'rommmina@gmail.com', 'Box Utiles Escolares', 'Diners Club3', '1234123412341234', '456'),
(9, 'Rommina', 'Terreros', 'rommmina@gmail.com', 'Box Alimenticio', 'VISA', '1234567891011', '456'),
(10, 'Rommina', 'Terreros', 'rommmina@gmail.com', 'Box Alimenticio', 'American Express', '1234567891011', '123'),
(11, 'Rommina', 'Terreros', 'rommmina@gmail.com', 'Box Alimenticio', 'Diners Club3', '1234123412341234', '456'),
(12, 'Rommina', 'Terreros', 'rommmina@gmail.com', 'Box Ropa y Calzado', 'Diners Club', '1234567891011', '456'),
(13, 'Yesenia', 'Torres', 'yeseniaandrea.torres@unmsm.edu.pe', 'Box Alimenticio', 'VISA', '12121', '123'),
(14, 'Yesenia', 'Torres', 'yeseniatd@gmail.com', 'Box Ropa y Calzado', 'Master Card', '123456789', '123'),
(15, 'Yesenia', 'Torres', 'yeseniatd@gmail.com', 'Box Alimenticio', 'VISA', '12121', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `iddonacion` int(5) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `tipo_donacion` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `cant` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `donacion`
--

INSERT INTO `donacion` (`iddonacion`, `usuario`, `correo`, `tipo_donacion`, `lugar`, `cant`) VALUES
(1, 'Prueba1', 'prueba1@gmail.com', '1', '1', 0),
(2, 'Prueba1', 'prueba1@gmail.com', '2', '3', 0),
(3, 'Prueba1', 'prueba1@gmail.com', 'Donar Medicamentos', 'Lince', 0),
(4, 'YeseniaTD', 'yeseniaandrea.torres@unmsm.edu.pe', 'Donar Ropa', 'San Miguel', 10),
(5, 'YeseniaTD', 'yeseniaandrea.torres@unmsm.edu.pe', 'Donar Medicamentos', 'Lince', 100),
(6, 'YeseniaTD', 'yeseniaandrea.torres@unmsm.edu.pe', 'Donar Ropa', 'San Borja', 3),
(7, 'YeseniaTD', 'yeseniatd@gmail.com', 'Donar Muebles', 'San Miguel', 6),
(8, 'YeseniaTD', 'yeseniatd@gmail.com', 'Donar Medicamentos', 'San Borja', 5),
(9, 'YeseniaTD', 'yeseniatd@gmail.com', 'Donar Muebles', 'San Borja', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacionmonetaria`
--

CREATE TABLE `donacionmonetaria` (
  `iddonacionmonetaria` int(5) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `donacionmonetaria`
--

INSERT INTO `donacionmonetaria` (`iddonacionmonetaria`, `usuario`, `mensaje`, `cantidad`, `fecha`) VALUES
(1, 'Rommina', 'hola, soy romina', 10, '2023-03-06 19:24:21'),
(2, 'YeseniaTD', 'Holi', 100, '2023-03-07 02:25:46'),
(3, 'YeseniaTD', '', 0, '2023-03-07 17:53:55'),
(4, 'YeseniaTD', 'Donar', 123, '2023-03-07 18:41:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `descripcion`, `categoria`) VALUES
(37, '¿Cómo participo?', 'Productos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUser` int(11) NOT NULL,
  `Usuario` varchar(200) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUser`, `Usuario`, `Nombres`, `Apellidos`, `Correo`, `Contrasena`) VALUES
(1, 'YeseniaTD', 'Yesenia', 'Torres', 'yeseniatd@gmail.com', '$2y$10$h9hoCDxbsBYgJ.gbYeky1OD029J9H0Rv9B.88RbpCaGcEpDe36KmO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campana`
--
ALTER TABLE `campana`
  ADD PRIMARY KEY (`idcampana`);

--
-- Indices de la tabla `compraproductos`
--
ALTER TABLE `compraproductos`
  ADD PRIMARY KEY (`IdCompra`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`iddonacion`);

--
-- Indices de la tabla `donacionmonetaria`
--
ALTER TABLE `donacionmonetaria`
  ADD PRIMARY KEY (`iddonacionmonetaria`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campana`
--
ALTER TABLE `campana`
  MODIFY `idcampana` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `compraproductos`
--
ALTER TABLE `compraproductos`
  MODIFY `IdCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `iddonacion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `donacionmonetaria`
--
ALTER TABLE `donacionmonetaria`
  MODIFY `iddonacionmonetaria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
