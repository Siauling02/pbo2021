<?php

require_once('vendor/autoload.php');
use App\MahasiswaBaru;

$siauling = new MahasiswaBaru("H1101191009","Siauling","02 Januari 2000","Perempuan","123");

$siauling->tuntaskan();