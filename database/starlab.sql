-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- হোষ্ট: 127.0.0.1
-- তৈরী করতে ব্যবহৃত সময়: মার 27, 2016 at 12:18 ???????
-- সার্ভার সংস্করন: 5.6.20
-- পিএইছপির সংস্করন: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ডাটাবেইজ: `mylaravel`
--

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_11_13_095540_create_session_table', 1),
('2015_11_14_080325_create_users_table', 1),
('2016_02_01_080442_patients', 1);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
`id` int(10) unsigned NOT NULL,
  `photo_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_serial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passport_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `boesl_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visa_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visa_date` date NOT NULL,
  `passport_issue_date` date NOT NULL,
  `passport_issue_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marital` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `applied_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recruiting_agency_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eye_right` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eye_left` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ear_right` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ear_left` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blood_pressure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heart` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lungs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ches_x_ray` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hernia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `varicose_veins` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extremities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deformities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cns` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `psychiatry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clinical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urine_sugar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urine_alburmine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urine_bilharziasis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `urine_pregnancy_test` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stool_helminthes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stool_guardia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stool_bilharziasis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stool_salmonella` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stool_shegella` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stool_v_cholerae` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blood_haemoglobin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blood_malaria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blood_micro_filaria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serology_fbs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serology_lfts_bil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serology_sgpt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serology_sgot` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serology_creatinine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elisa_hiv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elisa_hbsag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elisa_anti_hcv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elisa_vdrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elisa_tpha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `physical_fitUnfit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `physical_Unfit_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathology_fitUnfit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pathology_Unfit_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `radiology_fitUnfit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `radiology_Unfit_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` text COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abdomen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insert_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_edit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `administrator_approve` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=45 ;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `patients`
--

INSERT INTO `patients` (`id`, `photo_name`, `card_serial`, `passport_no`, `first_name`, `last_name`, `country`, `boesl_code`, `visa_no`, `visa_date`, `passport_issue_date`, `passport_issue_place`, `height`, `weight`, `gender`, `marital`, `nationality`, `applied_position`, `recruiting_agency_name`, `eye_right`, `eye_left`, `ear_right`, `ear_left`, `blood_pressure`, `heart`, `lungs`, `ches_x_ray`, `hernia`, `varicose_veins`, `extremities`, `deformities`, `skin`, `cns`, `psychiatry`, `clinical`, `urine_sugar`, `urine_alburmine`, `urine_bilharziasis`, `urine_pregnancy_test`, `stool_helminthes`, `stool_guardia`, `stool_bilharziasis`, `stool_salmonella`, `stool_shegella`, `stool_v_cholerae`, `blood_haemoglobin`, `blood_malaria`, `blood_micro_filaria`, `serology_fbs`, `serology_lfts_bil`, `serology_sgpt`, `serology_sgot`, `serology_creatinine`, `elisa_hiv`, `elisa_hbsag`, `elisa_anti_hcv`, `elisa_vdrl`, `elisa_tpha`, `blood_group`, `date_of_birth`, `physical_fitUnfit`, `physical_Unfit_comment`, `pathology_fitUnfit`, `pathology_Unfit_comment`, `radiology_fitUnfit`, `radiology_Unfit_comment`, `remarks`, `profession`, `abdomen`, `insert_by`, `last_edit`, `administrator_approve`, `active`, `created_at`, `updated_at`) VALUES
(22, '1458963061.jpg', 'JR-16-03-47', 'BJ 0601257', 'SHAHINUR', 'AKTER', 'Afganistan', '', '', '0000-00-00', '0000-00-00', '', '', '', 'Female', '', '', '', '', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.5', 'Not Found', 'Not Found', '112.6', '0.68', '32', '18', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 21:31:01', '2016-03-25 21:43:08'),
(23, '1458964558.jpg', 'JR-16-03-65', 'BK 0340435', 'MST', 'SALMA', 'Jordan', '1140', '', '0000-00-00', '2016-03-02', 'DHAKA', '149', '62', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.5', 'Not Found', 'Not Found', '110.00', '0.68', '36', '28', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 21:55:58', '2016-03-25 22:06:01'),
(24, '1458965709.jpg', 'JR-16-03-64', 'BK 0339903', 'SAPLA', 'AKTER', 'Jordan', '1145', '', '0000-00-00', '2016-03-02', 'DHAKA', '148', '47', 'Female', 'Unmarried', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.5', 'Not Found', 'Not Found', '109.6', '0.82', '36', '22', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 22:15:09', '2016-03-25 22:21:06'),
(25, '1458966151.jpg', 'JR-16-03-67', 'BK 0086282', 'MORIUM', 'AKTER', 'Jordan', '1144', '', '0000-00-00', '2016-02-01', 'DHAKA', '154', '55', 'Female', 'Unmarried', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Irregular', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.00', 'Not Found', 'Not Found', '110.00', '0.68', '36', '28', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 22:22:31', '2016-03-25 22:27:31'),
(26, '1458966732.jpg', 'JR-16-03-66', 'AG 6225847', 'JAHEDA', 'BEGUM', 'Jordan', '1141', '', '0000-00-00', '2016-09-22', 'DHAKA', '145', '41', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.5', 'Not Found', 'Not Found', '108.6', '0.78 ', '34L', '22', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 22:32:12', '2016-03-25 22:39:17'),
(28, '1458967352.jpg', 'JR-16-03-63', 'BK 0446767', 'MOSA PEARA', 'BEGOM', 'Jordan', '1147', '', '0000-00-00', '2016-03-14', 'DHAKA', '154', '69', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.00', 'Not Found', 'Not Found', '112.00', '0.62', '32', '18', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 22:42:32', '2016-03-25 22:46:52'),
(29, '1458967710.jpg', 'JR-16-3-47', 'BJ0601257', 'SHAHINUR', 'AKTER', 'Jordan', '1143', '', '0000-00-00', '2015-12-20', 'DHAKA', '148', '55', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.5', 'Not Found', 'Not Found', '109.6', '0.78', '34 ', '17', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 22:48:30', '2016-03-25 22:52:12'),
(30, '1458968000.jpg', 'JR-16-03-44', 'BK 0038506', 'TAMANNA', 'AKTER', 'Jordan', '1130', '', '0000-00-00', '2016-01-27', 'DHAKA', '165', '36', 'Female', 'Unmarried', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.5', 'Not Found', 'Not Found', '102.00', '0.82', '30', '22', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 22:53:20', '2016-03-25 22:57:26'),
(31, '1458968345.jpg', 'JR-16-03-39', 'BC 0985150', 'LABONE AKTER ', 'MINA', 'Jordan', '1148', '', '0000-00-00', '2014-12-21', 'DHAKA', '156', '50', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.5', 'Not Found', 'Not Found', '108.6', '0.62', '', '', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 22:59:05', '2016-03-25 23:02:11'),
(32, '1458968613.jpg', 'JR-16-03-38', 'BK 0358558', 'MST', 'YASMIN', 'Jordan', '1132', '', '0000-00-00', '2016-03-03', 'DHAKA', '155', '49', 'Female', 'Unmarried', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '110/70', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.00', 'Not Found', 'Not Found', '98.6', '0.62', '34', '18', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 23:03:33', '2016-03-25 23:07:06'),
(33, '1458968929.jpg', 'JR-16-03-36', 'BK 0119302', 'MST NASIMA', 'BAGOM', 'Jordan', '1142', '', '0000-00-00', '2016-02-03', 'DHAKA', '162', '56', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', ' 6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.00', 'Not Found', 'Not Found', '98.6', '0.68', '36', '30', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 23:08:49', '2016-03-25 23:12:17'),
(34, '1458969202.jpg', 'JR-16-03-34', 'BK 0346399', 'SUMI', 'AKTER', 'Jordan', '1137', '', '0000-00-00', '2016-03-02', 'DHAKA', '152', '51', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.00', 'Not Found', 'Not Found', '100.00', '0.78', '30', '17', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 23:13:22', '2016-03-25 23:16:56'),
(35, '1458969474.jpg', 'JR-16-03-31', 'BK 0103618', 'EVA', 'HOWLADER', 'Jordan', '1136', '', '0000-00-00', '2016-02-02', 'DHAKA', '165', '56', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.00', 'Not Found', 'Not Found', '98.00', '0.62', '34', '18', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-25 23:17:54', '2016-03-25 23:21:33'),
(37, '1458972097.jpg', 'JR-16-03-19', 'BJ 0710151', 'PARVIN', 'AKHTER', 'Jordan', '1157', '', '0000-00-00', '2015-12-28', 'DHAKA', '156', '46', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.5', 'Not Found', 'Not Found', '98.00', '0.62', '34', '18', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-26 00:01:37', '2016-03-26 00:04:21'),
(38, '1458972339.jpg', 'JR-16-03-18', 'BH 0416136', 'NASIMA', 'AKTAR', 'Jordan', '1155', '', '0000-00-00', '2015-08-31', 'DHAKA', '156', '49', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', ' 6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.00', 'Not Found', 'Not Found', '110.00', '0.62', '32', '18', '0.7', 'Normal', 'Normal', 'Normal', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-26 00:05:39', '2016-03-26 00:08:39'),
(39, '1458972593.jpg', 'JR-16-03-17', 'BH 0542532', 'MST PARULA', 'AKTER', 'Jordan', '1152', '', '0000-00-00', '2015-09-09', 'DHAKA', '155', '63', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '12.00', 'Not Found', 'Not Found', '100.00', '0.62', '32', '18', '0.7', 'Negetive', 'Negetive', 'Negetive', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-26 00:09:53', '2016-03-26 00:12:40'),
(40, '1458972817.jpg', 'JR-16-03-14', 'BK 0381457', 'MIS', 'SUMI', 'Jordan', '1156', '', '0000-00-00', '2016-03-07', 'DHAKA', '149', '54', 'Female', 'Unmarried', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.5', 'Not Found', 'Not Found', '109.6', '0.78', '34', '18', '0.7', 'Negetive', 'Negetive', 'Negetive', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-26 00:13:37', '2016-03-26 00:16:26'),
(41, '1458973049.jpg', 'JR-16-03-13', 'BK 0395722', 'ZANNAT', 'BEGUM', 'Jordan', '1135', '', '0000-00-00', '2016-03-08', 'DHAKA', '155', '49', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.5', 'Not Found', 'Not Found', '109.00', '0.58', '30', '14', '0.7', 'Negetive', 'Negetive', 'Negetive', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-26 00:17:29', '2016-03-26 00:20:30'),
(42, '1458973475.jpg', 'JR-16-03-9', 'BF 0369554', 'MOST SHULI', 'AKTER', 'Jordan', '1139', '', '0000-00-00', '2015-05-05', 'DHAKA', '154', '45', 'Female', 'Unmarried', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.5', 'Not Found', 'Not Found', '110.00', '0.62', '36', '30', '0.7', 'Negetive', 'Negetive', 'Negetive', 'Non-reative', 'Normal', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0', '1', '2016-03-26 00:24:35', '2016-03-26 00:30:03'),
(43, '1458973935.jpg', 'JR-16-03-59', 'BK 0323407', 'MST ', 'ARJU', 'Jordan', '1158', '12345', '2016-03-26', '2016-02-29', 'DHAKA', '149', '46', 'Female', 'Unmarried', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '110/70', 'NAD', 'CLEAR', '22', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '', 'Not Found', 'Not Found', '1.012', '0.58', '30', '14', '0.7', 'Negetive', 'Negetive', 'Negetive', 'Non-reative', '', '', '2007-01-01', 'Yes', 'dd', 'No', 'dd', 'No', '', '', 'house wife', '', '', '', '0', '1', '2016-03-26 00:32:15', '2016-03-27 04:00:53'),
(44, '1458974206.jpg', 'JR-16-03-54', 'BK 0273595', 'MST SAKHINA', 'AKTER', 'Jordan', '1158', '', '0000-00-00', '2016-02-23', 'DHAKA', '147', '44', 'Female', 'Married', 'BANGLADESHI', 'N/A', 'TUSKER APPAREL', '6/6', '6/6', 'Normal', 'Normal', '120/80', 'NAD', 'CLEAR', 'Normal', 'ABSENT', 'ABSENT', 'NAD', 'ABSENT', 'NAD', 'NAD', 'NAD', 'ABSENT', 'NIL', 'NIL', 'Absent', '', 'Absent', 'Absent', 'Absent', 'No Growth', 'No Growth', 'No Growth', '11.5', 'Not Found', 'Not Found', '108.6', '0.68', '36', '18', '0.7', 'Negetive', 'Negetive', 'Negetive', 'Non-reative', 'Negetive', '', '0000-00-00', 'Yes', '', 'Yes', '', '', '', '', '', '', '', '', '0', '1', '2016-03-26 00:36:46', '2016-03-27 04:15:43');

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_power` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `active`, `user_power`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'admin', '', '$2y$10$Fx/k7JJurA3AabU3/.igyuq/am5W38lajZ6ur9toRZxQ9qZ9KX1xu', '1', '1', '3x6bYCyFPjKwgEmMZ88a01azl5heafGqbnLbqd5wtFf3xX3hkJhMAYSOVcvN', '0000-00-00 00:00:00', '2016-03-27 04:15:57'),
(2, '', 'administrator', '', '$2y$10$Fx/k7JJurA3AabU3/.igyuq/am5W38lajZ6ur9toRZxQ9qZ9KX1xu', '1', '2', 'MkAwIOqbCLYUKchjz21GwGEbIVEnNetXvHXs3Z15JIP99veZyYWU3sZkJyag', '0000-00-00 00:00:00', '2016-03-26 21:29:14');

--
-- স্তুপকৃত টেবলের ইনডেক্স
--

--
-- টেবিলের ইনডেক্সসমুহ `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`id`);

--
-- টেবিলের ইনডেক্সসমুহ `sessions`
--
ALTER TABLE `sessions`
 ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- টেবিলের ইনডেক্সসমুহ `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- স্তুপকৃত টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT)
--

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `patients`
--
ALTER TABLE `patients`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
