-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Time of creation: Фев 25 2023 г., 16:10
-- Server version: 5.6.51
-- PHP version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blackwatch`
--

-- --------------------------------------------------------

--
-- Structure of the `orders` table 
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Data dump of `orders` table 
--

INSERT INTO `orders` (`id`, `name`, `surname`, `phone`, `address`, `model`) VALUES
(1, 'Test', 'Testov', '+79990010011', 'Morensk d.9 kv.11', 'modelX'),
(2, 'Test2', 'Testov2', '+79990010000', 'Morensk d.9 kv.00', 'modelY'),
(3, 'TName', 'TSurname', '+79990010015', 'Morensk d.9 kv.14', 'modelX'),
(4, 'Testarr', 'arrTest', '+74348990283', 'Morensk d.9 kv.088', 'modelY');

--
-- Stored Table Indexes
--

--
-- Indexes of the `orders` table 
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for saved tables
--

--
-- AUTO_INCREMENT for `orders` table 
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
