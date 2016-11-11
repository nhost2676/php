<?php
// Sắp xếp tăng dần:
function InsertionSoft($arr)
{
  $len = count($arr); // Lấy số phần tử mảng
  //Lặp qua từng pt của mảng để sắp xếp
  for ($i = 0; $i < $len ; $i++) {
    //Lặp từ phần tử thứ im ví dụ $i = 6
    //thì sẽ lặp từ phần tử số 6 trở về 0 để kt
    $loop = $i;
    $current = $arr[$i]; // Lưu lại GT của $arr[$i] để khỏi bị mất
    // điều kiện dừng là $loop <= 0(hết mảng) hoặc
    // pt thứ $loop - 1 bé hơn pt thứ $i(vì đã tìm được đúng vị trí)
    // nếu một trong 2 điều kiện đó đúng thì dừng vòng lặp
    while ($loop > 0 && ($arr[$loop - 1] > $current)) {
      // Di dời các pt lên 1 bậc
      $arr[$loop] = $arr[$loop - 1];
      $loop -= 1;
    }
    // Gán giá trị $current vào vị trí tìm được
    $arr[$loop] = $current;
  }
  return $arr;
}
// Săp xếp giảm dần:
function InsertionSoft_1($arr)
{
  $len = count($arr);
  for ($i = 0; $i < $len ; $i++) {
    $loop = $i;
    $cur = $arr[$i];
    // điều kiện dừng là $loop <= 0(hết mảng) hoặc
    // pt thứ $loop - 1 > pt thứ $i(vì đã tìm được đúng vị trí)
    // nếu một trong 2 điều kiện đó đúng thì dừng vòng lặp
    while ($loop > 0 && ($arr[$loop - 1] < $cur)) {
      $arr[$loop] = $arr[$loop - 1];
      $loop -= 1;
    }
    $arr[$loop] = $cur;
  }
  return $arr;
}
//-------------------------------------------------
function in_mang($arr)
{
  foreach ($arr as $key => $value) {
    echo $value,'-';
  }
}
//------------------------------------------------
$arr = array(9,5,2,4,8,1,0,3,6,7);
//Giam dan:
in_mang(InsertionSoft($arr));
echo "</br>";
//Tang dan:
in_mang(InsertionSoft_1($arr));
?>
