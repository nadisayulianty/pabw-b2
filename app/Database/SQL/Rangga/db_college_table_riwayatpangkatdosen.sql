CREATE TABLE `riwayatpangkatdosen` (
  `id_dosen` varchar(36) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `id_pangkat_golongan` varchar(36) DEFAULT NULL,
  `nama_pangkat_golongan` varchar(255) DEFAULT NULL,
  `sk_pangkat` varchar(255) DEFAULT NULL,
  `tanggal_sk_pangkat` date DEFAULT NULL,
  `mulai_sk_pangkat` date DEFAULT NULL,
  `masa_kerja_dalam_tahun` int(11) DEFAULT NULL,
  `masa_kerja_dalam_bulan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;