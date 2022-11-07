-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 04:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task4`
--

-- --------------------------------------------------------

--
-- Table structure for table `bad_word`
--

CREATE TABLE `bad_word` (
  `id_bad_word` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `word` varchar(255) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bad_word`
--

INSERT INTO `bad_word` (`id_bad_word`, `id_comment`, `word`, `number`) VALUES
(8, 6, '1', 2),
(9, 8, '1', 4),
(10, 9, '1', 4),
(11, 10, '1', 3),
(12, 11, '1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `filtered_comment` varchar(255) NOT NULL,
  `total_bad_words` varchar(255) NOT NULL,
  `total_words` varchar(255) NOT NULL,
  `bad_level` int(11) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  `image` varchar(120) DEFAULT NULL,
  `status` enum('public','private') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `name`, `email`, `comment`, `filtered_comment`, `total_bad_words`, `total_words`, `bad_level`, `date_time`, `image`, `status`) VALUES
(6, 'Luka', 'luka.prcic01@gmail.com', 'Komentar drop kill jedan 2', 'Komentar d**p k**l jedan 2', '2', '5', 4, '2022-11-07 10:44:37', '1667815328-947-7.jpg', 'public'),
(7, 'Marko', 'marko@gmail.com', 'Komentar drop dead kill', 'Komentar d**p dead k**l', '2', '4', 4, '2022-11-07 10:58:31', 'no file', 'private'),
(8, 'Ivan', 'ivan@gmail.com', 'komentar drop drop kill drop', 'komentar d**p d**p k**l d**p', '4', '5', 6, '2022-11-07 11:02:08', '1667815328-947-7.jpg', 'public'),
(9, 'Ivan', 'ivan@gmail.com', 'komentar drop drop kill drop', 'komentar d**p d**p k**l d**p', '4', '5', 6, '2022-11-07 11:02:54', '1667815328-947-7.jpg', 'public'),
(10, 'Jovan', 'jovan@gmail.com', 'drop kill jedan dva tri drop', 'd**p k**l jedan dva tri d**p', '3', '6', 4, '2022-11-07 11:03:59', '1667815328-947-7.jpg', 'public'),
(11, 'Novo ime', 'test@mail.com', 'drop kill jedan dva tri drop drop', 'd**p k**l jedan dva tri d**p d**p', '4', '7', 4, '2022-11-07 11:04:55', 'no file', 'public');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bad_word`
--
ALTER TABLE `bad_word`
  ADD PRIMARY KEY (`id_bad_word`),
  ADD KEY `bad_comment` (`id_comment`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bad_word`
--
ALTER TABLE `bad_word`
  MODIFY `id_bad_word` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bad_word`
--
ALTER TABLE `bad_word`
  ADD CONSTRAINT `bad_comment` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id_comment`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
