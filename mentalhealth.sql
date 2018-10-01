-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 07:33 AM
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
  `Admin_no` int(50) NOT NULL,
  `User_no` int(50) NOT NULL,
  `Position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `Doctor_no` int(50) NOT NULL,
  `User_no` int(50) NOT NULL,
  `Specialization` varchar(30) NOT NULL,
  `Clinic_name` varchar(20) NOT NULL,
  `Clinic_location` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event registration`
--

CREATE TABLE `event registration` (
  `Event_no` int(50) NOT NULL,
  `User_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Event_no` int(50) NOT NULL,
  `Event_name` int(30) NOT NULL,
  `Description` int(200) NOT NULL,
  `Type` int(30) NOT NULL,
  `Datetime` int(40) NOT NULL,
  `Hosts` varchar(50) NOT NULL,
  `Admin_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `Media_no` int(50) NOT NULL,
  `Media_name` varchar(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Link` varchar(100) NOT NULL,
  `Admin_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Patient_no` int(50) NOT NULL,
  `User_no` int(50) NOT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Conditions` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`Patient_no`, `User_no`, `Country`, `City`, `Conditions`) VALUES
(1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `professional_help`
--

CREATE TABLE `professional_help` (
  `Application_no` int(50) NOT NULL,
  `Doctor_no` int(50) DEFAULT NULL,
  `Patient_no` int(50) NOT NULL,
  `Date_of_approval` varchar(30) DEFAULT NULL,
  `Condition_description` varchar(200) NOT NULL,
  `Patient_progress` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_no` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `User_type` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Full_name` varchar(50) DEFAULT NULL,
  `Email_address` varchar(30) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Phone_number` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_no`, `Username`, `User_type`, `Password`, `Full_name`, `Email_address`, `Description`, `Phone_number`) VALUES
(1, 'Mathenge', 'patients', 'math1234', NULL, '', NULL, NULL),
(2, 'John', 'doctors', 'john1234', NULL, '', NULL, NULL),
(5, 'Waweru', 'patients', 'math1234', NULL, 'matheshman@gmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_no`),
  ADD KEY `User No` (`User_no`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Doctor_no`),
  ADD KEY `User No` (`User_no`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Event_no`),
  ADD KEY `Admin No` (`Admin_no`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`Media_no`),
  ADD KEY `Admin No` (`Admin_no`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Patient_no`),
  ADD KEY `User No` (`User_no`);

--
-- Indexes for table `professional_help`
--
ALTER TABLE `professional_help`
  ADD PRIMARY KEY (`Application_no`),
  ADD KEY `Doctor No` (`Doctor_no`),
  ADD KEY `Patient No` (`Patient_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_no` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `Doctor_no` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Event_no` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `Media_no` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Patient_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professional_help`
--
ALTER TABLE `professional_help`
  MODIFY `Application_no` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`User_no`) REFERENCES `users` (`User_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`User_no`) REFERENCES `users` (`User_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`Admin_no`) REFERENCES `admins` (`Admin_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`Admin_no`) REFERENCES `admins` (`Admin_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`User_no`) REFERENCES `users` (`User_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professional_help`
--
ALTER TABLE `professional_help`
  ADD CONSTRAINT `professional_help_ibfk_1` FOREIGN KEY (`Doctor_no`) REFERENCES `doctors` (`Doctor_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `professional_help_ibfk_2` FOREIGN KEY (`Patient_no`) REFERENCES `patients` (`Patient_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
