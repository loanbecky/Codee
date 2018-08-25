<?php
$mon=$_GET['month'];
switch ($mon) {
    case 1|| 3 ||5 ||7 ||8|| 10 || 12:
        echo "Tháng $mon có 31 ngày";
        break;
    case 4||6||9||11:
        echo "Tháng $mon có 30 ngày";
        break;
    case 2:
        echo "Tháng 2 có thể có 28 hoặc 29 ngày tùy năm";
        break;
    default:
        echo "Điền tháng để tìm ngày";
}
?>