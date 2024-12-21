CREATE TABLE `mahasiswa_bimbingan_dosen` (
  `no` int(11) NOT NULL,
  `id_aktivitas` text DEFAULT NULL,
  `judul` text DEFAULT NULL,
  `id_bimbing_mahasiswa` text DEFAULT NULL,
  `id_kategori_kegiatan` double DEFAULT NULL,
  `nama_kategori_kegiatan` text DEFAULT NULL,
  `id_dosen` text DEFAULT NULL,
  `nidn` text DEFAULT NULL,
  `nama_dosen` text DEFAULT NULL,
  `pembimbing_ke` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;