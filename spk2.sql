-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2018 at 04:46 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_karyawan`
--

CREATE TABLE IF NOT EXISTS `permintaan_karyawan` (
  `nopk` varchar(50) NOT NULL,
  `iduser` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `job_kelas` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jum_pria` int(5) NOT NULL,
  `jum_wanita` int(5) NOT NULL,
  `p_budget` text NOT NULL,
  `p_bud_no` varchar(10) NOT NULL,
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
('3', 'admin', '0000-00-00', '2', '2', '2', 2, 2, 'no', '', 'kontrak', 2, '', 2, '', '2', 0, '', 0, 2, '2', '2', 2, '2', 2, '2', 2, 'Approved'),
('4', 'admin', '0000-00-00', '3', '3', '3', 3, 0, '', '', 'bulanan', 0, '', 3, '', '3', 0, '', 3, 3, '3', '', 3, '3', 3, '3', 3, 'Rejected'),
('5', 'admin', '0000-00-00', '4', '4', '4', 4, 4, 'no', '', 'kontrak', 4, '', 4, '', '', 0, '4', 0, 4, '4', '4', 4, '4', 4, '4', 4, 'Submited'),
('1', 'admin', '0000-00-00', '4', '4', '4', 4, 4, 'no', '', 'kontrak', 4, '', 4, '', '', 0, '4', 0, 4, '4', '4', 4, '4', 4, '4', 4, 'Submited'),
('6', 'admin', '0000-00-00', '5', '5', '5', 5, 0, '', '', 'bulanan', 0, '', 5, '', '', 0, '5', 5, 5, '5', '5', 5, '5', 5, '5', 5, 'Submited'),
('7', 'admin', '0000-00-00', '6', '6', '6', 6, 6, 'yes', '', 'bulanan', 0, '', 6, '', '', 0, '6', 6, 0, '66', '6', 6, '6', 6, '6', 6, 'Submited'),
('8', 'admin', '0000-00-00', '7', '77', '7', 7, 7, '', '', 'bulanan', 0, '', 7, '', '', 0, '7', 7, 7, '7', '7', 7, '7', 7, '7', 7, 'Submited'),
('2', 'nama', '0000-00-00', '1', '1', '1', 1, 1, 'no', '', 'bulanan', 0, '', 1, '', '1', 0, '', 0, 1, '1', '1', 1, '1', 1, '1', 1, '1'),
('', 'admin', '2018-08-01', '3232', '3232', '3232', 3232, 323, 'no', '', 'harian', 0, '', 3, '', '', 0, '32323', 223232, 232323, '332323', '22322', 3232, '32', 3, '3', 3, 'Submited'),
('', 'admin', '2018-08-06', '99', '9', '99', 9, 9, 'no', '', 'harian', 0, '', 9, '9', '', 0, 'hjjhkjhhkjhjkhjkh', 123, 321, '9', '9', 9, '9', 9, '9', 9, 'Submited'),
('', 'admin', '2018-08-06', '1', '1', '1', 1, 1, '', '', 'bulanan', 0, '', 1, '1', '', 0, '1', 1, 1, '1', '1', 1, '1', 1, '1', 1, 'Submited'),
('', 'admin', '2018-08-06', '1', '1', '1', 1, 1, '', '', 'bulanan', 0, '', 1, '1', '', 0, '1', 1, 1, '1', '1', 1, '1', 1, '1', 1, 'Submited'),
('', 'admin', '2018-08-06', '', '', '', 0, 0, '', '', 'bulanan', 0, '', 0, '', '', 0, '', 0, 0, '', '', 0, '', 0, '', 0, 'Submited'),
('', 'admin', '2018-08-06', '1', '1', '1', 1, 1, '', '', 'bulanan', 0, '', 1, '1', '', 0, '1', 1, 1, '1', '1', 1, '1', 1, '', 1, 'Submited');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `jabatan`, `email`, `password`, `username`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
