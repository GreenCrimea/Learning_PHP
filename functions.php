<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>functions</title>
    </head>
    <body>

        <?php
            function say_hi(){
                echo "hello user";
            }

            function say_something($name){
                echo "hello $name";
            }

            say_hi();
            echo "<br>";
            say_something("guy");
        ?>

    </body>
</html>