<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>user input</title>
    </head>
    <body>
        
        <form action="user_input.php" method="get">
            name: <input type="text" name="name"><br>
            age: <input type="text" name="age">
            <input type="submit">

        </form>

        <br><br>

        <?php   
            echo $_GET["name"];
            echo "<br>";
            echo $_GET["age"];
        ?>

    </body>
</html>