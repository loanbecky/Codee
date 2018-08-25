<?php
//Lấy dữ liệu từ form input
$a = $_GET['a'];
//Lấy dữ liệu số b
$b = $_GET['b'];
//Lấy dữ liệu số c
$c = $_GET['c'];
//Tính delta
$delta = $b*$b-4*$a*$c;
//In ra số a và b, c người dùng đã nhập vào 
echo " a = "." ".$a;
echo " & ";
echo " b = "." ".$b;
echo " & ";
echo " c = "." ".$c;
echo " =>";
//Tính delta
echo "delta"." = ".$delta;
echo "  ";
echo "=>";
//Xét các trường hợp của delta
if ($delta<0) {
	echo"Phương trình vô nghiệm";
} else {
	if ($delta>0) {
		$x1=(-$b-sqrt($delta))/2*$a;
		$x2=(-$b+sqrt($delta))/2*$a;
		echo "Phương trình có hai nghiệm phân biệt"."  ".$x1." và ".$x2;
		
	} else {
		$x=-$b/2*$a;
		echo "  "."Phương trình có một nghiệm duy nhất".$x;
	}
	
}

?>
