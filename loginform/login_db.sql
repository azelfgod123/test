-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 06:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `authenticID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `authenticCode` int(11) NOT NULL,
  `createdAT` datetime NOT NULL,
  `expiration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`authenticID`, `userID`, `authenticCode`, `createdAT`, `expiration`) VALUES
(1, 1, 945623, '2021-04-03 23:33:48', '2021-04-03 23:38:48'),
(2, 44, 840222, '2021-04-03 23:35:45', '2021-04-03 23:40:45'),
(3, 1, 707703, '2021-04-04 14:05:05', '2021-04-04 14:10:05'),
(4, 1, 441911, '2021-04-04 14:15:40', '2021-04-04 14:20:40'),
(5, 1, 471337, '2021-04-04 14:23:10', '2021-04-04 14:28:10'),
(6, 1, 476359, '2021-04-04 14:32:34', '2021-04-04 14:37:34'),
(7, 0, 386247, '2021-04-28 23:00:14', '2021-04-28 23:05:14'),
(8, 1, 647267, '2021-04-28 23:01:37', '2021-04-28 23:06:37'),
(9, 44, 129658, '2021-04-28 23:46:33', '2021-04-28 23:51:33'),
(10, 1, 297052, '2021-04-28 23:57:52', '2021-04-29 00:02:52'),
(11, 1, 203015, '2021-04-29 00:00:10', '2021-04-29 00:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `event_log`
--

CREATE TABLE `event_log` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity` varchar(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_log`
--

INSERT INTO `event_log` (`event_id`, `user_id`, `activity`, `time`) VALUES
(1, 1, 'Login', '2021-04-28 15:02:39'),
(2, 1, 'Logout', '2021-04-28 15:05:07'),
(3, 44, 'Login', '2021-04-28 15:46:41'),
(4, 44, 'Logout', '2021-04-28 15:46:43'),
(5, 1, 'Login', '2021-04-28 15:58:01'),
(6, 1, 'Logout', '2021-04-28 15:58:28'),
(7, 1, 'Login', '2021-04-28 16:00:18'),
(8, 1, 'Logout', '2021-04-28 16:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`) VALUES
(1, 'ADMIN', 'ADMIN123', ''),
(43, '!123leeANN', '!LEEANNdlgd15', 'leeannpaula.delgado@cvsu.edu.ph'),
(44, 'leedlgd', '!Itoaysample1Lang!', 'lee@yahoo.com'),
(45, 'Piaaaa1', 'Piaaaaaaaa1-', 'sphmrtnz11@gmail.com'),
(46, 'LEEEaann!123', 'LEEEaann!123', 'paula.delgado@cvsu.edu.ph');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`authenticID`);

--
-- Indexes for table `event_log`
--
ALTER TABLE `event_log`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `authenticID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event_log`
--
ALTER TABLE `event_log`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
