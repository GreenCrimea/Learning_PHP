<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>new calculator</title>
    </head>
    <body>
        
        <form action="new_calculator.php" method="post">
            first num: <input type="number" name="num1"><br>
            second num: <input type="number" name="num2"><br>
            OP: <input type="text" name="op"><br>
            <input type="submit">

        </form>
            
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if ($op == "+"){
                echo $num1 + $num2;
            } else if ($op == "-"){
                echo $num1 - $num2;
            } else if ($op == "*"){
                echo $num1 * $num2;
            } else if ($op == "/"){
                echo $num1 / $num2;
            } else {
                echo "invalid operator";
            }
        ?>

    </body>
</html>