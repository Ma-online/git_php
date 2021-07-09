
 <?php

      for ($cho = 1; $cho <= 35; $cho++) {
          for($ga = 1;$ga <=35 ;$ga++){
               if($ga*2+$cho*4==100 && $ga+$cho==36){
                   echo 'cho='.$cho.'ga='.$ga;
               }
          }   
      }


      ?>