-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 11:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentalhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admin No` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Full Name` varchar(40) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Phone Number` varchar(10) NOT NULL,
  `Home address` varchar(30) NOT NULL,
  `Email address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `Doctor No` varchar(50) NOT NULL,
  `Doctor Name` varchar(30) NOT NULL,
  `Specialization` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Clinic Name` varchar(20) NOT NULL,
  `Clinic Location` varchar(40) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Email address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Event No` varchar(50) NOT NULL,
  `Event Name` int(30) NOT NULL,
  `Description` int(200) NOT NULL,
  `Type` int(30) NOT NULL,
  `Datetime` int(40) NOT NULL,
  `Hosts` varchar(50) NOT NULL,
  `Admin No` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `Media No` varchar(50) NOT NULL,
  `Media Name` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Link` varchar(100) NOT NULL,
  `Admin No` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Patient No` varchar(50) NOT NULL,
  `Full Name` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone Number` varchar(10) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Email address` varchar(30) NOT NULL,
  `Conditions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professional_help`
--

CREATE TABLE `professional_help` (
  `Doctor No` varchar(50) NOT NULL,
  `Patient No` varchar(50) NOT NULL,
  `Date of Approval` varchar(30) NOT NULL,
  `Condition Description` varchar(200) NOT NULL,
  `Patient Progress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin No`),
  ADD UNIQUE KEY `Admin No` (`Admin No`,`Username`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Doctor No`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Event No`),
  ADD KEY `Admin No` (`Admin No`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`Media No`),
  ADD KEY `Admin No` (`Admin No`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Patient No`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `professional_help`
--
ALTER TABLE `professional_help`
  ADD KEY `Doctor No` (`Doctor No`),
  ADD KEY `Patient No` (`Patient No`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`Admin No`) REFERENCES `admins` (`Admin No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`Admin No`) REFERENCES `admins` (`Admin No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professional_help`
--
ALTER TABLE `professional_help`
  ADD CONSTRAINT `professional_help_ibfk_1` FOREIGN KEY (`Doctor No`) REFERENCES `doctors` (`Doctor No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `professional_help_ibfk_2` FOREIGN KEY (`Patient No`) REFERENCES `patients` (`Patient No`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
