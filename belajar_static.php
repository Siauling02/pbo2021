<?php
require_once('vendor/autoload.php');

use App\Mahasiswa;

Mahasiswa::bergerak();

echo Mahasiswa::$status . "<br/>";

$status_mahasiswa = Mahasiswa::NON_AKTIF;
echo $status_mahasiswa . '<br/>';

echo Mahasiswa::hitungSks(21,4);

?>