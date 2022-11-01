<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>switch</title>
    </head>
    <body>

        <form action="switch.php" method="post">
            grade: <input type="text" name="grade"><br>         
            <input type="submit"><br><br><br>
        </form>

        <?php
            $grade = $_POST["grade"];
            switch($grade){
                case "A":
                    echo "you did fantastic";
                    break;
                case "B":
                    echo "you did well";
                    break;
                case "C":
                    echo "you did average";
                    break;
                case "D":
                    echo "you did poorly";
                    break;
                case "F":
                    echo "you failed";
                    break;
                default:
                    echo "invalid input";
            }
        ?>

    </body>
</html>