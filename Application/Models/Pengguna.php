<?php

namespace App\Models;

class Pengguna  
{
    public $username;
    public $password;
    protected $email;

    public function login()
    {
        # code...
    }

    public function register()
    {
        # code...
    }
}
 32  application/Models/PerguruanTinggi.php 
@@ -0,0 +1,32 @@
<?php

namespace App\Models;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class PerguruanTinggi  
{
    public $id;
    public $namaPT;
    protected $akreditasi;
    public $mahasiswas = array();
    public $dosens;

    function __construct($id,$npt,$akr,$dosen)
    {
        $this->id = $id;
        $this->namaPT = $npt;
        $this->akreditasi = $akr;
        $this->dosens - $dosen;
    }

    public function registerMaba($nim,$nama)
    {
       
    }

    public function getDosen()
    {
       
    }
}