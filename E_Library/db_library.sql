-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 03:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_bookauthor`
--

CREATE TABLE `t_bookauthor` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_desc` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_bookauthor`
--

INSERT INTO `t_bookauthor` (`author_id`, `author_name`, `author_desc`) VALUES
(1, 'Fyodor Dostoyevsky', 'Lorem ipsum'),
(2, 'Mark Manson', 'Lorem ipsum'),
(3, 'Yuval Noah Harari', ''),
(4, 'Siddhartha Mukherjee', 'Siddhartha Mukherjee adalah seorang dokter, ahli biologi, dan penulis berkebangsaan India-Amerika.'),
(5, 'Morgan Housel', 'Morgan Housel adalah mitra di The Collaborative Fund dan mantan kolumnis di The Motley Fool dan The Wall Street Journal. Dia adalah pemenang dua kali Best in Business Award dari Society of American Business Editors and Writers, pemenang New York Times Sid'),
(6, 'Paula Coelho', 'Paulo Coelho de Souza adalah seorang penulis lirik dan novelis Brasil dan anggota Akademi Sastra Brasil sejak tahun 2002.'),
(7, 'Ruth Ware', 'Ruth Ware dibesarkan di Sussex, di pantai selatan Inggris. Setelah lulus dari Universitas Manchester, ia pindah ke Paris, sebelum menetap di London Utara. Dia pernah bekerja sebagai pelayan, penjual buku, guru bahasa Inggris sebagai bahasa asing dan petug'),
(8, 'Rusydi Hamka', 'Drs. H. Rusydi Hamka adalah seorang ulama, wartawan, dan politikus Indonesia yang berasal dari Partai Persatuan Pembangunan (PPP). Ia pernah duduk di kursi DPR RI dan ditempatkan di Komisi I oleh partainya.'),
(9, 'Rupi Kaur', ''),
(10, 'Sapardi Djoko Damono', 'Sapardi Djoko Damono adalah seorang penyair Indonesia yang dikenal dengan puisi-puisi lirisnya, dan secara luas dianggap sebagai pelopor puisi liris di Indonesia.'),
(11, 'Ika Natassa', 'Ika Natassa (lahir 25 Desember 1977) merupakan seorang penulis buku Indonesia. Dia memulai karier menulisnya sejak tahun 2006.'),
(12, 'Tere Liye', ''),
(14, 'Alex Michaelides', 'Alex Michaelides lahir dan dibesarkan di Siprus. Ia memiliki gelar M.A. dalam bidang sastra Inggris dari Trinity College, Universitas Cambridge, dan gelar M.A. dalam bidang penulisan skenario dari American Film Institute di Los Angeles. '),
(15, 'Henry Manampiring', ''),
(16, 'Okky Madasari', 'Okky Madasari adalah seorang novelis Indonesia. Ia terkenal dengan kritik sosialnya dengan karya-karya fiksinya yang menyoroti isu-isu sosial, seperti ketidakadilan dan diskriminasi, dan yang terpenting, tentang kemanusiaan. Di bidang akademis, minat utam'),
(17, 'Leila S. Chudori', ' Leila Salikha Chudori adalah penulis Indonesia yang menghasilkan berbagai karya cerita pendek, novel, dan skenario drama televisi.Leila S. Chudori bercerita tentang kejujuran, keyakinan, dan tekad, prinsip dan pengorbanan.'),
(18, 'Dee Lestari', 'Dee Lestari, adalah salah satu penulis buku terlaris dan mendapat banyak pujian di Indonesia. Lahir pada 20 Januari 1976, ia memulai debutnya dengan novel berseri Supernova pada tahun 2001. Episode pertama Supernova, Kesatria, Putri, dan Bintang Jatuh, te'),
(20, 'Ziggy Zezsyazeoviennazabrizkie', 'Ziggy Zezsyazeoviennazabrizkie (Penulis) Ziggy Zezsyazeoviennazabrizkie lahir pada tahun 1993 di Bandar Lampung dan menempuh pendidikan di bidang hukum di Bandung, Jawa Barat.'),
(21, 'J.S. Khairen', 'Jombang Santani Khairen atau dikenal dengan JS Khairen merupakan penulis berdarah Minang.'),
(22, 'M.K. England', ''),
(23, 'Andy Weir', 'ANDY WEIR membangun karier sebagai insinyur perangkat lunak hingga kesuksesan novel pertamanya yang diterbitkan, THE MARTIAN, memungkinkannya untuk mewujudkan mimpinya untuk menulis secara penuh waktu. Dia adalah seorang kutu buku ruang angkasa seumur hid'),
(24, 'Ichiro Kishimi', ''),
(25, 'James Clear', 'James Clear menulis tentang kebiasaan, pengambilan keputusan, dan peningkatan berkelanjutan di jamesclear.com. Situs webnya menerima jutaan pengunjung setiap bulannya dan ratusan ribu orang berlangganan buletin emailnya yang populer.'),
(26, 'Antoine de Saint-Exupéry', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_bookgenre`
--

CREATE TABLE `t_bookgenre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_bookgenre`
--

INSERT INTO `t_bookgenre` (`genre_id`, `genre_name`) VALUES
(1, 'Psychology'),
(2, 'Thriller'),
(3, 'Self-Improvement'),
(4, 'Drama'),
(5, 'History'),
(6, 'Biography'),
(7, 'Drama'),
(8, 'Poetry'),
(9, 'fiction'),
(10, 'Fantasy'),
(11, 'Historical Fiction'),
(12, 'Science Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `t_booklang`
--

CREATE TABLE `t_booklang` (
  `language_id` int(11) NOT NULL,
  `language_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_booklang`
--

INSERT INTO `t_booklang` (`language_id`, `language_name`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `t_books`
--

CREATE TABLE `t_books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_author` int(11) NOT NULL,
  `book_lang` int(11) NOT NULL,
  `book_desc` varchar(255) DEFAULT NULL,
  `book_genre` varchar(255) NOT NULL,
  `book_cover` blob NOT NULL,
  `book_file` blob NOT NULL,
  `book_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_books`
--

INSERT INTO `t_books` (`book_id`, `book_name`, `book_author`, `book_lang`, `book_desc`, `book_genre`, `book_cover`, `book_file`, `book_year`) VALUES
(1, 'Crime and Punishment', 1, 2, 'Lorem', '1', '', '', 1866),
(2, 'Sebuah Seni untuk Bersikap Bodo Amat', 2, 1, 'Ya', '3', '', '', 1945),
(4, 'Sapiens : A Brief History of Humankind', 3, 2, 'The book, focusing on Homo sapiens, surveys the history of humankind, starting from the Stone Age and going up to the twenty-first century. The account is situated within a framework that intersects the natural sciences with the social sciences.', '5', 0x53617069656e732065626f6f6b20627920597576616c204e6f616820486172617269202d2052616b7574656e204b6f626f2e6a706567, 0x53617069656e73204120427269656620486973746f7279206f662048756d616e6b696e642e706466, 2011),
(5, 'The Emperor of All Maladies', 4, 2, 'The story of cancer is a story of human ingenuity, resilience, and perseverance, but also of hubris, paternalism, and misperception. Mukherjee recounts centuries of discoveries, setbacks, victories, and deaths, told through the eyes of his predecessors an', '6', 0x54686520456d7065726f72206f6620416c6c204d616c61646965735f20412042696f677261706879206f662043616e6365722e6a706567, 0x54686520456d7065726f72204f6620416c6c204d616c61646965732e706466, 2010),
(6, 'The Psychology of Money', 5, 1, 'Psychology of Money memiliki total 19 cerita pendek yang mengeksplorasi cara unik orang berpikir tentang uang. Seluruh kisah tersebut merupakan kisah nyata yang digambarkan dari sudut pandang dua orang dengan latar belakang berbeda, yaitu Ronald James Rea', '1', 0x5468652050737963686f6c6f6779206f66204d6f6e6579206279204d6f7267616e20486f7573656c2e6a706567, 0x5468652050737963686f6c6f6779206f66204d6f6e657920284d6f7267616e20486f7573656c292e706466, 2020),
(7, 'One by One', 7, 2, 'Getting snowed in at a beautiful, rustic mountain chalet doesn’t sound like the worst problem in the world, especially when there’s a breathtaking vista, a cozy fire, and company to keep you warm. But what happens when that company is eight of your cowork', '2', 0x6f6e653062722d6f6e652d4f50742e6a7067, 0x4f6e65206279204f6e652028576172652052757468292e706466, 2020),
(8, 'Buya Hamka Pribadi dan Martabat', 1, 1, 'Sikap Buya Hamka dalam Konferensi Islam Sedunia di Makkah pada 1975 barangkali merupakan teladan yang sangat relevan di masa hiruk pikuk sekarang ini. Pada waktu itu, Wakil Sekjen Konferensi Islam Syaikh Safwad Sakka termakan fitnah dan percaya bahwa Hamk', '6', 0x313130373833392e6a7067, 0x427579612048616d6b6120507269626164692064616e204d617274616261742e706466, 2017),
(9, 'Home Body', 9, 2, 'Rupi Kaur constantly embraces growth, and in home body, she walks readers through a reflective and intimate journey visiting the past, the present, and the potential of the self. home body is a collection of raw, honest conversations with oneself – remind', '8', 0x486f6d6520426f64792e6a706567, 0x486f6d6520426f6479202852757069204b617572292e706466, 2020),
(10, 'The Sun and Her Flowers', 9, 2, 'From Rupi Kaur, the #1 New York Times bestselling author of milk and honey, comes her long-awaited second collection of poetry. A vibrant and transcendent journey about growth and healing. Ancestry and honoring one’s roots. Expatriation and rising up to f', '8', 0x7468652d73756e2d616e642d6865722d666c6f776572732d62792d727570692d6b6175722d626f6f6b2d636f7665722d36353878313032342e6a70672e6f7074696d616c2e6a7067, 0x5468652053756e20616e642048657220466c6f77657273202852757069204b617572292e706466, 2018),
(11, 'Hujan Bulan Juni', 10, 1, 'Bagaimana mungkin seseorang bisa mendadak terbebaskan dari jaringan benang yang susun-bersusun, silang-menyilang, timpa-menimpa dengan rapi di selembar saputangan yang sudah bertahun-tahun lamanya ditenun dengan sabar oleh jari-jarinya sendiri oleh kesuny', '8', 0x393738363032303331383433315f48756a616e2d42756c616e2d4a756e692d5365627561682d4e6f76656c2e6a7067, 0x48756a616e2062756c616e204a756e692050696c6968616e2073616a616b2e706466, 2015),
(12, 'The Architecture of Love', 11, 1, 'Raia menjadikan setiap sudut New York \"kantor\"-nya. Berjalan kaki menyusuri Brooklyn sampai Queens, dia mencari sepenggal cerita di tiap jengkalnya, pada orang-orang yang berpapasan dengannya, dalam percakapan yang dia dengar, dalam tatapan yang sedetik-d', '7', 0x33303239323332392e6a7067, 0x54686520417263686974656374757265206f66204c6f76652028496b61204e617461737361292e706466, 2016),
(13, 'Hujan', 1, 1, 'Tentang persahabatan\r\nTentang cinta\r\nTentang perpisahan\r\nTentang melupakan\r\nTentang hujan', '9', 0x49445f4855323031384d5448303448552e6a7067, 0x48756a616e202854657265204c697965292e706466, 2016),
(14, 'Daun yang Jatuh Tak Pernah Membenci Angin', 12, 1, 'Dia bagai malaikat bagi keluarga kami. Merengkuh aku, adikku, dan Ibu dari kehidupan jalanan yang miskin dan nestapa. Memberikan makan, tempat berteduh, sekolah, dan janji masa depan yang lebih baik.\r\nDia sungguh bagai malaikat bagi keluarga kami. Memberi', '9', 0x383334333434342e6a7067, 0x4461756e2079616e67206a617475682074616b207065726e6168206d656d62656e636920616e67696e2e706466, 2010),
(15, 'Negeri di Ujung Tanduk', 12, 1, 'Di Negeri di Ujung Tanduk kehidupan semakin rusak, bukan karena orang jahat semakin banyak, tapi semakin banyak orang yang memilih tidak peduli lagi.\r\n\r\nDi Negeri di Ujung Tanduk, para penipu menjadi pemimpin, para pengkhianat menjadi pujaan, bukan karena', '9', 0x31373536363134342e6a7067, 0x4e656765726920646920556a756e672054616e64756b202854657265204c697965292e706466, 2013),
(16, 'The Silent Patient (Pelukis Bisu)', 14, 1, 'Suatu malam, terdengar bunyi tembakan dari rumah pasangan Gabriel dan Alicia Berenson. Ketika polisi masuk, Gabriel ditemukan tewas tertembak lima kali di wajah dengan posisi terikat di kursi. Alicia berdiri di depan suaminya. Senjata api tergeletak di la', '2', 0x393738363032303633333930395f5448455f53494c454e545f50415449454e43452e6a7067, 0x5468652053696c656e742050617469656e74202850656c756b69732042697375292e706466, 2019),
(17, 'Yang Fana Adalah Waktu', 10, 1, 'Dalang tidak berpihak kepada nasib tetapi kepada takdir.\r\n\r\nKau pasti masih ingat kita pernah suatu saat membayangkan sebuah dongeng tentang waktu yang ujudnya remah-remah yang bisa kita kunyah, telan, dan muntahkan kapan saja agar tetap ada. Kita menyuka', '8', 0x49445f475055323031384d54483033594641572e6a7067, 0x59616e672046616e61204164616c61682057616b74752e706466, 2018),
(18, 'Filosofi Teras', 15, 1, 'Apakah kamu sering merasa khawatir akan banyak hal? baperan? susah move-on? mudah tersinggung dan marah-marah di social media maupun dunia nyata?\r\n\r\nLebih dari 2.000 tahun lalu, sebuah mazhab filsafat menemukan akar masalah dan juga solusi dari banyak emo', '3', 0x34323836313031392e6a7067, 0x46696c6f736f6669205465726173202848656e7279204d616e616d706972696e67292e706466, 2018),
(19, 'Mata di Tanah Melus', 16, 1, 'Apa yang bisa dibanggakan dari pegawai rendahan di pengadilan? Gaji bulanan, baju seragam, atau uang pensiunan?\r\n\r\nArimbi, juru ketik di pengadilan negeri, menjadi sumber kebanggaan bagi orangtua dan orang-orang di desanya. Generasi dari keluarga petani y', '9', 0x31303634323230362e6a7067, 0x44656c6170616e2070756c756820656e616d20284f6b6b79204d61646173617269292e706466, 2011),
(20, 'Kerumunan Terakhir', 16, 1, 'Sepotong kisah tentang kegagapan manusia di tengah zaman yang berubah cepat, yang tak memberi kesempatan setiap orang untuk diam dan mengenang, berhenti dan kembali ke belakang.\r\n\r\nDari satu kerumunan ke kerumunan lainnya, dalam kebisingan dan keasingan, ', '9', 0x32393837363434342e6a7067, 0x4b6572756d756e616e20546572616b68697220284f6b6b79204d61646173617269292e706466, 2016),
(21, 'Pulang', 17, 1, 'Ketika revolusi mahasiswa berkecamuk di Paris, Dimas Suryo seorang eksil politik Indonesia bertemu Vivienne Deveraux, seorang mahasiswa Prancis yang ikut demonstrasi melawan pemerintah Prancis. Pada saat yang sama, Dimas menerima kabar dari Jakarta: Hanan', '11', 0x31363137343137362e6a7067, 0x50756c616e6720284c65696c6120532e20436875646f7269292e706466, 2012),
(22, 'Laut Bercerita', 17, 1, 'Jakarta, Maret 1998\r\n\r\nDi sebuah senja, di sebuah rumah susun di Jakarta, mahasiswa bernama Biru Laut disergap empat lelaki tak dikenal. Bersama kawan-kawannya, Daniel Tumbuan, Sunu Dyantoro, Alex Perazon, dia dibawa ke sebuah tempat yang tak dikenal. Ber', '11', 0x6c6175742d6265726365726974612e6a7067, 0x4c6175742042657263657269746120284c65696c6120532e20436875646f7269292e706466, 2017),
(23, 'Supernova Ksatria, Puteri, dan Bintang Jatuh', 18, 1, 'Dhimas dan Ruben adalah dua orang mahasiswa yang tengah menuntut ilmu di negeri Paman Sam. Dhimas kuliah di Goerge Washington University, dan Ruben di John Hopkins Medical School. Mereka bertemu dalam suatu pesta yang meriah, yang diadakan oleh perkumpula', '10', 0x4b657361747269612e5f50757472695f5f42696e74616e675f4a617475685f53757065726e6f76612e6a7067, 0x53757065726e6f7661204b657361747269612c2050757472692c2064616e2042696e74616e67204a617475682e706466, 2018),
(24, 'Di Tanah Lada', 20, 1, 'Namanya Salva. Panggilannya Ava. Namun papanya memanggil dia Saliva atau ludah karena menganggapnya tidak berguna. Ava sekeluarga pindah ke Rusun Nero setelah Kakek Kia meninggal. Kakek Kia, ayahnya Papa, pernah memberi Ava kamus sebagai hadiah ulang tahu', '9', 0x393738363032303331383936375f44695f54616e61685f4c6164615f432d31345f4355323032315f706167652d303030312e6a7067, 0x44692054616e6168204c6164612e706466, 2015),
(25, 'Semua Ikan di Langit', 20, 1, '\"Pekerjaan saya memang kedengaran membosankan— mengelilingi tempat yang itu-itu saja, diisi kaki-kaki berkeringat dan orang-orang berisik, diusik cicak-cicak kurang ajar, mendengar lagu aneh tentang tahu berbentuk bulat dan digoreng tanpa persiapan sebelu', '10', 0x33333834383033322e6a7067, 0x53656d75615f496b616e5f64695f4c616e6769745f5a696767795f5a657a7379617a656f7669656e6e617a616272697a6b69652e706466, 2017),
(26, 'Kami (Bukan) Sarjana Kertas', 21, 1, 'Tiap kita punya musuh besar.\r\n\r\nIa hadir lebih menakutkan dari kegelapan.\r\nMenyengat lebih panas dari Aldebaran.\r\nLebih berbahaya dari bisa King Cobra yang melumpuhkan.\r\nLebih dingin daripada kutub Bumi yang membekukan.\r\n\r\nDi mana musuh itu berada? Dalam ', '9', 0x57686174734170702d496d6167652d323032302d30352d31362d61742d31392e35362e34312e6a706567, 0x4b616d69202842756b616e29205361726a616e61204b657274617320284a2e20532e204b68616972656e292e706466, 2019),
(27, 'The Disasters', 22, 1, 'Hotshot pilot Nax Hall has a history of making poor life choices. So it’s not exactly a surprise when he’s kicked out of the elite Ellis Station Academy in less than twenty-four hours.\r\n\r\nBut Nax’s one-way trip back to Earth is cut short when a terrorist ', '1', 0x646f776e6c6f616420283234292e6a706567, 0x5468652044697361737465727320284d2e204b2e20456e676c616e64292e706466, 2018),
(28, 'Artemis', 23, 2, 'Artemis is a 2017 science fiction novel written by Andy Weir. It takes place in the late 2080s in Artemis, the first and so far only city on the Moon. It follows the life of porter and smuggler Jasmine \"Jazz\" Bashara as she gets caught up in a conspiracy ', '12', 0x33343932383132322e6a7067, 0x417274656d697320285765697220416e6479292e706466, 2017),
(29, 'Berani Tidak Disukai', 1, 1, 'Membaca buku ini bisa mengubah hidup anda. jutaan orang sudah menarik manfaat darinya. sekarang giliran anda.\r\n\r\nBerani Tidak Disukai, yang sudah terjual lebih dari 3,5 juta eksemplar, mengungkap rahasia mengeluarkan kekuatan terpendam yang memungkinkan A', '3', 0x49445f425444323031394d544831304254442e6a7067, 0x426572616e695f546964616b5f446973756b61695f49636869726f5f4b697368696d692c5f46756d6974616b655f4b6f67612e706466, 2013),
(31, 'Le Petite Prince: Pangeran Cilik', 1, 1, 'Pangeran Cilik termasuk buku yang paling banyak diterjemahkan di dunia. Konon pernah disadur ke dalam 230 bahasa asing. Buku ini memang luar biasa. Tampaknya seolah cerita anak-anak, tapi sebenarnya dinikmati dan direnungkan juga oleh orang dewasa. Lewat ', '9', 0x49445f50436c323032304d544830344c502e6a7067, 0x50616e676572616e5f43696c696b5f4c655f50657469745f5072696e63655f416e746f696e655f64655f5361696e745f457875706572792e706466, 1943),
(32, 'Berani Bahagia', 24, 1, 'Bagaimana bila satu pilihan sederhana bisa menguak takdir Anda?\r\n\r\nBuku yang membuka mata dan mudah dipahami ini memaparkan pengajaran yang kuat dari Alfred Adler, salah satu tokoh besar psikolog abad kesembilan belas, lewat percakapan yang gamblang antar', '1', 0x424c4b5f4242323032303138363233392e6a7067, 0x426572616e692042616861676961202849636869726f204b697368696d692c2046756d6974616b65204b6f6761292e706466, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`user_id`, `username`, `password`) VALUES
(1, 'Root', '$2y$10$PxsdQPm5Ow1K5AVWwNxbX.IUb7ltZOu.2MNcWGodZK/YbkYPmrp3O'),
(2, 'Jason', '$2y$10$msV8RRSQzvKOqmfdcSm.EeiU/6IlxnwNMdxOSqRki9IrLcgtYLKzq'),
(3, 'xxx', '$2y$10$YMWZFw4ttOw8pouzW1Vnyu7qPfjsoyGOO5kZ3/Inn5CcxcCLtdbBe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_bookauthor`
--
ALTER TABLE `t_bookauthor`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `t_bookgenre`
--
ALTER TABLE `t_bookgenre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `t_booklang`
--
ALTER TABLE `t_booklang`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `t_books`
--
ALTER TABLE `t_books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_author` (`book_author`),
  ADD KEY `book_lang` (`book_lang`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_bookauthor`
--
ALTER TABLE `t_bookauthor`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `t_bookgenre`
--
ALTER TABLE `t_bookgenre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_booklang`
--
ALTER TABLE `t_booklang`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_books`
--
ALTER TABLE `t_books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_books`
--
ALTER TABLE `t_books`
  ADD CONSTRAINT `book_author` FOREIGN KEY (`book_author`) REFERENCES `t_bookauthor` (`author_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `book_lang` FOREIGN KEY (`book_lang`) REFERENCES `t_booklang` (`language_id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
