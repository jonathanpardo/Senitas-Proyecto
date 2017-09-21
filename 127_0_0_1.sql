-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2017 a las 19:14:30
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `senitas`
--
CREATE DATABASE IF NOT EXISTS `senitas` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `senitas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `IdAdministrador` int(10) NOT NULL,
  `NombreUsuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`IdAdministrador`, `NombreUsuario`) VALUES
(1000, 'Senitas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `idAprendiz` int(10) NOT NULL,
  `NombreUsuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`idAprendiz`, `NombreUsuario`) VALUES
(1, 'danielburgos'),
(2, 'danielburgos1'),
(4, 'Senitas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idCursos` int(11) NOT NULL,
  `Nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Duracion` int(3) NOT NULL,
  `Cupos` int(3) NOT NULL,
  `Instructor` int(5) NOT NULL,
  `Imagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idCursos`, `Nombre`, `Descripcion`, `Duracion`, `Cupos`, `Instructor`, `Imagen`) VALUES
(1, 'Prueba', 'esto es unha prueba.dsadsadasdas', 5, 5, 1, '../../ImagenesCursos/prueba.jpg'),
(2, 'hola', 'pudsad', 5, 5, 1, 'sadsadas'),
(3, 'Prueba22', '2dasdsadsadsadsadsa', 5, 5, 1, '../../ImagenesCursos/prueba22.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `IdInscripciones` int(11) NOT NULL,
  `Fk_Cursos` int(11) NOT NULL,
  `Fk_Usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`IdInscripciones`, `Fk_Cursos`, `Fk_Usuario`) VALUES
(1, 1, 2),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `idInstructor` int(10) NOT NULL,
  `NombreUsuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`idInstructor`, `NombreUsuario`) VALUES
(1, 'daniel1'),
(1001, 'instructor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `idMensaje` int(11) NOT NULL,
  `para` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `de` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `asunto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `leido` varchar(5) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`idMensaje`, `para`, `de`, `fecha`, `asunto`, `texto`, `leido`) VALUES
(1, 'daniel', 'daniel', '12/09/2017, 8:17 pm', 'prueba', 'daniel', 'si'),
(2, 'daniel', 'daniel', '12/09/2017, 8:23 pm', 'prueba', 'da', 'si'),
(3, 'daniel', 'daniel', '12/09/2017, 8:28 pm', 'lk', 'asd', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_Usuario` int(255) NOT NULL,
  `Nombres` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `NombreUsuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Contrasena` varbinary(1000) NOT NULL,
  `Foto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `FK_UsuarioAprendiz` int(10) DEFAULT NULL,
  `FK_UsuarioInstructor` int(10) DEFAULT NULL,
  `FK_UsuarioAdministrador` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_Usuario`, `Nombres`, `Apellidos`, `NombreUsuario`, `Email`, `Contrasena`, `Foto`, `FK_UsuarioAprendiz`, `FK_UsuarioInstructor`, `FK_UsuarioAdministrador`) VALUES
(2, 'Daniel', 'Burgos', 'daniel', 'daniefburgos9806@gmail.com', 0x24327924313524486c54495a49762f4134537a597174354b6b4e44552e5657386a48465869576e4e65384c623345316d33766632544a7831752e454f, '../../FotosPerfil/daniel.jpg', 1, NULL, NULL),
(3, 'Jonathan Alexis', 'Pardo Ronco', 'pardo', 'japardo52@misena.edu.co', 0x2432792431352464766d66774b4547696e64687a514e47484a43796675644257554243596f515643614f3845506d4e6457507263596c7263645a3736, '../../FotosPerfil/pardo.jpg', 1, NULL, NULL),
(1000, 'Daniel', 'Burgos', 'danielburgos', 'danielfburgos9806@gmail.com', 0x24327924313524636879763732464d6e7450413152512e4e41333752752f7843534a464862475747795a572f79684f584149594b6e3332474b2e6c65, '../../FotosPerfil/user.png', 1, NULL, NULL),
(1001, 'Daniel Felipe', 'Burgos Moceton', 'daniel1', 'danielfburgos9806@gmail.com', 0x243279243135247375336f3442496b776f756a695145456b34534e422e4f4b4d2e385a3474736c653339394e53577952352e5a6c5975385250507561, '../../FotosPerfil/user.png', NULL, 1, NULL),
(1002, 'Daniel', 'Burgos Moceton', 'danielburgos1', 'danielfburgos9806@gmail.com', 0x24327924313524613941707a6e53627a475477665777497431416e7a65612e4350535365356f42684f4662577a6865794e4e66392e4351544a337153, '../../FotosPerfil/user.png', 2, NULL, NULL),
(1004, 'Senitas', 'Senitas', 'Senitas', 'Senitas@gmail.com', 0x24327924313524494331436532625a2e4359556539494e343657714575675031446a35477a7230754356774b6a6950444d32533055565a4668617057, '../../FotosPerfil/user.png', NULL, NULL, 1000),
(1005, 'Instructor', 'Yoquese', 'instructor', 'ins@gmail.com', 0x2432792431352438514f514b64614363447165554748754a456256574f36374b4a6e666477797330304458494b386b6277796b4930504772626e6a71, '../../FotosPerfil/user.png', NULL, 1001, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`IdAdministrador`);

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`idAprendiz`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idCursos`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`IdInscripciones`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`idInstructor`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`idMensaje`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `IdAdministrador` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `idAprendiz` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idCursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `IdInscripciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `idInstructor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `idMensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_Usuario` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
