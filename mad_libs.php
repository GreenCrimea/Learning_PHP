<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>mad libs</title>
    </head>
    <body>

        <form action="mad_libs.php" method="get">
            colour: <input type="text" name="colour"><br>
            plural noun: <input type="text" name="plural_noun"><br>
            celebrity: <input type="text" name="celebrity"><br>            
            <input type="submit"><br><br><br>
        </form>

        <?php
            $colour = $_GET["colour"];
            $plural_noun = $_GET["plural_noun"];
            $celebrity = $_GET["celebrity"];

            echo "roses are $colour <br>";
            echo "$plural_noun are blue <br>";
            echo "i love $celebrity";
        ?>

    </body>
</html>