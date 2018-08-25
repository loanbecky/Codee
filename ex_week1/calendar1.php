<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $month = $_GET['month'];

        if (isset($month) && $month > 0 && $month <= 12) {
            if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12) {
                echo "Tháng " . $month . " có 31 ngày";
            } else if ($month == 2) {
                echo "Tháng 2 có 28 ngày";
            } else {
                echo "Tháng " . $month . " có 30 ngày";
            }
        } else {
            echo "Month doesn't exist!";
        }
        ?>
    </body>
</html>
