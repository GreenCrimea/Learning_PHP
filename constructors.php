<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>constructors</title>
    </head>
    <body>

        <?php
            class Book{
                var $title;
                var $author;
                var $pages;

                function __construct($t, $a, $p){
                    $this->title = $t;
                    $this->author = $a;
                    $this->pages = $p;
                }
            }

            $book1 = new Book("harry potter", "jk rowling", 400);

            echo $book1->title;
        ?>

    </body>
</html>