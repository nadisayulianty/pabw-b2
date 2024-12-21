CREATE TABLE `riwayat_nilai_mahasiswa` (
  `id_registrasi_mahasiswa` varchar(50) NOT NULL,
  `id_prodi` varchar(50) NOT NULL,
  `nama_program_studi` varchar(50) NOT NULL,
  `id_priode` int(50) NOT NULL,
  `id_matkul` varchar(50) NOT NULL,
  `nama_mata_kuliah` varchar(50) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `nama_kelas_kuliah` varchar(50) NOT NULL,
  `sks_mata_kuliah` varchar(50) NOT NULL,
  `nilai_angka` varchar(50) NOT NULL,
  `nilai_huruf` varchar(50) NOT NULL,
  `nilai_index` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `status_sync` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;