-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 02:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-asa`
--

-- --------------------------------------------------------

--
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` int(11) NOT NULL,
  `judul_acara` varchar(100) DEFAULT NULL,
  `foto_acara` varchar(200) DEFAULT NULL,
  `isi_acara` text DEFAULT NULL,
  `slug_acara` text DEFAULT NULL,
  `tgl_acara` date DEFAULT NULL,
  `mulai_acara` time DEFAULT NULL,
  `selesai_acara` time DEFAULT NULL,
  `tempat_acara` varchar(200) DEFAULT NULL,
  `tglinput_acara` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `judul_acara`, `foto_acara`, `isi_acara`, `slug_acara`, `tgl_acara`, `mulai_acara`, `selesai_acara`, `tempat_acara`, `tglinput_acara`) VALUES
(1, 'Santunan Anak Yatim Ke 12', 'file/acara/1601083150_fc707c4ec72636a79be6.jpg', '<p>Akan diadakan santunan anak yatim yang ke 12 di sekolah kami. Bagi anda yang memiliki saudara anak yatim mohon segera untuk mendaftarkan diri sebagai peserta santunan. Info bisa hubungi 081330707048</p>\r\n', 'santunan-anak-yatim-ke-12.html', '2020-10-01', '08:00:00', '13:30:00', 'Sekolah SMKN 77 Nganjuk', '2020-09-25 08:03:49'),
(2, 'Pemilihan Ketua OSIS Tahun 2020-2021', 'file/acara/1601083129_bd762f3aa84d1458b092.jpg', '<p>Besok akan ada acara pemilihan Ketua Osis yang akan dilaksanakan dengan cara pemungutan suara untuk semua siswa dan guru yang ada. Jangan sampe tidak memilih ya</p>\r\n', 'pemilihan-ketua-osis-tahun-2020-2021.html', '2020-09-26', '09:00:00', '12:00:00', 'Ruangan Osis', '2020-09-25 08:10:49'),
(3, 'Lomba Coding Batch 3 Dibuka', 'file/acara/1601083084_92ecae32acd6b75bf82d.jpg', '<p>Ayo segera daftarkan diri anda khususnya jurusan RPL untuk megikuti lomba Coding Batch 3. Lomba akan diselenggarakan dengan sistem 2 babak yaitu babak penyisihan dan babak final. Hub 0813330707048</p>\r\n', 'lomba-coding-batch-3-dibuka.html', '2020-09-26', '07:00:00', '16:00:00', 'Ruang Praktek Jurusan RPL', '2020-09-25 08:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id_app` int(11) NOT NULL,
  `nama_app` varchar(100) DEFAULT NULL,
  `deskripsi_app` varchar(200) DEFAULT NULL,
  `icon_app` varchar(100) DEFAULT NULL,
  `logo_app` varchar(100) DEFAULT NULL,
  `widthlogo_app` int(11) DEFAULT NULL,
  `heightlogo_app` int(11) DEFAULT NULL,
  `nohp_app` varchar(20) DEFAULT NULL,
  `email_app` varchar(100) DEFAULT NULL,
  `alamat_app` varchar(200) DEFAULT NULL,
  `atasnamaemail_app` varchar(100) DEFAULT NULL,
  `alamatemail_app` varchar(100) DEFAULT NULL,
  `protocol_app` varchar(20) DEFAULT NULL,
  `smtphost_app` varchar(100) DEFAULT NULL,
  `smtpuser_app` varchar(100) DEFAULT NULL,
  `smtppass_app` varchar(100) DEFAULT NULL,
  `smtpport_app` varchar(20) DEFAULT NULL,
  `fb_app` text DEFAULT NULL,
  `ig_app` text DEFAULT NULL,
  `yt_app` text DEFAULT NULL,
  `tw_app` text DEFAULT NULL,
  `gmap_app` text DEFAULT NULL,
  `staff_app` int(11) NOT NULL,
  `siswa_app` int(11) NOT NULL,
  `juara_app` int(11) NOT NULL,
  `kelas_app` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplikasi`
--

INSERT INTO `aplikasi` (`id_app`, `nama_app`, `deskripsi_app`, `icon_app`, `logo_app`, `widthlogo_app`, `heightlogo_app`, `nohp_app`, `email_app`, `alamat_app`, `atasnamaemail_app`, `alamatemail_app`, `protocol_app`, `smtphost_app`, `smtpuser_app`, `smtppass_app`, `smtpport_app`, `fb_app`, `ig_app`, `yt_app`, `tw_app`, `gmap_app`, `staff_app`, `siswa_app`, `juara_app`, `kelas_app`) VALUES
(1, 'SMP ISLAM AMANAH BANGSA', 'Sekolah Menengah Pertama yang mengedepankan ', 'file/logo/1621591550_b677bbf1eb4ef44de982.png', 'file/logo/1621591592_c234719acaeee3e5b243.png', 130, 30, '082124518328', 'sekolahislamasa@gmail.com', 'Jl. Pramuka Km. 0,5 Sepanjang Jaya Rawalumbu 17114 (SD & SMP)', 'Admin PPDB', 'psb@sekolahislamasa.com', 'smtp', 'grimlock.hosterserver.com', 'psb@smpn1tambakdahan.com', 'b3Bf_%+Sw;MF', '465', 'https://facebook.com/', 'https://instagram.com/', 'https://youtube.com/', 'https://twitter.com/', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.948095217391!2d106.99877861433102!3d-6.2705565631299125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ddc3ca05107%3A0xc63ffd5a0b754e34!2sSD%20%26%20SMP%20Islam%20ASA%20-%20Amanah%20Bangsa!5e0!3m2!1sen!2sid!4v1621590918021!5m2!1sen!2sid', 46, 1053, 35, 20);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori_artikel` int(11) DEFAULT NULL,
  `judul_artikel` varchar(100) DEFAULT NULL,
  `foto_artikel` varchar(200) DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  `slug_artikel` text DEFAULT NULL,
  `dilihat_artikel` int(11) NOT NULL,
  `tag_artikel` text DEFAULT NULL,
  `spam_artikel` int(11) NOT NULL COMMENT '0=Ya,1=Tidak',
  `tglinput_artikel` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori_artikel`, `judul_artikel`, `foto_artikel`, `isi_artikel`, `slug_artikel`, `dilihat_artikel`, `tag_artikel`, `spam_artikel`, `tglinput_artikel`) VALUES
(1, 5, 'Si Cantik yang Tersembunyi di Selatan Pulau Jawa', 'file/artikel/1601080670_799b9c733eb2c324c8ee.jpg', '<p>Jawa Timur, seberapa jauh Anda mengeksplorasi daerah ini? Sudahkah merasakan pantainya? Belum lengkap kalau ke Jawa Timur tanpa ke pantai. Demikian cara&nbsp;Sudiyanti Masdi&nbsp;memulai tulisan perjalanannya ke Pantai Serang. Kompasianer yang baru bergabung di Kompasiana Oktober 2014 ini berhasil menggaet pembaca terbanyak di rubrik wisata dengan kisah perjalanannya ke wilayah selatan Malang, berjarak kurang lebih 45 KM arah barat daya dari Kota Blitar.</p>\r\n\r\n<p>Cerita perjalanannya menelusuri pantai dengan keindahan alam yang menakjubkan diposting memeriahkan lomba&nbsp;blog&nbsp;di Kompasianival 2014. Cerita keindahan alam Indonesia yang dilengkapi dengan foto-foto yang memancing keinginan untuk menjelajah destinasi tersebut.</p>\r\n', 'si-cantik-yang-tersembunyi-di-selatan-pulau-jawa.html', 7, 'harian,info,viral', 0, '2020-09-13 08:26:28'),
(2, 5, 'Pengalaman Mendaki Gunung Papandayan', 'file/artikel/1599965377_5f5d88c1b9e77.jpg', '<p>Catatan perjalanan mendaki Gunung Papandayan, di Kabupaten Garut Jawa Barat ini menarik perhatian pembaca sepanjang tahun. Bagaimana tidak, paparan yang sangat rinci dapat menjadi referensi pendakian terutama bagi pemula. Informasi yang disampaikan edukatif dan bermanfaat. Inilah daya tarik tulisan yang berhasil masuk 14 besar sepanjang tahun. Tak hanya itu, penulis,&nbsp;<a href=\"http://www.kompasiana.com/arieanam\" target=\"_blank\">Ari Anam</a>, memanjakan pembaca dengan foto-foto perjalanan yang luar biasa.</p>\r\n', 'pengalaman-mendaki-gunung-papandayan.html', 7, 'traveling,pemandangan', 0, '2020-09-13 08:31:11'),
(3, 1, 'Kebun Raya Mangrove Gunung Anyar Wisata Alam Baru', 'file/artikel/1599965494_5f5d8936025a8.jpg', '<p>Kawasan Kebun Raya Mangrove Gunung Anyar ini terbagi menjadi dua bagian, yaitu sisi kiri dan kanan. Pada sisi kiri adalah bagian sungai dan bagian kanan adalah daerah tempat fasilitas yang bisa digunakan.<br />\r\nTerdapat jogging track sepanjang 20 meter yang terbuat dari bambu dan disusun memanjang melintasi kawasan pohon bakau. Disepanjang jalur jogging ini juga telah dilengkapi tempat foto bagi pengunjung. Tempat foto ini berupa lingkaran bambu yang bisa digunakan untuk beristirahat. Selain itu mushola dan kantor DKPP juga terbuat dari bambu.<br />\r\nDi tempat ini&nbsp;juga ada gazebo yang terletak di tengah kawasan mangrove. Gazebo ini cukup unik karena terbuat dari bambu. Ukurannya sekitar 5x5 meter sehingga cukup nyaman digunakan untuk beristirahat. Pengunjung juga dapat menikmati berbagai acara yang akan disuguhkan serta juga dapat menggelar acara dengan mengantongi izin terlebih dulu</p>\r\n\r\n<p>Pada ujung timur Kebun Raya mangrove di&nbsp;Surabaya&nbsp;ini terdapat menara pandang setinggi 12 meter yang bisa digunakan unuk melihat kawasan mangrove dari ketinggian. Namun, menara ini hanya bisa dinaiki maksimal lima orang.</p>\r\n', 'kebun-raya-mangrove-gunung-anyar-wisata-alam-baru.html', 8, 'travel', 0, '2020-09-13 09:51:34'),
(7, 8, 'Pandemi Masih Ada Sekolah Diliburkan 2 Minggu', 'file/artikel/1601016667_83b96a940f4707b933a3.jpg', '<p>Kembali pandemi masih terus ada. Maka kami imbau kepada semua siswa untuk libur selama 2 minggu.<br />\r\nSemoga pandemi ini lekas selesai dan sekolahan kembali normal. Kita semua sangat merindukan sekolah berkumpul bersama,bermain bersama.</p>\r\n', 'pandemi-masih-ada-sekolah-diliburkan-2-minggu.html', 7, 'sekolah,pengumuman', 0, '2020-09-25 13:51:07'),
(8, 6, 'Akademisi IPB Riset Batang Nyirih Untuk Kecantikan dan Awet Muda', 'file/artikel/1601293202_5f5e88aaa38269c6974e.jpg', '<p>Sejak zaman dulu, masyarakat telah memanfaatkan tanaman tradisional untuk pengobatan. Bahkan dari tanaman itu juga bisa dijadikan sebagai perawatan kulit. Untuk itulah Peneliti IPB University dari Departemen Kimia, Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA) Prof. Dr. Irmanida Batubara berhasil membuat formula anti jerawat dan anti penuaan dini dari tanaman alami. Bahannya ialah dari batang ranting nyirih. Adapun riset hasil kerjasama dengan PT Martina Berto Tbk ini mencari potensi bahan aktif dari batang ranting nyirih untuk kecantikan.</p>\r\n\r\n<p>Dikatakan, ide awal riset ini adanya penggunaan kulit buah nyirih secara tradisional oleh masyarakat di Sulawesi. Masyarakat di Sulawesi Tengah (Desa Ampana, Kepulauan Togean, Tojo Una-Una) telah menggunakan kulit buah nyirih untuk perawatan kulit sehari-hari atau persiapan calon pengantin wanita. Selain itu, masyarakat di daerah Sulawesi Selatan (Luwu) juga memanfaatkan bijinya untuk dimanfaatkan sebagai anti jerawat.</p>\r\n\r\n<p>Ternyata, penelitian awal terhadap tanaman nyirih dilakukan pada 2009. Data hasil skrining pada 2009 itu menyatakan bahwa batang ranting nyirih merupakan sumber antioksidan yang baik. Dari hasil tersebut, penelitian terhadap ranting nyirih dilanjutkan untuk mengetahui manfaatnya lebih dalam sebagai bahan baku untuk produk kosmetik. Untuk kandungan dari batang ranting nyirih, Prof Irma baru mendapatkan informasi adanya kandungan xylocenssin K yang memiliki aktivitas antioksidan dan antiaging melalui mekanisme H2O2 scavenger pada sel khamir. &quot;Hasil uji penelitian secara in vivo terhadap 30 responden menunjukkan adanya peningkatan kelembaban kulit sebesar 30 persen,&quot; ujarnya seperti dikutip dari laman IPB University, Selasa (22/9/2020).</p>\r\n', 'akademisi-ipb-riset-batang-nyirih-untuk-kecantikan-dan-awet-muda.html', 0, 'ekonomi,tanaman', 0, '2020-09-28 18:40:02'),
(9, 8, 'Wacana Masuknya Sekolah dan PPDB', 'file/artikel/1601680348_cb1415182a46b3032caa.jpeg', '<p>Saat ini, wacana akan dilaksanakan kembalinya sekolah pada Juli 2020 tengah menjadi sorotan publik. Memang kalau mengikuti jadwal yang ada, tahun ajaran baru sekolah semester gasal 2020/2021 semestinya dimulai pada 13 Juli 2020. Persoalannya adalah sampai saat ini situasinya tampak belum terlalu kondusif. Para siswa masih belajar di rumah. Masih ditambah lagi, situasi sekarang ini banyak para orangtua lebih berfokus menghadapi dampak pandemi Covid-19, terutama di bidang ekonomi.<br />\r\nNamun, rupanya pandemi Covid-19 tidak membuat Kementerian Pendidikan dan Kebudayaan (Kemendikbud) berniat mengubah jadwal kalender akademik pendidikan tahun ajaran baru 2020/2021 tetap dibuka pada pertengahan Juli dengan tetap memperhatikan protokol kesehatan. Pengumuman Penerimaan Peserta Didik Baru (PPDB) saat inipun telah dimulai. Hal tersebut diatur dalam Peraturan Menteri Pendidikan dan Kebudayaan (Permendikbud) nomor 44 Tahun 2019 dan SE Mendikbud No 4 Tahun 2020, (sindonews.com, 19/5).<br />\r\nSedangkan, aturan sistem zonasi PPDB tercantum pada Permendikbud No. 14 Tahun 2018. Harapannya, sekolah favorit dan non-favorit tidak memiliki sekat. Tahun 2020, kuota yang diberikan untuk jalur zonasi PPDB minimal 50 persen di setiap sekolah. Berbeda pada tahun 2019, kuota siswa untuk jalur zonasi saat itu sebesar 80 persen dari 100 persen. Itu artinya, di tahun 2020 ini, kuota jalur zonasi berkurang menjadi 50 persen setiap sekolah.<br />\r\nOkelah saat ini, mekanisme aturan PPDB 2020 bisa kita terima dan pahami. Persoalannya adalah saat ini banyak para orang tua pada bingung memikirkan masalah perekonomian. Maka sekiranya bisa kita terima kenyataan bahwa kemampuan pendanaan untuk menyekolahkan anak-anak otomatis tidak serta merta para orang tua bisa langsung memiliki kemampuan dana untuk mengikuti jadwal tahun ajaran baru sekolah semester gasal 2020/2021.</p>\r\n\r\n<p>Masyud<br />\r\nPengajar FKIP Universitas Muhammadiyah Malang</p>\r\n', 'wacana-masuknya-sekolah-dan-ppdb.html', 3, 'sekolah,pandemi', 0, '2020-10-03 06:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `ket_galeri` text DEFAULT NULL,
  `foto_galeri` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `ket_galeri`, `foto_galeri`) VALUES
(1, '', 'file/galeri/1601168730_f749a2bbcc88f6acaebe.jpg'),
(2, '', 'file/galeri/1601168747_ba69cd413b922b3ce746.jpg'),
(3, '', 'file/galeri/1601168752_f0545b46b5b6ef792d56.jpg'),
(4, '', 'file/galeri/1601168788_5f31804a23d8970fd7c7.jpg'),
(5, '', 'file/galeri/1601168796_20adbdf9d9269ba98811.jpg'),
(6, '', 'file/galeri/1601168801_ebc7de59d71e230fe901.jpg'),
(7, '', 'file/galeri/1601168805_be915d517e4feecec00a.jpg'),
(8, '', 'file/galeri/1601168811_7f657c3acfeb18c8298e.jpg'),
(9, '', 'file/galeri/1601168816_ef0aea8070c305806862.jpg'),
(10, '', 'file/galeri/1601168821_5ce0e4108b53368eacd9.jpg'),
(11, '', 'file/galeri/1601168825_706e94a2b7077169ee27.jpg'),
(12, '', 'file/galeri/1601168832_3c49bbe90191baaf2ff3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id_halaman` int(11) NOT NULL,
  `judul_halaman` varchar(200) DEFAULT NULL,
  `isi_halaman` text DEFAULT NULL,
  `slug_halaman` varchar(250) DEFAULT NULL,
  `tglinput_halaman` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id_halaman`, `judul_halaman`, `isi_halaman`, `slug_halaman`, `tglinput_halaman`) VALUES
(1, 'Sambutan Kepsek', '<p>Assalamua&#39;aikum Wr Wb</p>\r\n\r\n<p>Puji syukur kehadirat Allah SWT atas rohmatnya SMK Negeri 77 Nganjuk, semoga dengan adanya SMK Negeri 77 Nganjuk menjawab tantangan yang terjadi di kalangan menengah kebawah, yaitu pendidikan yang terjangkau dan kualitas yang tidak kalah tentunya.</p>\r\n\r\n<p>Sesuai dengan letak gografis SMK Negeri 77 Nganjuk, Kami mempersiapkan diri ditengah perkembangan teknologi dengan segala keterbatan, tapi kami tetap menunjukkan prestasi-prestasi kami dibindang Ternik baik dari tingkat Kecamtan,Kabupaten dan Provinsi. mulai dari mengikuti Lomba Farmasi, Lomba LKS hingga tingkat Nasional.</p>\r\n\r\n<p>Semoga dengan kehadiran Website SMK Negeri 77 Nganjuk, sebagai salah satu kontribusi Kami untuk pendidikan anak bangsa yang telah memasuki fase pembelajaran secara Online.</p>\r\n\r\n<p><strong>Kepala Sekolah SMK Negeri 77 Nganjuk</strong></p>\r\n', 'sambutan-kepsek.html', '2020-08-23 11:49:38'),
(4, 'Visi Misi', '<p><strong>VISI SEKOLAH/MADRASAH</strong></p>\r\n\r\n<ul>\r\n	<li>Mewujudkan generasi penerus bangsa yang sehat, cerdas, kreatif,mandiri, disiplin, dan bertaqwa kepada Tuhan Yang Maha Esa.</li>\r\n	<li>Menjadi pusat pendidikan tenaga kesehatan yang berkualitas&nbsp;&nbsp;serta berdaya saing global.</li>\r\n</ul>\r\n\r\n<p><strong>MISI SEKOLAH/MADRASAH</strong></p>\r\n\r\n<ul>\r\n	<li>Mengembangkan potensi siswa secara optimal, menanamkan&nbsp;kebiasaan hidup yang bersih dan sehat, menciptakan siswa siswi&nbsp;supaya bisa mandiri, menumbuhkan rasa percaya diri untuk berkarya&nbsp;dan disiplin tinggi.</li>\r\n	<li>Menumbuhkan rasa saling menghormati antara&nbsp;orang tua guru dan orang lain, melatih siswa siswi untuk bisa&nbsp;bersosialisasi dengan masyarakat luas.</li>\r\n</ul>\r\n', 'visi-misi.html', '2020-09-13 06:37:42'),
(5, 'Syarat PPDB', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'syarat-ppdb.html', '2020-09-21 06:47:52'),
(7, 'Apa Itu Jurusan RPL & Apa Saja Keunggulan Jurusan RPL', '<p><strong>SEVIMA.COM &ndash;</strong>&nbsp;Siapa yang merasa kurang paham dan sering bertanya apa itu RPL? Ada yang mengira jurusan ini sama dengan TKJ padahal sudah jelas jurusan ini beda dengan TKJ. Lalu apa itu jurusan RPL, apa keunggulan jurusan RPL, apa saja yang dipelajari di jurusan RPL, dan nanti jurusan RPL kerja apa?. Yuk kita bahas lebih detail.</p>\r\n\r\n<p><strong>Apa Itu Jurusan RPL?</strong></p>\r\n\r\n<p>RPL adalah singkatan dari Rekayasa Perangkat Lunak dan merupakan sebuah jurusan yang ada di Sekolah Menengah Kejuruan (SMK). RPL adalah sebuah jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>\r\n\r\n<p>Bukan hanya itu, RPL juga berkaitan dengan software komputer mulai dari pembuatan website, aplikasi, game dan semua yang berkaitan dengan pemrograman dengan menguasai bahasa pemrograman tersebut. Intinya RPL tidak akan jauh-jauh dari tiga hal yaitu Coding, Desain dan Algoritma yang akan menjadi kunci keberhasilan rekayasa perangkat lunak tersebut.</p>\r\n\r\n<p><strong>Keunggulan Jurusan RPL</strong></p>\r\n\r\n<p>1. Mampu bekerja di berbagai bidang karena sudah dibekali dengan berbagai ilmu dan pengetahuan.</p>\r\n\r\n<p>2. Dalam melakukan kerja lapangan akan lebih mudah karena saat pembelajaran sudah sering melakukan kerja praktek.</p>\r\n\r\n<p>3. Pekerjaan nya yang relatif mudah dan santai, dapat dikerjakan dimanapun dan kapanpun menggunakan koneksi tentunya.</p>\r\n', 'apa-itu-jurusan-rpl-&-apa-saja-keunggulan-jurusan-rpl.html', '2020-10-03 06:24:46'),
(8, 'Mengenal Jurusan TKJ Teknik Komputer Jaringan', '<p>TKJ Adalah singkatan dari Teknik Komputer Jaringan. TKJ merupakan sebuah kejuruan yang mempelajari tentang cara merakit komputer, mengenal dan mempelajari komponen hardware apa saja yang ada di dalam komputer, merakit komputer serta fokus mempelajari jaringan dasar. Tidak hanya itu selama tiga tahun belajar di TKJ anda akan belajar sistem kerja jaringan dan pemograman web serta meng-administrasi komputer jaringan. Kejuruan TKJ hanya ada di STM/SMK,&nbsp;sampai saat ini jurusan TKJ merupakan jurusan yang sangat populer dan banyak diminati selain RPL dan juga jurusan Multimedia.<br />\r\n<br />\r\nJika anda memilih jurusan TKJ maka anda akan belajar Mikrotik, Cisco, Linux dan prangkat jaringan lainnya. Membangun jaringan pada macam-macam topologi, setting ip dasar hingga memecahkan masalah pada jaringan yang error. Merakit komputer hanya bagian dasar saja, setelah itu anda akan mempelajari cara instalasi Sistem Operasi Microsft Windows dan Linux.</p>\r\n\r\n<p>Peluang kerja jurusan TKJ memang sangat banyak, karna banyak perusahaan yang mencari dan ingin menampung karyawan - karyawan yang memiliki kelebihan di bidang teknologi seperti jurusan TKJ, kemampuan yang dicari yaitu seseorang yang mengerti komputer dan jaringan. Banyak siswa TKJ yang serius belajar hingga ilmunya dapat digunakan dalam dunia kerja, hingga siswi smk jurusan tkj banyak yang langsung terjun kedunia kerja tanpa melanjutkan jenjang selanjutnya yaitu kuliah. Beberapa teman saya setelah lulus langsung diminta oleh perusahaan sebagai Network Administrator.</p>\r\n', 'mengenal-jurusan-tkj-teknik-komputer-jaringan.html', '2020-10-03 06:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `slug_kategori` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `slug_kategori`) VALUES
(1, 'Traveling', 'traveling.html'),
(5, 'Jurnal Harian', 'jurnal-harian.html'),
(6, 'Ekonomi Bisnis', 'ekonomi-bisnis.html'),
(8, 'Berita Sekolah', 'berita-sekolah.html');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `foto_kelas` varchar(200) DEFAULT NULL,
  `link_kelas` text DEFAULT NULL,
  `siswa_kelas` int(11) DEFAULT NULL,
  `wali_kelas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `foto_kelas`, `link_kelas`, `siswa_kelas`, `wali_kelas`) VALUES
(6, 'Kelas VII', 'file/kelas/1621595644_e8f6d1c05d7213231318.jpg', '#', 20, 'asdsdadsads');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `parent_menu` int(11) NOT NULL COMMENT '1=yes,0=no',
  `parentid_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) DEFAULT NULL,
  `url_menu` text DEFAULT NULL,
  `target_menu` varchar(10) DEFAULT NULL,
  `urutan_menu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `parent_menu`, `parentid_menu`, `nama_menu`, `url_menu`, `target_menu`, `urutan_menu`) VALUES
(1, 1, 0, 'Home', 'http://localhost:8080/', '_self', 1),
(15, 1, 0, 'Artikel', 'http://localhost:8080/artikel', '_self', 3),
(16, 1, 0, 'Tentang Kami', '#', '_self', 4),
(17, 0, 16, 'Visi Misi', 'http://localhost:8080/page/visi-misi.html', '_self', 1),
(18, 0, 16, 'Sambutan Kepsek', 'http://localhost:8080/page/sambutan-kepsek.html', '_self', 2),
(19, 1, 0, 'Kontak', 'http://localhost:8080/kontak', '_self', 6),
(23, 1, 0, 'Galeri', '#', '_self', 5),
(24, 0, 23, 'Galeri Foto', 'http://localhost:8080/foto', '_self', 1),
(25, 0, 23, 'Galeri Video', 'http://localhost:8080/video', '_self', 2),
(26, 1, 0, 'Acara', 'http://localhost:8080/acara', '_self', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ourservice`
--

CREATE TABLE `ourservice` (
  `id_ourservice` int(11) NOT NULL,
  `judul_ourservice` varchar(100) DEFAULT NULL,
  `isi_ourservice` varchar(300) DEFAULT NULL,
  `link_ourservice` varchar(200) DEFAULT NULL,
  `foto_ourservice` varchar(200) DEFAULT NULL,
  `urutan_ourservice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourservice`
--

INSERT INTO `ourservice` (`id_ourservice`, `judul_ourservice`, `isi_ourservice`, `link_ourservice`, `foto_ourservice`, `urutan_ourservice`) VALUES
(1, 'Sistem Smart School', 'Sekolah kami sudah menggunakan sistem yang terbaru yaitu Smart School. Jadi siswa akan lebih kreatif dan aktif dalam proses pembelajaran.', '#', 'file/ourservice/1600990106_a8ebb3391220565cc20d.png', 1),
(5, 'Terakreditasi A', 'Sekolah kami sudah Terakreditasi A memiliki kualitas pembelajaran yang terbaik dan siap bersaing dalam dunia industri modern.', '#', 'file/ourservice/1600990144_c898e4fce25683c2f91c.png', 2),
(6, 'Bebas Biaya SPP', 'Sekolah kami berkomitmen menciptakan pendidikan Gratis untuk semua siswa  dengan membebaskan biaya SPP dan Uang Gedung.', '#', 'file/ourservice/1600990159_ce47a03644fb592678c7.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `email_pengguna` varchar(100) DEFAULT NULL,
  `username_pengguna` varchar(100) DEFAULT NULL,
  `password_pengguna` varchar(100) DEFAULT NULL,
  `p_pengguna` varchar(100) DEFAULT NULL,
  `loginip_pengguna` varchar(20) DEFAULT NULL,
  `loginat_pengguna` datetime DEFAULT NULL,
  `foto_pengguna` varchar(200) DEFAULT NULL,
  `tglinput_pengguna` datetime DEFAULT NULL,
  `role_pengguna` int(1) DEFAULT NULL COMMENT '1=ADMIN,2=OPERATOR'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `email_pengguna`, `username_pengguna`, `password_pengguna`, `p_pengguna`, `loginip_pengguna`, `loginat_pengguna`, `foto_pengguna`, `tglinput_pengguna`, `role_pengguna`) VALUES
(1, 'Admin PPDB', 'admin.smkn1@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '::1', '2021-06-20 14:43:42', 'file/avatar/1600910425_c1b67553f9d7d3963b6e.jpg', '2020-04-30 08:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `ip_pengunjung` varchar(100) DEFAULT NULL,
  `tglinput_pengunjung` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `ip_pengunjung`, `tglinput_pengunjung`) VALUES
(1, '127.0.0.1', '2020-09-14 07:42:53'),
(2, '127.0.0.1', '2020-09-15 07:59:00'),
(3, '127.0.0.2', '2020-09-15 07:59:00'),
(4, '127.0.0.1', '2020-09-19 06:01:51'),
(5, '::1', '2020-09-20 19:02:57'),
(6, '::1', '2020-09-21 07:03:59'),
(7, '::1', '2020-09-22 07:30:24'),
(8, '::1', '2020-09-23 06:36:06'),
(9, '::1', '2020-09-24 07:50:12'),
(10, '::1', '2020-09-25 06:34:00'),
(11, '::1', '2020-09-26 06:39:24'),
(12, '::1', '2020-09-27 07:21:47'),
(13, '::1', '2020-09-28 18:26:13'),
(14, '::1', '2020-09-29 10:46:47'),
(15, '::1', '2020-09-30 07:04:55'),
(16, '::1', '2020-10-01 05:53:48'),
(17, '::1', '2020-10-02 05:36:35'),
(18, '::1', '2020-10-03 05:54:00'),
(19, '120.188.39.196', '2020-10-13 18:51:47'),
(20, '54.221.27.173', '2020-10-13 19:40:42'),
(21, '::1', '2021-05-21 15:07:09'),
(22, '::1', '2021-05-23 01:08:02'),
(23, '::1', '2021-05-24 21:24:11'),
(24, '::1', '2021-06-16 20:32:00'),
(25, '::1', '2021-06-20 14:43:30'),
(26, '::1', '2021-06-21 09:19:28'),
(27, '::1', '2021-06-22 13:04:25'),
(28, '::1', '2021-06-24 06:51:51'),
(29, '::1', '2021-06-29 07:31:10'),
(30, '::1', '2021-07-04 13:13:39'),
(31, '::1', '2021-07-05 19:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_tahun_siswa` int(11) DEFAULT NULL,
  `id_kelas_siswa` int(11) DEFAULT NULL,
  `nodaftar_siswa` varchar(100) DEFAULT NULL,
  `token_siswa` varchar(100) DEFAULT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `nik_siswa` varchar(50) DEFAULT NULL,
  `nisn_siswa` varchar(20) DEFAULT NULL,
  `templahir_siswa` varchar(100) DEFAULT NULL,
  `tgllahir_siswa` date DEFAULT NULL,
  `asalsekolah_siswa` varchar(100) DEFAULT NULL,
  `alamatasal_siswa` varchar(200) DEFAULT NULL,
  `jk_siswa` varchar(2) DEFAULT NULL,
  `alamat_siswa` varchar(200) DEFAULT NULL,
  `email_siswa` varchar(100) DEFAULT NULL,
  `nohp_siswa` varchar(20) DEFAULT NULL,
  `nama_ayah_siswa` varchar(100) DEFAULT NULL,
  `nama_ibu_siswa` varchar(100) DEFAULT NULL,
  `username_siswa` varchar(100) DEFAULT NULL,
  `password_siswa` varchar(100) DEFAULT NULL,
  `p_siswa` varchar(100) DEFAULT NULL,
  `wa_siswa` varchar(20) DEFAULT NULL,
  `info_siswa` varchar(200) DEFAULT NULL,
  `status_siswa` varchar(20) DEFAULT NULL,
  `tglinput_siswa` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_tahun_siswa`, `id_kelas_siswa`, `nodaftar_siswa`, `token_siswa`, `nama_siswa`, `nik_siswa`, `nisn_siswa`, `templahir_siswa`, `tgllahir_siswa`, `asalsekolah_siswa`, `alamatasal_siswa`, `jk_siswa`, `alamat_siswa`, `email_siswa`, `nohp_siswa`, `nama_ayah_siswa`, `nama_ibu_siswa`, `username_siswa`, `password_siswa`, `p_siswa`, `wa_siswa`, `info_siswa`, `status_siswa`, `tglinput_siswa`) VALUES
(1, 1, 1, 'SIS00001', 'A9vSoZz57qtb0Ma7Pq6zSnXCXjp0gm', 'Rino Oktavianto', '351810124004003', '9980802501', 'Kertosono', '2004-10-25', 'SMPN 1 BARON', 'Baron', 'L', 'Baron Nganjuk', 'rinookta1427@gmail.com', '081330707048', 'Hamdani', 'Sakira', 'rino', '827ccb0eea8a706c4c34a16891f84e7b', '12345', '6281330707048', 'Facebook', 'KONFIRMASI', '2020-09-30 08:14:16'),
(2, 1, 3, 'SIS00002', 'l4omm0CvQ47XkSDUKSALuSoJVlxtmX', 'Rahul Ali', NULL, NULL, NULL, NULL, 'SMP', NULL, NULL, 'Baron', 'rahulali14@gmail.com', '081515151', NULL, NULL, 'rahulali14@gmail.com', 'a662effbc9c9755d86132f0708cc9253', '803477', NULL, NULL, 'PENDING', '2020-10-01 05:55:05'),
(3, 1, 2, 'SIS00003', 'qHou8dZ92d6sL0Uwj13gMsu4z8Gevc', 'Subhan Asyari', NULL, NULL, NULL, NULL, 'Mts Negeri', NULL, NULL, 'Kertosono', 'subhan67@gmail.com', '085353523', NULL, NULL, 'subhan67@gmail.com', '161d98d10b5cb729cf034ebbd60341a6', '015472', NULL, NULL, 'PENDING', '2020-10-01 05:56:34'),
(4, 1, 1, 'SIS00004', 'CZ3FH1vwJQVWZ49tesAGCr9Yvqx1Gw', 'muhammad dani', '', '', '', NULL, 'smp', '', 'L', 'baron', 'dani11@gmail.com', '08523434', '', '', 'dani11@gmail.com', '3fceb45dde06eb5d8f2ab657ebaa4205', '157199', '', '', 'KONFIRMASI', '2020-10-01 05:58:50'),
(5, 1, 2, 'SIS00005', 'dDbRPxCLQ2lMDIa1gKA1XrLRb9ryHO', 'Muhammad  Ali', '', '', '', NULL, 'MTSN 4 NGANJUK', '', 'L', 'Baron', 'Ali4545@gmail.com', '08765432', '', '', 'Ali4545@gmail.com', '2fed06a96efcb435908388c9ef84c6c0', '734225', '', '', 'PENDING', '2020-10-01 06:00:41'),
(6, 1, 2, 'SIS00006', 'S1OvIrPAKmnJmjfn4zau0CafL7uFU2', 'Siti khodijah', NULL, NULL, NULL, NULL, 'SMPN 2 BARON', NULL, NULL, 'Baron', 'siti6565@gmail.com', '08976543', NULL, NULL, 'siti6565@gmail.com', 'c2f8d73daa38abebaeaaf834a7b01c86', '259418', NULL, NULL, 'PENDING', '2020-10-01 06:02:52'),
(7, 1, 4, 'SIS00007', '5fFlrrjBAER6uVRyKyhPOzy4O8pXrg', 'Muhammad joni', NULL, NULL, NULL, NULL, 'SMPN 1 BARON', NULL, NULL, 'Baron', 'joni1234@gmail.com', '08675432', NULL, NULL, 'joni1234@gmail.com', '6019c728e12af5d048c3d2decb9800cd', '250070', NULL, NULL, 'PENDING', '2020-10-01 06:04:27'),
(8, 1, 5, 'SIS00008', 'lyYmQhFSdXJ9oX0LRVopF9zby7D4uv', 'Muhammad khiorul', '', '', '', NULL, 'SMP Lambang Kuning', '', 'L', 'Kuniran', 'khoirul444@gmail.com', '089756455', '', '', 'khoirul444@gmail.com', '236f2f0e0ee5d5f7d1976c46733acece', '747059', '', '', 'PENDING', '2020-10-01 06:05:57'),
(10, 1, 1, 'SIS00010', 'aQ8RRgA1DVdMjvtlCFdFWji2Uca4yM', 'Muhammad dodi', NULL, NULL, NULL, NULL, 'Mts AKH', NULL, NULL, 'Jeruk lor', 'dodi333@gmail.com', '0899777666', NULL, NULL, 'dodi333@gmail.com', '35b799d27ee7dab5bf02b89a60f2a03d', '029825', NULL, NULL, 'PENDING', '2020-10-01 06:11:46'),
(11, 1, 2, 'SIS00011', 'fiOjaPxh1zBJldOQiOOaacGeEOHU9y', 'Muhammad sharip', NULL, NULL, NULL, NULL, 'SMPN 2 BARON', NULL, NULL, 'Sambikenceng', 'sarip@gmail.com', '08666554433', NULL, NULL, 'sarip@gmail.com', '7167732460011b31eebb00cb1accb939', '475262', NULL, NULL, 'PENDING', '2020-10-01 06:13:35'),
(12, 1, 3, 'SIS00012', 'q3f68BQIesCxVidKFqywhYjb4mwMbN', 'Muhammad fadhilah', NULL, NULL, NULL, NULL, 'Mts AKH', NULL, NULL, 'Banar', 'fadil@gmail.com', '083344222', NULL, NULL, 'fadil@gmail.com', 'b81b7026615b84324ac7e071e611b7aa', '588906', NULL, NULL, 'PENDING', '2020-10-01 06:15:17'),
(13, 1, 3, 'SIS00013', 'mNMPuhNWO14wCrVlgCQ412LY9kgZa3', 'Muhammad fadli', NULL, NULL, NULL, NULL, 'SMPN 2 BARON', NULL, NULL, 'Lambangkuning', 'fadli555@gmail.com', '087666554433', NULL, NULL, 'fadli555@gmail.com', '42419b5388418064049e700f36261e7f', '306323', NULL, NULL, 'PENDING', '2020-10-01 06:17:01'),
(14, 1, 5, 'SIS00014', 'FHLA22OK3neAGY52u3YCoAEdbsJtaL', 'Sanusi Hamzah', NULL, NULL, NULL, NULL, 'SMPN 1 Jakarta', NULL, NULL, 'Bandung', 'ig.silvacanopy@gmail.com', '0856657568657', NULL, NULL, 'ig.silvacanopy@gmail.com', 'e4cad517e0ab4eb19368b8ca5476176b', '829181', NULL, NULL, 'PENDING', '2020-10-13 19:57:08'),
(16, 1, 6, 'SIS00015', 'aMoofAEHqul8yuywr3jcI9RSvlFo6W', 'Cahyadi Wibisono', '3216060512980006', '321654987', 'Bekasi', '1998-12-05', 'SD Jatimulya 11', 'Bangka I No. 8', 'L', 'Bangka I No. 8', 'cahyadiws666@gmail.com', '082124518328', 'ayah', 'ibu', 'cahyadiws666@gmail.com', 'db68d5131729a6f62782f97c5486f9c3', '045954', '082124518328', 'Alumni', 'KONFIRMASI', '2021-05-21 18:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `judul_slider` varchar(100) DEFAULT NULL,
  `isi_slider` varchar(200) DEFAULT NULL,
  `link_slider` varchar(300) DEFAULT NULL,
  `foto_slider` varchar(200) DEFAULT NULL,
  `urutan_slider` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul_slider`, `isi_slider`, `link_slider`, `foto_slider`, `urutan_slider`) VALUES
(1, 'ACARA PELATIHAN PROTOKOL KESEHATAN', 'Kali ini sekolah kami sedang bersosialisasi untuk menerapkan protokol kesehatan pencegahan COVID-19. Semua siswa dan guru ikut serta dalam kegiatan ini.', '#', 'file/slider/1600945396_64f9bb989f453976ed2f.jpg', 2),
(2, 'SEKOLAH KAMI SUDAH MENERAPKAN ELEARNING', 'Sekolah kami sudah merilis aplikasi E-Learning untuk menyukseskan pembelajaran secara online. Aplikasi ini juga didevelop oleh siswa kami.', '#', 'file/slider/1600945540_7b6ef3b2d0e492084e69.jpg', 3),
(4, 'SELAMAT DATANG DI SMKN 77 NGANJUK', 'Sekolah keren cocok untuk milenial dengan fasilitas yang lengkap dan didampingi guru berkompeten. Sekolah kami terakreditas A .', '#', 'file/slider/1600992998_3e09d39edf7863a37ea2.jpg', 1),
(5, 'PENERIMAAN PESERTA DIDIK BARU DIBUKA', 'Yee.. PPDB SMK Negeri  77 Nganjuk sudah dibuka ayo segera daftarkan diri anda dan pastikan anda akan mendapatkan pendidikan yang unggul dan berkualitas disini.', '#', 'file/slider/1601680893_866112eff752433779a4.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `nama_tahun` varchar(100) DEFAULT NULL,
  `ket_tahun` varchar(100) DEFAULT NULL,
  `aktif_tahun` int(11) DEFAULT NULL COMMENT '1=AKTIF,0=NONAKTIF',
  `ppdb_tahun` int(11) DEFAULT NULL COMMENT '1=AKTIF,0=NONAKTIF'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `nama_tahun`, `ket_tahun`, `aktif_tahun`, `ppdb_tahun`) VALUES
(1, '2020/2021', 'Tahun Corona', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `ket_video` varchar(200) DEFAULT NULL,
  `youtube_video` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `ket_video`, `youtube_video`) VALUES
(1, 'Happy Asmara - Los Dol (Official Music Video)', 'https://www.youtube.com/watch?v=_yPMWH8ugn4'),
(4, 'Happy Asmara - Los Dol (Official Music Video)', 'https://www.youtube.com/watch?v=MVF_U0-8dKs'),
(5, 'Happy Asmara - Piye Kabarmu Mantan', 'https://www.youtube.com/watch?v=FSziGFgq_24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id_app`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `ourservice`
--
ALTER TABLE `ourservice`
  ADD PRIMARY KEY (`id_ourservice`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acara`
--
ALTER TABLE `acara`
  MODIFY `id_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id_halaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ourservice`
--
ALTER TABLE `ourservice`
  MODIFY `id_ourservice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
