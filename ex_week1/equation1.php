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
        $a = $_GET['a'];
        $b = $_GET['b'];

        if (isset($a, $b)) {
            if ($a == 0) {
                if ($b == 0) {
                    echo "The equation has many roots";
                } else {
                    echo "The equation has no root";
                }
            } else {
                if ($b == 0) {
                    echo "The equation has one root x = 0";
                } else {
                    $root = -$b / $a;
                    echo "The equation has one root x = " . $root;
                }
            }
        }
        ?>
    </body>
</html>
