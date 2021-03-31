<?php
use application\Dosen;
use application\Mahasiswa;
use application\frontend\MyDate;

require_once ('initialize.php');

$dos1 = new Dosen('123456789012345', 'Dian Prawira', '0800000', '10000000', '12345678', 'Tenaga Pengajar');

$dos1->mengajar();
$dos1->meneliti();

$siauling = new Mahasiswa('H1101191009', 'Siauling', '02-01-2001', 'P');
$siauling->tampilkanAngkatan();

$tanggal = new MyDate();
echo $tanggal->penanggalan();