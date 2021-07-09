
<?php
    class Hinh{
        var $tenHinh;
        var $soCanh;

        function tinhDienTich(){
            echo "dien tich hình này là: Chưa tính được<br>";
        }
        function tinhChuVi(){
            echo "Chu vi hình này là: Chưa tính được<br>";
        }
    }
    class TamGiac extends Hinh{
        var $chieuCao;
        var $a,$b,$c;

        function __construct()
        {
            $this->tenHinh="Hinh Tam Giac";
            $this->soCanh=3;
        }
        function tinhChuVi(){
            echo "Chu vi: ".($this->a + $this->b + $this->c)."<br>";
        }  
        function tinhDienTich(){
            echo "dien tich: ".($this->a*$this->chieucao)."<br>";
        }  
    }
    class ChuNhat extends Hinh{
        var $dai,$rong;
        function __construct()
        {
            $this->tenHinh="Hinh Chữ Nhật";
            $this->soCanh=4;
        }
        function tinhChuVi(){
            echo "Chu vi: ".(($this->dai+$this->rong)*2)."<br>";
        }  
        function tinhDienTich(){
            echo "dien tich: ".($this->dai + $this->rong )."<br>";
        }  

    }
    class HinhVuong extends ChuNhat{
        function __construct()
        {      
            // mong muốn: vẫn chạy constructor của lớp cha   
            // gọi contructor của lớp cha
            parent::__construct();       
            $this->tenLoaiHinh = "Hình Vuông";
            $this->dai = $this->rong;
        }
       
    }
    class HinhTron extends Hinh{
        var $r;
        
        function __construct(){
            $this->tenHinh="Hinh Tron";
            $this->soCanh=1;

        }
        function tinhChuVi(){
            echo "Chu vi: ".(($this->r*2))*3.14."<br>";
        }  
        function tinhDienTich(){
            echo "Dien tich ".(($this->r*$this->r))*3.14."<br>";
        }  
    }
    $TG1 = new TamGiac();
    $TG1->a=6;
    $TG1->b=7;
    $TG1->c=5;
    $TG1->chieucao=6;
    $TG1->tinhDienTich();
    $TG1->tinhChuVi();
    print_r($TG1);
    

    echo '<br>'.'========================'.'<br>';
    $CN1 = new ChuNhat();  
    $CN1->dai=5;
    $CN1->rong=6;
    $CN1->tinhDienTich();
    $CN1->tinhChuVi();
    print_r($CN1);
    

    echo '<br>'.'========================'.'<br>';
    $HV1 = new HinhVuong();
    $HV1->dai=5;
    $HV1->rong=5;
    $HV1->tinhDienTich();
    $HV1->tinhChuVi();
    print_r($HV1);
    

    echo '<br>'.'========================'.'<br>';
    $HT1 = new HinhTron();
    $HT1->r=8;
    $HT1->tinhDienTich();
    $HT1->tinhChuVi();
    print_r($HT1);
    
?>