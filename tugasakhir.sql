-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 01, 2020 at 11:08 AM
-- Server version: 5.7.29
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('TERSEDIA','HABIS') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'TERSEDIA',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Makanan', 'makanan', 'https://images.unsplash.com/photo-1558467523-46113f1fcf72?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=889&q=80', 'TERSEDIA', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Cold Drinks', 'cold-drinks', 'https://images.unsplash.com/photo-1481671703460-040cb8a2d909?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80', 'TERSEDIA', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Camilan', 'camilan', 'https://images.unsplash.com/photo-1526865906320-0200a6e2c7f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=375&q=80', 'TERSEDIA', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Coffee', 'coffee', 'https://images.unsplash.com/photo-1497515114629-f71d768fd07c?ixlib=rb-1.2.1&auto=format&fit=crop&w=762&q=80', 'TERSEDIA', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Tea', 'tea', 'https://images.unsplash.com/photo-1521012012373-6a85bade18da?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80', 'TERSEDIA', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Chocolate', 'chocolate', 'https://images.unsplash.com/photo-1588329955273-2a615fde5913?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60', 'TERSEDIA', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE `category_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` enum('TERSEDIA','HABIS') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'TERSEDIA',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`id`, `menu_id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(211, 15, 1, 'TERSEDIA', NULL, NULL),
(212, 16, 1, 'TERSEDIA', NULL, NULL),
(213, 9, 2, 'TERSEDIA', NULL, NULL),
(214, 10, 2, 'TERSEDIA', NULL, NULL),
(215, 17, 2, 'TERSEDIA', NULL, NULL),
(216, 18, 2, 'TERSEDIA', NULL, NULL),
(217, 19, 2, 'TERSEDIA', NULL, NULL),
(218, 20, 2, 'TERSEDIA', NULL, NULL),
(219, 21, 2, 'TERSEDIA', NULL, NULL),
(220, 22, 2, 'TERSEDIA', NULL, NULL),
(221, 23, 2, 'TERSEDIA', NULL, NULL),
(222, 24, 2, 'TERSEDIA', NULL, NULL),
(223, 25, 2, 'TERSEDIA', NULL, NULL),
(224, 7, 3, 'TERSEDIA', NULL, NULL),
(225, 8, 3, 'TERSEDIA', NULL, NULL),
(226, 11, 3, 'TERSEDIA', NULL, NULL),
(227, 12, 3, 'TERSEDIA', NULL, NULL),
(228, 13, 3, 'TERSEDIA', NULL, NULL),
(229, 14, 3, 'TERSEDIA', NULL, NULL),
(230, 9, 4, 'TERSEDIA', NULL, NULL),
(231, 10, 4, 'TERSEDIA', NULL, NULL),
(232, 17, 5, 'TERSEDIA', NULL, NULL),
(233, 18, 5, 'TERSEDIA', NULL, NULL),
(234, 19, 6, 'TERSEDIA', NULL, NULL),
(235, 20, 6, 'TERSEDIA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `views` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` enum('TERSEDIA','HABIS') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'TERSEDIA',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `slug`, `description`, `cover`, `price`, `views`, `status`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `delete_by`) VALUES
(7, 'Roti Bakar', 'roti-bakar', 'Roti bakar yang disajikan dengan ciri khas yang diolesi dengan margarin yang berkualitas dan ditaburi deng keju mozarella', 'https://foodizz.id/blog/wp-content/uploads/2019/05/Roti-Bakar-Feature-Image.png', 10000.00, 40, 'TERSEDIA', NULL, '2020-06-30 14:30:56', NULL, NULL, NULL, NULL),
(8, 'Risoles', 'risoles', 'Pastri berisi daging, biasanya daging cincang, dan sayuran yang dibungkus dadar, dan digoreng setelah dilapisi tepung panir dan kocokan telur ayam', 'https://www.tokomesin.com/wp-content/uploads/2015/08/risoles-tokomesin.jpg', 6000.00, 1, 'TERSEDIA', NULL, '2020-06-26 11:37:08', NULL, NULL, NULL, NULL),
(9, 'Cappucino', 'cappucino', 'Minuman khas Italia yang terdiri dari 1/3 espresso, 1/3 susu steamed, dan 1/3 buih susu', 'https://img.kurio.network/x3DmOgRv9V16ZdWYT4gtRaYjS2s=/700x350/filters:quality(80):format(jpeg)/https://kurio-img.kurioapps.com/19/05/28/50de339f-7e20-4738-b9a4-a2ba49991add.jpg', 9000.00, 2, 'TERSEDIA', NULL, '2020-06-30 15:50:49', NULL, NULL, NULL, NULL),
(10, 'Moccacino', 'moccacino', 'Minuman yang terdiri dari bahan berupa susu, kopi dan cokelat. Kopi yang digunakan biasanya jenis espresso yaitu kopi hitam', 'https://images.unsplash.com/photo-1569564358211-b7dee0e568d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 9000.00, 14, 'TERSEDIA', NULL, '2020-06-27 10:56:47', NULL, NULL, NULL, NULL),
(11, 'French Fries', 'french-fries', 'potongan-potongan kentang berkualitas yang digoreng dalam minyak goreng panas', 'https://images.unsplash.com/photo-1491449347753-6b0223fb6931?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 5000.00, 1, 'TERSEDIA', NULL, '2020-06-23 05:12:55', NULL, NULL, NULL, NULL),
(12, 'Siomay', 'siomay', 'berbentuk bulat pihih dan diberi garnish bersupa telur kepiting, daging sapi, parutan wortel, dan kacang polong', 'https://images.unsplash.com/photo-1551638059-d1fb82606c4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 8000.00, 1, 'TERSEDIA', NULL, '2020-06-23 04:43:09', NULL, NULL, NULL, NULL),
(13, 'Nachos', 'nachos', ' Makanan dari Meksiko, keripik tortilla yang disiram dengan keju cair dan ditebari cabe jalapeno(cabe asli Meksiko)', 'https://images.unsplash.com/photo-1582169296194-e4d644c48063?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 10000.00, 0, 'TERSEDIA', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Chicken Fingers', 'chicken-fingers', 'hicken fingers adalah jenis ayam goreng yang amat popular yang disajikan potongan ayam tanpa tulang yang berkualitas', 'https://images.unsplash.com/photo-1548340748-6d2b7d7da280?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 10000.00, 1, 'TERSEDIA', NULL, '2020-06-23 05:13:22', NULL, NULL, NULL, NULL),
(15, 'Fried Rice', 'fried-rice', 'nasi yang digoreng dan diaduk dalam minyak goreng atau margarin, biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya, seperti telur, ayam, udang, dan kerupuk', 'https://images.unsplash.com/photo-1512058564366-18510be2db19?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 12000.00, 15, 'TERSEDIA', NULL, '2020-06-30 13:57:32', NULL, NULL, NULL, NULL),
(16, 'Fried Noodles', 'mie-goreng', 'Mi goreng merupakan salah satu masakan yang digemari oleh berbagai lapisan masyarakat, usia, dan jenis kelamin karena rasanya yang dapat diterima oleh kebanyakan orang yang disajikan dengan berbagai toping mulai dari ayam, sayur, dan udang', 'https://images.unsplash.com/photo-1585032226651-759b368d7246?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=897&q=80', 12000.00, 54, 'TERSEDIA', NULL, '2020-06-30 14:09:31', NULL, NULL, NULL, NULL),
(17, 'Black Tea', 'black-tea', 'Teh yang memiliki aroma dan rasa yang paling kuat , teh yang sangat berkualitas', 'https://images.unsplash.com/photo-1557928001-a3cb59b9036f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 8000.00, 3, 'TERSEDIA', NULL, '2020-06-27 10:39:56', NULL, NULL, NULL, NULL),
(18, 'Green Tea', 'green-tea', 'Teh yang dibuat dari daun tanaman teh (Camellia sinensis) yang dipetik dan mengalami proses pemanasan untuk mencegah oksidas', 'https://images.unsplash.com/photo-1547318114-eff5ea85ede9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80', 8000.00, 3, 'TERSEDIA', NULL, '2020-06-24 00:02:16', NULL, NULL, NULL, NULL),
(19, 'Chocolate Oreo', 'chocolate-oreo', '', 'https://images.unsplash.com/photo-1528740096961-3798add19cb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 9000.00, 2, 'TERSEDIA', NULL, '2020-06-30 15:45:12', NULL, NULL, NULL, NULL),
(20, 'Chocolate Cream', 'chocolate-cream', 'Minuman coklat yang dibuat dari coklat asli dan berkualitas yang dicampur dengan oreo, dan memiliki rasa yang sangat dapat mengobati sakit hati', 'https://images.unsplash.com/photo-1586985288206-3cdc4f67cd03?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 9000.00, 3, 'TERSEDIA', NULL, '2020-06-28 00:22:22', NULL, NULL, NULL, NULL),
(21, 'Strawberry Juice', 'strawberry-juice', 'Jus strawberry yang disajikan dari strawberry yang berkualitas dicampur dengan susu sapi pilihan', 'https://images.unsplash.com/photo-1589733955941-5eeaf752f6dd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80', 7000.00, 2, 'TERSEDIA', NULL, '2020-06-30 14:03:32', NULL, NULL, NULL, NULL),
(22, 'Orange Juice', 'orange-juice', 'Jus jeruk yang disajikan dari jeruk yang berkualitas dicampur dengan susu sapi pilihan', 'https://images.unsplash.com/photo-1556063230-aa38680c8142?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80', 7000.00, 2, 'TERSEDIA', NULL, '2020-06-30 15:50:34', NULL, NULL, NULL, NULL),
(23, 'Soda', 'soda', 'minuman bersoda yang menyegarkan pikiran dan dahaga dalam diri', 'https://images.unsplash.com/photo-1517959105821-eaf2591984ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80', 7500.00, 2, 'TERSEDIA', NULL, '2020-06-27 01:13:40', NULL, NULL, NULL, NULL),
(24, 'Cocktails', 'cocktails', 'Minuman bersoda yang dicampur dengan minuman atau bahan-bahan lain yang beraroma', 'https://images.unsplash.com/photo-1560963689-b5682b6440f8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 11000.00, 1, 'TERSEDIA', NULL, '2020-06-26 11:18:54', NULL, NULL, NULL, NULL),
(25, 'Avocado Juice', 'avocado-juice', 'Jus alpukat yang disajikan dari alpukat yang berkualitas dicampur dengan susu sapi dan coklat  pilihan', 'https://images.unsplash.com/photo-1543648973-1eb94629e7a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60', 8000.00, 2, 'TERSEDIA', NULL, '2020-06-30 13:57:15', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_category`
--

CREATE TABLE `menu_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2020_06_20_032734_create_menu_table', 1),
(11, '2020_06_20_034031_alter_users_table', 1),
(12, '2020_06_20_041046_create_categories_table', 1),
(13, '2020_06_20_041830_create_menu_category_table', 1),
(14, '2020_06_24_055119_adds_api_token_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `phone`, `avatar`, `status`, `api_token`) VALUES
(7, 'Diki Taufik G', 'dikitaufik@gmail.com', NULL, '$2y$10$X4PcZfKM6ETsPdR8dx2l5ubGaGs/nk4p0xod36h8YKKRevlwsAWgG', NULL, '2020-06-30 06:01:18', '2020-06-30 15:27:47', 'CUSTOMER', '082244004102', 'avatar/czUUtOiXNH8ki2jhWAd1jKYyRL3BfZ0BvwQveAU6.jpeg', 'ACTIVE', NULL),
(10, 'Diki Taufik Gurohman', 'taufikdiki11@gmail.com', NULL, '$2y$10$UDCkOIz6ngCCjJukJbzWpefE4rHIddWwmaYv8zsMJ.ublSdBKT1GW', NULL, '2020-06-30 15:28:30', '2020-06-30 15:28:30', '\"CUSTOMER\"', '082244004102', 'avatar/WOVm9SPdwZAgvmOkvebObMfD6xTuhZIFq7jxKzNk.jpeg', 'ACTIVE', '5Q9RlqUXHelmvzzRKWYsmclstRjaA1gzm90gzJFNEOxiI7CjL5w1Y8uKmp1H');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu_slug_unique` (`slug`);

--
-- Indexes for table `menu_category`
--
ALTER TABLE `menu_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_menu`
--
ALTER TABLE `category_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `menu_category`
--
ALTER TABLE `menu_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
