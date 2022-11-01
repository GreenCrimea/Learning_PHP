<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>post</title>
    </head>
    <body>

        <form action="post.php" method="post">
            name: <input type="text" name="name"><br>         
            <input type="submit"><br><br><br>
        </form>

        <?php
            echo $_POST["name"];
        ?>

    </body>
</html>