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
        <form action="" method="post">
            <div class="fieldset">
                <h1> Temperature Converter</h1>
                <input type="number" name="Celsius" placeholder="Celsius" id="" required> <br>
                <select name="option" id="">
                    <option value="Celsius to Fahrenheit">Celsius to Fahrenheit</option>
                    <option value="Fahrenheit to Celsius">Fahrenheit to Celsius</option>
                </select><br>
                <button type="submit">Convart</button><br>

                <div id="result">
                    <h2>
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $cel = $_POST['Celsius'];
                            $option = $_POST['option'];
                            $celToFer = $_POST['Celsius to Fahrenheit'];
                            $farToCel = $_POST['Fahrenheit to Celsius'];
                        
                            echo $option == 'Celsius to Fahrenheit' ?  (($cel * 9) / 5 + 32 . '°F') : (($cel - 32) * 5) / 9 . '°C';
                        }
                        ?>
                    </h2>

                </div>
            </div>
        </form>

    </div>
</body>

</html>
