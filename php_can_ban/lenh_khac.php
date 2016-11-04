<?php
// 1. Lệnh break: Lệnh break thường được dùng để thoát khỏi vòng lặp cho dù vòng lặp vẫn chưa kết thúc.
for ($i = 1; $i < 100 ; $i++) { 
	echo $i,"</br>";
	if ($i == 5) {
		break;
	}
}
echo "=================</br>";
// 2. Lệnh continue: Lệnh continue sẽ bỏ qua những đoạn code bên dưới nó và nhảy qua vòng lặp kế tiếp (không thoát hẳn vòng lặp như lệnh break).
	for ($i = 1; $i < 10 ; $i++) { 
		if ($i == 5) {
			continue;
		}
		echo $i,"</br>";
	}
echo "=================</br>";
/*3. Lệnh goto: Trong ví dụ này nếu bình thường thì nó sẽ xuất 	ra màn hình cả $a và $b nhưng bài này nó chỉ xuất ra màn hình mỗi $a vì dòng goto label_end sẽ nhảy chương trình đến cái nhãn label_end nên dòng echo $b; không được thực hiện. label_end được gọi là nhãn (có thể đặt tên bất kỳ).
Người ta khuyên rằng không nên sử dụng lệnh goto bởi vì nó khó nhìn, lộn xộn khó bảo trì nâng cấp.

$a = 12;
$b = 13;
$c = $a + $b;  
echo $a;
goto label_end;
echo $b;
label_end;
*/
//4. Lệnh die() và exit():Với 2 lệnh break và continue chỉ ảnh hương trong vòng lặp thì lệnh die và exit lại ảnh hưởng tới cả chương trình, nếu bạn dùng 2 lệnh này thì chương trình sẽ dừng ngay lập tức và những đoạn code bên dưới die và exit sẽ không được thực hiện.
echo "in dòng này";
die(); // hoặc exit();
echo "in dòng thứ 2";
?>