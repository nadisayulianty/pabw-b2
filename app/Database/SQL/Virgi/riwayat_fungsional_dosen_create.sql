CREATE TABLE `riwayat_fungsional_dosen` (
  `no` int(11) NOT NULL,
  `id_dosen` varchar(100) DEFAULT NULL,
  `nidn` double DEFAULT NULL,
  `nama_dosen` varchar(100) DEFAULT NULL,
  `id_jabatan_fungsional` varchar(100) DEFAULT NULL,
  `nama_jabatan_fungsional` varchar(100) DEFAULT NULL,
  `sk_jabatan_fungsional` varchar(100) DEFAULT NULL,
  `mulai_sk_jabatan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;