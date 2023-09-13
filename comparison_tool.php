<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <div class="container">
        <h1>
        Comparison Tool
        </h1>
        <form method="post" action="">
            <input type="number" name="score1" placeholder="score 1" required><br>
            <input type="number" name="score2" placeholder="score 2" required><br>
            <input type="submit" value="large scores">
        </form>
        <div id="result">
            <?php 

                if ($_SERVER["REQUEST_METHOD"]== "POST") {
                   $score1=$_POST["score1"];
                   $score2=$_POST["score2"];
                  
                   $result=($score1>$score2)? "The larger one is $score1" : "the larger one is $score2";
                   echo $result;
                   
                   
                }
            ?>
        </div>
    </div>

</body>
</html>