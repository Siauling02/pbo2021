<?php

class Mahasiswa
{
    public $nama;

    public function sapa()
    {
        echo "Selamat kepada ".$this->nama. " atas terpilihya sebagai ketua himpunan SISFO\n";
    }

    public function masuk ()
    {
        echo "Masa periode anda terhitung sejak " . date('Y-m-d') . "\n";
    }
}

class KetuaJurusan extends Mahasiswa
{
    public function sapa()
    {
        echo"Selamat " . $this->nama ." semoga dapat menjalani tanggung jawab dengan baik\n";
    }
    public function parentSapa()
    {
        return parent::sapa();
    }
}

$siauling = new KetuaJurusan ();
$siauling-> nama = 'Siauling';
$siauling->parentSapa();
$siauling->masuk();