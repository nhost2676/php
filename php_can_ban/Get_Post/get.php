<?php
echo "Dữ liệu nhận được là: </br>";
foreach ($_GET as $key => $value) {
  echo "<strong>",$key,'=> ',$value,'<strong><br/>';
}
/*
Lưu ý quan trọng:
Trước khi lấy một dữ liệu nào đó bạn phải kiểm tra tồn tại không không mới lấy,
vì nếu bạn không kiểm tra thì giả sử người dùng không truyền dữ liệu qua mà bạn lại nhận thì sẽ bị báo lỗi ngay
. Để kiểm tra ta dùng hàm isset($tenbien) trong php.
Ví dụ:

if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
*/
?>
