
-- --------------------------------------------------------

--
-- Table structure for table `jenis_keluar`
--

CREATE TABLE `jenis_keluar` (
  `id_jenis_keluar` int(11) DEFAULT NULL,
  `jenis_keluar` varchar(100) DEFAULT NULL,
  `apa_mahasiswa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_keluar`
--

INSERT IGNORE INTO `jenis_keluar` (`id_jenis_keluar`, `jenis_keluar`, `apa_mahasiswa`) VALUES
(5, 'Putus Studi', 1),
(3, 'Dikeluarkan', 1),
(6, 'Lulus', 1),
(7, 'Meninggal Dunia', 1),
(8, 'Pindah Kampus', 1),
(9, 'Keluar Sementara', 1),
(10, 'Non Aktif', 0),
(11, 'Pensiun', 0),
(12, 'Selesai Kontrak', 0),
(13, 'Bekerja di Luar', 0),
(14, 'Cuti', 0),
(15, 'Dinas', 0);
