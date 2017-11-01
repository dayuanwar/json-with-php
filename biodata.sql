-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2017 at 02:29 PM
-- Server version: 5.5.57-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u8131893_pelayanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_passport` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `gelar_akademisi` tinyint(1) NOT NULL,
  `gelar_bangsawan` tinyint(1) NOT NULL,
  `gelar_agamawan` tinyint(1) NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL,
  `gol_darah` tinyint(4) NOT NULL,
  `jenis_pekerjaan` tinyint(4) NOT NULL,
  `tanggal_akhir_passport` date NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL,
  `agama` tinyint(4) NOT NULL,
  `pendidikan_akhir` tinyint(4) NOT NULL,
  `status_hub_keluarga` tinyint(4) NOT NULL,
  `kelainan_fisik_mental` tinyint(4) NOT NULL,
  `penyandang_cacat` tinyint(4) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `provinsi_id` char(2) NOT NULL,
  `kabupaten_id` char(5) NOT NULL,
  `kecamatan_id` char(7) NOT NULL,
  `desa_id` char(10) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `akta_lahir` tinyint(4) NOT NULL,
  `no_akta_lahir` varchar(20) NOT NULL,
  `status_perkawinan` tinyint(4) NOT NULL,
  `tanggal_perkawinan` date NOT NULL,
  `tanggal_perceraian` date NOT NULL,
  `akta_perkawinan` tinyint(4) NOT NULL,
  `no_akta_perkawinan` varchar(20) NOT NULL,
  `akta_perceraian` tinyint(4) NOT NULL,
  `no_akta_perceraian` varchar(20) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ketua_rt` varchar(255) NOT NULL,
  `nama_ketua_rw` varchar(255) NOT NULL,
  `nama_petugas_registrasi` varchar(255) NOT NULL,
  `nip_petugas_registrasi` varchar(20) NOT NULL,
  `nama_petugas_entry` varchar(255) NOT NULL,
  `nip_petugas_entry` varchar(20) NOT NULL,
  `tanggal_entry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `no_kk`, `nik`, `no_ktp`, `no_passport`, `nama_lengkap`, `gelar_akademisi`, `gelar_bangsawan`, `gelar_agamawan`, `jenis_kelamin`, `gol_darah`, `jenis_pekerjaan`, `tanggal_akhir_passport`, `tempat_tinggal`, `agama`, `pendidikan_akhir`, `status_hub_keluarga`, `kelainan_fisik_mental`, `penyandang_cacat`, `no_hp`, `rw`, `rt`, `provinsi_id`, `kabupaten_id`, `kecamatan_id`, `desa_id`, `kewarganegaraan`, `tanggal_lahir`, `tempat_lahir`, `akta_lahir`, `no_akta_lahir`, `status_perkawinan`, `tanggal_perkawinan`, `tanggal_perceraian`, `akta_perkawinan`, `no_akta_perkawinan`, `akta_perceraian`, `no_akta_perceraian`, `nik_ibu`, `nama_ibu`, `nik_ayah`, `nama_ayah`, `nama_ketua_rt`, `nama_ketua_rw`, `nama_petugas_registrasi`, `nip_petugas_registrasi`, `nama_petugas_entry`, `nip_petugas_entry`, `tanggal_entry`) VALUES
(8, '3515022601097471', '3516026606560001', '3516026606560001', '', 'SUMIYATI', 0, 0, 0, 2, 13, 9, '0000-00-00', 'MERGOBENER', 1, 3, 3, 1, 0, '085706704744', '003', '001', '', '3515', '3515010', '3515010007', 'WNI', '1956-06-15 11:11:11', 'Sidoarjo', 1, '', 2, '1962-01-04', '0000-00-00', 1, '', 1, '', '3516022102200001', 'DARMANI', '3516024102360001', 'PONIMAN', 'Kojin', 'Rifan', 'Anjen', '131197992211', 'admin', '', '2017-05-30 05:54:01'),
(25, '3515022601097471', '3515022109600001', '351502210960001', '', 'ARIFIN', 0, 0, 0, 1, 13, 15, '0000-00-00', 'MERGOBENER', 1, 3, 1, 1, 0, '085706704740', '003', '001', '', '3515', '3515010', '3515010007', 'WNI', '1956-09-21 11:11:11', 'Sidoarjo', 1, '', 2, '1962-01-04', '0000-00-00', 1, '', 1, '', '3516022102200001', 'Mutaslimar', '3516022102300001', 'ABD.Mubin', 'Kojin', 'Rifan', 'Anjen', '131197992211', 'admin', '', '2017-06-14 15:06:01'),
(26, '3515022601097471', '3515020507820002', '35150205078200002', '', 'SUTIKNO', 0, 0, 0, 1, 13, 1, '0000-00-00', 'MERGOBENER', 1, 4, 4, 1, 0, '085706704852', '003', '001', '', '3515', '3515010', '3515010007', 'WNI', '1982-07-05 12:32:33', 'SIDOARJO', 1, '', 1, '0000-00-00', '0000-00-00', 1, '', 1, '', '3516026606560001', 'SUMIYATI', '3515022109600001', 'ARIFIN', 'kojin', 'Rifan', 'Anjen', '131197992211', 'vqd', '', '2017-05-30 05:54:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
