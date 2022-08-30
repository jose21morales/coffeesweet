-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-08-2020 a las 14:32:08
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `description` text,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `about`
--

INSERT INTO `about` (`id`, `name`, `description`, `img`) VALUES
(1, 'ethan hont', 'El señor Ethan Hont fundó junto con sus colegas esta empresa en el año de 1983 tiene más de 20 años de experiencia en el sector.', 'cofundador1.jpg'),
(2, 'sara connor', 'Cofundadora de esta cafeteria la señora Sara la fundó junto con sus colegas cuenta con más de 20 años de experiencia en el sector.', 'cofundador2.png'),
(3, 'mongomery burns', 'El señor Mongomery Burns es cofundador de esta empresa y actualmente creador de nuevos sabores de nuestros postres, cuenta con 25 años de experiencia.', 'cofundador3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `txt` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `title`, `txt`) VALUES
(1, 'Hola bienvenido somos Coffee-Sweet', 'Ven y disfruta de un excelente establecimiento ideal para tomar una deliciosa taza de café, contamos con internet gratuito y un lugar climatizado para que puedas realizar tus trabajos en tu Laptop.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cakes`
--

CREATE TABLE `cakes` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` varchar(300) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cakes`
--

INSERT INTO `cakes` (`id`, `title`, `price`, `img`) VALUES
(1, 'postre 1', '$40.00', 'cake1.jpg'),
(2, 'postre 2', '$40.00', 'cake2.jpg'),
(3, 'postre 3', '$40.00', 'cake3.jpg'),
(4, 'postre 4', '$40.00', 'cake4.jpg'),
(5, 'postre 5', '$40.00', 'cake5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coffee`
--

CREATE TABLE `coffee` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` varchar(300) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coffee`
--

INSERT INTO `coffee` (`id`, `title`, `price`, `img`) VALUES
(1, 'café 1', '$40.00', 'coffee1.jpg'),
(2, 'café 2', '$40.00', 'coffee2.jpg'),
(3, 'café 3', '$40.00', 'coffee3.jpg'),
(11, 'café 4', '$80.00', 'coffee4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `description` text,
  `phone` varchar(300) DEFAULT NULL,
  `whatsapp` varchar(300) DEFAULT NULL,
  `mail` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `description`, `phone`, `whatsapp`, `mail`) VALUES
(1, 'Información de contacto', 'Aqui encontraras toda la información necesaria para ponerte en contacto con nosotros y resolver todas tus dudas.  ', ' 52 999-999-999', ' 52 999-999-999', 'info@coffee-sweet.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `txt` text NOT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `experience`
--

INSERT INTO `experience` (`id`, `title`, `txt`, `img`) VALUES
(1, 'Nuestra experiencia     ', 'Abrimos hace 30 años y desde entonces hemos mejorado en la calidad de nuestros servicios, tenemos personal altamente capacitados en el area dez preparado de café y postres.     ', 'experience.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `description` text,
  `place` varchar(300) DEFAULT NULL,
  `phone` varchar(300) DEFAULT NULL,
  `mail` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `footer`
--

INSERT INTO `footer` (`id`, `description`, `place`, `phone`, `mail`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'Te ayudaremos a hacer crecer tu negocio atrayendo más clientes a tu empresa por medio de anuncios publicitarios en Facebook. De esta manera se incrementaran las ventas de tus productos o servicios y lo mejor de todo, tu no tienes que hacer nada, todo el trabajo seria de parte nuestra.        ', 'Tapachula, Chiapas      ', 'Teléfono: 999-999-999        ', 'info@coffee-sweet.com        ', 'https://www.facebook.com ', 'https://www.instagram.com    ', 'https://www.twitter.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) NOT NULL,
  `name` varchar(300) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `img`) VALUES
(1, 'Imagen 1', 'gallery01.jpg'),
(2, 'Imagen 2', 'gallery02.jpg'),
(3, 'Imagen 3', 'gallery03.jpg'),
(4, 'Imagen 4', 'gallery04.jpg'),
(5, 'Imagen 5', 'gallery05.jpg'),
(6, 'Imagen 6', 'gallery06.jpg'),
(7, 'Imagen 7', 'gallery07.jpg'),
(8, 'Imagen 8', 'gallery08.jpg'),
(9, 'Imagen 9', 'gallery09.jpg'),
(19, '', 'images.pptx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `age` varchar(300) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `name`, `age`, `img`) VALUES
(2, 'homero simpson', '38', 'chef2.jpg'),
(4, 'kyle smith', '28', 'chef3.jpg'),
(5, 'osvaldo ramos', '31', 'chef1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `txt` text,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `title`, `txt`, `img`) VALUES
(1, 'cafeteria', 'Tenemos diferentes tipos de café incluidos capuchino, café negro entre otros, seguro hay uno para ti.', 'cafeteria.jpg'),
(2, 'postres', 'Siempre podras acompañar tu taza de café con algunos de nuestros deliciosos postres.', 'cakes.jpg'),
(7, 'internet gratis', 'Contamos con internet gratuito ideal para hacer tus trabajos disfrutando de una deliciosa tasa de café al gusto.', 'cakes.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `usuario` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `mail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `usuario`, `password`, `mail`) VALUES
(1, 'josé', 'admin', '$2y$12$71oou.61Q84gKL/wKSkGleTZS/ENneu5YjIbJi6CLkTX/Idt5joSK', 'jose33.cecilio@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `welcome`
--

CREATE TABLE `welcome` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `txt` text NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `welcome`
--

INSERT INTO `welcome` (`id`, `title`, `txt`, `img`) VALUES
(1, 'Bienvenido a nuestro sitio web', 'Contamos con un grandioso establecimiento climatizado y con internet gratis ideal para venir a hacer tus trabajos mientras disfrutas de una deliciosa taza de café al gusto.       ', 'welcome.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
