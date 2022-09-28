-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 09:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `boygirl`
--

CREATE TABLE `boygirl` (
  `id` int(11) NOT NULL,
  `boy_h2` varchar(100) NOT NULL,
  `boy_img` varchar(100) NOT NULL,
  `boy` varchar(45) NOT NULL,
  `girl_h2` varchar(100) NOT NULL,
  `girl_img` varchar(100) NOT NULL,
  `girl` varchar(45) NOT NULL,
  `ourstory` varchar(3000) NOT NULL,
  `where_where` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boygirl`
--

INSERT INTO `boygirl` (`id`, `boy_h2`, `boy_img`, `boy`, `girl_h2`, `girl_img`, `girl`, `ourstory`, `where_where`) VALUES
(1, 'Rahul', 'upload/323410927.jpg', 'Rahul Raj', 'Rashmika ', 'upload/105738948.jpg', 'Rashmika Mandanam', 'Love & Life', 'lanning a destination wedding in an exotic location is indeed dreamy- but it requires a little more planning than simply booking airline tickets and hotels! Whether you are organizing a destination wedding, or attending one, we are here to help you with smart services and little hacks that will promise a smooth and fun experience!');

-- --------------------------------------------------------

--
-- Table structure for table `boy_img`
--

CREATE TABLE `boy_img` (
  `id` int(50) NOT NULL,
  `image1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boy_img`
--

INSERT INTO `boy_img` (`id`, `image1`) VALUES
(1, 'upload/2097826339.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bridesmaid`
--

CREATE TABLE `bridesmaid` (
  `id` int(11) NOT NULL,
  `bridesmaid` varchar(3000) NOT NULL,
  `maidofhonor` varchar(100) NOT NULL,
  `maidofhonor_img` varchar(50) DEFAULT NULL,
  `bestfriend` varchar(100) NOT NULL,
  `bestfriend_img` varchar(50) DEFAULT NULL,
  `roommate` varchar(100) NOT NULL,
  `roommate_img` varchar(50) DEFAULT NULL,
  `collegefriend` varchar(100) NOT NULL,
  `collegefriend_img` varchar(50) DEFAULT NULL,
  `sister` varchar(100) NOT NULL,
  `sister_img` varchar(50) DEFAULT NULL,
  `futuresister` varchar(100) NOT NULL,
  `futuresister_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bridesmaid`
--

INSERT INTO `bridesmaid` (`id`, `bridesmaid`, `maidofhonor`, `maidofhonor_img`, `bestfriend`, `bestfriend_img`, `roommate`, `roommate_img`, `collegefriend`, `collegefriend_img`, `sister`, `sister_img`, `futuresister`, `futuresister_img`) VALUES
(1, 'Our Friends Name', 'Prachi kumari', 'upload/1584881677.jpg', 'Riya', 'upload/25232069.jpg', 'Soni', 'upload/1146397541.jpg', 'Juhi', 'upload/764471097.jpg', 'Hina', 'upload/1677610600.jpg', 'Naina', 'upload/1138017169.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `number` varchar(14) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `number`, `message`) VALUES
('Vipul', 'vipul.fgh.76@gmail.com', 'Wedding Day', 'hello vipul'),
('satyam', 'mdjafer.fgh.76@gmail.com', 'Wedding Day', 'Hello Satyam How r U'),
('satyam', 'mdjafer.fgh.76@gmail.com', 'Wedding Day', 'Hello Satyam How r U'),
('Jafar', 'awesomedude5601@gmail.com', 'Wedding Day', 'Hello Jafar'),
('Jafar', 'awesomedude5601@gmail.com', 'Wedding Day', 'kjvuyvhjvj');

-- --------------------------------------------------------

--
-- Table structure for table `girl_img`
--

CREATE TABLE `girl_img` (
  `id` int(50) NOT NULL,
  `image1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `girl_img`
--

INSERT INTO `girl_img` (`id`, `image1`) VALUES
(1, 'upload/638516076.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `groomsmen`
--

CREATE TABLE `groomsmen` (
  `id` int(11) NOT NULL,
  `groomsmen` varchar(3000) NOT NULL,
  `bestman` varchar(50) NOT NULL,
  `bestman_img` varchar(50) DEFAULT NULL,
  `bestfriend` varchar(50) NOT NULL,
  `bestfriend_img` varchar(50) DEFAULT NULL,
  `roommate` varchar(50) NOT NULL,
  `roommate_img` varchar(50) DEFAULT NULL,
  `collegefriend` varchar(50) NOT NULL,
  `collegefriend_img` varchar(50) DEFAULT NULL,
  `brother` varchar(50) NOT NULL,
  `brother_img` varchar(50) DEFAULT NULL,
  `futurebrother` varchar(50) NOT NULL,
  `futurebrother_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groomsmen`
--

INSERT INTO `groomsmen` (`id`, `groomsmen`, `bestman`, `bestman_img`, `bestfriend`, `bestfriend_img`, `roommate`, `roommate_img`, `collegefriend`, `collegefriend_img`, `brother`, `brother_img`, `futurebrother`, `futurebrother_img`) VALUES
(1, 'Our Friends Name', 'Sunil', 'upload/624421088.jpg', 'Rakesh', 'upload/1102795255.jpg', 'Satyam', 'upload/1509467889.jpg', 'Abhikhek', 'upload/507623651.jpg', 'Asif', 'upload/282209512.jpg', 'sachin', 'upload/930739661.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boygirl`
--
ALTER TABLE `boygirl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boy_img`
--
ALTER TABLE `boy_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bridesmaid`
--
ALTER TABLE `bridesmaid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `girl_img`
--
ALTER TABLE `girl_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groomsmen`
--
ALTER TABLE `groomsmen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boygirl`
--
ALTER TABLE `boygirl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boy_img`
--
ALTER TABLE `boy_img`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bridesmaid`
--
ALTER TABLE `bridesmaid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `girl_img`
--
ALTER TABLE `girl_img`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groomsmen`
--
ALTER TABLE `groomsmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
