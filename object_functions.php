<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>object functions</title>
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

                function book_length(){
                    if ($this->pages > 500){
                        echo "long book";
                    } else {
                        echo "short book";
                    }
                }
            }

            $book1 = new Book("harry potter", "jk rowling", 600);

            echo $book1->book_length();
        ?>r

    </body>
</html>