CREATE TABLE `listdosen` (
  `id_dosen` varchar(100) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `nidn` int(30) NOT NULL,
  `nip` int(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `id_agama` int(10) NOT NULL,
  `nama_agama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_status_aktif` int(10) NOT NULL,
  `nama_status_aktif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;