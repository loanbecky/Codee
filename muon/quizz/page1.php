<?php 
    $questions = array(
            array(
                'text' => 'Question 1 text',
                'answerA' => 'Answer A',
                'answerB' => 'Answer B',
                'answerC' => 'Answer C',
                'answerD' => 'Answer D',
                'correctAnswer' => 'A'
            ),
            array(
                'text' => 'Question 2 text',
                'answerA' => 'Answer A',
                'answerB' => 'Answer B',
                'answerC' => 'Answer C',
                'answerD' => 'Answer D',
                'correctAnswer' => 'C'
            ),
             array(
                'text' => 'Question 3 text',
                'answerA' => 'Answer A',
                'answerB' => 'Answer B',
                'answerC' => 'Answer C',
                'answerD' => 'Answer D',
                'correctAnswer' => 'D'
            )
    );
        /*foreach ($questions as $question) (deo phai cho nay) {*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <h1 id="title">
                QUIZZ APP
            </h1>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="content">
                <div class="q">
                    <?php foreach ($questions as $question) {?>
                    <div class="text">
                    
                        <?php echo'<label>'.$question['text'].'</label>'; ?>
                    </div>
                    <div class="choice">
                        <?php echo '<div class="ch"><input type="radio">'.$question['answerA'].'</div>'; ?>
                        <?php echo '<div class="ch"><input type="radio">'.$question['answerB'].'</div>'; ?>
                        <?php echo '<div class="ch"><input type="radio">'.$question['answerC'].'</div>'; ?>
                        <?php echo '<div class="ch"><input type="radio">'.$question['answerD'].'</div>'; } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>