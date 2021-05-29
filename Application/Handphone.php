<?php	

namespace App;

trait Handphone
{
    public function powerOn()
    {
        echo "Power ON ";
    }
}

class Merk
{
    use Handphone;
    public function namaHandphone()
    {
        echo "Oppo";
    }
}

$test = new Merk;	
$test->powerOn();	
$test->namaHandphone();

?>