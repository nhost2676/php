<?php
// Xếp theo tăng dần:
$mang = array(1,3,5,6,2,0,4,9,8);
$len = count($mang);
for ($i = 0; $i < ($len - 1); $i++) {
  for ($j = $i + 1; $j < $len ; $j++) {
    if ($mang[$i] > $mang[$j])  {
      $tmp = $mang[$i];
      $mang[$i] = $mang[$j];
      $mang[$j] = $tmp;
    }
  }
}
for ($i=0; $i < $len ; $i++) {
  echo $mang[$i],"; ";
}
echo "</br>";
//Xếp theo giảm dần:
for ($i=0; $i < ($len - 1) ; $i++) {
  for ($j = ($i + 1); $j < $len ; $j++) {
    if ($mang[$i] < $mang[$j]) {
      $tmp = $mang[$i];
      $mang[$i] = $mang[$j];
      $mang[$j] = $tmp;
    }
  }
}
for ($i=0; $i < $len ; $i++) {
  echo $mang[$i],"; ";
}
?>
