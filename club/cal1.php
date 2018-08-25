<?php
$mon=$_GET['month'];
if ($mon == 1 OR $mon == 3 OR $mon == 5 OR $mon == 7 OR $mon == 10 OR $mon == 12) {
    echo "Tháng $mon có 31 ngày";
} elseif ($mon == 4 OR $mon == 6 OR $mon == 9 OR $mon == 11) {
    echo "Tháng"." ".$mon."có 30 ngày";
} else {if ($mon == 2) {
	echo "Tháng 2 có thể có 28 hoặc 29 ngày tùy năm";
} else {
	echo "Điền tháng để tìm ngày";
}

    
}

?>