-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2019 at 01:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `fullname`, `password`, `token`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'admin@corper.com', 'Alaran Moshood', '$2y$10$bqKXJCEwlnTZBX9a4lJkxeG5nmTrWvBPO74Q41EMxxF.EzHXJqY.m', NULL, NULL, NULL, 'xoOpnaozuBpCIG2Qxj0kR5Icw4vvVTN94pvWDiICodTD5CkJIzHmQ6IGMVG1');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(11) NOT NULL,
  `agent_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_id` int(11) NOT NULL,
  `industrial_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL),
(3, 'C', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locals`
--

CREATE TABLE `locals` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(11) NOT NULL,
  `local_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locals`
--

INSERT INTO `locals` (`id`, `state_id`, `local_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aba North', NULL, NULL),
(2, 1, 'Aba South', NULL, NULL),
(3, 1, 'Arochukwu', NULL, NULL),
(4, 1, 'Bende', NULL, NULL),
(5, 1, 'Ikwuano', NULL, NULL),
(6, 1, 'Isiala Ngwa North', NULL, NULL),
(7, 1, 'Isiala Ngwa South', NULL, NULL),
(8, 1, 'Isuikwuato', NULL, NULL),
(9, 1, 'Obi Ngwa', NULL, NULL),
(10, 1, 'Ohafia', NULL, NULL),
(11, 1, 'Osisioma', NULL, NULL),
(12, 1, 'Ugwunagbo', NULL, NULL),
(13, 1, 'Ukwa East', NULL, NULL),
(14, 1, 'Ukwa West', NULL, NULL),
(15, 1, 'Umuahia North', NULL, NULL),
(16, 1, 'Umuahia South', NULL, NULL),
(17, 1, 'Umu Nneochi', NULL, NULL),
(18, 2, 'Demsa', NULL, NULL),
(19, 2, 'Fufure', NULL, NULL),
(20, 2, 'Ganye', NULL, NULL),
(21, 2, 'Gayuk', NULL, NULL),
(22, 2, 'Gombi', NULL, NULL),
(23, 2, 'Grie', NULL, NULL),
(24, 2, 'Hong', NULL, NULL),
(25, 2, 'Jada', NULL, NULL),
(26, 2, 'Lamurde', NULL, NULL),
(27, 2, 'Madagali', NULL, NULL),
(28, 2, 'Maiha', NULL, NULL),
(29, 2, 'Mayo Belwa', NULL, NULL),
(30, 2, 'Michika', NULL, NULL),
(31, 2, 'Mubi North', NULL, NULL),
(32, 2, 'Mubi South', NULL, NULL),
(33, 2, 'Numan', NULL, NULL),
(34, 2, 'Shelleng', NULL, NULL),
(35, 2, 'Song', NULL, NULL),
(36, 2, 'Toungo', NULL, NULL),
(37, 2, 'Yola North', NULL, NULL),
(38, 2, 'Yola South', NULL, NULL),
(39, 3, 'Abak', NULL, NULL),
(40, 3, 'Eastern Obolo', NULL, NULL),
(41, 3, 'Eket', NULL, NULL),
(42, 3, 'Esit Eket', NULL, NULL),
(43, 3, 'Essien Udim', NULL, NULL),
(44, 3, 'Etim Ekpo', NULL, NULL),
(45, 3, 'Etinan', NULL, NULL),
(46, 3, 'Ibeno', NULL, NULL),
(47, 3, 'Ibesikpo Asutan', NULL, NULL),
(48, 3, 'Ibiono-Ibom', NULL, NULL),
(49, 3, 'Ika', NULL, NULL),
(50, 3, 'Ikono', NULL, NULL),
(51, 3, 'Ikot Abasi', NULL, NULL),
(52, 3, 'Ikot Ekpene', NULL, NULL),
(53, 3, 'Ini', NULL, NULL),
(54, 3, 'Itu', NULL, NULL),
(55, 3, 'Mbo', NULL, NULL),
(56, 3, 'Mkpat-Enin', NULL, NULL),
(57, 3, 'Nsit-Atai', NULL, NULL),
(58, 3, 'Nsit-Ibom', NULL, NULL),
(59, 3, 'Nsit-Ubium', NULL, NULL),
(60, 3, 'Obot Akara', NULL, NULL),
(61, 3, 'Okobo', NULL, NULL),
(62, 3, 'Onna', NULL, NULL),
(63, 3, 'Oron', NULL, NULL),
(64, 3, 'Oruk Anam', NULL, NULL),
(65, 3, 'Udung-Uko', NULL, NULL),
(66, 3, 'Ukanafun', NULL, NULL),
(67, 3, 'Uruan', NULL, NULL),
(68, 3, 'Urue-Offong/Oruko', NULL, NULL),
(69, 3, 'Uyo', NULL, NULL),
(70, 4, 'Aguata', NULL, NULL),
(71, 4, 'Anambra East', NULL, NULL),
(72, 4, 'Anambra West', NULL, NULL),
(73, 4, 'Anaocha', NULL, NULL),
(74, 4, 'Awka North', NULL, NULL),
(75, 4, 'Awka South', NULL, NULL),
(76, 4, 'Ayamelum', NULL, NULL),
(77, 4, 'Dunukofia', NULL, NULL),
(78, 4, 'Ekwusigo', NULL, NULL),
(79, 4, 'Idemili North', NULL, NULL),
(80, 4, 'Idemili South', NULL, NULL),
(81, 4, 'Ihiala', NULL, NULL),
(82, 4, 'Njikoka', NULL, NULL),
(83, 4, 'Nnewi North', NULL, NULL),
(84, 4, 'Nnewi South', NULL, NULL),
(85, 4, 'Ogbaru', NULL, NULL),
(86, 4, 'Onitsha North', NULL, NULL),
(87, 4, 'Onitsha South', NULL, NULL),
(88, 4, 'Orumba North', NULL, NULL),
(89, 4, 'Orumba South', NULL, NULL),
(90, 4, 'Oyi', NULL, NULL),
(91, 5, 'Alkaleri', NULL, NULL),
(92, 5, 'Bauchi', NULL, NULL),
(93, 5, 'Bogoro', NULL, NULL),
(94, 5, 'Damban', NULL, NULL),
(95, 5, 'Darazo', NULL, NULL),
(96, 5, 'Dass', NULL, NULL),
(97, 5, 'Gamawa', NULL, NULL),
(98, 5, 'Ganjuwa', NULL, NULL),
(99, 5, 'Giade', NULL, NULL),
(100, 5, 'Itas/Gadau', NULL, NULL),
(101, 5, 'Jama\'are', NULL, NULL),
(102, 5, 'Katagum', NULL, NULL),
(103, 5, 'Kirfi', NULL, NULL),
(104, 5, 'Misau', NULL, NULL),
(105, 5, 'Ningi', NULL, NULL),
(106, 5, 'Shira', NULL, NULL),
(107, 5, 'Tafawa Balewa', NULL, NULL),
(108, 5, 'Toro', NULL, NULL),
(109, 5, 'Warji', NULL, NULL),
(110, 5, 'Zaki', NULL, NULL),
(111, 6, 'Brass', NULL, NULL),
(112, 6, 'Ekeremor', NULL, NULL),
(113, 6, 'Kolokuma/Opokuma', NULL, NULL),
(114, 6, 'Nembe', NULL, NULL),
(115, 6, 'Ogbia', NULL, NULL),
(116, 6, 'Sagbama', NULL, NULL),
(117, 6, 'Southern Ijaw', NULL, NULL),
(118, 6, 'Yenagoa', NULL, NULL),
(119, 7, 'Agatu', NULL, NULL),
(120, 7, 'Apa', NULL, NULL),
(121, 7, 'Ado', NULL, NULL),
(122, 7, 'Buruku', NULL, NULL),
(123, 7, 'Gboko', NULL, NULL),
(124, 7, 'Guma', NULL, NULL),
(125, 7, 'Gwer East', NULL, NULL),
(126, 7, 'Gwer West', NULL, NULL),
(127, 7, 'Katsina-Ala', NULL, NULL),
(128, 7, 'Konshisha', NULL, NULL),
(129, 7, 'Kwande', NULL, NULL),
(130, 7, 'Logo', NULL, NULL),
(131, 7, 'Makurdi', NULL, NULL),
(132, 7, 'Obi', NULL, NULL),
(133, 7, 'Ogbadibo', NULL, NULL),
(134, 7, 'Ohimini', NULL, NULL),
(135, 7, 'Oju', NULL, NULL),
(136, 7, 'Okpokwu', NULL, NULL),
(137, 7, 'Oturkpo', NULL, NULL),
(138, 7, 'Tarka', NULL, NULL),
(139, 7, 'Ukum', NULL, NULL),
(140, 7, 'Ushongo', NULL, NULL),
(141, 7, 'Vandeikya', NULL, NULL),
(142, 8, 'Abadam', NULL, NULL),
(143, 8, 'Askira/Uba', NULL, NULL),
(144, 8, 'Bama', NULL, NULL),
(145, 8, 'Bayo', NULL, NULL),
(146, 8, 'Biu', NULL, NULL),
(147, 8, 'Chibok', NULL, NULL),
(148, 8, 'Damboa', NULL, NULL),
(149, 8, 'Dikwa', NULL, NULL),
(150, 8, 'Gubio', NULL, NULL),
(151, 8, 'Guzamala', NULL, NULL),
(152, 8, 'Gwoza', NULL, NULL),
(153, 8, 'Hawul', NULL, NULL),
(154, 8, 'Jere', NULL, NULL),
(155, 8, 'Kaga', NULL, NULL),
(156, 8, 'Kala/Balge', NULL, NULL),
(157, 8, 'Konduga', NULL, NULL),
(158, 8, 'Kukawa', NULL, NULL),
(159, 8, 'Kwaya Kusar', NULL, NULL),
(160, 8, 'Mafa', NULL, NULL),
(161, 8, 'Magumeri', NULL, NULL),
(162, 8, 'Maiduguri', NULL, NULL),
(163, 8, 'Marte', NULL, NULL),
(164, 8, 'Mobbar', NULL, NULL),
(165, 8, 'Monguno', NULL, NULL),
(166, 8, 'Ngala', NULL, NULL),
(167, 8, 'Nganzai', NULL, NULL),
(168, 8, 'Shani', NULL, NULL),
(169, 9, 'Abi', NULL, NULL),
(170, 9, 'Akamkpa', NULL, NULL),
(171, 9, 'Akpabuyo', NULL, NULL),
(172, 9, 'Bakassi', NULL, NULL),
(173, 9, 'Bekwarra', NULL, NULL),
(174, 9, 'Biase', NULL, NULL),
(175, 9, 'Boki', NULL, NULL),
(176, 9, 'Calabar Municipal', NULL, NULL),
(177, 9, 'Calabar South', NULL, NULL),
(178, 9, 'Etung', NULL, NULL),
(179, 9, 'Ikom', NULL, NULL),
(180, 9, 'Obanliku', NULL, NULL),
(181, 9, 'Obubra', NULL, NULL),
(182, 9, 'Obudu', NULL, NULL),
(183, 9, 'Odukpani', NULL, NULL),
(184, 9, 'Ogoja', NULL, NULL),
(185, 9, 'Yakuur', NULL, NULL),
(186, 9, 'Yala', NULL, NULL),
(187, 10, 'Aniocha North', NULL, NULL),
(188, 10, 'Aniocha South', NULL, NULL),
(189, 10, 'Bomadi', NULL, NULL),
(190, 10, 'Burutu', NULL, NULL),
(191, 10, 'Ethiope East', NULL, NULL),
(192, 10, 'Ethiope West', NULL, NULL),
(193, 10, 'Ika North East', NULL, NULL),
(194, 10, 'Ika South', NULL, NULL),
(195, 10, 'Isoko North', NULL, NULL),
(196, 10, 'Isoko South', NULL, NULL),
(197, 10, 'Ndokwa East', NULL, NULL),
(198, 10, 'Ndokwa West', NULL, NULL),
(199, 10, 'Okpe', NULL, NULL),
(200, 10, 'Oshimili North', NULL, NULL),
(201, 10, 'Oshimili South', NULL, NULL),
(202, 10, 'Patani', NULL, NULL),
(203, 10, 'Sapele', NULL, NULL),
(204, 10, 'Udu', NULL, NULL),
(205, 10, 'Ughelli North', NULL, NULL),
(206, 10, 'Ughelli South', NULL, NULL),
(207, 10, 'Ukwuani', NULL, NULL),
(208, 10, 'Uvwie', NULL, NULL),
(209, 10, 'Warri North', NULL, NULL),
(210, 10, 'Warri South', NULL, NULL),
(211, 10, 'Warri South West', NULL, NULL),
(212, 11, 'Abakaliki', NULL, NULL),
(213, 11, 'Afikpo North', NULL, NULL),
(214, 11, 'Afikpo South', NULL, NULL),
(215, 11, 'Ebonyi', NULL, NULL),
(216, 11, 'Ezza North', NULL, NULL),
(217, 11, 'Ezza South', NULL, NULL),
(218, 11, 'Ikwo', NULL, NULL),
(219, 11, 'Ishielu', NULL, NULL),
(220, 11, 'Ivo', NULL, NULL),
(221, 11, 'Izzi', NULL, NULL),
(222, 11, 'Ohaozara', NULL, NULL),
(223, 11, 'Ohaukwu', NULL, NULL),
(224, 11, 'Onicha', NULL, NULL),
(225, 12, 'Akoko-Edo', NULL, NULL),
(226, 12, 'Egor', NULL, NULL),
(227, 12, 'Esan Central', NULL, NULL),
(228, 12, 'Esan North-East', NULL, NULL),
(229, 12, 'Esan South-East', NULL, NULL),
(230, 12, 'Esan West', NULL, NULL),
(231, 12, 'Etsako Central', NULL, NULL),
(232, 12, 'Etsako East', NULL, NULL),
(233, 12, 'Etsako West', NULL, NULL),
(234, 12, 'Igueben', NULL, NULL),
(235, 12, 'Ikpoba Okha', NULL, NULL),
(236, 12, 'Orhionmwon', NULL, NULL),
(237, 12, 'Oredo', NULL, NULL),
(238, 12, 'Ovia North-East', NULL, NULL),
(239, 12, 'Ovia South-West', NULL, NULL),
(240, 12, 'Owan East', NULL, NULL),
(241, 12, 'Owan West', NULL, NULL),
(242, 12, 'Uhunmwonde', NULL, NULL),
(243, 13, 'Ado Ekiti', NULL, NULL),
(244, 13, 'Efon', NULL, NULL),
(245, 13, 'Ekiti East', NULL, NULL),
(246, 13, 'Ekiti South-West', NULL, NULL),
(247, 13, 'Ekiti West', NULL, NULL),
(248, 13, 'Emure', NULL, NULL),
(249, 13, 'Gbonyin', NULL, NULL),
(250, 13, 'Ido Osi', NULL, NULL),
(251, 13, 'Ijero', NULL, NULL),
(252, 13, 'Ikere', NULL, NULL),
(253, 13, 'Ikole', NULL, NULL),
(254, 13, 'Ilejemeje', NULL, NULL),
(255, 13, 'Irepodun/Ifelodun', NULL, NULL),
(256, 13, 'Ise/Orun', NULL, NULL),
(257, 13, 'Moba', NULL, NULL),
(258, 13, 'Oye', NULL, NULL),
(259, 14, 'Aninri', NULL, NULL),
(260, 14, 'Awgu', NULL, NULL),
(261, 14, 'Enugu East', NULL, NULL),
(262, 14, 'Enugu North', NULL, NULL),
(263, 14, 'Enugu South', NULL, NULL),
(264, 14, 'Ezeagu', NULL, NULL),
(265, 14, 'Igbo Etiti', NULL, NULL),
(266, 14, 'Igbo Eze North', NULL, NULL),
(267, 14, 'Igbo Eze South', NULL, NULL),
(268, 14, 'Isi Uzo', NULL, NULL),
(269, 14, 'Nkanu East', NULL, NULL),
(270, 14, 'Nkanu West', NULL, NULL),
(271, 14, 'Nsukka', NULL, NULL),
(272, 14, 'Oji River', NULL, NULL),
(273, 14, 'Udenu', NULL, NULL),
(274, 14, 'Udi', NULL, NULL),
(275, 14, 'Uzo Uwani', NULL, NULL),
(276, 15, 'Abaji', NULL, NULL),
(277, 15, 'Bwari', NULL, NULL),
(278, 15, 'Gwagwalada', NULL, NULL),
(279, 15, 'Kuje', NULL, NULL),
(280, 15, 'Kwali', NULL, NULL),
(281, 15, 'Municipal Area Council', NULL, NULL),
(282, 16, 'Akko', NULL, NULL),
(283, 16, 'Balanga', NULL, NULL),
(284, 16, 'Billiri', NULL, NULL),
(285, 16, 'Dukku', NULL, NULL),
(286, 16, 'Funakaye', NULL, NULL),
(287, 16, 'Gombe', NULL, NULL),
(288, 16, 'Kaltungo', NULL, NULL),
(289, 16, 'Kwami', NULL, NULL),
(290, 16, 'Nafada', NULL, NULL),
(291, 16, 'Shongom', NULL, NULL),
(292, 16, 'Yamaltu/Deba', NULL, NULL),
(293, 17, 'Aboh Mbaise', NULL, NULL),
(294, 17, 'Ahiazu Mbaise', NULL, NULL),
(295, 17, 'Ehime Mbano', NULL, NULL),
(296, 17, 'Ezinihitte', NULL, NULL),
(297, 17, 'Ideato North', NULL, NULL),
(298, 17, 'Ideato South', NULL, NULL),
(299, 17, 'Ihitte/Uboma', NULL, NULL),
(300, 17, 'Ikeduru', NULL, NULL),
(301, 17, 'Isiala Mbano', NULL, NULL),
(302, 17, 'Isu', NULL, NULL),
(303, 17, 'Mbaitoli', NULL, NULL),
(304, 17, 'Ngor Okpala', NULL, NULL),
(305, 17, 'Njaba', NULL, NULL),
(306, 17, 'Nkwerre', NULL, NULL),
(307, 17, 'Nwangele', NULL, NULL),
(308, 17, 'Obowo', NULL, NULL),
(309, 17, 'Oguta', NULL, NULL),
(310, 17, 'Ohaji/Egbema', NULL, NULL),
(311, 17, 'Okigwe', NULL, NULL),
(312, 17, 'Orlu', NULL, NULL),
(313, 17, 'Orsu', NULL, NULL),
(314, 17, 'Oru East', NULL, NULL),
(315, 17, 'Oru West', NULL, NULL),
(316, 17, 'Owerri Municipal', NULL, NULL),
(317, 17, 'Owerri North', NULL, NULL),
(318, 17, 'Owerri West', NULL, NULL),
(319, 17, 'Unuimo', NULL, NULL),
(320, 18, 'Auyo', NULL, NULL),
(321, 18, 'Babura', NULL, NULL),
(322, 18, 'Biriniwa', NULL, NULL),
(323, 18, 'Birnin Kudu', NULL, NULL),
(324, 18, 'Buji', NULL, NULL),
(325, 18, 'Dutse', NULL, NULL),
(326, 18, 'Gagarawa', NULL, NULL),
(327, 18, 'Garki', NULL, NULL),
(328, 18, 'Gumel', NULL, NULL),
(329, 18, 'Guri', NULL, NULL),
(330, 18, 'Gwaram', NULL, NULL),
(331, 18, 'Gwiwa', NULL, NULL),
(332, 18, 'Hadejia', NULL, NULL),
(333, 18, 'Jahun', NULL, NULL),
(334, 18, 'Kafin Hausa', NULL, NULL),
(335, 18, 'Kazaure', NULL, NULL),
(336, 18, 'Kiri Kasama', NULL, NULL),
(337, 18, 'Kiyawa', NULL, NULL),
(338, 18, 'Kaugama', NULL, NULL),
(339, 18, 'Maigatari', NULL, NULL),
(340, 18, 'Malam Madori', NULL, NULL),
(341, 18, 'Miga', NULL, NULL),
(342, 18, 'Ringim', NULL, NULL),
(343, 18, 'Roni', NULL, NULL),
(344, 18, 'Sule Tankarkar', NULL, NULL),
(345, 18, 'Taura', NULL, NULL),
(346, 18, 'Yankwashi', NULL, NULL),
(347, 19, 'Birnin Gwari', NULL, NULL),
(348, 19, 'Chikun', NULL, NULL),
(349, 19, 'Giwa', NULL, NULL),
(350, 19, 'Igabi', NULL, NULL),
(351, 19, 'Ikara', NULL, NULL),
(352, 19, 'Jaba', NULL, NULL),
(353, 19, 'Jema\'a', NULL, NULL),
(354, 19, 'Kachia', NULL, NULL),
(355, 19, 'Kaduna North', NULL, NULL),
(356, 19, 'Kaduna South', NULL, NULL),
(357, 19, 'Kagarko', NULL, NULL),
(358, 19, 'Kajuru', NULL, NULL),
(359, 19, 'Kaura', NULL, NULL),
(360, 19, 'Kauru', NULL, NULL),
(361, 19, 'Kubau', NULL, NULL),
(362, 19, 'Kudan', NULL, NULL),
(363, 19, 'Lere', NULL, NULL),
(364, 19, 'Makarfi', NULL, NULL),
(365, 19, 'Sabon Gari', NULL, NULL),
(366, 19, 'Sanga', NULL, NULL),
(367, 19, 'Soba', NULL, NULL),
(368, 19, 'Zangon Kataf', NULL, NULL),
(369, 19, 'Zaria', NULL, NULL),
(370, 20, 'Ajingi', NULL, NULL),
(371, 20, 'Albasu', NULL, NULL),
(372, 20, 'Bagwai', NULL, NULL),
(373, 20, 'Bebeji', NULL, NULL),
(374, 20, 'Bichi', NULL, NULL),
(375, 20, 'Bunkure', NULL, NULL),
(376, 20, 'Dala', NULL, NULL),
(377, 20, 'Dambatta', NULL, NULL),
(378, 20, 'Dawakin Kudu', NULL, NULL),
(379, 20, 'Dawakin Tofa', NULL, NULL),
(380, 20, 'Doguwa', NULL, NULL),
(381, 20, 'Fagge', NULL, NULL),
(382, 20, 'Gabasawa', NULL, NULL),
(383, 20, 'Garko', NULL, NULL),
(384, 20, 'Garun Mallam', NULL, NULL),
(385, 20, 'Gaya', NULL, NULL),
(386, 20, 'Gezawa', NULL, NULL),
(387, 20, 'Gwale', NULL, NULL),
(388, 20, 'Gwarzo', NULL, NULL),
(389, 20, 'Kabo', NULL, NULL),
(390, 20, 'Kano Municipal', NULL, NULL),
(391, 20, 'Karaye', NULL, NULL),
(392, 20, 'Kibiya', NULL, NULL),
(393, 20, 'Kiru', NULL, NULL),
(394, 20, 'Kumbotso', NULL, NULL),
(395, 20, 'Kunchi', NULL, NULL),
(396, 20, 'Kura', NULL, NULL),
(397, 20, 'Madobi', NULL, NULL),
(398, 20, 'Makoda', NULL, NULL),
(399, 20, 'Minjibir', NULL, NULL),
(400, 20, 'Nasarawa', NULL, NULL),
(401, 20, 'Rano', NULL, NULL),
(402, 20, 'Rimin Gado', NULL, NULL),
(403, 20, 'Rogo', NULL, NULL),
(404, 20, 'Shanono', NULL, NULL),
(405, 20, 'Sumaila', NULL, NULL),
(406, 20, 'Takai', NULL, NULL),
(407, 20, 'Tarauni', NULL, NULL),
(408, 20, 'Tofa', NULL, NULL),
(409, 20, 'Tsanyawa', NULL, NULL),
(410, 20, 'Tudun Wada', NULL, NULL),
(411, 20, 'Ungogo', NULL, NULL),
(412, 20, 'Warawa', NULL, NULL),
(413, 20, 'Wudil', NULL, NULL),
(414, 21, 'Bakori', NULL, NULL),
(415, 21, 'Batagarawa', NULL, NULL),
(416, 21, 'Batsari', NULL, NULL),
(417, 21, 'Baure', NULL, NULL),
(418, 21, 'Bindawa', NULL, NULL),
(419, 21, 'Charanchi', NULL, NULL),
(420, 21, 'Dandume', NULL, NULL),
(421, 21, 'Danja', NULL, NULL),
(422, 21, 'Dan Musa', NULL, NULL),
(423, 21, 'Daura', NULL, NULL),
(424, 21, 'Dutsi', NULL, NULL),
(425, 21, 'Dutsin Ma', NULL, NULL),
(426, 21, 'Faskari', NULL, NULL),
(427, 21, 'Funtua', NULL, NULL),
(428, 21, 'Ingawa', NULL, NULL),
(429, 21, 'Jibia', NULL, NULL),
(430, 21, 'Kafur', NULL, NULL),
(431, 21, 'Kaita', NULL, NULL),
(432, 21, 'Kankara', NULL, NULL),
(433, 21, 'Kankia', NULL, NULL),
(434, 21, 'Katsina', NULL, NULL),
(435, 21, 'Kurfi', NULL, NULL),
(436, 21, 'Kusada', NULL, NULL),
(437, 21, 'Mai\'Adua', NULL, NULL),
(438, 21, 'Malumfashi', NULL, NULL),
(439, 21, 'Mani', NULL, NULL),
(440, 21, 'Mashi', NULL, NULL),
(441, 21, 'Matazu', NULL, NULL),
(442, 21, 'Musawa', NULL, NULL),
(443, 21, 'Rimi', NULL, NULL),
(444, 21, 'Sabuwa', NULL, NULL),
(445, 21, 'Safana', NULL, NULL),
(446, 21, 'Sandamu', NULL, NULL),
(447, 21, 'Zango', NULL, NULL),
(448, 22, 'Aleiro', NULL, NULL),
(449, 22, 'Arewa Dandi', NULL, NULL),
(450, 22, 'Argungu', NULL, NULL),
(451, 22, 'Augie', NULL, NULL),
(452, 22, 'Bagudo', NULL, NULL),
(453, 22, 'Birnin Kebbi', NULL, NULL),
(454, 22, 'Bunza', NULL, NULL),
(455, 22, 'Dandi', NULL, NULL),
(456, 22, 'Fakai', NULL, NULL),
(457, 22, 'Gwandu', NULL, NULL),
(458, 22, 'Jega', NULL, NULL),
(459, 22, 'Kalgo', NULL, NULL),
(460, 22, 'Koko/Besse', NULL, NULL),
(461, 22, 'Maiyama', NULL, NULL),
(462, 22, 'Ngaski', NULL, NULL),
(463, 22, 'Sakaba', NULL, NULL),
(464, 22, 'Shanga', NULL, NULL),
(465, 22, 'Suru', NULL, NULL),
(466, 22, 'Wasagu/Danko', NULL, NULL),
(467, 22, 'Yauri', NULL, NULL),
(468, 22, 'Zuru', NULL, NULL),
(469, 23, 'Adavi', NULL, NULL),
(470, 23, 'Ajaokuta', NULL, NULL),
(471, 23, 'Ankpa', NULL, NULL),
(472, 23, 'Bassa', NULL, NULL),
(473, 23, 'Dekina', NULL, NULL),
(474, 23, 'Ibaji', NULL, NULL),
(475, 23, 'Idah', NULL, NULL),
(476, 23, 'Igalamela Odolu', NULL, NULL),
(477, 23, 'Ijumu', NULL, NULL),
(478, 23, 'Kabba/Bunu', NULL, NULL),
(479, 23, 'Kogi', NULL, NULL),
(480, 23, 'Lokoja', NULL, NULL),
(481, 23, 'Mopa Muro', NULL, NULL),
(482, 23, 'Ofu', NULL, NULL),
(483, 23, 'Ogori/Magongo', NULL, NULL),
(484, 23, 'Okehi', NULL, NULL),
(485, 23, 'Okene', NULL, NULL),
(486, 23, 'Olamaboro', NULL, NULL),
(487, 23, 'Omala', NULL, NULL),
(488, 23, 'Yagba East', NULL, NULL),
(489, 23, 'Yagba West', NULL, NULL),
(490, 24, 'Asa', NULL, NULL),
(491, 24, 'Baruten', NULL, NULL),
(492, 24, 'Edu', NULL, NULL),
(493, 24, 'Ekiti', NULL, NULL),
(494, 24, 'Ifelodun', NULL, NULL),
(495, 24, 'Ilorin East', NULL, NULL),
(496, 24, 'Ilorin South', NULL, NULL),
(497, 24, 'Ilorin West', NULL, NULL),
(498, 24, 'Irepodun', NULL, NULL),
(499, 24, 'Isin', NULL, NULL),
(500, 24, 'Kaiama', NULL, NULL),
(501, 24, 'Moro', NULL, NULL),
(502, 24, 'Offa', NULL, NULL),
(503, 24, 'Oke Ero', NULL, NULL),
(504, 24, 'Oyun', NULL, NULL),
(505, 24, 'Pategi', NULL, NULL),
(506, 25, 'Agege', NULL, NULL),
(507, 25, 'Ajeromi-Ifelodun', NULL, NULL),
(508, 25, 'Alimosho', NULL, NULL),
(509, 25, 'Amuwo-Odofin', NULL, NULL),
(510, 25, 'Apapa', NULL, NULL),
(511, 25, 'Badagry', NULL, NULL),
(512, 25, 'Epe', NULL, NULL),
(513, 25, 'Eti Osa', NULL, NULL),
(514, 25, 'Ibeju-Lekki', NULL, NULL),
(515, 25, 'Ifako-Ijaiye', NULL, NULL),
(516, 25, 'Ikeja', NULL, NULL),
(517, 25, 'Ikorodu', NULL, NULL),
(518, 25, 'Kosofe', NULL, NULL),
(519, 25, 'Lagos Island', NULL, NULL),
(520, 25, 'Lagos Mainland', NULL, NULL),
(521, 25, 'Mushin', NULL, NULL),
(522, 25, 'Ojo', NULL, NULL),
(523, 25, 'Oshodi-Isolo', NULL, NULL),
(524, 25, 'Shomolu', NULL, NULL),
(525, 25, 'Surulere', NULL, NULL),
(526, 26, 'Akwanga', NULL, NULL),
(527, 26, 'Awe', NULL, NULL),
(528, 26, 'Doma', NULL, NULL),
(529, 26, 'Karu', NULL, NULL),
(530, 26, 'Keana', NULL, NULL),
(531, 26, 'Keffi', NULL, NULL),
(532, 26, 'Kokona', NULL, NULL),
(533, 26, 'Lafia', NULL, NULL),
(534, 26, 'Nasarawa', NULL, NULL),
(535, 26, 'Nasarawa Egon', NULL, NULL),
(536, 26, 'Obi', NULL, NULL),
(537, 26, 'Toto', NULL, NULL),
(538, 26, 'Wamba', NULL, NULL),
(539, 27, 'Agaie', NULL, NULL),
(540, 27, 'Agwara', NULL, NULL),
(541, 27, 'Bida', NULL, NULL),
(542, 27, 'Borgu', NULL, NULL),
(543, 27, 'Bosso', NULL, NULL),
(544, 27, 'Chanchaga', NULL, NULL),
(545, 27, 'Edati', NULL, NULL),
(546, 27, 'Gbako', NULL, NULL),
(547, 27, 'Gurara', NULL, NULL),
(548, 27, 'Katcha', NULL, NULL),
(549, 27, 'Kontagora', NULL, NULL),
(550, 27, 'Lapai', NULL, NULL),
(551, 27, 'Lavun', NULL, NULL),
(552, 27, 'Magama', NULL, NULL),
(553, 27, 'Mariga', NULL, NULL),
(554, 27, 'Mashegu', NULL, NULL),
(555, 27, 'Mokwa', NULL, NULL),
(556, 27, 'Moya', NULL, NULL),
(557, 27, 'Paikoro', NULL, NULL),
(558, 27, 'Rafi', NULL, NULL),
(559, 27, 'Rijau', NULL, NULL),
(560, 27, 'Shiroro', NULL, NULL),
(561, 27, 'Suleja', NULL, NULL),
(562, 27, 'Tafa', NULL, NULL),
(563, 27, 'Wushishi', NULL, NULL),
(564, 28, 'Abeokuta North', NULL, NULL),
(565, 28, 'Abeokuta South', NULL, NULL),
(566, 28, 'Ado-Odo/Ota', NULL, NULL),
(567, 28, 'Egbado North', NULL, NULL),
(568, 28, 'Egbado South', NULL, NULL),
(569, 28, 'Ewekoro', NULL, NULL),
(570, 28, 'Ifo', NULL, NULL),
(571, 28, 'Ijebu East', NULL, NULL),
(572, 28, 'Ijebu North', NULL, NULL),
(573, 28, 'Ijebu North East', NULL, NULL),
(574, 28, 'Ijebu Ode', NULL, NULL),
(575, 28, 'Ikenne', NULL, NULL),
(576, 28, 'Imeko Afon', NULL, NULL),
(577, 28, 'Ipokia', NULL, NULL),
(578, 28, 'Obafemi Owode', NULL, NULL),
(579, 28, 'Odeda', NULL, NULL),
(580, 28, 'Odogbolu', NULL, NULL),
(581, 28, 'Ogun Waterside', NULL, NULL),
(582, 28, 'Remo North', NULL, NULL),
(583, 28, 'Shagamu', NULL, NULL),
(584, 29, 'Akoko North-East', NULL, NULL),
(585, 29, 'Akoko North-West', NULL, NULL),
(586, 29, 'Akoko South-West', NULL, NULL),
(587, 29, 'Akoko South-East', NULL, NULL),
(588, 29, 'Akure North', NULL, NULL),
(589, 29, 'Akure South', NULL, NULL),
(590, 29, 'Ese Odo', NULL, NULL),
(591, 29, 'Idanre', NULL, NULL),
(592, 29, 'Ifedore', NULL, NULL),
(593, 29, 'Ilaje', NULL, NULL),
(594, 29, 'Ile Oluji/Okeigbo', NULL, NULL),
(595, 29, 'Irele', NULL, NULL),
(596, 29, 'Odigbo', NULL, NULL),
(597, 29, 'Okitipupa', NULL, NULL),
(598, 29, 'Ondo East', NULL, NULL),
(599, 29, 'Ondo West', NULL, NULL),
(600, 29, 'Ose', NULL, NULL),
(601, 29, 'Owo', NULL, NULL),
(602, 30, 'Atakunmosa East', NULL, NULL),
(603, 30, 'Atakunmosa West', NULL, NULL),
(604, 30, 'Aiyedaade', NULL, NULL),
(605, 30, 'Aiyedire', NULL, NULL),
(606, 30, 'Boluwaduro', NULL, NULL),
(607, 30, 'Boripe', NULL, NULL),
(608, 30, 'Ede North', NULL, NULL),
(609, 30, 'Ede South', NULL, NULL),
(610, 30, 'Ife Central', NULL, NULL),
(611, 30, 'Ife East', NULL, NULL),
(612, 30, 'Ife North', NULL, NULL),
(613, 30, 'Ife South', NULL, NULL),
(614, 30, 'Egbedore', NULL, NULL),
(615, 30, 'Ejigbo', NULL, NULL),
(616, 30, 'Ifedayo', NULL, NULL),
(617, 30, 'Ifelodun', NULL, NULL),
(618, 30, 'Ila', NULL, NULL),
(619, 30, 'Ilesa East', NULL, NULL),
(620, 30, 'Ilesa West', NULL, NULL),
(621, 30, 'Irepodun', NULL, NULL),
(622, 30, 'Irewole', NULL, NULL),
(623, 30, 'Isokan', NULL, NULL),
(624, 30, 'Iwo', NULL, NULL),
(625, 30, 'Obokun', NULL, NULL),
(626, 30, 'Odo Otin', NULL, NULL),
(627, 30, 'Ola Oluwa', NULL, NULL),
(628, 30, 'Olorunda', NULL, NULL),
(629, 30, 'Oriade', NULL, NULL),
(630, 30, 'Orolu', NULL, NULL),
(631, 30, 'Osogbo', NULL, NULL),
(632, 31, 'Afijio', NULL, NULL),
(633, 31, 'Akinyele', NULL, NULL),
(634, 31, 'Atiba', NULL, NULL),
(635, 31, 'Atisbo', NULL, NULL),
(636, 31, 'Egbeda', NULL, NULL),
(637, 31, 'Ibadan North', NULL, NULL),
(638, 31, 'Ibadan North-East', NULL, NULL),
(639, 31, 'Ibadan North-West', NULL, NULL),
(640, 31, 'Ibadan South-East', NULL, NULL),
(641, 31, 'Ibadan South-West', NULL, NULL),
(642, 31, 'Ibarapa Central', NULL, NULL),
(643, 31, 'Ibarapa East', NULL, NULL),
(644, 31, 'Ibarapa North', NULL, NULL),
(645, 31, 'Ido', NULL, NULL),
(646, 31, 'Irepo', NULL, NULL),
(647, 31, 'Iseyin', NULL, NULL),
(648, 31, 'Itesiwaju', NULL, NULL),
(649, 31, 'Iwajowa', NULL, NULL),
(650, 31, 'Kajola', NULL, NULL),
(651, 31, 'Lagelu', NULL, NULL),
(652, 31, 'Ogbomosho North', NULL, NULL),
(653, 31, 'Ogbomosho South', NULL, NULL),
(654, 31, 'Ogo Oluwa', NULL, NULL),
(655, 31, 'Olorunsogo', NULL, NULL),
(656, 31, 'Oluyole', NULL, NULL),
(657, 31, 'Ona Ara', NULL, NULL),
(658, 31, 'Orelope', NULL, NULL),
(659, 31, 'Ori Ire', NULL, NULL),
(660, 31, 'Oyo', NULL, NULL),
(661, 31, 'Oyo East', NULL, NULL),
(662, 31, 'Saki East', NULL, NULL),
(663, 31, 'Saki West', NULL, NULL),
(664, 31, 'Surulere', NULL, NULL),
(665, 32, 'Bokkos', NULL, NULL),
(666, 32, 'Barkin Ladi', NULL, NULL),
(667, 32, 'Bassa', NULL, NULL),
(668, 32, 'Jos East', NULL, NULL),
(669, 32, 'Jos North', NULL, NULL),
(670, 32, 'Jos South', NULL, NULL),
(671, 32, 'Kanam', NULL, NULL),
(672, 32, 'Kanke', NULL, NULL),
(673, 32, 'Langtang South', NULL, NULL),
(674, 32, 'Langtang North', NULL, NULL),
(675, 32, 'Mangu', NULL, NULL),
(676, 32, 'Mikang', NULL, NULL),
(677, 32, 'Pankshin', NULL, NULL),
(678, 32, 'Qua\'an Pan', NULL, NULL),
(679, 32, 'Riyom', NULL, NULL),
(680, 32, 'Shendam', NULL, NULL),
(681, 32, 'Wase', NULL, NULL),
(682, 33, 'Abua/Odual', NULL, NULL),
(683, 33, 'Ahoada East', NULL, NULL),
(684, 33, 'Ahoada West', NULL, NULL),
(685, 33, 'Akuku-Toru', NULL, NULL),
(686, 33, 'Andoni', NULL, NULL),
(687, 33, 'Asari-Toru', NULL, NULL),
(688, 33, 'Bonny', NULL, NULL),
(689, 33, 'Degema', NULL, NULL),
(690, 33, 'Eleme', NULL, NULL),
(691, 33, 'Emuoha', NULL, NULL),
(692, 33, 'Etche', NULL, NULL),
(693, 33, 'Gokana', NULL, NULL),
(694, 33, 'Ikwerre', NULL, NULL),
(695, 33, 'Khana', NULL, NULL),
(696, 33, 'Obio/Akpor', NULL, NULL),
(697, 33, 'Ogba/Egbema/Ndoni', NULL, NULL),
(698, 33, 'Ogu/Bolo', NULL, NULL),
(699, 33, 'Okrika', NULL, NULL),
(700, 33, 'Omuma', NULL, NULL),
(701, 33, 'Opobo/Nkoro', NULL, NULL),
(702, 33, 'Oyigbo', NULL, NULL),
(703, 33, 'Port Harcourt', NULL, NULL),
(704, 33, 'Tai', NULL, NULL),
(705, 34, 'Binji', NULL, NULL),
(706, 34, 'Bodinga', NULL, NULL),
(707, 34, 'Dange Shuni', NULL, NULL),
(708, 34, 'Gada', NULL, NULL),
(709, 34, 'Goronyo', NULL, NULL),
(710, 34, 'Gudu', NULL, NULL),
(711, 34, 'Gwadabawa', NULL, NULL),
(712, 34, 'Illela', NULL, NULL),
(713, 34, 'Isa', NULL, NULL),
(714, 34, 'Kebbe', NULL, NULL),
(715, 34, 'Kware', NULL, NULL),
(716, 34, 'Rabah', NULL, NULL),
(717, 34, 'Sabon Birni', NULL, NULL),
(718, 34, 'Shagari', NULL, NULL),
(719, 34, 'Silame', NULL, NULL),
(720, 34, 'Sokoto North', NULL, NULL),
(721, 34, 'Sokoto South', NULL, NULL),
(722, 34, 'Tambuwal', NULL, NULL),
(723, 34, 'Tangaza', NULL, NULL),
(724, 34, 'Tureta', NULL, NULL),
(725, 34, 'Wamako', NULL, NULL),
(726, 34, 'Wurno', NULL, NULL),
(727, 34, 'Yabo', NULL, NULL),
(728, 35, 'Ardo Kola', NULL, NULL),
(729, 35, 'Bali', NULL, NULL),
(730, 35, 'Donga', NULL, NULL),
(731, 35, 'Gashaka', NULL, NULL),
(732, 35, 'Gassol', NULL, NULL),
(733, 35, 'Ibi', NULL, NULL),
(734, 35, 'Jalingo', NULL, NULL),
(735, 35, 'Karim Lamido', NULL, NULL),
(736, 35, 'Kumi', NULL, NULL),
(737, 35, 'Lau', NULL, NULL),
(738, 35, 'Sardauna', NULL, NULL),
(739, 35, 'Takum', NULL, NULL),
(740, 35, 'Ussa', NULL, NULL),
(741, 35, 'Wukari', NULL, NULL),
(742, 35, 'Yorro', NULL, NULL),
(743, 35, 'Zing', NULL, NULL),
(744, 36, 'Bade', NULL, NULL),
(745, 36, 'Bursari', NULL, NULL),
(746, 36, 'Damaturu', NULL, NULL),
(747, 36, 'Fika', NULL, NULL),
(748, 36, 'Fune', NULL, NULL),
(749, 36, 'Geidam', NULL, NULL),
(750, 36, 'Gujba', NULL, NULL),
(751, 36, 'Gulani', NULL, NULL),
(752, 36, 'Jakusko', NULL, NULL),
(753, 36, 'Karasuwa', NULL, NULL),
(754, 36, 'Machina', NULL, NULL),
(755, 36, 'Nangere', NULL, NULL),
(756, 36, 'Nguru', NULL, NULL),
(757, 36, 'Potiskum', NULL, NULL),
(758, 36, 'Tarmuwa', NULL, NULL),
(759, 36, 'Yunusari', NULL, NULL),
(760, 36, 'Yusufari', NULL, NULL),
(761, 37, 'Anka', NULL, NULL),
(762, 37, 'Bakura', NULL, NULL),
(763, 37, 'Birnin Magaji/Kiyaw', NULL, NULL),
(764, 37, 'Bukkuyum', NULL, NULL),
(765, 37, 'Bungudu', NULL, NULL),
(766, 37, 'Gummi', NULL, NULL),
(767, 37, 'Gusau', NULL, NULL),
(768, 37, 'Kaura Namoda', NULL, NULL),
(769, 37, 'Maradun', NULL, NULL),
(770, 37, 'Maru', NULL, NULL),
(771, 37, 'Shinkafi', NULL, NULL),
(772, 37, 'Talata Mafara', NULL, NULL),
(773, 37, 'Chafe', NULL, NULL),
(774, 37, 'Zurmi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_12_020518_create_agents_table', 1),
(4, '2017_10_12_021359_create_admins_table', 1),
(5, '2017_10_12_022035_create_photos_table', 1),
(6, '2017_10_12_080352_create_states_table', 1),
(7, '2017_10_12_082856_add_postedto_to_users_table', 1),
(8, '2017_10_13_203553_create_locals_table', 1),
(9, '2017_10_13_212905_add_is_updated_to_users_table', 1),
(10, '2017_10_24_021857_add_remembertoken_to_admin', 1),
(11, '2017_10_24_030107_add_stateid_to_agents', 1),
(12, '2017_10_25_043606_create_batches_table', 1),
(13, '2017_10_25_050923_create_tokens_table', 1),
(14, '2017_10_27_113454_add_agentid_to_users_table', 1),
(15, '2017_10_27_114508_create_postings_table', 1),
(16, '2017_10_31_061654_add_remembertoken_to_agents', 1),
(17, '2017_11_01_103030_create_reviews_table', 1),
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2017_10_12_020518_create_agents_table', 1),
(36, '2017_10_12_021359_create_admins_table', 1),
(37, '2017_10_12_022035_create_photos_table', 1),
(38, '2017_10_12_080352_create_states_table', 1),
(39, '2017_10_12_082856_add_postedto_to_users_table', 1),
(40, '2017_10_13_203553_create_locals_table', 2),
(41, '2017_10_13_212905_add_is_updated_to_users_table', 3),
(42, '2017_10_24_021857_add_remembertoken_to_admin', 4),
(43, '2017_10_24_030107_add_stateid_to_agents', 5),
(44, '2017_10_25_043606_create_batches_table', 6),
(45, '2017_10_25_050923_create_tokens_table', 7),
(46, '2017_10_27_113454_add_agentid_to_users_table', 8),
(47, '2017_10_27_114508_create_postings_table', 9),
(48, '2017_10_31_061654_add_remembertoken_to_agents', 10),
(50, '2017_11_01_103030_create_reviews_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server_filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `user_filename`, `server_filename`, `created_at`, `updated_at`) VALUES
(1, 1, '1200x-1.jpg', '/passports/15493576891200x-1.jpg', '2019-02-05 08:05:47', '2019-02-05 08:08:09'),
(10, 9, '1200x-1.jpg', '/passports/15493869751200x-1.jpg', '2019-02-05 16:07:18', '2019-02-05 16:16:15'),
(11, 10, '171007-hacks-humanity-38138-jo.jpg', '/passports/1549452946171007-hacks-humanity-38138-jo.jpg', '2019-02-06 10:34:39', '2019-02-06 10:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `postings`
--

CREATE TABLE `postings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Abia State', NULL, NULL),
(2, 'Adamawa State', NULL, NULL),
(3, 'Akwa Ibom State', NULL, NULL),
(4, 'Anambra State', NULL, NULL),
(5, 'Bauchi State', NULL, NULL),
(6, 'Bayelsa State', NULL, NULL),
(7, 'Benue State', NULL, NULL),
(8, 'Borno State', NULL, NULL),
(9, 'Cross River State', NULL, NULL),
(10, 'Delta State', NULL, NULL),
(11, 'Ebonyi State', NULL, NULL),
(12, 'Edo State', NULL, NULL),
(13, 'Ekiti State', NULL, NULL),
(14, 'Enugu State', NULL, NULL),
(15, 'FCT', NULL, NULL),
(16, 'Gombe State', NULL, NULL),
(17, 'Imo State', NULL, NULL),
(18, 'Jigawa State', NULL, NULL),
(19, 'Kaduna State', NULL, NULL),
(20, 'Kano State', NULL, NULL),
(21, 'Katsina State', NULL, NULL),
(22, 'Kebbi State', NULL, NULL),
(23, 'Kogi State', NULL, NULL),
(24, 'Kwara State', NULL, NULL),
(25, 'Lagos State', NULL, NULL),
(26, 'Nasarawa State', NULL, NULL),
(27, 'Niger State', NULL, NULL),
(28, 'Ogun State', NULL, NULL),
(29, 'Ondo State', NULL, NULL),
(30, 'Osun State', NULL, NULL),
(31, 'Oyo State', NULL, NULL),
(32, 'Plateau State', NULL, NULL),
(33, 'Rivers State', NULL, NULL),
(34, 'Sokoto State', NULL, NULL),
(35, 'Taraba State', NULL, NULL),
(36, 'Yobe State', NULL, NULL),
(37, 'Zamfara State', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_updated` int(11) NOT NULL,
  `is_applied` int(11) NOT NULL,
  `is_posted` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `posted_state_id` int(11) NOT NULL,
  `posted_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_id` int(11) NOT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_state_id` int(11) NOT NULL,
  `field_of_interest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbies` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_state_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_state_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_state_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `corper_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agents_email_unique` (`email`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postings`
--
ALTER TABLE `postings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=775;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `postings`
--
ALTER TABLE `postings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
