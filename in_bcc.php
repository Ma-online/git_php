
 <?php

     echo in_bcc();
     function in_bcc()
     {
          for ($a = 1; $a <= 9; $a++) {
               in_hang($a);
               echo "<br>";
          }
     }
     function in_hang($a)
     {
          for ($i = 0; $i < 10; $i++) {

               in_cell($i, $a);
          }
     }


     function in_cell($a, $b)
     {
          $c = $a * $b;
          echo  " $a x $b = $c |"; //5 x 6 = 30

     }
     ?>