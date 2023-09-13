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
        Grade Calculator
        </h1>
        <form method="post" action="">
            <input type="number" name="score1" placeholder="score 1" required><br>
            <input type="number" name="score2" placeholder="score 2" required><br>
            <input type="number" name="score3" placeholder="score 3" required><br>
            <input type="submit" value="test scores">
        </form>
        <div id="result">
            <?php 

                if ($_SERVER["REQUEST_METHOD"]== "POST") {
                   $score1=$_POST["score1"];
                   $score2=$_POST["score2"];
                   $score3=$_POST["score3"];

                   $totalScore=$score1+$score2+$score3;
                   echo "The total score is $totalScore.";
                   echo PHP_EOL;

                   $avaregeScore=$totalScore/3;
                   echo "The avarege score is $avaregeScore.";
                   echo PHP_EOL;

                   if ($avaregeScore>=80 || $avaregeScore<100) {
                        echo "The Grade is A+.\n";
                   } 
                   elseif($avaregeScore>=70 || $avaregeScore<80){
                    echo "The Grade is B.\n";
                   }
                   elseif($avaregeScore>=60 || $avaregeScore<70){
                    echo "The Grade is C.\n";
                   }
                   elseif($avaregeScore>=50 || $avaregeScore<60){
                    echo "The Grade is D.\n";
                   }     
                   else {
                    echo "Failed";
                   }
                }

            ?>
        </div>
    </div>

</body>
</html>