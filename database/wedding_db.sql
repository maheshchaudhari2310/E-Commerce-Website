-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 05:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(20) DEFAULT NULL,
  `MobNo` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `MobNo`, `Email`, `Password`) VALUES
('Mahesh', '9405961281', 'mahesh@gmail.com', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` varchar(15) DEFAULT NULL,
  `Brand` varchar(20) DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Price` varchar(5) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Quantity` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `Brand`, `Description`, `Img`, `Price`, `Category`, `Gender`, `Quantity`) VALUES
('9405961281', 'Nike', 'Haldi Wear', 'NikeMensShort.jpg', '7000', 'Mehendi Outfit', 'Male', '1'),
('9405961281', 'Puma', 'Mens Wedding Wear', 'PumaMensWeddingWear.jpg', '5000', 'Wedding Outfit', 'Male', '1');

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE `productinfo` (
  `Brand` varchar(20) DEFAULT NULL,
  `Discription` varchar(100) DEFAULT NULL,
  `Img` varchar(100) DEFAULT NULL,
  `Price` varchar(5) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`Brand`, `Discription`, `Img`, `Price`, `Category`, `Gender`) VALUES
('KSUT', 'Green & Cream Coloured Solid Unstiched Lehenga', 'KSUTGreen.jpg', '1799', 'Haldi Outfit', 'Women'),
('Redprint', 'Fashion OFF White & Peach-Coloured', 'RedprintFashionOFFWhite.jpg', '2500', 'Haldi Outfit', 'Women'),
('Anouk Maroon', 'Gold Toned Ready to wear Lehenga', 'AnoukMaroonGoldToned.jpg', '2065', 'Haldi Outfit', 'Women'),
('LOOKNBOOK', 'Art Pink and Peach coloured  Printed', 'LOOKNBOOKArtPink.jpg', '2520', 'Haldi Outfit', 'Women'),
('Amrutam Fab', 'Turquoise Blue & Pink Embroidered', 'AmrutamFabTurquoiseBlue.jpg', '3569', 'Haldi Outfit', 'Women'),
('Nyka', 'Men Wedding Outfit', 'NykaMenWeddingOutfit.jpg', '5549', 'Men Wedding', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(30) DEFAULT NULL,
  `MobNo` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `MobNo`, `Email`, `Password`) VALUES
('Mahesh', '9405961281', 'mahesh@gmail.com', '1234'),
('Kunal Patil', '9689393384', 'kuanl@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
