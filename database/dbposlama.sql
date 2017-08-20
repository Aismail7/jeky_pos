-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2014 at 10:28 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `as_accounts`
--

CREATE TABLE IF NOT EXISTS `as_accounts` (
  `accountID` int(11) NOT NULL AUTO_INCREMENT,
  `accountCode` varchar(10) NOT NULL,
  `accountName` varchar(50) NOT NULL,
  `accountStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`accountID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `as_accounts`
--

INSERT INTO `as_accounts` (`accountID`, `accountCode`, `accountName`, `accountStatus`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, '101', 'Biaya Sewa', 'Y', '2014-10-27 03:53:24', 1, '0000-00-00 00:00:00', 0),
(2, '102', 'Biaya Listrik', 'Y', '2014-10-27 03:53:36', 1, '2014-10-27 03:56:17', 1),
(3, '103', 'Biaya Gaji', 'Y', '2014-10-27 03:53:44', 1, '0000-00-00 00:00:00', 0),
(4, '104', 'Biaya Telepon', 'Y', '2014-10-27 03:54:41', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_barcodes`
--

CREATE TABLE IF NOT EXISTS `as_barcodes` (
  `barcodeID` int(11) NOT NULL AUTO_INCREMENT,
  `productBarcode` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`barcodeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `as_barcodes`
--

INSERT INTO `as_barcodes` (`barcodeID`, `productBarcode`, `qty`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(11, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(12, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(13, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(14, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(15, '2140912123601', 5, '2014-10-29 16:58:31', 1, '0000-00-00 00:00:00', 0),
(16, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(17, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(18, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(19, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(20, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(21, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(22, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(23, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(24, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0),
(25, '3212758009345', 10, '2014-10-29 16:58:38', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_brands`
--

CREATE TABLE IF NOT EXISTS `as_brands` (
  `brandID` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) NOT NULL,
  `brandStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`brandID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `as_brands`
--

INSERT INTO `as_brands` (`brandID`, `brandName`, `brandStatus`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(9, 'Sosro', 'Y', '2014-10-25 09:54:37', 1, '0000-00-00 00:00:00', 0),
(10, 'Aqua', 'Y', '2014-10-25 09:54:44', 1, '0000-00-00 00:00:00', 0),
(11, 'Gatsby', 'Y', '2014-10-25 09:54:50', 1, '0000-00-00 00:00:00', 0),
(12, 'Nivea', 'Y', '2014-10-25 09:54:56', 1, '0000-00-00 00:00:00', 0),
(13, 'Tango', 'Y', '2014-10-25 09:55:02', 1, '0000-00-00 00:00:00', 0),
(14, 'SunLight', 'Y', '2014-10-25 09:55:23', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_buy_detail_transactions`
--

CREATE TABLE IF NOT EXISTS `as_buy_detail_transactions` (
  `detailID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceBuyID` varchar(16) NOT NULL,
  `productBarcode` varchar(16) NOT NULL,
  `detailBuyPrice` int(11) NOT NULL,
  `detailBuyQty` int(11) NOT NULL,
  `detailBuySubtotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserId` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`detailID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `as_buy_detail_transactions`
--

INSERT INTO `as_buy_detail_transactions` (`detailID`, `invoiceBuyID`, `productBarcode`, `detailBuyPrice`, `detailBuyQty`, `detailBuySubtotal`, `createdDate`, `createdUserId`, `modifiedDate`, `modifiedUserID`) VALUES
(3, 'BJSH141025113296', '3212758009345', 4500, 5, 22500, '2014-10-25 23:32:23', 1, '2014-10-25 23:32:51', 1),
(5, 'BJSH141025113296', '2140912123601', 11990, 10, 119900, '2014-10-25 23:32:58', 1, '2014-10-25 23:33:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `as_buy_transactions`
--

CREATE TABLE IF NOT EXISTS `as_buy_transactions` (
  `trxID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceBuyID` varchar(16) NOT NULL,
  `invoiceSupplier` varchar(50) NOT NULL,
  `supplierID` varchar(10) NOT NULL,
  `trxFullName` varchar(100) NOT NULL,
  `trxAddress` text NOT NULL,
  `trxPhone` varchar(20) NOT NULL,
  `trxDate` date NOT NULL,
  `trxSubtotal` int(11) NOT NULL,
  `trxDiscount` int(11) NOT NULL,
  `trxTotal` int(11) NOT NULL,
  `trxDP` int(11) NOT NULL,
  `trxStatus` char(1) NOT NULL,
  `trxTerminDate` date NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`trxID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `as_buy_transactions`
--

INSERT INTO `as_buy_transactions` (`trxID`, `invoiceBuyID`, `invoiceSupplier`, `supplierID`, `trxFullName`, `trxAddress`, `trxPhone`, `trxDate`, `trxSubtotal`, `trxDiscount`, `trxTotal`, `trxDP`, `trxStatus`, `trxTerminDate`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'BJSH141025113296', '45734578475847874', '0001', 'OT Group', 'Jakarta Pusat', '(021) 73263267', '2014-10-25', 142400, 0, 142400, 0, '2', '2014-11-25', '2014-10-25 23:33:28', 1, '2014-10-25 23:37:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `as_categories`
--

CREATE TABLE IF NOT EXISTS `as_categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(100) NOT NULL,
  `categoryStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `as_categories`
--

INSERT INTO `as_categories` (`categoryID`, `categoryName`, `categoryStatus`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(8, 'Alat Kecantikan', 'Y', '2014-10-25 08:41:42', 1, '0000-00-00 00:00:00', 0),
(9, 'Perlengkapan Bayi', 'Y', '2014-10-25 08:41:51', 1, '0000-00-00 00:00:00', 0),
(10, 'Minyak Wangi', 'Y', '2014-10-25 08:42:07', 1, '0000-00-00 00:00:00', 0),
(11, 'Minuman', 'Y', '2014-10-25 08:42:15', 1, '0000-00-00 00:00:00', 0),
(12, 'Buku dan Majalah', 'Y', '2014-10-25 08:42:21', 1, '0000-00-00 00:00:00', 0),
(13, 'Makanan Ringan', 'Y', '2014-10-25 08:42:57', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_debts`
--

CREATE TABLE IF NOT EXISTS `as_debts` (
  `debtID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceID` varchar(20) NOT NULL,
  `status` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`debtID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `as_debts`
--

INSERT INTO `as_debts` (`debtID`, `invoiceID`, `status`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'PXDG141025064434', '1', '2014-10-25 23:29:30', 1, '0000-00-00 00:00:00', 0),
(4, 'BJSH141025113296', '1', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_debts_payment`
--

CREATE TABLE IF NOT EXISTS `as_debts_payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `debtID` int(11) NOT NULL,
  `debtDate` date NOT NULL,
  `debtPay` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `as_funds`
--

CREATE TABLE IF NOT EXISTS `as_funds` (
  `fundID` int(11) NOT NULL AUTO_INCREMENT,
  `accountID` int(11) NOT NULL,
  `fundDate` date NOT NULL,
  `fundAmount` int(11) NOT NULL,
  `fundNote` varchar(150) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserId` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`fundID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `as_funds`
--

INSERT INTO `as_funds` (`fundID`, `accountID`, `fundDate`, `fundAmount`, `fundNote`, `createdDate`, `createdUserId`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 1, '2014-10-27', 5000000, 'Biaya Sewa Bulan Oktober 2014', '2014-10-27 04:25:06', 1, '0000-00-00 00:00:00', 0),
(2, 3, '2014-10-27', 5000000, 'Biaya Gaji Staff Oktober 2014', '2014-10-27 04:27:09', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_identity`
--

CREATE TABLE IF NOT EXISTS `as_identity` (
  `identityID` int(11) NOT NULL AUTO_INCREMENT,
  `identityName` varchar(100) NOT NULL,
  `identityAddress` varchar(200) NOT NULL,
  `identityPhone` varchar(20) NOT NULL,
  `identityEmail` varchar(100) NOT NULL,
  `identityImage` text NOT NULL,
  `identityOwner` varchar(100) NOT NULL,
  `identityOwnerPhone` varchar(20) NOT NULL,
  `identityPPN` varchar(10) NOT NULL,
  `identityPrintSale` int(11) NOT NULL,
  `identityPrintBuy` int(11) NOT NULL,
  `identityPrintRetur` int(11) NOT NULL,
  `identityPrintDebt` int(11) NOT NULL,
  `identityPrintReceive` int(11) NOT NULL,
  `identityPrintReport` int(11) NOT NULL,
  `identityNPWP` varchar(50) NOT NULL,
  `identityPKP` varchar(50) NOT NULL,
  `identityPKPDate` date NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`identityID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `as_identity`
--

INSERT INTO `as_identity` (`identityID`, `identityName`, `identityAddress`, `identityPhone`, `identityEmail`, `identityImage`, `identityOwner`, `identityOwnerPhone`, `identityPPN`, `identityPrintSale`, `identityPrintBuy`, `identityPrintRetur`, `identityPrintDebt`, `identityPrintReceive`, `identityPrintReport`, `identityNPWP`, `identityPKP`, `identityPKPDate`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'CV. ASFA Solution', 'Jl. Pegadaian No. 38 Arjawinangun - Cirebon 45162 Indonesia', '(0231) 358630', 'takehikoboyz@gmail.com', 'pj_141025033647_Logo.jpg', 'Agus Saputra, S.Kom.', '(0231) 358630', '10', 1, 1, 1, 1, 1, 1, '434893748987794', '93485948594859489', '2013-02-16', '2014-10-25 19:25:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `as_members`
--

CREATE TABLE IF NOT EXISTS `as_members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `memberCode` char(5) NOT NULL,
  `memberFullName` varchar(100) NOT NULL,
  `memberAddress` text NOT NULL,
  `memberPhone` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `as_members`
--

INSERT INTO `as_members` (`memberID`, `memberCode`, `memberFullName`, `memberAddress`, `memberPhone`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, '00001', 'CV. ASFA Solution', 'Jl. Pegadaian No. 38 RT. 01 RW. 01 Arjawinangun - Cirebon', '(0231) 358630', '2014-10-25 10:57:47', 1, '0000-00-00 00:00:00', 0),
(2, '00002', 'Vans Motor', 'Jl. Ki Hajar Dewantara No. 130 Arjawinangun Cirebon', '(0231) 359000', '2014-10-25 10:58:07', 1, '0000-00-00 00:00:00', 0),
(3, '00003', 'GBI Arjawinangun', 'Jl. Kantor Pos No. 1 Arjawinangun Cirebon', '(0231) 357216', '2014-10-25 10:59:05', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_products`
--

CREATE TABLE IF NOT EXISTS `as_products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `supplierID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `brandID` int(11) NOT NULL,
  `productBarcode` varchar(20) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productImei` varchar(50) NOT NULL,
  `productBuyPrice` int(11) NOT NULL,
  `productSalePrice` int(11) NOT NULL,
  `productDiscount` int(11) NOT NULL,
  `productStock` int(11) NOT NULL,
  `productNote` text NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `as_products`
--

INSERT INTO `as_products` (`productID`, `supplierID`, `categoryID`, `brandID`, `productBarcode`, `productName`, `productImei`, `productBuyPrice`, `productSalePrice`, `productDiscount`, `productStock`, `productNote`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 1, 11, 9, '3212758009345', 'SOSRO 280ML JASMINE TEA', '437443789213', 4500, 5500, 0, 43, '-', '2014-09-27 14:04:34', 1, '2014-10-25 10:40:35', 1),
(2, 1, 13, 13, '2140912123601', 'TANGO WAFER CUP SMALL', '893028323287', 11990, 12990, 0, 53, '-', '2014-09-27 14:04:34', 1, '2014-10-25 10:44:16', 1),
(3, 1, 13, 13, '2140911043122', 'TANGO WAFER BIG 24 PCS', '843437837833', 8790, 9900, 0, 50, '-', '2014-09-27 14:04:34', 1, '2014-10-25 10:43:43', 1),
(4, 1, 13, 13, '2140902110832', 'TANGO WAFER MIDDLE 12 PCS', '241451243485', 3400, 3900, 0, 46, '-', '2014-09-27 14:04:34', 1, '2014-10-25 10:43:03', 1),
(5, 1, 13, 13, '4339019760411', 'TANGO WAFER SMALL 4 PCS', '123434348383', 900, 1200, 0, 48, '-', '2014-09-27 14:04:34', 1, '2014-10-25 10:42:28', 1),
(6, 1, 11, 9, '4452904810353', 'SOSRO 500ML JASMINE TEA', '438789754878', 5600, 7000, 0, 46, '-', '2014-09-27 14:04:34', 1, '2014-10-25 10:41:39', 1),
(7, 1, 11, 13, '5365664891728', 'SOSRO TEH CELUP', '', 1800, 2200, 0, 50, '-', '2014-10-25 10:45:01', 1, '2014-10-25 10:49:10', 1),
(8, 1, 11, 9, '5598751313889', 'SOSRO TEH KANTUNG', '', 1780, 2150, 0, 50, '-', '2014-10-25 10:47:17', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_receivables`
--

CREATE TABLE IF NOT EXISTS `as_receivables` (
  `receivableID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceID` varchar(20) NOT NULL,
  `status` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`receivableID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `as_receivables_payment`
--

CREATE TABLE IF NOT EXISTS `as_receivables_payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `receivableID` int(11) NOT NULL,
  `receivableDate` date NOT NULL,
  `receivablePay` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `as_retur_detail_transactions`
--

CREATE TABLE IF NOT EXISTS `as_retur_detail_transactions` (
  `detailID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceReturID` varchar(16) NOT NULL,
  `productBarcode` varchar(16) NOT NULL,
  `detailReturPrice` int(11) NOT NULL,
  `detailReturQty` int(11) NOT NULL,
  `detailReturSubtotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`detailID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `as_retur_detail_transactions`
--

INSERT INTO `as_retur_detail_transactions` (`detailID`, `invoiceReturID`, `productBarcode`, `detailReturPrice`, `detailReturQty`, `detailReturSubtotal`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'YCOG141026103632', '2140912123601', 11990, 2, 23980, '2014-10-26 10:45:05', 1, '2014-10-26 10:45:11', 1),
(2, 'YCOG141026103632', '4452904810353', 5600, 4, 22400, '2014-10-26 10:46:47', 1, '2014-10-26 10:46:54', 1),
(5, 'HKGR141026105599', '3288305105689', 11990, 3, 35970, '2014-10-27 02:54:09', 1, '2014-10-27 02:54:21', 1),
(6, 'HKGR141026105599', '2140902110832', 3400, 3, 10200, '2014-10-27 02:54:15', 1, '2014-10-27 02:54:47', 1),
(8, 'HKGR141026105599', '3212758009345', 4500, 5, 22500, '2014-10-27 02:55:07', 1, '2014-10-27 02:55:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `as_retur_transactions`
--

CREATE TABLE IF NOT EXISTS `as_retur_transactions` (
  `trxID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceReturID` varchar(16) NOT NULL,
  `supplierID` varchar(10) NOT NULL,
  `trxFullName` varchar(100) NOT NULL,
  `trxAddress` text NOT NULL,
  `trxPhone` varchar(20) NOT NULL,
  `trxDate` date NOT NULL,
  `trxTotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`trxID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `as_retur_transactions`
--

INSERT INTO `as_retur_transactions` (`trxID`, `invoiceReturID`, `supplierID`, `trxFullName`, `trxAddress`, `trxPhone`, `trxDate`, `trxTotal`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, 'YCOG141026103632', '0001', 'OT Group', 'Jakarta Pusat', '(021) 73263267', '2014-10-26', 46380, '2014-10-26 10:51:39', 1, '2014-10-26 10:52:05', 1),
(2, 'HKGR141026105599', '0001', 'OT Group', 'Jakarta Pusat', '(021) 73263267', '2014-10-27', 68670, '2014-10-27 02:55:52', 1, '2014-10-27 02:57:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `as_sales_detail_transactions`
--

CREATE TABLE IF NOT EXISTS `as_sales_detail_transactions` (
  `detailID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceID` varchar(16) NOT NULL,
  `productBarcode` varchar(20) NOT NULL,
  `detailModal` int(11) NOT NULL,
  `detailSubtotalModal` int(11) NOT NULL,
  `detailPrice` int(11) NOT NULL,
  `detailQty` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `discPercent` int(11) NOT NULL,
  `discTotal` int(11) NOT NULL,
  `detailSubtotal` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserId` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`detailID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `as_sales_detail_transactions`
--

INSERT INTO `as_sales_detail_transactions` (`detailID`, `invoiceID`, `productBarcode`, `detailModal`, `detailSubtotalModal`, `detailPrice`, `detailQty`, `note`, `discPercent`, `discTotal`, `detailSubtotal`, `createdDate`, `createdUserId`, `modifiedDate`, `modifiedUserID`) VALUES
(12, 'YSSB141025074334', '3212758009345', 0, 0, 5500, 5, '', 0, 0, 27500, '2014-10-25 19:53:19', 1, '2014-10-25 19:53:43', 1),
(13, 'YSSB141025074334', '2140912123601', 11990, 11990, 12990, 1, '', 0, 0, 12990, '2014-10-25 19:53:21', 1, '0000-00-00 00:00:00', 0),
(14, 'YSSB141025074334', '4339019760411', 0, 0, 1200, 2, '', 0, 0, 2400, '2014-10-25 19:53:24', 1, '2014-10-25 19:53:31', 1),
(15, 'FTMP141025080798', '2140902110832', 3400, 3400, 3900, 1, '', 0, 0, 3900, '2014-10-25 20:17:15', 1, '0000-00-00 00:00:00', 0),
(17, 'DEYT141026103676', '2140902110832', 3400, 3400, 3900, 1, '', 0, 0, 3900, '2014-10-26 11:30:03', 1, '0000-00-00 00:00:00', 0),
(18, 'DEYT141026103676', '3288305105689', 11990, 11990, 12990, 1, '', 0, 0, 12990, '2014-10-26 11:30:25', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_sales_transactions`
--

CREATE TABLE IF NOT EXISTS `as_sales_transactions` (
  `trxID` int(11) NOT NULL AUTO_INCREMENT,
  `memberID` varchar(10) NOT NULL,
  `invoiceID` varchar(16) NOT NULL,
  `trxFullName` varchar(100) NOT NULL,
  `trxAddress` varchar(150) NOT NULL,
  `trxPhone` varchar(20) NOT NULL,
  `trxDate` date NOT NULL,
  `trxTotalModal` int(11) NOT NULL,
  `trxSubtotal` int(11) NOT NULL,
  `trxDiscount` int(11) NOT NULL,
  `trxPPN` int(11) NOT NULL,
  `trxTotal` int(11) NOT NULL,
  `trxPay` int(11) NOT NULL,
  `trxChange` int(11) NOT NULL,
  `trxStatus` char(1) NOT NULL,
  `trxTerminDate` date NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`trxID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `as_sales_transactions`
--

INSERT INTO `as_sales_transactions` (`trxID`, `memberID`, `invoiceID`, `trxFullName`, `trxAddress`, `trxPhone`, `trxDate`, `trxTotalModal`, `trxSubtotal`, `trxDiscount`, `trxPPN`, `trxTotal`, `trxPay`, `trxChange`, `trxStatus`, `trxTerminDate`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(2, '', 'YSSB141025074334', '', '', '', '2014-10-25', 0, 42890, 0, 4289, 47179, 50000, 2821, '1', '0000-00-00', '2014-10-25 19:59:58', 1, '2014-10-25 20:02:52', 1),
(3, '00003', 'FTMP141025080798', 'GBI Arjawinangun', 'Jl. Kantor Pos No. 1 Arjawinangun Cirebon', '(0231) 357216', '2014-10-25', 0, 3900, 0, 390, 4290, 4500, 210, '1', '0000-00-00', '2014-10-25 20:23:04', 1, '2014-10-25 20:25:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `as_stock_opname`
--

CREATE TABLE IF NOT EXISTS `as_stock_opname` (
  `soID` int(11) NOT NULL AUTO_INCREMENT,
  `productBarcode` varchar(16) NOT NULL,
  `soDate` date NOT NULL,
  `productStock` int(11) NOT NULL,
  `realStock` int(11) NOT NULL,
  `status` char(1) NOT NULL,
  `qty` int(11) NOT NULL,
  `soDescription` varchar(100) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`soID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `as_stock_opname`
--

INSERT INTO `as_stock_opname` (`soID`, `productBarcode`, `soDate`, `productStock`, `realStock`, `status`, `qty`, `soDescription`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, '6527036212518', '2014-10-29', 45, 43, '2', 2, 'Rusak', '2014-10-29 15:57:41', 1, '0000-00-00 00:00:00', 0),
(2, '3288305105689', '2014-10-29', 54, 53, '2', 1, 'Hilang', '2014-10-29 16:11:49', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_suppliers`
--

CREATE TABLE IF NOT EXISTS `as_suppliers` (
  `supplierID` int(11) NOT NULL AUTO_INCREMENT,
  `supplierCode` char(4) NOT NULL,
  `supplierName` varchar(100) NOT NULL,
  `supplierAddress` text NOT NULL,
  `supplierPhone` varchar(20) NOT NULL,
  `supplierFax` varchar(20) NOT NULL,
  `supplierContactPerson` varchar(100) NOT NULL,
  `supplierCPHp` varchar(20) NOT NULL,
  `supplierStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`supplierID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `as_suppliers`
--

INSERT INTO `as_suppliers` (`supplierID`, `supplierCode`, `supplierName`, `supplierAddress`, `supplierPhone`, `supplierFax`, `supplierContactPerson`, `supplierCPHp`, `supplierStatus`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, '0001', 'OT Group', 'Jakarta Pusat', '(021) 73263267', '(021) 73263267', 'Indriana', '0812787336877', 'Y', '2014-10-25 10:10:07', 1, '0000-00-00 00:00:00', 0),
(2, '0002', 'PT. MitraComm Ekasarana', 'Jakarta Selatan', '(021) 75419289', '(021) 75419289', 'Hendro Purwadi', '089217877736', 'Y', '2014-10-25 10:10:44', 1, '0000-00-00 00:00:00', 0),
(3, '0003', 'PT. Coba-Coba Aja', 'Cirebon', '(0231) 358630', '-', 'Feni Agustin', '089837288882', 'Y', '2014-10-25 10:13:01', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `as_users`
--

CREATE TABLE IF NOT EXISTS `as_users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userNIP` char(4) NOT NULL,
  `userFullName` varchar(100) NOT NULL,
  `userPhone` varchar(20) NOT NULL,
  `userLevel` int(11) NOT NULL,
  `userBlocked` char(1) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `userPassword` varchar(32) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `as_users`
--

INSERT INTO `as_users` (`userID`, `userNIP`, `userFullName`, `userPhone`, `userLevel`, `userBlocked`, `userName`, `userPassword`, `createdDate`, `createdUserID`, `modifiedDate`, `modifiedUserID`) VALUES
(1, '0001', 'Agus Saputra', '', 1, 'N', 'agus.saputra', 'e10adc3949ba59abbe56e057f20f883e', '2014-09-23 12:20:29', 0, '0000-00-00 00:00:00', 0),
(2, '0002', 'Feni Agustin, S.Kom.', '08987300xxx', 2, 'Y', 'felicia.feni', 'e10adc3949ba59abbe56e057f20f883e', '2014-10-31 15:47:59', 1, '2014-10-31 15:56:23', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
