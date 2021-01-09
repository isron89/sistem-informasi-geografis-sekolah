-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 09 Jan 2021 pada 17.07
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_instansi` int(8) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `NPSN` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_instansi`, `nama_instansi`, `NPSN`, `website`, `no_telepon`, `alamat`, `kota`, `provinsi`, `latitude`, `longitude`) VALUES
(1, 'SMA Negeri 1 Surabaya', '20532242', 'sman1sby.sch.id', '(031) 5345670', 'Jalan Wijaya Kusuma No. 49, Ketabang, Kecamatan Genteng, Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.255437743046494', '112.74962046662773'),
(2, 'SMA Negeri 2 Surabaya', '20532230', 'sman2-sby.sch.id', '(031) 5345972', 'Jalan Wijaya Kusuma No. 48, Ketabang, Kecamatan Genteng, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.2562981508423725', '112.7493377661636'),
(3, 'SMA Negeri 3 Surabaya', '20532235', 'sma3surabaya.sch.id', '(031) 3812356', 'Jalan Memet Sastroawiryo No.4, Komp. Kenjeran, Kecamatan Bulak, Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.241971500162721', '112.78986292383405'),
(4, 'SMA Negeri 4 Surabaya', '20532247', '', '(031) 5013588', 'Jalan Mayjen Prof Dr, Moestopo 4, Tambaksari, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.265277698202826', '112.75537955266961'),
(5, 'SMA Negeri 5 Surabaya', '20532248', 'sman5surabaya.sch.id', '(031) 5345155', 'Jalan Kusuma Bangsa No.21, Ketabang, Kecamatan Genteng, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.2566876081502585', '112.75025215266949'),
(6, 'SMA Negeri 6 Surabaya', '20532260', '', ' (031) 5345974', 'Jalan Gubernur Suryo No.11, Embong Kaliasin, Kecamatan Genteng, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.26315208344104', '112.74453593917552'),
(7, 'SMA Negeri 7 Surabaya', '20532261', 'sman7surabaya.sch.id', '(031) 3718085', 'Jalan Ngaglik No.27-29, Kapasari, Kecamatan Genteng, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.248683203803649', '112.7523630931517'),
(8, 'SMA Negeri 8 Surabaya', '20532262', '', '(031) 3291732', 'Jalan Sultan Iskandar Muda No.42, Ujung, Kecamatan Semampir, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.224188103209627', '112.7422811815044'),
(9, 'SMA Negeri 9 Surabaya', '20532263', '', '(031) 5477817', 'Jalan Wijaya Kusuma No.48, Ketabang, Kecamatan Genteng, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.25756', '112.75049'),
(10, 'SMA Negeri 10 Surabaya', '20532243', '', ' (031) 8415273', 'Jalan Jemursari I/28, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.32002', '112.74053'),
(11, 'SMA Negeri 11 Surabaya', '20532244', '', ' (031) 7405420', 'Jalan Manukan Tengah, Manukan Kulon, Kecamatan Tandes, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.26192', '112.66072'),
(12, 'SMA Negeri 12 Surabaya', '20532245', '', '(031) 7406368', 'Jalan Sememi Kidul No.1, Sememi, Kecamatan Benowo, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.24207	', '112.63664'),
(13, 'SMA Negeri 13 Surabaya', '20532246', '', ' (031) 7531770', 'Jalan Menganti Lidah Kulon, Lidah Kulon, Kecamatan Lakarsantri, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(14, 'SMA Negeri 14 Surabaya', '20532238', '', ' (031) 8414451', 'Jalan Raya Tenggilis Mejoyo, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(15, 'SMA Negeri 15 Surabaya', '20532237', '', '(031) 8290473 ', 'Jalan Menanggal Selatan 103 Kota Surabaya', 'Kota Surabaya', 'Jawa Timur', '', ''),
(16, 'SMA Negeri 16 Surabaya', '20532236', '', '(031) 8415492 ', 'Jalan Raya Tenggilis Mejoyo, Kali Rungkut, Kec. Rungkut, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(17, 'SMA Negeri 17 Surabaya', '20532217', '', '(031) 8700717', 'Jalan Rungkut Asri Tengah, Rungkut Kidul, Kecamatan Rungkut, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(18, 'SMA Negeri 18 Surabaya', '20532218', '', '(031) 8286003', 'Jalan Bibis Karah Sawah 1 No.9, Karah, Kecamatan Jambangan, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(19, 'SMA Negeri 19 Surabaya', '20532219', '', '(031) 3814844', 'Jalan Kedung Cowek No.390, Tanah Kali Kedinding, Kecamatan Kenjeran, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(20, 'SMA Negeri 20 Surabaya', '20532231', '', '(031) 5935720', 'Jalan Medokan Semampir Indah No.119, Medokan Semampir, Kecamatan Sukolilo, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(21, 'SMA Negeri 21 Surabaya', '20532232', '', '(031) 5350753', 'Jalan Argopuro No.11-15, Sawahan, Kecamatan Sawahan, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(22, 'SMA Negeri 22 Surabaya', '20532233', '', '(031) 7664530', 'Jalan Balas Klumprik No.22, Balas Klumprik, Kecamatan Wiyung, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(23, 'SMK Negeri 1 Surabaya', '', '', '', 'Jalan SMEA No.04 Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(24, 'SMK Negeri 2 Surabaya', '', '', '', 'Jalan Tentara Geni Pelajar (Patua) No.26, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(25, 'SMK Negeri 3 Surabaya', '', '', '', 'Jalan Ahmad Yani, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(26, 'SMK Negeri 4 Surabaya', '', '', '', 'Jalan Kranggan No.81-101, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(27, 'SMK Negeri 5 Surabaya', '', '', '', 'Jalan Mayjend Prf. Dr.Moestopo, No.167-169, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(28, 'SMK Negeri 6 Surabaya', '', '', '', 'Jalan Margorejo, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(29, 'SMK Negeri 7 Surabaya', '', '', '', 'Jalan Pawiyatan No.02, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(30, 'SMK Negeri 8 Surabaya', '', '', '', 'Jalan Kamboja No.18, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(31, 'SMK Negeri 9 Surabaya', '', '', '', 'Jalan Siwalankerto Permai No.1, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(32, 'SMK Negeri 10 Surabaya', '', '', '', 'Jalan Keputih Tegal, , Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(33, 'SMK Negeri 11 Surabaya', '', '', '', 'Jalan Siwalankerto Permai, , Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '', ''),
(34, 'SMK Negeri 12 Surabaya', '', '', '', 'Jalan Siwalankerto Permai No.1A, Siwalankerto, Kecamatan Wonocolo, Kota Surabaya, Jawa Timur', 'Kota Surabaya', 'Jawa Timur', '-7.34032', '112.73988');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_instansi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_instansi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
