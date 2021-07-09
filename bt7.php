
 <?php
  $ds_sinhvien = array();
  $ds_sinhvien1 = array(
    'maSV' => 'A001',
    'ten_sv' => 'Thông',
    'ngay_sinh' => '1990/01/01',
    'dien_TB ' => 8,
  );
  $ds_sinhvien2 = array(
    'maSV' => 'A002',
    'ten_sv' => 'Thu',
    'ngay_sinh' => '1990/02/02',
    'dien_TB ' => 9,
  );
  $ds_sinhvien3 = array(
    'maSV' => 'A003',
    'ten_sv' => 'Thuy',
    'ngay_sinh' => '1990/03/03',
    'dien_TB ' => 4,
  );
  $ds_sinhvien4 = array(
    'maSV' => 'A004',
    'ten_sv' => 'Long',
    'ngay_sinh' => '1990/04/04',
    'dien_TB ' => 10,
  );
  $ds_sinhvien[] = $ds_sinhvien1;
  $ds_sinhvien[] = $ds_sinhvien2;
  $ds_sinhvien[] = $ds_sinhvien3;
  $ds_sinhvien[] = $ds_sinhvien4;
  
  foreach($ds_sinhvien as $vs){
    if($sv['diem_TB'] <=10){
      echo ($sv['ten_sv']);
    };
  }
  ?>