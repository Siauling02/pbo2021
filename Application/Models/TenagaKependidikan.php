<?php

namespace App\Models;

class TenagaKependidikan extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($un,$pw,$email,$nip,$nama,$alamat){
        $this->username = $un;
        $this->password = $pw;
        $this->email = $email;
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function hitungTunjanganKinerja()
    {
        
    }

    public function presensiMasuk()
    {
       
    }

    public function setNip($nip)
    {
      
    }

    public function getNip()
    {
     
    }

    public function setNama($nama)
    {
      
    }

    public function getNama()
    {
      
    }
}