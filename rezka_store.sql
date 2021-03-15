-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 10:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezka_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pelanggans`
--

CREATE TABLE `daftar_pelanggans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_pelanggans`
--

INSERT INTO `daftar_pelanggans` (`id`, `created_at`, `updated_at`, `nama_pelanggan`, `alamat`, `no_telp`, `diskon_id`) VALUES
(1, NULL, NULL, 'Pelanggan Anynomous', 'Jatibarang', '0123456789', 4),
(3, NULL, NULL, 'ANDI', 'JATIBARANG', '08976542445', 4),
(4, NULL, NULL, 'INTAN BERLIAN', 'JATIBARANG', '082316888097', 2),
(5, NULL, NULL, 'BERINGIN CELL', 'WIDASARI', '0895968430340', 4),
(6, NULL, NULL, 'SS CELL', 'KERTASEMAYA', '083195657673', 3),
(7, NULL, NULL, 'DINI CELL', 'TERISI', '083824301000', 4),
(8, NULL, NULL, 'BAP CELL', 'JATIBARANG', '082240221002', 4),
(9, NULL, NULL, 'SALMAN', 'JATIBARANG', '0895413236194', 4),
(10, NULL, NULL, 'BAIM CELL', 'BULAK', '083101968054', 4),
(11, NULL, NULL, 'MICRO CELL', 'JATIBARANG', '089666111844', 4),
(12, NULL, NULL, 'TOKO KEY', 'JATIBARANG', '085267926006', 4),
(13, NULL, NULL, 'AJUN', 'WIDASARI', '089690366618', 4),
(14, NULL, NULL, 'MALONG', 'WIDASARI', '081910000292', 3),
(15, NULL, NULL, 'AMAK', 'LELEA', '083102002773', 4),
(16, NULL, NULL, 'ANANG SAYUDI', 'JATIBARANG', '0895344481526', 4),
(17, NULL, NULL, 'SALAM', 'KERTASEMAYA', '087717770633', 4),
(18, NULL, NULL, 'YUSUF', 'WIDASARI', '083148569349', 1),
(19, NULL, NULL, 'SATRIA CELL', 'SUKAMULYA', '083113862717', 4),
(20, NULL, NULL, 'INDRA CELL', 'SLAUR', '083100147779', 4),
(21, NULL, NULL, 'DAYAT CELL', 'WIDASARI', '0895377188000', 4),
(22, NULL, NULL, 'X-GANE CELL', 'GABUS', '088229133472', 4),
(23, NULL, NULL, 'OPIK', 'TAMBI', '082299909699', 4),
(24, NULL, NULL, 'GANI', 'SUKAMULYA', '083101237355', 4),
(25, NULL, NULL, 'ANDI', 'INDRAMAYU KOTA', '087729723470', 4),
(26, NULL, NULL, 'ABI / LILI', 'WIDASARI', '083823002005', 3),
(27, NULL, NULL, 'CHARLIE', 'INDRAMAYU', '08999662220', 4),
(28, NULL, NULL, 'ICAL', 'WIDASARI', '087744209429', 2),
(29, NULL, NULL, 'DOGENG', 'RANCAJAWAT', '089517342478', 1),
(30, NULL, NULL, 'GEMBOR', 'WIDASARI', '083150425737', 1),
(31, NULL, NULL, 'NONO', 'KERTASEMAYA', '085724339333', 4),
(32, NULL, NULL, 'SANDI', 'KALENSARI', '083822276444', 4),
(33, NULL, NULL, 'ALEX', 'BANGODUA', '087745445859', 4),
(34, NULL, NULL, 'SILIWANGI CELL', 'INDRAMAYU KOTA', '08179070779', 4),
(35, NULL, NULL, 'TONI', 'TUKDANA', '083120027068', 4),
(36, NULL, NULL, 'DENOK CELL', 'JATIBARANG', '081932343731', 4),
(37, NULL, NULL, 'ERWIN', 'GADINGAN', '087828933533', 4),
(38, NULL, NULL, 'JUNIDAH / RASKIN', 'JATIBARANG', '082115435568', 4),
(39, NULL, NULL, 'KENZO', 'SUKALILA', '087745677709', 4),
(40, NULL, NULL, 'OPI', 'BANGKIR', '089324433377', 4),
(41, NULL, NULL, 'JAYADI', 'UJUNG ARIS', '082318987010', 4),
(42, NULL, NULL, 'ADE CELL', 'JATIBARANG', '083838122718', 4),
(43, NULL, NULL, 'AHONG', 'UJUNG JAYA', '089633372014', 4),
(44, NULL, NULL, 'DAIM', 'KEBULEN', '085934538659', 4),
(45, NULL, NULL, 'RENDY', 'KEDOKAN', '083824183603', 4),
(46, NULL, NULL, 'DIDI', 'SLAUR', '08156276546', 4),
(47, NULL, NULL, 'RANO 3 PONSEL', 'LELEA', '087828707006', 4),
(48, NULL, NULL, 'ALMA CELL', 'TAMBI', '081946823388', 3),
(49, NULL, NULL, 'ATEP', 'JATIBARANG', '089509749285', 4),
(50, NULL, NULL, 'DARTO MST', 'JATITUJUH', '082123315679', 4),
(51, NULL, NULL, 'RIFKI', 'SLEMAN', '082120353070', 4),
(52, NULL, NULL, 'FEBRI', 'TAMBI', '083116976333', 4),
(53, NULL, NULL, 'HAFIDZ', 'RANCAJAWAT', '087744416844', 4),
(54, NULL, NULL, 'AUNG SYAFANI', 'KEDOKAN', '087717888459', 4),
(55, NULL, NULL, 'CUKONG', 'INDRAMAYU', '0895404883333', 4),
(56, NULL, NULL, 'COKY ADRIAN', 'SLIYEG', '089667746777', 4),
(57, NULL, NULL, 'ARIS SUMIRAT', 'JATIBARANG', '0854929045581', 4),
(58, NULL, NULL, 'HAKIM CELL', 'KALENSARI', '085224005888', 4),
(59, NULL, NULL, 'ADI', 'WIDASARI', '085741111165', 4),
(60, NULL, NULL, 'IYUS', 'CIDEMPET', '089652828731', 4),
(61, NULL, NULL, 'FATUR CELL', 'PAWIDEAN', '087717768318', 4),
(62, NULL, NULL, 'IWO', 'MALANGSARI', '083824622216', 4),
(63, NULL, NULL, 'RIFKI', 'TERISI', '083898096851', 4),
(64, NULL, NULL, 'FAQIH RO', 'WIDASARI', '087727653663', 4),
(65, NULL, NULL, 'HARI', 'KEDOKAN', '089688406209', 4),
(66, NULL, NULL, 'MARNO', 'KARANGAMPEL', '08596413080002', 4),
(67, NULL, NULL, 'JOHAN CELL', 'SUKADANA', '087828933555', 4),
(68, NULL, NULL, 'KIKI', 'KEPANDEAN', '089618068653', 4),
(69, NULL, NULL, 'IBEX SHOP', 'SUKAMULYA', '087828753458', 4),
(70, NULL, NULL, 'EDI', 'BANGKIR', '0895373622210', 4),
(71, NULL, NULL, 'ADIT CELL', 'KERTASEMAYA', '083102100204', 4),
(72, NULL, NULL, 'DONI', 'SLAUR', '089660262782', 4),
(73, NULL, NULL, 'KONTER OO JOX', 'WIDASARI', '089692726666', 4),
(74, NULL, NULL, 'PAUL', 'KERTASEMAYA', '087828912299', 4),
(75, NULL, NULL, 'om yayan', 'JATIBARANG', '081946877007', 2),
(76, NULL, NULL, 'OM IWAN', 'TUKDANA', '083120024466', 1),
(77, NULL, NULL, 'WAHYU / GEPAK', 'WANASARI', '081288056066', 4),
(78, NULL, NULL, 'OMAT CELL', 'KEBULEN', '087828706999', 1),
(79, NULL, NULL, 'ANGGA', 'JATIBARANG', '083195301269', 4),
(80, NULL, NULL, 'ARSYA ', 'LOSARANG', '081382918025', 4),
(81, NULL, NULL, 'Umum', 'H', '47289347832', 4),
(82, NULL, NULL, 'babang gondrong', 'KALENSARI', '081387133087', 3),
(83, NULL, NULL, 'ROMI', 'JATIBARANG', '083195937644', 4),
(84, NULL, NULL, 'EKI', 'UJUNG ARIS ', '089664492492', 1),
(85, NULL, NULL, 'syifa', 'WIDASARI', '083101478455', 4),
(86, NULL, NULL, 'MADA MADA', 'WANASARI', '083824519166', 1),
(87, NULL, NULL, 'OKTO', 'JATIBARANG', '0000', 4),
(88, NULL, NULL, 'BP ARI', 'WIDASARI', '082154595910', 4),
(89, NULL, NULL, 'jajat', 'karanggetas', '0000', 4),
(90, NULL, NULL, 'HJ. SITI', 'WIDASARI', '081312387780', 4),
(91, NULL, NULL, 'DEDE', 'PANGKALAN', '0000', 2),
(92, NULL, NULL, 'BANG JALI', 'UJUNG PENDOK', '000', 2),
(93, NULL, NULL, 'OM TONI', 'CANGKO', '000', 2),
(94, NULL, NULL, 'LEPET', 'WIDASARI', '000', 1),
(105, '2021-01-09 02:25:20', '2021-01-09 02:46:14', 'Uswatun hasanaa', 'Jatibarang', '083874215219', 2);

-- --------------------------------------------------------

--
-- Table structure for table `diskons`
--

CREATE TABLE `diskons` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diskons`
--

INSERT INTO `diskons` (`id`, `nama_member`, `diskon`, `created_at`, `updated_at`) VALUES
(1, 'Silver', 3, NULL, '2021-01-04 09:46:16'),
(2, 'Gold', 5, NULL, '2021-01-04 09:45:58'),
(3, 'Diamond', 10, NULL, '2021-01-04 09:46:06'),
(4, 'Umum', 0, NULL, NULL);

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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'LCD', NULL, NULL),
(2, 'IC', NULL, NULL),
(3, 'TOUCHSCREEN', NULL, NULL),
(4, 'HEADSET', NULL, NULL),
(5, 'SOFTCASE', NULL, NULL),
(6, 'BACKDOOR', NULL, NULL),
(7, 'CASING FULLSET', NULL, NULL),
(8, 'TULANGAN FULLSET', NULL, NULL),
(9, 'CHARGER', NULL, NULL),
(10, 'KABEL DATA', NULL, NULL),
(11, 'FLEXIBLE', NULL, NULL),
(12, 'HOLDER', NULL, NULL),
(13, 'BATERAI', NULL, NULL),
(14, 'BUZZER / SPEAKER BAWAH', NULL, NULL),
(15, 'FRAME TULANG TENGAH', NULL, NULL),
(16, 'TEMPERED GLASS', NULL, NULL),
(17, 'TOOLS', NULL, NULL),
(18, 'SIMTRAY', NULL, NULL),
(19, 'JASA', NULL, NULL),
(20, 'SERVIS', NULL, NULL),
(21, 'LUPA POLA', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_20_125940_create_daftar_pelanggans_table', 2),
(5, '2020_11_13_070306_create_suppliers_table', 3),
(6, '2020_12_09_041405_create_categories_table', 4),
(7, '2020_11_13_040510_create_products_table', 5),
(9, '2020_12_09_154126_create_aksess_table', 6),
(11, '2014_10_12_000000_create_users_table', 7),
(12, '2020_12_09_172320_create_kategoris_table', 8),
(14, '2020_12_09_172816_create_diskons_table', 9),
(16, '2020_12_09_180816_create_daftar_pelanggans_table', 11),
(18, '2020_12_11_130138_create_diskons_table', 13),
(19, '2020_12_12_104658_create_notifications_table', 14),
(20, '2020_12_30_145801_create_satuans_table', 14),
(30, '2020_12_09_172729_create_suplai_barangs_table', 20),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 21),
(32, '2020_12_09_181032_create_transaksis_table', 22),
(39, '2020_12_09_172608_create_produks_table', 23),
(41, '2021_01_15_170635_create_tokos_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(2, 'App\\Models\\User', 1, 'redmi note 7', 'a2cccef5994dde2b0faa96b028767ddf4a3fb56ac1903e7e063598c052ee3112', '[\"*\"]', NULL, '2021-01-06 22:48:41', '2021-01-06 22:48:41'),
(3, 'App\\Models\\User', 1, 'redmi note 7', '7205c78c245e7ffd27ffb50883123d14b76d892a5e2ca0a1132c820105bb5e2c', '[\"*\"]', NULL, '2021-01-06 22:50:14', '2021-01-06 22:50:14'),
(5, 'App\\Models\\User', 1, 'redmi note 7', '6a0782e8858a5595e098eeeb92288ab9a292b56cd0c3a0d8e3de888155d01d9f', '[\"*\"]', NULL, '2021-01-08 23:31:08', '2021-01-08 23:31:08'),
(6, 'App\\Models\\User', 6, 'redmi note 7', '8cd63449229e926e63c3fc9dfbe1b751cbb17d91cf687f6ebcc4e30fe9299ad7', '[\"*\"]', NULL, '2021-01-08 23:34:38', '2021-01-08 23:34:38'),
(7, 'App\\Models\\User', 1, 'redmi note 7', 'c44593126c80de2d713396df6efc87c44402df5cc62a490a6e57cee642db2276', '[\"*\"]', NULL, '2021-01-09 00:00:39', '2021-01-09 00:00:39'),
(9, 'App\\Models\\User', 1, 'redmi note 7', 'ef4e6bfcde5c134119de4105604d0c66a68ae11c1849cdf769077a263cd1e93d', '[\"*\"]', '2021-01-09 21:56:07', '2021-01-09 01:19:53', '2021-01-09 21:56:07'),
(10, 'App\\Models\\User', 1, 'Mobile Sanctum', '062a9720b644dbc94b9b61740c6b330224cab156d2d36a19daa329fb3db26716', '[\"*\"]', '2021-01-10 01:38:08', '2021-01-10 01:33:09', '2021-01-10 01:38:08'),
(16, 'App\\Models\\User', 1, 'Mobile Sanctum', '6d38000ff196876b90a93036912a609340af92951221b33bbd2ee3bec2193290', '[\"*\"]', NULL, '2021-01-13 12:07:46', '2021-01-13 12:07:46'),
(18, 'App\\Models\\User', 1, 'redmi note 7', '2a5acd614931dfdff0e850bcc270127a883d5b380d5585b701062f1e713eef82', '[\"*\"]', '2021-01-16 11:03:57', '2021-01-13 15:42:51', '2021-01-16 11:03:57'),
(19, 'App\\Models\\User', 1, 'Mobile Sanctum', '6be4173628ddf50667af9fb9b0d21098810bf366926246acd3e9ff73b95c40c6', '[\"*\"]', '2021-01-14 04:07:27', '2021-01-14 04:07:23', '2021-01-14 04:07:27'),
(20, 'App\\Models\\User', 1, 'Mobile Sanctum', 'f0ea883fbe809ac99bc2a6c94ef3416a53d2e0892ff079d3419434382a583d69', '[\"*\"]', NULL, '2021-01-14 04:33:55', '2021-01-14 04:33:55'),
(21, 'App\\Models\\User', 1, 'Mobile Sanctum', 'b9f760a205b3a3d82555ac021fc96f403fb7e7c9583c96a9ba4f40b72e4c235a', '[\"*\"]', NULL, '2021-01-14 07:49:11', '2021-01-14 07:49:11'),
(22, 'App\\Models\\User', 1, 'Mobile Sanctum', 'e73e132d5685eda2cc405f082d7a95b1dd541b5420eba916a6b161b4092ec9b3', '[\"*\"]', NULL, '2021-01-16 08:35:04', '2021-01-16 08:35:04'),
(23, 'App\\Models\\User', 1, 'redmi note 7', '6b1e9aa3c2ca2282d72c6729dac86634edb81ce86191fe38b1a1ab5f5d2d3d05', '[\"*\"]', NULL, '2021-01-16 13:25:44', '2021-01-16 13:25:44'),
(28, 'App\\Models\\User', 1, '3b43e665b515d5d7', '2609a3876c751e46d045af115fd5de79a0fa025af0ba59d6bb99f1721d4fd3dc', '[\"*\"]', NULL, '2021-01-17 08:48:23', '2021-01-17 08:48:23'),
(29, 'App\\Models\\User', 1, '3b43e665b515d5d7', '745637769eaffced0d82925fd9850ac1a1e0ea094bc0aa8f940b76a7882c0945', '[\"*\"]', NULL, '2021-01-17 08:51:24', '2021-01-17 08:51:24'),
(30, 'App\\Models\\User', 1, 'redmi note 7', '1dfee30f88f8886c805607fb0df22247f00b2def03e8102092b0e45e5fe52935', '[\"*\"]', '2021-01-17 11:54:44', '2021-01-17 08:53:12', '2021-01-17 11:54:44'),
(31, 'App\\Models\\User', 1, '3b43e665b515d5d7', '6638396cb043463d30b164eb22799f7e739c9bf49bd28151c12dc88fd285e5fd', '[\"*\"]', NULL, '2021-01-17 09:02:27', '2021-01-17 09:02:27'),
(32, 'App\\Models\\User', 1, '3b43e665b515d5d7', 'a169753fc180db9dcd1806d3d819fe8205a53b40fa25ef504ebb1c1f54fd6f27', '[\"*\"]', NULL, '2021-01-17 09:35:56', '2021-01-17 09:35:56'),
(33, 'App\\Models\\User', 1, '3b43e665b515d5d7', '222413e8b0f10c48abaa5002c63c13dcdf3e584f25a587d34aed916f22c80574', '[\"*\"]', NULL, '2021-01-17 09:41:33', '2021-01-17 09:41:33'),
(34, 'App\\Models\\User', 1, '3b43e665b515d5d7', '93c121826197480481042054193302529b24364b6e1067ed3c8c73b34fafd6f2', '[\"*\"]', NULL, '2021-01-17 09:52:49', '2021-01-17 09:52:49'),
(36, 'App\\Models\\User', 1, 'Mobile Sanctum', '4a549d8137e881e7e02fc6e03350ea35e0ad16e0a707d441039b60b9bfc503e5', '[\"*\"]', NULL, '2021-01-17 10:13:43', '2021-01-17 10:13:43'),
(37, 'App\\Models\\User', 1, 'redmi note 7', '2116ed14cda99c6d8d80ebc56590ebda170a56046f1789bbc7ffa6a34c57d1b1', '[\"*\"]', '2021-01-18 07:16:58', '2021-01-18 07:12:43', '2021-01-18 07:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_barang` enum('aksessoris','sparepart','service') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `harga` bigint(20) NOT NULL,
  `harga_beli` bigint(20) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tersedia',
  `kategori_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `kode_barang`, `jenis_barang`, `nama_barang`, `tipe`, `stok`, `harga`, `harga_beli`, `keterangan`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, '6973510610035', 'aksessoris', 'HF JD-525', 'General', 120, 13000, 20000, 'Tersedia', 4, '2021-01-09 21:52:15', '2021-01-10 08:25:09'),
(2, '6435381098034', 'aksessoris', 'HEADSET JB-02', 'General', 68, 7000, 16000, 'Tersedia', 4, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(3, '702', 'aksessoris', 'HEADSET GENAI R40', 'General', 8, 28000, 29000, 'Tersedia', 4, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(4, '6944284614499', 'aksessoris', 'HEADSET F7 SUPER BASS (JJ)', 'General', 4, 15000, 12000, 'Tersedia', 4, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(5, '6971548134523', 'aksessoris', 'HEADSET ROBOT RE-10', 'General Robot', 6, 18000, 21000, 'Tersedia', 4, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(6, '6988188700292', 'aksessoris', 'SOFTCASE REDMI 8A', 'Xiaomi Redmi', 0, 25000, 20000, 'Habis', 4, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(7, '5473060', 'aksessoris', 'T/C CHARGER OPPO VOOC 4A AK779 MICRO', 'Oppo', 3, 80000, 64000, 'Tersedia', 9, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(8, 'OP52CAED VV', 'aksessoris', 'T/C CHARGER OPPO 2.1A OP52CAED MICRO', 'Oppo', 4, 50000, 40000, 'Tersedia', 9, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(9, '41002', 'aksessoris', 'T/C CHARGER OPPO REALME VOOC 4A TYPE C', 'Oppo', 1, 80000, 64000, 'Hampir Habis', 9, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(10, 'OP52CAED', 'aksessoris', 'T/C CHARGER REALME 2.1A OP52CAED TYPE C', 'Kabel Tipe C', 2, 50000, 45000, 'Hampir Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(11, 'KDIP4GAK', 'aksessoris', 'USB KABEL DATA IPHONE 3G/3GS/4G/4GS AK', 'Iphone', 2, 15000, 10500, 'Hampir Habis', 10, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(12, 'KDIPH6GAK', 'aksessoris', 'USB KABEL DATA IPHONE 6G AK', 'Iphone', 9, 15000, 13500, 'Tersedia', 10, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(13, '6954176813138', 'aksessoris', 'T/C CHARGER XIAOMI 2A ORI CH-P004', 'Xiaomi', 5, 55000, 44000, 'Tersedia', 9, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(14, 'KDREALMEMCRORNK', 'aksessoris', 'USB KABEL DATA REALME ORI MICRONK', 'Realme', 1, 25000, 20000, 'Hampir Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(15, '602', 'aksessoris', 'CAR CHARGER GENAI CC21 2.1A 2USB', 'General', 7, 28000, 35000, 'Tersedia', 9, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(16, '6971548130631', 'aksessoris', 'CAR CHARGER ROBOT 2.4A RT-C06', 'General Robot', 3, 70000, 56000, 'Tersedia', 9, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(17, '6971548131959', 'aksessoris', 'HOLDER MOTOR ROBOT RT-MH02 RM', 'General Robot', 5, 36000, 37000, 'Tersedia', 9, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(18, '6971548131324', 'aksessoris', 'HOLDER MOBIL ROBOT RT-CH01 RA', 'General Robot', 5, 70000, 56000, 'Tersedia', 9, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(19, 'BUZSI9080FSJS', 'sparepart', 'BUZZER + CON H/F SAMSUNG I9080 / I9082 FULLSET JS', 'Samsung', 25, 27000, 21600, 'Tersedia', 14, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(20, 'BATPROB500AEEU', 'sparepart', 'BATERAI PRO B500AE SAMSUNG J110 / I9190 EU', 'Samsung', 4, 75000, 60000, 'Tersedia', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(21, 'BATPROEBBJ120CBEEK', 'sparepart', 'BATERAI PRO EB-BJ120CBE SAMSUNG J120 / J1 2016 EK', 'Samsung', 3, 75000, 60000, 'Tersedia', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(22, 'BATPROEBBG530CBERR', 'sparepart', 'BATERAI PRO EB-BG530CBE SAMSUNG G530 / G532 / J500 / J300 / J250 / J3110 RR', 'Samsung', 1, 75000, 60000, 'Hampir Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(23, 'BATPROBL234UA', 'sparepart', 'BATERAI PRO BL-234 LENOVO A5000 / P70 / P90 / A70 / VIBE P1M UA', 'Lenovo', 2, 85000, 68000, 'Hampir Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(24, 'BATPROBL203EE', 'sparepart', 'BATERAI PRO BL-203 LENOVO A369 / A398 EE', 'Lenovo', 2, 50000, 40000, 'Hampir Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(25, 'BATPROBM36MS', 'sparepart', 'BATERAI PRO BM46 XIAOMI REDMI NOTE 3 MS', 'Xiaomi Redmi', 2, 100000, 80000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(26, 'BATPROBL253EM', 'sparepart', 'BATERAI PRO BL-253 LENOVO A1000 / A2010 EM', 'Lenovo', 2, 50000, 40000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(28, '51', 'sparepart', 'BATERAI ORI99 BN43 XIAOMI REDMI NOTE 4X RR', 'Xiaomi Redmi', 4, 33000, 52000, 'Tersedia', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(29, '2', 'sparepart', 'BATERAI H BM44 XIAOMI REDMI 2S', 'Xiaomi Redmi', 2, 33000, 49000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(30, '43', 'sparepart', 'BATERAI ORI99 BM44 XIAOMI REDMI 2S', 'Xiaomi Redmi', 3, 23000, 34000, 'Tersedia', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(31, '50', 'sparepart', 'BATERAI ORI99 BN41 XIAOMI REDMI NOTE 4', 'Xiaomi Redmi', 4, 34000, 52000, 'Tersedia', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(32, '17', 'sparepart', 'BATERAI H BN37 XIAOMI REDMI 6/6A', 'Xiaomi Redmi', 2, 55000, 55000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(33, '58', 'sparepart', 'BATERAI ORI99 BN37 XIAOMI REDMI 6/6A', 'Xiaomi Redmi', 0, 31000, 58000, 'Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(34, '56', 'sparepart', 'BATERAI ORI99 BN34 XIAOMI REDMI 5A', 'Xiaomi Redmi', 2, 33000, 54000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(35, '15', 'sparepart', 'BATERAI H BN34 XIAOMI REDMI 5A', 'Xiaomi Redmi', 5, 55000, 55000, 'Tersedia', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(36, '46', 'sparepart', 'BATERAI ORI99 BM47 XIAOMI REDMI 3/4X', 'Xiaomi Redmi', 6, 31000, 58000, 'Tersedia', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(37, '11', 'sparepart', 'BATERAI H BN30 XIAOMI REDMI 4A', 'Xiaomi Redmi', 1, 50000, 58000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(38, '52', 'sparepart', 'BATERAI ORI99 BN30 XIAOMI REDMI 4A', 'Xiaomi Redmi', 6, 31000, 58000, 'Tersedia', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(39, '6', 'sparepart', 'BATERAI H BM46 XIAOMI REDMI NOTE 3/NOTE 3 PRO', 'Xiaomi Redmi', 2, 54000, 57000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(40, '14', 'sparepart', 'BATERAI H BN31 XIAOMI REDMI NOTE 5A/S2/MI5X', 'Xiaomi Redmi', 2, 54000, 55000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(41, '55', 'sparepart', 'BATERAI ORI99 BN31 XIAOMI REDMI NOTE 5A/MI5X/S2', 'Xiaomi Redmi', 5, 30000, 60000, 'Tersedia', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(42, '72', 'sparepart', 'BATERAI ORI99 BM22 XIAOMI MI 5', 'Xiaomi mi', 0, 33000, 56000, 'Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(43, '48', 'sparepart', 'BATERAI ORI99 BN42 XIAOMI REDMI 4', 'Xiaomi Redmi', 2, 39000, 44000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(44, '7', 'sparepart', 'BATERAI H BN42 XIAOMI REDMI 4', 'Xiaomi Redmi', 3, 55000, 55000, 'Tersedia', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(45, '8', 'sparepart', 'BATERAI H BN40 XIAOMI REDMI 4 PRO /4 PRIME', 'Xiaomi Redmi', 1, 58000, 52000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(46, '49', 'sparepart', 'BATERAI ORI99 BN40 XIAOMI REDMI 4PRO/4PRIME', 'Xiaomi Redmi', 2, 51000, 38000, 'Hampir Habis', 13, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(47, 'FTTA30SBEK', 'sparepart', 'FRAME TULANG TENGAH SAMSUNG A30S BLACK EK', 'Samsung', 0, 50000, 40000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(48, 'FTTA50BRS', 'sparepart', 'FRAME TULANG TENGAH SAMSUNG A50 BLACK RS', 'Samsung', 0, 60000, 48000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(49, 'FTTA50SBRR', 'sparepart', 'FRAME TULANG TENGAH SAMSUNG A50S BLACK RR', 'Samsung', 0, 65000, 52000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(50, 'FTTA20BRS', 'sparepart', 'FRAME TULANG TENGAH SAMSUNG A20 BLACK RS', 'Samsung', 0, 60000, 48000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(51, 'FTTG610GJR', 'sparepart', 'FRAME TULANG TENGAH SAMSUNG J7PRIME GOLD JR', 'Samsung', 0, 30000, 24000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(52, 'FTTG610WJR', 'sparepart', 'FRAME TULANG TENGAH SAMSUNG J7PRIME WHITE JR', 'Samsung', 0, 30000, 24000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(53, 'FTTJ7PLUSBJK', 'sparepart', 'FRAME TULANG TENGAH SAMSUNG J7 PLUS BLACK JK', 'Samsung', 0, 30000, 24000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(54, 'FTTJ250BJK', 'sparepart', 'FRAME TULANG TENGAH SAMSUNG J2PRO BLACK JK', 'Samsung', 0, 30000, 24000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(55, 'FTTJ500BJR', 'sparepart', 'FRAME TULANG TENGAH SAMSUNG J500 BLACK JR', 'Samsung', 0, 30000, 24000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(56, 'FTTV5PWJN', 'sparepart', 'FRAME TULANG TENGAH VIVO V5 PLUS WHITE EK', 'Vivo', 0, 50000, 40000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(57, 'FTTV5PBEK', 'sparepart', 'FRAME TULANG TENGAH VIVO V5 PLUS BLACK EK', 'Vivo', 0, 50000, 40000, 'Habis', 15, '2021-01-09 21:52:15', '2021-01-09 21:52:15'),
(58, 'FTTY55WEN', 'sparepart', 'FRAME TULANG TENGAH VIVO Y55 WHITE EN', 'Vivo', 0, 55000, 44000, 'Habis', 15, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(59, 'FTTY55BEN', 'sparepart', 'FRAME TULANG TENGAH VIVO Y55 BALCK EN', 'Vivo', 0, 55000, 44000, 'Habis', 15, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(60, 'FTTV11WES', 'sparepart', 'FRAME TULANG TENGAH VIVO V11 WHITE ES', 'Vivo', 0, 45000, 36000, 'Habis', 15, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(61, 'FTTV11BES', 'sparepart', 'FRAME TULANG TENGAH VIVO V11 BLACK ES', 'Vivo', 0, 45000, 36000, 'Habis', 15, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(62, 'FTTV7PBJN', 'sparepart', 'FRAME TULANG TENGAH VIVO V7 PLUS BLACK JN', 'Vivo', 0, 35000, 28000, 'Habis', 15, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(63, 'FTTV7PWJN', 'sparepart', 'FRAME TULANG TENGAH VIVO V7 PLUS WHITE JN', 'Vivo', 0, 35000, 28000, 'Habis', 15, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(64, '125', 'sparepart', 'BATERAI H BLP673 OPPO A3S/A5S/REAME C1/A5/A7/REALME 2 ', 'Oppo', 5, 60000, 47000, 'Tersedia', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(65, '42', 'sparepart', 'BATERAI ORI99 BM41 XIAOMI REDMI 1S', 'Xiaomi Redmi', 0, 25000, 35000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(66, '44', 'sparepart', 'BATERAI ORI99 BM42 XIAOMI REDMI NOTE', 'Xiaomi Redmi', 0, 31000, 31000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(67, '25', 'sparepart', 'BATERAI H BM4J XIAOMI REDMI NOTEB 8 PRO', 'Xiaomi Redmi', 0, 67000, 53000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(68, '19', 'sparepart', 'BATERAI H BN48 XIAOMI REDMI NOTE 6 PRO / MI A2 LITE', 'Xiaomi Redmi', 0, 60000, 52000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(69, '22', 'sparepart', 'BATERAI H BN49 XIAOMI REDMI 7A', 'Xiaomi Redmi', 0, 65000, 48000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(70, '63', 'sparepart', 'BATERAI ORI99 BN49 XIAOMI REDMI 7A', 'Xiaomi Redmi', 0, 45000, 50000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(71, '57', 'sparepart', 'BATERAI ORI99 BN44 XIAOMI REDMI 5 PLUS', 'Xiaomi Redmi', 0, 33000, 54000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(72, '16', 'sparepart', 'BATERAI H BN44 XIAOMI REDMI 5 PLUS', 'Xiaomi Redmi', 0, 62000, 46000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(73, '18', 'sparepart', 'BATERAI H BN47 XIAOMI REDMI 6 PRO', 'Xiaomi Redmi', 3, 62000, 46000, 'Tersedia', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(74, '54', 'sparepart', 'BATERAI ORI99 BN45 XIAOMI REDMI NOTE 5', 'Xiaomi Redmi', 0, 38000, 52000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(75, '13', 'sparepart', 'BATERAI H BN45 XIAOMI REDMI NOTE 5', 'Xiaomi Redmi', 0, 62000, 53000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(76, '80', 'sparepart', 'BATERAI ORI99 BM4E XIAOMI POCOPHONE F1', 'Xiaomi Pocophone', 0, 41000, 48000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(77, '59', 'sparepart', 'BATERAI ORI99 BN47 XIAOMI REDMI 6 PRO / MI A2 LITE', 'Xiaomi Redmi', 0, 49000, 39000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(78, '23', 'sparepart', 'BATERAI H BN4A XAIOMI REDMI NOTE 7', 'Xiaomi Redmi', 0, 62000, 56000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(79, '64', 'sparepart', 'BATERAI ORI99 BN4A XIAOMI REDMI NOTE 7', 'Xiaomi Redmi', 0, 40000, 50000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(80, '76', 'sparepart', 'BATERAI ORI99 BM50 XIAOMI MI MAX 2', 'Xiaomi Mi', 0, 62000, 71000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(81, '38', 'sparepart', 'BATERAI ORI99 BM33 XIAOMI MI 4I', 'Xiaomi Mi', 0, 39000, 43000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(82, '31', 'sparepart', 'BATERAI H BM35 XIAOMI MI 4C', 'Xiaomi Mi', 0, 52000, 56000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(83, '79', 'sparepart', 'BATERAI ORI99 BM35 XAIOMI MI 4C', 'Xiaomi Mi', 0, 35000, 50000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(84, '36', 'sparepart', 'BATERAI H BM39 XIAOMI MI6', 'Xiaomi Mi', 0, 53000, 59000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(85, '35', 'sparepart', 'BATERAI H BN20 XIAOMI MI 5C', 'Xiaomi Mi', 0, 49000, 67000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(86, '71', 'sparepart', 'BATERAI ORI99 BM32 XIAOMI MI4', 'Xiaomi Mi', 0, 36000, 48000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(87, '29', 'sparepart', 'BATERAI H BM31 XIAOMI MI3', 'Xiaomi Mi', 0, 45000, 72000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(88, '53', 'sparepart', 'BATERAI ORI99 BN35 XIAOMI REDMI 5', 'Xiaomi Redmi', 0, 50000, 55000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(89, '73', 'sparepart', 'BATERAI ORI99 BM36 XIAOMI MI 5S', 'Xiaomi Mi', 0, 37000, 53000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(90, '37', 'sparepart', 'BATERAI H BN36 XIAOMI MI 6X', 'Xiaomi Mi', 0, 53000, 59000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(91, '75', 'sparepart', 'BATERAI ORI99 BN36 XIAOMI MI 6X', 'Xiaomi Mi', 0, 42000, 46000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(92, '80', 'sparepart', 'BATERAI H LIS1594ERPC SONY XPERIA Z5 MINI COMPACT / XA ULTRA', 'Sony', 0, 53000, 59000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(93, '81', 'sparepart', 'BATERAI H LIS1558ERPC SONY XPERIA Z3 D6603', 'Sony', 0, 55000, 55000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(94, '82', 'sparepart', 'BATERAI H LIS1529ERPC SONY XPERIA Z1 MINI D5503', 'Sony', 0, 50000, 60000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(95, '83', 'sparepart', 'BATERAI H AGP016A001 SONY XPERIA M5 E5603 / E5606 / E5653', 'Sony', 0, 50000, 65000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(96, '84', 'sparepart', 'BATERAI B LIS1525ERPC SONY XPERIA Z1 L39H / C6902 / C6903 / C6906', 'Sony', 0, 52000, 61000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(97, '85', 'sparepart', 'BATERAI B LIS1579ERPC SONY XPERIA C5 / C5 ULTRA / Z3 PLUS / Z4', 'Sony', 0, 48000, 69000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(98, '86', 'sparepart', 'BATERAI B LIS1618ERPC SONY XPERIA XA', 'Sony', 0, 40000, 80000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(99, '87', 'sparepart', 'BATERAI H LIS1605ERPC SONY XPERIA Z5 PREMIUM E6853', 'Sony', 0, 57000, 54000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(100, '88', 'sparepart', 'BATERAI B LIS1593ERPC SONY XPERIA Z5 E6653', 'Sony', 0, 48000, 64000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(101, '89', 'sparepart', 'BATERAI H LIS1574ERPC SONY XPERIA E4 E2115', 'Sony', 0, 55000, 55000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(102, '90', 'sparepart', 'SONY H LIS1543ERPC SONY XPERIA Z2 C6503', 'Sony', 0, 55000, 55000, 'Habis', 14, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(103, '91', 'sparepart', 'BATERAI H LIS1561ERPC SONY XPERIA C4 / Z3 COMPACT D5803 / D5833', 'Sony', 0, 55000, 55000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(104, '92', 'sparepart', 'BATERAI ORI99 LI37142C ANDROMAX C', 'Andromax', 0, 28000, 31000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(105, '93', 'sparepart', 'BATERAI ORI99 H15325 ANDROMAX Q', 'Andromax', 0, 34000, 27000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(106, '94', 'sparepart', 'BATERAI ORI99 LI38170A ANDROMAX U2', 'Andromax', 0, 32000, 28000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(107, '95', 'sparepart', 'BATERAI ORI99 LP38232A ANDROMAX R2', 'Andromax', 0, 46000, 63000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(108, '96', 'sparepart', 'BATERAI ORI99 LP38220 ANDROMAX R', 'Andromax', 0, 46000, 38000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(109, '97', 'sparepart', 'BATERAI ORI99 H15388 ANDROMAX E2', 'Andromax', 0, 36000, 28000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(110, '98', 'sparepart', 'BATERAI ORI99 PP-A15408 ANDROMAX A / ANDROMAX B', 'Andromax', 0, 28000, 29000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(111, '99', 'sparepart', 'BATERAI H C11P1805 ASUS ZENFONE MAX M2', 'Asus', 0, 63000, 67000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(112, '100', 'sparepart', 'BATERAI ORI99 C11P1506 ASUS ZENFONE GO 5\" ZC500TG ', 'Asus', 0, 30000, 28000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(113, '101', 'sparepart', 'BATERAI H C11P1324 ASUS ZENFONE 5 ', 'Asus', -4501, 50000, 60000, 'Hampir Habis', 13, '2021-01-09 21:52:16', '2021-01-17 15:17:48'),
(114, '102', 'sparepart', 'BATERAI H C11P1325 ASUS ZENFONE 6', 'Asus', 0, 55000, 55000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(115, '103', 'sparepart', 'BATERAI ORI99 H15346 ANDROMAX EC', 'Andromax', 0, 22000, 31000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(116, '104', 'sparepart', 'BATERAI ORI99 B11P1510 ASUS ZENFONE GO 5.5', 'Asus', 0, 30000, 32000, 'Habis', 13, '2021-01-09 21:52:16', '2021-01-09 21:52:16'),
(117, '105', 'sparepart', 'BATERAI H B11P1421 ASUS ZENFONE C', 'Asus', 0, 38000, 44000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(118, '106', 'sparepart', 'BATERAI SQ B11P1421 ASUS ZENFONE C', 'Asus', 0, 22000, 31000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(119, '107', 'sparepart', 'BATERAI H C11PJJ1H517 ASUS ZENFONE 2 ZE550ML / ZE551ML', 'Asus', 0, 63000, 49000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(120, '108', 'sparepart', 'BATERAI H C11P1508 ASUS ZENFONE MAX ZC550KL', 'Asus', 0, 55000, 55000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(121, '110', 'sparepart', 'BATERAI H C11P1501 ASUS ZENFONE SELFIE ZD551KL / Z00UD', 'Asus', 0, 38000, 44000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(122, '109', 'sparepart', 'BATERAI ORI99 C11P1501 ASUS ZENFONE SELFIE ZD551KL / Z00UD', 'Asus', 0, 27000, 36000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(123, '111', 'sparepart', 'BATERAI B C11P1709 ASUS ZENFONE LIVE L1 ZA550KL', 'Asus', 0, 80000, 45000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(124, '112', 'sparepart', 'BATERAI ORI99 C11P1404 ASUS ZENFONE GO 4.5 ZC451TG', 'Asus', 0, 27000, 33000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(125, '113', 'sparepart', 'BATERAI ORI99 C11P1611 ASUS ZENFONE 3MAX 5.2 X008DA / ZC520TL', 'Asus', 0, 38000, 50000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(126, '114', 'sparepart', 'BATERAI H B11P1428 ASUS ZENFONE GO 4.5\" X014D / ZB452KG', 'Asus', 0, 37000, 46000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(127, '115', 'sparepart', 'BATERAI ORI99 B11P1428 ASUS ZENFONE GO 4.5 X014D / ZB452KG', 'Asus', 0, 32000, 26000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(128, '116', 'sparepart', 'BATERAI H C11P1428 ASUS ZENFONE 2 LASER 5 ZE500KL', 'Asus', 0, 38000, 44000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(129, '117', 'sparepart', 'BATERAI H IPHONE 7 PLUS', 'Iphone', 0, 79000, 62000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(130, '118', 'sparepart', 'BATERAI H IPHONE 6S PLUS', 'Iphone', 0, 75000, 55000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(131, '119', 'sparepart', 'BATERAI H IPHONE 6S', 'Iphone', 1, 65000, 55000, 'Hampir Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(132, '120', 'sparepart', 'BATERAI ORI99 IPHONE 6 PLUS', 'Iphone', 0, 46000, 54000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(133, '121', 'sparepart', 'BATERAI H IPHONE 8G', 'Iphone', 0, 75000, 68000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(134, '122', 'sparepart', 'BATERAI H IPHONE 5G', 'Iphone', 0, 54000, 56000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(135, '123', 'sparepart', 'BATERAI H IPHONE 8 PLUS', 'Iphone', 0, 85000, 80000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(136, '1', 'sparepart', 'LCD SAMSUNG G530H / G531 / G532 GRAND PRIME / J2 PRIME', 'Samsung', 0, 153000, 50000, 'Habis', 1, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(137, '124', 'sparepart', 'BATERAI H IPHONE 5 SE', 'Iphone', 0, 60000, 48000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(139, '201', 'sparepart', 'SWITCH ON OFF SAMSUNG SMALL', 'Samsung', 8, 1000, 9500, 'Tersedia', 11, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(140, '202', 'sparepart', 'SWITCH ON OFF SAMSUNG SMALL 5PC', 'Samsung', 10, 5000, 18000, 'Tersedia', 11, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(141, '301', 'aksessoris', 'TEMPERED GLASS FULL SAMSUNG J710', 'Samsung', 8, 3500, 21000, 'Tersedia', 16, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(142, '401', 'aksessoris', 'ANTI CRACK HD SAMSUNG G530 / G532 GRAND PRIME / J2 PRIME', 'Samsung', 8, 5000, 15000, 'Tersedia', 5, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(143, '501', 'aksessoris', 'TOOLS TIMAH GULUNG MECHANIC 0.6MM', 'Tools', 8, 20000, 22000, 'Tersedia', 17, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(144, '601', 'sparepart', 'T/C CHARGER P20 3.5A', 'General', 31, 12500, 15000, 'Tersedia', 9, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(145, '701', 'sparepart', 'BLUETOOTH RECEIVER PRO CK02', 'General', 46, 7750, 16000, 'Tersedia', 4, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(146, '126', 'sparepart', 'BATERAI H BLT029 OPPO JOY / R1001 ', 'Oppo', 0, 33000, 44000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(147, '153', 'sparepart', 'BATERAI ORI99 BLT029 OPPO JOY / R1001', 'Oppo', 0, 28000, 29000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(148, '134', 'sparepart', 'BATERAI ORI99 BLP693 OPPO REALME 3', 'Oppo', 0, 48000, 52000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(149, '801', 'aksessoris', 'TS SAMSUNG S7562 BLACK S7560 / S7582', 'Samsung', 0, 17000, 26000, 'Habis', 3, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(150, '802', 'aksessoris', 'TS SAMSUNG S7562 WHITE S7560 / S7582', 'Samsung', 0, 17000, 26000, 'Habis', 3, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(151, '803', 'aksessoris', 'TS SAMSUNG I8160  WHITE ACE 2', 'Samsung', 5, 21000, 24000, 'Tersedia', 3, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(152, '804', 'aksessoris', 'TS SAMSUNG J100 BLACK', 'Samsung', 3, 17000, 26000, 'Tersedia', 3, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(153, '805', 'aksessoris', 'TS SAMSUNG I9082 BLACK GRAND DUOS / GRAND NEO', 'Samsung', 1, 16000, 28000, 'Hampir Habis', 3, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(154, '806', 'aksessoris', 'TS SAMSUNG I9082 WHITE GRAND DUOS / GRAND NEO', 'Samsung', 2, 16000, 28000, 'Hampir Habis', 3, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(155, '2', 'sparepart', 'LCD VIVO Y91 / Y93 / Y95', 'Vivo', 0, 260000, 115000, 'Habis', 1, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(156, '128', 'sparepart', 'BATERAI H BLP631 OPPO F3 / F5', 'Oppo', 0, 60000, 47000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(157, '149', 'sparepart', 'BATERAI ORI99 BLP641 OPPO A71', 'Oppo', 0, 45000, 60000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(158, '137', 'sparepart', 'BATERAI H BLP649 OPPO A83', 'Oppo', 0, 57000, 51000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(159, '132', 'sparepart', 'BATERAI H BLP727 OPPO A9 2020 / A5 2020', 'Oppo', 0, 65000, 48000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(160, '159', 'sparepart', 'BATERAI ORI99 BLP727 OPPO A9 2020 / A5 2020', 'Oppo', 0, 45000, 43000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(161, '179', 'sparepart', 'BATERAI ORI99 B650AC SAMSUNG I9150 / I9152 MEGA 5.8', 'Samsung', 0, 20000, 32000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(162, '180', 'sparepart', 'BATERAI ORI99 EB454357VU SAMSUNG S5360 / S5300 / GAL YOUNG', 'Samsung', 0, 16000, 31000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(163, '181', 'sparepart', 'BATERAI H EBBG955ABA SAMSUNG S8 PLUS / G955', 'Samsung', 0, 60000, 70000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(164, '6920081822640', 'aksessoris', 'POWERBANK GENAI J27 5000 MAH', 'General', 0, 70000, 65000, 'Habis', 9, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(165, '6920081823371', 'aksessoris', 'POWERBANK GENAI GPA04 10000MAH', 'General', 0, 108000, 77000, 'Habis', 9, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(166, '182', 'sparepart', 'BATERAI H EBBG950ABE SAMSUNG S8 G950', 'Samsung', 0, 54000, 56000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(167, '183', 'sparepart', 'BATERAI H BE5 VIVO Y81 / Y83', 'Vivo', 0, 60000, 47000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(168, '184', 'sparepart', 'BATERAI H BB3 VIVO V5 PLUS', 'Vivo', 0, 54000, 56000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(169, '185', 'sparepart', 'BATERAI H HE338 NOKIA 2', 'Nokia', 0, 60000, 60000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(170, '186', 'sparepart', 'BATERAI H BG7 VIVO Y12 / Y15 / Y17 / V15 / Z1 PRO', 'Vivo', 0, 75000, 55000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(171, '187', 'sparepart', 'BATERAI H BG0 VIVO V15 PRO', 'Vivo', 0, 65000, 65000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(172, '188', 'sparepart', 'BATERAI ORI99 BC1 VIVO Y53', 'Vivo', 0, 43000, 42000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(173, '189', 'sparepart', 'BATERAI ORI99 BB1 VIVO Y55', 'Vivo', 0, 43000, 42000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(174, '190', 'sparepart', 'BATERAI H BF3 VIVO Y91 / Y93 / Y95', 'Vivo', 0, 62000, 42000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(175, '191', 'sparepart', 'BATERAI ORI99 BF3 VIVO Y91 / Y93 / Y95', 'Vivo', 0, 49000, 35000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(176, '192', 'sparepart', 'BATERAI H EBBG900BBC SAMSUNG S5 G900', 'Samsung', 0, 60000, 58000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(177, '193', 'sparepart', 'BATERAI ORI99 EBBG900BBC SAMSUNG S5 G900', 'Samsung', 0, 23000, 34000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(178, '194', 'sparepart', 'BATERAI ORI99 EBBG850BBC SAMSUNG G850 / G8508', 'Samsung', 0, 36000, 41000, 'Habis', 13, '2021-01-09 21:52:17', '2021-01-09 21:52:17'),
(179, '195', 'sparepart', 'BATERAI H BC9 VIVO V7 PLUS', 'Vivo', 0, 55000, 52000, 'Habis', 13, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(180, '196', 'sparepart', 'BATERAI H BE1 VIVO Y71', 'Vivo', 3, 67000, 45000, 'Tersedia', 13, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(181, '807', 'sparepart', 'TS SAMSUNG G355H BLACK GALAXY CORE', 'Samsung', 3, 15000, 25000, 'Tersedia', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(182, '8014', 'sparepart', 'TS SAMSUNG S7262 BLACK / S DUOS / S7560 / S7582', 'Samsung', 0, 17000, 23000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(183, '8015', 'sparepart', 'TS SAMSUNG S7262 WHITE / S DUOS / S7560 / S7582', 'Samsung', 0, 17000, 23000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(184, '8010', 'sparepart', 'TS SAMSUNG I8262 BLACK / I8260', 'Samsung', 5, 15500, 24500, 'Tersedia', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(185, '809', 'sparepart', 'TS SAMSUNG I8262 WHITE / I8260', 'Samsung', 1, 15500, 24500, 'Hampir Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(186, '808', 'sparepart', 'TS SAMSUNG I9150 BLACK MEGA 5.8 / I9152', 'Samsung', 2, 22000, 31000, 'Hampir Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(187, '8011', 'sparepart', 'TS SAMSUNG G750 WHITE / MEGA 2', 'Samsung', 1, 32000, 33000, 'Hampir Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(188, '8012', 'sparepart', 'TS SAMSUNG G750 BLACK / MEGA 2', 'Samsung', 1, 32000, 33000, 'Hampir Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(190, '8016', 'sparepart', 'TS OPPO A35 / F1 F WHITE', 'Oppo', 0, 27000, 26000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(191, '148', 'sparepart', 'BATERAI H BLP605 OPPO A33 / F1 F / NEO 7', 'Oppo', 2, 50000, 60000, 'Hampir Habis', 13, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(192, '402', 'aksessoris', 'ANTI CRACK XIAOMI REDMI NOTE 3', 'Xiaomi Redmi', 8, 2500, 10000, 'Tersedia', 5, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(193, '403', 'aksessoris', 'ANTI CRACK VIVO Y67 / V5 / V5 S / V5 LITE / Y66 / Y69', 'Vivo', 8, 2500, 10000, 'Tersedia', 5, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(194, '8017', 'sparepart', 'TS SAMSUNG Z200 BLACK', 'Samsung', 3, 15000, 25000, 'Tersedia', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(195, '8018', 'sparepart', 'TS SAMSUNG G7102 BLACK / GRAND 2 / G7106', 'Samsung', 0, 17000, 27000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(196, '8019', 'sparepart', 'TS SAMSUNG G7102 WHITE / GRAND 2 / G7106', 'Samsung', 0, 17000, 27000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(197, '198', 'sparepart', 'BATERAI ORI99 EB58515LU SAMSUNG G355 / GAL CORE I8552 / I8530', 'Samsung', 6, 19000, 32000, 'Tersedia', 13, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(198, '199', 'sparepart', 'BATERAI ORI99 EBL166LU SAMSUNG S3 I9300 / 19082 / I9060', 'Samsung', 5, 19000, 32000, 'Tersedia', 13, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(199, '8020', 'sparepart', 'TS SAMSUNG G360 BLACK / CORE PRIME', 'Samsung', 0, 14500, 28000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(200, '8021', 'sparepart', 'TS SAMSUNG G360 WHITE / CORE PRIME', 'Samsung', 0, 14500, 28000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(201, '8023', 'sparepart', 'TS SAMSUNG J105 WHITE / J1 MINI ', 'Samsung', 0, 15000, 25000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(202, '8022', 'sparepart', 'TS SAMSUNG J105 BLACK / J1 MINI ', 'Samsung', 0, 15000, 25000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(203, '8024', 'sparepart', 'TS SAMSUNG J105 GOLD / J1 MINI ', 'Samsung', 0, 15000, 25000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(204, '8025', 'sparepart', 'TS SAMSUNG G532 BLACK / J2 PRIME', 'Samsung', 0, 15500, 27000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(205, '8026', 'sparepart', 'TS SAMSUNG G532 WHITE / J2 PRIME', 'Samsung', 0, 15500, 27000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(206, '8027', 'sparepart', 'TS SAMSUNG G532 SILVER / J2 PRIME', 'Samsung', 0, 15500, 27000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(207, '8028', 'sparepart', 'TS SAMSUNG G532 GOLD / J2 PRIME', 'Samsung', 2, 15500, 27000, 'Hampir Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(208, '8029', 'sparepart', 'TS SAMSUNG G530 BLACK / GRAND PRIME / G531', 'Samsung', 0, 16000, 25000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(209, '8030', 'sparepart', 'TS SAMSUNG G530 WHITE / GRAND PRIME / G531', 'Samsung', 0, 16000, 25000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(210, '8031', 'sparepart', 'TS SAMSUNG G530 GOLD / GRAND PRIME / G531', 'Samsung', 0, 16000, 25000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(211, '8032', 'sparepart', 'TS SAMSUNG G313H WHITE / GAL V / G316 / G318 / V PLUS', 'Samsung', 0, 14000, 24000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(212, '8033', 'sparepart', 'TS SAMSUNG G313H BLACK / GAL V / G316 / G318 / V PLUS', 'Samsung', 1, 14000, 24000, 'Hampir Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(213, '8034', 'sparepart', 'TS SAMSUNG G350 BLACK / CORE PLUS', 'Samsung', 0, 22000, 16000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(214, '8035', 'sparepart', 'TS SAMSUNG G350 WHITE / CORE PLUS', 'Samsung', 0, 22000, 16000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(215, '8036', 'sparepart', 'TS SAMSUNG S6810 BLACK', 'Samsung', 0, 17500, 22500, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(216, '8037', 'sparepart', 'TS SAMSUNG S6810 WHITE', 'Samsung', 0, 17500, 22500, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(217, '8038', 'sparepart', 'TS SAMSUNG S7270 BLACK / S7272 / 7275 / ACE 3', 'Samsung', 0, 15500, 23000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(218, '8039', 'sparepart', 'TS SAMSUNG I8160 BLACK / ACE 2', 'Samsung', 0, 22000, 23000, 'Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(219, '6912316510002', 'aksessoris', 'DESKTOP LED CHARGER', 'Dekstop', 10, 8000, 16000, 'Tersedia', 9, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(220, '133', 'sparepart', 'BATERAI H BLP615 OPPO A37 / NEO 9', 'Oppo', 0, 52000, 66000, 'Habis', 13, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(221, '200', 'sparepart', 'BATERAI PRO BLP615 OPPO A37 / NEO 9', 'Oppo', 2, 41000, 66000, 'Hampir Habis', 13, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(222, '102', 'sparepart', 'FLEXIBLE OPPO A37 / NEO 9 VOL + CON CAS + MIC', 'Oppo', 1, 15000, 27000, 'Hampir Habis', 13, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(223, '3001', 'service', 'JASA UNLOCK MI CLOUD', 'Xiaomi', 999999, 10000, 50000, 'Tersedia', 19, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(224, '3', 'sparepart', 'LCD SAMSUNG G313H SOKET BESAR / GAL V', 'Samsung', 1, 52000, 92000, 'Hampir Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(225, '2001', 'sparepart', 'BACKDOOR SAMSUNG G313 BLACK', 'Samsung', 1, 4500, 21000, 'Hampir Habis', 6, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(226, '197', 'sparepart', 'BATERAI ORI99 SAMSUNG G313 / S7898 / S7270 / J105', 'Samsung', 2, 16000, 31000, 'Hampir Habis', 13, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(227, '3002', 'service', 'JASA LUPA POLA', 'Service ditunggu/tinggal', 9998, 20000, 40000, 'Tersedia', 19, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(228, '8040', 'sparepart', 'GLASS OPPO A83 W', 'Oppo', 2, 10000, 37000, 'Hampir Habis', 3, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(229, '4', 'sparepart', 'LCD SAMSUNG J110 WHITE / J1 ACE', 'Samsung', 0, 140000, 58000, 'Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(230, '5', 'sparepart', 'LCD SAMSUNG J110 BLACK / J1 ACE', 'Samsung', 0, 140000, 58000, 'Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(231, '6', 'sparepart', 'LCD SAMSUNG J7 PRO BLACK / J730 CONTRAS AAA', 'Samsung', 0, 185000, 90000, 'Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(232, '7', 'sparepart', 'LCD SAMSUNG J7 PRO GOLD / J730 CONTRAS AAA', 'Samsung', 0, 190000, 90000, 'Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(233, '8', 'sparepart', 'LCD XIAOMI MI4C BLACK', ' Xiaomi Mi', 0, 150000, 170000, 'Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(234, '9', 'sparepart', 'LCD OPPO A3S / REALME C1 / REALME 2 BLACK', 'Oppo', 4, 270000, 100000, 'Tersedia', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(235, '10', 'sparepart', 'LCD OPPO A77 / F3 WHITE', 'Oppo', 0, 160000, 80000, 'Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(236, '11', 'sparepart', 'LCD VIVO Y53 GOLD', 'Vivo', 0, 155000, 75000, 'Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(237, '12', 'sparepart', 'LCD XIAOMI REDMI 4A WHITE', 'Xiaomi Redmi', 1, 185000, 75000, 'Hampir Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(238, '13', 'sparepart', 'LCD XIAOMI REDMI 2 / 2S / 2 PRIME BLACK', 'Xiaomi Redmi', 0, 105000, 78000, 'Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(239, '14', 'sparepart', 'LCD XIAOMI REDMI 3 / 3S / 3 PRO GOLD', 'Xiaomi Redmi', 0, 185000, 85000, 'Habis', 1, '2021-01-09 21:52:18', '2021-01-09 21:52:18'),
(240, '15', 'sparepart', 'LCD XIAOMI MI 4 / MI 4W WHITE ( ORI )', ' Xiaomi Mi', 0, 150000, 77000, 'Habis', 1, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(241, '16', 'sparepart', 'LCD OPPO A5 S / A7 / A12 / REALME 3 BLACK', 'Oppo', 0, 255000, 95000, 'Habis', 1, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(242, '17', 'sparepart', 'LCD OPPO A9 2020 / A5 2020 / REALME C3 / REALME 5 / REALME 5I BLACK', 'Oppo', 0, 255000, 103000, 'Habis', 1, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(243, '18', 'sparepart', 'LCD OPPO F5 BLACK', 'Oppo', 0, 245000, 90000, 'Habis', 1, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(244, '19', 'sparepart', 'LCD OPPO F5 WHITE', 'Oppo', 0, 245000, 90000, 'Habis', 1, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(245, '20', 'sparepart', 'LCD OPPO F1 S / A59 WHITE', 'Oppo', 0, 180000, 87000, 'Habis', 1, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(246, '603', 'aksessoris', 'KABEL DATA H XIAOMI MICRO BLACK', 'Xiaomi', 0, 7000, 16000, 'Habis', 10, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(247, '885909627349', 'aksessoris', 'CHARGER H IPHONE 5/6/7/8/X 5W LIGHTNING TO USB', NULL, 0, 55000, 60000, 'Habis', 9, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(248, '201', 'sparepart', 'BATERAI H C11P1707 ASUS ZENFONE MAX M1 / ZB555KL', 'Asus', 0, 62000, 58000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(249, '202', 'sparepart', 'BATERAI H BLP729 OPPO REALME 5 / 5I', 'Oppo', 0, 65000, 65000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(250, '141', 'sparepart', 'BATERAI H BLP711 OPPO A1K', 'Oppo', 0, 69000, 61000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(251, '3', 'sparepart', 'BATERAI H BM42 XIAOMI REDMI NOTE', 'Xiaomi Redmi', 0, 40000, 42000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(252, '203', 'sparepart', 'BATERAI PRO B500AE SAMSUNG J110 / I9190 / J1 ACE / S4 MINI', 'Samsung', 3, 24000, 61000, 'Tersedia', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(253, '103', 'sparepart', 'FLEXIBLE ON OFF LENOVO A6600', 'Lenovo', 0, 5000, 18500, 'Habis', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(255, '21', 'sparepart', 'LCD VIVO Y71 WHITE', 'Vivo', 0, 235000, 90000, 'Habis', 1, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(256, '32', 'sparepart', 'BATERAI H BM33 XIAOMI MI4 I', 'Xiaomi Mi', 0, 50000, 57000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(257, '204', 'sparepart', 'BATERAI H LIS1546ERPC SONY C3', 'Sony', 0, 55000, 55000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(258, '205', 'sparepart', 'BATERAI H EBBA205ABN SAMSUNG A20', 'Samsung', 0, 65000, 65000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(259, '206', 'sparepart', 'BATERAI H IPHONE 6 PLUS', 'Iphone', 0, 75000, 65000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(260, '207', 'sparepart', 'BATERAI ORI99 EBBG530BBE', 'General', 0, 17500, 35000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(261, '208', 'sparepart', 'BATERAI CINA ADVAN S4F / S4K / S4F / S4K / S4X', 'Advan', 0, 28000, 32000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(262, '209', 'sparepart', 'BATERAI CINA ADVAN E1C / T1L', 'Advan', 0, 30000, 53000, 'Habis', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(263, '5', 'sparepart', 'BATERAI H BM47 XIAOMI REDMI 3 / 4X', 'Xiaomi Redmi', 5, 50000, 57000, 'Tersedia', 13, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(264, '3003', 'service', 'GANTI LCD A3S', 'Service ditunggu/tinggal', 9999, 300000, 150000, 'Tersedia', 20, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(265, '604', 'aksessoris', 'KABEL DATA GENAI CORN XM008', 'General Genai', 120, 6500, 10400, 'Tersedia', 10, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(266, '605', 'aksessoris', 'KABEL DATA GENAI CORN XM008 5PC', 'General Genai', 24, 31750, 25400, 'Tersedia', 10, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(267, '606', 'aksessoris', 'KABEL DATA GENAI CORN XM008 TOPLES', 'General Genai', 3, 247000, 61750, 'Tersedia', 10, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(268, '607', 'aksessoris', 'KABEL DATA GENAI CORN XA009 IPHONE 5/6/7/8/X', 'Iphone', 40, 11900, 16065, 'Tersedia', 10, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(269, '608', 'aksessoris', 'KABEL DATA GENAI CORN XA009 IPHONE 5/6/7/8/X 5PC', 'Iphone', 8, 59250, 56288, 'Tersedia', 10, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(270, '609', 'aksessoris', 'KABEL DATA GENAI CORN XA009 IPHONE 5/6/7/8/X TOPLES', 'Iphone', 1, 352000, 140800, 'Hampir Habis', 10, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(271, '703', 'aksessoris', 'HEADSET GENAI CORN EX003', 'General Genai', 40, 17000, 16320, 'Tersedia', 4, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(272, '704', 'aksessoris', 'HEADSET GENAI CORN EX003 5PC', 'General Genai', 8, 85000, 53550, 'Tersedia', 4, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(273, '6970855424044', 'aksessoris', 'HEADSET GENAI CORN EX003 TOPLES', 'General Genai', 2, 332000, 132800, 'Hampir Habis', 4, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(274, '6920081823166', 'sparepart', 'T/C CHARGER GENAI ZC60-5P MICRO', 'General Genai', 4, 29000, 25230, 'Tersedia', 9, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(275, '3004', 'service', 'JASA SERVICE', 'Service ditunggu/tinggal', 9999999, 1000, 138000, 'Tersedia', 20, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(276, '104', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 4 SMALL', 'Xiaomi Redmi', 1, 11000, 15400, 'Hampir Habis', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(277, '105', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 4X SMALL', 'Xiaomi Redmi', 1, 7500, 12000, 'Hampir Habis', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(278, '106', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 4 BIG', 'Xiaomi Redmi', 3, 8000, 12400, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(279, '107', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 4X BIG', 'Xiaomi Redmi', 4, 9250, 13875, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(280, '108', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 5 / NOTE 5 PRO', 'Xiaomi Redmi', 2, 12000, 15000, 'Hampir Habis', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(281, '109', 'sparepart', 'FLEXIBLE BOARD XIAOMI NOTE 2', 'Xiaomi Note', 2, 7500, 11250, 'Hampir Habis', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(282, '1010', 'sparepart', 'FLEXIBLE BOARD XIAOMI MI4C', 'Xiaomi Mi', 7, 13000, 16900, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(283, '1011', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI 5A', 'Xiaomi Redmi', -6993, 7000, 12950, 'Hampir Habis', 11, '2021-01-09 21:52:19', '2021-01-15 13:37:33'),
(284, '1012', 'sparepart', 'FLEXIBLE BOARD XIAOMI MI 5X / MI A1', 'Xiaomi Mi', 0, 13000, 16250, 'Habis', 11, '2021-01-09 21:52:19', '2021-01-16 05:50:51'),
(285, '1013', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 3G', 'Xiaomi Redmi', 4, 8000, 10400, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-17 13:31:09'),
(286, '1014', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 4G', 'Xiaomi Redmi', 4, 9500, 12350, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(287, '1015', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 5A', 'Xiaomi Redmi', 6, 7000, 10850, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(288, '1016', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 7', 'Xiaomi Redmi', 3, 5000, 16250, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(289, '1017', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI 7A', 'Xiaomi Redmi', 3, 8000, 10400, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(290, '1018', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI 4A', 'Xiaomi Redmi', 7, 7000, 12600, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(291, '1019', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 8', 'Xiaomi Redmi', 3, 8000, 16000, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(292, '1020', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI 4X', 'Xiaomi Redmi', 3, 7000, 12950, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(293, '1021', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI 6 / 6A', 'Xiaomi Redmi', 1, 7000, 12250, 'Hampir Habis', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(294, '1023', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI NOTE 3', 'Xiaomi Redmi', 2, 8000, 10800, 'Hampir Habis', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(295, '1024', 'sparepart', 'FLEXIBLE BOARD XIAOMI MI 4I', 'Xiaomi Mi', 2, 12500, 15000, 'Hampir Habis', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(296, '302', 'aksessoris', 'TEMPERED GLASS FULL XIAOMI REDMI 6 / 6A', 'Xiaomi Redmi', 19, 3500, 21000, 'Tersedia', 16, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(297, '303', 'aksessoris', 'TEMPERED GLASS FULL ALL TYPE 5PC', 'General', 1000, 17500, 65000, 'Tersedia', 16, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(298, '1022', 'sparepart', 'FLEXIBLE BOARD XIAOMI REDMI 3 / 3S', 'Xiaomi Redmi', 8, 7000, 14000, 'Tersedia', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(299, '1025', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI NOTE 3G', 'Xiaomi Redmi', 2, 3000, 15000, 'Hampir Habis', 11, '2021-01-09 21:52:19', '2021-01-09 21:52:19'),
(300, '1026', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI NOTE 3 / NOTE 3 PRO', 'Xiaomi Redmi', 4, 3750, 18750, 'Tersedia', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(301, '4001', 'sparepart', 'BUZZER OPPO A71', 'Oppo', 0, 8000, 28800, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(302, '1027', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI NOTE 4', 'Xiaomi Redmi', 4, 4000, 18000, 'Tersedia', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(303, '4002', 'sparepart', 'BUZZER OPPO F11', 'Oppo', 0, 10000, 23000, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(304, '4003', 'sparepart', 'BUZZER REALMI 3', 'Realme', 0, 10000, 23000, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(305, '1028', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI NOTE 4X', 'Xiaomi Redmi', 5, 3500, 17500, 'Tersedia', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(306, '4004', 'sparepart', 'BUZZER OPPO A83', 'Oppo', 0, 7000, 22500, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(307, '1030', 'sparepart', 'FLEXIBLE ON OFF XIAOMI REDMI NOTE 2', 'Xiaomi Redmi', 2, 3000, 18000, 'Hampir Habis', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(308, '4005', 'sparepart', 'BUZZER OPPO A37', 'Oppo', 0, 10000, 23000, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(309, '4006', 'sparepart', 'BUZZER OPPO A5 2020 / A9 2020', 'Oppo', 0, 8000, 28000, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(310, '1029', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI NOTE 4G', 'Xiaomi Redmi', 0, 3000, 18000, 'Habis', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(311, '4007', 'sparepart', 'BUZZER OPPO A5S', 'Oppo', 0, 7000, 31500, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(312, '4008', 'sparepart', 'BUZZER OPPO F1S / A59', 'Oppo', 0, 9000, 21500, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(313, '4009', 'sparepart', 'BUZZER REALMI C2 / OPPO A1K', 'Oppo', 0, 8500, 28500, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(314, '4009', 'sparepart', 'BUZZER REALMI C2 / OPPO A1K', 'Oppo', 0, 8500, 28500, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(315, '40010', 'sparepart', 'BUZZER OPPO A57 / OPPO A39', 'Oppo', 0, 8000, 24500, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(316, '40011', 'sparepart', 'BUZZER OPPO F11 PRO', 'Oppo', 0, 12000, 21500, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(317, '1031', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI NOTE 5A / NOTE 5A PRIME', 'Xiaomi Redmi', 2, 3000, 18900, 'Hampir Habis', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(318, '40012', 'sparepart', 'BUZZER OPPO A3S', 'Oppo', 0, 7000, 21000, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(319, '40013', 'sparepart', 'BUZZER OPPO F5 / A73', 'Oppo', 0, 9000, 337500, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(320, '40014', 'sparepart', 'BUZZER REALMI 2 / C1', 'Realme', 0, 9000, 22000, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(321, '1032', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI 7A', 'Xiaomi Redmi', 5, 7000, 20300, 'Tersedia', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(322, '40015', 'sparepart', 'BUZZER OPPO F9', 'Oppo', 0, 15000, 18000, 'Habis', 14, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(323, '1033', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI 6 / 6A', 'Xiaomi Redmi', 2, 4000, 20000, 'Hampir Habis', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(324, '1036', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI 4A', 'Xiaomi Redmi', 3, 3500, 17500, 'Tersedia', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(325, '1034', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI NOTE 5', 'Xiaomi Redmi', 3, 4000, 19000, 'Tersedia', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(326, '1035', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI 5 PLUS', 'Xiaomi Redmi', 2, 5000, 15000, 'Hampir Habis', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20');
INSERT INTO `produks` (`id`, `kode_barang`, `jenis_barang`, `nama_barang`, `tipe`, `stok`, `harga`, `harga_beli`, `keterangan`, `kategori_id`, `created_at`, `updated_at`) VALUES
(327, '1009', 'service', 'SERVIS FLEXIBLE ON OFF A83', 'Xiaomi Redmi', 47995, 4000, 27000, 'Tersedia', 20, '2021-01-09 21:52:20', '2021-01-17 15:36:08'),
(328, '1037', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI NOTE 7 / NOTE 8', 'Xiaomi Redmi', 6, 4750, 19000, 'Tersedia', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(329, '1038', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI S2', 'Xiaomi Redmi', 3, 5000, 18500, 'Tersedia', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(330, '1039', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI 4 PRO / 4 PRIME', 'Xiaomi Redmi', 4, 3500, 17500, 'Tersedia', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20'),
(331, '1040', 'sparepart', 'FLEXIBLE ON OFF VOL XIAOMI REDMI 4', 'Xiaomi Redmi', 0, 5000, 29500, 'Habis', 11, '2021-01-09 21:52:20', '2021-01-09 21:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `suplai_barangs`
--

CREATE TABLE `suplai_barangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `total_pembelian` bigint(20) NOT NULL,
  `harga_beli` bigint(20) NOT NULL,
  `produk_id` int(10) UNSIGNED DEFAULT NULL,
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama_supplier`, `alamat`, `no_telp`, `email`, `created_at`, `updated_at`) VALUES
(4, 'gadgetin', 'Widasari', '083874215189', 'rezkastore@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tokos`
--

CREATE TABLE `tokos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokos`
--

INSERT INTO `tokos` (`id`, `nama_toko`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Rezka Store', '087878787878', 'Jalan By Pass Widasari', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_barang` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `bayar` bigint(20) NOT NULL,
  `kembali` bigint(20) NOT NULL,
  `produk_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `daftar_pelanggan_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `kode_transaksi`, `total_barang`, `subtotal`, `bayar`, `kembali`, `produk_id`, `user_id`, `created_at`, `updated_at`, `daftar_pelanggan_id`) VALUES
(13, 'T10012021152434', 130000, 117000, 150000, 33000, 1, 1, '2021-01-10 08:25:09', '2021-01-10 08:25:09', 26),
(17, 'T10012021154154', 1, 204000, 210000, 6000, 327, 1, '2021-01-10 08:42:23', '2021-01-10 08:42:23', 71),
(38, 'T15012021203709', 1, 11500, 15000, 3500, 283, 1, '2021-01-15 13:37:33', '2021-01-15 13:37:33', 71),
(43, 'T16012021125026', 3, 35100, 40000, 4900, 284, 1, '2021-01-16 05:50:51', '2021-01-16 05:50:51', 48),
(47, 'T17012021203046', 1, 8000, 210000, 202000, 285, 1, '2021-01-17 13:31:09', '2021-01-17 13:31:09', NULL),
(62, 'T17012021210534', 1, 54000, 150000, 96000, 327, 1, '2021-01-17 14:05:50', '2021-01-17 14:05:50', 59),
(64, 'T17012021221733', 1, 63000, 150000, 87000, 113, 1, '2021-01-17 15:17:48', '2021-01-17 15:17:48', 59),
(68, 'T17012021223430', 3, 67500, 100000, 32500, 327, 1, '2021-01-17 15:36:08', '2021-01-17 15:36:08', 26);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'static/dist/img/avatar5.png',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('superadmin','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_user`, `foto`, `username`, `email`, `email_verified_at`, `password`, `alamat`, `no_telp`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Uswatun Hasana', 'static/dist/img/avatar5.png', 'admin', 'admin@gmail.com', NULL, '$2y$10$tTxpuvE9AbWRe5T1rwL4luje1YbiBtyPNGoNsZq4clZlumyYbyCie', 'jatibarang', '080932453235', 'superadmin', NULL, '2020-12-10 08:56:53', '2020-12-10 08:56:53'),
(6, 'Rezka Store', 'static/dist/img/avatar5.png', 'Kasircans', 'kasir@gmail.com', NULL, '$2y$10$y46ArR7BXQ0vIEiNod5RF.Q1iJbTx4mwzByYmQGIUniidBzYUoWzy', 'Jatibarang', '0877277717281', 'admin', NULL, NULL, NULL),
(8, 'Admin Admin', 'static/dist/img/avatar5.png', 'rezkastore', 'rezkastore@gmail.com', '2021-01-18 08:51:38', '$2y$10$4yK7pKzMdGd6nXZ/sdzNu.ttkKrlN5fZmLLutzWaglIJY0t4GcQWq', 'jatibarang', '0838899000001', 'superadmin', NULL, '2021-01-18 08:51:38', '2021-01-18 08:51:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pelanggans`
--
ALTER TABLE `daftar_pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftar_pelanggans_diskon_id_foreign` (`diskon_id`);

--
-- Indexes for table `diskons`
--
ALTER TABLE `diskons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `suplai_barangs`
--
ALTER TABLE `suplai_barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suplai_barangs_produk_id_foreign` (`produk_id`),
  ADD KEY `suplai_barangs_supplier_id_foreign` (`supplier_id`),
  ADD KEY `suplai_barangs_user_id_foreign` (`user_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`);

--
-- Indexes for table `tokos`
--
ALTER TABLE `tokos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_produk_id_foreign` (`produk_id`),
  ADD KEY `transaksis_user_id_foreign` (`user_id`),
  ADD KEY `transaksis_daftar_pelanggan_id_foreign` (`daftar_pelanggan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pelanggans`
--
ALTER TABLE `daftar_pelanggans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `diskons`
--
ALTER TABLE `diskons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT for table `suplai_barangs`
--
ALTER TABLE `suplai_barangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_pelanggans`
--
ALTER TABLE `daftar_pelanggans`
  ADD CONSTRAINT `daftar_pelanggans_diskon_id_foreign` FOREIGN KEY (`diskon_id`) REFERENCES `diskons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suplai_barangs`
--
ALTER TABLE `suplai_barangs`
  ADD CONSTRAINT `suplai_barangs_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suplai_barangs_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suplai_barangs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_daftar_pelanggan_id_foreign` FOREIGN KEY (`daftar_pelanggan_id`) REFERENCES `daftar_pelanggans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksis_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
