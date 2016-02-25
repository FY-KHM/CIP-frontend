-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2016 at 06:54 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cipproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
	  `id` int(5) NOT NULL AUTO_INCREMENT,
	  `name` varchar(30) NOT NULL,
	  `password` varchar(30) NOT NULL,
	  `checkin` tinyint(1) DEFAULT NULL,
	  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `password`, `checkin`, `created_at`) VALUES
(68, 'CIP001', '7f3b70', 0, '2016-02-24 16:28:00'),
(69, 'CIP002', '881adb', 0, '2016-02-24 16:28:00'),
(70, 'CIP003', '1f442e', 0, '2016-02-24 16:28:01'),
(71, 'CIP004', '87067e', 0, '2016-02-24 16:28:16'),
(72, 'CIP005', 'bbcb55', 0, '2016-02-24 16:28:26'),
(73, 'CIP006', 'ace97f', 0, '2016-02-24 16:28:26'),
(74, 'CIP007', 'd7b6d9', 0, '2016-02-24 16:29:10'),
(75, 'CIP008', 'dc135f', 0, '2016-02-24 16:29:10'),
(76, 'CIP009', '037a62', 0, '2016-02-24 16:29:23'),
(77, 'CIP0010', 'cdf9d0', 0, '2016-02-24 16:29:23'),
(78, 'CIP0011', '1cb4c7', 0, '2016-02-24 16:29:23');
