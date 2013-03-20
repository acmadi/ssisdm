/*
SQLyog Community v9.63 
MySQL - 5.0.51b-community-nt : Database - dbssisdm
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `acc_tablecoa` */

CREATE TABLE `acc_tablecoa` (
  `KodeCoa` varchar(7) NOT NULL,
  `NamaCoa` varchar(250) default NULL,
  `Level` int(11) default NULL,
  `FlagTrx` int(1) NOT NULL default '0',
  `FlagNeraca` int(11) NOT NULL default '1',
  `sadmin` varchar(20) NOT NULL default '0',
  `FlagLR` int(1) NOT NULL default '0',
  `Level2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `acc_tablecoa` */

insert  into `acc_tablecoa`(`KodeCoa`,`NamaCoa`,`Level`,`FlagTrx`,`FlagNeraca`,`sadmin`,`FlagLR`,`Level2`) values ('5222000','Biaya Pemasaran',3,1,0,'0',1,0),('5223000','Biaya Rapat/Pertemuan',3,1,0,'0',1,0),('5224000','Biaya Pembinaan Pegawai',3,1,0,'0',1,0),('5225000','Biaya Perjanuam Tamu',3,1,0,'0',1,0),('5226000','Biaya Pengiriman ',3,0,0,'0',1,0),('5227000','Biaya Perangko/Matrai',3,1,0,'0',1,0),('5228000','Biaya Selisih Kurs Transaksi',3,1,0,'0',1,0),('5300000','Biaya Lain-Lain',2,0,0,'0',1,0),('1104104','Persediaan Suku Cadang - UPS',5,1,1,'0',0,0),('5201209','Reward',5,1,0,'0',1,0),('2101600','Hutang Usaha -  Vendor UPS',4,0,1,'0',0,0),('5226100','Biaya Pengiriman Dokumen',4,1,0,'0',1,0),('5226200','Biaya Pengiriman Barang',4,1,0,'0',1,0),('5301100','Biaya Bank',4,1,0,'0',1,0),('1103203','Piutang Penjualan CCTV - PT Hotel Quality Solo',5,1,1,'0',0,0),('1202502','Akum. Harga Perolehan Perangkat Keras Komputer SGU',5,1,1,'0',0,0),('4201000','Pendapatan Jasa Giro',3,1,0,'0',1,0),('5218100','Biaya Telepon Tetap Kantor',4,1,0,'0',1,0),('5218200','Biaya Tetap Genggam Kantor',4,1,0,'0',1,0),('5219000','Biaya Lingkungan',3,1,0,'0',1,0),('5220000','Biaya Iklan',3,1,0,'0',1,0),('5221000','Biaya Makan/Minum Pegawai',3,1,0,'0',1,0),('1202401','Harga Perolehan Perabotan Kantor Sewa Guna Usaha',5,1,1,'0',0,0),('1300000','Aktiva Lainnya',2,0,1,'0',0,0),('2101400','Hutang Usaha  Vendor Telekomunikasi',4,0,1,'0',0,0),('2101401','Hutang Usaha  Vendor Telekomunikasi - Telkom',5,1,1,'0',0,0),('1100000','Aktiva Lancar',2,0,1,'2000000',0,0),('1101000','Kas',3,0,1,'1000000',0,0),('1202500','Perangkat Keras Komputer',4,0,1,'0',0,0),('5301000','Biaya Bunga & Bank',3,0,0,'0',1,0),('5302000','Biaya Pajak',3,0,0,'0',1,0),('5302100','Biaya PPh 21',4,1,0,'0',1,0),('5302200','Biaya PPh 22',4,1,0,'0',1,0),('5302300','Biaya PPh 23',4,1,0,'0',1,0),('5302400','Biaya PPh 24',4,1,0,'0',1,0),('3200000','Laba Rugi Tahun Berjalan',2,0,1,'2000000',2,0),('2101500','Hutang Usaha  Lainnya',4,0,1,'0',0,0),('2102100','Hutang Pajak - PPN Keluaran',4,1,1,'0',0,0),('2104200','Kewajiban YMH Dibayar Iuran Kop. Swadharma',4,1,1,'0',0,0),('2104500','Kewajiban Pajak Tangguhan',4,1,1,'0',0,0),('1201201','Harga Perolehan Bangunan Milik Sendiri',5,1,1,'0',0,0),('1201401','Harga Perolehan Perabotan Kantor Milik Sendiri',5,1,1,'0',0,0),('1202300','Kendaraan',4,0,1,'0',0,0),('3202000','Laba Rugi Bulan Berjalan',3,1,1,'0',2,0),('3500000','Cadangan Umum',2,1,1,'0',0,0),('4000000','PENDAPATAN',1,0,0,'0',1,0),('4101100','Pendapatan Penjualan produk Q.System',4,0,0,'0',1,0),('2200000','Kewajiban Jangka Panjang',2,0,1,'0',0,0),('2201000','Hutang Bank',3,0,1,'0',0,0),('3000000','MODAL',1,0,1,'2000000',0,0),('3100000','Modal Di Setor',2,1,1,'0',0,0),('1101101','Kas Kecil JST',5,1,1,'1000000',0,5),('1103301','Piutang Usaha Penjualan Kios K - PT SSI (TRD)',5,1,1,'0',0,0),('1104101','Persediaan Suku Cadang - Q. System',5,1,1,'0',0,0),('1104102','Persediaan Suku Cadang - CCTV',5,1,1,'0',0,0),('2100000','Kewajiban Lancar',2,0,1,'0',0,0),('2101000','Hutang Usaha',3,0,1,'0',0,0),('1000000','AKTIVA',1,0,1,'2000000',0,0),('3201000','Laba Rugi s.d Bulan Lalu',3,1,1,'2000000',2,0),('1202501','Harga Perolehan Perangkat Keras Komputer SGU',5,1,1,'0',0,0),('4102400','Pendapatan Layanan Papan Informasi Forex',4,1,0,'0',1,0),('2104102','Premi Asuransi - Bahtera Abadi',5,1,1,'0',0,0),('2104101','Premi Jamsostek',5,1,1,'0',0,0),('1103402','Piutang Usaha Lainnya - Non PT SSI',5,1,1,'0',0,0),('1201500','Perangkat Keras komputer',4,0,1,'0',0,0),('1201501','Harga Perolehan Perangkat Keras komputer',5,1,1,'0',0,0),('1201502','Akum.Penyusutan Perangkat Keras komputer',5,1,1,'0',0,0),('5217000','Biaya Air/PDAM',3,1,0,'0',1,0),('5215000','Biaya Gedung',3,0,0,'0',1,0),('3600000','Koreksi Laba/Rugi Tahun Lalu',2,1,1,'0',0,0),('2101501','Hutang Usaha - PT. Swadharma Sarana Informatika',5,1,1,'0',0,0),('2101502','Hutang Usaha - Yayasan Danar Dana',5,1,1,'0',0,0),('5215300','Biaya PBB',4,1,0,'0',1,0),('5216000','Biaya Listrik',3,1,0,'0',1,0),('5213000','Biaya Langganan Media Komunikasi',3,0,0,'0',1,0),('5214000','Biaya Pengembangan Dan Riset',3,0,0,'0',1,0),('5209000','Biaya Jasa Manajemen & Konsultan',3,1,0,'0',1,0),('5210000','Biaya Transportasi Dalam Kota',3,0,0,'0',1,0),('5211000','Biaya Perjalanan Dinas',3,0,0,'0',1,0),('5211100','Biaya Transportasi Perjalanan Dinas',4,1,0,'0',1,0),('5211200','Lumpsum Perjalanan Dinas',4,1,0,'0',1,0),('5212000','Biaya Pelatihan',3,0,0,'0',1,0),('5207200','Biaya Penyusutan Kendaraan',4,1,0,'0',1,0),('5207300','Biaya Penyusutan Perabotan Kantor',4,1,0,'0',1,0),('5208000','Biaya Kendaraan',3,0,0,'0',1,0),('5215200','Biaya Pemeliharaan Gedung',4,1,0,'0',1,0),('3400000','Saldo Laba',2,0,1,'0',0,0),('5207400','Biaya Penyusutan Perangkat Keras',4,1,0,'0',1,0),('5207500','Biaya Penyusutan Mesin-mesin Kantor',4,1,0,'0',1,0),('5201202','Tunjangan Pengangkutan',5,1,0,'0',1,0),('5201203','Biaya Pengobatan',5,1,0,'0',1,0),('5201204','Tunjangan Hari Raya',5,1,0,'0',1,0),('5201205','Premi Asuransi Bahtera Abadi',5,1,0,'0',1,0),('5201206','Pesangon',5,1,0,'0',1,0),('5201207','Bonus',5,1,0,'0',1,0),('5201208','Biaya Repersentasi Direksi & Komisaris',5,1,0,'0',1,0),('5201105','Tunjangan Penyesuaian',5,1,0,'0',1,0),('5201106','Bantuan Jamsostek',5,1,0,'0',1,0),('5201200','Biaya Sumber Daya Manusia Lainnya',4,0,0,'0',1,0),('5201201','Upah Lembur',5,1,0,'0',1,0),('5200000','Biaya Operasional',2,0,0,'0',1,0),('5201000','Biaya Sumber Daya Manusia',3,0,0,'0',1,0),('5201100','Gaji',4,0,0,'0',1,0),('5201101','Gaji Pokok',5,1,0,'0',1,0),('5201102','Upah Minimum Propinsi',5,1,0,'0',1,0),('5201103','Tunjangan Transfortasi',5,1,0,'0',1,0),('5201104','Tunjangan Jabatan',5,1,0,'0',1,0),('5210100','Biaya Transportasi Umum Dalam Kota',4,1,0,'0',1,0),('5102000','Harga Pokok Penjualan',3,0,0,'0',1,0),('5102100','Harga Pokok Penjualan - Suku Cadang',4,0,0,'0',1,0),('5101200','Biaya Lainnya',4,1,0,'0',1,0),('2201100','Hutang Bank XYZ',4,0,1,'0',0,0),('1202202','Akm. Penyusutan Bangunan Sewa Guna Usaha',5,1,1,'0',0,0),('1202402','Akm. Penyusutan Perabotan Kantor Sewa Guna Usaha',5,1,1,'0',0,0),('1304000','Uang Jaminan',3,0,1,'0',0,0),('1304200','Uang Jaminan - PLN',4,1,1,'0',0,0),('2104100','Kewajiban YMH Dibayar - Premi Asuransi',4,0,1,'0',0,0),('2104300','Kewajiban YMH Dibayar Iuran Pensiun (DPLK)',4,1,1,'0',0,0),('1201402','Akm. Penyusutan Perabotan Kantor Milik Sendiri',5,1,1,'0',0,0),('1101100','Kas Kecil',4,0,1,'1000000',0,0),('1102100','Giro',4,0,1,'0',0,0),('1104000','Persediaan',3,0,1,'0',0,0),('1105100','Sewa Gedung Dibayar Dimuka',4,1,1,'0',0,0),('1107400','Persekot Lainnya',4,1,1,'0',0,0),('4101300','Pendapatan Penjualan produk  Kios K',4,0,0,'0',1,0),('4101302','Pendapatan Penjualan produk Kois K - Non BNI',5,1,0,'0',1,0),('4101200','Pendapatan Penjualan produk  CCTV',4,0,0,'0',1,0),('5202000','Biaya ALat Tulis Menulis',3,1,0,'0',1,0),('5203000','Biaya Keperluan Kantor',3,1,0,'0',1,0),('5204000','Biaya Perawatan Peralatan Kantor',3,1,0,'0',1,0),('5205000','Biaya Perangkat Keras',3,1,0,'0',1,0),('5206000','Biaya Perangkat Lunak',3,1,0,'0',1,0),('5207000','Biaya Penyusutan',3,0,0,'0',1,0),('5207100','Biaya Penyusutan Bangunan/Gedung',4,1,0,'0',1,0),('5218000','Biaya Telepon',3,0,0,'0',1,0),('1103401','Piutang Usaha Lainnya - PT SSI ',5,1,1,'0',0,0),('2202000','Hutang Sewa Guna Usaha',3,0,1,'0',0,0),('2203300','Tantiem ',4,1,1,'0',0,0),('3300000','Laba Rugi Tahun Lalu',2,1,1,'0',0,0),('1103100','Piutang Penjualan Q.System',4,0,1,'0',0,0),('1302000','Pajak Tangguhan',3,1,1,'0',0,0),('1303000','Taksiran Restitusi Pajak',3,1,1,'0',0,0),('2000000','KEWAJIBAN',1,0,1,'0',0,0),('2101402','Hutang Usaha  Vendor Telekomunikasi Excelcomindo Pratama',5,1,1,'0',0,0),('2102200','Hutang Pajak - PPh 23',4,1,1,'0',0,0),('2103100','Hutang Lembur',4,1,1,'0',0,0),('1200000','Aktiva Tetap',2,0,1,'0',0,0),('1201100','Tanah',4,0,1,'0',0,0),('1201400','Perabotan Kantor',4,0,1,'0',0,0),('1202201','Harga Perolehan Bangunan Sewa Guna Usaha',5,1,1,'0',0,0),('1202301','Harga Perolehan Kendaraan Sewa Guna Usaha',5,1,1,'0',0,0),('1301000','Piutang Pegawai',3,0,1,'0',0,0),('1106300','PPh 25 Dibayar DImuka',4,1,1,'0',0,0),('4101502','Pendapatan Penjualan Produk UPS - Non BNI',5,1,0,'0',1,0),('1107300','Persekot Biaya Kantor',4,1,1,'0',0,0),('1103201','Piutang Penjualan CCTV - PT SSI (TRD)',5,1,1,'0',0,0),('1103302','Piutang Usaha Penjualan Kios K - PT BNI',5,1,1,'0',0,0),('1104100','Persediaan Suku Cadang',4,0,1,'0',0,0),('1104202','Persediaan Supplies ATK -  Perangko/Matrai',5,1,1,'0',0,0),('1102000','Bank',3,0,1,'0',0,0),('1102200','Deposito',4,0,1,'0',0,0),('1103101','Piutang Penjualan Q.System - PT SSI (TRD)',5,1,1,'0',0,0),('1103200','Piutang Penjualan CCTV',4,0,1,'0',0,0),('2203100','Hutang Hub Istimewa ',4,1,1,'0',0,0),('2203200','Deividen ',4,1,1,'0',0,0),('4101000','Pendapatan Penjualan produk',3,0,0,'0',1,0),('4101102','Pendapatan Penjualan produk Q.System - Non BNI',5,1,0,'0',1,0),('4101201','Pendapatan Penjualan produk CCTV - BNI',5,1,0,'0',1,0),('1202302','Akm. Penyusutan Kendaraan Sewa Guna Usaha',5,1,1,'0',0,0),('1202400','Perabotan Kantor',4,0,1,'0',0,0),('1304300','Uang Jaminan - Club',4,1,1,'0',0,0),('2101102','Hutang Usaha Vendor Komputer - Toko Glodok',5,1,1,'0',0,0),('2101200','Hutang Usaha  Vendor Q.System',4,0,1,'0',0,0),('2202100','Swadharma Indo Finance',4,1,1,'0',0,0),('2203000','Hutang Hub Istimewa ',3,0,1,'0',0,0),('1202100','Tanah',4,1,1,'0',0,0),('1202200','Bangunan',4,0,1,'0',0,0),('2101601','Hutang Usaha Vendor UPS - PT.Jasinto Prima Sakti',5,1,1,'0',0,0),('1106100','PPN Dibayar Dimuka',4,1,1,'0',0,0),('1106400','PPh 22 Dibayar DImuka',4,1,1,'0',0,0),('1103400','Piutang Lainnya',4,0,1,'0',0,0),('1104200','Persediaan Supplies ATK',4,0,1,'0',0,0),('1105000','Biaya Dibayar Dimuka',3,0,1,'1000000',0,0),('1105200','Premi Asuransi Dibayar Dimuka',4,1,1,'0',0,0),('1105300','Biaya Dibayar Dimuka Lainnya',4,1,1,'1000000',0,4),('2101301','Hutang Usaha  Vendor CCTV - Toko A',5,1,1,'0',0,0),('1102201','Deposito BNI X',5,1,1,'0',0,5),('1103000','Piutang Usaha',3,0,1,'0',0,0),('1103202','Piutang Penjualan CCTV - PT BNI',5,1,1,'0',0,0),('1103300','Piutang Usaha Penjualan Kios K',4,0,1,'0',0,0),('1201301','Harga Perolehan Kendaraan Milik Sendiri',5,1,1,'0',0,0),('1201302','Akm. Penyusutan Kendaraan Milik Sendiri',5,1,1,'0',0,0),('1202000','Aktiva Tetap Sewa Guna Usaha',3,0,1,'0',0,0),('4101500','Pendapatan Penjualan Produk Komputer',4,1,0,'0',1,0),('1304100','Uang Jaminan - PDAM',4,1,1,'0',0,0),('2101100','Hutang Usaha - Vendor Komputer',4,0,1,'0',0,0),('2101101','Hutang Usaha Vendor Komputer - Toko harco Mangga Dua',5,1,1,'0',0,0),('2101201','Hutang Usaha  Vendor Q.System - Toko A',5,1,1,'0',0,0),('2101300','Hutang Usaha  Vendor CCTV',4,0,1,'0',0,0),('1201000','Aktiva Tetap Milik Sendiri',3,0,1,'0',0,0),('1201200','Bangunan',4,0,1,'0',0,0),('1201202','Akm. Penyusutan Bangunan Milik Sendiri',5,1,1,'0',0,0),('1201300','Kendaraan',4,0,1,'0',0,0),('1106200','PPh 23 Dibayar DImuka',4,1,1,'0',0,0),('1107000','Persekot',3,0,1,'0',0,0),('1107100','Persekot Perjalanan Dinas',4,1,1,'0',0,0),('1107200','Persekot Gaji Pegawai',4,1,1,'0',0,0),('1103500','Cadangan Kerugian Piutang Usaha ',4,1,1,'0',0,0),('1104103','Persediaan Suku Cadang - Komputer',5,1,1,'0',0,0),('1104201','Persediaan Supplies ATK - Alat Tulis Kantor',5,1,1,'0',0,0),('4101501','Pendapatan Penjualan Produk UPS - BNI',5,1,0,'0',1,0),('1104203','Persediaan Supplies ATK -  Formulir',5,1,1,'0',0,0),('1106000','Pajak Dibayar Dimuka',3,0,1,'0',0,0),('5102104','HPP -  Komputer',5,1,0,'0',1,0),('5213100','Biaya Koran/Majalah',4,1,0,'0',1,0),('5000000','BIAYA',1,0,0,'0',1,0),('5100000','Biaya Usaha',2,0,0,'0',1,0),('5101000','Biaya Suku Cadang',3,0,0,'0',1,0),('5101100','Biaya Suku Cadang',4,1,0,'0',1,0),('4200000','Pendapatan Lain Lain',2,0,0,'0',1,0),('4102300','Pendapatan Jasa Telekomunikasi',4,1,0,'0',1,0),('5210300','Biaya Parkir & Tol',4,1,0,'0',1,0),('4101202','Pendapatan Penjualan produk CCTV - Non BNI',5,1,0,'0',1,0),('4102200','Pendapatan Jasa Perawatan Otomasi',4,1,0,'0',1,0),('4102100','Pendapatan Jasa Instalasi',4,1,0,'0',1,0),('4102000','Pendapatan Layanan & Jasa',3,0,0,'0',1,0),('2103000','Hutang Transitoris',3,0,1,'0',0,0),('2103200','Hutang Perjalanan Dinas',4,1,1,'0',0,0),('2103300','Hutang Kepada Pegawai',4,1,1,'0',0,0),('2104000','Kewajiban YMH Dibayar',3,0,1,'0',0,0),('4101400','Pendapatan Penjualan produk Lainnya',4,1,0,'0',1,0),('2102000','Hutang Pajak',3,0,1,'0',0,0),('5102101','HPP - Q.system',5,1,0,'0',1,0),('5102103','HPP -  CCTV',5,1,0,'0',1,0),('5102102','HPP -  UPS',5,1,0,'0',1,0),('4202000','Pendapatan Non Usaha Lainnya',3,1,0,'0',1,0),('5213300','Biaya TV Kabel',4,1,0,'0',1,0),('5210200','Biaya BBM',4,1,0,'0',1,0),('4203000','Pendapatan Jasa Pinjaman Pegawai',3,1,0,'0',1,0),('5213200','Biaya Internet',4,1,0,'0',1,0),('3700000','Cadangan Tujuan',2,1,1,'0',0,0),('4204000','Pendapatan Selisih Kurs Transaksi',3,1,0,'0',1,0),('1201101','Tanah Milik Sendiri',5,1,1,'0',0,0),('1304400','Uang Jaminan - Bank',4,1,1,'0',0,0),('5215100','Biaya Sewa Gedung',4,1,0,'0',1,0),('4101301','Pendapatan Penjualan produk Kois K - BNI',5,1,0,'0',1,0),('2102300','Hutang Pajak - PPh 21',4,1,1,'0',0,0),('2104400','Kewajiban estimasi Pesangon',4,1,1,'0',0,0),('2202200','Swadharma Surya Finance',4,1,1,'0',0,0),('4100000','Pendapatan Usaha Operasional',2,0,0,'0',1,0),('4101101','Pendapatan Penjualan produk Q.System - BNI',5,1,0,'0',1,0),('2300000','sdfsdf',2,0,1,'0',0,0),('2400000','sdfsdfss',2,0,1,'0',0,0),('4300000','xxxx',2,0,0,'0',1,0),('1108000','zzzzz',3,0,1,'0',0,0),('1109000','cvxcvxcv',3,0,1,'0',0,0),('1203000','xzcvxcvxcv',3,0,1,'0',0,0),('1204000','vbcvb',3,0,1,'0',0,0),('1400000','sssssssss',2,0,1,'0',0,0),('1500000','gggggggggg',2,0,1,'0',0,0),('1600000','ghjghjghj',2,0,1,'0',0,0),('1700000','ghjghjgh',2,0,1,'0',0,0),('1800000','ghjghj',2,0,1,'0',0,0),('1110000','hhhhhhhh',3,0,1,'0',0,0),('1111000','ghjg',3,0,1,'0',0,0),('1112000','yyyyyyyyyyyy',3,0,1,'0',0,0),('1113000','ssssssssssss',3,0,1,'0',0,0),('1101200','fffffff',4,0,1,'0',0,0),('1101300','dfgdfgdfg',4,0,1,'0',0,0),('1101400','dfgdfg',4,0,1,'0',0,0),('1114000','vvvvvvvvvvvv',3,0,1,'0',0,0),('1900000','ccccc',2,0,1,'0',0,0),('','',2,0,1,'0',0,0);

/*Table structure for table `agama` */

CREATE TABLE `agama` (
  `agama_id` int(1) default NULL,
  `agama` varchar(15) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `agama` */

insert  into `agama`(`agama_id`,`agama`) values (1,'Islam'),(2,'Kristen Protest'),(3,'Kristen Katolik'),(4,'Hindu'),(5,'Budha');

/*Table structure for table `bank` */

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL auto_increment,
  `bank` varchar(60) default NULL,
  PRIMARY KEY  (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bank` */

/*Table structure for table `cuti` */

CREATE TABLE `cuti` (
  `cuti_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) NOT NULL,
  `tahun` int(4) default NULL,
  `jumlah_ambil` int(2) default NULL,
  `narasi_tgl` date default NULL,
  `keperluan` varchar(250) default NULL,
  PRIMARY KEY  (`cuti_id`,`peg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cuti` */

/*Table structure for table `jabatan` */

CREATE TABLE `jabatan` (
  `jabatan_id` int(2) NOT NULL auto_increment,
  `jabatan` varchar(70) default NULL,
  `aktif` int(1) default NULL,
  PRIMARY KEY  (`jabatan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `jabatan` */

insert  into `jabatan`(`jabatan_id`,`jabatan`,`aktif`) values (1,'General Manager ',1),(2,'Manager',1),(3,'Koordinator',1),(4,'Staf',1);

/*Table structure for table `jenis_kartu` */

CREATE TABLE `jenis_kartu` (
  `jenis_kartu_id` int(2) default NULL,
  `jenis_kartu` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jenis_kartu` */

/*Table structure for table `jenishub_klg` */

CREATE TABLE `jenishub_klg` (
  `jenishub_id` int(2) NOT NULL auto_increment,
  `jenishub` varchar(70) default NULL,
  PRIMARY KEY  (`jenishub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `jenishub_klg` */

insert  into `jenishub_klg`(`jenishub_id`,`jenishub`) values (1,'Ayah'),(2,'Ibu'),(3,'Sodara'),(4,'Istri/Suami'),(5,'Anak');

/*Table structure for table `kartu_identitas_peg` */

CREATE TABLE `kartu_identitas_peg` (
  `kartus_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `jenis_kartu_id` int(3) default NULL,
  `nokartu` varchar(30) default NULL,
  `tgl_berlaku` date default NULL,
  PRIMARY KEY  (`kartus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kartu_identitas_peg` */

/*Table structure for table `keluarga` */

CREATE TABLE `keluarga` (
  `keluarga_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `codetrx` varchar(10) default NULL,
  `jenishub_id` int(3) default NULL,
  `nama` varchar(70) default NULL,
  `level_pendidikan_kel` int(2) default NULL,
  `usia` int(2) default NULL,
  `genderkel` char(1) default NULL,
  `pekerjaan` varchar(50) default NULL,
  `perusahaan` varchar(50) default NULL,
  `flag` int(1) default '0',
  PRIMARY KEY  (`keluarga_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `keluarga` */

insert  into `keluarga`(`keluarga_id`,`peg_id`,`codetrx`,`jenishub_id`,`nama`,`level_pendidikan_kel`,`usia`,`genderkel`,`pekerjaan`,`perusahaan`,`flag`) values (1,NULL,'TDN0viFg4a',1,'nnn',4,44,'M','','',0);

/*Table structure for table `lokasi_kerja` */

CREATE TABLE `lokasi_kerja` (
  `lokasi_id` int(3) NOT NULL auto_increment,
  `lokasi` varchar(4) default NULL,
  `lokasi_kerja` varchar(70) default NULL,
  `alamat` varchar(250) default NULL,
  `level` int(1) default NULL,
  `aktif` int(1) default NULL,
  PRIMARY KEY  (`lokasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `lokasi_kerja` */

insert  into `lokasi_kerja`(`lokasi_id`,`lokasi`,`lokasi_kerja`,`alamat`,`level`,`aktif`) values (1,'0100','Jakarta',NULL,1,1),(2,'0101','Ampera','Jl Ampera raya',2,1),(3,'0102','Jati Warna','Jati Warna',2,1),(4,'0103','Harmoni','Harmoni',2,1),(5,'0104','Dbase Fatmawati','Fatmawati',2,1),(6,'0105','Gandaria','gandari',2,1),(11,'0200','Bandung',NULL,1,1),(12,'0201','Bandung','Bandung',2,1);

/*Table structure for table `mutasi` */

CREATE TABLE `mutasi` (
  `mutasi_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `no_sk` varchar(30) default NULL,
  `tgl_kontrak` date default NULL,
  `jabatan_id` int(2) default NULL,
  `pangkat_id` int(2) default NULL,
  `departemen_id` int(2) default NULL,
  `cabang_id` int(4) default NULL,
  `narasi` varchar(250) default NULL,
  PRIMARY KEY  (`mutasi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mutasi` */

/*Table structure for table `norek` */

CREATE TABLE `norek` (
  `norek_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `bank_id` int(3) default NULL,
  `norek` varchar(40) default NULL,
  `flag_gaji` char(1) default NULL,
  PRIMARY KEY  (`norek_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `norek` */

/*Table structure for table `organisasi` */

CREATE TABLE `organisasi` (
  `organisasi_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `codetrx` varchar(10) default NULL,
  `nama_organisasi` varchar(10) default NULL,
  `jenis_organisasi` varchar(40) default NULL,
  `th_organisasi` varchar(20) default NULL,
  `jabatan_organisasi` varchar(250) default NULL,
  `flag` int(1) default '0',
  PRIMARY KEY  (`organisasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `organisasi` */

/*Table structure for table `pangkat` */

CREATE TABLE `pangkat` (
  `pangkat_id` int(2) NOT NULL auto_increment,
  `pangkat` varchar(70) default NULL,
  `aktif` int(1) default NULL,
  PRIMARY KEY  (`pangkat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `pangkat` */

insert  into `pangkat`(`pangkat_id`,`pangkat`,`aktif`) values (1,'Pramu',1),(2,'Juru Muda',1),(3,'Juru Madya',1),(4,'Juru Utama',1),(5,'Staf Muda',1),(6,'Staf Madya',1),(7,'Staf Utama',1),(8,'Asisten Manager',1),(9,'Manager',1),(10,'Manager Senior',1);

/*Table structure for table `peg_dinas` */

CREATE TABLE `peg_dinas` (
  `peg_id2` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `npp` varchar(10) default NULL,
  `kontrak_ke` int(2) default NULL,
  `periode_kontrak_trx` int(3) default NULL,
  `nokontrak_SK` varchar(50) default NULL,
  `tgl_awal` date default NULL,
  `tgl_akhir` date default NULL,
  `jabatan_id` int(2) default NULL,
  `lokasi_id` varchar(4) default NULL,
  `unit_bisnis_id` int(2) default NULL,
  `pangkat_id` int(2) default NULL,
  `tmt_tglmasuk` date default NULL,
  `narasi` text,
  `aktif` char(1) NOT NULL default '1',
  PRIMARY KEY  (`peg_id2`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `peg_dinas` */

insert  into `peg_dinas`(`peg_id2`,`peg_id`,`npp`,`kontrak_ke`,`periode_kontrak_trx`,`nokontrak_SK`,`tgl_awal`,`tgl_akhir`,`jabatan_id`,`lokasi_id`,`unit_bisnis_id`,`pangkat_id`,`tmt_tglmasuk`,`narasi`,`aktif`) values (2,21,'1212',NULL,NULL,NULL,NULL,NULL,3,'0105',5,6,'2000-04-02','-','1'),(3,0,'',NULL,NULL,NULL,NULL,NULL,0,'',0,0,'0000-00-00','','1'),(4,0,'',NULL,NULL,NULL,NULL,NULL,0,'',0,0,'0000-00-00','','1');

/*Table structure for table `peg_personal` */

CREATE TABLE `peg_personal` (
  `peg_id` int(11) NOT NULL auto_increment,
  `codetrx` varchar(10) default NULL,
  `namal` varchar(70) default NULL,
  `namap` varchar(70) default NULL,
  `tinggi` varchar(5) default NULL,
  `berat` varchar(5) default NULL,
  `golongan_darah` char(1) default NULL,
  `tempat_lahir` varchar(70) default NULL,
  `tgl_lahir` date default NULL,
  `gender` char(1) default NULL,
  `agama_id` int(1) default NULL,
  `suku` varchar(40) default NULL,
  `warga` int(1) default '0',
  `alamat_asal` varchar(200) default NULL,
  `kode_asal` varchar(4) default NULL,
  `telp_asal` varchar(20) default NULL,
  `kodepos_asal` int(11) default NULL,
  `strumah_asal` int(2) default NULL,
  `alamat_sekarang` varchar(200) default NULL,
  `kode_sekarang` varchar(4) default NULL,
  `telp_sekarang` varchar(20) default NULL,
  `strumah_sekarang` int(2) default NULL,
  `tlp_kantror` varchar(20) default NULL,
  `hp` varchar(20) default NULL,
  `telplain` varchar(30) default NULL,
  `email` varchar(70) default NULL,
  `status_nikah` char(1) default NULL,
  `tanggungan` int(2) default NULL,
  `narasi` text,
  `password` varchar(250) default NULL,
  `username` varchar(40) default NULL,
  `photo` varchar(30) default NULL,
  `aktif` int(1) default '1',
  `status_kerja_id` int(2) default NULL,
  `rollover` enum('Y') default 'Y',
  `periode_kontrak` int(3) default NULL,
  `tgl_masuk` date default NULL,
  `flagStatus` int(1) default NULL,
  PRIMARY KEY  (`peg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `peg_personal` */

insert  into `peg_personal`(`peg_id`,`codetrx`,`namal`,`namap`,`tinggi`,`berat`,`golongan_darah`,`tempat_lahir`,`tgl_lahir`,`gender`,`agama_id`,`suku`,`warga`,`alamat_asal`,`kode_asal`,`telp_asal`,`kodepos_asal`,`strumah_asal`,`alamat_sekarang`,`kode_sekarang`,`telp_sekarang`,`strumah_sekarang`,`tlp_kantror`,`hp`,`telplain`,`email`,`status_nikah`,`tanggungan`,`narasi`,`password`,`username`,`photo`,`aktif`,`status_kerja_id`,`rollover`,`periode_kontrak`,`tgl_masuk`,`flagStatus`) values (21,'123456','Asep Topandi','Asep','170','60','B','sumedang','1975-02-01','M',1,'1',0,'Jl cikamurang 3 no 12','0101','098098098900',95584,1,'jl cipete no 12','0201',NULL,3,'0217656756','08167576567',NULL,'asep@yahoo.com','M',2,'-','827ccb0eea8a706c4c34a16891f84e7b','asep','Picture 002.jpg ',1,4,'Y',0,'2004-02-01',1),(22,'123457','Kholil','Kholil','166','60','O','Surabaya',NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,'Y',NULL,NULL,NULL);

/*Table structure for table `pendidikan` */

CREATE TABLE `pendidikan` (
  `pendidikan_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `codetrx` varchar(10) default NULL,
  `level_pendidikan` varchar(10) default NULL,
  `lokasi` varchar(40) default NULL,
  `institusi` varchar(20) default NULL,
  `jurusan_id` int(4) default NULL,
  `thn_mulai` int(4) default NULL,
  `thn_selesai` int(4) default NULL,
  `narasi` varchar(250) default NULL,
  `ipk` char(5) default NULL,
  `flag` int(1) default '0',
  PRIMARY KEY  (`pendidikan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pendidikan` */

/*Table structure for table `pendidikan_bahasa` */

CREATE TABLE `pendidikan_bahasa` (
  `bahasa_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `codetrx` varchar(10) default NULL,
  `bahasa` varchar(40) default NULL,
  `tulis` int(1) default NULL,
  `baca` int(1) default NULL,
  `bicara` int(1) default NULL,
  `dengar` int(1) default NULL,
  `flag` int(1) default '0',
  PRIMARY KEY  (`bahasa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pendidikan_bahasa` */

/*Table structure for table `pendidikannonf` */

CREATE TABLE `pendidikannonf` (
  `pendidikannonf_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `codetrx` varchar(10) default NULL,
  `jenis` varchar(40) default NULL,
  `tahun` varchar(40) default NULL,
  `lama` varchar(20) default NULL,
  `nama_lembaga` varchar(40) default NULL,
  `biaya` varchar(40) default NULL,
  `flag` int(1) default '0',
  PRIMARY KEY  (`pendidikannonf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pendidikannonf` */

/*Table structure for table `pengalamankerja` */

CREATE TABLE `pengalamankerja` (
  `pengalaman_kerja_id` int(11) NOT NULL auto_increment,
  `codetrx` varchar(10) default NULL,
  `peg_id` int(11) default NULL,
  `perusahaan_riwayat` varchar(70) default NULL,
  `alamatp` varchar(250) default NULL,
  `telpp` varchar(20) default NULL,
  `bidang_usaha` varchar(50) default NULL,
  `type_usaha` varchar(50) default NULL,
  `jabatan_terakhir` varchar(50) default NULL,
  `tgl_masuk` date default NULL,
  `tgl_keluar` date default NULL,
  `jabatan_akhir` varchar(70) default NULL,
  `alasan_keluar` varchar(70) default NULL,
  `flag` int(1) default '0',
  PRIMARY KEY  (`pengalaman_kerja_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengalamankerja` */

/*Table structure for table `periode_kontrak` */

CREATE TABLE `periode_kontrak` (
  `periode_kontrak_id` int(1) NOT NULL auto_increment,
  `periode_kontrak` varchar(30) default NULL,
  `aktif` smallint(1) default NULL,
  PRIMARY KEY  (`periode_kontrak_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `periode_kontrak` */

insert  into `periode_kontrak`(`periode_kontrak_id`,`periode_kontrak`,`aktif`) values (1,'1',1),(2,'2',1),(3,'3',1),(4,'4',1),(5,'5',1),(6,'6',1),(7,'7',1),(8,'8',1),(9,'9',1),(10,'10',1),(11,'11',1),(12,'12',1);

/*Table structure for table `ref_jurusan` */

CREATE TABLE `ref_jurusan` (
  `jurusan_id` int(1) NOT NULL auto_increment,
  `jurusan` varchar(50) default NULL,
  PRIMARY KEY  (`jurusan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `ref_jurusan` */

insert  into `ref_jurusan`(`jurusan_id`,`jurusan`) values (1,'Teknik Elektro'),(2,'Teknik Informatika'),(3,'Akuntansi');

/*Table structure for table `ref_kota` */

CREATE TABLE `ref_kota` (
  `kota_id` int(11) NOT NULL auto_increment,
  `kode` varchar(8) default NULL,
  `nm_kota` varchar(100) NOT NULL,
  `tingkat` char(3) NOT NULL,
  PRIMARY KEY  (`kota_id`)
) ENGINE=MyISAM AUTO_INCREMENT=362 DEFAULT CHARSET=latin1;

/*Data for the table `ref_kota` */

insert  into `ref_kota`(`kota_id`,`kode`,`nm_kota`,`tingkat`) values (1,'01000000','Jawa Barat','1'),(2,'01010000','Bandung','2'),(3,'01020000','Sumedang','2'),(4,'01030000','Cirebon','2'),(310,'02000000','Sumatra Utara','1'),(311,'01040000','Kuningan','2'),(312,'01050000','Indramayu','2'),(313,'03000000','Jawa Tengah','1'),(314,'03010000','Semarang','2'),(315,'03020000','Solo','2'),(316,'02010000','Medan','2'),(345,'01060000','Garut','2'),(342,'01010401','Dago','4'),(343,'01020100','x','3'),(335,'01010400','Bandung Selatan','3'),(334,'01010300','Bandung Timur','3'),(333,'01010200','Bandung Utara','3'),(332,'01010100','Bandung Barat','3'),(344,'04000000','DKI Jakarta','1'),(346,'01070000','Tasikmalaya','2'),(347,'01080000','Majalengka','2'),(348,'01090000','Ciamis','2'),(349,'01090100','Kawali','3'),(350,'01040100','Kadu Gede','3'),(351,'01040100','Luragung','3'),(352,'01040100','Ciawi','3'),(353,'04010000','Jakarta Selatan','2'),(354,'04010100','Cilandak','3'),(355,'04010101','Cilandak Timur','4'),(356,'04010102','Cilandak Barat','4'),(357,'04010103','Cilandak utara','4'),(361,'01010101','bbbbb','4');

/*Table structure for table `ref_kota1` */

CREATE TABLE `ref_kota1` (
  `kota_id` int(11) NOT NULL,
  `kode` varchar(8) default NULL,
  `nm_kota` varchar(100) default NULL,
  `tingkat` char(3) default NULL,
  PRIMARY KEY  (`kota_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `ref_kota1` */

insert  into `ref_kota1`(`kota_id`,`kode`,`nm_kota`,`tingkat`) values (1,'01000000','Jawa Barat','1'),(2,'01010000','Bandung','2'),(3,'01020000','Sumedang','2'),(4,'01030000','Cirebon','2'),(310,'02000000','Sumatra Utara','1'),(311,'01040000','Kuningan','2'),(312,'01050000','Indramayu','2'),(313,'03000000','Jawa Tengah','1'),(314,'03010000','Semarang','2'),(315,'03020000','Solo','2'),(316,'02010000','Medan','2'),(345,'01060000','Garut','2'),(342,'01010401','Dago','4'),(343,'01020100','x','3'),(335,'01010400','Bandung Selatan','3'),(334,'01010300','Bandung Timur','3'),(333,'01010200','Bandung Utara','3'),(332,'01010100','Bandung Barat','3'),(344,'04000000','DKI Jakarta','1'),(346,'01070000','Tasikmalaya','2'),(347,'01080000','Majalengka','2'),(348,'01090000','Ciamis','2'),(349,'01090100','Kawali','3'),(350,'01040100','Kadu Gede','3'),(351,'01040100','Luragung','3'),(352,'01040100','Ciawi','3'),(353,'04010000','Jakarta Selatan','2'),(354,'04010100','Cilandak','3'),(355,'04010101','Cilandak Timur','4'),(356,'04010102','Cilandak Barat','4'),(357,'04010103','Cilandak utara','4'),(361,'01010101','bbbbb','4');

/*Table structure for table `ref_level_pendidikan` */

CREATE TABLE `ref_level_pendidikan` (
  `level_pendidikan_id` int(1) NOT NULL auto_increment,
  `level_pendidikan` varchar(15) default NULL,
  PRIMARY KEY  (`level_pendidikan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `ref_level_pendidikan` */

insert  into `ref_level_pendidikan`(`level_pendidikan_id`,`level_pendidikan`) values (1,'SD'),(2,'SMP'),(3,'SMA'),(4,'D3'),(5,'S1'),(6,'S2'),(7,'S3');

/*Table structure for table `sakit` */

CREATE TABLE `sakit` (
  `sakit_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `codetrx` varchar(10) default NULL,
  `th_sakit` varchar(5) default NULL,
  `lama_sakit` varchar(40) default NULL,
  `penyakit` varchar(50) default NULL,
  `rs` varchar(50) default NULL,
  `flag` int(1) default '0',
  PRIMARY KEY  (`sakit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sakit` */

/*Table structure for table `status_kerja` */

CREATE TABLE `status_kerja` (
  `status_kerja_id` int(1) default NULL,
  `status_kerja` varchar(20) default NULL,
  `aktif` smallint(1) default NULL,
  `flagStatus` int(1) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status_kerja` */

insert  into `status_kerja`(`status_kerja_id`,`status_kerja`,`aktif`,`flagStatus`) values (1,'Pelamar',1,0),(2,'Pelamar Tidak Lulus',1,0),(4,'Pegawai Tetap',1,1),(5,'Pegawai Kontrak',1,1),(6,'Pegawai Harian',1,1),(7,'Pegawai Keluar',1,2),(3,'Pelamar Lulus',1,0);

/*Table structure for table `status_rumah` */

CREATE TABLE `status_rumah` (
  `status_rumah_id` int(1) NOT NULL auto_increment,
  `status_rumah` varchar(15) default NULL,
  PRIMARY KEY  (`status_rumah_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `status_rumah` */

insert  into `status_rumah`(`status_rumah_id`,`status_rumah`) values (1,'Kontrak'),(2,'Milik Orang Tua'),(3,'Rumah Sendiri');

/*Table structure for table `suku` */

CREATE TABLE `suku` (
  `suku_id` int(4) NOT NULL auto_increment,
  `suku` varchar(15) default NULL,
  PRIMARY KEY  (`suku_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `suku` */

insert  into `suku`(`suku_id`,`suku`) values (1,'Sunda'),(2,'Jawa');

/*Table structure for table `unit_bisnis` */

CREATE TABLE `unit_bisnis` (
  `unit_bisnis_id` int(11) NOT NULL auto_increment,
  `unit_bisnis` varchar(40) default NULL,
  `aktif` int(1) default '1',
  PRIMARY KEY  (`unit_bisnis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `unit_bisnis` */

insert  into `unit_bisnis`(`unit_bisnis_id`,`unit_bisnis`,`aktif`) values (1,'UB JPP',1),(2,'UB JPK',1),(3,'UB Trading',1),(4,'UB CIT',1),(5,'UB Umum dan SDM',1),(6,'UB Keuangan',1);

/*Table structure for table `workshop` */

CREATE TABLE `workshop` (
  `workshop_id` int(11) NOT NULL auto_increment,
  `peg_id` int(11) default NULL,
  `nama` varchar(70) default NULL,
  `penyelenggara` varchar(70) default NULL,
  `tempat` varchar(70) default NULL,
  `tgl_mulai` date default NULL,
  `tgl_selesai` date default NULL,
  `bersertifikat` varchar(70) default NULL,
  `narasi` varchar(250) default NULL,
  PRIMARY KEY  (`workshop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `workshop` */

/* Trigger structure for table `ref_kota` */

DELIMITER $$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `ref_kota_tambah` AFTER INSERT ON `ref_kota` FOR EACH ROW BEGIN
       Insert into ref_kota1 ValueS (New.kota_id,NEW.kode,NEW.nm_kota,NEW.tingkat);
    END */$$


DELIMITER ;

/* Trigger structure for table `ref_kota` */

DELIMITER $$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `ref_kota_edit` AFTER UPDATE ON `ref_kota` FOR EACH ROW BEGIN
       update  ref_kota1 set kode=NEW.kode,nm_kota=NEW.nm_kota,tingkat=NEW.tingkat where kota_id=OLD.kota_id;
    END */$$


DELIMITER ;

/* Trigger structure for table `ref_kota` */

DELIMITER $$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `ref_kota_hapus` AFTER DELETE ON `ref_kota` FOR EACH ROW BEGIN
       DELETE from  ref_kota1  where kota_id=OLD.kota_id;
    END */$$


DELIMITER ;

/*Table structure for table `view_emp_pegawai` */

DROP TABLE IF EXISTS `view_emp_pegawai`;

/*!50001 CREATE TABLE  `view_emp_pegawai`(
 `peg_id` int(11) ,
 `codetrx` varchar(10) ,
 `namal` varchar(70) ,
 `namap` varchar(70) ,
 `tinggi` varchar(5) ,
 `berat` varchar(5) ,
 `golongan_darah` char(1) ,
 `tempat_lahir` varchar(70) ,
 `tgl_lahir` date ,
 `gender` char(1) ,
 `agama_id` int(1) ,
 `suku` varchar(40) ,
 `warga` int(1) ,
 `alamat_asal` varchar(200) ,
 `kode_asal` varchar(4) ,
 `telp_asal` varchar(20) ,
 `kodepos_asal` int(11) ,
 `strumah_asal` int(2) ,
 `alamat_sekarang` varchar(200) ,
 `kode_sekarang` varchar(4) ,
 `telp_sekarang` varchar(20) ,
 `strumah_sekarang` int(2) ,
 `tlp_kantror` varchar(20) ,
 `hp` varchar(20) ,
 `telplain` varchar(30) ,
 `email` varchar(70) ,
 `status_nikah` char(1) ,
 `tanggungan` int(2) ,
 `narasi` text ,
 `password` varchar(250) ,
 `username` varchar(40) ,
 `photo` varchar(30) ,
 `aktif` int(1) ,
 `status_kerja_id` int(2) ,
 `rollover` enum('Y') ,
 `periode_kontrak` int(3) ,
 `tgl_masuk` date ,
 `flagStatus` int(1) ,
 `status_kerja` varchar(20) ,
 `agama` varchar(15) ,
 `nm_kota_sekarang` varchar(100) ,
 `nm_kota_asal` varchar(100) ,
 `npp` varchar(10) ,
 `pangkat_id` int(2) ,
 `pangkat` varchar(70) ,
 `jabatan_id` int(2) ,
 `jabatan` varchar(70) ,
 `lokasi_id` varchar(4) ,
 `lokasi_kerja` varchar(70) ,
 `unit_bisnis_id` int(2) ,
 `unit_bisnis` varchar(40) ,
 `narasi2` text ,
 `kontrakaktif` char(1) ,
 `kontrak_ke` int(2) ,
 `nokontrak_SK` varchar(50) ,
 `tgl_awal` date ,
 `tgl_akhir` date 
)*/;

/*Table structure for table `view_keluarga` */

DROP TABLE IF EXISTS `view_keluarga`;

/*!50001 CREATE TABLE  `view_keluarga`(
 `keluarga_id` int(11) ,
 `peg_id` int(11) ,
 `codetrx` varchar(10) ,
 `jenishub_id` int(3) ,
 `nama` varchar(70) ,
 `level_pendidikan_kel` int(2) ,
 `usia` int(2) ,
 `genderkel` char(1) ,
 `pekerjaan` varchar(50) ,
 `perusahaan` varchar(50) ,
 `jenishub` varchar(70) ,
 `level_pendidikan` varchar(15) 
)*/;

/*Table structure for table `view_pendidikan` */

DROP TABLE IF EXISTS `view_pendidikan`;

/*!50001 CREATE TABLE  `view_pendidikan`(
 `pendidikan_id` int(11) ,
 `peg_id` int(11) ,
 `codetrx` varchar(10) ,
 `level_pendidikan` varchar(10) ,
 `lokasi` varchar(40) ,
 `institusi` varchar(20) ,
 `jurusan_id` int(4) ,
 `thn_mulai` int(4) ,
 `thn_selesai` int(4) ,
 `narasi` varchar(250) ,
 `ipk` char(5) ,
 `level_pendidikandef` varchar(15) ,
 `jurusan` varchar(50) 
)*/;

/*View structure for view view_emp_pegawai */

/*!50001 DROP TABLE IF EXISTS `view_emp_pegawai` */;
/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_emp_pegawai` AS (select `peg_personal`.`peg_id` AS `peg_id`,`peg_personal`.`codetrx` AS `codetrx`,`peg_personal`.`namal` AS `namal`,`peg_personal`.`namap` AS `namap`,`peg_personal`.`tinggi` AS `tinggi`,`peg_personal`.`berat` AS `berat`,`peg_personal`.`golongan_darah` AS `golongan_darah`,`peg_personal`.`tempat_lahir` AS `tempat_lahir`,`peg_personal`.`tgl_lahir` AS `tgl_lahir`,`peg_personal`.`gender` AS `gender`,`peg_personal`.`agama_id` AS `agama_id`,`peg_personal`.`suku` AS `suku`,`peg_personal`.`warga` AS `warga`,`peg_personal`.`alamat_asal` AS `alamat_asal`,`peg_personal`.`kode_asal` AS `kode_asal`,`peg_personal`.`telp_asal` AS `telp_asal`,`peg_personal`.`kodepos_asal` AS `kodepos_asal`,`peg_personal`.`strumah_asal` AS `strumah_asal`,`peg_personal`.`alamat_sekarang` AS `alamat_sekarang`,`peg_personal`.`kode_sekarang` AS `kode_sekarang`,`peg_personal`.`telp_sekarang` AS `telp_sekarang`,`peg_personal`.`strumah_sekarang` AS `strumah_sekarang`,`peg_personal`.`tlp_kantror` AS `tlp_kantror`,`peg_personal`.`hp` AS `hp`,`peg_personal`.`telplain` AS `telplain`,`peg_personal`.`email` AS `email`,`peg_personal`.`status_nikah` AS `status_nikah`,`peg_personal`.`tanggungan` AS `tanggungan`,`peg_personal`.`narasi` AS `narasi`,`peg_personal`.`password` AS `password`,`peg_personal`.`username` AS `username`,`peg_personal`.`photo` AS `photo`,`peg_personal`.`aktif` AS `aktif`,`peg_personal`.`status_kerja_id` AS `status_kerja_id`,`peg_personal`.`rollover` AS `rollover`,`peg_personal`.`periode_kontrak` AS `periode_kontrak`,`peg_personal`.`tgl_masuk` AS `tgl_masuk`,`peg_personal`.`flagStatus` AS `flagStatus`,`status_kerja`.`status_kerja` AS `status_kerja`,`agama`.`agama` AS `agama`,`ref_kota`.`nm_kota` AS `nm_kota_sekarang`,`ref_kota1`.`nm_kota` AS `nm_kota_asal`,`peg_dinas`.`npp` AS `npp`,`peg_dinas`.`pangkat_id` AS `pangkat_id`,`pangkat`.`pangkat` AS `pangkat`,`peg_dinas`.`jabatan_id` AS `jabatan_id`,`jabatan`.`jabatan` AS `jabatan`,`peg_dinas`.`lokasi_id` AS `lokasi_id`,`lokasi_kerja`.`lokasi_kerja` AS `lokasi_kerja`,`peg_dinas`.`unit_bisnis_id` AS `unit_bisnis_id`,`unit_bisnis`.`unit_bisnis` AS `unit_bisnis`,`peg_dinas`.`narasi` AS `narasi2`,`peg_dinas`.`aktif` AS `kontrakaktif`,`peg_dinas`.`kontrak_ke` AS `kontrak_ke`,`peg_dinas`.`nokontrak_SK` AS `nokontrak_SK`,`peg_dinas`.`tgl_awal` AS `tgl_awal`,`peg_dinas`.`tgl_akhir` AS `tgl_akhir` from (((((((((`peg_personal` left join `status_kerja` on((`status_kerja`.`status_kerja_id` = `peg_personal`.`status_kerja_id`))) left join `agama` on((`agama`.`agama_id` = `peg_personal`.`agama_id`))) left join `ref_kota` on((`ref_kota`.`kode` = `peg_personal`.`kode_asal`))) left join `ref_kota1` on((`ref_kota1`.`kode` = `peg_personal`.`kode_sekarang`))) left join `peg_dinas` on((`peg_dinas`.`peg_id` = `peg_personal`.`peg_id`))) left join `pangkat` on((`pangkat`.`pangkat_id` = `peg_dinas`.`pangkat_id`))) left join `jabatan` on((`jabatan`.`jabatan_id` = `peg_dinas`.`jabatan_id`))) left join `lokasi_kerja` on((`lokasi_kerja`.`lokasi_id` = `peg_dinas`.`lokasi_id`))) left join `unit_bisnis` on((`unit_bisnis`.`unit_bisnis_id` = `peg_dinas`.`unit_bisnis_id`))) where (`peg_dinas`.`aktif` = 1)) */;

/*View structure for view view_keluarga */

/*!50001 DROP TABLE IF EXISTS `view_keluarga` */;
/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_keluarga` AS (select `keluarga`.`keluarga_id` AS `keluarga_id`,`keluarga`.`peg_id` AS `peg_id`,`keluarga`.`codetrx` AS `codetrx`,`keluarga`.`jenishub_id` AS `jenishub_id`,`keluarga`.`nama` AS `nama`,`keluarga`.`level_pendidikan_kel` AS `level_pendidikan_kel`,`keluarga`.`usia` AS `usia`,`keluarga`.`genderkel` AS `genderkel`,`keluarga`.`pekerjaan` AS `pekerjaan`,`keluarga`.`perusahaan` AS `perusahaan`,`jenishub_klg`.`jenishub` AS `jenishub`,`ref_level_pendidikan`.`level_pendidikan` AS `level_pendidikan` from ((`keluarga` join `jenishub_klg` on((`jenishub_klg`.`jenishub_id` = `keluarga`.`jenishub_id`))) join `ref_level_pendidikan` on((`ref_level_pendidikan`.`level_pendidikan_id` = `keluarga`.`level_pendidikan_kel`)))) */;

/*View structure for view view_pendidikan */

/*!50001 DROP TABLE IF EXISTS `view_pendidikan` */;
/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pendidikan` AS (select `pendidikan`.`pendidikan_id` AS `pendidikan_id`,`pendidikan`.`peg_id` AS `peg_id`,`pendidikan`.`codetrx` AS `codetrx`,`pendidikan`.`level_pendidikan` AS `level_pendidikan`,`pendidikan`.`lokasi` AS `lokasi`,`pendidikan`.`institusi` AS `institusi`,`pendidikan`.`jurusan_id` AS `jurusan_id`,`pendidikan`.`thn_mulai` AS `thn_mulai`,`pendidikan`.`thn_selesai` AS `thn_selesai`,`pendidikan`.`narasi` AS `narasi`,`pendidikan`.`ipk` AS `ipk`,`ref_level_pendidikan`.`level_pendidikan` AS `level_pendidikandef`,`ref_jurusan`.`jurusan` AS `jurusan` from ((`pendidikan` join `ref_level_pendidikan` on((`ref_level_pendidikan`.`level_pendidikan_id` = `pendidikan`.`level_pendidikan`))) left join `ref_jurusan` on((`ref_jurusan`.`jurusan_id` = `pendidikan`.`jurusan_id`)))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
