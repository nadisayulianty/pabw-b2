CREATE TABLE `riwayatsertifikasidosen` (
  `id_dosen` varchar(255) DEFAULT NULL,
  `nidn` int(11) DEFAULT NULL,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `nomor_peserta` int(11) DEFAULT NULL,
  `id_bidang_studi` int(11) DEFAULT NULL,
  `nama_bidang_studi` varchar(255) DEFAULT NULL,
  `id_jenis_sertifikasi` int(11) DEFAULT NULL,
  `nama_jenis_sertifikasi` varchar(255) DEFAULT NULL,
  `tahun_sertifikasi` year(4) DEFAULT NULL,
  `sk_sertifikasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
