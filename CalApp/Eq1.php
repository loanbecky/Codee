<?php 
$msg = $error = null;
$a = $b = '';
if (isset($_GET['a']) && isset($_GET['b'])){
    // Lấy thông tin
    $a = $_GET['a'] ;
    $b = $_GET['b'] ;
    if (is_numeric($a) && is_numeric($b)){
    if ($a == 0){
        if ($b == 0){
            $msg = 'All values of x are correct';
        } else{
            $error = 'Math Error!';
        }
    }else {
        $x = -($b) / $a;
        $msg = 'The root of equation: x ='.$x;
     
    }
    }
}else{
    $error = 'Enter a and b, please!';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Simple Equation </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
	#textinput{
        text-align: center;
        color: #cccccc;
        font-family: 'Times New Roman', Times, serif;
	}
	.fill{
        text-align: center;
        color:  black;
        font-family: 'Times New Roman', Times, serif;
	}
	.error{
		text-align: center;
		color:rgb(203, 71, 54);
		font-family: 'Times New Roman', Times, serif;
    }
    .message{
        text-align: center;
        color:rgb(54, 193, 203);
        font-family: 'Times New Roman', Times, serif;
    }
    body{
        background: url("blue-sky.jpg");
    }

</style>
</head>
<body>
<h1 style="color:light blue; font-family: tahoma; text-align: center;">Simple Equation</h1>

<form name="textinput" method="get" action=""> 

<h4 class="error"><?= $error?></h4> <br/> <br/>
<input type="text" class="fill"style="width: 100px" name="a" value="" placeholder = "Number 1,2,3,..."/> x 
+
<input type="text" class="fill" style="width: 100px" name="b" value="" placeholder = "Number 1,2,3,..."/> = 0
<br/> <br/>
<input type="submit"  name="caculate" value="Caculate" /> <br/> <br/>
<h4 class="message"><?= $msg ?></h4>

</form>
</body>
</html>