<?php
class Book
{
    public string $title;
    public string $author;
}
$book1 = new Book();
$book1->title = "Miorita";
$book1->author = "Ion Creanga";
$book2 = new Book();
$book2->title = "Baltagul";
$book2->author = "Mihai Eminescu";
echo $book1->title . " " . $book1->author;
echo "<br>";
echo $book2->title . " " . $book2->author;
?>