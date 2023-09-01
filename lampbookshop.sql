-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2023 at 01:10 AM
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
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `fname`, `lname`) VALUES
(2, 'vhollis', '$2y$10$es7voWi1v0xa5Y7WkXSuEOTw6A4faixHZycOJct7kwByrukKcnKC6', 'violetteh65@gmail.com', '', ''),
(3, 'vh17145', '$2y$10$4FSX4mxOwAhXl3HOFnPSYe.KHKsIQvmbZMwcClkTdmFmYdj4G4X5.', 'vh17145@thameshigh.school.nz', '', ''),
(9, 'vern', '$2y$10$qL6RjWly1uWHCJrpnl4OleKW3v6DG/vZb8c5j/rEapmZ.7hqUtgFa', 'vern@mail.com', '', ''),
(10, 'vh123', '$2y$10$Fet3gcLaGDh6kUdl9e6.OegUu6GZqOL6UrqgSAAW5GY5RcZcsXiPq', 'violetteh65@gmail.com', '', ''),
(11, 'admin', '$2y$10$JUZxBWEi3c8aWYxn8/CpX.2t9fX4L2QByLWEdZydVERpOX8MiRDcC', 'vh17145@thameshigh.school.nz', '', ''),
(13, 'Hollis', '$2y$10$cCNFBnxniIEms4DTjN/na.RzgUnSOqyLS3voDKtiT3E3Bp14j266a', 'vivi12@gmail.com', 'Vi', 'Hollis');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `email`, `comment`) VALUES
(1, 'Violette', 'Hollis', 'vh17145@thameshigh.school.nz', 'i like lamp books'),
(10, '', '', '', ''),
(6, 'violette', 'hollis', 'vi@mail.com', 'this is my comment '),
(7, 'VR', 'Hollis', 'violetteh65@gmail.com', 'Test 2'),
(8, 'violette', 'test', 'john@mail.com', ''),
(9, 'VRH', 'hollis', 'john@mail.com', 'another test..'),
(11, '', '', '', ''),
(12, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `client_id` int NOT NULL,
  `product_id` int NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `client_id`, `product_id`, `amount`, `date`) VALUES
(46, 3, 6, 60, '2023-09-01'),
(45, 3, 5, 30, '2023-09-01'),
(44, 3, 1, 30, '2023-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page_name` varchar(50) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `text1` text NOT NULL,
  `image1` varchar(50) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `title1`, `text1`, `image1`, `title2`, `text2`, `text3`) VALUES
(1, 'About Lamp Bookshop', 'Our team', 'Our volunteers are dedicated to the amazing work that is being done through lamp books. We pride ourselves on being an open establishment for anyone who wants to come and chat with a friendly face or get help finding a book they\'re looking for. While currently Lamp Books has just a small team of volunteers, we would love to change that! If you are interested in volunteering at Lamp books come in and hve a chat we are sure there\'s a place for you here.', 'lampExterior.png', 'The Lamp Building', 'The Lamp is a multi-faceted complex with Lamp books being just one part of the complex. Upstairs there is a beautiful bed and breakfast which overlooks the town. Next door is the Bitte cafe which is connected to lamp books through a door so feel free to grab a coffee and come and sit down with it iin Lamp books. and finally behind lamp books is the Lamp caravann stop. feel free to book online or come instore to Lamp books to book a spot.', ' The Lamp is a historic building owed by Kylie Gunn. Kylie is a key part of helping Lamp books stay afloat, she took the business on when it went under and moved the business into the Lamp complex which was truly a blessing.             Lisa is the manager of the bookshop and currently being down on staff, Lisa runs the sshow at Lamp books majority of the time. She has extensive knowledge of christian books and the bible and is always happy to help. '),
(2, 'Contact', 'Lamp contact details', ' Are you a regular customer? Fillout here to be added to the regulars list and be informed on whats going on at The Lamp.', '', 'Contact Form', 'Contact Lamp Bookshop through our email address:<br>         Our phone number: 027 222 8228<br>         Or come in store at 595 MacKay Street, Thames 3500', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `info`, `price`, `category`, `image`) VALUES
(1, 'Seeing Beautiful Again', 'Seeing Beautiful by Lysa Terkeurst', 30, 'book', 'seeingBeautiful.jpg'),
(2, 'Adventure bible', 'Adventure bible<br>NKJV<br>', 50, 'book', 'jesusCalling.jpg'),
(4, 'Narnia by C.S Lewis', 'Narnia by C.S Lewis\r\n      <br>', 30, 'book', 'narnia2.jpg'),
(5, 'Jesus Always<br>', 'Jesus Always\r\n      by Sarah young\r\n            <br>', 30, 'book', 'jesusCalling.jpg'),
(6, 'Journaling bible', 'Niv Beautiful Word Colouring Bible', 60, 'book', 'journalbible.jpg'),
(7, 'Strong<br>', 'Strong by Lisa Bevere\r\n              <br>', 30, 'book', 'strong.jpg'),
(19, 'Charm bracelet', 'Sterling silver Charm bracelet', 20, 'jewelry', 'bracelet2.jpg'),
(14, 'Fiercly Loved<br>', 'Fiercly Loved\n<br>', 50, 'book', 'fierclyloved.jpg'),
(9, 'Our Family Plark', 'Our Family Plark<br>\r\n<br>', 40, 'gifts', 'familyPlark.jpg'),
(10, 'Pink Faith Beanie', 'Pink Faith Beanie<br>\r\n<br>', 10, 'gifts', 'giftsBeanie.jpg'),
(11, 'Home Plark<br>', 'Joshua 24:15 Home Plark <br>\r\n<br>                         ', 30, 'gifts', 'housePlark.jpg'),
(12, 'Coffee Mug<br>', 'Coffee Mug <br>\r\n<br>                         ', 20, 'gifts', 'mug1.jpg'),
(13, 'Red Leather Bible', 'Red Leather NIV Bible\r\n<br>', 50, 'book', 'redbible.jpg'),
(15, 'Photo Frame<br>', 'Photo Frame', 20, 'gifts', 'photoframe.jpg'),
(16, 'Coffee Cup <br>', 'Coffee Cup ', 15, 'gifts', 'coffeecup.jpg'),
(17, 'Knit Beanie <br>', 'Light pink Knit Beanie ', 10, 'gifts', 'beanie2.jpg'),
(18, 'Knit Beanie <br>', 'Light pink Knit Beanie ', 10, 'gifts', 'beanie2.jpg'),
(20, 'Silver cross <br>', 'Sterling silver cross', 30, 'jewelry', 'crossnecklace1.jpg'),
(21, 'Bracelet <br>', 'Faith, Hope, Love Bracelet', 16.99, 'jewelry', 'faithbracelet.jpg'),
(22, ' Gold Cross<br>', 'Sparkling Gold Crosses ', 25, 'jewelry', 'goldcross.jpg'),
(23, 'Heart bracelet', 'Heart bracelet for sisters ', 15, 'jewelry', 'sistersbracelet.jpg'),
(24, 'Necklaces $30 each.', 'Necklaces $30 each.', 30, 'jewelry', 'beadsnecklace.jpg'),
(25, 'Leather Bracelets<br>', 'Leather Bracelets $5 each.', 5, 'jewelry', 'leatherbracelet.jpg'),
(26, 'Heart bracelet', 'Heart bracelet for sisters', 15, 'jewelry', 'sistersbracelet.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
