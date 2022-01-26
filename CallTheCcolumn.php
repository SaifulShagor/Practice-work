<?php
    $bookList = [
        [
            "Book Id:" =>121,
            "Book Name" => "Anna Karenina",
            "Author Name" => "Leo Tolstoy",
            "Price" => 85

        ],
        [
            "Book Id:" =>122,
            "Book Name" => "Madame Bovary",
            "Author Name" => "Gustave Flaubert",
            "Price" => 86

        ],
        [
            "Book Id:" =>123,
            "Book Name" => "War and Peace",
            "Author Name" => "Leo Tolstoy",
            "Price" => 87

        ],
        [
            "Book Id:" =>124,
            "Book Name" => "The Great Gatsby",
            "Author Name" => " F. Scott Fitzgerald",
            "Price" => 88

        ],
        [
            "Book Id:" =>125,
            "Book Name" => " Lolita",
            "Author Name" => " Vladimir Nabokov",
            "Price" => 89

        ],
        [
            "Book Id:" =>126,
            "Book Name" => "Middlemarch",
            "Author Name" => "George Eliot",
            "Price" => 90

        ],
    ];
    // // Array print....
    // echo "<pre>";
    // print_r($bookList);
    // echo "</pre>";


    // Array Column Calling....
    $call_column =array_column($bookList, "Book Name");
    foreach($call_column as $value){
        echo "$value <br>";
    };

?>
