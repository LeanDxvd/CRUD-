-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 04:04:07
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bclicoreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cigarros`
--

CREATE TABLE `cigarros` (
  `idCigarros` int(5) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `NomCigarro` varchar(30) NOT NULL,
  `CantCigarros` int(3) NOT NULL,
  `LoteCigarros` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cigarros`
--

INSERT INTO `cigarros` (`idCigarros`, `FOTO`, `NomCigarro`, `CantCigarros`, `LoteCigarros`) VALUES
(1, '', 'Lucky Strike', 10, 50),
(2, '', 'Pall Mall', 10, 50),
(3, '', 'Kent', 15, 150),
(4, '', 'Esse', 20, 300),
(5, '', 'Malboro', 40, 400),
(6, '', 'Nirvana', 30, 150),
(7, '', 'Hamiltom', 15, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gaseosas`
--

CREATE TABLE `gaseosas` (
  `idGaseosa` int(5) NOT NULL,
  `nomGaseosa` varchar(40) NOT NULL,
  `CantGaseosa` int(3) NOT NULL,
  `LoteGaseosa` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gaseosas`
--

INSERT INTO `gaseosas` (`idGaseosa`, `nomGaseosa`, `CantGaseosa`, `LoteGaseosa`) VALUES
(1, 'Coca cola', 10, 120),
(2, 'Isaac Cola', 10, 120),
(3, 'Kr', 15, 120),
(4, 'Inca Kola', 50, 500),
(5, 'Sprite', 25, 300),
(6, '7up', 15, 120);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regristro`
--

CREATE TABLE `regristro` (
  `id` int(9) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechaRegistro` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `regristro`
--

INSERT INTO `regristro` (`id`, `Nombre`, `email`, `fechaRegistro`) VALUES
(9, 'david', 'imitai@hotmail.com', '28/11/22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tragos`
--

CREATE TABLE `tragos` (
  `idTrago` int(11) NOT NULL,
  `nomTrago` varchar(100) NOT NULL,
  `cantTrago` int(11) NOT NULL,
  `loteTrago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tragos`
--

INSERT INTO `tragos` (`idTrago`, `nomTrago`, `cantTrago`, `loteTrago`) VALUES
(1, 'Jack Daniels', 15, 150),
(2, 'Red Labbel', 50, 300),
(3, 'Vat 69', 50, 300),
(4, 'Ron Cartavio', 15, 100),
(6, 'Blue Labbel', 50, 300),
(7, 'Moet ', 50, 800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinos`
--

CREATE TABLE `vinos` (
  `idVinos` int(5) NOT NULL,
  `NomVinos` varchar(50) NOT NULL,
  `CantVinos` int(3) NOT NULL,
  `LoteVinos` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vinos`
--

INSERT INTO `vinos` (`idVinos`, `NomVinos`, `CantVinos`, `LoteVinos`) VALUES
(1, 'Tabernero Gran Rose ', 20, 80),
(2, 'Borgoña', 20, 120),
(3, 'Mistela', 15, 80),
(4, 'Beronia Vinotinto', 10, 20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cigarros`
--
ALTER TABLE `cigarros`
  ADD PRIMARY KEY (`idCigarros`);

--
-- Indices de la tabla `gaseosas`
--
ALTER TABLE `gaseosas`
  ADD PRIMARY KEY (`idGaseosa`);

--
-- Indices de la tabla `regristro`
--
ALTER TABLE `regristro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tragos`
--
ALTER TABLE `tragos`
  ADD PRIMARY KEY (`idTrago`);

--
-- Indices de la tabla `vinos`
--
ALTER TABLE `vinos`
  ADD PRIMARY KEY (`idVinos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cigarros`
--
ALTER TABLE `cigarros`
  MODIFY `idCigarros` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `gaseosas`
--
ALTER TABLE `gaseosas`
  MODIFY `idGaseosa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `regristro`
--
ALTER TABLE `regristro`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tragos`
--
ALTER TABLE `tragos`
  MODIFY `idTrago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `vinos`
--
ALTER TABLE `vinos`
  MODIFY `idVinos` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
