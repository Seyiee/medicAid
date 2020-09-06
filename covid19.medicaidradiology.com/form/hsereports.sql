-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 03:51 PM
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
-- Database: `hsereports`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident`
--

CREATE TABLE `accident` (
  `id` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `employee_involved` varchar(200) NOT NULL,
  `incident` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `immediate_cause` text NOT NULL,
  `root_cause` varchar(50) NOT NULL,
  `contr_factor` varchar(50) NOT NULL,
  `recommendation` varchar(50) NOT NULL,
  `treatement_received` varchar(50) NOT NULL,
  `witness` varchar(50) NOT NULL,
  `ckl_rep_name` varchar(50) NOT NULL,
  `client_reps_name` varchar(50) NOT NULL,
  `safety_officer` varchar(50) NOT NULL,
  `reporter` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident`
--

INSERT INTO `accident` (`id`, `project_name`, `employee_involved`, `incident`, `date`, `location`, `result`, `description`, `immediate_cause`, `root_cause`, `contr_factor`, `recommendation`, `treatement_received`, `witness`, `ckl_rep_name`, `client_reps_name`, `safety_officer`, `reporter`, `pic`) VALUES
(1, 'Bilaal', 'James', 'Injury', '2020-07-12', 'Uyo', 'FACE', 'ererer\r\n                                ', '', ' wewe                        ', 'wewe\r\n                                ', 'wewewe\r\n                                ', 'wewewe\r\n                                ', 'Aserr', 'jui', 'ghhh', 'aserttt', 'Abasiodu Jonah', 'images/WhatsApp Image 2020-07-05 at 08.12.06.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `date_started` date NOT NULL,
  `activity` varchar(50) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `reporter` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `date_started`, `activity`, `project_name`, `reporter`) VALUES
(1, '2020-07-12', 'Crane Hire                          \r\n            ', 'Bilaal', 'Abasiodu Jonah');

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `challenges` varchar(50) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `reporter` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`id`, `date`, `challenges`, `project_name`, `reporter`) VALUES
(1, '2020-07-12', 'yy                              \r\n                ', 'Bilaal', 'Abasiodu Jonah');

-- --------------------------------------------------------

--
-- Table structure for table `daily_toolbox`
--

CREATE TABLE `daily_toolbox` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `topic` varchar(50) NOT NULL,
  `presenter` varchar(50) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `reporter` varchar(200) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `performance_report`
--

CREATE TABLE `performance_report` (
  `id` int(11) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `reporter` varchar(50) NOT NULL,
  `days_worked` int(11) NOT NULL,
  `hours_worked` int(11) NOT NULL,
  `man_power` int(11) NOT NULL,
  `toolbox_meets` int(11) NOT NULL,
  `pretask_meets` int(11) NOT NULL,
  `hse_meets` int(11) NOT NULL,
  `fatalities` int(11) NOT NULL,
  `lti` int(11) NOT NULL,
  `mtc` int(20) NOT NULL,
  `ltir` int(20) NOT NULL,
  `ltoir` int(20) NOT NULL,
  `fac` int(11) NOT NULL,
  `trir` int(11) NOT NULL,
  `near_miss` int(11) NOT NULL,
  `scc` int(11) NOT NULL,
  `safe_acts` int(11) NOT NULL,
  `safe_conditions` int(11) NOT NULL,
  `unsafe_acts` int(11) NOT NULL,
  `unsafe_condition` int(11) NOT NULL,
  `hsse_induction` int(11) NOT NULL,
  `hsse_training` int(11) NOT NULL,
  `major_fire` int(11) NOT NULL,
  `minor_fire` int(11) NOT NULL,
  `major_rti` int(11) NOT NULL,
  `minor_rti` int(11) NOT NULL,
  `property_damage` int(11) NOT NULL,
  `eri` int(11) NOT NULL,
  `cri` int(11) NOT NULL,
  `hsse_violations` int(11) NOT NULL,
  `theft_case` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance_report`
--

INSERT INTO `performance_report` (`id`, `project_name`, `location`, `reporter`, `days_worked`, `hours_worked`, `man_power`, `toolbox_meets`, `pretask_meets`, `hse_meets`, `fatalities`, `lti`, `mtc`, `ltir`, `ltoir`, `fac`, `trir`, `near_miss`, `scc`, `safe_acts`, `safe_conditions`, `unsafe_acts`, `unsafe_condition`, `hsse_induction`, `hsse_training`, `major_fire`, `minor_fire`, `major_rti`, `minor_rti`, `property_damage`, `eri`, `cri`, `hsse_violations`, `theft_case`, `date`) VALUES
(4, 'Bilaal', 'Uyo', 'Abasiodu Jonah', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-07-12'),
(5, 'Bilaal', 'Uyo', 'Abasiodu Jonah', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Kreator', 'Music', 'abasioduj@gmail.com', 'c8cc8a26309a3fe532d78280fbde46bc'),
(2, 'Kreator', 'Music', 'abasioduj@gmail.com', 'c8cc8a26309a3fe532d78280fbde46bc');

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

CREATE TABLE `weather` (
  `id` int(11) NOT NULL,
  `time` varchar(10) NOT NULL,
  `rain` varchar(10) NOT NULL,
  `duration` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `reporter` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`id`, `time`, `rain`, `duration`, `project_name`, `reporter`, `date`) VALUES
(1, 'AM', '1', 2, 'Bilaal', 'Abasiodu Jonah', '2020-07-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident`
--
ALTER TABLE `accident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_toolbox`
--
ALTER TABLE `daily_toolbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performance_report`
--
ALTER TABLE `performance_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weather`
--
ALTER TABLE `weather`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident`
--
ALTER TABLE `accident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `challenges`
--
ALTER TABLE `challenges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_toolbox`
--
ALTER TABLE `daily_toolbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `performance_report`
--
ALTER TABLE `performance_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `weather`
--
ALTER TABLE `weather`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
