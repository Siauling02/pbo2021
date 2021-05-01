<?php

namespace App;

class Mahasiswa extends User{
    protected $nim;
    protected $nama;
    protected $tanggal_lahir;
    protected $jenis_kelamin;
    const AKTIF = 1;
    const NON_AKTIF = 0;
    public static $status= self::AKTIF;
 
    function __construct($nim,$nama,$tgl,$jk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }
        
    public function tampilkanAngkatan(){ 
    echo "Angkatan Tahun 20".substr($this->nim,5,-4).'<br>';
    }
    public function tampilkanUmur(){
    $thn = date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
    echo "Umur : ".$thn." Tahun<br>";
    }  
    public function tampilkanNama(){
    echo "Nama : ".$this->nama."<br>";
    }

    public function setNim($nim){
        $this->nim = $nim;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setTanggalLahir($tanggal_lahir){
        $this->tanggal_lahir = $tanggal_lahir;
    }
    public function setJenisKelamin($jenis_kelamin){
        $this->jenis_kelamin = $jenis_kelamin;
    }

    public function getNim($nim){
        return $this->nim;
    }
    public function getNama($nama){
        return $this->nama;
    }
    public function getTanggalLahir($tanggal_lahir){
        return $this->tanggal_lahir;
    }
    public function getJenisKelamin($jenis_kelamin){
        return $this->jenis_kelamin;
    }

    public static function bergerak()
    {
        echo "agen solusi, bukan agen perubahan<br/>";
    }
    final public function tuntaskan()
    {
        self::bergerak();
        echo " memperbaiki menjadi lebih baik";
    }
    // buat fungsi dengan nama hitungSks yang tipenya adalah static
    /**
     * parameter dari fungsi tersebut adalah $sks, dan $bobot
     * 
     */

    public static function hitungSks($sks,$bobot)
    {
        $total_sks = $sks * $bobot;
        echo "Bobot Anda bernilai = ".$bobot."<br>";
        echo "Jumlah sks dengan nilai bobot ".$bobot." adalah = ".$sks." SKS<br>";
        echo "Jumlah sks x bobot = ";
        return $total_sks;
    }   
}
?>
