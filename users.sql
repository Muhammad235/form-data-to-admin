-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 10:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `first` varchar(225) NOT NULL,
  `middle` varchar(225) NOT NULL,
  `last` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(100) NOT NULL,
  `phonenumber` int(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ssn` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `file1` varchar(300) NOT NULL,
  `file2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `middle`, `last`, `street`, `unit`, `city`, `state`, `zip`, `phonenumber`, `type`, `email`, `ssn`, `date`, `file1`, `file2`) VALUES
(1, 'Sint consequatur P', 'Dolore neque omnis i', 'Quas quaerat asperna', 'Sit dolorem et faci', 'Aut duis ipsa iste ', 'A adipisci quos aut ', 'Esse tempor sit deb', 71399, 205, 'telephone', 'xemumyve@mailinator.com', 'Soluta aut occaecat ', '1992-02-14', '9825.png', '314Electric Fence.png'),
(4, 'Quis et placeat ips', 'Eveniet rerum eu ut', 'Optio mollit volupt', 'Qui atque molestiae ', 'Officia natus labori', 'Quasi exercitation s', 'Minus rerum recusand', 80450, 360, 'telephone', 'vekoru@mailinator.com', 'Reprehenderit corru', '1975-01-20', '155Fire Alarm 1.png', '617photo_5908865433329581591_y 1.png'),
(5, 'Eiusmod ut assumenda', 'Nihil aspernatur dol', 'Quibusdam ea impedit', 'Dolores quibusdam ap', 'Ipsa quaerat sint v', 'Voluptatem est aut ', 'Eos libero suscipit', 57226, 553, 'mobile', 'gigazuj@mailinator.com', 'Autem qui amet quis', '1982-12-22', '690street solar.png', '148Solar Engineers 1 1.png');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
