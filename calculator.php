<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include 'style.css' ?>
    </style>

</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Calculetor</h1><br>
            <input type="number" name="num1" placeholder="first number" required><br>
            <input type="number" name="num2" placeholder="second number" required><br>
            <select name="oparetor" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="×">×</option>
                <option value="/">/</option>
            </select><br>
            <input type="submit" value="submit"><br>

            <div id="result">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $oparetor = $_POST['oparetor'];
                
                    switch ($oparetor) {
                        case '+':
                            $result = $num1 + $num2;
                            echo "Result : $result";
                            break;
                        case '-':
                            $result = $num1 - $num2;
                            echo "Result : $result";
                            break;
                        case '×':
                            $result = $num1 * $num2;
                            echo "Result : $result";
                            break;
                        case '/':
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                                echo "Result : $result";
                            } else {
                                echo 'Invalid';
                            }
                    }
                }
                
                ?>
            </div>
        </form>

    </div>
</body>

</html>
