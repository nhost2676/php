<?php

/* CÚ PHÁP CƠ SỞ:
C1: foreach ($arr as $key => $value) {
	# code...
}
----------------------------------
HOẶC
C2: foreach($arr as $value)
	# code...
rong đó $arr là mảng cần lặp, $key là số chỉ mục (mảng có chỉ mục) hoặc là key (trong mảng kết hợp), $value là giá trị của phần tử ở vị trí $key.
 ** ĐƯỢC DÙNG ĐỂ DUYỆT MẢNG
 ** CÁCH 1 TA CÓ THỂ LÂY ĐƯỢC CHỈ MỤC, CÒN CÁCH 2 TA KHÔNG LẤY 	  ĐƯỢC CHỈ MỤC, CHỈ LẤY ĐƯỢC GIÁ TRỊ(XEM VÍ DỤ CUỐI)
Ví dụ 1:
*/
// Danh sách các năm
$nam = array(
    1990,
    1991,
    1992,
    1993,
    1994,
    1995
);
  
//Dùng foreach xuất ra các năm trong $nam
foreach ($nam as $key => $value) {
	echo $value,'</br>';
}
//hoặc
echo "**********************</br>";
foreach ($nam as $value) {
	echo $value,'</br>';
}
echo "**********************</br>";
foreach ($nam as $key => $value) {
	echo '$nam[',$key, '] =  ',$value,"</br>";
}
// Ví dụ 2:
// Danh sách mã số sinh viên và sinh viên tương ứng
$sinhvien = array(
    'SV001' => 'Nguyễn Văn A',
    'SV002' => 'Nguyễn Văn B',
    'SV003' => 'Nguyễn Văn C',
    'SV004' => 'Nguyễn Văn D',
    'SV005' => 'Nguyễn Văn E'
);
echo "**********************</br>";
foreach ($sinhvien as $id => $name) {
	echo 'ID: ',$id,'- Họ và tên: ', $name, '</br>';
}
?>
