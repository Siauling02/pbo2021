<?php  

namespace App;

 trait daftarAktivitas 
{   
   public function makan()
   {  
       return "Saya akan makan pukul 07.00 WIB";  
   }  
}   

class Aktivitas  
{  
      use daftarAktivitas;
}  

 $aktivitas = new Aktivitas();  
 echo $aktivitas->makan();  
 ?> 