<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (isset($a, $b, $c)) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                echo "The equation has many roots";
            } else {
                echo "The equation has no root";
            }
        } else {
            if ($c == 0) {
                echo "The equation has one root x = 0";
            } else {
                $root = -$c / $b;
                echo "The equation has one root x = " . $root;
            }
        }
    } else {
        $delta = pow($b, 2) - 4 * $a * $c;
        if ($delta < 0) {
            echo "The equation has no root";
        } else if ($delta == 0) {
            $root = -$b / 2 * $a;
            echo "The equation has one root x = " . $root;
        } elseif ($delta > 0) {
            $root1 = (-$b + sqrt($delta)) / 2 * $a;
            $root2 = (-$b - sqrt($delta)) / 2 * $a;
            echo "The equation has two roots x1 = " . $root1 . " and x2 = " . $root2;
        }
    }
}
?>

