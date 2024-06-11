-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 08:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mkwu`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `taluk` varchar(200) NOT NULL,
  `ward` int(200) NOT NULL,
  `panchayat` varchar(200) NOT NULL,
  `complaint` varchar(200) NOT NULL,
  `file_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`name`, `mobile`, `email`, `state`, `district`, `taluk`, `ward`, `panchayat`, `complaint`, `file_name`) VALUES
('qwe', 'fgh', 'hithere22000@gmail.com', 'fghn', 'cfvbv', 'g', 2, 'edrtg', '3wertryuj', 'IKSHANA11.jpeg'),
('', '', '', '', '', '', 0, '', '', ''),
('', '', '', '', '', '', 0, '', '', ''),
('', '', '', '', '', '', 0, '', '', ''),
('', '', '', '', '', '', 0, '', '', ''),
('', '123456789', '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `name` varchar(100) NOT NULL,
  `mobile` int(12) NOT NULL,
  `complaint` varchar(200) NOT NULL,
  `unique_code` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `taluk` varchar(200) NOT NULL,
  `panchayat` varchar(200) NOT NULL,
  `ward` int(10) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`name`, `mobile`, `complaint`, `unique_code`, `state`, `district`, `taluk`, `panchayat`, `ward`, `email`) VALUES
('parthip', 2147483647, '2etrr1', 'COMPLAINT_6647b2cf69171', '', '', '', '', 0, ''),
('parthip', 2147483647, '2etrr1', 'COMPLAINT_6647b2e7e368c', '', '', '', '', 0, ''),
('pa', 2147483647, 'estrdytf', '  6647b36ed2218', '', '', '', '', 0, ''),
('pa', 2147483647, 'estrdytf', '  6647b45d77344', '', '', '', '', 0, ''),
('parthip', 2147483647, 'swdfghj', '  6648e33f70731', 'kerala', 'kannur', 'chovva', 'ammo', 1, 'ikshana32@gmail.com'),
('parthip', 2147483647, '', '  6648e3b6ad7d6', 'kerala', 'kannur', 'cvbn', 'cvbn', 2, 'rjk@gmail.com'),
('parthip', 2147483647, '', '', 'kerala', 'kannur', 'cvbn', 'cvbn', 2, 'rjk@gmail.com'),
('anirudh', 123455, 'asdfghjkl;', '', 'kerala', 'kannur', 'chovva', 'ammo', 2, 'ikshana32@gmail.com'),
('', 0, '', '', '', '', '', '', 0, ''),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('parthip', 9852, '', '', 'state', 'kannur', '', 'hjik', 1, 'ikshana32@gmail.com'),
('', 0, '', '', '', '', '', '', 0, ''),
('fghjk', 94, '', '', 'state', 'kannur', '', 'ammo', 1, 'ikshana32@gmail.com'),
('fghjk', 94, '', '', 'state', 'kannur', '', 'ammo', 1, 'ikshana32@gmail.com'),
('fghjk', 94, '', '', 'state', 'kannur', '', 'ammo', 1, 'ikshana32@gmail.com'),
('dtxfgvbhj', 0, '', '', '', '', '', '', 0, ''),
('dtxfgvbhj', 0, '', '', '', '', '', '', 0, ''),
('dtxfgvbhj', 0, '', '', 'yayayaaa', '', '', '', 0, ''),
('', 0, '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `filesize` int(11) NOT NULL,
  `filetype` varchar(100) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `filesize`, `filetype`, `upload_date`) VALUES
(9, 'work1.PNG', 124507, 'image/png', '2024-05-17 17:28:56'),
(10, 'WhatsApp Image 2024-05-16 at 3.46.41 PM (1).jpeg', 35143, 'image/jpeg', '2024-05-17 17:32:24'),
(11, 'work1.PNG', 124507, 'image/png', '2024-05-17 17:36:35'),
(12, 'work1.PNG', 124507, 'image/png', '2024-05-17 17:37:15'),
(13, 'WhatsApp Image 2024-05-16 at 3.46.41 PM (1).jpeg', 35143, 'image/jpeg', '2024-05-17 17:42:14'),
(14, 'WhatsApp Image 2024-05-16 at 3.46.41 PM (1).jpeg', 35143, 'image/jpeg', '2024-05-17 17:42:22'),
(15, 'IKSHANA.PNG', 49294, 'image/png', '2024-05-17 17:45:34'),
(16, 'work1.PNG', 124507, 'image/png', '2024-05-17 17:48:22'),
(17, 'work1.PNG', 124507, 'image/png', '2024-05-17 17:50:36'),
(18, 'work1.PNG', 124507, 'image/png', '2024-05-17 17:53:59'),
(19, 'work1.PNG', 124507, 'image/png', '2024-05-17 17:54:57'),
(20, 'work1.PNG', 124507, 'image/png', '2024-05-17 17:56:02'),
(21, 'work1.PNG', 124507, 'image/png', '2024-05-17 17:57:57'),
(22, 'WhatsApp Image 2024-05-16 at 3.46.41 PM (1).jpeg', 35143, 'image/jpeg', '2024-05-17 17:58:17'),
(23, 'IKSHANA.PNG', 49294, 'image/png', '2024-05-17 18:43:07'),
(24, 'IKSHANA.PNG', 49294, 'image/png', '2024-05-17 18:43:27'),
(25, 'IKSHANA11.jpeg', 46846, 'image/jpeg', '2024-05-18 18:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `hii`
--

CREATE TABLE `hii` (
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loginn`
--

CREATE TABLE `loginn` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginn`
--

INSERT INTO `loginn` (`email`, `password`) VALUES
('kkk@gmail.com', 'kkk'),
('hi@gmail.com', 'hii'),
('o@gmail.com', 'o'),
('p@gmail.com', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `name` varchar(200) NOT NULL,
  `mobile` int(13) NOT NULL,
  `email` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `ward` int(13) NOT NULL,
  `panchayat` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `occupation` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`name`, `mobile`, `email`, `state`, `district`, `country`, `ward`, `panchayat`, `dob`, `occupation`) VALUES
('parthip', 9852, 'ikshana32@gmail.com', 'state', 'kannur', '', 1, 'hjik', '2002-09-30', 'webdeveloper'),
('parthip', 9852, 'ikshana32@gmail.com', 'state', 'kannur', '', 1, 'hjik', '2002-09-30', 'webdeveloper'),
('', 0, '', '', '', '', 0, '', '0000-00-00', ''),
('pa', 0, 'ikshana32@gmail.com', 'qwd', '', '', 0, '', '0000-00-00', ''),
('', 0, '', '', '', '', 0, '', '0000-00-00', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('w', 2345, 'ikshana32@gmail.com', 'kerala', '', 'fg', 0, '', '0020-02-20', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('dfgh', 0, 'xryjh@gmail.com', '', '', '', 0, '', '0000-00-00', ''),
('i luv uuuu', 0, '', '', '', '', 0, '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `volunt`
--

CREATE TABLE `volunt` (
  `name` varchar(200) NOT NULL,
  `mobile` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `panchayat` varchar(200) NOT NULL,
  `ward` int(10) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `be_member` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunt`
--

INSERT INTO `volunt` (`name`, `mobile`, `email`, `dob`, `country`, `state`, `district`, `panchayat`, `ward`, `occupation`, `be_member`) VALUES
('wertyu', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('wertyu', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('wertyu', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('wertyu', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('wertyu', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('', 0, '', '0000-00-00', '', '', '', '', 0, 'qwertyuio', 1),
('', 0, '', '0000-00-00', '', '', '', '', 0, 'qwertyuio', 1),
('', 0, '', '0000-00-00', '', '', '', '', 0, 'qwertyuio', 1),
('qwertyuio123456789', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('qwertyuio123456789', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('parthipppp', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('cvbnm,', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('ztfjhjkl', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('wsdefrgthyu', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('wsdefrgthyu', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('wsdefrgthyu', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('zertrg', 0, '', '0000-00-00', '', '', '', '', 0, '', 1),
('zertrgdfghjkloiuytrtyuioiuyt987654', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('zertrgdfghjkloiuytrtyuioiuyt987654', 0, '', '0000-00-00', '', '', '', '', 0, '', 0),
('hello member', 0, '', '0000-00-00', '', '', '', '', 0, '', 1),
('hello member', 0, '', '0000-00-00', '', '', '', '', 0, '', 1),
('hello volunteer', 0, '', '0000-00-00', '', '', '', '', 0, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
