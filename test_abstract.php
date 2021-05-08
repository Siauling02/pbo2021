<?php
require_once('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\EsJeruk;
use App\Teh;

$cendol_harry = new Cendol();
$cendol_harry->minum();

$kopi_aming = new Kopi();
$kopi_aming->buat();
$kopi_aming->minum();

$kopi_asiang = new Kopi();
$kopi_asiang->buat();
$kopi_asiang->tambahSusu();
$kopi_asiang->minum();

EsJeruk::dilihat();

$teh_manis = new Teh();
$teh_manis->buat();
$teh_manis->tambahEs();
$teh_manis->minum();