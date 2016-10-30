<?php
$int = 12; //Biến $int là kiểu số nguyên(int)
$string1 = '12';//Kiểu String
$string2 = 'abc';
$a = 12;
$a = (float)$a; // Biến $a lúc này kiểu số thực (float)
$b = 1;
$a = (double)$a; // Biến $a lúc này kiểu ố thực (double)
$bl = false;
$bl1 = (bool)$b;// lúc này biến $bl1 sẽ có kiểu boolean
$bl2 = (boolean)$b;// lúc này biến $bl2 sẽ có kiểu boolean
$arr = array('Phan_tu_1', 'Phan_tu_2');
//------------------------------------------------------------------

$tong1 = $int + $string1;
$tong2 = $int + (int)$string1;
$tong3 = $int + $string2;
var_dump(is_int($int));
echo '</br>';
var_dump(is_int($string1));
echo '</br>';
var_dump(is_double($a));
echo '</br>';
var_dump(is_float($a));
/*hàm is_int($tenbien) dùng để kiểm tra một biến có phải là kiểu INT hay không
var_dump(is_int($c)); để xuất ra màn hình kết quả kiểm tra.*/

//----------------------------------------------------------------
echo '<br>', $bl1 ,'---', $bl2, '---', !$bl;
echo '<br>', $tong1, '</br>';
echo $tong2,'</br>';
echo $tong3 ,'</br>';
//Các cách in mảng:
print_r($arr); //Cách 1
echo '</br>';
var_dump($arr)
?>
