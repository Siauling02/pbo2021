<?php 

namespace App;

    trait Waktu 
    {
        public function TanggalIndonesia($tahun,$bulan,$tanggal)
        {
        return "Sekarang tanggal $tanggal bulan $bulan tahun $tahun";
        }
    }

    trait Pesan
    {
        public function berhasil($pesan)
        {
            echo "Proses Berhasil -> $pesan <br/>";
        }
    }

    trait link
    {
        public function linkSelanjutnya($kataKunci, $url)
        {
            echo "<a href='$url'>$kataKunci</a>";
        }
    }


    class Pembelian
    {
        use Waktu,Pesan,link;
        public function tampilkanTanggal($tahun,$bulan,$tanggal)
        {
            echo $this->TanggalIndonesia($tahun,$bulan,$tanggal);
        }
    }

    $pembelian=New Pembelian();
    
    $pembelian->tampilkanTanggal(2021,05,29);

    echo "<br/>";

    echo $pembelian->TanggalIndonesia(2000,05,29);

    echo "<br/>";

    $pembelian->berhasil("Penambahan Data Baru");

    
?>
