-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2020 a las 21:36:20
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdencuestauc_jmpr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `documento` int(11) NOT NULL,
  `ti` char(40) NOT NULL,
  `pais_nacimiento` char(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `apellidos` char(50) NOT NULL,
  `name` char(50) NOT NULL,
  `estado_civil` varchar(30) NOT NULL,
  `institución_educativa` char(15) NOT NULL,
  `educacion_padres` char(20) NOT NULL,
  `activida_padres` char(15) NOT NULL,
  `tipo_vivienda` char(15) NOT NULL,
  `nivel_educacion` char(15) NOT NULL,
  `ingresos_hogar` varchar(100) NOT NULL,
  `genero` char(10) NOT NULL,
  `asignaturas` int(10) NOT NULL,
  `programa_formacion` char(80) NOT NULL,
  `zona_recidencial` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `student`
--

INSERT INTO `student` (`id`, `documento`, `ti`, `pais_nacimiento`, `fecha_nacimiento`, `apellidos`, `name`, `estado_civil`, `institución_educativa`, `educacion_padres`, `activida_padres`, `tipo_vivienda`, `nivel_educacion`, `ingresos_hogar`, `genero`, `asignaturas`, `programa_formacion`, `zona_recidencial`, `email`, `password`) VALUES
(1, 1461098862, 'C.C - cedula', 'colombia', '2000-07-18', 'ACEVEDO VASQUEZ', 'VERONICA YISEL', 'divorciado (a)', 'liceo de boliva', 'bachiller', 'empleado', 'propia', 'buenabuena', '905.353 A 908.660', 'femenino', 1, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'vero1@hotmail.com', '123456'),
(2, 1461093179, 'C.C - cedula', 'colombia', '1988-08-31', 'ALVARADO CHIQUILLO', 'MICHELLE CAROLINA', 'soltero (a)', 'juan jose nieto', 'bachiller', 'empleado', 'familiar', 'buenabuena', '905.353 A 908.660', 'femenino', 2, 'TECNICO EN CONSTRUCCIONES CIVILES', 'hurbana', 'michel@hotmail.com', '123456'),
(3, 1461088539, 'C.C - cedula', 'colombia', '1982-05-13', 'ARAGON RIVERO', 'JOSE MANUEL', 'soltero (a)', 'la victoria', 'bachiller', 'sin empleo', 'propia', 'buenabuena', '905.353 A 908.661', 'masculino', 3, 'TECNICO EN MANTENIMIENTO ELECTRONICO INDUSTRIAL', 'rural ', 'jm@gmail.com', '123456'),
(4, 2147483647, 'C.C - cedula', 'colombia', '2000-06-12', 'BANQUEZ DIAZ', 'ANA ISABEL', 'soltero (a)', 'la femenina', 'bachiller', 'vendedor ambula', 'arrendada', 'buenabuena', '905.353 A 908.662', 'femenino', 2, 'TECNICO EN CONSTRUCCIONES CIVILES', 'rural ', 'anai25@hotmail.com', '123456'),
(5, 1411158511, 'C.C - cedula', 'colombia', '1992-12-18', 'BARRIOS JULIO', 'ALEXANDER', 'casado (a)', 'almirante colon', 'bachiller', 'vendedor de fri', 'propia', 'buenabuena', '905.353 A 908.663', 'masculino', 4, 'TECNICO EN MANTENIMIENTO MECANICO INDUSTRIAL', 'rural ', 'alexander06@hotmail.com', '123456'),
(6, 1466337559, 'C.C - cedula', 'colombia', '1986-08-14', 'BARRIOS PALMA', 'ELOISA BARRIOS', 'soltero (a)', 'la femenina', 'bachiller', 'aseador', 'familiar', 'buenabuena', '905.353 A 908.664', 'femenino', 1, 'TECNICO EN ANALISIS QUIMICO INDUSTRIAL', 'rural ', 'eloisab@hotmail.com', '123456'),
(7, 1410121922, 'C.C - cedula', 'colombia', '1988-04-17', 'BATISTA PEDROZA', 'LUIS CARLOS', 'soltero (a)', 'liceo de voliva', 'bachiller', 'sin empleo', 'propia', 'buenabuena', '905.353 A 908.665', 'masculino', 2, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'luisc@hotmail.com', '123456'),
(8, 1592110052, 'C.C - cedula', 'colombia', '1985-10-25', 'BENITEZ SIMANCA', 'DIANA CAROLINA', 'soltero (a)', 'corazon de jesu', 'bachiller', 'empleado', 'arrendada', 'buenabuena', '905.353 A 908.666', 'femenino', 1, 'TECNICO EN ANALISIS QUIMICO INDUSTRIAL', 'hurbana', 'dianac@hotmail.com', '123456'),
(9, 1401615008, 'C.C - cedula', 'colombia', '1981-11-16', 'BOLIVAR ZARAZA', 'JOHN DARIO', 'soltero (a)', 'la maria', 'bachiller', 'empleado', 'propia', 'buenabuena', '905.353 A 908.667', 'masculino', 2, 'TECNICO EN MANTENIMIENTO ELECTRONICO INDUSTRIAL', 'rural ', 'jdairo@hotmail.com', '123456'),
(10, 1467809701, 'C.C - cedula', 'colombia', '1985-09-18', 'CUETO HERNANDEZ', 'WENDY YULEISIS', 'soltero (a)', 'la maria', 'bachiller', 'empleado', 'familiar', 'buenabuena', '905.353 A 908.668', 'femenino', 3, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'wydiaz@hotmail.com', '123456'),
(11, 1401615604, 'C.C - cedula', 'colombia', '2001-12-24', 'DIAZ ANGULO', 'CARLOS MANUEL', 'casado (a)', 'liceo de boliva', 'bachiller', 'sin empleo', 'propia', 'buenabuena', '905.353 A 908.669', 'masculino', 1, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'carlosdiaz@hotmail.com', '123456'),
(12, 1411160955, 'C.C - cedula', 'colombia', '1987-05-05', 'DIAZ GUTIERREZ', 'NEISER ALBERTO', 'divorciado (a)', 'juan jose nieto', 'bachiller', 'vendedor ambula', 'arrendada', 'buenabuena', '905.353 A 908.670', 'masculino', 2, 'TECNICO EN OPERACI?N DE PROCESOS INDUSTRIALES', 'rural ', 'neiser_a@hotmail.com', '123456'),
(13, 1467840345, 'C.C - cedula', 'colombia', '1995-06-03', 'DIAZ ROJAS', 'FABIAN DIAZ', 'soltero (a)', 'la victoria', 'bachiller', 'vendedor de fri', 'familiar', 'buenabuena', '905.353 A 908.671', 'masculino', 2, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'fabian18@hotmail.com', '123456'),
(14, 1671003270, 'C.C - cedula', 'colombia', '1998-07-25', 'ESSALAS ESPEJO', 'CAMILO ANDRES', 'soltero (a)', 'la femenina', 'bachiller', 'aseador', 'propia', 'buenabuena', '905.353 A 908.672', 'masculino', 1, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'hurbana', 'candres@hotmail.com', '123456'),
(15, 1453161753, 'C.C - cedula', 'colombia', '1984-01-05', 'GALEANO GOMEZ', 'LUIS ESTEBAN', 'unio libre', 'almirante colon', 'bachiller', 'sin empleo', 'arrendada', 'buenabuena', '905.353 A 908.673', 'masculino', 2, 'TECNICO EN MANTENIMIENTO ELECTRONICO INDUSTRIAL', 'rural ', 'galeanoluis@hotmail.com', '123456'),
(16, 2147483647, 'C.C - cedula', 'colombia', '1983-02-16', 'GARCIA CASTILLO', 'DANIELA', 'soltero (a)', 'la femenina', 'bachiller', 'empleado', 'propia', 'buenabuena', '905.353 A 908.674', 'femenino', 3, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'dgarcia@hotmail.com', '123456'),
(17, 1466321952, 'C.C - cedula', 'colombia', '1987-03-19', 'GARCIA DE LEON', 'JORGE LUIS', 'soltero (a)', 'liceo de voliva', 'bachiller', 'empleado', 'familiar', 'buenabuena', '905.353 A 908.675', 'masculino', 1, 'TECNICO EN MANTENIMIENTO MECANICO INDUSTRIAL', 'rural ', 'jorge@yahoo.es', '123456'),
(18, 1461098173, 'C.C - cedula', 'colombia', '1982-04-12', 'GAVIRIA TEHERAN', 'GENESIS NAZARETH', 'soltero (a)', 'corazon de jesu', 'bachiller', 'empleado', 'familiar', 'buenabuena', '905.353 A 908.676', 'femenino', 1, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'genesisgaviria@hotmail.com', '123456'),
(19, 1461093928, 'C.C - cedula', 'colombia', '2001-04-18', 'GOMEZ PACHECO', 'DANNA', 'soltero (a)', 'la maria', 'bachiller', 'sin empleo', 'propia', 'buenabuena', '905.353 A 908.677', 'femenino', 1, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'danna23@gmail.com', '123456'),
(20, 1461092137, 'C.C - cedula', 'colombia', '2000-05-22', 'HERNANDEZ GARCIA', 'AURA CRISTINA', 'soltero (a)', 'la maria', 'bachiller', 'vendedor ambula', 'arrendada', 'buenabuena', '905.353 A 908.678', 'femenino', 2, 'TECNICO EN CONSTRUCCIONES CIVILES', 'hurbana', 'cristina2020@hotmail.com', '123456'),
(21, 1458761322, 'C.C - cedula', 'colombia', '1994-08-14', 'HERRERA GONZALES', 'LAURA MICHEL', 'soltero (a)', 'liceo de boliva', 'bachiller', 'vendedor de fri', 'propia', 'buenabuena', '905.353 A 908.679', 'femenino', 3, 'TECNICO EN CONSTRUCCIONES CIVILES', 'rural ', 'laura1985@hotmail.com', '123456'),
(22, 1542016608, 'C.C - cedula', 'colombia', '2001-09-16', 'JIMENEZ RAMOS', 'YORYANIS JIMENEZ', 'casado (a)', 'juan jose nieto', 'bachiller', 'aseador', 'familiar', 'buenabuena', '905.353 A 908.680', 'masculino', 1, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'yjso01@hotmail.com', '123456'),
(23, 1579263822, 'C.C - cedula', 'colombia', '1982-07-15', 'JULIO GUZMAN', 'YARLEIDIS KATERIN', 'soltero (a)', 'la victoria', 'bachiller', 'sin empleo', 'propia', 'buenabuena', '905.353 A 908.681', 'femenino', 2, 'TECNICO EN ANALISIS QUIMICO INDUSTRIAL', 'rural ', 'yarleidisk@gmail.com', '123456'),
(24, 1501149990, 'C.C - cedula', 'colombia', '1989-06-23', 'LOZANO RIVERO', 'LORENA LOZANO', 'union libre', 'la femenina', 'bachiller', 'empleado', 'familiar', 'buenabuena', '905.353 A 908.682', 'femenino', 2, 'TECNICO EN SEGURIDAD INDUSTRIAL', 'rural ', 'lorenalozano@hotmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `IDENTIFICACION` int(15) NOT NULL,
  `APELLIDOS` varchar(20) NOT NULL,
  `NOMBRES` varchar(20) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='ADMINISTRADOR';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `IDENTIFICACION`, `APELLIDOS`, `NOMBRES`, `EMAIL`, `password`) VALUES
(1234567900, 1234567890, 'ROMERO PE?ARANDA', 'MIGUEL ', 'mromerop@mrpsistemas.com', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IDENTIFICACION` (`IDENTIFICACION`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567901;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
