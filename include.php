<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>include</title>
    </head>
    <body>

        <?php 
            include "header.html";
            $title = "WEBPAGE";
            $author = "Tom";
            include "header.php";
        ?>

        <p>body</p>

        <?php include "footer.html" ?>

    </body>
</html>