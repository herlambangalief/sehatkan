-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2024 pada 10.58
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sehatkan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `tipe_akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id_akses`, `tipe_akses`) VALUES
(1, 'admin'),
(2, 'dokter'),
(5, 'pasien');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `foto_artikel` text NOT NULL,
  `judul_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL,
  `id_kategori_artikel` int(11) NOT NULL,
  `tingkat` varchar(30) NOT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `foto_artikel`, `judul_artikel`, `isi_artikel`, `id_kategori_artikel`, `tingkat`, `id_dokter`, `status`) VALUES
(9, 'rasakan-wanginya-manfaat-daun-kemangi-yang-begitu-beragam-1574754742.jpg', 'Rasakan Wanginya Manfaat Daun Kemangi', '<div>Manfaat daun kemangi untuk kesehatan\r\n\r\nLain kali, saat ada lalapan terhidang di depan Anda, jangan hanya didiamkan. Ambil daun-daun hijau yang ada di piring, dan rasakan berbagai manfaat daun kemangi untuk kesehatan, seperti di bawah ini. <br></div><div><br></div><div>1. Mengandung banyak nutrisi yang baik untuk tubuh\r\n\r\nDaun kemangi mengandung vitamin A yang penting untuk perkembangan dan menjaga sistem imun di tubuh. Selain itu, tanaman ini juga mengandung vitamin K yang penting dalam proses penggumpalan darah.\r\n\r\nDaun kemangi juga mengandung kalium yang berperan dalam mengatur tekanan darah, mangan untuk mengatur fungsi otak dan saraf, serta magnesium yang berfungsi mengatur fungsi otot, jantung, dan saraf. <br></div><div><br></div><div>2. Berpotensi melawan kanker\r\n\r\nDaun kemangi, juga dipercaya berpotensi melawan kanker karena kandungan fitokimia yang ada di dalamnya begitu beragam. Daun ini dinilai dapat membantu pencegahan beberapa jenis kanker di antaranya kulit, hati, mulut, dan paru-paru. Meski begitu, penelitian lebih lanjut masih perlu dilakukan untuk memastikan manfaat daun kemangi yang satu ini. <br></div><div><br></div><div>3. Mengurangi efek yang timbul akibat stres oksidatif\r\n\r\nStres oksidatif adalah kerusakan sel yang terjadi akibat paparan radikal bebas. Saat jaringan mengalami stres oksidatif, maka berbagai penyakit bisa muncul.\r\n\r\nPada penelitan yang dilakukan pada hewan uji, konsumsi daun kemangi segar secara teratur selama 30 hari memberikan hasil yang positif. Sebab, setelah 30 hari, hewan uji tersebut mengalami penurunan kadar gula darah dan peningkatan aktivitas antioksidan, yang bisa mencegah stres oksidatif. <br></div><div><br></div><div>4. Mencegah penuaan dini\r\n\r\nPaparan radikal bebas berlebih, juga dapat menyebabkan penuaan dini. Oleh karena itu, mengonsumsi daun kemangi yang dinilai dapat menghambat dampak buruk radikal bebas, juga berpotensi mencegah penuaan dini. <br></div><div><br></div><div>5. Menggantikan zat besi yang hilang ketika haid\r\n\r\nAda baiknya Anda mengonsumsi daun kemangi saat sedang mengalami PMS atau pre-menstrual syndrome. Sebab, tanaman ini mengandung zat besi yang ada di dalamnya, bisa membantu menggantikan zat besi yang hilang selama Anda menstruasi. <br></div><div><br></div><div>6. Membantu mengurangi peradangan dan pembengkakan\r\n\r\nEkstrak daun kemangi juga dinilai efektif untuk membantu mengurangi peradangan dan pembengkakan di tubuh. Manfaat daun kemangi ini diketahui dari sebuah penelitian, yang menyebutkan bahwa mengoleskan ekstrak daun kemangi, bisa membantu mengurangi pembengkakan hingga 73%, pada 24 jam setelah penggunaan. Hal ini dikarenakan kandungan beta-caryophyllene dalam daun kemangi sebagai agen antiinflamasi. <br></div><div><br></div><div>7. Memiliki kandungan antibakteri\r\n\r\nDaun kemangi memiliki kandungan antibakteri dan dapat menghambat pertumbuhan beberapa jenis bakteri, di antaranya Listeria monocytogenes, Staphylococcus aureus, Escherecia Coli, dan Pseudomonas aeruginosa.\r\nKandungan nutrisi dalam daun kemangi\r\n\r\nManfaat daun kemangi yang begitu beragam, bisa didapatkan salah satunya dari kandungan nutrisi yang ada didalamnya. Dalam dua sendok makan kemangi segar yang sudah dipotong-potong, terkandung sekitar 27% vitamin K dari total rekomendasi konsumsi harian.\r\n\r\nTanaman ini juga mengandung vitamin A, mangan, dan magnesium yang baik untuk kesehatan Anda. Berikut ini kandungan nutrisi secara lengkap, yang ada dalam setiap 100 gram daun kemangi.\r\n\r\n    Energi: 22 Kkal\r\n    Serat: 1,6 gram\r\n    Protein: 3,15 gram\r\n    Vitamin B6: 0,155 mikrogram\r\n    Vitamin C: 18 miligram\r\n    Vitamin E: 0,80 gram\r\n    Kalsium: 177 miligram\r\n    Zat besi: 3,17 miligram\r\n    Fosfor: 56 miligram\r\n    Kalium: 295 miligram\r\n    Zinc: 0,81 miligram\r\n    Karbohidrat: 2,65 gram\r\n    Lemak: 0,64 gram\r\n    Air: 92,06 gram\r\n    Folat: 68 mikrogram</div>', 1, 'admin', NULL, 'disetujui'),
(14, 'mana-yang-lebih-aman-dikonsumsi-air-minum-isi-ulang-atau-air-keran-rebusan-1574829475.jpg', 'Mana yang Lebih Aman Dikonsumsi, Air Minum Isi Ulang atau Air Keran Rebusan? ', '<div><p><font size=\"2\">Dalam sehari setidaknya tubuh memerlukan 8 gelas air untuk menjaga tubuh Sumbernya bisa dari mana saja, air mineral di dalam galon, air minum isi ulang, atau ada juga yang memilih air keran rebusan.</font></p><p><font size=\"2\">Terkadang,\r\n pilihan air minum juga bisa terbatas dalam kondisi tertentu. Misalnya, \r\nsaat sebuah daerah mengalami bencana alam seperti banjir. Suplai air \r\nminum botol atau galon bisa terbatas, begitu pula dengan air minum isi \r\nulang. Satu-satunya pilihan bisa jadi adalah merebus air keran.</font></p><h2><font size=\"2\"><strong>Menganalisis air minum isi ulang vs air keran rebusan</strong></font></h2><p><font size=\"2\">Sudah\r\n sejak lama air keran rebusan dianggap sebagai air minum yang aman \r\ndikonsumsi. Bahkan, sebelum penjualan air minum isi ulang mulai marak. \r\nBelakangan, air minum isi ulang juga banyak dipilih karena harganya yang\r\n lebih terjangkau ketimbang air galon dengan merek tertentu.</font></p><p><font size=\"2\">Sekarang, kita bahas lebih jauh tentang keduanya:</font></p><ul><li><h3><font size=\"2\"><strong>Air minum isi ulang</strong></font></h3></li></ul><p style=\"padding-left: 30px;\"><font size=\"2\">Air\r\n minum isi ulang biasanya diproses dengan UV filter. Air yang melewati \r\nproses penyaringan ini akan berada pada frekuensi sehingga mikroba tidak\r\n bisa bertahan. Proses ini dapat membunuh kontaminan</font></p><p style=\"padding-left: 30px;\"><font size=\"2\">Meski\r\n demikian, ada banyak sekali jenis sistem UV filter yang digunakan oleh \r\npenyedia air minum isi ulang. Sebaiknya, pilih agen air minum isi ulang \r\nyang tersertifikasi dengan standar cukup baik sehingga bisa \r\nmenghilangkan setidaknya 99,99% virus, bakteri, dan jamur.</font></p><p style=\"padding-left: 30px;\"><font size=\"2\">Apabila\r\n ingin memasang sendiri filter di rumah, pastikan seluruh komponennya \r\nlengkap dan berfungsi dengan baik. Sampel air pun sebaiknya diuji oleh \r\nlaboratorium bersertifikat untuk tahu kandungan apa saja yang ada dalam \r\nair dari rumah Anda.</font></p><ul><li><h3><font size=\"2\"><strong>Air keran rebusan</strong></font></h3></li></ul><p style=\"padding-left: 30px;\"><font size=\"2\">Merebus air keran adalah cara yang digunakan untuk membunuh bakteri yang mungkin ada dari saluran air. Setiap rumah memiliki sumber air \r\nyang berbeda seperti PAM atau sumur. Teknik merebus air keran dapat \r\nmembunuh mikroorganisme penyebab penyakit seperti <em>giardia</em> dan <em>cryptosporidium</em>.</font></p><p style=\"padding-left: 30px;\"><font size=\"2\">Meski\r\n demikian, tidak selamanya merebus air keran bisa membunuh semua \r\nbakteri. Ada beberapa jenis bakteri yang tidak mati meskipun telah \r\nmelewati proses perebusan.</font></p><p style=\"padding-left: 30px;\"><font size=\"2\">Selain itu,\r\n klorin juga tidak hilang lewat proses perebusan air keran. Titik \r\npemanasan untuk membunuh klorin harus sangat tinggi daripada suhu yang \r\nbiasa digunakan untuk merebus air keran.</font></p><h2><font size=\"2\"><strong>Mana yang lebih baik?</strong></font></h2><p><font size=\"2\">Jika\r\n Anda memutuskan menggunakan air keran rebusan untuk konsumsi \r\nsehari-hari, pastikan sumbernya benar-benar aman. Ingat, tidak selamanya\r\n air yang terlihat bening bebas dari mikroorganisme berbahaya dan bahan \r\nkimia. Jangan merebus air yang dinyatakan tidak aman untuk dikonsumsi \r\nkarena tidak akan menghilangkan kandungan berbahayanya.</font></p><p><font size=\"2\">Namun \r\napabila Anda tidak memiliki akses yang mudah untuk mendapatkan air \r\nbersih, maka merebus air keran adalah cara yang paling efisien. Sebagian\r\n besar organisme tidak bisa bertahan ketika dipanaskan pada suhu 100 \r\nderajat Celsius.</font></p><p><font size=\"2\">Di sisi lain, selama masih ada akses untuk \r\nmendapatkan air yang telah melalui proses penyaringan seperti air minum \r\nisi ulang, ini bisa jadi pilihan yang lebih baik. Tapi, cari tahu \r\nterlebih dahulu sistem penyaringan UV filter seperti apa yang digunakan \r\noleh penyedianya. Lihat juga seberapa steril prosesnya dilakukan.</font></p><p><font size=\"2\">Terlepas\r\n dari sumber air mana yang Anda konsumsi baik itu air minum isi ulang \r\nmaupun air keran rebusan, pastikan selalu memenuhi kebutuhan air dalam \r\nsehari.<em> </em>&nbsp; \r\n<br></font></p>\r\n</div>\r\n', 1, 'admin', NULL, 'disetujui'),
(17, 'berkenalan-dengan-witch-hazel-dan-manfaatnya-untuk-kulit-wajah-1574770642.jpg', 'Berkenalan dengan Witch Hazel dan Manfaatnya untuk Kulit Wajah ', ' <p><font color=\"#000000\">Para pecinta <em>skincare</em> mungkin sudah tidak asing lagi dengan witch hazel, yang sering digunakan sebagai <em>toner</em> wajah. Dengan segudang manfaatnya untuk mengatasi berbagai masalah kulit, wajar jika witch hazel begitu populer.</font></p><p><font color=\"#000000\">Kenali apa itu witch hazel dan khasiatnya yang telah dirasakan oleh banyak orang.</font></p><h2><font color=\"#000000\"><strong>Apa itu witch hazel?</strong></font></h2><p><font color=\"#000000\">Witch\r\n hazel adalah tanaman yang dipercaya memiliki khasiat medis, terutama \r\nuntuk kulit dan kecantikan. Tanaman ini memiliki beberapa spesies, namun\r\n jenis Hamamelis virginiana yang awalnya digunakan oleh masyarakat \r\nAmerika Utara, kini sudah melanglang buana.</font></p><p><font color=\"#000000\">Saat ini, daun dan \r\nkulit kayu dari witch hazel diolah menjadi toner, teh, dan salep yang \r\ndigunakan untuk mengatasi berbagai masalah kesehatan. Manfaat witch \r\nhazel yang paling terkenal adalah untuk menangani masalah kulit wajah, \r\ntermasuk <a href=\"https://www.sehatq.com/artikel/mengenal-jerawat-dan-berbagai-penyebabnya\" target=\"_blank\" rel=\"noopener\">jerawat</a> dan luka bakar.</font></p><h2><font color=\"#000000\"><strong>Manfaat witch hazel untuk kulit dan kecantikan</strong></font></h2><p><font color=\"#000000\">Berikut ini manfaat witch hazel untuk kulit wajah, mulai dari jerawat hingga luka bakar:</font></p><h3><font color=\"#000000\"><strong>1. Memerangi jerawat</strong></font></h3><p><font color=\"#000000\">Witch hazel dapat bertindak sebagai <em>astringent</em>, zat yang mampu menyusutkan jaringan. Dengan begitu, witch hazel berpotensi untuk mengeringkan noda jerawat.</font></p><p><font color=\"#000000\">Witch\r\n hazel telah banyak digunakan untuk memerangi jerawat karena peradangan,\r\n seperti pustula, maupun yang bukan peradangan seperti <a href=\"https://www.sehatq.com/artikel/11-langkah-untuk-bersihkan-komedo-hitam\" target=\"_blank\" rel=\"noopener\">komedo hitam</a>. Kandungan tanin dalam witch hazel bertindak sebagai molekul antioksidan untuk menangkal radikal bebas.</font></p><h3><font color=\"#000000\"><strong>2. Menangani luka bakar</strong></font></h3><p><font color=\"#000000\">Witch hazel dipercaya ampuh untuk mengatasi <em>scalp burn</em>,\r\n sensasi terbakar pada kulit kepala. Sensasi terbakar tersebut dapat \r\ndisebabkan oleh senyawa kimia maupun sengatan sinar matahari.</font></p><p><font color=\"#000000\">Untuk\r\n mengatasi luka bakar menggunakan witch hazel, Anda dapat langsung \r\nmengoleskannya ke kulit kepala saat mandi atau mencampurkannya dengan \r\nsampo.</font></p><h3><font color=\"#000000\"><strong>3. Mengatasi peradangan pada kulit</strong></font></h3><p><font color=\"#000000\">Witch hazel juga berpotensi untuk mengatasi kulit yang meradang, termasuk <a href=\"https://www.sehatq.com/artikel/penyebab-penyakit-kulit-psoriasis\" target=\"_blank\" rel=\"noopener\">psoriasis</a> dan eksim. Bila peradangannya diobati, maka kemungkinan ruam-ruam akibat psoriasis maupun eksim dapat berkurang.<br>Manfaat lain dari witch hazel</font></p><p><font color=\"#000000\">Selain tiga kondisi kulit di atas, witch hazel juga telah digunakan untuk mengatasi beberapa masalah pada berikut ini:</font></p><ul><li><font color=\"#000000\">Memar</font></li><li><font color=\"#000000\">Gigitan serangga</font></li><li><font color=\"#000000\">Luka</font></li><li><font color=\"#000000\">Ruam popok pada bayi</font></li><li><font color=\"#000000\">Wasir</font></li><li><font color=\"#000000\">Luka bakar lainnya</font></li></ul><h2><font color=\"#000000\"><strong>Risiko dari penggunaan witch hazel</strong></font></h2><p><font color=\"#000000\">Witch\r\n hazel memang memiliki manfaat menakjubkan untuk menangani masalah \r\nkulit. Walau begitu, bahan ini bukannya tanpa risiko dan efek samping. \r\nKarena riset penggunaan witch hazel masih bersifat anekdotal \r\n(berdasarkan pengalaman masyarakat), sulit mengetahui apakah benar witch\r\n hazel efektif dalam mengatasi beragam masalah kulit yang telah \r\ndisebutkan di atas.</font></p><p><font color=\"#000000\">Malahan, sebagian pemakai witch hazel \r\nmengklaim bahan ini menimbulkan kekeringan berlebih pada kulit saat \r\ndigunakan untuk mengatasi jerawat. Laporan tersebut juga menyebutkan \r\nwitch hazel memperparah <em>breakout</em>. Efektivitas witch hazel juga tak optimal apabila tidak digunakan dengan bahan-bahan lain, seperti dalam penanganan eksim.</font></p><p><font color=\"#000000\">Apabila\r\n Anda pernah mendengar khasiat witch hazel untuk mencegah tanda penuaan \r\nkulit, perlu ditekankan bahwa riset medis belum mendukung hal tersebut. \r\nTanda penuaan tersebut termasuk garis-garis halus dan kerutan.</font></p><p><font color=\"#000000\">Apabila\r\n masih ingin mencoba witch hazel, pastikan Anda menggunakan produk \r\ndengan kandungan witch hazel alami dan tidak ditambahkan bahan lain. \r\nHati-hati pula dengan produk yang mengandung parfum dan alkohol. Sebab, \r\nkandungan ini dapat memperparah peradangan, luka dan sensitivitas kulit.</font></p>', 5, 'admin', NULL, 'disetujui'),
(18, 'begini-cara-membaca-tes-widal-tipes-yang-tepat-1574838826.jpg', 'Begini Cara Membaca Tes Widal Tipes yang Tepat ', ' <p><font color=\"#000000\"><span style=\"font-weight: 400;\">tipes adalah penyakit infeksi yang disebabkan oleh bakteri jenis </span><em><span style=\"font-weight: 400;\">Salmonella typhi </span></em><span style=\"font-weight: 400;\">serta</span><em><span style=\"font-weight: 400;\"> Salmonella paratyphi </span></em><span style=\"font-weight: 400;\">A, B, dan C. Penyakit ini masih sering ditemukan di negara-negara berkembang, termasuk Indonesia.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Tes\r\n Widal termasuk salah satu bentuk pemeriksaan medis yang dilakukan untuk\r\n memastikan diagnosis demam tifoid. Namun cara membaca tes Widal tipes \r\ntidak bisa sembarangan.</span></font></p><h2><font color=\"#000000\"><strong>Kenapa tes Widal banyak digunakan?</strong></font></h2><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Meskipun\r\n pemeriksaan penunjang untuk demam tifoid yang paling baik adalah kultur\r\n bakteri, tes Widal masih sering digunakan di banyak negara endemis. \r\nSalah satunya di Indonesia.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Tes\r\n Widal relatif lebih mudah, murah, dan membutuhkan peralatan yang lebih \r\nsederhana. Sedangkan kultur bakteri seringkali memerlukan sarana dan \r\nprasarana khusus yang tidak tersedia secara luas. Hasilnya juga baru \r\nbisa muncul setelah beberapa hari. Karena itulah tes Widal masih banyak \r\ndigunakan untuk mendiagnosis tipes.&nbsp;</span></font></p><h2><font color=\"#000000\"><strong>Prinsip tes Widal</strong></font></h2><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Tes\r\n Widal menggunakan prinsip reaksi antigen-antibodi. Antibodi akan \r\nbereaksi terhadap antigen yang dianggap sebagai benda asing, yaitu \r\ndengan menghasilkan penggumpalan (aglutinasi).</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Jika seseorang terinfeksi oleh </span><em><span style=\"font-weight: 400;\">Salmonella typhi</span></em><span style=\"font-weight: 400;\">, tubuhnya akan memproduksi antibodi terhadap kuman tersebut.&nbsp;</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Antigen yang digunakan berasal dari komponen kuman </span><em><span style=\"font-weight: 400;\">S. typhi</span></em><span style=\"font-weight: 400;\">, </span><em><span style=\"font-weight: 400;\">S. paratyphi </span></em><span style=\"font-weight: 400;\">A, dan </span><em><span style=\"font-weight: 400;\">S. paratyphi </span></em><span style=\"font-weight: 400;\">B. Jenis antigen yang digunakan bisa berupa:</span></font></p><ul><li style=\"font-weight: 400;\"><font color=\"#000000\"><span style=\"font-weight: 400;\">Antigen H yang berasal dari flagel (alat gerak) kuman.</span></font></li><li style=\"font-weight: 400;\"><font color=\"#000000\"><span style=\"font-weight: 400;\">Antigen O yang berasal dari tubuh kuman.&nbsp;</span></font></li></ul><h2><font color=\"#000000\"><strong>Prosedur dan cara membaca tes Widal tipes</strong></font></h2><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Serum darah orang yang dicurigai menderita demam tifoid akan diambil tes Widal. Kemudian antigen yang berasal dari bakteri </span><em><span style=\"font-weight: 400;\">Salmonella</span></em><span style=\"font-weight: 400;\"> diteteskan ke dalam serum ini.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Bila\r\n serum darah mengandung antibodi, reaksi antigen-antibodi akan terjadi \r\ndan sampel darah akan tampak menggumpal. Hal inilah yang mendukung \r\ndiagnosis demam tifoid.&nbsp;</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Jika\r\n saat antigen diteteskan dan tidak terjadi reaksi penggumpalan, dapat \r\ndianggap bahwa tidak ada antibodi di dalam sampel serum darah. Hasilnya \r\npun dikatakan bukan demam tifoid.&nbsp;</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Hasil\r\n positif atau negatif saja tidaklah cukup untuk menggambarkan tes Widal.\r\n Cara yang lebih tepat adalah mengukur titer, yaitu konsentrasi antibodi\r\n atau antigen pada sampel darah.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Titer\r\n itulah yang biasa tergambar dalam hasil tes Widal. Misalnya, 1/80, \r\n1/160, atau 1/320. Semakin tinggi angkanya, semakin besar pula \r\nkemungkinan adanya infeksi </span><em><span style=\"font-weight: 400;\">S. typhii</span></em></font></p><h2><font color=\"#000000\"><strong>Keterbatasan tes Widal dan reaksi positif palsu</strong></font></h2><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Kenaikan\r\n titer antibodi dalam tes Widal yang dianggap positif adalah jika \r\nantibodi O atau H naik hingga 1/160. Sayangnya, cara membaca tes widal \r\ntipes dari satu kali tes saja tidak cukup akurat untuk memastikan \r\ndiagnosis demam tifoid.&nbsp;</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Tes\r\n Widal dapat bereaksi silang dengan penyakit infeksi lain. Karena itu, \r\nbisa terjadi reaksi positif palsu. Misalnya, saat tes Widal menunjukkan \r\nhasil yang positif, tetapi sebenarnya bukan disebabkan oleh demam \r\ntifoid.&nbsp;</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Beberapa penyakit yang dapat menunjukkan hasil positif terhadap tes Widal. Contohnya, tuberkulosis milier, dan endokarditis. Riwayat imunisasi demam tifoid sebelumnya juga berpotensi menyebabkan hasil positif palsu.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Jika\r\n tes Widal menunjukkan hasil negatif, kemugkinan demam tifoid pun tidak \r\ndapat langsung disingkirkan. Ada pula kondisi-kondisi medis lain yang \r\njuga bisa menyebabkan hasil tes Widal tipes yang negatif. Beberapa di \r\nantaranya meliputi:</span></font></p><ul><li style=\"font-weight: 400;\"><font color=\"#000000\"><span style=\"font-weight: 400;\">Jumlah bakteri yang kurang banyak untuk mencetuskan reaksi antibodi (reaksi negatif palsu).</span></font></li><li style=\"font-weight: 400;\"><font color=\"#000000\"><span style=\"font-weight: 400;\">Pasien telah menjalani pengobatan dengan antibiotik sebelum tes dilakukan.</span></font></li><li style=\"font-weight: 400;\"><font color=\"#000000\"><span style=\"font-weight: 400;\">Karier, yaitu adanya bakteri </span><em><span style=\"font-weight: 400;\">Salmonella</span></em><span style=\"font-weight: 400;\"> dalam darah, namun tanpa gejala klinis.&nbsp;</span></font></li></ul><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Oleh\r\n karena keterbatasan tes Widal itulah, interpretasi sulit dilakukan \r\nhanya dari satu pengujian. Idealnya, tes ini dilakukan secara berulang \r\ndengan jarak setidaknya 10 sampai 14 hari.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Tes\r\n Widal dinyatakan positif jika titer antibodi O atau H naik hingga empat\r\n kali lipat. Misalnya, dari 1/80 menjadi 1/320. . Tes ini dapat diulang \r\n5-7 hari setelah tes pertama, hasil semakin akurat jika kenaikan titer \r\nempat kali lipat dari tes pertama.</span></font></p>', 7, 'admin', NULL, 'disetujui'),
(19, 'benarkah-manfaat-jus-jambu-bisa-mengobati-dbd-1559292990.jpg', 'Benarkah Manfaat Jus Jambu Bisa Mengobati DBD? ', ' <div class=\"dynamic-content large\" id=\"contentArticle\"> <p><font color=\"#000000\"><span style=\"font-weight: 400;\">Penularan DBD kembali marak terjadi. Penyakit yang ditularkan oleh nyamuk </span><em><span style=\"font-weight: 400;\">Aedes aegypti</span></em><span style=\"font-weight: 400;\">\r\n ini, menjadi kekhawatiran tersendiri bagi masyarakat saat musim hujan \r\ntiba. Pasalnya, tidak hanya menyebabkan demam, pada tahapan yang parah, \r\nDBD juga dapat berujung pada kematian.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Untuk\r\n mengatasi DBD, selain dengan pengobatan oleh dokter, sejak lama \r\nmasyarakat Indonesia telah mengenal jambu biji sebagai alternatifnya. \r\nLalu, benarkah manfaat jus jambu untuk DBD dapat dibuktikan secara \r\nilmiah? Berikut ini penjelasannya.</span></font></p><h2><font color=\"#000000\">Manfaat Jus Jambu untuk Penderita DBD</font></h2><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Penderita\r\n DBD biasanya mengalami penurunan kadar trombosit dalam darah. Jika \r\njumlah trombosit dalam darah terus turun hingga di bawah \r\n20.000/mikroliter, maka kondisi ini dapat memberikan efek yang berbahaya\r\n bagi tubuh, seperti pendarahan spontan yang sulit dihentikan. </span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Karena\r\n itu, mempertahankan nilai trombosit dalam batas normal merupakan hal \r\nyang penting dilakukan. &nbsp;Jumlah trombosit yang normal berkisar antara \r\n150.000/mikroliter hingga 450.000/mikroliter.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Jambu\r\n biji telah lama dipercaya dapat membantu menaikkan nilai trombosit pada\r\n penderita DBD. Umumnya, penderita mengonsumsinya dalam bentuk jus.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Kandungan\r\n jambu biji yang dipercaya dapat membantu penderita DBD adalah flavonoid\r\n jenis kuersetin. Zat tersebut disebut dapat menghambat virus dengue \r\nuntuk memperbanyak diri. Dengan begitu, tingkat serangan virus di tubuh \r\njuga dapat berkurang. Berkurangnya tingkat serangan virus, akan mencegah\r\n pendarahan akibat rusaknya trombosit.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Selain\r\n dimanfaatkan dalam bentuk jus, bagian jambu yang juga dapat \r\ndimanfaatkan untuk membantu mengobati DBD adalah daunnya. Dalam sebuah \r\npenelitian ditemukan bahwa ekstrak daun jambu biji dapat membantu untuk \r\nmenghambat pertumbuhan virus dengue.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Selain\r\n itu, air rebusan daun jambu juga diyakini bisa membantu menghambat \r\nterjadinya pendarahan pada penderita DBD. Air rebusan tersebut dipercaya\r\n berpotensi meningkatkan jumlah trombosit menjadi 100.000/mikroliter, \r\ndalam jangka waktu 16 jam.</span></font></p><h2><font color=\"#000000\">Perawatan Lain untuk DBD</font></h2><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Meski\r\n konsumsi jus jambu biji untuk DBD dipercaya dapat membantu, pengobatan \r\noleh dokter tetap menjadi langkah utama yang harus dilakukan. Jika Anda \r\nterkena DBD, umumnya dokter akan menyarankan Anda banyak minum untuk \r\nmenghindari dehidrasi karena muntah-muntah dan demam tinggi.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Untuk mengatasi rasa nyeri yang timbul di tubuh karena penyakit ini, dokter mungkin akan meresepkan Perlu diingat bahwa obat pereda nyeri seperti aspirin perlu dihindari, karena dapat mengencerkan darah dan meningkatkan risiko pendarahan.</span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Semakin\r\n cepat perawatan untuk DBD dimulai, maka kesempatan untuk sembuh juga \r\nsemakin baik. Jika Anda merasa mengalami gejala DBD seperti mual,nyeri di persendian tubuh dan muncul bercak-bercak merah di kulit, segera periksakan diri ke dokter. </span></font></p><p><font color=\"#000000\"><span style=\"font-weight: 400;\">Mengonsumsi\r\n jus jambu untuk DBD memang dipercaya bisa membantu. Meski begitu, Anda \r\ntetap perlu berhati-hati dalam mengonsumsinya, serta gunakanlah pilihan \r\nini secara bijak dan tidak berlebihan. </span></font></p> </div>', 12, 'admin', NULL, 'tidak_disetujui'),
(20, 'buat-anak-bahagia-dengan-melakukan-berbagai-hal-ini-1574244991.jpg', 'Buat Anak Bahagia dengan Melakukan Berbagai Hal Ini ', ' <p>Memberi kebahagiaan pada anak adalah kewajiban bagi orangtua. \r\nKebahagiaan adalah rasa gembira, kepuasan, dan emosi positif yang \r\nmembuat hidup terasa lebih berharga dan bermakna.</p><p>Memiliki masa kanak-kanak bahagia\r\n dapat mendorong anak mengatur hidupnya dengan lebih baik. Bukan hanya \r\nmemberi kesenangan sesaat untuk anak, namun ada beberapa hal yang harus \r\norangtua lakukan untuk membuat anak bahagia.</p><h2><strong>Cara membuat anak bahagia</strong></h2><p>Setiap\r\n orangtua pasti menginginkan anaknya bahagia. Bahkan ada yang sampai \r\nmemberikan apa pun yang diinginkan oleh anak. Namun secara alami, \r\nanak-anak sebenarnya sudah merasa bahagia.</p><p>Anak-anak mampu \r\nmenemukan kebahagiaan dalam berbagai hal kecil, seperti melalui bermain \r\nbersama orangtua. Selain itu, ada beberapa hal yang Anda sebagai \r\norangtua lakukan untuk membuat anak bahagia, seperti:</p><ul><li><h3><strong>Ajak anak bermain</strong></h3></li></ul><p style=\"padding-left: 30px;\">Mengajak anak bermain adalah salah satu cara mudah untuk membuat mereka bahagia karena pada umumnya anak-anak senang bermain.</p><p style=\"padding-left: 30px;\">bermain bersama anak di halaman rumah, taman, atau tempat bermain lain tak \r\nhanya membuat anak bahagia, namun juga bisa meningkatkan kepercayaan \r\ndirinya.</p><ul><li><h3><strong>Biarkan anak bermain di luar</strong></h3></li></ul><p style=\"padding-left: 30px;\">Berlari\r\n di atas rumput, menggali tanah, memanjat pohon, dan duduk di ayunan \r\nsangat baik untuk anak-anak. Aroma tanah, pohon, rumput atau bunga, dan \r\nsegarnya udara dapat meningkatkan suasana hati mereka.</p><p style=\"padding-left: 30px;\">Oleh\r\n sebab itu, membiarkan anak bermain atau membaca buku di luar akan \r\nmendorongnya bahagia. Sebuah studi bahkan menunjukkan bahwa bermain di \r\nluar dapat meningkatkan empati, keterlibatan, dan pengendalian diri pada\r\n anak.</p><ul><li><h3><strong>Batasi menonton TV atau bermain gadget</strong></h3></li></ul><p style=\"padding-left: 30px;\">Meski anak terlihat senang saat menonton TV selama berjam-jam, namun terlalu lama menatap layar tidak baik untuk kesehatan psikologis anak.</p><p style=\"padding-left: 30px;\">Sebaliknya,\r\n menghabiskan waktu dengan kegiatan lain, seperti berolahraga, berkumpul\r\n bersama keluarga, atau bermain bersama teman, bisa membuat mereka lebih\r\n bahagia. Jadi, tetapkan batasan yang jelas bagi anak untuk menonton TV \r\natau bermain gawai.</p><ul><li><h3><strong>Membacakan buku cerita untuk anak</strong></h3></li></ul><p style=\"padding-left: 30px;\">Luangkan\r\n waktu untuk membacakan buku cerita, serta biarkan mereka membantu \r\nmemilih buku cerita yang ingin didengarkan. Anak pun akan sangat \r\nmenantikan hal ini jika dijadikan sebagai rutinitas.</p>', 2, 'admin', NULL, 'disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `id_kategori_penyakit` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `profil_dokter` text NOT NULL,
  `foto_dokter` text NOT NULL,
  `jadwal_praktik` varchar(30) NOT NULL,
  `tempat_praktik` varchar(50) NOT NULL,
  `kota_dokter` varchar(50) NOT NULL,
  `nomor_str` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `rating_dokter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_kategori_penyakit`, `nama_dokter`, `profil_dokter`, `foto_dokter`, `jadwal_praktik`, `tempat_praktik`, `kota_dokter`, `nomor_str`, `tanggal_lahir`, `rating_dokter`) VALUES
(1, 4, 'dr. john doe, Sp.M', 'dr. john doe, Sp.M merupakan seorang dokter spesialis mata. Saat ini beliau berpraktik di Klinik Mata Nusantara Kebon Jeruk (KMN) di Jakarta Barat, Klinik Mata Nusantara Lebak Bulus (KMN) di Jakarta Selatan, Klinik Mata Nusantara Pantai Indah Kapuk (KMN) di Jakarta Utara', 'yulinda-indarnila-soemiatno-sp-m.jpeg', '09:00-12:00', 'Klinik Mata Nusantara Lebak Bulus (KMN) Cilandak, ', 'Jakarta', '123456789', '1995-04-18', 4),
(2, 19, 'jane doe, S.Psi', 'jane doe, S.Psi merupakan seorang psikolog. Saat ini beliau berpraktik di RS St. Carolus di Jakarta Pusat', 'yanthi-andriani-psi.jpeg', '08:00-16:00', 'RS St. Carolus Senen, Jakarta Pusat', 'Jakarta', '987654321', '1987-11-29', 3),
(3, 17, 'rose doe, S.Gz', 'rose doe, S.Gz merupakan seorang ahli gizi. Saat ini beliau berpraktik di RS Cinta Kasih Tzu Chi di Jakarta Barat', 'veronika-sisilia-a-utama-s-gz.jpeg', '08:00-20:00', 'RS Cinta Kasih Tzu Chi Cengkareng, Jakarta Barat', 'Jakarta', '1273512651', '1983-06-14', 5),
(4, 19, 'jasmine doe, S.Psi, M.Psi', 'jasmine doe, S.Psi, M.Psi merupakan seorang psikolog. Saat ini beliau berpraktik di RS Columbia Asia Semarang di Semarang', 'veny-mulyani-s-psi.jpeg', '16:00-18:00', ' RS Columbia Asia Semarang Semarang Barat, Semaran', 'Semarang', '8127312786', '1996-02-12', 3),
(5, 19, 'jeyn doe, S.Psi, M.Psi', 'jeyn doe, S.Psi, M.Psi merupakan seorang psikolog. Saat ini beliau berpraktik di Eka Hospital Pekanbaru di Pekanbaru', 'utami-trie-wahyuni-s-psi.jpeg', '08:00-14:00', 'Eka Hospital Pekanbaru Marpoyan Damai, Pekanbaru', 'Pekanbaru', '3123767172', '1986-11-20', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id_kategori_artikel` int(11) NOT NULL,
  `nama_kategori_artikel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id_kategori_artikel`, `nama_kategori_artikel`) VALUES
(1, 'umum'),
(2, 'parenting'),
(3, 'Hidup Sehat'),
(4, 'Penyakit'),
(5, 'Olahraga'),
(6, 'Bayi'),
(7, 'Kesehatan Kulit'),
(8, 'Kesehatan Mental'),
(9, 'Kehamilan'),
(10, 'Kesehatan Wanita'),
(11, 'Relationship'),
(12, 'Kesehatan Pria');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_penyakit`
--

CREATE TABLE `kategori_penyakit` (
  `id_kategori_penyakit` int(11) NOT NULL,
  `nama_kategori_penyakit` varchar(50) NOT NULL,
  `keterangan_kategori_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori_penyakit`
--

INSERT INTO `kategori_penyakit` (`id_kategori_penyakit`, `nama_kategori_penyakit`, `keterangan_kategori_penyakit`) VALUES
(1, 'THT', 'dalam'),
(4, 'mata', ''),
(5, 'gigi', ''),
(6, 'jantung', ''),
(7, 'anak', ''),
(8, 'ortopedi', ''),
(9, 'saraf', ''),
(10, 'penyakit dalam', ''),
(11, 'paru-paru', ''),
(12, 'umum', ''),
(13, 'bedah', ''),
(14, 'kulit', ''),
(16, 'kandungan', ''),
(17, 'gizi', ''),
(18, 'urologi', ''),
(19, 'psikolog', ''),
(20, 'jiwa', ''),
(21, 'ginjal', ''),
(22, 'onkologi', ''),
(23, 'hematologi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_rs`
--

CREATE TABLE `kategori_rs` (
  `id_kategori_rs` int(11) NOT NULL,
  `nama_kategori_rs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori_rs`
--

INSERT INTO `kategori_rs` (`id_kategori_rs`, `nama_kategori_rs`) VALUES
(1, 'klinik'),
(4, 'rumah sakit'),
(5, 'klinik gigi'),
(6, 'klinik kulit & kecantikan'),
(7, 'lab'),
(8, 'puskesmas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_artikel`, `nama`, `email`, `komentar`, `tanggal`) VALUES
(1, 18, 'budi setiawan', 'budi@gmail.com', 'terima kasih atas infonya dok', '0000-00-00'),
(2, 9, 'budi', 'budi@gmail.com', 'adassasd', '2019-12-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `foto_obat` text NOT NULL,
  `golongan_obat` varchar(40) NOT NULL,
  `kemasan_obat` varchar(40) NOT NULL,
  `produsen_obat` varchar(50) NOT NULL,
  `deskripsi_obat` text NOT NULL,
  `manfaat_obat` text NOT NULL,
  `komposisi_obat` text NOT NULL,
  `dosis_obat` varchar(50) NOT NULL,
  `aturan_pakai_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `foto_obat`, `golongan_obat`, `kemasan_obat`, `produsen_obat`, `deskripsi_obat`, `manfaat_obat`, `komposisi_obat`, `dosis_obat`, `aturan_pakai_obat`) VALUES
(26, 'Borraginol-N suppositoria ', 'borraginol-n-suppositoria-01-1558925453.jpg', 'Obat keras', '1 box isi 2 strip @ 5 suppositoria', 'Takeda Indonesia', '\r\n\r\nBorraginol-N adalah obat yang digunakan untuk penyakit wasir, obat ini mengandung  diphenhydramine hydrochloridum,cetrimide,dibucaini hydrochloridum sebagai zat aktif. Borraginol-N merupakan obat keras dan harus dengan resep dokter.\r\n', 'Mengobati wasir bahkan wasir yang disertai perdarahan, luka terbuka pada dubur, keluarnya mukosa dubur (anal prolaps), iritasi pada dubur (periproktitis), serta gatal-gatal pada dubur.', 'Tiap suppositoria: lithospermi radix extractum 0,18 mg, aethylis aminobenzoas 20 mg, dibucaini hydrochloridum 0,5 mg, diphenhydramine hydrochloridum 0,5 mg, cetrimide 2,5 mg', '1 suppositoria sebanyak 3 kali/hari', 'Buka pembungkus lalu masukkan obat ini ke dalam du'),
(27, 'Betaserc tablet 8 mg ', 'betaserc-tablet-8-mg-01-1558341709.jpg', 'Obat keras', ' box isi 1 strip @ 25 tablet (8 mg)', 'Abbott Indonesia', 'Betaserc adalah obat yang digunakan untuk mengobati pusing berputar (vertigo), telinga berdenging (tinitus), dan gangguan pendengaran lainnya. Betaserc merupakan obat keras dan harus dengan resep dokter. Obat ini mengandung betahistine dihydrochloride sebagai zat aktif.', '\r\n\r\nDigunakan pada kondisi (adanya cairan pada telinga bagian dalam) sindroma meniere dan kondisi lain yang memiliki gejala seperti  serangan vertigo, tinitus atau kehilangan pendengaran yang progresif, biasanya disertai dengan mual dan muntah.\r\n', 'Betahistine dihydrochloride 8 mg', '1-2 tablet sebanyak 3 kali/hari', 'Harus dikonsumsi bersamaan dengan waktu makan.'),
(28, 'Batugin elixir 300 ml', 'batugin-elixir-300-ml-01-1569315942.jpg', ' Khasiat dari turun-temurun', '1 botol @ 300 ml', 'Kimia Farma', '\r\n\r\nBatugin elixir adalah obat untuk membantu meluruhkan batu di ginjal dan saluran kemih, serta membantu melancarkan buang air kecil. Obat ini merupakan jamu yang mengandung zat aktif ekstrak daun tempuyung, ekstrak daun kejibeling.\r\n', 'Membantu meluruhkan batu urin di ginjal dan saluran kemih, serta membantu melancarkan buang air kecil', 'Tiap 30 ml: Ekstrak daun tempuyung (sonichi folium) 3 g, ekstrak daun kejibeling (strobilanthi folium) 0,3 g.', 'Selama pengobatan: 1 gelas takar sebanyak 3-4 kali', 'Dapat dikonsumsi sebelum atau setelah makan.'),
(29, 'Akilen tetes 5 ml', 'akilen-tetes-5-ml-01-1570779504.jpg', 'Obat keras', '1 botol @ 5 ml', 'Sanbe Farma.', 'Akilen adalah obat untuk pengobatan otitis media supuratif kronik dan otitis eksterna. Obat ini merupakan obat keras yang membutuhkan resep dokter. Akilen mengandung zat aktif ofloksasin.', '\r\n\r\n    Radang kronik telinga tengah dengan perforasi membran timpani dan riwayat keluarnya sekret dari telinga (Media otitis supuratif kronik)\r\n    Infeksi pada telinga bagian luar, yang meliputi daun telinga, lubang telinga dan saluran atau liang telinga (eksternal otitis).', 'Tiap 1 ml: Ofloksasin 3 mg.', '      Dewasa: 6-10 tetes sebanyak 2 kali/hari.    ', 'Diteteskan pada telinga, dan dapat didiamkan di da'),
(30, 'Abbotic XL tablet 500 mg', 'abbotic-xl-tablet-500-mg-01-1558334687.jpg', ' Obat keras', '1 strip @ 10 tablet (500 mg)', 'Abbott Indonesia', 'Abbotic XL adalah obat untuk perawatan infeksi bakteri pada saluran pernapasan atas, peradangan pada bronkus (bronkitis), infeksi paru-paru (pneumonia), infeksi pada telinga bagian tengah (otitis media akut), serta infeksi kulit dan struktur kulit (impetigo, folikulitis, selulitis, dan abses). Obat ini mengandung klaritromisin yang merupakan antibiotik golongan makrolida. Abbotic granul termasuk golongan obat keras yang memerlukan resep dokter', 'Digunakan pada perawatan infeksi karena organisme yang rentan, dalam kondisi berikut: infeksi saluran pernapasan atas (faringitis streptokokus), infeksi saluran pernapasan bawah (bronkitis, pneumonia), otitis media akut, infeksi struktur kulit dan kulit (impetigo, folikulitis, selulitis, abses).', 'Clarithromycin 500 mg', 'Dewasa:   Dosis yang dianjurkan: 500 mg/hari', 'Harus dikonsumsi bersamaan dengan makanan, telan u'),
(31, 'Seven Seas Becombion sirup 110 ml ', 'seven-seas-becombion-sirup-110-ml-01-1558075577.jpg', 'Obat bebas', 'Merck', '1 botol @ 110 ml', 'Seven Seas Becombion adalah suplemen yang digunakan untuk mencukupi vitamin B-kompleks pada anak. Obat ini merupakan obat bebas dan bermanfaat untuk pertumbuhan anak. ', 'Suplementasi vitamin B-kompleks', 'Tiap 5 ml : vit B1 5 mg, vit B2 2 mg, vit B3 20 mg, vit B5 3 mg, vit B6 2.5 mg, vit B12 3 mcg', 'Anak-anak usia 1-6 tahun: 1/2 sendok teh (2.5 ml),', 'Dikonsumsi bersama atau tanpa makanan'),
(32, 'Winatin kaplet 10 mg ', 'winatin-kaplet-10-mg-01-1572850104.jpg', 'Obat keras', '1 box isi 10 strip @ 10 kaplet', 'Ifars Pharmaceutical Laboratories', 'Winatin adalah obat yang digunakan sebagai antihistamin yang digunakan untuk mengobati gejala alergi, seperti gatal-gatal, pilek, mata berair, dan bersin. Obat ini merupakan obat keras yang membutuhkan resep dokter. Winatin mengandung loratadine sebagai zat aktifnya.', 'Mengurangi gejala-gejala yang berkaitan dengan rinitis alergik seperti:\r\n        Bersin-bersin.\r\n        Pilek.\r\n        Rasa gatal pada hidung.\r\n        Rasa gatal dan terbakar pada mata.\r\n        Mengurangi gejala-gejala dengan tanda-tanda urtikaria kronik serta penyakit dermatologik alergi lain.', 'Loratadine 10 mg', '      Dewasa, pasien lanjut usia, anak 12 tahun ke', 'Dapat dikonsumsi dengan atau tanpa makanan.'),
(33, 'Ranicho sirup 60 ml ', 'ranicho-sirup-60-ml-01-1571047179.jpg', 'Obat keras', '1 botol @ 60 ml', 'Nicholas laboratories Indonesia', '\r\n\r\nRanicho adalah mengobati pengobatan jangka pendek luka pada saluran pencernaan bagian atas dari usus halus (tukak usus dua belas jari) aktif, pengobatan pada luka pada dinding lambung (tukak lambung), untuk mengurangi gejala peradangan pada kerongkongan (refluks esofagitis), pengobatan keadaan hiperskresi patologis: masalah pencernaan langka yang disebabkan oleh kemunculan tumor pada pankreas atau pada duodenum (bagian teratas dari usus 12 jari) (sindroma zollinger ellison), penumpukan salah satu jenis sel darah putih, yaitu sel mast, pada organ atau jaringan tubuh (mastositosis sitemik). Obat ini merupakan obat keras yang memerlukan resep dokter. Ranicho mengandung zat aktif ranitidine HCl.\r\n', 'Pengobatan jangka pendek luka pada saluran pencernaan bagian atas dari usus halus (tukak usus dua belas jari) aktif.\r\nPengobatan pada luka pada dinding lambung (tukak lambung).\r\nUntuk mengurangi gejala peradangan pada kerongkongan (refluks esofagitis).', 'Tiap 5 ml: Ranitidine HCl yang setara ranitidine 75 mg', 'Dewasa:      Refluks gastroesofagitis: 150 mg (2 s', 'Dikonsumsi sesudah makan malam atau sebelum tidur'),
(34, 'Galpain krim 20 g', 'galpain-krim-20-g-01-1574233032.jpg', 'Produk Konsumen', '1 tube @ 20 g', 'Galenium Pharmasia Laboratories', 'Galpain adalah obat untuk meringankan sakit pada otot, sendi, nyeri, keseleo, dan encok. Obat ini merupakan obat produk konsumen. Galpain mengandung metil salisilat, eugenol, menthol, vanishing cream base sampai sebagai zat aktifnya.', 'Meringankan sakit pada otot, sendi, nyeri, keseleo, dan encok.', 'Tiap 1 g: metil salisilat 102 mg, eugenol 13,6 mg, menthol 54,4 mg, vanishing cream base sampai 1000 mg', 'Gunakan secukupnya.', 'Oleskan pada otot, sendi atau bagian yang nyeri. B'),
(35, 'Januvia tablet 100 mg', 'januvia-tablet-100-mg-01-1571044935.jpg', 'Obat keras', '1 box isi 2 strip @ 14 tablet', 'Merck Sharp dan Dohme', '\r\n\r\nJanuvia adalah obat untuk membantu menurunkan kadar gula darah pada pasien penderita diabetes mellitus tipe 2. Obat ini merupakan obat keras yang membutuhkan resep dokter. Januviar mengandung zat aktif sitagliptin.', 'Membantu menurunkan kadar gula darah pada pasien penderita diabetes mellitus tipe 2.', 'Sitagliptin 100 mg', '1 tablet sebanyak 1 kali/hari', 'Dikonsumsi dengan atau tanpa makanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `id_dokter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `tanggal_lahir`, `no_tlp`, `id_dokter`) VALUES
(2, 'budi setiawan', 'bandung', '1988-12-15', '082216421050', NULL),
(3, 'indria sukma', 'Jakarta', '1994-11-17', '08389901302', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `id_kategori_penyakit` int(11) NOT NULL,
  `pengertian_penyakit` text NOT NULL,
  `gejala_penyakit` text NOT NULL,
  `penyebab_penyakit` text NOT NULL,
  `diagnosis_penyakit` text NOT NULL,
  `pengobatan_penyakit` text NOT NULL,
  `pencegahan_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `id_kategori_penyakit`, `pengertian_penyakit`, `gejala_penyakit`, `penyebab_penyakit`, `diagnosis_penyakit`, `pengobatan_penyakit`, `pencegahan_penyakit`) VALUES
(3, 'Kalazion', 4, 'Kalazion adalah pembengkakkan atau benjolan kecil tanpa nyeri yang muncul di kelopak mata. Benjolan kecil tersebut biasanya dapat muncul pada bagian atas atau bawah kelopak mata, pada salah satu atau kedua mata, dan terkadang dapat menghilang tanpa dilakukan pengobatan. Apabila ada lebih dari satu benjolan, kondisi ini disebut sebagai kalazia.', 'Gejala-gejala yang dialami penderita kalazion, antara lain:\r\n\r\n    Muncul benjolan kecil di kelopak mata\r\n    Terjadi pembengkakkan di kelopak mata\r\n    Ada rasa nyeri, tampak kemerahan, dan tidak nyaman pada kelopak mata pada awalnya. Namun setelah beberapa hari, nyeri akan menghilang tapi benjolan tetap ada\r\n    Mata berair\r\n    Terjadi iritasi ringan pada mata\r\n    Penglihatan kabur\r\n\r\nKalazion umumnya lebih sering terjadi pada orang dewasa dibanding pada anak-anak dan biasanya terjadi gejala yang sama pada setiap orang', 'Kalazion disebabkan oleh terjadinya penyumbatan pada kelenjar meibom yang terletak di bagian atas dan bawah kelopak mata. Minyak yang dihasilkan oleh kelenjar ini membantu melembapkan mata. Peradangan atau virus yang memengaruhi kelenjar meibom adalah beberapa faktor yang dapat menyebabkan kalazion.  ', '\r\n\r\nTidak ada pemeriksaan khusus untuk mendiagnosis kalazion. Dokter mata biasanya akan memeriksa mata Anda dan bertanya mengenai gejala-gejala yang Anda alami, masalah pada mata Anda sebelumnya, dan riwayat kesehatan Anda secara umum.\r\n', 'Beberapa kasus kalazion dapat sembuh dengan sendirinya tanpa diobati. Jika dokter mata Anda merekomendasikan pengobatan, beberapa cara mengobatinya adalah dengan mengaplikasikan kompres hangat ke kelopak mata empat kali sehari selama sekitar 10 menit setiap kalinya. Ini dapat mengurangi pembengkakkan pada kelenjar yang tersumbat. Pastikan Anda mencuci tangan Anda sebelum menyentuh area tersebut dan hindari memencet-mencet benjolan. Dokter mata juga mungkin akan memberikan resep obat tetes mata atau krim kelopak mata. Jika kalazion belum sembuh juga, dokter mata Anda mungkin akan merekomendasikan suntikan kortikosteroid atau prosedur operasi. Suntikan dan operasi merupakan pengobatan yang efektif. Pilihan pengobatan tergantung pada beberapa faktor yang berbeda. Dokter mata Anda akan menjelaskan manfaat dan risikonya.', 'Kalazion dapat dicegah dengan beberapa cara, di antaranya:\r\n\r\n    Selalu cuci tangan sebelum menyentuh mata Anda\r\n    Pastikan bahwa apa pun yang bersentuhan dengan mata Anda seperti lensa kontak dan kacamata dalam kondisi bersih.\r\n    Jika Anda memiliki kondisi yang dapat meningkatkan peluang Anda untuk terkena kalazion, ikuti instruksi dokter Anda untuk membantu mengendalikannya.\r\n\r\n'),
(4, 'Kandidiasis', 14, '\r\n\r\nKandidiasis adalah suatu kondisi saat kulit mengalami infeksi yang disebabkan oleh jamur jenis Candida. Keberadaan jamur ini pada beberapa bagian tubuh manusia sebetulnya wajar. Namun, jika jumlahnya terlalu banyak, dapat menyebabkan gangguan kesehatan. Jamur Candida biasanya hidup pada bagian usus manusia, membran mukosa (selaput lendir) dan kulit tanpa menimbulkan infeksi. Namun, pertumbuhan jamur yang tidak normal akan menyebabkan infeksi pada bagian tubuh yang terpapar. Kandidiasis dibagi berdasarkan tempat tumbuhnya, di antaranya adalah:\r\n\r\n    Thrush (oropharyngeal candidiasis), infeksi candidiasis yang muncul pada bagian mulut serta tenggorokan dan disebabkan oleh jamur Candida albicans.\r\n    Kandidiasis vagina, infeksi kandidiasis yang muncul pada bagian alat vital wanita.\r\n    Kandidiasis kulit, Candida yang menyebabkan kulit infeksi seperti alergi popok, dan infeksi di area-area yang tertutup dan sangat lembab.\r\n    Esofagitis, infeksi Candida dari mulut yang menyebar ke tenggorokan, menyebabkan esofagitis. Infeksi ini biasa ditemui pada orang-orang penderita AIDS atau yang sedang menjalani kemoterapi untuk kanker.\r\n    Kandidiasis invasif, infeksi yang muncul saat Candida menembus sel darah dan menyebar ke seluruh tubuh.', '\r\n\r\nGejala kandidiasis berbeda, tergantung pada daerah terjadinya infeksi. Beberapa gejala-gejala kandidiasis adalah:\r\n\r\n    Thrush: munculnya bercak putih pada mulut, terutama lidah, langit-langit mulut dan sekitar bibir. Terkadang sakit, tapi sering kali tidak.\r\n    Esofagitis: Infeksi di area tenggorokan ini dapat membuat seseorang sakit menelan dan dapat menimbulkan sakit di bagian belakang tulang dada.\r\n    Kandidiasis kulit: tampak kelainan kulit berupa bercak merah, basah, yang tampak berair dan terkadang disertai dengan bintil merah di sekitarnya.\r\n    Kandidiasis vagina: vagina terasa sakit dan perih, perasaan panas seperti terbakar di sekitar lubang vagina dan rasa sakit atau tidak nyaman selama berhubungan seksual.\r\n    Kandidiasis invasif: saat Candida menyebar masuk ke dalam sel darah, seseorang yang terjangkit dapat mengalami demam yang sangat tinggi sampai kejang dan kegagalan beberapa organ.', '\r\n\r\nPenyebab kandidiasis berbeda-beda, tergantung daerah terjadinya infeksi jamur tersebut. Namun secara umum penyebab kandidiasis adalah jamur Candida yang tumbuh secara abnormal. Ada beberapa faktor yang meningkatkan risiko seseorang terjangkit kandidiasis, di antaranya adalah :\r\n\r\n    Daerah lipatan kulit seperti lipat paha yang terlalu lembab disertai dengan higiene pribadi yang kurang\r\n    Sistem imun tubuh yang lemah.\r\n    Orang yang menderita obesitas dan diabetes.\r\n    Orang yang menerima terapi steroid dan kemoterapi', '\r\n\r\nUntuk mendiagnosis penyakit kandidiasis, biasanya dokter akan\r\n\r\n    Menanyakan riwayat kesehatan yang dimiliki penderita seperti diabetes, kanker, HIV dan penyakit kronis lainnya.\r\n    Dokter akan menanyakan mengenai diet yang penderita kandidiasis lakukan dan penggunaan obat dalam beberapa waktu ke belakang.\r\n    Dokter akan melakukan pemeriksaan fisik untuk melihat tanda-tanda kandidiasis yang tampak di tubuh.\r\n    Jika dibutuhkan, dokter akan melakukan tes darah untuk mengetahui keberadaan jamur Candida di dalam tubuh seseorang.', '\r\n\r\nPengobatan untuk kandidiasis bervariasi, tergantung kepada jenisnya. Beberapa metode pengobatan yang dilakukan oleh dokter adalah:\r\n\r\n    Thrush: Untuk kandidiasis, biasanya dokter akan memberikan obat anti jamur seperti nistatin dan klotrimazol. Untuk kandidiasis yang lebih ringan, dokter biasanya memberikan nistatin cair atau pil klotrimazol.\r\n    Esofagitis: dapat diobati dengan obat anti jamur seperti flukonazol.\r\n    Kandidiasis kulit: Biasanya dokter akan memberikan krim atau bedak anti jamur.\r\n    Kandidiasis vagina: dapat diobati dengan obat anti jamur yang diaplikasikan langsung ke bagian yang terinfeksi di vagina, seperti butokonazol, klotrimazol, mikonazol, nistatin atau tiokonazol.\r\n    Kandidiasis invasif: dapat diobati dengan obat anti jamur intravena (melalui infus) seperti vorikonazol atau flukonazol.  ', 'Secara umum kandidiasis dapat dicegah dengan cara menjaga kulit tetap bersih dan kering. Selain itu dengan mengonsumsi obat yang diresepkan dokter, juga menjalani gaya hidup sehat dan mengonsumsi makanan bergizi.\r\n'),
(5, 'Abdominal Migraine ', 10, '\r\n\r\nAbdominal migraine, sesuai dengan namanya, merupakan sebuah kondisi dengan gejala utama rasa nyeri pada abdomen atau perut. Kondisi ini lebih sering dijumpai pada anak-anak. Biasanya abdominal migraine ditemukan pada anak usia 7-10 tahun. Tetapi terkadang orang dewasa juga dapat mengalaminya.\r\n\r\nKondisi abdominal migraine dapat serupa dengan beberapa kondisi lain yang menyebabkan timbulnya gejala nyeri perut pada anak seperti IBS (Irritable Bowel Syndrome) atau penyakit Crohn.\r\n', '\r\n\r\nGejala utama abdominal migraine adalah nyeri perut yang hilang timbul. Biasanya nyeri perut berlokasi di bagian tengah perut dan bersifat tumpul. Nyeri dapat muncul dan bertahan selama 1 jam hingga berhari-hari. Di antara kambuhnya nyeri perut biasanya anak tidak memiliki gejala bahkan keluhan sama sekali.\r\n\r\nSelain nyeri, beberapa gejala berikut juga terkadang ikut menyertai:\r\n\r\n    Mual\r\n    Muntah\r\n    Hilangnya nafsu makan\r\n    Kulit pucat', '\r\n\r\nPenyebab abdominal migraine sampai saat ini belum diketahui dengan pasti. Kemungkinan, faktor-faktor risiko yang memengaruhi kondisi ini berkaitan dengan faktor-faktor pada migraine yang biasanya muncul dengan keluhan nyeri kepala.\r\n\r\nTeori tersebut muncul dari hubungan antara saluran cerna dan otak. Sebuah studi menemukan adanya hubungan antara migrain kepala dengan gerakan usus yang melambat dalam sistem pencernaan.\r\n\r\nKondisi abdominal migraine juga lebih banyak ditemukan pada anak dengan riwayat keluarga yang mengalami migraine kepala. Sebuah studi menemukan 90% anak yang mengalami kondisi ini memiliki orangtua atau saudara dengan migraine.\r\n\r\nPerempuan didapati juga lebih banyak mengalami abdominal migraine dibanding laki-laki.  Kondisi emosi juga dapat memengaruhi timbulnya gejala nyeri perut.\r\n\r\nBeberapa kondisi lain yang mungkin menjadi pencetus nyeri perut ini yaitu:\r\n\r\n    Kandungan nitrat atau bahan kimia lain dalam produk daging, olahan coklat, dan makanan lainnya.\r\n    Banyaknya udara yang masuk dalam sistem pencernaan\r\n    Kelelahan\r\n    Mabuk yang terjadi saat berada dalam kendaraan', '\r\n\r\nDalam menegakkan diagnosis, dokter akan melakukan wawancara mengenai kondisi medis pasien dan riwayat penyakit yang ada pada keluarga pasien.\r\n\r\nSetelah itu dokter akan menanyakan seputar keluhan yang terjadi pada anak. Diagnosa abdominal migraine dapat ditegakkan bila memenuhi beberapa kriteria berikut:\r\n\r\n    Paling tidak terdapat 5 serangan nyeri perut yang bertahan dalam 1-72 jam\r\n    Nyeri tumpul di sekitar pusar dengan intensitas sedang hingga berat\r\n    Paling tidak terdapat 2 dari beberapa gejala: hilang nafsu makan, mual, muntah, kulit pucat\r\n    Tidak terdapat gangguan pencernaan lain atau penyakit ginjal\r\n\r\nKemudian dokter akan melakukan pemeriksaan fisik dengan daerah perut yang menjadi perhatian utama untuk menilai keadaan tampak luar serta suara bising usus yang ada.\r\n\r\nMeskipun dapat disingkirkan dari wawancara dan pemeriksaan fisik, pemeriksaan penunjang seperti endoskopi atau pemeriksaan usg dapat menolong untuk menyingkirkan diagnosis lain bila diperlukan, seperti:\r\n\r\n    Refluks Gastroesofageal (GERD)\r\n    Penyakit Crohn\r\n    IBS (Irritable Bowel Syndrome)\r\n    Obstruksi saluran cerna\r\n    Ulkus peptikum\r\n    Penyakit ginjal\r\n    Kolesistitis', '\r\n\r\nAbdominal migraine dapat diobati dengan obat yang dipakai dalam terapi migraine nyeri kepala, seperti obat NSAID ibuprofen, obat anti mual, atau obat golongan triptan.\r\n\r\nPastikan anak mendapat waktu tidur yang cukup, makan makanan yang bergizi setiap hari, dan minum air yang cukup setiap harinya tanpa kandungan kafein.\r\n\r\nBila gejala yang timbul disertai muntah, pastikan anak mendapat asupan cairan yang cukup agar terhindar dari dehidrasi.\r\n\r\nMakanan seperti cokelat atau makanan olahan lainnya dapat memicu terjadinya abdominal migraine. Bila perlu, catat makanan yang dikonsumsi anak setiap harinya dan catat kapan saja serangan nyeri perut muncul untuk dapat memperkirakan makanan yang dapat memicu timbulnya gejala.\r\n', 'Pencegahan terjadinya abdominal migraine yaitu dengan mencari tahu terlebih dahulu pencetus timbulnya gejala. Jika sudah ditemukan, maka mencegahnya dapat dilakukan dengan menghindari pencetus tersebut.\r\n'),
(6, 'Ablasi Retina ', 4, '\r\n\r\nAblasi retina adalah kondisi mata serius, ketika retina mata terlepas dari jaringan di sekitarnya.\r\n\r\nSemakin lama jika ablasi retina tidak diobati, maka risiko mengalami kebutaan permanen akan semakin besar pada mata yang mengalaminya.\r\n', '\r\n\r\nAblasi retina tidak menimbulkan rasa sakit. Gejala-gejala yang biasanya muncul sebelum retina tersebut terlepas, antara lain:\r\n\r\n    Banyak floaters (bintik kecil melayang) yang muncul secara tiba-tiba\r\n    Ada kilatan cahaya di satu atau kedua mata\r\n    Penglihatan menjadi kabur\r\n    Penglihatan ke sekeliling menurun secara bertahap\r\n    Terdapat bayangan seperti tirai di atas bidang visual\r\n\r\n', '\r\n\r\nAblasi retina umumnya disebabkan oleh perubahan pada substansi mirip jelly, yang merupakan cairan viterus di dalam mata Anda. Kondisi ini dapat terjadi seiring bertambahnya usia. Hal ini biasa disebut Posterior Vitreous Detachment (PVD).\r\n\r\nTidak ada penjelasan rinci mengenai PVD yang dapat menyebabkan ablasi retina pada beberapa orang. Selain itu, tidak ada hal yang bisa dilakukan untuk mencegahnya. Ablasi retina lebih mungkin terjadi pada penderita rabun jauh, orang yang pernah menjalani operasi mata sebelumnya (seperti operasi katarak), cedera mata, maupun orang yang memiliki keluarga dengan riwayat ablasi retina.\r\n', 'Dokter mata mendiagnosis ablasi retina dengan melakukan tes pemeriksaan retina dan ultrasound imaging. Langkah ini dilakukan jika sudah terjadi pendarahan di mata dan adanya kesulitan untuk melihat retina. Dokter mata biasanya akan memeriksa kedua mata, walaupun gejalanya hanya tampak pada satu mata.', 'Pengobatan ablasi retina dapat dilakukan dengan beberapa cara, yaitu dengan menggunakan laser (thermal) atau pembekuan (cryopexy), retinopeksi pneumatic (penyuntikan gelembung kecil untuk memastikan retina kembali ke posisi normal), scleral buckle (penjahitan karet atau silikon ke sklera), dan vitrektomi (mengambil cairan viterus dan menggantinya dengan gas atau gelembung).', 'Ablasi retina dapat dicegah dengan melakukan pemeriksaan mata secara rutin ke dokter mata. Semakin awal ablasi retina terdeteksi oleh dokter, maka akan semakin baik, karena dapat diobati dengan lebih cepat. Pemeriksaan mata secara rutin juga dapat mengidentifikasi adanya perubahan pada mata yang mungkin tidak Anda sadari.\r\n\r\nSebaiknya, periksakan mata sekali dalam setahun, atau lebih sering, jika Anda memiliki penyakit diabetes yang berisiko terhadap penyakit mata. Apabila Anda memiliki penyakit diabetes atau tekanan darah tinggi, sebaiknya tetaplah mengontrol kondisi tersebut. Hal ini akan membantu menjaga pembuluh darah di retina mata Anda tetap sehat.\r\n'),
(7, 'Abses Gigi ', 5, 'Abses gigi adalah kumpulan nanah yang terbentuk di dalam gigi, gusi atau tulang penyanggah gigi dan disebabkan oleh infeksi bakteri. Abses di ujung gigi disebut abses periapikal. Sementara itu, abses pada gusi disebut abses periodontal.\r\n\r\nKondisi ini dapat menimbulkan rasa nyeri bagi penderitanya. Karena itu, sangat penting untuk mengobati abses sesegera mungkin. Abses tidak dapat sembuh dengan sendirinya dan dapat menyebar ke area yang lain', '\r\n\r\n    Rasa sakit berdenyut di gigi atau gusi yang datang tiba-tiba dan semakin memburuk\r\n    Rasa sakit yang menyebar ke telinga, rahang, dan leher pada sisi yang sama\r\n    Rasa sakit yang memburuk ketika berbaring dan dapat mengganggu tidur\r\n    Kemerahan dan bengkak di wajah\r\n    Gigi goyang dan berubah warna\r\n    Gusi mengkilap, merah dan bengkak\r\n    Sensitivitas terhadap makanan dan minuman panas atau dingin\r\n    Bau mulut dan rasa tidak enak di mulut\r\n    Demam\r\n    Kelenjar getah bening membengkak \r\n    Jika abses pecah maka akan ada bau tidak sedap, lidah mengecap rasa busuk.\r\n\r\n', '\r\n\r\nAbses gigi disebabkan oleh bakteri yang masuk ke dalam gigi dan umumnya terjadi sebagi komplikasi dari infeksi yang terjadi di gigi.\r\n\r\n    Penyebab Abses Periapikal\r\n    Abses dapat terbentuk di ujung akar gigi karena bakteri yang masuk melalui lubang di gigi. Semakin parah lubang yang terdapat di gigi, bakteri akan mampu masuk semakin dalam, bahkan hingga ke ujung akar hingga dapat membentuk abses.\r\n    Penyebab Abses Periodontal\r\n    Bakteri yang terdapat pada plak gigi juga dapat menginfeksi gusi dan menyebabkan radang gusi. Kondisi ini menyebabkan jaringan lunak dan permukaan akar gigi yang tadinya saling menempel menjadi terpisah dan membentuk sebuah cekungan seperti kantung.\r\n\r\nKantung tersebut sangat mudah kotor dan sulit dibersihkan. Sehingga, bakteri banyak yang tertumpuk di sana. Lama kelamaan, bakteri tersebut akan menyebabkan terbentuknya abses periodontal.\r\n\r\nFaktor resiko abses gigi adalah seseorang yang sering konsumsi makanan tinggi gula dimana dapat menyebabkan gigi berubang, kemudian dapat pula disebabkan oleh kurangnya kebersihan gigi dan mulut.\r\n', '\r\n\r\nDiagnosis untuk abses gigi hanya dapat dilakukan oleh dokter gigi dengan cara:\r\n\r\n    Pemeriksaan fisik. Hal ini dilakukan untuk memeriksa  gigi dan mulut \r\n    Mengetuk gigi. Pada gigi yang ujung akarnya terdapat abses akan lebih sensitif dan mudah nyeri bila diketuk.\r\n    Pemeriksaan rontgen. Pengambilan rontgen gigi dapat membantu dokter untuk melihat abses secara lebih jelas dan mengetahui apabila telah terjadi penyebaran abses di area lain.\r\n    Pemeriksaan CT Scan. Apabila abses telah menyebar hingga ke area leher, pemeriksaan ini dapat membantu untuk melihat sejauh mana infeksi telah menyebar.\r\n\r\n', '\r\n\r\nPengobatan abses gigi dilakukan dengan menghilangkan sumber infeksi dan mengeluarkan nanah pada lokasi abses. Sejumlah langkah perawatan abses gigi antara lain:\r\n\r\n    Mencabut gigi yang terkena abses\r\n    Pencabutan diperlukan apabila perawatan saluran akar tidak memungkinkan.\r\n    Perawatan saluran akar\r\n    Ini merupakan prosedur untuk menghilangkan abses dari akar gigi yang bermasalah. Perawatan saluran akar dilakukan sebelum gigi tersebut ditambal.\r\n    Insisi dan drainase\r\n    Dokter gigi akan membuat sayatan pada gusi untuk mengeluarkan abses.\r\n\r\nAnestesi lokal biasanya akan digunakan untuk membius area yang terinfeksi saat prosedur dilakukan. Antibiotik tidak diresepkan rutin untuk abses gigi, tapi dapat digunakan jika infeksi menyebar atau menyebabkan kondisi yang sangat parah.\r\n', '\r\n\r\nRisiko terjadinya abses gigi dapat dikurangi dengan menjaga gigi dan gusi tetap sehat. Hal-hal yang dapat Anda lakukan di antaranya adalah:\r\n\r\n    Menggunakan benang gigi setidaknya satu kali sehari\r\n    Menggosok gigi dengan pasta gigi berflorida dua kali sehari\r\n    Mengurangi makanan dan minuman manis yang mengandung zat tepung, terutama sesaat sebelum tidur\r\n    Melakukan kunjungan ke dokter gigi secara teratur\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id_rs` int(11) NOT NULL,
  `id_kategori_rs` int(11) NOT NULL,
  `nama_rs` varchar(50) NOT NULL,
  `foto_rs` text NOT NULL,
  `lokasi_rs` text NOT NULL,
  `jam_operasional_rs` varchar(20) NOT NULL,
  `bidang_rs` text NOT NULL,
  `dokter` text NOT NULL,
  `profil_rs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id_rs`, `id_kategori_rs`, `nama_rs`, `foto_rs`, `lokasi_rs`, `jam_operasional_rs`, `bidang_rs`, `dokter`, `profil_rs`) VALUES
(10, 1, 'RS Zahirah', 'zahirah-jakarta-selatan-HCFH00000127.webp', 'Jl. Sirsak No.21, RT.9/RW.1, Jagakarsa, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12620', '09:00-21:00', 'gigi,kandungan,jantung,penyakit dalam,psikolog,', 'dr. Yulinda Indarnila Soemiatno Sp.M,Yanthi Andriani S.Psi,', 'Rumah Sakit Ibu dan Anak Zahirah adalah rumah sakit yang berada di Jagakarsa, Jakarta Selatan. Rumah Sakit Ibu dan Anak Zahirah ini merupakan rumah sakit tipe C. Jam operasional rumah sakit ini adalah pada hari Senin sampai Minggu selama 24'),
(11, 1, ' RS Yadika Pondok Bambu', 'yadika-pondok-bambu-jakarta-timur-HCFH00000115.jpg', 'Jl. Pahlawan Revolusi No.47, RT.4/RW.5, Pd. Bambu, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13430', '09:00-21:00', 'psikolog,anak,umum,', 'Veronika Sisilia A. Utama S.Gz,Utami Trie Wahyuni S.Psi M.Psi,', 'Rumah Sakit Yadika Pondok Bambu adalah rumah sakit yang berada di Duren Sawit,Jakarta Timur. Rumah sakit ini berdiri sejak tahun 1992. Jam operasional rumah sakit ini adalah pada hari Senin sampai Minggu selama 24 jam. Rumah sakit ini melayani pasien asuransi.\r\n\r\nVisi RS Yadika Pondok Bambu adalah menjadi RS terkemuka dan profesional serta memberikan pelayanan prima dengan tetap berorientasi kepada kepuasan pelanggan. Kemudiam, misi RS ini ialah meningkatkan mutu pelayanan secara komprehensif bagi pelanggan dan meningkatkan mutu SDM untuk mencapai profesionalisme dan kesejahteraan karyawan.'),
(12, 6, 'Yua Medical Aesthetic Clinic', 'yua-medical-HCFC00001553.jpg', 'Jalan Meruya Ilir No. 88  Jakarta', '09:00-18:00', 'kulit,', 'Yanthi Andriani S.Psi,', 'Klinik Kulit dan Kecantikan Yua Medical Aesthetic Clinic adalah Klinik Kulit dan Kecantikan yang berlokasi di Kembangan kota Jakarta Barat. Yua Medical Aesthetic Clinic (YuaMAC) telah berdiri selama 9 tahun, berada di bawah supervisor para dokter yang telah memiliki kualifikasi dalam memberikan pelayanan kesehatan. YuaMAC memberikan suatu perawatan holistik yang berfokus pada kecantikan dan kesehatan bagi kaum pria maupun wanita Indonesia.\r\n\r\nZaman modern saat ini tidak hanya menuntut wanita untuk tampil menarik dan cantik di lingkungan kerja maupun di depan suami. Para pria pun dituntut untuk tampil menarik, menonjolkan sisi estetik dari penampilannya ketika di lingkungan kerja. Pada intinya, baik wanita maupun pria berada sejajar untuk mendapatkan penampilan yang terbaik. Keadaan polusi di Indonesia saat ini kerap menimbulkan banyak keluhan tidak hanya bagi wanita, tapi juga berlaku bagi pria, seperti kulit menjadi kusam, kering serta terjadinya penuaan dini seperti keriput-keriput di wajah, leher dan tangan.\r\n\r\nPerawatan di YuaMAC menggunakan obat-obatan yang telah disetujui oleh badan POM dan dibawah supervisi dokter ahli sehingga tidak membahayakan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_akses` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_akses`, `nama_user`, `username`, `password`, `email`) VALUES
(4, 1, 'dr. Yulinda Indarnila Soemiatno, Sp.M', 'yulindas', 'yulinda', 'yulinda@gmail.com'),
(8, 1, 'baru', 'bari', 'test', 'mew'),
(9, 2, 'nice', 'nice', 'nice', 'kuuhaku@gmail.com'),
(10, 1, 'feila', 'feila', 'feila', 'feila@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id_kategori_artikel`);

--
-- Indeks untuk tabel `kategori_penyakit`
--
ALTER TABLE `kategori_penyakit`
  ADD PRIMARY KEY (`id_kategori_penyakit`);

--
-- Indeks untuk tabel `kategori_rs`
--
ALTER TABLE `kategori_rs`
  ADD PRIMARY KEY (`id_kategori_rs`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id_kategori_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategori_penyakit`
--
ALTER TABLE `kategori_penyakit`
  MODIFY `id_kategori_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kategori_rs`
--
ALTER TABLE `kategori_rs`
  MODIFY `id_kategori_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
