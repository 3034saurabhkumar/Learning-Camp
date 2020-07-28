-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2020 at 07:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `driveup`
--

CREATE TABLE `driveup` (
  `id` int(10) NOT NULL,
  `title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `driveup`
--

INSERT INTO `driveup` (`id`, `title`, `file`, `url`, `Time`) VALUES
(1, 'COURSERA: HTML5 LECTURES NOTES', 'COURSERA: HTML5 LECTURES NOTES', 'https://drive.google.com/file/d/1J8TTgY6KzMTv9ZMmW0VdEA95foHZeb4X/view?usp=sharing', '2020-07-28 07:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `file` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fileup`
--

INSERT INTO `fileup` (`id`, `title`, `file`, `Time`) VALUES
(1, 'C++ for C Programmer ', 'C++ for C Programmer.zip', '2020-07-28 07:52:07'),
(2, 'Future Impact ', 'Future Impact.zip', '2020-07-28 07:52:07'),
(3, 'COMPUTER SHORTCUTS', 'COMPUTER SHORTCUTS.pdf', '2020-07-28 07:52:07'),
(4, 'Code Yourself! Intro. to Programing', 'Code Yourself! Intro. to Programing.zip', '2020-07-28 07:52:07'),
(5, 'test', 'id14212448_root.sql', '2020-07-28 07:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Test', 'test18@test.com', 'test18@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driveup`
--
ALTER TABLE `driveup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileup`
--
ALTER TABLE `fileup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driveup`
--
ALTER TABLE `driveup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fileup`
--
ALTER TABLE `fileup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
