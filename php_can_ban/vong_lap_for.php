<?php
/* 
CÚ PHÁP:
	for ($bien_dieu_khien; $bieu_thuc_dieu_kien; $bieu_thuc_thay_doi_bien_dieu_khien)
	{
	   // lệnh
	}
*/
	for ($i=0; $i < 10 ; $i++) { 
		echo $i,"</br>";
	}
echo "-------------------------------------------------------------------------------------------------------------------</br>";
	
	for ($i=9; $i >= 0 ; $i--) { 
		echo $i, "</br>";
	}
echo "-------------------------------------------------------------------------------------------------------------------</br>";
	
	for ($i=1; $i < 10 ; $i++) { 
		for ($j=9; $j >= $i ; $j--) { 
			echo  $j;
		}
	echo "</br>";
	}
$sinhvien = array(
'Nguyễn A',
'Nguyễn B',
'Nguyễn C',
'Nguyễn D',
'Nguyễn E',
'Nguyễn F'
);
echo "-------------------------------------------------------------------------------------------------------------------</br>";

// count($sinhvien) =>>>> độ dài mảng
for ($i=0; $i < count($sinhvien) ; $i++) { 
	echo $sinhvien[$i];
	echo "</br>";
}
?>
