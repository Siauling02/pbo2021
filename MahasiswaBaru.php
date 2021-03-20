<?php 
    require_once("Mahasiswa.php");

    class MahasiswaBaru extends Mahasiswa
    {
        protected $no_registrasi;

        function __construct($nim, $nama, $tgl, $jk, $regis){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
            $this->no_registrasi = $regis;
        }

        public function bayarGedung(){
            echo "$this->username Anda Telah Membayar Gedung";
        }

        public function setNoRegistrasi($no_registrasi){
            $this->no_registrasi = $no_registrasi;
        }
    
        public function getNoRegistrasi(){
            return $this->no_registrasi;
        }
    }
    ?>