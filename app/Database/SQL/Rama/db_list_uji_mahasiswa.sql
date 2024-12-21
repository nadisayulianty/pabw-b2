CREATE TABLE `listujimahasiswa` (
  `id_aktivitas` varchar(100) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `id_uji` varchar(100) NOT NULL,
  `id_kategori_kegiatan` int(11) NOT NULL,
  `nama_kategori_kegiatan` varchar(100) NOT NULL,
  `id_dosen` varchar(100) NOT NULL,
  `nidn` int(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `penguji_ke` int(11) NOT NULL,
  `status_sync` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;