
 <?php
     //1. Danh sách các số nguyên tố <= n
     //2. LẤY N CHIA CHO CÁC SỐ TRONG DS SỐ NGUYÊN TỐ Ở TRÊN
     // CHO ĐẾN KHI N = 1 THÌ DỪNG
     // 3. LÚC CHIA -> LẤY KẾT QUẢ VÀ LƯU LẠI VÀO DANH SÁCH KẾT QUẢ 
     //4. IN RA DANH SÁCH KẾT QUẢ THEO YÊU CẦU			
     $n = 45;
     $arr_kq = array(); // {2,3,5,7,11,13,17,19,23,29,31,37,41,43}
     $is_kq = array(); // {3,3,5}
     //================
     for ($i = 2; $i <= $n; $i++) {
          if (is_snt($i)) {
               $arr_kq[] = $i;
          }
     }
     //=============
     for ($i = 0; $i < count($arr_kq); $i++) {
          while ($n % $arr_kq[$i] == 0) {
               $is_kq[] = $arr_kq[$i];
          }
     }
     $kq = implode(' x ', $is_kq);
     echo $kq;
     //echo count($arr_kq);
     //var_dump($is_kq);
     //var_dump($arr_kq);

     //===============
     function is_snt($n)
     {
          $tam = 0;
          for ($i = 1; $i <= $n; $i++) {
               if ($n % $i == 0) {
                    $tam++;
               }
          }

          if ($tam == 2) {
               return true;
               return false;
          }
     }
     ?>