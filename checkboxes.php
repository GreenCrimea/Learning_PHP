<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>checkboxes</title>
    </head>
    <body>

        <form action="checkboxes.php" method="post">
            apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            bananas: <input type="checkbox" name="fruits[]" value="bananas"><br>
            oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            strawberries: <input type="checkbox" name="fruits[]" value="strawberries"><br>
            pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit"><br><br><br>
        </form>

        <?php
            $fruits = $_POST["fruits"];
            echo $fruits[0];
        ?>

    </body>
</html>