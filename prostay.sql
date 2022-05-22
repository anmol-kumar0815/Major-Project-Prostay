-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 08:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prostay`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcard`
--

CREATE TABLE `addcard` (
  `ID` int(11) NOT NULL,
  `IMAGE` varchar(50) NOT NULL,
  `RATING` double NOT NULL,
  `PGNAME` varchar(100) NOT NULL,
  `ADDRESS1` varchar(500) NOT NULL,
  `ADDRESS2` varchar(100) NOT NULL,
  `ADDRESS3` varchar(100) NOT NULL,
  `PINCODE` varchar(50) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `FOOD` varchar(20) NOT NULL,
  `CATEGORY` varchar(10) NOT NULL,
  `LOCATION` varchar(100) NOT NULL,
  `CITY` varchar(100) NOT NULL,
  `MONEY` double NOT NULL,
  `MANAGER` double NOT NULL,
  `FOODREVIEW` double NOT NULL,
  `ENVIRONMENT` double NOT NULL,
  `HOUSE` double NOT NULL,
  `HOSPITALITY` double NOT NULL,
  `LOCATIONREVIEW` double NOT NULL,
  `HYGINE` double NOT NULL,
  `PRICING` double NOT NULL,
  `SECURITY` double NOT NULL,
  `MANAGERNAME` varchar(50) NOT NULL,
  `MANAGERCONTACT` varchar(15) NOT NULL,
  `LINK` varchar(500) NOT NULL,
  `MAP` varchar(5000) NOT NULL,
  `REVIEWCOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcard`
--

INSERT INTO `addcard` (`ID`, `IMAGE`, `RATING`, `PGNAME`, `ADDRESS1`, `ADDRESS2`, `ADDRESS3`, `PINCODE`, `PRICE`, `FOOD`, `CATEGORY`, `LOCATION`, `CITY`, `MONEY`, `MANAGER`, `FOODREVIEW`, `ENVIRONMENT`, `HOUSE`, `HOSPITALITY`, `LOCATIONREVIEW`, `HYGINE`, `PRICING`, `SECURITY`, `MANAGERNAME`, `MANAGERCONTACT`, `LINK`, `MAP`, `REVIEWCOUNT`) VALUES
(35, 'pg_boys_delhi.jpg', 6, 'Shivam PG', 'D-50', 'Near Metro station', 'South Extension', '110003', 5000, 'With Food', 'boys', 'South Extension', 'New Delhi', 6.5, 5.5, 5, 7.5, 6, 3, 3, 7.5, 8.5, 7.5, 'Anmol Kumar', '9643538308', 'https://goo.gl/maps/N3X75bM1Kp3QpmHa6', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14015.58524662269!2d77.21420223196571!3d28.572876169060034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce25c2bda02bd%3A0x88805483a1dca8bb!2sSouth%20Extension%2C%20South%20Extension%20I%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1648524893846!5m2!1sen!2sin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `CONTACT` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `CONTACT`) VALUES
(9, 'Anmol kumar', 'anmolshrivastav.08@gmail.com', 'anmol@123', '9643538308'),
(10, 'Rohit Vishwakarma', 'rohit06102000@gmail.com', 'rohit@123', '7011362155'),
(11, 'Umang aggarwal', 'umangaggrwal631@gmail.com', 'umang@123', '9899126409');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `ID` int(11) NOT NULL,
  `IMAGE` varchar(100) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `AUTHOR` varchar(500) NOT NULL,
  `DESCRIPTION` mediumtext NOT NULL,
  `DATE` date NOT NULL,
  `READCOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`ID`, `IMAGE`, `TITLE`, `AUTHOR`, `DESCRIPTION`, `DATE`, `READCOUNT`) VALUES
(5, 'lorem.png', 'Its a Dummy Dlog', 'Anmol Kumar', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable', '2020-12-27', 22),
(9, 'first-blog-post.jpg', 'This is my first blog', 'Umang', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2020-12-29', 31);

-- --------------------------------------------------------

--
-- Table structure for table `carousel_35`
--

CREATE TABLE `carousel_35` (
  `ID` int(10) UNSIGNED NOT NULL,
  `IMAGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `NAME`, `EMAIL`, `PHONE`, `MESSAGE`) VALUES
(1, 'Anmol kumar', 'anmolshrivastav.08@gmail.com', '9643538308', 'This is my message');

-- --------------------------------------------------------

--
-- Table structure for table `facility_35`
--

CREATE TABLE `facility_35` (
  `ID` int(10) UNSIGNED NOT NULL,
  `FACILITY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_35`
--

INSERT INTO `facility_35` (`ID`, `FACILITY`) VALUES
(1, 'Fan'),
(2, 'Lights'),
(3, 'Fridge'),
(4, 'Modular Kitchen'),
(5, 'CCTV'),
(6, 'Washing Machine'),
(7, 'Balcony'),
(8, 'AC'),
(9, 'Parking'),
(10, 'Attach Bathroom'),
(11, 'WIFI');

-- --------------------------------------------------------

--
-- Table structure for table `facility_not_35`
--

CREATE TABLE `facility_not_35` (
  `ID` int(10) UNSIGNED NOT NULL,
  `FACILITY` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility_not_35`
--

INSERT INTO `facility_not_35` (`ID`, `FACILITY`) VALUES
(1, 'Electricity Bill'),
(2, 'Guest Room for Parents');

-- --------------------------------------------------------

--
-- Table structure for table `normaluser`
--

CREATE TABLE `normaluser` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `CONTACT` varchar(15) NOT NULL,
  `DATE` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normaluser`
--

INSERT INTO `normaluser` (`ID`, `NAME`, `EMAIL`, `PASSWORD`, `CONTACT`, `DATE`) VALUES
(4, 'Anmol kumar', 'anmolshrivastav.08@gmail.com', 'anmol@123', '9643538308', '2020-12-24 15:49:42.629771'),
(5, 'vipin', 'vipin123@gmail.com', 'vipin@123', '8882262531', '2020-12-24 15:53:16.722543');

-- --------------------------------------------------------

--
-- Table structure for table `occupacy_35`
--

CREATE TABLE `occupacy_35` (
  `ID` int(10) UNSIGNED NOT NULL,
  `OCCUPACY` varchar(50) NOT NULL,
  `PRICE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `occupacy_35`
--

INSERT INTO `occupacy_35` (`ID`, `OCCUPACY`, `PRICE`) VALUES
(1, 'Single', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `pointuser_35`
--

CREATE TABLE `pointuser_35` (
  `ID` int(10) UNSIGNED NOT NULL,
  `POINTUSER` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pointuser_35`
--

INSERT INTO `pointuser_35` (`ID`, `POINTUSER`) VALUES
(1, 'Anmol kumar');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `PROPERTYNAME` varchar(500) NOT NULL,
  `PROPERTYCITY` varchar(100) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `LINK` varchar(1000) NOT NULL,
  `DATE` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`ID`, `NAME`, `EMAIL`, `PROPERTYNAME`, `PROPERTYCITY`, `PHONE`, `LINK`, `DATE`) VALUES
(2, 'Anmol kumar', 'anmolshrivastav.08@gmail.com', 'cbhschb bdjb hdb', 'NEW DELHI', '9643538308', 'Not Given', '2020-12-30 07:49:01.906609');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_35`
--

CREATE TABLE `reviews_35` (
  `ID` int(10) UNSIGNED NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `REVIEW` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews_35`
--

INSERT INTO `reviews_35` (`ID`, `USERNAME`, `REVIEW`) VALUES
(1, 'Anmol kumar', 'hello this is nice place');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcard`
--
ALTER TABLE `addcard`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `carousel_35`
--
ALTER TABLE `carousel_35`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `facility_35`
--
ALTER TABLE `facility_35`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `facility_not_35`
--
ALTER TABLE `facility_not_35`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `normaluser`
--
ALTER TABLE `normaluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `occupacy_35`
--
ALTER TABLE `occupacy_35`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pointuser_35`
--
ALTER TABLE `pointuser_35`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews_35`
--
ALTER TABLE `reviews_35`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcard`
--
ALTER TABLE `addcard`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carousel_35`
--
ALTER TABLE `carousel_35`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facility_35`
--
ALTER TABLE `facility_35`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `facility_not_35`
--
ALTER TABLE `facility_not_35`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `normaluser`
--
ALTER TABLE `normaluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `occupacy_35`
--
ALTER TABLE `occupacy_35`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pointuser_35`
--
ALTER TABLE `pointuser_35`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews_35`
--
ALTER TABLE `reviews_35`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
