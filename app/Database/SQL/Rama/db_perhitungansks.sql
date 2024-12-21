CREATE TABLE `perhitungan_sks` (
  `id_kelas_kuliah` varchar(255) NOT NULL,
  `id_registrasi_dosen` varchar(255) DEFAULT NULL,
  `id_dosen` varchar(255) NOT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nama_dosen` varchar(100) DEFAULT NULL,
  `nama_kelas_kuliah` varchar(100) DEFAULT NULL,
  `id_substansi` varchar(255) DEFAULT NULL,
  `nama_substansi` varchar(255) DEFAULT NULL,
  `rencana_minggu_pertemuan` int(11) DEFAULT NULL,
  `perhitungan_sks` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;