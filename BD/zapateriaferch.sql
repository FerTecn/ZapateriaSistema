-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-11-2022 a las 01:19:24
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zapateriaferch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int NOT NULL AUTO_INCREMENT,
  `nombreCategoria` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'Zapato para mujer'),
(2, 'Zapato para hombre'),
(3, 'Zapato infantil para niña'),
(4, 'Zapato infantil para niño'),
(5, 'Zapato para bebés');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

DROP TABLE IF EXISTS `clasificacion`;
CREATE TABLE IF NOT EXISTS `clasificacion` (
  `idClasificacion` int NOT NULL AUTO_INCREMENT,
  `nombreClasificacion` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idClasificacion`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`idClasificacion`, `nombreClasificacion`) VALUES
(1, 'Tenis deportivos'),
(2, 'Tenis casuales'),
(3, 'Zapato escolar'),
(4, 'Botas y botines'),
(5, 'Zapato casual'),
(6, 'Zapato confort'),
(7, 'Zapato de vestir'),
(8, 'Sandalias'),
(9, 'Pantunflas'),
(10, 'Zapato para bebé'),
(11, 'Mocasines'),
(12, 'Zapato infantil'),
(13, 'Zapato juvenil'),
(14, 'Zapatillas'),
(15, 'Huaraches');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `nombreCliente` varchar(35) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `primerApellidoCliente` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `segundoApellidoCliente` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `telefonoCliente` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correoCliente` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombreCliente`, `primerApellidoCliente`, `segundoApellidoCliente`, `telefonoCliente`, `correoCliente`) VALUES
(1, 'Fernanda', 'García', NULL, '2471319444', 'fernandagar@gmail.com'),
(2, 'Samanta', 'Flores', NULL, '2471292912', 'samflores@gmail.com'),
(3, 'Isacc', 'Montiel', 'Molina', '2456123785', 'isaccmolina@gmail.com'),
(4, 'Jesica Fabiola', 'Gonzalino', 'Flores', '5523687410', 'jesicafab@gmail.com'),
(5, 'Pedro', 'Conde', NULL, '2419637845', 'pedrocon@gmail.com'),
(6, 'Jorgue', 'Vázquez', 'Vázquez', '2684561274', 'jorguevaz@gmail.com'),
(7, 'Camila', 'Vega', NULL, '2416974581', 'camvega@gmail.com'),
(8, 'Oscar', 'Báez', 'Vázquez', '2561234741', 'oscarr@gmail.com'),
(9, 'Kevin', 'Espinoza', NULL, '4475618588', 'kevin12@gmail.com'),
(10, 'Pedro', 'Hernández', NULL, '2471274585', 'pedroher@gmail.com'),
(11, 'Elia', 'Torres', NULL, '4445721698', 'elia@gmail.com'),
(12, 'Janet', 'Aguirre', NULL, '2474758477', 'janetag@gmail.com'),
(13, 'Jael', 'Vega', NULL, '6853795412', 'jaelv@gmail.com'),
(14, 'Ricardo', 'Rosember', NULL, '7784756691', 'ricardorr@gmail.com'),
(15, 'Ximena', 'Gómez', 'Pinedo', '4511236571', 'jimenagp@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `idColor` int NOT NULL AUTO_INCREMENT,
  `nombreColor` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idColor`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`idColor`, `nombreColor`) VALUES
(1, 'Negro'),
(2, 'Blanco'),
(3, 'Verde'),
(4, 'Morado'),
(5, 'Gris'),
(6, 'Lila'),
(7, 'Rojo'),
(8, 'Amarillo'),
(9, 'Café'),
(10, 'Marrón'),
(11, 'Naranja'),
(12, 'Beige'),
(13, 'Turquesa'),
(14, 'Lavanda'),
(15, 'Salmón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `idEmpleado` int NOT NULL AUTO_INCREMENT,
  `nombreEmpleado` varchar(35) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `primerApellidoEmpleado` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `segundoApellidoEmpleado` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `telefono` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `correo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idSexo` int NOT NULL,
  PRIMARY KEY (`idEmpleado`),
  KEY `idSexo` (`idSexo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombreEmpleado`, `primerApellidoEmpleado`, `segundoApellidoEmpleado`, `telefono`, `correo`, `idSexo`) VALUES
(1, 'Karla ', 'García', NULL, '2413625510', 'karla@gmail.com', 1),
(2, 'Guadalupe', 'Jímenez', NULL, '2471319456', 'guadalupeji@gmail.com', 2),
(3, 'Eva', 'García', 'Vega', '2481562320', 'evagarcia@gmail.com', 1),
(4, 'Jesica', 'Gonzalino', 'Flores', '5554782010', 'jess@gmail.com', 1),
(5, 'Alicia', 'Flores', NULL, '2471239854', 'aliflores@gmail.com', 1),
(6, 'Alexis', 'Conde', NULL, '2471984710', 'alexis@gmail.com', 2),
(7, 'Oscar', 'Bautista', 'Vázquez', '4458963210', 'oscarb@gmail.com', 2),
(8, 'Alejandra', 'León', NULL, '2471475869', 'aleleon@gmail.com', 1),
(9, 'David', 'Sierra', 'Treviño', '5657891243', 'davids@gmail.com', 2),
(10, 'Miguel', 'Rodríguez', 'Pérez', '2471654778', 'miguelro@gmail.com', 2),
(11, 'Juan', 'Pérez', NULL, '2694576581', 'juan@gmail.com', 2),
(12, 'Carlos', 'Méndez', NULL, '1023258941', 'carlosmen@gmail.com', 2),
(13, 'Carmen', 'Torres', NULL, '7845692473', 'carment@gmail.com', 1),
(14, 'Francisco', 'Mendieta', NULL, '4571235896', 'franciscom@gmail.com', 2),
(15, 'Alexa', 'Pineda', NULL, '1234567891', 'alexapineda@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `idFactura` int NOT NULL AUTO_INCREMENT,
  `idVenta` int NOT NULL,
  `idZapato` int NOT NULL,
  `total` varchar(6) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idFactura`),
  KEY `idVenta` (`idVenta`),
  KEY `idZapato` (`idZapato`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `idProveedor` int NOT NULL AUTO_INCREMENT,
  `nombreProveedor` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombreProveedor`) VALUES
(1, 'Arian'),
(2, 'Baerchi'),
(3, 'Bocelli'),
(4, 'Dansi'),
(5, 'Joma'),
(6, 'Exe'),
(7, 'Elenco'),
(8, 'DeChics'),
(9, 'Dorking'),
(10, 'Carmina'),
(11, 'Cuplé'),
(12, 'Lodi'),
(13, 'Menbur'),
(14, 'Camper'),
(15, 'Coolway'),
(16, 'Sendra'),
(17, 'Skechers'),
(18, 'Crocs'),
(19, 'New balance'),
(20, 'Lee'),
(21, 'Nautica'),
(22, 'Levis'),
(23, 'Prada'),
(24, 'Gucci'),
(25, 'MQueen'),
(26, 'Dior'),
(27, 'Fermani'),
(28, 'Gavino'),
(29, 'Keen'),
(30, 'NeroGiardini'),
(31, 'Versace'),
(32, 'Fendi'),
(33, 'Cartier'),
(34, 'Birman'),
(35, 'SCHUTZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

DROP TABLE IF EXISTS `sexo`;
CREATE TABLE IF NOT EXISTS `sexo` (
  `idSexo` int NOT NULL,
  `nombreSexo` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idSexo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`idSexo`, `nombreSexo`) VALUES
(1, 'Femenino'),
(2, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `idVenta` int NOT NULL AUTO_INCREMENT,
  `idCliente` int NOT NULL,
  `idEmpleado` int NOT NULL,
  `fechaVenta` date NOT NULL,
  PRIMARY KEY (`idVenta`),
  KEY `idCliente` (`idCliente`),
  KEY `idEmpleado` (`idEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idVenta`, `idCliente`, `idEmpleado`, `fechaVenta`) VALUES
(1, 1, 1, '2022-05-08'),
(2, 2, 2, '2021-08-10'),
(3, 3, 3, '2021-10-14'),
(4, 4, 4, '2021-12-13'),
(5, 5, 5, '2022-08-01'),
(6, 6, 6, '2019-01-16'),
(7, 7, 7, '2019-10-23'),
(8, 8, 8, '2017-04-10'),
(9, 9, 9, '2019-11-20'),
(10, 10, 10, '2022-04-17'),
(11, 11, 11, '2022-01-23'),
(12, 12, 12, '2021-09-12'),
(13, 13, 13, '2017-03-13'),
(14, 14, 14, '2022-07-12'),
(15, 15, 15, '2016-04-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapato`
--

DROP TABLE IF EXISTS `zapato`;
CREATE TABLE IF NOT EXISTS `zapato` (
  `idZapato` int NOT NULL AUTO_INCREMENT,
  `idProveedor` int NOT NULL,
  `idClasificacion` int NOT NULL,
  `idCategoria` int NOT NULL,
  `idColor` int NOT NULL,
  `Descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Costo` varchar(5) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idZapato`),
  KEY `idProveedor` (`idProveedor`),
  KEY `idClasificacion` (`idClasificacion`),
  KEY `idCategoria` (`idCategoria`),
  KEY `idColor` (`idColor`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `zapato`
--

INSERT INTO `zapato` (`idZapato`, `idProveedor`, `idClasificacion`, `idCategoria`, `idColor`, `Descripcion`, `Costo`) VALUES
(45, 24, 1, 2, 3, 'Tenis deportivos especiales para jugar futbool', '2500'),
(79, 14, 6, 3, 15, 'Zapato escolar', '522'),
(80, 18, 8, 1, 14, 'Crocs cómodos con diseño especial', '850'),
(81, 1, 2, 3, 4, 'Tenis estilo bota, color único', '520'),
(82, 15, 13, 2, 9, 'Zapato de piel para cualquier ocasión', '680'),
(83, 13, 4, 4, 8, 'Botas estilo gamuza color amarillo ', '700'),
(84, 16, 12, 3, 12, 'Zapato confort para niña', '550'),
(85, 12, 1, 1, 13, 'Ideal para el deporte', '450'),
(86, 10, 10, 5, 7, 'Zapato con diseño, color rojo', '255'),
(87, 21, 3, 4, 1, 'Zapato de piel, para regreso a clases', '450'),
(88, 13, 7, 1, 10, 'Ideal para trabajar ', '458'),
(89, 5, 14, 1, 3, 'Zapatillas para fiestas', '687'),
(90, 7, 1, 4, 7, 'Tenis con suela confort para tener comodidad ', '527'),
(91, 8, 7, 2, 10, 'Ideal para ir a la oficina y tener comodidad en todo momento', '720'),
(94, 6, 8, 2, 3, 'Sandalias cómodas, color verde', '260'),
(95, 19, 9, 1, 4, 'Pantuflas modelo único', '370'),
(96, 15, 11, 4, 2, 'Mocasines, color blanco', '444'),
(97, 3, 13, 3, 6, 'Zapato cómodo, color lila', '400'),
(98, 4, 2, 3, 14, 'Tenis adecuados para vestir confort', '500'),
(99, 13, 4, 1, 1, 'Botas de piel', '690'),
(100, 4, 10, 5, 4, 'Zapatos diseño de tela', '150'),
(101, 15, 12, 4, 10, 'Zapato de piel', '600'),
(102, 35, 6, 4, 1, 'Zapatos útiles para estar cómodo', '555'),
(103, 29, 1, 2, 7, 'Tenis de acuerdo a todo tipo de deporte', '800'),
(104, 27, 8, 1, 8, 'Sandalias para ir a la playa', '654'),
(105, 29, 15, 3, 6, 'Zapato para verano', '520'),
(106, 34, 4, 3, 5, 'Botines de piel para niña', '420'),
(107, 32, 3, 3, 1, 'Zapato de piel, diseño único', '360'),
(108, 30, 11, 2, 5, 'Mocasines para eventos de trabajo', '780'),
(109, 31, 2, 1, 2, 'Tenis estilo único, comodidad en todo momento', '1999'),
(110, 9, 7, 1, 9, 'Ideales para combinarlo con trajes ', '786'),
(111, 10, 9, 4, 11, 'Comodidad, adecuados para el frio', '823'),
(112, 30, 8, 3, 12, 'Sandalias cómodas para andar en casa ', '741'),
(113, 12, 10, 5, 11, 'Zapato de tela', '200'),
(114, 35, 7, 2, 1, 'Zapato de piel', '800'),
(115, 4, 3, 4, 1, 'Zapato para el regreso a clases', '400'),
(116, 7, 4, 1, 9, 'Botines de piel', '900'),
(118, 16, 12, 3, 4, 'Zapato con diseño de mariposa', '455'),
(119, 21, 2, 2, 12, 'Tenis para combinarlo con cualquier prenda de ropa', '705'),
(120, 33, 1, 2, 3, 'Comodidad, especiales para basquetball', '1000'),
(121, 9, 10, 5, 8, 'Zapatos de tela cómodos para el bebé', '300'),
(122, 32, 15, 4, 2, 'Huaraches para la playa', '753'),
(123, 15, 9, 3, 11, 'Pantuflas rellenas de algodón', '654'),
(124, 23, 7, 4, 1, 'Zapato de piel', '698'),
(125, 28, 4, 4, 7, 'Botines con gamusa', '822'),
(126, 14, 7, 2, 9, 'Zapato ideal para eventos formales', '500'),
(127, 16, 7, 1, 12, 'Zapatos estilo ideal para eventos formales', '690'),
(128, 33, 15, 3, 15, 'Huaraches perfectos para verano', '350'),
(129, 31, 5, 1, 1, 'Zapato de piso', '405'),
(130, 4, 14, 1, 6, 'Zapatillas estilo único ', '890');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idSexo`) REFERENCES `sexo` (`idSexo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`idVenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`idZapato`) REFERENCES `zapato` (`idZapato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `zapato`
--
ALTER TABLE `zapato`
  ADD CONSTRAINT `zapato_ibfk_1` FOREIGN KEY (`idClasificacion`) REFERENCES `clasificacion` (`idClasificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zapato_ibfk_2` FOREIGN KEY (`idColor`) REFERENCES `color` (`idColor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zapato_ibfk_3` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zapato_ibfk_4` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
