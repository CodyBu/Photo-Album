-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 27, 2021 at 11:37 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photoalbum`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `album_Id` int NOT NULL AUTO_INCREMENT,
  `user_Id` int NOT NULL,
  `album_Cover` varchar(50) NOT NULL,
  `album_Title` varchar(50) NOT NULL,
  `album_Notes` varchar(50) NOT NULL,
  PRIMARY KEY (`album_Id`),
  KEY `user_Id` (`user_Id`),
  KEY `user_Id_2` (`user_Id`),
  KEY `album_Id` (`album_Id`,`user_Id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE IF NOT EXISTS `pictures` (
  `picture_Id` int NOT NULL AUTO_INCREMENT,
  `album_Id` int NOT NULL,
  `picture_Image` varchar(50) NOT NULL,
  `picture_Title` varchar(50) NOT NULL,
  `picture_Note` varchar(50) NOT NULL,
  PRIMARY KEY (`picture_Id`),
  KEY `picture_Id` (`picture_Id`,`album_Id`),
  KEY `picture_Id_2` (`picture_Id`,`album_Id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_Id` int NOT NULL AUTO_INCREMENT,
  `user_Name` text NOT NULL,
  `user_Email` varchar(35) NOT NULL,
  `user_Password` varchar(35) NOT NULL,
  `user_Dob` text NOT NULL,
  `user_Dom` varchar(35) NOT NULL,
  `user_Picture` varchar(50) NOT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=MRG_MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
