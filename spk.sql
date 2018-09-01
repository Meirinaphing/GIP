-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 03:42 PM
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
-- Table structure for table `palamar_penyakit`
--

CREATE TABLE `palamar_penyakit` (
  `nopenyakit` int(10) NOT NULL,
  `idpelamar` int(10) NOT NULL,
  `namapenyakit` varchar(100) NOT NULL,
  `tglmasuk` varchar(10) NOT NULL,
  `notepenyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('0109-1-11', 'admin', '2018-09-01', '88', '88', '8', 99, 9, 'yes', 'file_p_kariawan/dldhDvanes.docx', 'bulanan', 0, 'i', 9, '9', 'tidakpengalaman', 0, 'ii', 9, 9, '', '98', 98, '98', 98, '98', 98, 'Submited');

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `palamar_penyakit`
--
ALTER TABLE `palamar_penyakit`
  MODIFY `nopenyakit` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `idpelamar` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelamar_bahasa`
--
ALTER TABLE `pelamar_bahasa`
  MODIFY `nobahasa` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelamar_kerabat`
--
ALTER TABLE `pelamar_kerabat`
  MODIFY `idkerabat` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelamar_nama`
--
ALTER TABLE `pelamar_nama`
  MODIFY `idnama` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelamar_pelatihan`
--
ALTER TABLE `pelamar_pelatihan`
  MODIFY `nopelatihan` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelamar_pengalaman`
--
ALTER TABLE `pelamar_pengalaman`
  MODIFY `nopengalaman` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelamar_saudara`
--
ALTER TABLE `pelamar_saudara`
  MODIFY `nosaudara` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
