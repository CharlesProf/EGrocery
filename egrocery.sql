-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 02:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egrocery`
--

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
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `gender_desc`, `created_at`, `updated_at`) VALUES
(1, 'male', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(2, 'female', '2023-02-07 06:45:39', '2023-02-07 06:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `display_picture_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_desc`, `price`, `display_picture_link`, `created_at`, `updated_at`) VALUES
(1, 'Kol', 'Bagi Anda pecinta lalapan, tentu tak asing ya dengan sayuran jenis ini. Sayuran kol memang tetap nikmat meski dikonsumsi mentah.', 10000, 'img/kol.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(2, 'Brokoli', 'Meskipun berasal dari Italia, kini Anda dapat dengan mudah menemukan brokoli di pasaran. Brokoli memiliki bunga berwarna hijau.', 13000, 'img/brokoli.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(4, 'Kailan', 'Meskipun merupakan jenis sayuran baru yang hadir di Indonesia, tetapi kini kailan telah menjadi kegemaran bagi sebagian masyarakat. Bahkan kailan pun semakin banyak dibudidaya oleh petani. ', 9000, 'img/kailan.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(5, 'Daun Singkong', 'Sayuran hijau ini sangat mudah dijumpai di pasaran. Daun singkong merupakan salah satu jenis sayuran yang dapat diolah menjadi berbagai masakan sederhana. ', 5000, 'img/singkong.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(6, 'Bayam Hijau', 'Anda pasti sudah tidak asing lagi ya dengan sayuran yang satu ini? Bayam memang sangat mudah ditemukan dan diolah ke dalam aneka masakan. ', 6000, 'img/bayamhijau.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(7, 'Bayam Merah', 'Sebagian besar orang kini sudah banyak yang mengenali bayam merah. Namun, ternyata masih ada yang belum terbiasa mengonsumsinya.', 6000, 'img/bayammerah.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(8, 'Kangkung', 'Sama seperti bayam, kangkung juga termasuk sayuran yang sangat mudah ditemukan di pasaran. Kangkung juga dapat diolah menjadi aneka masakan.', 7000, 'img/kangkung.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(9, 'Kacang Panjang', 'Sayuran hijau yang banyak ditemukan di Indonesia berikutnya adalah kacang panjang. Biasanya kacang panjang sering dimasak dengan cara ditumis atau dibuat lalapan.', 9000, 'img/kacangpanjang.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(10, 'Buncis', 'Buncis merupakan sayuran hijau selanjutnya yang banyak dikonsumsi oleh masyarakat Indonesia, terutama diolah sebagai tumisan atau bahan lalapan.', 5000, 'img/buncis.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(11, 'Pare', 'Apakah Anda termasuk yang menghindari mengonsumsi sayuran hijau satu ini? Pare memang banyak dihindari karena memiliki rasa pahit. Tapi siapa sangka, ternyata pare cukup banyak digunakan dalam sajian kuliner Asia Tenggara, lho.', 10000, 'img/pare.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(12, 'Timun', 'Sayuran satu ini memiliki peranan yang cukup penting dalam sajian masakan. Karena selain dihidangkan sebagai lalapan atau campuran berbagai makanan, kini timun juga bisa menjadi salah satu bahan campuran membuat infused water.', 10000, 'img/timun.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(13, 'Seledri', 'Pemakaiannya sebagai sayuran tidak begitu banyak digunakan di Indonesia. Seledri masih banyak digunakan sebagai penyegar (seperti rempah-rempah) untuk membuat campuran bakmi, sop, dan makanan lainnya.', 5000, 'img/seledri.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(14, 'Labu Siam', 'Sayuran dengan bentuk seperti buah pir ini memang banyak dikonsumsi masyarakat Indonesia dan dijadikan lalapan ataupun sayur yang dimasak dengan santan.', 7000, 'img/labusiam.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(15, 'Kemangi', 'Seperti seledri, daun kemangi juga lebih banyak digunakan sebagai salah satu bahan rempah untuk mengharumkan masakan. Bahkan sayuran ini sering dijadikan sebagai lalapan khas Sunda yang disantap bersama ikan bakar atau ayam bakar.', 4000, 'img/kemangi.jpg', '2023-02-07 06:45:39', '2023-02-07 06:45:39');

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
(5, '2023_02_06_075804_create_roles_table', 1),
(6, '2023_02_06_075929_create_genders_table', 1),
(7, '2023_02_06_080032_create_orders_table', 1),
(8, '2023_02_06_080222_create_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-02-07 06:45:39', '2023-02-07 06:45:39'),
(2, 'user', '2023-02-07 06:45:39', '2023-02-07 06:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_picture_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `gender_id` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `display_picture_link`, `role_id`, `gender_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Carel', 'Surya', 'admin@gmail.com', 'profile/6lm705fhQw4NPswyvIMZMSNgKUKBpwmvAXXek1Ze.jpg', 1, 1, NULL, '$2y$10$cBxif3572G2rkDzFPdwZq.0PXKfwCCniMnBvK.xihky4Uj.0JWK3y', NULL, '2023-02-07 06:46:15', '2023-02-07 06:46:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
