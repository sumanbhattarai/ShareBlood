-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 30, 2019 at 01:42 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SHAREBLOOD`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequests`
--

CREATE TABLE `bloodrequests` (
  `id` int(11) NOT NULL,
  `patient name` varchar(100) NOT NULL,
  `patient age` int(3) NOT NULL,
  `hospital name` varchar(200) NOT NULL,
  `hospital address` varchar(100) NOT NULL,
  `hospital telephone` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `blood group` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `pint` int(2) NOT NULL,
  `cause` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bloodrequests`
--

INSERT INTO `bloodrequests` (`id`, `patient name`, `patient age`, `hospital name`, `hospital address`, `hospital telephone`, `email`, `blood group`, `date`, `time`, `pint`, `cause`, `status`) VALUES
(1, 'Nibesh Thapa', 21, 'Chitwan Medical College ', 'State 3 - Chitwan - Bharatpur', 56596211, 'cmc@gmail.com', 'O-', '2019-08-31', '14:00:00', 2, 'Accident', 1),
(2, 'Sita Tamang', 32, 'Gandaki Medical College ', 'State 4 - Kaski - Pokhara', 56570053, 'gmc@gmail.com', 'B+', '2019-08-31', '12:00:00', 2, 'Pregancy', 1),
(3, 'Abiral Bhattarai', 21, 'Manipal Hospital ', 'State 4 - Kaski - Pokhara', 7645362711, 'manipal@gmail.com', 'A-', '2019-08-31', '07:00:00', 1, 'Brain Surgery', 1),
(4, 'Adrian Pradhan', 39, 'Chitwan Medical College ', 'State 3 - Chitwan - Bharatpur', 56596211, 'cmc@gmail.com', 'B-', '2019-09-01', '05:00:00', 3, 'Period Blood transfusion', 1),
(5, 'Abiral Murga', 36, 'Manipal Hospital ', 'State 4 - Kaski - Pokhara', 7645362711, 'manipal@gmail.com', 'B-', '2019-09-02', '17:00:00', 2, 'Pregnancy', 1),
(6, 'Test Case', 21, 'Chitwan Medical College ', 'State 3 - Chitwan - Bharatpur', 56596211, 'cmc@gmail.com', 'O+', '2019-08-31', '18:00:00', 3, 'sfdsf', 1),
(7, 'Someone Thapa', 32, 'Manipal Hospital ', 'State 4 - Kaski - Pokhara', 7645362711, 'manipal@gmail.com', 'B+', '2019-09-01', '14:00:00', 2, 'Operation , Accident', 1),
(8, 'Testing Only', 22, 'Gandaki Medical College ', 'State 4 - Kaski - Pokhara', 56570053, 'gmc@gmail.com', 'B+', '2019-08-31', '16:00:00', 2, 'Accident', 1),
(9, 'Bishwash Man', 23, 'Manipal Hospital ', 'State 4 - Kaski - Pokhara', 7645362711, 'manipal@gmail.com', 'A-', '2019-09-03', '15:00:00', 4, 'Accident', 1),
(10, 'Golden Sunil', 22, 'Manipal Hospital ', 'State 4 - Kaski - Pokhara', 7645362711, 'manipal@gmail.com', 'O-', '2019-08-31', '14:00:00', 2, 'Accident', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city / village`
--

CREATE TABLE `city / village` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city / village`
--

INSERT INTO `city / village` (`id`, `name`, `district_id`) VALUES
(1, 'Bhojpur', 1),
(2, 'Hatuwagadhi', 1),
(3, 'Ramprasad Rai', 1),
(4, 'Aamchok', 1),
(5, 'Tyamke Maiyunm', 1),
(6, 'Arun Gaunpalika', 1),
(7, 'Pauwadungma', 1),
(8, 'Salpasilichho', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `state_id`) VALUES
(1, 'Bhojpur', 1),
(2, 'Dhankuta', 1),
(3, 'Illam', 1),
(4, 'Jhapa', 1),
(5, 'Khotang', 1),
(6, 'Morang', 1),
(7, 'Okhaldhunga', 1),
(8, 'Panchthar', 1),
(9, 'Sankhuwasabha', 1),
(10, 'Solukhumbu', 1),
(11, 'Sunsari', 1),
(12, 'Taplejung', 1),
(13, 'Terathum', 1),
(14, 'Udaypur', 1),
(15, 'Bara', 2),
(16, 'Dhanusa', 2),
(17, 'Mahottari', 2),
(18, 'Parsa', 2),
(19, 'Rautahat', 2),
(20, 'Saptari', 2),
(21, 'Sarlahi', 2),
(22, 'Siraha', 2),
(23, 'Bhaktapur', 3),
(24, 'Chitwan', 3),
(25, 'Dhading', 3),
(26, 'Dolakha', 3),
(27, 'Kathmandu', 3),
(28, 'Kavrepalanchowk', 3),
(29, 'Lalitpur', 3),
(30, 'Makwanpur', 3),
(31, 'Nuwakot', 3),
(32, 'Ramechhap', 3),
(33, 'Rasuwa', 3),
(34, 'Sindhuli', 3),
(35, 'Sindhupalchowk', 3),
(36, 'Baglung', 4),
(37, 'Gorkha', 4),
(38, 'Kaski', 4),
(39, 'Lamjung', 4),
(40, 'Manang', 4),
(41, 'Mustang', 4),
(42, 'Myagdi', 4),
(43, 'Nawalpur', 4),
(44, 'Parbat', 4),
(45, 'Syangja', 4),
(46, 'Tanahun', 4),
(47, 'Arghakhanchi', 5),
(48, 'Banke', 5),
(49, 'Bardiya', 5),
(50, 'Dang', 5),
(51, 'Eastern Rukum', 5),
(52, 'Gulmi', 5),
(53, 'Kapilvastu', 5),
(54, 'Palpa', 5),
(55, 'Parasi', 5),
(56, 'Pyuthan', 5),
(57, 'Rolpa', 5),
(58, 'Rupandehi', 5),
(59, 'Dailekh', 6),
(60, 'Dolpa', 6),
(61, 'Humla', 6),
(62, 'Jajarkot', 6),
(63, 'Jumla', 6),
(64, 'Kalikot', 6),
(65, 'Mugu', 6),
(66, 'Salyan', 6),
(67, 'Surkhet', 6),
(68, 'Western Rukum', 6),
(69, 'Achham', 7),
(70, 'Baitadi', 7),
(71, 'Bajhang', 7),
(72, 'Bajura', 7),
(73, 'Dadeldhura', 7),
(74, 'Darchula', 7),
(75, 'Doti', 7),
(76, 'Kailali', 7),
(77, 'Kanchanpur', 7);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone number` varchar(10) NOT NULL,
  `state` int(1) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city / village` varchar(100) NOT NULL,
  `last donated` date DEFAULT NULL,
  `blood group` varchar(3) NOT NULL,
  `ability` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `phone number`, `state`, `district`, `city / village`, `last donated`, `blood group`, `ability`, `status`) VALUES
(1, 'Suman Bhattarai', '9845696211', 4, 'Kaski', 'Pokhara', '2019-05-12', 'AB+', 1, 1),
(2, 'Sujan Bhattarai', '9845949149', 4, 'Kaski', 'Pokhara', '2019-01-01', 'O+', 1, 1),
(3, 'Sujan Gunda', '9821101200', 4, 'Kaski', 'Pokhara', '2019-08-12', 'O-', 0, 1),
(4, 'Sandesh Shrestha', '9846273518', 4, 'Kaski', 'Pokhara', NULL, 'AB+', 1, 1),
(5, 'Nibesh Thapa', '9846274554', 3, 'Chitwan', 'Bharatpur', NULL, 'AB+', 1, 1),
(6, 'Suraj Shrestha', '9876543210', 3, 'Chitwan', 'Bharatpur', '2019-08-08', 'AB+', 0, 1),
(7, 'Devraj Acharya', '9876639393', 3, 'Chitwan', 'Bharatpur', NULL, 'AB+', 1, 1),
(8, 'Sujan Shah', '9896654357', 3, 'Chitwan', 'Bharatpur', NULL, 'AB+', 1, 1),
(9, 'Elope Tamang', '9845602746', 3, 'Chitwan', 'Bharatpur', '2019-08-09', 'AB+', 0, 1),
(10, 'Numit Malla', '9845911011', 3, 'Chitwan', 'Bharatpur', NULL, 'AB+', 1, 1),
(11, 'Rosan Regmi', '9898463425', 3, 'Chitwan', 'Bharatpur', NULL, 'AB+', 1, 1),
(12, 'Amit Shrestha', '9898463333', 3, 'Chitwan', 'Bharatpur', NULL, 'AB+', 1, 1),
(13, 'Sulav Shrestha', '9856092745', 3, 'Chitwan', 'Bharatpur', NULL, 'AB+', 1, 1),
(14, 'Post Malone', '9809198678', 4, 'Kaski', 'Pokhara', NULL, 'A-', 1, 1),
(15, 'Lurey Vai', '9800118274', 4, 'Kaski', 'Pokhara', NULL, 'B+', 1, 1),
(16, 'Test Test', '000000000', 4, 'Kaski', 'Pokhara', '2019-08-11', 'B-', 0, 1),
(17, 'Ed Sheeran', '8888888888', 4, 'Kaski', 'Pokhara', NULL, 'B-', 1, 1),
(18, 'Sandesh test', '9800011111', 4, 'Kaski', 'Pokhara', NULL, 'A+', 1, 1),
(19, 'Sunil Golden', '9846714514', 4, 'Kaski', 'Pokhara', '2019-08-14', 'A+', 0, 1),
(20, 'Bishweas Ojha', '9803414296', 4, 'Kaski', 'Pokhara', NULL, 'B+', 1, 1),
(21, 'Samir Poudel', '9846856367', 4, 'Kaski', 'Pokhara', '2019-08-14', 'A+', 0, 1),
(22, 'Shrinkhala Khatiwada', '9999999991', 4, 'Kaski', 'Pokhara', '2019-05-17', 'B-', 1, 1),
(23, 'Mohammed Rahim', '9811226767', 4, 'Kaski', 'Pokhara', '2019-08-30', 'O+', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `date`) VALUES
(1, '2019-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(16) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `state` int(1) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city / village` varchar(100) NOT NULL,
  `created date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `email`, `password`, `picture`, `telephone`, `state`, `district`, `city / village`, `created date`) VALUES
(1, 'Gandaki Medical College', 'gmc@gmail.com', 'gandaki', 'images/uploaded/1e4047370e45349bcce9ff5dcf432d46', '056570053', 4, 'Kaski', 'Pokhara', '2019-06-01 06:00:00'),
(2, 'Chitwan Medical College', 'cmc@gmail.com', 'chitwan', 'images/uploaded/99df9db0e7cc6a4bb48afdba4fc19d42', '056596211', 3, 'Chitwan', 'Bharatpur', '2019-07-15 07:00:00'),
(3, 'Manipal Hospital', 'manipal@gmail.com', 'manipal', 'images/uploaded/21c5f579b98ee238888805258ef3101f', '7645362711', 4, 'Kaski', 'Pokhara', '2019-08-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `HOSPITALS`
--

CREATE TABLE `HOSPITALS` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(16) NOT NULL,
  `PROFILEPICTURE` longblob NOT NULL,
  `COVERPICTURE` longblob NOT NULL,
  `TELEPHONE` int(10) NOT NULL,
  `STATE` int(1) NOT NULL,
  `DISTRICT` char(100) NOT NULL,
  `CITY` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`ID`, `EMAIL`, `PASSWORD`) VALUES
(1, 'gmc@gmail.com', 'gandaki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city / village`
--
ALTER TABLE `city / village`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HOSPITALS`
--
ALTER TABLE `HOSPITALS`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodrequests`
--
ALTER TABLE `bloodrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `city / village`
--
ALTER TABLE `city / village`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `HOSPITALS`
--
ALTER TABLE `HOSPITALS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
