<?php 
$msg = $error = null;
$a = $b = '';
if (isset($_POST['a']) && isset($_POST['b'])){
    // Lấy thông tin
    $a = $_POST['a'] ;
    $b = $_POST['b'] ;
    if (is_numeric($a) && is_numeric($b)){
    if ($a == 0){
        if ($b == 0){
            $msg = 'All values of x are correct';
        } else{
            $error = 'Math Error!';
        }
    }else {
        $x = -($b) / $a;
        $msg = 'root x ='.$x;
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
</head>
<body>
<h2>Simple Equation</h2>
<form method="post"> 
<?php echo $error ?> <br/> <br/>
<input type="text" style="width: 100px" name="a" value=""/> x 
+
<input type="text" style="width: 100px" name="b" value=""/> = 0
<br/> <br/>
<input type="submit"name="caculate" value="Tính" />
<h4><?php echo $msg ?></h4>
</form>
</body>
</html>