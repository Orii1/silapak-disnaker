-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2024 pada 08.03
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silakhi_v2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asset`
--

CREATE TABLE `asset` (
  `id_asset` bigint(20) UNSIGNED NOT NULL,
  `alur_perizinan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dasar_hukum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `durasi_pemrosesan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retribusi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maklumat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visi_misi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengecekan`
--

CREATE TABLE `detail_pengecekan` (
  `id_detail_pengecekan` bigint(20) UNSIGNED NOT NULL,
  `hasil_pengecekan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pengecekan`
--

INSERT INTO `detail_pengecekan` (`id_detail_pengecekan`, `hasil_pengecekan`, `id_pegawai`, `pesan`, `created_at`, `updated_at`) VALUES
(2, 'Dokumen Valid', 1, 'Dokumen lengkap', '2024-06-09 05:09:53', '2024-06-12 19:19:38'),
(3, 'Dokumen Tidak Valid', 1, 'Akta pendirian perusahaan salah', '2024-06-09 19:57:01', '2024-06-12 19:13:50'),
(4, 'Belum di Periksa', 2, NULL, '2024-06-10 04:39:16', '2024-06-10 04:39:16'),
(5, 'Dokumen Tidak Valid', 2, 'Fotocopy wlkp habis masa berlaku', '2024-06-10 04:41:00', '2024-06-13 22:49:32'),
(6, 'Dokumen Tidak Valid', 1, 'Fotocopy wlkp habis masa berlaku', '2024-06-10 05:02:56', '2024-06-11 21:26:18'),
(7, 'Dokumen Valid', 2, NULL, '2024-06-11 00:55:40', '2024-06-25 01:13:06'),
(8, 'Dokumen Valid', 2, 'Dokumen lengkap dan valid', '2024-06-13 04:33:09', '2024-06-13 04:39:30'),
(9, 'Dokumen Valid', 2, 'Dokumen Valid', '2024-06-13 22:39:11', '2024-06-25 03:53:24'),
(10, 'Dokumen Valid', 1, NULL, '2024-06-20 00:38:48', '2024-06-22 22:34:40'),
(11, 'Dokumen Valid', 2, NULL, '2024-06-22 22:55:22', '2024-06-25 04:02:00'),
(12, 'Belum di Periksa', 1, NULL, '2024-06-23 00:21:06', '2024-06-23 00:21:06'),
(13, 'Dokumen Valid', 2, NULL, '2024-06-24 23:22:57', '2024-06-25 04:13:23'),
(14, 'Dokumen Valid', 2, NULL, '2024-06-25 00:32:04', '2024-06-25 04:26:48'),
(15, 'Dokumen Valid', 2, NULL, '2024-06-25 00:34:38', '2024-06-25 04:50:51'),
(16, 'Belum di Periksa', 2, NULL, '2024-06-25 00:35:01', '2024-06-25 00:35:01'),
(17, 'Belum di Periksa', 2, NULL, '2024-06-25 00:35:49', '2024-06-25 00:35:49'),
(18, 'Belum di Periksa', 2, NULL, '2024-06-25 00:37:15', '2024-06-25 00:37:15'),
(19, 'Belum di Periksa', 2, NULL, '2024-06-25 00:37:35', '2024-06-25 00:37:35'),
(20, 'Dokumen Valid', 2, NULL, '2024-06-25 00:40:44', '2024-06-25 04:55:49'),
(21, 'Dokumen Valid', 2, NULL, '2024-06-25 00:41:25', '2024-06-25 05:08:13'),
(22, 'Dokumen Valid', 2, NULL, '2024-06-25 00:52:35', '2024-06-25 01:11:17'),
(23, 'Dokumen Valid', 2, NULL, '2024-06-25 03:52:34', '2024-06-25 03:52:59'),
(24, 'Belum di Periksa', 2, '', '2024-06-25 23:03:45', '2024-06-26 00:23:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_status`
--

CREATE TABLE `detail_status` (
  `id_detail_status` bigint(20) UNSIGNED NOT NULL,
  `id_status` bigint(20) UNSIGNED NOT NULL,
  `id_detail_pengecekan` bigint(20) UNSIGNED DEFAULT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_status`
--

INSERT INTO `detail_status` (`id_detail_status`, `id_status`, `id_detail_pengecekan`, `keterangan`, `sk`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Permohonan Sedang dicek oleh Mediator', NULL, '2024-05-31 19:51:37', '2024-06-09 19:57:01'),
(2, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-01 05:16:51', '2024-06-01 05:16:51'),
(3, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-01 05:17:45', '2024-06-01 05:17:45'),
(4, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-01 05:19:22', '2024-06-01 05:19:22'),
(5, 2, 11, 'SK sedang di tanda tangan', 'SK_PT Sinar Mas-pkb1719316920.pdf', '2024-06-01 05:19:42', '2024-06-25 04:02:01'),
(6, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-01 05:23:04', '2024-06-01 05:23:04'),
(7, 2, 13, 'SK sedang di tanda tangan', 'SK_PT Sinar Mas-pkwt1719317622.pdf', '2024-06-01 05:24:55', '2024-06-25 04:13:43'),
(8, 2, 12, 'Permohonan Sedang dicek oleh Mediator', NULL, '2024-06-01 05:26:02', '2024-06-23 00:21:06'),
(9, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-01 05:26:55', '2024-06-01 05:26:55'),
(10, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-01 05:27:22', '2024-06-01 05:27:22'),
(11, 2, 15, 'SK sedang di tanda tangan', 'SK_PT Sinar Mas-lks1719319851.pdf', '2024-06-01 05:27:49', '2024-06-25 04:50:51'),
(12, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-01 05:30:42', '2024-06-01 05:30:42'),
(13, 2, 20, 'SK sedang di tanda tangan', 'SK_PT Sinar Mas-hi1719320258.pdf', '2024-06-01 05:33:20', '2024-06-25 04:57:38'),
(14, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-01 05:37:40', '2024-06-01 05:37:40'),
(15, 2, 21, 'SK sedang di tanda tangan', 'SK_PT Sinar Mas-phk1719320893.pdf', '2024-06-01 05:40:41', '2024-06-25 05:08:14'),
(16, 2, 2, 'Permohonan Sedang dicek oleh Mediator', NULL, '2024-06-09 04:36:08', '2024-06-09 05:09:53'),
(17, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-10 04:37:11', '2024-06-10 04:37:11'),
(18, 2, 5, 'Permohonan Selesai di Periksa', NULL, '2024-06-10 04:38:11', '2024-06-13 22:49:32'),
(19, 2, 6, 'Permohonan Sedang dicek oleh Mediator', NULL, '2024-06-10 05:02:22', '2024-06-10 05:02:56'),
(20, 2, 7, 'SK sedang di tanda tangan', 'SK_PT Sinar Mas-pp1719306786.pdf', '2024-06-11 00:51:35', '2024-06-25 01:13:07'),
(21, 2, 8, 'Permohonan Selesai di Periksa', NULL, '2024-06-13 04:32:43', '2024-06-13 04:39:30'),
(22, 2, 9, 'SK sedang di tanda tangan', 'SK_PT Sinar Mas-pp1719316404.pdf', '2024-06-13 22:38:22', '2024-06-25 03:53:24'),
(23, 2, 10, 'SK sedang di tanda tangan', 'SK_PT Sinar Mas-pp1719124480.pdf', '2024-06-20 00:38:18', '2024-06-22 22:34:41'),
(24, 1, NULL, 'Menunggu Konfirmasi Admin', NULL, '2024-06-23 00:22:18', '2024-06-23 00:22:18'),
(25, 2, 14, 'SK sedang di tanda tangan', 'SK_PT Sinar Mas-spsb1719318408.pdf', '2024-06-23 00:23:09', '2024-06-25 04:26:49'),
(26, 2, 22, 'SK sedang di tanda tangan', 'SK_PT Masinndo-pp1719306679.pdf', '2024-06-25 00:51:56', '2024-06-25 01:11:21'),
(27, 2, 23, 'SK sedang di tanda tangan', 'SK_PT Masinndo-pp1719316379.pdf', '2024-06-25 03:52:11', '2024-06-25 03:53:00'),
(28, 2, 24, 'Permohonan Sedang dicek oleh Mediator', NULL, '2024-06-25 23:02:54', '2024-06-26 00:23:39');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_07_055058_create_roles_table', 1),
(6, '2024_05_07_055438_add_column_role_id_to_users_table', 1),
(7, '2024_05_07_060633_create_tipe_perusahaan_table', 1),
(8, '2024_05_07_061427_create_status_perusahaan_table', 1),
(9, '2024_05_07_061530_create_modal_table', 1),
(10, '2024_05_07_062015_create_perusahaan_table', 1),
(11, '2024_05_07_063400_create_pegawai_table', 1),
(12, '2024_05_10_104901_create_status_table', 1),
(13, '2024_05_10_105050_create_detail_pengecekan_table', 1),
(14, '2024_05_10_105528_create_detail_status_table', 1),
(15, '2024_05_10_110041_create_pengesahan_pp_table', 1),
(16, '2024_05_12_045141_create_pendaftaran_pkb_table', 1),
(17, '2024_05_12_045612_create_pendaftaran_pkwt_table', 1),
(18, '2024_05_14_032139_create_pencatatan_spsb_table', 1),
(19, '2024_05_14_032346_create_pencatatan_lks_bipartit_table', 1),
(20, '2024_05_14_032520_create_pencatatan_penyelasaian_hi_table', 1),
(21, '2024_05_14_032630_create_pelaporan_phk_table', 1),
(22, '2024_05_14_033031_create_asset_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `modal`
--

CREATE TABLE `modal` (
  `id_modal` bigint(20) UNSIGNED NOT NULL,
  `nama_modal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `modal`
--

INSERT INTO `modal` (`id_modal`, `nama_modal`, `created_at`, `updated_at`) VALUES
(1, 'Perorangan', NULL, NULL),
(2, 'Swasta Nasional', NULL, NULL),
(3, 'BUMN', NULL, NULL),
(4, 'BUMD', NULL, NULL),
(5, 'PMA', NULL, NULL),
(6, 'PMDN', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_user`, `nip`, `nama_pegawai`, `jabatan`, `jenis_kelamin`, `agama`, `created_at`, `updated_at`) VALUES
(1, 2, '123456789', 'Muhammad Fariz Anshori', 'Mediator HI', 'L', 'Islam', NULL, NULL),
(2, 3, '232422543', 'Amiruddin Anshori', 'Mediator HI', 'L', 'Islam', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaporan_phk`
--

CREATE TABLE `pelaporan_phk` (
  `id_phk` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `peruntukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan_pelaporan_phk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pemberitahuan_phk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_tanggapan_pemberitahuan_phk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pb_bipartit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_detail_status` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelaporan_phk`
--

INSERT INTO `pelaporan_phk` (`id_phk`, `id_perusahaan`, `peruntukan`, `permohonan_pelaporan_phk`, `surat_pemberitahuan_phk`, `surat_tanggapan_pemberitahuan_phk`, `pb_bipartit`, `id_detail_status`, `created_at`, `updated_at`) VALUES
(1, 12, 'Pelaporan PHK', '12permohonan_pelaporan_phk-phk1717249060.pdf', '12surat_pemberitahuan_phk-phk1717249060.pdf', '12surat_tanggapan_pemberitahuan_phk-phk1717249060.pdf', '12pb_bipartit-phk1717249060.pdf', 14, '2024-06-01 05:37:40', '2024-06-01 05:37:40'),
(2, 12, 'Pelaporan PHK', '12permohonan_pelaporan_phk-phk1717249241.pdf', '12surat_pemberitahuan_phk-phk1717249241.pdf', '12surat_tanggapan_pemberitahuan_phk-phk1717249241.pdf', '12pb_bipartit-phk1717249241.pdf', 15, '2024-06-01 05:40:41', '2024-06-01 05:40:41'),
(3, 13, 'Pelaporan PHK', '17permohonan_pelaporan_phk-phk1719390219.png', '17surat_pemberitahuan_phk-phk1719390219.png', '17surat_tanggapan_pemberitahuan_phk-phk1719390219.png', '17pb_bipartit-phk1719390219.png', 28, '2024-06-25 23:02:54', '2024-06-26 00:23:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencatatan_lks_bipartit`
--

CREATE TABLE `pencatatan_lks_bipartit` (
  `id_lks` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `peruntukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan_pencatatan_lks_bipartit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_susunan_pengurus_lks_bipartit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_acara_pembentukan_lks_bipartit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fc_wlkp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_detail_status` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pencatatan_lks_bipartit`
--

INSERT INTO `pencatatan_lks_bipartit` (`id_lks`, `id_perusahaan`, `peruntukan`, `permohonan_pencatatan_lks_bipartit`, `daftar_susunan_pengurus_lks_bipartit`, `berita_acara_pembentukan_lks_bipartit`, `fc_wlkp`, `id_detail_status`, `created_at`, `updated_at`) VALUES
(1, 12, 'Pencatatan LKS Bipartit', '12permohonan_pencatatan_lks_bipartit-lks1717248469.pdf', '12daftar_susunan_pengurus_lks_bipartit-lks1717248469.pdf', '12berita_acara_pembentukan_lks_bipartit-lks1717248469.pdf', '12fc_wlkp-lks1717248469.jpg', 11, '2024-06-01 05:27:49', '2024-06-01 05:27:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencatatan_penyelasaian_hi`
--

CREATE TABLE `pencatatan_penyelasaian_hi` (
  `id_hi` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `peruntukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan_pencatatan_pphi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permintaan_perundingan_bipartit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_hadir_perundingan_bipartit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `risalah_perundingan_bipartit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_detail_status` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pencatatan_penyelasaian_hi`
--

INSERT INTO `pencatatan_penyelasaian_hi` (`id_hi`, `id_perusahaan`, `peruntukan`, `permohonan_pencatatan_pphi`, `surat_permintaan_perundingan_bipartit`, `daftar_hadir_perundingan_bipartit`, `risalah_perundingan_bipartit`, `id_detail_status`, `created_at`, `updated_at`) VALUES
(1, 12, 'Permintaan Fasilitasi Bipartit', '12permohonan_pencatatan_pphi-perselisihan_hi1717248800.pdf', '12surat_permintaan_perundingan_bipartit-perselisihan_hi1717248800.pdf', '12daftar_hadir_perundingan_bipartit-perselisihan_hi1717248800.pdf', '12risalah_perundingan_bipartit-perselisihan_hi1717248800.pdf', 13, '2024-06-01 05:33:20', '2024-06-01 05:33:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencatatan_spsb`
--

CREATE TABLE `pencatatan_spsb` (
  `id_spsb` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `peruntukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_art` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pembentuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengurus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ba_pembentukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_detail_status` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pencatatan_spsb`
--

INSERT INTO `pencatatan_spsb` (`id_spsb`, `id_perusahaan`, `peruntukan`, `surat_permohonan`, `ad_art`, `nama_pembentuk`, `nama_pengurus`, `ba_pembentukan`, `id_detail_status`, `created_at`, `updated_at`) VALUES
(1, 12, 'Pencatatan/Pemberitahuan SP/SB', '12surat_permohonan-spsb1717248361.pdf', '12ad_art-spsb1717248362.pdf', '12nama_pembentuk-spsb1717248362.pdf', '12nama_pengurus-spsb1717248362.pdf', '12ba_pembentukan-spsb1717248362.pdf', 8, '2024-06-01 05:26:02', '2024-06-01 05:26:02'),
(2, 12, 'Pemberitahuan Penerimaan Bantuan Keuangan dari LN', '12surat_permohonan-spsb1719130989.png', '12ad_art-spsb1719130989.png', '12nama_pembentuk-spsb1719130989.png', '12nama_pengurus-spsb1719130989.png', '12ba_pembentukan-spsb1719130989.png', 25, '2024-06-23 00:23:09', '2024-06-23 00:23:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_pkb`
--

CREATE TABLE `pendaftaran_pkb` (
  `id_pkb` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `peruntukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fc_wlkp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fc_akta_pendirian_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fc_setifikat_peserta_bpjs_ketenagakerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan_pendaftaran_pkb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pernyataan_struktur_skala_upah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `struktur_skala_upah_asli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `draft_pkb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_detail_status` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran_pkb`
--

INSERT INTO `pendaftaran_pkb` (`id_pkb`, `id_perusahaan`, `peruntukan`, `fc_wlkp`, `fc_akta_pendirian_perusahaan`, `fc_setifikat_peserta_bpjs_ketenagakerjaan`, `permohonan_pendaftaran_pkb`, `surat_pernyataan_struktur_skala_upah`, `struktur_skala_upah_asli`, `draft_pkb`, `id_detail_status`, `created_at`, `updated_at`) VALUES
(1, 12, 'Pendaftaran PKB', '12fc_wlkp-pkb1717247982.pdf', '12fc_akta_pendirian_perusahaan-pkb1717247982.pdf', '12fc_setifikat_peserta_bpjs_ketenagakerjaan-pkb1717247982.pdf', '12permohonan_pendaftaran_pkb-pkb1717247982.pdf', '12surat_pernyataan_struktur_skala_upah-pkb1717247982.pdf', '12struktur_skala_upah_asli-pkb1717247982.pdf', '12draft_pkb-pkb1717247982.pdf', 5, '2024-06-01 05:19:42', '2024-06-01 05:19:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_pkwt`
--

CREATE TABLE `pendaftaran_pkwt` (
  `id_pkwt` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `peruntukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `srt_permohonan_pencatatan_pkwt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_nama_pekerja_pkwt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkwt_asli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fc_wlkp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fc_akta_pendirian_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_detail_status` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftaran_pkwt`
--

INSERT INTO `pendaftaran_pkwt` (`id_pkwt`, `id_perusahaan`, `peruntukan`, `srt_permohonan_pencatatan_pkwt`, `daftar_nama_pekerja_pkwt`, `pkwt_asli`, `fc_wlkp`, `fc_akta_pendirian_perusahaan`, `id_detail_status`, `created_at`, `updated_at`) VALUES
(1, 12, 'Pencatatan PKWT', '12srt_permohonan_pencatatan_pkwt-pkwt1717248295.pdf', '12daftar_nama_pekerja_pkwt-pkwt1717248295.pdf', '12pkwt_asli-pkwt1717248295.pdf', '12fc_wlkp-pkwt1717248295.pdf', '12fc_akta_pendirian_perusahaan-pkwt1717248295.pdf', 7, '2024-06-01 05:24:55', '2024-06-01 05:24:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengesahan_pp`
--

CREATE TABLE `pengesahan_pp` (
  `id_pp` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `peruntukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fc_wlkp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fc_akta_pendirian_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fc_sertifikat_peserta_bpjs_ketenagakerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan_pengesahan_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pernyataan_saran_spsb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pernyataan_belum_terbentuk_spsb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pernyataan_struktur_skala_upah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `struktur_skala_upah_asli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `draft_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_detail_status` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengesahan_pp`
--

INSERT INTO `pengesahan_pp` (`id_pp`, `id_perusahaan`, `peruntukan`, `fc_wlkp`, `fc_akta_pendirian_perusahaan`, `fc_sertifikat_peserta_bpjs_ketenagakerjaan`, `permohonan_pengesahan_pp`, `surat_pernyataan_saran_spsb`, `surat_pernyataan_belum_terbentuk_spsb`, `surat_pernyataan_struktur_skala_upah`, `struktur_skala_upah_asli`, `draft_pp`, `id_detail_status`, `created_at`, `updated_at`) VALUES
(1, 12, 'Pembaharuan Peraturan Perusahaan (PP)', '12fc_wlkp-pp1717213897.pdf', '12fc_akta_pendirian_perusahaan-pp1717213897.pdf', '12fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1717213897.pdf', '12permohonan_pengesahan_pp-pp1717213897.pdf', '12surat_pernyataan_saran_spsb-pp1717213897.pdf', '12surat_pernyataan_belum_terbentuk_spsb-pp1717213897.pdf', '12surat_pernyataan_struktur_skala_upah-pp1717213897.pdf', '12struktur_skala_upah_asli-pp1717213897.pdf', '12draft_pp-pp1717213897.pdf', 1, '2024-05-31 19:51:37', '2024-05-31 19:51:37'),
(2, 12, 'Pengesahan Baru Peraturan Perusahaan (PP)', '12fc_wlkp-pp1717936567.pdf', '12fc_akta_pendirian_perusahaan-pp1717936568.pdf', '12fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1717936568.pdf', '12permohonan_pengesahan_pp-pp1717936568.pdf', '12surat_pernyataan_saran_spsb-pp1717936568.pdf', '12surat_pernyataan_belum_terbentuk_spsb-pp1717936568.pdf', '12surat_pernyataan_struktur_skala_upah-pp1717936568.pdf', '12struktur_skala_upah_asli-pp1717936568.pdf', '12draft_pp-pp1717936568.pdf', 16, '2024-06-09 04:36:08', '2024-06-09 04:36:08'),
(3, 12, 'Pengesahan Baru Peraturan Perusahaan (PP)', '12fc_wlkp-pp1718023091.pdf', '12fc_akta_pendirian_perusahaan-pp1718023091.pdf', '12fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1718023091.pdf', '12permohonan_pengesahan_pp-pp1718023091.pdf', '12surat_pernyataan_saran_spsb-pp1718023091.pdf', '12surat_pernyataan_belum_terbentuk_spsb-pp1718023091.pdf', '12surat_pernyataan_struktur_skala_upah-pp1718023091.pdf', '12struktur_skala_upah_asli-pp1718023091.pdf', '12draft_pp-pp1718023091.pdf', 18, '2024-06-10 04:38:11', '2024-06-10 04:38:11'),
(4, 12, 'Pengesahan Baru Peraturan Perusahaan (PP)', '12fc_wlkp-pp1718024542.pdf', '12fc_akta_pendirian_perusahaan-pp1718024542.pdf', '12fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1718024542.pdf', '12permohonan_pengesahan_pp-pp1718024542.pdf', '12surat_pernyataan_saran_spsb-pp1718024542.pdf', '12surat_pernyataan_belum_terbentuk_spsb-pp1718024542.pdf', '12surat_pernyataan_struktur_skala_upah-pp1718024542.pdf', '12struktur_skala_upah_asli-pp1718024542.pdf', '12draft_pp-pp1718024542.pdf', 19, '2024-06-10 05:02:22', '2024-06-10 05:02:22'),
(5, 12, 'Pengesahan Baru Peraturan Perusahaan (PP)', '12fc_wlkp-pp1718095894.pdf', '12fc_akta_pendirian_perusahaan-pp1718095895.pdf', '12fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1718095895.pdf', '12permohonan_pengesahan_pp-pp1718095895.pdf', '12surat_pernyataan_saran_spsb-pp1718095895.pdf', '12surat_pernyataan_belum_terbentuk_spsb-pp1718095895.pdf', '12surat_pernyataan_struktur_skala_upah-pp1718095895.pdf', '12struktur_skala_upah_asli-pp1718095895.pdf', '12draft_pp-pp1718095895.pdf', 20, '2024-06-11 00:51:35', '2024-06-11 00:51:35'),
(6, 13, 'Perpanjangan Peraturan Perusahaan (PP)', '13fc_wlkp-pp1718281963.pdf', '13fc_akta_pendirian_perusahaan-pp1718281963.pdf', '13fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1718281963.pdf', '13permohonan_pengesahan_pp-pp1718281963.pdf', '13surat_pernyataan_saran_spsb-pp1718281963.pdf', '13surat_pernyataan_belum_terbentuk_spsb-pp1718281963.pdf', '13surat_pernyataan_struktur_skala_upah-pp1718281963.pdf', '13struktur_skala_upah_asli-pp1718281963.pdf', '13draft_pp-pp1718281963.pdf', 21, '2024-06-13 04:32:43', '2024-06-13 04:32:43'),
(7, 12, 'Pengesahan Baru Peraturan Perusahaan (PP)', '12fc_wlkp-pp1718347101.pdf', '12fc_akta_pendirian_perusahaan-pp1718347102.pdf', '12fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1718347102.pdf', '12permohonan_pengesahan_pp-pp1718347102.pdf', '12surat_pernyataan_saran_spsb-pp1718347102.pdf', '12surat_pernyataan_belum_terbentuk_spsb-pp1718347102.pdf', '12surat_pernyataan_struktur_skala_upah-pp1718347102.pdf', '12struktur_skala_upah_asli-pp1718347102.pdf', '12draft_pp-pp1718347102.pdf', 22, '2024-06-13 22:38:22', '2024-06-13 22:38:22'),
(8, 12, 'Pengesahan Baru Peraturan Perusahaan (PP)', '12fc_wlkp-pp1718872698.pdf', '12fc_akta_pendirian_perusahaan-pp1718872698.pdf', '12fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1718872698.pdf', '12permohonan_pengesahan_pp-pp1718872698.pdf', '12surat_pernyataan_saran_spsb-pp1718872698.pdf', '12surat_pernyataan_belum_terbentuk_spsb-pp1718872698.pdf', '12surat_pernyataan_struktur_skala_upah-pp1718872698.pdf', '12struktur_skala_upah_asli-pp1718872698.pdf', '12draft_pp-pp1718872698.pdf', 23, '2024-06-20 00:38:18', '2024-06-20 00:38:18'),
(9, 13, 'Pengesahan Baru Peraturan Perusahaan (PP)', '13fc_wlkp-pp1719305515.png', '13fc_akta_pendirian_perusahaan-pp1719305516.png', '13fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1719305516.png', '13permohonan_pengesahan_pp-pp1719305516.png', '13surat_pernyataan_saran_spsb-pp1719305516.png', '13surat_pernyataan_belum_terbentuk_spsb-pp1719305516.png', '13surat_pernyataan_struktur_skala_upah-pp1719305516.png', '13struktur_skala_upah_asli-pp1719305516.png', '13draft_pp-pp1719305516.png', 26, '2024-06-25 00:51:56', '2024-06-25 00:51:56'),
(10, 13, 'Pengesahan Baru Peraturan Perusahaan (PP)', '13fc_wlkp-pp1719316331.png', '13fc_akta_pendirian_perusahaan-pp1719316331.png', '13fc_sertifikat_peserta_bpjs_ketenagakerjaan-pp1719316331.png', '13permohonan_pengesahan_pp-pp1719316331.png', '13surat_pernyataan_saran_spsb-pp1719316331.png', '13surat_pernyataan_belum_terbentuk_spsb-pp1719316331.png', '13surat_pernyataan_struktur_skala_upah-pp1719316331.png', '13struktur_skala_upah_asli-pp1719316331.png', '13draft_pp-pp1719316331.png', 27, '2024-06-25 03:52:11', '2024-06-25 03:52:11');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_tipe_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `sektor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_status_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `id_modal` bigint(20) UNSIGNED NOT NULL,
  `nomor_surat_izin_usaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat_izin_usaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laki_laki` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perempuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pkwt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outsourcing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wna` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_bpjs_ketenagakerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_bpjs_kesehatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longtitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `id_user`, `nama_perusahaan`, `alamat`, `pemilik`, `id_tipe_perusahaan`, `sektor`, `id_status_perusahaan`, `id_modal`, `nomor_surat_izin_usaha`, `tgl_surat_izin_usaha`, `laki_laki`, `perempuan`, `pkwt`, `outsourcing`, `wna`, `no_bpjs_ketenagakerjaan`, `no_bpjs_kesehatan`, `latitude`, `longtitude`, `created_at`, `updated_at`) VALUES
(12, 16, 'PT Sinar Mas', 'Jalan Sukarelawan', 'Orii', 2, 'Pertambangan', 2, 5, '213123', '2024-05-14', '20', '10', '10', '10', '10', '1232132', '3213213', '-3.4440873', '114.8128364', '2024-05-28 05:43:06', '2024-06-25 20:41:19'),
(13, 17, 'PT Masinndo', 'Jalan Sukarelawan', 'Orii', 3, 'Pertambangan', 2, 2, '213123', '2024-05-08', '20', '10', '10', '10', '10', '1232132', '3213213', '-3.44064', '114.8125184', '2024-05-28 22:04:58', '2024-06-26 07:28:07'),
(14, 18, 'PT Masinndo', 'Jalan Sukarelawan', 'Orii', 2, 'Pertambangan', 1, 1, '213123', '2024-05-01', '20', '10', '10', '10', '10', '1232132', '3213213', '-3.2955286', '114.5822921', '2024-05-28 23:43:17', '2024-05-28 23:43:17'),
(15, 19, 'PT Trakindo', 'Jalan Sukarelawan', 'Fariz', 1, 'Pertambangan', 1, 3, '213123', '2024-06-01', '20', '10', '10', '10', '10', '1232132', '3213213', '-3.4799616', '114.8420096', '2024-06-10 05:07:39', '2024-06-10 05:07:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id_role`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Mediator HI', NULL, NULL),
(3, 'Kepala Bidang', NULL, NULL),
(4, 'Perusahaan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` bigint(20) UNSIGNED NOT NULL,
  `nama_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nama_status`, `created_at`, `updated_at`) VALUES
(1, 'Menunggu Konfirmasi', NULL, NULL),
(2, 'Diproses', NULL, NULL),
(3, 'Diterima', NULL, NULL),
(4, 'Ditolak', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_perusahaan`
--

CREATE TABLE `status_perusahaan` (
  `id_status_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `nama_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_perusahaan`
--

INSERT INTO `status_perusahaan` (`id_status_perusahaan`, `nama_status`, `created_at`, `updated_at`) VALUES
(1, 'Kantor Pusat', NULL, NULL),
(2, 'Kantor Cabang', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_perusahaan`
--

CREATE TABLE `tipe_perusahaan` (
  `id_tipe_perusahaan` bigint(20) UNSIGNED NOT NULL,
  `nama_tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipe_perusahaan`
--

INSERT INTO `tipe_perusahaan` (`id_tipe_perusahaan`, `nama_tipe`, `created_at`, `updated_at`) VALUES
(1, 'Mikro', NULL, NULL),
(2, 'Kecil', NULL, NULL),
(3, 'Menengah', NULL, NULL),
(4, 'Besar', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `status_akun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `id_role`, `status_akun`, `created_at`, `updated_at`) VALUES
(1, 'Admin@koperasi.com', '$2y$10$qVZ33biZiVTFLjtnr9HDneRuuBjhnR0R/qf0rOaVcFAq8XPHxOMM.', 1, 'active', NULL, NULL),
(2, 'mediatorhi01@koperasi.com', '$2y$10$yj/Orx5FzZ7q5CE9nJRFGu4M9htm.DXeFAziogIDXcJxs5e5MHFm.', 2, 'active', NULL, NULL),
(3, 'mediatorhi02@koperasi.com', '$2y$10$EZpravw3Aq6H/.h7wFyU4e1Bjs8Y5JaaKx8wxs4AI8NdRLGPhuNTi', 2, 'active', NULL, NULL),
(4, 'kabidhi@koperasi.com', '$2y$10$YvTmTPj1Y/jkCwL7wVvR8O/pvjrG96XbJW0vE5X7TGnzsb5KSFKXm', 3, 'active', NULL, NULL),
(16, 'farisansori231005@gmail.com', NULL, 4, 'active', '2024-05-28 05:43:06', '2024-05-28 07:14:29'),
(17, 'muhammadfarizanshori@gmail.com', NULL, 4, 'active', '2024-05-28 22:04:58', '2024-05-28 22:06:06'),
(18, 'c030321125@mahasiswa.poliban.ac.id', NULL, 4, 'active', '2024-05-28 23:43:17', '2024-05-28 23:44:46'),
(19, 'medinfo074@gmail.com', NULL, 4, 'active', '2024-06-10 05:07:39', '2024-06-10 05:08:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`id_asset`);

--
-- Indeks untuk tabel `detail_pengecekan`
--
ALTER TABLE `detail_pengecekan`
  ADD PRIMARY KEY (`id_detail_pengecekan`),
  ADD KEY `detail_pengecekan_id_pegawai_foreign` (`id_pegawai`);

--
-- Indeks untuk tabel `detail_status`
--
ALTER TABLE `detail_status`
  ADD PRIMARY KEY (`id_detail_status`),
  ADD KEY `detail_status_id_status_foreign` (`id_status`),
  ADD KEY `detail_status_id_detail_pengecekan_foreign` (`id_detail_pengecekan`);

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
-- Indeks untuk tabel `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id_modal`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `pegawai_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `pelaporan_phk`
--
ALTER TABLE `pelaporan_phk`
  ADD PRIMARY KEY (`id_phk`),
  ADD KEY `pelaporan_phk_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `pelaporan_phk_id_detail_status_foreign` (`id_detail_status`);

--
-- Indeks untuk tabel `pencatatan_lks_bipartit`
--
ALTER TABLE `pencatatan_lks_bipartit`
  ADD PRIMARY KEY (`id_lks`),
  ADD KEY `pencatatan_lks_bipartit_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `pencatatan_lks_bipartit_id_detail_status_foreign` (`id_detail_status`);

--
-- Indeks untuk tabel `pencatatan_penyelasaian_hi`
--
ALTER TABLE `pencatatan_penyelasaian_hi`
  ADD PRIMARY KEY (`id_hi`),
  ADD KEY `pencatatan_penyelasaian_hi_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `pencatatan_penyelasaian_hi_id_detail_status_foreign` (`id_detail_status`);

--
-- Indeks untuk tabel `pencatatan_spsb`
--
ALTER TABLE `pencatatan_spsb`
  ADD PRIMARY KEY (`id_spsb`),
  ADD KEY `pencatatan_spsb_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `pencatatan_spsb_id_detail_status_foreign` (`id_detail_status`);

--
-- Indeks untuk tabel `pendaftaran_pkb`
--
ALTER TABLE `pendaftaran_pkb`
  ADD PRIMARY KEY (`id_pkb`),
  ADD KEY `pendaftaran_pkb_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `pendaftaran_pkb_id_detail_status_foreign` (`id_detail_status`);

--
-- Indeks untuk tabel `pendaftaran_pkwt`
--
ALTER TABLE `pendaftaran_pkwt`
  ADD PRIMARY KEY (`id_pkwt`),
  ADD KEY `pendaftaran_pkwt_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `pendaftaran_pkwt_id_detail_status_foreign` (`id_detail_status`);

--
-- Indeks untuk tabel `pengesahan_pp`
--
ALTER TABLE `pengesahan_pp`
  ADD PRIMARY KEY (`id_pp`),
  ADD KEY `pengesahan_pp_id_perusahaan_foreign` (`id_perusahaan`),
  ADD KEY `pengesahan_pp_id_detail_status_foreign` (`id_detail_status`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perusahaan_id_user_foreign` (`id_user`),
  ADD KEY `perusahaan_id_tipe_perusahaan_foreign` (`id_tipe_perusahaan`),
  ADD KEY `perusahaan_id_status_perusahaan_foreign` (`id_status_perusahaan`),
  ADD KEY `perusahaan_id_modal_foreign` (`id_modal`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `status_perusahaan`
--
ALTER TABLE `status_perusahaan`
  ADD PRIMARY KEY (`id_status_perusahaan`);

--
-- Indeks untuk tabel `tipe_perusahaan`
--
ALTER TABLE `tipe_perusahaan`
  ADD PRIMARY KEY (`id_tipe_perusahaan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_role_foreign` (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `asset`
--
ALTER TABLE `asset`
  MODIFY `id_asset` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pengecekan`
--
ALTER TABLE `detail_pengecekan`
  MODIFY `id_detail_pengecekan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `detail_status`
--
ALTER TABLE `detail_status`
  MODIFY `id_detail_status` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `modal`
--
ALTER TABLE `modal`
  MODIFY `id_modal` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelaporan_phk`
--
ALTER TABLE `pelaporan_phk`
  MODIFY `id_phk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pencatatan_lks_bipartit`
--
ALTER TABLE `pencatatan_lks_bipartit`
  MODIFY `id_lks` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pencatatan_penyelasaian_hi`
--
ALTER TABLE `pencatatan_penyelasaian_hi`
  MODIFY `id_hi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pencatatan_spsb`
--
ALTER TABLE `pencatatan_spsb`
  MODIFY `id_spsb` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_pkb`
--
ALTER TABLE `pendaftaran_pkb`
  MODIFY `id_pkb` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_pkwt`
--
ALTER TABLE `pendaftaran_pkwt`
  MODIFY `id_pkwt` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengesahan_pp`
--
ALTER TABLE `pengesahan_pp`
  MODIFY `id_pp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `status_perusahaan`
--
ALTER TABLE `status_perusahaan`
  MODIFY `id_status_perusahaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tipe_perusahaan`
--
ALTER TABLE `tipe_perusahaan`
  MODIFY `id_tipe_perusahaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pengecekan`
--
ALTER TABLE `detail_pengecekan`
  ADD CONSTRAINT `detail_pengecekan_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `detail_status`
--
ALTER TABLE `detail_status`
  ADD CONSTRAINT `detail_status_id_detail_pengecekan_foreign` FOREIGN KEY (`id_detail_pengecekan`) REFERENCES `detail_pengecekan` (`id_detail_pengecekan`),
  ADD CONSTRAINT `detail_status_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `pelaporan_phk`
--
ALTER TABLE `pelaporan_phk`
  ADD CONSTRAINT `pelaporan_phk_id_detail_status_foreign` FOREIGN KEY (`id_detail_status`) REFERENCES `detail_status` (`id_detail_status`),
  ADD CONSTRAINT `pelaporan_phk_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pencatatan_lks_bipartit`
--
ALTER TABLE `pencatatan_lks_bipartit`
  ADD CONSTRAINT `pencatatan_lks_bipartit_id_detail_status_foreign` FOREIGN KEY (`id_detail_status`) REFERENCES `detail_status` (`id_detail_status`),
  ADD CONSTRAINT `pencatatan_lks_bipartit_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pencatatan_penyelasaian_hi`
--
ALTER TABLE `pencatatan_penyelasaian_hi`
  ADD CONSTRAINT `pencatatan_penyelasaian_hi_id_detail_status_foreign` FOREIGN KEY (`id_detail_status`) REFERENCES `detail_status` (`id_detail_status`),
  ADD CONSTRAINT `pencatatan_penyelasaian_hi_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pencatatan_spsb`
--
ALTER TABLE `pencatatan_spsb`
  ADD CONSTRAINT `pencatatan_spsb_id_detail_status_foreign` FOREIGN KEY (`id_detail_status`) REFERENCES `detail_status` (`id_detail_status`),
  ADD CONSTRAINT `pencatatan_spsb_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran_pkb`
--
ALTER TABLE `pendaftaran_pkb`
  ADD CONSTRAINT `pendaftaran_pkb_id_detail_status_foreign` FOREIGN KEY (`id_detail_status`) REFERENCES `detail_status` (`id_detail_status`),
  ADD CONSTRAINT `pendaftaran_pkb_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran_pkwt`
--
ALTER TABLE `pendaftaran_pkwt`
  ADD CONSTRAINT `pendaftaran_pkwt_id_detail_status_foreign` FOREIGN KEY (`id_detail_status`) REFERENCES `detail_status` (`id_detail_status`),
  ADD CONSTRAINT `pendaftaran_pkwt_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `pengesahan_pp`
--
ALTER TABLE `pengesahan_pp`
  ADD CONSTRAINT `pengesahan_pp_id_detail_status_foreign` FOREIGN KEY (`id_detail_status`) REFERENCES `detail_status` (`id_detail_status`),
  ADD CONSTRAINT `pengesahan_pp_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`);

--
-- Ketidakleluasaan untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_id_modal_foreign` FOREIGN KEY (`id_modal`) REFERENCES `modal` (`id_modal`),
  ADD CONSTRAINT `perusahaan_id_status_perusahaan_foreign` FOREIGN KEY (`id_status_perusahaan`) REFERENCES `status_perusahaan` (`id_status_perusahaan`),
  ADD CONSTRAINT `perusahaan_id_tipe_perusahaan_foreign` FOREIGN KEY (`id_tipe_perusahaan`) REFERENCES `tipe_perusahaan` (`id_tipe_perusahaan`),
  ADD CONSTRAINT `perusahaan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
