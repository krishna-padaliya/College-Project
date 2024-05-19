-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 08:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `aid` int(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`aid`, `title`, `img`, `des`) VALUES
(1, 'VISION', 'about.jpg', 'Job portal is the most innovative job portal in India. Job portal has become a prominent name in the recruitment industry. The popularity of the portal is evident from the fact that it has crossed the 3.4 crore candidate landmark and has more than 3 lakh latest job vacancies from leading companies on the site.\r\n\r\nJob portal connects jobseekers and recruiters by accurately matching candidate profiles to the relevant job openings through an advanced 2-way matching technology. While most job portals only focus on getting candidates the next job, this portal focuses on the entire career growth of candidates. To this end, Shine has launched Shine Learning- India’s largest career skills site for working professionals with over 500+ courses & certifications.\r\n'),
(2, 'Mission', 'team.jpg', 'Our mission is works with renowned worldwide recruiters to handle the career development of high candidates from entry-level roles till retirement. We wish to assist recruiters and candidates in developing their skills and achieving their goals.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(20) NOT NULL,
  `a_nm` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_nm`, `password`) VALUES
(1, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(20) NOT NULL,
  `c_nm` varchar(20) NOT NULL,
  `c_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_nm`, `c_img`) VALUES
(1, 'Offline job', 'job.jpg'),
(2, 'Online job', 'ojob.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(20) NOT NULL,
  `f_nm` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_nm`, `email`, `city`, `subject`, `message`) VALUES
(1, 'ruchita', 'a@gmail.com', 'rajkot', 'job', ''),
(2, 'ruchita', 'a@gmail.com', 'rajkot', 'job', ''),
(3, 'aa', 'aa@gmail.com', 'aa', 'aa', ''),
(4, 'AA', 'AA', 'AA', 'AA', ''),
(5, 'aa', 'aa', 'aaa', 'aa', ''),
(6, 'aa', 'aa', 'aa', 'aa', 'aa'),
(7, 'aa', 'q@gmail.com', 'aa', 'a', 'a'),
(9, 'aa', 'aa@gmail.com', 'aa', 'aa', 'aa'),
(10, 'aa', 'aa', 'aa', 'aa', 'aa'),
(11, 'rutva', 'rutva@gmail.com', 'rajkot', 'jobes', 'best');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(20) NOT NULL,
  `s_id` int(20) NOT NULL,
  `p_nm` varchar(20) NOT NULL,
  `p_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `s_id`, `p_nm`, `p_image`) VALUES
(1, 1, 'PHP', 'php.jpg'),
(2, 1, 'JAVA', 'java.jpg'),
(3, 1, 'HTML', 'html.jpg'),
(4, 2, 'CSS & HTML', 'css.jpg'),
(5, 2, 'BOOTSTRAP', 'boot.jpg'),
(6, 2, 'PYTHON', 'python.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reg_form`
--

CREATE TABLE `reg_form` (
  `u_id` int(111) NOT NULL,
  `u_nm` varchar(111) NOT NULL,
  `u_lnm` varchar(111) NOT NULL,
  `password` varchar(222) NOT NULL,
  `cpwd` varchar(111) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(24) NOT NULL,
  `Address` varchar(222) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(25) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `ph_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_form`
--

INSERT INTO `reg_form` (`u_id`, `u_nm`, `u_lnm`, `password`, `cpwd`, `Dob`, `Gender`, `Address`, `City`, `State`, `Email`, `ph_no`) VALUES
(1, 'aa', 'aa', 'aa', 'aa', '0000-00-00', 'aa', 'aa', 'aa', 'aa', 'aa@gmial.com', 1223443456),
(2, 'rutva', 'rutva', 'sorathiya', 'aa', '0000-00-00', '16/5/2003', 'abc', 'abc', 'rajkot', 'a@gmail.com', 1544237895),
(3, 'abc', 'abc', 'abc', 'abc', '0000-00-00', '12/4/7007', 'abc', 'abc', 'abc', 'abc@gmail.com', 1234567898),
(4, 'bb', 'bb', 'bbb', 'bb', '0000-00-00', 'bbbbb', 'bbbbbb', 'bb', 'bbb', 'bb', 0),
(5, 'qq', 'qqq', 'q', 'qq', '0000-00-00', '23', 'q', 'q', 'q', 'q', 0),
(6, 'q', 'q', 'q', '123', '0000-00-00', 'q', 'q', 'qq', '', 'qqq', 0),
(7, 'xyz', 'x', 'y', 'xyz', '0000-00-00', 'z', 'x', 'y', 'z', 'x', 0),
(8, '', '', '', '', '0000-00-00', '16/5/2003', '', '', '', '', 0),
(9, '', '', '', '', '0000-00-00', '', '', '', '', '', 0),
(10, 'aa', 'aa', 'aaa', '', '0000-00-00', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `u_id` int(20) NOT NULL,
  `u_nm` varchar(20) NOT NULL,
  `f_nm` varchar(20) NOT NULL,
  `l_nm` varchar(20) NOT NULL,
  `Document` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`u_id`, `u_nm`, `f_nm`, `l_nm`, `Document`) VALUES
(1, 'aa', 'aa', 'a', ''),
(2, 'a', 'a', 'a', 'Database2.accdb'),
(3, 'rutva', 'sorathiya', 'rutva', 'Doc1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `c_id` int(20) NOT NULL,
  `s_id` int(20) NOT NULL,
  `s_nm` varchar(20) NOT NULL,
  `s_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`c_id`, `s_id`, `s_nm`, `s_img`) VALUES
(1, 1, 'full stack developer', 'job1.jpg'),
(2, 2, 'full stack developer', 'job2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `reg_form`
--
ALTER TABLE `reg_form`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reg_form`
--
ALTER TABLE `reg_form`
  MODIFY `u_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
