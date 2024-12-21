CREATE TABLE `wilayah` (
  `id_level_wilayah` int(11) DEFAULT NULL,
  `id_wilayah` double DEFAULT NULL,
  `id_negara` varchar(100) DEFAULT NULL,
  `nama_wilayah` varchar(100) DEFAULT NULL,
  `id_induk_wilayah` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
