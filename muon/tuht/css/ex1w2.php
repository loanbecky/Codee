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
    		$mess = "There is no solution for equation<br>";
    	}
}else{
	$x = -$b/$a;
	$mess = " x = $x";
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
<style type="text/css">
	#nhapinput{
		width: 380px;
		height: 280px;
		text-align: center;
		background-color: lightblue;
		outline-style: solid;
		outline-color: blue ; 
	}
	.fill{
		width: 80%;
		height: 30px;
		border: 5px;
		border-color: navy;
		background-color: #d9ff66;
	}
	.error{
		text-align: center;
		color: red;
		font-family: tahoma;
		padding: 10px; 
	}
</style>
<body>
<form metthod="get" id="nhapinput">
	<h4 class="error"><?php echo $err ?></h4>
<p>Enter number a</p>
<input type="text" class="fill" name="numbera" value="<?php echo isset($_GET['a'])?$_GET['a']:''; ?>" placeholder="enter nunmber....">
<p>Enter number b</p>
<input type="text" class="fill" name="numberb" value="<?php echo isset($_GET['a'])?$_GET['a']:''; ?>" placeholder="enter number....">
<h4 style="text-align: center; color: blue; font-family: tahoma"><?php echo $mess ?></h4>
<input type="submit" name="Submit" style="background-color:#d9ff66"><br>
</form>
</body>
</html>