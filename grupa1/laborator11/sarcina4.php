<?php
class Book
{

    private string $title;
    private string $author;


    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function setTitle(string $title): void
    {
        if (strlen($title) > 2) {
            $this->title = $title;
        } else {
            echo "InvalidArgumentException";
        }
    }


}
$book1=new Book("Book", "Dan");
$book1->setTitle("Matematica");
var_dump($book1);
?>