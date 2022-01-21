-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2021 pada 06.37
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_backup`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id` int(5) NOT NULL,
  `ruang_arsip` varchar(25) NOT NULL,
  `no_rak` int(5) NOT NULL,
  `no_laci` int(5) NOT NULL,
  `no_boks` int(5) NOT NULL,
  `para_pihak` varchar(100) NOT NULL,
  `no_perkara` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `pemberi` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`id`, `ruang_arsip`, `no_rak`, `no_laci`, `no_boks`, `para_pihak`, `no_perkara`, `tgl_masuk`, `penerima`, `pemberi`, `status`, `keterangan`) VALUES
(6, 'Arsip Pidana', 2, 10, 10, 'Jhonny', '01/PID.B/2018/PN.KIS', '2018-12-01', 'Marno', 'Putri', 'Ada', 'Pidana Pencurian'),
(7, 'Arsip Pidana', 2, 11, 10, 'Tuti, Wanda', '02/PID.B/2018/PN.KIS', '2018-12-03', 'Marno', 'Putri', 'Dipinjam', 'Pidana Perjudian'),
(8, 'Arsip Pidana', 1, 3, 9, 'Budi', '03/PID.B/2018/PN.KIS', '2018-12-04', 'Marno', 'Putri', 'Ada', 'Pidana Perjudian'),
(9, 'Arsip Perdata', 1, 3, 5, 'Miswar, Susi, Lastri', '01/PDT.G/2018/PN.KIS', '2018-12-03', 'Ipul', 'Setiawan', 'Dipinjam', 'Perdata Gugatan'),
(10, 'Arsip Perdata', 2, 3, 1, 'Mastur', '02/PDT.G/2018/PN.KIS', '2018-12-12', 'Ipul', 'Setiawan', 'Ada', 'Perdata Gugatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_perkara` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_perkara`, `peminjam`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('01/PID.B/2018/PN.KIS', 'A. Nasution', '2018-12-14', '2018-12-16', 2, '-', 4),
('01/PDT.G/2018/PN.KIS', 'J. Siahaan', '2018-12-10', 'Belum Kembali', 0, '-', 5),
('02/PID.B/2018/PN.KIS', 'Bejo', '2018-12-11', 'Belum Kembali', 0, 'Input ke CTS', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `nip` int(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `unit_organisasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama_guru`, `nip`, `jabatan`, `golongan`, `unit_organisasi`) VALUES
(1, 'andre ramadhana manurung', 127621671, 'guru mata pelajaran penjas ', '3I', 'smpn4 kisaran'),
(2, 'jen', 12323214, 'guru matametik', 'bawahan kepsek', 'pemuda pancasila'),
(3, 'Anggraini Utari', 812825678, 'Guru IPS', 'III-A', 'SMP N 4 Kisaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `kedisiplinan` varchar(50) NOT NULL,
  `orientasi` varchar(50) NOT NULL,
  `kepemimpinan` varchar(50) NOT NULL,
  `kerjasama` varchar(50) NOT NULL,
  `komitmen` varchar(50) NOT NULL,
  `kejujuran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`id`, `nama_guru`, `kedisiplinan`, `orientasi`, `kepemimpinan`, `kerjasama`, `komitmen`, `kejujuran`) VALUES
(1, 'andre ramadhana manurung', '50', '50', '50', '50', '50', '50'),
(2, 'Anggraini Utari', '80', '80', '80', '80', '80', '100'),
(3, 'Jain', '80', '80', '80', '100', '100', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `npsn` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id`, `nama_sekolah`, `npsn`, `no_hp`, `kecamatan`, `kabupaten`, `provinsi`) VALUES
(1, 'SMPN4 KISARN', '125454', '082275024578', 'kisaran timur', 'ashaan', 'sumatera utara'),
(2, 'SMP N 4 Kisaran', '178977', '082266889012', 'Kisaran Barat', 'Asahan', 'Sumatera Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Kepaniteraan Hukum'),
('andre', '19984dcaea13176bbb694f62ba6b5b35', 'andremanurung@gmail.com', 'Eko', 12, 'Tampan dan Pemberani');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_perkara` (`no_perkara`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
