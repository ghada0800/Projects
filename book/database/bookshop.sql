-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 10:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `pic`, `title`, `author`, `price`, `description`) VALUES
(1, 'images/agatha1.jpg', 'And Then There Were None', 'Agatha Christie', '7.50', 'And Then There Were None is a mystery novel by Queen of crimes/mystery Agatha Christie.\r\nIn the novel, a group of people all guilty of some past crimes or sins,\r\nwhich they escaped, are lured into an island and are killed one by one.'),
(2, 'images/sherlock.jpg', 'The complete sherlock holmes', 'Arthur Conan Doyle', '15.00', 'Written by Sir Arthur Conan Doyle between the years 1867 and 1927,\r\nthe legendary Sherlock Holmes employed his mastery of deductive reasoning\r\nand expert sleuthing to solve an array of complex and harrowing cases.\r\nFrom his home—221B Baker Street in London—the legendary Sherlock Holmes (accompanied by his loyal companion and chronicler, Dr. Watson)\r\nbaffled policemen and became famous worldwide for his remarkable observations and even more eccentric habits.'),
(3, 'images/harry.jpg', 'Harry Potter And The Sorcerers Stone', 'J.K. Rowling', '6.00', 'In this stunning new edition of Harry Potter and the Sorcerer\'s Stone, experience the story as never before.\r\nJ.K. Rowling\'s complete and unabridged text is accompanied by full-color illustrations on nearly every page and eight exclusive,\r\ninteractive paper craft elements : Readers will open Harry\'s Hogwarts letter, reveal the magical entryway to Diagon Alley,\r\nmake a sumptuous feast appear in the Great Hall, and more.'),
(4, 'images/room.jpg', 'Room on the broom', 'Julia; Sheffler, Axel Donaldson', '4.00', 'The New York Times bestselling Halloween picture book is now a board book! This rollicking,\r\nrhyming tale from master storyteller Julia Donaldson is the perfect Halloween read-aloud for the youngest listeners.\r\nA friendly witch, hungry dragon, and muddy monster learn about friendship, and readers will delight in the surprising (and not too scary) ending.'),
(5, 'images/cook.jpg', 'The basic type 2 diabetes cook pot', 'Yolanda Campbell', '10.00', 'In this cookbook, all the recipes use unprocessed or minimally processed foods that have been carefully selected,\r\nespecially for people with type 2 diabetes and those who want to lose weight effectively.\r\nIn this book, we not only provide some delicious recipes for diabetics, but also introduce some knowledge about diabetes prevention and treatment,\r\nso that you can live a happier life every day.'),
(6, 'images/arabic.jpg', 'مقدمة ابن خلدون', 'ابن خلدون', '15.00', 'كتاب العبر، وديوان المبتدأ والخبر، في أيام العرب والعجم والبربر، ومن عاصرهم من ذوي السلطان الأكبر.\r\nورتبه الإمام ابن خلدون رحمه الله على مقدمة وثلاثة كتب:\r\nيحتوى هذا الكتاب على مقدمة وستة أبواب، الباب الأول يتحدث عن العمران البشري والباب الثاني عن العمران البدوي وذكر القبائل والأمم الوحشية.\r\nأما الباب الثالث فخصص للدول والخلافة والملك وذكر المراتب السلطانية،\r\nوفي الباب الرابع تحدث عن العمران الحضري والبلدان والأمصار أما الباب الخامس فهو للصنائع والمعاش والكسب ووجوهه والباب السادس للعلوم واكتسابها وتعلمها.'),
(7, 'images/agatha2.jpg', 'The ABC Murders', 'Agatha Christie', '7.50', 'Thereís a serial killer on the loose, working his way through the alphabet and the whole country is in a state of panic. A is for Mrs. Ascher in Andover, B is for Betty Barnard in Bexhill, C is for Sir Carmichael Clarke in Churston.\r\nWith each murder, the killer is getting more confidentóbut leaving a trail of deliberate clues to taunt the proud Hercule Poirot\r\nmight just prove to be the first, and fatal, mistake.'),
(8, 'images/agatha3.jpg', 'Cards on the table', 'Agatha Christie', '7.50', 'In Agatha Christie\'s classic mystery, Cards on the Table, the wily Hercule Poirot is on the case when a bridge night turns deadly\r\nMr. Shaitana is famous as a flamboyant party host. Nevertheless, he is a man of whom everybody is a little afraid.\r\nSo when he boasts to Hercule Poirot that he considers murder an art form,\r\nthe detective has some reservations about accepting a party invitation to view Shaitana\'s \"private collection.\"');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `item_id`, `sub_total`, `total`) VALUES
(20, 2, '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `check_inf`
--

CREATE TABLE `check_inf` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `name_card` varchar(200) NOT NULL,
  `exp_month` int(11) NOT NULL,
  `exp_year` int(11) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `check_inf`
--

INSERT INTO `check_inf` (`id`, `full_name`, `email`, `address`, `city`, `name_card`, `exp_month`, `exp_year`, `cvv`) VALUES
(1, 'ghada', 'gha8912@gmail.com', 'uni-street', 'amman', 'ghada', 11, 2021, 111),
(2, 'ghada', 'gha8912@gmail.com', 'uni-street', 'amman', 'ghada', 11, 2021, 111);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_title` varchar(200) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `book_id`, `book_title`, `rate`, `comment`) VALUES
(33, 1, 'And Then There Were None', 4, 'i liked this book'),
(34, 1, 'And Then There Were None', 4, 'i_liked_this_book');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `pass`) VALUES
(3, 'hth', 'thtrh', 'gha8912@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_inf`
--
ALTER TABLE `check_inf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `check_inf`
--
ALTER TABLE `check_inf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
