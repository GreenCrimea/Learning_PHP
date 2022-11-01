<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>objects</title>
    </head>
    <body>

        <?php

            class Book{
                var $title;
                var $author;
                var $pages;
            }

            $book1 = new Book;
            $book1->title = "harry potter";
            $book1->author = "jk rowling";
            $book1->pages = 400;

            $book2 = new Book;
            $book2->title = "LOTR";
            $book2->author = "tolkien";
            $book2->pages = 500;

            echo "$book1->title <br>";
            echo "$book2->title <br>";


        ?>

    </body>
</html>