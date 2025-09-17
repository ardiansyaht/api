-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 17 Sep 2025 pada 05.36
-- Versi server: 10.4.22-MariaDB-log
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'YourAppName', 'bdd6296a41aa606205696909b1473810d3a00f84567eeafb0a0236add43ed9e2', '[\"*\"]', NULL, NULL, '2025-09-13 03:25:52', '2025-09-13 03:25:52'),
(2, 'App\\Models\\User', 10, 'YourAppName', '661094874262e3a0b90576d02d4573ec02267693fdb6039dd407a5819fdd08f5', '[\"*\"]', NULL, NULL, '2025-09-13 06:59:47', '2025-09-13 06:59:47'),
(3, 'App\\Models\\User', 2, 'YourAppName', 'acf355289c9339c11d207a0b73cd5873d5b468803b99aee5adbe42373d1c830a', '[\"*\"]', NULL, NULL, '2025-09-13 09:18:13', '2025-09-13 09:18:13'),
(4, 'App\\Models\\User', 19, 'YourAppName', '23ff65e12210acce1b2ff47af94a83c52f024fc18b31fa05cf5e94c35232fabf', '[\"*\"]', NULL, NULL, '2025-09-13 09:18:30', '2025-09-13 09:18:30'),
(5, 'App\\Models\\User', 19, 'YourAppName', '85e78bcfacbd2af5e6eacbff8b07c5d39057da11231099f1d30dba60d700e838', '[\"*\"]', NULL, NULL, '2025-09-13 09:41:01', '2025-09-13 09:41:01'),
(6, 'App\\Models\\User', 20, 'YourAppName', '368a744efcbdb64e59a6324355f9eb5922549c2deb01bc1d5f57b5352193c89c', '[\"*\"]', NULL, NULL, '2025-09-13 09:48:54', '2025-09-13 09:48:54'),
(7, 'App\\Models\\User', 20, 'YourAppName', 'a0d7e3c37356ab37f09d81daf82f416b17815c7c207a9dd4fdd934293414110b', '[\"*\"]', NULL, NULL, '2025-09-14 02:46:34', '2025-09-14 02:46:34'),
(8, 'App\\Models\\User', 21, 'YourAppName', '1549445bdd9e3611bf4d38e4498b8a481e6a0cbab7dd7bed9251b47f4762f0ef', '[\"*\"]', NULL, NULL, '2025-09-14 02:47:42', '2025-09-14 02:47:42'),
(9, 'App\\Models\\User', 22, 'YourAppName', '27326b42c3d31468db246dde64315c27c312e207b0ba3454f614c4bae959a7c7', '[\"*\"]', NULL, NULL, '2025-09-14 03:04:27', '2025-09-14 03:04:27'),
(10, 'App\\Models\\User', 22, 'YourAppName', 'd44360e6d6ec288b78c4fd79fa31d2b4da26904b3cd97f44fe87930a1593cc59', '[\"*\"]', NULL, NULL, '2025-09-14 03:04:41', '2025-09-14 03:04:41'),
(11, 'App\\Models\\User', 23, 'YourAppName', 'd30696219ceed1cc507ea5b5eefeea3a0fea5b9a2950d0c7b38b2b84f68d1af2', '[\"*\"]', NULL, NULL, '2025-09-14 03:06:29', '2025-09-14 03:06:29'),
(12, 'App\\Models\\User', 24, 'YourAppName', 'f293baa79fa4fa40fa0c715a6dacc35fa5ec841b368b94f0784ea807228b2f15', '[\"*\"]', NULL, NULL, '2025-09-14 03:18:44', '2025-09-14 03:18:44'),
(13, 'App\\Models\\User', 19, 'YourAppName', 'bd4e337af03c47916c120aee6b1fd445857bed0c86e748dd028c1372ecd93060', '[\"*\"]', NULL, NULL, '2025-09-14 03:19:48', '2025-09-14 03:19:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'user', 'user@exampel.com', '$2y$12$D41qsSY8HEJX1.PTBRpbgeLzmm.4wrueH6YjXLPT1ZI71/GM8pQVm', '2025-09-13 03:12:38', '2025-09-13 03:12:38', ''),
(2, 'user', 'user@example.com', '$2y$12$h8LeZyo2cx.xyAY//4pKeubQ3ktQRH1oc6r5FpkwFnjskjnVm7zim', '2025-09-13 03:21:25', '2025-09-13 03:21:25', ''),
(3, 'user1234', 'admin@gmail.com', '$2y$12$sWKyFYpafIexQDtzUk25tepa3X/PWL1sgcupbLuYdqRaDRJmNSEiO', '2025-09-13 03:52:25', '2025-09-13 03:52:25', ''),
(4, 'user1234', 'mimin@gmail.com', '$2y$12$bheEY/JRO7cPDu86kLRPKeKqTwTGQFxvBRlMNRSF7Nh5JjveZsZTS', '2025-09-13 03:55:40', '2025-09-13 03:55:40', ''),
(5, 'user1234', 'mimin1@gmail.com', '$2y$12$2SL6K9iPl9Rf8fSo8iAYuO0CPV3rIMWvo5LAjRud9k3v2cKpeHimS', '2025-09-13 03:57:17', '2025-09-13 03:57:17', ''),
(6, 'user1234', 'mimin3@gmail.com', '$2y$12$g65QHwfomXBLZY3sZHZXy.9/9kYuHwjdXJbgiYXIy/YY5QSEsqLiS', '2025-09-13 03:57:43', '2025-09-13 03:57:43', ''),
(7, 'user1234', 'mimin4@gmail.com', '$2y$12$aUT/Er5Qb6nl0RbWoarnGuKR92jKPOZBEn6AfNoEC1LF3inHhMkkK', '2025-09-13 04:01:00', '2025-09-13 04:01:00', ''),
(8, 'testing', 'mccalister2306@gmail.com', '$2y$12$o03giQN0iodz/PyXw74FMeBIkbMfTgx89Z4boEhSmaWfpMgGkS3fK', '2025-09-13 04:01:42', '2025-09-13 04:01:42', ''),
(9, 'testing', 'mccalister2316@gmail.com', '$2y$12$R2z3uFz/RKpCsSU5yuZZ9.f17gZxc3jklDZfBF79Jc9SeScStTYN2', '2025-09-13 04:03:29', '2025-09-13 04:03:29', ''),
(10, 'awda', 'mccalister236@gmail.com', '$2y$12$uM9FZUr9KRpSjsTX1nSzu.T49C5QM7r/tXhDr8.fwrWArZDkcEeI2', '2025-09-13 06:59:24', '2025-09-13 06:59:24', ''),
(11, 'bang al', 'mccalister306@gmail.com', '$2y$12$NJBcFV5eByeqqeZJwgFkt.5AUZJOHhI1beZcSW4Cw7nZ4NOSMTjtC', '2025-09-13 08:55:06', '2025-09-13 08:55:06', ''),
(12, 'bang al', 'mccalister206@gmail.com', '$2y$12$5ethk6k6Wk9cb/X7McoMDOJc1YJgvGPwXqAlpM9Ahv6i2rd99AxCm', '2025-09-13 08:58:15', '2025-09-13 08:58:15', ''),
(13, 'ciauw', 'jk@gmail.com', '$2y$12$/LkzFQcyWGw5j0brSmqzeedGAE1U0OpkZeHP3LPjL2UnjDCMgzSuq', '2025-09-13 08:58:41', '2025-09-13 08:58:41', ''),
(14, 'a', 'k@gmail.com', '$2y$12$StsbAN5JCiuKFFrMos.unOUEA5oIQWAQHoSA96RD9NX36XBLm3noK', '2025-09-13 09:02:15', '2025-09-13 09:02:15', ''),
(15, 'ciauw', 'jk1@gmail.com', '$2y$12$xBD.ptux2lqk8WISlTjKPuH2NNPodiNmCT5pfCRBUjbgASgra.fMy', '2025-09-13 09:05:49', '2025-09-13 09:05:49', ''),
(16, 'user1234', 'lo@gmail.com', '$2y$12$NxVWAM.toONKpZPXMLoCguUzRWUwjucOEnId.JOAIA3c3i9xjk/C.', '2025-09-13 09:07:33', '2025-09-13 09:07:33', ''),
(17, 'mangga', 'mangga@gmail.com', '$2y$12$hGk8YV/W/rZXCGwQ3PzmcOOcoKtA8cKSJcjsXqM3nICESrF2V5tgi', '2025-09-13 09:08:53', '2025-09-13 09:08:53', ''),
(18, 'polo', 'polo@gmail.com', '$2y$12$L9XNOREloGfrmciiSst9ZuIAZtgGr.vWm553hJB6DHzPMimE8S7te', '2025-09-13 09:13:08', '2025-09-13 09:13:08', ''),
(19, 'user', 'test@gmail.com', '$2y$12$rTI7ZEeBYVOp0Q8n2p8J/.W9HDJbDAV0wgpab4Knh1GbSLenX3dhO', '2025-09-13 09:14:35', '2025-09-13 09:14:35', ''),
(20, 'user', 'test1@gmail.com', '$2y$12$xX9BiKxeWxzPRUtW//Rje.eZH4QG5yCL9kXcy56kuolfmvdcV3EmG', '2025-09-13 09:48:38', '2025-09-13 09:48:38', ''),
(21, 'login', 'login@gmail.com', '$2y$12$SkFbCUJ.9WkrgyYRemzpsOR8F9i0lXufZLTVrJiUUhJAz8p/MyWCG', '2025-09-14 02:47:35', '2025-09-14 02:47:35', ''),
(22, 'ardi', 'ardiansyah3151@gmail.com', '$2y$12$LkeFE99oEpMyKM7f1j9cQORg1oEHXCC4EqNIv8ID/O5BU6y3Punpq', '2025-09-14 03:03:53', '2025-09-14 03:03:53', 'YWh4XfLAyvUcanbExBLmDyhyVClNnoKWSiLw3L7udwLGnxGiXXB9xauOoIcL'),
(23, 'admin', 'hiatushiatusx@gmail.com', '$2y$12$sJpLMqeX8ppH.P/n4WDJNOvrbLW7nuk9IIUpcKm6WQEkp1H.Fxw..', '2025-09-14 03:06:19', '2025-09-14 03:06:19', ''),
(24, 'bang al', 'antnjg2306@gmail.com', '$2y$12$DKBmFwq7TCiWUvez6cLXHOS3211PBfNyXlaj2y/0USw/mywUWZi9i', '2025-09-14 03:18:35', '2025-09-14 03:18:35', ''),
(25, 'admin', 'admin565@gmail.com', '$2y$12$qONYicPIIwaZ7E/w04iOROezhSCEN4odqI96wz1OfHpjNO7svGI0C', '2025-09-14 03:26:52', '2025-09-14 03:26:52', ''),
(26, 'user', 'test30@gmail.com', '$2y$12$HAxjmIQIn8p7wbyOUwmRD.2RzAi7tDmI9HrFXtn6EeD.SsVsiI.FO', '2025-09-14 09:47:28', '2025-09-14 09:47:28', NULL),
(27, 'user', 'test311@gmail.com', '$2y$12$8HLppTjw524JdcOXJnK8Sufw1nuVgz/7M7GmBZJBwMH2Mf2cxz1H2', '2025-09-14 10:01:13', '2025-09-14 10:01:13', NULL),
(28, 'ardhiansyah', 'ardiansyah1106@gmail.com', '$2y$12$CB78RSYjo44jFqT2RiUngOqb.Y1h6mGzdLhTXtA2c8ti1NGtousrm', '2025-09-14 14:30:18', '2025-09-14 14:30:18', NULL),
(29, 'user123', 'user1@gmail.com', '$2y$12$wulUa5GlJMAhHpBZG7A.HO/2ez6yGhV4OFUs0qp4U65v2RrWlvb.m', '2025-09-14 14:32:44', '2025-09-14 14:32:44', NULL),
(30, 'user56', 'user56@gmail.com', '$2y$12$0K824RYWASxc4KVqHMZ0euNj/agNzddLJegIq78NLoOBhGMB9l0Qy', '2025-09-14 20:53:27', '2025-09-14 20:53:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
