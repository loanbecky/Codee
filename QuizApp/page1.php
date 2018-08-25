<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz App</title>
    <h1 style="text-align:center; font-family:roboto; color:rgb(54, 171, 203);text-transform:uppercase"> 5 First Questions</h1>
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
		border: none;
		padding: 7px;
		margin-left:700px; 
	}
	.next a{
	    color: white;
	    text-transform: uppercase;
	    text-decoration: none;
	}
</style>
<body>
    <ol type="1" class="question">
    <form class="quiz" method="get">
        <li>Question 1: Content1<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option1"> answer A</li>
        <li><input type="radio" name="option1"> answer B</li>
        <li><input type="radio" name="option1"> answer C</li>
        <li><input type="radio" name="option1"> answer D</li>
        </ol>

        <li>Question 2: Content2<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option2" >answer A</li>
        <li><input type="radio" name="option2" >answer B</li>
        <li><input type="radio" name="option2" >answer C</li>
        <li><input type="radio" name="option2" >answer D</li>
        </ol>

        <li>Question 3: Content3<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option3" >answer A</li>
        <li><input type="radio" name="option3" >answer B</li>
        <li><input type="radio" name="option3" >answer C</li>
        <li><input type="radio" name="option3" >answer D</li>
        </ol>

        <li>Question 4: Content5<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option4" >answer A</li>
        <li><input type="radio" name="option4" >answer B</li>
        <li><input type="radio" name="option4" >answer C</li>
        <li><input type="radio" name="option4" >answer D</li>
        </ol>

        <li>Question 5: Content5<br></li>
        Your answer:<br>
        <ol type="A" class="answer">
        <li><input type="radio" name="option5"> answer A</li>
        <li><input type="radio" name="option5" >answer B</li>
        <li><input type="radio" name="option5" >answer C</li>
        <li><input type="radio" name="option5" >answer D</li>
        </ol>
    </form>
    </ol>
    <button class="next"><a href="page2.php">Next</a></button>
</body>
</html>