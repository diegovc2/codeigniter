-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2017 a las 08:47:50
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `subidas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

CREATE TABLE `postulaciones` (
  `practica` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(20) COLLATE utf8_bin NOT NULL,
  `rut` varchar(50) COLLATE utf8_bin NOT NULL,
  `region` varchar(50) COLLATE utf8_bin NOT NULL,
  `comuna` varchar(20) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(20) COLLATE utf8_bin NOT NULL,
  `telefono2` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `universidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `añoegreso` varchar(10) COLLATE utf8_bin NOT NULL,
  `educacion_superior` varchar(400) COLLATE utf8_bin NOT NULL,
  `titulos` varchar(400) COLLATE utf8_bin NOT NULL,
  `cursos` varchar(400) COLLATE utf8_bin NOT NULL,
  `areaesp` varchar(400) COLLATE utf8_bin NOT NULL,
  `areainteres` varchar(400) COLLATE utf8_bin NOT NULL,
  `link` varchar(200) COLLATE utf8_bin NOT NULL,
  `fecha` varchar(20) COLLATE utf8_bin NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `postulaciones`
--

INSERT INTO `postulaciones` (`practica`, `nombre`, `apellidos`, `rut`, `region`, `comuna`, `direccion`, `telefono`, `telefono2`, `email`, `universidad`, `añoegreso`, `educacion_superior`, `titulos`, `cursos`, `areaesp`, `areainteres`, `link`, `fecha`, `numero`) VALUES
('', 'Diego', 'Veloso', '18.119.561-4', 'Región Metropolitana de Santiago', 'sin-comuna', 'Rio Loa 7721', '+56227102981', '', 'diegoveloso34@hotmail.com', 'U. DE CHILE', '', 'asasfa', 'asfsaf', 'safasf', '', '', 'VelosoDiego181195614231020172202.pdf', '23/10/2017 22:02', 0),
('', 'Rabbit', 'Rayman Raving', '5.819.073-k', 'Tarapacá', 'Alto Hospicio', 'Avenida Siempre viva 123', '+56227410821', '56963105408', 'cincelaquiles@gmail.com', 'U. DE CONCEPCIÓN', '2015', '2010 Ingenieria en la Universidad de Chile', 'Ingenieria', '2009 Tromp', '', '', 'RaymanRavingRabbit5819073k301020171545.pdf', '30/10/2017 15:45', 0),
('on', 'PEdro', 'Perez Cotapos', '78.561.537-9', 'Antofagasta', 'Sierra Gorda', 'Silent hill', '+56227410821', '56963105408', 'cincelaquiles@gmail.com', 'PONTIFICIA U. CATÓLICA DE VALPARAÍSO', '2015', '2010 Ingenieria en la Universidad de Chile', 'Ingenieria', '2009 Tromp', 'Soy especial hihihhi', 'Soy interesante huhuhuhu', 'PerezCotaposPEdro78561537906112017844.pdf', '06/11/2017 8:44', 1),
('', 'Star', 'Diaz Gomez', '8.583.702-8', 'Tarapacá', 'Alto Hospicio', 'Avenida Siempre viva 123', '+56227410821', '56963105408', 'cincelaquiles@gmail.com', 'U. DE CONCEPCIÓN', '2015', '2010 Ingenieria en la Universidad de Chile', 'Ingenieria', '2009 Tromp', 'Soy especial', 'Soy interesante', 'DiazGomezStar85837028301020171643.pdf', '30/10/2017 16:43', 6),
('0', 'Julieta', 'Alda Eva', '9.478.900-1', 'Atacama', 'Chañaral', 'Avenida Siempre viva 123', '+56227410821', '56963105408', 'cincelaquiles@gmail.com', 'U. DE CONCEPCIÓN', '2015', '2010 Ingenieria en la Universidad de Chile', 'Ingenieria', '2009 Tromp', '', '', 'AldaEvaJulieta94789001301020171543.pdf', '30/10/2017 15:43', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
