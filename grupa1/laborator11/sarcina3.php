<?php
class Book
{
    public string $title;
    public string $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
    public function getLabel(): string
    {
        return $this->author . "-" . $this->title;
    }
}
class Book2 extends Book
{
    public float $price;

    public function __construct(string $title, string $author, float $price)
    {
        parent::__construct($title, $author);
        $this->price = $price;
    }
    public function getLabel(): string
    {
        return parent::getLabel() . " - " . $this->price;
    }
}
$book1 = new Book("Book", "Dan");
$book2 = new Book("Carte", "Daniel");
$book3 = new Book2("Carte", "Daniel", 258);
echo $book1->getLabel();
echo "<br>";
echo $book2->getLabel();
echo "<br>";
echo $book3->getLabel();
?>