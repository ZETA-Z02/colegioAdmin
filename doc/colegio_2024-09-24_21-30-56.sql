# ************************************************************
# Antares - SQL Client
# Version 0.7.24
# 
# https://antares-sql.app/
# https://github.com/antares-sql/antares
# 
# Host: 127.0.0.1 (Ubuntu 22.04 10.6.18)
# Database: colegio
# Generation time: 2024-09-24T21:31:14-05:00
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table administrativo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `administrativo`;

CREATE TABLE `administrativo` (
  `idadministrativo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellidos` varchar(160) NOT NULL,
  `fecNacimiento` date NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `cargo` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idadministrativo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `administrativo` WRITE;
/*!40000 ALTER TABLE `administrativo` DISABLE KEYS */;

INSERT INTO `administrativo` (`idadministrativo`, `nombre`, `apellidos`, `fecNacimiento`, `foto`, `cargo`, `telefono`, `email`) VALUES
	(1, "Edgar", "Administrador", "1978-04-15", "", "Director", "935017466", "edgarapazac@gmail.com");

/*!40000 ALTER TABLE `administrativo` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table alumnos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `alumnos`;

CREATE TABLE `alumnos` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellidos` varchar(160) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `fecNacimiento` date NOT NULL,
  `foto` varchar(200) NOT NULL,
  `ciudad` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nombrepadre` varchar(200) NOT NULL,
  `telefonopadre` varchar(20) NOT NULL,
  `emailpadre` varchar(100) NOT NULL,
  PRIMARY KEY (`idalumno`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;

INSERT INTO `alumnos` (`idalumno`, `nombre`, `apellidos`, `codigo`, `fecNacimiento`, `foto`, `ciudad`, `telefono`, `email`, `nombrepadre`, `telefonopadre`, `emailpadre`) VALUES
	(1, "Edgar", "Alumno", "324734", "1978-04-15", "public/img/jhon.jpg", "Puno", "935017466", "edgarapazac@gmail.com", "Leonidas", "926537263", "leonidasapaza@gmail.com"),
	(2, "Clara", "Peralta", "204386", "2005-12-11", "public/img/face20.jpg", "Puno", "553826531", "Clara@gmail.com", "Nuria", "865413719", "Nuria@gmail.com"),
	(3, "Lorena", "Guzmán", "143568", "2008-02-11", "public/img/face5.jpg", "Ica", "934555202", "Lorena@gmail.com", "Laura", "591271478", "Laura@gmail.com"),
	(4, "Alicia", "Herrera", "674955", "2001-06-04", "public/img/face16.jpg", "Lima", "243181534", "Alicia@gmail.com", "Beatriz", "111672790", "Beatriz@gmail.com"),
	(5, "Alicia", "Jiménez", "208845", "2008-02-22", "public/img/face2.jpg", "Juliaca", "368149874", "Alicia@gmail.com", "Nuria", "935453681", "Nuria@gmail.com"),
	(6, "Martín", "Flores", "350875", "2004-10-04", "public/img/face4.jpg", "Puno", "167875671", "Martín@gmail.com", "Carmen María", "536476125", "Carmen María@gmail.com"),
	(7, "Martín", "Rodríguez", "557424", "2009-07-28", "public/img/face18.jpg", "Cajamarca", "835879838", "Martín@gmail.com", "Beatriz", "137583437", "Beatriz@gmail.com"),
	(8, "Martín", "Sánchez", "149187", "2006-08-09", "public/img/face14.jpg", "Tumbes", "387754216", "Martín@gmail.com", "Juan Carlos", "579875025", "Juan Carlos@gmail.com"),
	(9, "Cristina", "Díaz", "482512", "2002-03-25", "public/img/face15.jpg", "Ica", "143834214", "Cristina@gmail.com", "Lidia", "716444231", "Lidia@gmail.com"),
	(10, "Gonzalo", "Soto", "374170", "2006-10-08", "public/img/face20.jpg", "Juliaca", "709450032", "Gonzalo@gmail.com", "Rubén", "996940434", "Rubén@gmail.com"),
	(11, "Luis", "Miranda", "171843", "2002-06-01", "public/img/face13.jpg", "Puno", "713163483", "Luis@gmail.com", "Sandra", "688985991", "Sandra@gmail.com"),
	(12, "Jorge", "Aguilar", "201793", "2009-05-17", "public/img/face7.jpg", "Chiclayo", "515932212", "Jorge@gmail.com", "Pedro", "777935766", "Pedro@gmail.com"),
	(13, "Alicia", "Vázquez", "641824", "2004-07-01", "public/img/face15.jpg", "Tacna", "110218358", "Alicia@gmail.com", "Pedro", "354713737", "Pedro@gmail.com"),
	(14, "Alba", "Vargas", "739431", "2005-11-19", "public/img/face15.jpg", "Lima", "118509861", "Alba@gmail.com", "Alba", "777042803", "Alba@gmail.com"),
	(15, "Javier", "Morales", "386075", "2008-05-11", "public/img/face5.jpg", "Puno", "172638170", "Javier@gmail.com", "Nuria", "686088929", "Nuria@gmail.com"),
	(16, "Lidia", "García", "986596", "2004-09-01", "public/img/face2.jpg", "Iquitos", "203171218", "Lidia@gmail.com", "Pablo", "621809165", "Pablo@gmail.com"),
	(17, "Sonia", "Sánchez", "551242", "2005-10-08", "public/img/face11.jpg", "Tumbes", "679332455", "Sonia@gmail.com", "Miriam", "224807813", "Miriam@gmail.com"),
	(18, "Nuria", "Castro", "236011", "2005-06-01", "public/img/face20.jpg", "Juliaca", "902451418", "Nuria@gmail.com", "Raul", "108964509", "Raul@gmail.com"),
	(19, "Juan Carlos", "Martínez", "997095", "2001-11-28", "public/img/face7.jpg", "Ica", "809847264", "Juan Carlos@gmail.com", "Fernando", "242150025", "Fernando@gmail.com"),
	(20, "Luis", "Mendoza", "628462", "2003-06-02", "public/img/face5.jpg", "Juliaca", "658929648", "Luis@gmail.com", "Alicia", "735085577", "Alicia@gmail.com"),
	(21, "Alba", "Romero", "172109", "2006-07-26", "public/img/face11.jpg", "Ayacucho", "225975434", "Alba@gmail.com", "Julio", "485960186", "Julio@gmail.com"),
	(22, "Pedro", "Ortega", "380325", "2004-11-21", "public/img/face12.jpg", "Chimbote", "933473607", "Pedro@gmail.com", "Roberto", "853184747", "Roberto@gmail.com"),
	(23, "Javier", "Cruz", "670453", "2009-10-01", "public/img/face17.jpg", "Ica", "722394637", "Javier@gmail.com", "Pablo", "421499181", "Pablo@gmail.com"),
	(24, "Lidia", "Martínez", "669464", "2000-08-26", "public/img/face19.jpg", "Juliaca", "315405983", "Lidia@gmail.com", "Julio", "452526936", "Julio@gmail.com"),
	(25, "Carmen María", "Aguilar", "376381", "2005-03-09", "public/img/face6.jpg", "Tacna", "549012645", "Carmen María@gmail.com", "Javier", "467102800", "Javier@gmail.com"),
	(26, "Beatriz", "Soto", "650608", "2003-06-26", "public/img/face7.jpg", "Ica", "736238472", "Beatriz@gmail.com", "Martín", "813544885", "Martín@gmail.com"),
	(27, "Javier", "Silva", "633996", "2005-11-13", "public/img/face4.jpg", "Cusco", "414563271", "Javier@gmail.com", "Marisol", "240526094", "Marisol@gmail.com"),
	(28, "Alfonso", "Ortega", "504588", "2001-08-28", "public/img/face19.jpg", "Trujillo", "667246532", "Alfonso@gmail.com", "Manuel", "280811211", "Manuel@gmail.com"),
	(29, "Alicia", "Sánchez", "840008", "2003-06-23", "public/img/face7.jpg", "Chiclayo", "548952755", "Alicia@gmail.com", "Víctor", "885907595", "Víctor@gmail.com"),
	(30, "Alfonso", "Aguilar", "314794", "2007-11-17", "public/img/face2.jpg", "Puno", "828657734", "Alfonso@gmail.com", "Gonzalo", "513363282", "Gonzalo@gmail.com"),
	(31, "Nerea", "Jiménez", "331260", "2000-01-20", "public/img/face12.jpg", "Huancayo", "603451966", "Nerea@gmail.com", "María José", "131533407", "María José@gmail.com"),
	(32, "Sergio", "Castro", "372933", "2003-11-16", "public/img/face5.jpg", "Tacna", "656835639", "Sergio@gmail.com", "Luis", "858574643", "Luis@gmail.com"),
	(33, "Julio", "Romero", "111884", "2004-06-02", "public/img/face11.jpg", "Juliaca", "344244448", "Julio@gmail.com", "Clara", "233450995", "Clara@gmail.com"),
	(34, "Fernando", "Montoya", "974386", "2008-01-08", "public/img/face12.jpg", "Arequipa", "464121064", "Fernando@gmail.com", "Jaime", "856933478", "Jaime@gmail.com"),
	(35, "María José", "Navarro", "492217", "2007-03-22", "public/img/face9.jpg", "Cusco", "583618323", "María José@gmail.com", "Beatriz", "116189471", "Beatriz@gmail.com"),
	(36, "Sergio", "López", "242301", "2004-08-22", "public/img/face7.jpg", "Huancayo", "344307013", "Sergio@gmail.com", "Cristina", "334798541", "Cristina@gmail.com"),
	(37, "Roberto", "Morales", "957404", "2006-07-10", "public/img/face5.jpg", "Trujillo", "505757127", "Roberto@gmail.com", "Celia", "220896022", "Celia@gmail.com"),
	(38, "Nuria", "Reyes", "308819", "2006-12-12", "public/img/face12.jpg", "Tumbes", "124740799", "Nuria@gmail.com", "Fernando", "423291230", "Fernando@gmail.com"),
	(39, "Lidia", "Martínez", "297485", "2001-11-16", "public/img/face15.jpg", "Piura", "905517242", "Lidia@gmail.com", "Alba", "860685967", "Alba@gmail.com"),
	(40, "Beatriz", "Peralta", "211881", "2002-10-11", "public/img/face16.jpg", "Cajamarca", "383346467", "Beatriz@gmail.com", "Pedro", "823172698", "Pedro@gmail.com"),
	(41, "Paula", "Flores", "694781", "2002-11-21", "public/img/face15.jpg", "Piura", "127698220", "Paula@gmail.com", "Marisol", "102057497", "Marisol@gmail.com"),
	(42, "Pedro", "Peralta", "514785", "2006-02-13", "public/img/face2.jpg", "Huancayo", "811808487", "Pedro@gmail.com", "Miriam", "842337951", "Miriam@gmail.com"),
	(43, "Martín", "López", "398378", "2003-07-22", "public/img/face16.jpg", "Lima", "424633119", "Martín@gmail.com", "Adrián", "457421090", "Adrián@gmail.com"),
	(44, "Marina", "Guzmán", "970270", "2005-04-10", "public/img/face1.jpg", "Huaraz", "168421069", "Marina@gmail.com", "Sonia", "207582641", "Sonia@gmail.com"),
	(45, "Roberto", "Reyes", "966573", "2008-08-06", "public/img/face17.jpg", "Moquegua", "652748398", "Roberto@gmail.com", "Marina", "486935564", "Marina@gmail.com"),
	(46, "Carmen María", "Montoya", "568648", "2001-06-25", "public/img/face10.jpg", "Tarapoto", "209223472", "Carmen María@gmail.com", "Javier", "560339291", "Javier@gmail.com"),
	(47, "Clara", "Montoya", "756616", "2007-09-16", "public/img/face8.jpg", "Ica", "680556579", "Clara@gmail.com", "Lorena", "487333366", "Lorena@gmail.com"),
	(48, "Beatriz", "Espinosa", "985688", "2006-09-17", "public/img/face3.jpg", "Pucallpa", "559049978", "Beatriz@gmail.com", "Gonzalo", "208295883", "Gonzalo@gmail.com"),
	(49, "Roberto", "Morales", "893785", "2002-09-06", "public/img/face10.jpg", "Tumbes", "292931263", "Roberto@gmail.com", "Javier", "605018964", "Javier@gmail.com"),
	(50, "Iván", "León", "401967", "2000-11-10", "public/img/face2.jpg", "Puno", "647024272", "Iván@gmail.com", "Alicia", "959791476", "Alicia@gmail.com");

/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table alumnos_padres
# ------------------------------------------------------------

DROP TABLE IF EXISTS `alumnos_padres`;

CREATE TABLE `alumnos_padres` (
  `idpadre` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `idpago` int(11) NOT NULL,
  PRIMARY KEY (`idpadre`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `alumnos_padres` WRITE;
/*!40000 ALTER TABLE `alumnos_padres` DISABLE KEYS */;

INSERT INTO `alumnos_padres` (`idpadre`, `nombre`, `apellidos`, `email`, `telefono`, `direccion`, `idpago`) VALUES
	(1, "nuria", "Castillo", "nuria@gmail.com", "923432423", "jr, cajamarca ", 1),
	(2, "Nuria", "Montoya", "Nuria21@gmail.com", "597291326", "Jr. Arica", 1),
	(3, "Óscar", "Flores", "Óscar22@gmail.com", "155892762", "Jr. Trujillo", 2),
	(4, "Roberto", "León", "Roberto23@gmail.com", "289426032", "Av. Puno", 3),
	(5, "Verónica", "Aguilar", "Verónica24@gmail.com", "647965852", "Jr. Junín", 4),
	(6, "Víctor", "Peralta", "Víctor25@gmail.com", "676329352", "Jr. Huaraz", 5),
	(7, "Inés", "Reyes", "Inés26@gmail.com", "943513115", "Jr. Lima", 6),
	(8, "Rubén", "Martínez", "Rubén27@gmail.com", "966485150", "Jr. Junín", 7),
	(9, "Alicia", "Vargas", "Alicia28@gmail.com", "655057802", "Av. Oscar R. Benavides", 8),
	(10, "Jaime", "Peralta", "Jaime29@gmail.com", "600279664", "Jr. Loreto", 9),
	(11, "Paula", "Cruz", "Paula30@gmail.com", "385125890", "Av. Emancipación", 10),
	(12, "Lidia", "Silva", "Lidia31@gmail.com", "146389445", "Av. Oscar R. Benavides", 11),
	(13, "Cristina", "Moreno", "Cristina32@gmail.com", "243538703", "Av. La Paz", 12),
	(14, "Adrián", "Fernández", "Adrián33@gmail.com", "888221483", "Av. Los Laureles", 13),
	(15, "Rubén", "Fernández", "Rubén34@gmail.com", "312751676", "Jr. Trujillo", 14),
	(16, "Martín", "Cordero", "Martín35@gmail.com", "924410172", "Av. Alfonso Ugarte", 15),
	(17, "Sergio", "Mendoza", "Sergio36@gmail.com", "418514358", "Jr. Julián Arias", 16),
	(18, "Paula", "Silva", "Paula37@gmail.com", "807217102", "Av. Brasil", 17),
	(19, "Alba", "Espinosa", "Alba38@gmail.com", "586840137", "Jr. Cusco", 18),
	(20, "Laura", "Ortega", "Laura39@gmail.com", "285874882", "Jr. Lambayeque", 19),
	(21, "Fernando", "Peralta", "Fernando40@gmail.com", "631569388", "Jr. Moquegua", 20),
	(22, "Carla", "Cordero", "Carla41@gmail.com", "499025321", "Av. Lima", 21),
	(23, "Héctor", "Pérez", "Héctor42@gmail.com", "560608690", "Jr. Huancavelica", 22),
	(24, "Sonia", "Moreno", "Sonia43@gmail.com", "256679495", "Av. Amazonas", 23),
	(25, "Diego", "Guzmán", "Diego44@gmail.com", "782723390", "Av. Paseo de la República", 24),
	(26, "Gonzalo", "Herrera", "Gonzalo45@gmail.com", "743183118", "Jr. León Velarde", 25),
	(27, "Javier", "Cruz", "Javier46@gmail.com", "833254411", "Jr. Ucayali", 26),
	(28, "Javier", "Guzmán", "Javier47@gmail.com", "336310084", "Jr. Julián Arias", 27),
	(29, "Julio", "Montoya", "Julio48@gmail.com", "101391282", "Jr. Lampa", 28),
	(30, "Sergio", "Aguilar", "Sergio49@gmail.com", "573410532", "Jr. Cuzco", 29),
	(31, "Pablo", "González", "Pablo50@gmail.com", "940406977", "Av. Abancay", 30),
	(32, "Marina", "Soto", "Marina51@gmail.com", "858225747", "Jr. Lima", 31),
	(33, "Inés", "León", "Inés52@gmail.com", "684705618", "Jr. San Martín", 32),
	(34, "Víctor", "Castillo", "Víctor53@gmail.com", "869286921", "Jr. Ancash", 33),
	(35, "Adrián", "Martínez", "Adrián54@gmail.com", "859355790", "Av. Cuzco", 34),
	(36, "Carmen María", "Vázquez", "Carmen María55@gmail.com", "245765583", "Jr. Arequipa", 35),
	(37, "Víctor", "Vargas", "Víctor56@gmail.com", "388309347", "Av. José Gálvez", 36),
	(38, "Jaime", "Espinosa", "Jaime57@gmail.com", "201484325", "Jr. Lampa", 37),
	(39, "Óscar", "Ramos", "Óscar58@gmail.com", "925060114", "Av. Alfonso Ugarte", 38),
	(40, "Jorge", "Aguilar", "Jorge59@gmail.com", "501608008", "Av. Francisco Bolognesi", 39),
	(41, "Sergio", "Morales", "Sergio60@gmail.com", "968300648", "Jr. Callao", 40),
	(42, "Héctor", "Moreno", "Héctor61@gmail.com", "367638978", "Av. Huascarán", 41),
	(43, "Nuria", "Espinosa", "Nuria62@gmail.com", "351920885", "Av. Dos de Mayo", 42),
	(44, "Esther", "León", "Esther63@gmail.com", "613960971", "Jr. El Puerto", 43),
	(45, "Jorge", "Ortega", "Jorge64@gmail.com", "199783348", "Jr. Pasco", 44),
	(46, "Víctor", "González", "Víctor65@gmail.com", "771909185", "Av. Tacna", 45),
	(47, "Pablo", "Rodríguez", "Pablo66@gmail.com", "110462677", "Av. Mártires de Uchuraccay", 46),
	(48, "Jaime", "Moreno", "Jaime67@gmail.com", "852541595", "Jr. Huancayo", 47),
	(49, "Lorena", "Guzmán", "Lorena68@gmail.com", "693407307", "Jr. Lima", 48),
	(50, "Julio", "Flores", "Julio69@gmail.com", "806438855", "Av. Garcilaso de la Vega", 49),
	(51, "Carla", "Díaz", "Carla70@gmail.com", "730654376", "Av. Garcilaso de la Vega", 50),
	(52, "Adrián", "Martínez", "Adrián71@gmail.com", "619644379", "Jr. Ancash", 51);

/*!40000 ALTER TABLE `alumnos_padres` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table colegio_cursos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `colegio_cursos`;

CREATE TABLE `colegio_cursos` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(100) NOT NULL,
  `idmaestro` int(11) NOT NULL,
  `idgrado` int(11) NOT NULL,
  `idseccion` int(11) NOT NULL,
  `idturno` int(11) NOT NULL,
  `idhorario` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idcurso`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `colegio_cursos` WRITE;
/*!40000 ALTER TABLE `colegio_cursos` DISABLE KEYS */;

INSERT INTO `colegio_cursos` (`idcurso`, `curso`, `idmaestro`, `idgrado`, `idseccion`, `idturno`, `idhorario`, `status`) VALUES
	(1, "ciencias", 36, 7, 5, 1, 5, 1),
	(2, "historia", 52, 5, 3, 2, 3, 1),
	(3, "ética", 49, 2, 6, 3, 1, 0),
	(4, "economía", 46, 2, 6, 1, 5, 1),
	(5, "educación cívica", 49, 5, 7, 2, 1, 0),
	(6, "música", 30, 5, 3, 1, 3, 0),
	(7, "economía", 24, 1, 4, 1, 3, 1),
	(8, "sociales", 40, 1, 7, 2, 5, 1),
	(9, "sociales", 28, 6, 3, 3, 1, 0),
	(10, "literatura", 25, 2, 1, 1, 3, 1),
	(11, "química", 38, 6, 6, 1, 3, 1),
	(12, "ética", 18, 5, 3, 3, 4, 0),
	(13, "literatura", 34, 5, 6, 1, 2, 0),
	(14, "matemáticas", 23, 5, 2, 3, 5, 1),
	(15, "economía", 14, 1, 4, 2, 3, 0),
	(16, "ciencias", 7, 7, 6, 4, 1, 1),
	(17, "religión", 33, 1, 1, 4, 3, 1),
	(18, "matemáticas", 24, 7, 6, 2, 1, 1),
	(19, "religión", 35, 3, 3, 2, 5, 1),
	(20, "matemáticas", 14, 4, 7, 4, 4, 1),
	(21, "informática", 14, 2, 4, 2, 1, 1),
	(22, "geografía", 25, 5, 4, 4, 5, 0),
	(23, "informática", 29, 2, 1, 1, 3, 1),
	(24, "química", 7, 7, 7, 3, 5, 1),
	(25, "historia", 32, 2, 1, 2, 3, 1),
	(26, "filosofía", 19, 5, 3, 2, 3, 1),
	(27, "física", 24, 7, 2, 3, 5, 0),
	(28, "religión", 5, 4, 3, 1, 5, 0),
	(29, "música", 32, 4, 3, 3, 5, 0),
	(30, "biología", 7, 1, 5, 2, 5, 1),
	(31, "geografía", 28, 5, 7, 4, 4, 0),
	(32, "religión", 29, 1, 7, 3, 3, 1),
	(33, "informática", 51, 5, 6, 3, 2, 1),
	(34, "inglés", 35, 3, 6, 1, 1, 1),
	(35, "historia", 7, 7, 6, 1, 1, 0),
	(36, "ciencias", 26, 1, 6, 3, 2, 0),
	(37, "filosofía", 44, 7, 4, 2, 2, 0),
	(38, "historia", 46, 6, 3, 3, 5, 0),
	(39, "ciencias", 13, 6, 4, 1, 2, 1),
	(40, "ciencias", 5, 4, 3, 1, 3, 0),
	(41, "música", 16, 5, 3, 2, 4, 1),
	(42, "filosofía", 36, 2, 3, 3, 4, 0),
	(43, "sociales", 19, 4, 5, 4, 1, 0),
	(44, "sociales", 42, 5, 6, 3, 3, 0),
	(45, "educación física", 28, 2, 7, 4, 2, 1),
	(46, "tecnología", 20, 5, 5, 4, 1, 0),
	(47, "matemáticas", 14, 4, 7, 2, 5, 1),
	(48, "sociales", 38, 1, 5, 4, 3, 0),
	(50, "informática", 38, 7, 5, 2, 5, 0),
	(51, "tecnología", 16, 2, 6, 2, 3, 0),
	(52, "física", 52, 1, 5, 4, 2, 1),
	(53, "jhojan", 1, 1, 1, 1, 1, 1),
	(58, "maria", 4, 8, 5, 1, 5, 0);

/*!40000 ALTER TABLE `colegio_cursos` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table colegio_grado
# ------------------------------------------------------------

DROP TABLE IF EXISTS `colegio_grado`;

CREATE TABLE `colegio_grado` (
  `idgrado` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idgrado`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `colegio_grado` WRITE;
/*!40000 ALTER TABLE `colegio_grado` DISABLE KEYS */;

INSERT INTO `colegio_grado` (`idgrado`, `grado`, `status`) VALUES
	(1, "primero", 1),
	(2, "segundo", 1),
	(3, "tercero", 1),
	(4, "cuarto", 0),
	(5, "quinto", 1),
	(6, "sexto", 1),
	(7, "septimo", 1),
	(8, "octavo", 1);

/*!40000 ALTER TABLE `colegio_grado` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table colegio_horario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `colegio_horario`;

CREATE TABLE `colegio_horario` (
  `idhorario` int(11) NOT NULL AUTO_INCREMENT,
  `horario` varchar(15) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idhorario`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `colegio_horario` WRITE;
/*!40000 ALTER TABLE `colegio_horario` DISABLE KEYS */;

INSERT INTO `colegio_horario` (`idhorario`, `horario`, `status`) VALUES
	(1, "8:00-9:00 am", 1),
	(2, "9:00-10:00 am", 2),
	(3, "10:00-10:30 am", 3),
	(4, "10:30-11:30 am", 4),
	(5, "11:30-12:30 pm", 5),
	(6, "12:30-1:30 pm", 6),
	(7, "1:30-2:00 pm", 7),
	(8, "2:00-3:00 pm", 8);

/*!40000 ALTER TABLE `colegio_horario` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table colegio_notas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `colegio_notas`;

CREATE TABLE `colegio_notas` (
  `idnotas` int(11) NOT NULL AUTO_INCREMENT,
  `idcurso` varchar(10) NOT NULL,
  `idmaestro` varchar(10) NOT NULL,
  `idturno` varchar(10) NOT NULL,
  `idseccion` varchar(10) NOT NULL,
  `idalumno` varchar(10) NOT NULL,
  `idgrado` varchar(10) NOT NULL,
  `nota1` double DEFAULT NULL,
  `nota2` double DEFAULT NULL,
  `nota3` double DEFAULT NULL,
  `nota4` double DEFAULT NULL,
  `nota5` double DEFAULT NULL,
  `nota6` double DEFAULT NULL,
  `parcial1` double DEFAULT NULL,
  `parcial2` double DEFAULT NULL,
  `parcial3` double DEFAULT NULL,
  `examen` double DEFAULT NULL,
  `recuperacion` double DEFAULT NULL,
  PRIMARY KEY (`idnotas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `colegio_notas` WRITE;
/*!40000 ALTER TABLE `colegio_notas` DISABLE KEYS */;

INSERT INTO `colegio_notas` (`idnotas`, `idcurso`, `idmaestro`, `idturno`, `idseccion`, `idalumno`, `idgrado`, `nota1`, `nota2`, `nota3`, `nota4`, `nota5`, `nota6`, `parcial1`, `parcial2`, `parcial3`, `examen`, `recuperacion`) VALUES
	(1, "1", "1", "1", "1", "1", "1", 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL);

/*!40000 ALTER TABLE `colegio_notas` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table colegio_seccion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `colegio_seccion`;

CREATE TABLE `colegio_seccion` (
  `idseccion` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idseccion`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `colegio_seccion` WRITE;
/*!40000 ALTER TABLE `colegio_seccion` DISABLE KEYS */;

INSERT INTO `colegio_seccion` (`idseccion`, `seccion`, `status`) VALUES
	(1, "a", 1),
	(2, "b", 1),
	(3, "c", 1),
	(4, "d", 0),
	(5, "e", 0),
	(6, "f", 0),
	(7, "g", 1);

/*!40000 ALTER TABLE `colegio_seccion` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table colegio_turno
# ------------------------------------------------------------

DROP TABLE IF EXISTS `colegio_turno`;

CREATE TABLE `colegio_turno` (
  `idturno` int(11) NOT NULL AUTO_INCREMENT,
  `turno` varchar(10) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idturno`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `colegio_turno` WRITE;
/*!40000 ALTER TABLE `colegio_turno` DISABLE KEYS */;

INSERT INTO `colegio_turno` (`idturno`, `turno`, `status`) VALUES
	(1, "manana", 0),
	(2, "tarde", 0),
	(3, "noche", 1),
	(4, "finSemana", 0);

/*!40000 ALTER TABLE `colegio_turno` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table finanzas_detalle
# ------------------------------------------------------------

DROP TABLE IF EXISTS `finanzas_detalle`;

CREATE TABLE `finanzas_detalle` (
  `iddetallefin` int(11) NOT NULL AUTO_INCREMENT,
  `idfinanzas` int(11) NOT NULL,
  `idalumno` int(11) NOT NULL,
  `idgrado` int(11) NOT NULL,
  `idseccion` int(11) NOT NULL,
  `concepto` varchar(60) NOT NULL,
  `monto` double DEFAULT NULL,
  `fecPago` date DEFAULT NULL,
  PRIMARY KEY (`iddetallefin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;





# Dump of table finanzas_general
# ------------------------------------------------------------

DROP TABLE IF EXISTS `finanzas_general`;

CREATE TABLE `finanzas_general` (
  `idfinanzas` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) NOT NULL,
  `idgrado` int(11) NOT NULL,
  `idseccion` int(11) NOT NULL,
  `concepto` varchar(60) NOT NULL,
  `total` double DEFAULT NULL,
  `fecPago` date DEFAULT NULL,
  PRIMARY KEY (`idfinanzas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;





# Dump of table finanzas_tipopagos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `finanzas_tipopagos`;

CREATE TABLE `finanzas_tipopagos` (
  `idtipopago` int(11) NOT NULL AUTO_INCREMENT,
  `idfinanzas` int(11) NOT NULL,
  `idest_padre` int(11) NOT NULL,
  `tipopago` varchar(10) NOT NULL,
  `banco` varchar(100) NOT NULL,
  `cci` char(21) NOT NULL,
  PRIMARY KEY (`idtipopago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;





# Dump of table login
# ------------------------------------------------------------

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `nivel` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;

INSERT INTO `login` (`idlogin`, `username`, `passwd`, `tipo`, `status`, `nivel`, `id`) VALUES
	(1, "admin", "admin", 1, 1, 1, 1),
	(2, "docente", "docente", 2, 1, 2, 1),
	(3, "alumno", "alumno", 3, 1, 3, 1),
	(4, "zeta", "zeta", 1, 1, 1, 1);

/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table maestros
# ------------------------------------------------------------

DROP TABLE IF EXISTS `maestros`;

CREATE TABLE `maestros` (
  `idmaestro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `apellidos` varchar(160) NOT NULL,
  `fecNacimiento` date NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `sexo` varchar(20) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `ciudad` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `idgrado` int(11) NOT NULL,
  PRIMARY KEY (`idmaestro`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `maestros` WRITE;
/*!40000 ALTER TABLE `maestros` DISABLE KEYS */;

INSERT INTO `maestros` (`idmaestro`, `nombre`, `apellidos`, `fecNacimiento`, `foto`, `sexo`, `especialidad`, `ciudad`, `telefono`, `email`, `idgrado`) VALUES
	(4, "Alejandro", "Ortega", "2008-10-13", "null", "femenino", "ingles", "Chiclayo", "914721433", "Alejandro@gmail.com", 2),
	(5, "Juan", "García", "2007-12-16", "null", "femenino", "ingles", "Tumbes", "960027773", "Juan@gmail.com", 3),
	(6, "Lucía", "Jiménez", "2003-11-10", "null", "femenino", "ciencias", "Ayacucho", "923077614", "Lucía@gmail.com", 4),
	(7, "Juan", "García", "2005-07-08", "null", "femenino", "biologia", "Cajamarca", "967707600", "Juan@gmail.com", 5),
	(8, "María", "Rodríguez", "2000-01-11", "null", "masculino", "quimica", "Juliaca", "959306732", "María@gmail.com", 6),
	(9, "Pedro", "Sánchez", "2001-08-24", "null", "masculino", "matematica", "Huancayo", "997591933", "Pedro@gmail.com", 7),
	(10, "Diego", "Silva", "2009-01-01", "null", "masculino", "ciencias", "Puno", "906502494", "Diego@gmail.com", 8),
	(11, "Patricia", "Morales", "2006-06-27", "null", "femenino", "fisica", "Cusco", "952328445", "Patricia@gmail.com", 9),
	(12, "Patricia", "Morales", "2005-11-17", "null", "masculino", "quimica", "Pucallpa", "932311779", "Patricia@gmail.com", 10),
	(13, "Pedro", "Sánchez", "2003-05-13", "null", "femenino", "ingles", "Cusco", "904241811", "Pedro@gmail.com", 11),
	(14, "Ana", "Martínez", "2009-04-23", "null", "femenino", "quimica", "Trujillo", "954796740", "Ana@gmail.com", 12),
	(15, "Alejandro", "Ortega", "2009-08-19", "null", "masculino", "matematica", "Lima", "915025484", "Alejandro@gmail.com", 13),
	(16, "Rosa", "Ruiz", "2006-04-10", "null", "femenino", "matematica", "Huaraz", "987939538", "Rosa@gmail.com", 14),
	(17, "Patricia", "Morales", "2006-10-18", "null", "masculino", "quimica", "Juliaca", "995979696", "Patricia@gmail.com", 15),
	(18, "Carmen", "Flores", "2001-03-06", "null", "femenino", "quimica", "Huaraz", "983678362", "Carmen@gmail.com", 16),
	(19, "Alejandro", "Ortega", "2003-05-22", "null", "femenino", "quimica", "Arequipa", "973904014", "Alejandro@gmail.com", 17),
	(20, "Pedro", "Sánchez", "2002-10-15", "null", "femenino", "ciencias", "Ica", "940808041", "Pedro@gmail.com", 18),
	(21, "José", "Torres", "2001-01-19", "null", "femenino", "ingles", "Cusco", "954633214", "José@gmail.com", 19),
	(22, "Juan", "García", "2009-08-21", "null", "femenino", "quimica", "Piura", "952822206", "Juan@gmail.com", 20),
	(23, "Pedro", "Sánchez", "2009-01-23", "null", "masculino", "fisica", "Cajamarca", "948989905", "Pedro@gmail.com", 21),
	(24, "Diego", "Silva", "2008-02-25", "null", "femenino", "ciencias", "Pucallpa", "981627417", "Diego@gmail.com", 22),
	(25, "Rosa", "Ruiz", "2002-12-06", "null", "femenino", "fisica", "Trujillo", "907397500", "Rosa@gmail.com", 23),
	(26, "Diego", "Silva", "2009-03-22", "null", "femenino", "quimica", "Huaraz", "973160744", "Diego@gmail.com", 24),
	(27, "Patricia", "Morales", "2005-12-17", "null", "femenino", "biologia", "Tumbes", "996270563", "Patricia@gmail.com", 25),
	(28, "Carlos", "López", "2000-11-01", "null", "femenino", "quimica", "Trujillo", "905805253", "Carlos@gmail.com", 26),
	(29, "Valeria", "Reyes", "2009-07-13", "null", "masculino", "fisica", "Puno", "987419306", "Valeria@gmail.com", 27),
	(30, "José", "Torres", "2001-03-20", "null", "masculino", "ingles", "Tacna", "993765202", "José@gmail.com", 28),
	(31, "Carmen", "Flores", "2003-06-08", "null", "masculino", "fisica", "Moquegua", "905474719", "Carmen@gmail.com", 29),
	(32, "Carmen", "Flores", "2001-04-01", "null", "masculino", "quimica", "Arequipa", "915732716", "Carmen@gmail.com", 30),
	(33, "Rosa", "Ruiz", "2009-05-05", "null", "masculino", "matematica", "Puno", "917574260", "Rosa@gmail.com", 31),
	(34, "José", "Torres", "2008-05-26", "null", "femenino", "ciencias", "Trujillo", "905716373", "José@gmail.com", 32),
	(35, "Carlos", "López", "2009-07-10", "null", "masculino", "quimica", "Huaraz", "965046341", "Carlos@gmail.com", 33),
	(36, "Diego", "Silva", "2009-05-20", "null", "femenino", "ingles", "Chimbote", "966576219", "Diego@gmail.com", 34),
	(37, "Carlos", "López", "2002-11-04", "null", "masculino", "quimica", "Cusco", "983176405", "Carlos@gmail.com", 35),
	(38, "Diego", "Silva", "2008-11-15", "null", "femenino", "quimica", "Piura", "943822829", "Diego@gmail.com", 36),
	(39, "Carlos", "López", "2003-08-05", "null", "femenino", "ingles", "Chimbote", "980482867", "Carlos@gmail.com", 37),
	(40, "Laura", "Pérez", "2006-04-12", "null", "femenino", "quimica", "Huancayo", "967691278", "Laura@gmail.com", 38),
	(41, "Alejandro", "Ortega", "2007-05-12", "null", "femenino", "fisica", "Arequipa", "941951215", "Alejandro@gmail.com", 39),
	(42, "Valeria", "Reyes", "2008-10-20", "null", "femenino", "quimica", "Chiclayo", "907250266", "Valeria@gmail.com", 40),
	(43, "Pedro", "Sánchez", "2008-08-17", "null", "femenino", "quimica", "Tumbes", "922639325", "Pedro@gmail.com", 41),
	(44, "Luis", "González", "2008-08-15", "null", "masculino", "quimica", "Cusco", "957113409", "Luis@gmail.com", 42),
	(45, "Lucía", "Jiménez", "2003-12-04", "null", "femenino", "fisica", "Puno", "962449540", "Lucía@gmail.com", 43),
	(46, "José", "Torres", "2007-01-25", "null", "femenino", "quimica", "Juliaca", "980047109", "José@gmail.com", 44),
	(47, "Ana", "Martínez", "2009-05-23", "null", "masculino", "quimica", "Huaraz", "963135140", "Ana@gmail.com", 45),
	(48, "José", "Torres", "2000-03-20", "null", "masculino", "matematica", "Pucallpa", "910214265", "José@gmail.com", 46),
	(49, "Rosa", "Ruiz", "2000-06-20", "null", "masculino", "biologia", "Huancayo", "954303245", "Rosa@gmail.com", 47),
	(50, "Pedro", "Sánchez", "2008-08-05", "null", "masculino", "ciencias", "Ayacucho", "932490562", "Pedro@gmail.com", 48),
	(51, "Andrés", "Díaz", "2009-04-10", "null", "masculino", "ingles", "Chimbote", "967438892", "Andrés@gmail.com", 49);

/*!40000 ALTER TABLE `maestros` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table maestros_detalle
# ------------------------------------------------------------

DROP TABLE IF EXISTS `maestros_detalle`;

CREATE TABLE `maestros_detalle` (
  `idmaestro_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `idmaestro` int(11) NOT NULL,
  `acercade` varchar(255) NOT NULL,
  PRIMARY KEY (`idmaestro_detalle`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `maestros_detalle` WRITE;
/*!40000 ALTER TABLE `maestros_detalle` DISABLE KEYS */;

INSERT INTO `maestros_detalle` (`idmaestro_detalle`, `idmaestro`, `acercade`) VALUES
	(1, 2, "profesional calificado para el trabajo"),
	(2, 3, "Especializado en Matemáticas Apasionado por la educación Promueve un ambiente de aprendizaje inclusivo"),
	(3, 4, "Promueve el trabajo en equipo Promueve un ambiente de aprendizaje inclusivo"),
	(4, 5, "Promueve el trabajo en equipo Motiva a los estudiantes a alcanzar su máximo potencial Especializado en Matemáticas"),
	(5, 6, "Innovador en el aula Motiva a los estudiantes a alcanzar su máximo potencial"),
	(6, 7, "Apasionado por la educación Especializado en Matemáticas Participa activamente en el desarrollo profesional"),
	(7, 8, "Excelentes habilidades de comunicación Participa activamente en el desarrollo profesional"),
	(8, 9, "Creativo en métodos de enseñanza Comprometido con el aprendizaje de los estudiantes Integración de tecnología en la enseñanza"),
	(9, 10, "Fomenta el pensamiento crítico Integración de tecnología en la enseñanza"),
	(10, 11, "Fomenta el respeto y la diversidad en el aula Creativo en métodos de enseñanza"),
	(11, 12, "Integración de tecnología en la enseñanza Comprometido con el aprendizaje de los estudiantes Promueve el trabajo en equipo Participa activamente en el desarrollo profesional"),
	(12, 13, "Motiva a los estudiantes a alcanzar su máximo potencial Innovador en el aula"),
	(13, 14, "Especializado en Matemáticas Fomenta el respeto y la diversidad en el aula Integración de tecnología en la enseñanza"),
	(14, 15, "Apasionado por la educación Dedica tiempo extra para apoyar a los estudiantes Experiencia en enseñanza"),
	(15, 16, "Experiencia en enseñanza Dedica tiempo extra para apoyar a los estudiantes Promueve un ambiente de aprendizaje inclusivo"),
	(16, 17, "Excelentes habilidades de comunicación Apasionado por la educación Especializado en Matemáticas Participa activamente en el desarrollo profesional"),
	(17, 18, "Experiencia en enseñanza Promueve el trabajo en equipo"),
	(18, 19, "Especializado en Matemáticas Experiencia en enseñanza"),
	(19, 20, "Dedica tiempo extra para apoyar a los estudiantes Innovador en el aula"),
	(20, 21, "Especializado en Matemáticas Promueve un ambiente de aprendizaje inclusivo"),
	(21, 22, "Participa activamente en el desarrollo profesional Integración de tecnología en la enseñanza Excelentes habilidades de comunicación"),
	(22, 23, "Promueve el trabajo en equipo Especializado en Matemáticas Fomenta el pensamiento crítico Comprometido con el aprendizaje de los estudiantes"),
	(23, 24, "Apasionado por la educación Experiencia en enseñanza"),
	(24, 25, "Excelentes habilidades de comunicación Dedica tiempo extra para apoyar a los estudiantes Innovador en el aula"),
	(25, 26, "Motiva a los estudiantes a alcanzar su máximo potencial Especializado en Matemáticas Participa activamente en el desarrollo profesional Apasionado por la educación"),
	(26, 27, "Creativo en métodos de enseñanza Innovador en el aula"),
	(27, 28, "Integración de tecnología en la enseñanza Motiva a los estudiantes a alcanzar su máximo potencial"),
	(28, 29, "Motiva a los estudiantes a alcanzar su máximo potencial Promueve un ambiente de aprendizaje inclusivo"),
	(29, 30, "Experiencia en enseñanza Innovador en el aula"),
	(30, 31, "Apasionado por la educación Promueve un ambiente de aprendizaje inclusivo Promueve el trabajo en equipo"),
	(31, 32, "Apasionado por la educación Fomenta el pensamiento crítico Innovador en el aula"),
	(32, 33, "Promueve el trabajo en equipo Fomenta el respeto y la diversidad en el aula"),
	(33, 34, "Fomenta el respeto y la diversidad en el aula Apasionado por la educación Promueve un ambiente de aprendizaje inclusivo"),
	(34, 35, "Dedica tiempo extra para apoyar a los estudiantes Experiencia en enseñanza Promueve el trabajo en equipo"),
	(35, 36, "Creativo en métodos de enseñanza Integración de tecnología en la enseñanza Experiencia en enseñanza"),
	(36, 37, "Dedica tiempo extra para apoyar a los estudiantes Comprometido con el aprendizaje de los estudiantes"),
	(37, 38, "Promueve un ambiente de aprendizaje inclusivo Integración de tecnología en la enseñanza Fomenta el pensamiento crítico"),
	(38, 39, "Integración de tecnología en la enseñanza Comprometido con el aprendizaje de los estudiantes"),
	(39, 40, "Promueve un ambiente de aprendizaje inclusivo Comprometido con el aprendizaje de los estudiantes"),
	(40, 41, "Promueve el trabajo en equipo Especializado en Matemáticas Comprometido con el aprendizaje de los estudiantes"),
	(41, 42, "Motiva a los estudiantes a alcanzar su máximo potencial Fomenta el respeto y la diversidad en el aula Promueve el trabajo en equipo"),
	(42, 43, "Participa activamente en el desarrollo profesional Innovador en el aula Experiencia en enseñanza"),
	(43, 44, "Promueve el trabajo en equipo Creativo en métodos de enseñanza Fomenta el pensamiento crítico"),
	(44, 45, "Integración de tecnología en la enseñanza Fomenta el respeto y la diversidad en el aula Innovador en el aula Fomenta el pensamiento crítico"),
	(45, 46, "Promueve un ambiente de aprendizaje inclusivo Apasionado por la educación Motiva a los estudiantes a alcanzar su máximo potencial"),
	(46, 47, "Excelentes habilidades de comunicación Creativo en métodos de enseñanza Apasionado por la educación Participa activamente en el desarrollo profesional"),
	(47, 48, "Fomenta el pensamiento crítico Fomenta el respeto y la diversidad en el aula Promueve el trabajo en equipo Motiva a los estudiantes a alcanzar su máximo potencial"),
	(48, 49, "Excelentes habilidades de comunicación Comprometido con el aprendizaje de los estudiantes"),
	(49, 50, "Innovador en el aula Promueve un ambiente de aprendizaje inclusivo"),
	(50, 51, "Comprometido con el aprendizaje de los estudiantes Participa activamente en el desarrollo profesional Promueve el trabajo en equipo");

/*!40000 ALTER TABLE `maestros_detalle` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table maestros_educacion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `maestros_educacion`;

CREATE TABLE `maestros_educacion` (
  `idmaestro_educacion` int(11) NOT NULL AUTO_INCREMENT,
  `idmaestro` int(11) NOT NULL,
  `universidad` varchar(200) DEFAULT NULL,
  `grado` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `anio_inicio` varchar(50) DEFAULT NULL,
  `anio_fin` varchar(50) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `horas` double DEFAULT NULL,
  PRIMARY KEY (`idmaestro_educacion`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `maestros_educacion` WRITE;
/*!40000 ALTER TABLE `maestros_educacion` DISABLE KEYS */;

INSERT INTO `maestros_educacion` (`idmaestro_educacion`, `idmaestro`, `universidad`, `grado`, `titulo`, `anio_inicio`, `anio_fin`, `ciudad`, `horas`) VALUES
	(1, 3, "Pontificia Universidad Católica del Perú", "Técnico", "Contabilidad", "1985", "2011", "Huancayo", 53.89),
	(2, 4, "Universidad Nacional de Piura", "Maestría", "Medicina", "2020", "1998", "Piura", 448.52),
	(3, 5, "Universidad Nacional de Piura", "Especialización", "Ciencias de la Computación", "1976", "1971", "Arequipa", 393.29),
	(4, 6, "Universidad Nacional de Piura", "Técnico", "Derecho", "1977", "1988", "Trujillo", 689.58),
	(5, 7, "Universidad Nacional de Tumbes", "Posgrado", "Ciencias de la Computación", "2010", "1989", "Huancayo", 796.05),
	(6, 8, "Universidad Nacional de Tumbes", "Certificado", "Psicología", "1987", "2019", "Puno", 12.25),
	(7, 9, "Pontificia Universidad Católica del Perú", "Especialización", "Ingeniería Industrial", "2010", "1986", "Chiclayo", 515.28),
	(8, 10, "Universidad Nacional de Trujillo", "Posgrado", "Licenciatura en Administración de Empresas", "1997", "1995", "Puno", 755.21),
	(9, 11, "Universidad Nacional de Huancavelica", "Doctorado", "Psicología", "1983", "1971", "Huancayo", 165.44),
	(10, 12, "Universidad Nacional Agraria La Molina", "Posgrado", "Licenciatura en Administración de Empresas", "1980", "1982", "Huancayo", 191.16),
	(11, 13, "Pontificia Universidad Católica del Perú", "Técnico", "Psicología", "1988", "1980", "Lima", 189.65),
	(12, 14, "Universidad Nacional Agraria La Molina", "Posgrado", "Licenciatura en Administración de Empresas", "1990", "1987", "Chiclayo", 14.36),
	(13, 15, "Universidad Nacional de Trujillo", "Diplomado", "Medicina", "1989", "1988", "Piura", 59.74),
	(14, 16, "Pontificia Universidad Católica del Perú", "Diplomado", "Arquitectura", "2007", "1999", "Tacna", 46.32),
	(15, 17, "Universidad Nacional de Ingeniería", "Técnico", "Medicina", "1980", "1970", "Puno", 238.09),
	(16, 18, "Universidad Nacional de Trujillo", "Posgrado", "Ingeniería Industrial", "1991", "2004", "Huancayo", 25.84),
	(17, 19, "Universidad Nacional de Cajamarca", "Maestría", "Ciencias de la Computación", "2014", "2012", "Trujillo", 328.06),
	(18, 20, "Universidad Nacional de Piura", "Bachiller", "Licenciatura en Administración de Empresas", "2020", "2019", "Iquitos", 965.35),
	(19, 21, "Universidad Nacional de Tumbes", "Posgrado", "Medicina", "2001", "1996", "Lima", 307.18),
	(20, 22, "Universidad Nacional de Cajamarca", "Posgrado", "Ingeniería Industrial", "2013", "1992", "Chiclayo", 871),
	(21, 23, "Pontificia Universidad Católica del Perú", "Doctorado", "Derecho", "2002", "1971", "Arequipa", 735.8),
	(22, 24, "Universidad Nacional Mayor de San Marcos", "Especialización", "Licenciatura en Administración de Empresas", "1977", "2020", "Chiclayo", 443.82),
	(23, 25, "Universidad Nacional Mayor de San Marcos", "Doctorado", "Licenciatura en Administración de Empresas", "2020", "1970", "Piura", 906.77),
	(24, 26, "Universidad Nacional de Piura", "Bachiller", "Medicina", "2017", "2008", "Cusco", 78.38),
	(25, 27, "Universidad Nacional de Huancavelica", "Maestría", "Derecho", "2015", "2009", "Huancayo", 233.1),
	(26, 28, "Universidad Nacional de Tumbes", "Certificado", "Contabilidad", "2020", "1980", "Lima", 784.85),
	(27, 29, "Universidad Nacional de Tumbes", "Técnico", "Medicina", "2016", "1993", "Lima", 48.56),
	(28, 30, "Universidad Nacional de Piura", "Especialización", "Educación Primaria", "1974", "1974", "Huancayo", 649.73),
	(29, 31, "Universidad Nacional de Piura", "Diplomado", "Licenciatura en Administración de Empresas", "2011", "1987", "Chiclayo", 298.84),
	(30, 32, "Universidad Nacional de Trujillo", "Posgrado", "Arquitectura", "1988", "1996", "Chiclayo", 292.97),
	(31, 33, "Universidad Nacional de Tumbes", "Posgrado", "Contabilidad", "1983", "2010", "Iquitos", 787.03),
	(32, 34, "Universidad Nacional de Ingeniería", "Bachiller", "Derecho", "1978", "2013", "Iquitos", 165.19),
	(33, 35, "Universidad Nacional de San Antonio Abad del Cusco", "Doctorado", "Derecho", "1991", "1994", "Tacna", 476.57),
	(34, 36, "Universidad Nacional de Huancavelica", "Certificado", "Medicina", "1990", "1984", "Lima", 795.94),
	(35, 37, "Universidad Nacional de Cajamarca", "Especialización", "Ciencias de la Computación", "2010", "2011", "Lima", 777.16),
	(36, 38, "Universidad Nacional de Trujillo", "Doctorado", "Ingeniería Industrial", "1976", "1982", "Huancayo", 658.37),
	(37, 39, "Pontificia Universidad Católica del Perú", "Posgrado", "Arquitectura", "1978", "1988", "Arequipa", 580.94),
	(38, 40, "Universidad Nacional de Huancavelica", "Doctorado", "Licenciatura en Administración de Empresas", "1989", "2016", "Trujillo", 139.87),
	(39, 41, "Universidad Nacional de Ingeniería", "Certificado", "Ingeniería Industrial", "1984", "2012", "Lima", 214.25),
	(40, 42, "Universidad Nacional de Ingeniería", "Maestría", "Derecho", "2019", "1991", "Puno", 639.23),
	(41, 43, "Universidad Nacional de Piura", "Técnico", "Ingeniería Industrial", "1990", "1981", "Trujillo", 97.7),
	(42, 44, "Universidad Nacional de Huancavelica", "Diplomado", "Arquitectura", "1976", "2001", "Huancayo", 360.98),
	(43, 45, "Universidad Nacional de Trujillo", "Maestría", "Ingeniería Industrial", "2012", "1980", "Puno", 503.08),
	(44, 46, "Pontificia Universidad Católica del Perú", "Técnico", "Licenciatura en Administración de Empresas", "2019", "2017", "Puno", 347.55),
	(45, 47, "Universidad Nacional Mayor de San Marcos", "Bachiller", "Medicina", "1974", "1975", "Piura", 487.58),
	(46, 48, "Universidad Nacional de San Antonio Abad del Cusco", "Certificado", "Educación Primaria", "2020", "2004", "Tacna", 775.12),
	(47, 49, "Universidad Nacional de Piura", "Posgrado", "Derecho", "2013", "1999", "Chiclayo", 734.82),
	(48, 50, "Universidad Nacional de Trujillo", "Diplomado", "Ciencias de la Computación", "2005", "2018", "Lima", 256.21),
	(49, 51, "Universidad Nacional de San Antonio Abad del Cusco", "Doctorado", "Arquitectura", "1997", "1986", "Tacna", 489.03),
	(50, 2, "Pontificia Universidad Católica del Perú", "Técnico", "Contabilidad", "1985", "2011", "Huancayo", 53.89);

/*!40000 ALTER TABLE `maestros_educacion` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table maestros_experiencia
# ------------------------------------------------------------

DROP TABLE IF EXISTS `maestros_experiencia`;

CREATE TABLE `maestros_experiencia` (
  `idmaestro_experiencia` int(11) NOT NULL AUTO_INCREMENT,
  `idmaestro` int(11) NOT NULL,
  `institucion` varchar(200) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `anio_inicio` varchar(50) DEFAULT NULL,
  `anio_fin` varchar(50) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `meses` double DEFAULT NULL,
  PRIMARY KEY (`idmaestro_experiencia`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

LOCK TABLES `maestros_experiencia` WRITE;
/*!40000 ALTER TABLE `maestros_experiencia` DISABLE KEYS */;

INSERT INTO `maestros_experiencia` (`idmaestro_experiencia`, `idmaestro`, `institucion`, `cargo`, `anio_inicio`, `anio_fin`, `ciudad`, `meses`) VALUES
	(1, 1, "Colegio Nacional Santa Rosa", "ciencias", "2003-06-18", "2003-06-18", "Chimbote", 18),
	(2, 2, "Colegio San Miguel Arcángel", "fisica", "2006-01-07", "2006-01-07", "Chiclayo", 7),
	(3, 3, "Colegio Nacional San Pedro", "matematica", "2007-12-03", "2007-12-03", "Tarapoto", 29),
	(4, 4, "Instituto Educacional San José", "fisica", "2007-12-23", "2007-12-23", "Juliaca", 24),
	(5, 5, "Colegio Nacional Santa María", "fisica", "2008-06-16", "2008-06-16", "Trujillo", 7),
	(6, 6, "Colegio Nacional Nuestra Señora de Guadalupe", "fisica", "2006-12-19", "2006-12-19", "Ica", 17),
	(7, 7, "Instituto Educacional San José", "fisica", "2002-09-10", "2002-09-10", "Juliaca", 27),
	(8, 8, "Colegio Nacional Santa Rosa", "quimica", "2004-02-25", "2004-02-25", "Arequipa", 21),
	(9, 9, "Colegio Nacional Santa Teresa", "fisica", "2008-04-01", "2008-04-01", "Tumbes", 9),
	(10, 10, "Instituto Educativo San Ignacio", "quimica", "2006-09-18", "2006-09-18", "Piura", 24),
	(11, 11, "Instituto Educacional San José", "fisica", "2002-04-19", "2002-04-19", "Chimbote", 4),
	(12, 12, "Colegio Nacional Santa Rosa", "quimica", "2003-12-25", "2003-12-25", "Puno", 12),
	(13, 13, "Colegio Nacional San Agustín", "ingles", "2000-02-15", "2000-02-15", "Pucallpa", 9),
	(14, 14, "Colegio San Martín de Porres", "biologia", "2003-07-10", "2003-07-10", "Piura", 23),
	(15, 15, "Instituto Educacional San José", "ingles", "2007-08-16", "2007-08-16", "Lima", 10),
	(16, 16, "Colegio Nacional Santa Rosa", "fisica", "2009-05-09", "2009-05-09", "Juliaca", 23),
	(17, 17, "Colegio San Miguel Arcángel", "matematica", "2007-12-15", "2007-12-15", "Pucallpa", 17),
	(18, 18, "Colegio Nacional San Juan", "matematica", "2005-05-16", "2005-05-16", "Ica", 22),
	(19, 19, "Colegio Nacional Santa Rosa", "quimica", "2002-09-19", "2002-09-19", "Iquitos", 5),
	(20, 20, "Colegio Nacional San Juan", "quimica", "2007-09-24", "2007-09-24", "Ayacucho", 14),
	(21, 21, "Instituto Educacional San José", "ingles", "2005-03-03", "2005-03-03", "Chimbote", 23),
	(22, 22, "Colegio Nacional San Agustín", "matematica", "2004-02-09", "2004-02-09", "Pucallpa", 21),
	(23, 23, "Instituto Educativo San Pablo", "biologia", "2003-01-23", "2003-01-23", "Tumbes", 9),
	(24, 24, "Colegio Nacional Santa Rosa", "ingles", "2001-09-19", "2001-09-19", "Huaraz", 22),
	(25, 25, "Instituto Educacional San José", "ciencias", "2003-01-22", "2003-01-22", "Moquegua", 2),
	(26, 26, "Escuela Nacional Santa Rosa de Lima", "biologia", "2007-05-10", "2007-05-10", "Juliaca", 19),
	(27, 27, "Instituto Educativo San Pablo", "matematica", "2005-04-27", "2005-04-27", "Tarapoto", 23),
	(28, 28, "Colegio Nacional Santa María", "quimica", "2008-12-22", "2008-12-22", "Iquitos", 25),
	(29, 29, "Instituto Educativo San Pablo", "ciencias", "2001-01-06", "2001-01-06", "Huaraz", 28),
	(30, 30, "Colegio Nacional Santa Rosa", "matematica", "2008-05-14", "2008-05-14", "Tumbes", 25),
	(31, 31, "Colegio Nacional Santa Teresa", "ingles", "2008-08-18", "2008-08-18", "Huancayo", 20),
	(32, 32, "Colegio Nacional Nuestra Señora de Guadalupe", "matematica", "2004-02-28", "2004-02-28", "Chimbote", 17),
	(33, 33, "Colegio Nacional San Juan", "ciencias", "2008-09-27", "2008-09-27", "Moquegua", 1),
	(34, 34, "Colegio Nacional Nuestra Señora de Guadalupe", "ciencias", "2009-01-04", "2009-01-04", "Cusco", 0),
	(35, 35, "Escuela Nacional Santa Rosa de Lima", "biologia", "2003-05-19", "2003-05-19", "Tacna", 7),
	(36, 36, "Colegio Nacional Santa Teresa", "quimica", "2001-11-23", "2001-11-23", "Piura", 27),
	(37, 37, "Escuela Nacional Simón Bolívar", "ingles", "2008-07-28", "2008-07-28", "Chiclayo", 10),
	(38, 38, "Escuela Nacional Simón Bolívar", "fisica", "2003-07-24", "2003-07-24", "Arequipa", 5),
	(39, 39, "Colegio San Miguel Arcángel", "ciencias", "2004-02-02", "2004-02-02", "Ayacucho", 27),
	(40, 40, "Colegio Nacional Nuestra Señora de Guadalupe", "fisica", "2009-04-25", "2009-04-25", "Pucallpa", 11),
	(41, 41, "Instituto Educacional San José", "biologia", "2001-08-15", "2001-08-15", "Tumbes", 22),
	(42, 42, "Colegio Nacional Santa Rosa", "ciencias", "2009-06-25", "2009-06-25", "Huaraz", 6),
	(43, 43, "Instituto Educativo San Pablo", "ciencias", "2004-10-17", "2004-10-17", "Huancayo", 24),
	(44, 44, "Instituto San Francisco de Asís", "ciencias", "2000-07-12", "2000-07-12", "Huancayo", 17),
	(45, 45, "Colegio Nacional Nuestra Señora de Guadalupe", "quimica", "2005-09-01", "2005-09-01", "Arequipa", 3),
	(46, 46, "Colegio San Miguel Arcángel", "fisica", "2007-06-28", "2007-06-28", "Tarapoto", 12),
	(47, 47, "Instituto Educativo San Ignacio", "biologia", "2009-06-18", "2009-06-18", "Cajamarca", 19),
	(48, 48, "Escuela Nacional Simón Bolívar", "matematica", "2005-10-25", "2005-10-25", "Chiclayo", 6),
	(49, 49, "Colegio Nacional San Agustín", "ingles", "2002-06-19", "2002-06-19", "Lima", 21);

/*!40000 ALTER TABLE `maestros_experiencia` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of views
# ------------------------------------------------------------

# Creating temporary tables to overcome VIEW dependency errors


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# Dump completed on 2024-09-24T21:31:15-05:00
