
-- --------------------------------------------------------

--
-- Table structure for table `listanggotaaktivitasmahasiswa`
--

CREATE TABLE `listanggotaaktivitasmahasiswa` (
  `id_aktivitas` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `id_anggota` varchar(255) DEFAULT NULL,
  `id_registrasi_mahasiswa` varchar(255) DEFAULT NULL,
  `nim` int(255) DEFAULT NULL,
  `nama_mahasiswa` varchar(255) DEFAULT NULL,
  `jenis_peran` int(255) DEFAULT NULL,
  `nama_jenis_peran` varchar(255) DEFAULT NULL,
  `status_sync` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listanggotaaktivitasmahasiswa`
--

INSERT IGNORE INTO `listanggotaaktivitasmahasiswa` (`id_aktivitas`, `judul`, `id_anggota`, `id_registrasi_mahasiswa`, `nim`, `nama_mahasiswa`, `jenis_peran`, `nama_jenis_peran`, `status_sync`) VALUES
('0004c560-54d7-4f38-95a1-b6693e4ca929', 'PENGARUH PERUBAHAN SISTEM KERJA SAMA', 'e6399665-a18b-4681-b965-12c51690b4dd', '862a8074-ff0b-45f4-b733-9005802c023d', 215101000, 'budi', 3, 'Personal', 'sudah sync'),
('000902cd-b2cf-417d-bba4-2e321d7575d8', 'PENCIPTAAN KARYA VISUAL ANIMASI 3D MOTION GRAFIS', '501c0bff-322b-4ffa-98ad-cc317833e489', '4993d597-4de3-4c1b-bb9e-0d4cdf7a62b6', 2147483647, 'wati', 3, 'Personal', 'sudah sync'),
('7b2bde98-212f-49d6-bb9b-8c01458f5b45', 'ANALISIS DAMPAK DIGITALISASI PADA BISNIS LOKAL', 'f7d7ae3d-9483-4957-a8db-89996277d987', 'b6758f7e-1c02-44ba-9ad6-df6173fc1e07', 210311000, 'andi', 3, 'Personal', 'sudah sync'),
('8b8c9dfb-2b43-46e3-983d-5435b29447d9', 'PERAN PENGGUNAAN TEKNOLOGI DALAM PENDIDIKAN', 'fa3b5bc5-4a3c-40e2-8d59-9153749e0a42', '9d8cb338-b8b6-4f67-870b-b9fc7a062fea', 2147483647, 'siti', 3, 'Personal', 'sudah sync'),
('d74b3294-278b-403f-8cde-d91efab4e54b', 'PENGARUH MEDIA SOSIAL TERHADAP PERILAKU REMAJA', 'a4f4675c-8746-470a-9ad4-3281268ff6a7', '8b04abf6-876f-49ea-84d7-16b7990e24b5', 215511000, 'agus', 3, 'Personal', 'sudah sync'),
('a23e5b8c-c8f1-4f30-9f41-6f47ae04b2c9', 'PEMANFAATAN DATA UNTUK KEPUTUSAN BISNIS STRATEGIS', 'a12e3bfc-578d-4683-8570-10e97b97cfc8', 'c8763df8-ebe7-44fb-88b9-e1f54b6a0d56', 215611000, 'nina', 3, 'Personal', 'sudah sync'),
('11c24a64-b508-4f6e-9897-ebe5d0539d76', 'STRATEGI PENGEMBANGAN KONTEN PEMASARAN ONLINE', '2c24c9d4-76db-4860-9e0d-8b3d0c007ad2', 'b76e4f24-11d1-49be-b59f-1ef5010ae9d6', 2110201000, 'raisa', 3, 'Personal', 'sudah sync'),
('9c3fa2b3-9a3a-40d4-aec4-f325b9493b92', 'STUDI KASUS PEMANFAATAN BIG DATA DI SEKTOR KESEHATAN', 'ce7c4f59-27ef-4b8a-b1f8-06b7295e4c33', 'f004b653-b9f9-4d71-a8ee-40b7ac8fe572', 2147483647, 'rama', 3, 'Personal', 'sudah sync'),
('f44f7e39-88c1-472a-b8c1-89234e8ab1d6', 'ANALISIS PENGARUH PERUBAHAN IKLIM PADA EKOSISTEM LAUT', '4b4fa8b5-590e-47b7-b03b-45cc7fa93435', 'd4e41e34-489f-4e7a-95a4-38b750b65a23', 210912000, 'lina', 3, 'Personal', 'sudah sync'),
('b7c609a2-3645-4d1b-a31e-e63e6e69e2a6', 'PENGEMBANGAN TEKNOLOGI ENERGI TERBARUKAN', 'b33fa9b7-581f-46c6-948e-7b52e4b9a245', '5f4b59d1-91b8-4c9f-80e4-2a6a51f87a31', 2147483647, 'dani', 3, 'Personal', 'sudah sync'),
('a53b9dc6-4863-4cd4-8373-5d91f589a3e1', 'INOVASI DESAIN PRODUK LOKAL UNTUK PASAR INTERNASIONAL', '5cc7b3cf-4e4a-4a53-a2b9-44bfa6f71d3d', 'f907e9ba-28c9-45b2-8e29-61b6f5ef7f73', 2147483647, 'susan', 3, 'Personal', 'sudah sync'),
('0ca9ebd9-0c7f-4c71-8e83-50aeb2b36f69', 'PERAN TEKNOLOGI INFORMASI DALAM MANAJEMEN PROYEK', '5af2b27c-0b32-4b18-940a-51e5e7b3dd0f', '48d71630-1f83-437d-b13b-2a8c7b6e0522', 2147483647, 'putra', 3, 'Personal', 'sudah sync');