<?php
    require_once("Mahasiswa.php");
    require_once("MahasiswaBaru.php");


    $Siauling = new Mahasiswa("H1101191009", "Siauling", "2000-01-02", "Perempuan");
    $Kristian Hermawan = new MahasiswaBaru("H1101201007", "Kristian Hermawan", "2000-12-28", "Laki-Laki", 1101);

?>

    <?php
        $Siauling->tampilkanAngkatan();
        echo "<br>";
        $Kristian Hermawan->tampilkanAngkatan();
        echo "<br>";
        echo "<br>";
        $Siauling->tampilkanUmur();
        echo "<br>";
        $Kristian Hermawan->tampilkanUmur();
    ?>
