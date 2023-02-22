-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2023 pada 02.30
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek2_solo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alams`
--

CREATE TABLE `alams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alams`
--

INSERT INTO `alams` (`id`, `judul`, `deskripsi`, `sejarah`, `location`, `gambar`, `jam`, `nomor_hp`, `ig`, `twt`, `fb`, `maps`, `iframe`, `created_at`, `updated_at`) VALUES
(11, 'Geopark Batu Seribu', 'Di selatan Kota Surakarta, tepatnya di Kabupaten Sukoharjo terdapat tempat wisata yang belum banyak diketahui wisatawan. Geopark Batu Seribu merupakan destinasi wisata alam yang terletak di lereng Bukit Gajah Mungkur, puncak tertinggi dari pegunungan selatan. Jalur menuju Geopark Batu Seribu adalah pegunungan yang cukup menanjak. Di sini, pengunjung bisa melihat pemandangan perbukitan hijau yang masih asri. Selain itu, Geopark Batu Seribu dilengkapi dengan kolam renang di tengah rimbunnya hutan yang airnya berasal dari air pegunungan.', '&nbsp;panas tubuh yang tak juga hilang membuat Ki Gathok akhirnya menceburkan diri ke dalam genangan air itu dan hilanglah ia sampai ke dasar.Nama obyek wisata Batu Seribu baru diberikan pada tahun 1993 ketika obyek wisata itu diresmikan oleh Pemerintah Kabupaten Sukoharjo. Pemerintah Kabupaten Sukoharjo memberikan nama obyek wisata Batu Seribu karena sebelum pembangunan obyek wisata, daerah ini berupa perbukitan batu cadas. Perbukitan batu cadas yang terdapat banyak batu berukuran besar kini diubah Pemerintah Kabupaten Sukoharjo menjadi hutan jati yang teduh dan asri.', 'Gentan, Bulu, Pacinan, Gentan, Sukoharjo, Kabupaten Sukoharjo, Jawa Tengah 57563', 'gambar/0tMy7aRkYRqd73BYljwQUAogaBk2RErUP5FKCkA8.jpg', '08.00 - 16.00', '08132022383', 'GeoparkOfficial', 'GeoparkOfficial', 'GeoparkOfficial', 'https://goo.gl/maps/VzuwpjoVXKbvYqAn6', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0167742275144!2d110.838404!3d-7.7880457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a309017e1e317', '2022-11-23 01:39:48', '2022-11-23 04:06:04'),
(13, 'Bukit Cumbri', 'Di selatan Kota Surakarta, tepatnya di Kabupaten Sukoharjo terdapat tempat wisata yang belum banyak diketahui wisatawan. Geopark Batu Seribu merupakan destinasi wisata alam yang terletak di lereng Bukit Gajah Mungkur, puncak tertinggi dari pegunungan selatan. Jalur menuju Geopark Batu Seribu adalah pegunungan yang cukup menanjak. Di sini, pengunjung bisa melihat pemandangan perbukitan hijau yang masih asri. Selain itu, Geopark Batu Seribu dilengkapi dengan kolam renang di tengah rimbunnya hutan yang airnya berasal dari air pegunungan.\',\'sejarah\' =&gt; \'Asal usul nama Pacinan berasal dari legenda&nbsp;', 'Di selatan Kota Surakarta, tepatnya di Kabupaten Sukoharjo terdapat tempat wisata yang belum banyak diketahui wisatawan. Geopark Batu Seribu merupakan destinasi wisata alam yang terletak di lereng Bukit Gajah Mungkur, puncak tertinggi dari pegunungan selatan. Jalur menuju Geopark Batu Seribu adalah pegunungan yang cukup menanjak. Di sini, pengunjung bisa melihat pemandangan perbukitan hijau yang masih asri. Selain itu, Geopark Batu Seribu dilengkapi dengan kolam renang di tengah rimbunnya hutan yang airnya berasal dari air pegunungan.\',\'sejarah\' =&gt; \'Asal usul nama Pacinan berasal dari legenda&nbsp;', 'Kepyar, Purwantoro, Ngudal, Pagerukir, Kec. Sampung, Kabupaten Wonogiri, Jawa Tengah 57695', 'gambar/gTgk2fgzMk16JVlyBtq9ZQbQKza1eUCPWQFB8RDG.jpg', '08.00-16.00', '08132165156', 'BukitCumbiri', 'BukitCumbiri', 'BukitCumbiri', 'https://www.google.com/maps/embed?pb=!4v1669032134939!6m8!1m7!1sCAoSLEFGMVFpcFBVQ2E4QWxJcnAwTno1eG5JY3hwSUo5WDlETk42TXNoZ2kwZEtq!2m2!1d-7.840744999999999!2d111.3058816!3f43.80022127466947!4f-19.444652955256004!5f0.7820865974627469', 'https://www.google.com/maps/embed?pb=!4v1669032134939!6m8!1m7!1sCAoSLEFGMVFpcFBVQ2E4QWxJcnAwTno1eG5JY3hwSUo5WDlETk42TXNoZ2kwZEtq!2m2!1d-7.840744999999999!2d111.3058816!3f43.80022127466947!4f-19.444652955256004!5f0.7820865974627469', '2022-11-23 02:46:54', '2022-11-23 02:46:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkringans`
--

CREATE TABLE `angkringans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `angkringans`
--

INSERT INTO `angkringans` (`id`, `judul`, `deskripsi`, `gambar`, `location`, `jam`, `nomor_hp`, `maps`, `iframe`, `created_at`, `updated_at`) VALUES
(4, 'Angkringan Omah Lawas', 'Angkringan omah lawas terletak di Jl. Dr. Supomo, Mangkubumen, Banjarsari, Solo. Konsep yang ditawarkan dari wedangan ini cukup menarik, dengan sentuhan modern dan nyaman untuk kongkow bersama teman-teman. Kamu juga bisa menikmati setiap hidangan yang disajikan dengan cara lesehan. Tentu saja untuk harga dari setiap menu angkringan Solo yang satu ini pasti terjangkau. Tak heran, wedangan omah lawas menjadi salah satu destinasi wisata kuliner yang hits di kota Solo. Kamu bisa menikmati menu seperti nasi kucing, sate solo, jaddah, gorengan, dan juga minuman khas angkringan seperti jahe, susu jahe, dll. Harganya bervariasi mulai dari Rp. 4000 rupiah hingga 10.000,-', 'gambar-angkringan/Hfy1yErPaX2pBl0GCUne8nVJi0fhsFzjfkju0730.jpg', 'Turisari, Jl. Prof. DR. Supomo No.55, Mangkubumen', '18.00 – 23.00', '082225203826', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1169866923665!2d110.81241221744384!3d-7.562222099999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1684123280b5%3A0xeb9d1b40ee0fbd74!2sWedangan%20Omah%20Lawas!5e0!3m2!1sid!2sid!4v1669287219179!5m2!1sid!2sid', 'https://www.google.com/maps/embed?pb=!4v1669287240390!6m8!1m7!1sCAoSLEFGMVFpcFB5YnQ5V0hMTGg1VlRvczRQbTBxZUVzcjh3MlloN084U05HOGQt!2m2!1d-7.562453846686663!2d110.8147580176592!3f240!4f0!5f0.7820865974627469', '2022-12-11 21:20:31', '2022-12-11 21:27:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cafes`
--

CREATE TABLE `cafes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cafes`
--

INSERT INTO `cafes` (`id`, `judul`, `deskripsi`, `gambar`, `location`, `jam`, `nomor_hp`, `maps`, `iframe`, `created_at`, `updated_at`) VALUES
(3, 'NatahatiCafe', 'Natahati Kopi adalah area ngopi dengan sebutan lain coffee shop di Solo tepatnya Punggawan Kota Solo yang menyajikan nuansa coffee shop type urban industrial kekinian di Jalan Punggawan dekat Stasiun Solo Balapan yang selalu ramai. Natahati Kopi ini lengkap aneka menu kopi , thai tea dan cemilan sampai main course dengan citarasa lezat. Cafe ini menggabungkan coffee shop dan Eatery yang khas bersama dengan rencana fast casual dining dan umumnya memanjakan anda seluruh bersama dengan makanan berkwalitas bersama dengan suasana yang nyaman, tetapi bersama dengan harga yang tetap terjangkau.', 'gambar-cafe/IfViTBtqrsUMNtl4t2XbMvC3Kmmxl1JfgU6Culnt.jpg', 'Jl. Punggawan No.6, Punggawan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57132', '08.00 - 22.00', '081957470888', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15820.447770086865!2d110.80920006977539!3d-7.562772499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1700e6ef304b%3A0x3c126a0bc6778d6f!2sNatahati%20Coffee%20%26%20Eatery!5e0!3m2!1sid!2sid!4v1669216210200!5m2!1sid!2sid', 'https://www.google.com/maps/embed?pb=!4v1669216180540!6m8!1m7!1sob2mlySLdJSwOIXcctufPg!2m2!1d-7.562932627490125!2d110.8180150972335!3f342.94083!4f0!5f0.7820865974627469', '2022-11-23 08:14:21', '2022-11-23 08:14:21'),
(4, 'Cafe Tiga Tjeret', 'Cafe Tiga Tjeret ini merupakan kafe yang berkonsep dari angkringan. Penamaannya diambil dari identitas angkringan yang biasanya selalu ada tiga ceret diatas anglonya. Dengan menyuguhkan tampilan detail bangunan luar yang tampak menarik, terinspirasi dari dekorasi cafe urban dan tradisional. Bangunan Cafe Tiga Tjeret ini terdiri dari dua lantai, di lantai bawah terdapat beberapa tempat duduk terbuka beratap payung, ditambah ada lilin disetiap meja sehinnga terkesan romantis. Suasana indoor juga tak kalah menarik namun memang tak terlalu luas.', 'gambar-cafe/6oTCSEVDnad10g1ADl819N0cHtYm87G2hzsDeDFq.jpg', 'Jl. Ronggowarsito No.97, Keprabon, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57131', '11.00 – 00.30', '0271630078', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253123.9362348874!2d110.55922712499998!3d-7.568273999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a142867572b07%3A0x6e5240772b78e604!2sTiga%20Tjeret%20Cafe!5e0!3m2!1sid!2sid!4v1669284748098!5m2!1sid!2sid', 'https://www.google.com/maps/embed?pb=!4v1669284783086!6m8!1m7!1sCAoSLEFGMVFpcE4tUml4bDFyd0NNeWgwZXc0ZlFmU1lMWFFVZ0l1ZW0wbU5JTG5w!2m2!1d-7.568356199999999!2d110.8229253!3f100!4f10!5f0.7820865974627469', '2022-12-11 20:46:22', '2022-12-11 21:29:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edukasis`
--

CREATE TABLE `edukasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `edukasis`
--

INSERT INTO `edukasis` (`id`, `judul`, `deskripsi`, `sejarah`, `location`, `gambar`, `jam`, `nomor_hp`, `ig`, `twt`, `fb`, `maps`, `iframe`, `created_at`, `updated_at`) VALUES
(2, 'Kebun Teh Kemuning', 'Traveling ke dataran tinggi, paling umum dilakukan adalah berwisata ke perkebunan teh. Begitu pun ketika liburan ke Solo, kamu bisa mengunjungi Kebun Teh Kemuning yang terletak di Kabupaten Karanganyar. Di sini, pengunjung dapat melihat langsung proses pemetikan daun teh berkualitas, dan jika beruntung bisa membantu para pemetik teh.', 'Pabrik teh Kemuning awalnya didirikan oleh kakak beradik Van Mander Voot, warga Belanda, pada tahun 1925. Pabriknya bernama NV. Cultuur Mij Kemuning. Kantor pusat perusahaan ini berada di Laan Van Meerdervoort 2B Den Haag, Nederland. Kebun teh ini terus berkembang dan hingga kini masih banyak ditumbuhi hijaunya daun teh.', 'Jalan, Sumbersari, Kemuning, Ngargoyoso, Karanganyar Regency, Central Java 57794', 'gambar-edukasi/EWFXOR02HjEbcJHwfJ474x6nay0BO3wEqmGggAHA.jpg', '08.00-12.00', '081321651563', 'KemuningOficial', 'KemuningOficial', 'KemuningOficial', 'https://www.google.com/maps/embed?pb=!4v1669212808552!6m8!1m7!1sCAoSLEFGMVFpcE5CQ0dWcDRmMDlfYUpURW54bjNodEwyNWRKV0t2amlYSFBONlVG!2m2!1d-7.594917499999999!2d111.1342725!3f160!4f10!5f0.7820865974627469', 'https://www.google.com/maps/embed?pb=!4v1669032134939!6m8!1m7!1sCAoSLEFGMVFpcFBVQ2E4QWxJcnAwTno1eG5JY3hwSUo5WDlETk42TXNoZ2kwZEtq!2m2!1d-7.840744999999999!2d111.3058816!3f43.80022127466947!4f-19.444652955256004!5f0.7820865974627469', '2022-11-23 07:13:51', '2022-11-23 07:13:51'),
(3, 'Candi ceto', 'Sebelum menjadi Negara Kesatuan Republik Indonesia (NKRI), di wilayah Nusantara berdiri sejumlah kerajaan yang bukti-bukti kejayaannya masih bisa dilihat hingga saat ini. Bukti kejayaan kerajaan-kerajaan di masa lalu dapat dilihat dari situs-situs peninggalan, mulai dari prasasti hingga bangunan candi. Salah satu candi yang merupakan peninggalan kerajaan di masa lalu adalah Candi Cetho. Lokasi Candi Cetho berada di lereng Gunung Lawu, tepatnya di Dusun Ceto, Desa Gumeng, Kecamatan Jenawi, Kabupaten Karanganyar, Jawa Tengah. Saat ini, Candi Cetho termasuk cagar budaya yang ditetapkan sejak 26 Maret 2007. Candi ini juga menjadi destinasi wisata sejarah yang dibuka untuk umum.', 'Candi Cetho dibangun sekitar tahun 1452-1470 Masehi pada zaman Kerajaan Majapahit, tepatnya pada masa pemerintahan Prabu Brawijaya V. Cetho berasal dari bahasa Jawa yang artinya jelas. Maksudnya, dari lokasi candi ini seseorang bisa dengan jelas memandang ke seluruh penjuru lantaran berada di ketinggian 1.496 meter di atas permukaan laut. Kompleks Candi Cetho pertama kali ditemukan pada tahun 1842, oleh seorang warga negara Belanda bernama Van der Vlis. Sejak ditemukan itu, Candi Cetho menarik perhatian para peneliti dan ahli kepurbakalaan, seperti W.F. Sutterheim, K.C. Crucq, N.j. Krom, A.J. Bernet Kempers, dan Riboet Darmosoetopo.. Dari keterangan yang ditemukan di kompleks Candi Cetho, diketahui bahwa ini merupakan candi Hindu, untuk prosesi ruwatan.', 'Ceto, RT.01/RW.03, Cetho, Gumeng, Kec. Jenawi, Kabupaten Karanganyar, Jawa Tengah 57792', 'gambar-edukasi/PaUadEbSWyt08kEPgqbVBiOWrOgTUUJQLq8qVVxa.jpg', '08.00 – 16.30', '081239624421', 'CandiCetho', 'CandiCetho', 'CandiCetho', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.8094500382354!2d111.1579396!3d-7.595706799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e798b3395dba229%3A0x8325ca88971615ef!2sCandi%20Cetho!5e0!3m2!1sid!2sid!4v1669280081293!5m2!1sid!2sid', 'https://www.google.com/maps/embed?pb=!4v1669280055046!6m8!1m7!1sCAoSLEFGMVFpcE5HUFVJYzEzMy1RS1dpanh3czRjaEYwUzlGRG9FSVlGc3MwSlda!2m2!1d-7.595706799999999!2d111.1579396!3f1.5849325241320051!4f-6.264473183085343!5f0.7820865974627469', '2022-12-11 20:31:42', '2022-12-11 20:31:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_10_27_115439_create_alams_table', 1),
(4, '2022_10_30_103909_create_tamen_table', 1),
(5, '2022_11_01_052126_create_angkringans_table', 1),
(6, '2022_11_01_082945_create_cafes_table', 1),
(7, '2022_11_08_042631_create_edukasis_table', 1),
(8, '2022_11_13_003727_create_users_table', 1),
(9, '2023_02_08_090851_modify_password_on_users_table', 2),
(10, '2023_02_08_092345_add_alamat_to_users_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamen`
--

CREATE TABLE `tamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tamen`
--

INSERT INTO `tamen` (`id`, `judul`, `deskripsi`, `gambar`, `location`, `jam`, `nomor_hp`, `maps`, `iframe`, `created_at`, `updated_at`) VALUES
(2, 'Taman Balekambang', 'Taman Balekambang sudah lama menjadi jujugan warga yang ingin berekreasi bersama keluarga. Taman yang terletak di wilayah Kelurahan Manahan, Banjarsari, Solo, merupakan taman bersejarah peninggalan Mangkunagoro VII. Diresmikan pada 26 Oktober 1921 atau berusia lebih dari 100 tahun, Taman Balekambang saat ini tengah direvitalisasi besar-besaran yan diperkirakan berlangsung hingga akhir tahun depan.', 'gambar-taman/diUYewuxlEu2Y38l3okUtUdXhAPmp4BdYXY7t4uf.jpg', 'CRX4+2X2, Jl. Balekambang, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139', '07.00 – 17.00', '0271736227', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15820.824679409729!2d110.7909145!3d-7.5524842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1736886a85cd%3A0xbfb2956209b033ef!2sTaman%20Balekambang%20Surakarta!5e0!3m2!1sid!2sid!4v1669285949492!5m2!1sid!2sid', 'https://www.google.com/maps/embed?pb=!4v1669285972763!6m8!1m7!1sCAoSLEFGMVFpcE9UTzZ0RklPSEh1cUtHcDFfMmppazJYTm5BYVpuWkZ0Ulh2RTV0!2m2!1d-7.5529533!2d110.8077783!3f120!4f20!5f0.7820865974627469', '2022-11-29 20:26:51', '2022-12-11 21:12:00'),
(4, 'Taman Monjari', 'Taman Monumen 45 Banjarsari atau Monjari juga masuk daftar taman bersejarah di Kota Solo. Dikutip dari laman resmi Pemkot Solo, taman ini dibangun oleh Pemkot Solo pada 31 Oktober 1973 untuk menngenang perjuangan rakyat Solo dalam peristiwa Serangan Umum Empat Hari, 7-10 Agustus 1949. Kini Taman Monjari menjadi taman layak anak dan kerap dimanfaatkan oleh pelajar untuk aktivitas di luar kelas seperti olahraga, bermain, dan belajar bersama, atau sekadar bersantai bersama keluarga dan kerabat.&nbsp;', 'gambar-taman/3MBhGW9DV30s8bKVQAHEs22HEqk25zGsk8B6nBhr.jpg', 'CRQG+RHP, Setabelan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139', 'Buka 24 jam', 'Tidak ada', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506257.24060399574!2d110.82660287105!3d-7.5602898274926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a168c33aa2a01%3A0x3c93de4d15b801f9!2sMonumen%2045%20Banjarsari!5e0!3m2!1sid!2sid!4v1669286204177!5m2!1sid!2sid', 'https://www.google.com/maps/embed?pb=!4v1669286228786!6m8!1m7!1sCAoSLEFGMVFpcE5wT0lLZm1QVjFNYy1Ja1JuY3VGVmp0dl9jV0NnUi1xT3FtYnls!2m2!1d-7.5602898274926!2d110.82660287105!3f346.72025!4f17.10611!5f0.7820865974627469', '2022-12-11 21:17:48', '2022-12-11 21:17:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `is_admin`, `password`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Rama', 'mramadhaniyanto@gmail.com', 1, '$2y$10$R.DxnWLsaghmqYK4r0vOkOtTpOnNbD8vrx0jDbU102buXJvGTul6i', '', '2022-11-12 17:39:47', '2022-11-12 17:39:47'),
(2, 'Habib Ismail', 'habib@gmail.com', 0, '$2y$10$UkqryZ/mNaKjGAgKE0JovOB9pCA5n73hALN2lbBI0sDanq/m9u4oK', 'Bandung', '2022-11-14 07:13:01', '2022-11-14 07:13:01'),
(3, 'ramadhan123', 'Rama191101@outlook.co.id', 0, '$2y$10$bFIbm4MDLxUG3nMSwNTn4e1bbNfqkqJQX4fR/56itGLM.sBwhJmYW', '', '2022-11-16 07:04:44', '2022-11-16 07:04:44'),
(4, 'rama', 'Rama@gmail.com', 0, '$2y$10$f4wK3pesvXVt2/pC50jEy.UuGbA7poI2l86UhqnqpUxHDCn9bgJq6', 'jakarta', '2023-02-08 02:36:47', '2023-02-08 02:36:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alams`
--
ALTER TABLE `alams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `angkringans`
--
ALTER TABLE `angkringans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cafes`
--
ALTER TABLE `cafes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `edukasis`
--
ALTER TABLE `edukasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tamen`
--
ALTER TABLE `tamen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alams`
--
ALTER TABLE `alams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `angkringans`
--
ALTER TABLE `angkringans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `cafes`
--
ALTER TABLE `cafes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `edukasis`
--
ALTER TABLE `edukasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tamen`
--
ALTER TABLE `tamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
