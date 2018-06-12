-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 02:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlf`
--

-- --------------------------------------------------------

--
-- Table structure for table `mlf_accessories_purchase`
--

CREATE TABLE `mlf_accessories_purchase` (
  `serial_number` bigint(20) NOT NULL,
  `transaction_by` varchar(50) NOT NULL,
  `purchased_from` varchar(50) NOT NULL,
  `purchased_date` date NOT NULL,
  `purchased_cost` int(11) NOT NULL,
  `is_sold` tinyint(1) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_accessories_purchase`
--

INSERT INTO `mlf_accessories_purchase` (`serial_number`, `transaction_by`, `purchased_from`, `purchased_date`, `purchased_cost`, `is_sold`, `item_name`, `item_type`) VALUES
(201800001, 'emp', 'admin', '2018-06-01', 20000, 0, 'SAMSUNG DOUBLE DOOR', 'RSB'),
(201800002, 'emp', 'admin', '2018-06-01', 20000, 0, 'SAMSUNG DOUBLE DOOR', 'RSB'),
(201800003, 'emp', 'admin', '2018-06-01', 20000, 1, 'SAMSUNG DOUBLE DOOR', 'RSB'),
(201800004, 'emp', 'admin', '2018-06-01', 20000, 0, 'SAMSUNG DOUBLE DOOR', 'RSB'),
(201800005, 'emp', 'admin', '2018-06-01', 20000, 0, 'SAMSUNG DOUBLE DOOR', 'RSB'),
(201800006, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800007, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800008, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800009, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800010, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800011, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800012, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800013, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800014, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800015, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800016, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800017, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800018, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800019, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800020, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800021, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800022, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800023, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800024, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800025, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800026, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800027, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800028, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800029, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800030, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800031, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800032, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800033, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800034, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800035, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800036, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800037, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800038, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800039, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800040, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800041, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800042, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800043, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800044, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800045, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800046, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800047, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800048, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800049, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800050, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800051, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800052, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800053, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800054, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800055, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800056, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800057, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800058, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800059, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800060, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800061, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800062, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800063, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800064, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800065, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800066, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800067, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800068, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800069, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800070, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800071, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800072, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800073, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800074, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800075, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800076, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800077, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800078, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800079, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800080, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800081, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800082, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800083, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800084, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800085, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800086, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800087, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800088, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800089, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800090, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800091, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800092, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800093, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800094, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800095, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800096, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800097, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800098, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800099, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800100, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800101, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800102, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800103, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC'),
(201800104, 'emp', '7780169003', '2018-06-08', 500, 1, 'IFb', 'FLWMC'),
(201800105, 'emp', '7780169003', '2018-06-08', 500, 0, 'IFb', 'FLWMC');

-- --------------------------------------------------------

--
-- Table structure for table `mlf_accessories_sold`
--

CREATE TABLE `mlf_accessories_sold` (
  `serial_number` bigint(20) NOT NULL,
  `transaction_by` varchar(50) NOT NULL,
  `sold_to` varchar(50) NOT NULL,
  `sold_date` date NOT NULL,
  `sold_cost` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_accessories_sold`
--

INSERT INTO `mlf_accessories_sold` (`serial_number`, `transaction_by`, `sold_to`, `sold_date`, `sold_cost`, `item_name`, `item_type`) VALUES
(201800003, 'emp', 'admin', '2018-06-01', 20000, 'SAMSUNG DOUBLE DOOR', 'RSB'),
(201800104, 'emp', '9949582550', '2018-06-08', 600, 'IFb', 'FLWMC');

-- --------------------------------------------------------

--
-- Table structure for table `mlf_article_finance`
--

CREATE TABLE `mlf_article_finance` (
  `customer_id` varchar(50) NOT NULL,
  `authorised_by` varchar(50) NOT NULL,
  `article_id` varchar(50) NOT NULL,
  `article_type` varchar(50) NOT NULL,
  `article_model` varchar(50) NOT NULL,
  `article_cost` double NOT NULL,
  `date` date NOT NULL,
  `reference_number` bigint(20) NOT NULL,
  `approved_amount` int(11) NOT NULL,
  `documentation_charges` int(11) NOT NULL,
  `rate_of_interest` double NOT NULL,
  `total_emis` int(11) NOT NULL,
  `installment_amount` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_article_finance`
--

INSERT INTO `mlf_article_finance` (`customer_id`, `authorised_by`, `article_id`, `article_type`, `article_model`, `article_cost`, `date`, `reference_number`, `approved_amount`, `documentation_charges`, `rate_of_interest`, `total_emis`, `installment_amount`, `total_amount`, `status`) VALUES
('9492400797', 'emp', '20180001', 'AC', 'LG1058', 58000, '2018-06-04', 124, 50000, 500, 24, 12, 5209, 62500, 1),
('9492400797', 'emp', '20180001', 'RF', 'LG1058', 85000, '2018-06-04', 125, 50000, 1500, 24, 12, 5292, 63500, 0),
('9949582550', 'emp', '18252', 'AC', 'SAMSUNG A420', 25000, '2018-06-04', 126, 12000, 500, 24, 6, 2564, 15380, 0),
('9949582550', 'emp', 'SM 7102', 'RF', 'Samsung A43', 50000, '2018-06-08', 253, 25000, 500, 24, 10, 3150, 31500, 1),
('9949582550', 'emp', 'SM 7103', 'WM', 'LG by2', 25000, '2018-06-08', 365, 10000, 1200, 24, 12, 1135, 13600, 1),
('9949582550', 'emp', '121', 'TV', 'LG12145', 50000, '2018-06-04', 1253, 25000, 500, 24, 12, 2625, 31500, 0),
('9949582550', 'emp', '2654', 'RF', 'SAMSUNG 9874', 65000, '2018-06-04', 2164, 45000, 1000, 25, 24, 2386, 57250, 0),
('admin', 'emp', 'fhfhf', 'RF', 'dhfhr', 33544, '2018-06-07', 3344, 3545, 233, 23, 23, 200, 4593, 0),
('admin', 'emp', 'bmbmb', 'TV', 'bfhfh', 43545, '2018-06-07', 3553, 3555, 334, 12, 22, 197, 4315, 0),
('admin', 'emp', 'cfcfgh', 'RF', 'fghghgn', 5524, '2018-06-07', 4666, 4534, 3343, 12, 15, 562, 8421, 0),
('admin', 'emp', 'sfdghfdh', 'TV', 'wregteg333', 146560, '2018-06-07', 5655, 6564, 21322, 22, 12, 2445, 29330, 0),
('9949582550', 'emp', '34567', 'TV', 'bgfdd', 355, '2018-06-07', 9876, 345652, 500, 21, 24, 17427, 418738, 0),
('9949582550', 'emp', '20180010', 'AC', 'Loyads', 58000, '2018-06-04', 12589, 40000, 500, 24, 20, 2505, 50100, 0),
('admin', 'emp', 'ddw', 'TV', 'sdwd', 2334, '2018-06-03', 33434, 34334, 344, 3, 12, 2976, 35708, 0),
('admin', 'emp', 'kjbbjhvbh', 'AC', 'sregged', 24354, '2018-06-07', 33535, 3345, 3333, 33, 12, 649, 7781, 0),
('admin', 'emp', 'sfdghfdh', 'RF', 'wregteg333', 35466, '2018-06-07', 35665, 343, 300, 124, 2, 1000, 1068, 0),
('admin', 'emp', '35tryre', 'TV', 'gswtgre4', 464657, '2018-06-07', 46546, 5775, 4654, 54, 12, 1129, 13547, 0),
('9949582550', 'emp', '998784', 'TV', 'sfdhfdh454', 46465, '2018-06-07', 56478, 14456, 500, 25, 12, 1548, 18570, 0),
('admin', 'emp', '234567', 'TV', 'wddsdfd', 234, '2018-06-03', 2343432, 232, 2323, 2, 6, 427, 2559, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mlf_cash_finance`
--

CREATE TABLE `mlf_cash_finance` (
  `customer_id` varchar(50) NOT NULL,
  `authorised_by` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `reference_number` bigint(20) NOT NULL,
  `approved_amount` int(11) NOT NULL,
  `rate_of_interest` double NOT NULL,
  `total_emis` int(11) NOT NULL,
  `installment_amount` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_cash_finance`
--

INSERT INTO `mlf_cash_finance` (`customer_id`, `authorised_by`, `date`, `reference_number`, `approved_amount`, `rate_of_interest`, `total_emis`, `installment_amount`, `total_amount`, `status`) VALUES
('9949582550', 'emp', '2018-06-04', 1, 50000, 24, 12, 5167, 62000, 1),
('admin', 'emp', '2018-06-04', 1213, 1222, 11, 6, 226, 1356, 1),
('9949582550', 'emp', '2018-06-04', 201800001, 25000, 25, 12, 2605, 31250, 1),
('9949582550', 'emp', '2018-06-08', 201800002, 50000, 3, 35, 1500, 51500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mlf_emp_info`
--

CREATE TABLE `mlf_emp_info` (
  `username` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `joining_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `left_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mlf_emp_services`
--

CREATE TABLE `mlf_emp_services` (
  `username` varchar(50) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mlf_old_materials_purchase`
--

CREATE TABLE `mlf_old_materials_purchase` (
  `serial_number` bigint(7) NOT NULL,
  `transaction_by` varchar(50) NOT NULL,
  `item_model` varchar(50) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `purchased_from` varchar(50) NOT NULL,
  `purchased_date` date NOT NULL,
  `purchased_cost` double NOT NULL,
  `purchased_condition` tinyint(1) NOT NULL,
  `purchased_remark` varchar(250) NOT NULL,
  `is_sold` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_old_materials_purchase`
--

INSERT INTO `mlf_old_materials_purchase` (`serial_number`, `transaction_by`, `item_model`, `item_type`, `purchased_from`, `purchased_date`, `purchased_cost`, `purchased_condition`, `purchased_remark`, `is_sold`) VALUES
(201800001, 'emp', 'SAMSUNG DOUBLE DOOR', 'RF', 'admin', '2018-06-01', 120000, 1, 'Vert Good', 1),
(201800002, 'emp', 'SAMSUNGDR', 'RF', '9492400797', '2018-06-04', 5282, 1, 'Buyback', 1),
(201800003, 'emp', 'LG 120GF', 'TV', '9949582550', '2018-06-08', 1024, 1, 'Sound problem', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mlf_old_materials_sold`
--

CREATE TABLE `mlf_old_materials_sold` (
  `serial_number` bigint(7) NOT NULL,
  `transaction_by` varchar(50) NOT NULL,
  `item_model` varchar(50) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `sold_to` varchar(50) NOT NULL,
  `sold_date` date NOT NULL,
  `sold_cost` double NOT NULL,
  `sold_condition` tinyint(1) NOT NULL,
  `sold_remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_old_materials_sold`
--

INSERT INTO `mlf_old_materials_sold` (`serial_number`, `transaction_by`, `item_model`, `item_type`, `sold_to`, `sold_date`, `sold_cost`, `sold_condition`, `sold_remark`) VALUES
(201800001, 'emp', 'SAMSUNG DOUBLE DOOR', '', '9492400797', '2018-06-04', 144000, 0, 'Buyback'),
(201800002, 'emp', 'SAMSUNGDR', '', '7659893339', '2018-06-04', 6338, 0, 'Buyback'),
(201800003, 'emp', 'LG 120GF', '', '7780169003', '2018-06-08', 1228, 0, 'Sound Problem');

-- --------------------------------------------------------

--
-- Table structure for table `mlf_roles`
--

CREATE TABLE `mlf_roles` (
  `roie_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_roles`
--

INSERT INTO `mlf_roles` (`roie_id`, `role_name`) VALUES
(1, 'admin'),
(3, 'customer'),
(2, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `mlf_roles_services`
--

CREATE TABLE `mlf_roles_services` (
  `role_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_roles_services`
--

INSERT INTO `mlf_roles_services` (`role_id`, `service_id`) VALUES
(1, 0),
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 10),
(1, 19),
(1, 20),
(2, 0),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 6),
(2, 10),
(2, 19),
(2, 20),
(3, 0),
(3, 19),
(3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `mlf_services`
--

CREATE TABLE `mlf_services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_services`
--

INSERT INTO `mlf_services` (`service_id`, `service_name`) VALUES
(0, 'Profile'),
(1, 'Customer'),
(2, 'Article Finance'),
(3, 'Cash Finance'),
(4, 'Buy Back Items'),
(5, 'Employee Expenses'),
(6, 'Accessories'),
(7, 'Summary'),
(10, 'Transactions'),
(19, 'Change Password'),
(20, 'Signout');

-- --------------------------------------------------------

--
-- Table structure for table `mlf_transactions`
--

CREATE TABLE `mlf_transactions` (
  `customer_id` varchar(50) NOT NULL,
  `authorised_by` varchar(50) NOT NULL,
  `reference_number` bigint(20) NOT NULL,
  `transaction_id` bigint(20) NOT NULL,
  `due_date` date NOT NULL,
  `due_amount` int(11) NOT NULL,
  `penality_days` int(11) NOT NULL,
  `penality_amount` int(11) NOT NULL,
  `due_amount_paid` int(11) NOT NULL,
  `penality_amount_paid` int(20) NOT NULL,
  `total_due_amount_paid` int(11) NOT NULL,
  `transaction_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_transactions`
--

INSERT INTO `mlf_transactions` (`customer_id`, `authorised_by`, `reference_number`, `transaction_id`, `due_date`, `due_amount`, `penality_days`, `penality_amount`, `due_amount_paid`, `penality_amount_paid`, `total_due_amount_paid`, `transaction_date`) VALUES
('9949582550', 'emp', 201800001, 2018000001, '0000-00-00', 5210, 0, 0, 1200, 0, 1200, '0000-00-00'),
('9949582550', 'emp', 201800001, 2018000002, '2018-08-04', 4010, 0, 0, 200, 1000, 1400, '2018-06-08'),
('9949582550', 'emp', 365, 2018000003, '2018-07-08', 1135, 0, 0, 1000, 0, 1000, '2018-06-08'),
('9949582550', 'emp', 365, 2018000004, '2018-08-08', 1270, 0, 0, 1200, 0, 2200, '2018-06-08'),
('9949582550', 'emp', 201800002, 2018000005, '2018-07-08', 1500, 0, 0, 1000, 0, 1000, '2018-06-08'),
('', 'emp', 0, 2018000006, '0000-00-00', 0, 0, 0, 0, 0, 0, '2018-06-12'),
('', 'emp', 0, 2018000007, '0000-00-00', 0, 0, 0, 0, 0, 0, '2018-06-12'),
('456745+64', 'emp', 0, 2018000008, '0000-00-00', 0, 0, 0, 0, 0, 0, '2018-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `mlf_users`
--

CREATE TABLE `mlf_users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL DEFAULT '53b08ebde5e144fb1d8a3ee61f7016c8'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_users`
--

INSERT INTO `mlf_users` (`username`, `password`) VALUES
('7659893339', '53b08ebde5e144fb1d8a3ee61f7016c8'),
('7780169003', '53b08ebde5e144fb1d8a3ee61f7016c8'),
('9492400797', '53b08ebde5e144fb1d8a3ee61f7016c8'),
('9949582550', '53b08ebde5e144fb1d8a3ee61f7016c8'),
('admin', '81dc9bdb52d04dc20036dbd8313ed055'),
('cstmer', '81dc9bdb52d04dc20036dbd8313ed055'),
('emp', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `mlf_users_info`
--

CREATE TABLE `mlf_users_info` (
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_num` bigint(10) NOT NULL,
  `alternate_num` bigint(10) NOT NULL,
  `d_no` varchar(25) NOT NULL,
  `street` varchar(50) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `town_or_city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `refer_username` varchar(50) NOT NULL,
  `refer_name` varchar(50) NOT NULL,
  `added_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_users_info`
--

INSERT INTO `mlf_users_info` (`username`, `first_name`, `last_name`, `contact_num`, `alternate_num`, `d_no`, `street`, `locality`, `town_or_city`, `district`, `pincode`, `refer_username`, `refer_name`, `added_by`) VALUES
('7659893339', 'Subhash', 'Kommina', 7659893339, 0, '258-36', '', '', 'NDD', 'West Godavari', 534222, '9492400797', 'KIRAN KUMAR', 'emp'),
('7780169003', 'sasi hello world', 'Kumar', 9999999990, 0, 'SFDFFG', '', '', 'Tadepalli', 'West Godavari', 534102, '', '', 'emp'),
('9492400797', 'KIRAN', 'KUMAR', 9492400797, 0, '10-145-2/b', '', '', 'Tadepalligudem', 'West Godavari', 534101, '', '', 'emp'),
('9949582550', 'GOPINADH', 'V', 9949582550, 0, '10-145-2/b', '', '', 'Tadepalligudem', 'West Godavari', 534101, '', '', 'emp'),
('admin', 'sasi', 'redants', 9999999990, 9988998899, '10-145-2/b', 'abx street', 'Tadepalligudem', 'Tadepalligudem', 'West Godavari', 534101, 'admin', 'Institute', ''),
('cstmer', 'RED ANTS', 'SASI', 9999999999, 9999999999, '10-145-2/b', 'abx street', 'Tadepalligudem', 'Tadepalligudem', 'West Godavari', 534101, 'admin', 'sasi', ''),
('emp', '', '', 0, 0, '', '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mlf_users_roles`
--

CREATE TABLE `mlf_users_roles` (
  `username` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mlf_users_roles`
--

INSERT INTO `mlf_users_roles` (`username`, `role_id`) VALUES
('7659893339', 5),
('7780169003', 5),
('9492400797', 5),
('9949582550', 5),
('admin', 1),
('cstmer', 3),
('emp', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mlf_accessories_purchase`
--
ALTER TABLE `mlf_accessories_purchase`
  ADD UNIQUE KEY `serial_number` (`serial_number`);

--
-- Indexes for table `mlf_article_finance`
--
ALTER TABLE `mlf_article_finance`
  ADD UNIQUE KEY `bill_number` (`reference_number`);

--
-- Indexes for table `mlf_cash_finance`
--
ALTER TABLE `mlf_cash_finance`
  ADD UNIQUE KEY `bill_number` (`reference_number`);

--
-- Indexes for table `mlf_old_materials_purchase`
--
ALTER TABLE `mlf_old_materials_purchase`
  ADD UNIQUE KEY `serial_number` (`serial_number`),
  ADD UNIQUE KEY `serial_number_2` (`serial_number`),
  ADD UNIQUE KEY `serial_number_3` (`serial_number`);

--
-- Indexes for table `mlf_old_materials_sold`
--
ALTER TABLE `mlf_old_materials_sold`
  ADD UNIQUE KEY `serial_number` (`serial_number`),
  ADD UNIQUE KEY `serial_number_2` (`serial_number`);

--
-- Indexes for table `mlf_roles`
--
ALTER TABLE `mlf_roles`
  ADD PRIMARY KEY (`roie_id`),
  ADD UNIQUE KEY `roie_id` (`roie_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `mlf_services`
--
ALTER TABLE `mlf_services`
  ADD PRIMARY KEY (`service_id`),
  ADD UNIQUE KEY `service_id` (`service_id`);

--
-- Indexes for table `mlf_transactions`
--
ALTER TABLE `mlf_transactions`
  ADD UNIQUE KEY `bill_number` (`transaction_id`);

--
-- Indexes for table `mlf_users`
--
ALTER TABLE `mlf_users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mlf_users_info`
--
ALTER TABLE `mlf_users_info`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mlf_users_roles`
--
ALTER TABLE `mlf_users_roles`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
