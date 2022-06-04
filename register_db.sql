-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 06:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpp`
--

CREATE TABLE `adminpp` (
  `adm_id` int(11) NOT NULL,
  `adusername` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpp`
--

INSERT INTO `adminpp` (`adm_id`, `adusername`, `email`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', '72f4f10a40c4be8fbf63b79cbf21abca');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `c_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`c_id`, `username`, `message`, `created_on`) VALUES
(1, 'patipan', 'hi', '2021-09-26 08:32:58'),
(2, 'patipan', 'hi', '2021-09-26 08:33:07'),
(3, 'kasikorn', 'hi', '2021-09-26 08:34:08'),
(4, 'patipan', 'hi', '2021-09-26 08:43:39'),
(5, 'patipan', 'สวัดดีครับ', '2021-09-26 10:12:55'),
(6, 'kasikorn', 'ff', '2021-10-04 09:45:26'),
(7, 'kasikorn', '24/11/2564', '2021-11-24 01:13:33'),
(8, 'jirawa', 'สวัดดีคะ', '2021-12-10 18:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE `county` (
  `id` int(11) NOT NULL,
  `pcounty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`id`, `pcounty`) VALUES
(1, 'นครราชสีมา'),
(2, 'เชียงใหม่');

-- --------------------------------------------------------

--
-- Table structure for table `pnews_db`
--

CREATE TABLE `pnews_db` (
  `id` int(11) NOT NULL,
  `pn_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pn_image` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pn_description` text NOT NULL,
  `pn_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pnews_db`
--

INSERT INTO `pnews_db` (`id`, `pn_name`, `pn_image`, `pn_description`, `pn_time`) VALUES
(42, 'สรุปข่าวเด่นอสังหาฯ รอบสัปดาห์ 29 พ.ย.-3 ธ.ค. 64', 'Need-governments-policy-to-increase-real-estate-market-e1638622124757.jpg', '<h1><strong>ประเมินโอมิครอนกระทบเศรษฐกิจไทย คาดยังเติบโต</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ธนาคารแห่งประเทศไทย (ธปท.) เผยศรษฐกิจไทยในเดือนตุลาคม-พฤศจิกายน แนวโน้มดีขึ้น จากการทยอยผ่อนคลายมาตรการล็อกดาวน์ และการเปิดประเทศรับนักท่องเที่ยว โดยลดวันกักตัวลง การส่งออกขยายตัวดีขึ้นต่อเนื่องจากความต้องการซื้อในต่างประเทศ</p>\r\n\r\n<p>ขณะที่การใช้จ่ายในประเทศและการผลิตปรับตัวดีขึ้นเช่นกัน อย่างไรก็ตาม การลงทุนภาคเอกชนในเดือนตุลาคมชะลอลง ธปท. ยังคงจับตาความเสี่ยงใน 3 เรื่อง</p>\r\n\r\n<p>1) ความเร็วในการแพร่ระบาดของโควิด-19 และผลกระทบจากการใช้มาตรการดูแลการแพร่ระบาดของโควิด-19 สายพันธุ์โอมิครอน โดยความเข้มข้นของมาตรการในแต่ละประเทศ ส่งผลต่อเศรษฐกิจในระยะต่อไป</p>\r\n\r\n<p>แม้ในขณะนี้ทั่วโลกยังไม่มีข้อมูลที่ชัดเจนถึงผลกระทบของโอมิครอน แต่มองว่าในปี 64 ซึ่งเหลือเวลาอีกประมาณ 1 เดือน จึงไม่กระทบกับภาพรวมเศรษฐกิจทั้งปีมากนัก อัตราการขยายตัวที่ 0.7% ในปีนี้น่าจะทำได้ และภาพรวมอาจจะสูงขึ้นกว่านี้ได้เล็กน้อย</p>\r\n\r\n<p>2) ความเสี่ยงที่เกิดขึ้นจากการขาดแคลนวัตถุดิบการผลิต โดยเฉพาะเซมิคอน ดักเตอร์ และฮาร์ดดิสก์ ไดรฟ์ ที่จะกระทบต่อการส่งออกในช่วงต่อไป</p>\r\n\r\n<p>3) ราคาน้ำมันดิบโลกและวัตถุดิบบางประเภทที่ปรับตัวสูงขึ้น กระทบต่อต้นทุนการผลิตสินค้า</p>\r\n\r\n<p>โดยในการประชุมนโยบายการเงินธปท.ปลายเดือนธ.ค.นี้ จะมีการปรับประมาณการเศรษฐกิจ ซึ่งจะประเมินผลกระทบจากโอมิครอนอีกครั้ง</p>\r\n\r\n<p><img alt=\"\" src=\"https://cdn-cms.pgimgs.com/news/2021/12/MRTA-Yellow-line-1024x576.jpg\" style=\"height:576px; width:1024px\" /></p>\r\n', '2021-11-08 04:59:40'),
(44, 'test', '1.PNG', '<p>dasdasdasdasdasdasdasdasdasdasd</p>\r\n\r\n<p><img alt=\"\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsHVRuoQP3bCExL12tvWdTnSWt2Uh5Xgpk3g&amp;usqp=CAU\" /></p>\r\n', '2021-12-14 06:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `property_db`
--

CREATE TABLE `property_db` (
  `pro_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pselects` varchar(100) NOT NULL,
  `plocation` varchar(200) NOT NULL,
  `pcity` varchar(200) NOT NULL,
  `pdescription` varchar(1000) NOT NULL,
  `ptotalcost` varchar(50) NOT NULL,
  `pbed` int(100) NOT NULL,
  `pbath` int(100) NOT NULL,
  `pfloorarea` int(100) NOT NULL,
  `ppricearea` int(100) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `pimage2` varchar(100) NOT NULL,
  `pimage3` varchar(100) NOT NULL,
  `pimage4` varchar(100) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `pusername` varchar(200) NOT NULL,
  `pphone` int(12) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `pcreated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_db`
--

INSERT INTO `property_db` (`pro_id`, `u_id`, `pname`, `pselects`, `plocation`, `pcity`, `pdescription`, `ptotalcost`, `pbed`, `pbath`, `pfloorarea`, `ppricearea`, `pimage`, `pimage2`, `pimage3`, `pimage4`, `lat`, `lng`, `pusername`, `pphone`, `pemail`, `pcreated_on`) VALUES
(60, 1, 'บ้านแฝด ม. บิวตี้เฮ้าส์3 ราชพฤกษ์-กาญจนาฯ เชื่อมต่อถนนราชพฤกษ์ เข้า-ออกได้หลายเส้นทาง ใกล้ The Walk และทางด่วน ศรีรัช', 'บ้านเดี่ยว', 'ราชพฤกษ์, บางขุนกอง, บางกรวย, นนทบุรี', 'นนทบุรี', '**ฟังก์ชันบ้าน** ห้องนอน : 3 ห้อง ห้องน้ำ : 2 ห้อง ห้องอเนกประสงค์ : 1 ห้อง จำนวนชั้น : 2 ชั้น ที่จอดรถ : 1 คัน เนื้อที่ 47 ตารางวา - พื้นที่ใช้สอย 211 ตารางเมตร - หน้าบ้านหันไปทาง \"ทิศตะวันตกเฉียงเหนือ\" - น้ำประปา ไฟฟ้าพร้อมเข้าอยู่ - ค่าใช้จ่ายส่วนกลางนิติบุคคล 0 บาท/เดือน', '4490000', 3, 2, 211, 23883, 'บิวตี้เฮ้าส์3-ราชพฤกษ์-กาญจนาฯ-บางกรวย-Thailand.jpg', 'บิวตี้เฮ้าส์3-ราชพฤกษ์-กาญจนาฯ-บางกรวย-Thailand (1).jpg', 'บิวตี้เฮ้าส์3-ราชพฤกษ์-กาญจนาฯ-บางกรวย-Thailand (2).jpg', 'บิวตี้เฮ้าส์3-ราชพฤกษ์-กาญจนาฯ-บางกรวย-Thailand (3).jpg', '13.823599', '100.449324', 'บริษัท บางกอก แอสเซท อินเตอร์กรุ๊ป จำกัด Co.,Ltd.', 952644465, 'test@gmail.com', '2021-11-21 10:06:05'),
(61, 1, 'One Price ห้องใหม่จากโครงการ ราคาเดียวทุกชั้น เพียง 3. 3MB', 'คอนโด', '- ถนนลาดพร้าว, จอมพล, จตุจักร, กรุงเทพ', 'กรุงเทพมหานคร', 'One Price ห้องใหม่จากโครงการ ราคาเดียวทุกยูนิต เพียง @3.3MB Whizdom Avenue Ratchada-Ladprao ห้อง สตูดิโอ ขนาด 28.35 ตร.ม. ติด MRT ลาดพร้าว Free all ( ค่าส่วนกลาง 1 ปี, เงินกองทุนฯ และ ค่าธรรมเนียมการโอนกรรมสิทธิ์)', '3500000', 1, 1, 28, 116402, 'Whizdom-Avenue-รัชดา-ลาดพร้าว-วิสซ์ดอม-อเวนิว-รัชดา-ลาดพร้าว-จตุจักร-Thailand.jpg', 'Whizdom-Avenue-รัชดา-ลาดพร้าว-วิสซ์ดอม-อเวนิว-รัชดา-ลาดพร้าว-จตุจักร-Thailand (1).jpg', 'Whizdom-Avenue-รัชดา-ลาดพร้าว-วิสซ์ดอม-อเวนิว-รัชดา-ลาดพร้าว-จตุจักร-Thailand (2).jpg', 'Whizdom-Avenue-รัชดา-ลาดพร้าว-วิสซ์ดอม-อเวนิว-รัชดา-ลาดพร้าว-จตุจักร-Thailand (3).jpg', '13.805113', '100.574042', 'บริษัท ดิ เอสเตท (ไทยแลนด์) จำกัด', 642252418, 'test@gmail.com', '2021-11-21 10:30:48'),
(62, 2, 'คอนโด Wyndham Garden สุขุมวิท 42', 'คอนโด', '19 สุขุมวิท 42, คลองเตย, คลองเตย, กรุงเทพ', 'กรุงเทพมหานคร', 'ไม่มีรายละเอียด', '5990000', 1, 1, 33, 180967, 'Wyndham-Garden-Residence-Sukhumvit-42-คลองเตย-Thailand.jpg', 'Wyndham-Garden-Residence-Sukhumvit-42-คลองเตย-Thailand (1).jpg', 'Wyndham-Garden-Residence-Sukhumvit-42-คลองเตย-Thailand (2).jpg', 'Wyndham-Garden-Residence-Sukhumvit-42-คลองเตย-Thailand (3).jpg', '13.716577', '100.584973', 'Anchalee Bo', 655245316, 'test@gmail.com', '2021-11-21 10:46:58'),
(64, 2, 'บ้านมือสองรีโนเวทใหม่ มัณฑนา ราชพฤกษ์ ติดถนนราชพฤกษ์ 3 นอน 3 น้ำ', 'บ้านเดี่ยว', '101/229 ราชพฤกษ์, บางกร่าง, เมืองนนทบุรี, นนทบุรี', 'นนทบุรี', 'บ้านมือสองรีโนเวทใหม่ \"มัณฑนา ราชพฤกษ์\" ซื้อบ้านมือสองเหมือนได้บ้านมือหนึ่ง บนทำเล “ติดถนนราชพฤกษ์” เดินทางสะดวก ปลอดภัย ไม่ต้องเข้าซอยแคบๆ และใกล้รถไฟฟ้าสถานีบางพลู', '7190000', 3, 2, 255, 28174, 'มัณฑนา-ราชพฤกษ์-เมืองนนทบุรี-Thailand.jpg', 'มัณฑนา-ราชพฤกษ์-เมืองนนทบุรี-Thailand (1).jpg', 'มัณฑนา-ราชพฤกษ์-เมืองนนทบุรี-Thailand (2).jpg', 'มัณฑนา-ราชพฤกษ์-เมืองนนทบุรี-Thailand (3).jpg', '13.843894', '100.448945', 'New Living Thailand -', 948262263, 'test@gmail.com', '2021-11-23 10:20:41'),
(66, 2, 'Condo for SALE *** Whizdom Connect *** ราคาดีสุดๆ ! !! ชั้นสูง 30+ คอนโด High Rise ใกล้ BTS ปุณณวิถี เดินทางสะดวก @4. 61 MB All in', 'คอนโด', '1 ซอยปิยบุตร์ 1 ถนนสุขุมวิท, บางนา, บางนา, กรุงเทพ', 'กรุงเทพมหานคร', 'Condo for SALE *** Whizdom Connect *** ราคาดีสุดๆ !!! ชั้นสูง 30+ คอนโด High Rise ใกล้ BTS ปุณณวิถี เดินทางสะดวก @4.61 MB All in', '4610000', 1, 1, 30, 154698, 'Whizdom-Connect-สุขุมวิท-บางนา-Thailand.jpg', 'Whizdom-Connect-สุขุมวิท-บางนา-Thailand (1).png', 'Whizdom-Connect-สุขุมวิท-บางนา-Thailand (2).png', 'Whizdom-Connect-สุขุมวิท-บางนา-Thailand3.png', '13.686213', '100.612533', 'บริษัท ดิ เอสเตท (ไทยแลนด์) จำกัด', 642252418, 'test@gmail.com', '2021-11-23 18:24:42'),
(68, 2, 'บ้านเดี่ยว บ้านภาณุ ปิ่นเกล้า-ตลิ่งชัน บนทำเลศักยภาพ เชื่อมต่อทั้งถนนกาญจนาภิเษก และ ทางคู่ขนานลอยฟ้าบรมราชชนนี', 'บ้านเดี่ยว', 'บรมราชชนนี, บางระมาด, ตลิ่งชัน, กรุงเทพ', 'กรุงเทพมหานคร', '**ฟังก์ชันบ้าน** ห้องนอน : 5 ห้อง ห้องน้ำ : 5 ห้อง จำนวนชั้น : 2 ชั้น ที่จอดรถ : 4 คัน เนื้อที่ 135.5 ตารางวา - พื้นที่ใช้สอย 457 ตารางเมตร - หน้าบ้านหัน \"ทิศใต้\" - น้ำประปา ไฟฟ้าพร้อมเข้าอยู่ - ค่าใช้จ่ายส่วนกลางนิติบุคคล 226 บาท/เดือน', '13500000', 5, 5, 457, 24908, 'บ้านภาณุ-ปิ่นเกล้า-ตลิ่งชัน-ตลิ่งชัน-Thailand.jpg', 'บ้านภาณุ-ปิ่นเกล้า-ตลิ่งชัน-ตลิ่งชัน-Thailand (1).jpg', 'บ้านภาณุ-ปิ่นเกล้า-ตลิ่งชัน-ตลิ่งชัน-Thailand (2).jpg', 'บ้านภาณุ-ปิ่นเกล้า-ตลิ่งชัน-ตลิ่งชัน-Thailand (3).jpg', '13.771039', '100.417182', 'บริษัท บางกอก แอสเซท อินเตอร์กรุ๊ป จำกัด Co.,Ltd.', 952644465, 'test@gmail.com', '2021-11-26 09:13:50'),
(69, 1, 'บ้านเดี่ยว บางกอกบลูเลอวาร์ด รัชดา-รามอินทรา 2 เกษตรนวมินทร์', 'บ้านเดี่ยว', 'รามอินทรา, คันนายาว, คันนายาว, กรุงเทพ', 'กรุงเทพมหานคร', 'ขายบ้านเดี่ยว บางกอกบลูเลอวาร์ด รัชดา-รามอินทรา 2 เดินทางสะดวก ใกล้ห้างสรรพสินค้า  ที่ตั้ง : โครงการ บางกอกบลูเลอวาร์ด รัชดา-รามอินทรา2 ซอย 01 กาญจนาภิเษก 10/1 แขวง รามอินทรา เขตคันนายาว กรุงเทพมหานคร 10230', '12500000', 3, 4, 235, 42059, 'บางกอกบลูเลอวาร์ด-รัชดารามอินทรา-2-คันนายาว-Thailand.jpg', 'บางกอกบลูเลอวาร์ด-รัชดารามอินทรา-2-คันนายาว-Thailand (1).jpg', 'บางกอกบลูเลอวาร์ด-รัชดารามอินทรา-2-คันนายาว-Thailand (2).jpg', 'บางกอกบลูเลอวาร์ด-รัชดารามอินทรา-2-คันนายาว-Thailand (3).jpg', '13.819587', '100.651265', 'สุพัตรา แก่นแก้ว', 981596365, 'test@gmail.com', '2021-12-10 18:08:52'),
(70, 1, 'The Lakes Ratchadapisek', 'คอนโด', '123 ถนนรัชดาภิเษก แขวงคลองเตย เขตคลองเตย กทม., คลองเตย, กรุงเทพ', 'กรุงเทพมหานคร', 'ขาย The Lakes รัชดาภิเษก ราคาดีสุดในตึก ขนาด 109 ตารางเมตร 2 นอน 2 นอน ชั้น 22 ราคา 20,500,000 บาท', '20500000', 2, 2, 109, 188073, 'The-Lakes-Bangkok-คลองเตย-Thailand.jpg', 'The-Lakes-Bangkok-คลองเตย-Thailand (1).jpg', 'The-Lakes-Bangkok-คลองเตย-Thailand (2).jpg', 'The-Lakes-Bangkok-คลองเตย-Thailand (3).jpg', '13.733605', '100.56030', 'อัญชุลี ลองเฮิร์ทส', 971523121, 'test@gmail.com', '2021-12-10 18:12:52'),
(71, 3, 'ทาวน์เฮ้าส์ ม. พฤกษา 38/3 ไทรน้อย, นนทบุรี', 'ทาวน์เฮ้าส์', '41/178 บางกรวย-ไทรน้อย, ไทรน้อย, ไทรน้อย, นนทบุรี', 'นนทบุรี', 'Vาย ****ท/ฮ หมู่บ้านพฤกษา 38 ราคาขาย 1.45 ล้าน ไทรน้อย นนทบุรี #ราคาถูกมาก #ได้เงินเหลือกู้ #ด่วนก่อนหมด #นนทบุรี #โทรด่วน เนื้อที่ 17.8 ตรว. หน้ากว้าง 6 ม. 3นอน-2น้ำ-1ครัว-1จอด แถมแอร์ 4 ตัว เครื่องปั๊มน้ำ ต่อเติมหลังคาจอดรถพร้อมปูกระเบื้อง ต่อเติมหลังคาครัวพร้อมปูกระเบื้อง ห้องโถงกว้าง กระเบื้องแกรนิตโต้ ชั้นบนไม้ลามิเนต ผ้าม่าน บ้านใหม่พร้อมอยู่อาศัยได้เลย จอดรถยนต์ได้1คัน โครงการมีรปภรักษาความปลอดภัย 24 ชั่วโมง มีสวนสาธารณะ สนามเด็กเล่น นิติบุคคล ราคา 1,450,000 บาท ฟรีโอน', '1450000', 3, 2, 72, 20139, '-ท-ฮ-หมู่บ้านพฤกษา-38-ไทรน้อย-นนทบุรี-ไทรน้อย-Thailand.jpg', '-ท-ฮ-หมู่บ้านพฤกษา-38-ไทรน้อย-นนทบุรี-ไทรน้อย-Thailand (1).jpg', '-ท-ฮ-หมู่บ้านพฤกษา-38-ไทรน้อย-นนทบุรี-ไทรน้อย-Thailand (2).jpg', '-ท-ฮ-หมู่บ้านพฤกษา-38-ไทรน้อย-นนทบุรี-ไทรน้อย-Thailand (3).jpg', '13.986638', '100.324207', 'สุโชค poosiri', 851006691, 'test@gmail.com', '2021-12-10 18:18:13'),
(72, 3, 'ทาวน์โฮม 2 ชั้น Pleno สาทร สุขสวัสดิ์ ใกล้ทางด่วน ด่านสุขสวัสดิ์ บ้านสภาพสวยกริ๊ปๆ (ยังไม่ย้ายเข้าอยู่*) โซนหน้าโครงการ ใกล้สโมสร และสวนส่วนกลาง เพียง 2. 9 ล้าน', 'ทาวน์เฮ้าส์', 'ซอยสุขสวัสดิ์ 26 แยก 9-1 ถนนสุขสวัสดิ์, บางปะกอก, ราษฎร์บูรณะ, กรุงเทพ', 'กรุงเทพมหานคร', 'ทาวน์โฮม 2 ชั้น Pleno สาทร สุขสวัสดิ์ ใกล้ทางด่วน ด่านสุขสวัสดิ์ บ้านสภาพสวยกริ๊ปๆ (ยังไม่ย้ายเข้าอยู่*) โซนหน้าโครงการ ใกล้สโมสร และสวนส่วนกลาง เพียง 2.9 ล้าน  สงบส่วนตัวด้วยโครงการขนาดเล็กเพียง 117 หลัง  ทำเลที่ตั้งโครงการ : https://bit.ly/3cHHtDq  ราคา : 2.9 ล้าน  พื้นที่ : 17.5 ตรว. พื้นที่ใช้สอย : 105.45 ตรม.', '2900000', 2, 3, 105, 27619, 'Pleno-Sathorn-Suksawat-พลีโน่-สาทร-สุขสวัสดิ์-ราษฎร์บูรณะ-Thailand.jpg', 'Pleno-Sathorn-Suksawat-พลีโน่-สาทร-สุขสวัสดิ์-ราษฎร์บูรณะ-Thailand (1).jpg', 'Pleno-Sathorn-Suksawat-พลีโน่-สาทร-สุขสวัสดิ์-ราษฎร์บูรณะ-Thailand (2).jpg', 'Pleno-Sathorn-Suksawat-พลีโน่-สาทร-สุขสวัสดิ์-ราษฎร์บูรณะ-Thailand (3).jpg', '13.667160', '100.488869', 'PPB Home', 632451100, 'test@gmail.com', '2021-12-10 18:23:20'),
(73, 3, 'คอนโด 1 ห้องนอน ติดถนนสุขุมวิท @The Trust Condo South Pattaya', 'คอนโด', 'Sukhumvit สุขุมวิท, ห้วยใหญ่, พัทยา, พัทยา', 'ชลบุรี', 'The Trust Condo South Pattaya  1 ห้องนอน 1 ห้องน้ำ ชั้น 11 30.7 ตร.ม วิวเมือง  ขาย 1,555,000 บาท', '1555000', 1, 1, 31, 50651, 'THE-TRUST-CONDO-พัทยาใต้-พัทยา-Thailand.jpg', 'THE-TRUST-CONDO-พัทยาใต้-พัทยา-Thailand (1).jpg', 'THE-TRUST-CONDO-พัทยาใต้-พัทยา-Thailand (2).jpg', 'THE-TRUST-CONDO-พัทยาใต้-พัทยา-Thailand (3).jpg', '12.912988', '100.895052', 'Hot Real Estate', 950282582, 'test@gmail.com', '2021-12-10 18:27:47'),
(74, 3, 'บ้าน พัทยาเหนือ ถนนนาเกลือ มีสระว่ายน้ำส่วนตัว ใกล้ทะเลวงศ์อำมาตย์. House for sale North Pattaya, Naklua road, have private swimming pool, close to Wongamat Beach.', 'คอนโด', 'นาเกลือ, นาเกลือ, พัทยา, พัทยา', 'พัทยา', 'ขายบ้าน 3 ชั้น พัทยาเหนือ ถนนนาเกลือ ใกล้ทะเลวงศ์อำมาตย์ ตลาดสดอาหารทะเล ปราสาทสัจธรรม ใกล้เทอมินัล 21 บิ๊กซี และ โลตัส พัทยาเหนือ  ✨ขาย 13.9 ล้านบาท✨', '13900000', 6, 5, 328, 42378, 'Garden-Villa1-พัทยา-Thailand.jpg', 'Garden-Villa1-พัทยา-Thailand (1).jpg', 'Garden-Villa1-พัทยา-Thailand (2).jpg', 'Garden-Villa1-พัทยา-Thailand (3).jpg', '12.950222', '100.893545', 'วิลาสินี อุ่นใจ', 806271889, 'test@gmail.com', '2021-12-10 18:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `stud_name` varchar(191) NOT NULL,
  `stud_class` varchar(100) NOT NULL,
  `stud_phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stud_name`, `stud_class`, `stud_phone`) VALUES
(1, 'hong', '123', '091'),
(2, 'jame', '245', '081');

-- --------------------------------------------------------

--
-- Table structure for table `userpp`
--

CREATE TABLE `userpp` (
  `u_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userpp`
--

INSERT INTO `userpp` (`u_id`, `username`, `email`, `password`) VALUES
(1, 'patipan', 'patipan.kaewu@bumail.net', '4847ee3b16b92646302e827bc830ea70'),
(2, 'kasikorn', 'hongpatipan@hotmail.com', '4847ee3b16b92646302e827bc830ea70'),
(3, 'jirawa', 'jirawatsupachok2000@gmail.com', '0e765846d483b6c043549c891d16d3d4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpp`
--
ALTER TABLE `adminpp`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pnews_db`
--
ALTER TABLE `pnews_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_db`
--
ALTER TABLE `property_db`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpp`
--
ALTER TABLE `userpp`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpp`
--
ALTER TABLE `adminpp`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `county`
--
ALTER TABLE `county`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pnews_db`
--
ALTER TABLE `pnews_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `property_db`
--
ALTER TABLE `property_db`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userpp`
--
ALTER TABLE `userpp`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
