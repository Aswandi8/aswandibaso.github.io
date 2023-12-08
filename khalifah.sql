-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 20.26
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khalifah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_banner`
--

CREATE TABLE `data_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_banner`
--

INSERT INTO `data_banner` (`id`, `title`, `slug_title`, `keterangan`, `image`, `is_active`) VALUES
(2, 'KBM CAN HELP YOU STAY SAFE', 'kbm-can-help-you-stay-safe', 'Perusahaan elevator yang fokus pada keamanan dapat memberikan berbagai produk atau layanan yang dirancang untuk membantu individu atau bisnis menjaga keamanan dan keamanan gedung. Berikut adalah beberapa cara di mana perusahaan elevator dapat membantu Anda tetap aman:', 'point3d-commercial-imaging-ltd-UckQpkm5yDM-unsplash.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_banner1`
--

CREATE TABLE `data_banner1` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `sub_title` text NOT NULL,
  `tombol` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_banner1`
--

INSERT INTO `data_banner1` (`id`, `title`, `slug_title`, `sub_title`, `tombol`) VALUES
(2, 'FREE!!!', 'free', 'GENERAL CHECK UP ELEVATOR &amp; ESCALATOR UNTUK REKANAN BARU', 'Kirim Permintaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_company`
--

CREATE TABLE `data_company` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `email1` varchar(256) NOT NULL,
  `telp` varchar(256) NOT NULL,
  `telp1` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_company`
--

INSERT INTO `data_company` (`id`, `name`, `email`, `email1`, `telp`, `telp1`, `alamat`, `image`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'PT. KHALIFAH BORNEO MANDIRI', 'email@gmail.com', 'email1@gmail.com', '6282346964325', '082346964325', 'Jl. Indrakila No.98, Gn. Samarinda, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76114', 'ae2b4cd3c338cd068172ad95eaa54421.jpg', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_elevator`
--

CREATE TABLE `data_elevator` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `slug_name` varchar(256) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `rated_load` varchar(256) NOT NULL,
  `travel_height` varchar(256) NOT NULL,
  `speed` varchar(256) NOT NULL,
  `landings` varchar(256) NOT NULL,
  `motor` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_elevator`
--

INSERT INTO `data_elevator` (`id`, `name`, `slug_name`, `kategori_id`, `rated_load`, `travel_height`, `speed`, `landings`, `motor`, `image`, `keterangan`) VALUES
(3, 'LIFT PASSENGER', 'lift-passenger', 6, '400 Kg/ 5 Person', '20 Meter', '0.15 m', '6 Floor', '7.5 KW', 'elevator.jpg', '\"Lift penumpang\" atau \"elevator penumpang\" adalah jenis lift yang dirancang khusus untuk mengangkut orang dari satu lantai ke lantai lain dalam sebuah bangunan. '),
(4, 'LIFT BED HOSPITAL', 'lift-bed-hospital', 7, '400', '20', '2', '2', '2', 'elevator.jpg', '\"Lift bed hospital\" atau \"hospital bed lift\" mengacu pada sistem lift khusus yang dirancang untuk mengangkat dan memindahkan tempat tidur rumah sakit dengan aman dan efisien. Ini adalah perangkat yang sangat penting dalam pengelolaan perawatan pasien di lingkungan rumah sakit.'),
(5, 'LIFT FREIGH', 'lift-freigh', 8, '3', '3', '3', '3', '3', 'elevator.jpg', '\r\n\"Lift freight\" atau \"freight elevator\" adalah jenis lift yang dirancang khusus untuk mengangkut barang atau muatan berat antara lantai-lantai dalam suatu bangunan. Berbeda dengan lift penumpang yang dirancang untuk mengangkut orang, lift freight memprioritaskan kekuatan dan kapasitas untuk mengangkut muatan berat dengan aman dan efisien.'),
(6, 'LIFT HOIST', 'lift-hoist', 9, '4', '4', '4', '4', '4', 'elevator.jpg', '\r\n\"Lift hoist\" adalah perangkat yang digunakan untuk mengangkat atau menurunkan beban, seringkali digunakan dalam berbagai aplikasi industri, konstruksi, dan manufaktur. Terdapat beberapa jenis lift hoist, dan pilihan tergantung pada kebutuhan spesifik penggunaan dan beban yang akan diangkat.'),
(7, 'DUMBWAITER', 'dumbwaiter', 10, '5', '5', '5', '5', '5', 'elevator.jpg', '\r\n\r\n\"Lift dumbwaiter\" atau \"dumbwaiter\" adalah jenis lift kecil yang dirancang khusus untuk mengangkut barang atau benda kecil, seperti makanan atau dokumen, antara lantai-lantai dalam suatu bangunan. Dumbwaiter umumnya digunakan di rumah-rumah, restoran, atau gedung-gedung komersial untuk memudahkan transportasi barang kecil dengan cepat dan efisien. '),
(8, 'LIFT SERVICE', 'lift-service', 11, '6', '6', '6', '6', '6', 'elevator.jpg', '\"Lift service\" atau \"layanan lift\" mencakup berbagai jenis perawatan, pemeliharaan, dan layanan teknis yang ditujukan untuk menjaga kinerja, keamanan, dan keandalan lift atau elevator. Layanan lift melibatkan berbagai tindakan yang dilakukan oleh perusahaan pemeliharaan lift atau teknisi khusus lift.'),
(9, 'HOME LIFT', 'home-lift', 12, '7', '7', '7', '7', '7', 'elevator.jpg', '\"Home lift\" atau \"lift rumah\" adalah jenis lift yang dirancang khusus untuk digunakan di dalam rumah atau bangunan tinggal. Home lift memberikan aksesibilitas vertikal, memungkinkan orang untuk bergerak antar lantai dengan nyaman, terutama di rumah-rumah dengan lebih dari satu tingkat. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_escalator`
--

CREATE TABLE `data_escalator` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug_name` varchar(128) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `model` varchar(128) NOT NULL,
  `travel_height` varchar(128) NOT NULL,
  `weight` varchar(128) NOT NULL,
  `width` varchar(128) NOT NULL,
  `gradient` varchar(128) NOT NULL,
  `power` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_escalator`
--

INSERT INTO `data_escalator` (`id`, `name`, `slug_name`, `kategori_id`, `model`, `travel_height`, `weight`, `width`, `gradient`, `power`, `image`, `keterangan`) VALUES
(3, '1', '1', 1, '1', '1', '1', '1', '1', '1', 'escalator.jpg', 'Escalator adalah perangkat konveyor bergerak yang digunakan untuk mentransportasi orang antar lantai dalam bangunan dengan kemiringan yang cenderung naik atau turun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_features`
--

CREATE TABLE `data_features` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `tombol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_features`
--

INSERT INTO `data_features` (`id`, `title`, `slug_title`, `keterangan`, `image`, `tombol`) VALUES
(1, 'ELEVATOR', 'elevator', '<p>Elevator, atau lift, adalah perangkat transportasi vertikal yang dirancang untuk memindahkan orang atau barang dari satu lantai ke lantai lain dalam suatu bangunan. Berikut adalah beberapa komponen utama dan karakteristik elevator:<br></p><b>Komponen Utama:<br></b><ol><li>Kabin: Area yang bergerak naik dan turun dalam shaft atau sumbu elevator, tempat penumpang atau barang berada.</li><li>Pintu: Pintu di kabin yang membuka dan menutup untuk memungkinkan penumpang masuk atau keluar. Pintu ini sering terbuat dari bahan yang kokoh dan dilengkapi dengan sensor keamanan.</li><li>Motor dan Sistem Penggerak: Bertanggung jawab untuk menghasilkan daya untuk mengangkat dan menurunkan kabin. Motor ini sering terhubung dengan sistem penggerak yang melibatkan katrol dan tali atau rantai.</li><li>Sistem Kontrol: Mengatur operasi lift, termasuk pengaturan kecepatan, penghentian, dan pembukaan pintu.</li></ol>', 'elevator.jpg', 'Kirim Permintaan'),
(2, 'escalator', 'escalator', '<p>Escalator adalah sistem transportasi bergerak yang digunakan untuk memindahkan orang secara vertikal atau miring antar lantai dalam sebuah bangunan. Berikut adalah beberapa komponen utama dan karakteristik dari escalator:<br></p><b>Komponen Utama Escalator:</b><ol><li>Tread dan Riser: Tread adalah bagian bergerigi yang ditempati oleh kaki penumpang, sedangkan riser adalah bagian vertikal antara tread.</li><li>Step atau Palette: Bagian yang bergerak secara berulang dan membawa penumpang naik atau turun.</li><li>Handrail: Jalur bergerak yang memungkinkan penumpang memegang sesuatu selama perjalanan.</li><li>Motor dan Sistem Penggerak: Motor yang menggerakkan escalator, sering kali terletak di bagian bawah.</li><li>Sistem Kontrol: Mengontrol operasi dan kecepatan escalator.</li></ol>', 'escalator.jpg', 'Kirim Permintaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_image`
--

CREATE TABLE `data_image` (
  `id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `ket` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_image`
--

INSERT INTO `data_image` (`id`, `image`, `ket`) VALUES
(1, 'LOGO_KBM_2022.png', '1'),
(2, 'logo.png', '1'),
(3, 'point3d-commercial-imaging-ltd-UckQpkm5yDM-unsplash.jpg', '1'),
(4, 'STEMPEL_20221.png', '1'),
(5, 'STEMPEL_2022.png', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kategory_elevator`
--

CREATE TABLE `data_kategory_elevator` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kategory_elevator`
--

INSERT INTO `data_kategory_elevator` (`id`, `title`, `slug_title`) VALUES
(6, 'Passenger', 'passenger'),
(7, 'Bed/Hospital', 'bedhospital'),
(8, 'Freigh', 'freigh'),
(9, 'Hoist', 'hoist'),
(10, 'Dumbwater', 'dumbwater'),
(11, 'Service', 'service'),
(12, 'Home Lift', 'home-lift');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kategory_escalator`
--

CREATE TABLE `data_kategory_escalator` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kategory_escalator`
--

INSERT INTO `data_kategory_escalator` (`id`, `title`, `slug_title`) VALUES
(1, '90 derajat', '90-derajat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_maintenance`
--

CREATE TABLE `data_maintenance` (
  `id` int(11) NOT NULL,
  `section_1` text NOT NULL,
  `section_2` text NOT NULL,
  `section_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_maintenance`
--

INSERT INTO `data_maintenance` (`id`, `section_1`, `section_2`, `section_3`) VALUES
(1, 'BAGAIMANA KAMI BISA <span>MEMBANTU</span> ANDA?', 'KAMI DI SINI UNTUK <span>MEMBUAT</span> HIDUP LEBIH MUDAH', 'SOLUSI <span>PEMELIHARAAN</span> UNTUK SETIAP KEBUTUHAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_meta`
--

CREATE TABLE `data_meta` (
  `id` int(11) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_author` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_meta`
--

INSERT INTO `data_meta` (`id`, `meta_description`, `meta_keywords`, `meta_author`) VALUES
(1, '1', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_misi`
--

CREATE TABLE `data_misi` (
  `id` int(11) NOT NULL,
  `misi` text NOT NULL,
  `slug_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_misi`
--

INSERT INTO `data_misi` (`id`, `misi`, `slug_misi`) VALUES
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic delectus illo sequi impedit accusantium rem?', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-hic-delectus-illo-sequi-impedit-accusantium-rem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_modernisasi`
--

CREATE TABLE `data_modernisasi` (
  `id` int(11) NOT NULL,
  `section_1` text NOT NULL,
  `section_2` text NOT NULL,
  `section_3` text NOT NULL,
  `section_4` text NOT NULL,
  `section_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_modernisasi`
--

INSERT INTO `data_modernisasi` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`) VALUES
(1, 'KENAPA MODERNISASI DENGAN <br><span>PT. KHALIFAH BORNEO MANDIRI?</span>', 'SOLUSI MODERNISASI KAMI', '', 'PROSES MODERNISASI PT. KHALIFAH BORNEO MANDIRI', 'KEUNTUNGAN DARI MODERNISASI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_partner`
--

CREATE TABLE `data_partner` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug_partner` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_partner`
--

INSERT INTO `data_partner` (`id`, `name`, `slug_partner`, `image`, `is_active`) VALUES
(4, 'KONE', 'kone', 'Kone.png', 1),
(5, 'Hyunday', 'hyunday', 'download.png', 1),
(7, 'OTIS', 'otis', '2560px-Otis_logo_SVG.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sejarah`
--

CREATE TABLE `data_sejarah` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_sejarah`
--

INSERT INTO `data_sejarah` (`id`, `title`, `slug_title`, `image`, `keterangan`) VALUES
(1, 'SEJARAH KBM', 'sejarah-kbm', 'STEMPEL_2022.png', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem repellat debitis laborum optio aliquid inventore impedit sed nobis voluptates in quam provident, aut vero nam temporibus, eligendi consequatur? Eum, quod laborum? Minus quidem pariatur consequuntur iusto! Cupiditate ipsa nostrum deleniti commodi. Ab similique totam aperiam perferendis amet. Itaque nobis eligendi exercitationem dolorum iste vel quia excepturi nisi. Nam, eum magnam amet eveniet possimus fugiat asperiores esse omnis reprehenderit dolore sequi cumque inventore voluptatibus qui non quas nobis veritatis corporis pariatur necessitatibus vero. Animi eaque sed quasi, omnis dolore dolores porro sint nobis doloremque vitae iste repellendus voluptas odio aperiam totam explicabo soluta velit, sapiente similique possimus, laudantium illum provident cum! Quod sint perferendis, dolorum doloremque voluptate cumque, ex nobis praesentium ipsum pariatur sit corrupti dolore porro commodi nisi ea saepe quam expedita? Animi et obcaecati blanditiis dolorem, delectus ullam aliquid consequatur quisquam nobis optio, tempore esse. Ad maxime, modi autem enim quisquam consectetur beatae, corrupti incidunt, a at nostrum officia. Laborum ab ipsum sit neque temporibus unde perspiciatis labore, hic illo possimus sequi quod at ad repellat tempora dolorum. Excepturi, hic nemo? Labore nisi laboriosam minima repellendus debitis iusto, amet laudantium placeat molestias ipsam, explicabo saepe vel, inventore nobis sint?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_service`
--

CREATE TABLE `data_service` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_service`
--

INSERT INTO `data_service` (`id`, `title`, `slug_title`, `keterangan`, `icon`) VALUES
(1, 'Layanan Pemeliharaan dan Perbaikan', 'layanan-pemeliharaan-dan-perbaikan', 'Memberikan layanan pemeliharaan rutin untuk menjaga elevator dalam kondisi optimal dan menawarkan layanan perbaikan segera jika terjadi malfungsi.', 'fa-solid fa-gear'),
(2, 'Layanan Modernisasi', 'layanan-modernisasi', 'Meningkatkan sistem elevator lama dengan teknologi terkini untuk meningkatkan efisiensi, keselamatan, dan konsumsi energi.', 'fa-solid fa-up-long'),
(3, 'Layanan Darurat 24/7', 'layanan-darurat-247', 'Menawarkan dukungan 24 jam untuk situasi darurat, memastikan waktu henti yang minimal untuk elevator.', 'fa-solid fa-phone');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sparepart`
--

CREATE TABLE `data_sparepart` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug_name` varchar(128) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `tipe` varchar(128) NOT NULL,
  `material` varchar(128) NOT NULL,
  `ukuran` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `ringkasan_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_sparepart`
--

INSERT INTO `data_sparepart` (`id`, `name`, `slug_name`, `merk`, `tipe`, `material`, `ukuran`, `image`, `ringkasan_produk`) VALUES
(2, 'name', 'name', 'merk', 'tipe', 'material', 'ukuran', 'sparepart.jpg', 'asd'),
(3, '1', '1', '1', '1', '1', '1', 'sparepart.jpg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_visi`
--

CREATE TABLE `data_visi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `slug_visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_visi`
--

INSERT INTO `data_visi` (`id`, `visi`, `slug_visi`) VALUES
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic delectus illo sequi impedit accusantium rem?', 'lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-hic-delectus-illo-sequi-impedit-accusantium-rem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance_section1`
--

CREATE TABLE `maintenance_section1` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `tombol` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `maintenance_section1`
--

INSERT INTO `maintenance_section1` (`id`, `title`, `slug_title`, `icon`, `tombol`) VALUES
(1, 'Menjadi pelanggan', 'menjadi-pelanggan', 'fa-solid fa-user-group', 'Hubungi Ahli'),
(2, 'Minta penawaran harga dari kami', 'minta-penawaran-harga-dari-kami', 'fa-solid fa-envelope-circle-check', 'Minta Penawaran Harga'),
(3, 'Laporkan kebutuhan perbaikan atau insiden', 'laporkan-kebutuhan-perbaikan-atau-insiden', 'fa-solid fa-clipboard', 'Hubungi Kami');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance_section2`
--

CREATE TABLE `maintenance_section2` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `maintenance_section2`
--

INSERT INTO `maintenance_section2` (`id`, `title`, `slug_title`, `image`, `keterangan`) VALUES
(5, 'Mobilitas yang Efisien', 'mobilitas-yang-efisien', 'default.png', 'Elevator Cepat dan Andal: Menyediakan elevator yang efisien dan dapat diandalkan untuk memastikan mobilitas yang cepat antar lantai dalam bangunan.'),
(6, 'Keamanan Pengguna', 'keamanan-pengguna', 'default.png', 'Teknologi Keamanan Modern: Mengintegrasikan teknologi terbaru untuk memastikan keamanan pengguna selama penggunaan elevator dan escalator.'),
(7, 'Desain Inovatif', 'desain-inovatif', 'default.png', 'Desain Estetis dan Ergonomis: Menyediakan solusi transportasi vertikal dengan desain yang sesuai dengan estetika bangunan dan memberikan pengalaman pengguna yang nyaman.\r\n'),
(8, 'Pemeliharaan Teratur', 'pemeliharaan-teratur', 'default.png', 'Layanan Pemeliharaan Rutin: Menawarkan jadwal pemeliharaan berkala untuk memastikan kinerja optimal dan mencegah potensi kerusakan.'),
(9, 'Dukungan Pelanggan', 'dukungan-pelanggan', 'default.png', 'Layanan Pelanggan yang Responsif: Menyediakan dukungan pelanggan yang ramah dan responsif untuk menjawab pertanyaan atau menanggapi masalah pengguna.\r\n'),
(10, 'Inovasi Teknologi', 'inovasi-teknologi', 'default.png', 'Teknologi Terkini untuk Efisiensi Energi: Menggunakan teknologi inovatif untuk mengurangi konsumsi energi dan dampak lingkungan.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maintenance_section3`
--

CREATE TABLE `maintenance_section3` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `sub_title` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `maintenance_section3`
--

INSERT INTO `maintenance_section3` (`id`, `title`, `slug_title`, `sub_title`, `image`, `keterangan`) VALUES
(4, 'Penjadwalan Pemeliharaan Rutin', 'penjadwalan-pemeliharaan-rutin', 'Penjadwalan Pemeliharaan Rutin', 'default.png', 'Menyusun jadwal pemeliharaan rutin untuk memastikan kinerja optimal elevator dan escalator.'),
(5, 'Pemantauan Proaktif', 'pemantauan-proaktif', 'Pemantauan Proaktif', 'default.png', 'Sistem Pemantauan Jarak Jauh: Menggunakan teknologi untuk pemantauan jarak jauh yang memungkinkan deteksi dini masalah potensial.'),
(6, 'Layanan Darurat 24/7', 'layanan-darurat-247', 'Layanan Darurat 24/7', 'default.png', 'Respons Cepat: Menyediakan layanan darurat 24/7 untuk menanggapi masalah mendesak dan mengurangi waktu henti.'),
(7, 'Teknisi Terlatih dan Bersertifikat', 'teknisi-terlatih-dan-bersertifikat', 'Teknisi Terlatih dan Bersertifikat', 'default.png', 'Tim Pemeliharaan Ahli: Memiliki tim teknisi yang terlatih dan bersertifikat untuk melakukan pemeliharaan dan perbaikan.'),
(8, 'Pelaporan dan Transparansi', 'pelaporan-dan-transparansi', 'Pelaporan dan Transparansi', 'default.png', 'Laporan Berkala: Memberikan laporan berkala kepada pelanggan mengenai pemeliharaan yang dilakukan dan kondisi perangkat.'),
(9, 'Kepatuhan dengan Standar Keselamatan', 'kepatuhan-dengan-standar-keselamatan', 'Kepatuhan dengan Standar Keselamatan', 'default.png', 'Memastikan Kepatuhan: Memastikan bahwa semua pemeliharaan memenuhi standar keselamatan dan regulasi yang berlaku.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modernisasi_section1`
--

CREATE TABLE `modernisasi_section1` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `modernisasi_section1`
--

INSERT INTO `modernisasi_section1` (`id`, `title`, `slug_title`, `icon`, `keterangan`) VALUES
(4, 'Teknologi Terkini', 'teknologi-terkini', 'fa-solid fa-microchip', 'Penggunaan Teknologi Modern: Perusahaan modernisasi elevator umumnya akan menghadirkan teknologi terkini ke dalam perangkat tersebut, meningkatkan efisiensi, keamanan, dan kenyamanan.'),
(5, 'Kepatuhan Standar Keselamatan Terbaru', 'kepatuhan-standar-keselamatan-terbaru', 'fa-solid fa-shield-halved', 'Pembaruan Standar Keselamatan: Modernisasi dapat mencakup pembaruan perangkat lunak dan perangkat keras untuk memastikan kepatuhan dengan standar keselamatan dan peraturan terbaru.'),
(6, 'Kenyamanan dan Kinerja yang Lebih Baik', 'kenyamanan-dan-kinerja-yang-lebih-baik', 'fa-solid fa-user-shield', 'Perbaikan Kinerja: Modernisasi dapat meningkatkan kinerja lift, termasuk kecepatan, akurasi penghentian, dan waktu tunggu, memberikan pengalaman yang lebih baik bagi pengguna.'),
(7, 'Ramah Lingkungan', 'ramah-lingkungan', 'fa-regular fa-building', 'Desain Ramah Lingkungan: Modernisasi elevator dapat mencakup desain yang lebih ramah lingkungan dan penggunaan material yang lebih efisien.'),
(8, 'Peningkatan Keamanan', 'peningkatan-keamanan', 'fa-solid fa-fingerprint', 'Teknologi Keamanan Terkini: Modernisasi dapat melibatkan pemasangan teknologi keamanan baru, seperti sistem sensor canggih dan pengereman darurat, meningkatkan keamanan penumpang.'),
(10, 'Penyesuaian dengan Perubahan Kebutuhan', 'penyesuaian-dengan-perubahan-kebutuhan', 'fa-solid fa-up-long', 'Adaptasi Terhadap Kebutuhan Baru: Modernisasi memungkinkan penyesuaian dengan perubahan kebutuhan gedung atau pelanggan, seperti peningkatan kapasitas atau perubahan tata letak lantai.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modernisasi_section2`
--

CREATE TABLE `modernisasi_section2` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `modernisasi_section2`
--

INSERT INTO `modernisasi_section2` (`id`, `title`, `slug_title`, `icon`, `keterangan`) VALUES
(5, 'Penggantian Teknologi Kunci', 'penggantian-teknologi-kunci', 'Penggantian Teknologi Kunci', 'Pembaruan Perangkat Lunak dan Perangkat Keras: Penggantian atau pembaruan teknologi utama untuk meningkatkan efisiensi dan keamanan.'),
(6, 'Keamanan dan Ketersediaan', 'keamanan-dan-ketersediaan', 'Keamanan dan Ketersediaan', 'Sistem Pengereman Darurat: Pemasangan atau peningkatan sistem pengereman darurat untuk meningkatkan keamanan dalam situasi darurat.\r\nSensor Keselamatan: Pemasangan sensor keselamatan baru atau yang ditingkatkan untuk mendeteksi hambatan atau perilaku yang tidak aman.'),
(7, 'Efisiensi Energi', 'efisiensi-energi', 'Efisiensi Energi', 'Pembaruan Sistem Penggerak: Mengganti atau memperbarui sistem penggerak untuk meningkatkan efisiensi energi dan mengurangi dampak lingkungan.'),
(8, 'Kenyamanan Pengguna', 'kenyamanan-pengguna', 'Kenyamanan Pengguna', 'Pembaruan Kontrol Pengguna: Pemasangan sistem kontrol yang lebih canggih untuk memberikan pengalaman pengguna yang lebih nyaman dan efisien.'),
(9, 'Integrasi Teknologi Pintar', 'integrasi-teknologi-pintar', 'Integrasi Teknologi Pintar', 'Sistem Pintar: Integrasi teknologi pintar untuk memungkinkan konektivitas dengan sistem manajemen gedung pintar dan memberikan informasi real-time.'),
(10, 'Pemeliharaan dan Monitoring', 'pemeliharaan-dan-monitoring', 'Pemeliharaan dan Monitoring', 'Sistem Pemantauan Jarak Jauh: Pemasangan sistem pemantauan jarak jauh untuk pemeliharaan prediktif dan mendeteksi masalah sebelum terjadi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modernisasi_section3`
--

CREATE TABLE `modernisasi_section3` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `modernisasi_section3`
--

INSERT INTO `modernisasi_section3` (`id`, `title`, `slug_title`, `image`, `keterangan`) VALUES
(4, 'Modernisasi Escalator', 'modernisasi-escalator', 'full-shot-people-walking-together.jpg', 'Proses modernisasi escalator umumnya serupa dengan proses modernisasi elevator, dengan penyesuaian khusus untuk perangkat tersebut. Beberapa langkah tambahan melibatkan penggantian tread, riser, handrail, dan pembersihan umum pada mekanisme yang ada.\r\n\r\nPenting untuk dicatat bahwa setiap proyek modernisasi harus mematuhi peraturan dan standar keselamatan yang berlaku, serta memenuhi kebutuhan khusus dan preferensi pelanggan. Proses ini biasanya diawasi oleh tim teknisi ahli untuk memastikan keselamatan dan kualitas hasil akhir.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modernisasi_section4`
--

CREATE TABLE `modernisasi_section4` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `modernisasi_section4`
--

INSERT INTO `modernisasi_section4` (`id`, `title`, `slug_title`, `image`, `keterangan`) VALUES
(4, 'Evaluasi dan Perencanaan', 'evaluasi-dan-perencanaan', 'default.png', 'Inspeksi Awal: Evaluasi keadaan elevator yang ada, termasuk komponen dan teknologi yang sudah ada.\r\nKonsultasi dengan Pelanggan: Diskusi dengan pemilik bangunan atau pengelola untuk memahami kebutuhan khusus dan preferensi.'),
(5, 'Perancangan dan Spesifikasi', 'perancangan-dan-spesifikasi', 'default.png', 'Pemilihan Teknologi Baru: Penentuan teknologi dan fitur yang akan diperbarui atau ditambahkan.\r\nPenyusunan Rencana Kerja: Perancangan rencana detail untuk modernisasi, termasuk jadwal kerja dan pengaturan sementara.'),
(6, 'Pemeliharaan Sementara', 'pemeliharaan-sementara', 'default.png', 'Pemeliharaan Saat Beroperasi: Jika diperlukan, pemasangan solusi sementara untuk memastikan elevator tetap beroperasi selama proses modernisasi.'),
(7, 'Penggantian Perangkat Keras dan Perangkat Lunak', 'penggantian-perangkat-keras-dan-perangkat-lunak', 'default.png', 'Penggantian Komponen Usang: Pemasangan perangkat keras baru, termasuk motor, kendali, dan panel kontrol.\r\nPembaruan Perangkat Lunak: Instalasi atau pembaruan perangkat lunak untuk meningkatkan keamanan dan kinerja.'),
(8, 'Penggantian Sistem Pengereman dan Sensor', 'penggantian-sistem-pengereman-dan-sensor', 'default.png', 'Pemasangan Pengereman Darurat Baru: Jika diperlukan, penggantian sistem pengereman darurat untuk meningkatkan keamanan.\r\nPenggantian Sensor Keselamatan: Pemasangan atau upgrade sensor keselamatan untuk mendeteksi hambatan dengan lebih akurat.'),
(9, 'Uji Coba dan Pengujian', 'uji-coba-dan-pengujian', 'default.png', 'Pengujian Kinerja: Pengujian menyeluruh untuk memastikan bahwa setiap komponen dan fitur berfungsi dengan baik.\r\nUji Coba Beban: Pengujian kemampuan elevator untuk menangani beban maksimum yang diizinkan.'),
(10, 'Pelatihan dan Penyerahan', 'pelatihan-dan-penyerahan', 'default.png', 'Pelatihan Operator: Jika diperlukan, pelatihan bagi operator atau pengelola bangunan tentang pengoperasian perangkat yang diperbarui.\r\nPenyerahan Proyek: Penyerahan resmi proyek setelah semua pekerjaan selesai dan pengujian telah dilakukan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modernisasi_section5`
--

CREATE TABLE `modernisasi_section5` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `modernisasi_section5`
--

INSERT INTO `modernisasi_section5` (`id`, `title`, `slug_title`, `image`, `keterangan`) VALUES
(2, 'asd', 'asd', 'transparent-elevator-underground-passage1.jpg', '<ol><li>Kinerja yang Ditingkatkan:<ul><li>Kecepatan dan Akurasi: Modernisasi dapat meningkatkan kecepatan elevator dan akurasi penghentian, mengurangi waktu tunggu dan meningkatkan efisiensi perjalanan.</li></ul></li><li>Efisiensi Energi:<ul><li>Teknologi Ramah Lingkungan: Pembaruan teknologi dapat meningkatkan efisiensi energi, mengurangi konsumsi daya dan dampak lingkungan.</li></ul></li><li>Keamanan yang Ditingkatkan:<ul><li>Sistem Pengereman dan Sensor Baru: Pemasangan sistem pengereman darurat dan sensor keselamatan yang lebih canggih untuk meningkatkan keamanan penumpang.</li></ul></li><li>Aksesibilitas Difabel:<ul><li>Fasilitas Aksesibilitas yang Ditingkatkan: Peningkatan fasilitas untuk pengguna dengan disabilitas, seperti peningkatan lebar pintu dan perangkat kendali yang ramah difabel.</li></ul></li><li>Peningkatan Estetika:<ul><li>Desain Interior yang Modern: Pembaruan estetika dengan pemilihan material dan desain interior yang sesuai dengan tren terkini.</li></ul></li><li>Kepatuhan dengan Standar Keselamatan:<ul><li>Pemenuhan Standar Keselamatan Terbaru: Modernisasi memastikan bahwa elevator mematuhi atau melebihi standar keselamatan dan peraturan yang berlaku.</li></ul></li><li>Penyesuaian dengan Kebutuhan Bangunan:<ul><li>Peningkatan Kapasitas atau Pemindahan Lantai: Modernisasi memungkinkan penyesuaian kapasitas atau pemindahan lantai untuk memenuhi perubahan kebutuhan bangunan.</li></ul></li></ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `facebook`, `twitter`, `instagram`, `role_id`, `is_active`, `date_created`) VALUES
(12, 'Admins', 'admin@gmail.com', 'Screenshot_(25).png', '$2y$10$GN5kF3Nu/XwCFutNei97MewVcRum/n5GV7adtQ9AgefxCUVzW.K9m', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', 1, 1, 1696165495);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(8, 1, 2),
(13, 1, 3),
(14, 1, 6),
(15, 1, 7),
(16, 1, 8),
(17, 1, 9),
(18, 1, 10),
(19, 1, 11),
(20, 1, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `slug_menu` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `slug_menu`, `icon`) VALUES
(1, 'Admin', 'admin', 'dw dw-home'),
(2, 'User', 'user', 'dw dw-user1'),
(3, 'Kategori', 'kategori', 'as'),
(6, 'Product', 'product', 'dw dw-marker'),
(7, 'Partner', 'partner', 'dw dw-user-11'),
(8, 'Website', 'website', 'dw dw-worldwide-1'),
(9, 'Maintenance', 'maintenance', 'dw dw-settings2'),
(10, 'Modernisasi', 'modernisasi', 'dw dw-up-chevron-1'),
(11, 'About', 'about', 'dw dw-beach-house'),
(12, 'Contact', 'contact', 'dw dw-phone-call');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL,
  `slug_role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`, `slug_role`) VALUES
(1, 'Administrator', 'administrator'),
(2, 'Marketing', 'marketing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug_submenu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `slug_submenu`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'my-profile', 'user', 'fas fa-fw fa-user', 1),
(4, 1, 'Menu Management', 'menu-management', 'admin/menu', 'fas fa-fw fa-folder', 1),
(5, 1, 'Submenu Management', 'submenu-management', 'admin/sub-menu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'change-password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(10, 1, 'Icon', 'icon', 'admin/icon', '', 1),
(11, 7, 'Data Partner', 'data-partner', 'partner', '', 1),
(12, 8, 'Data Image', 'data-image', 'website', '', 1),
(13, 8, 'Data Service', 'data-service', 'website/service', '', 1),
(14, 8, 'Data Banner', 'data-banner', 'website/banner', '', 1),
(15, 8, 'Data Features', 'data-features', 'website/features', '', 1),
(16, 8, 'Data Iklan', 'data-iklan', 'website/iklan', '', 1),
(17, 9, 'Maintenance Section 1', 'maintenance-section-1', 'maintenance', '', 1),
(18, 9, 'Maintenance Section 2', 'maintenance-section-2', 'maintenance/section-2', '', 1),
(19, 9, 'Maintenance Section 3', 'maintenance-section-3', 'maintenance/section-3', '', 1),
(20, 10, 'Modernisasi Section 1', 'modernisasi-section-1', 'modernisasi', '', 1),
(21, 10, 'Modernisasi Section 2', 'modernisasi-section-2', 'modernisasi/section-2', '', 1),
(22, 10, 'Modernisasi Section 3', 'modernisasi-section-3', 'modernisasi/section-3', '', 1),
(23, 10, 'Modernisasi Section 4', 'modernisasi-section-4', 'modernisasi/section-4', '', 1),
(24, 10, 'Modernisasi Section 5', 'modernisasi-section-5', 'modernisasi/section-5', '', 1),
(25, 11, 'Sejarah KBM', 'sejarah-kbm', 'about/sejarah-kbm', '', 1),
(26, 11, 'Visi KBM', 'visi-kbm', 'about/visi-kbm', '', 1),
(27, 11, 'Misi KBM', 'misi-kbm', 'about/misi-kbm', '', 1),
(30, 12, 'Data Perusahaan', 'data-perusahaan', 'contact', '', 1),
(31, 9, 'Data Maintenance', 'data-maintenance', 'maintenance/data-maintenance', '', 1),
(32, 10, 'Data Modernisasi', 'data-modernisasi', 'modernisasi/data-modernisasi', '', 1),
(33, 6, 'Elevator', 'elevator', 'product/elevator', '', 1),
(34, 6, 'Escalator', 'escalator', 'product/escalator', '', 1),
(35, 6, 'Spare Part', 'spare-part', 'product/sparepart', '', 1),
(36, 3, 'Kategori Elevator', 'kategori-elevator', 'kategori/elevator', '', 1),
(37, 3, 'Kategori Escalator', 'kategori-escalator', 'kategori/escalator', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_banner`
--
ALTER TABLE `data_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_banner1`
--
ALTER TABLE `data_banner1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_company`
--
ALTER TABLE `data_company`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_elevator`
--
ALTER TABLE `data_elevator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_escalator`
--
ALTER TABLE `data_escalator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_features`
--
ALTER TABLE `data_features`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_image`
--
ALTER TABLE `data_image`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kategory_elevator`
--
ALTER TABLE `data_kategory_elevator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kategory_escalator`
--
ALTER TABLE `data_kategory_escalator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_maintenance`
--
ALTER TABLE `data_maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_meta`
--
ALTER TABLE `data_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_misi`
--
ALTER TABLE `data_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_modernisasi`
--
ALTER TABLE `data_modernisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_partner`
--
ALTER TABLE `data_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_sejarah`
--
ALTER TABLE `data_sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_service`
--
ALTER TABLE `data_service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_sparepart`
--
ALTER TABLE `data_sparepart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_visi`
--
ALTER TABLE `data_visi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maintenance_section1`
--
ALTER TABLE `maintenance_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maintenance_section2`
--
ALTER TABLE `maintenance_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maintenance_section3`
--
ALTER TABLE `maintenance_section3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modernisasi_section1`
--
ALTER TABLE `modernisasi_section1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modernisasi_section2`
--
ALTER TABLE `modernisasi_section2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modernisasi_section3`
--
ALTER TABLE `modernisasi_section3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modernisasi_section4`
--
ALTER TABLE `modernisasi_section4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `modernisasi_section5`
--
ALTER TABLE `modernisasi_section5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_banner`
--
ALTER TABLE `data_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_banner1`
--
ALTER TABLE `data_banner1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_company`
--
ALTER TABLE `data_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_elevator`
--
ALTER TABLE `data_elevator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `data_escalator`
--
ALTER TABLE `data_escalator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_features`
--
ALTER TABLE `data_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_image`
--
ALTER TABLE `data_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_kategory_elevator`
--
ALTER TABLE `data_kategory_elevator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `data_kategory_escalator`
--
ALTER TABLE `data_kategory_escalator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_maintenance`
--
ALTER TABLE `data_maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_meta`
--
ALTER TABLE `data_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_misi`
--
ALTER TABLE `data_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_modernisasi`
--
ALTER TABLE `data_modernisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_partner`
--
ALTER TABLE `data_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_sejarah`
--
ALTER TABLE `data_sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_service`
--
ALTER TABLE `data_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_sparepart`
--
ALTER TABLE `data_sparepart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_visi`
--
ALTER TABLE `data_visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `maintenance_section1`
--
ALTER TABLE `maintenance_section1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `maintenance_section2`
--
ALTER TABLE `maintenance_section2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `maintenance_section3`
--
ALTER TABLE `maintenance_section3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `modernisasi_section1`
--
ALTER TABLE `modernisasi_section1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `modernisasi_section2`
--
ALTER TABLE `modernisasi_section2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `modernisasi_section3`
--
ALTER TABLE `modernisasi_section3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `modernisasi_section4`
--
ALTER TABLE `modernisasi_section4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `modernisasi_section5`
--
ALTER TABLE `modernisasi_section5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
