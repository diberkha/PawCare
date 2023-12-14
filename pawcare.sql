-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 08:06 PM
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
-- Database: `pawcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_klinik` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `complaint` text NOT NULL,
  `tanggal_jadwal` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `waktu_pembuatan` time NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `nama_klinik`, `user_id`, `kategori`, `jadwal`, `complaint`, `tanggal_jadwal`, `status`, `waktu_pembuatan`, `tanggal_pembuatan`, `created_at`, `updated_at`) VALUES
(2, 'Klinik Hewan KHJ Solo', 1, 'Dog', '08:00:00 - 10:00:00', 'Anjing Sakit Gigi', '2023-12-16', 'Approved', '01:19:00', '2023-12-14', '2023-12-13 18:19:00', '2023-12-13 18:19:00'),
(3, 'Klinik Hewan ADIKA', 1, 'Cat', '13:00:00 - 16:00:00', 'Kucing saya malas', '2023-12-23', 'Pending', '01:20:30', '2023-12-14', '2023-12-13 18:20:30', '2023-12-13 18:20:30');

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
-- Table structure for table `jam_praktik`
--

CREATE TABLE `jam_praktik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `klinik_id` bigint(20) UNSIGNED NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jam_praktik`
--

INSERT INTO `jam_praktik` (`id`, `klinik_id`, `mulai`, `selesai`, `created_at`, `updated_at`) VALUES
(1, 1, '08:00:00', '10:00:00', '2023-12-13 07:54:59', '2023-12-13 07:54:59'),
(2, 1, '11:00:00', '13:00:00', '2023-12-13 08:44:41', '2023-12-13 08:44:41'),
(3, 1, '14:00:00', '16:00:00', '2023-12-13 08:45:01', '2023-12-13 08:45:01'),
(4, 2, '09:00:00', '12:00:00', '2023-12-13 09:10:18', '2023-12-13 09:10:18'),
(5, 2, '13:00:00', '16:00:00', '2023-12-13 09:10:39', '2023-12-13 09:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `klinik`
--

CREATE TABLE `klinik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `rating` double(8,2) NOT NULL,
  `harga_rata2` bigint(20) NOT NULL,
  `patients` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klinik`
--

INSERT INTO `klinik` (`id`, `nama`, `alamat`, `profile`, `images`, `rating`, `harga_rata2`, `patients`, `created_at`, `updated_at`) VALUES
(1, 'Klinik Hewan KHJ Solo', 'Jl. Menteri Supeno No.7, Manahan, Banjarsari Regency, Surakarta City, Central Java 57139, Indonesia.', 'KHJ Solo Animal Clinic is dedicated to serving the community of Surakarta and its surroundings by providing healthcare services for beloved pets. Ready to serve with love and professionalism, we are open 24/7. KHJ Solo is equipped with comprehensive and modern facilities for animal health examinations, including examination rooms, procedure rooms, and a representative inpatient area. Our clinic offers a serene, clean, and pleasant environment. Additionally, KHJ Solo provides ample parking space and a dedicated ambulance for the pick-up and drop-off services for your beloved pets.', '1702473889.png', 4.50, 200000, 10000, '2023-12-12 12:05:02', '2023-12-13 06:24:49'),
(2, 'Klinik Hewan ADIKA', 'Jl. K.H Ahmad Dahlan No.52, Keprabon, Banjarsari District, Surakarta City, Central Java 57131, Indonesia.', 'Klinik Hewan ADIKA is a well-established veterinary clinic that provides comprehensive pet care services. Located in [lokasi], this clinic offers a wide range of veterinary services for various animals, including dogs, cats, birds, and exotic pets. With a team of experienced veterinarians and dedicated staff, Klinik Hewan ADIKA focuses on delivering high-quality medical treatment, preventive care, surgical procedures, vaccinations, and grooming services for pets. Their commitment to animal welfare and passion for providing excellent care has earned them a reputation for being a trusted and reliable veterinary clinic within the community.', '1702474988.png', 4.80, 159000, 3000, '2023-12-13 06:43:08', '2023-12-13 06:43:08');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_12_10_145455_create_pets_table', 1),
(11, '2023_12_12_174545_create_kliniks_table', 2),
(12, '2023_12_13_174545_create_kliniks_table', 3),
(13, '2023_12_13_174558_create_jam_praktiks_table', 3),
(14, '2023_12_14_174558_create_jam_praktiks_table', 4),
(15, '2023_12_13_173410_create_appointments_table', 5),
(16, '2023_12_14_173410_create_appointments_table', 6);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phoneNumber` bigint(20) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `country`, `phoneNumber`, `foto`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alfian Haris Sofyan', 'alfianharis032@gmail.com', 'admin', 'Indonesia', 82123123123, '1702483934.png', '2023-12-10 08:32:04', '$2y$12$ah7bl58L3V0/NDGZUzUp/uU3VxJS6IUuwZx0xPCTHXWvoAMMpPgP6', NULL, '2023-12-10 08:31:38', '2023-12-13 09:12:14'),
(2, 'Pian HS', 'alfianhsofyan7@gmail.com', 'user', 'Indonesia', 81098765432, NULL, '2023-12-13 18:48:58', '$2y$12$bjiS3TJeiVaalCbcSaGFEukXOMbY5lIxYwSAtNMVsSNwRb0smbf92', NULL, '2023-12-13 18:48:27', '2023-12-13 18:48:58'),
(3, 'fatkul', 'fatkul12@gmail.com', 'user', 'Indonesia', 8123456789, NULL, NULL, '$2y$12$qnszz07PpIR13xjT6kPWs.VUBSi8TnoWXiVCvQu2Oa4s526owXJUu', NULL, '2023-12-13 18:57:49', '2023-12-13 18:57:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jam_praktik`
--
ALTER TABLE `jam_praktik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jam_praktik_klinik_id_foreign` (`klinik_id`);

--
-- Indexes for table `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jam_praktik`
--
ALTER TABLE `jam_praktik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `klinik`
--
ALTER TABLE `klinik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jam_praktik`
--
ALTER TABLE `jam_praktik`
  ADD CONSTRAINT `jam_praktik_klinik_id_foreign` FOREIGN KEY (`klinik_id`) REFERENCES `klinik` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
