-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2017 a las 10:24:19
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_autor` longtext COLLATE utf8_unicode_ci,
  `post_user` longtext COLLATE utf8_unicode_ci,
  `post_date` longtext COLLATE utf8_unicode_ci,
  `post_content` longtext COLLATE utf8_unicode_ci,
  `post_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageFile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postFile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageSize` int(11) DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `post_status` int(11) DEFAULT NULL,
  `post_modified` datetime DEFAULT NULL,
  `post_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `post_autor`, `post_user`, `post_date`, `post_content`, `post_title`, `post_image`, `imageFile`, `postFile`, `imageName`, `imageSize`, `updatedAt`, `post_status`, `post_modified`, `post_url`, `post_type`, `post_category`) VALUES
(12, 'Jonás Márquez', 'jonas', '2017-03-30 08:19:39', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a tortor eget eros suscipit rhoncus. Sed sed sem enim. Sed interdum suscipit magna et venenatis. Donec feugiat at ipsum auctor pellentesque. Vivamus convallis enim quis pulvinar interdum. Aenean tincidunt nibh at varius efficitur. Vestibulum in velit tempus, imperdiet neque pellentesque, ultrices sem. Etiam maximus ipsum sit amet sapien dignissim fringilla. Proin id nunc tempor augue pellentesque ornare.\r\n\r\nVestibulum facilisis, felis nec aliquet semper, nisl felis blandit eros, a venenatis velit enim quis orci. Praesent lobortis, magna ut congue luctus, felis lectus vestibulum quam, sed laoreet risus enim vitae diam. Duis ac magna ut nisi accumsan vulputate sed ut lorem. Aliquam auctor nec ante vel viverra. Proin et dapibus massa. Phasellus mauris lectus, tincidunt ut pulvinar eu, tincidunt dapibus est. Phasellus fermentum elit nisl, dignissim porttitor lorem consequat in. Mauris viverra rhoncus tortor. Donec commodo feugiat neque, sed interdum quam luctus viverra. Proin vel tincidunt mi. Vestibulum blandit urna ac dolor eleifend aliquam. Vivamus faucibus erat at quam imperdiet tempor. Donec ut lacinia leo, quis pretium turpis. Curabitur ut ultrices eros, sed venenatis massa. Donec sodales magna non justo dapibus porttitor. Ut sit amet egestas neque, quis condimentum lorem.\r\n\r\nNulla porttitor, dolor ut facilisis blandit, ante leo blandit odio, in lobortis arcu velit quis mauris. Nulla a commodo nulla, id ornare metus. Curabitur purus lacus, varius eu leo vel, tristique dignissim ante. Suspendisse ultrices mi et malesuada semper. Proin dapibus egestas ex, sit amet sollicitudin nunc luctus eget. Pellentesque vestibulum tellus eu dolor rutrum, a ornare leo blandit. Maecenas ut sem id odio tincidunt venenatis. Donec rutrum felis vitae nunc fringilla malesuada. Maecenas faucibus egestas venenatis. Nulla et risus sed nibh ornare finibus. Maecenas bibendum imperdiet nisi. In in magna lobortis, venenatis ipsum et, dignissim mi. Nam elementum orci eget purus bibendum blandit fringilla vitae tellus.', 'Sample post 1', NULL, NULL, NULL, 'Sample_Post_1.gif', NULL, '2017-03-30 08:19:40', NULL, NULL, NULL, NULL, 'TEST'),
(13, 'Jonás Márquez', 'jonas', '2017-03-30 08:20:05', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a tortor eget eros suscipit rhoncus. Sed sed sem enim. Sed interdum suscipit magna et venenatis. Donec feugiat at ipsum auctor pellentesque. Vivamus convallis enim quis pulvinar interdum. Aenean tincidunt nibh at varius efficitur. Vestibulum in velit tempus, imperdiet neque pellentesque, ultrices sem. Etiam maximus ipsum sit amet sapien dignissim fringilla. Proin id nunc tempor augue pellentesque ornare.\r\n\r\nVestibulum facilisis, felis nec aliquet semper, nisl felis blandit eros, a venenatis velit enim quis orci. Praesent lobortis, magna ut congue luctus, felis lectus vestibulum quam, sed laoreet risus enim vitae diam. Duis ac magna ut nisi accumsan vulputate sed ut lorem. Aliquam auctor nec ante vel viverra. Proin et dapibus massa. Phasellus mauris lectus, tincidunt ut pulvinar eu, tincidunt dapibus est. Phasellus fermentum elit nisl, dignissim porttitor lorem consequat in. Mauris viverra rhoncus tortor. Donec commodo feugiat neque, sed interdum quam luctus viverra. Proin vel tincidunt mi. Vestibulum blandit urna ac dolor eleifend aliquam. Vivamus faucibus erat at quam imperdiet tempor. Donec ut lacinia leo, quis pretium turpis. Curabitur ut ultrices eros, sed venenatis massa. Donec sodales magna non justo dapibus porttitor. Ut sit amet egestas neque, quis condimentum lorem.\r\n\r\nNulla porttitor, dolor ut facilisis blandit, ante leo blandit odio, in lobortis arcu velit quis mauris. Nulla a commodo nulla, id ornare metus. Curabitur purus lacus, varius eu leo vel, tristique dignissim ante. Suspendisse ultrices mi et malesuada semper. Proin dapibus egestas ex, sit amet sollicitudin nunc luctus eget. Pellentesque vestibulum tellus eu dolor rutrum, a ornare leo blandit. Maecenas ut sem id odio tincidunt venenatis. Donec rutrum felis vitae nunc fringilla malesuada. Maecenas faucibus egestas venenatis. Nulla et risus sed nibh ornare finibus. Maecenas bibendum imperdiet nisi. In in magna lobortis, venenatis ipsum et, dignissim mi. Nam elementum orci eget purus bibendum blandit fringilla vitae tellus.', 'Sample post 2', NULL, NULL, NULL, 'Sample_Post_2.gif', NULL, '2017-03-30 08:20:06', NULL, NULL, NULL, NULL, 'TEST');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
