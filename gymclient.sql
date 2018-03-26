-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 07:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the fitness club`
--

-- --------------------------------------------------------

--
-- Table structure for table `gymclient`
--

CREATE TABLE `gymclient` (
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Gender` bit(1) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Telephone` int(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `PostalCode` int(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gymclient`
--

INSERT INTO `gymclient` (`Name`, `Surname`, `Gender`, `DateofBirth`, `Telephone`, `Address`, `PostalCode`, `City`, `Country`, `EmailAddress`, `Username`, `Password`) VALUES
('Marianna', 'Hatzidemetriou', b'0', '1995-12-04', 12345, 'Leoforos Larnakos', 1234, 'Nicosia', 'Cyprus', 'mchatz05@cs.ucy.ac.cy', 'mchatz05', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gymclient`
--
ALTER TABLE `gymclient`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
