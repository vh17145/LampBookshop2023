-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2023 at 12:43 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lampbookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com'),
(2, 'vhollis', '$2y$10$es7voWi1v0xa5Y7WkXSuEOTw6A4faixHZycOJct7kwByrukKcnKC6', 'violetteh65@gmail.com'),
(3, 'vh17145', '$2y$10$4FSX4mxOwAhXl3HOFnPSYe.KHKsIQvmbZMwcClkTdmFmYdj4G4X5.', 'vh17145@thameshigh.school.nz'),
(4, 'ftitftk', '$2y$10$0hBPsqU9IoxyBBJRxp.rmOlE.EuX4BqSv1HoBKx8Xut0UJpc0jQ.W', 'violette@gmail.com'),
(5, 'vh', '$2y$10$//sAR43YGaptIRRtTKYz9edZ.bhKzrjMc6t7EtUiX9DNAH1m2F73W', 'vh@gmail.com'),
(6, 'vivi', '$2y$10$vEx/DGwva/lRmoI9Y82eQO2kLAriYoaPJxLF.1jTRZpTnHUZr2aAC', 'vivi@gmail.com'),
(7, 'luke', '$2y$10$XemFpRUaODn.rmuGaf3HouaFHq06CkbumS6nUhVSAiKL.pG4TlDE.', 'luke@gmail'),
(8, 'test1', '$2y$10$8Of6Ov9104gKiHEHKq7bUu79MlRoorldNXNLYisZcLf43ZW6Ge0JG', 'test1@gmail.com'),
(9, 'vern', '$2y$10$qL6RjWly1uWHCJrpnl4OleKW3v6DG/vZb8c5j/rEapmZ.7hqUtgFa', 'vern@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `comment`) VALUES
(1, 'Violette', 'Hollis', 'vh17145@thameshigh.school.nz', 'i like lamp books'),
(6, 'vi', 'hollis', 'vi@mail.com', 'this is my comment '),
(7, 'VR', 'Hollis', 'violetteh65@gmail.com', 'This is Another test'),
(8, 'violette', 'test', 'john@mail.com', ''),
(9, 'VR', 'hollis', 'john@mail.com', 'another test');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title1` varchar(100) NOT NULL,
  `text1` text NOT NULL,
  `image1` varchar(50) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title1`, `text1`, `image1`, `title2`, `text2`, `text3`) VALUES
(1, 'Our team', 'Our volunteers are dedicated to the amazing work that is being done through lamp books. We pride ourselves on being an open establishment for anyone who wants to come and chat with a friendly face or get help finding a book they\'re looking for. While currently Lamp Books has just a small team of volunteers, we would love to change that! If you are interested in volunteering at Lamp books come in and hve a chat we are sure there\'s a place for you here.', 'lampExterior.png', 'The Lamp Building', 'The Lamp is a multi-faceted complex with Lamp books being just one part of the complex. Upstairs there is a beautiful bed and breakfast which overlooks the town. Next door is the Bitte cafe which is connected to lamp books through a door so feel free to grab a coffee and come and sit down with it iin Lamp books. and finally behind lamp books is the Lamp caravann stop. feel free to book online or come instore to Lamp books to book a spot.', ' The Lamp is a historic building owed by Kylie Gunn. Kylie is a key part of helping Lamp books stay afloat, she took the business on when it went under and moved the business into the Lamp complex which was truly a blessing.             Lisa is the manager of the bookshop and currently being down on staff, Lisa runs the sshow at Lamp books majority of the time. She has extensive knowledge of christian books and the bible and is always happy to help. ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `info` text NOT NULL,
  `price` double NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `info`, `price`, `category`, `image`) VALUES
(1, 'Seeing Beautiful Again', 'Seeing Beautiful by Lysa Terkeurst', 30, 'book', 'seeingBeautiful.jpg'),
(2, 'Adventure bible', 'Adventure bible<br>NKJV<br>', 50, 'book', 'jesusCalling.jpg'),
(3, 'Coffee Mug', 'Coffee Mug ', 20, 'gifts', 'mug1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
