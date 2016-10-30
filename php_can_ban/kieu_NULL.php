<!DOCTYPE html>
<html>
<head>
	<title>KIỂU NULL</title>
</head>
<body>
	<?php
	/* 
	Đây là kiểu đặc biệt trong PHP và cũng như các ngôn ngữ lập trình khác, nó mang giá trị rỗng.
    	Lúc bạn khởi tạo một biến và bạn gán = NULL thì sẽ hệ thông sẽ không tốn bộ nhớ để lưu trữ, nên việc sử dụng nó rất có lợi.         
    	Kiểu NULL khi ép kiểu sang kiểu INT thì bằng 0, khi ép kiểu sang kiểu chuỗi thì = rỗng, và khi ép sang kiểu boolean thì mang giá trị FALSE.
	*/
	$a = NULL;
	var_dump($b = (int)$a);
	echo '</br>';
	var_dump($c = (string)$a);
	echo '</br>';
	var_dump($d = (bool)$a);
	?>
</body>
</html>
