-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 30-01-2021 a las 21:56:47
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comidarapida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` int(5) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(19,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `fecha` date NOT NULL,
  `hamburguesas` varchar(45) NOT NULL,
  `pizza` varchar(45) NOT NULL,
  `postres` varchar(45) NOT NULL,
  `bebidas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` char(9) NOT NULL,
  `email` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `telefono`, `email`, `direccion`, `username`, `password`) VALUES
('saul dongo sicha', 'perez rodrigues', '123654789', 'anexo 2 collahuacho', 'sauldong@gmail.com', 'roo', '$2y$10$O3aNZ2L0EO6sUgtNTF0RiOPSgdSEIyXbn/hqdf'),
('saul ', 'perez ', '987454578', 'anexo 2 callao', 'sauldongosicha79@gmail.com', 'salsito', '$2y$10$9u03x3Zcu7Ny/7d3buh/6uX38JzOGmK45rCaAH'),
('sicha', 'rodrigues', '987456321', 'anexo 2 independencia', 'saul@gmail.com', 'sicha', '$2y$10$xHprrITJSiJeNdhSovTiyuahlktvyF4J1Bw9Cf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`fecha`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
