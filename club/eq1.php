<?php
//Lấy dữ liệu từ form input
$a = $_GET['a'];
//Lấy dữ liệu số b
$b = $_GET['b'];
//Thực hiện phép tính
$c = ($b*(-1))/$a;
//In ra số a và b người dùng đã nhập vào 
echo " a = "." ".$a;
echo " & ";
echo " b = "." ".$b;
echo "  ";
//In ra đáp án của phương trình
echo "=>"." x = ".$c;
?>
