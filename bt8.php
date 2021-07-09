
 <?php
     function my_print($SKT)
     {
          for ($i = 1; $i <= $SKT; $i++) {
               echo "-";
          }
     }

     my_print(3);
     echo '<br>';
     my_print(5);

     ?>