
-- --------------------------------------------------------

--
-- Table structure for table `list_aktivitas_mahasiswa`
--

CREATE TABLE `list_aktivitas_mahasiswa` (
  `nm_asaldata` varchar(255) DEFAULT NULL,
  `asal_data` varchar(255) DEFAULT NULL,
  `id_aktivitas` varchar(100) NOT NULL,
  `program_mbkm` int(11) DEFAULT NULL,
  `nama_program_mbkm` enum('Mandiri','Lain-lain') DEFAULT NULL,
  `jenis_anggota` int(11) DEFAULT NULL,
  `nama_jenis_anggota` enum('Personal','Organisasi') DEFAULT NULL,
  `id_jenis_aktivitas` char(32) DEFAULT NULL,
  `nama_jenis_aktivitas` varchar(50) NOT NULL DEFAULT '',
  `id_prodi` varchar(100) DEFAULT NULL,
  `nama_prodi` varchar(30) NOT NULL DEFAULT '',
  `id_semester` smallint(5) UNSIGNED ZEROFILL DEFAULT NULL,
  `nama_semester` text DEFAULT NULL,
  `judul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sk_tugas` tinyint(1) DEFAULT 0,
  `sumber_data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_sk_tugas` datetime DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `untuk_kampus_merdeka` tinyint(1) DEFAULT 1,
  `status_sync` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_aktivitas_mahasiswa`
--

INSERT IGNORE INTO `list_aktivitas_mahasiswa` (`nm_asaldata`, `asal_data`, `id_aktivitas`, `program_mbkm`, `nama_program_mbkm`, `jenis_anggota`, `nama_jenis_anggota`, `id_jenis_aktivitas`, `nama_jenis_aktivitas`, `id_prodi`, `nama_prodi`, `id_semester`, `nama_semester`, `judul`, `keterangan`, `lokasi`, `sk_tugas`, `sumber_data`, `tanggal_sk_tugas`, `tanggal_mulai`, `tanggal_selesai`, `untuk_kampus_merdeka`, `status_sync`) VALUES
('internal', 'Universitas B', '4051', 0, '', 0, '', '101', 'Magang\r\nIndustri', '1', 'Teknik Komputer', 00007, 'Semester Ganjil', 'Magang PT\r\nXYZ', '6 bulan magang di PT XYZ', 'Jakarta', 0, 'Dikti', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Terhubung'),
('internal', 'Universitas C', '4052', 0, '', 0, '', '102', 'Penelitian', '2', 'Biologi', 00006, 'Semester Genap', 'Penelitian COVID-19', 'Penelitian di laboratorium', 'Bandung', 0, 'Internal', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Tidak Terhubung'),
('eksternal', 'Universitas D', '4053', 0, '', 0, '', '103', 'Pertukaran\r\nMahasiswa', '3', 'Sastra inggris', 00005, 'Semester Ganjil', 'Pertukaran\r\nke Jepang', 'Program pertukaran 1 semester', 'Tokyo', 0, 'Kemendikbud', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Terhubung'),
('internal', 'Universitas E', '4054', 0, '', 0, '', '104', 'Pengabdian\r\nMasyarakat', '4', 'Ilmu Hukum', 00007, 'Semester Genap', 'Bantuan Hukum\r\nDesa', 'Kegiatan hukum di desa terpencil', 'Lampung', 0, 'Internal', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Tidak Terhubung'),
('eksternal', 'Universitas F', '4055', 0, '', 0, '', '105', 'Bisnis\r\nStarup', '5', 'Manajemen', 00006, 'Semester Ganjil', 'Starup Inovasi AI', 'Mendirikan starup AI inovatif', 'Surabaya', 0, 'Dikti', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Terhubung'),
('internal', 'Universitas G', '4056', 0, '', 0, '', '106', 'Seminar\r\nOnline', '6', 'Ekonomi', 00008, 'Semester Genap', 'Seminar Ekonomi 2024', 'Mengikuti seminar nasional ekonomi', 'Jakarta', 0, 'Internal', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Tidak Terhubung'),
('internal', 'Universitas H', '4057', 0, '', 0, '', '107', 'Pelatihan', '7', 'Teknik Mesin', 00005, 'Semester Ganjil', 'Pelatihan Bisnis', 'Pelatihan bisnis berbasis teknologi', 'Yogyakarta', 0, 'Internal', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Tidak Terhubung'),
('internal', 'Universitas I', '4058', 0, '', 0, '', '108', 'Asistensi\r\nMengajar', '8', 'Pendidikan', 00006, 'Semester Genap', 'Mengajar di SMAN\r\n1', 'Asistensi mengajar di sekolah menengah', 'Bogor', 0, 'Dikti', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Terhubung'),
('eksternal', 'Universitas J', '4059', 0, '', 0, '', '109', 'Kompetisi\r\nNasional', '9', 'Ilmu Komunikasi', 00005, 'Semester Ganjil', 'Proyek\r\nBlockhain', 'Proyek inovasi teknologi blockhain', 'Bali', 0, 'Internal', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Tidak Terhubung'),
('internal', 'Universitas K', '4060', 0, '', 0, '', '110', 'Proyek\r\nIndependen', '10', 'Informatika', 00007, 'Semester Genap', 'Lomba Esai\r\nNasional', 'Mengikuti lomba karya tulis tingkat nasional', 'Bandung', 0, 'Dikti', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'Terhubung'),
('asal_data', 'nm_asaldata', 'id_aktivitas', 0, '', 0, '', 'id_jenis_aktivitas', 'nama_jenis_aktivitas', 'id_prodi', 'nama_prodi', 00000, 'nama_semester', 'judul', 'keterangan', 'lokasi', 0, 'sumber_data', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 0, 'status_sync');
