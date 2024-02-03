-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2024 pada 11.08
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notlp` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `alamat`, `notlp`, `foto`) VALUES
(13, 'testing update sweet', 'imhuman@mars.com', 'living on earth', '6', ''),
(14, 'coba', '605iksanmaulana@gmail.com', 'living on earth', '7', ''),
(15, 'zeeroy', 'blaa@gmail.comas', 'living on earth', '8', ''),
(16, 'zeeroy', '605iksanmaulana@gmail.com', 'living on earth', '9', ''),
(17, 'zeeroy', 'blaa@gmail.comas', 'living on earth', '10', ''),
(18, 'iksan maulana', 'imhuman@mars.com', 'in living in my dream', '088888', ''),
(19, 'coba upload foto', 'blaa@gmail.comas', 'living on earth', '1', 'biGSuzOYHa6wkvLCTSDrnOC4EWt0l90aX0LiqXCS.jpg'),
(20, 'iksan maulana', 'blaa@gmail.comas', 'living on earth', '2', 'I01Lr5kr7ld9jLPSb6uAfLPqMXI8yQjnpbkbd0xs.jpg'),
(21, 'zeeroy', '605iksanmaulana@gmail.com', 'living on earth', '3', 'waJtYus22KGaiyjRPPaMQvXRTF8ckTvpElb7WZ7D.jpg'),
(22, 'zeeroy', '605iksanmaulana@gmail.com', 'living on earth', '3', 'kZXI3ChHPbYFkUfVHDZglqSZWUVztRx9siaL0WSZ.jpg'),
(23, 'zeeroy', '605iksanmaulana@gmail.com', 'living on earth', '4', 'QjL4nQsdVK5rymcCkImHDrSWRhgRrJZUy4Eh4YMd.jpg'),
(24, 'zeeroy', '605iksanmaulana@gmail.com', 'living on earth', '5', 'sHVA0tZLNAz6yK0cQd8NyJoNedO7jDXvmkpqUCD4.jpg'),
(25, 'iksan maulana', 'iksan 605', 'hello', '605', 'UyDNc1TDdkyYjoQMlRFSqCvrSmZhExYFvQAPQI6E.jpg'),
(26, '<h1>hello</h1>', 'iksan 605', 'living on earth', '123', 'l10Eu5v1U2La3CI3TIcXMBqYPiNk5Zo6uHKQpBIa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
