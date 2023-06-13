-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 05:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `job_status_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section1_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section1_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sectin2_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(3, '<p>qweqwe</p>', '<p>asdasd</p>', 1, '2023-06-12 15:40:31', '2023-06-12 15:40:31'),
(4, '<p>pertanyaan 2 edited</p>', '<p>jawaban 2 edited</p>', 1, '2023-06-12 15:46:53', '2023-06-13 14:54:20'),
(5, '<p>pertanyaan 3</p><ol><li>sdfsdf</li><li>sdf</li><li>sdf</li><li>sdf</li></ol>', '<p>jawaban 3</p><ol><li>asdasd</li><li>asdasd</li><li>asd</li><li>asd</li></ol>', 1, '2023-06-13 15:18:03', '2023-06-13 15:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `footer_links`
--

CREATE TABLE `footer_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_links`
--

INSERT INTO `footer_links` (`id`, `title`, `section`, `link`, `target`, `created_at`, `updated_at`) VALUES
(4, 'Jl.Pupuk Gn.Bahagia Balikpapan', '2', '#!', '_self', '2023-06-05 06:38:39', '2023-06-05 06:38:39'),
(5, 'Contact us', '2', 'https://wa.me/6282148534254', '_blank', '2023-06-05 06:40:46', '2023-06-05 06:40:46'),
(6, 'it@uniba-bpn.ac.id', '2', '#!', '_self', '2023-06-05 06:41:14', '2023-06-05 06:41:14'),
(7, 'PMB', '1', 'https://pmb.uniba-bpn.ac.id/', '_blank', '2023-06-05 06:42:05', '2023-06-05 06:42:05'),
(8, 'SIAT', '1', 'https://siat.uniba-bpn.ac.id/', '_blank', '2023-06-05 06:42:29', '2023-06-05 06:42:29'),
(9, 'E-Learning', '1', 'https://e-learning.uniba-bpn.ac.id/', '_blank', '2023-06-05 06:42:53', '2023-06-05 06:42:53'),
(10, 'KKN', '1', 'https://kkn.lp2m.uniba-bpn.ac.id/', '_blank', '2023-06-05 06:43:19', '2023-06-05 06:43:19'),
(11, 'WISUDA', '1', 'https://wisuda.uniba-bpn.ac.id/', '_blank', '2023-06-05 06:43:41', '2023-06-05 06:43:41'),
(12, 'Patnership', '1', 'https://partnership.uniba-bpn.ac.id/', '_blank', '2023-06-05 06:44:09', '2023-06-05 06:44:09'),
(13, 'Simpeg', '1', 'https://siap.uniba-bpn.ac.id/', '_blank', '2023-06-05 06:45:51', '2023-06-05 06:45:51'),
(14, 'SImdos', '1', 'https://simdos.uniba-bpn.ac.id/', '_blank', '2023-06-05 06:46:17', '2023-06-05 06:46:17'),
(15, 'Tracer Study', '1', 'https://tracerstudy.uniba-bpn.ac.id/', '_blank', '2023-06-05 06:46:44', '2023-06-05 06:46:44'),
(16, 'Website Utama', '1', 'https://uniba-bpn.ac.id/', '_blank', '2023-06-05 06:47:26', '2023-06-05 06:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `landing_pages`
--

CREATE TABLE `landing_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_banner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_btn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hero_btn_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section2_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_pages`
--

INSERT INTO `landing_pages` (`id`, `logo`, `hero_banner`, `hero_title`, `hero_desc`, `hero_btn`, `hero_btn_link`, `section2_title`, `footer_logo`, `footer_title1`, `footer_title2`, `created_at`, `updated_at`) VALUES
(1, 'logo.webp', 'hero.webp', 'Badan Pengelola Sistem Teknologi Informasi', 'Unit Pelaksana teknik di bidang pengembangan teknologi informasi dan komunikasi di <b>Universitas Balikpapan</b>', 'Get Started', '#services', 'Layanan BPSTI Universitas Balikpapan', 'footer.webp', 'Akses Cepat', 'Kontak', NULL, '2023-06-05 06:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `activity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `activity`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Menambahkan Footer Link ke section 1 dengan nama PMB dan link https://pmb.uniba-bpn.ac.id/', '2023-06-05 04:54:12', '2023-06-05 04:54:12', '2023-06-05 04:54:12'),
(2, 1, 'Menambahkan Footer Link ke section 2 dengan nama title 2 dan link https://www.google.com/', '2023-06-05 06:31:24', '2023-06-05 06:31:24', '2023-06-05 06:31:24'),
(3, 1, 'Menghapus Footer Link pada 2 dengan nama 2 dan link https://www.google.com/', '2023-06-05 06:31:29', '2023-06-05 06:31:29', '2023-06-05 06:31:29'),
(4, 1, 'Menambahkan Footer Link ke section 1 dengan nama Jl.Pupuk Gn.Bahagia Balikpapan dan link #', '2023-06-05 06:38:13', '2023-06-05 06:38:13', '2023-06-05 06:38:13'),
(5, 1, 'Menghapus Footer Link pada 1 dengan nama 1 dan link #', '2023-06-05 06:38:21', '2023-06-05 06:38:21', '2023-06-05 06:38:21'),
(6, 1, 'Menambahkan Footer Link ke section 2 dengan nama Jl.Pupuk Gn.Bahagia Balikpapan dan link #!', '2023-06-05 06:38:39', '2023-06-05 06:38:39', '2023-06-05 06:38:39'),
(7, 1, 'Menambahkan Footer Link ke section 2 dengan nama Contact us dan link https://wa.me/6282148534254', '2023-06-05 06:40:46', '2023-06-05 06:40:46', '2023-06-05 06:40:46'),
(8, 1, 'Menambahkan Footer Link ke section 2 dengan nama it@uniba-bpn.ac.id dan link #!', '2023-06-05 06:41:14', '2023-06-05 06:41:14', '2023-06-05 06:41:14'),
(9, 1, 'Menambahkan Footer Link ke section 1 dengan nama PMB dan link https://pmb.uniba-bpn.ac.id/', '2023-06-05 06:42:05', '2023-06-05 06:42:05', '2023-06-05 06:42:05'),
(10, 1, 'Menambahkan Footer Link ke section 1 dengan nama SIAT dan link https://siat.uniba-bpn.ac.id/', '2023-06-05 06:42:29', '2023-06-05 06:42:29', '2023-06-05 06:42:29'),
(11, 1, 'Menambahkan Footer Link ke section 1 dengan nama E-Learning dan link https://e-learning.uniba-bpn.ac.id/', '2023-06-05 06:42:53', '2023-06-05 06:42:53', '2023-06-05 06:42:53'),
(12, 1, 'Menambahkan Footer Link ke section 1 dengan nama KKN dan link https://kkn.lp2m.uniba-bpn.ac.id/', '2023-06-05 06:43:19', '2023-06-05 06:43:19', '2023-06-05 06:43:19'),
(13, 1, 'Menambahkan Footer Link ke section 1 dengan nama WISUDA dan link https://wisuda.uniba-bpn.ac.id/', '2023-06-05 06:43:41', '2023-06-05 06:43:41', '2023-06-05 06:43:41'),
(14, 1, 'Menambahkan Footer Link ke section 1 dengan nama Patnership dan link https://partnership.uniba-bpn.ac.id/', '2023-06-05 06:44:09', '2023-06-05 06:44:09', '2023-06-05 06:44:09'),
(15, 1, 'Menambahkan Footer Link ke section 1 dengan nama Simpeg dan link https://siap.uniba-bpn.ac.id/', '2023-06-05 06:45:51', '2023-06-05 06:45:51', '2023-06-05 06:45:51'),
(16, 1, 'Menambahkan Footer Link ke section 1 dengan nama SImdos dan link https://simdos.uniba-bpn.ac.id/', '2023-06-05 06:46:17', '2023-06-05 06:46:17', '2023-06-05 06:46:17'),
(17, 1, 'Menambahkan Footer Link ke section 1 dengan nama Tracer Study dan link https://tracerstudy.uniba-bpn.ac.id/', '2023-06-05 06:46:44', '2023-06-05 06:46:44', '2023-06-05 06:46:44'),
(18, 1, 'Menambahkan Footer Link ke section 1 dengan nama Website Utama dan link https://uniba-bpn.ac.id/', '2023-06-05 06:47:26', '2023-06-05 06:47:26', '2023-06-05 06:47:26'),
(19, 1, 'Melakukan UPDATE pada Profile Setting', '2023-06-12 04:06:40', '2023-06-12 04:06:40', '2023-06-12 04:06:40'),
(20, 1, 'Melakukan UPDATE pada Profile Setting', '2023-06-12 04:07:47', '2023-06-12 04:07:47', '2023-06-12 04:07:47'),
(21, 1, 'Melakukan UPDATE pada Profile Setting', '2023-06-12 04:09:34', '2023-06-12 04:09:34', '2023-06-12 04:09:34'),
(22, 1, 'Menambahkan Pertanyaan : <p>pertanyaan 1</p> ke data FAQ', '2023-06-12 11:57:15', '2023-06-12 11:57:15', '2023-06-12 11:57:15'),
(23, 1, 'Menghapus Pertanyaan : <p>pertanyaan 1</p> dari data FAQ', '2023-06-12 12:21:39', '2023-06-12 12:21:39', '2023-06-12 12:21:39'),
(24, 1, 'Menambahkan Pertanyaan : <p>qweqwe</p> ke data FAQ', '2023-06-12 15:40:31', '2023-06-12 15:40:31', '2023-06-12 15:40:31'),
(25, 1, 'Menambahkan Pertanyaan : <p>pertanyaan 2</p> ke data FAQ', '2023-06-12 15:46:53', '2023-06-12 15:46:53', '2023-06-12 15:46:53'),
(26, 1, 'Melakukan Edit Pada Pertanyaan : <p>pertanyaan 2 edited</p> pada data FAQ', '2023-06-12 15:56:56', '2023-06-12 15:56:56', '2023-06-12 15:56:56'),
(27, 1, 'Menambahkan Menu : menu 1 pada Master Data MENU', '2023-06-13 13:57:36', '2023-06-13 13:57:36', '2023-06-13 13:57:36'),
(28, 1, 'Melakukan Edit pada menu : menu 1 pada Master Data MENU', '2023-06-13 14:33:34', '2023-06-13 14:33:34', '2023-06-13 14:33:34'),
(29, 1, 'Menghapus menu : menu 1 edited dari Master data MENU', '2023-06-13 14:36:25', '2023-06-13 14:36:25', '2023-06-13 14:36:25'),
(30, 1, 'Menambahkan Menu : dashboard pada Master Data MENU', '2023-06-13 14:37:02', '2023-06-13 14:37:02', '2023-06-13 14:37:02'),
(31, 1, 'Menambahkan Menu : Landing Page Setting pada Master Data MENU', '2023-06-13 14:37:17', '2023-06-13 14:37:17', '2023-06-13 14:37:17'),
(32, 1, 'Menambahkan Menu : Profile pada Master Data MENU', '2023-06-13 14:37:39', '2023-06-13 14:37:39', '2023-06-13 14:37:39'),
(33, 1, 'Menambahkan Menu : Article pada Master Data MENU', '2023-06-13 14:37:49', '2023-06-13 14:37:49', '2023-06-13 14:37:49'),
(34, 1, 'Menambahkan Menu : FAQ pada Master Data MENU', '2023-06-13 14:38:00', '2023-06-13 14:38:00', '2023-06-13 14:38:00'),
(35, 1, 'Menambahkan Menu : contact pada Master Data MENU', '2023-06-13 14:38:09', '2023-06-13 14:38:09', '2023-06-13 14:38:09'),
(36, 1, 'Menambahkan Menu : Document pada Master Data MENU', '2023-06-13 14:38:22', '2023-06-13 14:38:22', '2023-06-13 14:38:22'),
(37, 1, 'Menambahkan Menu : SOP & Layanan pada Master Data MENU', '2023-06-13 14:38:43', '2023-06-13 14:38:43', '2023-06-13 14:38:43'),
(38, 1, 'Menambahkan Menu : Jurnal Kerja pada Master Data MENU', '2023-06-13 14:39:04', '2023-06-13 14:39:04', '2023-06-13 14:39:04'),
(39, 1, 'Menambahkan Menu : Master Kategori pada Master Data MENU', '2023-06-13 14:40:16', '2023-06-13 14:40:16', '2023-06-13 14:40:16'),
(40, 1, 'Menambahkan Menu : Master Roles pada Master Data MENU', '2023-06-13 14:40:34', '2023-06-13 14:40:34', '2023-06-13 14:40:34'),
(41, 1, 'Menambahkan Menu : Master Kategori Pekerjaan pada Master Data MENU', '2023-06-13 14:40:48', '2023-06-13 14:40:48', '2023-06-13 14:40:48'),
(42, 1, 'Menambahkan Menu : Master Status Pekerjaan pada Master Data MENU', '2023-06-13 14:41:02', '2023-06-13 14:41:02', '2023-06-13 14:41:02'),
(43, 1, 'Melakukan Edit Pada Pertanyaan : <p>pertanyaan 2 edited</p> pada data FAQ', '2023-06-13 14:54:20', '2023-06-13 14:54:20', '2023-06-13 14:54:20'),
(44, 1, 'Menambahkan Pertanyaan : <p>pertanyaan 3</p><ol><li>sdfsdf</li><li>sdf</li><li>sdf</li><li>sdf</li></ol> ke data FAQ', '2023-06-13 15:18:03', '2023-06-13 15:18:03', '2023-06-13 15:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `master_categories`
--

CREATE TABLE `master_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_jobs`
--

CREATE TABLE `master_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_jobs_statuses`
--

CREATE TABLE `master_jobs_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_menus`
--

CREATE TABLE `master_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_menus`
--

INSERT INTO `master_menus` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'dashboard', 'dashboard', 1, '2023-06-13 14:37:02', '2023-06-13 14:37:02'),
(3, 'Landing Page Setting', 'landing-page-setting', 1, '2023-06-13 14:37:17', '2023-06-13 14:37:17'),
(4, 'Profile', 'profile', 1, '2023-06-13 14:37:39', '2023-06-13 14:37:39'),
(5, 'Article', 'article', 1, '2023-06-13 14:37:49', '2023-06-13 14:37:49'),
(6, 'FAQ', 'faq', 1, '2023-06-13 14:38:00', '2023-06-13 14:38:00'),
(7, 'contact', 'contact', 1, '2023-06-13 14:38:09', '2023-06-13 14:38:09'),
(8, 'Document', 'document', 1, '2023-06-13 14:38:22', '2023-06-13 14:38:22'),
(9, 'SOP & Layanan', 'sop-&-layanan', 1, '2023-06-13 14:38:43', '2023-06-13 14:38:43'),
(10, 'Jurnal Kerja', 'jurnal-kerja', 1, '2023-06-13 14:39:04', '2023-06-13 14:39:04'),
(11, 'Master Kategori', 'master-kategori', 1, '2023-06-13 14:40:16', '2023-06-13 14:40:16'),
(12, 'Master Roles', 'master-roles', 1, '2023-06-13 14:40:34', '2023-06-13 14:40:34'),
(13, 'Master Kategori Pekerjaan', 'master-kategori-pekerjaan', 1, '2023-06-13 14:40:48', '2023-06-13 14:40:48'),
(14, 'Master Status Pekerjaan', 'master-status-pekerjaan', 1, '2023-06-13 14:41:02', '2023-06-13 14:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `master_roles`
--

CREATE TABLE `master_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_roles`
--

INSERT INTO `master_roles` (`id`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, NULL, NULL),
(2, 'Admin', 1, NULL, NULL),
(3, 'User', 1, NULL, NULL);

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
(1, '2014_10_12_000000_create_master_roles_table', 1),
(2, '2014_10_12_000002_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_24_011628_create_master_menus_table', 1),
(7, '2023_05_24_011629_create_master_categories_table', 1),
(8, '2023_05_25_005935_create_master_jobs_table', 1),
(9, '2023_05_25_010012_create_master_jobs_statuses_table', 1),
(10, '2023_05_25_010922_create_activities_table', 1),
(11, '2023_05_25_010941_create_services_table', 1),
(12, '2023_05_25_010954_create_articles_table', 1),
(13, '2023_05_25_011030_create_logs_table', 1),
(14, '2023_05_25_020441_create_landing_pages_table', 1),
(15, '2023_05_25_021210_create_footer_links_table', 1),
(16, '2023_05_25_021720_create_profiles_table', 1),
(17, '2023_05_25_022802_create_teams_table', 1),
(18, '2023_05_25_023240_create_faqs_table', 1),
(19, '2023_05_25_023443_create_contacts_table', 1),
(20, '2023_05_25_023853_create_documents_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_structure_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_structure_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `teams_banner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `title`, `vision`, `vision_image`, `mission`, `mission_image`, `organization_structure_title`, `organization_structure_image`, `teams_banner`, `created_at`, `updated_at`) VALUES
(1, 'Visi Misi BPSTI edited', '<p>Visi dari Universitas Balikpapan adalah Menjadi \"Terwujudnya Universitas Balikpapan Sebagai Lembaga Pendidikan Tinggi Yang Menghasilkan Sumber Daya Manusia Unggul, Mandiri, dan Berbudaya Dalam Memajukan Ipteks, Melalui Tata Kelola Yang Baik (Good University Governance) Pada Tahun 2025\"</p>', 'visi.webp', '<p>Misi Universitas Balikpapan memiliki beberapa poin sebagai berikut :</p><ol><li>Melaksanakan pendidikan tinggi yang bermutu dan menghasilkan lulusan yang berintegritas tinggi sesuai dengan tuntutan masyarakat lokal, nasional dan internasional.</li><li>Mengembangkan penelitian.</li><li>Melaksanakan pengabdian kepada masyarakat sesuai dengan kebutuhan lokal.</li></ol>', 'misi.webp', 'Struktur Organisasi BPSTI edited', 'organisasi.webp', 'teams.webp', NULL, '2023-06-12 04:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link1_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link2_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link3_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link4_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agung Anugrah', 'admin@gmail.com', NULL, '$2a$12$Qv3aKk3GOMj3zz1k1CTKtuGS0J2YLIPYJCNXpVl/S7rtwsTD.ErQu', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_user_id_foreign` (`user_id`),
  ADD KEY `activities_job_id_foreign` (`job_id`),
  ADD KEY `activities_job_status_id_foreign` (`job_status_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`) USING HASH,
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_links`
--
ALTER TABLE `footer_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_pages`
--
ALTER TABLE `landing_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `master_categories`
--
ALTER TABLE `master_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_categories_slug_unique` (`slug`) USING HASH,
  ADD KEY `master_categories_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `master_jobs`
--
ALTER TABLE `master_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_jobs_slug_unique` (`slug`) USING HASH;

--
-- Indexes for table `master_jobs_statuses`
--
ALTER TABLE `master_jobs_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_menus`
--
ALTER TABLE `master_menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_menus_slug_unique` (`slug`) USING HASH;

--
-- Indexes for table `master_roles`
--
ALTER TABLE `master_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `master_roles_role_unique` (`role`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_category_id_foreign` (`category_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_links`
--
ALTER TABLE `footer_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `landing_pages`
--
ALTER TABLE `landing_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `master_categories`
--
ALTER TABLE `master_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_jobs`
--
ALTER TABLE `master_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_jobs_statuses`
--
ALTER TABLE `master_jobs_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_menus`
--
ALTER TABLE `master_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `master_roles`
--
ALTER TABLE `master_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `master_jobs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activities_job_status_id_foreign` FOREIGN KEY (`job_status_id`) REFERENCES `master_jobs_statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `master_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `master_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `master_categories`
--
ALTER TABLE `master_categories`
  ADD CONSTRAINT `master_categories_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `master_menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `master_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `master_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
