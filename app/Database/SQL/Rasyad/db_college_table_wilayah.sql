
-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_level_wilayah` int(11) DEFAULT NULL,
  `id_wilayah` double DEFAULT NULL,
  `id_negara` varchar(100) DEFAULT NULL,
  `nama_wilayah` varchar(100) DEFAULT NULL,
  `id_induk_wilayah` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT IGNORE INTO `wilayah` (`id_level_wilayah`, `id_wilayah`, `id_negara`, `nama_wilayah`, `id_induk_wilayah`) VALUES
(2, 76000, 'ID', 'Kota Medan', 70000),
(0, 0, 'BL', 'Saint Bartelemey', 0),
(2, 76007, 'ID', 'Kota Padang Sidempuan', 70000),
(2, 76001, 'ID', 'Kota Binjai', 70000),
(2, 0, 'US', 'Los Angeles', 201000),
(2, 0, 'US', 'San Francisco', 201000),
(2, 76010, 'ID', 'Kota Sibolga', 70000),
(2, 76005, 'ID', 'Kota Pematang Siantar', 70000),
(2, 0, 'MY', 'Kuala Lumpur', 101000),
(2, 0, 'MY', 'Penang', 101000),
(2, 0, 'MY', 'Johor', 101000),
(0, 0, 'SG', 'Singapore', NULL);