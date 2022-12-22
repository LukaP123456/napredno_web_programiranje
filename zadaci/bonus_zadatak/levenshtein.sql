-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 03:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `levenshtein`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id_result` int(11) NOT NULL,
  `id_word` int(11) NOT NULL,
  `input` varchar(255) NOT NULL,
  `distance` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id_result`, `id_word`, `input`, `distance`, `date_time`) VALUES
(104, 251, 'asdasdaqwe2weqweqwa asd w ', 26, '2022-12-19 15:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id_word` int(11) NOT NULL,
  `word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id_word`, `word`) VALUES
(201, 'tinnitus'),
(202, 'tinnitus'),
(203, 'acouasm'),
(204, 'singing'),
(205, 'ring'),
(206, 'sing'),
(207, 'cinchonism'),
(208, 'rings'),
(209, 'ear'),
(210, 'sound'),
(211, 'hammer'),
(212, 'jangle'),
(213, 'are'),
(214, 'blow'),
(215, 'bob'),
(216, 'bong'),
(217, 'bright'),
(218, 'call'),
(219, 'clam'),
(220, 'clock'),
(221, 'ding'),
(222, 'hinting'),
(223, 'hunting'),
(224, 'ido'),
(225, 'mute'),
(226, 'ping'),
(227, 'whistle'),
(228, 'yoke'),
(229, 'acousma'),
(230, 'binaural'),
(231, 'hear'),
(232, 'hearing'),
(233, 'rar'),
(234, 'smap'),
(235, 'snap'),
(236, 'stun'),
(237, 'stunned'),
(238, 'bombus'),
(239, 'ear hole'),
(240, 'jangling'),
(241, 'acoustic'),
(242, 'amanita'),
(243, 'annulus'),
(244, 'arcus senilis'),
(245, 'articulate'),
(246, 'articulation'),
(247, 'asperity'),
(248, 'audiphone'),
(249, 'auditorium'),
(250, 'aurally'),
(251, 'baldhead'),
(252, 'bass drum'),
(253, 'blowball'),
(254, 'bonk'),
(255, 'box'),
(256, 'brain'),
(257, 'brr'),
(258, 'but'),
(259, 'butt'),
(260, 'butted'),
(261, 'buzz'),
(262, 'calx'),
(263, 'cameo'),
(264, 'canada goose'),
(265, 'cannon'),
(266, 'canon'),
(267, 'cap'),
(268, 'cephalic'),
(269, 'cephalopod'),
(270, 'cicada'),
(271, 'circlet'),
(272, 'clip'),
(273, 'cochlea'),
(274, 'columella'),
(275, 'conk'),
(276, 'crack'),
(277, 'crepitus'),
(278, 'dais'),
(279, 'dark glasses'),
(280, 'dental'),
(281, 'dentilabial'),
(282, 'dentilingual'),
(283, 'dentiphone'),
(284, 'digraph'),
(285, 'dissonant'),
(286, 'drum'),
(287, 'ear trumpet'),
(288, 'eardrum'),
(289, 'earring'),
(290, 'echo'),
(291, 'euphonic'),
(292, 'euphonious'),
(293, 'eyebolt'),
(294, 'facer'),
(295, 'falter'),
(296, 'fast'),
(297, 'fasting'),
(298, 'fetch'),
(299, 'fire alarm'),
(300, 'frum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id_result`),
  ADD KEY `results_word` (`id_word`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id_word`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id_result` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id_word` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_word` FOREIGN KEY (`id_word`) REFERENCES `words` (`id_word`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
