-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2023 at 01:19 PM
-- Server version: 10.1.48-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apex_apexengltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `company` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `vision` text COLLATE utf8mb4_unicode_ci,
  `values` text COLLATE utf8mb4_unicode_ci,
  `image_one` text COLLATE utf8mb4_unicode_ci,
  `image_two` text COLLATE utf8mb4_unicode_ci,
  `image_three` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `content`, `company`, `mission`, `vision`, `values`, `image_one`, `image_two`, `image_three`, `created_at`, `updated_at`) VALUES
(1, '<p><span style=\"color: #000000;\">Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists, and technical specialists offering a broad range of professional services. At Apex Engineering LTD our work reflects our pride; we make it our number one goal to deliver practical, yet cost-efficient solutions tailored to meet your engineering needs and exceed your project expectations. We utilize the most modern communication and engineering technology to enhance our design methods, providing the most successful solutions to improve the overall value of your project.</span></p>\r\n                            <p><span style=\"color: #000000;\">At Apex Engineering LTD we commit the same attention and expertise to every project in our office. We have engineered a diverse range of projects including large master planned and mixed use communities, single and multi-family residential developments, commercial and retail shopping centers, office parks, industrial areas, schools, institutional centers, and government offices.</span></p>\r\n                            <p><span style=\"color: #000000;\">Founded in 2013 in Mogadishu Somalia, Apex Engineering has an established and respected reputation based on technical expertise, strong communication and personal and professional service. Our exceptional team skills and dynamic personalities have enabled us to thrive for nearly 6 years. Our team includes licensed Professional Engineers, Professional Land Surveyors, technicians, field crews, and support staff.</span>', '<p><span style=\"color: #000000;\">Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists, and technical specialists offering a broad range of professional services. At Apex Engineering LTD our work reflects our pride; we make it our number one goal to deliver practical, yet cost-efficient solutions tailored to meet your engineering needs and exceed your project expectations. We utilize the most modern communication and engineering technology to enhance our design methods, providing the most successful solutions to improve the overall value of your project.</span></p>\r\n                        <p><span style=\"color: #000000;\">At Apex Engineering LTD we commit the same attention and expertise to every project in our office. We have engineered a diverse range of projects including large master planned and mixed use communities, single and multi-family residential developments, commercial and retail shopping centers, office parks, industrial areas, schools, institutional centers, and government offices.</span></p>\r\n                        <p><span style=\"color: #000000;\">Founded in 2013 in Mogadishu Somalia, Apex Engineering has an established and respected reputation based on technical expertise, strong communication and personal and professional service. Our exceptional team skills and dynamic personalities have enabled us to thrive for nearly 6 years. Our team includes licensed Professional Engineers, Professional Land Surveyors, technicians, field crews, and support staff.</span>', 'To be the recognized leader in creating desirable communities, while leaving a legacy of excellence.', 'To provide quality services through loyal relationships, clear communication and creative solutions within our unique work environment while achieving personal and community growth.', '<ul>\r\n                            <li>Efficiency- We assists our clients in developing appropriate and sustainable solutions that achieve outcomes and maximize performance.</li>\r\n                            <li>Collaboration- We work as a team in partnership with our clients, government agencies and other stakeholders</li>\r\n                            <li>Accountability – We uphold the highest ethical standards and model the processes we recommend.</li>\r\n                            <li>A Learning Organization – We value feedback, seek and evaluate data about our own performance, adjust and adapt to changing circumstances. We listen to and learn from our customers and the community and reflect this learning in our work.</li>\r\n                            <li>Do No Social and Environmental Harm</li>\r\n                            </ul>', 'pic13.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accountbalance`
--

CREATE TABLE `accountbalance` (
  `accountBalID` int(11) NOT NULL,
  `WorkingAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FloatAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UtilityAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChargesPaidAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrganizationSettlementAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BOCompletedTime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountbalance`
--

INSERT INTO `accountbalance` (`accountBalID`, `WorkingAccount`, `FloatAccount`, `UtilityAccount`, `ChargesPaidAccount`, `OrganizationSettlementAccount`, `BOCompletedTime`, `updatedTime`) VALUES
(1, '1.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 14:40:04'),
(2, '1.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 14:46:32'),
(3, '1.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 14:59:36'),
(4, '1.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(5, '1.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(6, '1.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(7, '1.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(8, '1.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(9, '1.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(10, '2.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(11, '2.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(12, '2.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(13, '2.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(14, '2.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(15, '2.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(16, '2.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(17, '2.00', '0.00', '11974737.63', '-153780.00', '0.00', '20210412134119', '2021-04-12 15:00:40'),
(18, '1.00', '0.00', '14327809.13', '-176110.00', '0.00', '20210426155625', '2021-04-26 08:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-10-14 14:19:05', '2021-10-14 14:19:05'),
(2, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-10-15 10:03:26', '2021-10-15 10:03:26'),
(3, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-10-25 11:06:38', '2021-10-25 11:06:38'),
(4, 'default', 'User Accessed Site Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-10-25 11:06:53', '2021-10-25 11:06:53'),
(5, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-10-25 11:07:05', '2021-10-25 11:07:05'),
(6, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-10-25 11:14:14', '2021-10-25 11:14:14'),
(7, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-10-25 11:14:17', '2021-10-25 11:14:17'),
(8, 'default', 'Evoked an Edit Blog Operation For Blog ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-10-25 11:18:34', '2021-10-25 11:18:34'),
(9, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-10-25 11:18:34', '2021-10-25 11:18:34'),
(10, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 18:14:08', '2022-06-03 18:14:08'),
(11, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 18:14:21', '2022-06-03 18:14:21'),
(12, 'default', 'Accessed Edit Blog For Blog ID number 4 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 18:14:40', '2022-06-03 18:14:40'),
(13, 'default', 'Evoked an Edit Blog Operation For Blog ID number 4 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 18:16:52', '2022-06-03 18:16:52'),
(14, 'default', 'Accessed Edit Blog For Blog ID number 4 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 18:16:53', '2022-06-03 18:16:53'),
(15, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 18:59:39', '2022-06-03 18:59:39'),
(16, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 18:59:46', '2022-06-03 18:59:46'),
(17, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 18:59:49', '2022-06-03 18:59:49'),
(18, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 19:36:31', '2022-06-03 19:36:31'),
(19, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:36:43', '2022-06-03 22:36:43'),
(20, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:36:52', '2022-06-03 22:36:52'),
(21, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:37:03', '2022-06-03 22:37:03'),
(22, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:39:31', '2022-06-03 22:39:31'),
(23, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:41:33', '2022-06-03 22:41:33'),
(24, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:41:39', '2022-06-03 22:41:39'),
(25, 'default', 'Accessed Edit Blog For Blog ID number 4 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:41:42', '2022-06-03 22:41:42'),
(26, 'default', 'Evoked an Edit Blog Operation For Blog ID number 4 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:42:18', '2022-06-03 22:42:18'),
(27, 'default', 'Accessed Edit Blog For Blog ID number 4 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:42:18', '2022-06-03 22:42:18'),
(28, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:43:31', '2022-06-03 22:43:31'),
(29, 'default', 'Evoked a delete Blog Request', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:43:48', '2022-06-03 22:43:48'),
(30, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-03 22:43:52', '2022-06-03 22:43:52'),
(31, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-09-29 13:22:24', '2022-09-29 13:22:24'),
(32, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, 'App\\Models\\User', 1, '[]', '2023-08-04 10:10:40', '2023-08-04 10:10:40'),
(33, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2023-08-04 10:11:01', '2023-08-04 10:11:01'),
(34, 'default', 'Accessed Edit Blog For Blog ID number 0 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2023-08-04 10:11:06', '2023-08-04 10:11:06'),
(35, 'default', 'Evoked an Edit Blog Operation For Blog ID number 0 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2023-08-04 10:11:22', '2023-08-04 10:11:22'),
(36, 'default', 'Accessed Edit Blog For Blog ID number 0 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2023-08-04 10:11:22', '2023-08-04 10:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `b2b_api_response`
--

CREATE TABLE `b2b_api_response` (
  `b2bTransactionID` int(11) NOT NULL,
  `TransactionID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InitiatorAccountCurrentBalance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitAccountCurrentBalance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyAffectedAccountBalance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransCompletedTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyCharges` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReceiverPartyPublicName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Currency` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b2c_api_response`
--

CREATE TABLE `b2c_api_response` (
  `b2bID` int(11) NOT NULL,
  `TransactionReceipt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionAmount` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CWorkingAccountAvailableFunds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CUtilityAccountAvailableFunds` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionCompletedDateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReceiverPartyPublicName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CChargesPaidAccountAvailableFunds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CRecipientIsRegisteredCustomer` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b2c_api_response`
--

INSERT INTO `b2c_api_response` (`b2bID`, `TransactionReceipt`, `TransactionAmount`, `B2CWorkingAccountAvailableFunds`, `B2CUtilityAccountAvailableFunds`, `TransactionCompletedDateTime`, `ReceiverPartyPublicName`, `B2CChargesPaidAccountAvailableFunds`, `B2CRecipientIsRegisteredCustomer`, `UpdatedTime`) VALUES
(1, 'PDQ51HIU7R', '2500', '1', '14325276.13', '26.04.2021 15:58:41', '254708374149 - John Doe', '-186835', 'Y', '2021-04-26 08:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `section`, `image`, `created_at`, `updated_at`) VALUES
(1, 'about_us', 'about_us', 'single-service1.jpg', NULL, NULL),
(2, 'contact_us', 'contact_us', 'single-service1.jpg', NULL, NULL),
(3, 'our_courses', 'our_courses', 'single-service1.jpg', NULL, NULL),
(4, 'legal_pages', 'about_us', 'single-service1.jpg', NULL, NULL),
(5, 'home_page', 'background', 'single-service1.jpg', NULL, NULL),
(6, 'faq_page', 'banner', 'in-blog-image-10.jpg', NULL, NULL),
(7, 'home_page_one', 'banner', 'mayofi-HASoyURgPMY-unsplash.jpg', NULL, NULL),
(8, 'home_page_two', 'banner', 'marga-santoso-OmPqCwX422Y-unsplash.jpg', NULL, NULL),
(9, 'home_page_three', 'banner', 'in-section-profit-3.png', NULL, NULL),
(10, 'signin', 'banner', 'in-signin-image.jpg', '2021-04-16 04:00:00', '2021-04-16 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `active`, `link`, `slung`, `title`, `tags`, `video`, `meta`, `content`, `author`, `category`, `image_one`, `image_two`, `image_three`, `image_four`, `created_at`, `updated_at`) VALUES
(0, 1, NULL, 'the-end-of-rfis-its-time-to-stop-automating-wasteful-construction-processes', 'The End of RFIs: It’s Time to Stop Automating Wasteful Construction Processes', NULL, NULL, 'At Auto-desk, we’ve made it our mission to make the lives of construction professionals easier. One of the most critical ways we do this is by providing solutions that automate the various processes and tasks that happen during a construction project.  ', '<span id=\"span-14-14439\" class=\"ct-span oxy-stock-content-styles\">\r\n<p>At Autodesk, we’ve made it our mission to make the lives of construction professionals easier. One of the most critical ways we do this is by providing solutions that automate the various processes and tasks that happen during a construction project.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p>Case in point: Autodesk Construction Cloud’s request for information (RFI) capabilities. Our software enables stakeholders to manage one of the most common processes on a project by submitting, assigning, and answering <a href=\"https://constructionblog.autodesk.com/construction-rfi-template/\">RFIs </a>with just a few clicks. We provide an easy-to-use solution that<a href=\"https://construction.autodesk.com/customers/pond/\" target=\"_blank\" rel=\"noreferrer noopener\"> saves teams time,</a> and our customers love it.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p>But I want to let you in on a little secret: while we have a robust solution to manage RFI workflow, <strong>we aspire to help our customers eliminate RFIs altogether.&nbsp;&nbsp;</strong></p>\r\n\r\n\r\n\r\n<p>Sure, this might be wishful thinking. I concede that some RFIs will always need to happen. But what if you could cut down on at least 50%, if not 75%, of them on a project?&nbsp;</p>\r\n\r\n\r\n\r\n<p>We think it’s possible.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<h2 class=\"wp-block-heading\">The problem with RFIs&nbsp;</h2>\r\n\r\n\r\n\r\n<p>Why do RFIs even occur in the first place? Most stem from information—specifically, a <em>lack </em>of it. (Some exceptions apply, of course, such as confirming contract documents.) &nbsp;</p>\r\n\r\n\r\n\r\n<p>When workers on site need critical information or clarification to move forward, they initiate an RFI. On a typical project, this might play out when a subcontractor discovers a discrepancy in the drawings or, say, finds a key detail was left out of the original contract scope. In both cases, the subcontractor works quickly to submit an RFI to the general contractor (GC), which begins a waiting game.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p><strong>The average response time to an RFI is <a href=\"https://constructionblog.autodesk.com/construction-industry-statistics/\">9.7 days</a></strong> –<em>if </em>a response is even given<em>.</em> Usually, if a GC is unable to provide satisfactory or timely information, the subcontractor forwards the RFI to the architect or engineer responsible for the project design, which can then stall jobsite work even further until the information becomes available.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p>The “hurry up and wait” RFI process interrupts project momentum. While the primary purpose of an RFI is to reduce the need for time-consuming and expensive rework, the process <em>itself </em>is time-consuming and negatively impacts schedules and budgets. Just as worse, the project team’s morale is affected by an RFI pile-up.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p>Technology undeniably helps streamline the workflow, but RFIs are still a wasteful process that we’re better off working to eliminate. In short, project team members on a jobsite should <em>already </em>have access to all the information they need immediately at their fingertips and have a collaborative digital process to eliminate those RFIs that need quick clarification or confirmation.&nbsp;</p>\r\n\r\n\r\n\r\n<h2 class=\"wp-block-heading\"><strong>The high costs of wasteful processes</strong>&nbsp;</h2>\r\n\r\n\r\n\r\n<p>Wasteful processes are a significant pain point in the construction industry, causing businesses to lose millions of dollars annually. <strong>On average, there are 9.9 RFIs for each <a href=\"https://www.cmaanet.org/sites/default/files/resource/Impact%20%26%20Control%20of%20RFIs%20on%20Construction%20Projects.pdf\" target=\"_blank\" rel=\"noreferrer noopener\">$1M of construction </a>project value from a sample of projects ranging from $5M to $5B, costing a typical large-scale construction project almost $900,000 in RFI processing costs.&nbsp;</strong></p>\r\n\r\n\r\n\r\n<p>By eliminating and not just automating wasteful processes – by getting rid of the very need for most RFIs – we pave the way for <a href=\"https://constructionblog.autodesk.com/secret-to-protecting-construction-profits/\" target=\"_blank\" rel=\"noreferrer noopener\">wider profit margins</a>, resulting in more resilient companies and a more sustainable construction industry.&nbsp;&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p>Transforming the very nature of workplace behaviors and processes like RFIs is precisely what we\'re committed to doing at Autodesk. We believe it’s truly how we make the industry more efficient, safer, and better for everyone involved.&nbsp;</p>\r\n\r\n\r\n\r\n<h2 class=\"wp-block-heading\">How to address challenges before they become wasteful processes&nbsp;</h2>\r\n\r\n\r\n\r\n<p>The construction industry must work together to affect the change needed to eliminate broken procedures that cost us time and money. We’d then have the resources to devote more energy towards high-value activities that grow the bottom line.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p>Here are several shifts that need to happen to break the mold of process waste and transform how AEC works:&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<h3 class=\"wp-block-heading\"><strong>Embrace the building blocks of connected construction</strong>&nbsp;</h3>\r\n\r\n\r\n\r\n<p>“Connected construction” refers to a vision for the built environment where stakeholders communicate effectively, and tasks and processes are optimized throughout the entire lifecycle of a building, from design all the way through to long-term operations.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p>Process efficiency and enhanced communication are wonderful outcomes, of course. What doesn’t get discussed as frequently as these end results are the required elements needed to make a project connected in the first place: data and insights.&nbsp;</p>\r\n\r\n\r\n\r\n<p>But why is construction currently disconnected? It usually stems from missing or outdated information and teams and data that are in silos.<strong> As in the case of RFIs, a lack of information creates an entirely superfluous process that’s time-consuming and, most importantly for a margin-starved industry, expensive.&nbsp;</strong></p>\r\n\r\n\r\n\r\n<p>At its core, connected construction is about creating \"roundtrip information.\" Data needs to be highly visible and discoverable, up-to-date, and distilled for actionable insights to get the desired outcome of efficiency and a reduction of wasteful processes.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<h3 class=\"wp-block-heading\"><strong>Leverage the power of integrated design and preconstruction</strong>&nbsp;</h3>\r\n\r\n\r\n\r\n<p>A common data environment (CDE) is critical to connecting data, workflows, and teams, starting in the earliest phases of planning and design all the way through handover and into operations. Instead of multiple point solutions, a CDE platform brings all project data, including information within integrated third-party applications, into one system to create a connected technology ecosystem.&nbsp;</p>\r\n\r\n\r\n\r\n<p><strong>Preconstruction offers the biggest opportunity to reduce or eliminate wasteful processes and de-risk a project. Done right, preconstruction allows you to simulate the job—i.e., have a digital rehearsal process—<em>before</em> ground breaks</strong>. When you develop a strong connection and stream of information between workflows and stakeholders during the earliest planning phase with a connected ecosystem, preconstruction can be your ultimate competitive advantage.&nbsp;</p>\r\n\r\n\r\n\r\n<p>Also consider this: a typical $100 million project takes 30 months in design and preconstruction (and only 18 months to build). During this period, the project is exposed to many types of risk, including design creep and price escalations, which can compromise project timelines and budget.&nbsp;</p>\r\n\r\n\r\n\r\n<p>Teams can avoid these challenges through integrated design. By connecting the design phase with downstream processes such as quantity takeoff, scoping, estimating, and buyout, your teams can effectively convert ideas into tangible construction plans. This approach fosters greater cost and schedule predictability while streamlining the construction process.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p>It empowers you and your teams to preview the entire project and <em>build it right before it is built right.</em>&nbsp;</p>\r\n\r\n\r\n\r\n<h2 class=\"wp-block-heading\">The beginning of the end for RFIs&nbsp;</h2>\r\n\r\n\r\n\r\n<p>Wasteful processes such as RFIs won’t disappear overnight. But what if you started “small” and could cut them down by 25%? Think of the time and hundreds of thousands of potential dollars that could improve your bottom line, not to mention reduce the aggravation your project team endures.&nbsp;</p>\r\n\r\n\r\n\r\n<p>And RFIs are but just one example. What if we were able to decrease issues in the field, as well as streamline their resolution? Instead of using technology to simply manage schedule changes, think about the time and resources you could save by creating schedule certainty upfront. The list of possibilities—wasteful processes to eliminate—could go on and on.&nbsp;&nbsp;</p>\r\n\r\n\r\n\r\n<p>Our vision starts at the beginning: by shaking up the entire digital construction system so it’s optimized for success from the start. The time is now to embrace connected data and technology and invest in integrated design and preconstruction. This is the direction the industry is heading. The only question that remains is, are you ready to join us?&nbsp;</p>\r\n\r\n\r\n\r\n<p><em></em><a href=\"https://construction.autodesk.com/\" target=\"_blank\" rel=\"noreferrer noopener\"><em>Learn how the Autodesk Construction Cloud platform keeps everyone on the same page at every stage</em></a><em>. </em>&nbsp;</p>\r\n</span>', 'Admin', '7', '2023-08-0406:11:22imagethe-end-of-construction-rfis.webp', NULL, NULL, NULL, '2023-07-05 13:08:11', '2023-07-05 13:08:24'),
(1, 1, NULL, 'reinforced-cement-concrete-in-building-construction', 'Reinforced Cement Concrete in Building Construction', 'Educations', NULL, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.', '<p>   If you are going to construct a new house, it is essential to know the prime components used in building construction. The knowledge of these materials helps in making smart and budget-friendly decisions. Reinforced Cement Concrete is one of those materials, which is a prime and well-known term in building construction.</p>\r\n\r\n<h3>What is Reinforced Cement Concrete?</h3>\r\n\r\n<p>\r\nConcrete is a versatile construction material, which is obtained by hardening a mixture of cement, sand, gravel and water in well-proportioned quantities. As we all are aware that, concrete has a very high compressive strength but low in tensile strength. Wherever tensile forces are involved like in slabs and beams, it is recommended not to use plain concrete.\r\n<br><br>\r\nSo, adding steel to the concrete is the solution, as we know it has high tensile strength and also possesses good compressive strength. However, the bond between concrete and steel works well, and when these two are combined called reinforcement. After the alliance, the material is known as Reinforced Cement Concrete.\r\n</p>\r\n\r\n<p>\r\nNow the material (R.C.C) is capable of withstanding compressive loads, tensile stresses and shear forces upon any structure. It has already proved remarkably useful and reliable in building construction.\r\n</p>\r\n\r\n<h2 style=\"text-align: justify;\"><span style=\"font-size: medium; color: #3366ff;\">Properties of Reinforced Cement Concrete </span></h2>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp;Reinforced concrete is a structural material, and a good one should meet all the requirements ensuring its quality and sustainability. Here are some of the properties of good R.C.C.</p>\r\n<p style=\"text-align: justify;\">• It should be capable of withstanding compressive, tensile, bending and shear forces.</p>\r\n<p style=\"text-align: justify;\">• It should provide complete insulation against sound and heat.</p>\r\n<p style=\"text-align: justify;\">• Ensure durability to the structure</p>\r\n<p style=\"text-align: justify;\">• The structure built with R.C.C should be able to support any load.</p>\r\n<p style=\"text-align: justify;\">• It should prevent corrosion by providing proper cover to the reinforcement.</p>\r\n<p style=\"text-align: justify;\">• It should develop hair cracks within the permissible limit.</p>\r\n<p style=\"text-align: justify;\">• When it\'s fresh, a good R.C.C can be moulded to the desired shape and size.</p>\r\n<p style=\"text-align: justify;\">• It should provide adequate control over the cross-sectional requirements.</p>\r\n<h3 style=\"text-align: justify;\"><span style=\"font-size: medium; color: #3366ff;\">Advantages of Reinforced Cement Concrete </span></h3>\r\n<p style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp;Structures made from reinforced concrete are stable and durable. It possesses high compressive and high tensile strengths. It is economical, and the maintenance cost is almost ignorable. R.C.C has the least chances of buckling and rusting. It has resistance to fire and other climatic changes.</p>\r\n<p style=\"text-align: justify;\">R.C.C structures are aesthetically up to the mark and do not require cladding. The material is available everywhere around the world and does not require expertise for working on it; normal skilled labour can also work with it.</p>', 'Admin', '2', '2021-10-2507:18:34imagercc1.jpg', NULL, NULL, NULL, '2021-04-06 19:10:35', '2021-04-06 19:10:35'),
(4, 1, NULL, 'the-story-of-apex', 'The Story Of Apex', NULL, NULL, 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.', 'Apex Engineering Ltd is an independent firm of designers, architects, planners, engineers, environmental specialists, and technical specialists offering a broad range of professional services. At Apex Engineering LTD our work reflects our pride; we make it our number one goal to deliver practical, yet cost-efficient solutions tailored to meet your engineering needs and exceed your project expectations. We utilize the most modern communication and engineering technology to enhance our design methods, providing the most successful solutions to improve the overall value of your project.\r\n<br><br>\r\nAt Apex Engineering LTD we commit the same attention and expertise to every project in our office. We have engineered a diverse range of projects including large master planned and mixed use communities, single and multi-family residential developments, commercial and retail shopping centers, office parks, industrial areas, schools, institutional centers, and government offices.\r\n<br><br>\r\nFounded in 2013 in Mogadishu Somalia, Apex Engineering has an established and respected reputation based on technical expertise, strong communication and personal and professional service. Our exceptional team skills and dynamic personalities have enabled us to thrive for nearly 6 years. Our team includes licensed Professional Engineers, Professional Land Surveyors, technicians, field crews, and support staff.', 'Admin', '4', '2022-06-0318:42:18image2021-09-3008_26_28imagephoto_2021-09-28_08-22-40.jpg', NULL, NULL, NULL, '2021-04-06 19:10:35', '2021-04-06 19:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completion` date DEFAULT NULL,
  `Consultant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope` text COLLATE utf8mb4_unicode_ci,
  `Project_contractor` text COLLATE utf8mb4_unicode_ci,
  `Product_specification` text COLLATE utf8mb4_unicode_ci,
  `Site_services` text COLLATE utf8mb4_unicode_ci,
  `Application` text COLLATE utf8mb4_unicode_ci,
  `slung` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Completed',
  `client` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show` tinyint(4) NOT NULL DEFAULT '0',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `title`, `completion`, `Consultant`, `service`, `scope`, `Project_contractor`, `Product_specification`, `Site_services`, `Application`, `slung`, `meta`, `file_one`, `file_two`, `file_three`, `file_four`, `file_five`, `content`, `Status`, `client`, `location`, `video`, `show`, `type`, `size`, `thumbnail`, `image_one`, `image_two`, `image_three`, `image_four`, `image_five`, `created_at`, `updated_at`) VALUES
(1, 'Parliament of Hirshabelle State of Somalia', NULL, 'Architecture', 'Consulting Architecture', 'Feasibility studies, geotechnical survey, environmental impact assessment and designing of Parliament for the\r\nHirshabelle State of Somalia', NULL, NULL, NULL, NULL, 'parliament-of-hirshabelle-state-of-somalia', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>', 'Completed', 'Somali Stability Fund (SSF) and Hirshabelle State of Somalia', 'Jowhar, Somalia', 'https://www.youtube.com/watch?v=ugaKM3sMPC4', 1, NULL, NULL, NULL, '2021-10-0108:12:59imageimage-044.jpg', '2021-10-0108:12:59imageimage-047.jpg', '2021-10-0108:12:59imageimage-009.jpg', '2021-10-0108:12:59imageimage-009.jpg', '2021-10-0108:12:59imageimage-044.jpg', NULL, NULL),
(2, 'Ministry of Finance Hirshabelle State of Somalia', NULL, 'Architecture', 'Consulting Architecture', 'Feasibility studies, geotechnical survey, environmental impact assessment and designing of Ministry of Finance Offices for the Hirshabelle State of Somalia', NULL, NULL, NULL, NULL, 'ministry-of-finance-hirshabelle-state-of-somalia', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>', 'Completed', 'Somali Stability Fund (SSF) and Hirshabelle State of Somalia', 'Jowhar, Somalia', NULL, 0, NULL, NULL, NULL, '2021-10-0108:17:40imageimage-051.jpg', '2021-10-0108:17:40imageimage-050.jpg', '2021-10-0108:17:40imageimage-052.jpg', NULL, '2021-09-3008:26:28imagephoto_2021-09-28_08-22-46.jpg', NULL, NULL),
(3, 'Beerta Benadir Park EIA', NULL, 'Architecture', 'Consulting Architecture', 'Feasibility studies, geotechnical survey, designing of Beerta Benadir Park EIA in Mogadishu', NULL, NULL, NULL, NULL, 'beerta-benadir-park-eia', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>', 'Completed', 'Guul Gaar Group', 'Mogadishu, Somalia', 'https://www.youtube.com/watch?v=CgtlbjGUn3k', 0, NULL, NULL, NULL, '2021-10-0108:18:22imageimage-053.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Ministry Offices in Kismayu', NULL, 'Engineering', 'Consulting Architecture Engineering', 'Designing and Engineering Supervision for the Construction of Ministry Offices in Kismayu', NULL, NULL, NULL, NULL, 'ministry-offices-in-kismayu', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>', 'Completed', 'Jubbaland State & Somali Stability Fund (SFF)', 'Kismayu, Somalia', NULL, 0, NULL, NULL, NULL, '2021-09-3008:26:28imagephoto_2021-09-28_08-22-40.jpg', '2021-09-3008:26:28imagephoto_2021-09-28_08-22-35.jpg', '2021-09-3008:26:28imagephoto_2021-09-28_08-22-36.jpg', '2021-09-3008:26:28imagephoto_2021-09-28_08-22-39.jpg', '2021-09-3008:26:28imagephoto_2021-09-28_08-22-46.jpg', NULL, NULL),
(5, 'Solar-powered Street lights installation', NULL, 'Engineering', 'Consulting Architecture Engineering Construction', 'Technical Supervision for the installation of solar-powered Street lights', NULL, NULL, NULL, NULL, 'solar-powered-street-lights-installation', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>', 'Completed', 'Puntland State and S.S.F', 'Bari and Karkaar Regions of Puntland, Somalia', NULL, 0, NULL, NULL, NULL, '2021-10-0107:42:40image96c6bafd-22a6-476a-a335-6a60561324a4.jpg', '2021-10-0107:42:40imagec062f01a-dcdc-4693-9067-13eb4b677c29.jpg', '2021-10-0107:42:40imageb2ab11bf-3cca-4d0e-862a-6990cb0c259a.jpg', '2021-10-0107:42:40imagebee1312d-466c-4fe1-af63-b9d5042dc54a.jpg', '2021-10-0107:42:40imageabf1c13c-1b82-4465-9cba-12bee07b4c91.jpg', NULL, NULL),
(6, 'Rehabilitation of the Dinsoor Airstrip', NULL, 'Engineering', 'Consulting Architecture Engineering Construction', 'Technical Supervision for the Rehabilitation of the Dinsoor Airstrip.', NULL, NULL, NULL, NULL, 'rehabilitation-of-the-dinsoor-airstrip', NULL, NULL, NULL, NULL, NULL, NULL, '<p>The proposed site is located in Baraawe Town, South West State of Somalia. The town is located approximately 180km south west of Mogadishu and approximately 230km northeast of Kismayu town. The two sites are clearly indicated in the satellite imagery below. The two sites are also close to the AMISOM camps.</p>\r\n\r\n<p>Global Positioning Systems (GPS) observations were done using geodetic dual-frequency receivers. Care was taken to ensure that in the resulting network of measured baselines each control is tied into the project by at least three vectors.</p>\r\n\r\n<p>GPS processing and adjustment software was used for computations. The software have built-in test whereby suspected blunders in the input or the effects of poorly estimated initial co- ordinates are identified.</p>\r\n\r\n<p>The main access road for site one is an old tarmac road that is under dilapidated conditions while the access for site two is through the unopened sandy road along the beach. It is easy to get stuck here due to thick layers of sand deposited by water along the ocean</p>', 'Completed', 'USAID / AECOM', 'Diinsoor', NULL, 0, NULL, NULL, NULL, '2021-10-0108:47:33imageimage-068.jpg', '2021-10-0108:47:33imageimage-068.jpg', '2021-10-0108:47:33imageimage-062.jpg', '2021-10-0108:47:33imageimage-068.jpg', '2021-10-0108:47:33imageimage-062.jpg', NULL, NULL),
(7, 'Youth Centre in Kismayu', NULL, 'Engineering', 'Architecture Engineering', 'Designing and Engineering Supervision\r\n for the Construction of Youth Centre\r\n in Kismayu comprising of\r\n (Library, Community Hall, Basketball court, management offices and cafeteria)', NULL, NULL, NULL, NULL, 'youth-centre-in-kismayu', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.</p>', 'Completed', 'Jubbaland State & Somali Stability Fund (SFF)', 'Kismayu, Somalia', NULL, 0, NULL, NULL, NULL, '2021-10-0107:37:54imageIMG-20181215-WA0038.jpg', '2021-10-0107:37:54imageIMG-20181215-WA0046.jpg', '2021-10-0107:37:54imageIMG-20181217-WA0005.jpg', '2021-10-0107:37:54imageIMG-20181217-WA0008.jpg', '2021-10-0107:37:54imageIMG-20181217-WA0035.jpg', NULL, NULL),
(8, 'UPGRADING OF THE ABUDWAQ AIRPORT', '2021-06-30', 'Technical engineering supervision and project management', 'Consulting Architecture Engineering Construction', 'Update of designs, technical specifications, and supervision of runway extension from 1,500m\r\nto 2,170m to gravel standard, upgrade of drainage works, runway markings and concreting of\r\nselected apron area as per the issued designs.', NULL, NULL, NULL, NULL, 'upgrading-of-the-abudwaq-airport', NULL, NULL, NULL, NULL, NULL, NULL, '<p>The upgrading of the Abudwaq airstrip project was awarded to Danish Refugee Council (DRC) by SSF as part of the economic development investments that is partly funded by the local community (stakeholders). The project had an initial design phase (October to December 2019) which was contracted to an Engineering consultant firm KKCEL, that developed the Design report, Drawings, Bill of Quantities and Technical Specifications. Thereafter DRC contracted Abudwaq Airport Authority (AAA) which sub-contracted Mirage Construction company after a competitive bidding process. The project was commissioned in early January 2020 with a view to complete the activities within 6 months. However, the project has had several setbacks as result of noncompliance to the approved technical specifications, Bill of quantities and designs.<br />\r\n<br />\r\nApex Engineering was contracted in October 2020 to undertake technical audit assessment of the project progress in which the findings indicated that the works had not been undertaken to the desired standards including the use of wrong material as the asphalt concrete on a section of the pavement. This resulted to the suspension of the work. After back-and-forth deliberation between SSF and DRC, it become apparent that the asphalt concrete works could not be executed within the remaining duration of the project and as such SSF proposed the extension of the runway from 1,500m to 2,170m to gravel standard with the remainder of the funds. Apex Engineering was further contracted for a period of two months to undertake the design update for the 670m extension and supervise the remaining scope of work to gravel standards.</p>', 'Completed', 'SOMALI STABILITY FUND (SSF)', 'Abudwaaq Town', 'https://www.youtube.com/watch?v=Ete5e-z1N8g', 0, NULL, NULL, NULL, '2021-09-2923:50:55imageWhatsAppImage2021-07-17at17.09.03.jpeg', '2021-09-2923:37:04imageWhatsAppImage2021-07-17at17.09.03(1).jpeg', '2021-09-2923:37:04imageWhatsAppImage2021-07-17at17.09.19.jpeg', NULL, NULL, NULL, NULL),
(9, 'Construction of three roads in Beledweyne east and west', '2021-07-31', 'Engineering', 'Consulting Architecture Engineering Construction', 'project name: construction of three roads in beledweyne east and\r\nwest (loop 1 – beledweyne east, 2-beledweyne west-huriwa road, and 3-\r\nbeledweyne west-sheikh hassan barsane)\r\n\r\nThe project is situated in Beledweyne, Hirshabelle State, Somalia. The three loops commence at\r\nthe banks of the Shabelle River, with Loop1 lying to the east and Loops 2 & 3 to the west.<br><br>\r\n\r\nThe area is predominantly flat topography and is characterized by sandy soils of relatively high bearing\r\ncapacity. The River occasionally breaks its banks during the rainy seasons which occur during the two\r\nmain seasons of Deyr & Gu’ rains.\r\n<br><br>\r\n\r\n', NULL, NULL, NULL, NULL, 'construction-of-three-roads-in-beledweyne-east-and-west', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Completed', 'SOMALI STABILITY FUND (SSF)', 'Mogadishu, Somalia', NULL, 0, NULL, NULL, NULL, '2021-10-0514:10:27imageimage-002.jpg', '2021-10-0514:10:27imageimage-003.jpg', '2021-10-0514:10:27imageimage-006.jpg', '2021-10-0514:10:27imageimage-006.jpg', '2021-10-0514:10:27imageimage-012.jpg', NULL, NULL),
(10, 'Construction of state offices in Dhusamareeb, Somalia', '2021-07-31', 'Engineering', 'Construction', 'Development of designs, EMMP, Project management and supervision during the construction including certification of all payments to the main contractor', NULL, NULL, NULL, NULL, 'construction-of-state-offices-in-dhusamareeb-somalia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Completed', 'Somali Stability Fund (SSF)', 'Dhusamareeb, Galmudug State of Somalia', NULL, 0, NULL, NULL, NULL, '2021-10-0514:31:08imageimage-068.jpg', '2021-10-0514:31:08imageimage-064.jpg', '2021-10-0514:31:08imageimage-065.jpg', '2021-10-0514:31:08imageimage-066.jpg', '2021-10-0514:31:08imageimage-069.jpg', NULL, NULL),
(12, 'Construction of visitors receptionbuilding & completion of a multipurpose hall in garowe,somalia.', '2021-06-30', 'Engineering', 'Construction', 'Construction of visitors’ reception building and completion of a\r\nmultipurpose hall at the Ministry of State Compound, Garowe,\r\nPuntland', NULL, NULL, NULL, NULL, 'construction-of-visitors-receptionbuilding-completion-of-a-multipurpose-hall-in-garowesomalia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Completed', 'Somali Stability Fund (SSF)', 'Garowe, Puntland, Somalia', NULL, 0, NULL, NULL, NULL, '2021-10-0514:57:09image96.jpg', '2021-10-0514:57:09image94.jpg', '2021-10-0514:57:09image97.jpg', '2021-10-0514:57:09image98.jpg', '2021-10-0514:57:09image99.jpg', NULL, NULL),
(13, 'Design & Contract Management', NULL, 'Construction', 'Engineering', 'Project Details: Feasibility Studies, ESIA, Preliminary & Detailed Designs, Construction Supervision & Contract Management', NULL, NULL, NULL, NULL, 'engineering', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Project Details: Feasibility Studies, ESIA, Preliminary &amp; Detailed Designs, Construction Supervision &amp; Contract Management</p>', 'Completed', 'Somali Stability Fund (SSF)', 'Beledwayne, Somalia', NULL, 0, NULL, NULL, NULL, '2022-09-2910:03:17imageApex1.jpg', '2022-09-2910:03:17imageApex2.jpg', '2022-09-2910:03:17imageApex3.jpg', NULL, NULL, '2022-09-29 14:03:17', '2022-09-29 14:03:17'),
(14, 'Design and Feasibility Studies', NULL, 'Construction', 'Engineering', 'Feasibility Studies, ESIA, Preliminary & Detailed Designs, Construction Supervision & Contract Management', NULL, NULL, NULL, NULL, 'airport-construction', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Completed', 'SSF & Abudwaaq Airport Authority', 'Abudwaaq, Somalia', NULL, 0, NULL, NULL, NULL, '2022-09-2910:35:17imageApex-11.jpg', '2022-09-2910:33:00imageApex-12.jpg', '2022-09-2910:35:17imageApex-13.jpg', '2022-09-2910:35:17imageApex-14.jpg', 'Apex-15.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labels` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `labels`, `icon`, `slung`, `meta`, `content`, `image`, `profile`, `created_at`, `updated_at`) VALUES
(1, '<span>URBAN PLANNING</span> <br/> & GEOSPATIAL SERVICES', 'Consulting', 'flaticon-analytics', 'spanurban-planningspan-br-geospatial-services', 'Apex Engineering provides innovative geospatial solutions targeted at leveraging the benefits of GIS \r\nand locational technology in Agriculture, Assets Management, Smart cities, Infrastructure ,Urban \r\nplanning, Property management, land management e.t.c .', '<p>Apex Engineering provides innovative geospatial solutions targeted at leveraging the benefits of GIS</p>\r\n\r\n<p>and locational technology in Agriculture, Assets Management, Smart Cities, Infrastructure,Urban</p>\r\n\r\n<p>planning, Property management, land management e.t.c.</p>\r\n\r\n<p>Our services include:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Spatial Planning </strong></p>\r\n	</li>\r\n</ol>\r\n\r\n<p>Services offered here are Urban and Regional Planning, with the focus on the preparation of Regional and Local Spatial Plans, Action Area Plans, Subject/Sector Plans and Preparation of Subdivision Schemes in line with the existing laws and regulations.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Regional Spatial Plan:&nbsp;</strong>Land use activities, infrastructure, and settlement growth plan across a larger area than a City/Town e.g. Regional State Spatial Plans</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Local Spatial Plan:&nbsp;</strong>Local Physical Development Plan Covering a City/Town.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Property Registration and Numbering:</strong> Developing a systematic manner of numbering properties in a city</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Action Area Plan:</strong>&nbsp;Neighbourhood Plans which is a subset of the Local Spatial Plan to ensure that development is undertaken in a sustainable and integrated manner.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Subject/Sector Plan:&nbsp;</strong>This is a Plan Defining goals, investments, and designs in a particular thematic area e.g. Transportation, Environment, etc.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Sub Division Scheme:&nbsp;</strong>This is a Neighbourhood plan showing subdivision of land for the purpose of development or Investment in line with existing regulations.</p>\r\n	</li>\r\n</ul>', 'surveying-equipment-2871066_1920.jpg', 'Apex-Eng-Urban -Planning-Profile.pdf', '2021-03-30 04:00:00', '2021-03-30 04:00:00'),
(2, '<span>ENGINEERING</span> <br/>SERVICES', 'Engineering', 'flaticon-optimization', 'spanengineeringspan-brservices', 'Apex Engineering LTD provides a multi-disciplinary design and building service to complement our wide range of construction and consultancy services. Delivering end-to-end building and civil engineering services across every major sector, our design team incorporates structural, mechanical, civil and electrical engineers.', '<p>Apex Engineering LTD provides a multi-disciplinary design and building service to complement our wide range of construction and consultancy services. Delivering end-to-end building and civil engineering services across every major sector, our design team incorporates structural, mechanical, civil and electrical engineers.</p>\r\n\r\n<p>We aim to work in partnership with our clients, tailoring our services to meet their requirements. From concept to completion, we provide clients with innovative, cost-effective, sustainable solutions that often push the boundaries of engineering design. Our experience in urban development and redevelopment projects ranges from small housing estates, to high-rise apartments working in both the private and public sectors on new build and refurbishment projects. We have extensive expertise in engineering, construction, cost &amp; project management and building design, offering a comprehensive range of engineering services within the following sectors:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Civil &amp; Structural Engineering</li>\r\n	<li>Mechanical &amp; Electrical Services</li>\r\n	<li>Geotechnical Engineering</li>\r\n	<li>Feasibility Studies</li>\r\n	<li>Conceptual &amp; Detail Design</li>\r\n	<li>Procurement</li>\r\n	<li>Construction Management</li>\r\n	<li>Water and Wastewater Engineering</li>\r\n	<li>Transportation &amp; Infrastructure</li>\r\n	<li>Technical Services</li>\r\n</ul>', 'Engineering.jpg', NULL, NULL, NULL),
(3, '<span>ARCHITECTURAL</span> <br/>SERVICES', 'Architecture', 'flaticon-crane', 'spanarchitecturalspan-brservices', 'We have developed specialist expertise across every major development sector and provide our clients with the reassurance of a long-standing track record for successful project delivery and design excellence.', '<p>We have developed specialist expertise across every major development sector and provide our clients with the reassurance of a long-standing track record for successful project delivery and design excellence. Apex engineering architecture reflects our knowledge of the Somali Construction Culture, how people and organisations use and experience place and space. We work collaboratively with clients, communities and end users to create buildings that work well on every level, inside and out. We deliver them across our East Africa markets with a consistently high standard of service.</p>\r\n\r\n<p>We provide unrivalled specialist know-how in designing state-of-the-art facilities from the initial planning stage through to completion and further add value by our commitment to a sustainable design agenda. Our specialists can improve a building&rsquo;s performance, reduce maintenance and whole life running costs and enhance living experience. This expertise combined with advanced AutoCAD technology and state-of-the-art rendering and drafting tools, enables us to introduce innovative and flexible design solutions to optimize the efficiency of both major and specialized buildings. In particular, we provide world-beating know-how, expertise and experience across the following industry sectors</p>\r\n\r\n<ul>\r\n	<li>Master planning</li>\r\n	<li>Planning + Urban Design</li>\r\n	<li>Residential</li>\r\n	<li>Retail</li>\r\n	<li>Workplace</li>\r\n	<li>Mixed Use</li>\r\n	<li>Hospitality</li>\r\n	<li>Sports, Leisure &amp; Culture</li>\r\n	<li>Education</li>\r\n	<li>Healthcare</li>\r\n	<li>Public Realm &amp; Landscaping</li>\r\n	<li>Interior Design</li>\r\n</ul>', 'photo_2021-09-28_08-22-44.jpg', NULL, NULL, NULL),
(4, '<span>ENVIRONMENTAL</span> <br/>MANAGEMENT', 'Consulting', 'flaticon-analytics', 'spanenvironmentalspan-brmanagement', 'Apex Engineering LTD delivers a comprehensive range of services in the assessment, planning and management of environmental and sustainable development issues facing our society. Our commercial and practical recommendations have established us as one of the leading environmental consultancies in the east Africa region.', '<p>Apex Engineering LTD delivers a comprehensive range of services in the assessment, planning and management of environmental and sustainable development issues facing our society. Our commercial and practical recommendations have established us as one of the leading environmental consultancies in the east Africa region.</p>\r\n\r\n<p>We evaluate and identify mitigation of environmental and community risks, advising our clients on how to make sustainable business improvements, helping them to manage their reputation when it comes to the environment. Our teams of experts operate at both a local and regional level, enabling us to have an understanding of the implications of the East Africa region&rsquo;s approaches to planning and the associated legislative requirements. We are focused on the delivery of sustainable environmental solutions incorporating global best practice where appropriate We have in-house expertise in the assessment of specialist topic areas including noise, air quality, waste generation, landscape, townscape, water quality, contaminated land, construction impacts and effects. We take our clients through all necessary requirements right from project design and ensure they acquire all licenses and permits from relevant environmental authorities. The services we offer reflect different aspects of environmental planning and different regional approaches. Services include;</p>\r\n\r\n<ul>\r\n	<li>Environmental Impact Assessment (EIA)</li>\r\n	<li>Environmental Auditing (EA)</li>\r\n	<li>Occupational Health and Safety (OHS)</li>\r\n	<li>Occupational Safety Management (OSM)</li>\r\n	<li>Municipal Solid Waste Management and safe disposal</li>\r\n	<li>Biomedical Waste Management</li>\r\n</ul>', 'Enviromental.jpg', NULL, NULL, NULL),
(5, '<span>INFRASTRUCTURE</span> <br/>MANAGEMENT', 'Consulting', 'flaticon-analytics', 'spaninfrastructurespan-brmanagement', 'At Apex Engineering LTD we assist the public and private clients to plan, develop, design and manage critical infrastructure developments in the east Africa region. Apex Engineering’s portfolio spans the complete life cycle of the rebuilt environment.', '<p>At Apex Engineering LTD we assist the public and private clients to plan, develop, design and manage critical infrastructure developments in the east Africa region. Apex Engineering&rsquo;s portfolio spans the complete life cycle of the rebuilt environment. We are a full-service provider with world-class program management and risk management expertise. Our infrastructure advisory team has worked across industries providing professional consultancy services to clients. Our regional team includes senior project delivery specialists operating across social and economic infrastructure. Our team brings a wealth of delivery expertise including economists, project management, procurement, infrastructure, operations and strategic consulting.</p>\r\n\r\n<p>We pride in extensive experience in the design management and construction of infrastructure schemes, including feasibility studies, preliminary and detailed design, contract preparation and construction supervision. Our team offers a full suite of skills and works closely with clients to manage risks typical complex projects. We partner with established global companies who integrate with our delivery systems, processes and behaviors. Through our multi-disciplinary approach, which draws on skills from across the company, we&rsquo;ll give our clients a seamless service that covers all aspects of infrastructure developments.</p>', 'Infrastructure.png', NULL, '2021-04-04 23:40:43', '2021-04-04 23:40:43'),
(6, '<span>LAND</span> <br/>SURVEYING', 'Consulting', 'flaticon-analytics', 'spanlandspan-brsurveying', 'Apex Engineering provides a full-service Land Surveying department including 4 Registered Land Surveyors licensed by the Surveyors of Kenya (SoK). ', '<p>Apex Engineering provides a full-service Land Surveying department including 4 Registered Land Surveyors licensed by the Surveyors of Kenya (SoK). Using the most state-of-the-art equipment available, we are able to provide our clients with the most efficient methods of field data collection and layout work in the following areas:</p>\r\n\r\n<ul>\r\n	<li>GPS Surveys</li>\r\n	<li>Boundary Surveys</li>\r\n	<li>Site Planning Surveys</li>\r\n	<li>Topographic Surveys</li>\r\n	<li>Land Boundary Surveys</li>\r\n	<li>Subdivision Plan</li>\r\n	<li>Photogrammetric Ground Control</li>\r\n</ul>', 'surveying-equipment-2871066_1920.jpg', NULL, '2021-04-12 22:31:51', '2021-04-12 22:31:51'),
(7, '<span>ROAD/BRIDGE DESIGNING</span> <br/>& REHABILITATION', 'Construction', 'flaticon-worker', 'spanroadbridge-designingspan-br-rehabilitation', 'Apex Engineering has the experience and the tools to successfully design minor and major roadways. Our staff is uniquely qualified to work on private and public roadway projects East Africa.', '<p>Apex Engineering has the experience and the tools to successfully design minor and major roadways. Our staff is uniquely qualified to work on private and public roadway projects East Africa.</p>\r\n\r\n<ul>\r\n	<li>Development of the access design solution for the site,</li>\r\n	<li>Auto track analysis of the vehicle access movements</li>\r\n	<li>Site 3D ground modeling and profiling</li>\r\n	<li>The horizontal and vertical alignment geometry of the highway</li>\r\n	<li>Production of civil engineering detailed drawings and construction specifications, BoQs</li>\r\n	<li>Project management and tendering and appointment of contractors</li>\r\n	<li>Site attendance and supervision.</li>\r\n</ul>', 'road-220058_1280.jpg', NULL, '2021-04-12 22:32:07', '2021-04-12 22:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `link`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Somalia Government', NULL, '2021-09-2911:57:37imageApexPartners-02.jpg', 'partner', '2021-09-29 07:49:39', '2021-09-29 07:49:39'),
(2, NULL, NULL, '2021-09-2911:57:58imageApexPartners-03.jpg', 'partner', '2021-09-29 08:50:27', '2021-09-29 08:50:27'),
(3, NULL, NULL, '2021-09-2911:58:15imageApexPartners-04.jpg', 'partner', '2021-09-29 08:50:35', '2021-09-29 08:50:35'),
(4, NULL, NULL, '2021-09-2911:58:29imageApexPartners-05.jpg', 'partner', '2021-09-29 08:50:41', '2021-09-29 08:50:41'),
(5, NULL, NULL, '2021-09-2911:59:24imageApexPartners-06.jpg', 'partner', '2021-09-29 08:50:49', '2021-09-29 08:50:49'),
(6, NULL, NULL, '2021-09-2912:00:02imageApexPartners-07.jpg', 'partner', '2021-09-29 08:51:05', '2021-09-29 08:51:05'),
(7, NULL, NULL, '2021-09-2912:00:20imageApexPartners-08.jpg', 'partner', '2021-09-29 08:51:12', '2021-09-29 08:51:12'),
(8, NULL, NULL, '2021-09-2912:00:39imageApexPartners-09.jpg', 'partner', '2021-09-29 09:00:39', '2021-09-29 09:00:39'),
(9, NULL, NULL, '2021-09-2912:00:46imageApexPartners-10.jpg', 'partner', '2021-09-29 09:00:46', '2021-09-29 09:00:46'),
(10, NULL, NULL, '2021-09-2912:00:53imageApexPartners-11.jpg', 'partner', '2021-09-29 09:00:53', '2021-09-29 09:00:53'),
(11, NULL, NULL, '2021-09-2912:01:01imageApexPartners-12.jpg', 'partner', '2021-09-29 09:01:01', '2021-09-29 09:01:01'),
(12, NULL, NULL, '2021-09-2912:01:08imageApexPartners-13.jpg', 'partner', '2021-09-29 09:01:08', '2021-09-29 09:01:08'),
(13, NULL, NULL, '2021-09-2912:01:15imageApexPartners-14.jpg', 'partner', '2021-09-29 09:01:15', '2021-09-29 09:01:15'),
(14, NULL, NULL, '2021-09-2912:01:23imageApexPartners-15.jpg', 'partner', '2021-09-29 09:01:23', '2021-09-29 09:01:23'),
(15, NULL, NULL, '2021-09-2912:01:31imageApexPartners-16.jpg', 'partner', '2021-09-29 09:01:31', '2021-09-29 09:01:31'),
(16, NULL, NULL, '2021-09-2912:01:38imageApexPartners-17.jpg', 'partner', '2021-09-29 09:01:38', '2021-09-29 09:01:38'),
(17, NULL, NULL, '2021-09-2912:01:49imageApexPartners-18.jpg', 'partner', '2021-09-29 09:01:49', '2021-09-29 09:01:49'),
(18, NULL, NULL, '2021-09-2912:01:56imageApexPartners-19.jpg', 'partner', '2021-09-29 09:01:56', '2021-09-29 09:01:56'),
(19, NULL, NULL, '2021-09-2912:02:06imageApexPartners-20.jpg', 'partner', '2021-09-29 09:02:06', '2021-09-29 09:02:06'),
(20, NULL, NULL, '2021-09-2912:02:15imageApexPartners-21.jpg', 'partner', '2021-09-29 09:02:15', '2021-09-29 09:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci,
  `commentable_id` int(10) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `comment`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 0, NULL, 1, 'App\\Models\\Blog', '2021-05-17 09:19:51', '2021-05-17 09:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<ul>\n<li>you may print or download to a local hard disk extracts for your personal and non-commercial use only</li>\n<li>you may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material</li>\n</ul>\n\n<p>You may not, except with our express written permission, distribute or commercially exploit the content. Nor may you transmit it or store it in any other website or other form of electronic retrieval system.</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `copyrights`
--

CREATE TABLE `copyrights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Copyright Statement',
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slung`, `meta`, `content`, `icon`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, '1st Time Learner Approach(With Live Examples)', '1st-time-learner-approachwith-live-examples', 'Beginners course for understanding the financial market(ideal for new traders)', '<p>Beginner and an introductory course in understanding how trading works in the forex market.</p>\r\n\r\n<ul>\r\n	<li>Course provides you foundational skills in kickstarting your career in trading the forex market</li>\r\n	<li>Defines terminologies and technologies used in trading the forex market.</li>\r\n	<li>Breaks down the jargon and illustrates to you how to interpret data on forex charts</li>\r\n	<li>Professional approach trading manifesto</li>\r\n</ul>', 'in-section-profit-13a.png', 'in-section-profit-13a.png', 300, '2021-04-16 04:00:00', '2021-04-16 04:00:00'),
(2, '3 Simple Strategies: Beginner to Pro Approach(With Live Examples)', '3-simple-strategies-beginner-to-pro-approachwith-live-examples', 'Receive even deeper knowledge for deeper understanding of the financial markets', '<p>Simple Strategies for unbelievable results</p>\r\n\r\n<ul>\r\n	<li>The perfect entry strategy revealed</li>\r\n	<li>Stay - Trail your trades strategy revealed</li>\r\n	<li>Low rick scalping strategy revealed.</li>\r\n	<li>Zero to Hero rick management Strategies</li>\r\n	<li>Boost your trading confidence and earnings</li>\r\n</ul>', 'in-section-profit-13b.png', 'in-section-profit-13b.png', 300, '2021-04-16 04:00:00', '2021-04-16 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encryption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_status` tinyint(4) NOT NULL DEFAULT '0',
  `email_body` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_settings`
--

INSERT INTO `email_settings` (`id`, `email`, `title`, `site_title`, `driver`, `host`, `port`, `username`, `password`, `encryption`, `smtp_status`, `email_body`, `created_at`, `updated_at`) VALUES
(1, 'info@domain.com', 'Senders Name', 'Site Title', 'mail', 'smtp.mailtrap.io', '25', '10ce55ec151848', '54a9cf8c6068dd', 'tls', 0, 0x3c64697620636c6173733d227772617070657222207374796c653d226261636b67726f756e642d636f6c6f723a20726762283234322c203234322c20323432293b206865696768743a206175746f3b206d696e2d6865696768743a20313030253b223e0a3c7461626c65207374796c653d22626f726465722d636f6c6c617073653a20636f6c6c617073653b207461626c652d6c61796f75743a2066697865643b20636f6c6f723a20236238623862383b20666f6e742d66616d696c793a205562756e74752c73616e732d73657269663b2220616c69676e3d2263656e746572223e0a3c74626f64793e0a3c74723e0a3c746420636c6173733d227072656865616465725f5f736e697070657422207374796c653d2270616464696e673a203130707820302035707820303b20766572746963616c2d616c69676e3a20746f703b2077696474683a2032383070783b223e266e6273703b3c2f74643e0a3c746420636c6173733d227072656865616465725f5f77656276657273696f6e22207374796c653d22746578742d616c69676e3a2072696768743b2070616464696e673a203130707820302035707820303b20766572746963616c2d616c69676e3a20746f703b2077696474683a2032383070783b223e266e6273703b3c2f74643e0a3c2f74723e0a3c2f74626f64793e0a3c2f7461626c653e0a3c7461626c6520636c6173733d226c61796f7574206c61796f75742d2d6e6f2d67757474657222207374796c653d22626f726465722d636f6c6c617073653a20636f6c6c617073653b207461626c652d6c61796f75743a2066697865643b206d617267696e2d6c6566743a206175746f3b206d617267696e2d72696768743a206175746f3b206f766572666c6f772d777261703a20627265616b2d776f72643b20776f72642d777261703a20627265616b2d776f72643b20776f72642d627265616b3a20627265616b2d776f72643b206261636b67726f756e642d636f6c6f723a20236666666666663b2220616c69676e3d2263656e746572223e0a3c74626f64793e0a3c74723e0a3c746420636c6173733d22636f6c756d6e22207374796c653d2270616464696e673a203070783b20746578742d616c69676e3a206c6566743b20766572746963616c2d616c69676e3a20746f703b20636f6c6f723a207267622839362c203130322c20313039293b206c696e652d6865696768743a20323170783b20666f6e742d66616d696c793a2073616e732d73657269663b2077696474683a2036303070783b223e0a3c646976207374796c653d22666f6e742d73697a653a20313470783b206d617267696e2d6c6566743a20323070783b206d617267696e2d72696768743a20323070783b206d617267696e2d746f703a20323470783b223e0a3c646976207374796c653d226c696e652d6865696768743a20313070783b20666f6e742d73697a653a203170783b223e266e6273703b3c2f6469763e0a3c2f6469763e0a3c646976207374796c653d22666f6e742d73697a653a20313470783b206d617267696e2d6c6566743a20323070783b206d617267696e2d72696768743a20323070783b223e0a3c68323e4869207b7b6e616d657d7d2c3c2f68323e0a3c703e3c7374726f6e673e7b7b6d6573736167657d7d3c2f7374726f6e673e3c2f703e3c2f6469763e0a3c646976207374796c653d226d617267696e2d6c6566743a20323070783b206d617267696e2d72696768743a20323070783b206d617267696e2d626f74746f6d3a20323470783b223e0a3c7020636c6173733d2273697a652d313422207374796c653d226d617267696e2d746f703a203070783b206d617267696e2d626f74746f6d3a203070783b206c696e652d6865696768743a20323170783b223e3c666f6e742073697a653d2233223e3c623e5468616e6b732c3c2f623e3c2f666f6e743e3c2f703e3c7020636c6173733d2273697a652d313422207374796c653d226d617267696e2d746f703a203070783b206d617267696e2d626f74746f6d3a203070783b206c696e652d6865696768743a20323170783b223e3c62207374796c653d22223e3c666f6e742073697a653d2233223e7b7b736974655f7469746c657d7d3c2f666f6e743e3c2f623e3c2f703e0a3c2f6469763e0a3c2f74643e0a3c2f74723e0a3c2f74626f64793e0a3c2f7461626c653e3c62723e0a3c2f6469763e, NULL, '2020-07-09 00:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `slung`, `category`, `meta`, `content`, `created_at`, `updated_at`) VALUES
(1, 'How Write FAQs One', 'how-write-faqs-one', '2', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(2, 'How Write FAQs two', 'how-write-faqs-two', '5', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(3, 'How Write FAQs Three', 'how-write-faqs-three', '4', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(4, 'How Write FAQs Four', 'how-write-faqs-four', '3', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(5, 'How Write FAQs Five', 'how-write-faqs-five', '6', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(6, 'How Write FAQs Six', 'how-write-faqs-six', '3', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(7, 'How Write FAQs Seven', 'how-write-faqs-seven', '2', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(9, 'Test FAQ', 'test-faq', '3', 'This is a test FAQ Meta Infomation', '<p>This is a test FAQ Meta description</p>', '2021-04-13 17:45:29', '2021-04-13 17:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `portfolio_id`, `image`, `created_at`, `updated_at`) VALUES
(1, '12', '2021-10-0614:07:45image92.jpg', '2021-10-06 11:07:45', '2021-10-06 11:07:45'),
(2, '12', '2021-10-0614:08:05image93.jpg', '2021-10-06 11:08:05', '2021-10-06 11:08:05'),
(3, '12', '2021-10-0614:17:34image94.jpg', '2021-10-06 11:17:34', '2021-10-06 11:17:34'),
(4, '12', '2021-10-0614:17:45image95.jpg', '2021-10-06 11:17:45', '2021-10-06 11:17:45'),
(5, '12', '2021-10-0614:17:54image96.jpg', '2021-10-06 11:17:54', '2021-10-06 11:17:54'),
(6, '12', '2021-10-0614:18:04image97.jpg', '2021-10-06 11:18:04', '2021-10-06 11:18:04'),
(7, '12', '2021-10-0614:18:13image98.jpg', '2021-10-06 11:18:13', '2021-10-06 11:18:13'),
(8, '12', '2021-10-0614:18:23image99.jpg', '2021-10-06 11:18:23', '2021-10-06 11:18:23'),
(9, '12', '2021-10-0614:18:38image100.jpg', '2021-10-06 11:18:38', '2021-10-06 11:18:38'),
(10, '12', '2021-10-0614:18:46image101.jpg', '2021-10-06 11:18:46', '2021-10-06 11:18:46'),
(11, '12', '2021-10-0614:18:56image102.jpg', '2021-10-06 11:18:56', '2021-10-06 11:18:56'),
(12, '12', '2021-10-0614:19:05image103.jpg', '2021-10-06 11:19:05', '2021-10-06 11:19:05'),
(13, '12', '2021-10-0614:19:22image104.jpg', '2021-10-06 11:19:22', '2021-10-06 11:19:22'),
(14, '12', '2021-10-0614:19:31image105.jpg', '2021-10-06 11:19:31', '2021-10-06 11:19:31'),
(15, '12', '2021-10-0614:19:41image106.jpg', '2021-10-06 11:19:41', '2021-10-06 11:19:41'),
(16, '12', '2021-10-0614:20:04image108.jpg', '2021-10-06 11:20:04', '2021-10-06 11:20:04'),
(17, '12', '2021-10-0614:20:15image109.jpg', '2021-10-06 11:20:15', '2021-10-06 11:20:15'),
(18, '12', '2021-10-0614:20:27image111.jpg', '2021-10-06 11:20:27', '2021-10-06 11:20:27'),
(19, '12', '2021-10-0614:20:39image112.jpg', '2021-10-06 11:20:39', '2021-10-06 11:20:39'),
(20, '12', '2021-10-0614:20:57image117.jpg', '2021-10-06 11:20:57', '2021-10-06 11:20:57'),
(21, '9', '2021-10-0614:28:32imageimage-002.jpg', '2021-10-06 11:28:32', '2021-10-06 11:28:32'),
(22, '9', '2021-10-0614:28:45imageimage-003.jpg', '2021-10-06 11:28:45', '2021-10-06 11:28:45'),
(23, '9', '2021-10-0614:28:55imageimage-004.jpg', '2021-10-06 11:28:55', '2021-10-06 11:28:55'),
(24, '9', '2021-10-0614:29:09imageimage-005.jpg', '2021-10-06 11:29:09', '2021-10-06 11:29:09'),
(25, '9', '2021-10-0614:29:22imageimage-006.jpg', '2021-10-06 11:29:22', '2021-10-06 11:29:22'),
(26, '9', '2021-10-0614:29:32imageimage-007.jpg', '2021-10-06 11:29:32', '2021-10-06 11:29:32'),
(27, '9', '2021-10-0614:29:51imageimage-012.jpg', '2021-10-06 11:29:51', '2021-10-06 11:29:51'),
(28, '9', '2021-10-0614:30:04imageimage-013.jpg', '2021-10-06 11:30:04', '2021-10-06 11:30:04'),
(29, '9', '2021-10-0614:30:16imageimage-015.jpg', '2021-10-06 11:30:16', '2021-10-06 11:30:16'),
(30, '9', '2021-10-0614:30:34imageimage-018.jpg', '2021-10-06 11:30:34', '2021-10-06 11:30:34'),
(31, '9', '2021-10-0614:30:47imageimage-021.jpg', '2021-10-06 11:30:47', '2021-10-06 11:30:47'),
(32, '9', '2021-10-0614:31:01imageimage-018.jpg', '2021-10-06 11:31:01', '2021-10-06 11:31:01'),
(33, '10', '2021-10-0614:32:45imageimage-064.jpg', '2021-10-06 11:32:45', '2021-10-06 11:32:45'),
(34, '10', '2021-10-0614:33:04imageimage-065.jpg', '2021-10-06 11:33:04', '2021-10-06 11:33:04'),
(35, '10', '2021-10-0614:33:16imageimage-066.jpg', '2021-10-06 11:33:16', '2021-10-06 11:33:16'),
(36, '10', '2021-10-0614:33:34imageimage-067.jpg', '2021-10-06 11:33:34', '2021-10-06 11:33:34'),
(37, '10', '2021-10-0614:33:50imageimage-068.jpg', '2021-10-06 11:33:50', '2021-10-06 11:33:50'),
(38, '10', '2021-10-0614:34:04imageimage-069.jpg', '2021-10-06 11:34:04', '2021-10-06 11:34:04'),
(39, '10', '2021-10-0614:34:15imageimage-070.jpg', '2021-10-06 11:34:15', '2021-10-06 11:34:15'),
(40, '10', '2021-10-0614:34:28imageimage-071.jpg', '2021-10-06 11:34:28', '2021-10-06 11:34:28'),
(41, '10', '2021-10-0614:34:41imageimage-072.jpg', '2021-10-06 11:34:41', '2021-10-06 11:34:41'),
(42, '10', '2021-10-0614:34:55imageimage-073.jpg', '2021-10-06 11:34:55', '2021-10-06 11:34:55'),
(43, '10', '2021-10-0614:35:17imageimage-074.jpg', '2021-10-06 11:35:17', '2021-10-06 11:35:17'),
(44, '10', '2021-10-0614:35:35imageimage-078.jpg', '2021-10-06 11:35:35', '2021-10-06 11:35:35'),
(45, '10', '2021-10-0614:35:51imageimage-078.jpg', '2021-10-06 11:35:51', '2021-10-06 11:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `hows`
--

CREATE TABLE `hows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hows`
--

INSERT INTO `hows` (`id`, `title`, `slung`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Register', 'instruction-one', 'Choose your option/level depending on your know how in the financial markets', NULL, '2021-04-14 11:03:15', '2021-04-14 11:03:15'),
(2, 'Fund', 'instruction-two', 'Fund your account using a wide range of funding methods.', NULL, '2021-04-14 11:03:46', '2021-04-14 11:03:46'),
(3, 'Learn', 'instructions-three', 'Get Access to a lifetime account with 100+ practical tutorials on financial markets', NULL, '2021-04-14 11:03:56', '2021-04-14 11:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `code` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `price` double NOT NULL,
  `status` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `ip` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `code`, `address`, `price`, `status`, `product`, `ip`) VALUES
(27, 'iYBCr1l16eaIoJ9ei3g2Fyuqs', 'HTTP/1.1 401 Unauthorized\n', 58.6, -1, 4, '154.152.205.154'),
(28, 'T4XJ2VQ91q4FY5OshEWBt4LGJ', '18xREniiKGFg9KPNnwKhSgPPjAcuu6nH7V', 400, -1, 1, '154.152.205.154'),
(29, 'koBfTucsUeYAFii7ehdMDSpEY', '1773nBXJVFT96kJyFEqp9Pfw1bt87rcUiH', 400, -1, 1, '154.152.205.154');

-- --------------------------------------------------------

--
-- Table structure for table `lnmo_api_response`
--

CREATE TABLE `lnmo_api_response` (
  `lnmoID` int(11) NOT NULL,
  `MerchantRequestID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CheckoutRequestID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MpesaReceiptNumber` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransactionDate` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhoneNumber` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lnmo_api_response`
--

INSERT INTO `lnmo_api_response` (`lnmoID`, `MerchantRequestID`, `CheckoutRequestID`, `user_id`, `status`, `Amount`, `MpesaReceiptNumber`, `TransactionDate`, `PhoneNumber`, `updateTime`, `created_at`, `updated_at`) VALUES
(1, '4467-10173291-1', 'ws_CO_170520211025511606', 2, 0, NULL, NULL, NULL, NULL, '2021-05-17 10:26:01', '2021-05-17 07:26:01', '2021-05-17 04:26:01'),
(2, '129271-1605621-1', 'ws_CO_170520211029164925', 2, 0, NULL, NULL, NULL, NULL, '2021-05-17 10:29:17', '2021-05-17 07:29:17', '2021-05-17 04:29:17'),
(3, '12420-1557191-1', 'ws_CO_170520211101501296', 2, 0, NULL, NULL, NULL, NULL, '2021-05-17 11:02:00', '2021-05-17 08:02:00', '2021-05-17 05:02:00'),
(4, '8304-1897142-1', 'ws_CO_170520211516170638', 2, 0, NULL, NULL, NULL, NULL, '2021-05-17 15:16:18', '2021-05-17 12:16:18', '2021-05-17 09:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `name`, `email`, `content`, `mobile`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Arrival and Evening Dhow Cruise 1', 'Albert Muhatia', 'albertmuhatia@gmail.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', NULL, 0, '2021-04-06 04:00:00', '2021-04-06 04:00:00'),
(2, 'Arrival and Evening Dhow Cruise 2', 'Albert Muhatia', 'albertmuhatia@gmail.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', NULL, 0, '2021-04-06 04:00:00', '2021-04-06 04:00:00'),
(3, 'Arrival and Evening Dhow Cruise 3\n', 'Albert Muhatia', 'albertmuhatia@gmail.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', NULL, 0, '2021-04-06 04:00:00', '2021-04-06 04:00:00'),
(4, 'Arrival and Evening Dhow Cruise 4\n', 'Albert Muhatia', 'albertmuhatia@gmail.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', NULL, 0, '2021-04-06 04:00:00', '2021-04-06 04:00:00'),
(5, 'Arrival and Evening Dhow Cruise 5\n', 'Albert Muhatia', 'albertmuhatia@gmail.com', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', NULL, 0, '2021-04-06 04:00:00', '2021-04-06 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_04_21_072753_create_notifications_table', 2),
(6, '2021_09_29_101705_create_clients_table', 3),
(7, '2021_10_05_062203_create__site_settings_table', 0),
(8, '2021_10_05_062203_create_abouts_table', 0),
(9, '2021_10_05_062203_create_accountbalance_table', 0),
(10, '2021_10_05_062203_create_activity_log_table', 0),
(11, '2021_10_05_062203_create_b2b_api_response_table', 0),
(12, '2021_10_05_062203_create_b2c_api_response_table', 0),
(13, '2021_10_05_062203_create_banners_table', 0),
(14, '2021_10_05_062203_create_blogs_table', 0),
(15, '2021_10_05_062203_create_cases_table', 0),
(16, '2021_10_05_062203_create_categories_table', 0),
(17, '2021_10_05_062203_create_clients_table', 0),
(18, '2021_10_05_062203_create_comments_table', 0),
(19, '2021_10_05_062203_create_copyright_table', 0),
(20, '2021_10_05_062203_create_copyrights_table', 0),
(21, '2021_10_05_062203_create_courses_table', 0),
(22, '2021_10_05_062203_create_email_settings_table', 0),
(23, '2021_10_05_062203_create_failed_jobs_table', 0),
(24, '2021_10_05_062203_create_faq_table', 0),
(25, '2021_10_05_062203_create_hows_table', 0),
(26, '2021_10_05_062203_create_invoices_table', 0),
(27, '2021_10_05_062203_create_lnmo_api_response_table', 0),
(28, '2021_10_05_062203_create_messages_table', 0),
(29, '2021_10_05_062203_create_mobile_payments_table', 0),
(30, '2021_10_05_062203_create_notifications_table', 0),
(31, '2021_10_05_062203_create_orders_table', 0),
(32, '2021_10_05_062203_create_password_resets_table', 0),
(33, '2021_10_05_062203_create_personal_access_tokens_table', 0),
(34, '2021_10_05_062203_create_privacies_table', 0),
(35, '2021_10_05_062203_create_terms_table', 0),
(36, '2021_10_05_062203_create_testimonials_table', 0),
(37, '2021_10_05_062203_create_users_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_payments`
--

CREATE TABLE `mobile_payments` (
  `transLoID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `TransactionType` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransTime` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransAmount` double NOT NULL,
  `BusinessShortCode` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BillRefNumber` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InvoiceNumber` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrgAccountBalance` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThirdPartyTransID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSISDN` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_payments`
--

INSERT INTO `mobile_payments` (`transLoID`, `user_id`, `status`, `TransactionType`, `TransID`, `TransTime`, `TransAmount`, `BusinessShortCode`, `BillRefNumber`, `InvoiceNumber`, `OrgAccountBalance`, `ThirdPartyTransID`, `MSISDN`, `FirstName`, `MiddleName`, `LastName`, `lastUpdate`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '', 'U49DYMLXAG', '20210503142050', 10, '603421', '2', '', '49197.00', '', '254708374149', 'John', '', 'Doe', '2021-05-03 07:20:50', '2021-05-03 15:20:50', '2021-05-03 15:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `invoice` varchar(256) NOT NULL,
  `ip` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Personal Information Collected', '<p>apexengltd.com will gather information in the background when any person or legal entity visits the apexengltd.com website using cookies. This may include IP address, device type, Internet browser type, operating system, location, and other device-specific information. Data collected is for business intelligence meant for enhancing user experience any time a user visits apexengltd.com.</p>', '2021-04-13 18:14:39', '2021-04-13 18:14:39'),
(2, 'Management of personal data', '<p>You can choose whether you wish to receive promotional communications from our website by email using the subscribe form in the footer section of this page. If you receive promotional email or SMS messages from us and would like to opt-out, you can request deletion of your email info@apexengltd.com.</p>', '2021-04-13 18:15:31', '2021-04-13 18:15:31'),
(3, 'Contact', '<p>You have the right to review the personal data we keep about you. You can request an overview of your personal data by emailing info@apexengltd.com with the subject line Request for personal information. To help us prevent the fraudulent collection of personal information, please include a scan of your passport or identity card. If you would like us to remove your personal information from our database, please email info@apexengltd.com with the subject line Request for removal of personal information. Please bear in mind that we may need to retain certain information for legal and/or administrative purposes such as record keeping or to detect fraudulent or criminal activities.<br />\r\n&nbsp;</p>', '2021-04-13 18:16:04', '2021-04-13 18:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Links To Other Websites', '<p>Our Service may contain links to third-party websites or services that are not owned or controlled by Apex Engineering Limited. Apex Engineering Limited has no control over and assumes no responsibility for, the content, privacy policies, or practices of any third-party websites or services. You further acknowledge and agree that Apex Engineering Limited shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods, or services available on or through any such web sites or services. We strongly advise you to read the terms and conditions and privacy policies of any third-party websites or services that you visit.</p>', '2021-04-13 18:53:09', '2021-04-13 18:53:09'),
(2, 'Changes', '<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion. By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>', '2021-04-13 18:54:20', '2021-04-13 18:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `content`, `company`, `position`, `rating`, `image`, `created_at`, `updated_at`) VALUES
(1, 'John Kirimi', '<p>This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials</p>', 'Designekta Studios', 'Magaging Partner', '5', 'pic12.jpg', '2021-04-05 12:07:15', '2021-04-05 12:07:15'),
(2, 'Albert Muhatia', '<p>This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials</p>', 'Designekta Studios', 'Magaging Partner', '5', 'pic14.jpg', '2021-04-05 12:07:15', '2021-04-05 12:07:15'),
(3, 'Kim Rop', '<p>This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials&nbsp;This is a sample client testimonials</p>', 'Designekta Studios', 'Magaging Partner', '5', 'pic15.jpg', '2021-04-05 12:07:15', '2021-04-05 12:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `position`, `facebook`, `instagram`, `linkedin`, `email`, `mobile`, `address`, `country`, `image`, `email_verified_at`, `is_admin`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, NULL, NULL, 'hussein@apexengltd.com', NULL, NULL, NULL, 'pic.jpg', NULL, 1, '$2y$10$EcST25mDppHEz8kVKDfiGueSwnAVJPW28pq4DIkGTLwsZ8QOfj59a', 1, NULL, '2021-09-22 09:06:56', '2021-09-22 09:06:56'),
(2, 'User', NULL, NULL, NULL, NULL, 'user@designekta.com', NULL, NULL, NULL, 'pic.jpg', NULL, 0, '$2y$10$F/CbJEzoLayUJFXmfXH/ZeqI8quA199U2ULDJLPAn.kSwm7US.OxG', 1, NULL, '2021-09-22 09:06:57', '2021-09-22 09:06:57'),
(3, 'Nashid Martines', 'Director', 'facebook.com', 'instagram.com', 'linkedin.com', 'nektatech@gmail.com', '0723014032', '80', 'Kenya', 'pic.jpg', NULL, 0, '$2y$10$lHXQMuOGyviufC2OOEajOeiYRLjB4CKXd5ld.oWTEv6mTa.KkX7U2', 1, NULL, '2021-10-02 03:12:49', '2021-10-02 03:12:49'),
(4, 'Konne Backfield', NULL, NULL, NULL, NULL, 'albertmuhatia@gmail.com', '0723014032', '80', 'Kenya', 'pic.jpg', NULL, 0, '$2y$10$uC6YMSE/2WWfHWaxJMME9e1pLIzADkZXLRTGg7CEFJCW89MZCSVRu', 1, NULL, '2021-10-02 03:13:49', '2021-10-02 03:13:49'),
(5, 'Hackson Willingham', NULL, NULL, NULL, NULL, 'info@designekta.com', '0723014032', '00100', 'Kenya', 'pic.jpg', NULL, 0, '$2y$10$8e2OdU8SEKDPjO.Uddmn.OZGhfp2S/t.DVlm2UtOWq3QV8Fja04re', 1, NULL, '2021-10-02 03:14:24', '2021-10-02 03:14:24'),
(6, 'Konne Backfield', NULL, NULL, NULL, NULL, 'albert@designekta.com', '0723014032', '00100', 'Kenya', 'pic.jpg', NULL, 0, '$2y$10$2Pi5ZghYdEI4vO9DK976/OrLiKkSvjXRg0dF8iMn0Q3Zib..jOu9q', 1, NULL, '2021-10-02 03:15:17', '2021-10-02 03:15:17'),
(7, 'Konne Backfield', NULL, NULL, NULL, NULL, 'alberts@designekta.com', '0723014032', '80', 'Kenya', 'pic.jpg', NULL, 0, '$2y$10$p/Y.7edl0iQrraysm1KRROsMC2cZJPVE1cAfyJZYLf2QGRxpNG5hy', 1, NULL, '2021-10-02 03:17:52', '2021-10-02 03:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `_site_settings`
--

CREATE TABLE `_site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpesa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `risks` text COLLATE utf8mb4_unicode_ci,
  `welcome` text COLLATE utf8mb4_unicode_ci,
  `tawkTo` text COLLATE utf8mb4_unicode_ci,
  `tawkToStatus` tinyint(4) NOT NULL DEFAULT '1',
  `whatsAppStatus` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_site_settings`
--

INSERT INTO `_site_settings` (`id`, `sitename`, `logo`, `logo_footer`, `logo_two`, `favicon`, `email`, `email_one`, `mobile_one`, `mobile_two`, `mpesa`, `paypal`, `tagline`, `url`, `location`, `map`, `address`, `facebook`, `whatsapp`, `telegram`, `twitter`, `linkedin`, `instagram`, `youtube`, `google`, `risks`, `welcome`, `tawkTo`, `tawkToStatus`, `whatsAppStatus`, `created_at`, `updated_at`) VALUES
(1, 'Apex Engineering Limited', 'logo-2.png', 'logo-2.png', 'logo-2.png', 'APEX FAV-23.png', 'info@apexengltd.com', 'apexengineering@yahoo.com', '+0612891375', '0722267027', '757539', 'info@pipdotfx.com', 'Engineering For Sustainable Ecosystem', 'https://www.apexengltd.com', 'Nairobi Office:1st Floor Eagle court Building,  Muthaiga, Nairobi, Kenya', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske', 'Mogadishu Office: Buula Huubey, Wadajir District, Mogadishu, Somalia.', 'https://web.facebook.com/ApexEngineeringLtd', '+254723014032', '0723014032', 'https://twitter.com/apexengltd', 'https://www.linkedin.com/company/apex-engineering-ltd', 'https://www.instagram.com/apexengineeringltd/', NULL, NULL, '<p class=\"uk-text-small\">Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary</p>', '<p>afad sfa afaf hahajksa aaaaaaaaaa</p>', '<!--Start of Tawk.to Script-->\r\n	<script type=\"text/javascript\">\r\n		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n		(function(){\r\n		var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\n		s1.async=true;\r\n		s1.src=\'https://embed.tawk.to/6143138825797d7a89ff4524/1ffn08k00\';\r\n		s1.charset=\'UTF-8\';\r\n		s1.setAttribute(\'crossorigin\',\'*\');\r\n		s0.parentNode.insertBefore(s1,s0);\r\n		})();\r\n	</script>\r\n	<!--End of Tawk.to Script-->', 1, 1, '2021-03-25 04:00:00', '2021-03-25 04:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`(191),`subject_id`),
  ADD KEY `causer` (`causer_type`(191),`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`(191));

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_site_settings`
--
ALTER TABLE `_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `_site_settings`
--
ALTER TABLE `_site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
