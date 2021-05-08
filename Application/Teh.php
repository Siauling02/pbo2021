<?php

namespace App;

class Teh implements Minuman
{
    public function buat()
    {
        echo "Rebus air hingga mendidih, ";
        echo "masukkan 2sdm gula pasir (sesuai selera) dan 1 kantong Teh, ";
        echo "tuangkan air mendidih hingga warna berubah merah. ";
        echo "Teh manis pun siap dinikmati.<br/>";
    }

    public function minum()
    {
        echo "Dapat diminum bersama dengan roti ataupun dengan gorengan.<br/>";
    }
    
    public function tambahEs()
    {
        echo "Untuk sensasi yang berbeda dapat ditambahkan es agar lebih nikmat .<br/>";
    }
}