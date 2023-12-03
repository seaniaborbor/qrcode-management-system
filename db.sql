-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 10:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `verication_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `idcard_qrcodes`
--

CREATE TABLE `idcard_qrcodes` (
  `institutionId` int(11) DEFAULT NULL,
  `groupId` varchar(225) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `unqId` varchar(6) DEFAULT NULL,
  `isverify` int(11) DEFAULT NULL,
  `nameOnCard` varchar(50) DEFAULT NULL,
  `pos` varchar(50) DEFAULT NULL,
  `idNum` int(11) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `issuedDate` date DEFAULT NULL,
  `expireDate` date DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idcard_qrcodes`
--

INSERT INTO `idcard_qrcodes` (`institutionId`, `groupId`, `label`, `createdBy`, `createdAt`, `unqId`, `isverify`, `nameOnCard`, `pos`, `idNum`, `file_path`, `issuedDate`, `expireDate`, `id`) VALUES
(5, 'HGByx', 'Agm 2023 staff id cards', 'admin@gmail.com', '2023-12-02 02:01:38', '2XuWQ', 1, 'Prince S. Tulay', 'Instructor', 937, '1701479761_0854432d8f2070c92ead.jpg', '2023-12-01', '2023-11-29', 3),
(5, 'HGByx', 'Agm 2023 staff id cards', 'admin@gmail.com', '2023-11-30 16:59:11', 'AvWjS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4),
(5, 'HGByx', 'Agm 2023 staff id cards', 'admin@gmail.com', '2023-11-30 16:59:11', 'bl0NY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5),
(5, 'HGByx', 'Agm 2023 staff id cards', 'admin@gmail.com', '2023-11-30 16:59:11', 'kp6hG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE `institutions` (
  `id` int(224) NOT NULL,
  `institutionName` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `address` varchar(225) NOT NULL,
  `logo_path` varchar(225) NOT NULL,
  `about` longtext NOT NULL,
  `createdBy` varchar(225) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institutions`
--

INSERT INTO `institutions` (`id`, `institutionName`, `phone`, `email`, `address`, `logo_path`, `about`, `createdBy`, `dateCreated`) VALUES
(4, 'Jennie High School', '0775577755', 'jps@gmail.com', 'New Georgia Gulf', '1700915511_4fdde7c096aa7ddeee8d.png', 'Build on the principal of christianity, The Jennie High School is envisioned to providing education and dicipline to student going of the Republic of Liberia. \r\n\r\nOur institution is sponsored by The Baptists and and other christians in the United States of America. \r\n\r\nOur Motto is raising champions for christ', 'admin@gmail.com', '2023-11-25 12:33:05'),
(5, 'Grace Assembly of God High School ', '0888610312', 'ag@gmail.com', 'New Georgia Signboard', '1700915814_150ce42477549df2ab04.jpg', 'Grace Assimbly of God Mission High School is a Minissionary School. This banch of AG is Located in New Georgia Signboard, Monrovia and is a registered member of the Assimbly Mission of God School system.', 'admin@gmail.com', '2023-11-25 12:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `reportcard_qrcodes`
--

CREATE TABLE `reportcard_qrcodes` (
  `id` int(225) NOT NULL,
  `institutionId` int(225) NOT NULL,
  `label` varchar(100) NOT NULL,
  `createdBy` varchar(50) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `unqId` varchar(6) NOT NULL,
  `groupId` varchar(6) NOT NULL,
  `isverify` int(11) NOT NULL,
  `nameOnCard` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `promoted_stmt` varchar(50) NOT NULL,
  `conduct` varchar(20) NOT NULL,
  `issuedDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reportcard_qrcodes`
--

INSERT INTO `reportcard_qrcodes` (`id`, `institutionId`, `label`, `createdBy`, `createdAt`, `unqId`, `groupId`, `isverify`, `nameOnCard`, `class`, `promoted_stmt`, `conduct`, `issuedDate`) VALUES
(31, 1, '2023-jps-1st grade report card', 'admin@gmail.com', '2023-11-20 23:11:41', 's5IvJ', 'nBUJC', 0, '', '', '', '', NULL),
(32, 1, '2023-jps-1st grade report card', 'admin@gmail.com', '2023-11-20 23:11:41', 'pW31X', 'nBUJC', 0, '', '', '', '', NULL),
(33, 1, '2023-jps-1st grade report card', 'admin@gmail.com', '2023-11-20 23:11:41', '9Pv31', 'nBUJC', 0, '', '', '', '', NULL),
(34, 1, '2023-jps-1st grade report card', 'admin@gmail.com', '2023-11-20 23:11:41', 'VCb2P', 'nBUJC', 0, '', '', '', '', NULL),
(35, 1, '2023-jps-1st grade report card', 'admin@gmail.com', '2023-11-20 23:11:41', 'XinxB', 'nBUJC', 0, '', '', '', '', NULL),
(36, 1, '2023-jps-1st grade report card', 'admin@gmail.com', '2023-11-20 23:11:41', 'DTmEM', 'nBUJC', 0, '', '', '', '', NULL),
(38, 1, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-20 23:32:35', 'TEw6Y', 'iWxB4', 0, '', '', '', '', NULL),
(39, 1, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-20 23:32:35', 'FBVm5', 'iWxB4', 0, '', '', '', '', NULL),
(40, 1, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-20 23:32:36', 'ViVWg', 'iWxB4', 0, '', '', '', '', NULL),
(41, 1, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-20 23:32:36', 'ut7sh', 'iWxB4', 0, '', '', '', '', NULL),
(42, 1, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-20 23:32:36', 'OXrkm', 'iWxB4', 0, '', '', '', '', NULL),
(43, 1, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-20 23:32:36', 'dMYpv', 'iWxB4', 0, '', '', '', '', NULL),
(44, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-30 20:43:57', 'GSaAj', 'oGxgV', 1, 'Mark Morses', 'K-I', 'Promoted To Next Cla', 'Good', '2023-11-29'),
(45, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-30 21:21:59', 'gRdXG', 'oGxgV', 1, 'Moses Kollie ', 'Grade Eight', 'Demoted', 'Good', '2023-11-29'),
(46, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'IXOa6', 'oGxgV', 0, '', '', '', '', NULL),
(47, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'VALlQ', 'oGxgV', 0, '', '', '', '', NULL),
(48, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', '5Hh9h', 'oGxgV', 0, '', '', '', '', NULL),
(49, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'NMZZR', 'oGxgV', 0, '', '', '', '', NULL),
(50, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'VAEbz', 'oGxgV', 0, '', '', '', '', NULL),
(51, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'q3J5M', 'oGxgV', 0, '', '', '', '', NULL),
(52, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', '1NDTD', 'oGxgV', 0, '', '', '', '', NULL),
(53, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'IcCyN', 'oGxgV', 0, '', '', '', '', NULL),
(54, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'I8ng8', 'oGxgV', 0, '', '', '', '', NULL),
(55, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', '5qTta', 'oGxgV', 0, '', '', '', '', NULL),
(56, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'x9E4q', 'oGxgV', 0, '', '', '', '', NULL),
(57, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'efNAo', 'oGxgV', 0, '', '', '', '', NULL),
(58, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'F4djm', 'oGxgV', 0, '', '', '', '', NULL),
(59, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'guDfP', 'oGxgV', 0, '', '', '', '', NULL),
(60, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'YLXTQ', 'oGxgV', 0, '', '', '', '', NULL),
(61, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'yx5ce', 'oGxgV', 0, '', '', '', '', NULL),
(62, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'O6Ktc', 'oGxgV', 0, '', '', '', '', NULL),
(63, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', '5Y0gV', 'oGxgV', 0, '', '', '', '', NULL),
(64, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'ndp73', 'oGxgV', 0, '', '', '', '', NULL),
(65, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'n5uAP', 'oGxgV', 0, '', '', '', '', NULL),
(66, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:05', 'AZykf', 'oGxgV', 0, '', '', '', '', NULL),
(67, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:06', 'cx7UB', 'oGxgV', 0, '', '', '', '', NULL),
(68, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:06', 'O4gwC', 'oGxgV', 0, '', '', '', '', NULL),
(69, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:06', 'yj41x', 'oGxgV', 0, '', '', '', '', NULL),
(70, 5, 'Agm 2023-2024 grade-5 Report Cards ', 'admin@gmail.com', '2023-11-25 12:39:06', 'NQdz6', 'oGxgV', 0, '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `passwd` varchar(225) NOT NULL,
  `accountType` varchar(50) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `passwd`, `accountType`, `createdAt`) VALUES
(0, 'admin@gmail.com', '$2y$10$YJbPage79uBPQmYs7U654OfCZXxby1UZJ3KyVT1c7LS8n0ds/x/xO', '1', '2023-11-14 22:50:49'),
(0, 'user@gmail.com', '$2y$10$YJbPage79uBPQmYs7U654OfCZXxby1UZJ3KyVT1c7LS8n0ds/x/xO', '0', '2023-11-14 22:50:49'),
(0, 'garmai@gmail.com', '$2y$10$nU4xjRs/iOQCc9lDIR.W6.90B16e43bksEYDWyr6PghGYd4YuJVXi', '0', '2023-12-02 08:05:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `idcard_qrcodes`
--
ALTER TABLE `idcard_qrcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportcard_qrcodes`
--
ALTER TABLE `reportcard_qrcodes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `idcard_qrcodes`
--
ALTER TABLE `idcard_qrcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `institutions`
--
ALTER TABLE `institutions`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reportcard_qrcodes`
--
ALTER TABLE `reportcard_qrcodes`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
