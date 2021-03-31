<?php
require_once 'User.php';
require_once 'Mahasiswa.php';
require_once 'Pegawai.php';
require_once 'MahasiswaBaru.php';
require_once 'Dosen.php';

$user1 = new User('username1','password123');
$user2 = new User('username2','password321');

$siauling = new Mahasiswa('H1101191009','Siauling','2001-01-02','Perempuan');
$kristian = new Mahasiswa('H1101191007','Kristian Hermawan','2000-12-28','Laki-laki');


$peg1 = new Pegawai('1234567890','Pegawai 1','082255756661','Rp.5750000');
$peg2 = new Pegawai('0987654321','Pegawai 2','085386477902','Rp.5750000');

$maba1 = new MahasiswaBaru('H1101201077','Vidita Reka','2002-04-24','Perempuan',123456);
$maba2 = new MahasiswaBaru('H1101201003','Lita Novitasari','2002-11-12','Perempuan',654321);

$dos1 = new Dosen('101010101010','Dosen 1','081324567898','Rp.8500000','0987654321','Kepala Jurusan');
$dos2 = new Dosen('121212121212','Dosen 2','089635652337','Rp.7500000','1234567890','Sekretaris Jurusan');
?>
        <?php
            $harry->tampilkanNama();
            $harry->tampilkanUmur();
            $harry->tampilkanAngkatan();
        ?><br>
        <?php
            $fadil->tampilkanNama();
            $fadil->tampilkanUmur();
            $fadil->tampilkanAngkatan();
        ?><br>
   



