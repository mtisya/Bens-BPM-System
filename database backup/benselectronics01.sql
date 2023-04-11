-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 10:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benselectronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpmlinks`
--

CREATE TABLE `bpmlinks` (
  `siebelcircuit` int(11) NOT NULL,
  `customername` varchar(50) COLLATE utf8_bin NOT NULL,
  `projectmanager` varchar(50) COLLATE utf8_bin NOT NULL,
  `accountmanager` varchar(50) COLLATE utf8_bin NOT NULL,
  `physicaladdress` varchar(50) COLLATE utf8_bin NOT NULL,
  `bandwidth` varchar(50) COLLATE utf8_bin NOT NULL,
  `servicetype` varchar(50) COLLATE utf8_bin NOT NULL,
  `medium` varchar(50) COLLATE utf8_bin NOT NULL,
  `cperson` varchar(50) COLLATE utf8_bin NOT NULL,
  `cdetails` varchar(50) COLLATE utf8_bin NOT NULL,
  `status` enum('completed','wip','returned') COLLATE utf8_bin NOT NULL,
  `datereceived` date NOT NULL,
  `datecompleted` date NOT NULL,
  `comments` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='stores bpm link details';

--
-- Dumping data for table `bpmlinks`
--

INSERT INTO `bpmlinks` (`siebelcircuit`, `customername`, `projectmanager`, `accountmanager`, `physicaladdress`, `bandwidth`, `servicetype`, `medium`, `cperson`, `cdetails`, `status`, `datereceived`, `datecompleted`, `comments`) VALUES
(95000234, 'Base Titanium', 'Mary Murungi', 'Philip Wasike', 'Ukunda', 'IFB 10', 'MPLS', 'Fiber Passive', 'Jonathan Munguire', ' 254 78299002', 'completed', '2021-08-13', '2021-08-17', 'On hold'),
(95004926, 'Shreej Enterprise', 'James Konya', 'Vilenda Kiprop', 'Mariakana', '50 Mbps', 'Internet', 'Fiber Active', 'Hiren Andore', '0737560996', 'completed', '2021-08-18', '2021-08-25', 'Closed on BPM'),
(95060784, 'KCB Kilifi', 'Mary Murungi', 'Charles Mwangangi', 'Kilifi', 'IFB 20', 'LTE', 'Fiber GPON', 'Prince Mukasi', '0788299911', 'completed', '2021-08-13', '2021-08-20', 'Closed on BPM'),
(95063356, 'Jambo Steel', 'Dancan Mangori', 'Mwikali', 'Mariakani', 'IFB 3', 'MPLS', 'Fiber GPON', 'Musyoka', '7987477748', 'completed', '2021-08-18', '2021-08-27', 'Network Issues'),
(95067735, 'KCB Mariakana', 'Dancan Mangori', 'Mwikali', 'Mazeras', 'IFB 3', 'MPLS', 'Fiber GPON', 'Steve Kithi', '7987477748', 'completed', '2021-08-11', '2021-08-19', 'Network Issues'),
(95067774, 'Watu Credit', 'Geofry Muchiri', 'Hamisi Ndula', 'Malindi', '100 Mbps', 'Microwave', 'Ceragon', 'Prince Mukasi', '0788299911', 'returned', '2021-08-12', '2021-08-10', 'Not fiber Ready'),
(95067777, 'Jambo Steel', 'Dancan Mangori', 'Mwikali', 'Mariakani', 'IFB 3', 'MPLS', 'Fiber GPON', 'Steve Kithi', '7987477748', 'completed', '2021-08-26', '2021-08-21', 'Installation'),
(95067784, 'Jambo Steel', 'Dancan Mangori', 'Mwikali', 'Mariakani', 'IFB 3', 'MPLS', 'Fiber GPON', 'Steve Kithi', '0788299911', 'completed', '2021-08-13', '2021-08-20', 'Network Issues'),
(95067788, 'Kenya bureau of standards', 'Dancan Mangori', 'Mwikali', 'Lamu', 'IFB 3', 'E1', 'Fiber GPON', 'Saliah', '0788299911', 'completed', '2021-08-19', '2021-08-20', 'Network Issues'),
(95067884, 'NAGID ABUBAKAR', 'Mary Wangoi', 'Metrine Nicholas', 'MALINDI', '10 Mbps', 'Internet', 'Fiber GPON', 'Najid Abubakari', '0785643254', 'wip', '2021-08-20', '2021-08-27', 'Physical Installation'),
(95067886, 'East African Roadways', 'James Konya', 'Vallary Ubare', 'Mombasa Bonje', '15 Mbps', 'Internet', 'Fiber Active', 'East African Roadways', '0704555777', 'wip', '2021-08-20', '2021-08-26', 'Intergration'),
(95068955, 'Watu Credit', 'Geofrey Muchiri', 'Charles Mwangangi', 'Mazeras', '10 Mbps', 'Internet', 'Fiber Active', 'Amhed', '0788299911', 'wip', '2021-08-13', '2021-08-18', 'Intergration'),
(95069935, 'KCB Mariakana', 'Ernest Katama', 'Mwikali', 'Mariakani', 'IFB 3', 'MPLS', 'Fiber GPON', 'Steve Kithi', '7987477748', 'returned', '2021-08-12', '2021-08-19', 'Installation'),
(95069957, 'Yehu', 'Mary Murungi', 'Mwanahidi', 'Mariakana', '10 Mbps', 'gpon', 'LTE', 'Mwema', '078883993', 'completed', '2021-08-06', '2021-08-13', 'Installation'),
(95069978, 'Mephi Services', 'Nancy Mwithukia', 'Hassan Abdi', 'Lamu', '5 Mbps', 'Ceragon', 'LTE', 'Kathere Kausi', '0712795883', 'completed', '2021-08-12', '2021-08-14', 'Customer not ready'),
(95069981, 'Northen King Transporters', 'Broose Otieno', 'Vallary Ubare', 'Sourthen House Msa', 'IFB 5', 'Internet', 'Fiber GPON', 'Abdililahidir', '0729764770', 'wip', '2021-08-20', '2021-08-25', 'Closed on BPM'),
(95069982, 'LCL Logistics', 'Broose Otieno', 'Vilenda Kiprop', 'Appolo house Mombasa', 'IFB 10', 'Internet', 'Fiber GPON', 'Padma Vasaran', ' 254732581833', 'wip', '2021-08-18', '2021-08-25', 'On hold'),
(95073376, 'Immigration Ministry', 'Eureka Kingoo', 'Humphrey Njeru', 'Kilindini', '2 Mbps ', 'MPLS', 'Fiber Active', 'Isaih koril', '0721418200', 'wip', '2021-08-17', '2021-08-24', 'Physical Installation'),
(95073461, '748 AIR SERVICES (K) LTD', 'Beth Mulure', 'Karanja Susan', 'Moi International Airport', 'IFB 10', 'Internet', 'Fiber Active', 'Desmont Wagumba', ' 254728748007', 'wip', '2021-08-26', '2021-09-02', 'Physical Installation'),
(95073904, 'AMADEUS EA', 'Beth Muleru', 'Vallary Ubare', 'Mombasa, Meru Road', 'IFB 5', 'Internet', 'Fiber GPON', 'Francis Katiku', ' 254725224242', 'wip', '2021-08-26', '2021-09-02', 'Intergration'),
(110653066, 'MDZONGOLONI SECONDARY SCHOOL', 'Broose Otieno', 'MWANAIDI RAMADHAN', 'Mdzongoloni Sec School Kilifi', 'IFB 5', 'Internet', 'LTE', 'SPONSOR ', '745137201', 'completed', '2021-08-04', '2021-08-06', 'Closed on Mail'),
(110653450, 'REUVEN HAROUSH', 'Mary Murungi', 'Esther Mutisya', 'LAMU', 'IFB 5', 'Internet', 'LTE', 'N/A', 'N/A', 'wip', '2021-08-23', '2021-08-24', 'Physical Installation'),
(110653460, 'JACKLINE GATAVI OWALA', 'Mary Murungi', 'Esther Mutisya', 'Gasaro Road, Mtwapa', 'IFB 3', 'MPLS', 'LTE', 'Jackline Owala', '722909830', 'wip', '2021-08-20', '2021-08-23', 'Physical Installation'),
(110660535, 'Total Kenya - MIA ', 'James Konya', 'Esther Mutisya', 'Moi International Airport', 'IFB 5', 'Internet', 'LTE', 'Wesley Ongoti', '0722878016', 'wip', '2021-08-20', '2021-08-23', 'Intergration'),
(1105366483, 'Base Titanium - Likoni', 'Beth Muleru', 'Vilenda Kiprop', 'Taara Building', 'IFB 5', 'Internet', 'LTE', 'Dena Geofrey', '0766443566', 'wip', '2021-08-26', '2021-09-02', 'Physical Installation'),
(1107758847, 'Lucy Wangeci', 'Rispa Barasa', 'Vincent Nguli', 'Kilifi Bofa Road', '10 Mbps', 'Internet', 'LTE', 'Kituu Kimba', '07440035256', 'wip', '2021-08-26', '2021-08-27', 'Intergration');

-- --------------------------------------------------------

--
-- Table structure for table `entrylog`
--

CREATE TABLE `entrylog` (
  `workorder` varchar(50) COLLATE utf8_bin NOT NULL,
  `entry` int(11) NOT NULL,
  `clientname` varchar(50) COLLATE utf8_bin NOT NULL,
  `circuitid` bigint(11) NOT NULL,
  `projectmanager` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `contact` varchar(50) COLLATE utf8_bin NOT NULL,
  `servicetype` enum('E1/SIP','Internet','WAN/IP MPLS','PTP','Video Conference','Wi-Fi') COLLATE utf8_bin NOT NULL,
  `technology` enum('Active Fiber','Passive Fiber','Bespoke','Ceragon','LTE','Microwave','Wimax') COLLATE utf8_bin NOT NULL,
  `jobdescription` text COLLATE utf8_bin NOT NULL,
  `execution` enum('Deployment','Support') COLLATE utf8_bin NOT NULL,
  `status` enum('Completed','WIP','Returned','Pending','Onhold') COLLATE utf8_bin NOT NULL,
  `ipaddress` varchar(50) COLLATE utf8_bin NOT NULL,
  `physicallocation` varchar(50) COLLATE utf8_bin NOT NULL,
  `buildingname` varchar(50) COLLATE utf8_bin NOT NULL,
  `buildingid` varchar(50) COLLATE utf8_bin NOT NULL,
  `orderdeadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `entrylog`
--

INSERT INTO `entrylog` (`workorder`, `entry`, `clientname`, `circuitid`, `projectmanager`, `date`, `contact`, `servicetype`, `technology`, `jobdescription`, `execution`, `status`, `ipaddress`, `physicallocation`, `buildingname`, `buildingid`, `orderdeadline`) VALUES
('BES0002574', 2574, 'AFRICA DREAM LTD', 95069998, 'STEVEN NGOMBO', '2021-09-06', '0705349932 Rama', 'Internet', 'Active Fiber', 'New installation', 'Deployment', 'Completed', 'N/A', 'Lamu', 'Lamu lappest', 'N/A', '2021-09-13'),
('BES0002575', 2575, 'AFRICA DREAM LTD', 95069999, 'Steven Ngombo', '2021-09-06', '705349932 Rama', 'Internet', 'Active Fiber', 'New installation', 'Deployment', 'Completed', 'N/A', 'Lamu', 'Lamu lappest', 'N/A', '2021-09-13'),
('BES0002576', 2576, 'KENYA AIRPORTS AUTHORITY MALINDI', 95072612, 'Steven Ngombo', '2021-09-06', '0721944067 Stephen', 'Internet', 'Passive Fiber', 'New installation', 'Deployment', 'WIP', 'N/A', 'Malindi', 'KCAA Malindi', 'N/A', '2021-09-13'),
('BES0002577', 2577, 'TRANSFALGER ENTERPRISES LTD', 95069992, 'Steven Ngombo', '2021-09-06', '716588492 Rodger', 'Internet', 'Passive Fiber', 'Fiber installation', 'Deployment', 'WIP', 'N/A', 'Mombasa', 'Galaxy suri', 'N/A', '2021-09-13'),
('BES0002578', 2578, 'KENYA AIRPORTS AUTHORITY MOMBASA BACKUP', 95072614, 'Sammy Mutisya', '2021-09-06', '721944067 Stephen', 'Internet', 'Ceragon', 'Deployment new installation back up link', 'Deployment', 'WIP', 'N/A', 'Mombasa', 'MIA Mombasa', 'N/A', '2021-10-06'),
('BES0002579', 2579, 'KENYA AIRPORTS AUTHORITY MOMBASA PRIMARY', 95072608, 'Steven Ngombo', '2021-09-06', '0721944067 Stephen', 'Internet', 'Active Fiber', 'New installation - Primary Link', 'Deployment', 'WIP', 'N/A', 'Mombasa, Changamwe', 'MIA Mombasa', 'N/A', '2021-10-06'),
('BES0002580', 2580, 'LUCY MKAJUMA CHEA', 95069995, 'Steven Ngombo', '2021-09-07', '0722681011 Lucy', 'Internet', 'Passive Fiber', 'Fiber installation', 'Deployment', 'WIP', 'N/A', 'kilifi', 'AL-Madina', 'KLF242971', '2021-09-14'),
('BES0002581', 2581, 'JANET JACKSON AND SUSAN ADVOCATES', 95070607, 'Sammy Mutisya', '2021-09-08', '0797894689 JJ', 'Internet', 'Passive Fiber', 'Deployment - Internet installation', 'Deployment', 'Completed', 'N/A', 'Mombasa Town', 'NSSF House', 'N/A', '2021-09-15'),
('BES0002582', 2582, 'FRENCH DREAM LTD', 95069994, 'Steven Ngombo', '2021-09-08', '0735736908 Dominique', 'Internet', 'Passive Fiber', 'Deployment -New installation', 'Deployment', 'WIP', 'N/A', 'Diani', 'N/A', 'N/A', '2021-09-15'),
('BES0002583', 2583, 'NCPB-Mombasa_Depot', 95018599, 'Geofrey Dena', '2021-09-10', '722524414', 'WAN/IP MPLS', 'Wimax', 'Support - Migration', 'Support', 'WIP', '172.30.46.126', 'Mombasa', 'NCPB Depot Shimanzi', 'N/A', '2021-09-17'),
('BES0002584', 2584, 'URBANO LOUNGE LTD', 793456068, 'Steven Ngombo', '2021-09-11', 'Geoffrey 722218429', 'Internet', 'LTE', 'Support - Relocation', 'Support', 'Completed', 'Dynamic', 'Mombasa', 'N/A', 'N/A', '2021-09-13'),
('BES0002585', 2585, 'KENYA AIRPORTS AUTHORITY-MALINDI BACKUP', 95072618, 'Dena', '2021-09-11', '0721944067 Stephen', 'Internet', 'Ceragon', 'Support -  New installation', 'Support', 'WIP', 'N/A', 'Malindi', 'KCAA Malindi', 'N/A', '2021-09-17'),
('BES0002586', 2586, 'HAPA KENYA', 95074002, 'Mercy Nzilili', '2021-09-11', '0721838459 Martin', 'Internet', 'Active Fiber', 'Support - relocation', 'Support', 'WIP', 'N/A', 'Mombasa, Kongowea', 'Hapa Kenya Kongowea', 'N/A', '2021-09-17'),
('BES0002587', 2587, 'SAFEPAK LTD', 95074004, 'Steven Ngombo', '2021-09-11', '0724390700 Catherine', 'Internet', 'Active Fiber', 'deployment ', 'Deployment', 'Returned', 'N/A', 'Vipingo', 'N/A', 'N/A', '2021-09-17'),
('BES0002588', 2588, 'ROBSON HARRIS AND CO', 95073573, 'Geofrey Dena', '2021-09-13', '724320135 Julie', 'Internet', 'Passive Fiber', 'Support Jobs', 'Support', 'Completed', 'N/A', 'Mombasa', 'Ralli House', 'N/A', '2021-09-20'),
('BES0002589', 2589, 'MOHAMED HASSAN', 95072963, 'Sammy Mutisya', '2021-09-14', '0729232380 Mohamed', 'Internet', 'Passive Fiber', 'Installation of fiber passive', 'Deployment', 'Returned', 'N/A', 'Mombasa', 'Post Bank HSE', 'MBS141073', '2021-09-21'),
('BES0002590', 2590, 'SOTE LOGISTICS', 95072957, 'Stevens Ngombo', '2021-09-14', '0795579079 Susan', 'Internet', 'Passive Fiber', 'Deployment new installation', 'Deployment', 'Completed', 'N/A', 'Mombasa', 'Jubilee Arcade', 'MBS142533', '2021-09-21'),
('BES0002591', 2591, 'FATUMA UMAZI MWARUWA', 95067881, 'Steven Ngombo', '2021-09-14', '0757785030 Fatuma', 'Internet', 'Active Fiber', 'Deployment of fiber active installation', 'Deployment', 'Completed', 'N/A', 'Mariakani', 'Comfort Hotel', 'N/A', '2021-09-21'),
('BES0002592', 2592, 'SIMON NDURU KAGIA', 95074005, 'Geofrey Dena', '2021-09-14', '0702639900 Simon', 'Internet', 'Active Fiber', 'Support', 'Support', 'Completed', 'N/A', 'Ukunda', 'Umbi Complex', 'N/A', '2021-09-21'),
('BES0002593', 2593, 'SAFARI DOCTORS LTD', 95075214, 'Steven', '2021-09-16', ' 254721779081', 'Internet', 'Active Fiber', 'Installation of new fiber', 'Deployment', 'Completed', 'N/A', 'Lamu', 'N/A', 'N/A', '2021-09-23'),
('BES0002594', 2594, 'SAFARICOM LIMITED, ELI ZAPHAN HOUSE', 95074015, 'Steven Ngombo', '2021-09-16', ' 254700732529', 'Internet', 'Passive Fiber', 'Installation of new fiber to the business ', 'Deployment', 'WIP', 'N/A', 'MALINDI', 'ELI ZAPHAN HOUSE', 'N/A', '2021-09-23'),
('BES0002595', 2595, 'MARY GORRETI OCHWADA', 95074012, 'Steven Ngombo', '2021-09-17', 'Mary  254722326615', 'Internet', 'Passive Fiber', 'Deploy installation', 'Deployment', 'WIP', 'N/A', 'MALINDI', 'MALINDI COMPLEX', 'MLN141660 ', '2021-09-24'),
('BES0002596', 2596, 'ACK PWANI CHRISTIAN SERVICES-HANNAH MWANCIFI', 95074016, 'Sammy', '2021-09-17', 'Willis Oguta', 'Internet', 'Passive Fiber', 'Deploy new nstallation of fiber Passive', 'Deployment', 'WIP', 'N/A', 'Mombasa', 'ACK PLAZA', 'MBS141117', '2021-09-24'),
('BES0002597', 2597, 'DANCO HARDWARE AND ELECTRICALS', 95074013, 'Sammy Mutisya', '2021-09-18', ' 254718669192 Danco Hardware', 'Internet', 'Passive Fiber', 'Installation of passive fiber', 'Deployment', 'Returned', 'N/A', 'Ukunda', 'SIKU NJEMA PLAZA', 'N/A', '2021-09-25'),
('BES0002598', 2598, 'ASP  COMPANY LIMITED-2', 110653735, 'Stevens', '2021-09-22', 'Sai Srinivas 718848479           ', 'Internet', 'LTE', 'LTE New Installation', 'Deployment', 'Returned', 'N/A', 'KAJIADO COUNTY, ISINYA', 'N/A', 'N/A', '2021-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

CREATE TABLE `instructions` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `mhr` float NOT NULL,
  `pax` int(11) NOT NULL,
  `artisan` varchar(50) COLLATE utf8_bin NOT NULL,
  `instruction` varchar(50) COLLATE utf8_bin NOT NULL,
  `rate` float NOT NULL,
  `amount` int(11) NOT NULL,
  `orderid` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `date`, `mhr`, `pax`, `artisan`, `instruction`, `rate`, `amount`, `orderid`) VALUES
(31, '2021-09-11', 0.3, 6, 'Technician', 'install fiber Gpon', 2.5, 4500, 'BES0002580'),
(32, '2021-09-13', 2.8, 400, 'Alex Muthui', 'Installation fiber passive', 2, 5500, 'BES0002588'),
(36, '2021-09-07', 0.5, 4, 'Sammy', 'Installation', 45, 9500, 'BES0002588');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `stockcode` varchar(50) COLLATE utf8_bin NOT NULL,
  `quantity` int(11) NOT NULL,
  `um` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` varchar(50) COLLATE utf8_bin NOT NULL,
  `up` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `orderid` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `stockcode`, `quantity`, `um`, `description`, `up`, `value`, `orderid`) VALUES
(5, 'Flex', 1, 'meters ', 'Connecting flex', 150, 200, '95073904'),
(6, 'Trunk', 1, 'pcs', 'trunking', 150, 150, '95063804'),
(7, 'CabT', 30, 'pcs', 'cable ties', 20, 600, '95068704'),
(12, 'tr45', 4, 'meters ', 'Trunking ', 10, 40, 'BES0002576');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `session` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `year`, `session`) VALUES
(65, '2020', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_no` bigint(20) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `mobileno` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `id_no`, `email`, `username`, `mobileno`) VALUES
(7, 'Mike', 'Wanaswa', 240678390, 'mike@yahoo.com', 'Munaa', '075432678'),
(8, 'sammy', 'Nzuki', 35627881, 'mwangi@yahoo.com', 'samtish2010@gmail.com', '+2547233334');

-- --------------------------------------------------------

--
-- Table structure for table `surveyjobs`
--

CREATE TABLE `surveyjobs` (
  `customername` varchar(50) COLLATE utf8_bin NOT NULL,
  `solutionarchitect` varchar(50) COLLATE utf8_bin NOT NULL,
  `physicaladdress` varchar(50) COLLATE utf8_bin NOT NULL,
  `coordinates` varchar(50) COLLATE utf8_bin NOT NULL,
  `surveytype` varchar(50) COLLATE utf8_bin NOT NULL,
  `reqcode` varchar(50) COLLATE utf8_bin NOT NULL,
  `contactperson` varchar(50) COLLATE utf8_bin NOT NULL,
  `contactdetails` bigint(50) NOT NULL,
  `fieldengineer` varchar(50) COLLATE utf8_bin NOT NULL,
  `engcontacts` bigint(50) NOT NULL,
  `datereceived` date NOT NULL,
  `comments` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `surveyjobs`
--

INSERT INTO `surveyjobs` (`customername`, `solutionarchitect`, `physicaladdress`, `coordinates`, `surveytype`, `reqcode`, `contactperson`, `contactdetails`, `fieldengineer`, `engcontacts`, `datereceived`, `comments`) VALUES
('ACK BISHOP HANNINGTON INSTITUT', 'Rose Kimani', 'Mombasa - Buxton', '4 2 41.26 S 39 40 13.34 E', 'Microwave', 'REQ000003579810', 'Alfred Onyango', 712479833, 'Benson Mangenyi', 726732491, '2021-09-20', 'Building NOT Fiber ready, Manhole 300mtrs away. There\'s LOS, NO Ceragon covarage,LTE signal is good'),
('Amadeus Mada', 'Daniel Kinuthia', 'Diani Ukunda', '4 56 56.67 S 39 34 34.54', 'Microwave', 'REQ00000435443', 'Kinyua', 0, 'Benson', 3547729902, '2021-08-19', 'Building is Fiber ready, LTE Coverage'),
('BOC Kenya LTD', 'Daniel Kinuthia', 'Liwatoni - Mombasa', '4 03 56.2 S 39 39 35.3 E', 'All Media', 'REQ00000354834', 'Peter Muraya', 725824649, 'Danson/Nyiro', 702514903, '2021-08-25', 'Building is Not Fiber ready, LTE is Posible'),
('Cook N Lite', 'Rose Kimani', 'Jela Baridi', '4 2 46.31 S 39 39 17.70 E', 'All Media', 'N/A', 'Cleopas Juma', 737578050, 'Benson Mangenyi', 726732491, '2021-09-20', 'Building Not fiber ready, Manhole 300Mtrs,LOS at Rooftop,Lte Signal good, No Ceragon Coverage'),
('Faulu Bank', 'Rose Kimani', 'Mazeras', '4 56 56.67 S 39 34 34.56 E', 'WiFi', 'REQ00000433454', 'Muthuka', 786533124, 'Benson', 3547729902, '2021-08-26', 'Building is Fiber ready'),
('Faulu Branch - Mombasa', 'Samuel Mwangi', 'Mombasa Town', '-4.6999 S 39.7778', 'WiFi', 'REQ0000043556', 'Amhed', 734256678, 'Nyiro', 724567621, '2021-08-26', 'Microwave, LTE, Ceragon Coverage'),
('Jambo Steel', 'Daniel Kinuthia', 'Malindi', 'N/A', 'WiFi', 'REQ0000043556', 'Muthuka', 7987477748, 'Ezekiel', 724516789, '2021-08-11', 'Building is Fiber ready'),
('Kyosk Digital Services', 'Kelvin Kuria', 'Millie Fruits Processors', '3 56 37.5 S 39 44 44 E', '', 'REQ000003578042', 'Paul Yamoh', 110941308, 'Ron/Mercy', 708040163, '2021-09-20', 'Not fiber Ready, JTL and Access Available, LTE'),
('Safarilympics(sportday/Events)', 'Rose Kimani', 'Mombasa Sports Club', '4 3 49.03 S 39 40 3.33 E', 'All Media', 'REQ000003539257', 'Roe Kimani', 718732253, 'Nicholas Nyundo', 728997284, '2021-08-24', 'LTE Coverage,Microwave - Clear LOS to Mbarari BTS'),
('Watu Credit', 'Abraham Agol', 'Kilifi', '4 56 56.67 S 39 34 34.56 E', '', 'REQ00000435443', 'Muthuka', 786533124, 'Ezekiel', 3547729902, '2021-08-17', 'Not fiber Ready');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`) VALUES
(18, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpmlinks`
--
ALTER TABLE `bpmlinks`
  ADD PRIMARY KEY (`siebelcircuit`);

--
-- Indexes for table `entrylog`
--
ALTER TABLE `entrylog`
  ADD PRIMARY KEY (`workorder`);

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveyjobs`
--
ALTER TABLE `surveyjobs`
  ADD PRIMARY KEY (`customername`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
