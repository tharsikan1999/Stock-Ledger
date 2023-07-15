-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2023 at 03:59 AM
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
-- Database: `stock_ledger`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` int NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`) VALUES
(1, 'Director\'s Office'),
(2, 'Student Affairs'),
(3, 'Library'),
(4, 'Hostel G/B'),
(5, 'Medical Center'),
(6, 'Training Division'),
(7, 'Physical Education'),
(8, 'Premises Management'),
(9, 'Security'),
(10, 'Interdisciplinary Studies'),
(11, 'Civil Engineering'),
(12, 'Mechanical Engineering'),
(13, 'Maritime Studies'),
(14, 'Polymer/Chemical Engineering'),
(15, 'Textile Engineering'),
(16, 'Electrical & Electronic Engineering'),
(17, 'IT Division'),
(18, 'Workshops'),
(19, 'Audit Section'),
(20, 'System Management Unit'),
(21, 'Maintenance (SEC)');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` varchar(5) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `type_id` int NOT NULL,
  `min_stock_limit` int NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `type_id`, `min_stock_limit`) VALUES
('10', 'Glue Bottle', 1, 5),
('2', 'Diesel', 2, 5),
('3', 'Blue Pen', 1, 15),
('4', 'Black Pen', 1, 15),
('5', 'Eraser', 1, 15),
('7', 'Ruler - Plastic', 1, 15),
('8', 'Marker Pen Blue', 1, 5),
('9', 'File Covers', 1, 10);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_view`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `product_view`;
CREATE TABLE IF NOT EXISTS `product_view` (
`min_stock_limit` int
,`pro_id` varchar(5)
,`pro_name` varchar(50)
,`type_id` int
,`type_name` varchar(55)
);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int NOT NULL AUTO_INCREMENT,
  `grn` varchar(5) DEFAULT NULL,
  `sir` varchar(5) DEFAULT NULL,
  `po_no` varchar(5) DEFAULT NULL,
  `issue_no` varchar(5) DEFAULT NULL,
  `pro_id` varchar(5) NOT NULL,
  `date` datetime NOT NULL,
  `dep_id` int DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `unit_price` double NOT NULL,
  `quantity` int NOT NULL,
  `price` double NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pro_id` (`pro_id`),
  KEY `dep_id` (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `grn`, `sir`, `po_no`, `issue_no`, `pro_id`, `date`, `dep_id`, `supplier`, `unit_price`, `quantity`, `price`, `description`) VALUES
(3, '258', NULL, '256', NULL, '3', '2023-07-12 00:00:00', NULL, 'Asin paint', 10, 0, 250, 'For book shop'),
(4, '1255', NULL, '12', NULL, '10', '2023-08-05 00:00:00', NULL, 'Bakery', 50, 3, 3000, 'gumm'),
(5, '1255', NULL, '12', NULL, '2', '2023-08-05 00:00:00', NULL, 'Bakery', 250, 50, 12500, 'For bus'),
(6, '25', NULL, '256', NULL, '10', '2023-07-12 00:00:00', NULL, 'OIC', 60, 5, 1500, ''),
(7, '55', NULL, '60', NULL, '2', '2023-07-02 00:00:00', NULL, 'Ceypetco', 350, 2, 700, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `stock_view`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `stock_view`;
CREATE TABLE IF NOT EXISTS `stock_view` (
`available_stock` decimal(32,0)
,`last_updated_date` datetime
,`min_stock_limit` int
,`pro_id` varchar(5)
,`pro_name` varchar(50)
,`total_amount` double
);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int NOT NULL AUTO_INCREMENT,
  `type_name` varchar(55) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Stationary 3.1'),
(2, 'Fuel 3.2'),
(3, 'Uniform 3.3'),
(4, 'Mech 3.4'),
(5, 'Chemi 3.5'),
(6, 'Medical 3.6'),
(7, 'Other 3.7'),
(8, 'Tyres 4.1'),
(9, 'Printing 5.10'),
(10, 'Scroll 6.20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fname`, `lname`, `password`, `department`) VALUES
(1, 'asf', 'Asluf', 'Ahamed', 'asf100', 'admin'),
(3, 'dh@', 'dhana', 'aa', 'asf100', 'IT'),
(4, 'nas@gmail.com', 'Nasik', 'Moh', 'asf100', 'Civil');

-- --------------------------------------------------------

--
-- Structure for view `product_view`
--
DROP TABLE IF EXISTS `product_view`;

DROP VIEW IF EXISTS `product_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_view`  AS SELECT `t2`.`type_id` AS `type_id`, `t2`.`type_name` AS `type_name`, `t1`.`pro_id` AS `pro_id`, `t1`.`pro_name` AS `pro_name`, `t1`.`min_stock_limit` AS `min_stock_limit` FROM (`product` `t1` join `type` `t2` on((`t1`.`type_id` = `t2`.`type_id`)))  ;

-- --------------------------------------------------------

--
-- Structure for view `stock_view`
--
DROP TABLE IF EXISTS `stock_view`;

DROP VIEW IF EXISTS `stock_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stock_view`  AS SELECT `t1`.`pro_id` AS `pro_id`, `t1`.`pro_name` AS `pro_name`, max(`t2`.`date`) AS `last_updated_date`, `t1`.`min_stock_limit` AS `min_stock_limit`, sum(`t2`.`quantity`) AS `available_stock`, sum(`t2`.`price`) AS `total_amount` FROM (`stock` `t2` join `product` `t1` on((`t2`.`pro_id` = `t1`.`pro_id`))) GROUP BY `t2`.`pro_id``pro_id`  ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `department` (`dep_id`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
