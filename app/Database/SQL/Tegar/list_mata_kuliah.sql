-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Des 2024 pada 12.26
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes-web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_mata_kuliah`
--

CREATE TABLE `list_mata_kuliah` (
  `id_jenj_didik` int(11) DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL,
  `id_matkul` varchar(255) NOT NULL,
  `jns_mk` varchar(50) DEFAULT NULL,
  `kel_mk` varchar(50) DEFAULT NULL,
  `kode_mata_kuliah` varchar(50) DEFAULT NULL,
  `nama_mata_kuliah` varchar(255) DEFAULT NULL,
  `sks_mata_kuliah` decimal(3,2) DEFAULT NULL,
  `id_prodi` varchar(255) DEFAULT NULL,
  `nama_program_studi` varchar(255) DEFAULT NULL,
  `id_jenis_mata_kuliah` varchar(255) DEFAULT NULL,
  `id_kelompok_mata_kuliah` varchar(255) DEFAULT NULL,
  `sks_tatap_muka` decimal(3,2) DEFAULT NULL,
  `sks_praktek` decimal(3,2) DEFAULT NULL,
  `sks_praktek_lapangan` decimal(3,2) DEFAULT NULL,
  `sks_simulasi` varchar(255) DEFAULT NULL,
  `metode_kuliah` varchar(255) DEFAULT NULL,
  `ada_sap` tinyint(4) DEFAULT NULL,
  `ada_silabus` tinyint(4) DEFAULT NULL,
  `ada_bahan_ajar` varchar(255) DEFAULT NULL,
  `ada_acara_praktek` varchar(255) DEFAULT NULL,
  `ada_diktat` varchar(255) DEFAULT NULL,
  `tanggal_mulai_efektif` date DEFAULT NULL,
  `tanggal_selesai_efektif` date DEFAULT NULL,
  `nama_kelompok_mata_kuliah` varchar(255) DEFAULT NULL,
  `nama_jenis_mata_kuliah` varchar(255) DEFAULT NULL,
  `status_sync` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `list_mata_kuliah`
--

INSERT INTO `list_mata_kuliah` (`id_jenj_didik`, `tgl_create`, `id_matkul`, `jns_mk`, `kel_mk`, `kode_mata_kuliah`, `nama_mata_kuliah`, `sks_mata_kuliah`, `id_prodi`, `nama_program_studi`, `id_jenis_mata_kuliah`, `id_kelompok_mata_kuliah`, `sks_tatap_muka`, `sks_praktek`, `sks_praktek_lapangan`, `sks_simulasi`, `metode_kuliah`, `ada_sap`, `ada_silabus`, `ada_bahan_ajar`, `ada_acara_praktek`, `ada_diktat`, `tanggal_mulai_efektif`, `tanggal_selesai_efektif`, `nama_kelompok_mata_kuliah`, `nama_jenis_mata_kuliah`, `status_sync`) VALUES
(30, '1970-01-01 00:00:00', '910a3ea5-12be-45ed-8b49-b5f264ee5d92', '', '', '0511301', 'PSIKOLOGI INDUSTRI', 2.00, '3b7e747e-5954-47ea-b32afd5eebba3739', 'S1 Teknik Industri', '', '', 2.00, 0.00, 0.00, '', '', 1, 1, '', '', '', '0000-00-00', '0000-00-00', '', '', 'Sukses'),
(30, '1970-01-01 00:00:00', 'b127f56e-b4ca-43df-9dd5-3ebaa30da967', '', '', 'E231', 'EKONOMI PEMBANGUNAN', 3.00, '8db09dbd-7d36-4530-b89cd8ae2b2884b6', 'S1 Manajemen', '', '', 3.00, 0.00, 0.00, '', '', 1, 1, '0', '0', '0', '0000-00-00', '0000-00-00', '', '', 'Sukses'),
(0, '0000-00-00 00:00:00', 'id_matkul', 'jns_mk', 'kel_mk', 'kode_mata_kuliah', 'nama_mata_kuliah', 0.00, 'id_prodi', 'nama_program_studi', 'id_jenis_mata_kuliah', 'id_kelompok_mata_kuliah', 0.00, 0.00, 0.00, 'sks_simulasi', 'metode_kuliah', 0, 0, 'ada_bahan_ajar', 'ada_acara_praktek', 'ada_diktat', '0000-00-00', '0000-00-00', 'nama_kelompok_mata_kuliah', 'nama_jenis_mata_kuliah', 'status_sync'),
(3, '2024-01-15 00:00:00', 'MK001', 'Wajib', 'MKW', 'MTK101', 'Kalkulus\r\nI', 3.00, 'P001', 'S1 Teknik Informatika', '', 'KMK001', 2.00, 1.00, 0.00, '', 'Offline', 1, 1, '1', '1', '1', '2024-02-01', '2024-06-30', 'Matematika Dasar', 'Mata Kuliah Wajib', 'Sukses'),
(3, '2024-01-16 00:00:00', 'MK002', 'Wajib', 'MKW', 'FIS102', 'Fisika\r\nDasar', 3.00, 'P001', 'S1 Teknik Informatika', '', 'KMK002', 2.00, 2.00, 0.00, '', 'Online', 1, 1, '1', '1', '1', '2024-02-01', '2024-06-30', 'Ilmu Dasar', 'Mata Kuliah Wajib', 'Sukses'),
(3, '2024-01-18 00:00:00', 'MK004', 'Wajib', 'MKW', 'DB301', 'BasisData', 3.00, 'P001', 'S1 Teknik Informatika', '', 'KMK004', 2.00, 1.00, 0.00, '', 'Offline', 1, 1, '1', '1', '1', '2024-02-01', '2024-06-30', 'Database', 'Mata Kuliah Wajib', 'Sukses'),
(3, '2024-01-19 00:00:00', 'MK005', 'Wajib', 'MKW', 'PW401', 'Pemrograman\r\nWeb', 3.00, 'P001', 'S1 Teknik Informatika', '', 'KMK005', 2.00, 2.00, 0.00, '', 'Online', 1, 1, '1', '1', '1', '2024-02-01', '2024-06-30', 'Web\r\nProgramming', 'Mata Kuliah Wajib', 'Sukses'),
(3, '2024-01-20 00:00:00', 'MK006', 'Pilihan', 'MKP', 'ML501', 'Machine\r\nLearning', 2.00, 'P001', 'S1 Teknik Informatika', '', 'KMK006', 2.00, 2.00, 0.00, '', 'Offline', 1, 1, '1', '1', '1', '2024-02-01', '0000-00-00', 'Machine Learning', 'Mata Kuliah Pilihan', 'Sukses'),
(3, '2024-01-21 00:00:00', 'MK007', 'Wajib', 'MKW', 'SE601', 'Software\r\nEngineering', 3.00, 'P001', 'S1 Teknik Informatika', '', 'KMK007', 2.00, 1.00, 1.00, '', 'Offline', 1, 1, '1', '1', '1', '2024-02-01', '0000-00-00', 'Software Development', 'Mata Kuliah Wajib', 'Sukses'),
(3, '2024-01-22 00:00:00', 'MK008', 'Pilihan', 'MKP', 'CG701', 'Computer\r\nGraphics', 2.00, 'P001', 'S1 Teknik Informatika', '', 'KMK008', 2.00, 2.00, 0.00, '', 'Offline', 1, 1, '1', '1', '1', '2024-02-01', '0000-00-00', 'Graphics & Multimedia', 'Mata Kuliah Pilihan', 'Sukses'),
(3, '2024-01-24 00:00:00', 'MK010', 'Pilihan', 'MKP', 'CS901', 'Cyber\r\nSecurity', 2.00, 'P001', 'S1 Teknik Informatika', '', 'KMK010', 2.00, 2.00, 0.00, '', 'Offline', 1, 1, '1', '1', '1', '2024-02-01', '0000-00-00', 'Security', 'Mata Kuliah Pilihan', 'Sukses'),
(NULL, NULL, '959cb069b617f095c7d62d8429715fa1', NULL, NULL, 'F222', 'Fisika Dasar', 3.00, NULL, 'Informatika Teknik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, '54ea3a77459cc87eaa4cd0ae8b33ec36', NULL, NULL, '3', 'KAKUKUS', 3.00, NULL, 'Informatika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
