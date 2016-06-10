-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2016 at 03:12 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `km_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar_eksplisit`
--

CREATE TABLE IF NOT EXISTS `komentar_eksplisit` (
  `id_komentar_eksplisit` int(11) NOT NULL AUTO_INCREMENT,
  `id_eksplisit` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tipeuser` varchar(20) NOT NULL,
  `tgl_komentar` date NOT NULL,
  `isi_komentar` varchar(500) NOT NULL,
  PRIMARY KEY (`id_komentar_eksplisit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `komentar_tacit`
--

CREATE TABLE IF NOT EXISTS `komentar_tacit` (
  `id_komentar_tacit` int(11) NOT NULL AUTO_INCREMENT,
  `id_tacit` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tipeuser` varchar(20) NOT NULL,
  `tgl_komentar` date NOT NULL,
  `isi_komentar` varchar(500) NOT NULL,
  PRIMARY KEY (`id_komentar_tacit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan_eksplisit`
--

CREATE TABLE IF NOT EXISTS `pengetahuan_eksplisit` (
  `id_eksplisit` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) NOT NULL,
  `tipeuser` varchar(20) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`id_eksplisit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan_tacit`
--

CREATE TABLE IF NOT EXISTS `pengetahuan_tacit` (
  `id_tacit` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) NOT NULL,
  `tipeuser` varchar(20) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `masalah` varchar(500) NOT NULL,
  `solusi` text NOT NULL,
  `tanggal_input` date NOT NULL,
  PRIMARY KEY (`id_tacit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tipeuser` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE IF NOT EXISTS `reward` (
  `id_reward` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(11) NOT NULL,
  `reward` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_reward` date NOT NULL,
  PRIMARY KEY (`id_reward`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
