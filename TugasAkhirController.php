<?php
require_once('vendor/autoload.php');

use App\Pengguna;
use App\Mahasiswa;
use App\TenagaKependiidkan;
use App\Pegawai;
use App\Dosen;
use App\TugasAkhir;
use App\PerguruanTinggi;

public $dafarkanTA;
public $ubahTA;
public $validasiPendaftaran = new void();  
public $inputNilaiSempro = new void();  
public $inputNilaiSemhas = new void();  
public $inputNilaiSidang = new void();  

public boolean tambahTA(): {

}

function __construct($id,$judulTA,$mahasiswaTA,$pembimbingTA,$pengujiTA){
    $this->daftarkanTA = $id;
    $this->ubahTA = $ubahTA;
    $this->validasi_Pendaftaran = $validasi_Pendaftaran;
    $this->input_Nilai_Sempro = $input_Nilai_Sempro;
    $this->input_Nilai_Semhas = $input_Nilai_Semhas;
    $this->input_Nilai_Sidang = $input_Nilai_Sidang;

}  