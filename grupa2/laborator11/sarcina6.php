<?php

class Book{
    private string $title;
    private string $author;

    public static int $count = 0;

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
        self::$count++;
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
    public function getSlug():string{
      $slug=$this->title;
      $slug=iconv("UTF-8", "ASCII//TRANSLIT", $slug);
      $slug=preg_replace('/[^a-zA-Z0-9\s]/', "", $slug);
      $slug=preg_replace('/\s+/', "-", strtolower($slug));
      $slug=trim($slug, '-');
      return $slug;
    }
}

$book1 = new Book("Șoricelul fără Casă!", "Autor");
echo $book1->getSlug();
$book2 = new Book("Șoricelul fără Casă!", "Autor");
echo $book2->getSlug();
$book3 = new Book("Șoricelul fără Casă!", "Autor");
echo $book3->getSlug();

echo "<br>Carti: " . Book::$count;