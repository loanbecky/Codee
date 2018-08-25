<?php require('common.php') ?>
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
            <h2>EQUATION APP</h2>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="content">
                <div class="block">
                        <h3 class="title">
                                Giải phương trình bậc hai
                            </h3>
                            <div class="form">
                                <form method="get" action="">
                                    <div class="get">
                                            <label>Nhập số a</label>
                                            <input class="input" type="text" style="width: 30px" name="a" value=""/>
                                    </div>
                                    <div class="get">
                                            <label>nhập số b</label>
                                            <input class="input" type="text" style="width: 30px" name="b" value=""/>
                                    </div>
                                    <div class="get">
                                            <label>nhập số c</label>
                                            <input class="input" type="text" style="width: 30px" name="c" value=""/>
                                    </div>
                                    <input class="subbutton" type="submit" value="Nghiệm" name="go">
                                </form>
                                <div class="result">
                                    <?php
                                        if (isset($x1)){
                                            echo $x1;
                                        }
                                        if (isset($x2)){
                                            echo $x2;
                                        }
                                         ?>   
                                </div>
                            </div>
                </div>

            </div>
        </div>
    </section>
</body>
</html>