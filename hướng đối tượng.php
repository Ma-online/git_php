<?php

use SinhVien as GlobalSinhVien;

$a = 5;
class SinhVien{
    var $maSV;
    var $tenSV;
    var $ngaySinh;
    var $gioiTinh;
    var $tuoi;
    const MUC_HOC_PHI=1000000;  

    function getMaLop(){
        echo 'K4'.'|';
        echo 'K5';
    }
    function getTenLop(){
        echo 'Lớp 4'.'|';
        echo 'Lớp 5';
    }
    function getTTGVCN(){
        echo 'Thầy Hòa'.'|';
        echo 'Thầy Thành';
    }
    function dangKyHocPhan(){
        echo "Sinh vien".$this->maSV."đã được đăng ký thành công";
    }
    function dangKy(){
        $this->dangKyHocPhan();
    }

    function sinhNhat(){
        $this->tuoi ++;
    }
    function traoDoi(SinhVien $svKhac){
       echo "Sinh viên ".$this->tenSV." đang trao đổi với sinh viên ".$svKhac->tenSV;
    }
}
class Lop  {
    var $maLop;
    var $tenLop;
    var $danhSachSV = array();
      
    // đưa sinh vào lớp 
    function addSinhVien(SinhVien $sv){
       $this->danhSachSV[]=$sv;
    }
    function soluongSV(){
     return count($this->danhSachSV);
    }
    function kiemtraSV(SinhVien $vs){
       for($i=0;$i<count($$danhSachSV);$i++){

       }
    }
}




$SV1= new sinhvien();
$SV1->maSV="SV001";
$SV1->tenSV="Thông";
$SV1->ngaySinh="06/21/2021";
$SV1->gioiTinh="Nam";
$SV1->tuoi="20";


// echo "Mã của Sinh Viên: ".$SV1->maSV;
// echo "<br>";
// echo "Tên của Sinh Viên: ".$SV1->tenSV;
// echo "<br>";
// echo "Ngày sinh của Sinh Viên: ".$SV1->ngaySinh;
// echo "<br>";
// echo "Gioi tính của Sinh Viên: ".$SV1->gioiTinh;
// echo "<br>";
// echo "Tuổi của Sinh Viên: ".$SV1->tuoi;
// echo "<br>";
// echo "Học phí: ".SinhVien::MUC_HOC_PHI;
// echo"<br>";
// echo $SV1->getMaLop();
// echo "<br>";
// echo $SV1->getTenLop();
// echo "<br>";
// echo $SV1->getTTGVCN();
// echo "<br>";
// echo "-------------------------------------------";


$SV2= new sinhvien();
$SV2->maSV="SV002";
$SV2->tenSV="Long";
$SV2->ngaySinh="06/21/2021";
$SV2->gioiTinh="Nam";
$SV2->tuoi="20";

// echo "<br>";
// echo "Mã của Sinh Viên: ".$SV2->maSV;
// echo "<br>";
// echo "Tên của Sinh Viên: ".$SV2->tenSV;
// echo "<br>";
// echo "Ngày sinh của Sinh Viên: ".$SV2->ngaySinh;
// echo "<br>";
// echo "Gioi tính của Sinh Viên: ".$SV2->gioiTinh;
// echo "<br>";
// echo "Tuổi của Sinh Viên: ".$SV2->tuoi;
// echo "<br>";
// echo "Học phí: ".SinhVien::MUC_HOC_PHI;
// echo"<br>";
// echo $SV2->getMaLop();
// echo "<br>";
// echo $SV2->getTenLop();
// echo "<br>";
// echo $SV2->getTTGVCN();
// echo "<br>";
// echo "-------------------------------------------";


$SV3= new sinhvien();
$SV3->maSV="SV003";
$SV3->tenSV="Thủy";
$SV3->ngaySinh="06/21/2021";
$SV3->gioiTinh="Nữ";
$SV3->tuoi="20";

// echo "<br>";
// echo "Mã của Sinh Viên: ".$SV3->maSV;
// echo "<br>";
// echo "Tên của Sinh Viên: ".$SV3->tenSV;
// echo "<br>";
// echo "Ngày sinh của Sinh Viên: ".$SV3->ngaySinh;
// echo "<br>";
// echo "Gioi tính của Sinh Viên: ".$SV3->gioiTinh;
// echo "<br>";
// echo "Tuổi của Sinh Viên: ".$SV3->tuoi;
// echo "<br>";
// echo "Học phí: ".SinhVien::MUC_HOC_PHI;
// echo"<br>";
// echo $SV3->getMaLop();
// echo "<br>";
// echo $SV3->getTenLop();
// echo "<br>";
// echo $SV3->getTTGVCN();
// echo "<br>";

//===============
// echo "MAIN PROGRAM: <br>";
// print_r($SV1);
// $SV1->dangKy();
// $SV2->dangKy();

// // check hàm tăng số tuổi: 
// echo "<br>";
// echo "tuổi của SV1 là: ". $SV1->tuoi;

// $SV1->sinhNhat();
// echo "<br>";
// echo "tuổi của SV1 là: ". $SV1->tuoi;

// // check hàm trao đổi: 
// echo "<br>";
// $SV1->traoDoi($SV2);
// // Sinh viên [Thông] đang trao đổi với sinh viên [Long]

// echo "<br>";
// $SV2->traoDoi($SV1);
// Sinh viên [Long] đang trao đổi với sinh viên [Thông]
//===============
//YC: 
// tao2 lớp K4 và K5
$K4=new lop();
$K4 -> maLop="K4";
$K4 -> tenLop="lớp năm 4";
$K4 ->addSinhVien($SV3);
print_r($K4);
echo "<br>";
$K5=new lop();
$K5 -> maLop="K5";
$K5 -> tenLop="lớp năm 5";
$K5 ->addSinhVien($SV1);
$K5 ->addSinhVien($SV2);
print_r($K5);
// Thủy thuộc lớp K4
// Thông và Long thuộc lớp K5
//in ra thông tin
//===============
echo "<br>";
echo"số lượng sinh viên k4=". $K4->soluongSV();
echo "<br>";
echo"số lượng sinh viên k5=". $K5->soluongSV();
