-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2024 at 02:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhakacomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin.qbit@gmail.com', 'superadmin', 'Active', NULL, '$2y$10$CoxbVjWslyavHY5LXuCL.u9myhGsf/uiL2vpdvRsqRD9WXjUbstSy', 'v8H4WiOSp7hTlNYSccyvAE5QlvK503ZG0WBkTmTRzdSk8heqmV3VNANEsydR', '2024-06-08 23:48:38', '2024-07-14 04:39:04'),
(3, 'Admin', 'admin@gmail.com', 'Admin', 'Active', NULL, '$2y$10$bm9qv3c7WMDdT2ZjanbGzeh.m0oTlTFQ7RH00I9i8tNPWbyi.M2iy', NULL, '2024-06-25 01:24:39', '2024-07-14 04:20:57'),
(5, 'Manager', 'manager@gmail.com', 'manager', 'Inactive', NULL, '$2y$10$9JZsgLff.wsxTbHwwE74yuVtIptj.0kJ9OOScrEVMgv/OjA5KtwGS', NULL, '2024-07-14 04:10:11', '2024-07-14 04:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category` varchar(255) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category`, `blog_title`, `blog_content`, `blog_image`, `created_at`, `updated_at`) VALUES
(1, 'EDUCATION', 'Educational Technology & Mobile Learning', 'Dramatically supply transparent deliverab before & you backward comp internal.', '17197254701863712717.jpg', '2024-06-29 23:31:10', '2024-06-29 23:31:10'),
(2, 'EDUCATION', 'Computer Technology & Fild Work Experiences', 'Dramatically supply transparent deliverab before & you backward comp internal.', '1719725870741562338.jpg', '2024-06-29 23:37:50', '2024-06-29 23:37:50'),
(3, 'EDUCATION', 'Engineering Technology & Academic Learning', 'Dramatically supply transparent deliverab before & you backward comp internal.', '17197259261450292136.jpg', '2024-06-29 23:38:46', '2024-06-29 23:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `cat_icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `description`, `cat_icon`, `created_at`, `updated_at`) VALUES
(1, 'Graphic Design', 'Graphic Design', '17179124651905932833.png', '2024-06-08 23:54:25', '2024-07-14 00:00:16'),
(2, 'German Language', 'Learn German Language', '17179125451280802724.png', '2024-06-08 23:55:45', '2024-07-06 23:46:41'),
(3, 'Chinese Language', 'Learn Chinese Language', '17180019351654974655.png', '2024-06-08 23:57:55', '2024-07-06 23:33:23'),
(4, 'Korean Language', 'Korean Language', '1717912839396375577.png', '2024-06-09 00:00:39', '2024-07-06 23:35:54'),
(5, 'Japanese Language', 'The “Online Japanese N5 Course” is Japanese video course to learn JLPT N5 level.', '1717996050970130182.png', '2024-06-09 00:01:35', '2024-06-09 23:07:30'),
(9, 'Microsoft Office', 'Microsoft Office', '1720953802358162630.png', '2024-07-14 04:43:22', '2024-07-14 04:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `chooses`
--

CREATE TABLE `chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `choose_image` varchar(255) DEFAULT NULL,
  `choose_years` int(11) DEFAULT NULL,
  `choose_title` varchar(255) DEFAULT NULL,
  `choose_subtitle` varchar(255) DEFAULT NULL,
  `content_one` varchar(255) DEFAULT NULL,
  `content_two` varchar(255) DEFAULT NULL,
  `content_three` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooses`
--

INSERT INTO `chooses` (`id`, `choose_image`, `choose_years`, `choose_title`, `choose_subtitle`, `content_one`, `content_two`, `content_three`, `short_description`, `button_text`, `button_url`, `created_at`, `updated_at`) VALUES
(1, '1719724843913416189.jpg', 23, 'Why You Choose Our', 'Language-Next Online learning', 'Increasing Your Learning Skills', 'High Quality Video & Audio Classes', 'Finish Your Course, Get Certificate', 'Dramatically supply transparent deliverables before & can backward comp internal or \"organic\" sources.', 'Explore Courses', 'http://127.0.0.1:8000/course_list', '2024-06-29 23:20:43', '2024-06-29 23:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `course_short_desc` text NOT NULL,
  `about` text NOT NULL,
  `description` longtext DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `level` enum('Beginner','Advanced','Intermediate') NOT NULL DEFAULT 'Beginner',
  `language` varchar(255) NOT NULL DEFAULT 'English',
  `course_status` enum('Active','Private','Upcoming') NOT NULL DEFAULT 'Private',
  `is_free` tinyint(1) DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `discounted_price` double NOT NULL DEFAULT 0,
  `expire_time` tinyint(4) NOT NULL DEFAULT 0,
  `duration` varchar(255) DEFAULT NULL,
  `schedules` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `slug`, `course_short_desc`, `about`, `description`, `category_id`, `level`, `language`, `course_status`, `is_free`, `price`, `discounted_price`, `expire_time`, `duration`, `schedules`, `created_at`, `updated_at`) VALUES
(1, 'Graphic Design with AI', 'graphic_design_with_ai', 'Short description', 'AI এর এই যুগে আপনার ডিজাইন ওয়ার্কফ্লোতে AI ব্যবহার করে ডিজাইন আউটপুট ও এফিসিয়েন্সি বাড়াতে এবং প্যাসিভ ইনকামের সোর্স তৈরি করতে জয়েন করে ফেলুন এই লাইভ কোর্সে।', '<p><span style=\"color: rgb(82, 100, 132); font-family: &quot;DM Sans&quot;, sans-serif;\">Description</span><br></p>', 1, 'Beginner', 'English', 'Active', 0, 5678, 123, 0, 'Total 72 Hours', '7 pm to 9pm Sunday  Wdnestday & Friday Every week', '2024-07-14 01:18:37', '2024-07-14 01:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `course_eligibles`
--

CREATE TABLE `course_eligibles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_eligible` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_eligibles`
--

INSERT INTO `course_eligibles` (`id`, `course_id`, `course_eligible`, `created_at`, `updated_at`) VALUES
(1, 1, 'Who are eligible', '2024-07-14 01:18:37', '2024-07-14 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_faqs`
--

CREATE TABLE `course_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `faq_question` varchar(255) NOT NULL,
  `faq_answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_faqs`
--

INSERT INTO `course_faqs` (`id`, `course_id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'faq one', 'fa2q answer', '2024-07-14 01:18:37', '2024-07-14 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_media`
--

CREATE TABLE `course_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `course_thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_media`
--

INSERT INTO `course_media` (`id`, `course_id`, `course_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 1, '1720941517920968483.jpg', '2024-07-14 01:18:37', '2024-07-14 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_metas`
--

CREATE TABLE `course_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_metas`
--

INSERT INTO `course_metas` (`id`, `course_id`, `keyword`, `slug`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Meta keywords', 'meta_keywords', 'Meta description', '2024-07-14 01:18:37', '2024-07-14 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_objectives`
--

CREATE TABLE `course_objectives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `objectives` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_objectives`
--

INSERT INTO `course_objectives` (`id`, `course_id`, `objectives`, `created_at`, `updated_at`) VALUES
(1, 1, '৬ সপ্তাহের স্টাডিপ্ল্যান', '2024-07-14 01:18:37', '2024-07-14 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_outcomes`
--

CREATE TABLE `course_outcomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `outcome` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_outcomes`
--

INSERT INTO `course_outcomes` (`id`, `course_id`, `outcome`, `created_at`, `updated_at`) VALUES
(1, 1, 'outcome one', '2024-07-14 01:18:37', '2024-07-14 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_prices`
--

CREATE TABLE `course_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `is_free` tinyint(1) DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `discounted_price` double NOT NULL DEFAULT 0,
  `expire_time` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_prices`
--

INSERT INTO `course_prices` (`id`, `course_id`, `is_free`, `price`, `discounted_price`, `expire_time`, `created_at`, `updated_at`) VALUES
(2, 2, NULL, 99, 69, 0, '2024-06-09 00:46:44', '2024-06-09 00:46:44'),
(3, 3, NULL, 74, 12, 0, '2024-06-11 01:24:22', '2024-06-11 01:24:22'),
(4, 4, NULL, 76, 13, 0, '2024-06-11 01:37:42', '2024-06-11 01:37:42'),
(5, 5, NULL, 87, 15, 0, '2024-06-11 01:44:50', '2024-06-11 01:44:50'),
(7, 7, NULL, 244, 661, 0, '2024-06-13 00:31:55', '2024-06-13 00:31:55'),
(8, 8, 1, 12, 6, 0, '2024-06-30 01:58:40', '2024-06-30 01:58:40'),
(9, 9, 1, 3, 2, 0, '2024-06-30 02:48:09', '2024-06-30 02:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `course_requirements`
--

CREATE TABLE `course_requirements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_requirements`
--

INSERT INTO `course_requirements` (`id`, `course_id`, `requirement`, `created_at`, `updated_at`) VALUES
(1, 1, 'requirement one', '2024-07-14 01:18:37', '2024-07-14 01:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_enrol_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_address` text NOT NULL,
  `studentID` varchar(255) NOT NULL,
  `enroll_status` enum('Waiting','Accepted','Rejected') NOT NULL DEFAULT 'Waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address_one` text DEFAULT NULL,
  `address_two` text DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `status` enum('Active','Inactive','Pending','Suspend') NOT NULL DEFAULT 'Active',
  `job_title` varchar(255) DEFAULT NULL,
  `skill_level` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `join_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `first_name`, `last_name`, `email`, `phone`, `image`, `address_one`, `address_two`, `state`, `country`, `nationality`, `about`, `status`, `job_title`, `skill_level`, `language`, `dob`, `join_date`, `created_at`, `updated_at`) VALUES
(1, 'Kate', 'Williams', 'kate.williams@gmail.com', '01683034478', '17180111461227463758.jpg', '34 South Green First Avenue', 'Quam excepturi eaque', 'Dhaka', 'Bangladesh', 'Bangladeshi', 'Synergistically foster 24/7 leadership rather than scalable platforms. Conveniently visualize installed base products before interactive results. Collaboratively restore corporate experiences and open-source applications. Proactively mesh cooperative growth strategies for covalent opportunities. Competently create efficient markets through best-of-breed potentialities.\r\n\r\nCompellingly exploit B2B vortals with emerging total linkage. Appropriately pursue strategic leadership whe intermandated ideas. Proactively revolutionize interoperable \"outside the box\" thinking with fully researched innovation. Dramatically facilitate exceptional architectures and bricks-and-clicks data. Progressively genera extensible e-services for.', 'Active', 'Jr. Developer', 'Intermediate', 'English', '07/30/1998', '06/11/2024', '2024-06-10 03:19:06', '2024-07-06 23:38:18'),
(2, 'Linda', 'Anderson', 'linda@gmail.com', '01845685242', '1718011530610118824.jpg', '34 South Green First Avenue', 'Rerum voluptate rati', 'Dhaka', 'Bangladesh', 'Japanese', 'Compellingly exploit B2B vortals with emerging total linkage. Appropriately pursue strategic leadership whe intermandated ideas. Proactively revolutionize interoperable \"outside the box\" thinking with fully researched innovation. Dramatically facilitate exceptional architectures and bricks-and-clicks data. Progressively genera extensible e-services for.', 'Active', 'Executive', 'Pro', 'Japanese', '04/30/2003', '06/12/2024', '2024-06-10 03:25:30', '2024-06-27 00:34:46'),
(3, 'Courtney', 'Henry', 'henry34@gmail.com', '01795795443', '17180116321754301555.png', '557 East Rocky Old Extension', 'Quo cupiditate incid', 'Dhaka', 'Bangladesh', 'Chinese', 'Compellingly exploit B2B vortals with emerging total linkage. Appropriately pursue strategic leadership whe intermandated ideas. Proactively revolutionize interoperable \"outside the box\" thinking with fully researched innovation. Dramatically facilitate exceptional architectures and bricks-and-clicks data. Progressively genera extensible e-services for.', 'Active', 'Marketer', 'Intermediate', 'Chinese', '07/21/1993', '06/23/2020', '2024-06-10 03:27:12', '2024-06-10 22:45:39'),
(4, 'Devon', 'Lane', 'devon.lane@gmail.com', '01598745623', '1718011724444395790.png', '60/28 Dhalpur , New Sydabad Road', 'Jatrabari', 'Dhaka', 'Bangladesh', 'British', 'Compellingly exploit B2B vortals with emerging total linkage. Appropriately pursue strategic leadership whe intermandated ideas. Proactively revolutionize interoperable \"outside the box\" thinking with fully researched innovation. Dramatically facilitate exceptional architectures and bricks-and-clicks data. Progressively genera extensible e-services for.', 'Active', 'Content Creator', 'Intermediate', 'English', '07/29/2004', '07/19/2022', '2024-06-10 03:28:45', '2024-06-26 22:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_courses`
--

CREATE TABLE `instructor_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instructor_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor_courses`
--

INSERT INTO `instructor_courses` (`id`, `instructor_id`, `course_id`, `created_at`, `updated_at`) VALUES
(2, 1, 2, NULL, NULL),
(3, 3, 5, NULL, NULL),
(4, 4, 3, NULL, NULL),
(5, 2, 2, NULL, NULL),
(6, 2, 8, '2024-07-08 09:46:13', '2024-07-08 09:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_designations`
--

CREATE TABLE `instructor_designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instructor_id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor_designations`
--

INSERT INTO `instructor_designations` (`id`, `instructor_id`, `designation`, `created_at`, `updated_at`) VALUES
(1, 1, 'Content Creator', NULL, NULL),
(2, 1, 'Digital Markerter', NULL, NULL),
(3, 4, 'Content Creator', NULL, NULL),
(4, 3, 'Digital Marketer', NULL, NULL),
(5, 3, 'Content Creator', NULL, NULL),
(6, 4, 'Professional Marketer', NULL, NULL),
(7, 2, 'Nutritionist', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_professions`
--

CREATE TABLE `instructor_professions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instructor_id` bigint(20) UNSIGNED NOT NULL,
  `professions` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructor_professions`
--

INSERT INTO `instructor_professions` (`id`, `instructor_id`, `professions`, `created_at`, `updated_at`) VALUES
(1, 1, 'Teacher', NULL, NULL),
(2, 1, 'Motivational Speaker', NULL, NULL),
(3, 1, 'Teacher', NULL, NULL),
(4, 1, 'Researcher', NULL, NULL),
(5, 3, 'Teacher', NULL, NULL),
(6, 4, 'Photographer', NULL, NULL),
(7, 2, 'Doctor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lessions`
--

CREATE TABLE `lessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `select_lession_type` int(11) NOT NULL,
  `lession_title` varchar(255) NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `document_type` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `video_resource` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `summary` longtext NOT NULL,
  `is_free_lession` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessions`
--

INSERT INTO `lessions` (`id`, `select_lession_type`, `lession_title`, `section_id`, `document_type`, `attachment`, `image`, `video_url`, `video_resource`, `duration`, `description`, `summary`, `is_free_lession`, `created_at`, `updated_at`) VALUES
(8, 2, 'What Is IELTS?', 6, NULL, NULL, NULL, 'https://www.youtube.com/embed/FPMmzbYYyQM?si=2ZgH6wcSL0PuZfo0', NULL, '00:04:00', '34454', '<p>What Is WordPress?<br></p>', 0, '2024-06-22 23:51:55', '2024-06-22 23:51:55'),
(9, 1, 'Introduction to IELTS', 9, NULL, NULL, NULL, 'https://www.youtube.com/embed/YxN-6M7dMjo?si=Nf2_wa_pZb9CaPbY', NULL, '00:01:00', NULL, 'Introduction to IELTS', 0, '2024-06-24 06:06:01', '2024-06-25 22:50:56'),
(10, 1, 'IELTS Preparation for beginners', 9, NULL, NULL, NULL, 'https://www.youtube.com/embed/5U5Jqnb9oIw?si=x-DTlvMj4gpdHmFv', NULL, '02:00:00', NULL, 'IELTS Preparation for beginners', 0, '2024-06-25 22:53:52', '2024-06-25 22:56:24'),
(11, 2, 'IELTS Reading', 10, NULL, NULL, NULL, 'https://player.vimeo.com/video/233970950?h=3363e6ac58&title=0&byline=0&portrait=0', NULL, '03:28:00', NULL, 'IELTS Reading', 0, '2024-06-25 23:14:53', '2024-06-25 23:39:05'),
(12, 3, 'Band 9 IELTS Speaking interview', 11, NULL, NULL, NULL, 'https://www.youtube.com/embed/Mr2f4MxGmA8?si=j78xVdGeCa2z8Lzz', NULL, '00:10:00', NULL, 'Band 9 IELTS Speaking interview', 0, '2024-06-25 23:47:42', '2024-06-26 01:14:12'),
(13, 7, 'IELTS Writing Task', 12, NULL, NULL, NULL, NULL, '1719386805.mp4', NULL, '<p>Essential Words for IELTS is a collection of video presentations, worksheets and quizzes created for students preparing to take the IELTS test. By working through the materials, you will master the vocabulary needed to get a high IELTS score.<br></p>', '<p>IELTS Writing Task 2: Argumentative Essay Format.<br></p>', 0, '2024-06-26 01:26:45', '2024-06-26 01:26:45'),
(14, 4, 'Argumentative Essay', 12, 'Pdf', '1719387799.pdf', NULL, NULL, NULL, NULL, '<p>Essential Words for IELTS is a collection of video presentations, worksheets and quizzes created for students preparing to take the IELTS test. By working through the materials, you will master the vocabulary needed to get a high IELTS score.<br></p>', '<p>In summary, while it can be claimed that so much focus is placed on higher education, my own view is that university years are a critical period for personal growth.<br></p>', 0, '2024-06-26 01:43:19', '2024-06-26 01:43:19'),
(15, 5, 'IELTS essay vocabulary', 12, NULL, NULL, NULL, NULL, NULL, NULL, '<p>Essential Words for IELTS is a collection of video presentations, worksheets and quizzes created for students preparing to take the IELTS test. By working through the materials, you will master the vocabulary needed to get a high IELTS score.<br></p>', '<p>I am sure that …</p><p>I am convinced that ...</p><p>I am certain that ...</p>', 0, '2024-06-26 01:51:54', '2024-06-26 01:51:54'),
(16, 6, 'IELTS writing technique', 12, NULL, NULL, '1719388688639728873.jpeg', NULL, NULL, NULL, '<p>Essential Words for IELTS is a collection of video presentations, worksheets and quizzes created for students preparing to take the IELTS test. By working through the materials, you will master the vocabulary needed to get a high IELTS score.<br></p>', '<p>IELTS writing technique<br></p>', 0, '2024-06-26 01:58:08', '2024-06-26 01:58:08'),
(17, 1, 'EFA Spoken English', 13, NULL, NULL, NULL, 'https://www.youtube.com/embed/uOWUTSOFmbo?si=eABr9lQjHqMXR8LX', NULL, '00:11:00', NULL, 'This video is the start of a series on IELTS preparation. We are going to provide complete detailed course on IELTS to our YouTube audience. This is going to be a step-by-step guide for aspiring IELTS candidates. This will help them score the best band. This is the introductory part where we have discussed all the essential basic details of IELTS.&nbsp;', 0, '2024-06-30 02:03:53', '2024-06-30 02:05:10'),
(18, 1, 'Marks Distribution | EFA Spoken English', 13, NULL, NULL, NULL, 'https://www.youtube.com/embed/b4YfpCij9-0?si=1qwTi0cXJTZLEkCy', NULL, '00:12:00', '<p><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> We are going to provide our you tube audience the full detailed course on IELTS. It is going to be a step by step guideline for the aspiring IELTS candidates. It will help them score the best band. This is the introductory episode where we have discussed all the necessary essential basic details of IELTS. Our attempt at EFA is to make English easy and possible for all of you.</span><br></p>', '<p>&nbsp;Day -2 Detailed Question Paper Pattern&nbsp; Discussion&nbsp; |EFA Spoken English<br></p>', 0, '2024-06-30 02:07:39', '2024-06-30 02:07:39'),
(19, 1, 'IELTS preparation  | Day 3 | Introduction Part | EFA Spoken English', 13, NULL, NULL, NULL, 'https://www.youtube.com/embed/uPeI9QDGtus?si=5cKCMsr_-lCdKwZ5', NULL, '00:23:00', '<p><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> We are going to provide our you tube audience the full detailed course on IELTS. It is going to be a step by step guideline for the aspiring IELTS candidates. It will help them score the best band. This is the introductory episode where we have discussed all the necessary essential basic details of IELTS. Our attempt at EFA is to make English easy and possible for all of you.</span><br></p>', '<p>In this video you will learn about IELTS Writing Task 1. You will learn about all the questions that come in this section. You will learn about the best strategies for getting high band scores. You will get a complete idea of ​​how to write the best Introduction Paragraph for a Pie Chart. We have written a full introduction paragraph of a pie chart for you. This is a high band score lesson. Hope this video will be very helpful for all of you.<br></p>', 0, '2024-06-30 02:12:08', '2024-06-30 02:12:08'),
(20, 1, 'Writing Task | EFA Spoken English', 13, NULL, NULL, NULL, 'https://www.youtube.com/embed/oc5wLl1GQ2M?si=TG0pnJIuYw6HEPcB', NULL, '00:11:00', '<p><span style=\"background-color: var(--bs-card-bg); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> We are going to provide our you tube audience the full detailed course on IELTS. It is going to be a step by step guideline for the aspiring IELTS candidates. It will help them score the best band. This is the introductory episode where we have discussed all the necessary essential basic details of IELTS. Our attempt at EFA is to make English easy and possible for all of you.</span><br></p>', '<p><font face=\"Arial\" color=\"#efefef\"><span style=\"white-space-collapse: preserve; background-color: rgb(0, 0, 0);\">Welcome to the IELTS SERIES. This is day - 4 of this session. In this video you will be learning about IELTS ACADEMIC WRITING TASK 1. In this video we are going to teach you how to write the best pie chart overview paragraph. You will learn about all the tricks of scoring the best band in IELTS Writing Task 1</span></font><span style=\"font-family: Impact; background-color: rgb(206, 198, 206);\"><font color=\"#efefef\" style=\"\">﻿</font></span><br></p>', 0, '2024-06-30 02:16:39', '2024-06-30 02:16:39'),
(21, 1, 'Adjectives and Grammer', 14, NULL, NULL, NULL, 'https://www.youtube.com/embed/_-PXtw7T2Xs?si=l-q7d5TIWL01bY4h', NULL, '00:17:00', '<p>In the coming years, Japan will take thousands of manpower from Bangladesh. But they will only take those who know Japanese. So if you want to go to Japan, learn Japanese online.</p><p>Stay tuned for our next classes. You will see that he has learned Japanese language very easily.</p>', '<p>Japanese: \"E\" Adjectives and Grammar Japanese : I Adjectives and Grammer is the topic of today\'s video. In today\'s class we will learn Japanese : I Adjectives and Grammar topic of N5 Japanese: \"E\" Adjectives and Grammar. Japanese: \"E\" Adjectives and Grammar The Japanese : I Adjectives and Grammar class is part 1 of our Japanese language learning series. Japanese N5: \"E\" Adjectives and Grammar<br></p>', 0, '2024-06-30 02:51:54', '2024-06-30 02:51:54'),
(22, 1, 'Adjectives and Grammer part two', 14, NULL, NULL, NULL, 'https://www.youtube.com/embed/vvWHNQ2HXUU?si=sbCYSY-uVsJm0zpc', NULL, '00:16:00', '<p>In the coming years, Japan will take thousands of manpower from Bangladesh. But they will only take those who know Japanese. So if you want to go to Japan, learn Japanese online.</p><p>Stay tuned for our next classes. You will see that he has learned Japanese language very easily.</p>', '<p>Japanese : Adjectives and Grammar is the topic of today\'s video. In today\'s class we are Japanese N5<br></p>', 0, '2024-06-30 03:03:44', '2024-06-30 03:03:44'),
(23, 1, 'How to Start Learning Japanese from NOTHING', 4, NULL, NULL, NULL, 'https://www.youtube.com/embed/sISIVKJh_EA?si=c-XK-zZ79VTxM1jj', NULL, '00:07:00', '5555555555', '<p><span style=\"font-family: Impact; white-space-collapse: preserve;\">Feeling lost on how to start studying Japanese? You’re not alone!! In this video, I break down learning Japanese into easy, ACTIONABLE steps you can take as an absolute beginner.</span></p>', 1, '2024-07-08 05:04:39', '2024-07-08 05:04:39'),
(24, 1, 'IELTS', 8, NULL, NULL, NULL, 'https://www.youtube.com/embed/3gvJ_0qi_Tc?si=QKGcCVeQl_MomtxI', NULL, '00:18:00', NULL, '&nbsp;IELTS preparation for beginners', 1, '2024-07-08 05:19:22', '2024-07-08 05:25:39'),
(25, 1, 'IELTS Test Format', 15, NULL, NULL, NULL, 'https://www.youtube.com/embed/PiqmnPcnEy4?si=tQ5mKepc1W0AyF6M', NULL, '00:05:00', '<p style=\"margin: 0.8rem 0px 0px; padding: 0px; max-width: 118.4rem; color: rgb(45, 47, 49); font-family: \"Udemy Sans\", \"SF Pro Text\", -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";\">This course now covers the <strong style=\"margin: 0px; padding: 0px;\"><em style=\"margin: 0px; padding: 0px;\">Academic and General </em></strong><em style=\"margin: 0px; padding: 0px;\">IELTS Exams, providing </em>winning advice and tactics for both the General and Academic. Because both exams are contained within the course, it is not as long as it appears<strong style=\"margin: 0px; padding: 0px;\">. </strong>Just follow the Syllabus in Section 1 for your exam.</p><p style=\"margin-top: 0.8rem; margin-right: 0px; margin-left: 0px; padding: 0px; max-width: 118.4rem; color: rgb(45, 47, 49); font-family: \"Udemy Sans\", \"SF Pro Text\", -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";\">The course strategies are practical and, according to our students, actually work on the actual exam. I have helped thousands of students achieve Band 7-9 scores, jumping from Band 6 to Band 7.5 and Band 6.5 to 8 or 9. You can complete more than 20 \"Assignments\" and Quizzes to test your knowledge.</p>', '<p>IELTS Test Format<br></p>', 0, '2024-07-08 05:29:36', '2024-07-08 05:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_24_184706_create_permission_tables', 1),
(5, '2020_09_12_043205_create_admins_table', 1),
(6, '2024_02_06_080109_create_blogs_table', 1),
(7, '2024_05_02_094242_create_categories_table', 1),
(8, '2024_05_02_094546_create_sub_categories_table', 1),
(10, '2024_05_29_101224_add_status_to_instructors_table', 1),
(11, '2024_05_30_072610_add_image_to_instructors_table', 1),
(16, '2024_05_30_094055_create_course_prices_table', 1),
(19, '2024_06_04_064300_create_sections_table', 1),
(20, '2024_06_05_045440_create_lessions_table', 1),
(21, '2024_06_05_084937_create_quizzes_table', 1),
(22, '2024_06_05_111304_create_resources_table', 1),
(37, '2024_05_06_023410_create_instructors_table', 9),
(38, '2024_06_10_221855_create_instructor_professions_table', 10),
(40, '2024_06_10_222002_create_instructor_designations_table', 11),
(41, '2024_06_10_072811_create_instructor_courses_table', 12),
(42, '2014_10_12_000000_create_users_table', 13),
(45, '2024_06_28_041707_create_sliders_table', 15),
(46, '2024_06_28_164041_create_chooses_table', 15),
(47, '2024_06_29_040957_create_blogs_table', 16),
(60, '2024_07_09_050314_create_website_infos_table', 20),
(74, '2024_06_13_102934_create_orders_table', 33),
(75, '2024_07_04_063215_create_payments_table', 34),
(76, '2024_07_11_061610_create_course_objectives_table', 35),
(82, '2024_07_14_050556_create_course_eligibles_table', 40),
(84, '2024_05_30_093604_create_course_faqs_table', 42),
(85, '2024_05_30_093626_create_course_outcomes_table', 43),
(86, '2024_05_30_093653_create_course_requirements_table', 44),
(88, '2024_05_30_095014_create_course_metas_table', 46),
(89, '2024_05_30_094747_create_course_media_table', 47),
(90, '2024_05_30_082133_create_courses_table', 48),
(91, '2024_06_06_111257_create_students_table', 49),
(92, '2024_06_09_084938_create_student_enrollments_table', 50),
(93, '2024_06_09_085157_create_enrolls_table', 51),
(94, '2024_07_14_095102_add_status_to_admins_table', 52);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1),
(4, 'App\\Models\\Admin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `discounted_price` double DEFAULT NULL,
  `subtotal` double NOT NULL,
  `total` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` enum('Pending','Processing','Complete','Canceled') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `course_id`, `student_id`, `price`, `discounted_price`, `subtotal`, `total`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 22, 244, 661, 488, 488, 2, 'Processing', '2024-07-10 01:22:20', '2024-07-10 01:22:20'),
(2, 5, 22, 87, 15, 87, 87, 1, 'Processing', '2024-07-10 01:26:12', '2024-07-10 01:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` enum('Processing','Complete','Pending','Canceled') NOT NULL DEFAULT 'Pending',
  `address` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `payment_method` varchar(255) NOT NULL DEFAULT 'online',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `name`, `email`, `phone`, `status`, `address`, `transaction_id`, `currency`, `amount`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr Tester', 'mr.tester@gmail.com', '01683034477', 'Processing', 'Dhaka', '668e36ac08cec', 'BDT', 488, 'sslcommerz', NULL, NULL),
(2, 2, 'Mr Tester', 'mr.tester@gmail.com', '01683034477', 'Processing', 'Dhaka', '668e3794d5349', 'BDT', 87, 'sslcommerz', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(3, 'course.create', 'admin', 'course', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(4, 'course.edit', 'admin', 'course', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(5, 'course.delete', 'admin', 'course', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(6, 'admin.create', 'admin', 'admin', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(7, 'admin.view', 'admin', 'admin', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(8, 'admin.edit', 'admin', 'admin', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(9, 'admin.delete', 'admin', 'admin', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(10, 'role.create', 'admin', 'role', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(11, 'role.view', 'admin', 'role', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(12, 'role.edit', 'admin', 'role', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(13, 'role.delete', 'admin', 'role', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(14, 'instructor.edit', 'admin', 'instructor', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(15, 'instructor.delete', 'admin', 'instructor', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(16, 'instructor.view', 'admin', 'instructor', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(17, 'instructor.create', 'admin', 'instructor', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(18, 'category.create', 'admin', 'category', '2024-06-08 23:48:38', '2024-06-25 05:44:32'),
(19, 'category.edit', 'admin', 'category', '2024-06-25 05:44:39', '2024-06-25 05:44:43'),
(20, 'course.view', 'admin', 'course', '2024-06-25 06:19:37', '2024-06-25 06:19:47'),
(21, 'students.create', 'admin', 'students', '2024-06-25 06:23:04', '2024-06-25 06:23:08'),
(22, 'instructor.show', 'admin', 'instructor', '2024-06-25 06:30:08', '2024-06-25 06:30:11'),
(23, 'category.view', 'admin', 'category', '2024-06-25 06:32:46', '2024-06-25 06:32:49'),
(24, 'category.delete', 'admin', 'category', '2024-06-25 06:32:52', '2024-06-25 06:32:55'),
(25, 'students.delete', 'admin', 'students', '2024-06-25 06:36:07', '2024-06-25 06:36:12'),
(26, 'students.view', 'admin', 'students', '2024-06-25 06:39:19', '2024-06-25 06:39:22'),
(27, 'students.edit', 'admin', 'students', '2024-06-25 06:39:06', '2024-06-25 06:39:16'),
(28, 'enrollment.view', 'admin', 'enrollment', '2024-06-26 09:02:42', '2024-06-26 09:02:46'),
(29, 'enrollment.create', 'admin', 'enrollment', '2024-06-26 09:02:34', '2024-06-26 09:02:38'),
(32, 'blog.edit', 'admin', 'blog', '2024-06-25 06:39:06', '2024-06-25 06:39:16'),
(33, 'blog.view', 'admin', 'blog', '2024-06-25 06:39:19', '2024-06-25 06:39:22'),
(34, 'blog.delete', 'admin', 'blog', '2024-06-25 06:36:07', '2024-06-25 06:36:12'),
(35, 'blog.create', 'admin', 'blog', '2024-06-25 06:23:04', '2024-06-25 06:23:08'),
(36, 'chooseus.view', 'admin', 'chooseus', '2024-06-25 06:39:19', '2024-06-25 06:39:22'),
(37, 'chooseus.edit', 'admin', 'chooseus', '2024-06-25 06:39:06', '2024-06-25 06:39:16'),
(38, 'slider.edit', 'admin', 'slider', '2024-06-25 06:39:06', '2024-06-25 06:39:16'),
(39, 'slider.view', 'admin', 'slider', '2024-06-25 06:39:19', '2024-06-25 06:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `quiz_title` varchar(255) NOT NULL,
  `quiz_duration` varchar(255) NOT NULL,
  `total_marks` double NOT NULL,
  `pass_marks` double NOT NULL,
  `applicable` tinyint(4) NOT NULL DEFAULT 0,
  `retake_no` int(11) NOT NULL,
  `instruction` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `section_id`, `quiz_title`, `quiz_duration`, `total_marks`, `pass_marks`, `applicable`, `retake_no`, `instruction`, `created_at`, `updated_at`) VALUES
(2, 6, 'quize one', '00:02:00', 25, 16, 0, 5, 'Students can start the next lesson by submitting the quiz', '2024-06-23 00:52:33', '2024-06-23 00:52:33');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `resource_title` varchar(255) NOT NULL,
  `resource_file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2024-06-08 23:48:38', '2024-06-08 23:48:38'),
(4, 'Admin', 'admin', '2024-06-25 00:58:51', '2024-06-25 00:58:51'),
(6, 'Manager', 'admin', '2024-07-01 01:32:25', '2024-07-01 01:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 4),
(1, 6),
(2, 1),
(2, 4),
(2, 6),
(3, 1),
(3, 4),
(3, 6),
(4, 1),
(4, 4),
(4, 6),
(5, 1),
(5, 4),
(6, 1),
(6, 4),
(7, 1),
(7, 4),
(8, 1),
(8, 4),
(9, 1),
(9, 4),
(10, 1),
(10, 4),
(11, 1),
(11, 4),
(12, 1),
(12, 4),
(13, 1),
(13, 4),
(14, 1),
(14, 4),
(14, 6),
(15, 1),
(15, 4),
(16, 1),
(16, 4),
(16, 6),
(17, 1),
(17, 4),
(17, 6),
(18, 1),
(18, 4),
(18, 6),
(19, 1),
(19, 4),
(19, 6),
(20, 1),
(20, 4),
(20, 6),
(21, 1),
(21, 4),
(21, 6),
(22, 1),
(22, 4),
(22, 6),
(23, 1),
(23, 4),
(23, 6),
(24, 1),
(24, 4),
(25, 1),
(25, 4),
(26, 1),
(26, 4),
(26, 6),
(27, 1),
(27, 4),
(27, 6),
(28, 1),
(28, 4),
(28, 6),
(29, 1),
(29, 4),
(29, 6),
(32, 4),
(32, 6),
(33, 4),
(33, 6),
(34, 4),
(34, 6),
(35, 4),
(35, 6),
(36, 4),
(36, 6),
(37, 4),
(37, 6),
(38, 4),
(38, 6),
(39, 4),
(39, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `course_id`, `section_title`, `created_at`, `updated_at`) VALUES
(4, 2, 'Getting Started', '2024-06-11 23:30:27', '2024-06-11 23:30:27'),
(6, 7, 'Iure molestias ullam', '2024-06-22 23:32:48', '2024-06-22 23:32:48'),
(7, 7, 'Magnam fugiat cupida', '2024-06-23 00:51:55', '2024-06-23 00:51:55'),
(8, 3, 'How to start your IELTS preparation', '2024-06-23 00:54:20', '2024-07-08 05:17:41'),
(9, 5, 'IELTS Class One', '2024-06-24 06:05:22', '2024-06-25 22:49:44'),
(10, 5, 'IELTS Class Two', '2024-06-25 23:05:24', '2024-06-25 23:05:24'),
(11, 5, 'IELTS Speaking Overview', '2024-06-25 23:45:44', '2024-06-25 23:45:44'),
(12, 5, 'IELTS Writing Test', '2024-06-26 01:24:40', '2024-06-26 01:24:40'),
(13, 8, 'IELTS Preparation Full Course with 4 days', '2024-06-30 02:01:58', '2024-06-30 02:01:58'),
(14, 9, 'Japanese N5, Class 10', '2024-06-30 02:49:33', '2024-06-30 02:49:33'),
(15, 3, 'IELTS Exam Pattern For Beginners', '2024-07-08 05:28:19', '2024-07-08 05:28:19'),
(16, 1, 'photoshop', '2024-07-14 02:54:01', '2024-07-14 02:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_subtitle` varchar(255) DEFAULT NULL,
  `hero_content` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_image`, `background_image`, `hero_title`, `hero_subtitle`, `hero_content`, `button_text`, `button_url`, `created_at`, `updated_at`) VALUES
(1, '17197253061102232965.png', '1719725306788774659.jpg', 'Wanna Fly Join With', 'Language Next', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Explore Courses', 'http://127.0.0.1:8000/course_list', '2024-06-29 23:28:26', '2024-06-29 23:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `fathersName` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive','Suspend') NOT NULL DEFAULT 'Inactive',
  `payment_status` enum('Paid','Due','Cancelled') NOT NULL DEFAULT 'Due',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_enrollments`
--

CREATE TABLE `student_enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(12, 5, 'Japanese Course(N5)', '2024-06-09 23:07:30', '2024-06-09 23:07:30'),
(13, 5, 'Japanese Course(N4)', '2024-06-09 23:07:30', '2024-06-09 23:07:30'),
(87, 3, 'Mandarin Chinese Language', '2024-07-06 23:33:23', '2024-07-06 23:33:23'),
(88, 3, 'Business Chinese Language', '2024-07-06 23:33:23', '2024-07-06 23:33:23'),
(92, 4, 'Korean Langurage Advanced', '2024-07-06 23:35:54', '2024-07-06 23:35:54'),
(93, 4, 'Korean Language Basic', '2024-07-06 23:35:54', '2024-07-06 23:35:54'),
(105, 2, 'German Course (Beginners)', '2024-07-06 23:57:38', '2024-07-06 23:57:38'),
(106, 2, 'German Course (A1)', '2024-07-06 23:57:38', '2024-07-06 23:57:38'),
(107, 2, 'German Course (A3)', '2024-07-06 23:57:38', '2024-07-06 23:57:38'),
(108, 1, 'Image processing', '2024-07-14 00:00:16', '2024-07-14 00:00:16'),
(110, 1, 'T-shirt Design', '2024-07-14 00:00:50', '2024-07-14 00:00:50'),
(116, 1, 'Logo Design', '2024-07-14 00:01:09', '2024-07-14 00:01:09'),
(118, 9, 'excel', '2024-07-14 04:43:22', '2024-07-14 04:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address_one` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `password`, `address_one`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Ali', 'Sami', 'sami17151002@gmail.com', '01867981900', '$2y$10$ma5s/9rF9oixh5WjAveXl.Pogu68ImKKKaUbM9y106Qekz5z8hQJq', NULL, NULL, NULL, '2024-06-13 03:32:59', '2024-06-13 03:32:59'),
(3, 'Md Asif', 'Chowdhury', 'picturefair@gmail.com', '01867974100', '$2y$10$.MgtWqpLXPflXjIE/41i1eutFvBo75LUznDewDUKSvt6CNkLiBAw.', NULL, NULL, NULL, '2024-06-22 22:35:53', '2024-06-22 22:35:53'),
(4, 'Md Anas', 'Hasan', 'md_anas.hasan@gmail.com', '01683034476', '$2y$10$JMcczT3BuYiPGlHnyU19he7hQFWUrAYuAbGCXi7k4bhkpoa.xQ3Mu', NULL, NULL, NULL, '2024-06-23 04:00:19', '2024-06-23 04:00:19'),
(5, 'Dacey', 'Moody', 'wygilavevi@mailinator.com', '01386065599', '$2y$10$p25UnfllFH59v6Ogtp1YPeRqJ4voZLFmTuDZCJNqXyKilzUEivu6y', NULL, NULL, NULL, '2024-06-23 04:04:08', '2024-06-23 04:04:08'),
(7, 'Lokman', 'LMS', 'lokman.lms@gmail.com', '01496062277', '$2y$10$cqRnOXOS7C85.ZwUf1MvVOQ1M3VmdoS6AlVPKZDZT/7JUd5s3oNUW', NULL, NULL, NULL, '2024-06-23 04:27:29', '2024-06-23 04:27:29'),
(8, 'DevOne', 'test', 'dev@example.com', '01580231166', '$2y$10$PCMHv/j.5XG46b0hs0J4BeXbsmxAnVs1rCZ7RFMR/8NvVf9HytV.C', NULL, NULL, NULL, '2024-06-23 05:02:08', '2024-06-23 05:02:08'),
(9, 'Abu', 'Naser', 'abu.naser@gmail.com', '+1 (975) 327-5835', '$2y$10$AZUnhVGYfSdrYre3R.cp1.X1A6qApi733cFWnbx6L1qpc9WAB.KQi', NULL, NULL, NULL, '2024-06-24 00:26:07', '2024-06-24 00:26:07'),
(10, 'Catherin', 'Maldova', 'catherin@gmail.com', '+1 (675) 327-5835', '$2y$10$SvQgCW63bBBZaPkN5klaX.CD3ROkuO.U6Ac9b/iRN8IWtA/vHVmFu', NULL, NULL, NULL, '2024-06-24 01:08:55', '2024-06-24 01:08:55'),
(11, 'Md Arif', 'Hossen', 'arif.hossen@gmail.com', '01866874100', '$2y$10$ctYAk.NZqScJ26z8dtBCZeCIC8L5yLUumXDt.2SoJk0lxbWPvgGHK', NULL, NULL, NULL, '2024-06-24 02:08:10', '2024-06-24 02:08:10'),
(12, 'Md Himel', 'Ahmed', 'md.himel@gmail.com', '01683045522', '$2y$10$8gdChUlnEk6mrunIlrd1VezFb7D1pSaO6jal8hq9Ed1fTA00xj3Dq', NULL, NULL, NULL, '2024-06-27 03:52:15', '2024-06-27 03:52:15'),
(13, 'Md Alamin', 'Akondo', 'alamin.akond@gmail.com', '01867871200', '$2y$10$pUiJNmY99hYX2i4SRRxN2eEEfg8IrDiht7GmV1USihCw/kqaYGMqu', NULL, NULL, NULL, '2024-07-02 03:32:11', '2024-07-02 03:32:11'),
(14, 'Md Shahidul', 'Islam', 'shahidul.islam@gmail.com', '01698082266', '$2y$10$dE5TStO0Y0L83lvBUMtQ8.ZIAj/LZyI8c0/.h1aDXoUe7gkGg4aFe', NULL, NULL, NULL, '2024-07-03 00:12:02', '2024-07-03 00:12:02'),
(15, 'Md Ashik', 'Ahmed', 'md.ashik12@gmail.com', '01646768797', '$2y$10$DQVEDYCADQBHKIYbapQidejS0OHRwx1hrhtC870QyQ3v.bEIoszf.', NULL, NULL, NULL, '2024-07-09 01:55:29', '2024-07-09 01:55:29'),
(16, 'Mr', 'Tester', 'mr.tester@gmail.com', '01683034477', '$2y$10$3dAXg5N7QyR5THw1Upt3..VNiR08Lv3zlLZFPFT.N2vBW04sRzjOy', NULL, NULL, NULL, '2024-07-09 22:55:45', '2024-07-09 22:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `website_infos`
--

CREATE TABLE `website_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_copyright` varchar(255) DEFAULT NULL,
  `website_title` varchar(255) DEFAULT NULL,
  `website_description` longtext DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_infos`
--

INSERT INTO `website_infos` (`id`, `site_name`, `site_email`, `site_copyright`, `website_title`, `website_description`, `logo`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'E-pora', 'epora@languagenest.org', 'Qbit LMS 2024', 'Best Learning Platform', 'description', '17205053681269382457.png', '17205053681620086726.png', '2024-07-09 00:09:28', '2024-07-09 00:09:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chooses`
--
ALTER TABLE `chooses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_foreign` (`category_id`);

--
-- Indexes for table `course_eligibles`
--
ALTER TABLE `course_eligibles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_eligibles_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_faqs`
--
ALTER TABLE `course_faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_faqs_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_media`
--
ALTER TABLE `course_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_media_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_metas`
--
ALTER TABLE `course_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_metas_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_objectives`
--
ALTER TABLE `course_objectives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_objectives_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_outcomes`
--
ALTER TABLE `course_outcomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_outcomes_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_prices`
--
ALTER TABLE `course_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_prices_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_requirements`
--
ALTER TABLE `course_requirements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_requirements_course_id_foreign` (`course_id`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrolls_student_enrol_id_foreign` (`student_enrol_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_courses`
--
ALTER TABLE `instructor_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor_courses_instructor_id_foreign` (`instructor_id`),
  ADD KEY `instructor_courses_course_id_foreign` (`course_id`);

--
-- Indexes for table `instructor_designations`
--
ALTER TABLE `instructor_designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor_designations_instructor_id_foreign` (`instructor_id`);

--
-- Indexes for table `instructor_professions`
--
ALTER TABLE `instructor_professions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instructor_professions_instructor_id_foreign` (`instructor_id`);

--
-- Indexes for table `lessions`
--
ALTER TABLE `lessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessions_section_id_foreign` (`section_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_course_id_foreign` (`course_id`),
  ADD KEY `orders_student_id_foreign` (`student_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_section_id_foreign` (`section_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resources_course_id_foreign` (`course_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_course_id_foreign` (`course_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_course_id_foreign` (`course_id`);

--
-- Indexes for table `student_enrollments`
--
ALTER TABLE `student_enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_enrollments_student_id_foreign` (`student_id`),
  ADD KEY `student_enrollments_course_id_foreign` (`course_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_no_unique` (`phone_no`);

--
-- Indexes for table `website_infos`
--
ALTER TABLE `website_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chooses`
--
ALTER TABLE `chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_eligibles`
--
ALTER TABLE `course_eligibles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_faqs`
--
ALTER TABLE `course_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_media`
--
ALTER TABLE `course_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_metas`
--
ALTER TABLE `course_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_objectives`
--
ALTER TABLE `course_objectives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_outcomes`
--
ALTER TABLE `course_outcomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_prices`
--
ALTER TABLE `course_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course_requirements`
--
ALTER TABLE `course_requirements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrolls`
--
ALTER TABLE `enrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instructor_courses`
--
ALTER TABLE `instructor_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `instructor_designations`
--
ALTER TABLE `instructor_designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instructor_professions`
--
ALTER TABLE `instructor_professions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lessions`
--
ALTER TABLE `lessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_enrollments`
--
ALTER TABLE `student_enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `website_infos`
--
ALTER TABLE `website_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_eligibles`
--
ALTER TABLE `course_eligibles`
  ADD CONSTRAINT `course_eligibles_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_faqs`
--
ALTER TABLE `course_faqs`
  ADD CONSTRAINT `course_faqs_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_media`
--
ALTER TABLE `course_media`
  ADD CONSTRAINT `course_media_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_metas`
--
ALTER TABLE `course_metas`
  ADD CONSTRAINT `course_metas_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_objectives`
--
ALTER TABLE `course_objectives`
  ADD CONSTRAINT `course_objectives_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_outcomes`
--
ALTER TABLE `course_outcomes`
  ADD CONSTRAINT `course_outcomes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_prices`
--
ALTER TABLE `course_prices`
  ADD CONSTRAINT `course_prices_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_requirements`
--
ALTER TABLE `course_requirements`
  ADD CONSTRAINT `course_requirements_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD CONSTRAINT `enrolls_student_enrol_id_foreign` FOREIGN KEY (`student_enrol_id`) REFERENCES `student_enrollments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instructor_courses`
--
ALTER TABLE `instructor_courses`
  ADD CONSTRAINT `instructor_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `instructor_courses_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instructor_designations`
--
ALTER TABLE `instructor_designations`
  ADD CONSTRAINT `instructor_designations_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instructor_professions`
--
ALTER TABLE `instructor_professions`
  ADD CONSTRAINT `instructor_professions_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lessions`
--
ALTER TABLE `lessions`
  ADD CONSTRAINT `lessions_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_enrollments`
--
ALTER TABLE `student_enrollments`
  ADD CONSTRAINT `student_enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_enrollments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
