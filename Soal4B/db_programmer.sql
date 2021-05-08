-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2021 pada 16.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_programmer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill_tb`
--

CREATE TABLE `skill_tb` (
  `id_skill` int(11) NOT NULL,
  `name_skill` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skill_tb`
--

INSERT INTO `skill_tb` (`id_skill`, `name_skill`, `user_id`) VALUES
(1, 'PHP', 1),
(2, 'Java', 2),
(3, 'Dart', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_tb`
--

CREATE TABLE `users_tb` (
  `id_users` int(11) NOT NULL,
  `name_users` varchar(100) NOT NULL,
  `photo_users` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_tb`
--

INSERT INTO `users_tb` (`id_users`, `name_users`, `photo_users`) VALUES
(1, 'John Lennon', 'john.jpg'),
(2, 'Maria', 'maria.jpg'),
(3, 'Intan', 'intan.jpg'),
(7, 'Momoy', 'momoy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `skill_tb`
--
ALTER TABLE `skill_tb`
  ADD PRIMARY KEY (`id_skill`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `skill_tb`
--
ALTER TABLE `skill_tb`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `skill_tb`
--
ALTER TABLE `skill_tb`
  ADD CONSTRAINT `skill_tb_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_tb` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
