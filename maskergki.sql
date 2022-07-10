-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2022 pada 20.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maskergki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `Suhu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `Suhu`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, '69.00'),
(6, '69.00'),
(7, '69.00'),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, ''),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, ''),
(48, ''),
(49, ''),
(50, ''),
(51, ''),
(52, ''),
(53, ''),
(54, ''),
(55, ''),
(56, ''),
(57, ''),
(58, ''),
(59, ''),
(60, ''),
(61, ''),
(62, ''),
(63, ''),
(64, ''),
(65, ''),
(66, ''),
(67, ''),
(68, ''),
(69, ''),
(70, ''),
(71, ''),
(72, ''),
(73, ''),
(74, ''),
(75, ''),
(76, ''),
(77, ''),
(78, ''),
(79, ''),
(80, ''),
(81, ''),
(82, ''),
(83, ''),
(84, '99.00'),
(85, ''),
(86, ''),
(87, ''),
(88, ''),
(89, ''),
(90, ''),
(91, ''),
(92, ''),
(93, ''),
(94, ''),
(95, ''),
(96, ''),
(97, ''),
(98, ''),
(99, ''),
(100, ''),
(101, ''),
(102, ''),
(103, ''),
(104, ''),
(105, ''),
(106, ''),
(107, ''),
(108, ''),
(109, ''),
(110, ''),
(111, ''),
(112, ''),
(113, ''),
(114, ''),
(115, ''),
(116, ''),
(117, ''),
(118, ''),
(119, ''),
(120, ''),
(121, ''),
(122, ''),
(123, ''),
(124, ''),
(125, ''),
(126, ''),
(127, ''),
(128, ''),
(129, ''),
(130, ''),
(131, ''),
(132, ''),
(133, ''),
(134, ''),
(135, ''),
(136, ''),
(137, ''),
(138, ''),
(139, ''),
(140, ''),
(141, ''),
(142, ''),
(143, ''),
(144, ''),
(145, ''),
(146, ''),
(147, ''),
(148, ''),
(149, ''),
(150, ''),
(151, ''),
(152, ''),
(153, ''),
(154, ''),
(155, ''),
(156, ''),
(157, ''),
(158, ''),
(159, ''),
(160, ''),
(161, ''),
(162, ''),
(163, ''),
(164, ''),
(165, ''),
(166, ''),
(167, ''),
(168, ''),
(169, ''),
(170, ''),
(171, ''),
(172, ''),
(173, ''),
(174, ''),
(175, ''),
(176, ''),
(177, ''),
(178, ''),
(179, ''),
(180, ''),
(181, ''),
(182, ''),
(183, ''),
(184, ''),
(185, ''),
(186, ''),
(187, ''),
(188, ''),
(189, ''),
(190, ''),
(191, ''),
(192, ''),
(193, ''),
(194, ''),
(195, ''),
(196, ''),
(197, ''),
(198, ''),
(199, ''),
(200, ''),
(201, ''),
(202, ''),
(203, ''),
(204, ''),
(205, ''),
(206, ''),
(207, ''),
(208, ''),
(209, ''),
(210, ''),
(211, ''),
(212, ''),
(213, ''),
(214, ''),
(215, ''),
(216, ''),
(217, ''),
(218, ''),
(219, ''),
(220, ''),
(221, '99.00'),
(222, ''),
(223, ''),
(224, ''),
(225, ''),
(226, ''),
(227, ''),
(228, ''),
(229, ''),
(230, ''),
(231, ''),
(232, ''),
(233, ''),
(234, ''),
(235, ''),
(236, ''),
(237, ''),
(238, ''),
(239, ''),
(240, ''),
(241, ''),
(242, ''),
(243, ''),
(244, ''),
(245, ''),
(246, ''),
(247, ''),
(248, ''),
(249, ''),
(250, ''),
(251, ''),
(252, ''),
(253, ''),
(254, ''),
(255, ''),
(256, ''),
(257, ''),
(258, ''),
(259, ''),
(260, ''),
(261, ''),
(262, ''),
(263, ''),
(264, ''),
(265, ''),
(266, ''),
(267, ''),
(268, ''),
(269, ''),
(270, ''),
(271, ''),
(272, ''),
(273, ''),
(274, ''),
(275, ''),
(276, ''),
(277, ''),
(278, ''),
(279, ''),
(280, ''),
(281, ''),
(282, ''),
(283, ''),
(284, ''),
(285, ''),
(286, ''),
(287, ''),
(288, ''),
(289, ''),
(290, ''),
(291, ''),
(292, ''),
(293, ''),
(294, ''),
(295, ''),
(296, ''),
(297, ''),
(298, ''),
(299, ''),
(300, ''),
(301, ''),
(302, ''),
(303, ''),
(304, ''),
(305, ''),
(306, ''),
(307, ''),
(308, ''),
(309, ''),
(310, ''),
(311, ''),
(312, ''),
(313, ''),
(314, ''),
(315, ''),
(316, ''),
(317, ''),
(318, ''),
(319, ''),
(320, ''),
(321, ''),
(322, ''),
(323, ''),
(324, ''),
(325, ''),
(326, ''),
(327, ''),
(328, ''),
(329, ''),
(330, ''),
(331, ''),
(332, ''),
(333, ''),
(334, ''),
(335, ''),
(336, ''),
(337, ''),
(338, ''),
(339, ''),
(340, ''),
(341, ''),
(342, ''),
(343, ''),
(344, ''),
(345, ''),
(346, ''),
(347, ''),
(348, ''),
(349, ''),
(350, ''),
(351, ''),
(352, ''),
(353, ''),
(354, ''),
(355, ''),
(356, ''),
(357, ''),
(358, ''),
(359, ''),
(360, ''),
(361, ''),
(362, ''),
(363, ''),
(364, ''),
(365, ''),
(366, ''),
(367, ''),
(368, ''),
(369, ''),
(370, ''),
(371, ''),
(372, ''),
(373, ''),
(374, ''),
(375, ''),
(376, ''),
(377, ''),
(378, ''),
(379, ''),
(380, ''),
(381, ''),
(382, ''),
(383, ''),
(384, ''),
(385, ''),
(386, ''),
(387, ''),
(388, ''),
(389, ''),
(390, '99.00'),
(391, '99.00'),
(392, '99.00'),
(393, '99.00'),
(394, '99.00'),
(395, '99.00'),
(396, '99.00'),
(397, ''),
(398, ''),
(399, ''),
(400, ''),
(401, ''),
(402, ''),
(403, ''),
(404, ''),
(405, ''),
(406, ''),
(407, ''),
(408, ''),
(409, ''),
(410, ''),
(411, ''),
(412, ''),
(413, ''),
(414, ''),
(415, ''),
(416, ''),
(417, ''),
(418, ''),
(419, ''),
(420, ''),
(421, ''),
(422, ''),
(423, ''),
(424, ''),
(425, ''),
(426, ''),
(427, ''),
(428, ''),
(429, ''),
(430, ''),
(431, ''),
(432, ''),
(433, ''),
(434, ''),
(435, ''),
(436, ''),
(437, ''),
(438, ''),
(439, ''),
(440, '99.00'),
(441, ''),
(442, ''),
(443, ''),
(444, ''),
(445, ''),
(446, ''),
(447, ''),
(448, ''),
(449, ''),
(450, ''),
(451, ''),
(452, ''),
(453, ''),
(454, ''),
(455, ''),
(456, ''),
(457, ''),
(458, ''),
(459, ''),
(460, ''),
(461, ''),
(462, ''),
(463, ''),
(464, ''),
(465, ''),
(466, ''),
(467, ''),
(468, ''),
(469, ''),
(470, ''),
(471, ''),
(472, ''),
(473, ''),
(474, ''),
(475, ''),
(476, ''),
(477, ''),
(478, ''),
(479, ''),
(480, ''),
(481, ''),
(482, ''),
(483, ''),
(484, ''),
(485, ''),
(486, ''),
(487, ''),
(488, ''),
(489, ''),
(490, ''),
(491, ''),
(492, ''),
(493, ''),
(494, ''),
(495, ''),
(496, ''),
(497, ''),
(498, ''),
(499, ''),
(500, ''),
(501, ''),
(502, ''),
(503, ''),
(504, ''),
(505, ''),
(506, ''),
(507, ''),
(508, ''),
(509, ''),
(510, ''),
(511, ''),
(512, ''),
(513, ''),
(514, ''),
(515, ''),
(516, ''),
(517, ''),
(518, ''),
(519, ''),
(520, ''),
(521, ''),
(522, ''),
(523, ''),
(524, ''),
(525, ''),
(526, ''),
(527, ''),
(528, ''),
(529, ''),
(530, ''),
(531, ''),
(532, ''),
(533, ''),
(534, ''),
(535, ''),
(536, ''),
(537, ''),
(538, ''),
(539, ''),
(540, ''),
(541, ''),
(542, ''),
(543, ''),
(544, ''),
(545, ''),
(546, ''),
(547, ''),
(548, ''),
(549, ''),
(550, ''),
(551, ''),
(552, ''),
(553, ''),
(554, ''),
(555, ''),
(556, ''),
(557, ''),
(558, ''),
(559, ''),
(560, ''),
(561, ''),
(562, ''),
(563, ''),
(564, ''),
(565, ''),
(566, ''),
(567, ''),
(568, ''),
(569, ''),
(570, ''),
(571, ''),
(572, ''),
(573, ''),
(574, ''),
(575, ''),
(576, ''),
(577, '99.00'),
(578, ''),
(579, ''),
(580, ''),
(581, ''),
(582, ''),
(583, ''),
(584, ''),
(585, ''),
(586, ''),
(587, ''),
(588, ''),
(589, ''),
(590, ''),
(591, ''),
(592, ''),
(593, ''),
(594, ''),
(595, ''),
(596, ''),
(597, ''),
(598, ''),
(599, ''),
(600, ''),
(601, ''),
(602, ''),
(603, ''),
(604, ''),
(605, ''),
(606, ''),
(607, ''),
(608, ''),
(609, ''),
(610, ''),
(611, ''),
(612, ''),
(613, ''),
(614, ''),
(615, ''),
(616, ''),
(617, ''),
(618, ''),
(619, ''),
(620, ''),
(621, ''),
(622, ''),
(623, ''),
(624, ''),
(625, ''),
(626, ''),
(627, ''),
(628, ''),
(629, ''),
(630, ''),
(631, ''),
(632, ''),
(633, ''),
(634, ''),
(635, ''),
(636, ''),
(637, ''),
(638, ''),
(639, ''),
(640, ''),
(641, ''),
(642, ''),
(643, ''),
(644, ''),
(645, ''),
(646, ''),
(647, '99.00'),
(648, '99.00'),
(649, '99.00'),
(650, '99.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_suhu`
--

CREATE TABLE `tabel_suhu` (
  `id` int(11) NOT NULL,
  `Suhu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_suhu`
--

INSERT INTO `tabel_suhu` (`id`, `Suhu`) VALUES
(45, 27),
(46, 27),
(47, 27),
(48, 28),
(49, 0),
(50, 31),
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 0),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0),
(66, 0),
(67, 0),
(68, 0),
(69, 0),
(70, 0),
(71, 0),
(72, 0),
(73, 0),
(74, 0),
(75, 0),
(76, 0),
(77, 0),
(78, 0),
(79, 0),
(80, 0),
(81, 0),
(82, 0),
(83, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_coba`
--

CREATE TABLE `tb_coba` (
  `id` int(11) NOT NULL,
  `temperature` float NOT NULL,
  `humidity` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_entry`
--

CREATE TABLE `tb_entry` (
  `uid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_entry`
--

INSERT INTO `tb_entry` (`uid`) VALUES
(':05:87:DC:02:04:B1:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_history`
--

CREATE TABLE `tb_history` (
  `id_history` int(11) NOT NULL,
  `e_KTP` varchar(500) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_history`
--

INSERT INTO `tb_history` (`id_history`, `e_KTP`, `tanggal`) VALUES
(1, '909:88A:223', '0000-00-00 00:00:00'),
(2, '2323:224:das:0', '0000-00-00 00:00:00'),
(3, '2201AD:232:2323:8J', '0000-00-00 00:00:00'),
(70, '05:87:DC:02:04:B1:00', '2022-06-13 07:54:26'),
(71, 'A7:EC:C1:DD', '2022-06-13 07:54:50'),
(83, ':05:87:DC:02:04:B1:00', '2022-06-17 07:14:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jajal`
--

CREATE TABLE `tb_jajal` (
  `id` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jajal`
--

INSERT INTO `tb_jajal` (`id`, `uid`, `tanggal`) VALUES
(1267, 'A7:EC:C1:DD', '2022-06-13 07:49:48'),
(1268, '05:87:DC:02:04:B1:00', '2022-06-13 07:49:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sginal`
--

CREATE TABLE `tb_sginal` (
  `label` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sginal`
--

INSERT INTO `tb_sginal` (`label`) VALUES
('mask');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_smarthome`
--

CREATE TABLE `tb_smarthome` (
  `id` int(5) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Wajah` varchar(20) NOT NULL,
  `e_KTP` varchar(30) NOT NULL,
  `Password` int(7) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_smarthome`
--

INSERT INTO `tb_smarthome` (`id`, `Nama`, `Wajah`, `e_KTP`, `Password`, `Tanggal`) VALUES
(1, 'Gesha', 'face', '90e:90881:e:4', 123456, '2022-05-11 17:00:00'),
(2, 'bambang', 'facekuuu', '89:ada:12', 99090909, '2022-05-12 17:00:00'),
(4, 'boby', 'kuranggg.jpg', '0290293:3432:adaww', 1, '0000-00-00 00:00:00'),
(5, 'boby', 'kuranggg.jpg', '0290293:3432:adaww', 1, '2022-05-13 17:00:00'),
(6, 'candra', 'candra.jpg', 'asdsaddw:898A:da90', 22222, '2022-05-10 09:44:17'),
(7, 'dita', 'dita.jpg', 'dsaldasl:009ada:22', 23232, '2022-05-14 09:47:36'),
(8, 'ozy', 'ozy.jpg', 'hajksa868:ihsai89', 8777888, '2022-05-15 05:12:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_uid`
--

CREATE TABLE `tb_uid` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_uid`
--

INSERT INTO `tb_uid` (`id`, `uid`) VALUES
(57, '_05_87_DC_02_04_B1_00'),
(58, '_05_87_DC_02_04_B1_00'),
(59, '_A7_EC_C1_DD'),
(60, '_A7_EC_C1_DD'),
(61, '_05_87_DC_02_04_B1_00'),
(62, ':05:87:DC:02:04:B1:00'),
(63, ':A7:EC:C1:DD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `wajah` varchar(20) NOT NULL,
  `uid` varchar(75) NOT NULL,
  `password` int(10) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `wajah`, `uid`, `password`, `Tanggal`) VALUES
(4, 'gesha111', '', 'A7:EC:C1:DD', 11, '0000-00-00 00:00:00'),
(5, 'GESHAAAAAA', '', '05:87:DC:02:04:B1:00', 90909, '2022-06-15 17:00:00'),
(6, 'bambang', '', '05:87:DC:02:04:B1:00', 22222, '2022-06-16 17:00:00'),
(12, 'akuuuu', '', '05:87:DC:02:04:B1:00', 0, '2022-05-29 17:00:00'),
(13, 'coba baru', '', '05:87:DC:02:04:B1:00', 90909, '2022-06-16 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(2) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `level` enum('Admin','Pegawai') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama`, `username`, `password`, `level`, `alamat`, `no_telp`, `dibuat_pada`) VALUES
(4, 'Gesha', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Admin', 'Malang', '0821312456', '2022-06-15 07:08:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(126) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `uid` varchar(40) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `uid`, `tgl`, `date_created`) VALUES
(43, 'admin', 'admin@gmail.com', 'admin.jpg', '$2y$10$vPL01zUn92XOowiXzOq1DuPSXzbNXBbEj3TNfkRTC59GRaZYZuNCO', 1, 1, NULL, NULL, 1655757124),
(65, 'mask', '', '', '', 1, 1, '', '2022-07-08', 0),
(66, 'mask', '', '', '', 1, 1, '', '2022-07-08', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_suhu`
--
ALTER TABLE `tabel_suhu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_coba`
--
ALTER TABLE `tb_coba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indeks untuk tabel `tb_jajal`
--
ALTER TABLE `tb_jajal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_smarthome`
--
ALTER TABLE `tb_smarthome`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_uid`
--
ALTER TABLE `tb_uid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=651;

--
-- AUTO_INCREMENT untuk tabel `tabel_suhu`
--
ALTER TABLE `tabel_suhu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `tb_coba`
--
ALTER TABLE `tb_coba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `tb_jajal`
--
ALTER TABLE `tb_jajal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1269;

--
-- AUTO_INCREMENT untuk tabel `tb_smarthome`
--
ALTER TABLE `tb_smarthome`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_uid`
--
ALTER TABLE `tb_uid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
