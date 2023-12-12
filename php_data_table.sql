-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2023 at 06:08 PM
-- Server version: 8.0.35-0ubuntu0.20.04.1
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_data_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_lists`
--

CREATE TABLE `users_lists` (
  `id` int NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_lists`
--

INSERT INTO `users_lists` (`id`, `username`, `email`, `phone`) VALUES
(1, 'dharshan', 'dharshan@gmail.com', 98745687),
(2, 'karan', 'karan@gmail.com', 987456123),
(3, 'john_doe', 'john.doe@gmail.com', 1234567890),
(64, 'alice_smith', 'alice.smith@gmail.com', 2345678901),
(65, 'bob_jones', 'bob.jones@gmail.com', 3456789012),
(66, 'emily_wilson', 'emily.wilson@gmail.com', 4567890123),
(67, 'david_miller', 'david.miller@gmail.com', 5678901234),
(68, 'olivia_brown', 'olivia.brown@gmail.com', 6789012345),
(69, 'alex_jackson', 'alex.jackson@gmail.com', 7890123456),
(70, 'sophia_taylor', 'sophia.taylor@gmail.com', 8901234567),
(71, 'michael_clark', 'michael.clark@gmail.com', 9012345678),
(72, 'emma_hall', 'emma.hall@gmail.com', 9876543210),
(73, 'ryan_white', 'ryan.white@gmail.com', 8765432109),
(74, 'chloe_martin', 'chloe.martin@gmail.com', 7654321098),
(75, 'daniel_morris', 'daniel.morris@gmail.com', 6543210987),
(76, 'grace_robinson', 'grace.robinson@gmail.com', 5432109876),
(77, 'jacob_wright', 'jacob.wright@gmail.com', 4321098765),
(78, 'mia_carter', 'mia.carter@gmail.com', 3210987654),
(79, 'ethan_evans', 'ethan.evans@gmail.com', 2109876543),
(80, 'ava_harrison', 'ava.harrison@gmail.com', 1098765432),
(81, 'noah_hall', 'noah.hall@gmail.com', 987654321),
(82, 'lily_thomas', 'lily.thomas@gmail.com', 876543210),
(83, 'logan_garcia', 'logan.garcia@gmail.com', 765432109),
(84, 'zoey_perez', 'zoey.perez@gmail.com', 654321098),
(85, 'william_mitchell', 'william.mitchell@gmail.com', 543210987),
(86, 'abigail_turner', 'abigail.turner@gmail.com', 432109876),
(87, 'jackson_russell', 'jackson.russell@gmail.com', 321098765),
(88, 'harper_cook', 'harper.cook@gmail.com', 210987654),
(89, 'carter_sullivan', 'carter.sullivan@gmail.com', 109876543),
(90, 'violet_fisher', 'violet.fisher@gmail.com', 98765432),
(91, 'samuel_martin', 'samuel.martin@gmail.com', 87654321),
(92, 'ella_clark', 'ella.clark@gmail.com', 76543210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_lists`
--
ALTER TABLE `users_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_lists`
--
ALTER TABLE `users_lists`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
