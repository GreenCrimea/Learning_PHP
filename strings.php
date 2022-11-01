<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>strings</title>
    </head>
    <body>

        <?php

            $string = "text";
            echo $string;
            echo "<br>";
            
            #string functions
            echo strtolower($string);
            echo "<br>";
            echo strtoupper($string);
            echo "<br>";
            echo strlen($echo);
            echo "<br>";
            echo $string[2];
            echo "<br>";
            $string[1] = "E";
            echo $string;
            echo "<br>";
            $string = "text words";
            echo $string;
            echo "<br>";
            echo str_replace("words", "more text", $string);
            echo "<br>";
            echo substr($string, 5, 4);

        ?>

    </body>
</html>