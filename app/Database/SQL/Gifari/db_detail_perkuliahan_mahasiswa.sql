CREATE TABLE `detail_perkuliahan_mahasiswa` (
  `id_registrasi_mahasiswa` varchar(50) NOT NULL,
  `id_prodi` varchar(50) NOT NULL,
  `nama_program_studi` varchar(50) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `id_semester` varchar(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `nama_semester` varchar(20) NOT NULL,
  `id_status_mahasiswa` varchar(20) NOT NULL,
  `nama_status_mahasiswa` varchar(20) NOT NULL,
  `ips` float DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `sks_semester` varchar(30) NOT NULL,
  `sks_total` varchar(30) NOT NULL,
  `status_async` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;