CREATE TABLE `detail_kelas_kuliah` (
  `id_kelas_kuliah` varchar(50) NOT NULL,
  `id_prodi` varchar(50) NOT NULL,
  `nama_program_studi` varchar(50) NOT NULL,
  `id_semester` int(50) NOT NULL,
  `nama_semester` varchar(50) NOT NULL,
  `id_matkul` varchar(50) NOT NULL,
  `kode_mata_kuliah` int(50) NOT NULL,
  `nama_mata_kuliah` varchar(50) NOT NULL,
  `nama_kelas_kuliah` int(50) NOT NULL,
  `bahasan` varchar(50) NOT NULL,
  `tanggal_mulai_efektif` date NOT NULL,
  `tanggal_akhir_efektif` date NOT NULL,
  `kapasitas` varchar(50) NOT NULL,
  `tanggal_tutup_daftar` varchar(50) NOT NULL,
  `prodi_penyelenggara` varchar(50) NOT NULL,
  `perguruan_tinggi_penyelenggara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;