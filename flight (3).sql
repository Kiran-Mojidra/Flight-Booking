-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 01:48 AM
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
-- Database: `flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `ausername` varchar(15) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `ausername`, `emailid`, `password`, `fullname`) VALUES
(1, 'Kiran@87', 'kiran874@gmail.com', 'kiran@8467', 'Kiran Mojidra'),
(2, 'Tanvi@25', 'tanvi25@gmail.com', '123456789', 'Tanvi Dodiya');

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `id` int(11) NOT NULL,
  `airline_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`id`, `airline_name`) VALUES
(1, 'Air India'),
(2, 'IndiGo');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cid` int(11) NOT NULL,
  `cfname` varchar(15) NOT NULL,
  `clname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cmobile` text NOT NULL,
  `cmessage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cid`, `cfname`, `clname`, `email`, `cmobile`, `cmessage`) VALUES
(1, 'Harry', 'Potter', 'harry123@gmail.com', '9874563214', 'i can not log in into website');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `femailid` varchar(30) NOT NULL,
  `feedback_detail` varchar(50) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `fname`, `femailid`, `feedback_detail`, `rate`) VALUES
(1, 'Harry', 'harry123@gmail.com', 'Effortlessly book your next journey with our intui', 5),
(2, 'Tom Riddle', 'tom123@gmail.com', 'Simple, efficient, and hassle-free flight bookings', 3),
(7, 'Tom Riddle', 'tom1234@gmail.com', 'Your site is like a passport to convenience! Smoot', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `location` varchar(60) NOT NULL,
  `hotel_img` varchar(100) NOT NULL,
  `rooms_img` varchar(100) NOT NULL,
  `room_prize` float NOT NULL,
  `Luxary_prize` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hid`, `name`, `hotel_name`, `location`, `hotel_img`, `rooms_img`, `room_prize`, `Luxary_prize`) VALUES
(7, 'Goa', 'ITC Grand Goa', 'Arossim Beach Rd, Cansaulim, Goa 403712 ', 'goa1.jpg', 'goa_resort1.jpeg,goa_room1.jpg', 19445, 26344),
(8, 'Goa', 'Radisson Goa Candolim', ' Fort Aguada Road, Bammonvaddo, Candolim, 403515 Candolim', 'peakpx (34).jpg', 'Bed.jpg,Bed2.jpg', 7650, 11000),
(9, 'Goa', 'The Porto by lagom', 'Near Vagator Petrol Pump, Anjuna, Vagator 403509', 'goa3.jpg', 'peakpx (25).jpg,peakpx (26).jpg', 3556, 5625);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_cust_detail`
--

CREATE TABLE `hotel_cust_detail` (
  `uid` int(11) NOT NULL,
  `log_id` int(11) NOT NULL DEFAULT 5,
  `uname` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mono` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zcode` text NOT NULL,
  `hid` int(11) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `checkIn` datetime NOT NULL,
  `checkOut` datetime NOT NULL,
  `member` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `amount` float NOT NULL,
  `total_pay` float NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  `dt` datetime NOT NULL,
  `pay_status` varchar(20) NOT NULL DEFAULT 'pai',
  `refund` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_cust_detail`
--

INSERT INTO `hotel_cust_detail` (`uid`, `log_id`, `uname`, `email`, `mono`, `city`, `state`, `zcode`, `hid`, `hname`, `checkIn`, `checkOut`, `member`, `room`, `amount`, `total_pay`, `status`, `dt`, `pay_status`, `refund`) VALUES
(9, 5, 'Ron Vizali', 'ron123@gmail.com', '9874147528', 'Ahemdabad', 'GUJARAT', '380001', 8, 'Radisson Goa Candolim', '2024-04-10 00:00:00', '2024-04-12 00:00:00', 2, 1, 11000, 11000, 'approved', '2024-04-09 18:31:44', 'paid', 0),
(10, 5, 'Ron Vizali', 'ron123@gmail.com', '9874147528', 'Ahemdabad', 'GUJARAT', '380001', 7, 'ITC Grand Goa', '2024-04-10 00:00:00', '2024-04-12 00:00:00', 2, 1, 19445, 19445, 'approved', '2024-04-09 18:33:40', 'paid', 0),
(11, 5, 'Ron Vizali', 'ron123@gmail.com', '9874147528', 'Ahemdabad', 'GUJARAT', '380001', 7, 'ITC Grand Goa', '2024-04-13 00:00:00', '2024-04-15 00:00:00', 1, 1, 19445, 19445, 'approved', '2024-04-12 13:45:33', 'paid', 0),
(12, 5, 'Ron Vizali', 'ron123@gmail.com', '09874147528', 'Ahemdabad', 'GUJARAT', '380001', 8, 'Radisson Goa Candolim', '2024-05-03 00:00:00', '2024-05-08 00:00:00', 3, 1, 11000, 55000, 'pending', '2024-04-29 01:08:41', 'pai', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_pay`
--

CREATE TABLE `hotel_pay` (
  `book_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `card_no` int(200) NOT NULL,
  `card_holder_name` varchar(100) NOT NULL,
  `exp_month` int(4) NOT NULL,
  `exp_year` year(4) NOT NULL,
  `cvv` int(5) NOT NULL,
  `trans_amt` float NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_pay`
--

INSERT INTO `hotel_pay` (`book_id`, `u_id`, `h_id`, `card_no`, `card_holder_name`, `exp_month`, `exp_year`, `cvv`, `trans_amt`, `dt`) VALUES
(2, 10, 7, 8521, 'Ron j Vizali', 0, 2024, 987, 19445, '2024-04-09 18:34:03'),
(3, 10, 7, 7412, 'Ron j Vizali', 0, 2027, 789, 19445, '2024-04-12 13:46:21'),
(4, 12, 8, 7896, 'Voldmord K. Riddle', 0, 2027, 123, 55000, '2024-04-29 01:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `pass_details`
--

CREATE TABLE `pass_details` (
  `id` int(51) NOT NULL,
  `log_id` int(11) NOT NULL DEFAULT 1,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `pno` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `dplace` varchar(50) NOT NULL,
  `aplace` varchar(50) NOT NULL,
  `departure` date NOT NULL,
  `arrival` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `fno` int(11) NOT NULL,
  `prize` float NOT NULL,
  `seatno` varchar(50) NOT NULL,
  `class` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  `refund` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pass_details`
--

INSERT INTO `pass_details` (`id`, `log_id`, `fname`, `lname`, `dob`, `pno`, `email`, `dplace`, `aplace`, `departure`, `arrival`, `gender`, `fno`, `prize`, `seatno`, `class`, `status`, `refund`) VALUES
(34, 5, 'Half Blood', 'Prince', '1996-07-01', '987456321', 'half12@gmail.com', 'Ahmedabad, Gujarat', 'Surat, Gujarat', '2024-05-02', '0000-00-00', 'male', 1, 5000, '15A', 'economy', 'approved', 0),
(35, 5, 'Tom Riddle', 'Riddle', '2024-04-25', '09874563214', 'tom123@gmail.com', 'Ahmedabad, Gujarat ', 'Surat, Gujarat', '2024-05-01', '2024-05-08', 'male', 10, 4000, '19B', ' economy', 'pending', 0),
(36, 5, 'Roky John', 'John', '2024-05-09', '09428536759', 'rokyjohn051@gmail.com', 'Ahmedabad, Gujarat ', 'Surat, Gujarat', '2024-05-09', '0000-00-00', 'male', 1, 5000, '19B', ' economy', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `uid` int(11) NOT NULL DEFAULT 1,
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `card_holder_name` varchar(50) NOT NULL,
  `ccardnumber` int(12) NOT NULL,
  `expmonth` varchar(5) NOT NULL,
  `cvv` int(5) NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`uid`, `id`, `fid`, `card_holder_name`, `ccardnumber`, `expmonth`, `cvv`, `Amount`) VALUES
(1, 1, 1, 'Tom Riddle', 2147483647, '12/28', 852, 24000),
(1, 2, 1, 'Half Blood Prince', 2147483647, '12/28', 123, 5000),
(1, 3, 10, 'Tom Riddle', 1236547899, '12/28', 123, 4000),
(1, 4, 1, 'Tom Riddle', 1236547899, '12/28', 123, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `emailid`, `password`, `dt`) VALUES
(1, 'harry12', 'harry123@gmail.com', '$2y$10$YG6WkvLX5lBbWGgAZl', '2024-04-10 11:40:32'),
(2, 'ron12', 'ron123@gmail.com', '$2y$10$pcn0Ob1F/tdedHdoNn', '2024-04-10 11:42:36'),
(3, 'john12', 'john123@gmail.com', '$2y$10$DB.3xlcHuAmWoyuqJN', '2024-04-14 00:27:00'),
(4, 'tomriddle', 'tom12@gmail.com', '123456', '2024-04-14 00:35:56'),
(5, 'kdm', 'kdm54@gmail.com', '123456', '2024-04-14 01:22:51'),
(6, 'Voldmord', 'voldmord123@gmail.com', '123456789', '2024-04-28 23:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `fno` int(11) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `departure_place` varchar(40) NOT NULL,
  `arrival_place` varchar(40) NOT NULL,
  `prize` float NOT NULL,
  `prize2` float NOT NULL,
  `airline` varchar(50) NOT NULL DEFAULT 'Air India'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`fno`, `departure`, `arrival`, `departure_place`, `arrival_place`, `prize`, `prize2`, `airline`) VALUES
(1, '02:04:00', '05:07:00', 'Ahmedabad, Gujarat', 'Surat, Gujarat', 5000, 12000, 'Air India'),
(3, '10:12:00', '21:13:00', 'Rajkot, Gujarat', 'Tirupati, Andhra Pradesh', 10000, 30000, 'Air India'),
(4, '04:10:00', '20:15:00', 'Rajkot, Gujarat', 'Hyderabad, Telangana', 25000, 50000, 'Air India'),
(5, '02:27:00', '06:30:00', 'Mumbai, Maharashtra', 'Bhuj, Gujarat', 8000, 18000, 'Air India'),
(9, '02:35:00', '05:35:00', 'Surat, Gujarat', 'Ahmedabad, Gujarat', 2000, 5000, 'Air India'),
(10, '03:38:00', '05:41:00', 'Ahmedabad, Gujarat', 'Surat, Gujarat', 4000, 10000, 'Air India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `hotel_cust_detail`
--
ALTER TABLE `hotel_cust_detail`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `hotel_pay`
--
ALTER TABLE `hotel_pay`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `pass_details`
--
ALTER TABLE `pass_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_id` (`log_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`fno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotel_cust_detail`
--
ALTER TABLE `hotel_cust_detail`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hotel_pay`
--
ALTER TABLE `hotel_pay`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pass_details`
--
ALTER TABLE `pass_details`
  MODIFY `id` int(51) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `fno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel_cust_detail`
--
ALTER TABLE `hotel_cust_detail`
  ADD CONSTRAINT `hotel_cust_detail_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hotel` (`hid`);

--
-- Constraints for table `hotel_pay`
--
ALTER TABLE `hotel_pay`
  ADD CONSTRAINT `hotel_pay_ibfk_1` FOREIGN KEY (`h_id`) REFERENCES `hotel` (`hid`),
  ADD CONSTRAINT `hotel_pay_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `hotel_cust_detail` (`uid`);

--
-- Constraints for table `pass_details`
--
ALTER TABLE `pass_details`
  ADD CONSTRAINT `pass_details_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `register` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `register` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
