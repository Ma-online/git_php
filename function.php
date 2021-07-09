
<?php
   function bac_1($a,$b){
       if($a==0&&$b =0){
           echo'phương trình vô nghiêm';
       }elseif($a == 0 && $b != 0 ){
           echo 'phương trình vô số nghiệm';
       }else{
           echo 'X='.$a/$b;
       }
   } 
   echo bac_1(2,3);
   function bac_2()
?>