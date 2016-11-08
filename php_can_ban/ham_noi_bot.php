<?php
//Hàm sắp xếp tăng dần:
function tang_dan($arr)
{
  $len = count($arr);
  for ($i = 0; $i < ($len - 1) ; $i++) {
    for ($j = ($i + 1) ; $j < $len  ; $j++ ) {
      if ($arr[$i] > $arr[$j]) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
      }
    }
  }
 return $arr;
}
function giam_dan($arr)
{
  $len = count($arr);
  for ($i = 0; $i < ($len - 1) ; $i++) {
    for ($j = ($i + 1) ; $j < $len  ; $j++ ) {
      if ($arr[$i] < $arr[$j]) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
      }
    }
  }
 return $arr;
}
function in_mang($arr)
{
  foreach ($arr as $key => $value) {
    echo $value,'  ';
  }
}
//************************************
$arr = array (2,4,5,1,0,6,7,9,8,10,25,13);
echo "Sắp xếp tăng dần: </br>";
in_mang(tang_dan($arr));

echo "<br>Sắp xếp giảm dần:</br>";
in_mang(giam_dan($arr));

?>
