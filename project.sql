-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2024 at 09:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'kkkk', 'abdisamadvanabdulle@gmail.com', '$2y$10$wWruMhkhoJ4dB1Dm3jJdSeo07OsulUmpTmUuhzAV7ovJ0ShXbWbVG'),
(2, 'mmm', 'm@gmail.com', '$2y$10$FPLXrIEaX48XSO1/F0j26eJavqNGBglwuNC3VZVjNerWWZFIsUHVO'),
(3, 'n', 'n@gmail.com', '$2y$10$Mmsj7tuz07ot/qTD/z06re4DqSYBrTjKImfUJQ4S1Xq59Mr.PFlce'),
(4, 'waaw', 'w@gmail.com', '$2y$10$SX7dYlVzwNbgX05VCqwh7ezNINedKpMx.TmtISZ2eCz.U7vgPCgea'),
(5, 'kelvin', 'bbb@gmail.com', '$2y$10$xb2CsASK3rIy6v/.8YEjDelu6tyJ5D9O/XpWd3ReaQvTcoWHNz7wG'),
(6, 'l', 'm@gmail.com', '6666'),
(7, '11', '11@gmail.com', '$2y$10$rgPz1/E5KZhVjHfQ/FEAMOSvsmMKt6WEAGRgwjvpR3Y/SpMJLlc8S'),
(8, 'c', 'abdisamadvanabdulle@gmail.com', '7777'),
(9, 's', 's@gmail.com', '1111'),
(10, 'llllllll', 'ss@gmail.com', '$2y$10$q88yAa8IIIP9aFXvH49Vuuj1nNwlaqrZMYvubfuhxOMdXszzdwEWS'),
(11, 'kelvin', 'ww@gmail.com', '$2y$10$BqE5JyLl.9NJJpwz8Jf7W.3khYS.3wK/Y9kxMH4eUojVFg1SWjO2C'),
(12, 'mmmmmm', 'mounty@gmail.com', '$2y$10$jwAaRgEI5Lfvwk1vY7vxB.sUhRSFPhMOn/A.Ei3dP5S4ySU1qYXoa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
