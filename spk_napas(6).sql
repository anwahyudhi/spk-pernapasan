-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 07:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_napas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'ironman', 'ironman', 'Peter Quil');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`) VALUES
(1, 'Bagian Tanaman', 0.2),
(4, 'Cara Pengolahan', 0.2),
(5, 'Ketersediaan', 0.1),
(6, 'Aturan Pakai', 0.15),
(7, 'Rasa', 0.2),
(8, 'Cara Penggunaan', 0.15);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `keterangan`) VALUES
(3, 'Asma', 'Penyakit yang terjadi karena penyempitan saluran pernapasan. Penyebabnya biasanya adalah alergi terhadap debu, pasir, bulu, serangga, kecil ataupun rambut.'),
(4, 'Bronkitis', 'Peradangan yang terjadi pada saluran utama pernapasan atau bronkus.                                          \r\n                                        '),
(5, 'Pneumonia', 'Peradangan paru-paru yang disebabkan oleh infeksi. '),
(6, 'Influenza', 'Penyakit yang disebabkan oleh infeksi virus yang dapat menyerang hidung, tenggorokan, dan paru-paru.'),
(7, 'Batuk', 'merupakan respons alami yang diberikan tubuh saat sistem pertahanan saluran napas mengalami gangguan dari luar. '),
(8, 'ISPA', 'Infeksi peradangan pada saluran pernapasan mulai dari hidung sampai paru-paru. ISPA disebabkan oleh virus atau bakteri yang mudah menular. '),
(9, 'TBC', 'Penyakit yang disebabkan oleh bakteri Mycobacterium tuberculosis. Bakteri ini menyerang paru-paru dan menimbulkan bintil-bintil pada dinding alveolus. Karena ada bintil-bintil tersebut, proses difusi oksigen terganggu.');

-- --------------------------------------------------------

--
-- Table structure for table `perangkingan`
--

CREATE TABLE `perangkingan` (
  `id_perankingan` int(11) NOT NULL,
  `id_tanaman` varchar(255) NOT NULL,
  `id_penyakit` varchar(255) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perangkingan`
--

INSERT INTO `perangkingan` (`id_perankingan`, `id_tanaman`, `id_penyakit`, `nilai`) VALUES
(468, '31', '3', 0.076140920483026),
(469, '32', '3', 0.076140920483026),
(470, '33', '3', 0.076140920483026),
(471, '34', '3', 0.076140920483026),
(472, '35', '3', 0.076140920483026),
(473, '36', '3', 0.076140920483026),
(474, '37', '3', 0.076140920483026),
(475, '38', '3', 0.076140920483026),
(476, '39', '3', 0.076140920483026),
(477, '40', '3', 0.076140920483026),
(478, '41', '3', 0.076140920483026),
(479, '42', '4', 0.1035612244898),
(480, '43', '4', 0.1035612244898),
(481, '44', '4', 0.1035612244898),
(482, '45', '4', 0.1035612244898),
(483, '46', '4', 0.1035612244898),
(484, '47', '4', 0.1035612244898),
(485, '48', '4', 0.1035612244898),
(486, '49', '4', 0.1035612244898),
(487, '50', '4', 0.1035612244898),
(488, '51', '4', 0.1035612244898),
(489, '52', '4', 0.1035612244898),
(490, '53', '5', 0.099081656048869),
(491, '54', '5', 0.099081656048869),
(492, '55', '5', 0.099081656048869),
(493, '56', '5', 0.099081656048869),
(494, '57', '5', 0.099081656048869),
(495, '58', '5', 0.099081656048869),
(496, '59', '5', 0.099081656048869),
(497, '60', '5', 0.099081656048869),
(498, '61', '5', 0.099081656048869),
(499, '62', '5', 0.099081656048869),
(500, '63', '6', 0.068297057925277),
(501, '64', '6', 0.068297057925277),
(502, '65', '6', 0.068297057925277),
(503, '66', '6', 0.068297057925277),
(504, '67', '6', 0.068297057925277),
(505, '68', '6', 0.068297057925277),
(506, '69', '6', 0.068297057925277),
(507, '70', '6', 0.068297057925277),
(508, '71', '6', 0.068297057925277),
(509, '72', '6', 0.068297057925277),
(510, '73', '7', 0.069098901098901),
(511, '74', '7', 0.069098901098901),
(512, '75', '7', 0.069098901098901),
(513, '76', '7', 0.069098901098901),
(514, '77', '7', 0.069098901098901),
(515, '78', '7', 0.069098901098901),
(516, '79', '7', 0.069098901098901),
(517, '80', '7', 0.069098901098901),
(518, '81', '7', 0.069098901098901),
(519, '82', '7', 0.069098901098901),
(520, '83', '8', 0.094864305130086),
(521, '84', '8', 0.094864305130086),
(522, '85', '8', 0.094864305130086),
(523, '86', '8', 0.094864305130086),
(524, '87', '8', 0.094864305130086),
(525, '88', '8', 0.094864305130086),
(526, '89', '8', 0.094864305130086),
(527, '90', '8', 0.094864305130086),
(528, '91', '8', 0.094864305130086),
(529, '92', '9', 0.09066619726574),
(530, '93', '9', 0.09066619726574),
(531, '94', '9', 0.09066619726574),
(532, '95', '9', 0.09066619726574),
(533, '96', '9', 0.09066619726574),
(534, '97', '9', 0.09066619726574),
(535, '98', '9', 0.09066619726574),
(536, '99', '9', 0.09066619726574),
(537, '100', '9', 0.09066619726574),
(538, '101', '9', 0.09066619726574),
(539, '102', '9', 0.09066619726574),
(540, '103', '9', 0.09066619726574),
(541, '104', '9', 0.09066619726574),
(542, '105', '9', 0.09066619726574);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_subkriteria` double NOT NULL,
  `id_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `nama`, `nilai_subkriteria`, `id_kriteria`) VALUES
(1, 'Akar', 1, 1),
(2, 'Umbi', 2, 1),
(3, 'Rimpang', 3, 1),
(4, 'Batang', 4, 1),
(5, 'Kulit', 5, 1),
(6, 'Daun', 6, 1),
(7, 'Bunga', 7, 1),
(8, 'Buah', 8, 1),
(9, 'Biji', 9, 1),
(10, 'Disuling', 1, 4),
(11, 'Dibakar', 2, 4),
(12, 'Direbus', 3, 4),
(13, 'Diseduh', 4, 4),
(14, 'Diperas', 5, 4),
(15, 'Dihaluskan', 6, 4),
(16, 'Langsung', 7, 4),
(17, 'Sulit', 1, 5),
(18, 'Mudah', 2, 5),
(19, 'Sangat Mudah', 3, 5),
(20, '3 x Sehari', 1, 6),
(21, '2 x Sehari', 2, 6),
(22, '1 x Sehari', 3, 6),
(23, 'Pahit', 1, 7),
(24, 'Asam', 2, 7),
(25, 'Pedas', 3, 7),
(26, 'Manis', 4, 7),
(27, 'Netral', 5, 7),
(28, 'Dihirup', 1, 8),
(29, 'Diminum', 2, 8),
(30, 'Dikunyah', 3, 8),
(31, 'Dimakan', 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `latin` varchar(255) NOT NULL,
  `Bagian` int(11) NOT NULL,
  `Pengolahan` int(11) NOT NULL,
  `Penggunaan` int(11) NOT NULL,
  `Aturan` int(11) NOT NULL,
  `Ketersediaan` int(11) NOT NULL,
  `Rasa` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `si` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`id_tanaman`, `nama_tanaman`, `latin`, `Bagian`, `Pengolahan`, `Penggunaan`, `Aturan`, `Ketersediaan`, `Rasa`, `id_penyakit`, `keterangan`, `gambar`, `si`) VALUES
(31, 'Jahe', 'Zingiber officinale', 3, 12, 29, 20, 19, 25, 3, '', '1238582734-jahe.JPG', 0.090821371610845),
(32, 'Kapulaga', 'Elettaria cardamomum', 8, 13, 29, 21, 19, 25, 3, '', '1686217372-kapulaga.JPG', 0.12114604693552),
(33, 'Putri malu', 'Mimosa pudica', 1, 12, 29, 20, 18, 23, 3, '', '1209774395-putri malu.JPG', 0.061911217437533),
(34, 'Kelor', 'Moringa oleifera', 6, 15, 29, 21, 18, 23, 3, '', '1695897060-kelor.JPG', 0.10223589276221),
(35, 'Jinten hitam', 'Nigella sativa', 9, 13, 29, 21, 18, 25, 3, ' ', '1521076515-jintan hitam.JPG', 0.11425609478241),
(36, 'Ciplukan', 'Physalis minima', 6, 12, 29, 21, 17, 26, 3, '', '1418450072-ciplukan.JPG', 0.093376243639402),
(37, 'Sirih', 'Piper betle', 6, 12, 29, 21, 18, 25, 3, '', '1803928083-sirih.JPG', 0.09834700387332),
(38, 'Senggugu', 'Clerodendron serratum', 1, 13, 29, 20, 17, 25, 3, '', '1761687200-Senggugu.JPG', 0.067496012759171),
(39, 'Cermai', 'Phyllantus acidus', 8, 15, 29, 22, 17, 24, 3, '', '772056898-Cermai.JPG', 0.11168071694387),
(40, 'Mint', 'Mentha piperita', 6, 10, 28, 22, 17, 25, 3, '', '476761096-Mint.JPG', 0.080201640464798),
(41, 'Tapak dara', 'Vinca rosea', 1, 12, 29, 21, 17, 23, 3, '', '1646539583-Tapak dara.JPG', 0.058527758790917),
(42, 'Nanas', 'Ananas comosus', 8, 15, 29, 21, 19, 26, 4, '', '1148787810-Nanas.JPG', 0.12160802251935),
(43, 'Kapulaga', 'Elettaria cardamomum', 8, 13, 29, 21, 19, 25, 4, '', '514753941-kapulaga.JPG', 0.10827234342013),
(44, 'Jahe', 'Zingiber officinale', 3, 12, 29, 20, 19, 25, 4, '', '386013267-jahe.JPG', 0.076690710767065),
(45, 'Lemon', 'Citrus limon', 8, 14, 28, 20, 19, 24, 4, '', '53674243-Lemon.JPG', 0.095681562280084),
(46, 'Kunyit', 'Curcuma domestica', 3, 15, 29, 21, 19, 23, 4, '', '822686835-Kunyit.JPG', 0.086090781140042),
(47, 'Bawang putih', 'Alium sativum', 2, 16, 31, 22, 19, 23, 4, '', '1060886199-Bawang putih.JPG', 0.1016724137931),
(48, 'Bawang merah', 'Allium ascalonium', 2, 15, 31, 21, 19, 25, 4, '', '598523829-Bawang merah.JPG', 0.10043560872625),
(49, 'Bayam duri', 'Amaranthus spinousus', 6, 12, 29, 20, 18, 26, 4, '', '340193098-bayam duri.JPG', 0.086720267417312),
(50, 'Ciplukan', 'Physalis angulate', 6, 12, 29, 21, 17, 26, 4, '', '1955441889-ciplukan.JPG', 0.087077410274455),
(51, 'Lengkuas', 'Alpinia galanga', 3, 12, 29, 21, 19, 25, 4, '', '841984232-lengkuas.JPG', 0.084190710767065),
(52, 'Tapak dara', 'Vinca rosea', 1, 12, 29, 21, 17, 23, 4, '', '979292032-Tapak dara.JPG', 0.051560168895144),
(53, 'Tomat', 'Lycopersicum esculentum', 8, 15, 29, 21, 19, 24, 5, '', '899786169-tomat.JPG', 0.10647426344148),
(54, 'Jahe', 'Zingiber officinale', 3, 16, 30, 20, 19, 25, 5, '', '1346797361-jahe.JPG', 0.09668671492442),
(55, 'Mint', 'Mentha piperita', 6, 13, 29, 22, 17, 25, 5, '', '1525491762-Mint.JPG', 0.089339963315373),
(56, 'Kunyit', 'Curcuma domestica', 3, 12, 29, 21, 19, 23, 5, '', '459718598-Kunyit.JPG', 0.073185216422921),
(57, 'Lada hitam', 'Piper nigrum', 9, 12, 28, 21, 18, 25, 5, '', '449221472-Lada hitam.JPG', 0.091333871046986),
(58, 'Kayu manis', 'Cinnamomum verum', 5, 12, 29, 21, 18, 26, 5, '', '387332538-kayu manis.JPG', 0.088121714351223),
(59, 'Lemon', 'Citrus limon', 8, 14, 29, 20, 19, 24, 5, '', '744006336-Lemon.JPG', 0.095485252452466),
(60, 'Bawang merah', 'Allium ascalonium', 2, 15, 29, 21, 18, 25, 5, '', '1839325584-Bawang merah.JPG', 0.084466967458771),
(61, 'Jambu biji', 'Psidium guajava', 8, 15, 29, 21, 19, 26, 5, '', '171541657-jambu biji.JPG', 0.11718854915576),
(62, 'Stroberi', 'Fragaria ananassa', 8, 15, 29, 21, 19, 24, 5, '', '1913892813-stoberi.JPG', 0.10647426344148),
(63, 'Jahe', 'Zingiber officinale', 3, 12, 29, 20, 19, 25, 6, '', '606298710-jahe.JPG', 0.08360475023297),
(64, 'Kapulaga', 'Elettaria cardamomum', 8, 13, 29, 21, 19, 25, 6, '', '772827809-kapulaga.JPG', 0.11848207895128),
(65, 'Bawang merah', 'Allium ascalonium', 2, 15, 29, 21, 19, 25, 6, '', '98063308-Bawang merah.JPG', 0.099719989976429),
(66, 'Kencur', 'Kaempferia galanga', 3, 13, 29, 20, 19, 25, 6, '', '392632243-Kencur.JPG', 0.087860069381906),
(67, 'Bawang putih', 'Allium sativum', 2, 16, 31, 21, 19, 23, 6, '', '1000722702-Bawang putih.JPG', 0.1004368475869),
(68, 'Teh', 'Camellia sinensis', 6, 13, 29, 20, 18, 23, 6, ' ', '1552214188-teh.JPG', 0.081957971479808),
(69, 'Pegagan', 'Centella asiatica', 6, 16, 30, 21, 18, 25, 6, '', '32850565-pegangga.JPG', 0.11815712730718),
(70, 'Sirih', 'Piper betle', 6, 12, 29, 20, 18, 25, 6, '', '941556601-sirih.JPG', 0.089241113869333),
(71, 'Bandotan', 'Ageratum conyzoides', 6, 12, 29, 22, 18, 23, 6, ' ', '1900627194-bondotan.JPG', 0.093492126015082),
(72, 'Tembelekan', 'Lantana camara', 1, 12, 29, 21, 17, 26, 6, '', '806169289-tembelekan.JPG', 0.072177808753397),
(73, 'Jahe', 'Zingiber officinale', 3, 12, 29, 20, 19, 25, 7, '', '752777186-jahe.JPG', 0.088194139194139),
(74, 'Kapulaga', 'Elettaria cardamomum', 8, 13, 29, 21, 19, 25, 7, '', '1767176964-kapulaga.JPG', 0.11951282051282),
(75, 'Kencur', 'Kaempferia galanga', 3, 11, 30, 20, 19, 25, 7, '', '1432182771-Kencur.JPG', 0.087232600732601),
(76, 'Pegagan', 'Centella asiatica', 6, 16, 30, 21, 18, 25, 7, '', '1211030894-pegangga.JPG', 0.12392124542125),
(77, 'Bandotan', 'Ageratum conyzoides', 6, 12, 29, 22, 18, 23, 7, '', '1236863910-bondotan.JPG', 0.093289377289377),
(78, 'Jeruk nipis', 'Citrus aurantifolia', 8, 14, 29, 20, 19, 24, 7, '', '1789835679-jeruk nipis.JPG', 0.10916483516484),
(79, 'Belimbing wuluh', 'Averrhoa bilimbi', 8, 12, 29, 21, 18, 24, 7, '', '1152582686-blimbing waluh.JPG', 0.099241758241758),
(80, 'Sawi langit', 'Nasturtium montanum', 6, 12, 29, 21, 18, 23, 7, '', '1772964808-sawi langit.JPG', 0.084956043956044),
(81, 'Meniran', 'Phylanthus urinaria', 6, 12, 29, 20, 18, 23, 7, '', '1879294999-menira.JPG', 0.076622710622711),
(82, 'Putri malu', 'Mimosa pudica', 1, 12, 29, 20, 18, 23, 7, '', '1926571450-putri malu.JPG', 0.058765567765568),
(83, 'Sambiloto', 'Andrographis paniculata', 6, 15, 29, 20, 18, 23, 8, '', '561345562-sambiloto.JPG', 0.097353482619263),
(84, 'Bayam duri', 'Amaranthus spinosus', 6, 15, 29, 20, 18, 26, 8, '', '560638953-bayam duri.JPG', 0.11780802807381),
(85, 'Jahe merah', 'Zingiber officinale var. Rubrum', 3, 12, 29, 20, 17, 25, 8, '', '1383237456-jahe merah.JPG', 0.075267650400541),
(86, 'Bandotan', 'Ageratum conyzoides', 6, 12, 29, 20, 18, 23, 8, '', '1144849887-bondotan.JPG', 0.08339999424717),
(87, 'Lengkuas', 'Alpinia galanga', 3, 15, 29, 21, 19, 25, 8, '', '1586832116-lengkuas.JPG', 0.11826875782025),
(88, 'Belimbing wuluh', 'Averrhoa bilimbi', 7, 13, 29, 21, 18, 24, 8, '', '985979969-bunga blimbing waluh.JPG', 0.10895097150911),
(89, 'Bawang putih', 'Alium sativum', 2, 12, 29, 20, 19, 23, 8, '', '1150627531-Bawang putih.JPG', 0.076597273158735),
(90, 'Blustru', 'Luffa aegyptiaca', 8, 12, 29, 21, 17, 26, 8, '', '854562316-blastu.JPG', 0.11249399548403),
(91, 'Anggrung', 'Trema orientalis', 6, 12, 29, 20, 18, 23, 8, '', '684392780-anggrung.JPG', 0.08339999424717),
(92, 'Bawang putih', 'Alium sativum', 2, 16, 31, 22, 19, 23, 9, '', '397746845-Bawang putih.JPG', 0.08893542803497),
(93, 'Secang', 'Caesalpinia sappan', 4, 12, 29, 20, 17, 27, 9, '', '1602579114-secang.JPG', 0.067062826380332),
(94, 'Hanjuang', 'Cordyline fruticosa', 6, 12, 29, 21, 18, 27, 9, '', '304259360-hanjung.JPG', 0.086552235521915),
(95, 'Tembelekan', 'Lantana camara', 7, 13, 29, 20, 17, 23, 9, '', '1643872561-tembelekan.JPG', 0.05926725048407),
(96, 'Kunyit', 'Curcuma domestica', 3, 12, 29, 21, 19, 23, 9, '', '662235169-Kunyit.JPG', 0.06554889104031),
(97, 'Ketumbar', 'Coriandrum sativum', 9, 13, 29, 21, 19, 25, 9, '', '614954172-ketumbar.JPG', 0.09644896731796),
(98, 'Jeruk nipis', 'Citrus aurantifolia', 8, 14, 29, 20, 18, 24, 9, '', '598433708-jeruk nipis.JPG', 0.07836688083084),
(99, 'Jarak pagar', 'Jatropha curcas', 1, 12, 29, 21, 18, 23, 9, '', '1891733674-jarak pagar.JPG', 0.052059481898727),
(100, 'Baru cina', 'Artemisia vulgaris', 6, 15, 29, 22, 17, 23, 9, '', '1524101808-Baru cina.JPG', 0.075386243619081),
(101, 'Kumis kucing', 'Orthosiphon aristatus', 6, 12, 29, 20, 18, 23, 9, '', '1608188175-kumis kucing.JPG', 0.060552235521915),
(102, 'Takokak', 'Solanum torvum', 8, 16, 31, 21, 18, 26, 9, '', '1951766082-takokan.JPG', 0.10763442469049),
(103, 'Bambu tali', 'Asparagus cochinchinensis', 2, 12, 29, 20, 17, 23, 9, '', '2116874606-bambu tali.JPG', 0.041265724931057),
(104, 'Daun duduk', 'Desmodium triquetrum', 1, 12, 29, 21, 18, 23, 9, '', '49553471-daun duduk.JPG', 0.052059481898727),
(105, 'Singo walang', 'Petiveria alliacea', 6, 12, 29, 21, 17, 25, 9, '', '976403565-singo walang.JPG', 0.068859927829607);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `perangkingan`
--
ALTER TABLE `perangkingan`
  ADD PRIMARY KEY (`id_perankingan`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `kriteria_subkriteria` (`id_kriteria`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`),
  ADD KEY `tanaman_aturan` (`Aturan`),
  ADD KEY `tanaman_ketersediaan` (`Ketersediaan`),
  ADD KEY `tanaman_penggunaan` (`Penggunaan`),
  ADD KEY `tanaman_pengolahan` (`Pengolahan`),
  ADD KEY `tanaman_penyakit` (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `perangkingan`
--
ALTER TABLE `perangkingan`
  MODIFY `id_perankingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=543;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD CONSTRAINT `kriteria_subkriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD CONSTRAINT `tanaman_aturan` FOREIGN KEY (`Aturan`) REFERENCES `subkriteria` (`id_subkriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanaman_ketersediaan` FOREIGN KEY (`Ketersediaan`) REFERENCES `subkriteria` (`id_subkriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanaman_penggunaan` FOREIGN KEY (`Penggunaan`) REFERENCES `subkriteria` (`id_subkriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanaman_pengolahan` FOREIGN KEY (`Pengolahan`) REFERENCES `subkriteria` (`id_subkriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanaman_penyakit` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
