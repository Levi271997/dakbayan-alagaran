-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 13, 2021 at 08:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shamar`
--

-- --------------------------------------------------------

--
-- Table structure for table `access-level`
--

DROP TABLE IF EXISTS `access-level`;
CREATE TABLE IF NOT EXISTS `access-level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access-level`
--

INSERT INTO `access-level` (`id`, `position_name`) VALUES
(15, 'super admin'),
(14, 'admin'),
(13, 'staff'),
(12, 'coordinator'),
(11, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `authorize_user`
--

DROP TABLE IF EXISTS `authorize_user`;
CREATE TABLE IF NOT EXISTS `authorize_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `secret_question` text NOT NULL,
  `secret_answer` text NOT NULL,
  `contact_number` int(13) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `access_level_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorize_user`
--

INSERT INTO `authorize_user` (`id`, `last_name`, `first_name`, `middle_name`, `birthdate`, `secret_question`, `secret_answer`, `contact_number`, `email`, `username`, `password`, `access_level_id`) VALUES
(2, 'pagara', 'ricky', 'icayan', '1998-05-20', '', '', 935093551, 'pagararicky5@gmail.com', 'admin', 'admin123!', 5),
(3, 'Escalante', 'Shammy', 'B', '2021-11-27', 'a', 'a', 90909, 'a', 'a', 'a', 2),
(4, 'Abdul', 'Sean Paul', 'B', '2021-11-12', 'b', 'b', 9909, 'b', 'bb', 'b', 2);

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

DROP TABLE IF EXISTS `barangay`;
CREATE TABLE IF NOT EXISTS `barangay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_municipality_id` int(11) NOT NULL,
  `barangay_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id`, `city_municipality_id`, `barangay_name`) VALUES
(9, 26, 'lumbia'),
(8, 26, 'xavier heights');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` text NOT NULL,
  `province_ID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `province_ID`) VALUES
(1, 'CDO', 1),
(2, 'DAVAO', 2),
(3, 'Buenavista', 6),
(4, 'Butuan', 6),
(5, 'Cabadbaran', 6),
(6, 'Bayugan', 8),
(7, 'Bunawan', 8),
(8, 'Akbar', 9),
(9, 'Hadji Mohammad Ajul', 9),
(10, 'Baungon', 10),
(11, 'Cabanglasan', 10),
(12, 'Dangcagan', 10),
(13, 'Kalilangan', 10),
(14, 'Catarman', 11),
(15, 'Guinsiliban', 11),
(16, 'Alamada', 12),
(17, 'Antipas', 12),
(18, 'Bansalan', 13),
(19, 'Magsaysay', 13),
(20, 'Don Marcelino', 14),
(21, 'Santa Maria', 14),
(22, 'Balabagan', 15),
(23, 'Ditsaan-Ramain', 15),
(24, 'Alubijid', 16),
(25, 'Balingasag', 16),
(26, 'Cagayan de Oro', 16),
(27, 'Claveria', 16),
(28, 'Jasaan', 16),
(29, 'Lagonglong', 16),
(30, 'Manticao', 16),
(31, 'Talisayan', 16),
(32, 'Sugbongcogon', 16),
(33, 'Manticao', 16),
(34, 'Lugait', 16),
(35, 'Lagonglong', 16),
(36, 'Aloran', 17),
(37, 'Baliangao', 17),
(38, 'Calamba', 17),
(39, 'Clarin', 17),
(40, 'Concepcion', 17),
(41, 'Jimenez', 17),
(42, 'Plaridel', 17),
(43, 'Sapang Dalaga', 17),
(44, 'Sinacaban', 17),
(45, 'Tangub', 17);

-- --------------------------------------------------------

--
-- Table structure for table `familyrep`
--

DROP TABLE IF EXISTS `familyrep`;
CREATE TABLE IF NOT EXISTS `familyrep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `memberId` int(11) NOT NULL,
  `familyName` text NOT NULL,
  `Relationship` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familyrep`
--

INSERT INTO `familyrep` (`id`, `memberId`, `familyName`, `Relationship`) VALUES
(66, 102, 'jhonny bravo', 'mama');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

DROP TABLE IF EXISTS `province`;
CREATE TABLE IF NOT EXISTS `province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `province_name`) VALUES
(6, 'Agusan del Norte'),
(8, 'Agusan del Sur'),
(9, 'Basilan'),
(10, 'Bukidnon'),
(11, 'Camiguin'),
(12, 'Cotabato (North Cotabato)'),
(13, 'Davao del Sur'),
(14, 'Davao Occidental'),
(15, 'Lanao del Sur'),
(16, 'Misamis Oriental'),
(17, 'Misamis Occidental');

-- --------------------------------------------------------

--
-- Table structure for table `tblmember`
--

DROP TABLE IF EXISTS `tblmember`;
CREATE TABLE IF NOT EXISTS `tblmember` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(40) NOT NULL,
  `first_name` text NOT NULL,
  `mid_name` text NOT NULL,
  `province_id` int(11) NOT NULL,
  `city_municipality_id` int(11) NOT NULL,
  `barangay` int(11) NOT NULL,
  `zone` text,
  `street` text,
  `birthdate` date DEFAULT NULL,
  `age` int(4) DEFAULT NULL,
  `religion` text,
  `Contact_Number` int(14) DEFAULT NULL,
  `occupation` text,
  `civil_status` text,
  `Gender` text NOT NULL,
  `RefBy` text NOT NULL,
  `RefNumber` int(15) NOT NULL,
  `Coordinator` text NOT NULL,
  `coorNumber` int(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmember`
--

INSERT INTO `tblmember` (`id`, `last_name`, `first_name`, `mid_name`, `province_id`, `city_municipality_id`, `barangay`, `zone`, `street`, `birthdate`, `age`, `religion`, `Contact_Number`, `occupation`, `civil_status`, `Gender`, `RefBy`, `RefNumber`, `Coordinator`, `coorNumber`) VALUES
(106, 'lao xx', 'bonn ryan', 'D', 16, 16, 9, 'zone 2', ' mahogany street', '2021-12-02', 41, 'RC', 90909, 'web dev', 'S', 'male', 'Sir Lao', 909, '3', 90909),
(105, 'Odal dalo', 'Sean Paul', 'bruno', 16, 16, 8, ' NULL', '  NULL', '1994-11-01', 27, 'RC', 90909, 'web dev', 'M', 'male', 'Sir Lao', 909, '3', 90909),
(104, 'Pagara', 'Ricky', 'Icayan', 16, 16, 8, 'zone 2', ' sabalo street', '1998-05-20', 24, 'RC', 90901, 'web dev', 'S', 'male', 'Sir Lao', 909, '3', 90909);

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

DROP TABLE IF EXISTS `tblpayment`;
CREATE TABLE IF NOT EXISTS `tblpayment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paymentType` int(11) NOT NULL,
  `dateOfPayment` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `ForTheYear` text NOT NULL,
  `Remarks` text NOT NULL,
  `payee_Id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`id`, `paymentType`, `dateOfPayment`, `Amount`, `ForTheYear`, `Remarks`, `payee_Id`) VALUES
(56, 1, '2021-12-30', 500, '2021', 'paid', 106),
(55, 2, '2021-12-11', 100, '2021', 'paid', 106),
(54, 1, '2021-12-10', 200, '2021', 'Paid', 105),
(53, 2, '1998-12-10', 200, '2021', 'paid', 105),
(52, 2, '2021-12-11', 200, '2021', 'paid', 105),
(51, 2, '1998-12-10', 200, '2021', 'paid', 105),
(50, 2, '2021-12-11', 200, '2021', 'paid', 105),
(49, 2, '2021-12-10', 200, '2021', 'paid', 105),
(48, 2, '2021-12-11', 200, '2021', 'paind', 105);

-- --------------------------------------------------------

--
-- Table structure for table `tblsample`
--

DROP TABLE IF EXISTS `tblsample`;
CREATE TABLE IF NOT EXISTS `tblsample` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
