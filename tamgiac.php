
 <?php
$n = 6;
//-------CHƯƠNG TRÌNH CHÍNH
for($i = 0; $i < 1000; $i++){    
    in_tam_giac($i);
}

//------- PHẦN KHAI BÁO HÀM
// in 1 tam giác có cạnh $n
function in_tam_giac($n){
    for($i = 0; $i < $n; $i++){
        //echo $i;
        // print 1 dòng $i dấu sao.
        print_i_sao($n-$i);
        // in xuống dòng
        echo "<br>";
    }
}

// print 1 dòng dấu sao.
function print_i_sao($so_sao){
    for($i = 0; $i < $so_sao; $i++)
        print "*";
}


?>