-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 02:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AuthorID`  VARCHAR(4)  NOT NULL,
  `firstName` VARCHAR(25) NOT NULL,
  `lastName`  VARCHAR(25) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `InvoiceNumb` MEDIUMINT(9) NOT NULL,
  `BillingDate` DATE         DEFAULT NULL,
  `Price`       MEDIUMINT(9) DEFAULT NULL,
  `Quantity`    MEDIUMINT(9) DEFAULT NULL,
  `ISBN`        VARCHAR(255) DEFAULT NULL,
  `StoreNum`    MEDIUMINT(9) DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN`          CHAR(13)   NOT NULL,
  `Bookshelf_Num` CHAR(4)     DEFAULT NULL,
  `PublisherID`   CHAR(4)     DEFAULT NULL,
  `Title`         VARCHAR(30) DEFAULT NULL,
  `Author ID`     VARCHAR(4) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `book_shelf`
--

CREATE TABLE `book_shelf` (
  `Bookshelf_Num` VARCHAR(3)  NOT NULL,
  `Category`      VARCHAR(15) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `book_store`
--

CREATE TABLE `book_store` (
  `StoreNum` VARCHAR(4)  NOT NULL,
  `Address`  VARCHAR(35) NOT NULL,
  `PhoneNum` VARCHAR(15) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` INT(4) NOT NULL,
  `Name`       VARCHAR(20)    DEFAULT NULL,
  `Address`    VARCHAR(25)    DEFAULT NULL,
  `PhoneNum`   CHAR(13)       DEFAULT NULL,
  `HiredDate`  DATE           DEFAULT NULL,
  `Pay_Rate`   DECIMAL(10, 2) DEFAULT NULL,
  `Position`   VARBINARY(10)  DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ISBN`     VARCHAR(13) NOT NULL,
  `Quantity` INT(5)      NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID`    INT(4) NOT NULL,
  `OrderDate`  DATE       DEFAULT NULL,
  `OrderTime`  VARCHAR(6) DEFAULT NULL,
  `SupplierID` INT(4)     DEFAULT NULL,
  `EmployeeID` INT(4)     DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `PublisherID` VARCHAR(4)  NOT NULL,
  `Name`        VARCHAR(20) NOT NULL,
  `Contact`     VARCHAR(20) NOT NULL,
  `PhoneNum`    VARCHAR(15) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SupplierID` INT(4)      NOT NULL,
  `Name`       VARCHAR(30) NOT NULL,
  `Address`    VARCHAR(35) NOT NULL,
  `PhoneNum`   VARCHAR(15) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthorID`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`InvoiceNumb`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `book_shelf`
--
ALTER TABLE `book_shelf`
  ADD PRIMARY KEY (`Bookshelf_Num`);

--
-- Indexes for table `book_store`
--
ALTER TABLE `book_store`
  ADD PRIMARY KEY (`StoreNum`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`PublisherID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupplierID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
