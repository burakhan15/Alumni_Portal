-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 May 2018, 20:04:52
-- Sunucu sürümü: 10.1.31-MariaDB
-- PHP Sürümü: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `alumni`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_turkish_ci,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `about`
--

INSERT INTO `about` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>The&nbsp;Alumni&nbsp;Team&nbsp;has&nbsp;always&nbsp;had&nbsp;the&nbsp;vision&nbsp;to&nbsp;nurture&nbsp;a&nbsp;community&nbsp;where&nbsp;each&nbsp;and&nbsp;every&nbsp;member&nbsp;feels&nbsp;connected&nbsp;with&nbsp;the&nbsp;alma&nbsp;mater&nbsp;and&nbsp;with&nbsp;each&nbsp;and&nbsp;every&nbsp;member&nbsp;of&nbsp;the&nbsp;CIU&nbsp;family.&nbsp;We,&nbsp;as&nbsp;a&nbsp;team,&nbsp;aims&nbsp;to&nbsp;bring&nbsp;together&nbsp;CIU&nbsp;as&nbsp;a&nbsp;family.</p>\r\n\r\n<p>Our&nbsp;main&nbsp;objectives&nbsp;include</p>\r\n\r\n<ul>\r\n	<li>Ensuring&nbsp;that&nbsp;the&nbsp;alumni&nbsp;community&nbsp;is&nbsp;well&nbsp;connected</li>\r\n	<li>Ensuring&nbsp;that&nbsp;our&nbsp;alumni&nbsp;feel&nbsp;a&nbsp;sense&nbsp;of&nbsp;belonging&nbsp;to&nbsp;their&nbsp;alma&nbsp;mater</li>\r\n	<li>Establishing&nbsp;and&nbsp;sustaining&nbsp;a&nbsp;link&nbsp;between&nbsp;the&nbsp;alumni&nbsp;and&nbsp;<strong>students</strong></li>\r\n</ul>\r\n\r\n<p><img alt=\"CIU Alumni\" src=\"http://192.168.1.106/alumni/images/alumni.webp\" /></p>', '2018-05-08 04:44:03', '2018-05-15 17:37:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Team&nbsp;Coordinator:</strong>&nbsp;Name&nbsp;Surname&nbsp;<br />\r\n<strong>Phone:</strong>&nbsp;+90-1234567890&nbsp;<br />\r\n<strong>Email:</strong>&nbsp;namesurname@gmail.com&nbsp;</p>\r\n\r\n<hr />\r\n<p><strong>Senior&nbsp;Member:</strong>&nbsp;Name&nbsp;Surname&nbsp;<br />\r\n<strong>Phone:</strong>&nbsp;+90-1234567890&nbsp;</p>\r\n\r\n<hr />\r\n<p><strong>Junior&nbsp;Member:</strong>&nbsp;Name&nbsp;Surname&nbsp;<br />\r\n<strong>Phone:</strong>&nbsp;+90-1234567890&nbsp;</p>\r\n\r\n<hr />\r\n<p><strong>Junior&nbsp;Member:</strong>&nbsp;Name&nbsp;Surname&nbsp;<br />\r\n<strong>Phone:</strong>&nbsp;+90-1234567890&nbsp;</p>', '0000-00-00 00:00:00', '2018-05-15 17:32:55'),
(2, '<p>kkk</p>', '2018-05-12 23:39:04', '2018-05-12 23:39:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `datetime` date NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `events`
--

INSERT INTO `events` (`id`, `headline`, `description`, `address`, `datetime`, `content`, `created_at`, `updated_at`) VALUES
(7, 'ccc', '', 'ccc', '2018-05-03', '<p>ccc</p>', '2018-05-08 07:38:20', '2018-05-08 07:38:20'),
(8, 'ccc', '', 'ccc', '2018-05-03', '<p>ccc</p>', '2018-05-08 07:38:40', '2018-05-08 07:38:40'),
(9, 'asd', '', 'asdasd', '2018-05-03', '<p>cccasdasd</p>', '2018-05-08 07:39:23', '2018-05-08 07:39:23'),
(10, 'Have a good time', 'Süper bir gün', 'xxxx', '2018-05-24', '<p>xxxxx</p>', '2018-05-08 07:40:27', '2018-05-12 22:26:12'),
(12, 'asdasd', 'dasd', 'asdas', '2018-05-20', '<p>asdasd</p>', '2018-05-12 12:11:54', '2018-05-12 12:11:54'),
(13, 'cccccccccccc', 'cccccccccccccccccccccccc', 'cccccccccc', '2018-05-13', '<p>ccccccccccccccccccccc</p>', '2018-05-12 22:29:09', '2018-05-12 22:29:09'),
(14, '1', '1', '1', '2018-05-26', '<p>1</p>', '2018-05-14 18:09:27', '2018-05-14 18:09:27'),
(15, 'Rendezvous - Class of 2017', 'Symbiosis Institute of Business Management', '23 Victoria Street. Hounslow. Middle TW5 8HU', '2018-05-31', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit,&nbsp;sed&nbsp;do&nbsp;eiusmod&nbsp;tempor&nbsp;incididunt&nbsp;ut&nbsp;labore&nbsp;et&nbsp;dolore&nbsp;magna&nbsp;aliqua.&nbsp;Ut&nbsp;enim&nbsp;ad&nbsp;minim&nbsp;veniam,&nbsp;quis&nbsp;nostrud&nbsp;exercitation&nbsp;ullamco&nbsp;laboris&nbsp;nisi&nbsp;ut&nbsp;aliquip&nbsp;ex&nbsp;ea&nbsp;commodo&nbsp;consequat.&nbsp;Duis&nbsp;aute&nbsp;irure&nbsp;dolor&nbsp;in&nbsp;reprehenderit&nbsp;in&nbsp;voluptate&nbsp;velit&nbsp;esse&nbsp;cillum&nbsp;dolore&nbsp;eu&nbsp;fugiat&nbsp;nulla&nbsp;pariatur.&nbsp;Excepteur&nbsp;sint&nbsp;occaecat&nbsp;cupidatat&nbsp;non&nbsp;proident,&nbsp;sunt&nbsp;in&nbsp;culpa&nbsp;qui&nbsp;officia&nbsp;deserunt&nbsp;mollit&nbsp;anim&nbsp;id&nbsp;est&nbsp;laborum.</p>\r\n\r\n<p><img src=\"http://localhost/alumni/images/students.png\" style=\"width:100%\" /></p>', '2018-05-15 17:34:12', '2018-05-15 17:34:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `join_event`
--

CREATE TABLE `join_event` (
  `id` int(11) NOT NULL,
  `event_id` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `user_id` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `join_event`
--

INSERT INTO `join_event` (`id`, `event_id`, `user_id`, `created_at`, `updated_at`) VALUES
(27, '12', '11111111111', '2018-05-15 17:23:40', '2018-05-15 17:23:40'),
(28, '10', '11111111111', '2018-05-15 17:26:04', '2018-05-15 17:26:04'),
(29, '14', '11111111111', '2018-05-15 17:28:43', '2018-05-15 17:28:43'),
(30, '15', '11111111111', '2018-05-15 17:34:50', '2018-05-15 17:34:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `desctription` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `content` text COLLATE utf8_turkish_ci,
  `sender` varchar(22) COLLATE utf8_turkish_ci NOT NULL,
  `receiver` varchar(22) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `headline`, `desctription`, `content`, `sender`, `receiver`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', '', 'as', '11111111111', '19970033123', '2018-05-13 23:16:09', '2018-05-13 23:16:09'),
(2, 'dasda', '', 'sdasd', '11111111111', '19970033123', '2018-05-13 23:18:45', '2018-05-13 23:18:45'),
(3, 'asda', '', 'asda\r\n					asd', '11111111111', '19970033123', '2018-05-13 23:19:32', '2018-05-13 23:19:32'),
(4, 'asdas', '', 'dasd', '11111111111', '19970033123', '2018-05-13 23:20:17', '2018-05-13 23:20:17'),
(5, 'adsd', '', 'sad', '11111111111', '19970033123', '2018-05-13 23:21:14', '2018-05-13 23:21:14'),
(7, 'adsdsa', '', 'asd', '11111111111', '19970033123', '2018-05-14 14:51:03', '2018-05-14 14:51:03'),
(8, 'dsadsa', '', 'asdsd', '11111111111', '19970033123', '2018-05-14 14:51:07', '2018-05-14 14:51:07'),
(9, 'asad', NULL, 'asdds', '11111111111', '19970033123', '2018-05-14 14:53:05', '2018-05-14 14:53:05'),
(10, 'das', NULL, 'dsa', '11111111111', '19970033123', '2018-05-14 14:54:55', '2018-05-14 14:54:55'),
(11, 'dsadsa', NULL, 'dsadsa', '11111111111', '19970033123', '2018-05-14 14:56:13', '2018-05-14 14:56:13'),
(12, 'adsadsa', NULL, 'dsadsa', '11111111111', '19970033123', '2018-05-14 14:57:27', '2018-05-14 14:57:27'),
(13, 'asdaasd', 'asd', 'adsdsa', '11111111111', '19970033123', '2018-05-14 14:58:18', '2018-05-14 14:58:18'),
(14, 'dsadas', 'asddsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsa', 'dsaaaa', '11111111111', '19970033123', '2018-05-14 14:58:38', '2018-05-14 14:58:38'),
(15, 'ddddddddddddd', 'asddsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsadsaasdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'sdaaaa', '11111111111', '19970033123', '2018-05-14 14:59:00', '2018-05-14 14:59:00'),
(20, 'denneme burakhan', NULL, 'deneme burahkan', '11111111111', '19970033123', '2018-05-14 17:01:38', '2018-05-14 17:01:38'),
(21, 'ads', NULL, 'asd', '11111111111', '19970033123', '2018-05-14 17:12:04', '2018-05-14 17:12:04'),
(22, 'asd', NULL, 'asd', '11111111111', '19970033123', '2018-05-14 17:12:12', '2018-05-14 17:12:12'),
(27, 'son', NULL, 'mesaj', '11111111111', '11111111111', '2018-05-15 17:38:43', '2018-05-15 17:38:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(46, '2014_10_12_000000_create_users_table', 1),
(47, '2014_10_12_100000_create_password_resets_table', 1),
(48, '2018_04_01_073512_students', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `content` text COLLATE utf8_turkish_ci,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `headline`, `image`, `content`, `description`, `created_at`, `updated_at`) VALUES
(16, 'HELLO WORLD!', NULL, '<p><img src=\"http://192.168.1.106/alumni/images/ciu.webp\" style=\"width:100%\" /></p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit,&nbsp;sed&nbsp;do&nbsp;eiusmod&nbsp;tempor&nbsp;incididunt&nbsp;ut&nbsp;labore&nbsp;et&nbsp;dolore&nbsp;magna&nbsp;aliqua.&nbsp;Ut&nbsp;enim&nbsp;ad&nbsp;minim&nbsp;veniam,&nbsp;quis&nbsp;nostrud&nbsp;exercitation&nbsp;ullamco&nbsp;laboris&nbsp;nisi&nbsp;ut&nbsp;aliquip&nbsp;ex&nbsp;ea&nbsp;commodo&nbsp;consequat.&nbsp;Duis&nbsp;aute&nbsp;irure&nbsp;dolor&nbsp;in&nbsp;reprehenderit&nbsp;in&nbsp;voluptate&nbsp;velit&nbsp;esse&nbsp;cillum&nbsp;dolore&nbsp;eu&nbsp;fugiat&nbsp;nulla&nbsp;pariatur.&nbsp;Excepteur&nbsp;sint&nbsp;occaecat&nbsp;cupidatat&nbsp;non&nbsp;proident,&nbsp;sunt&nbsp;in&nbsp;culpa&nbsp;qui&nbsp;officia&nbsp;deserunt&nbsp;mollit&nbsp;anim&nbsp;id&nbsp;est&nbsp;laborum.</p>\r\n\r\n<pre>\r\nMr.&nbsp;Aashish&nbsp;Chandorkar,&nbsp;VP&nbsp;and&nbsp;India&nbsp;Head,&nbsp;Capgemini&nbsp;Consulting\r\nMr.&nbsp;Sandip&nbsp;Garg,&nbsp;IRS&nbsp;(Batch&nbsp;1992),&nbsp;Commissioner&nbsp;of&nbsp;Income&nbsp;Tax\r\nMr.&nbsp;Navneet&nbsp;Kothari,&nbsp;Director,&nbsp;Tax&nbsp;&amp;&nbsp;Regulatory,&nbsp;PwC&nbsp;India\r\nMs.&nbsp;Bhusana&nbsp;Karandikar,&nbsp;Agro&nbsp;Economist,&nbsp;and&nbsp;Dy.&nbsp;Comm&nbsp;of&nbsp;Sales&nbsp;Tax&nbsp;(Ex),&nbsp;Govt.&nbsp;of&nbsp;Maharashtra\r\nMr.&nbsp;Ajaya&nbsp;Sharma,&nbsp;Head,&nbsp;Research-&nbsp;Markets&nbsp;and&nbsp;Anchor,&nbsp;ET&nbsp;NOW&nbsp;moderated&nbsp;the&nbsp;session.</pre>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2018-05-14 17:26:42', '2018-05-14 17:26:42'),
(17, 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT.', NULL, '<p><img src=\"http://192.168.1.106/alumni/images/ciu.webp\" style=\"width:100%\" /></p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit,&nbsp;sed&nbsp;do&nbsp;eiusmod&nbsp;tempor&nbsp;incididunt&nbsp;ut&nbsp;labore&nbsp;et&nbsp;dolore&nbsp;magna&nbsp;aliqua.&nbsp;Ut&nbsp;enim&nbsp;ad&nbsp;minim&nbsp;veniam,&nbsp;quis&nbsp;nostrud&nbsp;exercitation&nbsp;ullamco&nbsp;laboris&nbsp;nisi&nbsp;ut&nbsp;aliquip&nbsp;ex&nbsp;ea&nbsp;commodo&nbsp;consequat.&nbsp;Duis&nbsp;aute&nbsp;irure&nbsp;dolor&nbsp;in&nbsp;reprehenderit&nbsp;in&nbsp;voluptate&nbsp;velit&nbsp;esse&nbsp;cillum&nbsp;dolore&nbsp;eu&nbsp;fugiat&nbsp;nulla&nbsp;pariatur.&nbsp;Excepteur&nbsp;sint&nbsp;occaecat&nbsp;cupidatat&nbsp;non&nbsp;proident,&nbsp;sunt&nbsp;in&nbsp;culpa&nbsp;qui&nbsp;officia&nbsp;deserunt&nbsp;mollit&nbsp;anim&nbsp;id&nbsp;est&nbsp;laborum.</p>\r\n\r\n<pre>\r\nMr.&nbsp;Aashish&nbsp;Chandorkar,&nbsp;VP&nbsp;and&nbsp;India&nbsp;Head,&nbsp;Capgemini&nbsp;Consulting\r\nMr.&nbsp;Sandip&nbsp;Garg,&nbsp;IRS&nbsp;(Batch&nbsp;1992),&nbsp;Commissioner&nbsp;of&nbsp;Income&nbsp;Tax\r\nMr.&nbsp;Navneet&nbsp;Kothari,&nbsp;Director,&nbsp;Tax&nbsp;&amp;&nbsp;Regulatory,&nbsp;PwC&nbsp;India\r\nMs.&nbsp;Bhusana&nbsp;Karandikar,&nbsp;Agro&nbsp;Economist,&nbsp;and&nbsp;Dy.&nbsp;Comm&nbsp;of&nbsp;Sales&nbsp;Tax&nbsp;(Ex),&nbsp;Govt.&nbsp;of&nbsp;Maharashtra\r\nMr.&nbsp;Ajaya&nbsp;Sharma,&nbsp;Head,&nbsp;Research-&nbsp;Markets&nbsp;and&nbsp;Anchor,&nbsp;ET&nbsp;NOW&nbsp;moderated&nbsp;the&nbsp;session.</pre>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2018-05-14 17:28:05', '2018-05-14 17:28:05'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Vu61Z8wXH42xNTE-alumni-students.png', '<p><img src=\"http://192.168.1.106/alumni/images/ciu.webp\" style=\"width:100%\" /></p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit,&nbsp;sed&nbsp;do&nbsp;eiusmod&nbsp;tempor&nbsp;incididunt&nbsp;ut&nbsp;labore&nbsp;et&nbsp;dolore&nbsp;magna&nbsp;aliqua.&nbsp;Ut&nbsp;enim&nbsp;ad&nbsp;minim&nbsp;veniam,&nbsp;quis&nbsp;nostrud&nbsp;exercitation&nbsp;ullamco&nbsp;laboris&nbsp;nisi&nbsp;ut&nbsp;aliquip&nbsp;ex&nbsp;ea&nbsp;commodo&nbsp;consequat.&nbsp;Duis&nbsp;aute&nbsp;irure&nbsp;dolor&nbsp;in&nbsp;reprehenderit&nbsp;in&nbsp;voluptate&nbsp;velit&nbsp;esse&nbsp;cillum&nbsp;dolore&nbsp;eu&nbsp;fugiat&nbsp;nulla&nbsp;pariatur.&nbsp;Excepteur&nbsp;sint&nbsp;occaecat&nbsp;cupidatat&nbsp;non&nbsp;proident,&nbsp;sunt&nbsp;in&nbsp;culpa&nbsp;qui&nbsp;officia&nbsp;deserunt&nbsp;mollit&nbsp;anim&nbsp;id&nbsp;est&nbsp;laborum.</p>\r\n\r\n<pre>\r\nMr.&nbsp;Aashish&nbsp;Chandorkar,&nbsp;VP&nbsp;and&nbsp;India&nbsp;Head,&nbsp;Capgemini&nbsp;Consulting\r\nMr.&nbsp;Sandip&nbsp;Garg,&nbsp;IRS&nbsp;(Batch&nbsp;1992),&nbsp;Commissioner&nbsp;of&nbsp;Income&nbsp;Tax\r\nMr.&nbsp;Navneet&nbsp;Kothari,&nbsp;Director,&nbsp;Tax&nbsp;&amp;&nbsp;Regulatory,&nbsp;PwC&nbsp;India\r\nMs.&nbsp;Bhusana&nbsp;Karandikar,&nbsp;Agro&nbsp;Economist,&nbsp;and&nbsp;Dy.&nbsp;Comm&nbsp;of&nbsp;Sales&nbsp;Tax&nbsp;(Ex),&nbsp;Govt.&nbsp;of&nbsp;Maharashtra\r\nMr.&nbsp;Ajaya&nbsp;Sharma,&nbsp;Head,&nbsp;Research-&nbsp;Markets&nbsp;and&nbsp;Anchor,&nbsp;ET&nbsp;NOW&nbsp;moderated&nbsp;the&nbsp;session.</pre>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '2018-05-14 17:34:33', '2018-05-14 17:48:20'),
(19, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', NULL, '<p><img src=\"http://192.168.1.106/alumni/images/ciu.webp\" style=\"width:100%\" /></p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.</p>\r\n\r\n<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit,&nbsp;sed&nbsp;do&nbsp;eiusmod&nbsp;tempor&nbsp;incididunt&nbsp;ut&nbsp;labore&nbsp;et&nbsp;dolore&nbsp;magna&nbsp;aliqua.&nbsp;Ut&nbsp;enim&nbsp;ad&nbsp;minim&nbsp;veniam,&nbsp;quis&nbsp;nostrud&nbsp;exercitation&nbsp;ullamco&nbsp;laboris&nbsp;nisi&nbsp;ut&nbsp;aliquip&nbsp;ex&nbsp;ea&nbsp;commodo&nbsp;consequat.&nbsp;Duis&nbsp;aute&nbsp;irure&nbsp;dolor&nbsp;in&nbsp;reprehenderit&nbsp;in&nbsp;voluptate&nbsp;velit&nbsp;esse&nbsp;cillum&nbsp;dolore&nbsp;eu&nbsp;fugiat&nbsp;nulla&nbsp;pariatur.&nbsp;Excepteur&nbsp;sint&nbsp;occaecat&nbsp;cupidatat&nbsp;non&nbsp;proident,&nbsp;sunt&nbsp;in&nbsp;culpa&nbsp;qui&nbsp;officia&nbsp;deserunt&nbsp;mollit&nbsp;anim&nbsp;id&nbsp;est&nbsp;laborum.</p>\r\n\r\n<pre>\r\nMr.&nbsp;Aashish&nbsp;Chandorkar,&nbsp;VP&nbsp;and&nbsp;India&nbsp;Head,&nbsp;Capgemini&nbsp;Consulting\r\nMr.&nbsp;Sandip&nbsp;Garg,&nbsp;IRS&nbsp;(Batch&nbsp;1992),&nbsp;Commissioner&nbsp;of&nbsp;Income&nbsp;Tax\r\nMr.&nbsp;Navneet&nbsp;Kothari,&nbsp;Director,&nbsp;Tax&nbsp;&amp;&nbsp;Regulatory,&nbsp;PwC&nbsp;India\r\nMs.&nbsp;Bhusana&nbsp;Karandikar,&nbsp;Agro&nbsp;Economist,&nbsp;and&nbsp;Dy.&nbsp;Comm&nbsp;of&nbsp;Sales&nbsp;Tax&nbsp;(Ex),&nbsp;Govt.&nbsp;of&nbsp;Maharashtra\r\nMr.&nbsp;Ajaya&nbsp;Sharma,&nbsp;Head,&nbsp;Research-&nbsp;Markets&nbsp;and&nbsp;Anchor,&nbsp;ET&nbsp;NOW&nbsp;moderated&nbsp;the&nbsp;session.</pre>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', '2018-05-14 17:34:33', '2018-05-14 17:34:33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sur_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduation` date NOT NULL,
  `semester` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity_id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ccc` date NOT NULL,
  `maps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `students`
--

INSERT INTO `students` (`id`, `name`, `sur_name`, `father_name`, `birth_date`, `birth_place`, `country`, `gender`, `nationality`, `department`, `graduation`, `semester`, `identity_id`, `school_id`, `start_date`, `created_at`, `updated_at`, `ccc`, `maps`) VALUES
(1, 'ÜMSAN', 'POLAT', 'SALİH', '1980-03-10', 'LEFKOŞA', 'KKTC', 'female', 'KKTC', 'MİMARLIK', '2002-09-05', '20013', 19970008123, 19970008, '1998-08-14', NULL, '2018-05-12 18:59:26', '2018-05-06', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(2, 'HÜSEYİN', 'ÇEKTÜRK', 'İBRAHİM', '1971-04-02', 'REŞADİYE', 'TURKEY', 'ERKEK', 'TC', 'RADYO VE TELEVİZYON', '2002-06-26', '20012', 19970025123, 19970025, '1998-08-13', NULL, NULL, '2018-05-01', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(3, 'SERKAN', 'CEYRAN', 'TAHİR', '1979-09-05', 'ZONGULDAK', 'TURKEY', 'ERKEK', 'TC', 'TURİZM OTEL İŞLETMECİLİĞİ', '2002-09-05', '20012', 19970033123, 19970033, '1998-08-10', NULL, NULL, '0000-00-00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(4, 'FATMA', 'MİRALAY', 'MUSTAFA', '0000-00-00', 'KKTC', 'KKTC', 'BAYAN', 'KKTC', 'MODA VE TEKSTİL TASARIM', '0000-00-00', '20021', 19970079123, 19970079, '1998-09-15', NULL, NULL, '0000-00-00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(5, 'SÜLEYMAN', 'CEYLAN', 'MUHİTTİN', '0000-00-00', 'AKSARAY', 'TURKEY', 'ERKEK', 'TC', 'İŞLETME', '0000-00-00', '20002', 19970056123, 19970056, '1996-08-22', NULL, NULL, '0000-00-00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(6, 'GÜLŞAH', 'SEVER', 'MEHMET', '0000-00-00', 'KIRIKHAN', 'TURKEY', 'BAYAN', 'TC', 'GRAFİK', '0000-00-00', '20001', 19970090123, 19970090, '0000-00-00', NULL, NULL, '0000-00-00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(7, 'ALPER CAVİT', 'TÜRKAY', 'SAVAŞ', '0000-00-00', 'KADIKÖY', 'TURKEY', 'ERKEK', 'TC', 'ULUSLARARASI İLİŞKİLER', '0000-00-00', '20012', 19970018123, 19970018, '0000-00-00', NULL, NULL, '0000-00-00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(8, 'ERKAN', 'GÖNÜL', 'CİHAN', '0000-00-00', 'AKYAZI', 'TURKEY', 'ERKEK', 'TC', 'ULUSLARARASI İLİŞKİLER', '0000-00-00', '20012', 19970026123, 19970026, '0000-00-00', NULL, NULL, '0000-00-00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(9, 'İPEK', 'HASTÜRK', 'MEHMET', '0000-00-00', 'LEFKOŞA', 'KKTC', 'BAYAN', 'KKTC', 'BİLGİSAYAR MÜHENDİSLİĞİ', '0000-00-00', '20012', 19970038123, 19970038, '0000-00-00', NULL, NULL, '0000-00-00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(10, 'SEZGİN', 'YILDIZ', 'HASAN', '0000-00-00', 'FINDIKLI', 'TURKEY', 'ERKEK', 'TC', 'ULUSLARARASI İLİŞKİLER', '0000-00-00', '20012', 19970057123, 19970057, '0000-00-00', NULL, NULL, '0000-00-00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(11, 'KEZBAN', 'SELÇUK', 'CENGİZ', '0000-00-00', 'ANKARA', 'TURKEY', 'BAYAN', 'TC', 'GAZETECİLİK', '0000-00-00', '20012', 19980002123, 19980002, '0000-00-00', NULL, NULL, '0000-00-00', NULL),
(14, 'BURAKHAN', 'BİRCAN', 'YOK', '2018-05-01', 'ANTALYA', 'TURKEY', 'ERKEK', 'TC', 'COMPUTER ENGINEERING', '2018-09-13', '20018', 11111111111, 11111111, '2018-05-01', NULL, '2018-05-15 14:22:41', '0000-00-00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13042.18575831717!2d33.34300315!3d35.19285555!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2s!4v1526338711930\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sur_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduated_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity_id` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_image` int(11) NOT NULL DEFAULT '1',
  `maps` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `sur_name`, `email`, `birth_date`, `start_date`, `graduated_date`, `school_id`, `identity_id`, `department`, `country`, `password`, `auth`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`, `image`, `show_image`, `maps`) VALUES
(64, 'SERKAN', 'CEYRAN', 'serkan@mynet.com', '1979-09-05', '1998-08-10', '2002-09-05', '19970033', '19970033123', 'TURİZM OTEL İŞLETMECİLİĞİ', 'Turkey', '$2y$10$1A/kfJnZ49ihtFCt6CiyG.nSjaKPLa9hm4pISfq5mYWGfUPXN1qAi', '3', '', '', 'ytTncQUlLgfAyCgQAcRn2knldpGToIa71NR5ySX5NSbClscZsm1RNawxrw5m', '2018-05-01 00:28:32', '2018-05-06 21:28:43', '19970033123-c.png', 0, NULL),
(68, 'BURAKHAN', 'BİRCAN', 'burakhanbircan15@gmail.com', '2018-05-01', '2018-05-01', '2018-09-13', '11111111', '11111111111', 'COMPUTER ENGINEERING', 'Turkey', '$2y$10$V3z6bQEatQclLYQY8PanLOkJOUyiduhHKCnGJvuBPuFyp8x5wwkPS', '1', '', '', 'KsgLCeA1RQWJgLEh0TWds4XCAgsVoAchSJyNPRMn4qOJpvP2uGIAJvOTsAiR', '2018-05-15 14:17:06', '2018-05-15 14:22:41', 'no-image.png', 1, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `join_event`
--
ALTER TABLE `join_event`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `join_event`
--
ALTER TABLE `join_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
