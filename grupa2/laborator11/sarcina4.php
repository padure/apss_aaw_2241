<?php
class Book{
    private string $title;
    private string $author;

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
    public function getTitle():string
    {
        return $this->title;
    }
    public function getAuthor():string
    {
        return $this->author;
    }
    public function getLabel():string {
        return $this->author . " - " . $this->title;
    }

    public function setTitle(string $title) {
        if(strlen($title) >= 2) {
            $this->title = $title;
        }
        else throw new InvalidArgumentException("Titlul trebuie sa fie cu minim 2 caractere.");
    }
}

$book1 = new Book("Titlu", "Autor");
$book1->setTitle("Nou titlu");
echo $book1->getTitle() . "<br>";

$book1->setTitle("");