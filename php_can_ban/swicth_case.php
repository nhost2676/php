<?php
/* 
Cú pháp chung:
switch ($variable) {
    case $value_1:
       // chuỗi câu lênh
       break;
    case $value_2:
        // chuỗi câu lệnh
        break;
    default:
        // chuỗi câu lệnh
        break;
}
*/
$num = 1;
switch ($num) {
	case 0:
		echo 'Đây là số 0';
		break;
	case 1:
		echo 'Đây là số 1';
		break;
	case 2:
		echo 'Đây là số 2';
		break;
	default:
		echo 'Một cái gì đoá:)';
		break;
}
?>