-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jan 2016 pada 15.42
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aplikasidakwah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(7, 'Tauhid'),
(8, 'pergaulan'),
(9, 'Hijab'),
(10, 'Akhlaq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
`id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori_id` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id`, `nama`, `gambar`, `deskripsi`, `kategori_id`) VALUES
(14, 'Sholat', '29cdo6CQy599MnSqSxr5.jpg', 'Sholat adalah tiang agama', 7),
(15, 'Cukup Allah ', 'BAaYUQPoEl4f4qEEkezc.png', 'Cukup Kepada Allah Saja Kita Memohon', 7),
(16, 'Panggil Umi', 'bemscBdDLTXkf1N0C2Vh.jpg', 'Panggil Umi KetikaUdah Jadi', 10),
(17, 'Hanya Allah', 'Ex26jBvT2Zv3fwoVp2Ve.jpg', 'Hanya Kepada Allah Saja Lah Kita Menyembah', 7),
(18, 'Just Islam', 'WKZSwUO9X7cex4FyuA9F.jpg', 'Aku Agama Islam Bukan Agama Kafir', 7),
(19, 'Berbuat Baik', 'YrmrQhr9CqrlG3yfA5fH.jpg', 'Berkata Baik Atau Diam', 8),
(20, 'Zikrullah', 'A7Uu2PmacvBSGuswc9y7.jpg', 'Berdzikirlah Hanya Kepada Allah', 7),
(21, 'Musik Haram', 'wgPbdxjxaWT0MuD4QB9a.jpg', 'Jangan Terlalu Banyak Mendengar Musik', 10),
(22, 'Jumat', 'G5EnaJyT9tMk9AqfpIXN.png', 'Amalan Jumat ', 10),
(23, 'Jangan Marah', '9gkCIYQS9T8xxm52JH0v.jpg', 'Jangan Marah, Nanti Cepat Tua', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `nama`, `alamat`, `user_id`) VALUES
(10, 'Hafizdzaki', 'Bengkuring', 12),
(11, 'Hafizdzaki', 'Jalanan', 13),
(12, 'Punto', 'Samarinda', 14),
(13, 'Andi Gunawan', 'Samarinda', 15),
(14, 'Latifa', 'Balikpapan', 16),
(15, 'Trias Bratayudhana', 'Samarinda', 17),
(16, 'Sahid', 'Loa Janan', 18),
(17, 'Nada', 'Komplek TVRI', 19),
(18, 'Dody Cahyadi', 'Tenggarong', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` int(1) NOT NULL,
  `remember_token` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `remember_token`) VALUES
(12, 'hafizdzaki', '$2y$10$.W6rBRRzdE7UTn7X.o.0de8lH7W26YCFkp1yIZlqFsF6DDEOHXZ2i', 0, 'RSWDjw8zRctu5ZJeMdjRiC6WeNFrUnOQHaYpXx0Y1KKzOPtk23VekIG0uCrU'),
(13, 'admin', '$2y$10$JU75B7gkOt1YOOMWcp2X6.RyJuSS18v3CxTgxHamdcZMZw17p9DAi', 1, '5BAsNc10bsiik4JMGbESBZuaBjnrOk9tOhuWYUrc7HT8PNgqwXN57aGi5UqG'),
(14, 'Punto', '$2y$10$jf0wvJG1GhVQ0PWcFaXyD.wQbz24zHrRM6QuwX.BpcqpamizqNNRq', 0, 'EylZpGZBLVJgkIBLxnoJ7epjoZzBc7OkcG3kDnDABxy5AnMBwTbwIImTPbtO'),
(15, 'Andi', '$2y$10$jtuD884aa5DWczIySE/cAOkjBvedgk9l1OcSbXxHI/apj3hlsv1FS', 0, ''),
(16, 'Latifa', '$2y$10$SveGT84lVoAfRmBXaL83DeR7mTyblvDNWjx1jKFxv9b47y0UzpZ3S', 0, ''),
(17, 'Trias', '$2y$10$.u9ZaR26ZBelalOvqyLMFeP8ki2qWy3EG6b2BJy1WSWuZAmy9/y5y', 0, ''),
(18, 'Sahid', '$2y$10$WH29ay3OT164hURo4BlH0.o9lUgjmsDSB8G91ow8zChhzhLmOA/wC', 0, ''),
(19, 'Nada', '$2y$10$E7lbBd2yaZKg0XCCN4Wor.4T3NWJiEWjqpvgRwHSa/nHCmWpiTa4K', 0, 'KOW27ysXkCbOnfJOx494zxnZgTiOko14C2fg1yIafc62ER3l7xLb3555o8SK'),
(20, 'Dody', '$2y$10$qrxTZJyL46wivj8lh9eWXeQI6qGZ.FZwjXvPVip2oSCgV13J9L6Du', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
 ADD PRIMARY KEY (`id`), ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konten`
--
ALTER TABLE `konten`
ADD CONSTRAINT `konten_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profil`
--
ALTER TABLE `profil`
ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
