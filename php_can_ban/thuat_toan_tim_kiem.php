<?php
// Tìm 1 số trong mảng: Nếu có>> thông báo; Nếu không >>Báo không
// Không dùng hàm
$arr = array(25,65,48,25,12,63,321,321,45);
$num = 25;
$count = 0;
for ($i=0; $i < count($arr) ; $i++) {
  if ($arr[$i] == $num) {
    $count ++;
  }
}
if ($count > 0 ) {
  echo "Có ", $count,' số ',$num,' trong dãy.</br>';
}
else {
  echo "Không có số ",$num, " trong dãy.</br>";
}
//Sử dụng hàm:
function find_number($arr, $num)
{
  $dem = 0;
  for ($i=0; $i < count($arr) ; $i++) {
    if ($arr[$i] == $num) {
      $dem ++;
    }
  }
  if ($dem > 0 ) {
    echo "Có ", $dem,' số ',$num,' trong dãy. </br>';
  }
  else {
    echo "Không có số ",$num, " trong dãy.</br>";
}
}
find_number($arr,33);
echo "<br>********************************************</br>";
//Cho một mảng gồm các phần tử từ 1 đến 100. Hãy tìm vị trí các số chia hết cho 3 trong dãy
// Hàm tìm số chua hết cho 3:
function chia_het($arr)
{
  echo "Vị trí các số chia hết cho 3:</br>";
  foreach ($arr as $key => $val) {
    if ($arr[$key] % 3 == 0) {
      echo "Vị trí thứ ",$key,': Số - ',$val,"<br>";
    }
  }
}
$array = array();
// Lặp từ 1 đến 100 để ghi phần tử vào mảng:
for ($i=0; $i <= 100 ; $i++) {
  $array[$i] = $i;
}
// Gọi hàm để KT kết quả:
chia_het($array);
?>
