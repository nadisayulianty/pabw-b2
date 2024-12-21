
-- --------------------------------------------------------

--
-- Table structure for table `biodatamahasiswa`
--

CREATE TABLE `biodatamahasiswa` (
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_mahasiswa` varchar(30) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(20) DEFAULT NULL,
  `nik` int(50) DEFAULT NULL,
  `nisn` int(25) DEFAULT NULL,
  `npwp` int(25) DEFAULT NULL,
  `id_negara` varchar(5) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `jalan` varchar(100) DEFAULT NULL,
  `dusun` varchar(50) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kode_pos` int(30) DEFAULT NULL,
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL,
  `id_jenis_tinggal` int(11) DEFAULT NULL,
  `nama_jenis_tinggal` varchar(25) DEFAULT NULL,
  `id_alat_transportasi` int(11) DEFAULT NULL,
  `nama_alat_transportasi` varchar(25) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `handphone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `penerima_kps` int(11) DEFAULT NULL,
  `nomor_kps` int(11) DEFAULT NULL,
  `nik_ayah` int(11) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `id_pendidikan_ayah` int(11) DEFAULT NULL,
  `nama_pendidikan_ayah` varchar(50) DEFAULT NULL,
  `id_pekerjaan_ayah` int(11) DEFAULT NULL,
  `nama_pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `id_penghasilan_ayah` int(11) DEFAULT NULL,
  `nama_penghasilan_ayah` varchar(50) DEFAULT NULL,
  `nik_ibu` int(11) DEFAULT NULL,
  `nama_ibu_kandung` varchar(50) DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `id_pendidikan_ibu` int(11) DEFAULT NULL,
  `nama_pendidikan_ibu` varchar(50) DEFAULT NULL,
  `id_pekerjaan_ibu` int(11) DEFAULT NULL,
  `nama_pekerjaan_ibu` varchar(25) DEFAULT NULL,
  `id_penghasilan_ibu` int(11) DEFAULT NULL,
  `nama_penghasilan_ibu` varchar(50) DEFAULT NULL,
  `nama_wali` varchar(30) DEFAULT NULL,
  `tanggal_lahir_wali` date DEFAULT NULL,
  `id_pendidikan_wali` int(11) DEFAULT NULL,
  `nama_pendidikan_wali` varchar(50) DEFAULT NULL,
  `id_pekerjaan_wali` int(11) DEFAULT NULL,
  `nama_pekerjaan_wali` varchar(25) DEFAULT NULL,
  `id_penghasilan_wali` int(11) DEFAULT NULL,
  `nama_penghasilan_wali` varchar(50) DEFAULT NULL,
  `id_kebutuhan_khusus_mahasiswa` int(11) NOT NULL,
  `nama_kebutuhan_khusus_mahasiswa` varchar(50) NOT NULL,
  `id_kebutuhan_khusus_ayah` int(11) NOT NULL,
  `nama_kebutuhan_khusus_ayah` varchar(50) NOT NULL,
  `id_kebutuhan_khusus_ibu` int(11) NOT NULL,
  `nama_kebutuhan_khusus_ibu` varchar(30) NOT NULL,
  `status_sync` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodatamahasiswa`
--

INSERT IGNORE INTO `biodatamahasiswa` (`nama_mahasiswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `id_mahasiswa`, `id_agama`, `nama_agama`, `nik`, `nisn`, `npwp`, `id_negara`, `kewarganegaraan`, `jalan`, `dusun`, `rt`, `rw`, `kelurahan`, `kode_pos`, `id_wilayah`, `nama_wilayah`, `id_jenis_tinggal`, `nama_jenis_tinggal`, `id_alat_transportasi`, `nama_alat_transportasi`, `telepon`, `handphone`, `email`, `penerima_kps`, `nomor_kps`, `nik_ayah`, `nama_ayah`, `tanggal_lahir_ayah`, `id_pendidikan_ayah`, `nama_pendidikan_ayah`, `id_pekerjaan_ayah`, `nama_pekerjaan_ayah`, `id_penghasilan_ayah`, `nama_penghasilan_ayah`, `nik_ibu`, `nama_ibu_kandung`, `tanggal_lahir_ibu`, `id_pendidikan_ibu`, `nama_pendidikan_ibu`, `id_pekerjaan_ibu`, `nama_pekerjaan_ibu`, `id_penghasilan_ibu`, `nama_penghasilan_ibu`, `nama_wali`, `tanggal_lahir_wali`, `id_pendidikan_wali`, `nama_pendidikan_wali`, `id_pekerjaan_wali`, `nama_pekerjaan_wali`, `id_penghasilan_wali`, `nama_penghasilan_wali`, `id_kebutuhan_khusus_mahasiswa`, `nama_kebutuhan_khusus_mahasiswa`, `id_kebutuhan_khusus_ayah`, `nama_kebutuhan_khusus_ayah`, `id_kebutuhan_khusus_ibu`, `nama_kebutuhan_khusus_ibu`, `status_sync`) VALUES
('abc', 'L', 'TANJUNG KULIM', '2010-11-22', 'e41d8958-e079-49ea-9d4c-7f8cbe', 1, 'Islam', 2147483647, 1234688, NULL, 'ID', 'Indonesia', 'JL. PEMBANGUNAN', NULL, '2', '3', 'TANJUNG KULIM', NULL, 26013, 'Kec. Arcamanik', 3, 'Kost', 2, 'Kendaraan pribadi', NULL, '085163632351', 'nuznq23@gmail.com', 0, NULL, NULL, NULL, '1970-01-01', 0, 'Tidak sekolah', 0, NULL, 0, NULL, NULL, 'ibu ibu', NULL, 0, 'S1', 0, NULL, 0, NULL, NULL, '1970-01-01', 0, 'Tidak sekolah', 0, NULL, 0, NULL, 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('abs', 'P', 'BANDUNG', '1945-01-25', '594dcc8c-3d6a-4801-b27c-b21091', 98, 'Tidak diisi', NULL, 0, NULL, 'ID', 'Indonesia', NULL, NULL, NULL, NULL, '-', 0, 999999, 'tidak ada', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Rizky', 'L', 'Bandung', '2003-11-12', 'a12d7c9e-1e09-44c6-8f4a-70d3d5', 1, 'Islam', 2147483647, 4388573, 2147483647, 'ID', 'Indonesia', 'JL. babakan baru', 'seblak', '3', '11', 'padasuka', 40125, 22548, 'Kec. cibeunying', 3, 'Kost', 2, 'Kendaraan pribadi', NULL, '085163632351', 'nuznq23@gmail.com', 1, 2147483647, 2147483647, 'Rafi ahmad', '0000-00-00', 4, 'S1', 3, 'Artis', 3, '100jt', 2147483647, 'jolie', '1986-12-07', 5, 'S2', 6, 'Wiraswasta', 3, '100jt', NULL, '1970-01-01', 0, 'Tidak sekolah', 0, NULL, 0, NULL, 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Dewi', 'P', 'Surabaya', '2000-05-18', 'b12d7c8e-1e08-44c6-8f5a-60d3d5', 1, 'Islam', 2147483647, 4388575, 2147483647, 'ID', 'Indonesia', 'JL. merdeka raya', 'barat', '5', '9', 'wonokromo', 60244, 22549, 'Kec. Genteng', 2, 'Rumah orang tua', 1, 'Sepeda', NULL, '085163612353', 'dewi12@gmail.com', 1, 2147483647, 2147483647, 'Hendra', '1970-04-11', 3, 'D3', 5, 'Pegawai Negeri', 2, '50jt', 2147483647, 'Tati', '1973-09-03', 4, 'SMA', 4, 'Ibu Rumah Tangga', 2, '50jt', 'Edo', '1969-01-10', 3, 'SMA', 2, 'Swasta', 2, '50jt', 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Budi', 'L', 'Jakarta', '2002-09-21', 'c14d7f9e-1f09-34c6-9f4a-50d3e5', 1, 'Islam', 2147483647, 4388593, 2147483647, 'ID', 'Indonesia', 'JL. sudirman', 'selatan', '7', '14', 'menteng', 10310, 22550, 'Kec. Setiabudi', 3, 'Kost', 2, 'Kendaraan pribadi', NULL, '085163619351', 'budi14@gmail.com', 1, 2147483647, 2147483647, 'Halim', '1969-01-05', 5, 'SMA', 3, 'Swasta', 3, '100jt', 2147483647, 'Maryam', '1970-10-25', 4, 'S2', 6, 'Wiraswasta', 4, '100jt', NULL, '1969-01-05', 0, 'SMP', 0, NULL, 0, NULL, 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Citra', 'P', 'Bandung', '2004-03-02', 'd45f7g9e-2e09-44c7-9d4b-70c4d6', 1, 'Islam', 2147483647, 4388594, 2147483647, 'ID', 'Indonesia', 'JL. dago pakar', 'utara', '2', '20', 'dago', 40135, 22551, 'Kec. Coblong', 3, 'Rumah orang tua', 2, 'Kendaraan pribadi', NULL, '085163612453', 'citra24@gmail.com', 0, NULL, 2147483647, 'Joko', '1967-12-17', 4, 'D3', 6, 'Wiraswasta', 4, '100jt', 2147483647, 'Nia', '1972-11-15', 5, 'S1', 3, 'Pegawai Negeri', 3, '100jt', NULL, '1970-01-01', 0, 'S1', 0, NULL, 0, NULL, 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Dian', 'P', 'Yogyakarta', '2001-07-10', 'e56g7h9e-3d08-55d7-8d5c-80d5f6', 1, 'Islam', 2147483647, 4388605, 2147483647, 'ID', 'Indonesia', 'JL. malioboro', 'timur', '4', '16', 'kota gede', 55122, 22552, 'Kec. Gondokusuman', 2, 'Asrama', 1, 'Sepeda motor', NULL, '085163634453', 'dian45@gmail.com', 1, 2147483647, 2147483647, 'Samsul', '1968-09-08', 3, 'SMA', 5, 'Petani', 3, '50jt', 2147483647, 'Lina', '1971-08-27', 4, 'S2', 6, 'Guru', 4, '50jt', 'Imam', '1966-01-11', 4, 'S1', 4, 'Swasta', 3, '50jt', 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Eka', 'L', 'Semarang', '1999-12-01', 'f67h8j9e-4c07-66e7-7e5d-90e5g7', 1, 'Islam', 2147483647, 4388616, 2147483647, 'ID', 'Indonesia', 'JL. pandanaran', 'selatan', '3', '8', 'gajahmungkur', 50232, 22553, 'Kec. Candisari', 2, 'Rumah orang tua', 2, 'Mobil', NULL, '085163646553', 'eka56@gmail.com', 0, NULL, 2147483647, 'Sugeng', '1972-04-20', 4, 'SMA', 6, 'Wiraswasta', 5, '100jt', 2147483647, 'Sri', '1974-02-10', 3, 'S1', 3, 'Ibu Rumah Tangga', 2, '100jt', NULL, '1971-03-15', 0, 'SMA', 0, NULL, 0, NULL, 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Fajar', 'L', 'Makassar', '2000-01-19', 'g78j9k9e-5b06-77f6-6f6d-a0f6g8', 1, 'Islam', 2147483647, 4388627, 2147483647, 'ID', 'Indonesia', 'JL. Pettarani', 'timur', '1', '5', 'panakkukang', 90231, 22554, 'Kec. Manggala', 3, 'Kost', 2, 'Kendaraan pribadi', NULL, '085163658653', 'fajar67@gmail.com', 0, NULL, 2147483647, 'Irfan', '1970-06-14', 3, 'D3', 5, 'Swasta', 2, '50jt', 2147483647, 'Aisyah', '1975-05-04', 4, 'SMA', 4, 'Ibu Rumah Tangga', 3, '50jt', NULL, '1971-03-01', 0, 'SMA', 0, NULL, 0, NULL, 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Gita', 'P', 'Denpasar', '2002-06-05', 'h89k0l9e-6a05-88e5-5e7d-b1g7h9', 1, 'Islam', 2147483647, 4388638, 2147483647, 'ID', 'Indonesia', 'JL. teuku umar', 'barat', '6', '7', 'denpasar', 80111, 22555, 'Kec. Denpasar Barat', 3, 'Rumah orang tua', 2, 'Sepeda motor', NULL, '085163670653', 'gita78@gmail.com', 0, NULL, 2147483647, 'Supriyadi', '1969-05-16', 5, 'SMA', 6, 'Swasta', 3, '50jt', 2147483647, 'Siti', '1972-04-07', 4, 'S1', 3, 'Pegawai Negeri', 3, '50jt', NULL, '1971-02-28', 0, 'SMP', 0, NULL, 0, NULL, 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Hana', 'P', 'Medan', '2003-09-28', 'i90l1m9e-7a04-99d4-4d8c-c2i8j0', 1, 'Islam', 2147483647, 4388649, 2147483647, 'ID', 'Indonesia', 'JL. Sisingamangaraja', 'utara', '9', '11', 'medan kota', 20219, 22556, 'Kec. Medan Kota', 3, 'Kost', 2, 'Mobil', NULL, '085163682653', 'hana89@gmail.com', 0, NULL, 2147483647, 'Ridwan', '1968-02-03', 4, 'SMA', 5, 'Swasta', 3, '100jt', 2147483647, 'Yuli', '1970-11-12', 4, 'S2', 6, 'Guru', 4, '100jt', 'Rama', '1968-06-22', 4, 'SMA', 4, 'Swasta', 3, '50jt', 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync'),
('Indra', 'L', 'Malang', '2001-08-17', 'j91m2n9e-8b03-00e3-3e9b-d3j9k1', 1, 'Islam', 2147483647, 4388650, 2147483647, 'ID', 'Indonesia', 'JL. Ijen', 'tengah', '5', '13', 'klojen', 65116, 22557, 'Kec. Klojen', 3, 'Kost', 2, 'Sepeda motor', NULL, '085163693753', 'indra90@gmail.com', 1, 2147483647, 2147483647, 'Adi', '1975-07-21', 4, 'S1', 5, 'Wiraswasta', 4, '100jt', 2147483647, 'Ratna', '1977-06-10', 5, 'S1', 3, 'Pegawai Negeri', 3, '100jt', NULL, '1968-07-22', 0, 'SMP', 0, NULL, 0, NULL, 0, 'Tidak ada', 0, 'Tidak ada', 0, 'Tidak ada', 'sudah sync');
