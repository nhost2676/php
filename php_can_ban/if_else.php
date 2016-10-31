<!DOCTYPE html>
<html>
<head>
	<title>GIẢI PT </title>
</head>
<body>
	<?php
	/* Cấu trúc chung 
		if (condition){
			lệnh.....}
		elseif(condition){
			lệnh.....}
		........
		else {}
	*/
		$a = 1; 
		$b = -9;
		$c = 18;
			echo "GIẢI PT AX^2 + BX + C </br>";
		$delta = $b*$b - 4*$a*$c;
		if ($delta > 0) 
		 	{ $x1 = (-$b + sqrt($delta)) / (2*$a);
		 	  $x2 = (-$b - sqrt($delta)) / (2*$a);
		 	  echo "Pt có hai nghiệm x1 =" ,$x1,", x2 = ",$x2;}
		elseif ($delta < 0) {
			echo "PT vô nghiệm!!";
		}
		else echo "P
			t có nghiệm 1 nghiệm kép x =" , $b/(2*$a);
	?>	
</body>
</html>
