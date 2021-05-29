<?php  

namespace App;

 trait daftarRumus {   
   public function luas_lingkaran()
   {  
   return "Ini luas lingkaran";  
   }  
 }   

 class Rumus 
 {  
      use daftarRumus;  
 }  

 $rumus = new Rumus();  
 echo $rumus->luas_lingkaran();  
 ?> 