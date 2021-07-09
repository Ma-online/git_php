
 <?php
     echo tinh_giai_thua(7);

     function tinh_giai_thua($so)
     {
          $x = 1;
          for ($i = 1; $i <= $so; $i++) {
               $x = $x * $i;
               return $x;
          }
     }
     ?>