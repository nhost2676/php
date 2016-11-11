<?php
/*Ví dụ 1: Tôi muốn tìm người cao nhất trong lớp học
Giải pháp của tôi như sau, trước tiên chọn một bạn làm mẫu rồi lần lượt so sánh với các bạn còn lại,
nếu bạn nào cao hơn thì đổi chỗ cho bạn làm mẫu đó và người bạn cao hơn, lúc này người bạn cao hơn sẽ đứng làm mẫu.
Và cứ như vậy cho đến hết, kết quả là người làm mẫu cuối cùng để canh chính là người cao nhất. Ta gọi đây là kỹ thuật đặt lính canh.
Ví dụ 2: Dùng kỹ thuật đặt lính canh tìm giá trị lớn nhất của 3 số $a và $b và $c.*/
function tim_max($a, $b, $c)
{
  $max = $a;
  if ($max < $b) {
    $max = $b;
  }
  if ($max < $c) {
    $max = $c;
  }
  return $max;
}
echo "Số lớn nhất: ", tim_max(4,6,1),'</br>';
//Công thức tìm Max ko dùng if: Max = (a+b+|a-b|)/2
function so_max($a, $b)
{
  return $GTLN = ($a + $b + abs($a -$b))/2;
}
echo so_max(-7, 100),'</br>';
//Ví dụ 3: Tìm số lớn nhất trong mảng:
function find_max($arr)
{
  $max = $arr[0];
  for ($i=1; $i < count($arr); $i++) {
    if ($max < $arr[$i]) {
      $max = $arr[$i];
    }
  }
  return $max;
}
$array = array(2, -5, 6, 4, 10, 22, 1, 0);
echo "Số lớn nhất: ",find_max($array);
?>
