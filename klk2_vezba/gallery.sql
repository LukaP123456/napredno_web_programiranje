-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 07:59 PM
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
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name`, `code`) VALUES
(1, 'nature', '24525'),
(2, 'sport', '1254'),
(3, 'funny', '82');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `id_user`, `date_time`) VALUES
(1, 0, '2022-12-06 19:03:47'),
(2, 0, '2022-12-06 19:05:33'),
(3, 0, '2022-12-06 19:06:55'),
(4, 0, '2022-12-06 19:07:12'),
(5, 0, '2022-12-06 19:08:04'),
(6, 0, '2022-12-06 19:08:16'),
(7, 0, '2022-12-06 19:08:29'),
(8, 0, '2022-12-06 19:08:40'),
(9, 0, '2022-12-06 19:08:59'),
(10, 0, '2022-12-06 19:09:51'),
(11, 0, '2022-12-06 19:12:57'),
(12, 0, '2022-12-06 19:14:16'),
(13, 0, '2022-12-06 19:20:38'),
(14, 0, '2022-12-06 19:28:22'),
(15, 0, '2022-12-06 19:31:52'),
(16, 0, '2022-12-06 19:32:25'),
(17, 0, '2022-12-06 19:32:39'),
(18, 0, '2022-12-06 19:32:54'),
(19, 0, '2022-12-06 19:35:34'),
(20, 0, '2022-12-06 19:35:43'),
(21, 0, '2022-12-06 19:37:07'),
(22, 0, '2022-12-06 19:37:22'),
(23, 0, '2022-12-06 19:41:09'),
(24, 0, '2022-12-06 19:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('amateur','novice','professional') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `status`) VALUES
(40, 'Luka', '$2y$10$Gv6zcGvrU1VZWq2uugsx8.8QWtBrEez2CGwfSUT5Hrv/ljU8X2Rp.', 'luka@gmail.com', 'novice'),
(41, 'Marko', '$2y$10$tB/UqjL4obaMAp8LZUqvQerk0tUckzUNsnxi9Z7HbAjmuWVqsSMF.', 'marko@gmail.com', 'novice'),
(42, 'Ivan', '$2y$10$gNVRjAIIfHGgIHksYIILFeQEfVqqysRYA.3mHzH9MZL7IeUex.ATi', 'ivan@gmail.com', 'novice');

-- --------------------------------------------------------

--
-- Table structure for table `user_image`
--

CREATE TABLE `user_image` (
  `id_user_image` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `score` float NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_image`
--
ALTER TABLE `user_image`
  ADD PRIMARY KEY (`id_user_image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_image`
--
ALTER TABLE `user_image`
  MODIFY `id_user_image` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
