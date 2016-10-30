<!DOCTYPE html>
<html>
<head>
	<title>Kiểu mảng trong PHP</title>
</head>
<body>
	<?php
		echo '<br>CÁC KIỂU KHAI BÁO MẢNG</br>';
		// $ten_mang = array(); Cú pháp khai báo mảng
		$arr = array('Phan_tu_1','Phan_tu_2');
		print_r($arr);
		echo'</br>';
		//-----------------------------------------
		$arr2 = array(
			'0' => 'Phan_tu_1' , 
			'1' => 'Phan_tu_2'
			);
		print_r($arr2);
		echo'</br>';
		//-----------------------------------------
		$arr3 = array();
		$arr3[0] = 'Phan_tu_1';
		$arr3[1] = 'Phan_tu_2';
		print_r($arr3);
		echo'</br>';
		//----------------------------------------
		$arr4 = array();
		$arr4[] = 'Phan_tu_1';
		$arr4[] = 'Phan_tu_2';
		print_r($arr4);
		echo'</br>';
		echo $arr4[1];
		echo '<br>----------------------------------</br>';
		//------------------------------------------
		echo 'MẢNG NHIỀU CHIỀU </br>';
		$a = array();
		$a[0][1] = 123;
		$a[0][2] = 321;
		//Khai báo mảng hai chiều
		echo 'Có dạng $array[chỉ_số_dòng][chỉ_số_cột] </br>';
		echo '$a[0][1] =',$a[0][1];
		echo '<br> $a[0][2] =', $a[0][2],'</br>';
	?>
</body>
</html>
