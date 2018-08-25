<?php 
$msg=$error= null;
$a = $b = $c= '';
if (isset($_GET['a']) && isset ($_GET['b']) && isset($_GET['c'])){
    // Lấy tham số
    $a = $_GET['a'] ;
    $b = $_GET['b']; 
    $c = $_GET['c'];
    if (is_numeric($a)&&is_numeric($a)&&is_numeric($c)){
        //   Tính toán
        if ($a == 0){
            if ($b == 0){
                if ($c == 0){
                    $msg = 'All values of x are correct';
                }else{
                    $error = 'Math Error!';
                }
            }else{
                $x = -$c /$b;
                $msg = 'The equation has one root x = '.$x;
            }
        }else{
            $delta = $b*$b - 4*$a*$c;
            if($delta == 0){
                $root = -$b/2*$c;
                $msg = 'The equation has one root x =' .$root;
            }else if($delta > 0){
                $x1 = (-$b + sqrt($delta)) / (2*$a);
                $x2 = (-$b - sqrt($delta)) / (2*$a);
                $msg = 'The roor of equation : x1 = '.$x1.'and x2 = '.$x2;
            }else{
                $error = 'No solution';
            }
        }
    }
}$error = 'Enter a, b and c, please!';

?>
<!DOCTYPE html>
<html>
<head>
<title>Quadratic Equation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Quadratic Equation</h1>
<style>
</style>
<form method="get" action="">
<?= $error ?> <br/> <br/>
<input type="text" style="width: 100px" name="a" value="" placeholder = "Number 1,2,3,..."/>x <sup>2</sup>
+
<input type="text" style="width: 100px" name="b" value="" placeholder = "Number 1,2,3,..."/>x
+ 
<input type="text" style="width: 100px" name="c" value="" placeholder = "Number 1,2,3,..."/>
= 0
<br/><br/>
<input type="submit" name="calculate" value="Caculate" />
</form>
<?= $msg ?>
</body>
</html>