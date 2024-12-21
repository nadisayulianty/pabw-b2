CREATE TABLE `periode` (
  `no` int(100) NOT NULL,
  `id_prodi` varchar(100) DEFAULT NULL,
  `kode_prodi` double DEFAULT NULL,
  `nama_program_studi` varchar(100) DEFAULT NULL,
  `status_prodi` varchar(100) DEFAULT NULL,
  `jenjang_pendidikan` varchar(100) DEFAULT NULL,
  `periode_pelaporan` int(11) DEFAULT NULL,
  `tipe_periode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;