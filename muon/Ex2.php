<?php
$mess = $err = null;
$a = $b = $c ='';
        if (isset($_GET['a'], $_GET['b'], $_GET['c'])) {
            // dynamic typing
            $i=0; // '0' true [1,2,3]
            var_dump($i);
            
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];

            if (is_numeric($a) && is_numeric($b)&&is_numeric($b)) {
                //co the dung ':-> {' va 'endif -> }' cua 'if'
                if($a != 0){
                    //pt bac hai
                    $delta = $b * $b - 4 * $a * $c;
                    if($delta < 0){
                      
                        $mess='This equation has no root.';
                        
                    }
                    else if($delta == 0){
                        $root = -$b / (2 * $a);
                        $mess = 'This equation has only one root: '.$root;
                    }
                    else if($delta > 0){
                        $x1 = (-$b + sqrt($delta)) / (2 * $a);
                        $x2 = (-$b - sqrt($delta)) / (2 * $a);
                        
                        $mess = 'This equation has two different roots: '. $x1 . '   ' . $x2;
                    }
                }
                else{
                    //pt bac nhat
                    if($b == 0){
                        if($c == 0){
                            $mess='This equation is true with all values of x.';
                        }
                        else{
                            $err = 'This equation has no root.';
                        }

                    }
                    else{
                        //b!=0
                        $x = -$c / $b;
                        $mess = 'This equation has only one root: ' . $x;
                    }
                }
            }
            else{
                
                $err='a b c must be number.';
            }
        }
        else{
            $err='a b c are required.';
        }


            ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Week1 Ex2</title>
    <style>
        fieldset{
            background-color: white;
            text-align: center;
            border-radius: 25px;
           
        }
        p{
            text-align: center;
        }
        legend{
            font-size: 200%;
            font-family: arial;
            color: lightblue;
            font-weight: bold;
            /*text-decoration: underline; */

        }
        p.err{
            color: red;
            text-align: center;
        }
        p.mss{
            color: green;
            text-align: center;
        }

    </style>
</head>

<form action="" method="GET">
        <fieldset>
            <legend>ax<sup>2</sup> + bx + c = 0</legend>
            <?php if( $err) ?>
            <p class="err"><?= $err ?></p>
            <p>
                <label for="a">a: </label>
                <input autofocus="true" type="number"  id="a" name="a" value="<?php echo isset($_GET['a']) ? $_GET['a'] : '' ?>"
                placeholder="enter a....">
            </p>
            <p>
                <label for="b">b: </label>
                <input type="number" id="b" name="b" value="<?php echo isset($_GET['b']) ? $_GET['b'] : '' ?>" placeholder="enter b...">
            </p>
            <p>
                <label for="c">c: </label>
                <input type="number" id="c" name="c" value="<?php echo isset($_GET['c']) ? $_GET['c'] : '' ?>" placeholder="enter c...">
            </p>
            <?php if($mess) ?>
            <p class="mss"><?=$mess ?></p>
            <input type="submit" value="Execute">
        </fieldset>
    </form>

	<body style="background-color: linen">
		
            <script></script>
	</body>
</html>