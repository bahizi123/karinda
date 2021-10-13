-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 12:48 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websecurity`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(150) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Firstname`, `Lastname`, `Email`, `username`, `password`) VALUES
('0', '0', '0', 'baba', 'baba123'),
('0', '0', '0', 'baba', 'baba123'),
('0', '0', '0', 'admin', '123'),
('Karinda', 'uhuru', 'erickarinda5000@gmail.com', 'admin', '123'),
('', '', '', '', '123'),
('', '', '', 'admin', '123'),
('qui', 'ere', 'erickarinda5000@gmail.com', 'baba', '8cb2237d06'),
('qui', 'ere', 'erickarinda5000@gmail.com', 'baba', '8cb2237d06'),
('qui', 'ere', 'erickarinda5000@gmail.com', 'baba', '8cb2237d06'),
('qui', 'ere', 'erickarinda5000@gmail.com', 'baba', '8cb2237d06'),
('', '', '', '', 'da39a3ee5e'),
('', '', '', '', 'da39a3ee5e'),
('', '', '', '', 'da39a3ee5e'),
('kanani', 'nzungu', 'nzungu@gmail.com', 'nzungu', '0275376a9c'),
('kanani', 'nzungu', 'nzungu@gmail.com', 'nzungu', '0275376a9c'),
('kanani', 'nzungu', 'nzungu@gmail.com', 'nzungu', '0275376a9c'),
('kanani', 'nzungu', 'nzungu@gmail.com', 'nzungu', '0275376a9c'),
('Karinda', 'uhuru', 'erickarinda5000@gmail.com', 'zulu', '8cb2237d06'),
('Karinda', 'bahizi', 'nzungu@gmail.com', 'bahizi', 'b78b647728'),
('', '', '', '', 'da39a3ee5e'),
('murokozi', 'jack', 'jack@gmail.com', 'jack', '40bd001563'),
('yes', 'no', 'jack@gmail.com', 'yes', '8cb2237d06'),
('byiringiro', 'bertin', 'nzungu@gmail.com', 'gisa', '40bd001563'),
('kanani', 'fulgence', 'nzungu@gmail.com', 'k8', '40bd001563'),
('pascal', 'niyonsaba', 'pascal@gmail.com', 'lisu', '40bd001563'),
('Karinda', 'Bahizi', 'erickarinda5000@gmail.com', 'buba', '40bd001563'),
('', '', '', 'buba', '40bd001563'),
('knnl', 'knun', 'erickarinda5000@gmail.com', 'w', '356a192b79'),
('Karinda', 'uhuru', 'erickarinda5000@gmail.com', 'k', '356a192b7913b04c54574d18c28d46e6395428ab'),
('kabanda', 'deri', 'nzungu@gmail.com', 'kaba', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('ngiri', 'ff', 'nzungu@gmail.com', 'g', '356a192b7913b04c54574d18c28d46e6395428ab'),
('Karinda', 'knun', 'nzungu@gmail.com', 'k', '356a192b7913b04c54574d18c28d46e6395428ab'),
('Karinda', 'uhuru', 'erickarinda5000@gmail.com', 'w', 'Erickarinda5000@gmail.com'),
('Karinda', 'nzungu', 'nzungu@gmail.com', 'va', 'Erickarinda5000@gmail.com'),
('Karinda', 'nzungu', 'nzungu@gmail.com', 'va', 'Erickarinda5000@gmail.com'),
('Karinda', 'knun', 'erickarinda5000@gmail.com', 'h', 'Nzungu123@gmail.com'),
('dfg', 'rtghj', 'erickarinda5000@gmail.com', 'h', 'c12738f8f4e261ec6ce4603e97b5f7e92a96a904'),
('sasa', 'se', 'jack@gmail.com', 'ra', '7188165dc672164b240b8252a16b64bfe289a488'),
('Karinda', 'uhuru', 'erickarinda5000@gmail.com', 'ra', '7188165dc672164b240b8252a16b64bfe289a488'),
('fghjk', 'dfghn', 'nzungu@gmail.com', 'no', '7188165dc672164b240b8252a16b64bfe289a488'),
('\';lkj', ';l,kmjnb', 'nzungu@gmail.com', 'yu', '7188165dc672164b240b8252a16b64bfe289a488'),
('kambali', 'serge', 'nzungu@gmail.com', 'nasi', '2cf88157eae8f57d46b11a157c78663d6fec91ea');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `fname`, `tel`) VALUES
(1, 'kabaka', '782343980'),
(2, 'baba', '781343980');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
