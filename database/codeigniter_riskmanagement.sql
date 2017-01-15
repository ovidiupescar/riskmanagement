-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 15, 2017 at 08:42 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fmea`
--
ALTER TABLE `fmea`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fmea`
--
ALTER TABLE `fmea`
  MODIFY `id` mediumint(255) NOT NULL AUTO_INCREMENT;