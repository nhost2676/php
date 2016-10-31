<?php
$nam = 2016;
$kt = $nam % 4 == 0 && $nam % 100 != 0 || $nam % 400 == 0;
if ($kt == 1) {
	echo 'Năm nhuận.';
}
else {echo "Năm không nhuận";}
// Năm nhuận là năm chia hết cho 4 hoặc 400 nhưng ko chia hết cho 100
?>
