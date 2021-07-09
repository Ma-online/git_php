<?php
/*$n = fgets(STDIN); // số ký tự'

//lặp để lấy từng số
for ($i = 0; $i < $n; $i++) {
    $so = fgets(STDIN);
*/
    $so=28; //du lieu
    //tìm tổng ước
    $tong_uoc = getTongUoc($so);

    // in kết quả
    in_kq($so, $tong_uoc);
//}

function in_kq($so, $tong_uoc)
{
    if ($so == $tong_uoc) {
        echo 'perfect' . "\n";
    } elseif (abs($so - $tong_uoc) == 1) {
        echo 'nearly' . "\n";
    } else {
        echo 'neither' . "\n";
    }
}
function getTongUoc($so)
{
    //tính tổng ước
    $tong_uoc = 0;
    for ($j = 1; $j < $so; $j++) {
        if ($so % $j == 0) {
            $tong_uoc = $tong_uoc + $j;
        }
    }
    return $tong_uoc;
}
