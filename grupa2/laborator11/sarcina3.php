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
}
$carte1=new Book("Capra cu trei ezi", "Ion Creanga");
$carte2=new Book("Title", "Author");

echo $carte1->getLabel();
echo "<br>";
echo $carte2->getLabel();
?>