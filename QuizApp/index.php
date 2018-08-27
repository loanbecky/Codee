<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz App</title>
    <h1>Quiz App</h1>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <!-- resolve conflict-->
</head>
<style>
h1{
    text-transform:uppercase;
    font-family:sans-serif;
    text-align:center;
    color:rgb(54,171,203);
}
h3{
    text-transform:uppercase;
    font-family:sans-serif;
    text-align:center;
    color:rgb(54,171,203);
    padding-top: 15px;
}
form{
    background-color:#e9e9e9;
    width:400px;
    height:200px;
    border-radius:5px;
    margin: 0 auto;
}
#option{
    margin-left:30%;
    width:150px;
    height:50px;
    border:none;
    background-color:rgb(54,171,203);
    color:white;
}
#option a{
    text-decoration:none;
}
</style>
<body>
<form method="get"> 
<h3> Welcome to the Online Quiz</h3>
<button name="startquiz" id="option"> <a href="page1.php">Start Quiz</button> <br>
</form>
</body>
</html>