<?php
/**
  Find the solution of the quadratic equation: ax^2 + bx + c = 0
 */
$error = null;
$a = $b = $c = '';
$result = '';
if (isset($_GET['a'], $_GET['b'], $_GET['c'])) {
    // dynamic typing
    $i = 0; // '0' true [1,2,3]
    var_dump($i);

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if (is_numeric($a) && is_numeric($b) && is_numeric($b)) {
        if ($a == 0) {
            // pt bac nhat
            if ($b == 0) {
                if ($c == 0) {
                    $result = 'All values of x are correct';
                } else {
                    $result = 'Math Error!';
                }
            } else {
                $root = -$c / $b;
                $result = 'The equation has one root x = ' . $root;
            }
        } else { // pt bac 2
            $delta = $b * $b - 4 * $a * $c;
            if ($delta == 0) {
                $root = -$b / (2 * $a);
                $result = 'The equation has one root x = ' . $root;
            } else if ($delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                $result = 'The root of equation: x1 = ' . $x1 . ' and x2 = ' . $x2;
            } else {
                $result = 'No solution';
            }
        }
    } else {
        $error = 'a b c must be numeric.';
    }
} else {
    $error = 'a b c are required. input method: url ?a=1&b=-2&c=1';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Equation2</title>
    </head>  
    <style>
        fieldset{
            text-align: center;
            color: blue;
        }
        .error{
            text-align: center;
            font-size: 50px;
            color: red;
            display: block;
            min-height: 50px;
            background: tomato;
        }
    </style>
    <body>
        <form action="" method="GET">
            <fieldset>
                <h1>Find the solution of the quadratic equation</h1>
                <h2> <center>aX^2 + bX + c = 0</center></h2>
                <?php if ($error): // 0/[]/null/'' ?>
                    <p class="error"><?= $error ?></p>
                <?php endif; ?>
    <!--                <p>   
                    <label for="a">a: </label>
                    <input autofocus="true" type="number" id="a" name="a" value="<?php echo isset($_GET['a']) ? $_GET['a'] : ''; ?>" placeholder="number...">
                    
                </p>
                <p>
                    <label for="b">b: </label>
                    <input type="number" name="b" id="b">
                </p>
                <p>
                    <label for="c">c: </label>
                    <input type="number" name="c" id="c">
                </p>-->
                <input type="number" style="width: 20px" name="a" value=""> x <sup>2</sup>
                + <input type="number" style="width: 20px" name="b" value="">x
                +<input type="number" style="width: 20px" name="c" value=""> = 0
                <br></br>
                <input type="submit" name="exe" value="Caculate">
            </fieldset>    
        </form>
        <?php echo $result; ?>
    </body>
</html>