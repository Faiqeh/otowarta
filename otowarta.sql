-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 01:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otowarta`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(32, 'Toyota'),
(33, 'Daihatsu'),
(34, 'Honda'),
(35, 'Suzuki'),
(38, 'Mitsubishi'),
(39, 'Hyundai');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_tittle` text NOT NULL,
  `news_desc` text NOT NULL,
  `news_img` text NOT NULL,
  `news_category` int(11) NOT NULL,
  `news_author` int(11) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_tittle`, `news_desc`, `news_img`, `news_category`, `news_author`, `news_date`) VALUES
(60, 'GIIAS Semarang 2022 : Suzuki Hadirkan Promo Menarik Serta Test Drive Berhadiah', 'Meramaikan rangkaian terakhir GAIKINDO Indonesia International Auto Show (GIIAS) 2022 di Kota Semarang, PT Suzuki Indomobil Sales (PT SIS) ikut serta dalam pameran otomotif yang berlangsung pada 23 – 27 November tersebut. Mengusung tema booth “Urban City Lifestyle“, Suzuki turut memamerkan 3 mobil andalannya yaitu all new Ertiga Hybrid, Baleno, maupun Jimny. \r\n\r\n“Daerah Jawa Tengah, khususnya Kota Semarang merupakan salah satu daerah yang memiliki catatan penjualan mobil Suzuki yang positif. Oleh karena itu, Kami sangat menyambut baik partisipasi Suzuki di pameran otomotif GIIAS Semarang,” terang Donny Saputra, 4W Marketing Director PT SIS. Suzuki sendiri telah menyiapkan unit test drive all new Ertiga Hybrid dan new Baleno untuk bisa dirasakan langsung oleh pengunjung.\r\n\r\nPada gelaran GIIAS Semarang 2022 kali ini, Suzuki menawarkan berbagai program penjualan menarik hingga test drive berhadiah. Untuk calon pelanggan yang melakukan pembelian mobil Suzuki Indonesia tipe apapun, akan mendapatkan keuntungan seperti DP ringan 5%, Rate Bunga mulai 2,24%, pilihan tenor kredit 8 tahun, hingga hadiah langsung berupa e-money dan BBM senilai jutaan rupiah. \r\n\r\nSeperti pembelian Suzuki all new Ertiga Hybrid, new Carry Pick Up, Baleno, Ignis, dan S-Cross, konsumen berhak mendapatkan hadiah langsung e-money senilai Rp 1 juta dan gratis BBM senilai Rp 1 Juta (khusus Baleno M/T). Lalu untuk pembelian Suzuki all new Ertiga GX M/T, calon pelanggan berhak mendapatkan e-money senilai Rp 1,5 Juta dan gratis BBM senilai Rp 1,5 Juta. \r\n\r\nLalu khusus pembelian Suzuki XL-7 Black Edition, calon pelanggan akan mendapatkan hadiah langsung berupa e-money senilai Rp 2,5 Juta dan gratis BBM senilai Rp 2,5 Juta. Tak hanya itu, bagi pengunjung yang mengikuti test drive bisa mendapatkan souvenir Suzuki secara langsung bahkan berkesempatan untuk memenangkan sepeda motor Suzuki Nex II dan beragam hadiah yang diundi setiap bulannya. \r\n\r\n“Kami berharap dengan partisipasi Suzuki di GIIAS Semarang 2022 pengunjung bisa mendapatkan pengalaman berkesan saat berkunjung ke booth Suzuki dan memudahkan pengunjung yang berdomisili di wilayah Jawa Tengah dan sekitarnya untuk mendapatkan kendaraan impiannya dari Suzuki,” tutup Donny.', '553dc1c044cedbc2ba6ff15e8c142c93.jpg', 35, 3, '2022-11-24 03:06:46'),
(61, 'Sepanjang Tahun 2022, Penjualan Daihatsu Indonesia Telah Meningkat 33%', 'Penjualan otomotif nasional di tahun 2022 ini mengalami pertumbuhan yang sangat positif. Bahkan, kabar baiknya tidak berhenti sampai di sana saja, sejumlah gelaran otomotif hingga munculnya produk baru pun banyak kita temui hingga bulan ke 11 tahun 2022 ini. Daihatsu Indonesia pun mencatatkan hal serupa, dimana penjualan mereka sepanjang tahun 2022 ini berhasil naik signifikan di angka 33%. Yuk kita bahas lebih lanjut. \r\n\r\nDalam 10 bulan pertama di tahun 2022, penjualan otomotif nasional berhasil mencatatkan angka 822 ribu unit atau naik sekitar 21% ketimbang tahun lalu. FYI, di periode yang sama tahun 2021 silam, pasar otomotif Indonesia hanya mencatatkan penjualan sebanyak 677 ribu unit saja. Bagaimana dengan Daihatsu? Selama tahun 2022 ini, Daihatsu cukup konsisten meraih peningkatan penjualan di atas capaian nasional. Dari Januari hingga Oktober 2022, Daihatsu membukukan penjualan ritel di angka 157.327 unit atau meningkat 33% dari tahun lalu. \r\n\r\nBerkat peningkatan penjualan yang lebih tinggi ketimbang capaian nasional, Daihatsu berhasil meningkatkan marketshare mereka yang awalnya hanya 17,4% di bulan Oktober 2021 silam menjadi 19,1% di bulan Oktober tahun ini. Model apa yang paling laris di Daihatsu Indonesia? Tentu kalian sudah paham. Yap, apa lagi kalau bukan Daihatsu Sigra dan Daihatsu GranMax Pickup. Keduanya berhasil mencatatkan penjualan ritel di angka 38.628 unit untuk Daihatsu Sigra dan 37.713 unit untuk Daihatsu GranMax Pickup. Kontribusi keduanya mencapai 48,6% dari total penjualan Daihatsu di Indonesia. \r\n\r\nKalau diperhatikan, penjualan wholesales Daihatsu juga tidak terpaut jauh dari ritelnya. Penjualan wholesales Daihatsu Indonesia mencapai 157.886 unit atau lebih banyak 500 unit saja ketimbang ritelnya. “Daihatsu bersyukur dapat mempertahankan penjualan dengan capaian positif. Raihan ini bahkan masih melebihi capaian Daihatsu pada periode yang sama tahun 2019 lalu sebelum pandemi Covid-19 terjadi. Semoga raihan positif ini terus berlanjut, serta pasar otomotif dapat lebih baik dibandingkan sebelumnya,” ujar Hendrayadi Lastiyoso, Marketing & Customer Relations Division Head PT Astra International Daihatsu Sales Operation (AI-DSO). ', '979bd184ef72eb76d65f88724c076c4d.jpg', 33, 3, '2022-11-10 06:15:13'),
(62, 'Honda ZR-V Mulai Dijual Pada April 2023 Di Jepang', 'Honda Motor Co., Ltd. mengumumkan rencana penjualan untuk model Honda ZR-V mulai bulan April 2023 di Jepang. Model ini sebelumnya diperkenalkan untuk pertama kali di dunia pada bulan September 2022 lalu. Mobil ini mengambil model Honda HR-V versi Amerika, sebagaimana yang kita tahu, Honda HR-V model Amerika dengan model untuk pasar Asia, Eropa, dan Australia menerapkan model yang berbeda. \r\n\r\nDimensi dari Honda ZR-V memiliki panjang 4567mm, lebar 1839 mm, tinggi 1610 mm dan wheelbase 2654mm (mengambil acuan dari Honda HR-V versi USDM). Bila dilihat dari ukurannya, Mobil ini akan bersaing dengan Toyota Corolla Cross, Mazda CX-30, dan Mitsubishi Eclipse Cross. Sayangnya pihak Honda belum mengungkap harga dari Honda ZR-V ini, namun diperkirakan tidak akan berbeda jauh dari kompetitor yang disebutkan tadi. \r\n\r\nInteriornya menggunakan warna maroon dengan desain ala honda terkini seperti pada Honda Civic atau CR-V terbaru. Terlihat dari adanya aksen honeycomb pada kisi ac. Dari segi entertainment, Honda ZR-V juga dilengkapi dengan 12 buah speaker dari BOSE Premium Sound System. Untuk ruang kargonya dilengkapi dengan fitur Power Tailgate yang memudahkan pemilik mobil untuk memasukkan dan mengeluarkan barang bawaan. \r\n\r\nHonda ZR-V mempunyai dua pilihan varian mesin bensin berkapasitas 1.5 liter turbo dengan transmisi CVT. Selain itu juga ada pilihan mesin hybrid yaitu Sports e: HEV berkapasitas 2.0 liter direct injection segaris dengan two-motor hybrid system. Honda ZR-V juga terdapat fitur real-time AWD yang dapat digunakan di berbagai kondisi jalan. Selain itu untuk menambah aspek fun to drive, Honda ZR-V mempunyai empat mode berkendara yaitu; Normal, ECON, Sport dan Snow. \r\n\r\nHonda ZR-V menampilkan tujuh pilihan warna mulai dari warna baru yaitu seperti yang terpampang pada gambar di atas Premium Crystal Garnet Metallic dan Nordic Forest Pearl (seperti sonic grey tapi lebih gelap). Selain itu terdapat juga pilihan lainnya seperti Platinum White Pearl, Super Platinum Grey Metallic, Crystal Black Pearl, Platinum Crystal Blue Metallic dan Midnight Blue Beam Pearl. Akankah Honda ZR-V juga akan masuk Indonesia? bagaimana menurut kalian? sampaikan di kolom komentar. ', '7784aeb294e046513c2e8f9d585040a9.jpg', 34, 2, '2022-11-22 01:22:29'),
(63, 'Honda Civic E: HEV Raih Penghargaan Tingkat Keselamatan Terbaik Di Euro Ncap', 'Honda Civic e:HEV berhasil meraih penghargaan untuk tingkat keselamatan terbaik dari Euro Ncap di tahun 2022 ini. Honda Civic e: HEV berhasil memenuhi kriteria dari seluruh rangkaian tes uji tabrak dari EURO NCAP yang meliputi empat bagian. Mulai dari Adult Occupant dengan nilai 89%, Child occupant dengan nilai 87%, Vulnerable Road Users dengan nilai 82%, dan Safety Assist dengan nilai 83%. \r\n\r\nHonda Civic e: HEV dilengkapi dengan sejumlah pembaruan. Mulai dari bagian floor serta resin bulkhead yang dapat meredam tumbukan dari sisi depan serta meminimalisir deformasi pada mobil. Selain itu juga additional front door stiffeners dan rear wheel arch frames yang berguna untuk meredam tumbukan dari sisi samping. Untuk sisi pedestrian safety ada front bumper beam safety plates yang didesain mampu meredam energi ketika terjadi tumbukan kemudian juga mengurangi resiko cedera pada pejalan kaki. \r\n\r\nUntuk bagian dalam kendaraan, semua varian Honda Civic e: HEV dilengkapi 11 airbag mulai dari knee airbag di bagian (pengemudi dan penumpang depan, side airbag di bagian depan & kabin belakang, dan front center airbag yang pertama kali diperkenalkan oleh Honda. Front center airbag berguna untuk melindungi penumpang depan dan juga pengemudi berbenturan satu sama lain ketika terjadi tumbukan pada kendaraan dari bagian samping. Selain itu untuk perangkat ISOFIX nya kini telah menggunakan integrated ISOFIX mounting points yang sudah sesuai dengan standar European i-Size. \r\n\r\nFitur keselamatan lainnya yang terdapat pada Honda Civic e: HEV adalah Honda SENSING yang dilengkapi dengan new sonar sensors yang dapat mendeteksi objek non metal seperti kaca dan tembok. Selain itu juga dilengkapi dengan 100-degree view camera yang dapat mengidentifikasi lebih akurat mulai dari marka jalan, tepi jalan, sepeda motor, sepeda, dan pejalan kaki dalam kondisi lingkungan yang terang maupun gelap. \r\n\r\nHonda Civic menjadi model Honda ketiga di kawasan Eropa yang berhasil meraih predikat tingkat keselamatan terbaik lima bintang dari EURO NCAP setelah Honda CR-V dan Honda Jazz. Honda akan terus menyediakan kendaraan yang aman dan dapat diandalkan, serta memimpin upaya untuk mewujudkan nol kematian akibat tabrakan lalu lintas yang melibatkan sepeda motor dan mobil Honda secara global pada tahun 2050. ', 'e540510a14897bfbfe41ef24e811c09a.jpg', 34, 2, '2022-11-23 01:47:54'),
(64, 'Tim Mitsubishi Ralliart Siap Berlaga Di Asia Cross Country Rally!', 'Mitsubishi Motors Corporation (MMC) mengumumkan bahwa Tim Mitsubishi Ralliart akan berkompetisi di ajang Asia Cross Country Rally (AXCR). Tentunya dengan dukungan teknis dari Mitsubishi Motors dan belum lama ini telah mengumumkan susunan tim untuk AXCR 2022 mendatang. Asia Cross Country Rally sendiri akan diadakan dari tanggal 21-26 November 2022 mendatang di Thailand dan Kamboja. \r\n\r\nTim Mitsubishi Ralliart telah melakukan tes ketahanan mobil reli Mitsubishi Triton sejauh 1.100 km di trek balap off-road Grand Prix Motor Park di Kanchanaburi, Thailand dari 29-31 Agustus lalu. Mereka telah melakukan penyesuaian dengan mengurangi bobot dan meng-upgrade karakteristik output dari engine untuk meningkatkan kemampuan berkendara. Selain itu, dual damper baru juga ditambahkan demi meningkatkan kinerja stabilitas kendaraan, mengingat jalur yang akan dihadapi merupakan medan kasar. \r\n\r\nDari Tim Mitsubishi Ralliart, ada Rifat Sungkar (Indonesia), pemenang Indonesian Sprint Rally Championship, dan Chayapon Yotha (Thailand), yang telah memenangkan Thailand Autocross Championship. Mereka akan mengendarai dua mobil reli Mitsubishi Triton di kategori Grup T1 (prototipe kendaraan lintas alam) dan bersaing untuk posisi yang lebih tinggi. Sakchai Hantrakul (Thailand) yang sangat berpengalaman akan mendukung mereka dengan mobil ketiga, dengan sebuah Mitsubishi Triton sebagai mobil. \r\n\r\n“Ini merupakan suatu kesempatan besar dalam hidup saya karena ini tidak disangka-sangka. Matsuoka-san menghubungi melalui Mitsubishi Indonesia menyatakan kembalinya Mitsubishi ke motorsport,” kata Rifat Sungkar saat media interview MMKSI AXCR 2022 di Jakarta (1/11). Kemudian beliau juga menambahkan, “Saya belum pernah mengikuti ajang ini. Harapan saya besar, saya dulu punya poster tim motorsport Mitsubishi, kini saya menjadi salah satu bagian dari mereka. Soal menang atau kalah, bagi saya ini kemenangan karena berhasil mewujudkan mimpi saya.” ', 'ca174e49d9950136660a9f9928e625f4.jpg', 38, 2, '2022-11-02 03:50:44'),
(65, 'Hyundai Gelar Commemorative Exhibition dengan Genesis Electrified G80', 'PT Hyundai Motors Indonesia (HMID) menggelar commemorative exhibition kendaraan resmi eks G20 Summit dari Hyundai. Pameran ini berlangsung dari tanggal 23 – 27 November 2022 di Ashta District 8, SCBD. Pada kesempatan ini, Hyundai menghadirkan Genesis Electrified G80 Special Edition Long- Wheelbase, Genesis Electrified G80 Regular Model Standard-Wheelbase, dan Hyundai IONIQ 5. Pameran ini diselenggarakan untuk memperingati keberhasilan G20 Summit 2022 yang diselenggarakan oleh Pemerintah Indonesia. \r\n\r\nDalam acara ini, para pengunjung berkesempatan untuk melihat secara langsung tampilan eksterior dan interior dari kendaraan resmi eks G20 Summit. Seperti Genesis Electrified G80 Special Edition Long-Wheelbase, yang didesain khusus dengan logo G20 pada pilarnya dan belum pernah ditampilkan secara langsung ke publik. Hyundai juga menghadirkan Genesis Electrified G80 Regular Model Standard-Wheelbase dan Hyundai IONIQ 5 yang digunakan untuk G20 Summit. \r\n\r\nSelama perhelatan G20 Summit, sebanyak 44 unit Genesis Electrified G80 Special Edition Long-Wheelbase digunakan sebagai kendaraan Kepala Negara, sedangkan 87 unit Genesis Electrified G80 Regular Model Standard-Wheelbase dan 262 unit Hyundai IONIQ 5 digunakan untuk keperluan lain seperti kendaraan untuk pasangan dari Kepala Negara, rombongan delegasi, protokol, keamanan, dan tim penyelamat. Secara keseluruhan, kendaraan-kendaraan ini merupakan jumlah unit terbesar yang didukung oleh brand otomotif yang turut menyukseskan perhelatan G20 Summit.  \r\n\r\nGenesis Electrified G80 Special Edition Long-Wheelbase sendiri dibekali dengan baterai lithium-ion berkapasitas 87.2 kWh. Dapat menghasilkan tenaga maksimal sebesar 272 kW (370 PS) dari motor penggerak depan dan belakang. Kendaraan listrik mewah ini dapat mencapai kecepatan maksimal 225 km/jam dengan jarak tempuh hingga 500 km dalam sekali pengisian. Memiliki panjang keseluruhan 5.222 mm dengan wheelbase 3.227 mm, dan lebar keseluruhan 1.925 mm. \r\n\r\nCiri khas dari Genesis Electrified G80 Special Edition Long-Wheelbase terdapat pada eksterior dengan ukuran lebih panjang, yang dapat dilihat dari sisi samping kendaraan. Serta penambahan panjang wheelbase hingga 217 mm dibandingkan dengan versi Genesis Electrified G80 Regular Model Standard-Wheelbase. ', '1ab286ba2af4638ddbbc2ab76dce68f3.jpg', 39, 1, '2022-11-24 09:12:20'),
(66, 'Hyundai Tandatangani MoU di Bidang Advanced Air Mobility', 'Hyundai Motor Group menandatangani MoU dengan Otoritas Ibu Kota Nusantara (OIKN) untuk bekerja sama membangun ekosistem mobilitas Advanced Air Mobility (AAM) di Indonesia. MoU tersebut dilakukan pada saat perhelatan B20 Summit di Bali Nusa Dua Convention Center, Indonesia. Penandatangan MoU tersebut dihadiri oleh Jaiwon Shin, President and Head Urban Air Mobility Division Hyundai Motor Group bersama dengan Bambang Susantono, Kepala Otoritas Ibu Kota Nusantara (OIKN). \r\n\r\nPenandatanganan ini bertujuan untuk memperkenalkan Advanced Air Mobility (AAM) sebagai bagian dari smart mobility ecosystem di ibu kota baru yang sedang dibangun. Hyundai Motor Group berencana untuk mengembangkan roadmap dan meninjau konsep mobilitas yang terkonsolidasi untuk darat dan udara saat melaksanakan proyek demonstrasi AAM dan uji penerbangan. Hyundai berharap dapat membantu meningkatkan mobilitas penduduk kepulauan dengan membangun ekosistem AAM secara efisien dengan memanfaatkan infrastruktur penerbangan dan kemampuan teknologi terdepan. \r\n\r\n“Penerapan Advanced Air Mobility di Nusantara sesuai dengan semangat OIKN sebagai ‘laboratorium hidup’ di Indonesia yang terbuka bagi berbagai potensi untuk menciptakan budaya kerja, belajar, dan gaya hidup baru. Kami mengapresiasi kerja sama dengan Hyundai Motor Group untuk mendukung pengembangan IKN sebagai kota cerdas dan berkelanjutan.” ujar Bambang Susantono, Kepala Otoritas Ibu Kota Nusantara. \r\n\r\nHyundai Motor Group juga berencana membangun ekosistem AAM global di luar kawasan Asia Tenggara berdasarkan pencapaiannya di Indonesia. “Visi penerapan AAM adalah untuk menciptakan sistem transportasi udara yang aman, mudah diakses, ter otomatisasi, dan terjangkau. Hal ini guna mencapai masa depan yang lebih baik, sehingga generasi mendatang dapat memiliki kualitas hidup yang lebih baik,” ujar Shin. \r\n\r\nHyundai Motor Group mengumumkan roadmap pengembangan AAM, yang mencakup segmen Urban Air Mobility (UAM) dan Regional Air Mobility (RAM). Awal tahun ini sedang berupaya untuk mengembangkan solusi mobilitas udara ramah lingkungan. Unit Supernal Hyundai Motor Group yang berbasis di Amerika Serikat bertujuan untuk memulai layanan UAM di Amerika Serikat pada tahun 2028, sementara Hyundai Motor Group berencana untuk meluncurkan layanan RAM pada tahun 2030-an.', '005b9b6b96f9281efc469be43e8fe92a.jpg', 39, 1, '2022-11-15 07:56:00'),
(67, 'Bedah Fitur & Harga Tiap Tipe All New Toyota Kijang Innova Zenix Hybrid', 'Setelah sebelumnya kami membedah perbedaan dari tiap tipe dari All New Toyota Kijang Innova Zenix versi non hybrid, maka kali ini kami akan melanjutkannya di tipe Hybrid. Berbeda dengan tipe non hybrid yang hanya ada 2 tipe saja, All New Toyota Kijang Innova Zenix berteknologi hybrid punya lebih banyak tipe. Mulai dari tipe G, V, V Modellista, Q, hingga Q Modellista. Dan kali ini, kami akan bedah apa saja perbedaan fitur dan harganya. Cekidot. \r\n\r\nSebelum membahas lebih jauh mengenai perbedaan kelengkapan di semua tipe hybridnya, patut diketahui bahwa All New Toyota Kijang Innova Zenix menggunakan teknologi hybrid generasi ke-5 Toyota. Mesin yang digunakan adalah mesin 2.000cc M20A-FXS yang merupakan mesin hybrid dari Toyota Corolla Cross, Toyota Corolla, dan Toyota C-HR yang dijual di Eropa. Berbeda dengan mesin hybrid ketiga mobil tersebut di Asia Tenggara yang menggunakan kubikasi 1.800cc. All New Toyota Kijang Innova Zenix bermesin hybrid dipasarkan mulai 458 jutaan Rupiah di Indonesia. \r\n\r\nOke, kita mulai dengan tipe G HEV yang membuat All New Toyota Kijang Innova Zenix menjadi mobil hybrid rakitan lokal termurah yang dijual saat ini. Sama seperti tipe G non Hybrid, All New Toyota Kijang Innova Zenix tipe G HEV menggunakan velg 16 inci dengan ban 205/65 R16. Kelengkapan standar seperti ABS, VSC, HSA, ISOFIX, EPB + Brake Hold, sensor dan kamera parkir, serta 2 buah airbags sudah diberikan. Dibanginkan tipe non hybrid, tipe ini mendapatkan fitur Vehicle Approach Notice. Dashboard di tipe G HEV ini sudah dual tone, ada head unit 9 inci dan MID 7 inci. Berhubung varian ini berteknologi hybrid, maka sudah ada opsi EV Mode serta driving mode ECO dan Power. \r\n\r\nKita naik ke tipe V, dimana di tipe ini kalian akan mendapatkan semua fitur yang sudah ada di All New Toyota Kijang Innova Zenix tipe G. Bedanya, di tipe ini ada tambahan kelengkapan seperti velg yang jadi 17 inci, dual rear seat entertainment berukuran 10 inci, dan head unit 10 inci. Oiya, ada juga tambahan ambient light serta panoramic retracable roof. Yap, yang terakhir kami sebut merupakan yang paling menarik. Sayanynya, tipe V masih belum mendapatkan TSS 3.0. Tapi, di tipe ini ada opsi body kit modellista yang akan merogoh kocek lebih dalam 10 jutaan Rupiah. Jadi, sesuaikan saja dengan selera kalian. \r\n\r\nDan sampailah kita di top of the line All New Toyota Kijang Innova Zenix yaitu tipe Q HEV. Tentunya, kalian akan mendapatkan semua kelengkapan di tipe V, plus tambahan fitur yang menggiurkan. Mulai dari Toyota Safety Sense 3.0 yang berisikan fitur seperti Pre Colision System, Lane Deparuture Alert, Lane Tracing Assist, Dynamic Radar, Cruise Control, dan Automatic High Beam. Selain itu, tipe Q HEV juga dilengkapi dengan DVR, dan Blind Spot Monitoring. Untuk kenyamanan, bangku baris kedua di tipe ini dibekali kursi model captain seat dengan ottoman yang semi elektronis. Kursi dan setirnya juga sudah dilapis kulit, ada wireless charger dan paddle shift. Power back door dengan voice command juga ada di tipe ini lho. Oiya, opsi modellista juga ditawarkan di tipe ini. ', 'e737a40d49a55202c7dc441716b7e616.jpg', 32, 1, '2022-11-22 10:04:32'),
(68, 'All New Toyota Kijang Innova Zenix Mengaspal di Surabaya, SPK Menumpuk!', 'Setelah resmi melakukan world premiere di Jakarta pada hari senin kemarin, All New Toyota Kijang Innova Zenix langsung bergerak menuju ke daerah – daerah lain dan melakukan seremonial peluncuran. Kali ini, All New Toyota Kijang Innova Zenix diluncurkan secara perdana pada publik Jawa Timur melalui seremonial di Pakuwon Mall Surabaya. Lantas, seperti apa perkenalan All New Toyota Kijang Innova Zenix di Surabaya kali ini? Yuk kita bahas. \r\n\r\nJadi, Toyota Astra Motor (TAM) bersama jaringan diler mereka di Jawa Timur seperti Auto2000, Liek Motor, Asri Motor, dan Arina Toyota meluncurkan All New Toyota Kijang Innova Zenix untuk publik Jawa Timur. Dalam kesempatan ini, pihak Toyota juga mempublikasikan harga resmi Zenix di kawasan Jawa Timur. All New Toyota Kijang Innova Zenix dijual di Surabaya dengan banderol mulai 426,8 jutaan Rupiah untuk tipe G CVT Gasoline dan 474,6 jutaan Rupiah untuk tipe V CVT Gasoline. Sedangkan All New Toyota Kijang Innova Zenix berteknologi hybrid dibanderol mulai 465,7 jutaan Rupiah untuk tipe G dan 539,4 jutaan Rupiah untuk tipe V. \r\n\r\nTipe tertinggi yaitu All New Toyota Kijang Innova Zenix Q Modellista dijual dengan banderol 618 jutaan Rupiah. Dibandingkan harga di Jakarta, All New Toyota Kijang Innova Zenix dipasarkan lebih mahal 7 jutaan Rupiah. Untuk pangsa pasar Jawa Timur sendiri, Toyota Astra Motor (TAM) menargetkan penjualan All New Toyota Kijang Innova Zenix sebanyak 700 hingga 750 unit per bulannya. Pihak Toyota sendiri cukup percaya diri dengan kehadiran All New Toyota Kijang Innova Zenix, terutama varian Hybrid. Regional Business Division Head Auto2000, Judianto menyatakan bahwa 70% dari total SPK yang didapatkan merupakan tipe bermesin Hybrid. \r\n\r\nPihak Toyota pun telah menyiasati perpindahan konsumen dari opsi mesin diesel ke opsi berteknologi Hybrid. Toyota menyatakan bahwa All New Toyota Kijang Innova Zenix bermesin hybrid menawarkan konsumsi BBM yang lebih irit dengan tenaga yang lebih besar ketimbang varian mesin diesel yang ada di old Innova. “Bahkan opsi mesin gasoline kami yang baru punya tenaga yang lebih mumpuni ketimbang Toyota Innova Diesel yang lama” ujar Judianto. All New Toyota Kijang Innova Zenix juga dibekali dengan teknologi Hybrid generasi kelima yang kini menggunakan transaxle baru yang lebih kompak dan lebih ringan, lalu baterai yang lebih tahan panas dan motor listrik yang lebih bertenaga. \r\n\r\nSelain itu, All New Toyota Kijang Innova Zenix juga menggunakan Toyota Safety Sense (TSS) generasi ketiga yang kini lebih ditingkatkan peformanya. TSS di Toyota Innova Zenix meliputi dynamic radar cruise control, pre collision system, lane tracing assist, lane tracing alert, dan blind spot monitoring. Di hari pertama dipajang di Pakuwon Mall Surabaya, All New Toyota Kijang Innova Zenix langsung mengundang banyak pengunjung. Mobil ini akan dipamerkan di Pakuwon Mall hingga besok, 27 November 2022. Bagi kalian yang ingin mencoba, Toyota juga menyediakan unit test drive All New Toyota Kijang Innova Zenix tipe Q Modellista Hybrid. Bagaimana menurut kalian?', 'df78129f065d409f66b900ba1ca81b32.jpg', 32, 1, '2022-11-26 04:01:11'),
(69, 'All New Toyota Kijang Innova Zenix, Puncak Evolusi Kijang untuk Era Baru', 'Pada hari Senin 21/11, PT Toyota Astra Motor meluncurkan generasi terbaru dari legenda mereka, Toyota Kijang. Toyota All New Kijang Innova Zenix alias Kijang generasi ke-7 di Indonesia mengalami perubahan mendasar yang sangat menyeluruh. Salah satunya adalah platform TNGA: GA-C dengan struktur monocoque yang menggantikan struktur ladder-on-frame. Selain itu, ini juga kali pertama mesin hybrid masuk kedalam jajaran Toyota Kijang. \r\n\r\nDilengkapi mesin TNGA 2.0L berkode M20A-FKS Dynamic Force Engine berkapasitas 1.987 cc 4 silinder Dual VVT-i. Menghasilkan tenaga 174 PS pada 6.600 rpm dan torsi 20,9 Kgm pada 4.500-4.900 rpm. Sementara yang versi Hybrid menggunakan TNGA 2.0L berkode M20A-FXS yang menghasilkan tenaga 152 PS pada 6.000 rpm dan torsi 19,1 Kgm pada 4.400-5.200 rpm. Diperkuat oleh motor listrik berdaya 113 PS dan torsi 21 Kgm sehingga menghasilkan tenaga gabungan 186 PS. \r\n\r\nAll New Kijang Innova Zenix tersedia dalam tujuh (7) grades yang dibagi menjadi 3 grade yaitu Q, V dan G. Pada grade Q dan V 2.0 HV tersedia pilihan Modellista sebagai styling package tambahan. Di grade G dan V, terdapat dua pilihan mesin yaitu bensin dan Hybrid EV. Hal ini menjadikan Toyota All New Kijang Innova Zenix sebagai model Toyota pertama di Indonesia yang memiliki pilihan mesin Hybrid EV di setiap grade. \r\n\r\nTidak berhenti di situ, Toyota Kijang Innova Zenix juga dibekali dengan berbagai fitur-fitur terbaru yang belum pernah ada sebelumnya di jajaran Kijang. Seperti Panoramic Retractable Roof (Q & V HV), Captain Seat with Ottoman (Q HV), 10” Head Unit with Smartphone Connectivity (Q & V HV), 10” Dual Rear Seat Entertainment (Q & V), teknologi berbasis telematika T Intouch, hingga advanced safety technology Toyota Safety Sense (TSS) 3.0 (Q HV). \r\n\r\nSekarang kita beralih ke Harganya, dimulai dari yang paling murah dulu. Tipe G Bensin dibanderol dengan harga Rp 419 juta, sementara versi hybrid dibanderol Rp 458 Juta. Lalu untuk tipe V dibanderol dengan harga Rp 467 juta untuk versi bensin dan 532 juta untuk versi Hybrid. Untuk tipe Q sebagai flagship hanya tersedia dalam pilihan mesin hybrid dibanderol Rp 611 juta. Semuanya dalam kondisi on the road Jakarta dan semuanya sudah dilengkapi dengan transmisi otomatis CVT, tidak ada lagi opsi transmisi manual.', '99905cec9991e0b8e678182a6633d1bc.jpg', 32, 1, '2022-11-21 08:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Faiqi Nabil', 'faiqi@gmail.com', 'faiqi123'),
(2, 'Sayyida Shofiah', 'shofiah@gmail.com', 'shofiah123'),
(3, 'Shakilla Zalfa', 'zalfa@gmail.com', 'zalfa123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_category` (`news_category`),
  ADD KEY `news_author` (`news_author`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`news_category`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`news_author`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
