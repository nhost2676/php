<?php
/* CÚ PHÁP
while (condition) {
	# code...
}
*/
$i = 1;
while ($i <= 10) {
	echo $i, "</br>";
	$i++;
}
//---------------------------------------------------------------------
/*CÚ PHÁP VÒNG LẶP DO..WHILE:
	do {
		# code...
	} while ( <= 10);
*/
echo "----------------------------------------------------------------</br>";
$j = 1;
do {
	echo $j,"</br>";
	$j++;
} while ($j <= 10);
echo "----------------------------------------------------------------</br>";
echo "While do lồng nhau </br>";
$m = 1;
while ($m < 10) {
	$n = 9;
	while ( $n > $m) {
		echo $n;
		$n--;
	}
	echo "</br>";
	$m++;
}
echo "----------------------------------------------------------------</br>";
$k = 1;
while ($k < 10) {
	$l = $k;
	while ( $l < 10) {
		echo $l;
		$l++;
	}
	echo "</br>";
	$k++;
}
echo "----------------------------------------------------------------</br>";
// Cho Danh Sách Năm
$nam = array(
    1990,
    1991,
    1992,
    1993,
    1994,
    1995
);
  
/* Xuất theo cách thông thường
echo $nam[0];
echo $nam[1];
echo $nam[2];
echo $nam[3];
echo $nam[4];
echo $nam[5];
*/ 
// Dùng while
$i = 0;
while ( $i < count($nam)) {
	echo $nam[$i];
	echo "</br>";
	$i++;
}
echo "```````````</br>";
// Dùng do .. while
$i = 0;
do {
	echo $nam[$i],'</br>';
	$i++;
} while ($i < count($nam));

?>