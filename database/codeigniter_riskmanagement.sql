-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 17, 2017 at 12:28 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `codeigniter_riskmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `fmea`
--

CREATE TABLE `fmea` (
  `id` mediumint(255) NOT NULL,
  `where_where` text NOT NULL,
  `what_what` text NOT NULL,
  `potential_failure_mode` text NOT NULL,
  `effect` text NOT NULL,
  `severity` tinyint(10) NOT NULL,
  `why` text NOT NULL,
  `occurrence` tinyint(10) NOT NULL,
  `current_control` text NOT NULL,
  `detection` tinyint(10) NOT NULL,
  `RPN` smallint(255) NOT NULL,
  `actions_recommended` text NOT NULL,
  `action_owner` varchar(32) NOT NULL,
  `task_id` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(32) NOT NULL,
  `date_mod` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `mod_by` varchar(32) NOT NULL,
  `obsolete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(2, 'Ploaie in Anglia', 'ploaie', 'Ploaia a inundat pe Flo... Nu mai poate printa stickere.'),
(3, 'cutremur in ford', 'cutremur-in-ford', 'Ovidiu isi da demisia. Toata lumea dispera.');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` tinyint(4) NOT NULL,
  `program` varchar(32) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program`, `description`) VALUES
(1, 'F330', 'Application for EMEA Market'),
(2, 'F356', 'Small car for Turkey'),
(3, 'AS432', 'Another Test Program'),
(4, 'TG32224', 'Test Program'),
(5, 'Daily2014', 'gaylord');

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
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fmea`
--
ALTER TABLE `fmea`
  MODIFY `id` mediumint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;