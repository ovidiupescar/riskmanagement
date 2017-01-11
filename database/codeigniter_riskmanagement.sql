-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 07:17 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_riskmanagement`
--
CREATE DATABASE IF NOT EXISTS `codeigniter_riskmanagement` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `codeigniter_riskmanagement`;

-- --------------------------------------------------------

--
-- Table structure for table `fmea`
--

CREATE TABLE `fmea` (
  `id` int(255) NOT NULL,
  `where_where` text NOT NULL,
  `what_what` text NOT NULL,
  `potential_failure_mode` text NOT NULL,
  `effect` text NOT NULL,
  `severity` int(255) NOT NULL,
  `why` text NOT NULL,
  `ocurente` int(255) NOT NULL,
  `current_control` text NOT NULL,
  `detection` int(255) NOT NULL,
  `RPN` int(255) NOT NULL,
  `actions_recommended` text NOT NULL,
  `action_owner` text NOT NULL,
  `task_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fmea`
--

INSERT INTO `fmea` (`id`, `where_where`, `what_what`, `potential_failure_mode`, `effect`, `severity`, `why`, `ocurente`, `current_control`, `detection`, `RPN`, `actions_recommended`, `action_owner`, `task_id`) VALUES
(1, 'Machines and tools', 'Maintenance', 'Machine failure due to poor maintenance', 'Line stop, poor standard of productio, fire', 10, 'Machines not maintaine and checked regularly', 7, 'Ultimo, operator check list, shift manager sign off', 8, 560, 'Following the 5s program Tecan has a strategic vision to kick of a TPM program in mid 2017', 'Chris Coles', '1753'),
(2, 'Receiving new material', 'Measuring the standard of new material coming in to the factory', 'Failure to recognise material', 'Rejects - wasted resources', 7, 'No defined incoming material checks', 8, 'None', 8, 448, 'CAPA raised', 'John Gillie', '1754');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `newstext` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `newstext`) VALUES
(1, 'Zapada in Romania', 'zapada', 'Nu mai zboara nimic. Scholi inchise'),
(2, 'Ploaie in Anglia', 'ploaie', 'Ploaia a inundat pe Flo... Nu mai poate printa stickere.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fmea`
--
ALTER TABLE `fmea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fmea`
--
ALTER TABLE `fmea`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
