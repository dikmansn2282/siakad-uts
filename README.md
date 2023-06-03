# siakad-uts-1
UTS Pemrograman Web 2 UNSIA
Program menggunakan bahasa pemrograman PHP untuk mengoperasikan perintah CRUD pada tabel matakuliah di database siakad

Perintah SQL
Membuat database:
create database siakad;
 
Menggunakan database siakad:
use siakad;
 
Membuat tabel matakuliah: 
CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(255),
  `kode_matakuliah` char(5),
  `deskripsi` varchar(15),
  PRIMARY KEY  (`id`)
);
