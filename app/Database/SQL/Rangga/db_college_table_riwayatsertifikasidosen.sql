
-- --------------------------------------------------------

--
-- Table structure for table `riwayatsertifikasidosen`
--

CREATE TABLE `riwayatsertifikasidosen` (
  `id_dosen` varchar(255) DEFAULT NULL,
  `nidn` int(11) DEFAULT NULL,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `nomor_peserta` int(11) DEFAULT NULL,
  `id_bidang_studi` int(11) DEFAULT NULL,
  `nama_bidang_studi` varchar(255) DEFAULT NULL,
  `id_jenis_sertifikasi` int(11) DEFAULT NULL,
  `nama_jenis_sertifikasi` varchar(255) DEFAULT NULL,
  `tahun_sertifikasi` year(4) DEFAULT NULL,
  `sk_sertifikasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayatsertifikasidosen`
--

INSERT IGNORE INTO `riwayatsertifikasidosen` (`id_dosen`, `nidn`, `nama_dosen`, `nomor_peserta`, `id_bidang_studi`, `nama_bidang_studi`, `id_jenis_sertifikasi`, `nama_jenis_sertifikasi`, `tahun_sertifikasi`, `sk_sertifikasi`) VALUES
('8dcdd0ea-cb44-4028-9cc7-86f8e847b55f', 2147483647, 'yanti', 410055000, 571, 'Manajemen', 1, 'Sertifikasi Dosen', 2011, '1,11041E+13'),
('b0ce731b-0d42-485c-8821-97fd9d5ea8c0', 24037000, 'yanto', 24037000, 571, 'Manajemen', 1, 'Sertifikasi Dosen', 2012, '1,21001E+13'),
('8dcdd0ea-cb44-4028-9cc7-86f8e847b55f', 2147483647, 'yanti', 410055000, 571, 'Manajemen', 1, 'Sertifikasi Dosen', 2011, '1,11041E+13'),
('b0ce731b-0d42-485c-8821-97fd9d5ea8c0', 24037000, 'yanto', 24037000, 571, 'Manajemen', 1, 'Sertifikasi Dosen', 2012, '1,21001E+13'),
('037f6f4d-7b76-42e7-9d26-df216c8ab394', 2147483647, 'rinanti', 310086000, 103, 'Kedokteran', 1, 'Sertifikasi Dosen', 2013, '13100300602000'),
('44556c9d-30f3-4f39-a5a1-c6e620fa4dd2', 2147483647, 'budiman', 410053000, 104, 'Psikologi', 1, 'Sertifikasi Dosen', 2014, '14103401855000'),
('e9c1142f-cd83-482b-a837-27a26a7b4f9f', 24115000, 'susanti', 24115000, 105, 'Ekonomi', 1, 'Sertifikasi Dosen', 2015, '15102401245000'),
('1ccdd239-1b7b-4386-b9e4-e506b74d4b22', 2147483647, 'anggita', 410012000, 106, 'Ilmu Komputer', 1, 'Sertifikasi Dosen', 2016, '16100702050000'),
('cdef445a-927e-426b-94d6-9c1b567efb4d', 2147483647, 'ardi', 410017000, 107, 'Sastra Inggris', 1, 'Sertifikasi Dosen', 2017, '17102701568000'),
('e4d984a4-82e7-487b-9d80-3242b1d21e43', 2147483647, 'widodo', 410025000, 108, 'Matematika', 1, 'Sertifikasi Dosen', 2018, '18103502231000'),
('8b11730b-5f4f-43f5-9bde-419d9f3fbe9b', 24071000, 'sriyanto', 24071000, 109, 'Biologi', 1, 'Sertifikasi Dosen', 2019, '19102701531000'),
('1ba11722-0c7d-4217-87c2-9f20ff4a0fc1', 2147483647, 'endah', 310048000, 110, 'Fisika', 1, 'Sertifikasi Dosen', 2020, '20102401925000'),
('3aa7f5dd-9c47-4d9b-b345-fc9e7e76d023', 220311000, 'farida', 310078000, 111, 'Farmasi', 1, 'Sertifikasi Dosen', 2021, '21101401965000'),
('b567b96f-3c2f-4e55-9379-041d8a9a54e9', 25091000, 'irfan', 25091000, 112, 'Kimia', 1, 'Sertifikasi Dosen', 2022, '22101401355000');
