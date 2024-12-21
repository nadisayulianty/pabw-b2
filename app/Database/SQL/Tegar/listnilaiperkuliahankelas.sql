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
-- Struktur dari tabel `listnilaiperkuliahankelas`
--

CREATE TABLE `listnilaiperkuliahankelas` (
  `id_matkul` varchar(40) NOT NULL,
  `kode_mata_kuliah` varchar(25) NOT NULL,
  `nama_mata_kuliah` varchar(50) NOT NULL,
  `id_kelas_kuliah` varchar(40) NOT NULL,
  `nama_kelas_kuliah` int(3) NOT NULL,
  `sks_mata_kuliah` double NOT NULL,
  `jumlah_mahasiswa_krs` int(11) NOT NULL,
  `jumlah_mahasiswa_dapat_nilai` int(11) NOT NULL,
  `sks_tm` double NOT NULL,
  `sks_prak` double NOT NULL,
  `sks_prak_lap` double NOT NULL,
  `sks_sim` double NOT NULL,
  `bahasan_case` varchar(50) DEFAULT NULL,
  `a_selenggara_pditt` int(11) DEFAULT NULL,
  `a_pengguna_pditt` int(11) DEFAULT NULL,
  `kuota_pditt` int(11) NOT NULL,
  `tgl_mulai_koas` date DEFAULT NULL,
  `tgl_selesai_koas` date DEFAULT NULL,
  `id_mou` varchar(20) DEFAULT NULL,
  `id_kls_pditt` varchar(20) DEFAULT NULL,
  `id_sms` varchar(40) NOT NULL,
  `id_smt` int(20) NOT NULL,
  `tgl_create` date NOT NULL,
  `lingkup_kelas` int(2) DEFAULT NULL,
  `mode_kuliah` varchar(10) DEFAULT NULL,
  `nm_smt` varchar(15) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `status_sync` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `listnilaiperkuliahankelas`
--

INSERT INTO `listnilaiperkuliahankelas` (`id_matkul`, `kode_mata_kuliah`, `nama_mata_kuliah`, `id_kelas_kuliah`, `nama_kelas_kuliah`, `sks_mata_kuliah`, `jumlah_mahasiswa_krs`, `jumlah_mahasiswa_dapat_nilai`, `sks_tm`, `sks_prak`, `sks_prak_lap`, `sks_sim`, `bahasan_case`, `a_selenggara_pditt`, `a_pengguna_pditt`, `kuota_pditt`, `tgl_mulai_koas`, `tgl_selesai_koas`, `id_mou`, `id_kls_pditt`, `id_sms`, `id_smt`, `tgl_create`, `lingkup_kelas`, `mode_kuliah`, `nm_smt`, `nama_prodi`, `status_sync`) VALUES
('4472411f-1789-40fd-b995-61345af6de44', '10003', 'PENDIDIKAN AGAMA PROTESTAN', '0001f47e-2ac5-4e92-a215-5a291df8642d', 5, 2, 1, 1, 2, 0, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '57fe2e75-7d04-426d-9add-baa5171de994', 20151, '1970-01-01', NULL, NULL, '2015/2016 Ganji', 'S1 Teknik Informatika', 'sudah sync'),
('b3a47bab-694b-43fc-9dea-a7ec3ae3a4a8', '190261002', 'Content Development & Innovation', '0002c1f3-87d1-4871-82b8-145bf96fca57', 2, 3, 32, 32, 3, 0, 0, 0, NULL, 0, 0, 0, '1970-01-01', '1970-01-01', NULL, NULL, '8db09dbd-7d36-4530-b89c-d8ae2b2884b6', 20222, '2023-06-20', 1, 'F', '2022/2023 Genap', 'S1 Manajemen', 'sudah sync'),
('3d7e9b1a-8c4d-45f6-b7d3-de0dfe9a8c6f', '10144', 'Algoritma dan Pemrograman', '2a7f9d6e-6c4d-49d7-91c5-de0dfe7b9c3f', 10, 3, 30, 25, 2, 1, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '6f7d8c4b-7e3a-4f9e-b9d7-de0dfe5b4c7e', 20202, '2020-09-10', NULL, NULL, '2020/2021 Genap', 'S1 Teknik Informatika', 'sudah sync'),
('7f8a9b2c-5d6e-47f9-9b7a-de0dfe7c3e9a', '10145', 'Sistem Basis Data', '4f7d8e9a-6b5c-48f6-b7d7-de0dfe5a9d4f', 11, 3, 32, 29, 2, 1, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '8d9b7e5f-7b6a-46d7-9b7e-de0dfe9b8c5f', 20203, '2021-02-12', NULL, NULL, '2021/2022 Ganji', 'S1 Teknik Informatika', 'sudah sync'),
('1a7e8b6c-4d7e-45b6-b7d5-de0dfe5f7b3c', '10146', 'Pemrograman Web', '5a6b7d9e-8f4c-4b7d-9a7e-de0dfe8a3b7d', 12, 3, 34, 28, 2, 1, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '9b8e7c4a-7e6b-4f7e-b9a7-de0dfe9c7a6b', 20211, '2021-08-20', NULL, NULL, '2021/2022 Genap', 'S1 Teknik Informatika', 'sudah sync'),
('2b7e9d4f-5a7b-4f8e-9b7a-de0dfe9a4b7e', '10147', 'Kalkulus Lanjut', '6f8b7d5e-8c4d-49f7-b7a7-de0dfe7d6c9a', 13, 4, 40, 35, 3, 1, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '2a7e9f6c-5e9d-4b7a-b7f6-de0dfe5c7a3f', 20212, '2022-02-14', NULL, NULL, '2022/2023 Ganji', 'S1 Teknik Informatika', 'sudah sync'),
('3f9a8e6d-4b7a-48f9-b7c5-de0dfe8c9a2e', '10148', 'Kecerdasan Buatan', '7d8f6a9b-4e7d-49b7-9b7e-de0dfe9a4b6c', 14, 3, 38, 34, 2, 1, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '4f7d9e8c-8b4f-48e7-b7d9-de0dfe7c5b9d', 20213, '2022-09-01', NULL, NULL, '2022/2023 Genap', 'S1 Teknik Informatika', 'sudah sync'),
('4f8b9d5e-7b6a-49f9-b7a7-de0dfe8f9a6d', '10149', 'Pengantar Jaringan Komputer', '8d6f9a4b-9a7d-4b9f-b7d8-de0dfe9f6b3c', 15, 3, 35, 30, 2, 1, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '5e7f9d4b-7f6d-4a7f-b7e9-de0dfe6c9b2f', 20221, '2023-02-10', NULL, NULL, '2023/2024 Ganji', 'S1 Teknik Informatika', 'sudah sync'),
('5d8f9a7e-6b4c-47f8-9b7d-de0dfe9e7a4b', '10150', 'Manajemen Proyek TI', '9e8b7d6f-8a4c-4f9b-b7e9-de0dfe7a5c4f', 16, 3, 36, 31, 2, 1, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '6d8e7b5f-8c4d-49f7-b9d8-de0dfe6a4c7b', 20222, '2023-08-22', NULL, NULL, '2023/2024 Genap', 'S1 Teknik Informatika', 'sudah sync'),
('6b9e7d4a-8c6f-4a7f-b7e9-de0dfe9b7c4f', '10151', 'Keamanan Jaringan', '1d9b8f7c-9f6e-48b7-b9a7-de0dfe6c9b7d', 17, 3, 37, 32, 2, 1, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '7f6b9e4f-7d5b-4f7d-b9a7-de0dfe5c6b8f', 20223, '2024-01-15', NULL, NULL, '2024/2025 Ganji', 'S1 Teknik Informatika', 'sudah sync'),
('7d9f8e6a-5c7b-49f9-b7a6-de0dfe9f7d3b', '10152', 'Analisis dan Desain Sistem', '2f8b7d6f-9b4c-4a7d-b7e8-de0dfe9c5a7d', 18, 3, 40, 34, 2, 1, 0, 0, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, '8b9e6d4f-7f6e-4a9f-b7d8-de0dfe5b8c6f', 20224, '2024-06-10', NULL, NULL, '2024/2025 Genap', 'S1 Teknik Informatika', 'sudah sync');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
