-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2020 pada 08.52
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(36) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('0000000000000000', 'masyarakat', 'masyarakat', 'masyarakat', '000000000'),
('098988989', 'toel', 'toel', 'toel', '089898989898'),
('1223050405990001', 'Ivan Prayuda sinaga', 'ivan', 'ivan', '089823892312'),
('12232312123221', 'Sutarno', 'sutarno', 'sutarno', '082345763454'),
('1223432312231112', 'Andreza Irwanda', 'andreza', 'cunglik', '082912912912'),
('123', '123', '123', '123', '1211212121212'),
('1234', 'Sutan Kumala', 'sutan2', 'sutan', '089650007015'),
('1234567890123456', 'aku', 'aku', 'aku', '123123'),
('22052002', 'Sutan Kumala', 'sutan', 'sutan', '089650007015'),
('689540361973', 'Yanto Hermawan', 'asd', 'asd', '0896543746694');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `notifikasi` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `nik`, `notifikasi`, `tgl`) VALUES
(5, '22052002', 'Pengaduan anda dengan ID: 31 telah diproses oleh petugas.', '2020-02-24'),
(8, '22052002', 'Pengaduan anda dengan ID: 31 telah Selesai diproses.', '2020-02-24'),
(9, '1234', 'Pengaduan anda dengan ID: 32 sedang diproses oleh petugas.', '2020-02-24'),
(10, '1234', 'Pengaduan anda dengan ID: 32 telah Selesai diproses.', '2020-02-24'),
(12, '22052002', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-02-24'),
(13, '689540361973', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-02-24'),
(14, '689540361973', 'Pengaduan anda dengan ID: 36 sedang diproses oleh petugas.', '2020-02-24'),
(15, '22052002', 'Pengaduan anda dengan ID: 35 sedang diproses oleh petugas.', '2020-02-24'),
(16, '22052002', 'Pengaduan anda dengan ID: 35 telah Selesai diproses.', '2020-02-24'),
(17, '123', 'Pengaduan anda dengan ID: 33 sedang diproses oleh petugas.', '2020-02-24'),
(18, '0000000000000000', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-02-24'),
(19, '689540361973', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-02-25'),
(20, '689540361973', 'Pengaduan anda dengan ID: 36 telah Selesai diproses.', '2020-02-25'),
(22, '1234', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-02-25'),
(23, '22052002', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-02-25'),
(24, '1234', 'Pengaduan anda dengan ID: 39 telah ditanggapi oleh Petugas.', '2020-02-25'),
(25, '689540361973', 'Pengaduan anda dengan ID: 38 telah ditanggapi oleh Petugas.', '2020-02-26'),
(26, '22052002', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-02-26'),
(27, '22052002', 'Pengaduan anda dengan ID: 41 telah ditanggapi oleh Petugas.', '2020-02-26'),
(28, '098988989', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-02-26'),
(29, '098988989', 'Pengaduan anda dengan ID: 42 telah ditanggapi oleh Petugas.', '2020-02-26'),
(30, '689540361973', 'Pengaduan anda dengan ID: 38 telah Selesai diproses.', '2020-02-26'),
(31, '22052002', 'Pengaduan anda dengan ID: 40 telah ditanggapi oleh Petugas.', '2020-02-26'),
(32, '22052002', 'Pengaduan anda dengan ID: 40 telah Selesai diproses.', '2020-02-26'),
(33, '1223050405990001', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-02'),
(34, '1223050405990001', 'Pengaduan anda dengan ID: 43 telah ditanggapi oleh Petugas.', '2020-09-07'),
(35, '1223432312231112', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(36, '1223432312231112', 'Pengaduan anda dengan ID: 44 telah ditanggapi oleh Petugas.', '2020-09-15'),
(37, '1223432312231112', 'Pengaduan anda dengan ID: 44 telah Selesai diproses.', '2020-09-15'),
(38, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(39, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(40, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(41, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(42, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(43, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(44, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(45, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(46, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-15'),
(47, '12232312123221', 'Pengaduan anda dengan ID: 53 telah ditanggapi oleh Petugas.', '2020-09-15'),
(48, '1234', 'Pengaduan anda dengan ID: 39 telah Selesai diproses.', '2020-09-16'),
(49, '22052002', 'Pengaduan anda dengan ID: 41 telah Selesai diproses.', '2020-09-16'),
(50, '098988989', 'Pengaduan anda dengan ID: 42 telah Selesai diproses.', '2020-09-16'),
(51, '1223050405990001', 'Pengaduan anda dengan ID: 43 telah Selesai diproses.', '2020-09-16'),
(52, '12232312123221', 'Pengaduan anda dengan ID: 53 telah Selesai diproses.', '2020-09-16'),
(53, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-16'),
(54, '12232312123221', 'Pengaduan anda dengan ID: 54 telah ditanggapi oleh Petugas.', '2020-09-16'),
(55, '12232312123221', 'Pengaduan anda dengan ID: 54 telah Selesai diproses.', '2020-09-16'),
(56, '12232312123221', 'Pengaduan anda Berhasil dikirim dan segera diproses oleh Petugas.', '2020-09-21'),
(57, '12232312123221', 'Pengaduan anda dengan ID: 55 telah ditanggapi oleh Petugas.', '2020-09-21'),
(58, '12232312123221', 'Pengaduan anda dengan ID: 55 telah Selesai diproses.', '2020-09-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `link` varchar(100) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `link`, `isi_laporan`, `foto`, `status`) VALUES
(54, '2020-09-16', '12232312123221', 'www.instagram.com', 'saya mengalami masalah pada penginputan website disdukcapil yang berada pada kabupaten labuhan batu utara, tolong untuk lebih diperhatikan masalah-masalah yang ada didalam sistem tersebut', '149463283.png', 'selesai'),
(55, '2020-09-21', '12232312123221', 'tentang agama', 'Pelayanan dari staff kominfo agak kurang', 'blogger.png', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas','nonaktif') NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`, `token`) VALUES
(1, 'Beni Frandian', 'admin', 'anaklanang', '089650007015', 'admin', '765d7072b3d5875f8796b339e0a81da7'),
(3, 'Rudi Santoso', 'petugas', 'petugas', '081282206093', 'nonaktif', '92b2525c556bb3a8e98f3b895cbee86f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(26, 54, '2020-09-16', 'akan kami coba evaluasi lebih lanjut', 1),
(27, 55, '2020-09-21', 'ya', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
