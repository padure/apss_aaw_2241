<?php
class Book
{
    public string $titlul;
    public string $autor;

    public function __construct(string $titlul, string $autor)
    {
        $this->titlul = $titlul;
        $this->autor = $autor;
    }

    public function getLabel(): string
    {
        return $this->autor . "-" . $this->titlul;
    }
}
class PrintedBook extends Book
{
    public int $pages;
    public function __construct(string $titlul, string $autor, int $pages)
    {
        parent::__construct($titlul, $autor);
        $this->pages = $pages;
    }
    public function getLabel(): string
    {
        return parent::getLabel() . "-" . $this->pages; 
    }
}
$book = new PrintedBook("Amintiri  din copilarie", "Ion Creanga", 38);
echo $book->getLabel();
?>