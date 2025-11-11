<?php
 class Book{
    public string $title;
    public string $author;
}
$cartea1 = new Book();
$cartea2 = new Book();

$cartea1->title = "Cartea 1";
$cartea1->author = "Author 1";
$cartea2->title = "Cartea 2";
$cartea2->author = "Author 2";

echo $cartea1->title . ' ' . $cartea1->author;
echo "<br>";
echo $cartea2->title . ' ' . $cartea2->author;
?>