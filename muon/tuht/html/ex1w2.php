<?php
$mess = $err = null;
if(isset($_GET['numbera']) && isset($_GET['numberb'])){
$a = $_GET['numbera'];
$b = $_GET['numberb'];
if(is_numeric($a) && is_numeric($b)){
if($a==0){
	if($b == 0){
	$mess = "many roots x";
    }else{
    		$mess = "There is no solution for equation $a*x + $b = 0 <br>";
    	}
}else{
	$x = -$b/$a;
	$mess = "The solution is: x = $x";
}
}else{
 $err = "REENTER NUMBER A & B";
}
}else{
	$err = "Please enter number a and number b";
}
?>
<html>
<header>
	<title> Exercise 1</title>
<h1 style="color:light blue; font-family: tahoma; text-align: center;">Exercise 1 Week 2 : Equation App Html</h1>
</header>
<body>
<form name="nhapinput" metthod="get" style="text-align: center;">
	<h4 style="color: red; font-family: tahoma; text-align: center;"><?php echo $err ?></h4>
Enter number a:<br>
<input type="text" name="numbera" value="<?php echo isset($_GET['a'])?$_GET['a']:''; ?>" placeholder="enter nunmber...."><br>
Enter number b:<br>
<input type="text" name="numberb" value="<?php echo isset($_GET['a'])?$_GET['a']:''; ?>" placeholder="enter number...."><br>
<h4 style="text-align: center; color: blue; font-family: tahoma"><?php echo $mess ?></h4>
<input type="submit" name="Submit"><br>

</form>
</body>
</html>