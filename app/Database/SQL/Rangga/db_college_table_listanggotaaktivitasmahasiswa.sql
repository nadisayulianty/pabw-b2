CREATE TABLE `listanggotaaktivitasmahasiswa` (
  `id_aktivitas` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `id_anggota` varchar(255) DEFAULT NULL,
  `id_registrasi_mahasiswa` varchar(255) DEFAULT NULL,
  `nim` int DEFAULT NULL,
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `jenis_peran` int DEFAULT NULL,
  `nama_jenis_peran` varchar(255) DEFAULT NULL,
  `status_sync` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;