<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>calculator</title>
    </head>
    <body>

        <form action="calculator.php" method="get">
            <input type="number" name="num1"><br>
            <input type="number" name="num2"><br>
            <input type="submit"><br><br>
        </form>

        answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

    </body>
</html>