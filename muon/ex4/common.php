<?php 
            if (isset($_GET['go'])){
                $a=$_GET['a'];
                $b=$_GET['b'];
                if ($a == ''){
                    $x = 'nhập số a';
                }
                else if ($b == ''){
                    $x = 'nhập số b';
                }
                else if ($a == 0){
                    $x = 'Số a phải nhập khác 0';
                }
                else {
                    $x = -($b) / $a;
                }

            }

            if (isset($_GET['go'])){
                $a=$_GET['a'];
                $b=$_GET['b'];
                $c=$_GET['c'];
                $d= ($b*$b) - (4*$a*$c);
                if ($a == 0){
                    $x1 = $x2 = 'so a khong dc bang 0';
                }
                else if ($d < 0){
                    $x1 = $x2 = 'vo nghiem';
                }
                else if ($d == 0){
                    $x1 = $x2 = 'x1=x2='.(-$b/2*$a);
                }
                else {
                    $x1 = -($b) + sqrt(($b*$b) - (4*$a*$c)) / 2*$a;
                    $x2 = -($b) - sqrt(($b*$b) - (4*$a*$c)) / 2*$a;
                }

            }
        ?>