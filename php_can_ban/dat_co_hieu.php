<?php
/* Kỹ thuật đặt cờ hiệu dùng để duyệt mảng danh sách và kiểm tra từng phần tử để đưa ra kết quả cuối cùng.
   Kỹ thuật này thường dùng để kiểm tra các dữ liệu đầu vào trước khi lưu vào hệ thống, kiểm tra một số tồn tại trong danh sách không,
kiểm tra trong danh sách có số nguyên tố không,...*/
// Ví dụ: Kiểm tra xem các số từ 1 đến 1000 có số nào chia hết cho 40 không?
// Khai báo cờ và gán cho cờ có giá trị là không tìm thấy
$flag = false;
for ($i= 1 ; $i <= 1000 ; $i++) {
  if ($i % 40 == 0) {
    $flag = True;  }
}
if ($flag = True) {
  echo "Có";
}
else {
  echo "Không";
}
?>
