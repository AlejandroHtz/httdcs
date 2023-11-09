-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 05:45:41
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `decoditec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idbitacora` mediumint(11) UNSIGNED NOT NULL,
  `usuario` text DEFAULT NULL,
  `fechainicio` date DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `fechafin` date DEFAULT NULL,
  `horafin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`idbitacora`, `usuario`, `fechainicio`, `horainicio`, `fechafin`, `horafin`) VALUES
(1, 'admin@decoditec.com', '2023-09-01', '20:36:10', '2023-09-02', '00:24:59'),
(2, 'admin@decoditec.com', '2023-09-02', '00:30:19', '2023-09-02', '00:30:21'),
(3, 'admin@decoditec.com', '2023-09-02', '00:35:23', '2023-09-03', '01:02:58'),
(4, 'admin@decoditec.com', '2023-09-03', '18:54:07', '2023-09-03', '19:15:03'),
(5, 'admin@decoditec.com', '2023-09-03', '19:15:08', '2023-09-04', '13:28:01'),
(6, 'admin@decoditec.com', '2023-09-04', '13:36:00', '2023-09-04', '17:53:23'),
(7, 'sistemas@decoditec.com', '2023-09-04', '17:53:38', NULL, NULL),
(8, 'admin@decoditec.com', '2023-09-04', '18:47:28', NULL, NULL),
(9, 'admin@decoditec.com', '2023-09-05', '22:36:15', '2023-09-05', '22:36:20'),
(10, 'admin@decoditec.com', '2023-09-05', '22:36:30', '2023-09-05', '23:13:29'),
(11, 'admin@decoditec.com', '2023-09-06', '21:57:16', NULL, NULL),
(12, 'admin@decoditec.com', '2023-09-07', '19:28:45', '2023-09-07', '20:57:44'),
(13, 'admin@decoditec.com', '2023-09-21', '13:35:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_depositos`
--

CREATE TABLE `cat_depositos` (
  `id` int(11) NOT NULL,
  `concepto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cat_depositos`
--

INSERT INTO `cat_depositos` (`id`, `concepto`) VALUES
(1, 'CASETAS'),
(2, 'COMBUSTIBLE'),
(3, 'NOMINA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_estatus`
--

CREATE TABLE `cat_estatus` (
  `id_estatus` int(11) NOT NULL,
  `estatus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cat_estatus`
--

INSERT INTO `cat_estatus` (`id_estatus`, `estatus`) VALUES
(1, 'PAGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_tipo_cuenta`
--

CREATE TABLE `cat_tipo_cuenta` (
  `id_tipcuenta` int(11) NOT NULL,
  `tipo_cuenta` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cat_tipo_cuenta`
--

INSERT INTO `cat_tipo_cuenta` (`id_tipcuenta`, `tipo_cuenta`) VALUES
(1, 'FISCAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_tipo_documento`
--

CREATE TABLE `cat_tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `tipo_documento` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cat_tipo_documento`
--

INSERT INTO `cat_tipo_documento` (`id_tipo_documento`, `tipo_documento`) VALUES
(1, 'PDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_tipo_movimiento`
--

CREATE TABLE `cat_tipo_movimiento` (
  `id_tipmovimiento` int(11) NOT NULL,
  `tipo_movimiento` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cat_tipo_movimiento`
--

INSERT INTO `cat_tipo_movimiento` (`id_tipmovimiento`, `tipo_movimiento`) VALUES
(1, 'TRANSFERENCIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `rfc` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `colonia` varchar(250) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `mun` varchar(250) NOT NULL,
  `cp` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `usuario_creacion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_creacion` datetime NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_modificacion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `rfc`, `direccion`, `colonia`, `ciudad`, `mun`, `cp`, `telefono`, `fecha_creacion`, `usuario_creacion`, `hora_creacion`, `fecha_modificacion`, `usuario_modificacion`, `hora_modificacion`) VALUES
(1, ' BASOR', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(2, ' COMISIONISTA', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(3, ' COSMOPOLITA IZTAPALAPA', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(4, ' COSMOPOLITA VALLEJO', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(5, ' DECODITEC', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(6, ' JTP LOGISTICS', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(7, ' MULTISERVICIOS 2001', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(8, ' REFRACTARIOS RETRAK SA DE CV', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(9, ' SRA AURORA', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(10, ' STM', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(11, ' WEGAR', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(12, ' ZULEMA', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(13, 'COMISIONISTA', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(14, 'COSMOPOLITA VALLEJO', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00'),
(15, 'DECODITEC', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobranza`
--

CREATE TABLE `cobranza` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` int(11) NOT NULL,
  `semana` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `servicio` int(11) NOT NULL,
  `tracto` varchar(255) NOT NULL,
  `operador` varchar(255) NOT NULL,
  `mercancia` varchar(255) NOT NULL,
  `origen` varchar(255) NOT NULL,
  `destino` varchar(255) NOT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `contacto` varchar(255) DEFAULT NULL,
  `folio_factura` varchar(255) DEFAULT NULL,
  `fecha_factura` date DEFAULT NULL,
  `fecha_cartaporte` date DEFAULT NULL,
  `carta_porte` varchar(255) DEFAULT NULL,
  `subtotal_carta_porte` decimal(8,2) DEFAULT NULL,
  `casetas` decimal(8,2) DEFAULT NULL,
  `maniobra` decimal(8,2) DEFAULT NULL,
  `estadia` decimal(8,2) DEFAULT NULL,
  `reparto` decimal(8,2) DEFAULT NULL,
  `flete` decimal(8,2) DEFAULT NULL,
  `total_flete` decimal(8,2) DEFAULT NULL,
  `monto_anticipo` decimal(8,2) DEFAULT NULL,
  `fecha_anticipo` date DEFAULT NULL,
  `diferencia_cobrar` decimal(8,2) DEFAULT NULL,
  `fecha_entrega_doc` date DEFAULT NULL,
  `dias_credito` int(11) DEFAULT NULL,
  `fecha_vencimiento_finiquito` text DEFAULT NULL,
  `semana_finiquito_viaje` int(11) DEFAULT NULL,
  `fecha_finiquito_viaje` date DEFAULT NULL,
  `fecha_finiquito_casetas` date DEFAULT NULL,
  `pago_total` decimal(8,2) DEFAULT NULL,
  `ingreso_a_cuenta` varchar(255) DEFAULT NULL,
  `tranferencia_a_cta` varchar(255) DEFAULT NULL,
  `tipo_movimiento` varchar(255) DEFAULT NULL,
  `estatus` varchar(255) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `documentos` varchar(255) DEFAULT NULL,
  `fecha_creacion` date NOT NULL,
  `usuario_creacion` varchar(250) NOT NULL,
  `hora_creacion` datetime NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_modificacion` varchar(250) NOT NULL,
  `hora_modificacion` datetime NOT NULL,
  `enlace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cobranza`
--

INSERT INTO `cobranza` (`id`, `no`, `semana`, `fecha`, `servicio`, `tracto`, `operador`, `mercancia`, `origen`, `destino`, `empresa`, `contacto`, `folio_factura`, `fecha_factura`, `fecha_cartaporte`, `carta_porte`, `subtotal_carta_porte`, `casetas`, `maniobra`, `estadia`, `reparto`, `flete`, `total_flete`, `monto_anticipo`, `fecha_anticipo`, `diferencia_cobrar`, `fecha_entrega_doc`, `dias_credito`, `fecha_vencimiento_finiquito`, `semana_finiquito_viaje`, `fecha_finiquito_viaje`, `fecha_finiquito_casetas`, `pago_total`, `ingreso_a_cuenta`, `tranferencia_a_cta`, `tipo_movimiento`, `estatus`, `observaciones`, `documentos`, `fecha_creacion`, `usuario_creacion`, `hora_creacion`, `fecha_modificacion`, `usuario_modificacion`, `hora_modificacion`, `enlace`) VALUES
(160, 159, 22, '2023-05-29', 159, '6', '23', 'CIMENTACIONES', 'TEQUIXQUIAC', 'CELAYA', '5', '', 'N/A', '0000-00-00', '2023-06-01', '1320', '22000.00', '0.00', '0.00', '0.00', '0.00', '24000.00', '24000.00', '0.00', '0000-00-00', '0.00', '0000-00-00', 0, 'N/A', 26, '2023-06-30', '0000-00-00', '22000.00', '1', 'DES COMERCIAL SA DE CV', '3231', '3', 'OK COMPLETO 100%', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 9),
(165, 0, 36, '0000-00-00', 1, '1', '', '', '', '', '2', '', '', '0000-00-00', '0000-00-00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '8000.00', '1000.00', '0000-00-00', '0.00', '0000-00-00', 0, '', 0, '0000-00-00', '0000-00-00', '3000.00', '1', '', '1', '1', '', NULL, '2023-09-07', 'admin@decoditec.com', '2023-09-07 00:20:26', '2023-09-07', 'admin@decoditec.com', '2023-09-07 19:51:30', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depositos`
--

CREATE TABLE `depositos` (
  `id` int(11) NOT NULL,
  `servicio` int(11) NOT NULL,
  `solicita` varchar(250) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `concepto` varchar(250) NOT NULL,
  `dia` varchar(250) NOT NULL,
  `tipo_gasto` varchar(250) NOT NULL,
  `cuenta` varchar(250) NOT NULL,
  `autorizado` varchar(250) NOT NULL,
  `importe_gasto` double DEFAULT NULL,
  `dep_realizado` double DEFAULT NULL,
  `factura` varchar(250) NOT NULL,
  `tipo_movimiento` text DEFAULT NULL,
  `estatus` varchar(250) NOT NULL,
  `fecha` date DEFAULT NULL,
  `documentos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_creacion` date NOT NULL,
  `usuario_creacion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_creacion` datetime NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_modificacion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_modificacion` datetime NOT NULL,
  `monto` double DEFAULT NULL,
  `fecha_factura` date DEFAULT NULL,
  `num_factura` varchar(255) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `imp_carga` double DEFAULT NULL,
  `precio_combustible` double DEFAULT NULL,
  `ltr_suministrados` double DEFAULT NULL,
  `tipo_combustible` varchar(255) DEFAULT NULL,
  `numticket` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `depositos`
--

INSERT INTO `depositos` (`id`, `servicio`, `solicita`, `descripcion`, `concepto`, `dia`, `tipo_gasto`, `cuenta`, `autorizado`, `importe_gasto`, `dep_realizado`, `factura`, `tipo_movimiento`, `estatus`, `fecha`, `documentos`, `fecha_creacion`, `usuario_creacion`, `hora_creacion`, `fecha_modificacion`, `usuario_modificacion`, `hora_modificacion`, `monto`, `fecha_factura`, `num_factura`, `fecha_pago`, `imp_carga`, `precio_combustible`, `ltr_suministrados`, `tipo_combustible`, `numticket`) VALUES
(1, 129, '', 'BASCULA FERRY, COMIDA (LMMJ) Y FITOSANITARIA', 'VIATICOS', ' LMMJ ', '', '', '', 0, 1000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-01', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 130, '', 'COMIDAS (M)', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-02', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 127, '', 'COMIDAS (M)', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-03', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 128, '', 'COMIDAS DE DOS PERSONAS (MJ)', 'VIATICOS', ' MJ ', '', '', '', 0, 1000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-03', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 129, '', 'COMIDAS (VS) Y TAXI', 'VIATICOS', ' VS ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-04', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 131, '', 'COMIDAS (J) RECARGA 15 DIAS', 'VIATICOS', ' J ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-04', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 133, '', 'COMIDAS (VSD)', 'VIATICOS', ' VSD ', '', '', '', 0, 750, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-04', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 750, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 132, '', 'COMIDAS (VSD)', 'VIATICOS', ' VSD ', '', '', '', 0, 750, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-04', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 750, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 134, '', 'COMIDAS (VSD)', 'VIATICOS', ' VSD ', '', '', '', 0, 750, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-05', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 750, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 129, '', 'COMIDA (DL), BASCULA FERRY, FITOSANITARIA Y PENSION', 'VIATICOS', ' DL ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 132, '', 'COMIDA (L) Y PENSION (SD)', 'VIATICOS', ' L ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 134, '', 'COMIDAS (L)', 'VIATICOS', ' L ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-08', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 137, '', 'COMIDAS (MM)', 'VIATICOS', ' MM ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-08', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 138, '', 'COMIDAS (M) Y CALIBRADA', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-09', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 139, '', 'COMBUSTIBLE Y COMIDA (M)', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-09', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 140, '', 'COMIDAS (JVSD) Y ACCESO CENTRAL DE ABASTOS', 'VIATICOS', ' JVSD ', '', '', '', 0, 1000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-10', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 141, '', 'COMIDAS (VSD) Y CASETA ISLA AGUADA', 'VIATICOS', ' VSD ', '', '', '', 0, 750, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-12', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 750, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 142, '', 'COMIDAS (VSD) Y CASETA ISLA AGUADA', 'VIATICOS', ' VSD ', '', '', '', 0, 750, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-12', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 750, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 140, '', 'COMIDAS (L) Y COMBUSTIBLE', 'VIATICOS', ' L ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-13', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 140, '', 'COMIDAS (M) Y TIEMPO AIRE', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-15', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 142, '', 'COMIDA (LM) Y CASETA ISLA AGUADA', 'VIATICOS', ' LM ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-15', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 141, '', 'COMIDAS (LM) Y CASETA ISLA AGUADA', 'VIATICOS', ' LM ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-16', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 144, '', 'COMIDAS', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-17', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 145, '', 'COMIDAS', 'VIATICOS', ' J ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-18', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 146, '', 'COMIDAS (VSDL), PENSION E INSUMOS DE LIMPIEZA', 'VIATICOS', ' VSDL ', '', '', '', 0, 1000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-18', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 149, '', 'COMIDAS (MM)', 'VIATICOS', ' MM ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-22', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 147, '', 'COMIDA (M) Y TIEMPO AIRE', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-22', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 150, '', 'COMIDAS (M), INSUMOS DE LIMPIEZA', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-23', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 148, '', 'COMIDAS (MMJV) Y RECARGA T/A', 'VIATICOS', ' MMJV ', '', '', '', 0, 1000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-23', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 151, '', 'COMIDAS (JVSD), CASETA ISLA AGUADA Y RECARGA DE T/A', 'VIATICOS', ' JVSD ', '', '', '', 0, 1000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-24', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 149, '', 'COMIDA(J), MANIOBRA DE DESCARGA Y RECARGAS DE T/A', 'VIATICOS', ' J ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-24', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 153, '', 'COMIDA (V)', 'VIATICOS', ' V ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-25', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 148, '', 'COMIDAS (SD) Y CASETA TEPOTZOTLAN (NO PASA IAVE)', 'VIATICOS', ' SD ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-25', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 152, '', 'COMIDAS (J)', 'VIATICOS', ' J ', '', '', '', 0, 250, '', 'CANCELADO', 'CANCELADO', '0000-00-00', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 153, '', 'PRESTAMO DE COMIDA', 'VIATICOS', ' N/A ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-26', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 156, '', 'COMIDAS', 'VIATICOS', ' L ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-28', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 155, '', 'COMIDAS (LMMJ) Y CASETAS', 'VIATICOS', ' LMMJ ', '', '', '', 0, 1000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-28', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 157, '', 'COMIDAS (MMJV), CASETA DE ISLA AGUADA Y PENSION', 'VIATICOS', ' MMJV ', '', '', '', 0, 1000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-29', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 158, '', 'COMIDAS (MJV), CASETA ISLA AGUADA', 'VIATICOS', ' MJV ', '', '', '', 0, 750, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-29', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 750, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 159, '', 'COMIDA (M) VITAMINAS', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-29', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 154, '', 'COMIDAS (M) Y PENSION (SD) IRAPUATO ', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-30', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 160, '', 'COMIDA (JV), RECARGA T/A Y PENSION', 'VIATICOS', ' JV ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-31', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 154, '', 'COMIDAS (M)', 'VIATICOS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-06-01', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 132, '', 'CASETAS ZACATECAS', 'CASETAS', ' $-   ', '', '', '', 0, 450, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-08', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 450, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 132, '', 'COMBUSTIBLE Y CASETA, RETEN X FALTA DE LICENCIA', 'CASETAS', ' N/A ', '', '', '', 0, 10, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-08', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 141, '', 'COMIDAS (VSD) Y CASETA ISLA AGUADA', 'CASETAS', ' VSD ', '', '', '', 0, 480, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-12', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 480, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 142, '', 'COMIDAS (VSD) Y CASETA ISLA AGUADA', 'CASETAS', ' VSD ', '', '', '', 0, 480, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-12', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 480, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 140, '', 'CASETA ISLA AGUADA', 'CASETAS', ' N/A ', '', '', '', 0, 840, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-12', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 840, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 141, '', 'CASETA TULTEPEC A-32', 'CASETAS', ' N/A ', '', '', '', 0, 334, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-13', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 334, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 142, '', 'COMIDA (LM) Y CASETA ISLA AGUADA', 'CASETAS', ' LM ', '', '', '', 0, 480, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-15', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 480, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 141, '', 'COMIDAS (LM) Y CASETA ISLA AGUADA', 'CASETAS', ' LM ', '', '', '', 0, 420, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-16', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 420, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 151, '', 'COMIDAS (JVSD), CASETA ISLA AGUADA Y RECARGA DE T/A', 'CASETAS', ' JVSD ', '', '', '', 0, 420, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-24', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 420, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 148, '', 'COMIDAS (SD) Y CASETA TEPOTZOTLAN (NO PASA IAVE)', 'CASETAS', ' SD ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-25', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 151, '', 'CASETAS NO PASA IAVE', 'CASETAS', ' N/A ', '', '', '', 0, 760, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-26', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 760, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 154, '', 'CASETA SALAMANCA', 'CASETAS', ' N/A ', '', '', '', 0, 357, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-28', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 357, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 155, '', 'COMIDAS (LMMJ) Y CASETAS', 'CASETAS', ' LMMJ ', '', '', '', 0, 950, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-28', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 950, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 157, '', 'COMIDAS (MMJV), CASETA DE ISLA AGUADA Y PENSION', 'CASETAS', ' MMJV ', '', '', '', 0, 420, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-29', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 420, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 158, '', 'COMIDAS (MJV), CASETA ISLA AGUADA', 'CASETAS', ' MJV ', '', '', '', 0, 420, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-29', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 420, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 155, '', 'CASETAS', 'CASETAS', ' N/A ', '', '', '', 0, 1800, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-31', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1800, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 127, '', 'COMPLEMENTO DE MANIOBRA DE DESCARGA ', 'MANIOBRAS', ' N/A ', '', '', '', 0, 550, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-03', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 550, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 149, '', 'MANIOBRA DE DESCARGA', 'MANIOBRAS', ' N/A ', '', '', '', 0, 1450, '', 'CANCELADO', 'CANCELADO', '0000-00-00', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1450, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 149, '', 'COMIDA(J), MANIOBRA DE DESCARGA Y RECARGAS DE T/A', 'MANIOBRAS', ' J ', '', '', '', 0, 1450, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-24', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1450, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 134, '', 'BASCULA  Y COMBUSTIBLE', 'DIESEL RUTA', ' N/A ', '', '', '', 0, 159, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 159, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 134, '', 'COMBUSTIBLE', 'DIESEL RUTA', ' N/A ', '', '', '', 0, 106, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 128, '', 'COMBUSTIBLE ', 'IMPORTE', ' $-   ', '', '', '', 0, 5000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-04', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 5000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 135, '', 'COMBUSTIBLE', 'IMPORTE', ' N/A ', '', '', '', 0, 1956, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1956, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 134, '', 'BASCULA  Y COMBUSTIBLE', 'IMPORTE', ' N/A ', '', '', '', 0, 3600, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 3600, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 134, '', 'COMBUSTIBLE', 'IMPORTE', ' N/A ', '', '', '', 0, 2400, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 2400, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 137, '', 'COMBUSTIBLE', 'IMPORTE', ' N/A ', '', '', '', 0, 13500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-08', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 13500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 132, '', 'COMBUSTIBLE Y CASETA, RETEN X FALTA DE LICENCIA', 'IMPORTE', ' N/A ', '', '', '', 0, 5240, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-08', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 5240, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 139, '', 'COMBUSTIBLE Y COMIDA (M)', 'IMPORTE', ' M ', '', '', '', 0, 4200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-09', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 4200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 140, '', 'COMIDAS (L) Y COMBUSTIBLE', 'IMPORTE', ' L ', '', '', '', 0, 2400, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-13', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 2400, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 140, '', 'COMBUSTIBLE', 'IMPORTE', ' N/A ', '', '', '', 0, 2400, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-15', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 2400, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 141, '', 'COMBUSTIBLE', 'IMPORTE', ' N/A ', '', '', '', 0, 5000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-16', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 5000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 142, '', 'COMBUSTIBLE', 'IMPORTE', ' N/A ', '', '', '', 0, 6000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-16', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 6000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 151, '', 'COMBUSTIBLE', 'IMPORTE', ' N/A ', '', '', '', 0, 6000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-26', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 6000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 154, '', 'COMBUSTIBLE Y PENSION ', 'IMPORTE', ' N/A ', '', '', '', 0, 4500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-27', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 4500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 127, '', 'RECARGA T/A,COMISION CAJERO, GUIA ZONA CENTRO PACHUCA', 'TELEFONIA', ' N/A ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-02', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 131, '', 'COMIDAS (J) RECARGA 15 DIAS', 'TELEFONIA', ' J ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-04', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 140, '', 'GUIA EN CD DEL CARMEN Y COMPRA DE CELULAR', 'TELEFONIA', ' N/A ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-12', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 140, '', 'COMIDAS (M) Y TIEMPO AIRE', 'TELEFONIA', ' M ', '', '', '', 0, 200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-15', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 147, '', 'COMIDA (M) Y TIEMPO AIRE', 'TELEFONIA', ' M ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-22', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 148, '', 'COMIDAS (MMJV) Y RECARGA T/A', 'TELEFONIA', ' MMJV ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-23', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 151, '', 'COMIDAS (JVSD), CASETA ISLA AGUADA Y RECARGA DE T/A', 'TELEFONIA', ' JVSD ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-24', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 149, '', 'COMIDA(J), MANIOBRA DE DESCARGA Y RECARGAS DE T/A', 'TELEFONIA', ' J ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-24', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 159, '', 'COMPRA DE TELEFONO', 'TELEFONIA', ' N/A ', '', '', '', 0, 3000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-31', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 3000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 160, '', 'COMIDA (JV), RECARGA T/A Y PENSION', 'TELEFONIA', ' JV ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-31', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 128, '', 'COMISION RETIRO DE CAJERO RED Y VITAMINAS', 'VITAMINAS', ' N/A ', '', '', '', 0, 300, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-03', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 300, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 141, '', 'CENA', 'VITAMINAS', ' N/A ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-13', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 142, '', 'CENA', 'VITAMINAS', ' N/A ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-13', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 151, '', 'CENA', 'VITAMINAS', ' N/A ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-25', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 153, '', 'COMIDA (V)', 'VITAMINAS', ' V ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-25', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 159, '', 'COMIDA (M) VITAMINAS', 'VITAMINAS', ' M ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-29', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 129, '', 'COMIDA (DL), BASCULA FERRY, FITOSANITARIA Y PENSION', 'PENSION', ' DL ', '', '', '', 0, 200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 132, '', 'COMIDA (L) Y PENSION (SD)', 'PENSION', ' L ', '', '', '', 0, 200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 137, '', 'COMIDAS (MM)', 'PENSION', ' MM ', '', '', '', 0, 400, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-08', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 400, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 146, '', 'COMIDAS (VSDL), PENSION E INSUMOS DE LIMPIEZA', 'PENSION', ' VSDL ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-18', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 154, '', 'COMBUSTIBLE Y PENSION ', 'PENSION', ' N/A ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-27', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 157, '', 'COMIDAS (MMJV), CASETA DE ISLA AGUADA Y PENSION', 'PENSION', ' MMJV ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-29', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 154, '', 'COMIDAS (M) Y PENSION (SD) IRAPUATO ', 'PENSION', ' M ', '', '', '', 0, 200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-30', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 157, '', 'PENSION (PANTACO)', 'PENSION', ' N/A ', '', '', '', 0, 240, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-31', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 240, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, 158, '', 'PENSION (PANTACO)', 'PENSION', ' N/A ', '', '', '', 0, 240, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-31', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 240, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(147, 160, '', 'COMIDA (JV), RECARGA T/A Y PENSION', 'PENSION', ' JV ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-31', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 129, '', 'BASCULA FERRY, COMIDA (LMMJ) Y FITOSANITARIA', 'BASCULA', ' LMMJ ', '', '', '', 0, 380, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-01', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 380, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 129, '', 'COMIDA (DL), BASCULA FERRY, FITOSANITARIA Y PENSION', 'BASCULA', ' DL ', '', '', '', 0, 350, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 350, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 134, '', 'BASCULA  Y COMBUSTIBLE', 'BASCULA', ' N/A ', '', '', '', 0, 150, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 158, '', 'PRESTAMO A CUENTA DE SUELDO SEMANAL', 'PRESTAMO', ' N/A ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-31', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 126, '', 'TAXI A DOMICILIO POR FALTA DE COLCHON EN UNIDAD ECO 501', 'GUIATAXI', ' N/A ', '', '', '', 0, 150, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-02', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 127, '', 'RECARGA T/A,COMISION CAJERO, GUIA ZONA CENTRO PACHUCA', 'GUIATAXI', ' N/A ', '', '', '', 0, 200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-02', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, 129, '', 'COMIDAS (VS) Y TAXI', 'GUIATAXI', ' VS ', '', '', '', 0, 300, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-04', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 300, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, 140, '', 'GUIA EN CD DEL CARMEN Y COMPRA DE CELULAR', 'GUIATAXI', ' N/A ', '', '', '', 0, 200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-12', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 140, '', 'TAXI CD DEL CARMEN', 'GUIATAXI', ' N/A ', '', '', '', 0, 400, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-12', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 400, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 126, '', 'TRANSITO (MOVILIDAD ZUMPANGO) ZONA CENTRO', 'INFRACCIONESYOFEDERAL', ' N/A ', '', '', '', 0, 700, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-02', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 700, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 132, '', 'COMBUSTIBLE Y CASETA, RETEN X FALTA DE LICENCIA', 'INFRACCIONESYOFEDERAL', ' N/A ', '', '', '', 0, 250, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-08', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 137, '', 'FEDERAL', 'INFRACCIONESYOFEDERAL', ' N/A ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-09', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 137, '', 'FEDERAL', 'INFRACCIONESYOFEDERAL', ' N/A ', '', '', '', 0, 500, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-09', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 500, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 138, '', 'COMIDAS (M) Y CALIBRADA', 'TALACHAS', ' M ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-09', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 142, '', 'TALACHA', 'TALACHAS', ' N/A ', '', '', '', 0, 200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-12', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 155, '', 'CALIBRADA GENERAL DE LLANTA', 'TALACHAS', ' N/A ', '', '', '', 0, 150, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-31', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 150, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 155, '', 'TALACHA Y REPARACION DE BRAZO DE DIRECCION ', 'TALACHAS', ' N/A ', '', '', '', 0, 440, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-30', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 440, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 127, '', 'RECARGA T/A,COMISION CAJERO, GUIA ZONA CENTRO PACHUCA', 'COMISIONES', ' N/A ', '', '', '', 0, 35, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-02', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 128, '', 'PAGO COMISION DE VIAJE', 'COMISIONES', ' N/A ', '', '', '', 0, 1000, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-13', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 1000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 129, '', 'BASCULA FERRY, COMIDA (LMMJ) Y FITOSANITARIA', 'FITOSANITARIAS', ' LMMJ ', '', '', '', 0, 100, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-01', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 129, '', 'COMIDA (DL), BASCULA FERRY, FITOSANITARIA Y PENSION', 'FITOSANITARIAS', ' DL ', '', '', '', 0, 70, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-06', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 128, '', 'COMISION RETIRO DE CAJERO RED Y VITAMINAS', 'OTROS', ' N/A ', '', '', '', 0, 70, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-03', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 129, '', 'TRASLADO DE FERRY MAZATLAN A LOS CABOS', 'OTROS', ' N/A ', '', '', '', 0, 33080, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-04', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 33080, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 129, '', 'SERVICIO DE FERRI DE LA PAZ MAZATLAN SINALO', 'OTROS', ' N/A ', '', '', '', 0, 33080, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-05', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 33080, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 140, '', 'COMIDAS (JVSD) Y ACCESO CENTRAL DE ABASTOS', 'OTROS', ' JVSD ', '', '', '', 0, 80, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-10', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 146, '', 'COMIDAS (VSDL), PENSION E INSUMOS DE LIMPIEZA', 'OTROS', ' VSDL ', '', '', '', 0, 200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-18', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 142, '', 'REEMBOLSO COMPROBACION DE GASTOS', 'OTROS', ' N/A ', '', '', '', 0, 190, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-20', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 190, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 150, '', 'COMIDAS (M), INSUMOS DE LIMPIEZA', 'OTROS', ' M ', '', '', '', 0, 200, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-23', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 150, '', 'AGUAS POLIS', 'OTROS', ' N/A ', '', '', '', 0, 50, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-25', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 155, '', 'TALACHA Y REPARACION DE BRAZO DE DIRECCION ', 'OTROS', ' N/A ', '', '', '', 0, 220, '', 'TRANSFERENCIA', 'OK COMPROBADO', '2023-05-30', NULL, '0000-00-00', '', '0000-00-00 00:00:00', '0000-00-00', '', '0000-00-00 00:00:00', 220, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 161, '', '', 'COMBUSTIBLE', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 0, NULL, '', 'EFECTIVO', 'PAGADO', '2023-08-21', NULL, '2023-08-21', 'admin@decoditec.com', '2023-08-21 18:38:50', '0000-00-00', '', '0000-00-00 00:00:00', NULL, '2023-08-22', '879', '2023-08-21', 2001, 22, 90, 'DIESEL', '98'),
(194, 161, '', '', 'COMBUSTIBLE', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 0, NULL, '', 'EFECTIVO', 'PAGADO', '2023-08-21', NULL, '2023-08-21', 'admin@decoditec.com', '2023-08-21 18:40:44', '0000-00-00', '', '0000-00-00 00:00:00', NULL, '2023-08-22', '879', '2023-08-21', 2001, 22.23, 90, 'DIESEL', '98'),
(195, 161, '', '', 'COMBUSTIBLE', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 0, NULL, '', 'EFECTIVO', 'PAGADO', '2023-08-21', NULL, '2023-08-21', 'admin@decoditec.com', '2023-08-21 18:42:36', '0000-00-00', '', '0000-00-00 00:00:00', NULL, '2023-08-22', '879', '2023-08-21', 2000.7, 22.23, 90, 'DIESEL', '98'),
(196, 161, '', '', 'COMBUSTIBLE', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 200, NULL, '', 'EFECTIVO', 'PAGADO', '2023-08-21', NULL, '2023-08-21', 'admin@decoditec.com', '2023-08-21 18:43:24', '0000-00-00', '', '0000-00-00 00:00:00', NULL, '2023-08-22', '879', '2023-08-21', 2000.7, 22.23, 90, 'DIESEL', '98'),
(197, 161, '', '', 'COMBUSTIBLE', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 200, 200, '', 'EFECTIVO', 'PAGADO', '2023-08-21', NULL, '2023-08-21', 'admin@decoditec.com', '2023-08-21 18:45:18', '0000-00-00', '', '0000-00-00 00:00:00', 200, '2023-08-22', '879', '2023-08-21', 2000.7, 22.23, 90, 'DIESEL', '98'),
(198, 133, '', 'COMBUSTIBLE', 'COMBUSTIBLE', '', 'OPERATIVO', 'NO FISCAL', 'RUBEN', 0, 6250.59, '', 'TRANFERENCIA', 'PAGADO', '2023-05-09', NULL, '2023-08-21', 'admin@decoditec.com', '2023-08-21 22:15:10', '0000-00-00', '', '0000-00-00 00:00:00', 6250.59, '0000-00-00', '', '2023-05-09', 6250.59, 23.15, 270.004, 'DIESEL', ''),
(199, 129, '', 'COMBUSTIBLE', 'COMBUSTIBLE', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 0, 20578.61, '', 'TRANFERENCIA', 'PAGADO', '2023-05-11', NULL, '2023-08-22', 'admin@decoditec.com', '2023-08-22 00:00:40', '0000-00-00', '', '0000-00-00 00:00:00', 20578.61, '0000-00-00', '', '0000-00-00', 20578.61, 23.15, 888.926, 'DIESEL', ''),
(200, 162, '', '', 'CASETAS', '', 'OPERATIVO', 'FISCAL', '', 0, 300, '', 'TRANSFERENCIA', '', '0000-00-00', NULL, '2023-09-03', 'admin@decoditec.com', '2023-09-03 00:45:10', '0000-00-00', '', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 159, '', 'COMBUSTIBLE', 'COMBUSTIBLE', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 0, 1000, '', 'TRANSFERENCIA', 'PAGADO', '2023-09-05', NULL, '2023-09-05', 'admin@decoditec.com', '2023-09-05 23:01:06', '0000-00-00', '', '0000-00-00 00:00:00', NULL, '2023-09-05', '44', '2023-09-05', 1000, 21.23, 1, 'DIESEL', '4'),
(202, 159, '', 'NOMINA', 'NOMINA', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 0, 1100, '', 'TRANSFERENCIA', 'PAGADO', '2023-09-06', NULL, '2023-09-06', 'admin@decoditec.com', '2023-09-06 23:05:24', '0000-00-00', '', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 1, '', 'CASETAS', 'CASETAS', '', 'OPERATIVO', 'FISCAL', '', 0, 300, '', '0', '', '0000-00-00', NULL, '2023-09-07', 'admin@decoditec.com', '2023-09-07 00:24:28', '0000-00-00', '', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 1, '', 'COMBUSTIBLE', 'COMBUSTIBLE', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 0, 160, '', 'TRANSFERENCIA', '', '0000-00-00', NULL, '2023-09-07', 'admin@decoditec.com', '2023-09-07 20:30:01', '0000-00-00', '', '0000-00-00 00:00:00', NULL, '0000-00-00', '', '0000-00-00', 160, 0, 4, 'DIESEL', ''),
(205, 1, '', 'NOMINA', 'NOMINA', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 0, 100, '', 'TRANSFERENCIA', 'PAGADO', '0000-00-00', NULL, '2023-09-07', 'admin@decoditec.com', '2023-09-07 20:53:01', '0000-00-00', '', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 1, '', 'CASETAS', 'CASETAS', '', 'OPERATIVO', 'FISCAL', 'RUBEN', 123, 123, '11', 'TRANSFERENCIA', 'PAGADO', '2023-09-21', NULL, '2023-09-21', 'admin@decoditec.com', '2023-09-21 13:49:27', '0000-00-00', '', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `servicio` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `tipo_documento` varchar(250) NOT NULL,
  `ruta` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `observaciones` text NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_modificacion` varchar(250) NOT NULL,
  `hora_modificacion` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_documento`, `servicio`, `fecha`, `hora`, `usuario`, `tipo_documento`, `ruta`, `nombre`, `fecha_inicio`, `fecha_fin`, `observaciones`, `fecha_modificacion`, `usuario_modificacion`, `hora_modificacion`) VALUES
(1, '1', '2023-08-04', '01:19:25', 'admin', 'prueba', 'documentos/1/react.png', 'react.png', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(2, '1', '2023-08-04', '01:23:48', 'admin', 'prueba', 'documentos/1/react.png', 'react.png', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(3, '1', '2023-08-04', '01:41:37', 'admin', 'prueba', 'documentos/1/Doc1.docx', 'Doc1.docx', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(4, '1', '2023-08-04', '01:55:46', 'admin', 'prueba', 'documentos/1/logo.png', 'logo.png', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(5, '82', '2023-08-04', '01:58:45', 'admin', 'prueba', 'documentos/82/react.png', 'react.png', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(6, '161', '2023-08-07', '10:28:01', 'admin', 'prueba', 'documentos/161/registrar.jpg', 'registrar.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(7, '161', '2023-08-07', '10:51:39', 'admin', 'prueba', 'documentos/161/login.jpg', 'login.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(8, '162', '2023-08-12', '01:02:30', 'admin', 'prueba', 'documentos/162/registrar.jpg', 'registrar.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(9, '129', '2023-08-12', '11:14:34', 'admin', 'prueba', 'documentos/129/registrar.jpg', 'registrar.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(10, '160', '2023-08-30', '23:07:37', 'admin@decoditec.com', 'prueba', 'documentos/160/20.jpg', '20.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(11, '160', '2023-08-30', '23:17:46', 'admin@decoditec.com', 'prueba', 'documentos/160/5.jpg', '5.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(12, '160', '2023-08-30', '23:17:56', 'admin@decoditec.com', 'prueba', 'documentos/160/4.jpg', '4.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(13, '160', '2023-08-30', '23:18:19', 'admin@decoditec.com', 'prueba', 'documentos/160/3.jpg', '3.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(14, '160', '2023-08-30', '23:18:31', 'admin@decoditec.com', 'prueba', 'documentos/160/2.jpg', '2.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(15, '160', '2023-08-30', '23:18:58', 'admin@decoditec.com', 'prueba', 'documentos/160/1.jpg', '1.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(16, '160', '2023-08-30', '23:19:16', 'admin@decoditec.com', 'prueba', 'documentos/160/14.jpg', '14.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(17, '160', '2023-08-30', '23:20:03', 'admin@decoditec.com', 'prueba', 'documentos/160/19.jpg', '19.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(18, '160', '2023-08-30', '23:20:19', 'admin@decoditec.com', 'prueba', 'documentos/160/6.jpg', '6.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(19, '160', '2023-08-30', '23:22:21', 'admin@decoditec.com', 'prueba', 'documentos/160/6.jpg', '6.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(20, '162', '2023-09-03', '00:52:41', 'admin@decoditec.com', 'prueba', 'documentos/162/react.png', 'react.png', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(21, '162', '2023-09-03', '00:54:29', 'admin@decoditec.com', 'prueba', 'documentos/162/1.jpg', '1.jpg', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00'),
(22, '1', '2023-09-21', '13:49:47', 'admin@decoditec.com', 'prueba', 'documentos/1/avatar.png', 'avatar.png', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE `operador` (
  `id_operador` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `rfc` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `municipio` varchar(250) NOT NULL,
  `colonia` varchar(250) NOT NULL,
  `vialidad` varchar(250) NOT NULL,
  `numero_exterior` varchar(250) NOT NULL,
  `numero_interior` varchar(250) NOT NULL,
  `codigo_postal` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `hora_creacion` datetime NOT NULL,
  `usuario_creacion` varchar(250) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `hora_modificacion` datetime NOT NULL,
  `usuario_modificacion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `operador`
--

INSERT INTO `operador` (`id_operador`, `nombre`, `apellidos`, `rfc`, `direccion`, `municipio`, `colonia`, `vialidad`, `numero_exterior`, `numero_interior`, `codigo_postal`, `telefono`, `fecha_creacion`, `hora_creacion`, `usuario_creacion`, `fecha_modificacion`, `hora_modificacion`, `usuario_modificacion`) VALUES
(1, 'SALVADOR', 'CRUZ SARSOZA', '', '', '', '', '', '', '', '', '', '2023-08-07 00:00:00', '2023-08-07 10:26:48', 'Alex', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(2, 'Alejandro', 'Mondragon', '', '', '', '', '', '', '', '', '', '2023-08-07 00:00:00', '2023-08-07 10:30:52', 'Alex', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(3, 'SALVADOR CRUZ SARSOZA', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(4, 'EDMUNDO FIDEL MARTINEZ SIERRA', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'AUGUSTO LUVIANO JUAREZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(6, 'ENRIQUE JOSE NUÑEZ MORA', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(7, 'EDGAR ELISEO CHAVEZ RAMIREZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(8, 'GERARDO RAMIRO CAMACHO GARCIA', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(9, 'JOSE LUIS AVIÑA DE  LA CRUZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(10, 'MAURICIO RAMIREZ RODRIGUEZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(11, 'RIGOBERTO ZACARIAS HERNANDEZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(12, 'JOSE ATANASIO VARGAS MIRANDA', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(13, 'ALAN URIEL MIGUEL TREJO ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(14, 'ALBERTO HERNANDEZ GUZMAN', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(15, 'NICANOR TAPIA OAXACA', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(16, 'VICTOR JOSE OLVERA RODRIGUEZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(17, 'MIGUEL ORTIZ JUAREZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(18, 'VICENTE CRUZ SANCHEZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(19, 'SALVADOR CRUZ SARSOZA/MIGUEL JUAREZ ORTIZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(20, 'HERACLIO MARTINEZ TREJO', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(21, 'RODRIGO SIMON RODRIGUEZ PEREZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(22, 'RICARDO SAMUEL MEDINA HERRERA', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(23, 'ANGEL GONZALEZ VAZQUEZ', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(24, 'AALENN', 'MARTINEZ', '1233202', 'SAN ESTEBAN', '', '', '', '', '', '', '50000000', '2023-08-07 00:00:00', '2023-08-07 18:06:26', 'Alex', '2023-08-17 00:00:00', '2023-08-17 21:58:28', 'admin@decoditec.com'),
(25, 'ESTEBAN', 'MONTE', '', '', '', '', '', '', '', '', '', '2023-08-07 00:00:00', '2023-08-07 19:00:42', 'Alex', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(26, 'JULIAN', 'RAMIREZ', '', '', '', '', '', '', '', '', '', '2023-08-07 00:00:00', '2023-08-07 19:02:10', 'Alex', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(27, 'PRUEBA', 'ASA', '', '', '', '', '', '', '', '', '', '2023-08-14 00:00:00', '2023-08-14 22:02:24', 'admin@decoditec.com', '2023-08-14 00:00:00', '2023-08-14 22:02:48', 'admin@decoditec.com'),
(28, 'JJJJJJ', '', '', '', '', '', '', '', '', '', '', '2023-08-17 00:00:00', '2023-08-17 21:59:53', 'admin@decoditec.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `nomper` text NOT NULL,
  `act` tinyint(1) NOT NULL,
  `idp` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `nom`, `nomper`, `act`, `idp`, `texto`) VALUES
(1, 'ADMIN', 'view_dashboard', 1, 1, 'Ver dashboard'),
(2, 'ADMIN', 'view_cobranza', 1, 1, 'Ver cobranza'),
(3, 'ADMIN', 'add_cobranza', 1, 1, 'A?adir nuevo servicio'),
(4, 'ADMIN', 'view_catalogos', 1, 1, 'Ver catalogos'),
(5, 'ADMIN', 'view_cat_operadores', 1, 1, 'Ver catalogo operadores'),
(6, 'ADMIN', 'view_cat_tracto', 1, 1, 'Ver catalogo tracto'),
(7, 'ADMIN', 'view_cat_incuenta', 1, 1, 'Ver catalogo ingreso a cuenta'),
(8, 'ADMIN', 'view_cat_movimiento', 1, 1, 'Ver catalogo movimientos'),
(9, 'ADMIN', 'view_cat_estatus', 1, 1, 'Ver catalogo estatus'),
(10, 'ADMIN', 'view_cat_documentos', 1, 1, 'Ver catalogo documentos'),
(11, 'ADMIN', 'view_depositos', 0, 1, 'Ver depositos'),
(12, 'ADMIN', 'view_cat_depositos', 1, 1, 'Ver catalogo depositos'),
(13, 'ADMIN', 'view_cat_tag', 0, 1, 'Ver tabla tag'),
(14, 'SISTEMAS', 'add_cobranza', 1, 5, 'A?adir nuevo servicio'),
(15, 'SISTEMAS', 'view_catalogos', 1, 5, 'Ver catalogos'),
(16, 'SISTEMAS', 'view_cat_depositos', 1, 5, 'Ver catalogo depositos'),
(17, 'SISTEMAS', 'view_cat_documentos', 1, 5, 'Ver catalogo documentos'),
(18, 'SISTEMAS', 'view_cat_estatus', 1, 5, 'Ver catalogo estatus'),
(19, 'SISTEMAS', 'view_cat_incuenta', 1, 5, 'Ver catalogo ingreso a cuenta'),
(20, 'SISTEMAS', 'view_cat_movimiento', 1, 5, 'Ver catalogo movimientos'),
(21, 'SISTEMAS', 'view_cat_operadores', 1, 5, 'Ver catalogo operadores'),
(22, 'SISTEMAS', 'view_cat_tag', 1, 5, 'Ver tabla tag'),
(23, 'SISTEMAS', 'view_cat_tracto', 1, 5, 'Ver catalogo tracto'),
(24, 'SISTEMAS', 'view_cobranza', 1, 5, 'Ver cobranza'),
(25, 'SISTEMAS', 'view_dashboard', 1, 5, 'Ver dashboard'),
(26, 'SISTEMAS', 'view_depositos', 1, 5, 'Ver depositos'),
(29, 'ADMIN', 'view_cat_clientes', 1, 1, 'Ver clientes'),
(31, 'ADMIN', 'view_cat_clientes', 1, 5, 'Ver clientes'),
(32, 'ADMIN', 'view_cuentas', 1, 1, 'Ver cuentas de usuario'),
(33, 'SISTEMAS', 'view_cuentas', 1, 5, 'Ver cuentas de usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles_user`
--

CREATE TABLE `perfiles_user` (
  `idp` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `perfiles_user`
--

INSERT INTO `perfiles_user` (`idp`, `nombre`) VALUES
(1, 'ADMIN'),
(2, 'USER'),
(5, 'SISTEMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `servicio` int(11) DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `noeconomico` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `hora` text DEFAULT NULL,
  `caseta` text DEFAULT NULL,
  `carril` text DEFAULT NULL,
  `clase` int(11) DEFAULT NULL,
  `importe` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tag`
--

INSERT INTO `tag` (`id`, `servicio`, `tag`, `noeconomico`, `fecha`, `hora`, `caseta`, `carril`, `clase`, `importe`) VALUES
(1, 158, 'IMDM27255235..', 501, '2023-05-31 00:00:00', '23:12:43', 'DOVALI', 'DOVALI 7', 5, 65),
(2, 157, 'IMDM27255239..', 509, '2023-05-31 00:00:00', '23:12:25', 'DOVALI', 'DOVALI 7', 5, 65),
(3, 155, 'IMDM27255238..', 505, '2023-05-31 00:00:00', '22:32:14', 'CUENCAME', 'CUENCAME 1', 5, 194),
(4, 155, 'IMDM27255238..', 505, '2023-05-31 00:00:00', '21:45:06', 'LEON GUZMAN', 'LEON GUZMAN 7', 5, 756),
(5, 158, 'IMDM27255235..', 501, '2023-05-31 00:00:00', '20:16:03', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 7', 5, 454),
(6, 157, 'IMDM27255239..', 509, '2023-05-31 00:00:00', '20:15:44', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 7', 5, 454),
(7, 155, 'IMDM27255238..', 505, '2023-05-31 00:00:00', '20:07:49', 'BERMEJILLOS', 'BERMEJILLOS 1', 5, 302),
(8, 155, 'IMDM27255238..', 505, '2023-05-31 00:00:00', '19:08:17', 'CEBALLOS', 'CEBALLOS 1', 5, 309),
(9, 157, 'IMDM27255239..', 509, '2023-05-31 00:00:00', '18:43:25', 'COSAMALOAPAN', 'COSAMALOAPAN 6', 5, 468),
(10, 158, 'IMDM27255235..', 501, '2023-05-31 00:00:00', '18:43:13', 'COSAMALOAPAN', 'COSAMALOAPAN 6', 5, 468),
(11, 154, 'IMDM27255236..', 502, '2023-05-31 00:00:00', '17:38:55', 'CTO. EXT. MEXIQUENSE', 'TULTEPEC', 1, 401),
(12, 154, 'IMDM27255236..', 502, '2023-05-31 00:00:00', '17:26:41', 'CTO. EXT. MEXIQUENSE', 'CONMEX', 1, 285),
(13, 157, 'IMDM27255239..', 509, '2023-05-31 00:00:00', '17:20:51', 'CUITLAHUAC', 'CUITLAHUAC 5', 5, 231),
(14, 158, 'IMDM27255235..', 501, '2023-05-31 00:00:00', '17:20:39', 'CUITLAHUAC', 'CUITLAHUAC 5', 5, 231),
(15, 154, 'IMDM27255236..', 502, '2023-05-31 00:00:00', '17:11:19', 'CTO. EXT. MEXIQUENSE', 'T3 NABOR CARRILLO', 1, 179),
(16, 154, 'IMDM27255236..', 502, '2023-05-31 00:00:00', '17:01:20', 'CTO. EXT. MEXIQUENSE', 'T7 CENTRO CULTURAL', 1, 175),
(17, 154, 'IMDM27255236..', 502, '2023-05-31 00:00:00', '16:43:58', 'CTO. EXT. MEXIQUENSE', 'T4 CHALCO', 1, 412),
(18, 158, 'IMDM27255235..', 501, '2023-05-31 00:00:00', '15:28:30', 'ESPERANZA', 'ESPERANZA 8', 5, 622),
(19, 157, 'IMDM27255239..', 509, '2023-05-31 00:00:00', '15:28:24', 'ESPERANZA', 'ESPERANZA 9', 5, 622),
(20, 157, 'IMDM27255239..', 509, '2023-05-31 00:00:00', '14:33:49', 'AMOZOC', 'AMOZOC 14', 5, 301),
(21, 158, 'IMDM27255235..', 501, '2023-05-31 00:00:00', '14:32:40', 'AMOZOC', 'AMOZOC 11', 5, 301),
(22, 157, 'IMDM27255239..', 509, '2023-05-31 00:00:00', '14:18:09', 'LIB. PUEBLA', 'PERIF-CUAUHTEMOC', 1, 314),
(23, 158, 'IMDM27255235..', 501, '2023-05-31 00:00:00', '14:18:02', 'LIB. PUEBLA', 'PERIF-CUAUHTEMOC', 1, 314),
(24, 157, 'IMDM27255239..', 509, '2023-05-31 00:00:00', '13:50:33', 'S.MARTIN PUE.', 'S.MARTIN PUE. 18', 5, 218),
(25, 158, 'IMDM27255235..', 501, '2023-05-31 00:00:00', '13:50:12', 'S.MARTIN PUE.', 'S.MARTIN PUE. 22', 5, 218),
(26, 0, 'IMDM27255255..', 0, '2023-05-31 00:00:00', '11:41:13', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 38),
(27, 158, 'IMDM27255235..', 501, '2023-05-31 00:00:00', '10:04:46', 'SAN MARCOS', 'SAN MARCOS 14', 1, 151),
(28, 157, 'IMDM27255239..', 509, '2023-05-31 00:00:00', '10:04:26', 'SAN MARCOS', 'SAN MARCOS 14', 5, 575),
(29, 154, 'IMDM27255236..', 502, '2023-05-30 00:00:00', '19:55:29', 'CTO. EXT. MEXIQUENSE', 'T4 CHALCO', 1, 412),
(30, 155, 'IMDM27255238..', 505, '2023-05-30 00:00:00', '19:34:51', 'CEBALLOS', 'CEBALLOS 4', 6, 309),
(31, 154, 'IMDM27255236..', 502, '2023-05-30 00:00:00', '19:32:55', 'CTO. EXT. MEXIQUENSE', 'T7 CENTRO CULTURAL', 1, 175),
(32, 154, 'IMDM27255236..', 502, '2023-05-30 00:00:00', '19:21:35', 'CTO. EXT. MEXIQUENSE', 'T3 NABOR CARRILLO', 1, 179),
(33, 154, 'IMDM27255236..', 502, '2023-05-30 00:00:00', '19:05:06', 'CTO. EXT. MEXIQUENSE', 'CONMEX', 1, 285),
(34, 154, 'IMDM27255236..', 502, '2023-05-30 00:00:00', '18:50:39', 'CTO. EXT. MEXIQUENSE', 'TULTEPEC', 1, 401),
(35, 155, 'IMDM27255238..', 505, '2023-05-30 00:00:00', '18:31:37', 'BERMEJILLOS', 'BERMEJILLOS 4', 6, 302),
(36, 155, 'IMDM27255238..', 505, '2023-05-30 00:00:00', '17:23:25', 'LEON GUZMAN', 'LEON GUZMAN 2', 6, 756),
(37, 155, 'IMDM27255238..', 505, '2023-05-30 00:00:00', '16:29:34', 'CUENCAME', 'CUENCAME 11', 6, 194),
(38, 159, 'IMDM27255240..', 510, '2023-05-30 00:00:00', '13:50:17', 'ATITALAQUIA', 'ATITALAQUIA 4', 5, 270),
(39, 159, 'IMDM27255240..', 510, '2023-05-30 00:00:00', '12:50:13', 'PALMILLAS', 'PALMILLAS 3', 5, 403),
(40, 159, 'IMDM27255240..', 510, '2023-05-30 00:00:00', '11:39:31', 'QUERETARO', 'QUERETARO 3', 5, 355),
(41, 158, 'IMDM27255235..', 501, '2023-05-30 00:00:00', '07:26:02', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 147),
(42, 157, 'IMDM27255239..', 509, '2023-05-30 00:00:00', '07:25:49', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 147),
(43, 159, 'IMDM27255240..', 510, '2023-05-30 00:00:00', '07:20:19', 'LA LAJA', 'LA LAJA 6', 1, 63),
(44, 158, 'IMDM27255235..', 501, '2023-05-30 00:00:00', '07:11:18', 'CTO. EXT. MEXIQUENSE', 'A32 TULTEPEC AUX II', 1, 334),
(45, 157, 'IMDM27255239..', 509, '2023-05-30 00:00:00', '07:10:52', 'CTO. EXT. MEXIQUENSE', 'A32 TULTEPEC AUX II', 1, 334),
(46, 155, 'IMDM27255238..', 505, '2023-05-30 00:00:00', '07:08:31', 'LIB. ARCO NT. SLP', 'LIB. ARCO NT. SLP 1', 6, 249),
(47, 159, 'IMDM27255240..', 510, '2023-05-30 00:00:00', '07:00:03', 'APASEO EL GRANDE', 'PALMILLAS-APASEO GDE', 5, 596),
(48, 159, 'IMDM27255240..', 510, '2023-05-30 00:00:00', '05:49:37', 'PALMILLAS BIS', 'PALMILLAS BIS 13', 5, 403),
(49, 159, 'IMDM27255240..', 510, '2023-05-30 00:00:00', '01:59:32', 'QUERETARO ARCO NORTE', 'QUERETARO ARCO N 2', 5, 270),
(50, 155, 'IMDM27255238..', 505, '2023-05-29 00:00:00', '21:42:59', 'LIB. OTE. S.L.P.', 'LIB. OTE. S.L.P. 10', 6, 266),
(51, 155, 'IMDM27255238..', 505, '2023-05-29 00:00:00', '18:25:16', 'CHICHIMEQUILLAS', 'CHICHIMEQUILLAS 6', 6, 101),
(52, 155, 'IMDM27255238..', 505, '2023-05-29 00:00:00', '16:05:12', 'PALMILLAS', 'PALMILLAS 22', 6, 587),
(53, 155, 'IMDM27255238..', 505, '2023-05-29 00:00:00', '14:38:11', 'QUERETARO ARCO NORTE', 'QUERETARO ARCO N 1', 6, 270),
(54, 154, 'IMDM27255236..', 502, '2023-05-28 00:00:00', '21:59:08', 'PALMILLAS BIS', 'PALMILLAS BIS 7', 5, 403),
(55, 154, 'IMDM27255236..', 502, '2023-05-28 00:00:00', '21:32:56', 'ATLACOMULCO-LIB QRO', 'APASEO GDE-PALMILLAS', 5, 596),
(56, 151, 'IMDM27255239..', 509, '2023-05-27 00:00:00', '12:37:11', 'S.MARTIN PUE.', 'S.MARTIN PUE. 6', 5, 218),
(57, 151, 'IMDM27255239..', 509, '2023-05-27 00:00:00', '11:56:07', 'AMOZOC', 'AMOZOC 5', 5, 301),
(58, 154, 'IMDM27255236..', 502, '2023-05-27 00:00:00', '11:24:49', 'LIB. LA PIEDAD', 'LIB. LA PIEDAD 6', 5, 189),
(59, 151, 'IMDM27255239..', 509, '2023-05-27 00:00:00', '10:47:58', 'ESPERANZA', 'ESPERANZA 3', 5, 622),
(60, 154, 'IMDM27255236..', 502, '2023-05-27 00:00:00', '10:28:33', 'ECUANDUREO', 'ECUANDUREO VH 9', 5, 78),
(61, 154, 'IMDM27255236..', 502, '2023-05-27 00:00:00', '10:00:45', 'OCOTLAN', 'OCOTLAN 1', 5, 636),
(62, 151, 'IMDM27255239..', 509, '2023-05-27 00:00:00', '09:22:24', 'CUITLAHUAC', 'CUITLAHUAC 10', 5, 231),
(63, 151, 'IMDM27255239..', 509, '2023-05-27 00:00:00', '07:53:10', 'COSAMALOAPAN', 'COSAMALOAPAN 2', 5, 468),
(64, 151, 'IMDM27255239..', 509, '2023-05-27 00:00:00', '05:51:26', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 3', 5, 454),
(65, 151, 'IMDM27255239..', 509, '2023-05-27 00:00:00', '04:56:08', 'DOVALI', 'DOVALI 2', 5, 65),
(66, 151, 'IMDM27255239..', 509, '2023-05-27 00:00:00', '02:56:51', 'SANCHEZ MAGALLANES', 'SANCHEZ MAGALLANES 9', 5, 239),
(67, 151, 'IMDM27255239..', 509, '2023-05-27 00:00:00', '01:37:00', 'NACAJUCA', 'NACAJUCA 8', 5, 192),
(68, 151, 'IMDM27255239..', 509, '2023-05-26 00:00:00', '22:42:56', 'PUENTE ZACATAL', 'PTE. ZACATAL 1', 5, 339),
(69, 151, 'IMDM27255239..', 509, '2023-05-26 00:00:00', '19:23:28', 'LA SEYBA', 'SEYBA PLAYA 1', 5, 231),
(70, 153, 'IMDM27255235..', 501, '2023-05-26 00:00:00', '13:34:27', 'ATITALAQUIA', 'ATITALAQUIA 4', 5, 270),
(71, 153, 'IMDM27255235..', 501, '2023-05-26 00:00:00', '12:29:33', 'PALMILLAS', 'PALMILLAS 6', 5, 403),
(72, 151, 'IMDM27255239..', 509, '2023-05-26 00:00:00', '10:27:32', 'LA SEYBA', 'SEYBA PLAYA 5', 5, 231),
(73, 153, 'IMDM27255235..', 501, '2023-05-26 00:00:00', '07:00:14', 'LA LAJA', 'LA LAJA 6', 1, 63),
(74, 153, 'IMDM27255235..', 501, '2023-05-26 00:00:00', '06:43:41', 'APASEO EL GRANDE', 'PALMILLAS-APASEO GDE', 6, 658),
(75, 153, 'IMDM27255235..', 501, '2023-05-26 00:00:00', '05:47:00', 'PALMILLAS BIS', 'PALMILLAS BIS 13', 6, 587),
(76, 153, 'IMDM27255235..', 501, '2023-05-26 00:00:00', '04:57:16', 'QUERETARO ARCO NORTE', 'QUERETARO ARCO N 2', 6, 270),
(77, 151, 'IMDM27255239..', 509, '2023-05-26 00:00:00', '04:02:42', 'NACAJUCA', 'NACAJUCA 2', 6, 192),
(78, 151, 'IMDM27255239..', 509, '2023-05-26 00:00:00', '02:31:11', 'SANCHEZ MAGALLANES', 'SANCHEZ MAGALLANES10', 5, 239),
(79, 151, 'IMDM27255239..', 509, '2023-05-26 00:00:00', '01:35:05', 'DOVALI', 'DOVALI 5', 5, 65),
(80, 151, 'IMDM27255239..', 509, '2023-05-26 00:00:00', '00:47:03', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 5', 5, 454),
(81, 151, 'IMDM27255239..', 509, '2023-05-25 00:00:00', '23:21:53', 'COSAMALOAPAN', 'COSAMALOAPAN 6', 5, 468),
(82, 151, 'IMDM27255239..', 509, '2023-05-25 00:00:00', '21:56:06', 'CUITLAHUAC', 'CUITLAHUAC 6', 5, 231),
(83, 151, 'IMDM27255239..', 509, '2023-05-25 00:00:00', '19:28:29', 'ESPERANZA', 'ESPERANZA 8', 5, 622),
(84, 151, 'IMDM27255239..', 509, '2023-05-25 00:00:00', '18:35:29', 'AMOZOC', 'AMOZOC 14', 5, 301),
(85, 151, 'IMDM27255239..', 509, '2023-05-25 00:00:00', '18:20:01', 'LIB. PUEBLA', 'PERIF-CUAUHTEMOC', 1, 314),
(86, 151, 'IMDM27255239..', 509, '2023-05-25 00:00:00', '17:51:56', 'S.MARTIN PUE.', 'S.MARTIN PUE. 26', 5, 218),
(87, 148, 'IMDM27255236..', 502, '2023-05-25 00:00:00', '17:01:57', 'OCOTLAN', 'OCOTLAN 6', 5, 636),
(88, 151, 'IMDM27255239..', 509, '2023-05-25 00:00:00', '16:23:02', 'SAN MARCOS', 'SAN MARCOS 13', 5, 575),
(89, 148, 'IMDM27255236..', 502, '2023-05-25 00:00:00', '16:13:02', 'ECUANDUREO', 'ECUANDUREO 4', 5, 331),
(90, 148, 'IMDM27255236..', 502, '2023-05-25 00:00:00', '15:29:23', 'PANINDICUARO', 'PANINDICUARO 6', 5, 629),
(91, 148, 'IMDM27255236..', 502, '2023-05-25 00:00:00', '13:20:29', 'ZINAPECUARO', 'ZINAPECUARO 6', 5, 449),
(92, 148, 'IMDM27255236..', 502, '2023-05-25 00:00:00', '12:24:43', 'CONTEPEC', 'CONTEPEC 3', 5, 195),
(93, 148, 'IMDM27255236..', 502, '2023-05-25 00:00:00', '12:04:03', 'ATLACOMULCO-BANOBRAS', 'ATLACOMULCO-BANOB 10', 5, 195),
(94, 149, 'IMDM27255238..', 505, '2023-05-25 00:00:00', '02:38:00', 'AJOLOAPAN', 'AJOLOAPAN 2', 5, 130),
(95, 149, 'IMDM27255238..', 505, '2023-05-24 00:00:00', '19:47:44', 'PACHUCA', 'PACHUCA 1', 5, 130),
(96, 151, 'IMDM27255239..', 509, '2023-05-24 00:00:00', '14:33:56', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 147),
(97, 151, 'IMDM27255239..', 509, '2023-05-24 00:00:00', '14:24:00', 'CTO. EXT. MEXIQUENSE', 'A32 TULTEPEC AUX II', 1, 334),
(98, 150, 'IMDM27255235..', 501, '2023-05-24 00:00:00', '07:53:15', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 147),
(99, 150, 'IMDM27255235..', 501, '2023-05-24 00:00:00', '07:21:52', 'CTO. EXT. MEXIQUENSE', 'A32 TULTEPEC AUX II', 1, 334),
(100, 149, 'IMDM27255239..', 509, '2023-05-24 00:00:00', '00:16:00', 'ATITALAQUIA', 'ATITALAQUIA 4', 5, 270),
(101, 149, 'IMDM27255239..', 509, '2023-05-23 00:00:00', '22:59:55', 'PALMILLAS BIS', 'PALMILLAS BIS 3', 5, 403),
(102, 149, 'IMDM27255239..', 509, '2023-05-23 00:00:00', '22:55:32', 'ATLACOMULCO-LIB QRO', 'APASEO GDE-PALMILLAS', 5, 596),
(103, 149, 'IMDM27255239..', 509, '2023-05-23 00:00:00', '21:10:38', 'SALAMANCA', 'SALAMANCA 3', 5, 357),
(104, 149, 'IMDM27255239..', 509, '2023-05-23 00:00:00', '20:00:56', 'LIB. LA PIEDAD', 'LIB. LA PIEDAD 10', 5, 53),
(105, 143, 'IMDM27255235..', 501, '2023-05-23 00:00:00', '15:50:58', 'ATITALAQUIA', 'ATITALAQUIA 4', 4, 165),
(106, 143, 'IMDM27255235..', 501, '2023-05-23 00:00:00', '14:37:36', 'PALMILLAS', 'PALMILLAS 6', 5, 403),
(107, 143, 'IMDM27255235..', 501, '2023-05-23 00:00:00', '08:57:18', 'LA LAJA', 'LA LAJA 6', 1, 63),
(108, 143, 'IMDM27255235..', 501, '2023-05-23 00:00:00', '08:34:41', 'QUERETARO', 'QUERETARO 8', 5, 355),
(109, 143, 'IMDM27255235..', 501, '2023-05-23 00:00:00', '07:09:27', 'PALMILLAS', 'PALMILLAS 20', 5, 403),
(110, 143, 'IMDM27255235..', 501, '2023-05-23 00:00:00', '06:09:04', 'QUERETARO ARCO NORTE', 'QUERETARO IDEAL 17', 5, 270),
(111, 149, 'IMDM27255239..', 509, '2023-05-22 00:00:00', '17:35:34', 'LIB. LA PIEDAD', 'LIB. LA PIEDAD 7', 5, 146),
(112, 149, 'IMDM27255239..', 509, '2023-05-22 00:00:00', '16:06:07', 'ECUANDUREO', 'ECUANDUREO VH 9', 5, 78),
(113, 149, 'IMDM27255239..', 509, '2023-05-22 00:00:00', '15:38:53', 'OCOTLAN', 'OCOTLAN 1', 5, 636),
(114, 146, 'IMDM27255239..', 509, '2023-05-20 00:00:00', '18:23:29', 'OCOTLAN', 'OCOTLAN 6', 5, 636),
(115, 146, 'IMDM27255239..', 509, '2023-05-20 00:00:00', '17:19:51', 'ECUANDUREO', 'ECUANDUREO 4', 5, 331),
(116, 146, 'IMDM27255239..', 509, '2023-05-20 00:00:00', '16:34:08', 'PANINDICUARO', 'PANINDICUARO 6', 5, 629),
(117, 146, 'IMDM27255239..', 509, '2023-05-20 00:00:00', '14:48:58', 'ZINAPECUARO', 'ZINAPECUARO 6', 5, 449),
(118, 146, 'IMDM27255239..', 509, '2023-05-20 00:00:00', '13:47:57', 'CONTEPEC', 'CONTEPEC 4', 5, 195),
(119, 146, 'IMDM27255239..', 509, '2023-05-20 00:00:00', '13:24:59', 'ATLACOMULCO-BANOBRAS', 'ATLACOMULCO-BANOB 10', 5, 195),
(120, 146, 'IMDM27255239..', 509, '2023-05-20 00:00:00', '13:05:57', 'ATLACOMULCO', 'ATLACOMULCO 9', 5, 330),
(121, 146, 'IMDM27255239..', 509, '2023-05-20 00:00:00', '10:17:35', 'TEPOTZOTLAN', 'TEPOTZOTLAN 19', 5, 430),
(122, 0, 'IMDM27255242..', 216, '2023-05-19 00:00:00', '14:12:10', 'CTO. EXT. MEXIQUENSE', 'A33 VMI - A36 VMII', 1, 15),
(123, 0, 'IMDM27255242..', 216, '2023-05-19 00:00:00', '13:52:29', 'CTO. EXT. MEXIQUENSE', 'A34  - A36', 1, 23),
(124, 0, 'IMDM27255242..', 216, '2023-05-19 00:00:00', '11:20:34', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 38),
(125, 0, 'IMDM27255242..', 216, '2023-05-17 00:00:00', '17:17:49', 'CTO. EXT. MEXIQUENSE', 'TULTEPEC - C. V. T1', 1, 54),
(126, 0, 'IMDM27255242..', 216, '2023-05-17 00:00:00', '10:42:27', 'CTO. EXT. MEXIQUENSE', 'CONMEX', 1, 74),
(127, 0, 'IMDM27255242..', 216, '2023-05-17 00:00:00', '10:32:36', 'CTO. EXT. MEXIQUENSE', 'TULTEPEC - C. V. T1', 1, 54),
(128, 142, 'IMDM27255239..', 509, '2023-05-17 00:00:00', '10:08:59', 'AJOLOAPAN', 'AJOLOAPAN 2', 5, 875),
(129, 141, 'IMDM27255238..', 505, '2023-05-17 00:00:00', '10:08:18', 'AJOLOAPAN', 'AJOLOAPAN 2', 5, 875),
(130, 142, 'IMDM27255239..', 509, '2023-05-17 00:00:00', '08:40:31', 'S.MARTIN PUE.', 'S.MARTIN PUE. 9', 5, 218),
(131, 141, 'IMDM27255238..', 505, '2023-05-17 00:00:00', '08:39:20', 'S.MARTIN PUE.', 'S.MARTIN PUE. 9', 5, 218),
(132, 141, 'IMDM27255238..', 505, '2023-05-17 00:00:00', '07:56:35', 'AMOZOC', 'AMOZOC 5', 5, 301),
(133, 142, 'IMDM27255239..', 509, '2023-05-17 00:00:00', '07:56:16', 'AMOZOC', 'AMOZOC 4', 5, 301),
(134, 141, 'IMDM27255238..', 505, '2023-05-17 00:00:00', '07:01:35', 'ESPERANZA', 'ESPERANZA 4', 5, 622),
(135, 142, 'IMDM27255239..', 509, '2023-05-17 00:00:00', '07:01:32', 'ESPERANZA', 'ESPERANZA 5', 5, 622),
(136, 142, 'IMDM27255239..', 509, '2023-05-17 00:00:00', '03:37:06', 'CUITLAHUAC', 'CUITLAHUAC 3', 5, 231),
(137, 141, 'IMDM27255238..', 505, '2023-05-17 00:00:00', '03:33:39', 'CUITLAHUAC', 'CUITLAHUAC 3', 5, 231),
(138, 141, 'IMDM27255238..', 505, '2023-05-17 00:00:00', '01:58:36', 'COSAMALOAPAN', 'COSAMALOAPAN 2', 5, 468),
(139, 142, 'IMDM27255239..', 509, '2023-05-17 00:00:00', '01:57:56', 'COSAMALOAPAN', 'COSAMALOAPAN 2', 5, 468),
(140, 141, 'IMDM27255238..', 505, '2023-05-17 00:00:00', '00:24:37', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 3', 5, 454),
(141, 142, 'IMDM27255239..', 509, '2023-05-17 00:00:00', '00:24:21', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 3', 5, 454),
(142, 141, 'IMDM27255238..', 505, '2023-05-16 00:00:00', '23:33:31', 'DOVALI', 'DOVALI 4', 5, 65),
(143, 142, 'IMDM27255239..', 509, '2023-05-16 00:00:00', '23:33:15', 'DOVALI', 'DOVALI 4', 5, 65),
(144, 142, 'IMDM27255239..', 509, '2023-05-16 00:00:00', '21:20:57', 'SANCHEZ MAGALLANES', 'SANCHEZ MAGALLANES 2', 5, 239),
(145, 141, 'IMDM27255238..', 505, '2023-05-16 00:00:00', '21:20:32', 'SANCHEZ MAGALLANES', 'SANCHEZ MAGALLANES 2', 5, 239),
(146, 141, 'IMDM27255238..', 505, '2023-05-16 00:00:00', '20:02:47', 'NACAJUCA', 'NACAJUCA 13', 5, 192),
(147, 142, 'IMDM27255239..', 509, '2023-05-16 00:00:00', '20:02:29', 'NACAJUCA', 'NACAJUCA 13', 5, 192),
(148, 141, 'IMDM27255238..', 505, '2023-05-16 00:00:00', '17:09:22', 'PUENTE ZACATAL', 'PTE. ZACATAL 2', 5, 339),
(149, 142, 'IMDM27255239..', 509, '2023-05-16 00:00:00', '17:09:07', 'PUENTE ZACATAL', 'PTE. ZACATAL 2', 5, 339),
(150, 141, 'IMDM27255238..', 505, '2023-05-16 00:00:00', '13:02:14', 'LA SEYBA', 'SEYBA PLAYA 1', 5, 231),
(151, 142, 'IMDM27255239..', 509, '2023-05-16 00:00:00', '13:01:59', 'LA SEYBA', 'SEYBA PLAYA 1', 5, 231),
(152, 140, 'IMDM27255235..', 501, '2023-05-16 00:00:00', '11:33:13', 'AJOLOAPAN', 'AJOLOAPAN 2', 5, 875),
(153, 140, 'IMDM27255235..', 501, '2023-05-16 00:00:00', '09:37:18', 'S.MARTIN PUE.', 'S.MARTIN PUE. 11', 5, 218),
(154, 140, 'IMDM27255235..', 501, '2023-05-16 00:00:00', '09:21:48', 'LIB. PUEBLA', 'CUAUHTEMOC-PERIF', 1, 314),
(155, 140, 'IMDM27255235..', 501, '2023-05-16 00:00:00', '08:58:55', 'AMOZOC', 'AMOZOC 4', 5, 301),
(156, 140, 'IMDM27255235..', 501, '2023-05-16 00:00:00', '07:59:46', 'ESPERANZA', 'ESPERANZA 6', 5, 622),
(157, 140, 'IMDM27255235..', 501, '2023-05-15 00:00:00', '18:45:43', 'CUITLAHUAC', 'CUITLAHUAC 3', 5, 231),
(158, 140, 'IMDM27255235..', 501, '2023-05-15 00:00:00', '16:34:54', 'COSAMALOAPAN', 'COSAMALOAPAN 2', 5, 468),
(159, 140, 'IMDM27255235..', 501, '2023-05-15 00:00:00', '15:00:44', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 3', 5, 454),
(160, 140, 'IMDM27255235..', 501, '2023-05-15 00:00:00', '13:28:27', 'DOVALI', 'DOVALI 3', 5, 65),
(161, 140, 'IMDM27255235..', 501, '2023-05-13 00:00:00', '16:42:44', 'SANCHEZ MAGALLANES', 'SANCHEZ MAGALLANES 9', 5, 239),
(162, 141, 'IMDM27255238..', 505, '2023-05-13 00:00:00', '15:46:12', 'LA SEYBA', 'SEYBA PLAYA 4', 5, 231),
(163, 142, 'IMDM27255239..', 509, '2023-05-13 00:00:00', '15:45:37', 'LA SEYBA', 'SEYBA PLAYA 4', 5, 231),
(164, 140, 'IMDM27255235..', 501, '2023-05-13 00:00:00', '14:14:30', 'NACAJUCA', 'NACAJUCA 13', 5, 192),
(165, 140, 'IMDM27255235..', 501, '2023-05-13 00:00:00', '10:34:48', 'PUENTE ZACATAL', 'PTE. ZACATAL 1', 5, 339),
(166, 141, 'IMDM27255238..', 505, '2023-05-13 00:00:00', '10:19:53', 'PUENTE ZACATAL', 'PTE. ZACATAL 3', 5, 339),
(167, 142, 'IMDM27255239..', 509, '2023-05-13 00:00:00', '10:19:38', 'PUENTE ZACATAL', 'PTE. ZACATAL 3', 5, 339),
(168, 141, 'IMDM27255238..', 505, '2023-05-13 00:00:00', '07:08:33', 'NACAJUCA', 'NACAJUCA 2', 5, 192),
(169, 142, 'IMDM27255239..', 509, '2023-05-13 00:00:00', '07:08:17', 'NACAJUCA', 'NACAJUCA 2', 5, 192),
(170, 142, 'IMDM27255239..', 509, '2023-05-13 00:00:00', '05:47:33', 'SANCHEZ MAGALLANES', 'SANCHEZ MAGALLANES 4', 5, 239),
(171, 141, 'IMDM27255238..', 505, '2023-05-13 00:00:00', '05:46:52', 'SANCHEZ MAGALLANES', 'SANCHEZ MAGALLANES 3', 5, 239),
(172, 142, 'IMDM27255239..', 509, '2023-05-13 00:00:00', '04:52:54', 'DOVALI', 'DOVALI 6', 5, 65),
(173, 141, 'IMDM27255238..', 505, '2023-05-13 00:00:00', '04:50:27', 'DOVALI', 'DOVALI 7', 5, 65),
(174, 142, 'IMDM27255239..', 509, '2023-05-13 00:00:00', '04:06:16', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 5', 5, 454),
(175, 141, 'IMDM27255238..', 505, '2023-05-13 00:00:00', '04:05:54', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 5', 5, 454),
(176, 142, 'IMDM27255239..', 509, '2023-05-13 00:00:00', '02:15:01', 'COSAMALOAPAN', 'COSAMALOAPAN 5', 5, 468),
(177, 141, 'IMDM27255238..', 505, '2023-05-13 00:00:00', '02:14:41', 'COSAMALOAPAN', 'COSAMALOAPAN 6', 5, 468),
(178, 142, 'IMDM27255239..', 509, '2023-05-13 00:00:00', '00:52:43', 'CUITLAHUAC', 'CUITLAHUAC 7', 5, 231),
(179, 141, 'IMDM27255238..', 505, '2023-05-13 00:00:00', '00:52:14', 'CUITLAHUAC', 'CUITLAHUAC 7', 5, 231),
(180, 142, 'IMDM27255239..', 509, '2023-05-12 00:00:00', '22:46:56', 'ESPERANZA', 'ESPERANZA 8', 5, 622),
(181, 141, 'IMDM27255238..', 505, '2023-05-12 00:00:00', '22:46:37', 'ESPERANZA', 'ESPERANZA 8', 5, 622),
(182, 142, 'IMDM27255239..', 509, '2023-05-12 00:00:00', '21:36:47', 'AMOZOC', 'AMOZOC 8', 5, 301),
(183, 141, 'IMDM27255238..', 505, '2023-05-12 00:00:00', '21:36:29', 'AMOZOC', 'AMOZOC 8', 5, 301),
(184, 142, 'IMDM27255239..', 509, '2023-05-12 00:00:00', '21:24:25', 'LIB. PUEBLA', 'PERIF-CUAUHTEMOC', 1, 314),
(185, 141, 'IMDM27255238..', 505, '2023-05-12 00:00:00', '21:24:06', 'LIB. PUEBLA', 'PERIF-CUAUHTEMOC', 1, 314),
(186, 142, 'IMDM27255239..', 509, '2023-05-12 00:00:00', '20:38:33', 'S.MARTIN PUE.', 'S.MARTIN PUE. 28', 5, 218),
(187, 141, 'IMDM27255238..', 505, '2023-05-12 00:00:00', '20:38:16', 'S.MARTIN PUE.', 'S.MARTIN PUE. 28', 5, 218),
(188, 142, 'IMDM27255239..', 509, '2023-05-12 00:00:00', '19:14:10', 'SAN MARCOS', 'SAN MARCOS 14', 5, 575),
(189, 141, 'IMDM27255238..', 505, '2023-05-12 00:00:00', '19:13:57', 'SAN MARCOS', 'SAN MARCOS 13', 5, 575),
(190, 140, 'IMDM27255235..', 501, '2023-05-12 00:00:00', '13:44:16', 'PUENTE ZACATAL', 'PTE. ZACATAL 4', 5, 339),
(191, 141, 'IMDM27255238..', 505, '2023-05-12 00:00:00', '11:25:26', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 147),
(192, 140, 'IMDM27255235..', 501, '2023-05-12 00:00:00', '10:12:24', 'NACAJUCA', 'NACAJUCA 2', 5, 192),
(193, 140, 'IMDM27255235..', 501, '2023-05-12 00:00:00', '08:35:59', 'SANCHEZ MAGALLANES', 'SANCHEZ MAGALLANES 3', 5, 239),
(194, 140, 'IMDM27255235..', 501, '2023-05-12 00:00:00', '06:51:22', 'DOVALI', 'DOVALI 6', 5, 65),
(195, 142, 'IMDM27255239..', 509, '2023-05-12 00:00:00', '06:36:48', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 147),
(196, 142, 'IMDM27255239..', 509, '2023-05-12 00:00:00', '06:25:59', 'CTO. EXT. MEXIQUENSE', 'A32 TULTEPEC AUX II', 1, 334),
(197, 140, 'IMDM27255235..', 501, '2023-05-12 00:00:00', '05:51:27', 'ACAYUCAN (SAYULA)', 'SAYULA 6', 5, 454),
(198, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '23:21:23', 'COSAMALOAPAN', 'COSAMALOAPAN 6', 5, 468),
(199, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '19:50:10', 'CUITLAHUAC', 'CUITLAHUAC 6', 5, 231),
(200, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '18:12:47', 'ESPERANZA', 'ESPERANZA 9', 5, 622),
(201, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '17:04:24', 'AMOZOC', 'AMOZOC 9', 5, 301),
(202, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '16:28:19', 'LIB. PUEBLA', 'PERIF-CUAUHTEMOC', 1, 314),
(203, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '16:00:15', 'S.MARTIN PUE.', 'S.MARTIN PUE. 24', 5, 218),
(204, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '14:29:59', 'SAN MARCOS', 'SAN MARCOS 13', 5, 575),
(205, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '14:25:58', 'CTO. EXT. MEXIQUENSE', 'T4 CHALCO', 1, 412),
(206, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '14:05:38', 'CTO. EXT. MEXIQUENSE', 'T7 CENTRO CULTURAL', 1, 175),
(207, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '13:54:34', 'CTO. EXT. MEXIQUENSE', 'T3 NABOR CARRILLO', 1, 179),
(208, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '13:47:49', 'CTO. EXT. MEXIQUENSE', 'PERIFERICO', 1, 96),
(209, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '05:30:13', 'CTO. EXT. MEXIQUENSE', 'CONMEX', 1, 285),
(210, 140, 'IMDM27255235..', 501, '2023-05-11 00:00:00', '05:18:24', 'CTO. EXT. MEXIQUENSE', 'TULTEPEC', 1, 401),
(211, 137, 'IMDM27255239..', 509, '2023-05-11 00:00:00', '03:19:05', 'ATITALAQUIA', 'ATITALAQUIA 2', 5, 1020),
(212, 137, 'IMDM27255239..', 509, '2023-05-11 00:00:00', '00:57:27', 'S.MARTIN PUE.', 'S.MARTIN PUE. 12', 5, 218),
(213, 139, 'IMDM27255240..', 510, '2023-05-10 00:00:00', '08:47:55', 'TEPOTZOTLAN', 'TEPOTZOTLAN 5', 5, 430),
(214, 137, 'IMDM27255239..', 509, '2023-05-10 00:00:00', '08:14:27', 'S.MARTIN PUE.', 'S.MARTIN PUE. 28', 5, 218),
(215, 137, 'IMDM27255239..', 509, '2023-05-10 00:00:00', '08:02:00', 'SAN MARTIN TEXMELUCAN', 'MARTIN TEXMELUCAN 2', 5, 1620),
(216, 139, 'IMDM27255240..', 510, '2023-05-10 00:00:00', '07:40:05', 'PALMILLAS', 'PALMILLAS 1', 5, 403),
(217, 139, 'IMDM27255240..', 510, '2023-05-10 00:00:00', '06:49:05', 'QUERETARO', 'QUERETARO 2', 5, 355),
(218, 139, 'IMDM27255240..', 510, '2023-05-09 00:00:00', '20:33:08', 'CERRO GORDO', 'CERRO GORDO 22', 5, 194),
(219, 139, 'IMDM27255240..', 510, '2023-05-09 00:00:00', '20:23:50', 'MENDOZA', 'MENDOZA 8', 5, 175),
(220, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '19:56:15', 'ATITALAQUIA', 'ATITALAQUIA 4', 5, 600),
(221, 139, 'IMDM27255240..', 510, '2023-05-09 00:00:00', '19:52:47', 'PUERTO INTERIOR', 'PUERTO INTERIOR 2', 5, 266),
(222, 136, 'IMDM27255240..', 510, '2023-05-09 00:00:00', '19:41:59', 'LEON', 'CENTRAL ABASTOS 13', 5, 80),
(223, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '18:17:48', 'ATLACOMULCO-BANOBRAS', 'ATLACOMULCO-BANOB 4', 5, 195),
(224, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '17:40:43', 'CONTEPEC', 'CONTEPEC 11', 5, 126),
(225, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '15:39:23', 'ZINAPECUARO', 'ZINAPECUARO 1', 5, 449),
(226, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '13:57:18', 'PANINDICUARO', 'PANINDICUARO 2', 5, 629),
(227, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '12:53:18', 'ECUANDUREO', 'ECUANDUREO 3', 5, 331),
(228, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '11:47:25', 'OCOTLAN', 'OCOTLAN 2', 5, 636),
(229, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '10:59:31', 'LIB. SUR DE GUAD.', 'LIB. SUR DE GUAD. 3', 5, 166),
(230, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '10:30:39', 'CHAPALA', 'CHAPALA 2', 5, 205),
(231, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '10:05:35', 'SANTA CECILIA', 'SANTA CECILIA 7', 5, 507),
(232, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '07:31:58', 'PLAN DE BARRANCAS', 'PLAN DE BARRANCAS 3B', 5, 514),
(233, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '04:43:01', 'STA. MA. DEL ORO', 'STA. MA. DEL ORO 3', 5, 352),
(234, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '04:18:35', 'LA CANTERA', 'LA CANTERA 4', 5, 175),
(235, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '03:44:30', 'TRAPICHILLO', 'TRAPICHILLO 7', 5, 380),
(236, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '02:41:51', 'ESTACION RUIZ', 'ESTACION RUIZ 4', 5, 520),
(237, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '01:44:58', 'ACAPONETA', 'ACAPONETA 4', 5, 1095),
(238, 137, 'IMDM27255239..', 509, '2023-05-09 00:00:00', '00:31:07', 'ROSARIO', 'ROSARIO 1', 5, 555),
(239, 137, 'IMDM27255239..', 509, '2023-05-08 00:00:00', '23:49:14', 'VAINILLO', 'VAINILLO 2', 5, 130),
(240, 137, 'IMDM27255239..', 509, '2023-05-08 00:00:00', '23:10:58', 'MARMOL', 'MARMOL 4', 5, 365),
(241, 137, 'IMDM27255239..', 509, '2023-05-08 00:00:00', '21:08:39', 'COSTA RICA I', 'COSTA RICA T 1', 5, 395),
(242, 136, 'IMDM27255240..', 510, '2023-05-08 00:00:00', '17:37:48', 'LEON', 'LEON 2', 5, 388),
(243, 136, 'IMDM27255240..', 510, '2023-05-08 00:00:00', '16:51:36', 'ENCARNACION DE DIAZ', 'ENCARNACION DIAZ 2', 5, 394),
(244, 136, 'IMDM27255240..', 510, '2023-05-08 00:00:00', '15:46:48', 'CHICHIMECO', 'CHICHIMECO 1', 1, 208),
(245, 137, 'IMDM27255239..', 509, '2023-05-08 00:00:00', '14:10:01', 'COSTA RICA I', 'COSTA RICA T 5', 5, 395),
(246, 134, 'IMDM27255238..', 505, '2023-05-08 00:00:00', '14:01:41', 'CTO. EXT. MEXIQUENSE', 'TULTEPEC', 1, 401),
(247, 134, 'IMDM27255238..', 505, '2023-05-08 00:00:00', '13:35:46', 'REVOLUCION EASYTRIP', 'REVOLUCIÃ“N 24', 1, 143),
(248, 137, 'IMDM27255239..', 509, '2023-05-08 00:00:00', '12:22:11', 'MARMOL', 'MARMOL 6', 5, 365),
(249, 0, 'IMDM27255255..', 0, '2023-05-07 00:00:00', '10:17:04', 'JOROBAS', 'JOROBAS 2', 1, 66),
(250, 134, 'IMDM27255238..', 505, '2023-05-07 00:00:00', '00:40:44', 'TIZAYUCA EASYTRIP', 'TIZAYUCA 3', 1, 253),
(251, 134, 'IMDM27255238..', 505, '2023-05-07 00:00:00', '00:04:50', 'PACHUCA', 'PACHUCA 2', 5, 745),
(252, 134, 'IMDM27255238..', 505, '2023-05-06 00:00:00', '22:01:57', 'S.MARTIN PUE.', 'S.MARTIN PUE. 8', 5, 218),
(253, 134, 'IMDM27255238..', 505, '2023-05-06 00:00:00', '21:48:10', 'LIB. PUEBLA', 'CUAUHTEMOC-PERIF', 1, 314),
(254, 134, 'IMDM27255238..', 505, '2023-05-06 00:00:00', '21:10:18', 'AMOZOC', 'AMOZOC 3', 5, 301),
(255, 134, 'IMDM27255238..', 505, '2023-05-06 00:00:00', '20:15:55', 'ESPERANZA', 'ESPERANZA 6', 5, 622),
(256, 134, 'IMDM27255238..', 505, '2023-05-06 00:00:00', '18:13:36', 'CUITLAHUAC', 'CUITLAHUAC 10', 5, 231),
(257, 135, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '17:04:01', 'ATITALAQUIA', 'ATITALAQUIA 4', 5, 270),
(258, 134, 'IMDM27255238..', 505, '2023-05-06 00:00:00', '16:19:16', 'COSAMALOAPAN', 'COSAMALOAPAN 3', 5, 468),
(259, 135, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '15:29:20', 'PALMILLAS', 'PALMILLAS 4', 5, 403),
(260, 134, 'IMDM27255238..', 505, '2023-05-06 00:00:00', '14:49:41', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 2', 5, 267),
(261, 136, 'IMDM27255240..', 510, '2023-05-06 00:00:00', '14:09:56', 'ZACATECAS', 'ZACATECAS 4', 5, 83),
(262, 135, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '13:59:25', 'QUERETARO', 'QUERETARO 3', 5, 355),
(263, 136, 'IMDM27255240..', 510, '2023-05-06 00:00:00', '12:59:03', 'CHICHIMECO', 'CHICHIMECO 8', 1, 208),
(264, 135, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '12:51:58', 'CERRO GORDO', 'CERRO GORDO 25', 5, 194),
(265, 135, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '12:35:13', 'MENDOZA', 'MENDOZA 9', 5, 175),
(266, 136, 'IMDM27255240..', 510, '2023-05-06 00:00:00', '11:59:34', 'ENCARNACION DE DIAZ', 'ENCARNACIÃ“N DIAZ 7', 5, 394),
(267, 135, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '11:31:25', 'PUERTO INTERIOR', 'PUERTO INTERIOR 3', 5, 266),
(268, 136, 'IMDM27255240..', 510, '2023-05-06 00:00:00', '11:19:02', 'LEON', 'LEON 6', 5, 388),
(269, 135, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '11:15:49', 'LEON', 'C. ABASTOS AMPL. 14', 5, 80),
(270, 133, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '06:38:28', 'LEON', 'C. ABASTOS AMPL. 16', 5, 80),
(271, 132, 'IMDM27255240..', 510, '2023-05-06 00:00:00', '06:38:14', 'LEON', 'C. ABASTOS AMPL. 16', 5, 80),
(272, 133, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '06:26:06', 'PUERTO INTERIOR', 'PUERTO INTERIOR 11', 5, 266),
(273, 132, 'IMDM27255240..', 510, '2023-05-06 00:00:00', '06:25:37', 'PUERTO INTERIOR', 'PUERTO INTERIOR 11', 5, 266),
(274, 132, 'IMDM27255240..', 510, '2023-05-06 00:00:00', '05:49:17', 'MENDOZA', 'MENDOZA 4', 5, 175),
(275, 133, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '05:49:01', 'MENDOZA', 'MENDOZA 3', 5, 175),
(276, 133, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '01:16:59', 'CERRO GORDO', 'CERRO GORDO 12', 5, 194),
(277, 132, 'IMDM27255240..', 510, '2023-05-06 00:00:00', '01:16:40', 'CERRO GORDO', 'CERRO GORDO 12', 5, 194),
(278, 133, 'IMDM27255235..', 501, '2023-05-06 00:00:00', '00:35:05', 'APASEO EL GRANDE', 'PALMILLAS-APASEO GDE', 5, 596),
(279, 132, 'IMDM27255240..', 510, '2023-05-06 00:00:00', '00:17:10', 'APASEO EL GRANDE', 'PALMILLAS-APASEO GDE', 5, 596),
(280, 133, 'IMDM27255235..', 501, '2023-05-05 00:00:00', '22:59:02', 'PALMILLAS BIS', 'PALMILLAS BIS 14', 5, 403),
(281, 132, 'IMDM27255240..', 510, '2023-05-05 00:00:00', '22:58:23', 'PALMILLAS BIS', 'PALMILLAS BIS 14', 5, 403),
(282, 132, 'IMDM27255240..', 510, '2023-05-05 00:00:00', '20:23:23', 'TEPOTZOTLAN', 'TEPOTZOTLAN 15', 5, 430),
(283, 133, 'IMDM27255235..', 501, '2023-05-05 00:00:00', '20:22:43', 'TEPOTZOTLAN', 'TEPOTZOTLAN 15', 5, 430),
(284, 0, 'IMDM27255255..', 0, '2023-05-05 00:00:00', '19:34:27', 'TIZAYUCA EASYTRIP', 'TIZAYUCA 12A', 1, 63),
(285, 0, 'IMDM27255255..', 0, '2023-05-05 00:00:00', '14:22:37', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 38),
(286, 132, 'IMDM27255240..', 510, '2023-05-05 00:00:00', '10:51:59', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 147),
(287, 132, 'IMDM27255240..', 510, '2023-05-05 00:00:00', '10:44:20', 'CTO. EXT. MEXIQUENSE', 'A32 TULTEPEC AUX II', 1, 334),
(288, 133, 'IMDM27255235..', 501, '2023-05-05 00:00:00', '09:53:44', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 147),
(289, 133, 'IMDM27255235..', 501, '2023-05-05 00:00:00', '09:42:36', 'CTO. EXT. MEXIQUENSE', 'A32 TULTEPEC AUX II', 1, 334),
(290, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '18:09:48', 'AJOLOAPAN', 'AJOLOAPAN 2', 3, 575),
(291, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '16:29:31', 'S.MARTIN PUE.', 'S.MARTIN PUE. 10', 3, 108),
(292, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '16:05:36', 'LIB. PUEBLA', 'CUAUHTEMOC-PERIF', 1, 197),
(293, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '15:46:16', 'AMOZOC', 'AMOZOC 5', 3, 157),
(294, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '14:53:39', 'ESPERANZA', 'ESPERANZA 5', 3, 322),
(295, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '12:06:10', 'FORTIN', 'FORTIN 3', 3, 77),
(296, 128, 'IMDM27255238..', 505, '2023-05-04 00:00:00', '11:41:57', 'ARRIAGA VIAP', 'ARRIAGA 1A', 1, 145),
(297, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '10:23:15', 'CUITLAHUAC', 'CUITLAHUAC 10', 3, 164),
(298, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '08:33:06', 'COSAMALOAPAN', 'COSAMALOAPAN 2', 3, 319),
(299, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '06:55:34', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 3', 3, 293),
(300, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '06:06:07', 'DOVALI', 'DOVALI 3', 1, 37),
(301, 128, 'IMDM27255238..', 505, '2023-05-04 00:00:00', '05:33:38', 'JIQUIPILAS VIAP', 'JIQUIPILAS 1A', 1, 352),
(302, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '05:12:26', 'LAS CHOAPAS', 'LAS CHOAPAS 2', 3, 140),
(303, 128, 'IMDM27255238..', 505, '2023-05-04 00:00:00', '05:08:55', 'COITA VIAP', 'COITA 1A', 1, 155),
(304, 128, 'IMDM27255238..', 505, '2023-05-04 00:00:00', '04:23:30', 'OCOZOCUAUTLA', 'OCOZOCUAUTLA 4', 5, 221),
(305, 128, 'IMDM27255241..', 512, '2023-05-04 00:00:00', '03:16:39', 'MALPASITO', 'MALPASITO 1', 3, 140),
(306, 128, 'IMDM27255238..', 505, '2023-05-04 00:00:00', '01:45:27', 'MALPASITO', 'MALPASITO 4', 3, 140),
(307, 128, 'IMDM27255238..', 505, '2023-05-04 00:00:00', '00:02:37', 'LAS CHOAPAS', 'LAS CHOAPAS 4', 3, 140),
(308, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '23:32:59', 'DOVALI', 'DOVALI 7', 1, 37),
(309, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '22:07:28', 'ACAYUCAN (SAYULA)', 'ACAYUCAN 7', 3, 293),
(310, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '20:42:00', 'COSAMALOAPAN', 'COSAMALOAPAN 6', 3, 319),
(311, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '18:26:57', 'CUITLAHUAC', 'CUITLAHUAC 6', 3, 164),
(312, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '18:07:57', 'FORTIN', 'FORTIN 7', 3, 77),
(313, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '15:58:49', 'ESPERANZA', 'ESPERANZA 8', 3, 322),
(314, 127, 'IMDM27255236..', 502, '2023-05-03 00:00:00', '15:28:52', 'AJOLOAPAN', 'AJOLOAPAN 2', 5, 130),
(315, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '15:11:23', 'AMOZOC', 'AMOZOC 14', 3, 157),
(316, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '14:33:52', 'LIB. PUEBLA', 'PERIF-CUAUHTEMOC', 1, 197),
(317, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '14:08:24', 'S.MARTIN PUE.', 'S.MARTIN PUE. 18', 3, 108),
(318, 128, 'IMDM27255238..', 505, '2023-05-03 00:00:00', '14:00:30', 'SAN MARTIN TEXMELUCAN', 'MARTIN TEXMELUCAN 10', 3, 480),
(319, 129, 'IMDM27255239..', 509, '2023-05-03 00:00:00', '05:56:22', 'VAINILLO', 'VAINILLO 6', 5, 130),
(320, 128, 'IMDM27255241..', 512, '2023-05-03 00:00:00', '00:00:26', 'MALPASITO', 'MALPASITO 4', 5, 221),
(321, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '22:23:51', 'LAS CHOAPAS', 'LAS CHOAPAS 5', 5, 221),
(322, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '21:53:00', 'DOVALI', 'DOVALI 8', 5, 65),
(323, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '21:07:34', 'ACAYUCAN (SAYULA)', 'SAYULA 6', 5, 454),
(324, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '19:59:38', 'ROSARIO', 'ROSARIO 4', 4, 365),
(325, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '19:45:50', 'COSAMALOAPAN', 'COSAMALOAPAN 5', 5, 468),
(326, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '18:46:23', 'ACAPONETA', 'ACAPONETA 2', 5, 1095),
(327, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '18:15:14', 'CUITLAHUAC', 'CUITLAHUAC 7', 5, 231),
(328, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '17:55:44', 'FORTIN', 'FORTIN 7', 5, 150),
(329, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '17:36:53', 'ESTACION RUIZ', 'ESTACION RUIZ 2', 5, 520),
(330, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '17:00:20', 'ESPERANZA', 'ESPERANZA 9', 5, 622),
(331, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '16:49:32', 'TRAPICHILLO', 'TRAPICHILLO 3', 5, 380),
(332, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '16:18:54', 'LA CANTERA', 'LA CANTERA 2', 5, 175),
(333, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '16:03:15', 'STA. MA. DEL ORO', 'STA. MA. DEL ORO 4R', 5, 352),
(334, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '16:01:46', 'AMOZOC', 'AMOZOC 14', 5, 301),
(335, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '15:50:15', 'LIB. PUEBLA', 'PERIF-CUAUHTEMOC', 1, 314),
(336, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '15:28:39', 'PLAN DE BARRANCAS', 'PLAN DE BARRANCAS 4A', 5, 514),
(337, 128, 'IMDM27255241..', 512, '2023-05-02 00:00:00', '15:24:55', 'S.MARTIN PUE.', 'S.MARTIN PUE. 28', 5, 218),
(338, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '14:49:20', 'ARENAL', 'ARENAL 1', 5, 356),
(339, 127, 'IMDM27255236..', 502, '2023-05-02 00:00:00', '07:50:31', 'PACHUCA', 'PACHUCA 1', 5, 130),
(340, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '01:25:47', 'OCOTLAN', 'OCOTLAN 6', 5, 636),
(341, 129, 'IMDM27255239..', 509, '2023-05-02 00:00:00', '00:54:59', 'ECUANDUREO', 'ECUANDUREO VH 10', 5, 78),
(342, 129, 'IMDM27255239..', 509, '2023-05-01 00:00:00', '23:59:34', 'LIB. LA PIEDAD', 'LIB. LA PIEDAD 2', 5, 189),
(343, 129, 'IMDM27255239..', 509, '2023-05-01 00:00:00', '22:36:38', 'SALAMANCA', 'SALAMANCA 7', 5, 357),
(344, 129, 'IMDM27255239..', 509, '2023-05-01 00:00:00', '21:37:57', 'QUERETARO', 'QUERETARO 9', 5, 355),
(345, 129, 'IMDM27255239..', 509, '2023-05-01 00:00:00', '20:24:15', 'PALMILLAS', 'PALMILLAS 17', 5, 403),
(346, 129, 'IMDM27255239..', 509, '2023-05-01 00:00:00', '19:15:39', 'JOROBAS', 'JOROBAS 2', 5, 232),
(347, 128, 'IMDM27255241..', 512, '2023-05-01 00:00:00', '19:03:10', 'CTO. EXT. MEXIQUENSE', 'TULTEPEC', 1, 401),
(348, 128, 'IMDM27255241..', 512, '2023-05-01 00:00:00', '18:50:40', 'CTO. EXT. MEXIQUENSE', 'CONMEX', 1, 285),
(349, 128, 'IMDM27255241..', 512, '2023-05-01 00:00:00', '18:37:26', 'CTO. EXT. MEXIQUENSE', 'T3 NABOR CARRILLO', 1, 179),
(350, 128, 'IMDM27255241..', 512, '2023-05-01 00:00:00', '18:28:43', 'CTO. EXT. MEXIQUENSE', 'T7 CENTRO CULTURAL', 1, 175),
(351, 128, 'IMDM27255241..', 512, '2023-05-01 00:00:00', '17:58:32', 'CTO. EXT. MEXIQUENSE', 'T4 CHALCO', 1, 412),
(352, 128, 'IMDM27255241..', 512, '2023-05-01 00:00:00', '17:55:23', 'SAN MARCOS', 'SAN MARCOS BIS.4', 5, 70),
(353, 128, 'IMDM27255241..', 512, '2023-05-01 00:00:00', '07:29:12', 'CTO. EXT. MEXIQUENSE', 'T5 TULTITLAN', 1, 147),
(354, 128, 'IMDM27255241..', 512, '2023-05-01 00:00:00', '07:21:25', 'CTO. EXT. MEXIQUENSE', 'A32 TULTEPEC AUX II', 1, 334),
(355, 1, '555555', 555, '2023-09-21 00:00:00', '14:38:20', 'aaaa', 'bbb', 4, 123),
(356, 1, 'adsd', 111, '2023-09-22 00:00:00', '14:43:00', 'jjj', 'kk', 8, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tracto`
--

CREATE TABLE `tracto` (
  `id_tracto` int(11) NOT NULL,
  `tracto` varchar(250) NOT NULL,
  `placas` varchar(250) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `cilindros` varchar(250) NOT NULL,
  `transmision` varchar(250) NOT NULL,
  `motor` varchar(250) NOT NULL,
  `serie_motor` varchar(250) NOT NULL,
  `estatus` varchar(250) NOT NULL COMMENT 'disponible, rentado, vendido, dañado, siniestrado, perdida_total, robado',
  `baja` varchar(250) NOT NULL,
  `kilometraje` varchar(250) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `usuario_creacion` varchar(250) NOT NULL,
  `usuario_modificacion` varchar(250) NOT NULL,
  `hora_creacion` datetime NOT NULL,
  `hora_modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tracto`
--

INSERT INTO `tracto` (`id_tracto`, `tracto`, `placas`, `marca`, `modelo`, `color`, `cilindros`, `transmision`, `motor`, `serie_motor`, `estatus`, `baja`, `kilometraje`, `fecha_creacion`, `fecha_modificacion`, `usuario_creacion`, `usuario_modificacion`, `hora_creacion`, `hora_modificacion`) VALUES
(1, '501', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '502', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '504', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '505', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '509', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '510', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '512', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `perfil` varchar(254) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `hora_creacion` datetime NOT NULL,
  `usuario_creacion` varchar(250) NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `hora_modificacion` datetime NOT NULL,
  `usuario_modificacion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `password`, `perfil`, `fecha_creacion`, `hora_creacion`, `usuario_creacion`, `fecha_modificacion`, `hora_modificacion`, `usuario_modificacion`) VALUES
(1, 'admin', 'admin@decoditec.com', '*7CDDAAD328C1B27AB28DD9E9D849D20E2C4EB79F', '1', '0000-00-00', '0000-00-00 00:00:00', '', '0000-00-00', '0000-00-00 00:00:00', ''),
(30, 'Sistemas', 'sistemas@decoditec.com', '*98ADDCF9CC7D68B9F2062E49857C94D68F32010C', '5', '2023-09-04', '2023-09-04 17:53:17', 'admin', '0000-00-00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_clasif`
--

CREATE TABLE `user_clasif` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_contract` int(11) NOT NULL DEFAULT 0,
  `id_clasif` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes_enlazados`
--

CREATE TABLE `viajes_enlazados` (
  `id` int(11) NOT NULL,
  `servicio_uno` varchar(45) DEFAULT NULL,
  `servicio_dos` varchar(45) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `usuario_creacion` varchar(45) DEFAULT NULL,
  `hora_creacion` datetime DEFAULT NULL,
  `fecha_modificacion` date DEFAULT NULL,
  `usuario_modificacion` varchar(45) DEFAULT NULL,
  `hora_modificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `viajes_enlazados`
--

INSERT INTO `viajes_enlazados` (`id`, `servicio_uno`, `servicio_dos`, `fecha_creacion`, `usuario_creacion`, `hora_creacion`, `fecha_modificacion`, `usuario_modificacion`, `hora_modificacion`) VALUES
(1, '133', '135', '2023-08-21', 'admin@decoditec.com', '2023-08-21 23:11:07', NULL, NULL, NULL),
(2, '120', '123', '2023-08-21', 'admin@decoditec.com', '2023-08-21 23:17:39', NULL, NULL, NULL),
(3, '129', '137', '2023-08-21', 'admin@decoditec.com', '2023-08-21 23:18:02', NULL, NULL, NULL),
(4, '142', '0', '2023-08-21', 'admin@decoditec.com', '2023-08-21 23:18:38', NULL, NULL, NULL),
(5, '146', '149', '2023-08-21', 'admin@decoditec.com', '2023-08-21 23:20:58', NULL, NULL, NULL),
(6, '151', '0', '2023-08-21', 'admin@decoditec.com', '2023-08-21 23:21:17', NULL, NULL, NULL),
(7, '157', '0', '2023-08-21', 'admin@decoditec.com', '2023-08-21 23:21:26', NULL, NULL, NULL),
(8, '160', '0', '2023-08-22', 'admin@decoditec.com', '2023-08-22 00:09:36', NULL, NULL, NULL),
(9, '159', '0', '2023-08-22', 'admin@decoditec.com', '2023-08-22 00:14:00', NULL, NULL, NULL),
(10, '152', '0', '2023-08-22', 'admin@decoditec.com', '2023-08-22 10:31:55', NULL, NULL, NULL),
(11, '159', '0', '2023-09-06', 'admin@decoditec.com', '2023-09-06 22:37:51', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaticos`
--

CREATE TABLE `viaticos` (
  `FECHA` text DEFAULT NULL,
  `NoSERVICIO` int(11) DEFAULT NULL,
  `CONCEPTO` text DEFAULT NULL,
  `VIATICOS` double DEFAULT NULL,
  `DIA` text DEFAULT NULL,
  `CASETAS` double DEFAULT NULL,
  `MANIOBRAS` double DEFAULT NULL,
  `DIESELRUTA` text DEFAULT NULL,
  `IMPORTE` double DEFAULT NULL,
  `TELEFONIA` double DEFAULT NULL,
  `VITAMINAS` double DEFAULT NULL,
  `PENSION` double DEFAULT NULL,
  `BASCULA` double DEFAULT NULL,
  `PRESTAMO` double DEFAULT NULL,
  `GUIATAXI` double DEFAULT NULL,
  `AGUASCARGAYDESCARGA` double DEFAULT NULL,
  `INFRACCIONESYOFEDERAL` double DEFAULT NULL,
  `TALACHAS` double DEFAULT NULL,
  `MTTOREFACCIONES` double DEFAULT NULL,
  `COMISIONES` double DEFAULT NULL,
  `FITOSANITARIAS` double DEFAULT NULL,
  `OTROS` double DEFAULT NULL,
  `IMPORTEDELGASTO` text DEFAULT NULL,
  `DEPOSITOREALIZADO` double DEFAULT NULL,
  `CUENTA` text DEFAULT NULL,
  `TIPODEMOVIMIENTO` text DEFAULT NULL,
  `ESTATUS` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `viaticos`
--

INSERT INTO `viaticos` (`FECHA`, `NoSERVICIO`, `CONCEPTO`, `VIATICOS`, `DIA`, `CASETAS`, `MANIOBRAS`, `DIESELRUTA`, `IMPORTE`, `TELEFONIA`, `VITAMINAS`, `PENSION`, `BASCULA`, `PRESTAMO`, `GUIATAXI`, `AGUASCARGAYDESCARGA`, `INFRACCIONESYOFEDERAL`, `TALACHAS`, `MTTOREFACCIONES`, `COMISIONES`, `FITOSANITARIAS`, `OTROS`, `IMPORTEDELGASTO`, `DEPOSITOREALIZADO`, `CUENTA`, `TIPODEMOVIMIENTO`, `ESTATUS`) VALUES
('2023-05-01', 129, 'BASCULA FERRY, COMIDA (LMMJ) Y FITOSANITARIA', 1000, ' LMMJ ', 0, 0, ' N/A ', 0, 0, 0, 0, 380, 0, 0, 0, 0, 0, 0, 0, 100, 0, '1500.00', 1500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-02', 126, 'TRANSITO (MOVILIDAD ZUMPANGO) ZONA CENTRO', 0, ' N/A ', 0, 0, ' FALTA ', 0, 0, 0, 0, 0, 0, 0, 0, 700, 0, 0, 0, 0, 0, '#¡VALOR!', 700, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-02', 126, 'TAXI A DOMICILIO POR FALTA DE COLCHON EN UNIDAD ECO 501', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 150, 0, 0, 0, 0, 0, 0, 0, '1480.00', 200, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-02', 127, 'RECARGA T/A,COMISION CAJERO, GUIA ZONA CENTRO PACHUCA', 0, ' N/A ', 0, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 200, 0, 0, 0, 0, 35, 0, 0, '700.00', 350, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-02', 130, 'COMIDAS (M)', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '150.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-03', 127, 'COMIDAS (M)', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '335.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-03', 127, 'COMPLEMENTO DE MANIOBRA DE DESCARGA ', 0, ' N/A ', 0, 550, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 550, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-03', 128, 'COMIDAS DE DOS PERSONAS (MJ)', 1000, ' MJ ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 1000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-03', 128, 'COMISION RETIRO DE CAJERO RED Y VITAMINAS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 300, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, '550.00', 400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 129, 'COMIDAS (VS) Y TAXI', 500, ' VS ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 300, 0, 0, 0, 0, 0, 0, 0, '1000.00', 800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 129, 'TRASLADO DE FERRY MAZATLAN A LOS CABOS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 33080, '370.00', 33080, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 131, 'COMIDAS (J) RECARGA 15 DIAS', 250, ' J ', 0, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '800.00', 350, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 133, 'COMIDAS (VSD)', 750, ' VSD ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '33080.00', 750, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 128, 'COMPRA DE BANDAS DE DISTRIBUCION', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 0, 0, 0, '350.00', 2000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 128, 'RESCATE MECANICO $1,500 Y COLOCACION DE BANDAS $300', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, '750.00', 1800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 132, 'COMIDAS (VSD)', 750, ' VSD ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2000.00', 750, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 128, 'COMBUSTIBLE ', 0, ' $-   ', 0, 0, ' FALTA ', 5000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1800.00', 5000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-05', 129, 'SERVICIO DE FERRI DE LA PAZ MAZATLAN SINALO', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 33080, '750.00', 33080, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-05', 134, 'COMIDAS (VSD)', 750, ' VSD ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5000.00', 750, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 135, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, '', 1956, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '33080.00', 1956, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 134, 'COMPRA DE BANDAS DE DISTRIBUCION', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 400, 0, 0, 0, '750.00', 400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 129, 'COMIDA (DL), BASCULA FERRY, FITOSANITARIA Y PENSION', 500, ' DL ', 0, 0, ' N/A ', 0, 0, 0, 200, 350, 0, 0, 0, 0, 0, 0, 0, 70, 0, '1956.00', 1100, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 132, 'COMIDA (L) Y PENSION (SD)', 250, ' L ', 0, 0, ' N/A ', 0, 0, 0, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '400.00', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 134, 'BASCULA  Y COMBUSTIBLE', 0, ' N/A ', 0, 0, '159.221', 3600, 0, 0, 0, 150, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1120.00', 3750, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 134, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, '106.147', 2400, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '450.00', 2400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 132, 'CASETAS ZACATECAS', 0, ' $-   ', 450, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3909.22', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 134, 'COMIDAS (L)', 250, ' L ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2506.15', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 137, 'COMIDAS (MM)', 500, ' MM ', 0, 0, ' N/A ', 0, 0, 0, 400, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '450.00', 900, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 137, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' FALTA ', 13500, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 13500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 132, 'COMBUSTIBLE Y CASETA, RETEN X FALTA DE LICENCIA', 0, ' N/A ', 10, 0, ' FALTA ', 5240, 0, 0, 0, 0, 0, 0, 0, 250, 0, 0, 0, 0, 0, '900.00', 5500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-09', 138, 'COMIDAS (M) Y CALIBRADA', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, '13500.00', 350, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-09', 137, 'FEDERAL', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 500, 0, 0, 0, 0, 0, '5500.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-09', 137, 'FEDERAL', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 500, 0, 0, 0, 0, 0, '350.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-09', 139, 'COMBUSTIBLE Y COMIDA (M)', 250, ' M ', 0, 0, ' FALTA ', 4200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '500.00', 4450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-10', 140, 'COMIDAS (JVSD) Y ACCESO CENTRAL DE ABASTOS', 1000, ' JVSD ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, '500.00', 1100, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 141, 'COMIDAS (VSD) Y CASETA ISLA AGUADA', 750, ' VSD ', 480, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4450.00', 1230, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 142, 'COMIDAS (VSD) Y CASETA ISLA AGUADA', 750, ' VSD ', 480, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1080.00', 1230, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 140, 'CASETA ISLA AGUADA', 0, ' N/A ', 840, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1230.00', 900, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 140, 'GUIA EN CD DEL CARMEN Y COMPRA DE CELULAR', 0, ' N/A ', 0, 0, ' N/A ', 0, 500, 0, 0, 0, 0, 200, 0, 0, 0, 0, 0, 0, 0, '1230.00', 700, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 140, 'TAXI CD DEL CARMEN', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 400, 0, 0, 0, 0, 0, 0, 0, '840.00', 400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 142, 'TALACHA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 200, 0, 0, 0, 0, '700.00', 200, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 128, 'PAGO COMISION DE VIAJE', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1000, 0, 0, '400.00', 1000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 141, 'CENA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '200.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 142, 'CENA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1000.00', 300, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 141, 'CASETA TULTEPEC A-32', 0, ' N/A ', 334, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 334, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 140, 'COMIDAS (L) Y COMBUSTIBLE', 250, ' L ', 0, 0, ' FALTA ', 2400, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 2650, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-15', 140, 'COMIDAS (M) Y TIEMPO AIRE', 250, ' M ', 0, 0, ' N/A ', 0, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '334.00', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-15', 140, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' FALTA ', 2400, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2650.00', 2400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-15', 140, 'PAGO DE RESCATE EN LAS CHOAPAS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2800, 0, 0, 0, '450.00', 2800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-15', 142, 'COMIDA (LM) Y CASETA ISLA AGUADA', 500, ' LM ', 480, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2400.00', 980, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-16', 141, 'COMIDAS (LM) Y CASETA ISLA AGUADA', 500, ' LM ', 420, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2800.00', 920, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-16', 141, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' N/A ', 5000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '980.00', 5000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-16', 142, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' FALTA ', 6000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '920.00', 6000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-17', 144, 'COMIDAS', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-18', 145, 'COMIDAS', 250, ' J ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '6000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-18', 146, 'COMIDAS (VSDL), PENSION E INSUMOS DE LIMPIEZA', 1000, ' VSDL ', 0, 0, ' N/A ', 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 200, '250.00', 1300, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-20', 142, 'REEMBOLSO COMPROBACION DE GASTOS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 190, '250.00', 190, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-22', 149, 'COMIDAS (MM)', 500, ' MM ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1300.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-22', 147, 'COMIDA (M) Y TIEMPO AIRE', 250, ' M ', 0, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '190.00', 350, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-23', 150, 'COMIDAS (M), INSUMOS DE LIMPIEZA', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 200, '500.00', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-23', 148, 'COMIDAS (MMJV) Y RECARGA T/A', 1000, ' MMJV ', 0, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '350.00', 1100, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-25', 150, 'AGUAS POLIS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, '450.00', 0, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('', 149, 'MANIOBRA DE DESCARGA', 0, ' N/A ', 0, 1449.56, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1100.00', 0, 'NO FISCAL', 'CANCELADO', 'CANCELADO'),
('2023-05-24', 151, 'COMIDAS (JVSD), CASETA ISLA AGUADA Y RECARGA DE T/A', 1000, ' JVSD ', 420, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '50.00', 1600, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-24', 149, 'COMIDA(J), MANIOBRA DE DESCARGA Y RECARGAS DE T/A', 250, ' J ', 0, 1449.56, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1449.56', 1800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-25', 151, 'CENA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1520.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-25', 153, 'COMIDA (V)', 250, ' V ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1799.56', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-25', 148, 'COMIDAS (SD) Y CASETA TEPOTZOTLAN (NO PASA IAVE)', 500, ' SD ', 500, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 1000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('', 152, 'COMIDAS (J)', 250, ' J ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '500.00', 0, '', 'CANCELADO', 'CANCELADO'),
('2023-05-26', 153, 'PRESTAMO DE COMIDA', 250, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-26', 151, 'CASETAS NO PASA IAVE', 0, ' N/A ', 760, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 760, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-26', 151, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' FALTA ', 6000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 6000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-27', 154, 'COMBUSTIBLE Y PENSION ', 0, ' N/A ', 0, 0, ' FALTA ', 4500, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '760.00', 4600, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-28', 156, 'COMIDAS', 250, ' L ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '6000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-28', 154, 'CASETA SALAMANCA', 0, ' N/A ', 357, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4600.00', 357, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-28', 155, 'COMIDAS (LMMJ) Y CASETAS', 1000, ' LMMJ ', 950, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 2000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-29', 157, 'COMIDAS (MMJV), CASETA DE ISLA AGUADA Y PENSION', 1000, ' MMJV ', 420, 0, ' N/A ', 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '357.00', 1600, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-29', 158, 'COMIDAS (MJV), CASETA ISLA AGUADA', 750, ' MJV ', 420, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1950.00', 1200, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 155, 'CALIBRADA GENERAL DE LLANTA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 150, 0, 0, 0, 0, '1520.00', 150, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-29', 159, 'COMIDA (M) VITAMINAS', 250, ' M ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1170.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-30', 154, 'COMIDAS (M) Y PENSION (SD) IRAPUATO ', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '150.00', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-30', 155, 'TALACHA Y REPARACION DE BRAZO DE DIRECCION ', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 440, 0, 0, 0, 220, '500.00', 660, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 157, 'PENSION (PANTACO)', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 240, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '450.00', 240, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 158, 'PENSION (PANTACO)', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 240, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '660.00', 240, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 158, 'PRESTAMO A CUENTA DE SUELDO SEMANAL', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 500, 0, 0, 0, 0, 0, 0, 0, 0, '240.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 159, 'COMPRA DE TELEFONO', 0, ' N/A ', 0, 0, ' N/A ', 0, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '240.00', 3000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 160, 'COMIDA (JV), RECARGA T/A Y PENSION', 500, ' JV ', 0, 0, ' N/A ', 0, 100, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '500.00', 700, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-06-01', 154, 'COMIDAS (M)', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 155, 'CASETAS', 0, ' N/A ', 1800, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '700.00', 1800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-01', 129, 'BASCULA FERRY, COMIDA (LMMJ) Y FITOSANITARIA', 1000, ' LMMJ ', 0, 0, ' N/A ', 0, 0, 0, 0, 380, 0, 0, 0, 0, 0, 0, 0, 100, 0, '1500.00', 1500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-02', 126, 'TRANSITO (MOVILIDAD ZUMPANGO) ZONA CENTRO', 0, ' N/A ', 0, 0, ' FALTA ', 0, 0, 0, 0, 0, 0, 0, 0, 700, 0, 0, 0, 0, 0, '#¡VALOR!', 700, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-02', 126, 'TAXI A DOMICILIO POR FALTA DE COLCHON EN UNIDAD ECO 501', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 150, 0, 0, 0, 0, 0, 0, 0, '1480.00', 200, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-02', 127, 'RECARGA T/A,COMISION CAJERO, GUIA ZONA CENTRO PACHUCA', 0, ' N/A ', 0, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 200, 0, 0, 0, 0, 35, 0, 0, '700.00', 350, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-02', 130, 'COMIDAS (M)', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '150.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-03', 127, 'COMIDAS (M)', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '335.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-03', 127, 'COMPLEMENTO DE MANIOBRA DE DESCARGA ', 0, ' N/A ', 0, 550, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 550, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-03', 128, 'COMIDAS DE DOS PERSONAS (MJ)', 1000, ' MJ ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 1000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-03', 128, 'COMISION RETIRO DE CAJERO RED Y VITAMINAS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 300, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, '550.00', 400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 129, 'COMIDAS (VS) Y TAXI', 500, ' VS ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 300, 0, 0, 0, 0, 0, 0, 0, '1000.00', 800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 129, 'TRASLADO DE FERRY MAZATLAN A LOS CABOS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 33080, '370.00', 33080, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 131, 'COMIDAS (J) RECARGA 15 DIAS', 250, ' J ', 0, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '800.00', 350, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 133, 'COMIDAS (VSD)', 750, ' VSD ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '33080.00', 750, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 128, 'COMPRA DE BANDAS DE DISTRIBUCION', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2000, 0, 0, 0, '350.00', 2000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 128, 'RESCATE MECANICO $1,500 Y COLOCACION DE BANDAS $300', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1800, 0, 0, 0, '750.00', 1800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 132, 'COMIDAS (VSD)', 750, ' VSD ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2000.00', 750, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-04', 128, 'COMBUSTIBLE ', 0, ' $-   ', 0, 0, ' FALTA ', 5000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1800.00', 5000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-05', 129, 'SERVICIO DE FERRI DE LA PAZ MAZATLAN SINALO', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 33080, '750.00', 33080, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-05', 134, 'COMIDAS (VSD)', 750, ' VSD ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5000.00', 750, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 135, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, '', 1956, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '33080.00', 1956, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 134, 'COMPRA DE BANDAS DE DISTRIBUCION', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 400, 0, 0, 0, '750.00', 400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 129, 'COMIDA (DL), BASCULA FERRY, FITOSANITARIA Y PENSION', 500, ' DL ', 0, 0, ' N/A ', 0, 0, 0, 200, 350, 0, 0, 0, 0, 0, 0, 0, 70, 0, '1956.00', 1100, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 132, 'COMIDA (L) Y PENSION (SD)', 250, ' L ', 0, 0, ' N/A ', 0, 0, 0, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '400.00', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 134, 'BASCULA  Y COMBUSTIBLE', 0, ' N/A ', 0, 0, '159.221', 3600, 0, 0, 0, 150, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1120.00', 3750, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-06', 134, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, '106.147', 2400, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '450.00', 2400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 132, 'CASETAS ZACATECAS', 0, ' $-   ', 450, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3909.22', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 134, 'COMIDAS (L)', 250, ' L ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2506.15', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 137, 'COMIDAS (MM)', 500, ' MM ', 0, 0, ' N/A ', 0, 0, 0, 400, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '450.00', 900, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 137, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' FALTA ', 13500, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 13500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-08', 132, 'COMBUSTIBLE Y CASETA, RETEN X FALTA DE LICENCIA', 0, ' N/A ', 10, 0, ' FALTA ', 5240, 0, 0, 0, 0, 0, 0, 0, 250, 0, 0, 0, 0, 0, '900.00', 5500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-09', 138, 'COMIDAS (M) Y CALIBRADA', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, '13500.00', 350, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-09', 137, 'FEDERAL', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 500, 0, 0, 0, 0, 0, '5500.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-09', 137, 'FEDERAL', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 500, 0, 0, 0, 0, 0, '350.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-09', 139, 'COMBUSTIBLE Y COMIDA (M)', 250, ' M ', 0, 0, ' FALTA ', 4200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '500.00', 4450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-10', 140, 'COMIDAS (JVSD) Y ACCESO CENTRAL DE ABASTOS', 1000, ' JVSD ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, '500.00', 1100, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 141, 'COMIDAS (VSD) Y CASETA ISLA AGUADA', 750, ' VSD ', 480, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4450.00', 1230, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 142, 'COMIDAS (VSD) Y CASETA ISLA AGUADA', 750, ' VSD ', 480, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1080.00', 1230, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 140, 'CASETA ISLA AGUADA', 0, ' N/A ', 840, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1230.00', 900, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 140, 'GUIA EN CD DEL CARMEN Y COMPRA DE CELULAR', 0, ' N/A ', 0, 0, ' N/A ', 0, 500, 0, 0, 0, 0, 200, 0, 0, 0, 0, 0, 0, 0, '1230.00', 700, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 140, 'TAXI CD DEL CARMEN', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 400, 0, 0, 0, 0, 0, 0, 0, '840.00', 400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-12', 142, 'TALACHA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 200, 0, 0, 0, 0, '700.00', 200, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 128, 'PAGO COMISION DE VIAJE', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1000, 0, 0, '400.00', 1000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 141, 'CENA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '200.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 142, 'CENA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1000.00', 300, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 141, 'CASETA TULTEPEC A-32', 0, ' N/A ', 334, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 334, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-13', 140, 'COMIDAS (L) Y COMBUSTIBLE', 250, ' L ', 0, 0, ' FALTA ', 2400, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 2650, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-15', 140, 'COMIDAS (M) Y TIEMPO AIRE', 250, ' M ', 0, 0, ' N/A ', 0, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '334.00', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-15', 140, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' FALTA ', 2400, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2650.00', 2400, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-15', 140, 'PAGO DE RESCATE EN LAS CHOAPAS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2800, 0, 0, 0, '450.00', 2800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-15', 142, 'COMIDA (LM) Y CASETA ISLA AGUADA', 500, ' LM ', 480, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2400.00', 980, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-16', 141, 'COMIDAS (LM) Y CASETA ISLA AGUADA', 500, ' LM ', 420, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2800.00', 920, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-16', 141, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' N/A ', 5000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '980.00', 5000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-16', 142, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' FALTA ', 6000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '920.00', 6000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-17', 144, 'COMIDAS', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '5000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-18', 145, 'COMIDAS', 250, ' J ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '6000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-18', 146, 'COMIDAS (VSDL), PENSION E INSUMOS DE LIMPIEZA', 1000, ' VSDL ', 0, 0, ' N/A ', 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 200, '250.00', 1300, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-20', 142, 'REEMBOLSO COMPROBACION DE GASTOS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 190, '250.00', 190, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-22', 149, 'COMIDAS (MM)', 500, ' MM ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1300.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-22', 147, 'COMIDA (M) Y TIEMPO AIRE', 250, ' M ', 0, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '190.00', 350, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-23', 150, 'COMIDAS (M), INSUMOS DE LIMPIEZA', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 200, '500.00', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-23', 148, 'COMIDAS (MMJV) Y RECARGA T/A', 1000, ' MMJV ', 0, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '350.00', 1100, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-25', 150, 'AGUAS POLIS', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 50, '450.00', 0, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('', 149, 'MANIOBRA DE DESCARGA', 0, ' N/A ', 0, 1449.56, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1100.00', 0, 'NO FISCAL', 'CANCELADO', 'CANCELADO'),
('2023-05-24', 151, 'COMIDAS (JVSD), CASETA ISLA AGUADA Y RECARGA DE T/A', 1000, ' JVSD ', 420, 0, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '50.00', 1600, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-24', 149, 'COMIDA(J), MANIOBRA DE DESCARGA Y RECARGAS DE T/A', 250, ' J ', 0, 1449.56, ' N/A ', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1449.56', 1800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-25', 151, 'CENA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1520.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-25', 153, 'COMIDA (V)', 250, ' V ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1799.56', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-25', 148, 'COMIDAS (SD) Y CASETA TEPOTZOTLAN (NO PASA IAVE)', 500, ' SD ', 500, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 1000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('', 152, 'COMIDAS (J)', 250, ' J ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '500.00', 0, '', 'CANCELADO', 'CANCELADO'),
('2023-05-26', 153, 'PRESTAMO DE COMIDA', 250, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-26', 151, 'CASETAS NO PASA IAVE', 0, ' N/A ', 760, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 760, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-26', 151, 'COMBUSTIBLE', 0, ' N/A ', 0, 0, ' FALTA ', 6000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 6000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-27', 154, 'COMBUSTIBLE Y PENSION ', 0, ' N/A ', 0, 0, ' FALTA ', 4500, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '760.00', 4600, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-28', 156, 'COMIDAS', 250, ' L ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '6000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-28', 154, 'CASETA SALAMANCA', 0, ' N/A ', 357, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4600.00', 357, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-28', 155, 'COMIDAS (LMMJ) Y CASETAS', 1000, ' LMMJ ', 950, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '250.00', 2000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-29', 157, 'COMIDAS (MMJV), CASETA DE ISLA AGUADA Y PENSION', 1000, ' MMJV ', 420, 0, ' N/A ', 0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '357.00', 1600, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-29', 158, 'COMIDAS (MJV), CASETA ISLA AGUADA', 750, ' MJV ', 420, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1950.00', 1200, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 155, 'CALIBRADA GENERAL DE LLANTA', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 150, 0, 0, 0, 0, '1520.00', 150, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-29', 159, 'COMIDA (M) VITAMINAS', 250, ' M ', 0, 0, ' N/A ', 0, 0, 250, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '1170.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-30', 154, 'COMIDAS (M) Y PENSION (SD) IRAPUATO ', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 200, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '150.00', 450, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-30', 155, 'TALACHA Y REPARACION DE BRAZO DE DIRECCION ', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 440, 0, 0, 0, 220, '500.00', 660, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 157, 'PENSION (PANTACO)', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 240, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '450.00', 240, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 158, 'PENSION (PANTACO)', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 240, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '660.00', 240, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 158, 'PRESTAMO A CUENTA DE SUELDO SEMANAL', 0, ' N/A ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 500, 0, 0, 0, 0, 0, 0, 0, 0, '240.00', 500, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 159, 'COMPRA DE TELEFONO', 0, ' N/A ', 0, 0, ' N/A ', 0, 3000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '240.00', 3000, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 160, 'COMIDA (JV), RECARGA T/A Y PENSION', 500, ' JV ', 0, 0, ' N/A ', 0, 100, 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '500.00', 700, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-06-01', 154, 'COMIDAS (M)', 250, ' M ', 0, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '3000.00', 250, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO'),
('2023-05-31', 155, 'CASETAS', 0, ' N/A ', 1800, 0, ' N/A ', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '700.00', 1800, 'NO FISCAL', 'TRANSFERENCIA', 'OK COMPROBADO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idbitacora`);

--
-- Indices de la tabla `cat_depositos`
--
ALTER TABLE `cat_depositos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_estatus`
--
ALTER TABLE `cat_estatus`
  ADD PRIMARY KEY (`id_estatus`);

--
-- Indices de la tabla `cat_tipo_cuenta`
--
ALTER TABLE `cat_tipo_cuenta`
  ADD PRIMARY KEY (`id_tipcuenta`);

--
-- Indices de la tabla `cat_tipo_documento`
--
ALTER TABLE `cat_tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `cat_tipo_movimiento`
--
ALTER TABLE `cat_tipo_movimiento`
  ADD PRIMARY KEY (`id_tipmovimiento`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cobranza`
--
ALTER TABLE `cobranza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `depositos`
--
ALTER TABLE `depositos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`id_operador`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfiles_user`
--
ALTER TABLE `perfiles_user`
  ADD PRIMARY KEY (`idp`);

--
-- Indices de la tabla `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tracto`
--
ALTER TABLE `tracto`
  ADD PRIMARY KEY (`id_tracto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_clasif`
--
ALTER TABLE `user_clasif`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `viajes_enlazados`
--
ALTER TABLE `viajes_enlazados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idbitacora` mediumint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cat_depositos`
--
ALTER TABLE `cat_depositos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cat_estatus`
--
ALTER TABLE `cat_estatus`
  MODIFY `id_estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cat_tipo_cuenta`
--
ALTER TABLE `cat_tipo_cuenta`
  MODIFY `id_tipcuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cat_tipo_documento`
--
ALTER TABLE `cat_tipo_documento`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cat_tipo_movimiento`
--
ALTER TABLE `cat_tipo_movimiento`
  MODIFY `id_tipmovimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cobranza`
--
ALTER TABLE `cobranza`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT de la tabla `depositos`
--
ALTER TABLE `depositos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `operador`
--
ALTER TABLE `operador`
  MODIFY `id_operador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `perfiles_user`
--
ALTER TABLE `perfiles_user`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;

--
-- AUTO_INCREMENT de la tabla `tracto`
--
ALTER TABLE `tracto`
  MODIFY `id_tracto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `user_clasif`
--
ALTER TABLE `user_clasif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `viajes_enlazados`
--
ALTER TABLE `viajes_enlazados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
