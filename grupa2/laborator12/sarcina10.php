<?php

class Book {
    public string $title;
    public string $author;

    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function get_label():string {
        return $this->author . ' - ' . $this->title;
    }
}

class Library {
    private array $books = [];
    public function add(Book $book) {
        $this->books[] = $book;
    }

    public function all():array {
        return $this->books;
    }
}

$biblioteca = new Library();

$biblioteca->add(new Book("Matematica cl. XII", "I. Achiri"));
$biblioteca->add(new Book("Limba Romana cl. XII", "I. Achiri"));
$biblioteca->add(new Book("Informatica cl. XII", "I. Achiri"));

var_dump($biblioteca->all());