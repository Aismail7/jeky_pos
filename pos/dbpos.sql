
/*---------------------------------------------------------------
  SQL DB BACKUP 06.11.2017 17:34 
  HOST: localhost
  DATABASE: dbpos
  TABLES: *
  ---------------------------------------------------------------*/

/*---------------------------------------------------------------
  TABLE: `as_accounts`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_accounts`;
CREATE TABLE `as_accounts` (
  `accountID` int(11) NOT NULL AUTO_INCREMENT,
  `accountCode` varchar(10) NOT NULL,
  `accountName` varchar(50) NOT NULL,
  `accountStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`accountID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
INSERT INTO `as_accounts` VALUES   ('1','101','Biaya Sewa','Y','2014-10-27 03:53:24','1','0000-00-00 00:00:00','0');
INSERT INTO `as_accounts` VALUES ('2','102','Biaya Listrik','Y','2014-10-27 03:53:36','1','2014-10-27 03:56:17','1');
INSERT INTO `as_accounts` VALUES ('3','103','Biaya Gaji','Y','2014-10-27 03:53:44','1','0000-00-00 00:00:00','0');
INSERT INTO `as_accounts` VALUES ('4','104','Biaya Telepon','Y','2014-10-27 03:54:41','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_barcodes`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_barcodes`;
CREATE TABLE `as_barcodes` (
  `barcodeID` int(11) NOT NULL AUTO_INCREMENT,
  `productBarcode` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`barcodeID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
INSERT INTO `as_barcodes` VALUES   ('31','5598751313889','2','2017-07-31 00:59:28','1','0000-00-00 00:00:00','0');
INSERT INTO `as_barcodes` VALUES ('32','5598751313889','2','2017-07-31 00:59:28','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_brands`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_brands`;
CREATE TABLE `as_brands` (
  `brandID` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) NOT NULL,
  `brandStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`brandID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
INSERT INTO `as_brands` VALUES   ('9','Sosro','Y','2014-10-25 09:54:37','1','0000-00-00 00:00:00','0');
INSERT INTO `as_brands` VALUES ('10','Aqua','Y','2014-10-25 09:54:44','1','0000-00-00 00:00:00','0');
INSERT INTO `as_brands` VALUES ('11','Gatsby','Y','2014-10-25 09:54:50','1','0000-00-00 00:00:00','0');
INSERT INTO `as_brands` VALUES ('12','Nivea','Y','2014-10-25 09:54:56','1','0000-00-00 00:00:00','0');
INSERT INTO `as_brands` VALUES ('13','Tango','Y','2014-10-25 09:55:02','1','0000-00-00 00:00:00','0');
INSERT INTO `as_brands` VALUES ('14','SunLight','Y','2014-10-25 09:55:23','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_buy_detail_transactions`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_buy_detail_transactions`;
CREATE TABLE `as_buy_detail_transactions` (
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
INSERT INTO `as_buy_detail_transactions` VALUES   ('3','BJSH141025113296','3212758009345','4500','5','22500','2014-10-25 23:32:23','1','2014-10-25 23:32:51','1');
INSERT INTO `as_buy_detail_transactions` VALUES ('5','BJSH141025113296','2140912123601','11990','10','119900','2014-10-25 23:32:58','1','2014-10-25 23:33:03','1');
INSERT INTO `as_buy_detail_transactions` VALUES ('6','ZWBU170727091641','3212758009345','4500','1','4500','2017-07-27 21:20:02','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_buy_transactions`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_buy_transactions`;
CREATE TABLE `as_buy_transactions` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
INSERT INTO `as_buy_transactions` VALUES   ('1','BJSH141025113296','45734578475847874','0001','OT Group','Jakarta Pusat','(021) 73263267','2014-10-25','142400','0','142400','0','2','2014-11-25','2014-10-25 23:33:28','1','2014-10-25 23:37:48','1');
INSERT INTO `as_buy_transactions` VALUES ('2','ZWBU170727091641','test','0001','OT Group','Jakarta Pusat','(021) 73263267','2017-07-27','4500','0','4500','1000','2','2017-07-31','2017-07-27 21:20:47','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_categories`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_categories`;
CREATE TABLE `as_categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(100) NOT NULL,
  `categoryStatus` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
INSERT INTO `as_categories` VALUES   ('8','Alat Kecantikan','Y','2014-10-25 08:41:42','1','0000-00-00 00:00:00','0');
INSERT INTO `as_categories` VALUES ('9','Perlengkapan Bayi','Y','2014-10-25 08:41:51','1','0000-00-00 00:00:00','0');
INSERT INTO `as_categories` VALUES ('10','Minyak Wangi','Y','2014-10-25 08:42:07','1','0000-00-00 00:00:00','0');
INSERT INTO `as_categories` VALUES ('11','Minuman','Y','2014-10-25 08:42:15','1','0000-00-00 00:00:00','0');
INSERT INTO `as_categories` VALUES ('12','Buku dan Majalah','Y','2014-10-25 08:42:21','1','0000-00-00 00:00:00','0');
INSERT INTO `as_categories` VALUES ('13','Makanan Ringan','Y','2014-10-25 08:42:57','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_debts`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_debts`;
CREATE TABLE `as_debts` (
  `debtID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceID` varchar(20) NOT NULL,
  `status` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`debtID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
INSERT INTO `as_debts` VALUES   ('1','PXDG141025064434','1','2014-10-25 23:29:30','1','0000-00-00 00:00:00','0');
INSERT INTO `as_debts` VALUES ('4','BJSH141025113296','1','0000-00-00 00:00:00','1','0000-00-00 00:00:00','0');
INSERT INTO `as_debts` VALUES ('5','ZWBU170727091641','1','2017-07-27 21:20:47','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_debts_payment`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_debts_payment`;
CREATE TABLE `as_debts_payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `debtID` int(11) NOT NULL,
  `debtDate` date NOT NULL,
  `debtPay` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*---------------------------------------------------------------
  TABLE: `as_funds`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_funds`;
CREATE TABLE `as_funds` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
INSERT INTO `as_funds` VALUES   ('1','1','2014-10-27','5000000','Biaya Sewa Bulan Oktober 2014','2014-10-27 04:25:06','1','0000-00-00 00:00:00','0');
INSERT INTO `as_funds` VALUES ('2','3','2014-10-27','5000000','Biaya Gaji Staff Oktober 2014','2014-10-27 04:27:09','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_identity`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_identity`;
CREATE TABLE `as_identity` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `as_identity` VALUES   ('1','Jeky Jumansyah Point Of Sales','Jl.Balaraja, Kab.Tangerang - Banten','(021) 123456789','jejupos@gmail.com','pj_170816040359_pj_170803085608_pj_170726093303_coollogo_com-738319.jpg','Jeky Jumansyah','(0231) 358630','10','1','1','1','1','1','1','434893748987794','93485948594859489','2017-07-27','2017-08-16 21:04:06','1');

/*---------------------------------------------------------------
  TABLE: `as_members`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_members`;
CREATE TABLE `as_members` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
INSERT INTO `as_members` VALUES   ('1','00001','CV. ASFA Solution','Jl. Pegadaian No. 38 RT. 01 RW. 01 Arjawinangun - Cirebon','(0231) 358630','2014-10-25 10:57:47','1','0000-00-00 00:00:00','0');
INSERT INTO `as_members` VALUES ('2','00002','Vans Motor','Jl. Ki Hajar Dewantara No. 130 Arjawinangun Cirebon','(0231) 359000','2014-10-25 10:58:07','1','0000-00-00 00:00:00','0');
INSERT INTO `as_members` VALUES ('3','00003','GBI Arjawinangun','Jl. Kantor Pos No. 1 Arjawinangun Cirebon','(0231) 357216','2014-10-25 10:59:05','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_prdid`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_prdid`;
CREATE TABLE `as_prdid` (
  `idprd` int(11) NOT NULL AUTO_INCREMENT,
  `namaid` varchar(100) NOT NULL,
  `namasub` varchar(150) NOT NULL,
  `insert_by` varchar(30) NOT NULL,
  `insert_date` date NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`idprd`,`namaid`,`namasub`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
INSERT INTO `as_prdid` VALUES   ('1','TEH CELUP','SOSRO ','','0000-00-00','Y');
INSERT INTO `as_prdid` VALUES ('2','KUE','TANGGO','','0000-00-00','Y');
INSERT INTO `as_prdid` VALUES ('3','WAFER','NISSIN','1','2017-07-31','Y');
INSERT INTO `as_prdid` VALUES ('8','TEH CELUP','SARIWANGI','1','2017-07-31','Y');
INSERT INTO `as_prdid` VALUES ('9','ADEM','GARY','1','2017-07-31','Y');
INSERT INTO `as_prdid` VALUES ('10','JALABRIA','CHOCOLATOS','1','2017-07-31','Y');

/*---------------------------------------------------------------
  TABLE: `as_prdsub`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_prdsub`;
CREATE TABLE `as_prdsub` (
  `idsubprd` int(11) NOT NULL,
  `idprd` int(11) NOT NULL,
  `namasub` varchar(250) NOT NULL,
  `status` varchar(1) NOT NULL,
  `insert_by` varchar(30) NOT NULL,
  `insert_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*---------------------------------------------------------------
  TABLE: `as_products`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_products`;
CREATE TABLE `as_products` (
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
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
INSERT INTO `as_products` VALUES   ('1','1','11','9','3212758009345','SOSRO 280ML JASMINE TEA','437443789213','4500','5500','0','39','-','2014-09-27 14:04:34','1','2014-10-25 10:40:35','1','');
INSERT INTO `as_products` VALUES ('2','1','13','13','2140912123601','TANGO WAFER CUP SMALL','893028323287','11990','12990','0','52','-','2014-09-27 14:04:34','1','2014-10-25 10:44:16','1','');
INSERT INTO `as_products` VALUES ('3','1','13','13','2140911043122','TANGO WAFER BIG 24 PCS','843437837833','8790','9900','0','50','-','2014-09-27 14:04:34','1','2014-10-25 10:43:43','1','');
INSERT INTO `as_products` VALUES ('4','1','13','13','2140902110832','TANGO WAFER MIDDLE 12 PCS','241451243485','3400','3900','0','46','-','2014-09-27 14:04:34','1','2014-10-25 10:43:03','1','');
INSERT INTO `as_products` VALUES ('5','1','13','13','4339019760411','TANGO WAFER SMALL 4 PCS','123434348383','900','1200','0','48','-','2014-09-27 14:04:34','1','2014-10-25 10:42:28','1','');
INSERT INTO `as_products` VALUES ('6','1','11','9','4452904810353','SOSRO 500ML JASMINE TEA','438789754878','5600','7000','0','46','-','2014-09-27 14:04:34','1','2014-10-25 10:41:39','1','');
INSERT INTO `as_products` VALUES ('7','1','11','13','5365664891728','SOSRO TEH CELUP','','1800','2200','0','1','-','2014-10-25 10:45:01','1','2014-10-25 10:49:10','1','');
INSERT INTO `as_products` VALUES ('8','1','11','9','5598751313889','SOSRO TEH KANTUNG','','1780','2150','0','50','-','2014-10-25 10:47:17','1','0000-00-00 00:00:00','0','');
INSERT INTO `as_products` VALUES ('16','1','8','10','170816100855','IRFANULHAKIM','','1000','1500','1','2','AHMAD','2017-08-16 22:09:35','1','0000-00-00 00:00:00','0','ismail.jpg');

/*---------------------------------------------------------------
  TABLE: `as_receivables`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_receivables`;
CREATE TABLE `as_receivables` (
  `receivableID` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceID` varchar(20) NOT NULL,
  `status` char(1) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`receivableID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `as_receivables` VALUES   ('1','OSNM170727091675','1','2017-07-27 21:23:25','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_receivables_payment`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_receivables_payment`;
CREATE TABLE `as_receivables_payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `receivableID` int(11) NOT NULL,
  `receivableDate` date NOT NULL,
  `receivablePay` int(11) NOT NULL,
  `createdDate` datetime NOT NULL,
  `createdUserID` int(11) NOT NULL,
  `modifiedDate` datetime NOT NULL,
  `modifiedUserID` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*---------------------------------------------------------------
  TABLE: `as_retur_detail_transactions`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_retur_detail_transactions`;
CREATE TABLE `as_retur_detail_transactions` (
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
INSERT INTO `as_retur_detail_transactions` VALUES   ('1','YCOG141026103632','2140912123601','11990','2','23980','2014-10-26 10:45:05','1','2014-10-26 10:45:11','1');
INSERT INTO `as_retur_detail_transactions` VALUES ('2','YCOG141026103632','4452904810353','5600','4','22400','2014-10-26 10:46:47','1','2014-10-26 10:46:54','1');
INSERT INTO `as_retur_detail_transactions` VALUES ('5','HKGR141026105599','3288305105689','11990','3','35970','2014-10-27 02:54:09','1','2014-10-27 02:54:21','1');
INSERT INTO `as_retur_detail_transactions` VALUES ('6','HKGR141026105599','2140902110832','3400','3','10200','2014-10-27 02:54:15','1','2014-10-27 02:54:47','1');
INSERT INTO `as_retur_detail_transactions` VALUES ('8','HKGR141026105599','3212758009345','4500','5','22500','2014-10-27 02:55:07','1','2014-10-27 02:55:12','1');

/*---------------------------------------------------------------
  TABLE: `as_retur_transactions`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_retur_transactions`;
CREATE TABLE `as_retur_transactions` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
INSERT INTO `as_retur_transactions` VALUES   ('1','YCOG141026103632','0001','OT Group','Jakarta Pusat','(021) 73263267','2014-10-26','46380','2014-10-26 10:51:39','1','2014-10-26 10:52:05','1');
INSERT INTO `as_retur_transactions` VALUES ('2','HKGR141026105599','0001','OT Group','Jakarta Pusat','(021) 73263267','2014-10-27','68670','2014-10-27 02:55:52','1','2014-10-27 02:57:12','1');

/*---------------------------------------------------------------
  TABLE: `as_sales_detail_transactions`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_sales_detail_transactions`;
CREATE TABLE `as_sales_detail_transactions` (
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
INSERT INTO `as_sales_detail_transactions` VALUES   ('12','YSSB141025074334','3212758009345','0','0','5500','5','','0','0','27500','2014-10-25 19:53:19','1','2014-10-25 19:53:43','1');
INSERT INTO `as_sales_detail_transactions` VALUES ('13','YSSB141025074334','2140912123601','11990','11990','12990','1','','0','0','12990','2014-10-25 19:53:21','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_detail_transactions` VALUES ('14','YSSB141025074334','4339019760411','0','0','1200','2','','0','0','2400','2014-10-25 19:53:24','1','2014-10-25 19:53:31','1');
INSERT INTO `as_sales_detail_transactions` VALUES ('15','FTMP141025080798','2140902110832','3400','3400','3900','1','','0','0','3900','2014-10-25 20:17:15','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_detail_transactions` VALUES ('17','DEYT141026103676','2140902110832','3400','3400','3900','1','','0','0','3900','2014-10-26 11:30:03','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_detail_transactions` VALUES ('18','DEYT141026103676','3288305105689','11990','11990','12990','1','','0','0','12990','2014-10-26 11:30:25','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_detail_transactions` VALUES ('19','BPMT170727013550','3212758009345','0','0','5500','4','','0','0','22000','2017-07-27 02:37:52','1','2017-07-27 02:38:15','1');
INSERT INTO `as_sales_detail_transactions` VALUES ('20','HMRY170727023919','5365664891728','0','0','2200','49','','0','0','107800','2017-07-27 02:41:44','1','2017-07-27 02:42:03','1');
INSERT INTO `as_sales_detail_transactions` VALUES ('21','APRH170727123544','1SOSRO','1000','1000','1200','1','','0','0','1200','2017-07-27 12:52:09','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_detail_transactions` VALUES ('22','OSNM170727091675','3212758009345','4500','4500','5500','1','','0','0','5500','2017-07-27 21:22:54','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_detail_transactions` VALUES ('23','ZVMP170727092390','3212758009345','0','0','5500','15','','0','0','82500','2017-07-27 23:05:04','1','2017-07-27 23:07:11','1');
INSERT INTO `as_sales_detail_transactions` VALUES ('24','KWRP170805081515','3212758009345','0','0','5500','10','','0','0','55000','2017-08-05 08:27:43','1','2017-08-05 08:27:57','1');
INSERT INTO `as_sales_detail_transactions` VALUES ('25','MBMV170819091386','2140912123601','11990','11990','12990','1','','0','0','12990','2017-08-19 21:34:44','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_detail_transactions` VALUES ('26','PCFT170820095220','5365664891728','1800','1800','2200','1','','0','0','2200','2017-08-20 22:42:14','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_detail_transactions` VALUES ('27','TBTS170907105818','2140912123601','11990','11990','12990','1','','0','0','12990','2017-09-07 11:00:34','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_detail_transactions` VALUES ('28','GKFB171106103540','2140912123601','11990','11990','12990','1','','0','0','12990','2017-11-06 23:31:19','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_sales_transactions`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_sales_transactions`;
CREATE TABLE `as_sales_transactions` (
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
INSERT INTO `as_sales_transactions` VALUES   ('2','','YSSB141025074334','','','','2014-10-25','0','42890','0','4289','47179','50000','2821','1','0000-00-00','2014-10-25 19:59:58','1','2014-10-25 20:02:52','1');
INSERT INTO `as_sales_transactions` VALUES ('3','00003','FTMP141025080798','GBI Arjawinangun','Jl. Kantor Pos No. 1 Arjawinangun Cirebon','(0231) 357216','2014-10-25','0','3900','0','390','4290','4500','210','1','0000-00-00','2014-10-25 20:23:04','1','2014-10-25 20:25:25','1');
INSERT INTO `as_sales_transactions` VALUES ('4','00002','BPMT170727013550','Vans Motor','Jl. Ki Hajar Dewantara No. 130 Arjawinangun Cirebon','(0231) 359000','2017-07-27','0','22000','0','2200','24200','24200','0','1','0000-00-00','2017-07-27 02:38:52','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_transactions` VALUES ('5','00001','HMRY170727023919','CV. ASFA Solution','Jl. Pegadaian No. 38 RT. 01 RW. 01 Arjawinangun - Cirebon','(0231) 358630','2017-07-27','0','107800','0','10780','118580','118580','0','1','0000-00-00','2017-07-27 02:42:17','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_transactions` VALUES ('6','00001','APRH170727123544','CV. ASFA Solution','Jl. Pegadaian No. 38 RT. 01 RW. 01 Arjawinangun - Cirebon','(0231) 358630','2017-07-27','2000','2400','0','240','2640','2640','0','1','0000-00-00','2017-07-27 12:52:48','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_transactions` VALUES ('7','00001','OSNM170727091675','CV. ASFA Solution','Jl. Pegadaian No. 38 RT. 01 RW. 01 Arjawinangun - Cirebon','(0231) 358630','2017-07-27','4500','5500','0','550','6050','1000','0','3','2017-07-31','2017-07-27 21:23:25','1','0000-00-00 00:00:00','0');
INSERT INTO `as_sales_transactions` VALUES ('8','','GKFB171106103540','','','','2017-11-06','11990','12990','0','1299','14289','15000','711','1','0000-00-00','2017-11-06 23:32:00','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_stock_opname`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_stock_opname`;
CREATE TABLE `as_stock_opname` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
INSERT INTO `as_stock_opname` VALUES   ('1','6527036212518','2014-10-29','45','43','2','2','Rusak','2014-10-29 15:57:41','1','0000-00-00 00:00:00','0');
INSERT INTO `as_stock_opname` VALUES ('2','3288305105689','2014-10-29','54','53','2','1','Hilang','2014-10-29 16:11:49','1','0000-00-00 00:00:00','0');
INSERT INTO `as_stock_opname` VALUES ('3','1SOSRO','2017-07-27','98','2','2','96','ilang','2017-07-27 13:07:00','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_suppliers`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_suppliers`;
CREATE TABLE `as_suppliers` (
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
INSERT INTO `as_suppliers` VALUES   ('1','0001','OT Group','Jakarta Pusat','(021) 73263267','(021) 73263267','Indriana','0812787336877','Y','2014-10-25 10:10:07','1','0000-00-00 00:00:00','0');
INSERT INTO `as_suppliers` VALUES ('2','0002','PT. MitraComm Ekasarana','Jakarta Selatan','(021) 75419289','(021) 75419289','Hendro Purwadi','089217877736','Y','2014-10-25 10:10:44','1','0000-00-00 00:00:00','0');
INSERT INTO `as_suppliers` VALUES ('3','0003','PT. Coba-Coba Aja','Cirebon','(0231) 358630','-','Feni Agustin','089837288882','Y','2014-10-25 10:13:01','1','0000-00-00 00:00:00','0');

/*---------------------------------------------------------------
  TABLE: `as_users`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `as_users`;
CREATE TABLE `as_users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
INSERT INTO `as_users` VALUES   ('1','0001','Jeky Jumansyah','081211222333','1','N','jeky','e10adc3949ba59abbe56e057f20f883e','2014-09-23 12:20:29','0','2017-07-27 00:58:37','1');
INSERT INTO `as_users` VALUES ('2','0002','ismail','081293370000','2','N','ismail','e10adc3949ba59abbe56e057f20f883e','2014-10-31 15:47:59','1','2017-07-27 00:59:16','1');
