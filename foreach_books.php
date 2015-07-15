<?php 
    
    $books = array(
        'The Hobbit' => array(
            'Published' => 1937,
            'Author' => 'J. R. R. Tolkien',
            'Pages' => 310
        ),
        'Game of Thrones' => array(
            'Published' => 1996,
            'Author' => 'George R. R. Martin',
            'Pages' => 835
        ),
        'The Catcher in the Rye' => array(
            'Published' => 1951,
            'Author' => 'J. D. Salinger',
            'Pages' => 220
        ),
        'A Tale of Two Cities' => array(
            'Published' => 1859,
            'Author' => 'Charles Dickens',
            'Pages' => 544
        )
    );

    foreach ($books as $title => $book) {
        echo "Title: {$title} " . PHP_EOL;
        foreach ($book as $detail => $value) {
            echo "{$detail}: {$value}" . PHP_EOL;
        }
        echo "=========================" . PHP_EOL;
    }

    echo(PHP_EOL);
    echo(PHP_EOL);


    foreach ($books as $title => $book) {
        if ($book['Published'] > 1950) {    
            echo "Title: {$title} " . PHP_EOL;
            foreach ($book as $detail => $value) {
                echo "{$detail}: {$value}" . PHP_EOL;
            }
        echo "=========================" . PHP_EOL;
        }
    }
?>