<?php

    $pb = new PhoneBook();
    $pb->insertPhone('Thông', '0964493237');
    $pb->insertPhone('Thủy', '0333789561');
    $pb->insertPhone('Long', '0935157321');
    $pb->insertPhone('Thông', '12345');
    $pb->insertPhone('Thông', '0964493237');
    $pb->removePhone('Long');
    $pb->updatePhone('Thu','234567');
    print_r($pb->searchPhone('Thủy'));
    echo '<br>';
    $pb->sort();
    print_r($pb->phoneList);
    




    abstract class Phone{
        abstract function insertPhone($name,$phone);
        abstract function removePhone($name);
        abstract function updatePhone($name,$newphone);
        abstract function searchPhone($name);
        abstract function sort();
        
    }

    class PhoneBook extends Phone{
        
        var $phoneList = array();
        //cách tạo 1 mảng key value 
        //arr[key]=[value]

        function insertPhone($name, $phone){
            //kiểm tra phần tử có tồn tại trong mảng hay không
            if(array_key_exists($name,$this->phoneList)){
                if(in_array($phone, $this->phoneList[$name]) == false){
                    $this->phoneList[$name][] = $phone; 
                }
            } else {
                $this->phoneList[$name] = [$phone];
            }
        }
        function removePhone($name){
            unset( $this->phoneList[$name]);
            // xóa phần tử key
        }
        function updatePhone($name,$phone){
            $this->phoneList[$name]=[$phone];
            //gắn mảng mới thay cho mảng củ
        }
        function searchPhone($name){
            return $this->phoneList[$name];
            //thường tìm kiếm thì phải trả về ket quả
        }
        function sort(){
            ksort($this->phoneList);
            // sắp xếp mảng theo key
        }
       
    }
   
   