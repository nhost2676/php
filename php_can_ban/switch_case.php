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
		echo 'Đây là số 0 </br>';
		break;
	case 1:
		echo 'Đây là số 1 </br>';
		break;
	case 2:
		echo 'Đây là số 2 </br>';
		break;
	default:
		echo 'Một cái gì đoá:) </br>';
		break;
}
// chuyển switch sang if
if ($num == 0) {
	echo 'Đây là số 0 </br>';}
elseif ($num == 1) {
	echo "Đây là số 1 </br>";}
elseif ($num == 2) {
	echo "Đây là số 2</br>";}
else echo "Một cái gì đoá:)) </br>";
// switch lồng với switch
$a = 12;
$middle = $a % 2;
switch ($a) {
	case 12:
		switch ($middle) {
			case 0:
				echo "Số chẵn </br>";
				break;
			case 1:
				echo "Số lẻ";
				break;			
			default:
				break;
		}
		
	default:
		break;
}
?>