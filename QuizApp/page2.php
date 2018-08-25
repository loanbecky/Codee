<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz App</title>
    <h1 style=" text-align:center; font-family:roboto; color:rgb(54,171,203); text-transform:uppercase;"> Last Questions</h1>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<style>
.quiz{
		width:800px;
		background-color: #e9e9e9;
		padding: 25px;
		margin:auto;
	}
	.answer{
		background-color:  rgb(54, 171, 203);
		margin:auto;
        width: 90%;
        border-radius: 15px; 
    }
    .question li {
		padding: 5px;
		font-weight: bold;
		margin-top: 5px;
	}
	.next{
		background-color:rgb(54, 171, 203) ;
		border: solid white 2px;
		padding: 7px;
        margin-right:500px; 
        width:100px;
	}
	.next a{
	    color: white;
	    text-transform: uppercase;
	    text-decoration: none;
    }
    .previous{
		background-color:rgb(54, 171, 203) ;
		border: solid white 2px;
		padding: 7px;
        margin-left:500px; 
        width:100px;
	}
	.previous a{
	    color: white;
	    text-transform: uppercase;
	    text-decoration: none;
	}
</style>
<body>
<ol type="1" class="question">
    <form class="quiz" method="get">
        <li>Question 6: Content6<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option1"> answer A</li>
        <li><input type="radio" name="option1"> answer B</li>
        <li><input type="radio" name="option1"> answer C</li>
        <li><input type="radio" name="option1"> answer D</li>
        </ol>

        <li>Question 7: Content7<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option2" >answer A</li>
        <li><input type="radio" name="option2" >answer B</li>
        <li><input type="radio" name="option2" >answer C</li>
        <li><input type="radio" name="option2" >answer D</li>
        </ol>

        <li>Question 8: Content8<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option3" >answer A</li>
        <li><input type="radio" name="option3" >answer B</li>
        <li><input type="radio" name="option3" >answer C</li>
        <li><input type="radio" name="option3" >answer D</li>
        </ol>

        <li>Question 9: Content9<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option4" >answer A</li>
        <li><input type="radio" name="option4" >answer B</li>
        <li><input type="radio" name="option4" >answer C</li>
        <li><input type="radio" name="option4" >answer D</li>
        </ol>

        <li>Question 10: Content10<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option5"> answer A</li>
        <li><input type="radio" name="option5" >answer B</li>
        <li><input type="radio" name="option5" >answer C</li>
        <li><input type="radio" name="option5" >answer D</li>
        </ol>
    </form>
    </ol>
    <button class="previous"><a href="page1.php">Previous</a></button>
    <button class="next"><a href="result.php">Submit</a></button>
</body>
</html>