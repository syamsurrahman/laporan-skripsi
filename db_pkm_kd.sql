-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2022 pada 05.47
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pkm_kd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_balita`
--

CREATE TABLE `tb_balita` (
  `id_balita` int(11) NOT NULL,
  `nama_balita` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_balita`
--

INSERT INTO `tb_balita` (`id_balita`, `nama_balita`, `tempat_lahir`, `tgl_lahir`, `umur`, `jk`, `nama_ibu`, `nik_ibu`, `alamat`, `no_hp`) VALUES
(2, 'Meliyus P', 'Sampanahan', '2021-07-06', '12', 'Laki-laki', 'Siti', '63052212132', 'Jl Kelayan A Gg. Abadi', '0853672156'),
(3, 'M Rifqi', 'Banjarmasin', '2021-07-05', '12', 'Laki-laki', 'Adelia', '630522100021', 'Banjarmasin', '08536721567'),
(4, 'Reza Aji P', 'Barito Selatan', '2022-01-18', '6', 'Laki-laki', 'Dina', '630522121341', 'Jl Kelayan A', '0853672156'),
(5, 'Khadijah', 'Sampanahan', '2022-06-10', '2', 'Perempuan', 'Fatimah', '630522100021', 'Jl.Kelayan A Gg.Cendrawasih', '082151549049'),
(6, 'Adelia', 'Banjar', '2021-12-09', '11', 'Perempuan', 'Kartika', '63052212345', 'Jl Kelayan A Gg.12', '082125789023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bidan`
--

CREATE TABLE `tb_bidan` (
  `id_bidan` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_bidan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bidan`
--

INSERT INTO `tb_bidan` (`id_bidan`, `nip`, `nama_bidan`, `jabatan`, `golongan`, `tgl_lahir`, `alamat`, `no_hp`) VALUES
(1, '197009241992022003', 'Siti Aisyah, AM. Keb', 'Bidan Penyelia', 'IIId', '1970-09-24', 'Jl. Handayani', '081354516789'),
(3, '197007011991042004', 'Fatmah, S.Si.T', 'Bidan Madya', 'IVa', '1970-07-01', 'Jl. Sutoyo S', '082134567812'),
(6, '197909042004012014', 'Sutiyem, AM.Keb', 'BIdan Penyelia', 'IIIc', '1979-09-04', 'Jl. Pekapuran Komp. Yatera', '085367215689'),
(7, '198904282011032003', 'Juwairiyah, Am.Keb', 'Bidan Pelaksana Lanjutan', 'IIIa', '1989-04-28', 'Jl. Kelayan B', '087865432765');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` enum('III/b','III/c','III/d') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `id_poli` int(11) DEFAULT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nip`, `nama_dokter`, `jabatan`, `golongan`, `tgl_lahir`, `alamat`, `keahlian`, `id_poli`, `no_hp`) VALUES
(6, '197510182006051026', 'dr. Zulkifliii', 'Dokter Muda', 'III/d', '1975-10-18', 'Jl. Sei Lulut', 'Dokter Gigi Muda', 2, '085367215678'),
(7, '198404152006052003', 'dr. Sharah', 'Dokter Muda', 'III/c', '1984-04-15', 'Jl. Sei Andai', 'Dokter Anak', 3, '08123457890'),
(9, '198901292015052001', 'dr. Rafii', 'Dokter Ahli Pertama', 'III/b', '1989-01-29', 'banjarmasin', 'Dokter Umum', 4, '081234567890'),
(10, '199106102006051026', 'dr. Meliyus Premunika', 'Dokter Ahli Pertama', 'III/b', '1991-06-10', 'banjarmasin', 'Dokter Umum', 4, '08536734566'),
(11, '197502022006051026', 'dr. Abdurrahman', 'Dokter Muda', 'III/b', '1975-02-02', 'hksn', 'dokter anak', 1, '087865432156');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_imunisasi`
--

CREATE TABLE `tb_imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `vaksin_ke` int(5) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `id_vaksinbalita` int(11) NOT NULL,
  `tgl_penyuntikan` date NOT NULL,
  `keterangan` date NOT NULL,
  `id_bidan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_imunisasi`
--

INSERT INTO `tb_imunisasi` (`id_imunisasi`, `vaksin_ke`, `id_balita`, `id_vaksinbalita`, `tgl_penyuntikan`, `keterangan`, `id_bidan`) VALUES
(2, 0, 2, 1, '2022-07-01', '2022-08-01', 3),
(4, 1, 2, 2, '2022-07-16', '2022-08-16', 3),
(5, 2, 2, 3, '2022-08-17', '2022-09-17', 6),
(6, 0, 3, 1, '2022-08-01', '2022-09-01', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwalposyandu`
--

CREATE TABLE `tb_jadwalposyandu` (
  `id_jadwalposyandu` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `jan` date DEFAULT NULL,
  `feb` date NOT NULL,
  `mar` date NOT NULL,
  `apr` date NOT NULL,
  `mei` date NOT NULL,
  `jun` date NOT NULL,
  `jul` date NOT NULL,
  `agust` date NOT NULL,
  `sep` date NOT NULL,
  `okt` date NOT NULL,
  `nov` date NOT NULL,
  `des` date NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jadwalposyandu`
--

INSERT INTO `tb_jadwalposyandu` (`id_jadwalposyandu`, `id_posyandu`, `jan`, `feb`, `mar`, `apr`, `mei`, `jun`, `jul`, `agust`, `sep`, `okt`, `nov`, `des`, `status`) VALUES
(1, 1, '2022-01-01', '2022-02-01', '2022-03-01', '2022-04-01', '2022-05-01', '2022-06-01', '2022-07-01', '2022-08-01', '2022-09-01', '2022-10-01', '2022-11-01', '2022-12-01', 1),
(3, 2, '2022-01-01', '2022-02-01', '2022-03-01', '2022-04-01', '2022-05-01', '2022-06-01', '2022-07-01', '2022-08-01', '2022-09-01', '2022-10-01', '2022-11-01', '2022-12-01', 1),
(4, 3, '2022-01-05', '2022-02-02', '2022-03-02', '2022-04-06', '2022-05-04', '2022-06-01', '2022-07-06', '2022-08-03', '2022-09-07', '2022-10-05', '2022-11-02', '2022-12-07', 1),
(5, 9, '2022-01-03', '2022-02-07', '2022-03-07', '2022-04-04', '2022-05-02', '2022-06-06', '2022-07-04', '2022-08-01', '2022-09-05', '2022-10-03', '2022-11-07', '2022-12-05', 1),
(6, 10, '2022-01-04', '2022-02-01', '2022-03-01', '2022-04-05', '2022-05-03', '2022-06-07', '2022-07-05', '2022-08-02', '2022-09-06', '2022-10-04', '2022-11-01', '2022-12-06', 1),
(7, 4, '2022-01-06', '2022-02-03', '2022-03-03', '2022-04-07', '2022-05-05', '2022-06-02', '2022-07-07', '2022-08-04', '2022-09-01', '2022-10-06', '2022-11-03', '2022-12-01', 1),
(8, 5, '2022-01-10', '2022-02-14', '2022-03-14', '2022-04-11', '2022-05-09', '2022-06-13', '2022-07-11', '2022-08-08', '2022-09-12', '2022-10-10', '2022-11-14', '2022-12-12', 1),
(9, 6, '2022-01-11', '2022-02-08', '2022-03-08', '2022-04-12', '2022-05-10', '2022-06-14', '2022-07-12', '2022-08-09', '2022-09-13', '2022-10-11', '2022-11-08', '2022-12-13', 1),
(10, 7, '2022-01-12', '2022-02-09', '2022-03-09', '2022-04-13', '2022-05-11', '2022-06-08', '2022-07-13', '2022-08-10', '2022-09-14', '2022-10-12', '2022-11-09', '2022-12-14', 1),
(11, 8, '2022-01-19', '2022-02-16', '2022-03-16', '2022-04-20', '2022-05-18', '2022-06-15', '2022-07-20', '2022-08-17', '2022-09-21', '2022-10-19', '2022-11-16', '2022-12-21', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatanposyandu`
--

CREATE TABLE `tb_kegiatanposyandu` (
  `id_kegiatanposyandu` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_bidan1` int(11) NOT NULL,
  `id_bidan2` int(11) NOT NULL,
  `id_perawat1` int(11) NOT NULL,
  `id_perawat2` int(11) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kegiatanposyandu`
--

INSERT INTO `tb_kegiatanposyandu` (`id_kegiatanposyandu`, `id_posyandu`, `tanggal`, `id_bidan1`, `id_bidan2`, `id_perawat1`, `id_perawat2`, `kegiatan`, `keterangan`) VALUES
(3, 3, '2022-07-14', 1, 3, 4, 7, 'imunisasi', '-'),
(4, 9, '2022-08-03', 3, 1, 7, 9, 'program kesehatan ibu hamil', '-'),
(5, 10, '2022-08-09', 7, 6, 7, 10, 'Program Kesehatan Anak', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kesmas`
--

CREATE TABLE `tb_kesmas` (
  `id_kesmas` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_kesmas` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kesmas`
--

INSERT INTO `tb_kesmas` (`id_kesmas`, `nip`, `nama_kesmas`, `jabatan`, `golongan`, `tgl_lahir`, `alamat`, `no_hp`) VALUES
(1, '199206042017032010', 'Ginna Almira', 'Penyuluh Kes. Masy', 'IId', '1992-06-04', 'Jl Hksn Blok 4A', '082178562314'),
(2, '199401102019042006', 'Melinda', 'Penyuluh Kes. Masy', 'IIb', '1994-01-10', 'Jl. Tunjung Maya', '081234567882');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `no_bpjs` varchar(16) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `no_rm`, `no_bpjs`, `nama_pasien`, `jk`, `tempat_lahir`, `tgl_lahir`, `gol_darah`, `alamat`, `no_hp`, `tgl_daftar`) VALUES
(4, '20220002', '0002233751876', 'meliyus', 'l', 'barito', '2022-06-10', 'B', 'Jl.Kelayan A Gg.Sidodadi', '0853673456', '2022-06-29'),
(6, '20220003', '0002233551786', 'grewer', 'p', 'marabahan', '2022-06-10', 'B', 'Jl.Kelayan A', '08536734566', '2022-06-10'),
(7, '20220004', '0002233751962', 'Nazar', 'l', 'Kandangan', '1980-03-21', 'o', 'Jl.Kelayan A Gg.Cendrawasih', '082353441918', '2022-08-05'),
(8, '20220005', '0002233751963', 'Kartika', 'p', 'Barabai', '1989-04-21', 'a', 'Jl.Kelayan A Gg.Setia Budi', '08536721567', '2022-07-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelayanan`
--

CREATE TABLE `tb_pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `no_pelayanan` varchar(20) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `status_pemeriksaan` int(11) DEFAULT NULL,
  `keluhan` varchar(100) NOT NULL,
  `tgl_pelayanan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelayanan`
--

INSERT INTO `tb_pelayanan` (`id_pelayanan`, `no_pelayanan`, `id_pasien`, `id_poli`, `status_pemeriksaan`, `keluhan`, `tgl_pelayanan`) VALUES
(2, 'PKM-KD/070720220001', 4, 1, 1, 'Suntik', '2022-07-07'),
(3, 'PKM-KD/070720220002', 4, 2, 1, 'perbaikan gigi', '2022-07-08'),
(4, 'PKM-KD/070720220003', 6, 1, 1, 'perbaikan gigi anak', '2022-07-09'),
(5, 'PKM-KD/110720220004', 4, 1, 1, 'Suntik', '2022-07-11'),
(7, 'PKM-KD/120720220006', 6, 4, 1, 'Periksa', '2022-07-13'),
(8, 'PKM-KD/120720220007', 6, 5, 1, 'Suntik', '2022-07-12'),
(9, 'PKM-KD/160720220008', 4, 2, NULL, 'Periksa', '2022-07-15'),
(10, 'PKM-KD/220720220009', 4, 1, 1, 'Periksa', '2022-07-21'),
(11, 'PKM-KD/230720220010', 4, 4, 1, 'Suntik', '2022-07-20'),
(12, 'PKM-KD/230720220011', 4, 1, NULL, 'Suntik', '2022-07-15'),
(13, 'PKM-KD/280720220012', 4, 6, 1, 'periksa golongan darah', '2022-07-28'),
(14, 'PKM-KD/010820220013', 6, 3, 1, 'periksa berkala', '2022-08-01'),
(15, 'PKM-KD/110820220014', 6, 6, 1, 'Cek Lab', '2022-08-11'),
(16, 'PKM-KD/110820220015', 4, 7, 1, 'TB Paru', '2022-08-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `diagnosa` varchar(100) DEFAULT NULL,
  `rujukan` varchar(100) DEFAULT NULL,
  `bb` float DEFAULT NULL,
  `tb` float DEFAULT NULL,
  `tekanan_darah` varchar(20) DEFAULT NULL,
  `denyut_jantung` int(11) DEFAULT NULL,
  `hpht` date DEFAULT NULL,
  `htp` date DEFAULT NULL,
  `hamil_ke` varchar(10) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `memori_hasil` varchar(50) DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `id_pasien`, `id_poli`, `id_dokter`, `id_pelayanan`, `diagnosa`, `rujukan`, `bb`, `tb`, `tekanan_darah`, `denyut_jantung`, `hpht`, `htp`, `hamil_ke`, `kelas`, `tgl_berobat`, `memori_hasil`, `keterangan`) VALUES
(1, 4, 1, 11, 2, '-', '-', 140, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-'),
(5, 6, 1, 11, 4, 'Sakit', 'Sakit', 130, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sakit'),
(6, 4, 2, 6, 3, 'cabut', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cabut gigi'),
(7, 4, 1, 11, 5, 'demam', '-', 135, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'suhu > 38,1 lebih dari 3 hari'),
(9, 6, 4, 10, 7, 'kondisi aman', '-', NULL, NULL, '100/80', 86, NULL, NULL, NULL, NULL, NULL, NULL, '-'),
(10, 6, 5, 10, 8, '-', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-'),
(11, 4, 1, 11, 10, '-', '-', 125, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-'),
(12, 4, 4, 10, 11, 'Sakit', '-', NULL, NULL, '140/90', 90, NULL, NULL, NULL, NULL, NULL, NULL, '-'),
(13, 6, 3, 7, 14, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-04', '2023-04-14', '2', NULL, NULL, NULL, 'Pemeriksaan Berkala'),
(14, 4, 7, 10, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tb Paru', '2022-08-10', 'BTA (+++)', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perawat`
--

CREATE TABLE `tb_perawat` (
  `id_perawat` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_perawat` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_poli` int(11) DEFAULT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perawat`
--

INSERT INTO `tb_perawat` (`id_perawat`, `nip`, `nama_perawat`, `jabatan`, `golongan`, `tgl_lahir`, `alamat`, `id_poli`, `no_hp`) VALUES
(4, '197502022006051026', 'Muhammad Irsyad Zaini', 'Perawat Penyelia', 'IIIc', '1975-02-02', 'Jl. Tembus Mantuil Gg. Jais', 2, '082375436789'),
(7, '198904292011062027', 'Murnie', 'Perawat Penyelia', 'IIIb', '1989-04-29', 'Jl. Sutoyo S', 2, '08536734566'),
(8, '197605101009051002', 'Fariyadi', 'Perawat Mahir', 'IIId', '1976-05-10', 'Jl Wildan Sari', 4, '0853672156'),
(9, '198901101992032001', 'Amelia', 'Perawat Mahir', 'IIIa', '1989-01-10', 'Jl. Sei Andai', 3, '085367215234'),
(10, '198501101992042005', 'Putri Indah', 'Perawat Penyelia', 'IIIb', '1985-01-10', 'Jl Melati Indah', 1, '08536721567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periksa_kiakb`
--

CREATE TABLE `tb_periksa_kiakb` (
  `id_periksakiakb` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `tgl_catatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keluhan_sekarang` varchar(50) DEFAULT NULL,
  `tekanan_darah` varchar(50) DEFAULT NULL,
  `bb` varchar(50) DEFAULT NULL,
  `umur_kehamilan` varchar(50) DEFAULT NULL,
  `jarak_kehamilan` varchar(50) DEFAULT NULL,
  `tinggi_fundus` varchar(50) DEFAULT NULL,
  `letak_janin` varchar(50) DEFAULT NULL,
  `denyut_jantung_janin` varchar(50) DEFAULT NULL,
  `kaki_bengkak` varchar(50) DEFAULT NULL,
  `hasil_periksa_lab` varchar(50) DEFAULT NULL,
  `tindakan` varchar(50) DEFAULT NULL,
  `nasihat` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `harus_kembali` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_periksa_kiakb`
--

INSERT INTO `tb_periksa_kiakb` (`id_periksakiakb`, `id_pemeriksaan`, `tgl_catatan`, `keluhan_sekarang`, `tekanan_darah`, `bb`, `umur_kehamilan`, `jarak_kehamilan`, `tinggi_fundus`, `letak_janin`, `denyut_jantung_janin`, `kaki_bengkak`, `hasil_periksa_lab`, `tindakan`, `nasihat`, `keterangan`, `harus_kembali`) VALUES
(1, 13, '2022-08-01 15:03:52', 'tak', '95/80', '70', '20', '2 tahun', '23', 'Kep', '127', '-', 'HB 10,4', 'Habiskan Obat', 'Baca Buku Kia', 'Pkm Kelayan Dalam', '3 minggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periksa_lab`
--

CREATE TABLE `tb_periksa_lab` (
  `id_periksalab` int(11) NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `spesimen` varchar(20) NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `jam_pengambilan` time NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `jam_pemeriksaan` time NOT NULL,
  `id_pranata` int(11) NOT NULL,
  `hemoglobin` varchar(20) DEFAULT NULL,
  `hematocrit` varchar(20) DEFAULT NULL,
  `hitung_eritrosit` varchar(20) DEFAULT NULL,
  `hitung_trombosit` varchar(20) DEFAULT NULL,
  `hitung_leukosit` varchar(20) DEFAULT NULL,
  `laju_endap_darah` varchar(20) DEFAULT NULL,
  `diffcount` varchar(20) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `kejernihan` varchar(20) DEFAULT NULL,
  `bau` varchar(20) DEFAULT NULL,
  `volume` varchar(20) DEFAULT NULL,
  `ph` varchar(20) DEFAULT NULL,
  `berat_jenis` varchar(20) DEFAULT NULL,
  `protein` varchar(20) DEFAULT NULL,
  `glukosa` varchar(20) DEFAULT NULL,
  `bilirubin` varchar(20) DEFAULT NULL,
  `urobilinogen` varchar(20) DEFAULT NULL,
  `keton` varchar(20) DEFAULT NULL,
  `nitrit` varchar(20) DEFAULT NULL,
  `bakteri` varchar(20) DEFAULT NULL,
  `crystal` varchar(20) DEFAULT NULL,
  `sedimen` varchar(20) DEFAULT NULL,
  `glukosa_sewaktu` varchar(20) DEFAULT NULL,
  `glukosa_puasa` varchar(20) DEFAULT NULL,
  `asam_urat` varchar(20) DEFAULT NULL,
  `trigliserida` varchar(20) DEFAULT NULL,
  `cholestrol_total` varchar(20) DEFAULT NULL,
  `tuberculosis` varchar(20) DEFAULT NULL,
  `malaria` varchar(20) DEFAULT NULL,
  `tes_kehamilan` varchar(20) DEFAULT NULL,
  `golongan_darah` varchar(20) DEFAULT NULL,
  `widal` varchar(20) DEFAULT NULL,
  `anti_hiv` varchar(20) DEFAULT NULL,
  `antigen` varchar(20) DEFAULT NULL,
  `syphilis` varchar(20) DEFAULT NULL,
  `konsistensi` varchar(20) DEFAULT NULL,
  `warna1` varchar(20) DEFAULT NULL,
  `bau1` varchar(20) DEFAULT NULL,
  `lendir_darah` varchar(20) DEFAULT NULL,
  `telur_cacing` varchar(20) DEFAULT NULL,
  `amuba` varchar(20) DEFAULT NULL,
  `eritrosit` varchar(20) DEFAULT NULL,
  `leukosit` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_periksa_lab`
--

INSERT INTO `tb_periksa_lab` (`id_periksalab`, `id_pelayanan`, `spesimen`, `tgl_pengambilan`, `jam_pengambilan`, `tgl_pemeriksaan`, `jam_pemeriksaan`, `id_pranata`, `hemoglobin`, `hematocrit`, `hitung_eritrosit`, `hitung_trombosit`, `hitung_leukosit`, `laju_endap_darah`, `diffcount`, `warna`, `kejernihan`, `bau`, `volume`, `ph`, `berat_jenis`, `protein`, `glukosa`, `bilirubin`, `urobilinogen`, `keton`, `nitrit`, `bakteri`, `crystal`, `sedimen`, `glukosa_sewaktu`, `glukosa_puasa`, `asam_urat`, `trigliserida`, `cholestrol_total`, `tuberculosis`, `malaria`, `tes_kehamilan`, `golongan_darah`, `widal`, `anti_hiv`, `antigen`, `syphilis`, `konsistensi`, `warna1`, `bau1`, `lendir_darah`, `telur_cacing`, `amuba`, `eritrosit`, `leukosit`) VALUES
(1, 13, 'Darah', '2022-08-11', '20:00:00', '2022-08-12', '20:00:00', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, 15, 'Darah', '2022-08-06', '20:00:00', '2022-08-13', '20:00:00', 2, '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '11', '1', '1', '1', '111', '1', '1', '111', '11', '11', '11', '1', '1', '-', '1', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugasposyandu`
--

CREATE TABLE `tb_petugasposyandu` (
  `id_petugasposyandu` int(11) NOT NULL,
  `id_jadwalposyandu` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `id_bidan_1` int(11) NOT NULL,
  `id_bidan_2` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petugasposyandu`
--

INSERT INTO `tb_petugasposyandu` (`id_petugasposyandu`, `id_jadwalposyandu`, `id_posyandu`, `id_bidan_1`, `id_bidan_2`, `id_perawat`, `id_dokter`, `bulan`) VALUES
(1, 1, 1, 1, 3, 4, 6, 'jan'),
(2, 1, 1, 1, 3, 4, 6, 'feb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `ket_poli` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `nama_poli`, `ket_poli`) VALUES
(1, 'Poli Anak', '-'),
(2, 'Poli Gigi', '-'),
(3, 'Poli KIA & KB', '-'),
(4, 'Poli Umum', '-'),
(5, 'Poli Gizi', '-'),
(6, 'Poli LAB', '-'),
(7, 'Poli TB (Tuberculosis)', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_posyandu`
--

CREATE TABLE `tb_posyandu` (
  `id_posyandu` int(11) NOT NULL,
  `nama_posyandu` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_posyandu`
--

INSERT INTO `tb_posyandu` (`id_posyandu`, `nama_posyandu`, `alamat`, `keterangan`) VALUES
(3, 'Melati III', 'Jl.Kelayan A Gg.4 RT.16', 'Jadwal hari rabu minggu ke 1'),
(4, 'Melati IV', 'Jl.Kelayan A Gg.Setuju RT.12', 'Jadwal hari kamis minggu ke 1'),
(5, 'Melati V', 'Jl.Kelayan A Gg.Bodrex RT.16', 'Jadwal hari senin minggu ke 2'),
(6, 'Melati VI', 'Jl.Kelayan A Gg.Setuju RT.9', 'Jadwal hari selasa minggu ke 2'),
(7, 'Melati VII', 'Jl.Kelayan A Gg.Antasari RT.5', 'Jadwal hari rabu minggu ke 2'),
(8, 'Melati VIII', 'Jl.Kelayan A Gg.Hasmas RT.3', 'Jadwal hari rabu minggu ke 3'),
(9, 'Melati I', 'Jl.Kelayan A Gg.PGA RT.7', 'Jadwal hari senin minggu ke 1'),
(10, 'Melati II', 'Jl.Kelayan A Gg.Cendrawasih RT.1', 'Jadwal hari selasa minggu ke 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pranata`
--

CREATE TABLE `tb_pranata` (
  `id_pranata` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_pranata` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pranata`
--

INSERT INTO `tb_pranata` (`id_pranata`, `nip`, `nama_pranata`, `jabatan`, `golongan`, `tgl_lahir`, `alamat`, `no_hp`) VALUES
(1, '197802202001041027', 'Premunika', 'Pranata Labkes Mahir', 'IIIb', '1978-02-20', 'Jl Hksn Blok 6A', '085367345678'),
(2, '197301101992042005', 'Rina Wati', 'Pranata Labkes Penyelia', 'IIId', '1973-01-10', 'Jl.Kelayan A Gg.Sidodadi', '081354136781');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_promkes`
--

CREATE TABLE `tb_promkes` (
  `id_promkes` int(11) NOT NULL,
  `id_kesmas` int(11) NOT NULL,
  `id_bidan` int(11) NOT NULL,
  `id_perawat` int(11) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `tgl_promkes` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_promkes`
--

INSERT INTO `tb_promkes` (`id_promkes`, `id_kesmas`, `id_bidan`, `id_perawat`, `kegiatan`, `tgl_promkes`, `alamat`, `keterangan`) VALUES
(1, 1, 3, 4, 'imunisasi', '2022-08-02', 'SDN Kelayan Dalam 2', '-'),
(2, 1, 1, 7, 'penyuluhan', '2022-08-09', 'Jl.Kelayan A Gg.Sidodadi', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`, `nama_user`) VALUES
(1, 'admin', 'admin', 1, 'Syamsul'),
(2, 'kapus', '12345', 2, 'Kepala Puskesmas'),
(3, 'petugas1', '12345', 3, 'Meliyus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vaksin`
--

CREATE TABLE `tb_vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `nama_vaksin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_vaksin`
--

INSERT INTO `tb_vaksin` (`id_vaksin`, `nama_vaksin`) VALUES
(1, 'Pfizer'),
(2, 'Coronavac'),
(3, 'Moderna'),
(4, 'Covovax'),
(5, 'AstraZeneca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vaksinasi`
--

CREATE TABLE `tb_vaksinasi` (
  `id_vaksinasi` int(11) NOT NULL,
  `no_tiket` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `lokasi_vaksin` varchar(50) NOT NULL,
  `tgl_vaksin` date NOT NULL,
  `id_vaksin` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_vaksinasi`
--

INSERT INTO `tb_vaksinasi` (`id_vaksinasi`, `no_tiket`, `nik`, `nama_lengkap`, `tgl_lahir`, `no_hp`, `alamat`, `lokasi_vaksin`, `tgl_vaksin`, `id_vaksin`, `id_dokter`, `keterangan`) VALUES
(1, 'P-KD-0720220001', '630212270419990003', 'Meliyus Premunika Ahmad', '1999-04-28', '08536734566', 'Jl Hksn Blok 6A', 'Puskesmas Kelayan Dalam', '2022-07-13', 2, 6, 'Vaksin Ke 2 tanggal 30 Juli 2022'),
(2, 'P-KD-0720220002', '123456789', 'Rahman', '1998-07-14', '0853672156', 'banjarmasin', 'Puskesmas Kelayan Dalam', '2022-07-27', 2, 10, 'Vaksin Ke 2 tanggal 30 Agustus 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_vaksinbalita`
--

CREATE TABLE `tb_vaksinbalita` (
  `id_vaksinbalita` int(11) NOT NULL,
  `jenis_vaksin` varchar(20) NOT NULL,
  `waktu_tepat` varchar(20) NOT NULL,
  `waktu_tambahan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_vaksinbalita`
--

INSERT INTO `tb_vaksinbalita` (`id_vaksinbalita`, `jenis_vaksin`, `waktu_tepat`, `waktu_tambahan`) VALUES
(1, 'HB-0 (0-7 hari)', '0 Bulan', '-'),
(2, 'BCG', '0-1 Bulan', '2-11 Bulan'),
(3, 'Polio', '0-1 Bulan', '2-11 Bulan'),
(4, 'DPT-HB-Hib 1', '2 Bulan', '3-11 Bulan'),
(5, 'Polio 2', '2 Bulan', '3-11 Bulan'),
(6, 'DPT-HB-Hib 2', '3 Bulan', '4-11 Bulan'),
(7, 'Polio 3', '3 Bulan', '4-11 Bulan'),
(8, 'DPT-HB-Hib 3', '4 Bulan', '5-11 Bulan'),
(9, 'Polio 4', '4 Bulan', '5-11 Bulan'),
(10, 'IPV', '4 Bulan', '5-11 Bulan'),
(11, 'Campak', '9 Bulan', '10-11 Bulan'),
(12, 'DPT-HB-Hib Lanjutan', '18 Bulan', '24 Bulan'),
(13, 'Campak Lanjutan', '18 Bulan', '24 Bulan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_balita`
--
ALTER TABLE `tb_balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indeks untuk tabel `tb_bidan`
--
ALTER TABLE `tb_bidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `tb_imunisasi`
--
ALTER TABLE `tb_imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indeks untuk tabel `tb_jadwalposyandu`
--
ALTER TABLE `tb_jadwalposyandu`
  ADD PRIMARY KEY (`id_jadwalposyandu`);

--
-- Indeks untuk tabel `tb_kegiatanposyandu`
--
ALTER TABLE `tb_kegiatanposyandu`
  ADD PRIMARY KEY (`id_kegiatanposyandu`);

--
-- Indeks untuk tabel `tb_kesmas`
--
ALTER TABLE `tb_kesmas`
  ADD PRIMARY KEY (`id_kesmas`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indeks untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indeks untuk tabel `tb_perawat`
--
ALTER TABLE `tb_perawat`
  ADD PRIMARY KEY (`id_perawat`);

--
-- Indeks untuk tabel `tb_periksa_kiakb`
--
ALTER TABLE `tb_periksa_kiakb`
  ADD PRIMARY KEY (`id_periksakiakb`);

--
-- Indeks untuk tabel `tb_periksa_lab`
--
ALTER TABLE `tb_periksa_lab`
  ADD PRIMARY KEY (`id_periksalab`);

--
-- Indeks untuk tabel `tb_petugasposyandu`
--
ALTER TABLE `tb_petugasposyandu`
  ADD PRIMARY KEY (`id_petugasposyandu`);

--
-- Indeks untuk tabel `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tb_posyandu`
--
ALTER TABLE `tb_posyandu`
  ADD PRIMARY KEY (`id_posyandu`);

--
-- Indeks untuk tabel `tb_pranata`
--
ALTER TABLE `tb_pranata`
  ADD PRIMARY KEY (`id_pranata`);

--
-- Indeks untuk tabel `tb_promkes`
--
ALTER TABLE `tb_promkes`
  ADD PRIMARY KEY (`id_promkes`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_vaksin`
--
ALTER TABLE `tb_vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- Indeks untuk tabel `tb_vaksinasi`
--
ALTER TABLE `tb_vaksinasi`
  ADD PRIMARY KEY (`id_vaksinasi`);

--
-- Indeks untuk tabel `tb_vaksinbalita`
--
ALTER TABLE `tb_vaksinbalita`
  ADD PRIMARY KEY (`id_vaksinbalita`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_balita`
--
ALTER TABLE `tb_balita`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_bidan`
--
ALTER TABLE `tb_bidan`
  MODIFY `id_bidan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_imunisasi`
--
ALTER TABLE `tb_imunisasi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwalposyandu`
--
ALTER TABLE `tb_jadwalposyandu`
  MODIFY `id_jadwalposyandu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatanposyandu`
--
ALTER TABLE `tb_kegiatanposyandu`
  MODIFY `id_kegiatanposyandu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kesmas`
--
ALTER TABLE `tb_kesmas`
  MODIFY `id_kesmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_perawat`
--
ALTER TABLE `tb_perawat`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_periksa_kiakb`
--
ALTER TABLE `tb_periksa_kiakb`
  MODIFY `id_periksakiakb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_periksa_lab`
--
ALTER TABLE `tb_periksa_lab`
  MODIFY `id_periksalab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_petugasposyandu`
--
ALTER TABLE `tb_petugasposyandu`
  MODIFY `id_petugasposyandu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_posyandu`
--
ALTER TABLE `tb_posyandu`
  MODIFY `id_posyandu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_pranata`
--
ALTER TABLE `tb_pranata`
  MODIFY `id_pranata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_promkes`
--
ALTER TABLE `tb_promkes`
  MODIFY `id_promkes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_vaksin`
--
ALTER TABLE `tb_vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_vaksinasi`
--
ALTER TABLE `tb_vaksinasi`
  MODIFY `id_vaksinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_vaksinbalita`
--
ALTER TABLE `tb_vaksinbalita`
  MODIFY `id_vaksinbalita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
