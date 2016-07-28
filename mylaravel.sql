-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- হোষ্ট: 127.0.0.1
-- তৈরী করতে ব্যবহৃত সময়: জান 10, 2016 at 01:54 ???????
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
('2015_11_13_052521_create_mytests_table', 1),
('2015_11_13_095540_create_session_table', 2),
('2015_11_14_080325_create_users_table', 3);

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `mytests`
--

CREATE TABLE IF NOT EXISTS `mytests` (
`id` int(10) unsigned NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `mytests`
--

INSERT INTO `mytests` (`id`, `user_id`, `title`, `description`, `tag`, `created_at`, `updated_at`) VALUES
(3, '1', 'My third post 3dd', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?222', '', '0000-00-00 00:00:00', '2016-01-04 05:57:02'),
(4, '', 'Forth post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '2015-11-17 00:11:42'),
(5, '', 'Five post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', 'six', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '1', 'six', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', 'six', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '2015-11-09 17:48:43', '0000-00-00 00:00:00'),
(9, '', 'Nine post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', 'Ten post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '', 'Ten', 'Ten post description', '', '2015-11-13 03:07:46', '2015-11-13 03:07:46'),
(12, '', 'Eleven', 'Eleven description', '', '2015-11-13 03:12:38', '2015-11-13 03:12:38'),
(13, '', 'Eleven', 'Eleven description', '', '2015-11-13 03:13:12', '2015-11-13 03:13:12'),
(14, '', 'Eleven', 'Eleven description', '', '2015-11-12 18:00:00', '2015-11-13 03:13:15'),
(19, '', 'Thirteen', 'Thirteen post description', '', '2015-11-13 03:24:19', '2015-11-13 03:24:19'),
(20, '', 'Fourtheen', 'fourteen post description', '', '2015-11-13 03:25:38', '2015-11-13 03:25:38'),
(21, '', 'Fifteeen', 'Fifteen post description. ', '', '2015-11-13 03:26:26', '2015-11-13 03:26:26'),
(22, '', 'Sixteen', 'Sixteen post description', '', '2015-11-13 03:33:45', '2015-11-13 03:33:45'),
(23, '', 'Seventeen', 'seventeen post description', '', '2015-11-13 03:48:48', '2015-11-13 03:48:48'),
(24, '', 'Tweenty', 'Twenty description. ', '', '2015-11-13 04:01:40', '2015-11-13 04:01:40'),
(25, '', 'Tweenty', 'Twenty description. ', '', '2015-11-13 04:02:58', '2015-11-13 04:02:58'),
(27, '', 'Twenty Two', 'Twenty two description', '', '2015-11-13 04:07:28', '2015-11-13 04:07:28'),
(35, '', 'My last post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum iure inventore illo corrupti quo! Exercitationem repellat eos, minima, fugiat fugit recusandae ipsa totam magni earum accusamus dignissimos quis quas non inventore officia accusantium deserunt excepturi, ducimus beatae reiciendis ullam amet nostrum ex. Laudantium, quisquam, aliquid eos odio unde ratione in?', '', '2015-11-13 06:13:39', '2015-11-13 06:13:39'),
(37, '', 'My first post', 'My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. ', '', '2015-11-14 23:07:10', '2015-11-14 23:07:10'),
(39, '', 'My last post', 'My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. My first post description. ', '', '2015-11-14 23:33:13', '2015-11-16 00:06:37'),
(40, '', 'After delete posts. ', 'After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. After delete posts. ', '', '2015-11-17 00:31:23', '2015-11-17 00:31:23'),
(41, '', 'My last post at 19 Nov 2015', 'KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015KG Emp Email List @ 19 Nov 2015', '', '2015-11-19 00:52:54', '2015-11-19 00:57:08');

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
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Mehedi Hasan', 'admin    ', 'mehedi4475@gmail.com ', '$2y$10$Fx/k7JJurA3AabU3/.igyuq/am5W38lajZ6ur9toRZxQ9qZ9KX1xu', '4RPNGtLy668GwCY7m9zZPqReS5d3tYFAEvkdZ3tuRCfMeDYHXQ8oRj3xMmQr', '2015-11-22 03:07:01', '2016-01-07 01:49:25');

--
-- স্তুপকৃত টেবলের ইনডেক্স
--

--
-- টেবিলের ইনডেক্সসমুহ `mytests`
--
ALTER TABLE `mytests`
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
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `mytests`
--
ALTER TABLE `mytests`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
