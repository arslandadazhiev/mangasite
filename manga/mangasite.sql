-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2023 at 06:53 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangasite`
--

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(3) NOT NULL,
  `orname` varchar(50) NOT NULL,
  `rusname` varchar(50) NOT NULL,
  `enname` varchar(50) NOT NULL,
  `cover` varchar(32) NOT NULL,
  `description` varchar(60) NOT NULL,
  `pages` varchar(60) NOT NULL,
  `type` enum('манга','комикс') NOT NULL,
  `tags` varchar(32) NOT NULL,
  `year` int(4) NOT NULL,
  `author` varchar(32) NOT NULL,
  `artist` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `orname`, `rusname`, `enname`, `cover`, `description`, `pages`, `type`, `tags`, `year`, `author`, `artist`) VALUES
(25, 'Koisuru kiseichuu', 'Влюблённый паразит', 'Parasite in Love', 'h7QBAJHY1Wvr_250x350.jpg', 'Koisuru kiseichuu_descr.txt', 'Koisuru kiseichuu', 'манга', '1,2,3,4', 2018, 'Sugaru Miaki', 'HOTATE Yuuki'),
(32, 'Chainsaw Man', 'Человек-бензопила', 'Chainsaw Man', '1597675575_0.96734700.jpg', 'Chainsaw Man_descr.txt', 'Chainsaw Man', 'манга', '1,3', 2018, 'Tatsuki Fujimoto', 'Tatsuki Fujimoto'),
(34, 'Oyasumi Punpun', 'Спокойной ночи, Пунпун', 'Goodnight Punpun', 'LUfaqwjrkIJR_250x350.jpg', 'Oyasumi Punpun _descr.txt', 'Oyasumi Punpun', 'манга', '1,3,4', 2007, 'Inio Asano', 'Inio Asano'),
(36, 'NHK ni Youkoso!', 'Добро пожаловать в N.H.K.', 'Welcome to the N.H.K.', 'nhk.jpg', 'NHK ni Youkoso!.txt', 'NHK ni Youkoso!', 'манга', '1,4', 2004, 'TAKIMOTO Tatsuhiko', 'OOIWA Kenji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
