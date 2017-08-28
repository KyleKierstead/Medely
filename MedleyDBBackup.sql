-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2016 at 03:41 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Medley`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Street_Ad` varchar(30) NOT NULL,
  `City` varchar(15) DEFAULT NULL,
  `State` varchar(15) DEFAULT NULL,
  `Zip` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Street_Ad`, `City`, `State`, `Zip`) VALUES
('', '', '', ''),
('1 Tatooine', '', 'MO', '63366'),
('123 Main St.', 'City', 'State', '74477'),
('2 Tattooine', 'City', 'State', '734737'),
('234324123 Street', 'osijf', 'mo', '43534134'),
('3 Tattoine', 'CIty', 'State', '73367'),
('387723 Street Address', 'Cities', 'Missouri', '743663'),
('413 Main Street', 'St. Louis', 'Missouri', '43212'),
('454 Address', 'Cityyy', 'Stateee', '63882772'),
('456 Jakku', 'Tattooine', 'Missourah', '63376'),
('475847 Address', 'Citiesss', 'Missourah', '74764'),
('4959435 Street', 'Citiessss', 'MO', '63663'),
('567 Address Ln', 'St. Louis', 'MO', '63101'),
('678 Address Lane', 'St. Louis', 'MO', '75555'),
('715 Forestwood Ln.', 'Ofallon', 'Missouri', '63366'),
('749 Street Address', 'City', 'Missourah', '746467'),
('7546 Addressss', 'Cities', 'Missourah', '74234254'),
('834098 Street Address', 'Cities', 'Florida', '8372482'),
('954395 streettt', 'cityyyy', 'IL', '23820'),
('Banana', '', '', ''),
('Fresh', '', '', ''),
('Jakuu', 'City', 'MO', '63366'),
('zz street', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_info`
--

CREATE TABLE `contractor_info` (
  `Gutters_ID` int(15) NOT NULL,
  `CParts_ID` int(15) DEFAULT NULL,
  `C_Tearoff` varchar(15) DEFAULT NULL,
  `C_Walkable` varchar(15) DEFAULT NULL,
  `C_Ins_Opt` varchar(15) DEFAULT NULL,
  `CSpecial_Instruct` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contractor_info`
--

INSERT INTO `contractor_info` (`Gutters_ID`, `CParts_ID`, `C_Tearoff`, `C_Walkable`, `C_Ins_Opt`, `CSpecial_Instruct`) VALUES
(1, 0, 'Repair', 'No', 'Yes', 'No'),
(2, 1, 'Tearoff', 'No', 'No', 'No'),
(3, 0, '', '', '', ''),
(4, 0, 'Repair', 'No', 'No', 'No'),
(5, 0, 'rer', 'dfadsaf', 'pdfsafdd', 'dsfds'),
(6, 0, 'asideljkljk', 'kljlkj', 'lkjklnjknjk', 'oijiojoij'),
(7, 0, 'Test', 'Test', 'Test', 'Test'),
(8, 0, 'lsdafk', 'akljfdklj', 'akjfklda', 'asldkjfklse'),
(9, 0, 'dalkdjf', 'aksdfkj', 'aksdjfknk', 'aksdjfksa'),
(10, 0, 'dakdsfkl', 'jakldsjfkal', 'sakjdfklj', 'askldfj'),
(11, 1, 'asdfkj', 'faskdfjk', 'askldjfk', 'aklsdjfas'),
(12, 2, 'akldfj', 'faskfjdkl', 'faskdfl', 'askdfjads'),
(13, 0, 'tear off', 'walkable', 'Yes', 'No'),
(14, 0, 'tearoff', 'walkable', 'No', 'Yes'),
(15, 1, 'Tearoff', 'No', 'Yes', 'No'),
(16, 2, '', '', '', ''),
(17, 3, '', '', '', ''),
(18, 4, NULL, NULL, NULL, NULL),
(19, 5, NULL, NULL, NULL, NULL),
(20, 6, 'Repair', 'Walkable', 'Yes', 'None'),
(21, 7, NULL, NULL, NULL, NULL),
(22, 8, NULL, NULL, NULL, NULL),
(23, 9, NULL, NULL, NULL, NULL),
(24, 10, NULL, NULL, NULL, NULL),
(25, 11, NULL, NULL, NULL, NULL),
(26, 12, NULL, NULL, NULL, NULL),
(27, 13, NULL, NULL, NULL, NULL),
(28, 14, NULL, NULL, NULL, NULL),
(29, 15, NULL, NULL, NULL, NULL),
(30, 16, 'Tearoff', 'No', 'Yes', 'None'),
(31, 17, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contractor_parts`
--

CREATE TABLE `contractor_parts` (
  `CPart_Num` int(15) NOT NULL,
  `CPart_Desc` varchar(300) DEFAULT NULL,
  `CPart_Price` decimal(6,2) DEFAULT NULL,
  `CPart_Cost` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contractor_parts`
--

INSERT INTO `contractor_parts` (`CPart_Num`, `CPart_Desc`, `CPart_Price`, `CPart_Cost`) VALUES
(1, '6" gutter(foot)', '6.05', '4.55'),
(2, '5" gutter(foot)', '4.32', '3.25'),
(3, '3x4 Down Spout(foot)', '4.72', '3.55'),
(4, '2x3 Down Spout(foot)', '4.32', '3.25'),
(5, 'tear off(foot)', '0.30', '0.30'),
(6, 'miters', '16.63', '12.50'),
(7, 'bay mitrus', '20.00', '15.00'),
(8, '1 Story Ladder Work(foot)', '0.30', '0.30'),
(9, '2 Story Ladder Work(foot)', '0.60', '0.60'),
(10, 'Custom Flashing(foot)', '2.66', '2.00'),
(11, 'Drain Tile Adapters', '7.00', '7.00'),
(12, '6" EZ Lock Screens(foot)', '3.20', '2.40'),
(13, 'Custom Bent Fascia(foot)', '6.65', '5.00'),
(14, 'Rhino Gaurd Covers 5"(foot)', '10.64', '8.00'),
(15, 'Rhino Gaurd Covers 6"(foot)', '11.97', '9.00'),
(16, 'Remove Re-install Existing Screens(foot)', '0.75', '0.75'),
(17, 'Clean Gutters(foot)', '1.00', '1.00'),
(18, 'Siding and Sable Vents', '133.00', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `contractor_parts_list`
--

CREATE TABLE `contractor_parts_list` (
  `CParts_ID` varchar(15) NOT NULL,
  `CPart_Num` varchar(15) NOT NULL,
  `CQuantity` int(11) DEFAULT NULL,
  `CCalQuanPrice` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contractor_parts_list`
--

INSERT INTO `contractor_parts_list` (`CParts_ID`, `CPart_Num`, `CQuantity`, `CCalQuanPrice`) VALUES
('', '10', 2, '5.32'),
('', '4', 3, '12.96'),
('', '71', 71, '71.00'),
('', '72', 72, '9576.00'),
('', '8', 8, '2.40'),
('', '9', 9, '5.40'),
('1', '12', 2, '6.40'),
('1', '2', 3, '12.96'),
('16', '4', 9, '38.88'),
('16', '7', 7, '140.00'),
('16', '8', 2, '0.60'),
('2', '19', 16, '96.80'),
('3', '13', 4, '26.60'),
('3', '2', 2, '8.64'),
('6', '1', 1, '6.05'),
('6', '17', 17, '17.00'),
('6', '18', 18, '2394.00'),
('6', '2', 2, '8.64');

-- --------------------------------------------------------

--
-- Table structure for table `cust_info`
--

CREATE TABLE `cust_info` (
  `Cust_ID` int(15) NOT NULL,
  `F_Name` varchar(30) DEFAULT NULL,
  `L_Name` varchar(30) DEFAULT NULL,
  `P_Phone` char(10) DEFAULT NULL,
  `SF_Name` varchar(30) DEFAULT NULL,
  `SL_Name` varchar(30) DEFAULT NULL,
  `S_Phone` char(10) DEFAULT NULL,
  `P_Email` varchar(30) DEFAULT NULL,
  `S_Email` varchar(30) DEFAULT NULL,
  `Street_Ad` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cust_info`
--

INSERT INTO `cust_info` (`Cust_ID`, `F_Name`, `L_Name`, `P_Phone`, `SF_Name`, `SL_Name`, `S_Phone`, `P_Email`, `S_Email`, `Street_Ad`) VALUES
(67, 'Brandon', 'Wilkerson', '6369807083', 'Hans', 'Solo', '1234567', 'brandonwilk763@gmail.com', 'brandon.wilkerson@apexit.net', '715 Forestwood Ln.'),
(80, 'Final', 'Test', '6367864576', 'Second', 'Name', '2842028484', 'testingemail@email.com', 'secondemail@email.com', '678 Address Lane'),
(84, 'Testing', 'User', '', '', '', '', '', '', '4959435 Street'),
(86, 'Kylo', 'Ren', '', '', '', '', '', '', '456 Jakku'),
(87, 'Brandon', 'Wilkerson', '', 'Second ', 'Lastname', '', '', '', '454 Address'),
(88, 'Testingggg', 'Userrrrr', '', '', '', '', '', '', '7546 Addressss'),
(89, 'Banana', '', '', '', '', '', '', '', 'Banannna'),
(90, 'zz', '', '', '', '', '', '', '', 'zz street'),
(91, 'ZZZ', 'Top', '', '', '', '', '', '', '475847 Address'),
(92, 'Fresh', '', '', '', '', '', '', '', 'Fresh Address'),
(93, 'Morning', 'Sunshine', '', '', '', '', '', '', ''),
(94, 'Morning', 'Sunshine', '', '', '', '', '', '', ''),
(95, 'Morning', 'User', '', '', '', '', '', '', ''),
(96, 'Morning', 'User', '', '', '', '', '', '', ''),
(97, 'Testing ', 'User', '', '', '', '', '', '', '749 Street Address'),
(98, 'Thisis ', 'Atest', '', '', '', '', '', '', '387723 Street Address'),
(100, '827134683278', '', '', '', '', '', '', '', ''),
(101, 'New ', 'Customer', '723647362', 'secondary', 'Name', '2398498', 'brandon@email.com', 'secondary@email.com', '834098 Street Address');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Cust_Job_ID` int(15) NOT NULL,
  `Cust_ID` int(15) DEFAULT NULL,
  `Job_ID` int(15) DEFAULT NULL,
  `Contract_ID` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Cust_Job_ID`, `Cust_ID`, `Job_ID`, `Contract_ID`) VALUES
(45, 0, 49, 5),
(49, 0, 53, 9),
(50, 0, 54, 10),
(51, 0, 55, 11),
(52, 0, 56, 12),
(53, 0, 57, 13),
(54, 0, 58, 14),
(17, 66, 20, NULL),
(18, 66, 21, NULL),
(19, 67, 22, NULL),
(20, 67, 23, NULL),
(26, 67, 30, NULL),
(28, 67, 31, NULL),
(24, 69, 27, NULL),
(25, 69, 29, NULL),
(27, 71, 30, NULL),
(29, 75, 32, NULL),
(30, 76, 33, NULL),
(31, 76, 34, NULL),
(32, 77, 35, NULL),
(33, 80, 36, NULL),
(34, 83, 37, NULL),
(39, 86, 42, NULL),
(40, 87, 43, 0),
(41, 88, 44, 1),
(42, 89, 45, 2),
(43, 90, 46, 3),
(44, 91, 47, 4),
(46, 92, 50, 6),
(47, 97, 51, 7),
(48, 98, 52, 8),
(55, 98, 59, 15),
(56, 101, 60, 16),
(57, 101, 61, 17);

-- --------------------------------------------------------

--
-- Table structure for table `job_info`
--

CREATE TABLE `job_info` (
  `Job_ID` int(15) NOT NULL,
  `Job_Street` varchar(30) DEFAULT NULL,
  `INs_opt` varchar(15) DEFAULT NULL,
  `Call_Before` varchar(15) DEFAULT NULL,
  `Pref_Time` varchar(15) DEFAULT NULL,
  `Comments` varchar(300) DEFAULT NULL,
  `Em_Rep` varchar(15) DEFAULT NULL,
  `Ins_Claim` varchar(15) DEFAULT NULL,
  `Tear_Rep` varchar(15) DEFAULT NULL,
  `Insp_StorDam` varchar(15) DEFAULT NULL,
  `Bid_Date` date DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `Comp_Date` date DEFAULT NULL,
  `Gutters_ID` int(15) DEFAULT NULL,
  `Stories` varchar(15) DEFAULT NULL,
  `Steep` varchar(15) DEFAULT NULL,
  `Sty_Acc` varchar(15) DEFAULT NULL,
  `Acc_How` varchar(15) DEFAULT NULL,
  `Parts_ID` int(15) DEFAULT NULL,
  `Job_Street_City` char(15) DEFAULT NULL,
  `Job_Street_State` char(10) DEFAULT NULL,
  `Job_Street_Zip` char(10) DEFAULT NULL,
  `Job_Status` varchar(15) DEFAULT NULL,
  `TotSQFT` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_info`
--

INSERT INTO `job_info` (`Job_ID`, `Job_Street`, `INs_opt`, `Call_Before`, `Pref_Time`, `Comments`, `Em_Rep`, `Ins_Claim`, `Tear_Rep`, `Insp_StorDam`, `Bid_Date`, `Start_Date`, `Comp_Date`, `Gutters_ID`, `Stories`, `Steep`, `Sty_Acc`, `Acc_How`, `Parts_ID`, `Job_Street_City`, `Job_Street_State`, `Job_Street_Zip`, `Job_Status`, `TotSQFT`) VALUES
(20, '123 Main St.', 'Yes', 'No', '12', 'Ahhhh', 'Yes', 'No', 'Tearoff', 'Nah', '2016-12-01', '2016-12-02', '2016-12-04', NULL, '2', 'Yes', 'No', 'NA', NULL, 'Ofallon', 'State', '63366', NULL, NULL),
(22, '3536 Lake Dr.', 'Yes', 'Yes', '11', 'None', 'Yes', 'Yes', 'Tearoff', 'Yes', '2016-12-07', '2016-12-09', '2016-12-17', NULL, '2', 'Yes', 'Yes', 'Ladder', NULL, 'Pontoon Beach', 'Missouri', '62040', NULL, NULL),
(27, '789 Address Lane', 'Yes', 'No', '12', 'None', 'None', 'Yes', 'Tearoff', 'No', '2016-12-09', '2016-12-10', '2016-12-11', NULL, '10', 'Yes', 'Yes', 'Ladder', NULL, 'St. Louis', 'MO', '63366', NULL, NULL),
(28, '1 University Blvd.', 'Yes', 'yes', '11', 'None', 'no', 'yes', 'repair', 'Yes', '2016-12-04', '2016-12-06', '2016-12-07', NULL, '12', 'Yes', 'Yes', 'Ladder', NULL, 'St. Louis', 'MO', '63366', NULL, NULL),
(29, 'Stree', 'Yes', 'No', '12', 'None', 'Yes', 'Yes', 'Tearoff', 'No', '2016-12-05', '2016-12-06', '2016-12-08', NULL, '12', 'Yes', 'None', 'Ladder', NULL, 'St. Louis', 'MO', '63366', NULL, NULL),
(30, '413 Main Street', 'no', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', NULL, 'St. Louis', 'Missouri', '', NULL, NULL),
(31, '', '', '', '', '', '', '', '', '', '2016-12-07', '2016-12-09', '2016-12-10', NULL, '', '', '', '', NULL, '', '', '', NULL, NULL),
(32, '', '', '', '', 'Commentsss', '', '', '', '', '2016-12-08', '2016-12-09', '2016-12-13', NULL, '', '', '', '', 0, '', 'State', '', NULL, NULL),
(33, '', '', '', '', 'Commentsss', '', '', '', '', '2016-12-08', '2016-12-09', '2016-12-14', NULL, '', '', '', '', 1, '', 'MO', '', NULL, NULL),
(34, '', '', '', '', '', '', '', 'Star Killer Bas', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', 2, '', '', '', NULL, NULL),
(35, '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', 3, '', '', '', NULL, NULL),
(36, '715 Forestwood', 'No', 'Yes', '11:00', 'Testing', 'Yes', 'No', 'Tearoff', 'No', '2016-12-09', '2016-12-10', '2016-12-11', NULL, '12', 'Yes', 'No', 'Ladder', 4, 'St. Charles', 'MO', '75577', NULL, NULL),
(37, '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', 5, '', 'mo', '', NULL, NULL),
(42, '567 Jakku', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', 6, 'St. Louis', 'Missourah', '63376', 'Completed', NULL),
(43, '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', 7, '', 'Stateee', '', 'Active', NULL),
(44, '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 14, '', '', '', '', 8, '', 'Missourah', '', '', NULL),
(45, '', '', '', '', 'Banana', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', 9, '', '', '', '', NULL),
(46, '', '', '', '', 'late night test', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 17, '', '', '', '', 10, '', '', '', '', NULL),
(47, '', '', '', '', 'Commentos', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', NULL, '', '', '', '', 11, '', 'Missourah', '', '', NULL),
(48, '', '', '', '', 'Late nightzzz', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 18, '', '', '', 'Ladderz', 12, '', '', '', '', NULL),
(49, '', '', '', '', 'comentasafsdf', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 19, '', '', '', '', 13, '', '', '', 'active', NULL),
(50, '', '', '', '', 'Fresh', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 20, '', '', '', '', 14, '', '', '', '', NULL),
(51, '', '', '', '', 'Comments', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 21, '', '', '', '', 15, '', 'Missourah', '', 'No', NULL),
(52, '726 Job Street', '', '', '', 'Commentssss', '', '', '', '', '2016-12-11', '2016-12-12', '2016-12-20', 22, '', '', '', '', 16, 'Job City', 'Missouri', '736367', 'Active', NULL),
(53, '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 23, '', '', '', '', 17, '', '', '', '', NULL),
(54, '123 New Street', 'None', 'No', '11:00', 'None', 'No', 'Yes', 'Tearoff', 'No', '2016-12-11', '2016-12-12', '2016-12-22', 24, '12', 'Yes', 'None', 'None', 18, 'New City', 'New State', '9837', 'Active', NULL),
(55, 'Fresh Job Street', '', '', '', '', '', '', '', '', '0000-00-00', '2016-12-01', '2016-12-03', 25, '', '', '', '', 19, 'Fresh Job City', 'Missouri', '733367', '', NULL),
(56, '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 26, '', '', '', 'Not Accessible', 20, '', '', '', 'Active', NULL),
(57, '652', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 27, '', '', '', 'Ladder', 21, 'St. Louis', 'California', '76637', 'Active', NULL),
(58, '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 28, '', 'Yes', 'None', 'Not accessible', 22, '', '', '', 'Active', NULL),
(59, 'New Street', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 29, '', '', '', 'Ladder', 23, 'Cities', 'States', '982374', 'Active', NULL),
(60, '29834 Job Street', 'Yes', 'Yes', '11', 'Comments', 'No', 'Yes', 'Tearoff', 'No', '2016-12-11', '2016-12-12', '2016-12-13', 30, '12', 'Yes', 'Yes', 'Ladder', 24, 'JobCity', 'Florida', '9283432', 'Active', NULL),
(61, '837 NewJobStreet', 'Yes', 'No', '12:00', 'None', 'Yes', 'Yes', 'Tearoff', 'No', '2016-12-11', '2016-12-12', '2016-12-15', 31, '12', 'Yes', 'No', 'Ladder', 25, 'JobStreetCity', 'JobState', '736882', 'Active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `Part_Num` int(15) NOT NULL,
  `Part_Desc` varchar(300) DEFAULT NULL,
  `Part_Price` decimal(6,2) DEFAULT NULL,
  `Part_Cost` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`Part_Num`, `Part_Desc`, `Part_Price`, `Part_Cost`) VALUES
(1, 'Tamko Heritage 30(sq foot)', '94.43', '71.00'),
(2, 'Tamko Heritage 50(sq foot)', '139.26', '104.71'),
(3, 'Tamko Elites(sq foot)', '81.13', '61.00'),
(4, 'Tamko 15 lb felt underlayment(roll)', '34.10', '25.64'),
(5, 'Tamko 30 lb felt underlayment(roll)', '66.50', '50.00'),
(6, 'Tamko Hip and Ridge(sq foot)', '144.87', '111.18'),
(7, 'Tamko Rapid Ridge Vent(roll)', '68.12', '51.22'),
(8, 'Carlisle ice and Water Shield(roll)', '62.51', '47.00'),
(9, '2" Lead Flashing 22 Degrees', '43.62', '32.80'),
(10, '3" Lead Flashing 22 Degrees', '38.60', '29.02'),
(11, '4" Lead Flashing 22 Degrees', '48.27', '36.29'),
(12, 'Broan XL vent', '56.35', '42.37'),
(14, '6" furnace cap', '26.04', '19.58'),
(15, '5" furnace cap', '22.26', '16.74'),
(17, '6" Roof Flang', '25.06', '18.84'),
(18, '5" Rain Collar', '6.18', '4.65'),
(19, '5" Roof Flang', '17.46', '13.13'),
(20, 'Tamko Awaplan(roll)', '100.60', '75.64'),
(21, 'Fiberglass Base Sheet(roll)', '50.59', '38.04'),
(22, '5 Gallon Modifliud Bitemen Adhsive', '61.35', '46.13'),
(23, 'Stup Flashing ', '0.33', '0.25'),
(24, '2.5" Roof Nails(box)', '64.29', '48.34'),
(25, 'Certain teed XT30(sq foot)', '83.79', '63.00'),
(26, 'Certain tub Landmark(sq foot)', '98.42', '74.00'),
(27, 'flintastic rolled roof(roll)', '120.91', '90.91'),
(28, 'Flintastic plubase(roll)', '138.55', '104.17'),
(29, 'Fluksal Caulk', '6.92', '5.20'),
(30, 'Trim Coil(roll)', '89.20', '67.07'),
(31, '5 Gal Bucket Plasic Cement', '44.78', '33.67'),
(32, 'drip edge(pc)', '4.64', '3.49'),
(33, 'toke slow', '3.64', '2.74'),
(34, 'Vielux Sole Skylight', '570.09', '0.00'),
(35, 'Vielux Flashing Kit', '137.52', '103.40'),
(36, 'Soil Stack Flashing', '7.61', '5.72');

-- --------------------------------------------------------

--
-- Table structure for table `parts_list`
--

CREATE TABLE `parts_list` (
  `Parts_ID` int(15) NOT NULL,
  `Part_Num` int(15) NOT NULL,
  `Quantity` decimal(6,2) DEFAULT NULL,
  `CalQuanPrice` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts_list`
--

INSERT INTO `parts_list` (`Parts_ID`, `Part_Num`, `Quantity`, `CalQuanPrice`) VALUES
(9, 1, '1.00', '94.43'),
(9, 2, '2.00', '278.52'),
(9, 3, '3.00', '243.39'),
(9, 4, '4.00', '136.40'),
(9, 5, '5.00', '332.50'),
(9, 6, '6.00', '89.22'),
(9, 7, '7.00', '476.84'),
(9, 8, '8.00', '500.08'),
(9, 9, '9.00', '392.58'),
(9, 10, '10.00', '386.00'),
(14, 1, '3.00', '283.29'),
(14, 5, '2.00', '133.00'),
(14, 8, '8.00', '500.08'),
(14, 23, '4.00', '1.32'),
(14, 28, '28.00', '3879.40'),
(24, 1, '6.00', '566.58'),
(24, 9, '7.00', '305.34'),
(24, 19, '6.00', '104.76');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Street_Ad`);

--
-- Indexes for table `contractor_info`
--
ALTER TABLE `contractor_info`
  ADD PRIMARY KEY (`Gutters_ID`),
  ADD KEY `FK` (`CParts_ID`);

--
-- Indexes for table `contractor_parts`
--
ALTER TABLE `contractor_parts`
  ADD PRIMARY KEY (`CPart_Num`);

--
-- Indexes for table `contractor_parts_list`
--
ALTER TABLE `contractor_parts_list`
  ADD PRIMARY KEY (`CParts_ID`,`CPart_Num`);

--
-- Indexes for table `cust_info`
--
ALTER TABLE `cust_info`
  ADD PRIMARY KEY (`Cust_ID`),
  ADD KEY `FK` (`Street_Ad`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Cust_Job_ID`),
  ADD KEY `FK` (`Cust_ID`,`Job_ID`,`Contract_ID`);

--
-- Indexes for table `job_info`
--
ALTER TABLE `job_info`
  ADD PRIMARY KEY (`Job_ID`),
  ADD KEY `FK` (`Gutters_ID`,`Parts_ID`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`Part_Num`);

--
-- Indexes for table `parts_list`
--
ALTER TABLE `parts_list`
  ADD PRIMARY KEY (`Parts_ID`,`Part_Num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractor_parts`
--
ALTER TABLE `contractor_parts`
  MODIFY `CPart_Num` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `cust_info`
--
ALTER TABLE `cust_info`
  MODIFY `Cust_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Cust_Job_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `job_info`
--
ALTER TABLE `job_info`
  MODIFY `Job_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `Part_Num` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
