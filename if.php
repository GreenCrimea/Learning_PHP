<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>if</title>
    </head>
    <body>

        <?php
            $is_male = false;
            $is_tall = true;

            if ($is_male){
                echo "you are male <br>";
            } else {
                echo "you are not male <br>";
            }

            if ($is_male && $is_tall){
                echo "you are tall and male <br>";
            } else if ($is_male && !$is_tall){
                echo "you are a short male <br>";
            } else if (!$is_male && $is_tall) {
                echo "you arent male but are tall <br>";
            } else {
                echo "you arent male or tall <br>";
            }

            echo "<br><br><br>";

            function get_max ($num1, $num2){
                if ($num1 > $num2){
                    return $num1;
                } else {
                    return $num2;
                }
            }

            echo get_max(10, 50);
        ?>

    </body>
</html>