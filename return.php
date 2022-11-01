<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>return</title>
    </head>
    <body>

        <?php
            function num_cubed($num){
                $answer = $num ** 3;
                return $answer;
            }

            $cubed = num_cubed(3);
            echo $cubed;
        ?>

    </body>
</html>