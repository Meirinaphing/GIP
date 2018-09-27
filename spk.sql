-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 04:12 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_karyawan`
--

CREATE TABLE `calon_karyawan` (
  `no` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_karyawan`
--

INSERT INTO `calon_karyawan` (`no`, `idpelamar`, `tgl`, `waktu`, `status`) VALUES
(1, 1, '29/09/2018', '09:30 AM', 'wawancara ke 2 (PASS)'),
(2, 2, '-', '-', 'Belum Wawancara'),
(3, 3, '-', '-', 'Belum Wawancara');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `namadivisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`namadivisi`) VALUES
('Admin'),
('Kasir'),
('Office Boy');

-- --------------------------------------------------------

--
-- Table structure for table `faktor_wawancara`
--

CREATE TABLE `faktor_wawancara` (
  `idf` int(10) NOT NULL,
  `faktor` varchar(100) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `isibobot`
--

CREATE TABLE `isibobot` (
  `noisi` int(10) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `namabobot` varchar(100) NOT NULL,
  `namafield` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isibobot`
--

INSERT INTO `isibobot` (`noisi`, `divisi`, `namabobot`, `namafield`, `status`, `nilai`) VALUES
(18, 'Kasir', 'Komunikasi', 'komunikasi', 'b', 10),
(24, 'Kasir', 'Kecerdasan', 'kecerdasan', 'b', 20),
(25, 'Kasir', 'Percaya Diri', 'pdiri', 'b', 30),
(26, 'Kasir', 'Kemampuan Umum', 'kumum', 'b', 20),
(28, 'Admin', 'Kepemimpinan', 'kepemimpinan', 'b', 20),
(29, 'Admin', 'Motivasi', 'motivasi', 'b', 10),
(30, 'Admin', 'Pengalaman', 'pengalaman', 'b', 20),
(31, 'Admin', 'Keputusan', 'keputusan', 'b', 30),
(32, 'Admin', 'Sosialisasi', 'sosialisasi', 'b', 20),
(33, 'Office Boy', 'Rata-Rata Wawancara', 'rrtw', 'b', 20),
(34, 'Office Boy', 'Penyakit', 'penyakit', 'c', 10),
(36, 'Office Boy', 'Bahasa', 'bahasa', 'b', 10),
(37, 'Office Boy', 'Gaji', 'gaji', 'c', 20),
(39, 'Kasir', 'Kemampuan Khusus', 'kkhusus', 'b', 20),
(41, 'Office Boy', 'Pengalaman Kerja', 'pkkerja', 'b', 40);

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `idkeputusan` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `tglmasuk` varchar(11) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `uangmakan` varchar(50) NOT NULL,
  `pengobatan` varchar(50) NOT NULL,
  `transportasi` varchar(100) NOT NULL,
  `jamsostek` varchar(20) NOT NULL,
  `fasilitaslain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_wawancara`
--

CREATE TABLE `nilai_wawancara` (
  `id` int(11) NOT NULL,
  `idwawancara` int(11) NOT NULL,
  `komunikasi` int(10) NOT NULL,
  `kecerdasan` int(10) NOT NULL,
  `pdiri` int(10) NOT NULL,
  `kumum` int(10) NOT NULL,
  `kkhusus` int(10) NOT NULL,
  `kepemimpinan` int(10) NOT NULL,
  `motivasi` int(10) NOT NULL,
  `pengalaman` int(10) NOT NULL,
  `pkeputusan` int(10) NOT NULL,
  `sosialisasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_wawancara`
--

INSERT INTO `nilai_wawancara` (`id`, `idwawancara`, `komunikasi`, `kecerdasan`, `pdiri`, `kumum`, `kkhusus`, `kepemimpinan`, `motivasi`, `pengalaman`, `pkeputusan`, `sosialisasi`) VALUES
(1, 1, 1, 2, 3, 4, 5, 4, 3, 5, 5, 4),
(2, 2, 2, 3, 4, 5, 3, 2, 3, 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `palamar_penyakit`
--

CREATE TABLE `palamar_penyakit` (
  `nopenyakit` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `namapenyakit` varchar(100) NOT NULL,
  `tglmasuk` varchar(10) NOT NULL,
  `notepenyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `palamar_penyakit`
--

INSERT INTO `palamar_penyakit` (`nopenyakit`, `idpelamar`, `namapenyakit`, `tglmasuk`, `notepenyakit`) VALUES
(1, 1, 'Jantung', '08/2000', 'sakit aj');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar`
--

CREATE TABLE `pelamar` (
  `idpelamar` int(10) NOT NULL,
  `namapelamar` varchar(100) NOT NULL,
  `fotopelamar` text NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `noktp` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jabatandilamar` varchar(100) NOT NULL,
  `jkpelamar` varchar(10) NOT NULL,
  `statuspelamar` varchar(20) NOT NULL,
  `kebangsaan` varchar(59) NOT NULL,
  `notlpn` varchar(20) NOT NULL,
  `ditempatkan` text NOT NULL,
  `ingingaji` varchar(15) NOT NULL,
  `adakeluarga` text NOT NULL,
  `pernahlamar` text NOT NULL,
  `pelanggaran` text NOT NULL,
  `perusahaanlain` text NOT NULL,
  `mulaikerja` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar`
--

INSERT INTO `pelamar` (`idpelamar`, `namapelamar`, `fotopelamar`, `tempatlahir`, `tgllahir`, `noktp`, `alamat`, `jabatandilamar`, `jkpelamar`, `statuspelamar`, `kebangsaan`, `notlpn`, `ditempatkan`, `ingingaji`, `adakeluarga`, `pernahlamar`, `pelanggaran`, `perusahaanlain`, `mulaikerja`, `email`, `status`) VALUES
(1, 'elven', 'fotopelamar/KE8t97294930e497ad395fb93124d919e985d.png', 'pnk', '1997-08-01', '090909', 'ktp', '2409-1-0', 'Pria', 'Belum Nikah', 'indonesia', '0896-4422-3322_', 'gak', 'Rp.2.500.000', 'engga', 'tidak pernah', 'tidak', 'tidak', 'segera', 'evneve00@gmail.com', 'Approved'),
(2, 'namab', 'fotopelamar/dyuBc7294930e497ad395fb93124d919e985d.png', 'pnk', '2018-09-19', '123', 'asd', '2409-1-0', 'Pria', 'Belum Nikah', '123', '1231-2312-3123_', '98', 'Rp.98', '98', '98', '98', '98', '98', 'evneve00@gmail.com', 'Approved'),
(3, 'namab', 'fotopelamar/1fHFA7294930e497ad395fb93124d919e985d.png', 'pnk', '2018-09-19', '123', 'asd', '2409-1-0', 'Pria', 'Belum Nikah', '123', '1231-2312-3123_', '98', 'Rp.98', '98', '98', '98', '98', '98', 'evneve00@gmail.com', 'Approved'),
(4, 'namab', 'fotopelamar/77LUd7294930e497ad395fb93124d919e985d.png', 'pnk', '2018-09-19', '123', 'asd', '2409-1-0', 'Pria', 'Belum Nikah', '123', '1231-2312-3123_', '98', 'Rp.98', '98', '98', '98', '98', '98', 'evneve00@gmail.com', 'barudaftar'),
(5, 'namab', 'fotopelamar/lY2hC7294930e497ad395fb93124d919e985d.png', 'pnk', '2018-09-19', '123', 'asd', '2409-1-0', 'Pria', 'Belum Nikah', '123', '1231-2312-3123_', '98', 'Rp.98', '98', '98', '98', '98', '98', 'evneve00@gmail.com', 'barudaftar'),
(6, 'namab', 'fotopelamar/CStMJ7294930e497ad395fb93124d919e985d.png', 'pnk', '2018-09-19', '123', 'asd', '2409-1-0', 'Pria', 'Belum Nikah', '123', '1231-2312-3123_', '98', 'Rp.98', '98', '98', '98', '98', '98', 'evneve00@gmail.com', 'barudaftar'),
(7, 'namab', 'fotopelamar/HNuBy7294930e497ad395fb93124d919e985d.png', 'pnk', '2018-09-19', '123', 'asd', '2409-1-0', 'Pria', 'Belum Nikah', '123', '1231-2312-3123_', '98', 'Rp.98', '98', '98', '98', '98', '98', 'evneve00@gmail.com', 'barudaftar'),
(8, 'namab', 'fotopelamar/dKuiL7294930e497ad395fb93124d919e985d.png', 'pnk', '2018-09-19', '123', 'asd', '2409-1-0', 'Pria', 'Belum Nikah', '123', '1231-2312-3123_', '98', 'Rp.98', '98', '98', '98', '98', '98', 'evneve00@gmail.com', 'barudaftar'),
(9, 'namab', 'fotopelamar/lzazw7294930e497ad395fb93124d919e985d.png', 'pnk', '2018-09-19', '123', 'asd', '2409-1-0', 'Pria', 'Belum Nikah', '123', '1231-2312-3123_', '98', 'Rp.98', '98', '98', '98', '98', '98', 'evneve00@gmail.com', 'barudaftar'),
(10, 'namab', 'fotopelamar/sLiT87294930e497ad395fb93124d919e985d.png', 'pnk', '2018-09-19', '123', 'asd', '2409-1-0', 'Pria', 'Belum Nikah', '123', '1231-2312-3123_', '98', 'Rp.98', '98', '98', '98', '98', '98', 'evneve00@gmail.com', 'barudaftar');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_bahasa`
--

CREATE TABLE `pelamar_bahasa` (
  `nobahasa` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `nama_bahasa` varchar(50) NOT NULL,
  `lisan` varchar(50) NOT NULL,
  `menulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_bahasa`
--

INSERT INTO `pelamar_bahasa` (`nobahasa`, `idpelamar`, `nama_bahasa`, `lisan`, `menulis`) VALUES
(1, 1, 'Inggris', 'passive_lisan', 'passive_write'),
(2, 2, 'Inggris', 'active_lisan', 'active_write'),
(3, 3, 'Inggris', 'active_lisan', 'active_write'),
(4, 4, 'Inggris', 'active_lisan', 'active_write'),
(5, 5, 'Inggris', 'active_lisan', 'active_write'),
(6, 6, 'Inggris', 'active_lisan', 'active_write'),
(7, 7, 'Inggris', 'active_lisan', 'active_write'),
(8, 8, 'Inggris', 'active_lisan', 'active_write'),
(9, 9, 'Inggris', 'active_lisan', 'active_write'),
(10, 10, 'Inggris', 'active_lisan', 'active_write'),
(11, 2, 'indo', 'active_lisan', 'active_write');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_kerabat`
--

CREATE TABLE `pelamar_kerabat` (
  `idkerabat` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `nama_k` varchar(100) NOT NULL,
  `telp_k` varchar(100) NOT NULL,
  `posisi_k` varchar(100) NOT NULL,
  `perusahaan_k` varchar(100) NOT NULL,
  `hubungan_k` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_kerabat`
--

INSERT INTO `pelamar_kerabat` (`idkerabat`, `idpelamar`, `nama_k`, `telp_k`, `posisi_k`, `perusahaan_k`, `hubungan_k`) VALUES
(1, 1, 'siapa', '0800-0099-999__', 'gatau', 'gatau', 'ada hubungan aj');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_nama`
--

CREATE TABLE `pelamar_nama` (
  `idnama` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `nama_penting` varchar(100) NOT NULL,
  `hubungan_penting` varchar(100) NOT NULL,
  `telp_penting` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_nama`
--

INSERT INTO `pelamar_nama` (`idnama`, `idpelamar`, `nama_penting`, `hubungan_penting`, `telp_penting`) VALUES
(1, 1, 'namanya', 'keuarga', '0899-9999-9999_'),
(2, 2, '9898', '98', '98__-____-_____'),
(3, 3, '', '', ''),
(4, 4, '', '', ''),
(5, 5, '', '', ''),
(6, 6, '', '', ''),
(7, 7, '', '', ''),
(8, 8, '', '', ''),
(9, 9, '', '', ''),
(10, 10, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_pelatihan`
--

CREATE TABLE `pelamar_pelatihan` (
  `nopelatihan` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `nama_pelatihan` varchar(100) NOT NULL,
  `penyelenggaraan_pelatihan` varchar(100) NOT NULL,
  `tgl_pelatihan` date NOT NULL,
  `keterangan_pelatihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_pendidikan`
--

CREATE TABLE `pelamar_pendidikan` (
  `idpelamar` int(10) NOT NULL,
  `namasd` varchar(100) NOT NULL,
  `jurusansd` varchar(100) NOT NULL,
  `ipksd` varchar(10) NOT NULL,
  `tglmasuksd` date NOT NULL,
  `tglselesaisd` date NOT NULL,
  `namasmp` varchar(100) NOT NULL,
  `jurusansmp` varchar(100) NOT NULL,
  `ipksmp` varchar(10) NOT NULL,
  `tglmasuksmp` date NOT NULL,
  `tglselesaismp` date NOT NULL,
  `namasma` varchar(100) NOT NULL,
  `jurusansma` varchar(100) NOT NULL,
  `ipksma` varchar(10) NOT NULL,
  `tglmasuksma` date NOT NULL,
  `tglselesaisma` date NOT NULL,
  `namauniversiatas` varchar(100) NOT NULL,
  `jurusanuniversiatas` varchar(100) NOT NULL,
  `tglmasukuniversiatas` date NOT NULL,
  `tglselesaiuniversiatas` date NOT NULL,
  `ipkuniversiatas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_pendidikan`
--

INSERT INTO `pelamar_pendidikan` (`idpelamar`, `namasd`, `jurusansd`, `ipksd`, `tglmasuksd`, `tglselesaisd`, `namasmp`, `jurusansmp`, `ipksmp`, `tglmasuksmp`, `tglselesaismp`, `namasma`, `jurusansma`, `ipksma`, `tglmasuksma`, `tglselesaisma`, `namauniversiatas`, `jurusanuniversiatas`, `tglmasukuniversiatas`, `tglselesaiuniversiatas`, `ipkuniversiatas`) VALUES
(1, 'sd', 'sd', '4', '2000-02-02', '2006-02-02', 'smp', 'smp', '4', '2006-02-02', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', ''),
(2, '1123', '123', '123', '0000-00-00', '0000-00-00', '3123', '123', '123', '0000-00-00', '0000-00-00', '', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '0000-00-00', '0000-00-00', ''),
(3, '1123', '123', '123', '0000-00-00', '0000-00-00', '3123', '123', '123', '0000-00-00', '0000-00-00', '', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '0000-00-00', '0000-00-00', ''),
(4, '1123', '123', '123', '0000-00-00', '0000-00-00', '3123', '123', '123', '0000-00-00', '0000-00-00', '', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '0000-00-00', '0000-00-00', ''),
(5, '1123', '123', '123', '0000-00-00', '0000-00-00', '3123', '123', '123', '0000-00-00', '0000-00-00', '', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '0000-00-00', '0000-00-00', ''),
(6, '1123', '123', '123', '0000-00-00', '0000-00-00', '3123', '123', '123', '0000-00-00', '0000-00-00', '', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '0000-00-00', '0000-00-00', ''),
(7, '1123', '123', '123', '0000-00-00', '0000-00-00', '3123', '123', '123', '0000-00-00', '0000-00-00', '', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '0000-00-00', '0000-00-00', ''),
(8, '1123', '123', '123', '0000-00-00', '0000-00-00', '3123', '123', '123', '0000-00-00', '0000-00-00', '', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '0000-00-00', '0000-00-00', ''),
(9, '1123', '123', '123', '0000-00-00', '0000-00-00', '3123', '123', '123', '0000-00-00', '0000-00-00', '', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '0000-00-00', '0000-00-00', ''),
(10, '1123', '123', '123', '0000-00-00', '0000-00-00', '3123', '123', '123', '0000-00-00', '0000-00-00', '', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_pengalaman`
--

CREATE TABLE `pelamar_pengalaman` (
  `nopengalaman` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `pengalaman_nama` varchar(100) NOT NULL,
  `pengalaman_bererak` varchar(100) NOT NULL,
  `pengalaman_jabatang` varchar(100) NOT NULL,
  `pengalaman_gaji` varchar(100) NOT NULL,
  `pengalaman_mulai` date NOT NULL,
  `pengalaman_keluar` date NOT NULL,
  `pengalaman_alasan_berhenti` varchar(100) NOT NULL,
  `pengalaman_gambaran_pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_pengalaman`
--

INSERT INTO `pelamar_pengalaman` (`nopengalaman`, `idpelamar`, `pengalaman_nama`, `pengalaman_bererak`, `pengalaman_jabatang`, `pengalaman_gaji`, `pengalaman_mulai`, `pengalaman_keluar`, `pengalaman_alasan_berhenti`, `pengalaman_gambaran_pekerjaan`) VALUES
(1, 1, 'perusahaan', 'bidang', 'admin', 'Rp.1.000.000', '2017-09-07', '2018-09-26', 'bosan', 'ya kerja aja'),
(2, 3, '123', '123', '123', 'Rp.123', '0000-00-00', '0000-00-00', '123123', '123'),
(3, 4, '123123', '123123', '123123', 'Rp.123.123', '0000-00-00', '0000-00-00', '212', '121'),
(4, 5, '123123', '123123', '123123', 'Rp.123.123', '0000-00-00', '0000-00-00', '212', '121'),
(5, 6, '123123', '123123', '123123', 'Rp.123.123', '0000-00-00', '0000-00-00', '212', '121'),
(6, 7, '123123', '123123', '123123', 'Rp.123.123', '0000-00-00', '0000-00-00', '212', '121'),
(7, 8, '123123', '123123', '123123', 'Rp.123.123', '0000-00-00', '0000-00-00', '212', '121'),
(8, 9, '123123', '123123', '123123', 'Rp.123.123', '0000-00-00', '0000-00-00', '212', '121'),
(9, 10, '123123', '123123', '123123', 'Rp.123.123', '2011-11-01', '2013-11-01', '212', '121');

-- --------------------------------------------------------

--
-- Table structure for table `pelamar_saudara`
--

CREATE TABLE `pelamar_saudara` (
  `nosaudara` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `nama_s` varchar(100) NOT NULL,
  `umur_s` varchar(100) NOT NULL,
  `pendidikan_s` varchar(100) NOT NULL,
  `keterangan_s` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelamar_saudara`
--

INSERT INTO `pelamar_saudara` (`nosaudara`, `idpelamar`, `nama_s`, `umur_s`, `pendidikan_s`, `keterangan_s`) VALUES
(1, 1, 'ayah', '40', 'sd', 'sd'),
(2, 1, 'ibu', '40', 'smp', 'smp'),
(3, 1, 'elven', '40', 'smk', 'smk'),
(4, 2, '123', '123', '123', '123'),
(5, 2, '123', '123', '123', '123'),
(6, 2, '123', '123', '123', '13'),
(7, 3, '123', '123', '123', '123'),
(8, 3, '123', '123', '123', '123'),
(9, 3, '', '', '', ''),
(10, 4, '123', '123', '123', '123'),
(11, 4, '123', '123', '123', '123'),
(12, 4, '', '', '', ''),
(13, 5, '123', '123', '123', '123'),
(14, 5, '123', '123', '123', '123'),
(15, 5, '', '', '', ''),
(16, 6, '123', '123', '123', '123'),
(17, 6, '123', '123', '123', '123'),
(18, 6, '', '', '', ''),
(19, 7, '123', '123', '123', '123'),
(20, 7, '123', '123', '123', '123'),
(21, 7, '', '', '', ''),
(22, 8, '123', '123', '123', '123'),
(23, 8, '123', '123', '123', '123'),
(24, 8, '', '', '', ''),
(25, 9, '123', '123', '123', '123'),
(26, 9, '123', '123', '123', '123'),
(27, 9, '', '', '', ''),
(28, 10, '123', '123', '123', '123'),
(29, 10, '123', '123', '123', '123'),
(30, 10, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembobotan`
--

CREATE TABLE `pembobotan` (
  `nopembobotan` int(10) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_karyawan`
--

CREATE TABLE `permintaan_karyawan` (
  `nopk` varchar(50) NOT NULL,
  `iduser` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `job_kelas` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jum_pria` int(5) NOT NULL,
  `jum_wanita` int(5) NOT NULL,
  `p_budget` text NOT NULL,
  `p_bud_no` text NOT NULL,
  `status_karyawan` varchar(10) NOT NULL,
  `status_karyawan_k` int(5) NOT NULL,
  `uraian_p` text NOT NULL,
  `umur` int(3) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pengalaman` varchar(50) NOT NULL,
  `pengalaman_y` int(5) NOT NULL,
  `kemampuan` text NOT NULL,
  `s_gaji` int(50) NOT NULL,
  `e_gaji` int(50) NOT NULL,
  `rencena_d` varchar(100) NOT NULL,
  `man_planning_thn` varchar(10) NOT NULL,
  `man_org` int(10) NOT NULL,
  `jum_kar_bulan` varchar(10) NOT NULL,
  `jum_kar_org` int(10) NOT NULL,
  `rencana_penambahan` varchar(10) NOT NULL,
  `jum_org_penam` int(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan_karyawan`
--

INSERT INTO `permintaan_karyawan` (`nopk`, `iduser`, `tgl`, `divisi`, `job_kelas`, `jabatan`, `jum_pria`, `jum_wanita`, `p_budget`, `p_bud_no`, `status_karyawan`, `status_karyawan_k`, `uraian_p`, `umur`, `pendidikan`, `pengalaman`, `pengalaman_y`, `kemampuan`, `s_gaji`, `e_gaji`, `rencena_d`, `man_planning_thn`, `man_org`, `jum_kar_bulan`, `jum_kar_org`, `rencana_penambahan`, `jum_org_penam`, `status`) VALUES
('2409-1-0', 'admin', '2018-09-24', 'Admin', '88', '99', 2, 2, 'no', 'promosi', 'bulanan', 0, '9', 30, 'sd', 'tidakpengalaman', 0, 'gak ada', 9999, 123231, '', '123', 123, '123', 123, '123', 123, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `jabatan`, `email`, `password`, `username`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wawancara`
--

CREATE TABLE `wawancara` (
  `id` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `wawancara` varchar(100) NOT NULL,
  `status` text NOT NULL,
  `nilai` int(10) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wawancara`
--

INSERT INTO `wawancara` (`id`, `idpelamar`, `wawancara`, `status`, `nilai`, `tgl`) VALUES
(1, 1, '1', 'PASS', 70, '2018-09-25'),
(2, 1, '1', 'PASS', 60, '2018-09-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_karyawan`
--
ALTER TABLE `calon_karyawan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`namadivisi`);

--
-- Indexes for table `faktor_wawancara`
--
ALTER TABLE `faktor_wawancara`
  ADD PRIMARY KEY (`idf`);

--
-- Indexes for table `isibobot`
--
ALTER TABLE `isibobot`
  ADD PRIMARY KEY (`noisi`);

--
-- Indexes for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`idkeputusan`);

--
-- Indexes for table `nilai_wawancara`
--
ALTER TABLE `nilai_wawancara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `palamar_penyakit`
--
ALTER TABLE `palamar_penyakit`
  ADD PRIMARY KEY (`nopenyakit`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`idpelamar`);

--
-- Indexes for table `pelamar_bahasa`
--
ALTER TABLE `pelamar_bahasa`
  ADD PRIMARY KEY (`nobahasa`);

--
-- Indexes for table `pelamar_kerabat`
--
ALTER TABLE `pelamar_kerabat`
  ADD PRIMARY KEY (`idkerabat`);

--
-- Indexes for table `pelamar_nama`
--
ALTER TABLE `pelamar_nama`
  ADD PRIMARY KEY (`idnama`);

--
-- Indexes for table `pelamar_pelatihan`
--
ALTER TABLE `pelamar_pelatihan`
  ADD PRIMARY KEY (`nopelatihan`);

--
-- Indexes for table `pelamar_pendidikan`
--
ALTER TABLE `pelamar_pendidikan`
  ADD PRIMARY KEY (`idpelamar`);

--
-- Indexes for table `pelamar_pengalaman`
--
ALTER TABLE `pelamar_pengalaman`
  ADD PRIMARY KEY (`nopengalaman`);

--
-- Indexes for table `pelamar_saudara`
--
ALTER TABLE `pelamar_saudara`
  ADD PRIMARY KEY (`nosaudara`);

--
-- Indexes for table `pembobotan`
--
ALTER TABLE `pembobotan`
  ADD PRIMARY KEY (`nopembobotan`);

--
-- Indexes for table `permintaan_karyawan`
--
ALTER TABLE `permintaan_karyawan`
  ADD PRIMARY KEY (`nopk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `wawancara`
--
ALTER TABLE `wawancara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_karyawan`
--
ALTER TABLE `calon_karyawan`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faktor_wawancara`
--
ALTER TABLE `faktor_wawancara`
  MODIFY `idf` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `isibobot`
--
ALTER TABLE `isibobot`
  MODIFY `noisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `idkeputusan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai_wawancara`
--
ALTER TABLE `nilai_wawancara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `palamar_penyakit`
--
ALTER TABLE `palamar_penyakit`
  MODIFY `nopenyakit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `idpelamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pelamar_bahasa`
--
ALTER TABLE `pelamar_bahasa`
  MODIFY `nobahasa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pelamar_kerabat`
--
ALTER TABLE `pelamar_kerabat`
  MODIFY `idkerabat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelamar_nama`
--
ALTER TABLE `pelamar_nama`
  MODIFY `idnama` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pelamar_pelatihan`
--
ALTER TABLE `pelamar_pelatihan`
  MODIFY `nopelatihan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelamar_pengalaman`
--
ALTER TABLE `pelamar_pengalaman`
  MODIFY `nopengalaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pelamar_saudara`
--
ALTER TABLE `pelamar_saudara`
  MODIFY `nosaudara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `pembobotan`
--
ALTER TABLE `pembobotan`
  MODIFY `nopembobotan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wawancara`
--
ALTER TABLE `wawancara`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
