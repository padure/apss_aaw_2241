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
    
}
$carte1=new Book("Capra cu trei ezi", "Ion Creanga");
echo $carte1->getTitle();
echo "<br>";
echo $carte1->getAuthor();

?>