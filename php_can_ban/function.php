<?php  
// CỰC KÌ QUAN TRỌNGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
/*					CÚ PHÁP
 function func_name($vars)
{
    // các đoạn code
    return $val;
}
*/
//VD: Hàm kiểm tra tính chẵn lẻ
function chan_le($number)
{
	if ($number % 2 == 0) {
		echo "Đây là số chẵn</br>";
	}
	else echo "Đây là số lẻ</br>";
}
$a = 14;
$b = 6;
$c = 15;
chan_le($a);
chan_le(13);
// VD: Hàm truyền vào nhiều biến: Hàm tính tổng 
function sum($a,$b){
	return $a + $b; }
echo sum($a, $b);
$tong = sum($a, $b);
echo "<br>",$tong,'</br>';
/*Gán giá trị mặc định cho biến truyền vào
Nếu một hàm trong php bạn khai báo có 2 biến truyền vào mà lúc sử dụng bạn chỉ truyền có 1 biến vào thì hệ thống sẽ báo lỗi ngay. Trong thực tế bạn muốn có những hàm không ràng buộc phải bắt buộc truyền đủ biến vào, vì thế nó cũng cấp cho chúng ta một chức năng là truyền giá trị mặc định cho biến trong các hàm,
*/
function sum2($a,$b,$c = false)
{		
	$sum = $a + $b;
	if ($c != false) {
		$sum += $c; 
	return $sum;
	}
}
echo sum2($a, $b, $c);
//  hàm tính tổng có 3 đối số truyền vào, trong đó có một đối số $c mình gán = false, đây chính la giá trị mặc định của đối số truyền vào $c. Hàm sum2 có nhiệm vụ tính tổng cả 3 số, nếu $c không truyền vào thì chỉ tính tổng của 2 số thôi
/*
Tham số thực và tham số hình thức

Các biến ta định nghĩa trong hàm gọi là tham số hình thức, còn biến mà ta truyền vào ở chương trình chính gọi là tham số thực.

** Chuong trinh chinh
	$so = 12;
	$flag = kiem_tra_so_nguyen_to($so);
  
**ham kiem tra so nguyen to
	function kiem_tra_so_nguyen_to($number)
	{
	  // code
	}
**Tham số $number trong hàm kiem_tra_so_nguyen_to gọi là tham số hình thức, biến $so trong chương trình chính gọi là tham số thực
*/
/* Biến toàn cục và biến cục bộ:
 ------ Biến toàn cục: khai báo ở chương trình chính.
 ------ Biến cục bộ: Khai báo trong hàm.
 -------->>  Lấy giá trị biến toàn cục ta dùng lệnh global $tenbien để lấy
*/
?>
