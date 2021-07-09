<?php
//1. Luyện tập Một vài hàm về mảng trong php 
/*
1. array_combine()	Tạo một mảng bởi sử dụng một mảng cho key và mảng khác cho value
2. array_count_values()	Trả về một mảng với số lần xuất hiện mỗi value
3. array_diff()	So sánh các value của mảng, và trả về các sự khác nhau
4. array_key_exists()	Kiểm tra xem key đã cho có tồn tại trong mảng không
5. array_keys()	Trả về tất cả key của một mảng
6. array_merge()	Sáp nhập một hoặc nhiều mảng thành một mảng
7. arsort()	Sắp xếp một mảng với thứ tự đảo ngược và duy trì liên kết chỉ mục
8. asort()	Sắp xếp một mảng và duy trì liên kết chỉ mục
9. in_array()	Kiểm tra nếu một value đã xác định là tồn tại trong một mảng
10. key()	Lấy một key từ một mảng
11. krsort()	Sắp xếp một mảng bằng các key theo thứ tự đảo ngược
12. ksort()	Sắp xếp một mảng bằng các key
13. rsort()	Sắp xếp một mảng theo thứ tự đảo ngược
14. sort()	Sắp xếp một mảng
*/
// Hãy lấy ví dụ - lưu log - giải thích về ý nghĩa của các hàm trên. 
$arr1 = array(2,8,5,1);
$arr12 = array(2,2,2,5);
$arr13 = array('hi','hi','ha','ha','ha','ho');
$arr11 = array(3,5,7,9);
$arr2 = array(
    2 => 2,
    8 => 1,
    5 => 1,
    'hello' => 3,
);
// 1. array_combine()	Tạo một mảng bởi sử dụng một mảng cho key và mảng khác cho value
$arr_test1 = array_combine($arr1, $arr11);
//var_dump($arr_test1);
/*array(4) { [2]=> int(3) [8]=> int(5) [5]=> int(7) [1]=> int(9) }*/

//2. array_count_values()	Trả về một mảng với số lần xuất hiện mỗi value
$arr_test2 = array_count_values($arr13);
//var_dump($arr_test2);
//array(3) { ["hi"]=> int(2) ["ha"]=> int(3) ["ho"]=> int(1) }

//3. array_diff()	So sánh các value của mảng, và trả về các sự khác nhau
$arr_test3 = array_diff($arr1,$arr12);
//var_dump($arr_test3);
//array(2) { [1]=> int(8) [3]=> int(1) }

//4. array_key_exists()	Kiểm tra xem key đã cho có tồn tại trong mảng không
$arr_test4 = array_key_exists('hello',$arr2);
//var_dump($arr_test4);
//bool(true)

//5. array_keys()	Trả về tất cả key của một mảng
$arr_test5 = array_keys($arr2);
//var_dump($arr_test5);
//array(4) { [0]=> int(2) [1]=> int(8) [2]=> int(5) [3]=> string(5) "hello" }

//6. array_merge()	Sáp nhập một hoặc nhiều mảng thành một mảng
$arr_test6 = array_merge($arr1,$arr12,$arr13);
//var_dump($arr_test6);
//array(14) { [0]=> int(2) [1]=> int(8) [2]=> int(5) [3]=> int(1) [4]=> int(2) [5]=> int(2) [6]=> int(2) [7]=> int(5) [8]=> string(2) "hi" [9]=> string(2) "hi" [10]=> string(2) "ha" [11]=> string(2) "ha" [12]=> string(2) "ha" [13]=> string(2) "ho" }

//7. arsort()	Sắp xếp một mảng với thứ tự đảo ngược và duy trì liên kết chỉ mục
$arr_test7 = arsort($arr2);
//var_dump($arr_test7);

//8. asort()	Sắp xếp một mảng và duy trì liên kết chỉ mục
$arr_test8 = asort($arr12);

//9. in_array()	Kiểm tra nếu một value đã xác định là tồn tại trong một mảng
$arr_test9 = in_array(6,$arr1,false);//true kiểm tra kiểu fales không kiểm tra kiểu
var_dump($arr_test9);
//bool(false)