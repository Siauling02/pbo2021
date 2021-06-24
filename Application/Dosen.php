<?php

namespace App;


class Dosen extends Pengguna{
    private String nip;
    private String nama;
    private String no_telp;

    public void validasiMahasiswa(): {

    }
  

  
  //
    protected $nidn;
    protected $jabatan_akademis;

    function __construct($nip,$nama,$hp,$gaji,$nidn,$jabatan){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gaji;
        $this->nidn = $nidn;
        $this->jabatan_akademis = $jabatan;
    }

    public function mengajar(){
        echo $this->nama .' Sedang Mengajar<br>';
    }
    public function meneliti(){
        echo $this->nama .' Sedang Meneliti<br>';
    }

    public function setNidn($nidn){
        $this->nidn = $nidn;
    }
    public function setJabatanAkademis($jabatan_akademis){
        $this->jabatan_akademis = $jabatan_akademis;
    }
    
    public function getNidn(){
        return $this->nidn;
    }
    public function getJabatanAkademis(){
        return $this->jabatan_akademis;
    }
}
//