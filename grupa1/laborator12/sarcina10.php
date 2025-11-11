<?php

class Book{
    public string $title;
    public function __construct(string $title){
       $this->title = $title;
    }
}
class Library{
    public array $books = [];
    public function add($book){
       $this->books[] = $book;
    }
    public function all():array{
        return $this->books;
    }
}
$biblioteca = new Library();
$biblioteca->add(new Book("Amintiri din copilarie"));
$biblioteca->add(new Book("Invat php de la zero"));
var_dump($biblioteca->all());