-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-09-2017 a las 02:04:41
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemacemento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargafamiliar`
--

CREATE TABLE `cargafamiliar` (
  `cantidad` int(4) NOT NULL,
  `numerof` int(4) NOT NULL,
  `cedulac` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombrec` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoc` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `diac` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `mesc` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `anoc` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `sexoc` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `parentescoc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `discapacidadc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nidc` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargafamiliar`
--

INSERT INTO `cargafamiliar` (`cantidad`, `numerof`, `cedulac`, `nombrec`, `apellidoc`, `diac`, `mesc`, `anoc`, `sexoc`, `parentescoc`, `discapacidadc`, `nidc`) VALUES
(1, 243, 'V-', 'FANNY', 'DE CHAVEZ', '24', '06', '1950', 'F', 'Conyugue', 'Ninguna', '01'),
(2, 842, 'V-', 'MARIA ALEXANDRA', 'ROSALES GIL', '27', '2', '2010', 'F', 'Hijo(a)', 'Ninguna', '01'),
(3, 842, 'V-', 'MARIA FERNANDA', 'ROSALES GIL', '08', '07', '2001', 'F', 'Hijo(a)', 'Ninguna', '02'),
(4, 842, 'V-', 'HECTOR LUIS', 'ROSALES GIL', '17', '06', '2003', 'M', 'Hijo(a)', 'Ninguna', '03'),
(5, 842, 'V-', 'ANA JULIA', 'GIL INFANTE', '01', '09', '1978', 'F', 'Conyugue', 'Ninguna', '04'),
(6, 842, 'V-', 'MARIA FERNANDA', 'TORRES', '25', '09', '1952', 'F', 'Madre', 'Ninguna', '05'),
(7, 842, 'V-', 'RAFAEL ISIDRO', 'ROSALES SUAREZ', '22', '12', '1949', 'M', 'Padre', 'Ninguna', '06'),
(8, 1286, 'V-', 'LUIS FERNANDO', 'DAVILA CAMPOS', '06', '09', '1998', 'M', 'Hijo(a)', 'Ninguna', '01'),
(9, 1286, 'V-', 'LUIS FELIPE', 'DAVILA PERDOMO', '09', '10', '1965', 'M', 'Conyugue', 'Ninguna', '02'),
(10, 1404, 'No Posee', 'VICTMAR ALEJANDRA', 'VARELA VALERA', '29', '01', '2015', 'F', 'Hijo(a)', 'Ninguna', '01'),
(11, 1404, 'V-', 'MARIANA DEL CARMEN', 'MARIN DE VALERA', '10', '04', '1951', 'F', 'Madre', 'Ninguna', '02'),
(12, 1547, 'V-', 'YORKYI ARTURO', 'VEGA MORON', '19', '05', '1971', 'M', 'Conyugue', 'Ninguna', '02'),
(13, 1547, 'V-', 'CARMEN RAMONA', 'BASTIDAS GONZALEZ', '07', '03', '1952', 'F', 'Madre', 'Ninguna', '03'),
(14, 1547, 'V-', 'RAFAEL DARIO', 'BRICEÑO GARCIA', '21', '02', '1952', 'M', 'Padre', 'Ninguna', '04'),
(15, 988, 'V-', 'MARIA IRENE', 'FERNANDEZ DE HERNANDEZ', '16', '09', '1937', 'F', 'Madre', 'Ninguna', '01'),
(16, 853, 'V-', 'MARIANGEL DANIELA', 'SALAS CASTELLANOS', '19', '11', '2002', 'F', 'Hijo(a)', 'Ninguna', '01'),
(17, 853, 'V-', 'DANIEL ALEJANDRO', 'TERAN CASTELLANOS', '23', '07', '1994', 'M', 'Hijo(a)', 'Mental', '02'),
(18, 853, 'V-', 'MARIA ANTONIA', 'PIMENTEL', '01', '09', '1950', 'F', 'Madre', 'Ninguna', '03'),
(19, 853, 'V-', 'JOSE ANDRES', 'CASTELLANOS', '03', '09', '1942', 'M', 'Padre', 'Ninguna', '04'),
(20, 1358, 'V-', 'ASUNCION DEL CARMEN', 'TORRES MORILLO', '17', '05', '1950', 'F', 'Madre', 'Ninguna', '01'),
(21, 1465, 'V-', 'JESUS DAVID', 'PAZ LEAL', '09', '04', '2001', 'M', 'Hijo(a)', 'Ninguna', '01'),
(22, 1360, 'V-', 'DILIA', 'RAMIREZ', '26', '05', '1953', 'F', 'Madre', 'Ninguna', '01'),
(23, 1277, 'V-', 'SAMUEL ALEJANDRO', 'LEAL GRATEROL', '19', '01', '2002', 'M', 'Hijo(a)', 'Ninguna', '01'),
(24, 291, 'V-', 'DANIEL EDUARDO', 'GUIÑAN BECERRA', '16', '06', '1999', 'M', 'Hijo(a)', 'Ninguna', '01'),
(25, 291, 'V-', 'ADRIAN ANTONIO', 'GUIÑAN BECERRA', '30', '05', '2001', 'M', 'Hijo(a)', 'Ninguna', '02'),
(26, 291, 'V-', 'ORALIA DEL CARMEN', 'BECERRA DE GUIÑAN', '18', '05', '1972', 'F', 'Conyugue', 'Ninguna', '03'),
(27, 476, 'V-', 'JOSE MARIO', 'VIERA', '08', '12', '1953', 'M', 'Padre', 'Ninguna', '01'),
(28, 476, 'V-', 'FANY COROMOTO', 'CABRITA DE VIERA', '30', '09', '1957', 'F', 'Madre', 'Ninguna', '02'),
(29, 476, 'V-', 'MARIA BETZABE', 'LOBO BRICEÑO', '14', '01', '1991', 'F', 'Conyugue', 'Ninguna', '03'),
(30, 1426, 'V-', 'DIGNA', 'MORILLO', '11', '10', '1957', 'F', 'Madre', 'Ninguna', '01'),
(31, 783, 'V-', 'DELIA RAMONA ', 'MEJIA', '27', '07', '1944', 'F', 'Madre', 'Ninguna', '01'),
(32, 783, 'V-', 'EDUARDO RAMON', 'SEQUEIRA SMITH', '17', '04', '1960', 'M', 'Conyugue', 'Ninguna', '02'),
(33, 1168, 'V-', 'MATILDE ANTONIA', 'LOPEZ DE PEÑA', '04', '04', '1941', 'F', 'Madre', 'Ninguna', '01'),
(34, 1168, 'V-', 'MARILYN', 'ARANGURE', '25', '09', '1991', 'F', 'Conyugue', 'Ninguna', '02'),
(35, 1365, 'V-', 'YARENNY LINISCATCHI', 'VARGAS CASTELLANOS', '27', '07', '1993', 'F', 'Hijo(a)', 'Ninguna', '01'),
(36, 1365, 'V-', 'YAIRENNY KIMBERLY', 'VARGAS CASTELLANOS', '25', '10', '1995', 'F', 'Hijo(a)', 'Ninguna', '02'),
(37, 1547, 'V-', 'GIORGIANNA ANTHONELLA', 'VEGA BRICEÑO', '16', '06', '2012', 'F', 'Hijo(a)', 'Ninguna', '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargos` varchar(10) NOT NULL,
  `numeroc` varchar(10) NOT NULL,
  `nombrec` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase_reposo`
--

CREATE TABLE `clase_reposo` (
  `id_clase_reposo` varchar(10) NOT NULL,
  `codigo_tipo_reposo` varchar(10) NOT NULL,
  `descripcion` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `cedula` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dia` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `mes` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ano` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `discapacidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `gradoinstruccion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `profesion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `numerof` int(4) NOT NULL,
  `fechaingreso` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombrec` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `numerou` int(5) NOT NULL,
  `area` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nomina` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `turno` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`cedula`, `nombre`, `direccion`, `telefono`, `sexo`, `estado`, `dia`, `mes`, `ano`, `discapacidad`, `gradoinstruccion`, `profesion`, `numerof`, `fechaingreso`, `nombrec`, `categoria`, `numerou`, `area`, `nomina`, `turno`) VALUES
('V-', 'ALEXIS BENITEZ', 'TOROCOCO MUNICIPIO CANDELARIA', '02725110427', 'M', 'CASADO(A)', '21', '10', '1959', 'Ninguna', 'Básica', 'Ninguno', 1, '13-12-1980', 'OPERADOR DE MAQUINARIA PESADA III', 'Obrero', 11101, 'Operativa', 'Nómina Semanal', 'Rotativo'),
('V-', 'ERNESTO FRIAS', 'LAS LLANADAS, SECTOR EL BOSQUE. MUNICIPIO CANDELARIA', '04267726041', 'M', 'SOLTERO(A)', '26', '04', '1956', 'Ninguna', 'Básica', 'Ninguno', 4, '19-03-1981', 'OPERADOR DE MAQUINARIA PESADA III TURNO', 'Obrero', 11105, 'Operativa', 'Nómina Semanal', 'Rotativo'),
('V-', 'EULOGIO GIL', 'CRUZ VERDE TOROCOCO. MUNICIPIO CANDELARIA', '02728089128', 'M', 'CASADO(A)', '11', '03', '1955', 'Ninguna', 'Básica', 'Ninguno', 6, '27-05-1981', 'ANALISTA QUIMICO II', 'Obrero', 11207, 'Operativa', 'Nómina Semanal', 'Rotativo'),
('V-', 'RAMON MATERANO', 'SECTOR EL PARAISO MONAY. MUNICIPIO PAMPAN', '04167780434', 'M', 'CASADO(A)', '01', '02', '1953', 'Ninguna', 'Básica', 'Ninguno', 7, '06-07-1981', 'AYUDANTE DE PERFORACION', 'Obrero', 11101, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'JUANA CASTELLANOS', 'LOS SILOS SECTORSAN RAFAEL. MUNICIPIO CANDELARIA', '04121637180', 'F', 'CASADO(A)', '25', '11', '1962', 'Ninguna', 'Bachiller', 'Ninguno', 9, '24-09-1981', 'ANALISTA DE RECURSOS HUMANOS', 'Administrativa', 12007, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'MARCOS ARRAIZ', 'CARRETERA PANAMERICANA, MUNICIPIO CARACHE', '00000000000', 'M', 'SOLTERO(A)', '12', '12', '1953', 'Ninguna', 'Bachiller', 'Ninguno', 11, '24-11-1981', 'OPERADOR DE ENSACADO', 'Obrero', 11106, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'PEÑA LOPEZ JHONNY JOSE', 'AV. PRINCIPAL DE SAN GENARO. SECTOR EL CAMBULLON. MUNICIPIO SAN RAFAEL DE CARVAJAL', '04166760220', 'M', 'CASADO(A)', '09', '10', '1979', 'Ninguna', 'Técnico', 'Superior', 1168, '16-08-2010', 'ELECTRICISTA I', 'Operativo', 11218, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'JOSE DE LA CONCEPCION VASQUEZ', 'EL CERRITO TOROCOCO. MUNICIPIO CANDELARIA', '04161754111', 'M', 'CASADO(A)', '20', '03', '1955', 'Ninguna', 'Bachiller', 'Ninguno', 12, '24-11-1981', 'OPERADOR DE TRITURACION III', 'Obrero', 11102, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'LEAL GRATEROL SULEIMA DEL CARMEN', 'EL CUMBE SECTOR EL LLANO, CASA S/N. CUICAS. MUNICIPIO CARACHE', '02722051082', 'F', 'SOLTERO(A)', '14', '08', '1969', 'Ninguna', 'Profesional', 'Licenciado', 1277, '21-10-2014', 'JEFE DE PRESUPUESTO', 'Administrativa', 12011, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'CAMPOS DE DAVILA DORIS EVELIN', 'CALLE COMERCIO. SECTOR COMERCIO CASA 1/100 CHEJENDE. MUNICIPIO CANDELARIA', '04168779591', 'F', 'CASADO(A)', '23', '10', '1973', 'Ninguna', 'Profesional', 'Licenciado', 1286, '23-01-2012', 'JEFE DE INFORMACION PROMOCION Y PARTICIPACION CIUDADANA', 'Administrativa', 12010, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'RAFAEL ANDRADE', 'MITON SECTOR LA GLORIA. MUNICIPIO CANDELARIA', '04162701641', 'M', 'CASADO(A)', '22', '09', '1956', 'Ninguna', 'Básica', 'Ninguno', 13, '30-11-1981', 'CHOFER III', 'Obrero', 11202, 'Administrativa', 'Nómina Semanal', 'Normal'),
('V-', 'CAMPOS TORRES RIXIO MANUEL', 'CALLE PRINCIPAL TORORCOCO. CASA S/N. MUNICIPIO CANDELARIA', '04120620983', 'M', 'SOLTERO(A)', '18', '01', '1982', 'Ninguna', 'Profesional', 'Ingeníero', 1358, '26-06-2012', 'JEFE DE SISTEMAS E INFORMACION', 'Administrativa', 12006, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'MONTILLA RAMIREZ ENGELBERTH ENRIQUE', 'URB. MIRANDA, PLATA II. MUNICIPIO VALERA', '02712211713', 'M', 'SOLTERO(A)', '19', '09', '1974', 'Ninguna', 'Profesional', 'Ingeníero', 1360, '16-07-2012', 'JEFE DE CANTERA Y TRITURACION', 'Operativo', 11101, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'CASTELLANOS CASTILLO MARLIN', 'LAS LLANADAS, SECTOR LA QUESERA. MUNICIPIO CANDELARIA', '04247170604', 'F', 'SOLTERO(A)', '16', '10', '1971', 'Ninguna', 'Profesional', 'Licenciado', 1365, '02-08-2012', 'COORDINADOR', 'Operativo', 21206, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'MARIANA ANDREINA VALERA MARIN', 'MONAY, CALLE SAN RAFAEL. MUNICIPIO PAMPAN', '04166751357', 'F', 'SOLTERO(A)', '19', 'Mayo', '1992', 'Ninguna', 'Técnico', 'Superior', 1404, '10-12-2013', 'JEFA I TALENTO HMANO', 'Administrativa', 21206, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'TRIMARCHI MORILLO YEAN CARLA', 'AV. BOLIVAR, CALLEJO SAN JOSE. EDIFICIO PARAGASA. MUNICIPIO VALERA', '02712312161', 'F', 'SOLTERO(A)', '29', '07', '1982', 'Ninguna', 'Profesional', 'Ingeníero', 1426, '07-12-2012', 'JEFE (E) DE CONTROL AMBIENTAL', 'Administrativa', 11211, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'LEAL GRATEROL YARITZA COROMOTO', 'EL CUMBE SECTOR EL LLANO, CASA S/N. CUICAS. MUNICIPIO CARACHE', '02722051082', 'F', 'SOLTERO(A)', '02', '04', '1968', 'Ninguna', 'Técnico', 'Superior', 1465, '29-04-2013', 'JEFE DE ORGANIZACION Y METODOS', 'Administrativa', 12011, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'BRICEÑO BASTIDAS DAYANNA KARINA', 'CALLE EL CALVARIO. SECTOR EL CALVARIO. PAMPAN', '04261704620', 'F', 'CASADO(A)', '03', '04', '1984', 'Ninguna', 'Profesional', 'Licenciado', 1547, '28-04-2014', 'COORD. DE EDUCACION', 'Administrativa', 12007, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'ANTONIO DURAN', 'TOROCOCO MUNICIPIO CANDELARIA', '00000000000', 'M', 'SOLTERO(A)', '23', '05', '1953', 'Ninguna', 'Básica', 'Ninguno', 17, '08-01-1982', 'OPERADOR DE MAQUINARIA PESADA III TURNO', 'Obrero', 11103, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'MANUEL ALEJANDRO MONTILLA GIL', 'PAMPANITO II', '04168723255', 'M', 'SOLTERO(A)', '13', '09', '1995', 'Ninguna', 'Técnico', 'Superior', 1848, '09-01-2017', 'AUXILIAR', 'Administrativa', 11216, 'Administrativa', 'Nómina Contratado', 'Normal'),
('V-', 'FREDDY MACIAS', 'CALLE SAN JOSE FLOR DE PATRIA. MUNICIPIO PAMPAN', '02726781013', 'M', 'SOLTERO(A)', '08', '10', '1955', 'Ninguna', 'Bachiller', 'Ninguno', 22, '15-02-1982', 'ANALISTA FISICO II', 'Operativo', 11207, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'DUGLAS MACIAS', 'CALLE SAN JOSE FLOR DE PATRIA. MUNICIPIO PAMPAN', '02726781013', 'M', 'SOLTERO(A)', '04', '06', '1957', 'Ninguna', 'Bachiller', 'Ninguno', 24, '19-02-1982', 'HORNERO III', 'Obrero', 11104, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'CHAVEZ BRICEÑO EDECIO ALBERTO', 'CALLE LAS FLORES. CASA S/N. CUICAS. CARACHE', '02729894062', 'M', 'CASADO(A)', '31', '01', '1954', 'Ninguna', 'Profesional', 'Abogado', 243, '18-12-1995', 'JEFE DE DENUNCIASRECLAM Y SUG', 'Administrativa', 12010, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'BENITO TORRES', 'EL HELECHAL DE TOROCOCO. MUNICIPIO CANDELARIA', '02725110430', 'M', 'SOLTERO(A)', '12', '12', '1948', 'Ninguna', 'Básica', 'Ninguno', 29, '01-06-1982', 'CARPINTERO', 'Obrero', 11208, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'GUIÑAN BENCOMO SAUL DE JESUS', 'URB. JOSEFINA DE PAZ. CASA A/7 CALLE \"C\" SECTOR SAN BARTOLO. MUNICIPIO CARVAJAL', '04263706247', 'M', 'CASADO(A)', '21', '11', '1968', 'Ninguna', 'Profesional', 'Ingeníero', 291, '03-05-1999', 'PROFESIONAL DE PROYECTO', 'Operativo', 11205, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'JACOBO RAMIREZ', 'MONAY CALLE LA PAZ, SECTOR MARACAIBITO. MUNICIPIO CANDELARIA', '02726589315', 'M', 'SOLTERO(A)', '24', '12', '1958', 'Ninguna', 'Bachiller', 'Ninguno', 31, '19-07-1982', 'MOLINERO III', 'Obrero', 11103, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'LUIS PERDOMO', 'URB. SAN JOSE EL CRUCE VIA BOCONO. MUNICIPIO PAMPAN', '04162703703', 'M', 'SOLTERO(A)', '21', '02', '1956', 'Ninguna', 'Bachiller', 'Ninguno', 39, '27-09-1982', 'ANALISTA QUIMICO I', 'Operativo', 11207, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'HECTOR PINTO', 'LOS SILOS. PARROQUIA CHEJENDE. MUNICIPIO CANDELARIA', '04165745541', 'M', 'SOLTERO(A)', '03', '12', '1960', 'Ninguna', 'Básica', 'Ninguno', 40, '14-02-1983', 'OPERADOR DE ENSACADO', 'Obrero', 11106, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'ORALIO MATERANO', 'MONAY, CALLE SAN RAFAEL. MUNICIPIO PAMPAN', '04147412309', 'M', 'CASADO(A)', '25', '10', '1963', 'Ninguna', 'Básica', 'Ninguno', 43, '23-09-1983', 'OPERADOR MAQUINA PESADA I', 'Obrero', 11101, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'JOSE VALERA', 'CALLE COPEY MONAY. MUNICIPIO CANDELARIA', '04267711458', 'M', 'CASADO(A)', '12', '11', '1947', 'Ninguna', 'Básica', 'Ninguno', 44, '07-11-1983', 'OPERADOR MAQUINA PESA.III', 'Obrero', 11101, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'RAFAEL TERAN', 'AVENIDA 3. MUNICIPIO CRISTOBAAL MENDOZA', '02712315686', 'M', 'CASADO(A)', '29', '01', '1948', 'Ninguna', 'Técnico', 'Superior', 45, '16-01-1984', 'JEFE DE TALLER', 'Operativo', 11208, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'VIERA CABRITA RICHARD JAVIER', 'URB. LIBERTADOR PLATA III. VEREDA 10 CASA Nº 2. MUNICIPIO VALERA', '04147358106', 'M', 'CASADO(A)', '03', '12', '1982', 'Ninguna', 'Profesional', 'Ingeníero', 476, '29-06-2005', 'JEFE DE LUBRICACION', 'Operativo', 11208, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'ROJAS REGULO', 'EL TURIAMO. MUNICIPIO CARACHE', '00000000000', 'M', 'SOLTERO(A)', '29', 'Marzo', '1963', 'Ninguna', 'Básica', 'Ninguno', 48, '07-05-1984', 'OPERADOR MAQUINARIA EMPAQUE', 'Obrero', 11106, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'ALFONSO DABOIN', 'LOS SILOS PARTE BAJA, BARRIO NUEVO. MUNICIPIO CANDELARIA', '04165769320', 'M', 'CASADO(A)', '25', '12', '1962', 'Ninguna', 'Bachiller', 'Ninguno', 52, '24-10-1984', 'OPERADOR DE TRITURACION III', 'Obrero', 11102, 'Operativa', 'Nómina Semanal', 'Rotativo'),
('V-', 'DOMINGUEZ    MIGUEL', 'CARRETERA TRASANDINA SECTOR PUENTE CARACHE. MUNICIPIO CARACHE', '02724151024', 'M', 'CASADO(A)', '08', 'Noviembre', '1957', 'Ninguna', 'Básica', 'Ninguno', 55, '15-01-1985', 'OPERADOR DE CAMION', 'Obrero', 11211, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'FREDDY ANDRADE', 'AV PENSIL DETRÁS DE LA ALCALDIA', '02728080171', 'M', 'CASADO(A)', '22', '07', '1958', 'Ninguna', 'Técnico', 'Superior', 56, '28-01-1985', 'SUPERVISOR', 'Operativo', 11207, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'FREDDY BRAVO', 'SABANA LARGA. MUNICIPIO CHEJENDE', '02729951110', 'M', 'SOLTERO(A)', '01', '10', '1957', 'Ninguna', 'Básica', 'Ninguno', 63, '15-04-1985', 'ANALISTA FISICO II', 'Operativo', 11207, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'GIMENEZ ALBERTO', 'SANTA ROSA DE MONAY ', '04147272345', 'M', 'SOLTERO(A)', '26', '09', '1964', 'Ninguna', 'Básica', 'Ninguno', 65, '19-08-1985', 'OPERADOR DE ENSACADO', 'Obrero', 11106, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'JOSE HIDALGO', 'EL CAÑAFISTOLE. MUNICIPIO CARACHE', '02729951272', 'M', 'SOLTERO(A)', '04', '02', '1954', 'Ninguna', 'Básica', 'Ninguno', 66, '19-08-1985', 'OPERADOR MAQUINARIA EMPAQUE', 'Obrero', 11106, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'COLMENRARES EDUARDO', 'CALLE DEMOCRACIA. MUNICIPIO CADELARIA', '02728089660', 'M', 'SOLTERO(A)', '29', '12', '1962', 'Ninguna', 'Básica', 'Ninguno', 67, '19-08-1985', 'OPERADOR MAQUINARIA EMPAQUE', 'Obrero', 11106, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'VICTOR CHACON', 'VALERA. MUNICIPIO VALERA', '00000000000', 'M', 'CASADO(A)', '01', '01', '1953', 'Ninguna', 'Básica', 'Ninguno', 68, '29-10-1985', 'JEFE MTTO ELECTR MOL Y DESP', 'Operativo', 11218, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'GONZALEZ EMIRO', 'LAS LLANADAS. MUNICIPIO CANDELARIA', '04163771378', 'M', 'SOLTERO(A)', '08', '08', '1966', 'Ninguna', 'Básica', 'Ninguno', 69, '11-11-1985', 'MOLINERO III', 'Obrero', 11103, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'CASTELLANOS CLEMENTE', 'LAS LLANADAS DE MONAY. MUNICIPIO CANDELARIA', '02724148555', 'M', 'SOLTERO(A)', '14', '11', '1954', 'Ninguna', 'Básica', 'Ninguno', 71, '08/04/1986', 'AYUDANTE ELECTRICIDAD', 'Obrero', 11218, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'MARIN TOLEDO', 'EL BATATILLO. MUNICIPIO CANDELARIA', '04147262109', 'M', 'CASADO(A)', '05', '08', '1965', 'Ninguna', 'Básica', 'Ninguno', 72, '08/04/1986', 'LABORATORISTA PRACTICO II', 'Obrero', 11207, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'MONTILLA IRALIDE', 'URBANIZACION JOSE FELIX RIVAS. MUNICIPIO PAMPAN', '04167707375', 'F', 'SOLTERO(A)', '08', '03', '1970', 'Ninguna', 'Técnico', 'Medio', 76, '01-09-1986', 'DIBUJANTE', 'Administrativa', 11205, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'MEJIAS MELIDA ROSA', 'CALLE PRINCIPAL, SECTOR LA LLANADAS CASA S/N DETRAS DE AMBULATORIO RURAL II. MUNICIPIO CANDELARIA.', '04147318514', 'M', 'SOLTERO(A)', '29', 'Enero', '1969', 'Física', 'Profesional', 'Maestría', 783, '01-01-2007', 'JEFE DE ALMACEN', 'Operativo', 11215, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'RAFAEL VIELMA', 'LAS LLANADAS SECTOR EL BOSQUE. MUNICIPIO CANDELARIA', '04163428395', 'M', 'CASADO(A)', '10', '06', '1951', 'Ninguna', 'Básica', 'Ninguno', 80, '11-11-1986', 'HORNERO III', 'Obrero', 11104, 'Operativa', 'Nómina Semanal', 'Normal'),
('V-', 'ESPINOZA NELSON', 'LA CEIBA CALLE PRINICIPAL. MUNICIPIO LA CEIBA', '04268216591', 'M', 'CASADO(A)', '14', '12', '1958', 'Ninguna', 'Básica', 'Ninguno', 81, '20-01-1987', 'COORDINADOR DEPARTAMENTO MUELLE LA CEIBA', 'Operativo', 13001, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'HECTOR LUIS ROSALES TORRES', 'LOS SILOS. PARROQUIA CHEJENDE. MUNICIPIO CANDELARIA', '04168726365', 'M', 'CASADO(A)', '22', '04', '1981', 'Ninguna', 'Profesional', 'Ingeníero', 842, '01-02-2007', 'JEFE DE MANTENIMIENTO MECACICO ENVASE Y DESPACHO', 'Operativo', 11106, 'Operativa', 'Nómina Empleado', 'Normal'),
('V-', 'CARMEN ELENA CASTELLANOS PIMENTEL', 'MINAS, SECTOR LAS CASITAS. MUNICIPIO CANDELARIA', '04147185336', 'F', 'SOLTERO(A)', '15', '07', '1970', 'Ninguna', 'Profesional', 'Licenciado', 853, '06-02-2007', 'JEFE DE CONTRATACIONES', 'Administrativa', 11215, 'Administrativa', 'Nómina Empleado', 'Normal'),
('V-', 'HERNANDEZ FERNANDEZ DALIA EMIRA', 'URBANIZACION SAN RAFAEL. FLOR DE PATRIA. MUNICIPIO PAMPAN', '04166767871', 'F', 'SOLTERO(A)', '11', '12', '1964', 'Ninguna', 'Técnico', 'Superior', 988, '29-01-2007', 'JEFE GENERAL', 'Administrativa', 11213, 'Administrativa', 'Nómina Empleado', 'Normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hijosinternos`
--

CREATE TABLE `hijosinternos` (
  `cantidad` int(4) NOT NULL,
  `numerof` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `numerofr` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `cedulah` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombreh` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoh` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `diah` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `mesh` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `anoh` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `sexoh` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `discapacidadh` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nidh` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `parentescoh` varchar(7) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patologia`
--

CREATE TABLE `patologia` (
  `id_patologia` int(10) NOT NULL,
  `nombre_patologia` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `patologia`
--

INSERT INTO `patologia` (`id_patologia`, `nombre_patologia`) VALUES
(1, 'Patologia Respiratoria'),
(2, 'Enfermedad Gastrointestinal'),
(3, 'Trastornos del Sistema Nervioso'),
(4, 'Enfermedades del Aparato Urinario'),
(5, 'Trastornos Musc Esqueleticos'),
(6, 'Patologia Ocular'),
(7, 'Trastornos Auditivos'),
(8, 'Enfermedad de la Piel'),
(9, 'Patologia Genital'),
(10, 'Trastornos Cardiovasculares'),
(11, 'Enfermedad Ocupacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_vacacional`
--

CREATE TABLE `pre_vacacional` (
  `id_prevacacional` int(25) NOT NULL,
  `numerof` int(4) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `fecha_salida` varchar(10) NOT NULL,
  `fecha_reintegro` varchar(10) NOT NULL,
  `cita_pre` varchar(25) NOT NULL,
  `cita_post` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pre_vacacional`
--

INSERT INTO `pre_vacacional` (`id_prevacacional`, `numerof`, `cedula`, `nombre`, `fecha_salida`, `fecha_reintegro`, `cita_pre`, `cita_post`) VALUES
(1, 1, 'V-1111111', 'ALEXIS BENITEZ', '5115115', '6564665', 'undefined', 'undefined'),
(2, 1, 'V-1111111', 'ALEXIS BENITEZ', '11111111', '111111111', 'undefined', 'undefined'),
(3, 1, 'V-1111111', 'ALEXIS BENITEZ', '3541654616', '6456456453', 'undefined', 'undefined');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_familiar`
--

CREATE TABLE `registro_familiar` (
  `id_registros_familiar` bigint(20) UNSIGNED NOT NULL,
  `fechacon` date NOT NULL,
  `nombref` varchar(25) NOT NULL,
  `apellidof` varchar(20) NOT NULL,
  `cedulaf` varchar(12) NOT NULL,
  `edadf` varchar(10) NOT NULL,
  `numerof` int(4) NOT NULL,
  `parentesco` varchar(25) NOT NULL,
  `tconsulta` varchar(25) NOT NULL,
  `diagnostico` varchar(300) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `fechan` varchar(20) NOT NULL,
  `patologia` varchar(20) NOT NULL,
  `tpatologia` varchar(20) NOT NULL,
  `sexof` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_familiar`
--

INSERT INTO `registro_familiar` (`id_registros_familiar`, `fechacon`, `nombref`, `apellidof`, `cedulaf`, `edadf`, `numerof`, `parentesco`, `tconsulta`, `diagnostico`, `observacion`, `fechan`, `patologia`, `tpatologia`, `sexof`) VALUES
(1, '2017-09-01', 'DIGNA', 'MORILLO', 'V-', '1', 1426, 'Madre', 'Primera vez', '12', '12', '11-10-1957', '3', '16', 'F'),
(2, '2017-09-16', 'YAIRENNY KIMBERLY', 'VARGAS CASTELLANOS', 'V-', '2', 1365, 'Hijo(a)', 'Primera Vez', '2', '2', '25-10-1995', '10', '49', 'F'),
(3, '2017-09-16', 'YAIRENNY KIMBERLY', 'VARGAS CASTELLANOS', 'V-', '3', 1365, 'Hijo(a)', 'Primera Vez', '\r\n2', '3621', '25-10-1995', '7', '34', 'F'),
(4, '2017-09-05', 'DILIA', 'RAMIREZ', 'V-3908354', '0', 1360, 'Madre', 'Primera Vez', '32', '21', '26-5-1953', '10', '48', 'F'),
(5, '2017-09-15', 'YARENNY LINISCATCHI', 'VARGAS CASTELLANOS', 'V-', '2', 1365, 'Hijo(a)', 'Primera Vez', 'uy', 'uy', '27-7-1993', '7', '34', 'F'),
(6, '2017-09-08', 'YAIRENNY KIMBERLY', 'VARGAS CASTELLANOS', 'V-', '2', 1365, 'Hijo(a)', 'Primera Vez', '45', '8', '25-10-1995', '10', '46', 'F'),
(7, '2017-09-07', 'LUIS FELIPE', 'DAVILA PERDOMO', 'V-5793632', '1', 1286, 'Conyugue', 'Consecutiva', 'dw', 'dw', '09-10-1965', '7', '34', 'M'),
(8, '2017-09-14', 'JOSE MARIO', 'VIERA', 'V-', '1', 476, 'Padre', 'Primera Vez', 'y', 'y', '08-12-1953', '3', '14', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_reposos`
--

CREATE TABLE `registro_reposos` (
  `id_reposos` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `id_numerof` varchar(4) NOT NULL,
  `unidades` varchar(10) NOT NULL,
  `diagnostico` varchar(25) NOT NULL,
  `fecha_inicio_reposo` varchar(10) NOT NULL,
  `desde` varchar(10) NOT NULL,
  `hasta` varchar(10) NOT NULL,
  `reintegro` varchar(25) NOT NULL,
  `id_reposo` varchar(10) NOT NULL,
  `tipo_reposo` varchar(10) NOT NULL,
  `clase_reposo` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_trabajador`
--

CREATE TABLE `registro_trabajador` (
  `id_registro_tabajador` varchar(25) NOT NULL,
  `numerof` int(4) NOT NULL,
  `hora` datetime NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `consulta` varchar(25) NOT NULL,
  `unidades` varchar(10) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `accidentes` varchar(30) NOT NULL,
  `motivo_consulta` varchar(50) NOT NULL,
  `observacion` varchar(50) NOT NULL,
  `id_patologia` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reposo`
--

CREATE TABLE `reposo` (
  `id_reposo` varchar(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_patologia`
--

CREATE TABLE `tipo_patologia` (
  `id_tipo_patologia` int(10) UNSIGNED NOT NULL,
  `id_patologia` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_patologia`
--

INSERT INTO `tipo_patologia` (`id_tipo_patologia`, `id_patologia`, `nombre`) VALUES
(1, 1, 'Cuadros Virales'),
(2, 1, 'Faringo-amigdalitis'),
(3, 1, 'Rinitis-sinusitis'),
(4, 1, 'Bronquitis'),
(5, 1, 'Neumonia'),
(6, 1, 'Asma'),
(7, 1, 'Laringo-traqueitis'),
(8, 2, 'Enf. Acido Peptica'),
(9, 2, 'Diarreas'),
(10, 2, 'Parasitosis'),
(11, 2, 'Colitis'),
(12, 2, 'Sind. Hemorroidal'),
(13, 3, 'Trast. Psiquiatricos'),
(14, 3, 'Cefalea'),
(15, 3, 'Neuritis'),
(16, 3, 'Cuadro Ansiosos'),
(17, 3, 'Trast. Sueño y Vigilia'),
(18, 4, 'Infeccion Urinaria'),
(19, 4, 'Colico Nefritico'),
(20, 4, 'Uretritis'),
(21, 4, 'Inespecifica'),
(22, 5, 'Cuello'),
(23, 5, 'Miem Superiores'),
(24, 5, 'Dorsalgias'),
(25, 5, 'Lumbagos'),
(26, 5, 'Miem Inferiores'),
(27, 5, 'Fascitis Plantar'),
(28, 6, 'Conjuntivitis'),
(29, 6, 'Blefaritis'),
(30, 6, 'Pterigon'),
(31, 6, 'Trm. Ocular'),
(32, 6, 'Otras'),
(33, 7, 'Otitis'),
(34, 7, 'Micosis CAE'),
(35, 7, 'Sindrome Vertigo'),
(36, 7, 'Tinnitus o Acufenos'),
(37, 7, 'C.E. Cond. Auditivo'),
(38, 8, 'Dermatitis'),
(39, 8, 'Piodermiti-Celulitis'),
(40, 8, 'Dermatomicosis'),
(41, 8, 'Alopecia'),
(42, 9, 'Varicocele'),
(43, 9, 'Espermatocele'),
(44, 9, 'Infecciosa'),
(45, 10, 'Hipertension Arterial'),
(46, 10, 'Cardiopatia Isquemica'),
(47, 10, 'Insuficiencia Circulatoria'),
(48, 10, 'Flebitis'),
(49, 10, 'Dislipidemia'),
(50, 11, 'HipoAcusia'),
(51, 11, 'Intoxica-Envenena'),
(52, 11, 'Enf. Respiratoria'),
(53, 11, 'Dermatitis Atopica'),
(54, 11, 'C.E ojo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_reposo`
--

CREATE TABLE `tipo_reposo` (
  `id_tipo_reposo` varchar(10) NOT NULL,
  `codigo_clase_reposo` varchar(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `numerou` int(5) NOT NULL,
  `nombreu` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`numerou`, `nombreu`) VALUES
(11101, 'EXTRACCION MATERIA PRIMA'),
(11102, 'TRITURACION MATERIA PRIMA'),
(11103, 'MOLIENDA DE CRUDO'),
(11104, 'CLINKERIZACION'),
(11105, 'MOLIENDA DE CEMENTO'),
(11106, 'EMPAQUE DE CEMENTO'),
(11201, 'SALUD OCUPACIONAL'),
(11202, 'SERVICIOS GENERALES Y TRANSPORTE'),
(11203, 'PREVENCION Y CONTROL DE PERDIDA'),
(11204, 'ALMACEN'),
(11205, 'PROYECTOS'),
(11206, 'GERENCIA DE OPERACIONES'),
(11207, 'DIRECCION CONTROL DE CALIDAD'),
(11208, 'MANTENIMIENTO MECANICO'),
(11209, 'ESTACION DE BOMBEO TIMACHI'),
(11210, 'GEOLOGIA'),
(11211, 'MANEJO AMBIENTAL'),
(11212, 'GENERACION DE ENERGIA'),
(11213, 'SEGURIDAD INDUSTRIAL'),
(11214, 'COMEDOR'),
(11215, 'ABASTECIMIENTO Y LOGISTICA'),
(11216, 'SALUD INTEGRAL '),
(11217, 'GERENCIA DE TRASPORTE'),
(11218, 'MANTENIMIENTO ELECTRICO'),
(11219, 'MANTENIMIENTO DE MAQUINARIA PESADA'),
(12001, 'CONSULTARIA JURIDICA'),
(12003, 'AUDITORIA'),
(12004, 'ADMINISTRACION Y FINANZAS'),
(12005, 'DIRECCION DE FINANZAS'),
(12006, 'TECNOLOGIA'),
(12007, 'TALENTO HUMANO'),
(12008, 'ADMINISTRACION DE PERSONAL'),
(12009, 'DESARROLLO ORGANIZACIONAL'),
(12010, 'ATENCION AL CIUDADANO'),
(12011, 'DIRECCION DE PLANIFICACION Y PRESUPUESTO'),
(12013, 'PRESIDENCIA'),
(12014, 'CULTURA'),
(12015, 'UNIFAES'),
(12016, 'RELACIONES INSTITUCIONALES Y PROGRAMAS SOCIALES'),
(12017, 'BIENES '),
(13001, 'MUELLE LA CEIBA'),
(13002, 'DISTRIBUCION Y COLOCACION DE CEMENTO Y CONCRETO'),
(13003, 'PUNTO DE VENTA DIRECTO - CEMENTO'),
(13004, 'ENTREGA DE CEMENTO'),
(21103, 'DISENO DE CONCRETO'),
(21206, 'CONCRETO'),
(21207, 'CONTROL DE CALIDAD DE CONCRETO'),
(21208, 'MANTENIMIENTO INTEGRAL'),
(21213, 'SEGURIDAD INDUSTRIAL CONCRETO'),
(23002, 'DISTRIBUCION Y COLOCACION DE CONCRETO'),
(23004, 'ENTREGA DE CONCRETO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedulausuario` varchar(12) NOT NULL,
  `nombrecompleto` varchar(60) NOT NULL,
  `nombreusuario` varchar(15) NOT NULL,
  `clave` longtext NOT NULL,
  `tipousuario` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedulausuario`, `nombrecompleto`, `nombreusuario`, `clave`, `tipousuario`) VALUES
('2123213', 'ELIAS CARDONA', 'ecardona', '132', 'administrador'),
('123423', 'DAYANA BRICEÑO', 'dbriceño', '123', 'administrador'),
('2324', ' Tecnologia', 'superusuario', '1235', 'superusuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargafamiliar`
--
ALTER TABLE `cargafamiliar`
  ADD PRIMARY KEY (`cedulac`),
  ADD UNIQUE KEY `cantidad` (`cantidad`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargos`);

--
-- Indices de la tabla `clase_reposo`
--
ALTER TABLE `clase_reposo`
  ADD PRIMARY KEY (`id_clase_reposo`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `patologia`
--
ALTER TABLE `patologia`
  ADD PRIMARY KEY (`id_patologia`);

--
-- Indices de la tabla `pre_vacacional`
--
ALTER TABLE `pre_vacacional`
  ADD PRIMARY KEY (`id_prevacacional`);

--
-- Indices de la tabla `registro_familiar`
--
ALTER TABLE `registro_familiar`
  ADD PRIMARY KEY (`id_registros_familiar`);

--
-- Indices de la tabla `registro_reposos`
--
ALTER TABLE `registro_reposos`
  ADD PRIMARY KEY (`id_reposos`);

--
-- Indices de la tabla `registro_trabajador`
--
ALTER TABLE `registro_trabajador`
  ADD PRIMARY KEY (`id_registro_tabajador`);

--
-- Indices de la tabla `reposo`
--
ALTER TABLE `reposo`
  ADD PRIMARY KEY (`id_reposo`);

--
-- Indices de la tabla `tipo_patologia`
--
ALTER TABLE `tipo_patologia`
  ADD PRIMARY KEY (`id_tipo_patologia`);

--
-- Indices de la tabla `tipo_reposo`
--
ALTER TABLE `tipo_reposo`
  ADD PRIMARY KEY (`id_tipo_reposo`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`numerou`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedulausuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `patologia`
--
ALTER TABLE `patologia`
  MODIFY `id_patologia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `pre_vacacional`
--
ALTER TABLE `pre_vacacional`
  MODIFY `id_prevacacional` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `registro_familiar`
--
ALTER TABLE `registro_familiar`
  MODIFY `id_registros_familiar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tipo_patologia`
--
ALTER TABLE `tipo_patologia`
  MODIFY `id_tipo_patologia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
