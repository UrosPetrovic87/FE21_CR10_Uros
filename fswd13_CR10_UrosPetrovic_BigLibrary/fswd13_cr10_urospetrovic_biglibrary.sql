-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 02:48 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd13_cr10_urospetrovic_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd13_cr10_urospetrovic_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd13_cr10_urospetrovic_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `libary`
--

CREATE TABLE `libary` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `publisherName` varchar(255) NOT NULL,
  `publisherAdress` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libary`
--

INSERT INTO `libary` (`id`, `tittle`, `picture`, `isbn`, `description`, `type`, `firstName`, `lastName`, `publisherName`, `publisherAdress`, `date`, `status`) VALUES
(1, 'Kodokan Judo', 'https://images1.penguinrandomhouse.com/cover/9781568365398', '123334555-5554', 'Judo book ', 'Book', 'Jigoro', 'Kanno', 'Judo publishing', 'China town ', '2011-08-25', 'available'),
(12, 'Strength training Anatomy', 'https://images-na.ssl-images-amazon.com/images/I/51GKL1qnj1L._SX384_BO1,204,203,200_.jpg', '22233133-43', 'With new exercises, additional stretches, you’ll gain a whole new understanding of how muscles perform during strength exercises.', 'Book', 'Frederick', 'Delavier', 'DIF', 'Novi Sad', '2013-08-07', 'Gone'),
(14, 'Forest Gump', 'https://m.media-amazon.com/images/M/MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_FMjpg_UX1000_.jpg', '333222-3344', 'Historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.', 'DVD', 'Robert ', 'Zemeckis', 'Motion Picture', 'Los Angeles', '2012-08-10', 'available'),
(15, 'He-Man and the Masters of the Universe', 'https://m.media-amazon.com/images/M/MV5BODgyYzRhNzAtMTJlNC00OTM0LWI3M2ItNzZjYzYxZmJiOWIyL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNDUxNjc5NjY@._V1_FMjpg_UX1000_.jpg', '2333-232-344', 'He-Man, goes against the evil forces of Skeletor to save the planet Eternia and to protect the secrets of Castle Grayskull.', 'DVD', 'John', 'Erwin', 'WB', 'USA', '2021-08-07', 'gone'),
(16, 'Game of Thrones', 'https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_FMjpg_UX1000_.jpg', '54445-554-33', 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.', 'DVD', 'David', 'Benioff', 'Clarkson', 'London', '2021-08-01', 'gone'),
(17, 'Pritate Dancer', 'https://res.cloudinary.com/fleetnation/image/private/c_fit,w_1120/fl_no_overflow,g_south,l_text:style_gothic2:%C2%A9%20Rajko%20Simunovic,o_20,y_10/fl_no_overflow,g_center,l_watermark4,o_25,y_50/v1587639960/vpnz1fdaohvxdiu6dpa8.jpg', '3232-334-555', 'Private Dancer propelled Turner into becoming a viable solo star, as well as one of the most marketable crossover singers in the recording industry.', 'CD', 'Tina', 'Turner', 'Capital Records', 'Misisipy', '2012-08-02', 'available'),
(18, 'Thriller', 'https://i.guim.co.uk/img/media/7a92d2b437164c8757f0f94728a6259f40f20425/639_571_2102_1262/master/2102.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=a9cc787270c7dc2de84c8943533e4048', '120202-2344', 'Jackson wanted to create an album where every song was a killer. With the ongoing backlash against disco, he moved in a new musical direction, resulting in a mix of pop, post-disco, rock, funk, and soul sounds.', 'CD', 'Michael ', 'Jackson', 'Westlake', 'Los Angeles', '2012-09-19', 'available'),
(20, 'Avatar', 'https://i.pinimg.com/originals/17/aa/71/17aa718c1ab15b482505b8431cf596fc.jpg', '1222-2213-4451', 'The film is set in the mid-22nd century when humans are colonizing Pandora, a lush habitable moon of a gas giant in the Alpha Centauri star system, in order to mine the valuable mineral unobtanium.', 'DVD', 'James', 'Cameron', 'WB', 'USA', '2011-08-04', 'available'),
(23, 'Avengers', 'https://upload.wikimedia.org/wikipedia/en/8/8a/The_Avengers_%282012_film%29_poster.jpg', '2332-445-6-77', 'The Avengers, is a American superhero film based on the Marvel Comics superhero team of the same name.', 'DVD', 'Joss', 'Whedon', 'Marvel', 'USA', '2021-08-04', 'gone'),
(24, 'The Godfather', 'https://static.posters.cz/image/750/platno-the-godfather-i100238.jpg', '5454-555-44441', 'The Godfather is an American film series that consists of three crime films.', 'DVD', 'Francis', 'Copola', 'Twentieth Century Fox', 'New York', '2021-08-01', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `libary`
--
ALTER TABLE `libary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `libary`
--
ALTER TABLE `libary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
