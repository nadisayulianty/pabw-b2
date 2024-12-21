-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Des 2024 pada 12.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes-web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilpt`
--

CREATE TABLE `profilpt` (
  `id_perguruan_tinggi` varchar(36) NOT NULL,
  `kode_perguruan_tinggi` int(11) NOT NULL,
  `nama_perguruan_tinggi` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `faximile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `jalan` text NOT NULL,
  `dusun` varchar(100) NOT NULL,
  `rt_rw` varchar(20) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(100) NOT NULL,
  `lintang_bujur` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `unit_cabang` varchar(100) NOT NULL,
  `nomor_rekening` varchar(50) NOT NULL,
  `mbs` int(11) NOT NULL,
  `luas_tanah_milik` int(11) NOT NULL,
  `luas_tanah_bukan_milik` int(11) NOT NULL,
  `sk_pendirian` varchar(50) NOT NULL,
  `tanggal_sk_pendirian` datetime NOT NULL,
  `id_status_milik` int(11) NOT NULL,
  `nama_status_milik` varchar(100) NOT NULL,
  `status_perguruan_tinggi` varchar(10) NOT NULL,
  `sk_izin_operasional` varchar(50) NOT NULL,
  `tanggal_izin_operasional` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profilpt`
--

INSERT INTO `profilpt` (`id_perguruan_tinggi`, `kode_perguruan_tinggi`, `nama_perguruan_tinggi`, `telepon`, `faximile`, `email`, `website`, `jalan`, `dusun`, `rt_rw`, `kelurahan`, `kode_pos`, `id_wilayah`, `nama_wilayah`, `lintang_bujur`, `bank`, `unit_cabang`, `nomor_rekening`, `mbs`, `luas_tanah_milik`, `luas_tanah_bukan_milik`, `sk_pendirian`, `tanggal_sk_pendirian`, `id_status_milik`, `nama_status_milik`, `status_perguruan_tinggi`, `sk_izin_operasional`, `tanggal_izin_operasional`, `id`) VALUES
('a123ab87-1111-4238-b5a1-5160af44ebd7', 43001, 'Universitas Digital\r\nNusantara', '021-87965678', '021-87965679', 'info@udn.ac.id', 'www.udn.ac.id', 'Jl. Teknologi No. 11 Jakarta Selatan', '', '', '-', 12540, 31710, 'Kec. Pasar Minggu', '', '', '', '', 0, 0, 0, '045/D/O/2005', '2005-09-10 00:00:00', 3, 'Yayasan', 'B', '', '2009-01-15 09:30:00', 1),
('b012jk87-1010-4238-k5j1-5160af44ebd7', 52012, 'Politeknik Kesehatan\r\nPalembang', '0711-123456', '0711-123457', 'admin@poltekes.ac.id', 'www.poltekes.ac.id', 'Jl. Sudirman No. 20 Palembang', 'Dusun Sembawa', 'RW 02/RT 01', 'Kelurahan Ilir Timur', 30113, 16720, 'Kec. Ilir Timur\r\nII', '-2.983, 104.764', 'Bank Syariah Indonesia', 'Palembang', '4455667788', 1, 50000, 15000, '090/D/O/2004', '2004-10-10 00:00:00', 3, 'Negeri', 'A', 'SK-POLTEKES-006', '2004-10-10 10:00:00', 2),
('b234bc87-2222-4238-c5b1-5160af44ebd7', 45020, 'Institut Teknologi\r\nKreatif Bandung', '022-87456321', '022-87456322', 'contact@itkb.ac.id', 'www.itkb.ac.id', 'Jl. Cendekia No. 45 Bandung', '', '', '-', 40123, 26022, 'Kec. Coblong', '', '', '', '', 0, 0, 0, '089/D/O/2010', '0000-00-00 00:00:00', 3, 'Yayasan', 'A', '', '2011-05-10 10:15:00', 3),
('c345cd87-3333-4238-d5c1-5160af44ebd7', 48012, 'Politeknik Negeri\r\nSemarang', '024-8312746', '024-8312747', 'admin@polines.ac.id', 'www.polines.ac.id', 'Jl. Prof. Sudarto No. 14 Semarang', '', '', '-', 50275, 33720, 'Kec. Tembalang', '', '', '', '', 0, 0, 0, '132/D/O/1997', '1997-11-20 00:00:00', 3, 'Negeri', 'A', '', '2010-11-05 14:45:00', 4),
('d456de87-4444-4238-e5d1-5160af44ebd7', 46056, 'Universitas Bhayangkara\r\nSurabaya', '031-8790215', '031-8790216', 'support@ubhs.ac.id', 'www.ubhs.ac.id', 'Jl. Raya Rungkut No. 18 Surabaya', '', '', '-', 60293, 35780, 'Kec. Gunung Anyar', '', '', '', '', 0, 0, 0, '021/D/O/2000', '2000-03-05 00:00:00', 3, 'Yayasan', 'B', '', '2008-03-20 08:00:00', 5),
('e567ef87-5555-4238-f5e1-5160af44ebd7', 47067, 'Universitas Teknologi\r\nJakarta', '021-8765432', '021-8765433', 'contact@utj.ac.id', 'www.utj.ac.id', 'Jl. Raya Tanjung Barat No. 23 Jakarta Selatan', 'Dusun\r\nMekar', 'RW 03/RT 02', 'Kelurahan Lenteng Agung', 12530, 31711, 'Kec.\r\nJagakarsa', '-6.295, 106.805', 'Bank Mandiri', 'Jakarta Pusat', '1234567890', 1, 50000, 0, '100/D/O/2008', '2008-07-15 00:00:00', 3, 'Yayasan', 'B', 'SK-UTJ-001', '2008-07-15 07:30:00', 6),
('eebbab87-9991-4238-a5a1-5160af44ebd7', 41034, 'Universitas Widyatama', '022-7274010', '022-7274010', 'utama@widyatama.ac.id', 'www.widyatama.ac.id', 'Jalan Cikutra No. 204-A Bandung', '', '', '-', 40125, 26021, 'Kec. Cibeunying Kidul', '', '', '', '', 0, 0, 0, '137/D/O/2001', '2001-08-02 00:00:00', 3, 'Yayasan', 'A', '', '0000-00-00 00:00:00', 7),
('f678fg87-6666-4238-g5f1-5160af44ebd7', 48078, 'Institut Seni dan Desain\r\nSurabaya', '031-7654321', '031-7654322', 'info@isds.ac.id', 'www.isds.ac.id', 'Jl. Ahmad Yani No. 15 Surabaya', 'Dusun Harmoni', 'RW\r\n04/RT 01', 'Kelurahan Wonokromo', 60241, 35782, 'Kec. Wonokromo', '-\r\n7.285, 112.737', 'Bank BNI', 'Surabaya', '0987654321', 1, 30000, 10000, '050/D/O/2009', '2009-09-10 00:00:00', 3, 'Yayasan', 'A', 'SK-ISDS-002', '2009-09-10 10:45:00', 8),
('fabcde12-3456-7890-a1b2-c3d4ef567890', 41035, 'Universitas Teknologi Bandung', '022-1234567', '022-1234568', 'info@utb.ac.id', 'www.utb.ac.id', 'Jalan Soekarno Hatta No. 25 Bandung', '', '', '-', 40126, 26022, 'Kec. Bojongsoang', '', '', '', '', 0, 0, 0, '138/D/O/2002', '2002-09-15 00:00:00', 3, 'Yayasan', 'A', '', '2022-01-01 00:00:00', 9),
('h890hi87-8888-4238-i5h1-5160af44ebd7', 50090, 'Akademi Pariwisata\r\nYogyakarta', '0274-543210', '0274-543211', 'contact@apar.ac.id', 'www.apar.ac.id', 'Jl. Malioboro No. 99 Yogyakarta', 'Dusun Suka Rasa', 'RW 02/RT 02', 'Kelurahan Suryatmajan', 55211, 34710, 'Kec. Danurejan', '-7.797, 110.371', 'Bank BCA', 'Yogyakarta', '2233445566', 1, 15000, 0, '040/D/O/2007', '2007-03-12 00:00:00', 3, 'Yayasan', 'A', 'SK-APAR-004', '2007-03-12 09:15:00', 10),
('i901ij87-9999-4238-j5i1-5160af44ebd7', 51001, 'Universitas Pembangunan\r\nMakassar', '0411-543210', '0411-543211', 'info@upm.ac.id', 'www.upm.ac.id', 'Jl. Andi Pangeran Pettarani No. 120 Makassar', 'Dusun\r\nMerdeka', 'RW 05/RT 04', 'Kelurahan Tamamaung', 90231, 73710, 'Kec.\r\nPanakkukang', '-5.135, 119.415', 'Bank BTN', 'Makassar', '3344556677', 1, 80000, 20000, '067/D/O/2006', '2006-05-05 00:00:00', 3, 'Yayasan', 'A', 'SK-UPM-005', '2006-05-05 11:40:00', 11),
('j789gh87-7777-4238-h5g1-5160af44ebd7', 49089, 'Sekolah Tinggi Ilmu\r\nKomunikasi Medan', '061-6543210', '061-6543211', 'admin@stikom.ac.id', 'www.stikom.ac.id', 'Jl. Gajah Mada No. 45 Medan', 'Dusun Tani', 'RW\r\n01/RT 03', 'Kelurahan Polonia', 20157, 12711, 'Kec. Medan Polonia', '3.585, 98.678', 'Bank BRI', 'Medan', '1122334455', 1, 20000, 5000, '130/D/O/2010', '2010-06-20 00:00:00', 3, 'Yayasan', 'B', 'SK-STIKOM003', '2010-06-20 15:00:00', 12);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `profilpt`
--
ALTER TABLE `profilpt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `profilpt`
--
ALTER TABLE `profilpt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
