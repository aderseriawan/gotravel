-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 01:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reads` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number_phone` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `travel_package_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `travel_package_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `images`, `travel_package_id`, `created_at`, `updated_at`) VALUES
(1, 'Kuta', 'travel_package/gallery/6KHVACx9o0K5kuYDZxRNh6w31pWHptOpv61h485G.jpg', 1, '2023-06-11 19:06:55', '2023-06-11 19:06:55'),
(2, 'Bunaken', 'travel_package/gallery/63h6PDMLgvYC2J7r5dUocvS0290j7mdH4BG9BL9o.jpg', 2, '2023-06-23 06:43:46', '2023-06-23 06:43:46'),
(3, 'Raja Ampat', 'travel_package/gallery/HVHXFERzhi63cbLpjK7pWSflxu9WTXuHSijWgkCb.jpg', 3, '2023-06-23 06:57:46', '2023-06-23 06:57:46'),
(4, 'Karimun Jawa', 'travel_package/gallery/s0ceMaL9wpvefQ6wb0lqVoHuCQCPYPtsWJ05lRFc.jpg', 4, '2023-06-23 06:59:55', '2023-06-23 06:59:55'),
(5, 'Taman Nasional Bromo Tengger Semeru', 'travel_package/gallery/XABBLBL5KuQhUhV0iZXFHEyYXIBN6lRvRa6PZesd.jpg', 5, '2023-06-23 07:02:11', '2023-06-23 07:02:11');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_28_050111_create_categories_table', 1),
(7, '2023_02_28_065501_create_travel_packages_table', 1),
(8, '2023_02_28_065908_create_blogs_table', 1),
(9, '2023_02_28_070324_create_bookings_table', 1),
(10, '2023_03_01_020708_create_galleries_table', 1),
(11, '2023_03_01_151237_add_reads_to_blogs_table', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `type`, `slug`, `location`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, '1B2C', 'bali-indonesia', 'Bali, Indonesia', 150000, '<p><br>Selamat datang di Bali, destinasi pariwisata yang penuh pesona! Terletak di Indonesia, Bali adalah pulau indah yang dikenal sebagai \"Pulau Dewata\". Dengan keindahan alam yang luar biasa, tradisi dan budaya yang kaya, serta keramahan penduduknya, Bali menjadi tujuan liburan yang sangat populer di seluruh dunia.</p><p>Bali menawarkan pantai-pantai yang memukau, dengan pasir putih halus, air laut yang jernih, dan ombak yang menarik bagi para penggemar olahraga air. Pantai Kuta, Sanur, dan Nusa Dua adalah beberapa destinasi populer yang menawarkan fasilitas lengkap, restoran, dan kegiatan menyenangkan di sepanjang garis pantai.</p><p>Selain pantai, Bali juga dikenal karena pemandangan alam yang memukau. Dari sawah-sawah hijau yang terasering di Ubud hingga lereng gunung yang menakjubkan di Gunung Batur, Anda akan terpesona oleh keindahan alam Bali. Air terjun Tegenungan dan Sekumpul adalah beberapa tempat yang wajib dikunjungi untuk menikmati keindahan alam pulau ini.</p><p>Selain keindahan alamnya, Bali juga terkenal dengan kebudayaan dan tradisi yang kaya. Setiap hari, Anda dapat melihat upacara keagamaan yang indah, seperti upacara kecil di rumah-rumah penduduk atau perayaan besar di pura-pura (kuil Hindu). Tari Barong, Kecak, dan Tari Kecak Api adalah pertunjukan seni yang populer di Bali yang menampilkan keindahan dan keunikannya.</p><p>Jangan lupa untuk mencoba masakan khas Bali yang lezat. Nasi campur, babi guling, dan lawar adalah beberapa hidangan yang wajib dicoba. Selain itu, jangan lewatkan pengalaman memanjakan diri di spa tradisional Bali yang menawarkan pijat dan perawatan tubuh yang relaksasi.</p><p>Tidak heran Bali sering disebut sebagai surga liburan. Dengan keindahan alamnya, tradisi dan budaya yang kuat, serta keramahan penduduknya, Bali adalah tempat yang sempurna untuk bersantai dan mengisi energi positif. Bergabunglah dengan kami dalam paket travel kami dan nikmati pengalaman tak terlupakan di Bali, pulau yang akan mencuri hati Anda.</p>', '2023-06-11 19:04:34', '2023-06-23 06:51:19'),
(2, '1A2B', 'teluk-manado-indonesia', 'Teluk Manado, Indonesia', 500000, '<p>Taman Nasional Bunaken terletak di Sulawesi Utara, tepatnya di Segitiga Terumbu Karang. Di kawasan ini, ada sekitar 390 spesies terumbu karang serta berbagai jenis ikan dan hewan laut. Banyak wisatawan datang ke Taman Laut Bunaken demi bisa menyaksikan habitat bawah laut ini dari dekat.</p><p>Aktivitas favorit selama berada di Taman Laut Bunaken adalah diving dan snorkeling. Bahkan, Bunaken disebut-sebut sebagai destinasi wisata menyelam terbaik di Indonesia. Spot yang paling disukai adalah Bunaken Timur Mandolin dan Puncak Barakuda. Jika tak ingin basah-basahan, manfaatkan fasilitas berupa perahu semi selam dengan dinding kaca.</p>', '2023-06-23 06:42:31', '2023-06-23 06:51:33'),
(3, '1A3B', 'raja-ampat-indonesia', 'Raja Ampat, Indonesia', 300000, '<p>Di Raja Ampat kamu bisa menyaksikan keindahan alam Indonesia yang masih permai dan alami ini. Meskipun cukup jauh di wilayah timur Indonesia, Raja Ampat selalu menjadi primadona bagi para wisatawan. Fasilitas yang tersedia di kawasan wisata ini pun sudah cukup lengkap dan nyaman.</p><p>Salah satu tempat menarik di Raja Ampat adalah Pianemo atau Painemu yang merupakan kawasan karst. Gugusan pulau karang ini tampak cantik membentang di laut sehingga sering dijuluki “surga kecil” di Tanah Papua. Ada juga yang disebut Laguna Bintang, yaitu laguna yang berbentuk seperti bintang dan memiliki air berwarna hijau toska. Laguna yang terbentuk secara alami ini bisa dinikmati secara utuh dari puncak bukit.</p><p>Berkunjung ke Raja Ampat juga tidak akan lengkap jika belum menginjakkan kaki di Arborek. Ini adalah sebuah pulau kecil di Raja Ampat yang memiliki pantai landai dengan arus air yang tenang.&nbsp;</p>', '2023-06-23 06:56:41', '2023-06-23 06:56:41'),
(4, '1A4B', 'karimun-jawa', 'Karimun Jawa', 700000, '<p>Terdiri dari 27 pulau tropis yang masih asli tersebar di sepanjang laut Jawa, Karimunjawa Nusantara adalah salah satu kabupaten di bawah Kabupaten Jepara Provinsi Jawa Tengah. Beberapa pulau dibentuk oleh terumbu karang dan ditutup dengan lapisan pasir. Pulau-pulau ini menyembunyikan berbagai potensi pesona keindahan alam, pegunungan, pasir putih pantai, dan dunia bawah laut. Taman Nasional Karimunjawa terletak sekitar 45 mil laut dari Jepara dan 80 mil laut dari Semarang.</p>', '2023-06-23 06:59:34', '2023-06-23 06:59:34'),
(5, '1A5B', 'taman-nasional-bromo-tengger-semeru', 'Taman Nasional Bromo Tengger Semeru', 600000, '<p>Taman Nasional Bromo Tengger Semeru terletak di Jawa Timur, Indonesia. Tempat wisata ini merupakan kawasan konservasi di Indonesia yang memiliki lautan pasir sepanjang 10 km yang disebut Tengger, dimana empat kerucut gunung berapi muncul.</p><p>Kerucut tersebut adalah Gunung Batok (2.470 m), Gunung Kursi (2.581 m), Gunung Watangan (2.661 m), dan Gunung Widodaren (2.650 m). Hamparan sabana yang luas dan semburan asap dari kawah menyajikan pemandangan alam yang mengagumkan.</p><p>Saat berkunjung ke tempat ini, jangan lewatkan panorama matahari terbit yang menakjubkan dengan kemegahan gunung. Untuk pilihan lainnya, wisatawan bisa menyaksikan indahnya matahari terbit dari Ranu Kumbolo, dimana matahari perlahan akan muncul dari lembah di antara kedua bukit tersebut.</p>', '2023-06-23 07:01:35', '2023-06-23 07:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$qp8Lu7UiNHDMpy42XK0QHO4JKkChgjFgmiJK5JUkfJYt95v4WiQuy', NULL, 1, '2023-06-11 00:07:59', '2023-06-11 00:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`),
  ADD KEY `blogs_reads_index` (`reads`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_travel_package_id_foreign` (`travel_package_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_travel_package_id_foreign` (`travel_package_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `travel_packages`
--
ALTER TABLE `travel_packages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `travel_packages_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_travel_package_id_foreign` FOREIGN KEY (`travel_package_id`) REFERENCES `travel_packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_travel_package_id_foreign` FOREIGN KEY (`travel_package_id`) REFERENCES `travel_packages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
