<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>associative arrays</title>
    </head>
    <body>

        <form action="associative_arrays.php" method="post">
            name: <input type="text" name="student">
            <input type="submit"><br><br><br>
        </form>

        <?php
            #associative arrays are key=>value pairs
            $grades = array("mike"=>"A+", "jack"=>"B-", "liz"=>"C");
            echo $grades[$_POST["student"]];
        ?>

    </body>
</html>