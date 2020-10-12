-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 07:39 PM
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
-- Database: `qa`
--
CREATE DATABASE IF NOT EXISTS `qa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `qa`;

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `id` int(11) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `tag` varchar(500) NOT NULL,
  `description` varchar(3500) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `question`, `title`, `tag`, `description`, `Date`, `Time`) VALUES
(1, 'what is IPR?', 'IPR', 'Define IPR', 'IPR is Intellectual Property rights', '2020-10-11', '19:54:40'),
(2, 'what is IM?', 'IM', 'Define IM', 'IM is IMFORMATION MANAGEMENT', '2020-10-11', '21:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `joindate` varchar(255) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `joindate`, `Time`) VALUES
(1, 'Madhumitha', 'madhumitha110799@gmail.com', '$2y$10$xnhr.Nk5ryXzKpVY6vQPheYOHS61Qvvk2s/NK.zz3kyl..UdROYuG', 'October 10, 2020', '19:20:04'),
(2, 'admin', 'admin@gmail.com', '$2y$10$TAiY3uqlLnjg404zzvp.ZeGoNhl4dTWi9VwJjTGkp9A06EGhnZvra', 'October 11, 2020', '11:01:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
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
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
