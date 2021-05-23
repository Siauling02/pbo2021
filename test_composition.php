<?php

use App\Pengguna;
use App\Alamat;

require_once('vendor/autoload.php');

$pengguna = new Pengguna (3,"Siauling", new Alamat(94, "Segedong"));

$alamat_pengguna = $pengguna->getAlamat();
echo $alamat_pengguna->getKota(); 