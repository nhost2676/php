<?php
$arr = array(5, 1, 2, 3, 8, 4, 9, 7, 6, 0);
// Sắp xếp mảng tăng dần:
function tang_dan($arr)
{
  // Lặp để sắp xếp
  for ($i=0; $i < count($arr) - 1 ; $i++) {
    // Tìm vị trí phần tử nhỏ nhất:
    $min = $i;
    for ($j= $i + 1; $j < count($arr) ; $j++) {
      if ($arr[$min] > $arr[$j]) {
        $min = $j;
      }
    }
    // Sau khi có vị trí lớn nhất thì hoán vị
   // với vị trí thứ $i
    $tmp = $arr[$i];
    $arr[$i] = $arr[$min];
    $arr[$min] = $tmp;
  }
  return $arr;
}
//-----------------------------------------------------------
// Sắp xếp dãy giam_dần:
function giam_dan($arr)
{
// Lặp để xắp sếp
  for ($i=0; $i < count($arr) - 1; $i++) {
    // Tìm phần tử lớn nhất:
    $max = $i;
    for ($j = $i + 1; $j < count($arr) ; $j ++) {
      if ($arr[$max] < $arr[$j]) {
        $max = $j;
      }
    }
    // Hoán vị:
    $tmp = $arr[$i];
    $arr[$i] = $arr[$max];
    $arr[$max] = $tmp;
  }
  return $arr;
}
//-------------------------------------------------------------
function in_mang($arr)
{
  foreach ($arr as $key => $value) {
    echo '-',$value;
  }
}
//---------------------------------------------------------------------
in_mang(tang_dan($arr));
echo "</br>";
in_mang(giam_dan($arr));
