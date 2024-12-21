CREATE TABLE `jenis_aktivitas_mahasiswa` (
  `id_jenis_aktivitas_mahasiswa` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nama_jenis_aktivitas_mahasiswa` varchar(100) NOT NULL,
  `untuk_kampus_merdeka` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
