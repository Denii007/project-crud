-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2023 pada 16.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcrud_modal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmhs`
--

CREATE TABLE `tmhs` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `prodi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tmhs`
--

INSERT INTO `tmhs` (`id_mhs`, `nim`, `nama`, `alamat`, `prodi`) VALUES
(1, '112233', 'alfin reza', 'jl.swadaya', 'S1-TEKNIK INFORMATIKA'),
(2, '112244', 'doni rosi', 'jl.palmerah', 'S1-SISTEM INFORMASI'),
(3, '112255', 'sari dewi', 'jl.pulo', 'S1-SISTEM INFORMASI'),
(4, '890', 'deni', 'jl.duren', 'D3 - MANAJEMEN INFORMATIK'),
(5, '890', 'deni', 'jl.duren', 'D3 - MANAJEMEN INFORMATIK'),
(6, '890', 'deni', 'jl.duren', 'D3 - MANAJEMEN INFORMATIK'),
(7, '890', 'deni', 'jl.duren', 'D3 - MANAJEMEN INFORMATIK'),
(8, '890', 'deni', 'jl.duren', 'D3 - MANAJEMEN INFORMATIK'),
(9, '890', 'deni', 'jl.duren', 'D3 - MANAJEMEN INFORMATIK'),
(10, '123', 'afi', 'jl.opik', 'S1 - TEKNIK INFORMATIKA '),
(11, '111', 'ads', 'hghg', 'D3 - MANAJEMEN INFORMATIK'),
(12, '1111', 'sddss', 'ssdd', 'D3 - MANAJEMEN INFORMATIK'),
(13, '111', 'ads', 'hghg', 'D3 - MANAJEMEN INFORMATIK'),
(14, '111', 'ads', 'hghg', 'D3 - MANAJEMEN INFORMATIK'),
(15, '111', 'ads', 'AAAAAAAAAAAAAAAAAAA', 'D3 - MANAJEMEN INFORMATIK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tmhs`
--
ALTER TABLE `tmhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
