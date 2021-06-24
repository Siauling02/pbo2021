<?php

namespace App\Models;

class Dosen extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;

    function __construct($un,$pw,$email,$nip,$nama,$nt){
        $this->username = $un;
        $this->password = $pw;
        $this->email = $email;
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $nt;
    }

    public function validasiMahasiswa()
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