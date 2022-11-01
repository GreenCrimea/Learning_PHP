<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>arrays</title>
    </head>
    <body>

        <?php
            $names = array("matthew", "mark", "luke", "john");
            echo $names[0];
            $names[1] = 400;
            echo("<br> $names[1] <br>");
            echo count($names);
        ?>

    </body>
</html>