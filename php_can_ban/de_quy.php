<?php 
/* 1. Đệ quy tuyến tính
Đây là loại đệ quy mà trong hàm đệ quy chỉ gọi duy nhất 1 lần đến chính nó.*/
function sum($n)	
{
	if ($n == 1) {return $n; }
	return $n + sum($n - 1);
}
echo sum(7);
echo "<br>\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/</br>";
/* 2. Đệ quy nhị phân
Đệ quy nhị phân là loại đệ quy mà thân hạm gọi lại chính nó 2 lần.*/
function Fibo($n)
{
	if ($n <= 2) {
		return 1;
	}
	else {
		return (Fibo($n - 2) + Fibo($n - 1));
	}
}
echo Fibo(20);

?>