-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 10:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(120) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file_name` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `description`, `created_at`, `file_name`) VALUES
(86, 'Dorian Carroll', 'Quaerat nostrud quis', '2021-06-06 08:26:37', '1253_laptop image.jfif'),
(87, 'Dorian Carroll', 'Quaerat nostrud quis', '2021-06-06 08:26:37', '3542_mobile image.jfif'),
(88, 'Joseph Gibson', 'Tempore dolores quo', '2021-06-06 08:26:57', '4858_laptop image.jfif'),
(89, 'Joseph Gibson', 'Tempore dolores quo', '2021-06-06 08:26:57', '3386_mobile image.jfif'),
(90, 'Darryl Vargas', 'Voluptate nihil numq', '2021-06-06 08:27:10', '6320_vivo y5image'),
(92, 'Alfonso James', 'Et natus deserunt mo', '2021-06-06 08:27:40', '1691_vivo y5image'),
(93, 'Hedda Newman', 'Cillum aliquam dolor', '2021-06-06 08:27:57', '2594_wallpaper2.jpg'),
(94, 'Hope Trevino', 'Blanditiis consectet', '2021-06-06 08:40:17', '9857_acimage.jfif'),
(95, 'Hope Trevino', 'Blanditiis consectet', '2021-06-06 08:40:17', '5153_laptop image.jfif'),
(96, 'Hope Trevino', 'Blanditiis consectet', '2021-06-06 08:40:17', '5774_mobile image.jfif'),
(97, 'Eliana William', 'Est qui et cum sint', '2021-06-06 08:41:38', '2712_vivo y5image'),
(99, 'Zena Young', 'Odio consequatur si', '2021-06-06 08:41:56', '4113_acimage.jfif'),
(100, 'Zena Young', 'Odio consequatur si', '2021-06-06 08:41:56', '1764_laptop image.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
