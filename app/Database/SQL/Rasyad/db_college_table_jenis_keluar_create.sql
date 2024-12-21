CREATE TABLE `jenis_keluar` (
  `id_jenis_keluar` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `jenis_keluar` varchar(100) DEFAULT NULL,
  `apa_mahasiswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;