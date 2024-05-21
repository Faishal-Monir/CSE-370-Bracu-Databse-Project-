-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 10:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_id`) VALUES
(-1),
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `ID` int(10) NOT NULL,
  `Cost` int(11) DEFAULT NULL,
  `Coverage_area` varchar(30) DEFAULT NULL,
  `Admin_user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`ID`, `Cost`, `Coverage_area`, `Admin_user_id`) VALUES
(1, 1000, 'Badda', -1),
(2, 1500, 'Rampura', -1),
(3, 2000, 'Motijhil', -1),
(4, 3000, 'Mirpur', -1),
(5, 1200, 'Gulshan', -1),
(6, 1800, 'Dhanmondi', -1),
(7, 2500, 'Uttara', -1),
(8, 2800, 'Mohammadpur', -1),
(9, 1600, 'Banani', -1),
(10, 2200, 'Malibagh', -1),
(11, 2700, 'Khilgaon', -1),
(12, 3200, 'Puran Dhaka', -1),
(13, 1900, 'Tejgaon', -1),
(14, 2300, 'Farmgate', -1),
(15, 2600, 'Shyamoli', -1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Doc_id` int(10) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Admin_user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Doc_id`, `Status`, `Date`, `Time`, `Name`, `Admin_user_id`) VALUES
(11, 0, '2024-04-22', '09:00:00', 'Mr. Garcia', -1),
(12, 0, '2024-04-23', '10:00:00', 'Mrs. Kim', -1),
(13, 0, '2024-04-24', '11:00:00', 'Dr. Singh', -1),
(14, 0, '2024-04-25', '12:00:00', 'Ms. Davis', -1),
(15, 0, '2024-04-26', '13:00:00', 'Mr. Thompson', -1),
(16, 0, '2024-04-27', '14:00:00', 'Mr. Rodriguez', -1),
(17, 0, '2024-04-28', '15:00:00', 'Ms. Lee', -1),
(18, 0, '2024-04-29', '16:00:00', 'Mr. Patel', -1),
(19, 0, '2024-04-30', '17:00:00', 'Mrs. Nguyen', -1),
(20, 0, '2024-05-01', '18:00:00', 'Dr. Gonzales', -1),
(21, 0, '2024-05-02', '09:00:00', 'Ms. Martinez', -1),
(22, 0, '2024-05-03', '10:00:00', 'Mr. Wang', -1),
(23, 0, '2024-05-04', '11:00:00', 'Ms. Garcia', -1),
(24, 0, '2024-05-05', '12:00:00', 'Mrs. Kim', -1),
(25, 0, '2024-05-06', '13:00:00', 'Mr. Singh', -1),
(26, 0, '2024-05-07', '14:00:00', 'Ms. Davis', -1),
(27, 0, '2024-05-08', '15:00:00', 'Mr. Thompson', -1),
(28, 0, '2024-05-09', '16:00:00', 'Mrs. Rodriguez', -1),
(29, 0, '2024-05-10', '17:00:00', 'Dr. Lee', -1),
(30, 0, '2024-05-11', '18:00:00', 'Ms. Patel', -1);

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `User_id` int(10) NOT NULL,
  `mobile` char(15) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`User_id`, `mobile`, `user_email`, `password`) VALUES
(-1, '01709223015', 'faishal.monir@g.bracu.ac.bd', '1234'),
(1, '01712345678', 'Laura_0001@gmail.com', '1234'),
(2, '01723456789', 'Smith_0002@gmail.com', '1234'),
(3, '01734567890', 'Johnson_0003@gmail.com', '1234'),
(4, '01745678901', 'Rodriguez_0004@gmail.com', '1234'),
(5, '01756789012', 'Lee_0005@gmail.com', '1234'),
(6, '01767890123', 'Patel_0006@gmail.com', '1234'),
(7, '01778901234', 'Nguyen_0007@gmail.com', '1234'),
(8, '01789012345', 'Gonzales_0008@gmail.com', '1234'),
(9, '01790123456', 'Martinez_0009@gmail.com', '1234'),
(10, '01701234567', 'Wang_0010@gmail.com', '1234'),
(11, '01712345678', 'Garcia_0011@gmail.com', '1234'),
(12, '01723456789', 'Kim_0012@gmail.com', '1234'),
(13, '01734567890', 'Singh_0013@gmail.com', '1234'),
(14, '01745678901', 'Davis_0014@gmail.com', '1234'),
(15, '01756789012', 'Thompson_0015@gmail.com', '1234'),
(16, '01789012345', 'Rodriguez_0016@gmail.com', '1234'),
(17, '01790123456', 'Lee_0017@gmail.com', '1234'),
(18, '01701234567', 'Patel_0018@gmail.com', '1234'),
(19, '01712345678', 'Nguyen_0019@gmail.com', '1234'),
(20, '01723456789', 'Gonzales_0020@gmail.com', '1234'),
(21, '01734567890', 'Martinez_0021@gmail.com', '1234'),
(22, '01745678901', 'Wang_0022@gmail.com', '1234'),
(23, '01756789012', 'Garcia_0023@gmail.com', '1234'),
(24, '01767890123', 'Kim_0024@gmail.com', '1234'),
(25, '01778901234', 'Singh_0025@gmail.com', '1234'),
(26, '01789012345', 'Davis_0026@gmail.com', '1234'),
(27, '01790123456', 'Thompson_0027@gmail.com', '1234'),
(28, '01701234567', 'Rodriguez_0028@gmail.com', '1234'),
(29, '01712345678', 'Lee_0029@gmail.com', '1234'),
(30, '01723456789', 'Patel_0030@gmail.com', '1234'),
(31, '01734567890', 'Nguyen_0031@gmail.com', '1234'),
(32, '01745678901', 'Gonzales_0032@gmail.com', '1234'),
(33, '01756789012', 'Martinez_0033@gmail.com', '1234'),
(34, '01767890123', 'Wang_0034@gmail.com', '1234'),
(35, '01778901234', 'Garcia_0035@gmail.com', '1234'),
(36, '01789012345', 'Kim_0036@gmail.com', '1234'),
(37, '01790123456', 'Singh_0037@gmail.com', '1234'),
(38, '01701234567', 'Davis_0038@gmail.com', '1234'),
(39, '01712345678', 'Thompson_0039@gmail.com', '1234'),
(40, '01723456789', 'Rodriguez_0040@gmail.com', '1234'),
(41, '01734567890', 'Lee_0041@gmail.com', '1234'),
(42, '01745678901', 'Patel_0042@gmail.com', '1234'),
(43, '01756789012', 'Nguyen_0043@gmail.com', '1234'),
(44, '01767890123', 'Gonzales_0044@gmail.com', '1234'),
(45, '01778901234', 'Martinez_0045@gmail.com', '1234'),
(46, '01790123456', 'Wang_0046@gmail.com', '1234'),
(47, '01701234567', 'Garcia_0047@gmail.com', '1234'),
(48, '01712345678', 'Kim_0048@gmail.com', '1234'),
(49, '01723456789', 'Singh_0049@gmail.com', '1234'),
(50, '01734567890', 'Davis_0050@gmail.com', '1234'),
(51, '01745678901', 'Thompson_0051@gmail.com', '1234'),
(52, '01756789012', 'Rodriguez_0052@gmail.com', '1234'),
(53, '01767890123', 'Lee_0053@gmail.com', '1234'),
(54, '01778901234', 'Patel_0054@gmail.com', '1234'),
(55, '01789012345', 'Nguyen_0055@gmail.com', '1234'),
(56, '01790123456', 'Gonzales_0056@gmail.com', '1234'),
(57, '01701234567', 'Martinez_0057@gmail.com', '1234'),
(58, '01712345678', 'Wang_0058@gmail.com', '1234'),
(59, '01723456789', 'Garcia_0059@gmail.com', '1234'),
(60, '01734567890', 'Kim_0060@gmail.com', '1234'),
(61, '01745678901', 'Singh_0061@gmail.com', '1234'),
(62, '01756789012', 'Davis_0062@gmail.com', '1234'),
(63, '01767890123', 'Thompson_0063@gmail.com', '1234'),
(64, '01778901234', 'Rodriguez_0064@gmail.com', '1234'),
(65, '01789012345', 'Lee_0065@gmail.com', '1234'),
(66, '01790123456', 'Patel_0066@gmail.com', '1234'),
(67, '01701234567', 'Nguyen_0067@gmail.com', '1234'),
(68, '01712345678', 'Gonzales_0068@gmail.com', '1234'),
(69, '01723456789', 'Martinez_0069@gmail.com', '1234'),
(70, '01734567890', 'Wang_0070@gmail.com', '1234'),
(71, '01745678901', 'Garcia_0071@gmail.com', '1234'),
(72, '01756789012', 'Kim_0072@gmail.com', '1234'),
(73, '01767890123', 'Singh_0073@gmail.com', '1234'),
(74, '01778901234', 'Davis_0074@gmail.com', '1234'),
(75, '01789012345', 'Thompson_0075@gmail.com', '1234'),
(76, '01790123456', 'Rodriguez_0076@gmail.com', '1234'),
(77, '01701234567', 'Lee_0077@gmail.com', '1234'),
(78, '01712345678', 'Patel_0078@gmail.com', '1234'),
(79, '01723456789', 'Nguyen_0079@gmail.com', '1234'),
(80, '01734567890', 'Gonzales_0080@gmail.com', '1234'),
(81, '01745678901', 'Martinez_0081@gmail.com', '1234'),
(82, '01756789012', 'Wang_0082@gmail.com', '1234'),
(83, '01767890123', 'Garcia_0083@gmail.com', '1234'),
(84, '01778901234', 'Kim_0084@gmail.com', '1234'),
(85, '01789012345', 'Singh_0085@gmail.com', '1234'),
(86, '01790123456', 'Davis_0086@gmail.com', '1234'),
(87, '01701234567', 'Thompson_0087@gmail.com', '1234'),
(88, '01712345678', 'Rodriguez_0088@gmail.com', '1234'),
(89, '01723456789', 'Lee_0089@gmail.com', '1234'),
(90, '01734567890', 'Patel_0090@gmail.com', '1234'),
(91, '01745678901', 'Nguyen_0091@gmail.com', '1234'),
(92, '01756789012', 'Gonzales_0092@gmail.com', '1234'),
(93, '01767890123', 'Martinez_0093@gmail.com', '1234'),
(94, '01778901234', 'Wang_0094@gmail.com', '1234'),
(95, '01790123456', 'Garcia_0095@gmail.com', '1234'),
(96, '01701234567', 'Kim_0096@gmail.com', '1234'),
(97, '01712345678', 'Singh_0097@gmail.com', '1234'),
(98, '01723456789', 'Davis_0098@gmail.com', '1234'),
(99, '01734567890', 'Thompson_0099@gmail.com', '1234'),
(100, '01745678901', 'Rodriguez_0100@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `Blood_bank_id` int(10) NOT NULL,
  `Hospital_id` int(10) DEFAULT NULL,
  `Admin_user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`Blood_bank_id`, `Hospital_id`, `Admin_user_id`) VALUES
(1, 1, -1),
(2, 2, -1),
(3, 3, -1),
(4, 4, -1),
(5, 5, -1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `BloodBank_id` int(10) DEFAULT NULL,
  `Blood_groups` char(3) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`BloodBank_id`, `Blood_groups`, `Quantity`) VALUES
(1, 'A+', 0),
(1, 'A-', 0),
(1, 'B+', 0),
(1, 'B-', 0),
(1, 'AB+', 0),
(1, 'AB-', 0),
(1, 'O+', 0),
(1, 'O-', 0),
(2, 'A+', 0),
(2, 'A-', 0),
(2, 'B+', 0),
(2, 'B-', 0),
(2, 'AB+', 0),
(2, 'AB-', 0),
(2, 'O+', 0),
(2, 'O-', 0),
(3, 'A+', 0),
(3, 'A-', 0),
(3, 'B+', 0),
(3, 'B-', 0),
(3, 'AB+', 0),
(3, 'AB-', 0),
(3, 'O+', 0),
(3, 'O-', 0),
(4, 'A+', 0),
(4, 'A-', 0),
(4, 'B+', 0),
(4, 'B-', 0),
(4, 'AB+', 0),
(4, 'AB-', 0),
(4, 'O+', 0),
(4, 'O-', 0),
(5, 'A+', 0),
(5, 'A-', 0),
(5, 'B+', 0),
(5, 'B-', 0),
(5, 'AB+', 0),
(5, 'AB-', 0),
(5, 'O+', 0),
(5, 'O-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `User_id` int(10) NOT NULL,
  `Fee` int(11) DEFAULT NULL,
  `Specialization` varchar(50) DEFAULT NULL,
  `Admin_user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`User_id`, `Fee`, `Specialization`, `Admin_user_id`) VALUES
(11, 1000, 'Cardiology', -1),
(12, 1001, 'Pediatrics', -1),
(13, 1002, 'Oncology', -1),
(14, 1003, 'Dermatology', -1),
(15, 1004, 'Orthopedics', -1),
(16, 1005, 'Neurology', -1),
(17, 1006, 'Gynecology', -1),
(18, 1007, 'Psychiatry', -1),
(19, 1008, 'Endocrinology', -1),
(20, 1009, 'Pulmonology', -1),
(21, 1010, 'Urology', -1),
(22, 1011, 'Ophthalmology', -1),
(23, 1012, 'ENT', -1),
(24, 1013, 'Gastroenterology', -1),
(25, 1014, 'Hematology', -1),
(26, 1015, 'Rheumatology', -1),
(27, 1016, 'Nephrology', -1),
(28, 1017, 'Infectious Diseases', -1),
(29, 1018, 'Geriatrics', -1),
(30, 1019, 'Allergy & Immunology', -1);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Hospital_id` int(10) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Admin_user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`Hospital_id`, `Name`, `Admin_user_id`) VALUES
(1, 'Ibn Sina Health Care', -1),
(2, 'Apolo Health', -1),
(3, 'Care Hospital', -1),
(4, 'Central Hospital', -1),
(5, 'Medi Nova', -1);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_location`
--

CREATE TABLE `hospital_location` (
  `Hospital_id` int(10) NOT NULL,
  `Location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_location`
--

INSERT INTO `hospital_location` (`Hospital_id`, `Location`) VALUES
(1, 'Dhaka'),
(2, 'Chattogram'),
(3, 'Khulna'),
(4, 'Sylhet'),
(5, 'Rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `User_id` int(10) NOT NULL,
  `Bloodbank_id` int(10) DEFAULT NULL,
  `Admin_user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`User_id`, `Bloodbank_id`, `Admin_user_id`) VALUES
(71, NULL, -1),
(72, NULL, -1),
(73, NULL, -1),
(74, NULL, -1),
(75, NULL, -1),
(76, NULL, -1),
(77, NULL, -1),
(78, NULL, -1),
(79, NULL, -1),
(80, NULL, -1),
(81, NULL, -1),
(82, NULL, -1),
(83, NULL, -1),
(84, NULL, -1),
(85, NULL, -1),
(86, NULL, -1),
(87, NULL, -1),
(88, NULL, -1),
(89, NULL, -1),
(90, NULL, -1),
(91, NULL, -1),
(92, NULL, -1),
(93, NULL, -1),
(94, NULL, -1),
(95, NULL, -1),
(96, NULL, -1),
(97, NULL, -1),
(98, NULL, -1),
(99, NULL, -1),
(100, NULL, -1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `User_id` int(10) NOT NULL,
  `Disease` varchar(500) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Appointment_id` int(10) DEFAULT NULL,
  `Ambulance_id` int(10) DEFAULT NULL,
  `Bloodbank_id` int(10) DEFAULT NULL,
  `Admin_user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`User_id`, `Disease`, `Date`, `Appointment_id`, `Ambulance_id`, `Bloodbank_id`, `Admin_user_id`) VALUES
(31, 'Influenza', NULL, NULL, NULL, NULL, -1),
(32, 'Allergy', NULL, NULL, NULL, NULL, -1),
(33, 'Bronchitis', NULL, NULL, NULL, NULL, -1),
(34, 'Headache', NULL, NULL, NULL, NULL, -1),
(35, 'Common Cold', NULL, NULL, NULL, NULL, -1),
(36, 'Influenza', NULL, NULL, NULL, NULL, -1),
(37, 'Allergy', NULL, NULL, NULL, NULL, -1),
(38, 'Bronchitis', NULL, NULL, NULL, NULL, -1),
(39, 'Headache', NULL, NULL, NULL, NULL, -1),
(40, 'Common Cold', NULL, NULL, NULL, NULL, -1),
(41, 'Influenza', NULL, NULL, NULL, NULL, -1),
(42, 'Allergy', NULL, NULL, NULL, NULL, -1),
(43, 'Bronchitis', NULL, NULL, NULL, NULL, -1),
(44, 'Headache', NULL, NULL, NULL, NULL, -1),
(45, 'Common Cold', NULL, NULL, NULL, NULL, -1),
(46, 'Influenza', NULL, NULL, NULL, NULL, -1),
(47, 'Allergy', NULL, NULL, NULL, NULL, -1),
(48, 'Bronchitis', NULL, NULL, NULL, NULL, -1),
(49, 'Headache', NULL, NULL, NULL, NULL, -1),
(50, 'Common Cold', NULL, NULL, NULL, NULL, -1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `User_id` int(10) NOT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Supervisor_id` int(10) DEFAULT NULL,
  `Admin_user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`User_id`, `Salary`, `Supervisor_id`, `Admin_user_id`) VALUES
(51, 7200, NULL, -1),
(52, 5500, NULL, -1),
(53, 6300, NULL, -1),
(54, 8900, NULL, -1),
(55, 5200, NULL, -1),
(56, 9700, NULL, -1),
(57, 6100, NULL, -1),
(58, 7400, NULL, -1),
(59, 5000, NULL, -1),
(60, 8800, NULL, -1),
(61, 6700, NULL, -1),
(62, 5200, NULL, -1),
(63, 9500, NULL, -1),
(64, 7200, NULL, -1),
(65, 6000, NULL, -1),
(66, 7800, NULL, -1),
(67, 5400, NULL, -1),
(68, 8300, NULL, -1),
(69, 6900, NULL, -1),
(70, 5100, NULL, -1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `age`, `address`, `name`) VALUES
(-1, 24, '38/7 shekhertek', 'FAISHAL MONIR'),
(1, 46, '4/7 shekhertek', 'Mr.Laura'),
(2, 28, '123 Main St', 'Ms. Smith'),
(3, 35, '456 Elm St', 'Mr. Johnson'),
(4, 52, '789 Oak St', 'Mrs. Rodriguez'),
(5, 41, '321 Pine St', 'Dr. Lee'),
(6, 30, '555 Maple St', 'Mr. Patel'),
(7, 25, '777 Cedar St', 'Ms. Nguyen'),
(8, 48, '888 Walnut St', 'Mrs. Gonzales'),
(9, 37, '999 Birch St', 'Mr. Martinez'),
(10, 44, '1010 Chestnut St', 'Ms. Wang'),
(11, 32, '1111 Spruce St', 'Mr. Garcia'),
(12, 39, '1212 Ash St', 'Mrs. Kim'),
(13, 50, '1313 Willow St', 'Dr. Singh'),
(14, 27, '1414 Hickory St', 'Ms. Davis'),
(15, 36, '1515 Poplar St', 'Mr. Thompson'),
(16, 24, '1616 Cedar St', 'Mr. Rodriguez'),
(17, 46, '1717 Walnut St', 'Ms. Lee'),
(18, 28, '1818 Birch St', 'Mr. Patel'),
(19, 35, '1919 Maple St', 'Mrs. Nguyen'),
(20, 52, '2020 Pine St', 'Dr. Gonzales'),
(21, 41, '2121 Oak St', 'Ms. Martinez'),
(22, 30, '2222 Elm St', 'Mr. Wang'),
(23, 25, '2323 Main St', 'Ms. Garcia'),
(24, 48, '2424 Chestnut St', 'Mrs. Kim'),
(25, 37, '2525 Spruce St', 'Mr. Singh'),
(26, 44, '2626 Willow St', 'Ms. Davis'),
(27, 32, '2727 Hickory St', 'Mr. Thompson'),
(28, 39, '2828 Poplar St', 'Mrs. Rodriguez'),
(29, 50, '2929 Cedar St', 'Dr. Lee'),
(30, 27, '3030 Walnut St', 'Ms. Patel'),
(31, 36, '3131 Birch St', 'Mr. Nguyen'),
(32, 24, '3232 Maple St', 'Ms. Gonzales'),
(33, 46, '3333 Pine St', 'Mr. Martinez'),
(34, 28, '3434 Oak St', 'Mrs. Wang'),
(35, 35, '3535 Elm St', 'Dr. Garcia'),
(36, 52, '3636 Main St', 'Ms. Kim'),
(37, 41, '3737 Chestnut St', 'Mr. Singh'),
(38, 30, '3838 Spruce St', 'Ms. Davis'),
(39, 25, '3939 Willow St', 'Mr. Thompson'),
(40, 48, '4040 Hickory St', 'Mrs. Rodriguez'),
(41, 37, '4141 Poplar St', 'Mr. Lee'),
(42, 44, '4242 Cedar St', 'Ms. Patel'),
(43, 32, '4343 Walnut St', 'Mr. Nguyen'),
(44, 39, '4444 Birch St', 'Mrs. Gonzales'),
(45, 50, '4545 Maple St', 'Mr. Martinez'),
(46, 27, '4646 Pine St', 'Ms. Wang'),
(47, 36, '4747 Oak St', 'Mr. Garcia'),
(48, 24, '4848 Elm St', 'Mrs. Kim'),
(49, 46, '4949 Main St', 'Dr. Singh'),
(50, 28, '5050 Chestnut St', 'Ms. Davis'),
(51, 35, '5151 Spruce St', 'Mr. Thompson'),
(52, 52, '5252 Willow St', 'Ms. Rodriguez'),
(53, 41, '5353 Hickory St', 'Mr. Lee'),
(54, 30, '5454 Poplar St', 'Mrs. Patel'),
(55, 25, '5555 Cedar St', 'Mr. Nguyen'),
(56, 48, '5656 Walnut St', 'Ms. Gonzales'),
(57, 37, '5757 Birch St', 'Mr. Martinez'),
(58, 44, '5858 Maple St', 'Ms. Wang'),
(59, 32, '5959 Pine St', 'Mr. Garcia'),
(60, 39, '6060 Oak St', 'Mrs. Kim'),
(61, 50, '6161 Elm St', 'Dr. Singh'),
(62, 27, '6262 Main St', 'Ms. Davis'),
(63, 36, '6363 Chestnut St', 'Mr. Thompson'),
(64, 24, '6464 Spruce St', 'Ms. Rodriguez'),
(65, 46, '6565 Willow St', 'Mr. Lee'),
(66, 28, '6666 Hickory St', 'Ms. Patel'),
(67, 35, '6767 Poplar St', 'Mr. Nguyen'),
(68, 52, '6868 Cedar St', 'Mrs. Gonzales'),
(69, 41, '6969 Walnut St', 'Mr. Martinez'),
(70, 30, '7070 Birch St', 'Ms. Wang'),
(71, 25, '7171 Maple St', 'Mr. Garcia'),
(72, 48, '7272 Pine St', 'Ms. Kim'),
(73, 37, '7373 Oak St', 'Mr. Singh'),
(74, 44, '7474 Elm St', 'Mrs. Davis'),
(75, 32, '7575 Main St', 'Dr. Thompson'),
(76, 39, '7676 Chestnut St', 'Ms. Rodriguez'),
(77, 50, '7777 Spruce St', 'Mr. Lee'),
(78, 27, '7878 Willow St', 'Ms. Patel'),
(79, 36, '7979 Hickory St', 'Mr. Nguyen'),
(80, 24, '8080 Poplar St', 'Mrs. Gonzales'),
(81, 46, '8181 Cedar St', 'Mr. Martinez'),
(82, 28, '8282 Walnut St', 'Ms. Wang'),
(83, 35, '8383 Birch St', 'Mr. Garcia'),
(84, 52, '8484 Maple St', 'Ms. Kim'),
(85, 41, '8585 Pine St', 'Mr. Singh'),
(86, 30, '8686 Elm St', 'Ms. Davis'),
(87, 25, '8787 Main St', 'Mr. Thompson'),
(88, 48, '8888 Chestnut St', 'Mrs. Rodriguez'),
(89, 37, '8989 Spruce St', 'Mr. Lee'),
(90, 44, '9090 Willow St', 'Ms. Patel'),
(91, 32, '9191 Hickory St', 'Mr. Nguyen'),
(92, 39, '9292 Poplar St', 'Mrs. Gonzales'),
(93, 50, '9393 Cedar St', 'Mr. Martinez'),
(94, 27, '9494 Walnut St', 'Ms. Wang'),
(95, 36, '9595 Birch St', 'Mr. Garcia'),
(96, 24, '9696 Maple St', 'Ms. Kim'),
(97, 46, '9797 Pine St', 'Dr. Singh'),
(98, 28, '9898 Elm St', 'Mr. Davis'),
(99, 35, '9999 Main St', 'Mrs. Thompson'),
(100, 20, '3/7BADDA', 'MR.Rodriguez Bhai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Admin_user_id` (`Admin_user_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD KEY `Admin_user_id` (`Admin_user_id`),
  ADD KEY `Doc_id` (`Doc_id`);

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`Blood_bank_id`),
  ADD KEY `Admin_user_id` (`Admin_user_id`),
  ADD KEY `Hospital_id` (`Hospital_id`);

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD KEY `BloodBank_id` (`BloodBank_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `Admin_user_id` (`Admin_user_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`Hospital_id`),
  ADD KEY `Admin_user_id` (`Admin_user_id`);

--
-- Indexes for table `hospital_location`
--
ALTER TABLE `hospital_location`
  ADD PRIMARY KEY (`Hospital_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `Admin_user_id` (`Admin_user_id`),
  ADD KEY `Bloodbank_id` (`Bloodbank_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `Admin_user_id` (`Admin_user_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `Admin_user_id` (`Admin_user_id`),
  ADD KEY `Supervisor_id` (`Supervisor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD CONSTRAINT `ambulance_ibfk_1` FOREIGN KEY (`Admin_user_id`) REFERENCES `admin` (`User_id`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`Admin_user_id`) REFERENCES `admin` (`User_id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`Doc_id`) REFERENCES `doctor` (`User_id`);

--
-- Constraints for table `authentication`
--
ALTER TABLE `authentication`
  ADD CONSTRAINT `authentication_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD CONSTRAINT `bloodbank_ibfk_1` FOREIGN KEY (`Admin_user_id`) REFERENCES `admin` (`User_id`),
  ADD CONSTRAINT `bloodbank_ibfk_2` FOREIGN KEY (`Hospital_id`) REFERENCES `hospital` (`Hospital_id`);

--
-- Constraints for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD CONSTRAINT `blood_groups_ibfk_1` FOREIGN KEY (`BloodBank_id`) REFERENCES `bloodbank` (`Blood_bank_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`Admin_user_id`) REFERENCES `admin` (`User_id`);

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`Admin_user_id`) REFERENCES `admin` (`User_id`);

--
-- Constraints for table `hospital_location`
--
ALTER TABLE `hospital_location`
  ADD CONSTRAINT `hospital_location_ibfk_1` FOREIGN KEY (`Hospital_id`) REFERENCES `hospital` (`Hospital_id`);

--
-- Constraints for table `others`
--
ALTER TABLE `others`
  ADD CONSTRAINT `others_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `others_ibfk_2` FOREIGN KEY (`Admin_user_id`) REFERENCES `admin` (`User_id`),
  ADD CONSTRAINT `others_ibfk_3` FOREIGN KEY (`Bloodbank_id`) REFERENCES `bloodbank` (`Blood_bank_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`Admin_user_id`) REFERENCES `admin` (`User_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`Admin_user_id`) REFERENCES `admin` (`User_id`),
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`Supervisor_id`) REFERENCES `staff` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
