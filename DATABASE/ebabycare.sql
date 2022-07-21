-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 05:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebabycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `Id` int(11) NOT NULL,
  `Status` int(10) NOT NULL,
  `Pname` varchar(500) NOT NULL,
  `Uid` varchar(500) NOT NULL,
  `Adate` date NOT NULL,
  `Atime` time NOT NULL,
  `Reply` varchar(500) NOT NULL,
  `Utype` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`Id`, `Status`, `Pname`, `Uid`, `Adate`, `Atime`, `Reply`, `Utype`) VALUES
(1, 5, '1', 'sruthiks98@gmail.com', '2022-05-14', '10:00:00', 'Available.Contact me for further details', 'pediatrician'),
(4, 2, '5', 'krish@gmail.com', '2022-05-20', '10:00:00', 'Not available', 'nutrition'),
(5, 2, '5', 'nani@gmail.com', '2022-05-19', '11:00:00', 'Available', 'nutrition'),
(6, 2, '3', 'krish@gmail.com', '2022-05-20', '12:00:00', 'Available', 'babysitter'),
(10, 2, '11', 'wa@gmail.com', '2022-06-06', '10:00:00', 'Available Plaese come', 'pediatrician'),
(11, 2, '3', 'krish@gmail.com', '2022-06-24', '10:25:00', 'Available at that time', 'babysitter'),
(15, 2, '5', 'sruthiks98@gmail.com', '2022-06-25', '23:33:00', 'Available', 'nutrition'),
(16, 5, '12', 'shanu@gmail.com', '2022-06-24', '00:00:10', 'Have tablets of cipla', 'pediatrician'),
(17, 2, '8', 'rag@gmail.com', '2022-06-25', '12:11:00', 'Available at that time', 'nutrition'),
(18, 2, '8', 'sruthiks98@gmail.com', '2022-06-25', '11:20:00', 'Available', 'nutrition'),
(36, 8, '1', 'shanu@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician'),
(37, 1, '9', 'shanu@gmail.com', '2022-07-07', '00:00:00', '', 'nutrition'),
(38, 1, '14', 'sruthiks99@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician'),
(39, 0, '14', 'sruthiks99@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician'),
(40, 0, '14', 'sruthiks99@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician'),
(41, 0, '14', 'sruthiks99@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician'),
(42, 0, '14', 'sruthiks99@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician'),
(43, 0, '14', 'sruthiks99@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician'),
(44, 0, '14', 'sruthiks99@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician'),
(45, 0, '14', 'sruthiks99@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician'),
(46, 0, '14', 'sruthiks99@gmail.com', '2022-07-07', '00:00:01', '', 'pediatrician');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baby`
--

CREATE TABLE `tbl_baby` (
  `r_id` int(10) NOT NULL,
  `b_id` int(200) NOT NULL,
  `b_dob` date NOT NULL,
  `b_age` varchar(200) NOT NULL,
  `b_gender` varchar(200) NOT NULL,
  `b_name` varchar(200) NOT NULL,
  `b_relation` varchar(500) NOT NULL,
  `b_fname` varchar(200) NOT NULL,
  `b_mname` varchar(200) NOT NULL,
  `b_other` varchar(500) NOT NULL,
  `b_address` varchar(200) NOT NULL,
  `b_pob` varchar(100) NOT NULL,
  `b_hospital` varchar(100) NOT NULL,
  `b_weight` varchar(100) NOT NULL,
  `b_height` varchar(100) NOT NULL,
  `b_status` int(10) NOT NULL,
  `b_vacstatus` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_baby`
--

INSERT INTO `tbl_baby` (`r_id`, `b_id`, `b_dob`, `b_age`, `b_gender`, `b_name`, `b_relation`, `b_fname`, `b_mname`, `b_other`, `b_address`, `b_pob`, `b_hospital`, `b_weight`, `b_height`, `b_status`, `b_vacstatus`) VALUES
(1, 3, '2022-02-11', '0', 'male', 'Sibith', '', 'Siva K R', 'Baby V N', '', 'Kollam', 'Kollam', 'N S hospital', '3', '30', 1, '0'),
(5, 5, '2019-02-03', '3', 'female', 'Shivani', '', 'Raman', 'Sita', '', 'Ram home', 'Thrissur', 'H M hospital', '4', '30', 1, '0'),
(7, 6, '2020-02-09', '2', 'female', 'Shalini', '', 'Shivnand', 'Bahu', '', 'Kolkata', 'Thrissur', 'H M hospital', '5', '16', 1, '0'),
(6, 7, '2022-06-11', '0.5', 'male', 'Sruthan', '', 'Srarath', 'Saranya', '', 'Kollam', 'Kollam', 'G M hospital', '3', '30', 1, '0'),
(9, 8, '2021-02-04', '1', 'male', 'Raajath', '', 'Ragav', 'Rani', '', 'Kilikollor', 'Kollam', 'N S hospital', '3.5', '40', 1, '0'),
(10, 9, '2021-10-13', '0.4', 'male', 'Pratheesh', '', 'Krishnadas', 'Sheela', '', 'Thrissur', 'Thrissur', 'KK hospital', '4', '40', 1, '0'),
(10, 10, '2019-10-10', '1.5', 'male', 'Mahesh', '', 'Krishnadas', 'Sheela', '', 'Thrissur', 'Kochi', 'FM hospital', '4', '35', 1, '0'),
(10, 11, '2022-02-18', '0', 'male', 'Sruthi ks', '', 'Sruthi ks', 'Sruthi ks', '', 'Kizhakoot', 'Kottayam', 'FM hospital', '5', '30', 1, '0'),
(5, 12, '2022-02-18', '0.2', 'female', 'Drasan', '', 'Daison', 'Lilly', '', 'New york', 'Kochi', 'H M hospital', '2.1', '50', 1, '0'),
(1, 13, '2019-02-07', '3', 'male', 'Saman', '', 'Saran', 'Lilly', '', 'Mon home', 'Trivandrum', 'FM hospital', '5', '40', 1, '0'),
(7, 14, '2018-07-28', '4', 'female', 'Mily', '', 'Mathew', 'Sanu', '', 'Jammu', 'Jammu', 'Jammu hospital', '5', '16', 1, '1'),
(6, 15, '2017-07-28', '5', 'male', 'Muhammed', '', 'Sonu', 'Silsila', '', 'Kannur', 'Kannur', 'Kannur Gov Hospital', '3.5', '30', 1, '0'),
(11, 16, '2022-02-03', '99', 'female', 'Sadan', '', 'Saran', 'Mariam', '', 'Kollam', 'Kollam', 'H M hospital', '90', '9000', 0, '0'),
(1, 20, '2022-05-09', '0.2', 'male', 'Julia', 'Other', 'Sibith', 'Anuja', 'Aunty', 'Kizhakoot', 'Thrissur', 'FM hospital', '5', '35', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_babycare`
--

CREATE TABLE `tbl_babycare` (
  `babycare_id` int(11) NOT NULL,
  `babycare_name` varchar(200) NOT NULL,
  `babycare_des` varchar(700) NOT NULL,
  `babycare_img` varchar(500) NOT NULL,
  `babycare_status` int(10) NOT NULL,
  `Userid` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_babycare`
--

INSERT INTO `tbl_babycare` (`babycare_id`, `babycare_name`, `babycare_des`, `babycare_img`, `babycare_status`, `Userid`) VALUES
(8, 'Breastfeeding', 'Breastfeeding is important.Breastmilk provides all the energy and nutrients that the infant needs for the first months of life, and it continues to provide up to half or more of a child\'s .', 'babyfeed.jpg', 1, 'admin'),
(9, 'Swaddle', ' which works well for some babies during their first few weeks, is another soothing technique first-time parents should learn. Proper swaddling keeps a baby\'s arms close to the body while allowing for some movement of the legs.\r\n', 'swaddle.jpg', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_babysitter`
--

CREATE TABLE `tbl_babysitter` (
  `bbs_id` int(200) NOT NULL,
  `bbs_name` varchar(200) NOT NULL,
  `bbs_workmode` varchar(200) NOT NULL,
  `bbs_org` varchar(200) NOT NULL,
  `bbs_phn` varchar(200) NOT NULL,
  `bbs_email` varchar(200) NOT NULL,
  `bbs_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_babysitter`
--

INSERT INTO `tbl_babysitter` (`bbs_id`, `bbs_name`, `bbs_workmode`, `bbs_org`, `bbs_phn`, `bbs_email`, `bbs_status`) VALUES
(1, 'Dasan', 'own', 'Dasan clinic', '9827563891', 'dasan@gmail.com', 1),
(2, 'Sangu', 'government', 'SN Bhavandi hospital', '9827563800', 'san@gmail.com', 1),
(3, 'Asi Ali ', 'own', 'Personal', '9878787000', 'asi@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bappointment`
--

CREATE TABLE `tbl_bappointment` (
  `Id` int(10) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Bname` varchar(500) NOT NULL,
  `Uid` varchar(500) NOT NULL,
  `Afirstdate` date NOT NULL,
  `Alastdate` date NOT NULL,
  `Comment` varchar(500) NOT NULL,
  `Reply` varchar(500) NOT NULL,
  `Utype` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bappointment`
--

INSERT INTO `tbl_bappointment` (`Id`, `Status`, `Bname`, `Uid`, `Afirstdate`, `Alastdate`, `Comment`, `Reply`, `Utype`) VALUES
(1, '2', '3', 'sruthiks98@gmail.com', '2022-07-15', '2022-10-12', 'Will visit the child once a week', 'Ok', 'babysitter'),
(2, '', '1', 'sruthiks98@gmail.com', '2022-07-11', '2022-07-30', '', '', 'babysitter'),
(3, '', '3', 'sruthiks99@gmail.com', '2022-07-16', '2022-07-30', '', '', 'babysitter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_disease`
--

CREATE TABLE `tbl_disease` (
  `disease_id` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `des` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `disease_status` int(10) NOT NULL,
  `Userid` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_disease`
--

INSERT INTO `tbl_disease` (`disease_id`, `title`, `des`, `image`, `disease_status`, `Userid`) VALUES
(1, 'PolioA', 'PolioA is a common disease.Polio is an infectious disease caused by a virus that can spread from person to person and cause paralysis.', 'fn.jpg', 1, 'admin'),
(4, 'Scratch', 'Scratch is a disease.In most cases, children have a small sore on the skin where the cat scratch or bite occurred. This bump usually appears 1 to 2 weeks before the lymph nodes become swollen and can last for many weeks.', 'disease.jpg', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `r_id` int(100) NOT NULL,
  `f_date` date NOT NULL,
  `f_msg` varchar(100) NOT NULL,
  `f_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`r_id`, `f_date`, `f_msg`, `f_status`) VALUES
(5, '2022-02-22', 'This is a wonderful site', 1),
(1, '2022-02-23', 'I would like to know a pediatrician near me', 1),
(1, '2022-02-23', 'How are you', 1),
(1, '2022-02-25', 'This is a good site', 1),
(11, '2022-03-02', 'HELLO', 1),
(1, '2022-06-22', 'ds', 1),
(1, '2022-07-06', 'Good', 1),
(0, '2022-07-06', 'Nice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foodandnutrition`
--

CREATE TABLE `tbl_foodandnutrition` (
  `fn_id` int(100) NOT NULL,
  `fn_name` varchar(500) NOT NULL,
  `fn_des` varchar(500) NOT NULL,
  `fn_img` varchar(500) NOT NULL,
  `fn_status` int(10) NOT NULL,
  `Userid` varchar(100) NOT NULL,
  `fn_for` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_foodandnutrition`
--

INSERT INTO `tbl_foodandnutrition` (`fn_id`, `fn_name`, `fn_des`, `fn_img`, `fn_status`, `Userid`, `fn_for`) VALUES
(1, 'Baby milk', 'Mother\'s milk is the best thing for a baby, as with a still-developing immune system, she would best be able to digest her mother\'s milk. The World Health Organisation (WHO) also recommends and promotes breast milk as the ultimate nutrition for a baby.', 'about-img.jpg', 1, 'admin', 'baby'),
(2, 'Avacados', 'Avocados are a nutritional powerhouse for nursing moms. A common complaint is that moms are often very hungry due to the increased caloric demands of nursing, and they have very little time to prep and eat meals.', 'hd4.jpeg', 1, 'admin', 'mom'),
(4, 'Nuts', 'Another powerhouse of nutrition, nuts are high in essential minerals such as iron, calcium, and zinc as well as vitamin K and B vitamins. ', 'hd1.jpeg', 1, 'admin', 'mom'),
(6, 'Green Leafy vegetables', ' consuming more vegetables will only benefit your health while also establishing good eating habits for your baby to follow when they begin consuming solids around six months of age.', 'hd3.jpeg', 1, 'sruthiks98@gmail.com', 'mom'),
(7, 'sfd', 'ddssds', 'about-img.jpg', 1, 'sruthiks99@gmail.com', 'baby');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `l_id` int(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `role_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `l_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`l_id`, `uname`, `pwd`, `role_id`, `r_id`, `l_status`) VALUES
(1, 'sruthiks99@gmail.com', 'sruthi143', 1, 1, 1),
(2, 'admin@mail.com', 'admin', 0, 0, 0),
(6, 'shanu@gmail.com', 'shanu123', 1, 5, 1),
(7, 'sada@gmail.com', 'sada123', 1, 6, 1),
(8, 'wa@gmail.com', 'was123', 1, 7, 1),
(9, 'nani@gmail.com', 'nani123', 1, 8, 0),
(10, 'rag@gmail.com', 'rag123', 1, 9, 1),
(11, 'krish@gmail.com', 'krish123', 1, 10, 1),
(12, 'saran@gmail.com', 'saran123', 1, 11, 0),
(14, 'arvind@gmail.com', 'Appu', 2, 0, 1),
(16, 'arun@gmail.com', 'Arun@123', 3, 0, 1),
(17, 'asi@gmail.com', 'Asi@Ali123', 4, 0, 1),
(18, 'azna@gmail.com', 'Azna123', 2, 0, 1),
(19, 'dilsha@gmail.com', 'Dilsha123', 2, 0, 1),
(28, 'sangeethasathyan10@gmail.com', 'Sangeetha123', 3, 0, 1),
(29, 'sruthiks2022b@mca.ajce.in', 'Blesslee123', 3, 0, 1),
(30, 'aashik@gmail.com', '9003d1df22eb4d3820015070385194c8', 1, 12, 1),
(32, 'maya@gmail.com', '9003d1df22eb4d3820015070385194c8', 1, 14, 1),
(34, 'sruthiks98@gmail.com', 'Anil123', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nutritionist`
--

CREATE TABLE `tbl_nutritionist` (
  `nut_id` int(200) NOT NULL,
  `nut_name` varchar(200) NOT NULL,
  `nut_workmode` varchar(200) NOT NULL,
  `nut_org` varchar(200) NOT NULL,
  `nut_phn` varchar(200) NOT NULL,
  `nut_email` varchar(200) NOT NULL,
  `nut_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nutritionist`
--

INSERT INTO `tbl_nutritionist` (`nut_id`, `nut_name`, `nut_workmode`, `nut_org`, `nut_phn`, `nut_email`, `nut_status`) VALUES
(1, 'Sasi', 'own', 'FMN hospital', '8790654256', 'sasi@gmail.com', 1),
(2, 'Radhika', 'own', 'Radhika clinic', '7898765413', 'radu@gmail.com', 0),
(3, 'SaranyaA', 'ownS', 'Saran clinicA', '9876545000', 'saranya@gmail.com', 1),
(5, 'Arun S', 'government', 'Bm hospitalBBC', '987876000', 'arun@gmail.com', 1),
(8, 'Sangeetha', 'own', 'Sangu hospital', '7898765599', 'sangeethasathyan10@gmail.com', 1),
(9, 'Blesslee', 'own', 'FMN hospital', '9876549990', 'sruthiks2022b@mca.ajce.in', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `Id` int(11) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `Creditcard` varchar(100) NOT NULL,
  `Cvv` varchar(500) NOT NULL,
  `Amount` varchar(500) NOT NULL,
  `Expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`Id`, `Uid`, `Creditcard`, `Cvv`, `Amount`, `Expiry`) VALUES
(1, 'sruthiks98@gmail.com', '7878787987989089', '788', '200', '2033-06-04'),
(2, 'sruthiks98@gmail.com', '124435', '123', '200', '2022-06-23'),
(3, 'rag@gmail.com', '1345678238972903', '222', '200', '2022-06-25'),
(5, 'sruthiks98@gmail.com', '1111111111111111', '111', '200', '2022-06-30'),
(7, 'shanu@gmail.com', '7878787987989089', '789', '200', '2022-08-06'),
(8, 'sruthiks98@gmail.com', '1345678238972900', '677', '200', '2022-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pediatrician`
--

CREATE TABLE `tbl_pediatrician` (
  `ped_id` int(200) NOT NULL,
  `ped_name` varchar(200) NOT NULL,
  `ped_workmode` varchar(200) NOT NULL,
  `ped_org` varchar(200) NOT NULL,
  `ped_phn` varchar(200) NOT NULL,
  `ped_email` varchar(200) NOT NULL,
  `ped_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pediatrician`
--

INSERT INTO `tbl_pediatrician` (`ped_id`, `ped_name`, `ped_workmode`, `ped_org`, `ped_phn`, `ped_email`, `ped_status`) VALUES
(1, 'Appu Mohan', 'government', 'MGR hospitalABC', '7896542611', 'arvind@gmail.com', 1),
(11, 'Azna', 'government', 'Azna hospitalA', '7896542600', 'azna@gmail.com', 1),
(12, 'Dilsha', 'own', 'DnD Hospital', '7896540000', 'dilsha@gmail.com', 1),
(14, 'Anil', 'government', 'MG hospital', '8765353443', 'sruthiks98@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `r_id` int(100) NOT NULL,
  `r_name` varchar(200) NOT NULL,
  `r_lname` varchar(200) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r_dob` date NOT NULL,
  `r_gender` varchar(200) NOT NULL,
  `r_phone` varchar(200) NOT NULL,
  `r_email` varchar(200) NOT NULL,
  `r_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`r_id`, `r_name`, `r_lname`, `r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`, `r_status`) VALUES
(1, 'Sruthi', 'K S', 'Kizhakoot,Kollam,Kerala', '1994-10-12', 'female', '8281481676', 'sruthiks99@gmail.com', 1),
(5, 'Shanu', 'J', 'Delhi', '1995-03-16', 'male', '9865436789', 'shanu@gmail.com', 1),
(6, 'Sadanand', 'Sada', 'Hyderabad', '2010-12-21', 'male', '9845367542', 'sada@gmail.com', 1),
(7, 'Wasa', 'Rahul', 'Rahul', '2006-07-06', 'male', '9786546728', 'wa@gmail.com', 1),
(8, 'Nani', 'Raju', 'Huwaei', '2010-12-11', 'female', '8281481789', 'nani@gmail.com', 0),
(9, 'RagavA', 'Bharath', 'Bharath', '1985-07-11', 'male', '9878936892', 'rag@gmail.com', 1),
(10, 'KrishnadasA', 'KrishA', 'KrishA', '2010-12-12', 'female', '8276578001', 'krish@gmail.com', 1),
(11, 'Saran', 'Jason', 'Kilikollur', '2007-06-30', 'male', '8467890765', 'saran@gmail.com', 0),
(12, 'Aashik', 'Sreeram', 'Aashik bhavan', '2007-02-07', 'male', '8281481000', 'aashik@gmail.com', 1),
(13, 'Bensy', 'Benny', 'Bensy home, Global Nagar-473', '2010-12-05', 'female', '8281400000', 'bensy@gmail.com', 1),
(14, 'Maya', 'Mohini', 'Maya bhavan, Nagar-407', '2010-12-06', 'female', '7390284956', 'maya@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time`
--

CREATE TABLE `tbl_time` (
  `l_id` int(20) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `l_status` int(10) NOT NULL,
  `pd` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_time`
--

INSERT INTO `tbl_time` (`l_id`, `Time`, `l_status`, `pd`) VALUES
(7, '1pm-2pm', 0, 'sruthiks98@gmail.com'),
(8, '1-2pm', 0, 'arvind@gmail.com'),
(9, '10-11am', 1, 'sruthiks2022b@mca.ajce.in');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_token`
--

CREATE TABLE `tbl_token` (
  `Id` int(11) NOT NULL,
  `Token` varchar(500) NOT NULL,
  `Status` varchar(500) NOT NULL,
  `pd` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_token`
--

INSERT INTO `tbl_token` (`Id`, `Token`, `Status`, `pd`) VALUES
(7, '7', '1', 'azna@gmail.com'),
(11, '17', '1', 'arvind@gmail.com'),
(12, '5', '1', 'sruthiks2022b@mca.ajce.in'),
(13, '1', '1', 'sruthiks98@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaccination`
--

CREATE TABLE `tbl_vaccination` (
  `vac_id` int(200) NOT NULL,
  `vac_age` varchar(200) NOT NULL,
  `vac_des` varchar(500) NOT NULL,
  `vac_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vaccination`
--

INSERT INTO `tbl_vaccination` (`vac_id`, `vac_age`, `vac_des`, `vac_status`) VALUES
(8, 'Birth', 'BCG,Hep B1,OPV', 1),
(9, '6 weeks', 'DTwP/DTaP1,Hib-1,IPV-1,Hep B2,PCV 1,Rota-1', 1),
(11, '10 weeks', 'DTwP/DTaP2,Hib-2,IPV-2,Hep B3,PCV 2,Rota-2', 1),
(12, '14 weeks', 'DTwP/DTaP3,Hib-3,IPV-3,Hep B4,PCV 3,Rota-3', 1),
(13, '6 months', 'Influenza-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vachospital`
--

CREATE TABLE `tbl_vachospital` (
  `vac_id` int(10) NOT NULL,
  `babycare_id` int(11) NOT NULL,
  `babycare_name` varchar(200) NOT NULL,
  `babycare_des` varchar(700) NOT NULL,
  `babycare_img` varchar(500) NOT NULL,
  `babycare_status` int(10) NOT NULL,
  `Userid` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vachospital`
--

INSERT INTO `tbl_vachospital` (`vac_id`, `babycare_id`, `babycare_name`, `babycare_des`, `babycare_img`, `babycare_status`, `Userid`) VALUES
(8, 2, 'PATHANAMTHITTA', 'Monday', 'Govt Hospital Konni', 1, 'admin'),
(9, 3, 'PATHANAMTHITTA', 'Wednesday', 'Govt Hospital Ranni', 1, 'admin'),
(9, 4, 'IDUKKI', 'Wednesday', 'Fmn hospital', 1, 'admin'),
(13, 5, 'ALAPUZHA', 'Tuesday', 'NS hospital', 1, 'admin'),
(12, 6, 'IDUKKI', 'Tuesday', 'Aj hos', 1, 'admin'),
(8, 9, 'ERNAKULAM', 'Monday', 'FR hospital', 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_baby`
--
ALTER TABLE `tbl_baby`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_babycare`
--
ALTER TABLE `tbl_babycare`
  ADD PRIMARY KEY (`babycare_id`);

--
-- Indexes for table `tbl_babysitter`
--
ALTER TABLE `tbl_babysitter`
  ADD PRIMARY KEY (`bbs_id`);

--
-- Indexes for table `tbl_bappointment`
--
ALTER TABLE `tbl_bappointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_disease`
--
ALTER TABLE `tbl_disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `tbl_foodandnutrition`
--
ALTER TABLE `tbl_foodandnutrition`
  ADD PRIMARY KEY (`fn_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_nutritionist`
--
ALTER TABLE `tbl_nutritionist`
  ADD PRIMARY KEY (`nut_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_pediatrician`
--
ALTER TABLE `tbl_pediatrician`
  ADD PRIMARY KEY (`ped_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_time`
--
ALTER TABLE `tbl_time`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_token`
--
ALTER TABLE `tbl_token`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_vaccination`
--
ALTER TABLE `tbl_vaccination`
  ADD PRIMARY KEY (`vac_id`);

--
-- Indexes for table `tbl_vachospital`
--
ALTER TABLE `tbl_vachospital`
  ADD PRIMARY KEY (`babycare_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_baby`
--
ALTER TABLE `tbl_baby`
  MODIFY `b_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_babycare`
--
ALTER TABLE `tbl_babycare`
  MODIFY `babycare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_babysitter`
--
ALTER TABLE `tbl_babysitter`
  MODIFY `bbs_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_bappointment`
--
ALTER TABLE `tbl_bappointment`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_disease`
--
ALTER TABLE `tbl_disease`
  MODIFY `disease_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_foodandnutrition`
--
ALTER TABLE `tbl_foodandnutrition`
  MODIFY `fn_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_nutritionist`
--
ALTER TABLE `tbl_nutritionist`
  MODIFY `nut_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pediatrician`
--
ALTER TABLE `tbl_pediatrician`
  MODIFY `ped_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `r_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_time`
--
ALTER TABLE `tbl_time`
  MODIFY `l_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_token`
--
ALTER TABLE `tbl_token`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_vaccination`
--
ALTER TABLE `tbl_vaccination`
  MODIFY `vac_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_vachospital`
--
ALTER TABLE `tbl_vachospital`
  MODIFY `babycare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
