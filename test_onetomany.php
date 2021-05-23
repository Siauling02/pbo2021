<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$siauling = new Pengguna(3,"Siauling", new Alamat(94, "Segedong"));

$lapak_lita = new Penjual();
$lapak_lita->setName('Lita Novitasari');
$lapak_lita->setId(1);

$lapak_vidi = new Penjual();
$lapak_vidi->setName('Vidita Reka');
$lapak_vidi->setId(2);

$lapak_kristian = new Penjual();
$lapak_kristian->setName('Kristian Hermawan');
$lapak_kristian->setId(3);

$siauling->setPenjual($lapak_lita);
$siauling->setPenjual($lapak_vidi);
$siauling->setPenjual($lapak_kristian);

$penjual_siauling = $siauling->getPenjual();
echo $penjual_siauling[0]->getName();// Ada 3 Index (0,1,2)