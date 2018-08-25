<?php
$mess = $error = null;
if(isset($_GET['numbera']) && isset($_GET['numberb']) && isset($_GET['numberc'])){
	$a = $_GET['numbera'];
	$b = $_GET['numberb'];
	$c = $_GET['numberc'];
	if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
		if($a == 0){
			//giai pt bac nhat 
			if($b == 0){
				if($c == 0){
				$mess = "Many roots X";
			}else{
				$mess = "no solution";
			}
			}else{
			    $x = -$c/$b;
				$mess = "solution x = $x";
		}
		}else{
			//giai pt bac 2
			$delta = $b*$b - 4*$a*$c;
			if ($delta > 0) {
			$x1 = (-$b + sqrt($delta))/2*$a;
			$x2 = (-$b - sqrt($delta))/2*$a;
			$mess = "x1 = $x1 <br>"."x2 = $x2<br>";
		}
		elseif ($delta == 0) {
			$x = -$b/(2*$a);
			$mess =  "there is one solution x = $x";
		}else{
			$mess = "no solution";
		   
		}
		}


	}else{
	$error = "re enter number a, b and c";
}
}else{ 
	$error = "please full fill empty box";
} 
?>
<html>
<header>
	<title>ex2</title>>
<h1 style="text-align: center;">Exercise 2 Week 2 : Equation App Html</h1>
</header>
<body>
<form name="dieninput" metthod="get" style="text-align: center;">
<h4 style="color: red; font-family: tahoma"><?php echo $error ?></h4>
Enter number a:<br>
<input type="text" name="numbera" value="" placeholder="number...."><br>
Enter number b:<br>
<input type="text" name="numberb" value="" placeholder="number..."><br>
Enter number c:<br>
<input type="text" name="numberc" value="" placeholder="number..."><br>
<h4 style="text-align: center; color: blue; font-family: tahoma"><?php echo $mess ?></h4>
<input type="submit" name="Submit"><br>
</form>
</body>
</html>