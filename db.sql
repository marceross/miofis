-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 72.167.233.110
-- Generation Time: May 04, 2019 at 12:20 AM
-- Server version: 5.5.43
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `miofis`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `name` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `phone` int(12) DEFAULT NULL,
  `linkein` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `connect`
--

CREATE TABLE `connect` (
  `name` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `name` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `more` varchar(500) NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
